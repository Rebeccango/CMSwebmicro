<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\StoreController;
use App\User;
use Auth;
use DB;
use Hash;
use Illuminate\Support\Str;
use Input;
use Mail;
use Redirect;
use Request;
use Route;
use Session;
use Stripe\Stripe;
use Validator;

class AccountController extends Controller
{
    protected $shipping;

    public function __construct()
    {
        $this->shipping = new ShippingController();
        \Stripe\Stripe::setApiKey(env('STRIPE_API_KEY'));
    }

    public function show_login()
    {
        $links = session('links'); // getting an array from the session
        $captcha = false;

        if (Auth::check()) {
            if (!empty($links)) {
                if (count($links) > 1) {
                    return redirect()->route($links[1]);
                }
                // }else if(count($links) == 1){
                //   return redirect()->route($links[0]);
            }
            return redirect()->route('home');
        }

        if (DB::table('login_attempts')
            ->where('ip', '=', $_SERVER['REMOTE_ADDR'])
            ->whereDay('created_at', '=', date('d'))
            ->whereMonth('created_at', '=', date('m'))
            ->whereYear('created_at', '=', date('Y'))
            ->count() >= 1) {
            $captcha = true;
        }

        return view('pages.account.login')->with(['captcha' => $captcha, 'calcCart' => (new StoreController)->calcCart()]);
    }

    public function get_order($id)
    {
        if (Auth::check()) {
            $order = DB::table('orders')
                ->where('user_id', '=', Auth::user()->id)
                ->where('id', '=', $id)
                ->first();

            if ($order !== null) {
                $card = \Stripe\Charge::retrieve($order->stripe_id);

                // $shipmentDetails = Shippo_Transaction::retrieve($order->transaction_id);

                return view('pages.account.order')->with(['order' => $order, 'shipmentDetails' => $shipmentDetails, 'card' => $card, 'calcCart' => (new StoreController)->calcCart()]);
            }

            return redirect()->back();
        }
        return view('pages.account.login')->with('captcha', true);
    }

    public function get_invoice($id)
    {
        if (Auth::check()) {
            $order = DB::table('orders')
                ->where('user_id', '=', Auth::user()->id)
                ->where('order_id', '=', $id)
                ->first();

            if ($order) {
                // $shipmentDetails = Shippo_Transaction::retrieve($order->transaction_id);
                $cart = $order->products;
                $cart_items = explode(",", $cart);
                $card = \Stripe\Charge::retrieve($order->stripe_id);

                return view('pages.account.invoice')->with(['order' => $order, 'card' => $card, 'cart_items' => $cart_items, 'calcCart' => (new StoreController)->calcCart()]);
            }
            return redirect()->back();
        }
        return view('pages.account.login')->with(['captcha' => true, 'calcCart' => (new StoreController)->calcCart()]);
    }

    public function get_account_page()
    {
        if (Auth::check()) {
            return view('pages.account.profile')->with('tab', Route::currentRouteName());
        }

        return redirect()->route('login')->with(['calcCart' => (new StoreController)->calcCart()]);
    }

    public function show_register()
    {
        return view('pages.account.register')->with(['calcCart' => (new StoreController)->calcCart()]);
    }

    public function show_register_success(Request $request)
    {

        if (Session::has('email_confirm')) {
            $email_confirm = Session::get('email_confirm');
            Session::reflash();
            Session::put('redirect', route('register-success'));
            return view('pages.account.registration-complete')->with('email_confirm', $email_confirm);
        } else {
            return redirect()->route('home');
        }
    }

    public function do_register(Request $request)
    {
        $rules = array(
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:3|confirmed',
            'password_confirmation' => 'required|min:3',
            'g-recaptcha-response' => 'required|captcha',
        );

        $messages = [
            'firstname.required' => 'Your first name is required',
            'firstname.alpha' => 'Your first name is required',
            'lastname.required' => 'Your first name is required',
            'lastname.alpha' => 'Your first name is required',
            'password.required' => 'You must provide a password',
            'password.min' => 'Your password must be atleast 3 characters long',
            'password.confirmed' => 'You must retype & confirm your password',
            'password_confirmation.required' => 'You must confirm your password',
            'password_confirmation.min' => 'Your password must be atleast 3 characters long',
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
            'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
            'email.required' => 'Email address is required.',
            'email.unique' => 'That email is already taken.',
        ];

        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            $password = Hash::make(Input::get('password'));
            $email = Input::get('email');
            $updates = Input::get('updates') == "on" ? 1 : 0;
            $firstname = Input::get('firstname');
            $lastname = Input::get('lastname');
            $activate_code = "";
            do {
                $activate_code = Str::random(60);
                if (!DB::table('users')->where('activation_code', '=', $activate_code)->exists()) {
                    break;
                }
            } while (true);

            $role = DB::table("roles")->where('name', 'user')->pluck('id');

            $userID = DB::table('users')->insertGetId([
                'email' => $email,
                'password' => $password,
                'name' => $firstname . " " . $lastname,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'updates' => $updates,
                'activation_code' => $activate_code,
                'role_id' => isset($role) && !empty($role) ? $role[0] : 0,
            ]);

            $user = DB::table('users')->where('id', '=', $userID)->first();

            $user->activation_url = url('/account/activate/' . $user->activation_code);
            Mail::send('emails.activation', ['user' => $user], function ($m) use ($user) {
                $m->from('No-Reply@cadmicro.com', 'CAD MicroSolutions Inc.');
                $m->to($user->email, $user->name)->subject('Please verify your CAD MicroSolutions account');
            });
            Session::flash('email_confirm', $email);
            return redirect()->route('register-success');
        }
    }

    public function do_login()
    {
        // validate the info, create rules for the inputs
        $rules = array(
            'email' => 'required|email',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        );

        $messages = [
            'email.required' => 'Your email is required',
            'email.email' => 'Your must provide a valid email address',
            'password.required' => 'You must provide a password',
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
            'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
        ];

        Session::reflash();
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules, $messages);

        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            $links = Session::has('links') ? Session::get('links') : array();
            $currentLink = Route::getCurrentRoute()->getName(); // getting current URL like 'category/books/'
            array_unshift($links, $currentLink); // putting it in the beginning of an array
            Session::flash('links', $links);

            // create our user data for the authentication
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password'),
                'activated' => 1,
            );

            if (Input::get('remember', true)) {
                if (Auth::attempt($userdata, str_random(60))) {
                    Auth::user();
                    DB::table('users')->where('email', '=', Input::get('email'))->update(['attempts' => 0]);
                    DB::table('login_attempts')->where('user_id', '=', Auth::user()->id)->delete();

                    return Redirect::back(); // redirect the user to the login screen
                } else {
                    $active = DB::table('users')->where('email', '=', Input::get('email'))->first();
                    // validation not successful, send back to form
                    if (!empty($active) && $active->activated != 1) {
                        Session::flash("error_type", "info");
                        Session::flash("login_error", "Your account is not active, please make sure to check your email for a confirmation email. If you cannot find the confirmation email, <a href=" . route('resendActivationEmail', array('email' => $active->email)) . ">click here</a> to resend.");
                    } else {
                        Session::flash("error_type", "danger");
                        Session::flash("login_error", "That email or password is incorrect!");
                    }
                    DB::table('users')->where('email', '=', Input::get('email'))->increment('attempts', 1);

                    $user = DB::table('users')->where('email', '=', Input::get('email'))->first();
                    if (!empty($user)) {
                        DB::table('login_attempts')->insert([
                            'ip' => $_SERVER['REMOTE_ADDR'],
                            'user_id' => $user->id,
                        ]);
                    }
                    return Redirect::back()
                        ->withInput(Input::except('password'));
                }
            } else {
                // attempt to do the login
                if (Auth::attempt($userdata)) {
                    Auth::user();
                    DB::table('users')->where('email', '=', Input::get('email'))->update(['attempts' => 0]);
                    DB::table('login_attempts')->where('user_id', '=', Auth::user()->id)->delete();

                    return Redirect::back(); // redirect the user to the login screen
                } else {
                    // validation not successful, send back to form
                    $active = DB::table('users')->where('email', '=', Input::get('email'))->first();

                    if ($active) {
                        if ($active->activated != 1) {
                            Session::flash("error_type", "info");
                            Session::flash("login_error", "Your account is not active, please make sure to check your email for a confirmation email. If you cannot find the confirmation email, <a href=" . route('resendActivationEmail', array('email' => $active->email)) . ">click here</a> to resend.");
                        }
                    } else {
                        Session::flash("error_type", "danger");
                        Session::flash("login_error", "That email or password is incorrect!");
                    }

                    DB::table('users')->where('email', '=', Input::get('email'))->increment('attempts', 1);
                    DB::table('login_attempts')->insert([
                        'ip' => $_SERVER['REMOTE_ADDR'],
                        'user_id' => DB::table('users')->where('email', '=', Input::get('email'))->pluck('id')[0],
                    ]);

                    return Redirect::back()
                        ->withInput(Input::except('password'));
                }
            }
        }
    }

    public function resendActivationEmail($email)
    {
        $user = User::where('email', $email)
            ->first();
        if (!empty($user)) {
            //$user->email = "d.balevski@gmail.com";
            if ($user->activated != 1) {
                $user->activation_url = url('/account/activate/' . $user->activation_code);

                Mail::send('emails.activation', ['user' => $user], function ($m) use ($user) {
                    $m->from('No-Reply@cadmicro.com', 'CAD MicroSolutions Inc.');
                    $m->to($user->email, $user->name)->subject('Please verify your CAD MicroSolutions account');
                });

                Session::flash("error_type", "success");
                Session::flash("login_error", "Activation email has been resent successfully to: <strong>" . $email . "</strong><br />Please make sure to check your spam folder!");
            } else {
                Session::flash("error_type", "success");
                Session::flash("login_error", "Your account has already been activated!");
            }
        } else {
            Session::flash("error_type", "danger");
            Session::flash("login_error", "Unable to send activation email to: <strong>" . $email . "</strong><br />Contact an administrator if you think this is a mistake.");
        }
        Session::flash("email_confirm", $email);
        if (Session::has('redirect')) {
            return Redirect::to(Session::get('redirect'));
        } else {
            return Redirect::to('/account/login');
        }
    }

    public function activateAccount($verificationCode)
    {
        $user = DB::table('users')
            ->where('activation_code', $verificationCode)->first();

        if ($user) {

            DB::table('users')
                ->where('activation_code', $verificationCode)->update([
                'activated' => 1,
                'activation_date' => date("Y-m-d H:i:s", time()),
                'activation_code' => "",
            ]);

            Session::flash("error_type", "success");
            Session::flash("login_error", "Your account has been successfully activated! Please login with your email and password now.");
        }

        Session::flash("error_type", "info");
        Session::flash("login_error", "Your account has already been activated!");
        return Redirect::to('/account/login');
    }

    public function show_forgotPassword()
    {
        return view('pages.account.forgotpassword')->with(['calcCart' => (new StoreController)->calcCart()]);
    }

    public function do_forgotPassword()
    {
        $email = Input::get('email');

        // validate the info, create rules for the inputs
        $rules = array(
            'email' => 'required|email',
            'g-recaptcha-response' => 'required|captcha',
        );

        $messages = [
            'email.required' => 'Your email address is required!',
            'email.email' => 'The email address must be a valid email format!',
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
            'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
        ];

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules, $messages);

        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::all()); // send back the input (not the password) so that we can repopulate the form
        }

        $user = DB::table('users')
            ->where('email', '=', $email)
            ->first();

        if ($user) {
            $token = "";
            do {
                $token = Str::random(60);
                if (!DB::table('password_resets')->where('token', '=', $token)->exists()) {
                    break;
                }
            } while (true);

            $forgot = [
                'email' => $email,
                'token' => $token,
            ];

            DB::table('password_resets')->insert($forgot);

            Mail::send('emails.forgotPassword', ['user' => $user, 'forgot' => $forgot], function ($m) use ($user) {
                $m->from('No-Reply@cadmicro.com', 'CAD MicroSolutions Inc.');
                $m->to($user->email, $user->name)->subject('Forgot password request from CAD MicroSolutions account');
            });
        }

        Session::flash("error_type", "success");
        Session::flash("form_error", "Please check your email for instructions to reset your password.");

        return Redirect::to('/account/forgotPassword')->withInput(Input::all());
    }

    public function do_logout()
    {
        $links = Session::has('links') ? Session::get('links') : array();
        $currentLink = Route::getCurrentRoute()->getName(); // getting current URL like 'category/books/'
        array_unshift($links, $currentLink); // putting it in the beginning of an array
        Session::flash('links', $links);
        Auth::logout(); // log the user out of our application
        Session::flash("success", "success");
        Session::flash("message", "Successfuly logged out");
        return Redirect::back(); // redirect the user to the login screen
    }

    public function show_resetPassword($token)
    {
        if ($token) {
            $exists = DB::table('password_resets')->where('token', '=', $token)->where('used', '=', 0)->first();
            if ($exists) {
                return view('pages.account.changePassword')->with('token', $token);
            }
        }
        Session::flash("error_type", "danger");
        Session::flash("form_error", "The reset password token is either not valid or has expired. Please request a new <a href=" . route("show_forgotPassword") . ">password reset</a> token.");
        return view('pages.account.changePassword')->with(['token' => $token, 'hideForm' => true]);
    }

    public function do_reset_password()
    {

        $token = Input::get('reset_token');
        $password = Hash::make(Input::get('new_password'));
        $rules = array(
            'new_password' => 'required|min:5',
            'password_confirmation' => 'required|min:5',
            'reset_token' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        } else {
            $reset = DB::table("password_resets")->where("token", '=', $token)->where('used', '=', '0');

            if ($reset) {
                $email = DB::table("password_resets")->where("token", '=', $token)->pluck('email');

                if ($email) {
                    DB::table('users')->where('email', '=', $email)->update(['password' => $password, 'activated' => '1']);

                    Session::flash("error_type", "success");
                    Session::flash("login_error", "Your password has been successfully updated! Please log in with your new password.");

                    DB::table('password_resets')->where('email', '=', $email)->update(['used' => 1]);

                    return Redirect::to(route('login'))->withInput(['email' => $email[0]]);
                }
            } else {
                return Redirect::back()->withErrors(['The password reset token provided is invalid or has been used']);
            }
        }
    }

    public function do_change_password()
    {
        if (Auth::check()) {
            $rules = array(
                'password' => 'required|min:3',
                'new_password' => 'required|min:3|confirmed',
                'new_password_confirmation' => 'required|min:3',
            );

            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator);
            } else {
                if (Hash::check(Input::get('password'), Auth::user()->password)) {
                    Auth::user()->password = Hash::make(Request::input('new_password'));
                    Auth::user()->save();
                    Session::flash("error_type", "success");
                    Session::flash("form_error", "Your password has been successfully updated!");
                } else {
                    Session::flash("error_type", "danger");
                    Session::flash("form_error", "The current password entered is incorrect!");
                }
                return Redirect::back();
            }
        }
        Session::flash("error_type", "danger");
        Session::flash("form_error", "There was a problem updating your password, please check you typed in your passwords correctly.");
        return Redirect::back();
    }

    public function do_update()
    {

        if (Auth::check()) {
            Auth::user()->updates = Input::get('updates');
            Auth::user()->save();
            Session::flash("error_type", "success");
            Session::flash("form_error", "Updated your email notification preferences.");
        }
        return Redirect::back();

    }
}

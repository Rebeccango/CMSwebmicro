<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
  public function create()
  {
     return view('pages.contact.contact');
  }

  public function store(ContactFormRequest $request)
  {
    \Mail::send('emails.email-master',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('No-Reply@cadmicro.com');
        $message->to('dayanb@cadmicro.com', 'Admin')->subject('TODOParrot Feedback');
    });

    return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
  }
}

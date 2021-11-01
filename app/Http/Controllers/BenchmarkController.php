<?php

namespace App\Http\Controllers;

use App\Mail\NewBenchMarkRequestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use PDF;

class BenchmarkController extends Controller
{
    public function benchmark_request_index()
    {
        return view('pages.benchmark-request');
    }

    public function benchmark_request_create(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|captcha',

            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|string|max:255',
            'phone' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',

            'bm_application_1' => 'required|string|max:500',
            'bm_application_2' => 'required|string|max:255',
            'bm_application_3' => 'required|string|max:500',
            'bm_application_4' => 'required|string|max:255',
            'bm_application_5' => 'required|string|max:255',
            'bm_application_6' => 'required|string|max:255',
            'bm_application_7' => 'required|string|max:255',

            'bm_businessoutcome_1' => 'string|max:500',
            'bm_businessoutcome_2' => 'string|max:500',
            'bm_businessoutcome_3' => 'string|max:500',
            'bm_businessoutcome_4' => 'string|max:500',
            'bm_businessoutcome_5' => 'string|max:500',

            'bm_capabilities_1' => 'required|string|max:500',
            'bm_capabilities_2' => 'required|string|max:500',
            'bm_capabilities_3' => 'required|string|max:500',
            'bm_capabilities_4' => 'required|string|max:500',

            'bm_value_1' => 'string|max:255',
            'bm_value_2' => 'string|max:255',
            'bm_value_3' => 'string|max:255',
            'bm_value_4' => 'string|max:255',
            'bm_value_1' => 'string|max:255',
            'bm_value_5' => 'string|max:255',
            'bm_value_6' => 'string|max:255',

            'file' => 'required|file|mimetypes:application/x-rar-compressed,application/octet-stream,application/zip,application/gzip,application/x-zip-compressed,multipart/x-zip|max:1200000',
        ], [
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
            'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
        ]);

        foreach ($request->except(['_token', 'file', 'g-recaptcha-response']) as $key => $value) {
            $request[$key] = strip_tags($value);
        }

        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors(), 'data' => $request->except(['_token', 'file', 'g-recaptcha-response'])]);

            // return redirect()
            //     ->back()
            //     ->withErrors($validator)
            //     ->withInput();
        }

        $date = date_format(now(), "Y/m/d H:i:s");

        try {
            $folder_name = $request->firstname . "-" . $request->lastname . "-" . $date;
            $folder_id = $this->create_folder([config('benchmark_gdrive.folder_id')], $folder_name);
            $folder_url = 'https://drive.google.com/drive/u/0/folders/' . $folder_id;

            $pdf = PDF::loadView('emails.benchmarkrequest', [
                'data' => $request->except(['_token', 'file', 'g-recaptcha-response']),
                'folder_url' => $folder_url,
                'folder_name' => $folder_name,
            ])->output();

            Storage::disk('google')->put($folder_id . '/request_responses.pdf', $pdf);

            $request->file->storeAs($folder_id, $request->file->getClientOriginalName(), 'google');

            Mail::send(new NewBenchMarkRequestNotification($request->except(['_token', 'file', 'g-recaptcha-response']), $folder_url, $folder_name));

        } catch (\Exception $e) {
            if(isset($folder_url)){
                Storage::disk('google')->deleteDirectory($folder_url);
            }
            return response()->json(['success' => false, 'errors' => $e->getMessage()]);
        }

        return response()->json(['success' => true]);
        // return redirect()->back()->withErrors(['name' => $result]);
    }

    protected function create_folder($parents, $folder_name)
    {
        $this->client = new \Google_Client();
        $this->client->setClientId(config('benchmark_gdrive.client_id'));
        $this->client->setClientSecret(config('benchmark_gdrive.secret_id'));
        $this->client->refreshToken(config('benchmark_gdrive.refresh_token'));

        $this->service = new \Google_Service_Drive($this->client);

        $fileMetadata = new \Google_Service_Drive_DriveFile([
            'parents' => $parents,
            'name' => $folder_name,
            'mimeType' => 'application/vnd.google-apps.folder',
        ]);

        $folder = $this->service->files->create($fileMetadata, ['fields' => 'id']);

        return $folder->id;
    }
}

<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CRMController extends Controller
{
    public function __construct()
    {

    }

    public function show()
    {

    }

    public function post(Request $request)
    {
        // return json_encode(json_decode($request->input('formdata'),true));
        $data = $request->input('formdata');

        if (isset($data) && !empty($data)) {
            Mail::send(['html' => 'emails.formSubmit'], ['data' => $data],
                function ($m) use ($data) {
                    $m->from('No-Reply@cadmicro.com', 'CAD MicroSolutions Inc.');
                    $m->to('sarahm@cadmicro.com', 'Sarah Mannen')->subject('[FORM SUBMITTED] ' . $data[0]['value']);
                });
            return $data[0]['label'];
        } else {
            return response()->json(['error' => 'Error sending email response', 'data' => $data]);
        }
    }

    public function po_request(Request $request)
    {
        $data = $request;

        if (isset($data) && !empty($data)) {
            Mail::send(['html' => 'emails.poRequest'], ['data' => $data],
                function ($m) use ($data) {
                    $m->from('No-Reply@cadmicro.com', 'CAD MicroSolutions Inc.');
                    $m->to('dayanb@cadmicro.com', 'Dayan Balevski')->subject('[PO REQUEST] test');
                    // $m->to($data->po_form_data[0]['value'], $data->po_form_data[1]['value'])->subject('[PO REQUEST] ' . $data->po_form_data[2]['value']);

                });
            return response('success', 200);
        } else {
            return response()->json(['error' => 'Error sending email response', 'data' => $data]);
        }

        return Response::json($request, 200, array('Content-Type' => 'application/javascript'));

    }
}

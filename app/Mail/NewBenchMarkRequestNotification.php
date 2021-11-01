<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewBenchMarkRequestNotification extends Mailable
{
    use SerializesModels;

    public $data;
    public $folder_url;
    public $folder_name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $folder_url = "", $folder_name = "Folder Name")
    {
        $this->data = $data;
        $this->folder_url = $folder_url;
        $this->folder_name = $folder_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('No-Reply@cadmicro.com', 'CAD MicroSolutions Inc.')
            // ->attachData($pdf->output(), 'request.pdf')
            ->to(['hsingh@cadmicro.com', 'jroberts@cadmicro.com'])
            ->subject('New Benchmark Request from ' . $this->data['firstname'] . ' ' . $this->data['lastname'])
            ->view('emails.benchmarkrequest')
            ->with([
                'data' => $this->data,
                'folder_url' => $this->folder_url,
                'folder_name' => $this->folder_name,
            ]);
    }
}

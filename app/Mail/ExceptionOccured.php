<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ExceptionOccured extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The body of the message.
     *
     * @var string
     */
    public $content, $url, $inputs, $email;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content, $url, $inputs, $email)
    {
        $this->content = $content;
        $this->url = $url;
        $this->inputs = $inputs;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('No-Reply@cadmicro.com', 'CAD MicroSolutions Inc.')
                    ->view('emails.exception')
                    ->with([
                        'content'=> $this->content,
                        'url'=>$this->url,
                        'input'=>$this->inputs,
                        'email'=>$this->email
                    ]);
    }
}
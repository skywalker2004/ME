<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from('kelvinkiprono659@gmail.com')
                    ->subject('New Contact Form Submission')
                    ->view('emails.contact')
                    ->with('data', $this->data);
    }
}

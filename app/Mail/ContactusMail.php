<?php

namespace App\Mail;

use App\Models\Contactus;
use App\Models\Manager;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactusMail extends Mailable
{
    use Queueable, SerializesModels;

    public $manager;

    public function __construct(Contactus $manager)
    {
        $this->manager = $manager;
    }

    public function build()
    {
        return $this->subject('Contact Us - Mail')
                ->view('email.contactus');
    }
}

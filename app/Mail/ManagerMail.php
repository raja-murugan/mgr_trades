<?php

namespace App\Mail;

use App\Models\Manager;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ManagerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $manager;

    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }

    public function build()
    {
        return $this->subject('Invite Mail From MGR Trades to Access the Zwork Technology Product Management Software')
                ->view('email.invite');
    }
}

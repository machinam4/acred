<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;


class SubscriberMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailerInfo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $mailerInfo)
    {
        $this->mailerInfo = $mailerInfo; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->mailerInfo->subject)->view('emails.subscriberer')->with(['mailerInfo' => $this->mailerInfo]);
    }
}

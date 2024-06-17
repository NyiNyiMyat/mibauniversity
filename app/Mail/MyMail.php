<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyMail extends Mailable
{
    use Queueable, SerializesModels;

     

    public $details;
    public $card;

  

    /**

     * Create a new message instance.

     *

     * @return void

     */

    public function __construct($details,$card)

    {

        $this->details = $details;
        $this->card=$card;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from PPBS')

                    ->view('backend.mailing.email')
                    ->attach($this->card);
            
                   
    }
}

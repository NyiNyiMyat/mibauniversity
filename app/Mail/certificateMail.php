<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class certificateMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    public $send1;
    public $send2;
    public $send3;
    public $send4;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details,$send1,$send2,$send3,$send4)
    {
        $this->details = $details;
        $this->send1=$send1;
        $this->send2=$send2;
        $this->send3=$send3;
        $this->send4=$send4;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from PPBS')
            ->view('backend.mailtemplates.certificateonline-mail')
            ->attach($this->send1)
            ->attach($this->send2)
            ->attach($this->send3)
            ->attach($this->send4);
            return $this->view('view.name');
    }
}

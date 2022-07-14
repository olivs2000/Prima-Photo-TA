<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->subject('Detail Pemesanan dari Prima Photo Studio')->view('emails.TestMail');
        // return $this->markdown('TestMail');

        return $this->from('oliviachristina2000@gmail.com')
                    ->subject('Detail Pemesanan dari Prima Photo Studio')
                    ->view('emails.TestMail');
    }
}

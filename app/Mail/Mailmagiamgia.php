<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mailmagiamgia extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from('kq909981@gmail.com')
        //    ->view('mail.mailmagiamgia')
        //    ->subject('Liên hệ HRT Books');
        return $this->from('tranvanquyenx4gmail.com')
           ->view('mail.mailmagiamgia')
           ->subject('Liên hệ HRT Books');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
Use App\Models\Peserta;

class KonfirmasiEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data, $subject, $pesan, $button, $url;

    public function __construct(Peserta $data, $subject, $pesan, $button, $url)
    {
        $this->data = $data;
        $this->subject = $subject;
        $this->pesan = $pesan;
        $this->button = $button;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.konfirmasi');
    }
}

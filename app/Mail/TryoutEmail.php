<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
Use App\Models\Peserta;
Use App\Models\Email;

class TryoutEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $nama_peserta;
    public $subject;
    public $username_to;
    public $password_to;
    public $pesan;
    public $nama_acara;
    public $tanggal;
    public $jam;
    public $lokasi;
    public $meeting_id;
    public $meeting_passcode;
    public $link_zoom;
    public $link_to;

    public function __construct(Peserta $data, Email $email)
    {
        $this->nama_peserta = $data->name;
        $this->email= $email->email;
        $this->subject = $email->subject;
        $this->username_to = $email->username_to;
        $this->password_to = $email->password_to;
        $this->pesan = $email->pesan;
        $this->nama_acara = $email->nama_acara;
        $this->tanggal = $email->tanggal;
        $this->jam = $email->jam;
        $this->lokasi= $email->lokasi;
        $this->meeting_id = $email->meeting_id;
        $this->meeting_passcode = $email->meeting_passcode;
        $this->link_zoom = $email->link_zoom;
        $this->link_to = $email->link_to;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.tryout')->subject($this->subject);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
Use App\Models\Peserta;
Use App\Models\Email;

class TalentsmappingEMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $nama_peserta;
    public $subject;
    public $username_tm;
    public $password_tm;
    public $pesan;
    public $nama_acara;
    public $tanggal;
    public $jam;
    public $lokasi;
    public $meeting_id;
    public $meeting_passcode;
    public $link_zoom;
    public $link_tm;

    public function __construct(Peserta $data, Email $email)
    {
        $this->nama_peserta = $data->name;
        $this->email= $email->email;
        $this->subject = $email->subject;
        $this->username_tm = $email->username_tm;
        $this->password_tm = $email->password_tm;
        $this->pesan = $email->pesan;
        $this->nama_acara = $email->nama_acara;
        $this->tanggal = $email->tanggal;
        $this->jam = $email->jam;
        $this->lokasi= $email->lokasi;
        $this->meeting_id = $email->meeting_id;
        $this->meeting_passcode = $email->meeting_passcode;
        $this->link_zoom = $email->link_zoom;
        $this->link_tm = $email->link_tm;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.talentsmapping')->subject($this->subject);
    }
}

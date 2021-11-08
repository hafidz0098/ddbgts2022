<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Peserta;
use App\Models\Email;
use App\Mail\WebinarEmail;

class EmailController extends Controller
{
    public function viewWebinar(){
        return view('dashboard.webinar.index', [
            'pesertas' => Peserta::where('status_id', '2')->where('send_webinar', 0)->get()
        ]);
    }

    public function kirimWebinar(Request $request){
        $email = new Email;
        $peserta = Peserta::where('email', $request->input('email'))->first();

        $validatedData = $request->validate([
            'email' => 'required',
            'subject' => 'required',
            'pesan' => 'required',
            'nama_acara' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'meeting_id' => 'required',
            'meeting_passcode' => 'required',
            'link_zoom' => 'required'
        ]);

        $email->email = $request->input('email');
        $email->subject = $request->input('subject');
        $email->pesan = $request->input('pesan');
        $email->nama_acara = $request->input('nama_acara');
        $email->tanggal = $request->input('tanggal');
        $email->jam = $request->input('jam');
        $email->lokasi = $request->input('lokasi');
        $email->meeting_id = $request->input('meeting_id');
        $email->meeting_passcode = $request->input('meeting_passcode');
        $email->link_zoom = $request->input('link_zoom');
        $email->sent_by = auth()->user()->name;
        $email->save();

        $peserta->send_webinar = 1;
        $peserta->save();

        Mail::to($email->email)->send(new WebinarEMail($peserta, $email));

        return redirect('/dashboard/webinar')->with('success', 'Email webinar berhasil dikirim');
    }
}

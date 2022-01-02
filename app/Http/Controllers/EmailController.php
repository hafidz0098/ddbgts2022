<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Peserta;
use App\Models\Email;
use App\Mail\WebinarEmail;
use App\Mail\TryoutEmail;
use App\Mail\TalentsmappingEmail;

class EmailController extends Controller
{
    public function viewWebinar(){
        return view('dashboard.webinar.index', [
            'pesertas' => Peserta::where('status_id', '2')->where('send_webinar', 0)->get()
        ]);
    }

    public function viewTryout(){
        return view('dashboard.tryout.index', [
            'pesertas' => Peserta::where('status_id', '2')->where('send_tryout', 0)->get()
        ]);
    }

    public function viewtm(){
        return view('dashboard.talentsmapping.index', [
            'pesertas' => Peserta::where('status_id', '2')->where('send_tm', 0)->get()
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

        if($peserta->send_webinar == 1){
            return redirect('/dashboard/email/webinar')->with('error', 'Respon Gagal, Email webinar Telah dikirim sebelumnya');
        }else{
            $email->save();
            $peserta->send_webinar = 1;
            $peserta->save();
            Mail::to($email->email)->send(new WebinarEMail($peserta, $email));
            return redirect('/dashboard/email/webinar')->with('success', 'Respon Sukses, Email webinar berhasil dikirim');
        }
        
    }

    public function kirimTryout(Request $request){
        $email = new Email;
        $peserta = Peserta::where('email', $request->input('email'))->first();

        $validatedData = $request->validate([
            'email' => 'required',
            'subject' => 'required',
            'username_to' => 'required',
            'password_to' => 'required',
            'pesan' => 'required',
            'nama_acara' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'meeting_id' => 'required',
            'meeting_passcode' => 'required',
            'link_zoom' => 'required',
            'link_to' => 'required'
        ]);

        $email->email = $request->input('email');
        $email->subject = $request->input('subject');
        $email->username_to = $request->input('username_to');
        $email->password_to = $request->input('password_to');
        $email->pesan = $request->input('pesan');
        $email->nama_acara = $request->input('nama_acara');
        $email->tanggal = $request->input('tanggal');
        $email->jam = $request->input('jam');
        $email->lokasi = $request->input('lokasi');
        $email->meeting_id = $request->input('meeting_id');
        $email->meeting_passcode = $request->input('meeting_passcode');
        $email->link_zoom = $request->input('link_zoom');
        $email->link_to = $request->input('link_to');
        $email->sent_by = auth()->user()->name;
        
        if($peserta->send_tryout == 1){
            return redirect('/dashboard/email/tryout')->with('error', 'Respon Gagal, Email tryout Telah dikirim sebelumnya');
        }else{
            $email->save();
            $peserta->send_tryout = 1;
            $peserta->username_to = $request->input('username_to');
            $peserta->password_to = $request->input('password_to');
            $peserta->save();
            Mail::to($email->email)->send(new TryoutEmail($peserta, $email));
            return redirect('/dashboard/email/tryout')->with('success', 'Email tryout berhasil dikirim');
        }
        
    }

    public function kirimtm(Request $request){
        $email = new Email;
        $peserta = Peserta::where('email', $request->input('email'))->first();

        $validatedData = $request->validate([
            'email' => 'required',
            'subject' => 'required',
            'username_tm' => 'required',
            'password_tm' => 'required',
            'pesan' => 'required',
            'nama_acara' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'meeting_id' => 'required',
            'meeting_passcode' => 'required',
            'link_zoom' => 'required',
            'link_tm' => 'required'
        ]);

        $email->email = $request->input('email');
        $email->subject = $request->input('subject');
        $email->username_tm = $request->input('username_tm');
        $email->password_tm = $request->input('password_tm');
        $email->pesan = $request->input('pesan');
        $email->nama_acara = $request->input('nama_acara');
        $email->tanggal = $request->input('tanggal');
        $email->jam = $request->input('jam');
        $email->lokasi = $request->input('lokasi');
        $email->meeting_id = $request->input('meeting_id');
        $email->meeting_passcode = $request->input('meeting_passcode');
        $email->link_zoom = $request->input('link_zoom');
        $email->link_to = $request->input('link_tm');
        $email->sent_by = auth()->user()->name;
        
        if($peserta->send_tm == 1){
            return redirect('/dashboard/email/talentsmapping')->with('error', 'Respon Gagal, Email talents mapping telah dikirim sebelumnya');
        }else{
            $email->save();
            $peserta->send_tm = 1;
            $peserta->username_tm = $request->input('username_tm');
            $peserta->password_tm = $request->input('password_tm');
            $peserta->save();
            Mail::to($email->email)->send(new TalentsmappingEmail($peserta, $email));
            return redirect('/dashboard/email/talentsmapping')->with('success', 'Email talents mapping berhasil dikirim');
        }
        
    }

    
}

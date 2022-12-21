<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Rumpun;
use App\Mail\WelcomeEmail;
use App\Mail\NotifEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DaftarController extends Controller
{
    public function index(){

        $date = date('Y-m-d H:i:s');
        if($date > "2026-01-21 14:00:00"){
            return view('daftar.tutup',[
                'title' => 'daftar',
                'active' => 'daftar' 
            ]);
        }else{
            return view('daftar.index', [
                'title' => 'daftar',
                'active' => 'daftar',
                'rumpuns' => Rumpun::all()
            ]);
        }
        
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:pesertas',
            'nomor_wa' => 'required|max:20|unique:pesertas',
            'asal_sekolah' => 'required|max:255',
            'rumpun_id' => 'required',
            'bukti_tf' => 'required|image|file|max:1024'
        ], [
            'name.required' => 'Mohon masukkan nama anda',
            'email.required' => 'Mohon masukkan alamat email anda',
            'email.unique' => 'Email sudah terdaftar',
            'asal_sekolah.required' => 'Mohon masukkan asal sekolah anda',
            'nomor_wa.required' => 'Mohon masukkan nomor whatsapp anda',
            'nomor_wa.unique' => 'Nomor whatsapp sudah terdaftar',
            'rumpun_id.required' => 'Mohon pilih kategori anda',
            'bukti_tf.required' => 'Mohon upload bukti bayar anda',
            'bukti_tf.image' => 'Bukti bayar harus berekstensi jpg/png',
            'bukti_tf.max' => 'Ukuran maksimal adalah 1 Mb'
        ]);

        // $path = $request->file('bukti_tf')->store('bukti_tf', 's3');

        // $path = Storage::disk('s3')->url($path);
        
        // $peserta = Peserta::create($validatedData);
        // $peserta->image_id = basename($path);
        // $peserta->bukti_tf = $path;
        // $peserta->save();
        

        // Mail::to($validatedData['email'])->send(new WelcomeEmail($peserta, "Terima kasih telah melakukan pendaftaran di DDBGTS 2022", "Silahkan menunggu email konfirmasi dari panitia dalam 1x24 jam"));
        // Mail::to("ddbgts2022.2@gmail.com")->send(new NotifEmail("Notifikasi Pendaftar Baru", "Halo admin, ada pendaftar baru nih silahkan segera cek website"));
        // return redirect('/daftar')->with('success', 'Pendaftaran berhasil, silahkan cek inbox/spam email anda!');

        return back()->with('daftarError', 'Pendaftaran Gagal, Pendaftaran DDBGTS 2022 sudah ditutup!');
    }
}

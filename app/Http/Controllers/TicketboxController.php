<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Rumpun;
use Illuminate\Http\Request;
use App\Mail\KonfirmasiEmail;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

class TicketboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.ticketbox.index', [
            'rumpuns' => Rumpun::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:pesertas',
            'asal_sekolah' => 'required|max:255',
            'nomor_wa' => 'required|max:20|unique:pesertas',
            'rumpun_id' => 'required',
        ],[
            'name.required' => 'Mohon masukkan nama anda',
            'email.required' => 'Mohon masukkan alamat email anda',
            'email.unique' => 'Email sudah terdaftar',
            'asal_sekolah.required' => 'Mohon masukkan asal sekolah anda',
            'nomor_wa.required' => 'Mohon masukkan nomor whatsapp anda',
            'nomor_wa.unique' => 'Nomor whatsapp sudah terdaftar',
            'rumpun_id.required' => 'Mohon pilih kategori anda'
        ]);

        $validatedData['status_id'] = 2;
        $validatedData['verified_by'] = auth()->user()->name." - ".$request->input('lokasi');

        $peserta = Peserta::create($validatedData);

        Mail::to($peserta->email)->send(new KonfirmasiEMail($peserta, "Pendaftaran DDBGTS Berhasil", "Selamat, pendaftaran Anda telah berhasil dilakukan. Silahkan klik tombol di bawah ini untuk bergabung dengan grup WhatsApp DDBGTS 2021", "Join Group Whatsapp", "www.youtube.com"));
        // $request->session()->flash('success', 'Registration successfully! Please login');
        return redirect('/dashboard/email/ticketbox')->with('success', 'Pendaftaran berhasil, silahkan cek inbox/spam email peserta yang anda daftarkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $peserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peserta $peserta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $peserta)
    {
        //
    }
}

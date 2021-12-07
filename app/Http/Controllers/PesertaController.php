<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Exports\PesertaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\KonfirmasiEmail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use CloudinaryLabs\CloudinaryLaravel\MediaAlly;


class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.peserta-pending.index', [
            'pesertas' => Peserta::where('status_id', '1')->orderBy('created_at', 'desc')->get(),
            'statuses' => Status::all()
        ]);
    }

    public function pesertaexport(){
        return Excel::download(new PesertaExport, 'peserta.xlsx');
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
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'status_id' => 'required'
        ];

        $validatedData = $request->validate($rules);

        $peserta = Peserta::find($id);
        $peserta->verified_by = auth()->user()->name;
        $peserta->update($validatedData);

        if($validatedData['status_id'] == 2){
            Storage::disk('s3')->delete('bukti_tf/'.$peserta->image_id); 
            Mail::to($peserta->email)->send(new KonfirmasiEMail($peserta, "Pendaftaran DDBGTS Berhasil", "Selamat, pendaftaran Anda telah berhasil dilakukan. Silahkan klik tombol di bawah ini untuk bergabung dengan grup WhatsApp DDBGTS 2022", "Join Group Whatsapp", "www.youtube.com"));
        }else{
            Mail::to($peserta->email)->send(new KonfirmasiEMail($peserta, "Pendaftaran DDBGTS Gagal", "Mohon maaf, pendaftaran Anda belum berhasil dilakukan. Mohon melakukan pendaftaran ulang", "Daftar Ulang", "www.twitter.com"));
        }

        return redirect('/dashboard/peserta-pending')->with('success', 'Peserta has been updated!');
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

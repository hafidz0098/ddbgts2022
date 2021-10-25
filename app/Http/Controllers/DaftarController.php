<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Rumpun;

class DaftarController extends Controller
{
    public function index(){
        return view('daftar.index', [
            'title' => 'daftar',
            'active' => 'daftar',
            'rumpuns' => Rumpun::all()
        ]);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'rumpun_id' => 'required',
            'email' => 'required|email:dns|unique:pesertas',
            'asal' => 'required|max:255',
            'bukti' => 'required|image|file|max:1024'
        ]);

        $validatedData['bukti'] = $request->file('bukti')->store('bukti-tf');

        Peserta::create($validatedData);

        // $request->session()->flash('success', 'Registration successfully! Please login');

        return redirect('/daftar')->with('success', 'Pendaftaran berhasil!, silahkan cek inbox/spam email anda');
    }
}

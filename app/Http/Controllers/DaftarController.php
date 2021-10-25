<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class DaftarController extends Controller
{
    public function index(){
        return view('daftar.index', [
            'title' => 'daftar',
            'active' => 'daftar'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'rumpun_id' => 'required',
            'email' => 'required|email:dns|unique:users',
            'asal_sekolah' => 'required|max:255',
            'image' => 'required|image|file|max:1024'
        ]);

        Peserta::create($validatedData);

        // $request->session()->flash('success', 'Registration successfully! Please login');

        return redirect('/daftar')->with('success', 'Pendaftaran berhasil!, silahkan cek inbox/spam email anda');
    }
}

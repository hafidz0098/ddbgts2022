<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('dashboard.daftaradmin.index', [
            'title' => 'Daftar Admin',
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        if(auth()->user()->email != 'hafidznak123@gmail.com' ){
            return redirect('/dashboard/daftaradmin')->with('error', 'Anda tidak dapat menambahkan admin baru!');
        }

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfully! Please login');

        return redirect('/dashboard/daftaradmin')->with('success', 'Admin baru berhasil ditambahkan');
    }
}
 
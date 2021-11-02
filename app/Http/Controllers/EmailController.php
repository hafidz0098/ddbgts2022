<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class EmailController extends Controller
{
    public function index(){
        Mail::to('hafidznak123@gmail.com')->send(new WelcomeEMail);
        return 'berhasil mengirim email';
    }
}

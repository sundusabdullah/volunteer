<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Mail;
use App\Mail\sendConfirm;
use Illuminate\Support\Facades\Auth;

class SendController extends Controller
{


    public function sendEmail(){
        $user = Auth::user();
        $userEmail = $user->email;
        Mail::to($userEmail)->send(new sendConfirm);
        return redirect()->route('home');
        
    }
}



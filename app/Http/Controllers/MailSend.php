<?php

namespace App\Http\Controllers;

use App\Mail\MailTeste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailSend extends Controller
{
    public function sendMail(Request $request){
       $user = Auth::user();

       if(!$user){
        return redirect()->route('loginView');
       }

       $request->validate([
        'msg' => 'required',
       ]);

       $dados = ['msg' => $request->msg];

       Mail::to('luisfersteinle@gmail.com')->queue(new MailTeste($dados));

       return back()->with('success', 'Email enviado com sucesso!');
    }
}

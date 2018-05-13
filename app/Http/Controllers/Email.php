<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class Email extends Controller
{

    // fungsi untuk mengirim email ke customer
    // dengan menggunakan mailtrap
    public function sendEmail(Request $request)
{
    try{
        Mail::send('email', ['nama' => $request->nama], function ($message) use ($request)
        {
            $message->subject($request->nama);
            $message->from('cobaindong845@gmail.com', 'Bimo');
            $message->to($request->email);
        });
        return back()->with('alert-success','Email Terkirim,, Kami segera memproses pembayaran anda');
    }
    catch (Exception $e){
        return response (['status' => false,'errors' => $e->getMessage()]);
    }
}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    // public function index()
    // {
    //     $details = [
    //         'title' => 'Email From Prima Photo Studio',
    //         'body' => 'Pemesanan anda sedang di proses'
    //     ];

    //     $to = 'oliviachristina2000@gmail.com';
    //     Mail::to($to)->send(new SendEmail($details));
    //     //Mail::to('oliviachristina2000@gmail.com')->send(new SendEmail($details));

    //     return "Email Berhasil Terkirim!!!";

    //     Mail::to('oliviachristina2000@gmail.com')->send(new SendEmail());
    // }


}

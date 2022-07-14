<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MailController;
use App\Mail\TestMail;
use illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Mail From Prima Photo Studio',
            'body' => 'Pemesanan anda sedang di proses'
        ];

        $to = 'oliviachristina2000@gmail.com';
        Mail::to($to)->send(new TestMail($details));
        //Mail::to("oliviachristina2000@gmail.com")->send(new TestMail($details));

        return "Email sent";
    }
}

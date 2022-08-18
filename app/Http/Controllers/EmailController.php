<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use App\Mail\EmailAttach;
use App\Mail\User;
use App\Notifications\Informasi;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function kirim()
    {
       

        Mail::to('oliviachristina2000@gmail.com')->send(new Email());

       
    }

    public function attach()
    {
        $text = [
                    'subject' => 'Email From Prima Photo Studio'
                ];

        Mail::to('oliviachristina2000@gmail.com')->send(new EmailAttach($text));
    }

    public function notif()
    {
       $user = User::first();
       $data = [
                'line1' => 'Email From Prima Photo Studio',
                'body' => 'Pemesanan anda sedang di proses',
                'line2' => 'Terima kasih'
            ];
       $user ->notify(new Informasi($data));
       
    }
}

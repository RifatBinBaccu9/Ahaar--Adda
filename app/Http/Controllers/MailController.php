<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SentMail()
    {
        // Array of recipients
        $recipients = [
            'rifat18961190@gmail.com',
            'rifat18961190@gmail.com',
            'rifat18961190@gmail.com',
        ];
    
        $subject = 'Code Test';
        $msg = 'Hi Bro';
    
        foreach ($recipients as $to) {
            Mail::to($to)->send(new WelcomeMail($msg, $subject));
        }
    
        return 'Sent Mail to All Recipients';
    }
    
}

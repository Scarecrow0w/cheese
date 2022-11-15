<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function send(Request $request)
    {
        $data = [
            'user_email' => $request->email,
            'text' => $request->text,
        ];

        Mail::to('daniil6547@ya.ru')->send(new Contact($data));

        return back();
    }
}

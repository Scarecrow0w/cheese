<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMailRequest;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function send(SendMailRequest $request)
    {
        $data = [
            'user_email' => $request->email,
            'text' => $request->text,
        ];

        Mail::to('syrniy.sammit@yandex.ru')->send(new Contact($data));

        return back()->with('message', 'Сообщение отправлено');
    }
}

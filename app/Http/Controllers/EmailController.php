<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();

        Mail::send('emails.form', ['data' => $data], function ($message) use ($data) {
            $message->from($data['email'], $data['name']);
            $message->to('info.benberkenbosch@gmail.com')->subject($data['subject']);
        });

        return redirect('/');
    }
}

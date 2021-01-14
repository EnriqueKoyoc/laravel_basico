<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {
        $message = Request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);


        Mail::to('enrique.koyoc.can@gmail.com')->queue(new MessageReceived($message));

        return 'Mensaje enviado';
    }
}
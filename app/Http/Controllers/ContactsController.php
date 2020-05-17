<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;
use App\Models\Message;

class ContactsController extends Controller
{
    public function create(){
        return view('Contacts.create');
    }

    public function store(ContactFormRequest $request)
    {
        $message = Message::create($request->only('name', 'email', 'message'));

        Mail::to(config('laracarte.admin_support_email'))
            ->send(new ContactMessageCreated($message));

        flashy('Nous vous repondrons dans les plus brefs delais');

        return redirect()->home();
    }
}

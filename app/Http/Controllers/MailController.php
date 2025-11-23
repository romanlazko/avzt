<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function __invoke(ContactFormRequest $request)
    {
        if ($request->file('client_file')) {
            $filePath = $request->file('client_file')->store('files', 'public');
        }

        Mail::to(env('MAIL_USERNAME'))->send(new ContactFormMail($filePath ?? null));

        return redirect()->route('home');
    }
}

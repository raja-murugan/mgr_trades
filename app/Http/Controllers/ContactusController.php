<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactusMail;

class ContactusController extends Controller
{
    public function store(Request $request)
    {
        $mail = 'info@mgrtrades.com';

        $data = new Contactus();

        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->message = $request->get('message');
        $data->phone = $request->get('phone');

        $data->save();

        Mail::to($mail)->send(new ContactusMail($data));

        return redirect()->route('index.home')->with('message', 'Mail Sended !');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function postContact(Request $request)
    {
        $this->validate($request,[
          'name' => 'required|min:2|max:250|regex:/^[\pL\s\-]+$/u',
          'email' => 'required|email',
          'message' => 'required|min:10|max:1000'
        ]);
        $data = [
          'name' => $request->name,
          'email' => $request->email,
          'msgBody' => $request->message
        ];

        mail::send('emails.contact', $data, function ($message) use($data)
        {
          $message->from($data['email']);
          $message->to('alexeis112@gmail.com');
          // $message->subject('New Contact');
        });

        return redirect()->route('pages.contact');
    }
}

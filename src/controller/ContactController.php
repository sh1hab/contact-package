<?php

namespace Shihab\Contact\controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Shihab\Contact\contact;
use Shihab\Contact\Mail\ContactMailable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactController extends Controller
{

    public function __construct()
    {
    }

    function index(){
        return view('contact::form');
    }

    function send(Request $request){
        $data=$request->all();
        contact::create($data);
        Mail::to(config('contact.SEND_EMAIL_TO'))
            ->send(new ContactMailable($request->message,$request->name));
        return back()->with('status','Email Sent Successfully!');

    }

}

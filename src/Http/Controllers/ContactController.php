<?php

namespace Lalan\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Lalan\Contact\Mail\ContactMailable;
use Lalan\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');    //First contact is the package name, and second contact is the viewPage (contact.blade)
    }

    public function send(Request $request){
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect('contact');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact_us(){
        $Contact = Contact::orderBy('id','desc')->get();
        return view('frontend.contact',compact('Contact'));
    }
    public function contact_page_form(Request $request){
        $Contact = new Contact;
        $Contact->name = $request->name;
        $Contact->email_address = $request->email_address;
        $Contact->company = $request->company;
        $Contact->city = $request->city;
        $Contact->country = $request->country;
        $Contact->phone_number = $request->phone_number;
        $Contact->attachment = $request->attachment;
        $Contact->comments = $request->comments;
        $Contact->save();
        // echo"<pre>";print_r($Contact);die;
        return redirect()->route('contact_us',compact('Contact'));
    }
}

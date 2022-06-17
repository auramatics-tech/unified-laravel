<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\Contact;
use Session;
use Mail;

class ContactController extends Controller
{
    public function contact_us(){
        $Contact = Contact::orderBy('id','desc')->get();
        return view('frontend.contact',compact('Contact'));
    }
    public function contact_page_form(Request $request){
        $Contact = new Contact;
        $Contact->name = $request->name;
        
        $Contact->company = $request->company;
        $Contact->city = $request->city;
        $Contact->country = $request->country;
        $Contact->phone_number = $request->phone_number;
       
        $name = $request->file('attachment');
        if (isset($name)) {
            $imageName = time() . '.' . $name->extension();
            $name->move(public_path('assets\frontend\assets\Email_images'), $imageName);
            $Contact->attachment = $imageName;
            $Contact->email_address = $request->email_address;
            $Contact->comments = $request->comments;
        }
        $products = Session::get('products');
     Mail::send(
    'frontend.Email.contact_us_inquiry',
    compact('Contact', 'name'),
    function ($m) use ($products) {
        $m->to('info@unified.co.in')
            ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->subject(__('Payment Success'));
    });
        
        $Contact->save();
        return redirect()->route('contact_us',compact('Contact'));
    }
}




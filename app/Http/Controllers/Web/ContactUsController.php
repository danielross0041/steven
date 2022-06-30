<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class ContactUsController extends Controller
{
    public function store(ContactRequest $request){
        try{
            $contact=new ContactUs;
            $contact->name=$request->name;
            $contact->phone=$request->phone;
            $contact->email=$request->email;
            $contact->message=$request->message;
            $contact->save();
            return 1;
        } catch(\Exception $e){
            return 0;
        }


    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserContactController extends Controller
{
    public function index(){
        return view('user/contact');
    }

    public function contactPost(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'comment' => 'required'
        ]);
        $current = new Carbon();
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->comment = $request->comment;
        $contact->date = $current;

        $contact->save();
        return redirect()->route('user.contact')->with('msg','Contact successfully !!! ');
    }
}

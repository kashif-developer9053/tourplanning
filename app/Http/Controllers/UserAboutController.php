<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAboutController extends Controller
{
    public function index(){
        return view('user.about');
    }
}

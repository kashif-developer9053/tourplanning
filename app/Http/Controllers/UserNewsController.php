<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use Illuminate\Http\Request;

class UserNewsController extends Controller
{
    public function index(Request $request){
        $new1 = NewsEvent::take(1)->get();
        $new2 = NewsEvent::skip(1)->take(3)->get();
        $new3 = NewsEvent::skip(4)->take(3)->get();
        return view('user.news',['new1'=>$new1,'new2'=>$new2,'new3'=>$new3]);
    }

    public function newsdetail(Request $request){
        $news = NewsEvent::where('news_id',$request->id)->get();
        $news2 = NewsEvent::skip(1)->take(4)->get();
        return view('user.newsdetail',['news'=>$news,'news2'=>$news2]);
    }

    public function allnews(Request $request){
        $news = NewsEvent::all();
        return view('user.allnews')->with('news',$news);
    }
}

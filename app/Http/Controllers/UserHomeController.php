<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use App\Models\Location;
use App\Models\NewsEvent;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function index(Request $request){

        $tourB = Tour::where('region','B')->take(1)->get();
        $tourT = Tour::where('region','T')->take(1)->get();
        $tourN = Tour::where('region','N')->take(1)->get();

        $countTour = Tour::count();
        $limitTour = $countTour - 5 ;
        $tour = Tour::skip($limitTour)->take(5)->get();

        $place = Location::take(8)->get();

        $countNews = NewsEvent::count();
        $limitNews = $countNews - 4;
        $news = NewsEvent::skip($limitNews)->take(4)->get();

        return view('user.home',['place'=>$place,'tourB'=>$tourB,'tourT'=>$tourT,'tourN'=>$tourN,'tour'=>$tour,'news'=>$news]);
    }
}

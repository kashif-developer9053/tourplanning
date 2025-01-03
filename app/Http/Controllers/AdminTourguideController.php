<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourGuide;
use Illuminate\Http\Request;

class AdminTourguideController extends Controller
{
    public function index(Request $request){
        $search = $request->search;
        if($search != ""){
            $guideOn = TourGuide::where('name','like',"%$search%")
            ->where('active',1)->get();
            $guideOff = TourGuide::where('name','like',"%$search%")
            ->where('active',0)->get();
        }else{
            $guideOn = TourGuide::where('active',1)->get();
            $guideOff = TourGuide::where('active',0)->get();
        }

        return view('admin/tour_guide',['guideOn' => $guideOn,'guideOff'=>$guideOff]);
    }

    public function lock(Request $request){
        $lock = TourGuide::find($request->id);
        $lock->active = 0;
        $lock->save();

        return redirect()->route('admin.tourguide');
    }

    public function unlock(Request $request){
        $unlock = TourGuide::find($request->id);
        $unlock->active = 1;
        $unlock->save();

        return redirect()->route('admin.tourguide');
    }


}

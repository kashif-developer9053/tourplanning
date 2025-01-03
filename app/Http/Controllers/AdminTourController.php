<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Support\Facades\DB;
use App\Models\Tour;
use App\Models\Schedule;
use Illuminate\Http\Request;

class AdminTourController extends Controller
{
    public function index(Request $request){

        $search = $request->search;
        if($search != ""){
            $tour = Tour::where('tour_name','like',"%$search%")->get();
        }else{
            $tour = Tour::all();
        }

        return view('admin/tour',['tour' => $tour]);
    }

    public function insertTour(){
        $place = Location::all();
        return view('admin.control.insertTour',['place'=>$place]);
    }

    public function insertTourPost(Request $request){
         $validate = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'transport' => 'required',
            'duration' => 'required|numeric|min:1|max:30',
            'price1' => 'required|numeric',
            'price2' => 'required|numeric',
            'price3' => 'required|numeric',
            'price4' => 'required|numeric',
            'img1' => 'nullable',
            'img2' => 'nullable',
            'img3' => 'nullable',
            'img4' => 'nullable',
            'img5' => 'nullable',
            'detail' => 'required',
            'visit' => 'required',
            'region' => 'required',
            'place' => 'required'
         ],[
            'required' => ':attribute is required',
            'duration.min' => ':attribute min is :min',
            'duration.max' => ':attribute max is :max'
         ]);

         if($request->hasFile('img1')){
            $file=$request->file('img1');
            $imageName1 = $file->getClientOriginalName();
            $file->move("images",$imageName1);
        }else{
            $imageName1 = null;
        }

        if($request->hasFile('img2')){
            $file=$request->file('img2');
            $imageName2 = $file->getClientOriginalName();
            $file->move("images",$imageName2);
        }else{
            $imageName2 = null;
        }

        if($request->hasFile('img3')){
            $file=$request->file('img3');
            $imageName3 = $file->getClientOriginalName();
            $file->move("images",$imageName3);
        }else{
            $imageName3 = null;
        }

        if($request->hasFile('img4')){
            $file=$request->file('img4');
            $imageName4 = $file->getClientOriginalName();
            $file->move("images",$imageName4);
        }else{
            $imageName4 = null;
        }

        if($request->hasFile('img5')){
            $file=$request->file('img5');
            $imageName5 = $file->getClientOriginalName();
            $file->move("images",$imageName5);
        }else{
            $imageName5 = null;
        }

         $tour = New Tour();
         $tour->tour_name = $request->name;
         $tour->location_start = $request->location;
         $tour->transport = $request->transport;
         $tour->duration = $request->duration;
         $tour->price1 = $request->price1;
         $tour->price2 = $request->price2;
         $tour->price3 = $request->price3;
         $tour->price4 = $request->price4;
         $tour->img1 = $imageName1;
         $tour->img2 = $imageName2;
         $tour->img3 = $imageName3;
         $tour->img4 = $imageName4;
         $tour->img5 = $imageName5;
         $tour->detail = $request->detail;
         $tour->visit = $request->visit;
         $tour->region = $request->region;
         $tour->place = $request->place;

         $tour->save();

         return redirect()->route('admin.tour')->with('msg','Insert successfully !!!');
    }

    public function updateTour(Request $request){
        $tour = Tour::where('tour_id',$request->id)->get();
        $place = Location::all();
        $tours = Tour::all();
        return view('admin/control/updateTour',['tour'=>$tour,'place'=>$place,'tours'=>$tours]);
    }

    public function updateTourPost(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'transport' => 'required',
            'duration' => 'required|numeric|min:1|max:30',
            'price1' => 'required|numeric',
            'price2' => 'required|numeric',
            'price3' => 'required|numeric',
            'price4' => 'required|numeric',
            'img1' => 'nullable',
            'img2' => 'nullable',
            'img3' => 'nullable',
            'img4' => 'nullable',
            'img5' => 'nullable',
            'detail' => 'required',
            'visit' => 'required',
            'region' => 'required',
            'place' => 'required'
         ],[
            'required' => ':attribute is required',
            'duration.min' => ':attribute min is :min',
            'duration.max' => ':attribute max is :max'
         ]);

         if($request->hasFile('img1')){
            $file=$request->file('img1');
            $imageName1 = $file->getClientOriginalName();
            $file->move("images",$imageName1);
        }else{
            $imageName1 = null;
        }

        if($request->hasFile('img2')){
            $file=$request->file('img2');
            $imageName2 = $file->getClientOriginalName();
            $file->move("images",$imageName2);
        }else{
            $imageName2 = null;
        }

        if($request->hasFile('img3')){
            $file=$request->file('img3');
            $imageName3 = $file->getClientOriginalName();
            $file->move("images",$imageName3);
        }else{
            $imageName3 = null;
        }

        if($request->hasFile('img4')){
            $file=$request->file('img4');
            $imageName4 = $file->getClientOriginalName();
            $file->move("images",$imageName4);
        }else{
            $imageName4 = null;
        }

        if($request->hasFile('img5')){
            $file=$request->file('img5');
            $imageName5 = $file->getClientOriginalName();
            $file->move("images",$imageName5);
        }else{
            $imageName5 = null;
        }

         $tour = Tour::find($request->id);
         $tour->tour_name = $request->name;
         $tour->location_start = $request->location;
         $tour->transport = $request->transport;
         $tour->duration = $request->duration;
         $tour->price1 = $request->price1;
         $tour->price2 = $request->price2;
         $tour->price3 = $request->price3;
         $tour->price4 = $request->price4;
         $tour->img1 = $imageName1;
         $tour->img2 = $imageName2;
         $tour->img3 = $imageName3;
         $tour->img4 = $imageName4;
         $tour->img5 = $imageName5;
         $tour->detail = $request->detail;
         $tour->visit = $request->visit;
         $tour->region = $request->region;
         $tour->place = $request->place;

         $tour->save();

         return redirect()->route('admin.tour')->with('msg','Update successfully !!!');
    }

    public function deleteTour(Request $request){

        $schedule = Schedule::all();
        foreach ($schedule as $t) {
            if($t->tour_id == $request->id){
                return redirect()->route('admin.tour')->with('msg-warn','Cannot delete !!!');
            }
        }
        $tour = Tour::find($request->id);
        $tour->delete();
        return redirect()->route('admin.tour')->with('msg','Delete successfully !!!');
    }



}

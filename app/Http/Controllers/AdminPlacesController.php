<?php

namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Http\Request;

class AdminPlacesController extends Controller
{
    public function index(Request $request){
        $search = $request->search;
        if($search != ""){
            $location = Location::where('location_name','like',"%$search%")->get();
        }else{
            $location = Location::all();
        }

        return view('admin/places',['location' => $location]);
    }

    public function insertPlaces(){
        return view('admin.control.insertPlaces');
    }

    public function insertPlacesPost(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'img' => 'nullable|image|mimes:jpg,png,jpeg'
        ]);

        if($request->hasFile('img')){
            $file=$request->file('img');
            $img = $file->getClientOriginalName();
            $file->move("images",$img);
        }else{
            $img = null;
        }

        $places = new Location();

        $places->location_name = $request->name;
        $places->img = $img;

        $places->save();

        return redirect()->route('admin.places')->with('msg','Insert successfully');

    }   

    public function updatePlaces(Request $request){
        $places = Location::where('location_id',$request->id)->get();
        return view('admin.control.updatePlaces')->with('places',$places);
    }

    public function updatePlacesPost(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'img' => 'nullable|image|mimes:jpg,png,jpeg'
        ]);

        if($request->hasFile('img')){
            $file=$request->file('img');
            $img = $file->getClientOriginalName();
            $file->move("images",$img);
        }else{
            $img = null;
        }

        $places = Location::find($request->id);

        $places->location_name = $request->name;
        $places->img = $img;

        $places->save();

        return redirect()->route('admin.places')->with('msg','Update successfully');
    }


    public function deletePlaces(Request $request){
        $places = Location::find($request->id);
        $places->delete();
        return redirect()->route('admin.places')->with('msg','Delete successfully');
    }
}

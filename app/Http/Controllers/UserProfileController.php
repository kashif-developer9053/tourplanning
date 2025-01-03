<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Feedback;
use App\Models\Schedule;
use App\Models\Tour;
use App\Models\Users;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UserProfileController extends Controller
{
    public function index(Request $request){
        $booking =  Booking::where('user_id',session()->get('id'))->get();
        $feedback = Feedback::where('user_id',session('id'))->get();
        $user = Users::where('user_id',session('id'))->get();
        return view('user.profile',['order' => $booking,'feedback'=>$feedback,'user'=>$user]);

    }

    public function saveProfile(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'pass' => 'required',
            'phone' => 'required|min:9|numeric',
            'address' => 'required'
        ],[
            'required' => ':attribute must be required',
            'min' => ':attribute must great than :min',
        ]);
            $user = Users::find(session()->get('id'));
            $user->user_name = $request->name;
            $user->password = $request->pass;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->save();

            session(['userName' => $request->name]);
            session(['userPhone' => $request->phone]);
            session(['userAddress' => $request->address]);

            return redirect()->route('user.profile')->with('msg','Update successfully');

    }

    public function logout(Request $request){
        session()->flush();
        return redirect()->route('user.home');
    }

    public function deleteCmt(Request $request){
        $feedback = Feedback::find($request->id);
        $feedback->delete();
        return redirect()->route('user.profile')->with('msg','Delete successfully');
    }
}

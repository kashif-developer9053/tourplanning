<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{
    public function index(Request $request){
        $search = $request->search;
        if($search != ""){
            $customerOn = Users::where('user_name','like',"%$search%")
            ->where('active','1')->get();
            $customerOff = Users::where('user_name','like',"%$search%")
            ->where('active','0')->get();
        }else{
            $customerOn = Users::where('active','1')->get();
            $customerOff = Users::where('active','0')->get();
        }

        return view('admin/customer',['customerOn' => $customerOn,'customerOff' => $customerOff]);
    }

    public function lock(Request $request){
        $lock = Users::find($request->id);
        $lock->active = 0;
        $lock->save();
        return redirect()->route('admin.customer');
    }

    public function unlock(Request $request){
        $unlock = Users::find($request->id);
        $unlock->active = 1;
        $unlock->save();
        return redirect()->route('admin.customer');
    }

    public function deleteCustomer(Request $request){
        $user = Users::find($request->id);
        $user->delete();
        return redirect()->route('admin.customer')->with('msg','Delete Successfully');
    }
}

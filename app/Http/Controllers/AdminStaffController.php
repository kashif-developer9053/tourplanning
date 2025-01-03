<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;

class AdminStaffController extends Controller
{
    public function index(Request $request){
        $search = $request->search;
        if($search != ""){
           $staffOn = Admin::where('name','like',"%$search%")->where('role','0')
           ->where('active',1)->get();
           $staffOff = Admin::where('name','like',"%$search%")->where('role','0')
           ->where('active',0)->get();
        }else{
            $staffOn = Admin::where('role','0')
            ->where('active',1)->get();
            $staffOff = Admin::where('role','0')
            ->where('active',0)->get();
        }

        return view('admin/staff',['staffOn' => $staffOn, 'staffOff'=>$staffOff]);
    }

   public function lock(Request $request){
        $lock = Admin::find($request->id);
        $lock->active = 0;
        $lock->save();
        return redirect()->route('admin.staff');
   }

   public function unlock(Request $request){
        $lock = Admin::find($request->id);
        $lock->active = 1;
        $lock->save();
        return redirect()->route('admin.staff');
    }
}

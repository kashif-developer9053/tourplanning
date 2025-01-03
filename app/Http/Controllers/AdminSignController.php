<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminSignController extends Controller
{
    public function login(){
        return view('admin.sign');
    }

    public function signup(){
        return view('admin.signup');
    }

    public function checkRegister(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admin,email',
            'pass' => 'required|min:6',
            'role' => 'required'
        ],[
            'required' => ':attribute must be required',
            'min' => ':attribute must great than :min'
        ]);

        $admin = New Admin();

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->pass;
        $admin->role = $request->role;

        $admin->save();

        return redirect()->route('admin.dashboard')->with('msg','Sign up successfully !!!');
    }

    public function checkLogin(Request $request){
        $validated = $request->validate([
            'email' => 'exists:admin,email|required',
            ]);

        if($validated){
            $email = $request->email;
            $admin = Admin::where('email',$email)->get();
            foreach ($admin as $pass){
                if($pass->active == 0){
                    return redirect()->route('admin.sign')->with('msg','Your account has been locked !!!');
                }
                if($pass->password == $request->password){
                    session(['adminName' => $pass->name]);
                    session(['role' => $pass->role]);
                    return redirect()->route('admin.dashboard');
                }else{
                    return redirect()->route('admin.sign')->withErrors($validated);
                }
            }
        }
    }

    public function logout(){
        session()->flush();
        return redirect()->route('admin.sign');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserSignController extends Controller
{
    public function index(){
        return view('user.sign');
    }

    public function register(){
        return view('user.signup');
    }

    public function checkLogin(Request $request){
        $validated = $request->validate([
            'email' => 'required|email|exists:user,email',
            'pass' => 'required'
        ],[
            'required' => ':attribute must be required'
        ]);
            $email = $request->email;
            $user = Users::where('email',$email)->get();
            foreach ($user as $u){

                if($u->active == 0){
                    return redirect()->route('user.sign')->with('msg','Your account has been locked !!!');
                }

                if($u->password == $request->pass){
                    session(['id' => $u->user_id]);
                    session(['userName' => $u->user_name]);
                    session(['userEmail' => $u->email]);
                    session(['userPhone' => $u->phone]);
                    session(['userAddress' => $u->address]);
                    return redirect()->route('user.home');
                }else{
                    return redirect()->route('user.sign')->withErrors($validated);
                }
            }

    }

    public function checkRegister(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:user,email',
            'pass' => 'required|min:6',
            'phone' => 'required|numeric|digits:10',
            'address' => 'required'
        ],[
            'required' => ':attribute must be required'
        ]);

        $user = new Users();

        $user->user_name = $request->name;
        $user->email = $request->email;
        $user->password = $request->pass;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        $users = Users::where('email',$request->email)->get();

        foreach ($users as $u) {
            session(['id' => $u->user_id]);
            session(['userName' => $u->user_name]);
            session(['userEmail' => $u->email]);
            session(['userPhone' => $u->phone]);
            session(['userAddress' => $u->address]);
        }

        return redirect()->route('user.home');
    }
}

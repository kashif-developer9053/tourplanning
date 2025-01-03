<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index(Request $request){
        $countUser = DB::table('user')->count();
        $limitUser = ($countUser - 5);
        $customer = DB::table('user')->skip($limitUser)->take(5)->get();

        $countBook = DB::table('booking')->count();
        $limitBook = ($countBook - 5);
        $order = DB::table('booking')->skip($limitBook)->take(5)->get();

        $countTour = DB::table('tour')->count();
        $countFeedback = DB::table('feedback')->count();
        

        return view('admin.dashboard',['customer' => $customer, 'order' => $order,'countTour' => $countTour, 'countFeedback' => $countFeedback,'countUser' => $countUser, 'countOrder' => $countBook]);
    }
}

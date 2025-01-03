<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminOrderController extends Controller
{
    public function index(Request $request){

        if($request->search != ""){
            $orderOn = Booking::where('user_name','like',"%$request->search%")
            ->where('status',1)->get();
            $orderOff = Booking::where('user_name','like',"%$request->search%")
            ->where('status',0)->get();
        }
        else if($request->from != "" || $request->to != ""){
            $validated = $request->validate([
                'from' => 'required|date',
                'to' => 'required|date'
            ]);
            if( $request->to > $request->from){
                $orderOn = Booking::where('date_book','>=',$request->from)->where('date_book','<=',$request->to)->where('status',1)->get();
                $orderOff = Booking::where('date_book','>=',$request->from)->where('date_book','<=',$request->to)->where('status',0)->get();
            }else{
                $msg = 'Date To must great than Date From';
                return redirect()->route('admin.order')->with('msg-warn',$msg);
            }
        }
        else{
            $orderOn = Booking::where('status',1)->get();
            $orderOff = Booking::where('status',0)->get();
        }

        return view('admin/order',['orderOn' => $orderOn,'orderOff'=>$orderOff]);
    }


    public function deleteOrder(Request $request){
        $order = Booking::find($request->id);
        $order->delete();
        return redirect()->route('admin.order')->with('msg','Delete successfully !!!');
    }

    public function changeOn(Request $request){
        $order = Booking::find($request->id);
        $order->status = 1;
        $order->save();
        return redirect()->route('admin.order');
    }
    public function changeOff(Request $request){
        $order = Booking::find($request->id);
        $order->status = 0;
        $order->save();
        return redirect()->route('admin.order');
    }
}

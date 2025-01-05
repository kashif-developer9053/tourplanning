<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserPaymentContronller extends Controller
{
    public function index(Request $request){
        $data = Schedule::where('schedule_id',$request->scheid)->get();
        return view('user.payment')->with('data',$data);
    }

    public function paymentPost(Request $request)
{
    try {
        $data = Schedule::where('schedule_id', $request->schedule_id)->get();
        $person1 = $request->person1;
        $person2 = $request->person2;
        $person3 = $request->person3;
        $person4 = $request->person4;

        $price1 = $request->price1;
        $price2 = $request->price2;
        $price3 = $request->price3;
        $price4 = $request->price4;

        $amount = ($person1 * $price1) + ($person2 * $price2) + ($person3 * $price3) + ($person4 * $price4);

        $current = new Carbon();

        $order = new Booking();
        $order->user_name = $request->name;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->phone = $request->phone;
        $order->payment = $request->payment;
        $order->person1 = $person1;
        $order->person2 = $person2;
        $order->person3 = $person3;
        $order->person4 = $person4;
        $order->amount = $amount;
        $order->schedule_id = $request->schedule_id;
        $order->date_book = $current;
        $order->location_start = $request->location_start;
        $order->date_start = $request->date_start;
        $order->date_end = $request->date_end;
        $order->transport = $request->transport;
        $order->duration = $request->duration;
        $order->status = 0;
        $order->tour_code = $request->tour_code;
        $order->user_id = $request->user_id;
        $order->tour_name = $request->tour_name;

        $order->save();

        $passenger = $person1 + $person2 + $person3 + $person4;
        session()->flash('success', 'Booking submitted successfully!');
        return redirect()->back()->with([
            'passenger' => $passenger,
            'person1' => $person1,
            'person2' => $person2,
            'person3' => $person3,
            'person4' => $person4,
            'price1' => $price1,
            'price2' => $price2,
            'price3' => $price3,
            'price4' => $price4,
            'amount' => $amount,
            'tour_name' => $request->tour_name,
            'data' => $data,
        ]);
    } catch (\Exception $e) {
        session()->flash('error', 'There was an error processing your booking. Please try again.');
        return redirect()->back();
    }
}

public function bankPayment()
{
    return view('user.bankPayment');
}

public function bankPaymentPost(Request $request)
{
    // Simulate failed payment
    session()->flash('error', 'Card invalid. Please try again.');
    return redirect()->back();
}


}

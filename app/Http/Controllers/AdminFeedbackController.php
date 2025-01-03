<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class AdminFeedbackController extends Controller
{
    public function index(Request $request){
        if($request->from != "" || $request->to != ""){
            $validated = $request->validate([
                'from' => 'required|date',
                'to' => 'required|date'
            ]);
            if($request->to > $request->from){
                $feed = Feedback::where('feedback_date','>=',$request->from)->where('feedback_date','<=',$request->to)->get();
                $contact = Contact::all();
            }else{
                return redirect()->route('admin.feedback')->with('warn','Date From must less than Date To');
            }
        }else{
            $contact = Contact::all();
            $feed = Feedback::all();
        }

        return view('admin/feedback',['feed' => $feed,'contact'=>$contact]);
    }

    public function updateFeedback(Request $request){
        $feedback = Feedback::where('feedback_id',$request->id)->get();
        return view('admin.control.updateFeedback')->with('feedback',$feedback);
    }

    public function updateFeedbackPost(Request $request){
        $validated = $request->validate([
            'reply' => 'required'
        ]);

        $feedback = Feedback::find($request->id);

        $current = new Carbon();

        $feedback->reply = $request->reply;
        $feedback->reply_date = $current;

        $feedback->save();

        return redirect()->route('admin.feedback')->with('msg','Update successfully !!!');

    }
}

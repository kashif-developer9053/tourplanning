<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Schedule;
use App\Models\Location;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserTourController extends Controller
{
    public function index(Request $request)
    {
        $current = new Carbon();
        if ($request->start) {
            $data = DB::table('tour')
                ->join('schedule', 'tour.tour_id', '=', 'schedule.tour_id')
                ->select('tour.*', 'schedule.date_start', 'schedule.tour_code', 'schedule.schedule_id')
                ->where('tour.location_start', $request->start)
                ->where('schedule.date_start','>=',$current)->get();

            $start = Tour::select('location_start')->get();
            $end = Location::select('location_name')->get();

            return view('user.tour', ['data' => $data, 'start' => $start, 'end' => $end]);
        }

        if ($request->end) {
            $data = DB::table('tour')
                ->join('schedule', 'tour.tour_id', '=', 'schedule.tour_id')
                ->select('tour.*', 'schedule.date_start', 'schedule.tour_code', 'schedule.schedule_id')
                ->where('tour.place','like', "%$request->end%")->get();

            $start = Tour::select('location_start')->get();
            $end = Location::select('location_name')->get();

            return view('user.tour', ['data' => $data, 'start' => $start, 'end' => $end]);
        }

        if ($request->region) {
            $data = DB::table('tour')
                ->join('schedule', 'tour.tour_id', '=', 'schedule.tour_id')
                ->select('tour.*', 'schedule.date_start', 'schedule.tour_code', 'schedule.schedule_id')
                ->where('tour.region', $request->region)->get();

            $start = Tour::select('location_start')->get();
            $end = Location::select('location_name')->get();

            return view('user.tour', ['data' => $data, 'start' => $start, 'end' => $end]);
        }

        if ($request->one) {
            $data = DB::table('tour')
                ->join('schedule', 'tour.tour_id', '=', 'schedule.tour_id')
                ->select('tour.*', 'schedule.date_start', 'schedule.tour_code', 'schedule.schedule_id')
                ->where('tour.duration', '<=', 3)->get();

            $start = Tour::select('location_start')->get();
            $end = Location::select('location_name')->get();

            return view('user.tour', ['data' => $data, 'start' => $start, 'end' => $end]);
        }

        if ($request->two) {
            $data = DB::table('tour')
                ->join('schedule', 'tour.tour_id', '=', 'schedule.tour_id')
                ->select('tour.*', 'schedule.date_start', 'schedule.tour_code', 'schedule.schedule_id')
                ->where('tour.duration', '>=', 4)
                ->where('tour.duration', '<=', 7)->get();

            $start = Tour::select('location_start')->get();
            $end = Location::select('location_name')->get();

            return view('user.tour', ['data' => $data, 'start' => $start, 'end' => $end]);
        }

        if ($request->three) {
            $data = DB::table('tour')
                ->join('schedule', 'tour.tour_id', '=', 'schedule.tour_id')
                ->select('tour.*', 'schedule.date_start', 'schedule.tour_code', 'schedule.schedule_id')
                ->where('tour.duration', '>=', 7)
                ->where('tour.duration', '<=', 14)->get();

            $start = Tour::select('location_start')->get();
            $end = Location::select('location_name')->get();

            return view('user.tour', ['data' => $data, 'start' => $start, 'end' => $end]);
        }

        if ($request->four) {
            $data = DB::table('tour')
                ->join('schedule', 'tour.tour_id', '=', 'schedule.tour_id')
                ->select('tour.*', 'schedule.date_start', 'schedule.tour_code', 'schedule.schedule_id')
                ->where('tour.duration', '>=', 14)->get();

            $start = Tour::select('location_start')->get();
            $end = Location::select('location_name')->get();

            return view('user.tour', ['data' => $data, 'start' => $start, 'end' => $end]);
        }

        if ($request->date) {
            $data = DB::table('tour')
                ->join('schedule', 'tour.tour_id', '=', 'schedule.tour_id')
                ->select('tour.*', 'schedule.date_start', 'schedule.tour_code', 'schedule.schedule_id')
                ->where('schedule.date_start', '>=', $request->date)->get();

            $start = Tour::select('location_start')->get();
            $end = Location::select('location_name')->get();

            return view('user.tour', ['data' => $data, 'start' => $start, 'end' => $end]);
        }



        if ($request->min && $request->max == "") {
            $data = DB::table('tour')
                ->join('schedule', 'tour.tour_id', '=', 'schedule.tour_id')
                ->select('tour.*', 'schedule.date_start', 'schedule.tour_code', 'schedule.schedule_id')
                ->where('tour.price1', '>=', $request->min)->get();

            $start = Tour::select('location_start')->get();
            $end = Location::select('location_name')->get();

            return view('user.tour', ['data' => $data, 'start' => $start, 'end' => $end]);
        }

        if ($request->max && $request->min == "") {
            $data = DB::table('tour')
                ->join('schedule', 'tour.tour_id', '=', 'schedule.tour_id')
                ->select('tour.*', 'schedule.date_start', 'schedule.tour_code', 'schedule.schedule_id')
                ->where('tour.price1', '<=', $request->max)->get();

            $start = Tour::select('location_start')->get();
            $end = Location::select('location_name')->get();

            return view('user.tour', ['data' => $data, 'start' => $start, 'end' => $end]);
        }

        if ($request->min && $request->max) {
            $data = DB::table('tour')
                ->join('schedule', 'tour.tour_id', '=', 'schedule.tour_id')
                ->select('tour.*', 'schedule.date_start', 'schedule.tour_code', 'schedule.schedule_id')
                ->where('tour.price1', '>=', $request->min)
                ->where('tour.price1', '<=', $request->max)->get();

            $start = Tour::select('location_start')->get();
            $end = Location::select('location_name')->get();

            return view('user.tour', ['data' => $data, 'start' => $start, 'end' => $end]);
        }

        if ($request->price) {
            $data = DB::table('tour')
                ->join('schedule', 'tour.tour_id', '=', 'schedule.tour_id')
                ->select('tour.*', 'schedule.date_start', 'schedule.tour_code', 'schedule.schedule_id')
                ->orderBy('tour.price1', $request->price)->get();

            $start = Tour::select('location_start')->get();
            $end = Location::select('location_name')->get();

            return view('user.tour', ['data' => $data, 'start' => $start, 'end' => $end]);
        }

        if ($request->name) {
            $data = DB::table('tour')
                ->join('schedule', 'tour.tour_id', '=', 'schedule.tour_id')
                ->select('tour.*', 'schedule.date_start', 'schedule.tour_code', 'schedule.schedule_id')
                ->where('tour.tour_name',$request->name)->get();

            $start = Tour::select('location_start')->get();
            $end = Location::select('location_name')->get();

            return view('user.tour', ['data' => $data, 'start' => $start, 'end' => $end]);
        }




        $data = DB::table('tour')
            ->join('schedule', 'tour.tour_id', '=', 'schedule.tour_id')
            ->select('tour.*', 'schedule.date_start', 'schedule.tour_code', 'schedule.schedule_id')->get();

        $start = Tour::select('location_start')->get();
        $end = Location::select('location_name')->get();


        return view('user.tour', ['data' => $data, 'start' => $start, 'end' => $end]);
    }
}

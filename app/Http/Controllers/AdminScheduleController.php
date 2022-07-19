<?php

namespace App\Http\Controllers;
use App\Models\Schedule;
use App\Models\Tour;
use App\Models\TourGuide;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminScheduleController extends Controller
{
    public function index(Request $request){
        if($request->from != "" || $request->to != ""){
            $validated = $request->validate([
                'from' => 'required|date',
                'to' => 'required|date'
            ]);
            $current = new Carbon();
            if($request->from > $current && $request->to > $request->from){
                $schedule = Schedule::where('date_start','>=',$request->from)->where('date_end','<=',$request->to)->get();
            }else{
                $a = $current->format('d-m-Y');
                $msg = 'Date From must great than '.$a.' and Date To must great than Date From'; 
                $schedule = Schedule::all();
                return view('admin/schedule',['schedule' => $schedule])->with('msg',$msg);
            }
            
        }else{
            $schedule = Schedule::all();
        }

        return view('admin/schedule',['schedule' => $schedule]);
    }

    public function insertSchedule(){
        $guide = TourGuide::all();
        $tour = Tour::all();
        return view('admin/control/insertSchedule',['guide'=>$guide,'tour'=>$tour]);
    }

    public function insertSchedulePost(Request $request){
        $validate = $request->validate([
            'tour_id' => 'required|exists:tour,tour_id',
            'date_start' => 'required|date',
            'date_end' => 'required|date',
            'status' => 'required',
            'tour_guide_id' => 'required|exists:tour_guide,tour_guide_id',
            'tour_code' => 'required'
         ],[
            'required' => ':attribute is required'
         ]);

         $sche = new Schedule();
         $sche->tour_id = $request->tour_id;
         $sche->date_start = $request->date_start;
         $sche->date_end = $request->date_end;
         $sche->status = $request->status;
         $sche->tour_guide_id = $request->tour_guide_id;
         $sche->tour_code = $request->tour_code;
         $sche->save();

         return redirect()->route('admin.schedule')->with('msg','Insert successfully !!!');
    }

    public function updateSchedule(Request $request){
        $schedule = Schedule::where('schedule_id',$request->id)->get();
        return view('admin/control/updateSchedule')->with('schedule',$schedule);
    }

    public function updateSchedulePost(Request $request){
        $validate = $request->validate([
            'tour_id' => 'required|exists:tour,tour_id',
            'date_start' => 'required|date',
            'date_end' => 'required|date',
            'status' => 'required',
            'tour_guide_id' => 'required|exists:tour_guide,tour_guide_id',
            'tour_code' => 'required'
         ],[
            'required' => ':attribute is required'
         ]);

         $sche = Schedule::find($request->id);
         $sche->tour_id = $request->tour_id;
         $sche->date_start = $request->date_start;
         $sche->date_end = $request->date_end;
         $sche->status = $request->status;
         $sche->tour_guide_id = $request->tour_guide_id;
         $sche->tour_code = $request->tour_code;
         $sche->save();

         return redirect()->route('admin.schedule')->with('msg','Update successfully !!!');
    }

    public function deleteSchedule(Request $request){
        $tour = Schedule::find($request->id);
        $tour->delete();
        return redirect()->route('admin.schedule')->with('msg','Delete successfully !!!');
    }
}

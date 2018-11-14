<?php

namespace App\Http\Controllers\EmployeeController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Config;
use JWTAuth;
use JWTAuthException;

use App\Attendance;
use App\Office_time;

class AttendanceController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
        Config::set('jwt.user', "App\Employee");
        Config::set('auth.providers.users.model', \App\Employee::class);
    }
    // office time
    public function officeTime(){
        $office_time = Office_time::findOrFail(1);
        return response()->json(["office_time" => $office_time]);
    }

    // take attendance state
    public function takeAttendance($date){
        $date = date('d-m-Y', strtotime($date));
        $attendance = Attendance::where('employee_id', auth('api')->user()->id)->where('created_at','>=', date('Y-m-d').' 00:00:00')->first();
        if($attendance){
            if(!$attendance->out_time){
                $present = true;
            }else{
                $present = false;
            }
            return response()->json([
                'present' => $present
            ]);
        }else{
            $attendance = new Attendance();
            return response()->json([
                'present' => false
            ]);
        }
    }

    // entry and leave time insert
    public function timeEntry() {
        $time = new \DateTime('now', new \DateTimezone('Asia/Dhaka'));

        $attendance = Attendance::where('employee_id', auth('api')->user()->id)->where('created_at','>=', date('Y-m-d').' 00:00:00')->first();
        $office_time = Office_time::findOrFail(1);
        if(!$attendance){
            $attendance = new Attendance();
            $attendance->employee_id = auth('api')->user()->id;
            $attendance->in_time = $time->format('H:i:s');
            if($time->format('H:i:s') > $office_time->in_time){
                $attendance->is_late = 1;
            }
            $attendance->save();
            return response()->json([ 'success' => 'You are in. Time inserted']);


        }else{
            $attendance->out_time = $time->format('H:i:s');
            if($time->format('H:i:s') < $office_time->out_time){
                $attendance->is_early_leave = 1;
            }
            $attendance->save();
            return response()->json(['success'=>'You are out. Time inserted']);
        }
        return response()->json(['att' => $attendance]);
    }

    public function guard(){
        return Auth::Guard('api');
    }
}

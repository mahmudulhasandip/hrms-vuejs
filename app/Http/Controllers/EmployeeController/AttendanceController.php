<?php

namespace App\Http\Controllers\EmployeeController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Config;
use JWTAuth;
use JWTAuthException;

use App\Attendance;

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

    public function takeAttendance($date){
        // $time = $request->input('date');
        // return response()->json(['attendance' => $date]);
        $date = date('d-m-Y', strtotime($date));
        $attendance = Attendance::where('employee_id',auth('api')->user()->id)->where('created_at','>=', date('Y-m-d').' 00:00:00')->first();
        $attendanceDate = date('d-m-Y', strtotime($attendance->created_at));
        return response()->json(['attendance' => $attendanceDate ]);
    }

    public function guard(){
        return Auth::Guard('api');
    }
}

<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Admin Routes
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth/admin'

], function () {
    Route::post('login', 'AdminAuth\AuthController@login');
    Route::post('logout', 'AdminAuth\AuthController@logout');
    Route::post('refresh', 'AdminAuth\AuthController@refresh');
    Route::post('me', 'AdminAuth\AuthController@me');
});



// Employee Routes
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth/employee'

], function () {
    Route::post('login', 'EmployeeAuth\AuthController@login');
    Route::post('logout', 'EmployeeAuth\AuthController@logout');
    Route::post('refresh', 'EmployeeAuth\AuthController@refresh');
    Route::post('me', 'EmployeeAuth\AuthController@me');
});

Route::group(['middleware' => 'jwt.auth', 'prefix' => '/employee'], function($router){
    // get office time
    Route::get('office_time', 'EmployeeController\AttendanceController@officeTime');
    // attendance
    Route::get('attendance/{date}', 'EmployeeController\AttendanceController@takeAttendance');
    Route::post('attendance/time_entry', 'EmployeeController\AttendanceController@timeEntry');
});

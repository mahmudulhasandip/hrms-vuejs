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
    // attendance
    Route::get('attendance/{date}', 'EmployeeController\AttendanceController@takeAttendance');
    Route::post('attendance/time_entry', 'EmployeeController\AttendanceController@timeEntry');
});

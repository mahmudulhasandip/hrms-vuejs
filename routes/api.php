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
    // Config::set('jwt.user', "App\Employee");
    // Config::set('auth.providers.users.model', \App\Employee::class);
    Route::post('login', 'EmployeeAuth\AuthController@login');
    Route::post('logout', 'EmployeeAuth\AuthController@logout');
    Route::post('refresh', 'EmployeeAuth\AuthController@refresh');
    Route::post('me', 'EmployeeAuth\AuthController@me');

});

<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Config;
use JWTAuth;
use JWTAuthException;


use App\Employee;

class EmployeeController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
        Config::set('jwt.user', "App\Admin");
        Config::set('auth.providers.users.model', \App\Admin::class);
    }

    public function employeeList(){
        $employees = Employee::paginate(10);
        return response()->json($employees);
    }

    public function guard(){
        return Auth::Guard('api');
    }
}

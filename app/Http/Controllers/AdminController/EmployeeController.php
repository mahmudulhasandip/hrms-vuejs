<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Config;
use JWTAuth;
use JWTAuthException;

use App\Employee;
use Symfony\Component\HttpFoundation\Response;
use App\Role;

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

    public function getRole(){
        $role = Role::all();
        return response($role);
    }

    public function createEmployee(Request $request){
        $employee = $request->all();
        $employee['password'] = bcrypt($request->password);
        $employee['date_of_birth'] = date('Y-m-d', strtotime($request->data_of_birth));
        $image = $request->dp;  // your base64 encoded
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        // echo $image;
        if( $image){
            $ext = $image->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $upload = $image->storeAs(
                'employee/dp/',
                $filename
            );

            if($upload){
                $employee->dp = $filename;
            }
        }
        echo ($request->all());
        $employee = Employee::create($employee);
        return response($employee, Response::HTTP_CREATED);
    }

    public function guard(){
        return Auth::Guard('api');
    }
}

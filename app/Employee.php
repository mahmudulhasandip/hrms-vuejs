<?php

namespace App;

use App\Notifications\EmployeeResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new EmployeeResetPassword($token));
    }

    public function employeesDocument(){
        return $this->hasMany('App\Employees_document', 'employee_id', 'id');
    }

    public function employeesSalary(){
        return $this->hasMany('App\Employees_salary', 'employee_id', 'id');
    }

    public function leaveHistory(){
        return $this->hasMany('App\Leave_history', 'employee_id', 'id');
    }

    public function attendance(){
        return $this->hasMany('App\Attendance', 'employee_id', 'id');
    }
}

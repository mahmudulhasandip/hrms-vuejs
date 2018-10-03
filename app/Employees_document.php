<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees_document extends Model
{
    //

    public function employee(){
        return $this->belongsTo('App\Employee');
    }
}

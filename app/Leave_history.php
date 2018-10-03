<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave_history extends Model
{
    //
    public function employee(){
        return $this->belongsTo('App\Employee');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public $timestamps = false;

    public function user(){
        $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cybercrime extends Model
{
    public function user(){
        $this->belongsTo('App\User');
    }
}

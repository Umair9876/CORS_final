<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fir extends Model
{
public function user(){
    $this->belongsTo('App\User');
}
    
}

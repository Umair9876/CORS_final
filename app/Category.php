<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subcategories()
    {
        return $this->hasMany('App\SubCategory');
    }
    public function complaints()
    {
        return $this->hasMany('App\Complaint');
    }
}

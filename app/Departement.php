<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    public function product()
    {
    	return $this->belongsToMany('App\Product');
    }
}

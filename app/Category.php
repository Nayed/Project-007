<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function users() {
    	return $this->hasMany('App\User');
    }
    
    public function lessons() {
    	return $this->hasMany('App\Lesson');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function category() {
    	return $this->belongsTo('App\Category');
    }
    
    public function user() {
    	return $this->belongsTo('App\User');
    }
    
    public function medias() {
    	return $this->hasMany('App\Media');
    }
}

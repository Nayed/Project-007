<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public $table = "medias";
    public function lesson() {
    	return $this->belongsTo('App\Lesson');
    }
}

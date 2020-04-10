<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    public function comment() {
    	return $this->morphMany(comment::class,'commentable');
    }

    public function tag() {
    	return $this->morphToMany(tag::class,'tagable');
    }
}

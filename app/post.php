<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function images() 
    {
        return $this->morphOne(image::class,'imageable');
    }

    public function comment() {
    	return $this->morphMany(comment::class,'commentable');
    }

    public function tag() {
    	return $this->morphToMany(tag::class,'tagable');
    }
}

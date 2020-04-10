<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $fillable = [
    	'name'
    ];
	
    public function posts()
    {
    	return $this->morphedByMany(post::class,'tagable');
    }

    public function videos()
    {
    	return $this->morphedByMany(video::class,'tagable');
    }
}

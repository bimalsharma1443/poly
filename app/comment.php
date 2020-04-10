<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
	protected $gaurded = [];

	protected $fillable = [
        'comments', 
        'commentable_id',
        'commentable_type'
    ];

    public function commentable() {
    	return $this->morphTo();
    }
}

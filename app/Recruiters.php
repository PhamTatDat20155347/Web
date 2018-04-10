<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruiters extends Model
{
    //
	protected $table = 'recruiters';
	public function post(){
		return $this->hasMany('App\Post','recruiters_id','id');
	}
	public function recruitment(){
		return $this->hasManyThrough('App\Recruitment','App\Post','recruiters_id','post_id','id');
	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

 class Director extends Movie_people {
 	public $timestamps = false;
	protected $fillable = [ "firstName" , "lastName", "birthYear", "coverPhoto"];

	public function movies() {
		return $this->hasMany(Movie::class);
	}
}

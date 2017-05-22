<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

 class Director extends Movie_people {

	protected $fillable = [ "firstName" , "lastName"];

	public function movies() {
		return $this->hasMany(Movie::class);
	}
}

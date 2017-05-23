<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Movie extends Model {

	protected $fillable = [ "title", "releaseYear", "coverPhoto" ];
	public $timestamps = false;

	public function director() {
		return $this->belongsTo(Director::class);
	}
	public function category() {
		return $this->belongsTo(Category::class);
	}
	public function actors() {
		return $this->belongsToMany(Actor::class);
	}

}

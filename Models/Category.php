<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Category extends Model {


	public function movies() {
		return $this->hasMany(Movie::class);
	}
}
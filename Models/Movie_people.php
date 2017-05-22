<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

 class Movie_people extends Model {

	public function name() {
		return $this->firstName . " " . $this->lastName;
	}

	public function age() {
		return date("Y") - $this->birthYear;
	}
}
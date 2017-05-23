<?php

namespace App\Controllers;

class DirectorController extends Controller {

	public function index() {
		
		if (isset($_POST['director_name'])) {
			$new_director_name = $_POST['director_name'];
			$new_director_lastname = $_POST['director_lastname'];
			$new_director_birthyear = $_POST['director_birthyear'];
			$new_director_photo = $_POST['director_photo'];

			if (\App\Models\Director::where('firstName', $new_director_name)->where('lastName', $new_director_lastname)->exists() === false) {
				// then save
				
				\App\Models\director::create([
					'firstName' => $new_director_name,
					'lastName' => $new_director_lastname,
					'birthYear' => $new_director_birthyear,
					'coverPhoto' => $new_director_photo,
				]);
			}
		}
		$directors = \App\Models\Director::get();

		$page_title = "Director";
		include "Views/director/index.view.php";
	}

	public function show($director_id) {
		$director = \App\Models\Director::find($director_id);

		$page_title = $director->name();
		include "Views/director/show.view.php";
	}

}

<?php

namespace App\Controllers;

class DirectorController extends Controller {

	public function index() {
		$directors = \App\Models\Director::get();

		$page_title = "Director";
		include "Views/director/index.view.php";
	}

	public function show($director_id) {
		$director = \App\Models\Director::find($director_id);

		$page_title = $director->firstName;
		include "Views/director/show.view.php";
	}

}

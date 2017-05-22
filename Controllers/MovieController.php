<?php

namespace App\Controllers;

class MovieController extends Controller {

	public function index() {
		$movies = \App\Models\Movie::get();

		$page_title = "Movies";
		include "Views/Movie/index.view.php";
	}

	public function show($movie_id) {
		$movie = \App\Models\Movie::find($movie_id);
		$page_title = $movie->title;
		include "Views/movie/show.view.php";
	}

}


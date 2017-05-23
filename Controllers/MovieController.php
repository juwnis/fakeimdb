<?php

namespace App\Controllers;

class MovieController extends Controller {

	public function index() {

		if (isset($_POST['movie_name'])) {
			$movie = new \App\Models\Movie();
			$movie->title = $_POST['movie_name'];
			$movie->coverPhoto = $_POST['coverPhoto'];
			$movie->releaseYear = $_POST['releaseYear'];
			$movie->category_id = $_POST['category'];
			$movie->director_id = $_POST['director'];
			$movie->save();
		}
					
		
		$movies = \App\Models\Movie::get();
		$directors=\App\Models\Director::get();

		$page_title = "Movies";
		include "Views/Movie/index.view.php";
	}

	public function show($movie_id) {
		$movie = \App\Models\Movie::find($movie_id);

		$page_title = $movie->title;
		include "Views/movie/show.view.php";
	}



}


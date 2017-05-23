<?php

namespace App\Controllers;

class WelcomeController extends Controller {

	public function index() {
		if (isset($_POST['actor'])) {
			$xactor = $_POST['actor'];
			$xmovie = $_POST['movie'];

			$new_movie = \App\Models\Movie::find($xmovie);
			$new_actor = \App\Models\Actor::find($xactor);
			if (isset($_POST['add'])) {
				if ($new_movie->has('actors',$xactor)->exists() === false) {
					// then save
				$new_movie->actors()->attach($new_actor);
			
				}
			}
			if (isset($_POST['remove'])){
				if ($new_movie->has('actors',$xactor)->exists() === true) {
					// then save
				$new_movie->actors()->detach($new_actor);
			
				}
			}
		}	
		$movies = \App\Models\Movie::get();
		$actors=\App\Models\Actor::get();

		$page_title = "Welcome";
		include "Views/Welcome/index.view.php";
	}


}
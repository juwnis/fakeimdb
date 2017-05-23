<?php

namespace App\Controllers;

class ActorController extends Controller {

	public function index() {
		if (isset($_POST['actor_name'])) {
			$new_actor_name = $_POST['actor_name'];
			$new_actor_lastname = $_POST['actor_lastname'];
			$new_actor_birthyear = $_POST['actor_birthyear'];
			$new_actor_photo = $_POST['actor_photo'];

			if (\App\Models\Actor::where('firstName', $new_actor_name)->exists() === false) {
				// then save
				
				\App\Models\Actor::create([
					'firstName' => $new_actor_name,
					'lastName' => $new_actor_lastname,
					'birthYear' => $new_actor_birthyear,
					'coverPhoto' => $new_actor_photo,
				]);
			}
		}

		$actors = \App\Models\Actor::get();

		$page_title = "Actors";
		include "Views/actor/index.view.php";
	}

	public function show($actor_id) {
		$actor = \App\Models\Actor::find($actor_id);

		$page_title = $actor->firstName;
		include "Views/actor/show.view.php";
	}

}

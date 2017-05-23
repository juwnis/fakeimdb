<?php

namespace App\Controllers;

class ActorController extends Controller {

	public function index() {
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

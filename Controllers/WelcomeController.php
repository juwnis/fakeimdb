<?php

namespace App\Controllers;

class WelcomeController extends Controller {

	public function index() {

		$page_title = "Welcome";
		include "Views/Welcome/index.view.php";
	}


}
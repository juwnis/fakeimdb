<?php

namespace App\Controllers;

class Controller {
	public function process() {
		if (isset($_REQUEST['id'])) {
			// hämta just den här artisten
			$this->show($_REQUEST['id']);
		} else {
			// hämta alla artister
			$this->index();
		}
	}
}

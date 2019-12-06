<?php
namespace src\Controller;

use src\App\DB;

class MainController {
	public function main() {
		if(user() && user()->rank < 1) {
			return view("filelist");
		} else {
			return view("login");
		}
	}

	public function error() {
		echo "Error Page";

		// return view("error");
	}
}
?>
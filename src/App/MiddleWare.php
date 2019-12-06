<?php
namespace src\App;

class MiddleWare {
	public function logout() {
		if(isset($_SESSION['user'])) move("/", "Service is available after logout.");
	}

	// public function accessuser() {
	// 	if(!isset($_SESSION['user']) || $_SESSION['user']->rank != 1) back("Service is available after Admin's Approval");
	// }

	public function login() {
		if(!isset($_SESSION['user'])) move("/login", "Service is available after logging in");
	}

	public function admin() {
		if(!isset($_SESSION['user']) || $_SESSION['user']->id != "admin") move("/", "Service is available only by the administrator.");
	}
}

?>
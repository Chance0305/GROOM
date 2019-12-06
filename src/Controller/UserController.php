<?php
namespace src\Controller;

use src\App\DB;

class UserController {
	public function joinView() {
		return view("join");
	}

	public function join() {
		extract($_POST);

		$data = [":id" => $id, ":password" => $password];
		$user = DB::fetch("SELECT * FROM users WHERE id = ?", [$id]);
		$check = $password == $passwordcheck ? true : false;

		if(!$user && $check) {
			DB::execute("INSERT INTO users(id, password) VALUES(:id, :password)", $data);
			move("/login", "Sign-up Complete");
		} else {
			move("/join", "Sign-up Failed");
		}
	}

	public function loginView() {
		return view("login");
	}

	public function login() {
		extract($_POST);

		$data = [":id" => $id, ":password" => $password];
		$user = DB::fetch("SELECT * FROM users WHERE id = :id AND password = :password", $data);

		if($user) {
			$_SESSION['user'] = $user;
			move("/", "Login Complete");
		} else {
			move("/login", "Login Falied");
		}
	}

	public function logout() {
		unset($_SESSION['user']);
		move("/login", "Logout Complete");
	}
}
?>
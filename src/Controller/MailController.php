<?php
namespace src\Controller;

use src\App\DB;

class MailController {
	public function mailformView() {
		return view("mailform");
	}

	public function mailform() {
		extract($_POST);
		$mail_from = user()->id;

		if(isEmpty($_POST)) move("/mailform", "Required input is missing.");

		$data = [":mail_from" => $mail_from, ":mail_to" => $mail_to,":title" => $title, ":content" => $content];
		DB::execute("INSERT INTO mails(mail_from, mail_to, title, content) VALUES(:mail_from, :mail_to, :title, :content)", $data);

		move("/mailbox", "Mail Transfer Completed");
	}

	public function mailbox() {
		$uid = user()->id;
		$datas['maillist'] = DB::fetchAll("SELECT * FROM mails WHERE mail_from = ? OR mail_to = ?", [$uid, $uid]);
		return view("mailbox", $datas);
	}

	public function mailView($idx) {
		$datas["mail"] = DB::fetch("SELECT * FROM mails WHERE idx = ?", [$idx]);

		if($datas["mail"]->mail_to == user()->id || $datas["mail"]->mail_from == user()->id) {
			return view("mail", $datas);
		} else {
			move("/error");
		}
	}
}
?>
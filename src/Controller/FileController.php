<?php
namespace src\Controller;

use src\App\DB;

class FileController {
	public function filelistView() {
		$datas['filelists'] = DB::fetchAll("SELECT * FROM uploads WHERE uid = ?", [user()->id]);

		return view("filelist", $datas);
	}

	public function uploaderView() {
		return view("uploader");
	}

	public function uploader() {
		$file = $_FILES["file"];

		$key = DB::fetch("SELECT count(*) as cnt FROM uploads WHERE uid = ?", [user()->id])->cnt;
		move_uploaded_file($file['tmp_name'], "./uploaded/" . $key  . "_" . $file['name']);

		$data = [":filename" => $file['name'], ":filepath" => "./uploaded/" . $key  . "_" . $file['name'], ":uid" => user()->id];
		DB::execute("INSERT INTO uploads(filename, filepath, uid, udate) VALUES(:filename, :filepath, :uid, now())", $data);

		move("/uploader", "Upload Complete");
	}

	public function filemanageView() {
		$datas['filelists'] = DB::fetchAll("SELECT * FROM uploads WHERE uid = ?", [user()->id]);

		return view("filemanage", $datas);
	}

	public function outshareView() {
		$datas['filelists'] = DB::fetchAll("SELECT * FROM uploads WHERE uid = ? AND outshare != ''", [user()->id]);
		return view("outshare", $datas);
	}

	public function outshareFile($idx) {
		$data = [":idx" => $idx, ":uid" => user()->id];
		$file = DB::fetch("SELECT * FROM uploads WHERE idx = :idx AND uid = :uid", $data);

		if($file) {
			if($file->outshare == "") {
				$code = rand();
				DB::execute("UPDATE uploads SET outshare = ? WHERE idx = ?", [$code, $idx]);
				move("/filemanage", "Outshare is on Activation");
			} else {
				DB::execute("UPDATE uploads SET outshare = '' WHERE idx = ?", [$idx]);
				move("/filemanage", "Outshare is on Disabled");
			}
		} else {
			move("/error", "Failed to Access");
		}
	}

	public function outshare($code) {
		$datas['file'] = DB::fetch("SELECT * FROM uploads WHERE outshare = ?", [$code]);
		if($datas['file']) {
			return view("share", $datas);
		} else {
			return move("/error");
		}
	}

	public function deleteFile($idx) {

	}
}
?>
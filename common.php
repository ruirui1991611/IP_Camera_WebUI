<?php
    // 从web下载文件
	function download_file($filepath) {
		if (file_exists($filepath)) {
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename='.basename($filepath));
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			header('Content-Length: ' . filesize($filepath));
			ob_clean();
			flush();
			readfile($filepath);
			exit;
		} else {
			die("file not exists");
		}
	}

    // 检查当前会话
	function check_session($locate_path) {
		session_start();
		if(empty($_SESSION['user'])) {
			header('Location: '.$locate_path);
		}
	}

?>

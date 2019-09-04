<?php
function checkInputData($inputData) {
	$err_msg = array();
	$name = isset($inputData["name"]) ? $inputData["name"] : "";
	$email = isset($inputData["email"]) ? $inputData["email"] : "";
	$message = isset($inputData["message"]) ? $inputData["message"] : "";
	if (strlen($name) == 0) {
		$err_msg[] = "お名前を入力してください。";
	}
	if (strlen($email) == 0) {
		$err_msg[] = "メールアドレスを入力してください。";
	} else {
		if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
			$err_msg[] = "正しいメールアドレスを入力してください。";
		}
	}
	if (strlen($message) == 0) {
		$err_msg[] = "お問い合わせ内容を入力してください。";
	}
	return $err_msg;
}

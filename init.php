<?php
// セッションスタート
session_start();
// http://(またはhttps://)からホストまでを取得
$site_url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . '/';
define('HOME_URL', $site_url . 'myphp/github-Hoshuyama-contact-form/');
// 自動返信メールの管理者メールアドレス
define('ADMIN_MAIL', '');
// HTMlエスケープ
function h($str) {
	return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
// 共通ファイル読み込み
require_once( __DIR__ . '/utility.php');

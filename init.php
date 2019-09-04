<?php
session_start();

$site_url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . '/';
define('HOME_URL', $site_url . 'myphp/github-Hoshuyama-contact-form/');

define('ADMIN_MAIL', '');
function h($str) {
	return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

require_once( __DIR__ . '/utility.php');

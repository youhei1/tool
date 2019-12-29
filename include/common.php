<?php

require_once 'config.php';

if (!defined('DIR_SITE_INCLUDE')) {
	define('DIR_SITE_INCLUDE', __DIR__ . '/');
}

if (!defined(('SITE_NAME')) && isset($site_name) && !empty($site_name)) {
	define('SITE_NAME', $site_name);
}




if (!function_exists('the_page_title')) {
	function the_page_title(...$titles) {
		$titles[] = SITE_NAME;
		echo join('｜', $titles);
	}
}
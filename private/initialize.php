<?php
	

	define('PRIVATE_FOLDER', dirname(__FILE__));
	define('PROJECT_PATH', PRIVATE_FOLDER);
	$current = $_SERVER['SCRIPT_NAME'];
	$project_end = strpos($current, '/public');
	$project_root = substr($_SERVER['SCRIPT_NAME'], 0, $project_end);
	
	define('WWW_ROOT', $project_root) ;
	define('PUBLIC_PATH', WWW_ROOT . '/public');
	define('PRIVATE_PATH', WWW_ROOT . '/private');

	$_AWARDS = 83;
	$_NEW = 5;
	$_CITIES = 52;
?>
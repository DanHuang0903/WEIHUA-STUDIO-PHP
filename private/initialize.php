<?php require_once('functions.php'); ?>
<?php
	
	
	define('PRIVATE_FOLDER', dirname(__FILE__));
	define('PROJECT_PATH', PRIVATE_FOLDER);
	$current = $_SERVER['SCRIPT_NAME'];
	echo $current ;
	echo "+" ;
	$project_end = root($current);
	echo $project_end ;
	echo "+";
	$project_root = substr($_SERVER['SCRIPT_NAME'], 0, $project_end);
	define('WWW_ROOT', $project_root) ;
	define('PUBLIC_PATH', WWW_ROOT . '/public');
	define('PRIVATE_PATH', WWW_ROOT . '/private');
	echo PUBLIC_PATH ;

	$_AWARDS = 83;

?>

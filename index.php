<?php 
/**
 * ownMVC project
 */
	define('CORE', 'core/');
	
	require 'core/bootstrap.php';
 	require 'core/controller.php';
	require 'core/model.php';
 	require 'core/view.php';

	//
	//function __autoload($class) {
   // require CORE . $class .".php";
	//}
	
	//session
	require 'core/session.php';
	
	//dbase
	require 'core/database.php';
	
	//config
	require 'config/path.php';
	
	//session start
	session::init();
	
	//Bootstrap file init
	$app = new bootstrap;

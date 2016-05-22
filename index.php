<?php 
/**
 * ownMVC project
 * 
 * do zmiany:
 * error
from model-method to controller repair
 * 
 * a jeœli mamy dwa takie same metody np run to ustawiamy namespace
 */
 
 	//autoload class file
	function __autoload($class) {
   require "core/" . $class .".php";
	}
	
	//config
	require 'config/path.php';
	
	//session start
	session::init();
	
	//Bootstrap file init
	$app = new bootstrap;

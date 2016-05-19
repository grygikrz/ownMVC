<?php

/**
 * ownMVC project
 */
class view {
	
	function __construct() {

	}
	function render($url){
		
		require 'views/header.php';
		require 'views/'.$url.'.php';
		require 'views/footer.php';
		
	}
}


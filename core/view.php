<?php

/**
 * ownMVC project
 */
class view {
	
	function __construct() {

	}
	function render($url){
		
		require 'views/'.$url.'.php';
		
	}
}


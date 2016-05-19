<?php

/**
 * 
 */
class index extends controller {

	function __construct() {
	$get = new view;
	$get->render('index/index');

	}
}

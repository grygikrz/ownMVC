<?php

/**
 * Login: root
 * Password: root
 */
class login extends controller {
	
	function __construct() {
	$get = new view;
	$get->render('login/index');
	}
}

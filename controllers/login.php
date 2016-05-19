<?php

/**
 * Login: root
 * Password: root
 *
 * ownMVC project
 */
class login extends controller {
	
	function __construct() {
	$get = new view;
	$get->render('login/index');
	}
}

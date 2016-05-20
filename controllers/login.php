<?php

/**
 * Login: root
 * Password: root
 *
 * ownMVC project
 */
class login extends controller {
	
	function __construct() {
        parent::__construct();
	}
	
	
		function index() {
		
        $this->view->render('header');
        $this->view->render('login/index');
        $this->view->render('footer');
		
	}
}

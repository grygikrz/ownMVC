<?php
/**
 * ownMVC project
 */

class error extends controller {
	
	function __construct() {	
	        parent::__construct();	
	}
	
	function index($error=''){
		
        $this->view->errorMsg = $error;
		switch($error) {
			case 'error404':
			$error = "404 Error - This page doesnt exist'";
			break;
		}
		$this->view->errorMsg = $error;
		
		
        $this->view->render('header');
        $this->view->render('error/index');
        $this->view->render('footer');
	
	}

}

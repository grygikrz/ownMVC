<?php

/**
 * ownMVC project
 */
 
class index extends controller {

	function __construct() {
        parent::__construct();
	}
	
	function index() {
		
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
		
	}
}

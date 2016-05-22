<?php

/**
 * ownMVC project
 */
 
class index extends controller {

	function __construct() {
        parent::__construct();
	}
	
	function index() {
		
		 $this->view->show = $this->model->show();
		
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
		
	}

	// for testing purpose
		function test($one="",$two="",$three=""){
		echo "none";
		echo $one;
		echo $two;
		echo $three;
		}
}

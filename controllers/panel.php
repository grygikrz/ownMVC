<?php
/**
 * ownMVC project
 */
class panel extends controller {
	
	function __construct() {
		
	if (session::get('loggedIn') == false){
			header('location: ./login');
			exit;
		}	
		
        parent::__construct();
	}	
	
		function index() {
		
        $this->view->render('header');
        $this->view->render('panel/index');
        $this->view->render('footer');
		
	}
		
		function add() {
		$this->model->add();
		
		$this->view->render('header');
        $this->view->render('panel/add');
        $this->view->render('footer');
	}
}
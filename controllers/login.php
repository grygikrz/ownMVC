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
		
		function run(){
			
		$array = array('login' => $_POST['login'], 'password' => $_POST['password']);
	
		$count = $this->model->check($array);
		// var_dump($question);
		
		if($count > 0){
			session::init();
			session::set('loggedIn', true);
			header('Location: ../login');
				}else{
					header('Location: ../index');
				}
		}
			
		function logout(){
				session::destroy();
				header('location:'.DIR.'/login');
				exit;
		}
}

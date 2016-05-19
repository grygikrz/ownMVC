<?php 
/**
 * ownMVC project
 */
class login_model extends model {
	
	function __construct() {
		parent::__construct();
	}
	function run(){
		$login = $_POST['login'];
		$password = $_POST['password']; 
		
		$question = $this->db->prepare("SELECT id FROM users WHERE login = :login AND password = md5(:password)");
		$question->execute(array(':login'=> $_POST['login'], ':password' =>$_POST['password']));
		// var_dump($question);
		$count = $question->rowCount();
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

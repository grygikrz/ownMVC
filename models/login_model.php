<?php 
/**
 * ownMVC project
 */
class login_model extends model {
	
	function __construct() {
		parent::__construct();
	}
	function check($array){
		var_dump($array);
		$login = $array['login'];
		$password = $array['password'];
		$obj = $this->db->prepare("SELECT id FROM users WHERE login = :login AND password = md5(:password)");
		$obj ->execute(array(':login'=> $login, ':password' => $password));
		$count = $obj->rowCount();
		return $count;
	}
}

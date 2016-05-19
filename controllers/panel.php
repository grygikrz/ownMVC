<?php
class panel extends controller {
	
	function __construct() {
		
	if (session::get('loggedIn') == false){
			header('location: ./login');
			exit;
		}	
		
$get = new view;
$get->render('panel/index');
	}	
}
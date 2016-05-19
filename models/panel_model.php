<?php

class panel_model extends model {
	
	function __construct() {
		parent::__construct();
	}
	function add(){
	echo "test";
		$title = $_POST['title'];
		$url = $_POST['url'];
		
		$question = $this->db->prepare('INSERT INTO urls (title,url)VALUES (:title, :url)');
		$execute = $question->execute(array(':title'=>$title,':url'=>$url));
		echo  '<pre>';
		var_dump($question);
		var_dump($execute);
		echo '</pre>';
		
	}
}

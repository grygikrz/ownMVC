<?php
/**
 * ownMVC project
 */
class panel_model extends model {
	
	function __construct() {
		parent::__construct();
	}
	function add(){
		
		$title = $_POST['title'];
		$url = $_POST['url'];
		
		$question = $this->db->prepare('INSERT INTO urls (title,url)VALUES (:title, :url)');
		$array = array(':title'=>$title,':url'=>$url);
		foreach($array as $key => $value):
			$question->bindValue($key, $value);
		endforeach;
		$question->execute();
		echo "Added new link!";
	}
}

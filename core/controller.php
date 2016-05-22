<?php

/**
 * ownMVC project
 */
class controller {
	
		
		public function __construct(){
	        $this->view = new View();
			
		}
			
			function loadModel($model){
			$url = 'models/'.$model.'_model.php';
			require $url;
			$model =  $model.'_model';
			$this->model =  new $model;
				}
}

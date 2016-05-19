<?php

/**
 * 
 */
class controller {
	
		public function __construct(){

		}
			
			function loadModel($model){
			$url = 'models/'.$model.'_model.php';
			require $url;
			$model =  $model.'_model';
			return new $model;
				}
}

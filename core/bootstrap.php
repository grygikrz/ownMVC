<?php

/**
 *  ownMVC project
 */
class bootstrap {

	
	function __construct(){
		
	// if nothing get, show index page
	$url = !empty($_GET['url']) ? $_GET['url'] : $_GET['url'] = 'index' ;	
	
	// Filter URL
	$url = filter_var($url, FILTER_SANITIZE_URL);
	
	// prepare URL
	$url = rtrim( $url,  '/' );	
	$url = explode('/', $url);
	$count = count($url);
	
	// Var for checking if files exist
	$file = 'controllers/'.$url[0].'.php';
	$modelfile = 'models/'.$url[0].'_model.php';
		
	if(file_exists($file)){
				
			if(!empty($url[0])){
				
					require $file;
					$controller = new $url[0];
					
					if(file_exists($modelfile)){
					$controller->loadModel($url[0]);
					}
						if(!empty($url[1])){

						
						//for debug
							
						//	echo '<pre>';
						//	var_dump($model);
						//	echo $url[1];
						//	echo '</pre>';
						
							if (method_exists($controller , $url[1])) {
													
								switch ($count) {
									case 2:
										 $controller ->$url[1]();	
									break;
									case 3:
										// one parametr into method
											$controller ->$url[1]($url[2]);
									break;
									case 4:
										// two parametrs into method
											$controller ->$url[1]($url[2], $url[3]);
									break;
									case 5:
										// three parametrs into method
											$controller ->$url[1]($url[2], $url[3], $url[4]);
									break;
																	
								}	
						
								
							 }else{
							 // method in file not exist;	
							 $controller ->index('error404');
							 }        
					}else{
						// no method
						$controller ->index('error404');
					}
				}
	
		}else{
					//	file/page not exist;		
					require 'controllers/error.php';	
					$controller = new error;
					$controller ->index('error404');
				}  
	}
}

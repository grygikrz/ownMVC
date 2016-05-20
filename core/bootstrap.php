<?php

/**
 *  ownMVC project
 */
class bootstrap {

	
	function __construct(){
	// if nothing get, show index page
	$url = !empty($_GET['url']) ? $_GET['url'] : $_GET['url'] = 'index' ;	
	$url = rtrim( $url,  '/' );		
	
	// filter variable
	$url = filter_var($url, FILTER_SANITIZE_URL);
	
	$url = explode('/', $url);
	$count = count($url);
	$file = 'controllers/'.$url[0].'.php';
	
	if(file_exists($file)){
			if(!empty($url[0])){
					$controller =  new controller();
					$model = $controller->loadModel($url[0]);
					// Call view from page controller
					require $file;
					new $url[0];
					
						if(!empty($url[1])){

						
						//for debug
							
						//	echo '<pre>';
						//	var_dump($model);
						//	echo $url[1];
						//	echo '</pre>';
						
							if (method_exists($model , $url[1])) {
													
								switch ($count) {
									case 2:
										 $model ->$url[1]();	
									break;
									case 3:
										// one parametr into method
											$model ->$url[1]($url[2]);
									break;
									case 4:
										// two parametrs into method
											$model ->$url[1]($url[2], $url[3]);
									break;
									case 5:
										// three parametrs into method
											$model ->$url[1]($url[2], $url[3], $url[4]);
									break;
																	
								}	
						
								
							 }else{
							   // echo "method in file method not exist";
								header("Location: ../index");				            
							 }        
					}else{
						"method from url not exist";
					}
				}
	
		}else{
							   // echo "file/page not exist";
								header("Location: ".DIR."/index");				            
							 }  
	}
}

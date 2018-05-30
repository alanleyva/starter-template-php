<?php 
	
	
	$request  = $_SERVER['REQUEST_URI'];
	$params     = explode("/", $request);
	$lang =$params[1];
	$full_path=strstr(dirname(__FILE__), 'public_html', true)."public_html/";
	$full_path = str_replace("//", "/", $full_path);
	
	///remove '?' from directory name
	$file_name = $params[2];
	if(!strstr('?', $params[2])){
	$file_name_url=explode('?',$params[2]);

	$file_name = $file_name_url[0];
	}
	include $full_path.$file_name.'/index.php';
	 ?>
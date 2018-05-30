<?php 
	$full_path=strstr(dirname(__FILE__), 'public_html', true)."public_html/";
	$full_path = str_replace("//", "/", $full_path);
	include ($full_path.'en/index.php');
	 ?>
<?php 
	$request  = $_SERVER['REQUEST_URI'];
	$params     = explode("/", $request);
	$lang =$params[1];
	include '/var/www/triunion.com.mx/triunion_v1/'.$params[2].'/index.php';
	 ?>
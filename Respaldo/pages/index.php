<?PHP
	$request  = str_replace('/pages/', "", $_SERVER['REQUEST_URI']);
	$params     = explode("/", $request);
	$relative_path = "/pages";
	include('/var/www/northlabs.mx/public_html/back_end/core.php');
	$core=new core();
			if(file_exists($core->full_path.$relative_path.'/'.$params[0].'.php')){
				include($core->full_path.$relative_path.'/'.$params[0].'.php');
			}else{
				include('/var/www/northlabs.mx/public_html/pages/404.php');
			}

	include('/var/www/northlabs.mx/public_html/back_end/core_end.php');
?>
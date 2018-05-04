
<?PHP
	$relative_path = "/pages";
	include('/var/www/triunion.com.mx/triunion_v1/back_end/core.php');
	$core=new core();
	$core->lang_c= $lang;
			if(file_exists($core->full_path.$relative_path.'/'.$params[3].'.php')){
				include($core->full_path.$relative_path.'/'.$params[3].'.php');
			}else{
				include('/var/www/triunion.com.mx/triunion_v1/pages/404.php');
			}

	include('/var/www/triunion.com.mx/triunion_v1/back_end/core_end.php');
?>

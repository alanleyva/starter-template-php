<?PHP
	$relative_path = "/pages";
	$full_path=strstr(dirname(__FILE__), 'public_html', true)."public_html/";
	include($full_path.'back_end/core.php');
	$core=new core();
	$core->lang_c= $lang;
	
	$page_name = $params[3];
	$page_name =  str_replace("_", " ", $page_name);
	$file_name=$params[3];
	if(!strstr('?', $params[3])){
	$file_name_url=explode('?',$params[3]);

	$file_name = $file_name_url[0];
	}
	//echo ($core->full_path.$relative_path.'/'.$file_name.'.php');
	if(file_exists($core->full_path.$relative_path.'/'.$file_name.'.php')){
		include($core->full_path.$relative_path.'/'.$file_name.'.php');
	}else{
		include($core->full_path.'/pages/404.php');
	}

	include($full_path.'back_end/core_end.php');
?>

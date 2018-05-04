<?PHP
	$request  = str_replace('/pages/', "", $_SERVER['REQUEST_URI']);
	$params     = explode("/", $request);
	$relative_path = "/pages";
	$full_path=strstr(dirname(__FILE__), 'public_html', true)."public_html/";
	$full_path = str_replace("//", "/", $full_path);
	include($full_path.'/back_end/core.php');
	$core=new core();
	$core->core(__FILE__,'Alan L', '2017-07-23', '2017-07-23 23:19');
	$core->render("main");
 ?>
<div class="container">
	<h1>Hello</h1>
</div><!-- /.container -->
<?php  
	include($full_path.'/back_end/core_end.php');
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

class core{
	public $programador;
	public $file;
	public $fecha_creado;
	public $fecha_editado;
	public $dominio_url;

	public $layout;
	public $includes=array();
	public $ajax=array();
	public $api=array();
	public $redirect=false;
	public $title;
	public $debug=false;
	public $full_path="";
	public $scripts = array();
	public $external_scripts = array();
	function __construct(){
			$full_path=strstr(dirname(__FILE__), 'public_html', true)."public_html/";
			$this->full_path = str_replace("//", "/", $full_path);
			if(isset($_SERVER['HTTP_HOST'])){
			$this->dominio_url = str_replace("www.", "", $_SERVER['SERVER_NAME']);
	}
	}
	function core($file, $programador, $fecha_creado, $fecha_editado){
		$this->file=$file;
		$this->programador=$programador;
		$this->fecha_creado=$fecha_creado;
		$this->fecha_editado=$fecha_editado;
    
	}	
	
	
	function render($layout=''){
		
		//conexiones a la base de datos
		//global $mysqli; 
		//include( '/var/www/triunion.com.mx/triunion_v1/' );
		
		//if($this->debug==true){
			error_reporting('E_ALL');
			ini_set('display_errors', '1');
		//}
		
		if($layout!=''){
			$this->layout=$layout;
			include($this->full_path.'/layouts/'.$this->layout.'/header.php');
		}
		
		
	}
	
}// fin de class

?>
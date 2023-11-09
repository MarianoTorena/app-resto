<?php 

	session_name();

	include ('env.php');
	include ('lib/enginetpl.php');

	if(!isset($_SESSION[APP_NAME])){
		$_SESSION[APP_NAME] = array();
	}

	$_ROUTE = explode("/", $_GET["seccion"]);

	// Verifica si existe el controlador de la ruta
	if($_ROUTE[0]!=""){
		$section = $_ROUTE[0];

		if(!file_exists("controllers/{$section}Controller.php")){
			$section = "404";
		}

	}else{
		$section = "landing";
	}

	//var_dump($section);

	include "controllers/{$section}Controller.php";
 ?>
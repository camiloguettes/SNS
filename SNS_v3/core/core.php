<?php 
	session_start();
	spl_autoload_register(function($nombreClase){
	require_once 'model/'.$nombreClase.'.php';
});
	include 'model/db.php';
	include 'model/PersonaModel.php';
	include 'model/TipodocumentoModel.php';
	include 'model/RolModel.php';
	include 'model/NovedadModel.php';
	include 'model/PermisoModel.php';
	include 'model/superconsultaModel.php';
	include 'model/fichaModel.php';
	include 'model/programaModel.php';
	include 'model/sedeModel.php';
	include 'model/ciudadModel.php';


// $listar = NULL;
// $directorio=opendir("model/");
// while ($elemento = readdir($directorio)) {
	
// 	if (is_dir("model/".$elemento)) {
// 			// include"model/".$elemento;
// 	}else{
// 		// include"model/".$elemento;
// 		// echo $elemento."<br>";
// 		if (!$elemento=='db.php') {

// 			$listar.="model/".$elemento;
// 		}
// 	}

// }

// include $listar;
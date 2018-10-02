<?php

require_once 'core/core.php';
include('view/inc/header.php');
	
	$url=isset($_GET["url"]) ? explode('/',$_GET["url"]): null;
	// var_dump($url);
	$c=isset($url[0])?$url[0]:'index';
	$m=isset($url[1])?$url[1]:null;
	$p=isset($url[2])?$url[2]:null;
	if (!file_exists('controller/'.ucwords($c).'Controller.php')) {
	    $c='index';
	}
	$c=ucwords($c).'Controller';
	include('controller/'.$c.'.php');
	$c=new $c;
	if (!method_exists($c,$m)) {
	    $m='index';
	}

	call_user_func([ $c, $m],$p);

// call_user_func_array([$c,$m], );
include('view/inc/footer.php');
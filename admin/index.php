<?php
require_once "../config.php";

if(!Session::get("status")||Session::get("status")!=1){
	header("location:logovanje");
}

$cont=isset($_GET['mvccontroller'])?$_GET['mvccontroller']:"Admin";
$method=isset($_GET['mvcmethod'])?$_GET['mvcmethod']:"novePrijave";

$cont=$cont."Controller";
$c=new $cont;
$c->$method();
?>

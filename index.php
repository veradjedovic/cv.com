<?php 
require_once "config.php";

$cont=isset($_GET['mvccontroller'])?$_GET['mvccontroller']:"Index";
$method=isset($_GET['mvcmethod'])?$_GET['mvcmethod']:"prijava";

$cont=$cont."Controller";
$c=new $cont;
$c->$method();
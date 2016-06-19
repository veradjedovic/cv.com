<?php 
require_once "../../config.php";

if(!isset($_POST['tbUsername']) || !isset($_POST['tbPassword'])){
	die("Invalid");
}
$username=$_POST['tbUsername'];
$password=md5($_POST['tbPassword']);
$submit=$_POST['btnSubmit'];

$username=str_replace("'","",$username);
$username=str_replace("-","",$username);
$password=str_replace("'","",$password);
$password=str_replace("-","",$password);

$admin=Admin::login($username,$password);
if($admin){
	header("location:../admin");
}else
	echo "Invalid user";
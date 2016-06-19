<?php 
//definisanje ststusa iz baze
define("KORISNICINEVIDLJIVO", "0");
define("KORISNICIVIDLJIVO", "1");
define("KORISNICIOBRISANO", "2");
define("SEKTORINEVIDLJIVO", "0");
define("SEKTORIVIDLJIVO", "1");
define("STRANENEVIDLJIVO", "0");
define("STRANENAV", "1");
define("STRANESIDEBAR", "2");
define("ANGAZMANNEVIDLJIVO", "0");
define("ANGAZMANVIDLJIVO", "1");
define("SSPREMANEVIDLJIVO", "0");
define("SSPREMAVIDLJIVO", "1");
define("OPSTINANEVIDLJIVO", "0");
define("OPSTINAVIDLJIVO", "1");
define("GODINENEVIDLJIVO", "0");
define("GODINEVIDLJIVO", "1");
define("VDOZVOLANEVIDLJIVO", "0");
define("VDOZVOLAVIDLJIVO", "1");
define("RVREMENEVIDLJIVO", "0");
define("RVREMEVIDLJIVO", "1");
define("STR_SPREMANEVIDLJIVO", "0");
define("STR_SPREMAVIDLJIVO", "1");

define("APP_PATH","c:/wamp/www/cv.com");
define("Loaded",TRUE);

function aload($name) {
    if(file_exists(APP_PATH."/controller/".$name.".php"))        
    require_once APP_PATH.'/controller/'.$name.'.php';
}

function aload2($name) { 
    if(file_exists(APP_PATH.'/classes/'.$name.'.php'))        
    require_once APP_PATH.'/classes/'.$name.'.php'; 
}

spl_autoload_register("aload");
spl_autoload_register("aload2");


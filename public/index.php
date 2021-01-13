<?php
 //$data= $_SERVER['QUERY_STRING'];

 //echo $data;

//print_r($_SERVER);

//require_once("../app/core/app.php");
//$app=new app();

define("Root",dirname(__DIR__));
//echo Root;
define("DS",DIRECTORY_SEPARATOR);
define("App",Root.DS.'app');
define("CONTROLLERS",App.DS.'controllers');
define("VIEWS",App.DS.'views');
define("CORE",App.DS.'core');
//echo CONTROLLERS;

//config

define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","myproflio");
define("DATABASE_TYPE","mysql");
define("DOMAIN_NAME","http://myportoflio.test/");

define('Domain_Path',DOMAIN_NAME.'/');
// echo PUBLIC1;die;


//require_once(CORE.DS."app.php");
//$app=new app();
require_once("../vendor/autoload.php");
$app=new MVC\core\app();
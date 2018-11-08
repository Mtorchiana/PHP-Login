<?php
session_start();
include_once("userclass.php");
include_once("conexion.class.php");
include_once("funciones.php");

$entro = false;
$action=@$_GET['action'];
switch($action):
	case "log":{
		$id = Usuario::login($_POST["Mail"],$_POST["Password"]);	
		if ($id)
			{
			 $_usuario = new Usuario($id);			
			  $_SESSION["usuario"] = serialize($_usuario);
			  $entro = true;
			  include_once("home.php");
			  die;
			}
		else
			{
				include_once("login.php");
				die;
			}
		}
	break;
	case "alta":{
		$alta = Usuario::newuser($_POST);
			if($alta)
			{
				echo "Te registraste correctamente";
				include_once("login.php");
			}
			else
			{
				echo "Te registraste mal";
			}
	}
	break;
	default: include("login.php");
endswitch;
?>
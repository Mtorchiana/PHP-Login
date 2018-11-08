<?php
class Usuario 
{	
	var $idUsuario; 
	var $email; 
	var $password; 
	
	function login($_user,$_password)
		{
		$conn = new Conexion();
		$sql = $conn->prepare("SELECT * FROM `usuario` WHERE Mail = :MAIL and Password = :PASSWORD");
		$sql->execute(array("MAIL" => $_user, "PASSWORD" => $_password));
		$resultado = $sql->fetch(PDO::FETCH_ASSOC);	
		if($resultado):
			return($resultado["IDU"]);
		else:
			return(false);
		endif;	
		}

	function Usuario($_id=0) 
	{
		if ($_id<>0) 
		{
		$conn = new Conexion();
		$sql = $conn->prepare("select * from usuarios where IDU=:ID"); 
		$sql->execute(array('ID' => $_id));
		$datos_carga = $sql->fetch(PDO::FETCH_ASSOC);	
		$this->idUsuario = $datos_carga['IDU']; 
		$this->email = $datos_carga['Mail']; 
		$this->password = $datos_carga['Password']; 
		}
	}
	function newuser($_PARAM)
	{
	$conn = new Conexion();
	$sql = $conn->prepare("INSERT INTO `usuario`(`Mail`, `Password`) VALUES (:MAIL,:CLAVE)");
	$sql->execute(array("MAIL" => $_PARAM['Mail'], "CLAVE" => $_PARAM['Password']));
	return true;
	}

}
?>
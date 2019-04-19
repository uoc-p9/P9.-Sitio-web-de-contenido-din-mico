<?php

require_once 'Modelo/conexion.php';		


class Usuario{
	
	private $pdo;
	
	public $username;
	public $password;
	
	public function __CONSTRUCT(){
		try{
			$this->pdo = Conexion::Conectar();     
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Registrar(Usuario $data){

		try {

		$sql = "INSERT INTO usuario (id_nivel,nombre_usuario,password_usuario) 
				VALUES (1 , ?, ?)";
				
		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre_usuario,
                    $data->password_usuario                )
			);
		} catch (Exception $e) {

			die($e->getMessage());
		}
	}
	

	
}

?>
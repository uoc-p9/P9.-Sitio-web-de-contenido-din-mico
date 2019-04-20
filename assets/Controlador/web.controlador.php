<?php

require_once 'Modelo/modelo_usuarios.php';		


class WebControlador{
	
	private $usuario;

	public function __CONSTRUCT(){
		
				$this->usuario= new Usuario();

    }
    
    public function Index(){
		
        require_once 'Vista/header.php';
        require_once 'Vista/Contenido/home.php';
        require_once 'Vista/footer.php';
    }
	
	public function Registro_usuario(){
		
        require_once 'Vista/header.php';
        require_once 'Vista/Contenido/registro.php';
        require_once 'Vista/footer.php';
    }
	
	public function Login_usuario(){
		
        require_once 'Vista/header.php';
        require_once 'Vista/Contenido/login.php';
        require_once 'Vista/footer.php';
    }
	
	public function Guardar_usuarios(){


		$user = new Usuario();
        
        $user->nombre_usuario = $_REQUEST['nombre_usuario'];
        $user->password_usuario = $_REQUEST['password_usuario'];
       	$this->usuario->Registrar($user);
        
        echo "Usuario registrado con exito, <a href='index.php'>volver</a>";
	}
	



}

?>
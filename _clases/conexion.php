<?php 

class Conexion{
	//atributos
	private $conexion, $error, $conectado;
	
	//constructor
	public function __construct(){
		// Create connection
		$this->conexion = new mysqli("localhost","pizzacua_user","Pizza1520!","pizzacua_base");
		
		// Check connection
		if ($this->conexion->connect_error){
			$this->conectado = false;
			$this->error = "Connection failed: ".$this->conexion->connect_error;				
		}else{
			$this->conectado = true;	
		}
		
		
	}
	
	//metodos
	public function getConexion(){
		if($this->conectado)
			return $this->conexion;
		else
			throw new Exception('Error al conectar a la Base de datos');	
	}

	public function close(){
		$this->conexion->close();
	}
}

?>
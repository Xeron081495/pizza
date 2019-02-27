<?php
//librerias
include_once 'conexion.php';

class Datos{
	//atributos
	protected $nombre, $slogan, $logo, $facebook, $twitter, $telefono, $correo, $direccion, $ciudad;
	
	//constructor
	public function __construct(){
		$conn = new Conexion();
		$sql = "SELECT * FROM datos WHERE id='1'";
		if($resultado = $conn->getConexion()->query($sql))
			while($dato = $resultado->fetch_assoc()){
				$this->nombre = $dato['nombre'];
				$this->slogan = $dato['slogan'];
				$this->logo = $dato['logo'].'.'.$dato['logo_ex'];
				$this->facebook = $dato['facebook'];
				$this->twitter = $dato['twitter'];
				$this->telefono = $dato['telefono'];
				$this->correo = $dato['correo'];
				$this->direccion = $dato['direccion'];
				$this->ciudad = $dato['ciudad'];
			}	
		$conn->close();			
	}
	
	//metodos
	public function getNombre(){
		return $this->nombre;
	}
	public function getSlogan(){
		return $this->slogan;
	}
	public function getLogo(){
		return $this->logo;
	}
	public function getFacebook(){
		return $this->facebook;
	}	
	public function getTwitter(){
		return $this->twitter;
	}
	public function getTelefono(){
		return $this->telefono;
	}
	public function getCorreo(){
		return $this->correo;
	}
	public function getDireccion(){
		return $this->direccion;
	}
	public function getCiudad(){
		return $this->ciudad;
	}	
	// crear el titulo de <title> ... </title>
	public function generarTitulo(){
		$titulo = $this->getNombre();
		if(!empty($this->getSlogan()))
			$titulo = $titulo." | ".$this->getSlogan(); 	
		if(!empty($this->getDireccion())){
			$titulo = $titulo." | ".$this->getDireccion();	
			if(!empty($this->getCiudad()))
				$titulo = $titulo.", ".$this->getCiudad();
		}else{
			if(!empty($his->getCiudad()))
				$titulo = $titulo." | ".$this->getCiudad();
		}
		return $titulo;
	}
}

class Datos2 extends Datos{
	//atributos
	protected $client_id, $client_secret, $public_key, $access_token, $nosotros;
	
	//constructor
	public function __construct(){
		parent::__construct();
		$conn = new Conexion();
		$sql = "SELECT * FROM datos_2 WHERE id='1'";
		if($resultado = $conn->getConexion()->query($sql))
			while($dato = $resultado->fetch_assoc()){
				$this->client_id = $dato['client_id'];
				$this->client_secret = $dato['client_secret'];
				$this->public_key = $dato['public_key'];
				$this->access_token = $dato['access_token'];
				$this->nosotros = $dato['nosotros'];
			}	
		$conn->close();	
	}
	
	//metodos
	public function getClientId(){
		return $this->client_id;
	}
	public function getClientSecret(){
		return $this->client_secret;
	}
	public function getPublicKey(){
		return $this->public_key;
	}
	public function getAccessToken(){
		return $this->access_token;
	}
	public function getNosotros(){
		return $this->nosotros;
	}
	
}





?>
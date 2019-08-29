<?php
//librerias
include_once 'conexion.php';

class Menu{
	
	//retorna una lista del tipo [[N,Nombre,[Productos]],...,[N,Nombre,[Productos]]]
	public function getMenu(){
		$menu = array();
		$lista = $this->getMenuAux();
		foreach($lista as $producto){
			$sabores = array();
			foreach($producto["sabores"] as $sabor){
				$s = $this->getSabor($sabor);
				if($s=="Muzza" && count($sabores)>0){
					array_push($sabores,$sabores[0]);
					$sabores[0] = $s;
				}else
					array_push($sabores,$this->getSabor($sabor));
			}
			$aux = ["id" => $producto["id"], "nombre" => $this->armarNombre($sabores), "sabores" => $sabores];
			array_push($menu,$aux);
		}		
		return $menu;
	}

	public function getMenuEspecial(){
		$menu = array();
		$lista = $this->getMenuAux();
		foreach($lista as $producto){
			$sabores = array();
			foreach($producto["sabores"] as $sabor){
				$s = $this->getSabor($sabor);
				if($s=="Muzza" && count($sabores)>0){
					array_push($sabores,$sabores[0]);
					$sabores[0] = $s;
				}else
					array_push($sabores,$this->getSabor($sabor));
			}
			$aux = ["id" => $producto["id"], "nombre" => $this->armarNombreEspecial($sabores), "sabores" => $sabores];
			array_push($menu,$aux);
		}		
		return $menu;
	}
	private function armarNombreEspecial($sabores){
		$cantidad = count($sabores);
		if($sabores==1)// tiene un sabor
			return '<a href="menu.php?id='.urlencode($sabores[0]).'">'.$sabores[0].'</a>';
		else{ // tiene 2 o mas 			
			if($this->saborEspecial($sabores)===FALSE){
				$nombre = '<a href="menu.php?id='.urlencode($sabores[0]).'">'.$sabores[0].'</a>';
				for($i=1; $i<$cantidad;$i++){
					if($i==$cantidad-1){
						$nombre = $nombre.' y <a href="menu.php?id='.urlencode($sabores[$i]).'">'.$sabores[$i].'</a>';
					}else{
						$nombre = $nombre.', <a href="menu.php?id='.urlencode($sabores[$i]).'">'.$sabores[$i].'</a>';
					}
				}
			}else{
				$sabores = $this->saborEspecial($sabores);
				$nombre = '<i>'.$sabores[0].'</i> : <a href="menu.php?id='.urlencode($sabores[1]).'">'.$sabores[1].'</a>';
				for($i=2; $i<$cantidad;$i++){
					if($i==$cantidad-1){
						$nombre = $nombre.' y <a href="menu.php?id='.urlencode($sabores[$i]).'">'.$sabores[$i].'</a>';
					}else{
						$nombre = $nombre.', <a href="menu.php?id='.urlencode($sabores[$i]).'">'.$sabores[$i].'</a>';
					}
				}	
			}						
		}
		return $nombre;
	}
	

	
	//recibe un array con sabores y devuelve las opciones
	public function getPosibilidades($sabores){
		$menu = $this->getMenu();
		$pos = array();
		foreach($menu as $producto){
			if($this->pertenece($sabores,$producto["sabores"]))
				array_push($pos,$producto);
		}
		return $pos;
	}
	
	public function getSabores(){
		$conn = new Conexion();
		$sabores = array();
		$sql = "SELECT * FROM sabores ORDER BY nombre ASC";
		if($resultado = $conn->getConexion()->query($sql))
			while($dato = $resultado->fetch_assoc()){
				if($dato['id']==5){
					$sabores[count($sabores)] = $sabores[0];
					$sabores[0] = array( "id"=>$dato['id'], "nombre"=> $dato['nombre'] ); //es muzza
				}else
					array_push($sabores,array( "id"=>$dato['id'], "nombre"=> $dato['nombre'] ));
			}
		$conn->close();
		return $sabores;
	}
	
	private function armarNombre($sabores){
		$cantidad = count($sabores);
		if($sabores==1)// tiene un sabor
			'<a href="menu.php?id='.urlencode($sabores[0]).'">'.$sabores[0].'</a>';
		else{ // tiene 2 o mas 			
			if($this->saborEspecial($sabores)===FALSE){
				$nombre = '<a href="menu.php?id='.urlencode($sabores[0]).'">'.$sabores[0].'</a>';
				for($i=1; $i<$cantidad;$i++){
					if($i==$cantidad-1){
						$nombre = $nombre.' y <a href="menu.php?id='.urlencode($sabores[$i]).'">'.$sabores[$i].'</a>';
					}else{
						$nombre = $nombre.', <a href="menu.php?id='.urlencode($sabores[$i]).'">'.$sabores[$i].'</a>';
					}
				}
			}else{
				$sabores = $this->saborEspecial($sabores);
				$nombre = "<i>".$sabores[0]."</i> : ".$sabores[1]."";
				for($i=2; $i<$cantidad;$i++){
					if($i==$cantidad-1){
						$nombre = $nombre.' y <a href="menu.php?id='.urlencode($sabores[$i]).'">'.$sabores[$i].'</a>';
					}else{
						$nombre = $nombre.', <a href="menu.php?id='.urlencode($sabores[$i]).'">'.$sabores[$i].'</a>';
					}
				}	
			}						
		}
		return $nombre;
	}
	
	private function saborEspecial($sabores){
		$especiales = $this->getSaboresEspeciales(); 
		for($i=0; $i<count($sabores);$i++){
			if(in_array($sabores[$i],$especiales)){
				$aux = $sabores[$i];
				$sabores[$i] = $sabores[0];
				$sabores[0] = $aux;
				return $sabores;
			}
		}			
		return false;
	}
	
	private function getSaboresEspeciales(){
		$conn = new Conexion();
		$lista = array();
		$sql = "SELECT * FROM sabores WHERE especial='1' ORDER BY id ASC";
		if($resultado = $conn->getConexion()->query($sql))
			while($dato = $resultado->fetch_assoc()){
				array_push($lista,$dato['nombre']);			
			}	
		$conn->close();		
		return $lista;
	}
	
	
	//agregar sabor a la lista de sabores
	public function agregarSabor($sabor){
		if(in_array($sabor,$this->getSabores())){
			throw new Exception('El sabor ya existe');
		}else{
			$conn = new Conexion();
			$sql = "INSERT INTO sabores (nombre) VALUES ('".$sabor."')";
			if($conn->getConexion()->query($sql) === false)
				throw new Exception('Error al subir sabor. (Error: '.$conn->getConexion()->error.')');
		}		
	}
	
	//agregar sabor a la lista de sabores
	public function agregarProducto($id,$sabores){		
		$sabores = json_encode($sabores);
		$conn = new Conexion();
		$sql = "INSERT INTO menu (id,sabores) VALUES ('$id','".$sabores."')";
		if($conn->getConexion()->query($sql) === false)
			throw new Exception('Error al subir producto. (Error: '.$conn->getConexion()->error.')');
	}
	
	//verifica si los elementos de array1 estan en array2
	private function pertenece($array1, $array2){
		foreach($array1 as $valor){
			if(!in_array($valor,$array2))
				return false;
		}
		return true;		
	}	
	
	//retorna una lista del tipo [[N,[1,2,3]],...,[N,[1,2,3]]]
	private function getMenuAux(){
		$conn = new Conexion();
		$lista = array();
		$sql = "SELECT * FROM menu ORDER BY id ASC";
		if($resultado = $conn->getConexion()->query($sql))
			while($dato = $resultado->fetch_assoc()){
				array_push(
					$lista,
					[	"id" => $dato['id'],
						"sabores" => json_decode($dato['sabores'])
					]
				);
				
			}	
		$conn->close();		
		return $lista;
	}
	
	//retorna el sabor asociado al id pasado por parametro
	private function getSabor($id){
		$conn = new Conexion();
		$sql = "SELECT * FROM sabores WHERE id='$id' LIMIT 1";
		if($resultado = $conn->getConexion()->query($sql))
			while($dato = $resultado->fetch_assoc()){
				$retorno = $dato['nombre'];
			}	
		$conn->close();	
		return $retorno;
	}	
	
	
	
	
}


		
	
	
	/*
	
	
	
	//atributos
	protected $id, $productos;
	
	//constrcutor
	public function __construct($id){
		$conn = new Conexion();
		$sql = "SELECT * FROM productos WHERE id='$id' OR utc='$id'";
		if($resultado = $conn->getConexion()->query($sql))
			while($dato = $resultado->fetch_assoc()){
				$this->id = $this->recuperarApostrofe($dato['id']);
				$this->utc = $this->recuperarApostrofe($dato['utc']);
				$this->nombre = $this->recuperarApostrofe($dato['nombre']);
				$this->imagen = $this->recuperarApostrofe($dato['imagen'].'.'.$dato['imagen_ex']);
				$this->descripcion = $this->recuperarApostrofe($dato['descripcion']);
				$this->categoria = $this->recuperarApostrofe($dato['categoria']);
				$this->precio = $this->recuperarApostrofe($dato['precio']);
				$this->oferta = $this->recuperarApostrofe($dato['oferta']);
				$this->stock = $this->recuperarApostrofe($dato['stock']);
				$this->direccion = $this->recuperarApostrofe($dato['link']);
				$this->visitas = $dato['visitas'];
			}	
		$conn->close();		
	}
	
	//metodos
	public function getID(){
		return $this->id;
	}
	public function getUTC(){
		return $this->utc;
	}	
	public function getNombre(){
		return $this->nombre;
	}
	public function getImagen(){
		return $this->imagen;
	}
	public function getDescripcion(){
		return $this->descripcion;
	}
	public function getCategoria(){
		return $this->categoria;
	}
	public function getPrecio(){
		return $this->precio;
	}
	public function getOferta(){
		return $this->oferta;
	}
	public function getStock(){
		return $this->stock;
	}
	public function getDireccion(){
		return $this->direccion;
	}
	public function getVisitas(){
		return $this->visitas;
	}
	
	//recueprar apostrofe
	function recuperarApostrofe($string){
		$original = "^^";
		$final = "'";
		$string = str_replace($original,$final,$string);	
	return $string;
	}
	
	public function sumarVisita(){
		$visitas = (int)$this->getVisitas()+1;
		
		$conn = new Conexion();
		$sql = "UPDATE productos SET visitas='".$visitas."' WHERE id='$this->id'";
		if ($conn->getConexion()->query($sql) === false){
			echo 'Error al cambiar al cargar visita. (Error: '.$conn->getConexion()->error.')';
		}		

	}
	
}*/

// class Productos{
	
	// public function getProductos(){
		// $productos = array();
		// $conn = new Conexion();
		// $sql = "SELECT * FROM productos ORDER BY id DESC";
		// if($resultado = $conn->getConexion()->query($sql))
			// while($dato = $resultado->fetch_assoc()){
				// array_push($productos,new Producto($dato['id']));
			// }	
		// $conn->close();
		// return $productos; 		
	// }
	
	// public function getUltimosProductos($cantidad){
		// $productos = $this->getProductos();
		// $retorno = array();
		// for($i=0;$i<$cantidad;$i++)
			// array_push($retorno,$productos[$i]);	
		// return $retorno;
	// } 
	
	// public function getMasVisitados($cantidad){
		// $productos = array();
		// $conn = new Conexion();
		// $sql = "SELECT * FROM productos ORDER BY visitas DESC LIMIT ".$cantidad."";
		// if($resultado = $conn->getConexion()->query($sql))
			// while($dato = $resultado->fetch_assoc()){
				// array_push($productos,new Producto($dato['id']));
			// }	
		// $conn->close();
		// return $productos; 		
	// }
	
	// public function getOfertas($cantidad){
		// $productos = array();
		// $conn = new Conexion();
		// $sql = "SELECT * FROM productos WHERE oferta NOT IN ('-') ORDER BY id DESC LIMIT ".$cantidad."";
		// if($resultado = $conn->getConexion()->query($sql))
			// while($dato = $resultado->fetch_assoc()){
				// array_push($productos,new Producto($dato['id']));
			// }	
		// $conn->close();
		// return $productos; 		
	// }
	
	// public function getProductosAleatorios($cantidad){
		// $productos = array();
		// $conn = new Conexion();
		// $sql = "SELECT * FROM productos ORDER BY RAND() LIMIT ".$cantidad."";
		// if($resultado = $conn->getConexion()->query($sql))
			// while($dato = $resultado->fetch_assoc()){
				// array_push($productos,new Producto($dato['id']));
			// }	
		// $conn->close();
		// return $productos; 	
	// }
	
	// public function imprimir_producto($producto){
		// echo '
		// <a href="productos/'.$producto->getDireccion().'" class="producto">
		  // <div class="foto_producto"><img class="img_producto" src="productos/'.$producto->getImagen().'"></div>
			// <h5 class="titulo">'.$producto->getNombre().'</h5>';
			// if($producto->getOferta()!='-'){ echo '<div class="oferta">'.$producto->getOferta().'</div>'; }
			// if($producto->getPrecio()!='0'){ echo '<div class="precio">$ '.$producto->getPrecio().'</div>'; }else{ echo '<div class="precio">Consultar precio</div>'; }
		// echo '
		// </a>';
	// }
	
	// public function imprimir_producto2($producto){
		// echo '
		// <a href="../productos/'.$producto->getDireccion().'" class="producto">
		  // <div class="foto_producto"><img class="img_producto" src="../productos/'.$producto->getImagen().'"></div>
			// <h5 class="titulo">'.$producto->getNombre().'</h5>';
			// if($producto->getOferta()!='-'){ echo '<div class="oferta">'.$producto->getOferta().'</div>'; }
			// if($producto->getPrecio()!='0'){ echo '<div class="precio">$ '.$producto->getPrecio().'</div>'; }else{ echo '<div class="precio">Consultar precio</div>'; }
		// echo '
		// </a>';
	// }
	
// }

?>
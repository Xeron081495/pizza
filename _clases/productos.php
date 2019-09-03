<?php
//librerias
include_once 'conexion.php';

class Menu{

	//retorna una lista de tipo [categoria, comidas]
	//	categoria es un string
	// 	comidas es una lista de tipo [comida,sabores,opcionales]
	//		comida es una lista con el id de la comida y un string con el nombre que puede ser nulo
	//		sabores es una lista de tipo [id sabor, nombre del sabor]
	//		opcionales es una lista de tipo [id sabor, nombre del sabor]
	public function getCarta(){
		//creo la carta
		$carta = array();
		
		//obtengo las categorias
		$categorias = $this->getCategorias();
		
		//recorro las categorias y busco sus comidas
		foreach($categorias as $categoria){
			//busco comidas
			$comidas = $this->getComidas($categoria);
			//creo array para guardar comidas de categoria	
			$carta[$categoria] = array();
			//recorro cada comida
			foreach($comidas as $comida){

				//buscar sabores
				$sabores = $this->getSaboresComida($comida['id'],false);

				//buscar opcionales
				$opcionales = $this->getSaboresComida($comida['id'],true);

				$c = array(
					"comida" => $comida,
					"sabores" => $sabores,
					"opcionales" => $opcionales
				);

				array_push($carta[$categoria], $c); 
			}
		}
		return $carta;

	}

	private function getSaboresComida($id_comida,$opcional=false){

		$conn = new Conexion();
		$sabores = array();
		$sql = "SELECT cs.id_sabor as id_sabor, s.nombre as nombre FROM comidas_sabores as cs, sabores as s 
				WHERE cs.id_comida='".$id_comida."' 
				  AND cs.opcional='$opcional' 
				  AND cs.id_sabor = s.id
				  ORDER BY s.prioridad DESC";

		if($resultado = $conn->getConexion()->query($sql))
			while($dato = $resultado->fetch_assoc()){
				array_push($sabores,array(
								"id" => $dato['id_sabor'],
								"nombre" => $dato['nombre']
							)
						);
			}
		return $sabores;

	}

	private function getComidas($categoria){
		$conn = new Conexion();
		$comidas = array();
		$sql = "SELECT * FROM comidas WHERE categoria='".$categoria."' ORDER BY id ASC";
		if($resultado = $conn->getConexion()->query($sql))
			while($dato = $resultado->fetch_assoc()){
				$comidas[$dato['id']] = array(
					"id" => $dato['id'],
					"nombre" => $dato['nombre']
				);
			}
		return $comidas;

	}

	//retorna una lista de sabores
	private function getCategorias(){
		$conn = new Conexion();
		$categorias = array();
		$sql = "SELECT * FROM categorias ORDER BY prioridad DESC";
		if($resultado = $conn->getConexion()->query($sql))
			while($dato = $resultado->fetch_assoc()){
				$categorias[$dato['nombre']] = $dato['nombre'];
			}
		return $categorias;
	}
	
	//recibe un array con sabores y devuelve las opciones
	public function getPosibilidades($sabores){
		$pizzas = $this->getCarta()['Pizzas'];
		$pos = array();
		foreach($pizzas as $pizza){
			if($this->pertenece($sabores,array_merge($pizza['sabores'],$pizza['opcionales'])))
				array_push($pos,$pizza);
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
	
	public function getSaboresComunes(){
		$conn = new Conexion();
		$sabores = array();
		$sql = "SELECT * FROM sabores WHERE especial=0 ORDER BY nombre ASC";
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
	public function agregarProducto($id,$nombre,$categoria,$sabores,$opcionales){		
		//conexion
		$conn = new Conexion();

		//crear comida
		if($nombre==null)
			$sql = "INSERT INTO comidas (id,categoria) VALUES ('$id','".$categoria."')";
		else
			$sql = "INSERT INTO comidas (id,categoria,nombre) VALUES ('$id','".$categoria."','".$nombre."')";		
		if($conn->getConexion()->query($sql) === false)
			throw new Exception('Error al subir producto. (Error: '.$conn->getConexion()->error.')');

		//agregar sabores
		foreach($sabores as $sabor){
			$sql = "INSERT INTO comidas_sabores (id_comida,id_sabor,opcional) VALUES ('".$id."','".$sabor."','0')";		
			if($conn->getConexion()->query($sql) === false)
				throw new Exception('Error al subir producto. (Error: '.$conn->getConexion()->error.')');
		}
		
		//agregar opcionales
		if(!is_null($opcionales))
			foreach($opcionales as $opcional){
				$sql = "INSERT INTO comidas_sabores (id_comida,id_sabor,opcional) VALUES ('".$id."','".$opcional."','1')";		
				if($conn->getConexion()->query($sql) === false)
					throw new Exception('Error al subir producto. (Error: '.$conn->getConexion()->error.')');
			}

	}
	
	//verifica si los elementos de array1 estan en array2
	private function pertenece($sabores, $sabores_pizza){
		foreach($sabores as $sabor){
			$esta = false;
			for($i=0; $i<count($sabores_pizza) && !$esta; $i++){
				$esta = $sabores_pizza[$i]['nombre']==$sabor;
			}
			if(!$esta) return false;
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
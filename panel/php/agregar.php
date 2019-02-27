<?php

include_once '../../_clases/productos.php'; 

if(isset($_GET['tipo']) && $_GET['tipo']=='producto'){
	//variables
	$id = $_POST['id'];
	$sabores = $_POST['sabores'];
	
	$menu = new Menu();
	$menu->agregarProducto($id,$sabores);

	
	
}elseif(isset($_GET['tipo']) && $_GET['tipo']=='sabor'){
	$nombre = $_POST['nombre'];
	$menu = new Menu();
	$menu->agregarSabor($nombre);
	
}else{
	echo 'error';
}

echo 'Subido';

?>
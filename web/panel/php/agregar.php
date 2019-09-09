<?php

include_once '../../_clases/productos.php'; 

if(isset($_GET['tipo']) && $_GET['tipo']=='producto'){
	//variables
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$categoria = $_POST['categoria'];
	$sabores = $_POST['sabores'];
	if(isset($_POST['opcionales']))
		$opcionales = $_POST['opcionales'];
	else
		$opcionales = null;

	$menu = new Menu();
	$menu->agregarProducto($id,$nombre,$categoria,$sabores,$opcionales);

	
	
}elseif(isset($_GET['tipo']) && $_GET['tipo']=='sabor'){
	$nombre = $_POST['nombre'];
	$menu = new Menu();
	$menu->agregarSabor($nombre);
	
}else{
	echo 'error';
}

echo 'Subido';

?>
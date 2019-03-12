<?php $lugar = 'Men&uacute;'; ?> 
<?php 
//libreria
include_once '_clases/productos.php';

//variables
if(isset($sabores) && $_GET['sabores'])
	$sabores = urldecode($_GET['sabores']);
else
	$sabores = array();



$menu = new Menu();
$lista = $menu->getPosibilidades($sabores);
$cantidad = intdiv(count($menu->getMenu()),3);
$resto = count($menu->getMenu())%3;

?>
<!DOCTYPE HTML> 
<html> 
<head>
<title><?php echo $lugar; ?> | Pizza al cuadrado, Pizzas y Empanadas - Bah&iacute;a Blanca</title>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/global.css" />
<link rel="stylesheet" href="css/footer.css" />
<link rel="stylesheet" href="css/menu.css" />
<link rel="stylesheet" href="css/busqueda.css" />
<link rel="shortcut icon" href="img/icono.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Satisfy" rel="stylesheet">
<meta name="description" content="Con recetas cl&aacute;sicas o una selecta variedad de gustos especiales en nuestras pizzas y empanadas, y con tentadoras promociones, hemos hecho que sea un placer comer en las casas bahienses." />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script> 
<script type="text/javascript">
$(function() {
	var imagenes = ['header.jpg', 'header2.jpg', 'header3.jpg', 'header4.jpg'];
  $('header#top #titulo').css({'background-image': 'url(img/' + imagenes[Math.floor(Math.random() * imagenes.length)] + ')'});
});
</script>
</head>
 
<body>
	<?php include_once 'bloques/header.php'; ?>
	<section id="menu">		
		<h1 class="titulo"><img src="img/linea-curva.png"> Buscador de Pizzas<img src="img/linea-curva.png"></h1>
		<div id="busqueda">
			<div id="titulo">Filtrar Búsqueda</div>
			<form id="formulario">
			<?php
			foreach($menu->getSabores() as $sabor){
				echo '<div class="sabor">'.$sabor["nombre"].'</div><div class="campo"><input class="sabor_input" type="checkbox" name="sabores[]" value="'.$sabor["id"].'" /></div>';
			}
			?>
			
			</form>
		</div>
		<div class="col">
			<?php
			for($i=1;$i<40 && $i<count($lista);$i++){
				echo '<div class="variedad"><div class="num">'.$lista[$i]["id"].'</div><div class="pizza"></div>'.$lista[$i]["nombre"].'</div>';
			}
			
			?>
		</div>
		<div class="col">
			<?php
			for($i=40;$i<100 && $i<count($lista);$i++){
				echo '<div class="variedad"><div class="num">'.$lista[$i]["id"].'</div><div class="pizza"></div>'.$lista[$i]["nombre"].'</div>';
			}
			
			?>
		</div>
		
		
		<!--<h1 class="titulo"><img src="img/linea-curva.png"> Milanesas a la pizza <img src="img/linea-curva.png"></h1>
		<div class="col">
		   <div class="variedad"><div class="num">1</div><div class="pizza"></div>Simple</div>
		   <div class="variedad"><div class="num">2</div><div class="pizza"></div>Muzza y cantimpalo</div>
		   <div class="variedad"><div class="num">3</div><div class="pizza"></div>Muzza, Jam&oacute;n, Palmitos y Salsa Golf</div>
		   <div class="variedad"><div class="num">4</div><div class="pizza"></div>Muzza y Panceta</div>
		   <div class="variedad"><div class="num">5</div><div class="pizza"></div>A caballo: Muzza, Panceta y Huevo Frito</div>
		</div>
		<div class="col">
		   <div class="variedad"><div class="num">6</div><div class="pizza"></div>Napolitana: Muzza, Jam&oacute;n, Tomate, Ajo y Salsa de tomate</div>
		   <div class="variedad"><div class="num">7</div><div class="pizza"></div>Muzza y Tomate</div>
		   <div class="variedad"><div class="num">8</div><div class="pizza"></div>Muzza y Roquefort</div>
		   <div class="variedad"><div class="num">9</div><div class="pizza"></div>Muzza, Jam&oacute;n y Anan&aacute;</div>
		   <div class="variedad"><div class="num">10</div><div class="pizza"></div>Muzza, Jam&oacute;n y Morr&oacute;n</div>
		</div>
		<div class="col">
		   <div class="variedad"><div class="num">11</div><div class="pizza"></div>Muzza y Cebolla</div>
		   <div class="variedad"><div class="num">12</div><div class="pizza"></div>Muzza, Roquefort y Cebolla</div>
		   <div class="variedad"><div class="num">13</div><div class="pizza"></div>Muzza y Champignones a la provenzal</div>
		   <div class="variedad"><div class="num">14</div><div class="pizza"></div>Muzza, Cebolla de Verdeo y Ajo</div>
		</div>-->
		
		<h1 class="titulo"><img src="img/linea-curva.png"> Empanadas <img src="img/linea-curva.png"></h1>
		<div class="col">
		   <div class="variedad"><div class="num">1</div><div class="pizza"></div>Carne</div>
		   <div class="variedad"><div class="num">3</div><div class="pizza"></div>Jam&oacute;n y queso</div>
		   <div class="variedad"><div class="num">4</div><div class="pizza"></div>Queso y cebolla de verdeo</div>
		</div>
		<div class="col">
		   <div class="variedad"><div class="num">6</div><div class="pizza"></div>Pollo</div>
		   <div class="variedad"><div class="num">8</div><div class="pizza"></div>Muzza y cantimpalo</div>
		   <div class="variedad"><div class="num">10</div><div class="pizza"></div>Verdura</div>
		</div>
		<div class="col">
		   <div class="variedad"><div class="num">12</div><div class="pizza"></div>Muzza, panceta y cebolla de verdeo</div>
		</div>
		
	</section>	
	<?php include_once 'bloques/footer.php'; ?>    
</body>
</html>
<?php $lugar = 'Men&uacute; Personalizado'; ?> 
<?php 
//libreria
include_once '_clases/productos.php';
$menu = new Menu();
$lista = $menu->getMenuEspecial();
//$cantidad = floor(count($menu->getMenu())/3);
//$resto = count($menu->getMenu())%3;


$sabor = urldecode($_GET['id']);
$menu_especial = $menu->getPosibilidades([$sabor]);
$cantidad = floor(count($menu_especial)/3);
$resto = count($menu_especial)%3;


?>
<!DOCTYPE HTML> 
<html> 
<head>
<title><?php echo $lugar; ?> | Pizza al cuadrado, Pizzas y Empanadas - Bah&iacute;a Blanca</title>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/global.css" />
<link rel="stylesheet" href="css/footer.css" />
<link rel="stylesheet" href="css/menu.css" />
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
		<h1 class="titulo"><img src="img/linea-curva.png"> Pizzas con <?php echo $sabor; ?> <img src="img/linea-curva.png"></h1>
		<div class="col">
			<?php
			$cantidad = $cantidad + $resto;
			for($i=0;$i<$cantidad && $i<count($menu_especial);$i++){
				echo '<div class="variedad"><div class="num">'.$menu_especial[$i]["id"].'</div><div class="pizza"></div>'.$menu_especial[$i]["nombre"].'</div>';
			}
			
			?>
		</div>
		<div class="col">
			<?php
					for($i=$cantidad; $i<$cantidad*2 && $i<count($menu_especial);$i++){
				echo '<div class="variedad"><div class="num">'.$menu_especial[$i]["id"].'</div><div class="pizza"></div>'.$menu_especial[$i]["nombre"].'</div>';
			}
			
			?>
		</div>
		<div class="col">
			<?php
					for($i=$cantidad*2;$i<$cantidad*3 && $i<count($menu_especial);$i++){
				echo '<div class="variedad"><div class="num">'.$menu_especial[$i]["id"].'</div><div class="pizza"></div>'.$menu_especial[$i]["nombre"].'</div>';
			}
			
			?>
		</div>










		<h1 class="titulo"><img src="img/linea-curva.png"> Todas las Pizzas <img src="img/linea-curva.png"></h1>
		<div id="info"><i>Cada pizza mide 43cm por 43 cm aprox y rinde para comer 4 o picar 5 personas.</i></div>
		<div id="info"><i>Hace clic sobre cualquier gusto para ajustar la búsqueda a pizzas que contengan ese sabor.</i></div>
		<div class="col">
			<?php
			for($i=0;$i<25 && $i<count($lista);$i++){
				echo '<div class="variedad"><div class="num">'.$lista[$i]["id"].'</div><div class="pizza"></div>'.$lista[$i]["nombre"].'</div>';
			}
			
			?>
		</div>
		<div class="col">
			<?php
			for($i=25;$i<50 && $i<count($lista);$i++){
				echo '<div class="variedad"><div class="num">'.$lista[$i]["id"].'</div><div class="pizza"></div>'.$lista[$i]["nombre"].'</div>';
			}
			
			?>
		</div>
		<div class="col">
			<?php
			for($i=50;$i<100 && $i<count($lista);$i++){
				echo '<div class="variedad"><div class="num">'.$lista[$i]["id"].'</div><div class="pizza"></div>'.$lista[$i]["nombre"].'</div>';
			}
			
			?>
		</div>
		
		<!--<h1 class="titulo"><img src="img/linea-curva.png"> Milanesas a la pizza <img src="img/linea-curva.png"></h1>
				<div id="info"><i>
				Todas las variedades vienen con medio kilo de papa fritas. Preguntá por la opción de convertir tu milanesa en pizzanesa y sorpendete!
				<br />
				<b>Menú disponible de martes a jueves</b>
		</i></div>
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
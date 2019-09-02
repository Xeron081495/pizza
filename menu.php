<?php $lugar = 'Men&uacute;'; ?> 
<?php 
//libreria
include_once '_clases/productos.php';
$menu = new Menu();
$sabores = $menu->getSaboresComunes();
$lista = $menu->getMenuEspecial();
$cantidad = floor(count($menu->getMenu())/3);
$resto = count($menu->getMenu())%3;


if(isset($_GET['id'])){
	$sabor = urldecode($_GET['id']);
	$menu_especial = $menu->getPosibilidades([$sabor]);
	$cantidad = floor(count($menu_especial)/3);
	$resto = count($menu_especial)%3;
}

?>
<!DOCTYPE HTML> 
<html> 
<head>
<title><?php echo $lugar; ?> | Pizza al cuadrado - Bah&iacute;a Blanca</title>
<meta charset="UTF-8" />

<!-- Cambia de imagenes slider -->
<script src="https://kit.fontawesome.com/591d68fa75.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="css/footer.css?fecha=30l08l2019" />
<link rel="stylesheet" href="css/menu.css?fecha=31bl08l2019" />
<link rel="stylesheet" href="css/global.css?fecha=29l08l2019" />


<link rel="shortcut icon" href="img/icono.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Satisfy" rel="stylesheet">
<meta name="description" content="Con recetas cl&aacute;sicas o una selecta variedad de gustos especiales en nuestras pizzas y empanadas, y con tentadoras promociones, hemos hecho que sea un placer comer en las casas bahienses." />


<script type="text/javascript">


$(function() {
	var imagenes = ['header.jpg', 'header2.jpg', 'header3.jpg', 'header4.jpg'];
  $('header#top #titulo').css({'background-image': 'url(img/' + imagenes[Math.floor(Math.random() * imagenes.length)] + ')'});
});


function elegirSabor(sel){
	window.location="menu.php?id="+sel.value;
}


</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144567784-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144567784-1');
</script>


</head>
 
<body>
	<?php include_once 'bloques/header.php'; ?>


	
	<h3 class="cuadro persona">
		<i class="fab fa-whatsapp mr-2"></i>
		<a href="https://api.whatsapp.com/send?phone=5492914400810" target="_blanck">Pedí por Whatsapp</a>
	</h3>

	<form class="btn-group">
	<select id="sabor" class="selectpicker select"  onchange="elegirSabor(this);">
		<option value="">Filtrar pizzas por sabor</option>
		<?php 
		foreach($sabores as $s){
			echo '<option value="'.urlencode($s["nombre"]).'">'.$s["nombre"].'</option>';
		}
		?>
	</select>

	</form>
	<section id="menu">	
		<?php if(isset($_GET['id'])){ ?>
	
			<h1 class="titulo"><img class="d-none d-lg-inline-block" src="img/linea-curva.png">Pizzas con <br class="d-lg-none"> <?php echo $sabor; ?> <img  class="d-none d-lg-inline-block" src="img/linea-curva.png"></h1>
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
			<?php } ?>
	
	
	
	  <h1 id="tag-pizza" class="titulo"><img src="img/linea-curva.png"> Pizzas <img src="img/linea-curva.png"></h1>
		<div id="info"><i><strong>¡Nuestras pizzas (43x43cm) equivalen a dos de las tradicionales!</strong> Comen 4, pican 5.</i> <br>
			En <a href="faq.php">Información</a> podés saber más del tamaño de nuestras pizzas<!-- Media pizza (43cm por 21cm) equivale a una tradicional y rinde para comer 2 o picar 3 personas. --></i></div>
		<div id="info"><i><strong>Hace clic sobre cualquier gusto</strong> para ajustar la búsqueda a pizzas que contengan ese sabor.</i></div>
		<div class="col">
			<?php
			for($i=0;$i<34 && $i<count($lista);$i++){
				echo '<div class="variedad"><div class="num">'.$lista[$i]["id"].'</div><div class="pizza"></div>'.$lista[$i]["nombre"].'</div>';
			}			
			?>
		</div>
		<div class="col">
			<?php
			for($i=34;$i<69 && $i<count($lista);$i++){
				echo '<div class="variedad"><div class="num">'.$lista[$i]["id"].'</div><div class="pizza"></div>'.$lista[$i]["nombre"].'</div>';
			}
			
			?>
		</div>
		<div class="col">
			<?php
			for($i=69;$i<120 && $i<count($lista);$i++){
				echo '<div class="variedad"><div class="num">'.$lista[$i]["id"].'</div><div class="pizza"></div>'.$lista[$i]["nombre"].'</div>';
			}			
			?>
		</div>
		
		<!--<h1 id="tag-milanesa" class="titulo"><img src="img/linea-curva.png"> Milanesas a la pizza <img src="img/linea-curva.png"></h1>
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
		</div>
		-->
		
		<!-- <h1 id="tag-empanada" class="titulo titulo_chico"><img src="img/linea-curva.png"> Adicionales <img src="img/linea-curva.png"></h1>
		<div id="info"><i><strong>!Crea tu propia pizza agregandole cualquier sabor!</strong></i></div>
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
		</div> -->
		
	</section>	
	<?php include_once 'bloques/footer.php'; ?>    
</body>
</html>
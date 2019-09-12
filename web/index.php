<?php clearstatcache(); ?>

<!DOCTYPE HTML> 
<html> 
<head>
<title>Pizza al cuadrado - Las Pizzas más grandes de Bah&iacute;a Blanca</title>
<meta charset="UTF-8" />
<meta name="theme-color" content="orange">
<link rel="shortcut icon" href="img/icono.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Satisfy" rel="stylesheet">
<meta name="description" content="Con recetas cl�sicas o una selecta variedad de gustos especiales en nuestras pizzas y empanadas, y con tentadoras promociones, hemos hecho que sea un placer comer en las casas bahienses." />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144567784-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144567784-1');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K3NNLSQ');</script>
<!-- End Google Tag Manager -->


<!-- Cambia de imagenes slider -->
<script src="https://kit.fontawesome.com/591d68fa75.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="css/global.css?fecha=29l08l2019" />
<link rel="stylesheet" href="css/footer.css?fecha=29l08l2019" />
<link rel="stylesheet" href="css/index.css?fecha=30l08l2019" />
<link rel="stylesheet" href="css/faq.css?fecha=29l08l2019" />


<script type="text/javascript">

/*
$(function() {
  var imagenes = ['header.jpg', 'header2.jpg', 'header3.jpg', 'header4.jpg'];
  $('header#top').css({'background-image': 'url(img/' + imagenes[Math.floor(Math.random() * imagenes.length)] + ')'});
});*/


var imagenes = ['header4.jpg','header1.jpg', 'header.jpg'];
var texto1 = ['Pizza al cuadrado', 'La pizza m&aacute;s grande', 'de Bah&iacute;a Blanca'];
var texto2 = ['Las m&aacute;s deliciosas', 'milanesas a la pizza', 'a partir del Lunes 4'];
var texto3 = ['Las m&aacute;s deliciosas', 'milanesas a la pizza', 'est&aacute;n en pizza al cuadrado'];
var texto = [texto1,texto1,texto1,texto1];

var actual = 0;
var max = imagenes.length-1;
var repeticion;
var tiempo = 8000;
var tiempoTrans = 1400;


//la funcion da inicio, muesta el primer elemento y empieza el bucle
$(document).ready(function slide(){
	//la que aparece primero
	$('#top').css({'background-image': 'url(img/'+imagenes[actual]+')'});
	
	repeticion = window.setInterval(avanzar,tiempo);

});

//cambia la imagen por la siguiente
function avanzar(){
		
	//vemos que imagen sigue
	actual++;
	if(actual==max+1)
		actual = 0;	
		
	//ponemos visible la que importa
	$('#top').css({'background-image': 'url(img/'+imagenes[actual]+')'});
	$('h1#nombre').html(''+texto[actual][0]+'');
	$('#slogan1').html(''+texto[actual][1]+'');
	$('#slogan2').html(''+texto[actual][2]+'');
}



</script>

</head>
 
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3NNLSQ"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
    <header id="top">
       <div id="logo-menu">
			<div id="logo"><a href="./"><img src="img/logo.png" /></a></div>
			<div id="datos">
				<span class="dato"><span class="d-none d-xl-inline-block mr-2">Encontranos en </span><strong>Sarmiento 906</strong></span>
				<span class="dato"><span class="d-none d-xl-inline-block mr-2">Delivery al</span> (0291) <strong>4526-024</strong></span>
				<span class="dato">
					<a href="https://www.facebook.com/pizzaalcuadrado" target="_blanck"><i class="fab fa-facebook-square ml-2"></i></a>
					<a href="http://instagram.com/pizaalcuadrado" target="_blanck"><i class="fab fa-instagram ml-2"></i></a>
					<a href="https://api.whatsapp.com/send?phone=5492914400810" target="_blanck"><i class="fab fa-whatsapp ml-2"></i></a>
				<span>
			</div>
			<nav id="menu">
				<a class="opcion-menu" href="contacto.php">Contacto</a>
				<a class="opcion-menu" href="galeria.php">Galer&iacute;a</a>
				<a class="opcion-menu" href="menu.php">Menú de Pizzas</a>
				<a class="opcion-menu" href="nosotros.php">Nosotros</a>
			</nav>
			<a href="#menu-celu" id="menu-icono"><i class="fas fa-bars"></i></a>
	   </div>
	   <h1 id="nombre">Pizza al cuadrado</h1>
	   <h1 id="slogan1">La pizza m&aacute;s grande</h1>
	   <h1 id="slogan2">de Bah&iacute;a Blanca</h1>
	   <div id="cuadros" class="cuadros_celu d-none">
			<div class="linea">
				<h3 class="cuadro calendario"><i class="fas fa-calendar-alt mr-2"></i> Martes a Domingo</h3>
				<h3 class="cuadro reloj"><i class="far fa-clock mr-2"></i>20hs a <br> 23hs</h3>
			</div>
			<div class="linea">
				<h3 class="cuadro lugar"><i class="fas fa-map-marked-alt mr-2"></i>Sarmiento <br> 906</h3>
				<h3 class="cuadro persona">
					<i class="fas fa-phone mr-2"></i><a href="tel:02914526024">452-6024</a><br>	<br>					
					<a href="https://api.whatsapp.com/send?phone=5492914400810" target="_blanck">
						<i class="fab fa-whatsapp mr-2"></i> 2914400810
					</a>
				</h3>
			</div>
	   </div>
	   <div id="cuadros" class="cuadros_pc d-inline-block">
			<h3 class="cuadro calendario"><i class="fas fa-calendar-alt mr-2"></i> Martes a Domingo</h3>
			<h3 class="cuadro reloj"><i class="far fa-clock mr-2"></i>20hs a 23hs</h3>
			<h3 class="cuadro lugar" onclick="siguiente()"><i class="fas fa-map-marked-alt mr-2"></i>Sarmiento 906</h3>
			<h3 class="cuadro persona">
				<i class="fas fa-phone mr-2"></i> 
				<a href="tel:02914526024">452-6024</a>
			</h3>
			<h3 class="cuadro persona d-sm-none">
				<a href="http://instagram.com/pizaalcuadrado" target="_blanck"><i class="fab fa-instagram"></i></a>
			</h3>
			<h3 class="cuadro persona">
				<i class="fab fa-whatsapp mr-2"></i>
				<a href="https://api.whatsapp.com/send?phone=5492914400810" target="_blanck">Pedí por Whatsapp</a>
			</h3>
			<h3 class="cuadro persona d-sm-none">
				<a href="https://www.facebook.com/pizzaalcuadrado" target="_blanck"><i class="fab fa-facebook-square"></i></a>
			</h3>
	   </div>
    </header>
	<section id="menu-atajos" class="col-12">
		<a href="menu.php?desde_inicio">
		<div class="opcion mr-2">
			<div class="pizza fondo"></div>
			<div class="texto">Nuestras Pizzas</div>
		</div>
		</a>

		<a href="galeria.php">
		<div class="opcion">
			<div class="milanesa fondo"></div>
			<div class="texto">Galería de fotos</div>
		</div>
		</a>
	</section>

	<section id="faq">   
		<div class="mx-auto col-12 col-sm-10 col-xl-9 p-0 m-0 container">  
			<div class="contenido col-12 col-md-6">
				<h2 class="col-12 sub text-center mt-4 mb-3 float-left">Pizza completa</h2>  
				<div class="lista mt-1 text-center ">
					<!-- <img class="img_sab d-inline-block" src="img/faq_pizza1sab.jpg" width="150" alt="Pizza completa de un sabor"> -->
					<img class="img_sab d-inline-block" src="img/faq_pizza1sab.jpg" width="150" alt="Pizza completa de dos sabores">
					<img class="img_sab d-inline-block" src="img/faq_pizza2sab.jpg" width="150" alt="Pizza completa de tres sabores">
					<img class="img_sab d-inline-block" src="img/faq_pizza3sab.jpg" width="150" alt="Pizza completa de cuatro sabores">
					<p class="clearfix display-5 mt-3 text-center">Podes elegir hasta tres sabores por pizza. <strong>¡Mide 43x43cm!</strong> <br>Equivale a dos pizzas tradicionales: <strong>comen 4</strong>, pican 5.</p>
				</div> 
			</div>

			<div class="contenido col-12 col-md-6">
				<h2 class="col-12 sub text-center mt-4 mb-3 float-left">Media Pizza</h2>  
				<div class="lista mt-1 text-center">
<!-- 					<img class="img_sab d-inline-block" src="img/faq_mediapizza.jpg" width="75" alt="Media pizza de uno o dos sabores.">    
 -->					<img class="img_sab d-inline-block" src="img/faq_mediapizza.jpg" width="75" alt="Media pizza de uno o dos sabores.">   
					<p class="clearfix display-5 mt-3  text-center">Podes elegir hasta dos sabores por pizza. <strong>¡Mide 43x21cm!</strong> <br>Equivale a una pizza tradicional: <strong>comen 2</strong>.</p>
				</div> 
			</div>

			<div class="clearfix"></div>
			
			<div class="contenido col-12 col-md-6 d-none">
				<h2 class="col-12 sub text-center mt-4 mb-2 float-left">Pizza al paso</h2>  
				<div class="lista mt-1 text-center">
					<img class="img_sab d-inline-block" src="img/faq_pizzaporcion.jpg" height="70" alt="Media pizza de uno o dos sabores.">    
					<p class="clearfix display-5 mt-3  text-center">Porción de pizza de un sabor <strong>para retirar</strong> en Sarmiento 906. <br><strong>Come uno</strong>.</p>
				</div> 
			</div>

			<div class="contenido col-12 col-md-12 mt-4 d-inline-block">
				<h2 class="col-12 sub text-center mt-4 mb-3 float-left">Zona de Delivery</h2>  
				<div class="lista mt-1 text-center">
					<i class="fas fa-motorcycle d-inline-block display-4"></i>
					<p class="clearfix display-5 mt-3 text-center">
						Tenemos una amplia cobertura de delivery para Bahía Blanca.<br>
						Para saber si tu zona está incluida, mandanos un mensaje por 
						<a href="https://api.whatsapp.com/send?phone=5492914400810" target="_blanck">Whatsapp</a> 
						o llamanos al <a href="tel:02914526024">452-6024</a>.
					</p>
				</div> 
			</div>
		</div>
	</section>

	
    <section id="oferta" class="d-none">
		<img src="img/promocion.jpg" />
	</section>	
	<?php include_once 'bloques/footer.php'; ?>
</body>

<!-- Latest compiled and minified CSS 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->

</html>
<?php clearstatcache(); ?>

<!DOCTYPE HTML> 
<html> 
<head>
<title>Pizza al cuadrado, Pizzas y Empanadas - Bah&iacute;a Blanca</title>
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
 
<link rel="stylesheet" href="css/global.css" />
<link rel="stylesheet" href="css/footer.css" />
<link rel="stylesheet" href="css/index.css" />


<script type="text/javascript">

/*
$(function() {
  var imagenes = ['header.jpg', 'header2.jpg', 'header3.jpg', 'header4.jpg'];
  $('header#top').css({'background-image': 'url(img/' + imagenes[Math.floor(Math.random() * imagenes.length)] + ')'});
});*/


var imagenes = ['header4.jpg', 'header.jpg'];
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
				<span class="dato">Delivery al (0291) <strong>4526-024</strong></span>
				<span class="dato">
					<a href="https://www.facebook.com/pizzaalcuadrado" target="_blanck"><i class="fab fa-facebook-square ml-2"></i></a>
					<a href="http://instagram.com/pizaalcuadrado" target="_blanck"><i class="fab fa-instagram ml-2"></i></a>
					<a href="https://api.whatsapp.com/send?phone=5492914400810" target="_blanck"><i class="fab fa-whatsapp ml-2"></i></a>
				<span>
			</div>
			<nav id="menu">
				<a class="opcion-menu" href="contacto.php">Contacto</a>
				<a class="opcion-menu" href="galeria.php">Galer&iacute;a</a>
				<a class="opcion-menu" href="faq.php">Preguntas Frecuentes</a>
				<a class="opcion-menu" href="menu.php">Men&uacute;</a>
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
				<h3 class="cuadro lugar"><i class="fas fa-map-marked-alt mr-2"></i>Sarmiento <br> al 906</h3>
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
			<h3 class="cuadro lugar" onclick="siguiente()"><i class="fas fa-map-marked-alt mr-2"></i>Sarmiento al 906</h3>
			<h3 class="cuadro persona">
				<i class="fas fa-phone mr-2"></i> 
				452-6024
			</h3>
			<h3 class="cuadro persona d-md-none">
				<a href="http://instagram.com/pizaalcuadrado" target="_blanck"><i class="fab fa-instagram"></i></a>
			</h3>
			<h3 class="cuadro persona">
				<i class="fab fa-whatsapp mr-2"></i>
				<a href="https://api.whatsapp.com/send?phone=5492914400810" target="_blanck">Pedí por Whatsapp</a>
			</h3>
			<h3 class="cuadro persona d-md-none">
				<a href="https://www.facebook.com/pizzaalcuadrado" target="_blanck"><i class="fab fa-facebook-square"></i></a>
			</h3>
	   </div>
    </header>
	<section id="menu-atajos" class="col-12">
		<a href="menu.php#tag-pizza">
		<div class="opcion">
			<div class="pizza fondo"></div>
			<div class="texto">Nuestras Pizzas</div>
		</div>
		</a>

		<!-- <div class="col-0 col-lg-0 col-xl-2 float-left">&nbsp;</div>

		<a href="menu.php#tag-milanesa">
		<div class="opcion float-left col-12 col-lg-6 col-xl-4">
			<div class="milanesa fondo"></div>
			<div class="texto">Menu de Milanesas</div>
		</div>
		</a>
		
		<div class="col-0 col-lg-1 float-left">&nbsp;</div>

		<a href="menu.php#tag-empanada">
		<div class="opcion float-left col-12 col-lg-5 col-xl-4">
			<div class="empanada fondo"></div>
			<div class="texto">Menu de Empanadas</div>
		</div>
		</a> 

		
		<div class="col-0 col-lg-0 col-xl-2 float-left">&nbsp;</div>-->
	</section>
	
    <section id="nosotros">
	  <h3 class="m-0 p-0 pt-4">
		<span>
			<h1>Pizzas de 43cm por 43cm</h1>
		</span>
		<span class="sub">Para <strong>4 o 5 personas</strong> con 4 gustos</span>			
	  </h3>      
	  <h4>
	    <p>
		Con un encanto especial, nos destaca la incomparable calidad de nuestros productos. 
		Logramos conjugar armoniosamente el gran y extravagante tama&ntilde;o de nuestras pizzas 
		junto a una variedad de sabores innovadores. Es ideal para disfrutar inolvidables 
		momentos con amigos, en pareja o en familia, sorprendi&eacute;ndolos con una nueva manera 
		de pedir una pizza y dejando de lado la forma tradicional.
		</p>
	    <p>
		Nuestras pizzas, empanadas y milanesas, elaboradas con la materia prima de mejor calidad, llegan 
		a ser, hoy en d&iacute;a, una de las m&aacute;s exquisitas de la ciudad bahiense. Con recetas cl&aacute;sicas
		o una selecta variedad de gustos especiales en nuestras pizzas y empanadas, y con 
		tentadoras promociones, hemos hecho que sea un placer comer en casa.
		</p>
	    <p class="ultimo">
		&#191;Est&aacute;s c&oacute;modo en tu casa?, &#191;Se te complica acercarte a Sarmiento 906? Nosotros tenemos 
		la soluci&oacute;n: &#161;ENTREGAMOS PEDIDOS POR MEDIO DE NUESTRO DELIVERY!, el cual se encuentra
		disponible para gran parte de Bah&iacute;a Blanca. Recomendamos en &eacute;pocas de bajas temperaturas 
		esperar la pizza con el horno precalentado e introducirla 3/4 minutos, para disfrutar de 
		su m&aacute;ximo sabor. Antes de llamar al (0291) 4526024 para hacer tu pedido, consulta la 
		secci&oacute;n preguntas frecuentes, y enterate como encargar nuestros productos.
		</p>
	  </h4>
	</section> 
    <section id="oferta">
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
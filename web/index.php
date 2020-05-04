<?php clearstatcache(); ?>

<?php 
	$opiniones = [
		[
			"nombre" => "Luisa Nélida Pérez Gruppi",
			"fuente" => "Facebook",
			"foto" => "https://scontent.fbhi1-1.fna.fbcdn.net/v/t1.0-9/35800756_1993198474058592_2612478522819608576_n.jpg?_nc_cat=109&_nc_oc=AQnBCD66aXADmuIP0Ve-JO8GrRIyPp3yRFZ4Bclpkw7gTgL7KVqpCjUchkL3M-EKHTg&_nc_ht=scontent.fbhi1-1.fna&oh=5ad8207784010deb8861deafd9adc323&oe=5DF527F6",
			"opinion" => "Nos gusta la calidad del producto, la masa es exquisita. La atención es muy buena y tiene rapidez en la entrega."
		],
		[
			"nombre" => "Horacio Urbano Colman",
			"fuente" => "Google",
			"foto" => "https://lh6.ggpht.com/-K0ZmaXvO6L0/AAAAAAAAAAI/AAAAAAAAAAA/50_QeAi89wo/s40-c0x00000000-cc-rp-mo-ba3/photo.jpg",
			"opinion" => "Buen nivel de pizzas exquisitas, buena relación precio-producto."
		],
		[
			"nombre" => "Ivan Cretton",
			"fuente" => "Google",
			"foto" => "https://lh6.ggpht.com/-0Krrf7BQXz0/AAAAAAAAAAI/AAAAAAAAAAA/QqH-eC8iFKM/s40-c0x00000000-cc-rp-mo-ba3/photo.jpg",
			"opinion" => "Muchisimas variedades y combinaciones de sabores. ¡Me gustó mucho!"
		],
		[
			"nombre" => "Gisela Pallotti",
			"fuente" => "Facebook",
			"foto" => "https://scontent.fbhi1-1.fna.fbcdn.net/v/t1.0-9/49140295_10216926421568412_7400550408482979840_n.jpg?_nc_cat=103&_nc_oc=AQkP-G9OzQA9Wm9X3tPEcMAzUycwuM-kY7e6bbFqplrtCFAcpZcM5eDJOS5MJdNZzfU&_nc_ht=scontent.fbhi1-1.fna&oh=3e9d3120015b4778e6a21d7fb5efca3a&oe=5E3D2D79",
			"opinion" => "Lejos las mejores de bahía. Rinden un montón. Si te pones a comparar precio y tamaño, conviene mucho más."
		],	
		[
			"nombre" => "Ivan Chaparro",
			"fuente" => "Google",
			"foto" => "https://lh6.ggpht.com/-RWBFCgh4hN8/AAAAAAAAAAI/AAAAAAAAAAA/x3sHlHhG8nA/s40-c0x00000000-cc-rp-mo-ba3/photo.jpg",
			"opinion" => "Me gusta este lugar porque las pizzas están terribles y te atienden rápido."
		],
		[
			"nombre" => "Pamela Bodini",
			"fuente" => "Google",
			"foto" => "https://lh3.ggpht.com/-Rxw_MDMiaDI/AAAAAAAAAAI/AAAAAAAAAAA/p2ICZC7gVMY/s40-c0x00000000-cc-rp-mo/photo.jpg",
			"opinion" => "La mejor atención, ¡con toda la onda! Las variedades espectaculares. Recomendamos la de salchichas, papas fritas y chedar 🍕💪"
		],
		[
			"nombre" => "Natalia Promenzio",
			"fuente" => "Google",
			"foto" => "https://lh6.ggpht.com/-B16g6xlt-uw/AAAAAAAAAAI/AAAAAAAAAAA/ZDecy5kup4M/s40-c0x00000000-cc-rp-mo-ba2/photo.jpg",
			"opinion" => "En tiempo forma, riquisimas pizzas y super barato."
		],
		[
			"nombre" => "Mariano Iommi",
			"fuente" => "Google",
			"foto" => "https://lh3.ggpht.com/-ZblzmUeGWYE/AAAAAAAAAAI/AAAAAAAAAAA/X929q4fD8H0/s40-c0x00000000-cc-rp-mo-ba3/photo.jpg",
			"opinion" => "Muy ricas. Suelo pedir a domicilio, y cuando llegan le doy un toque de horno y quedan como caseras!"
		],
		[
			"nombre" => "Karin Gelabert",
			"fuente" => "Google",
			"foto" => "https://lh4.ggpht.com/-UcNzva8KwDU/AAAAAAAAAAI/AAAAAAAAAAA/Vke-wrWYR4U/s40-c0x00000000-cc-rp-mo-ba4/photo.jpg",
			"opinion" => "Excelente calidad, buena atención y precios. ¡muchos sabores!"
		],
		[
			"nombre" => "Leticia Micucci",
			"fuente" => "Google",
			"foto" => "https://lh3.ggpht.com/-YngV7CeAobE/AAAAAAAAAAI/AAAAAAAAAAA/vNwgROKmuIQ/s40-c0x00000000-cc-rp-mo-ba3/photo.jpg",
			"opinion" => "Muy ricas las pizzas, son gigantes y a buen precio"
		],
		[
			"nombre" => "Martin Laggiard",
			"fuente" => "Google",
			"foto" => "https://lh4.ggpht.com/-VJF0J1fg8Lw/AAAAAAAAAAI/AAAAAAAAAAA/KgSzuC28KUA/s40-c0x00000000-cc-rp-mo-ba3/photo.jpg",
			"opinion" => "¡Buenisimas! Las pedí para una cena familiar y la verdad que super rinden. Para mi cumple pediré."
		],		
	];

	$fuente = [
		"Google" => "https://www.google.com/search?q=pizza+al+Cuadrado&oq=pizza+a%C3%B1+&aqs=chrome.1.69i57j0l5.5927j0j4&sourceid=chrome&ie=UTF-8#lrd=0x95eda35421b0579f:0xc6e0b58a6c04d1a6,3,,,",
		"Facebook" => "https://www.facebook.com/pg/pizzaalCuadrado/reviews/"
	]
?>

<!DOCTYPE HTML> 
<html> 
<head>
<title>Pizza al Cuadrado - Las Pizzas más grandes de Bah&iacute;a Blanca</title>
<meta charset="UTF-8" />
<meta name="theme-color" content="orange">
<link rel="shortcut icon" href="img/icono.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Satisfy" rel="stylesheet">
<meta name="description" content="Con recetas cl&aacute;sicas o una selecta variedad de gustos especiales en nuestras pizzas, y con tentadoras promociones, hemos hecho que sea un placer comer en las casas bahienses." />

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
 
<link rel="stylesheet" href="css/global.css?fecha=02l10l2019" />
<link rel="stylesheet" href="css/footer.css?fecha=29l08l2019" />
<link rel="stylesheet" href="css/index.css?fecha=30l08l2019" />
<link rel="stylesheet" href="css/faq.css?fecha=29l08l2019" />


<script type="text/javascript">


var imagenes = ['header3.jpg','header4.jpg','header2.jpg', 'header1.jpg', 'header5.jpg'];
var texto1 = ['Pizza al Cuadrado', 'La <span class="d-none d-lg-inline-block">pizza</span> m&aacute;s grande', 'de Bah&iacute;a Blanca'];
var texto2 = ['Las m&aacute;s deliciosas', 'milanesas a la pizza', 'a partir del Lunes 4'];
var texto3 = ['Las m&aacute;s deliciosas', 'milanesas a la pizza', 'est&aacute;n en pizza al Cuadrado'];
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
			<div id="logo"><a href="./"><img loading="lazy" src="img/logo.png" /></a></div>
			<div id="datos">
				<span class="dato"><span class="d-none d-xl-inline-block mr-2">Encontranos en </span><strong>Sarmiento 906</strong></span>
				<span class="dato"><span class="d-none d-xl-inline-block mr-2">Delivery al</span> (0291) <strong>4526-024</strong></span>
				<span class="dato">
					<a href="https://www.facebook.com/pizzaalCuadrado" target="_blanck"><i class="fab fa-facebook-square ml-2"></i></a>
					<a href="http://instagram.com/pizaalCuadrado" target="_blanck"><i class="fab fa-instagram ml-2"></i></a>
					<a href="https://api.whatsapp.com/send?phone=5492914400810" target="_blanck"><i class="fab fa-whatsapp ml-2"></i></a>
				<span>
			</div>
			<nav id="menu">
				<a class="opcion-menu" href="contacto">Contacto</a>
				<a class="opcion-menu" href="galeria">Galer&iacute;a</a>
				<a class="opcion-menu" href="menu">Menú de Pizzas</a>
				<a class="opcion-menu" href="nosotros">Nosotros</a>
			</nav>
			<a href="#menucel" id="menu-icono"><i class="fas fa-bars"></i></a>
			<span class="redes d-md-none">
				<a href="https://www.facebook.com/pizzaalcuadrado" target="_blanck"><i class="fab fa-facebook-square ml-2"></i></a>
				<a href="http://instagram.com/pizaalcuadrado" target="_blanck"><i class="fab fa-instagram ml-2"></i></a>
				<a href="https://wa.me/5492914400810" target="_blanck"><i class="fab fa-whatsapp ml-2"></i></a>
			</span>
	   </div>
	   <h1 id="nombre">Pizza al Cuadrado</h1>
	   <h1 id="slogan1">La <span class="d-none d-lg-inline-block">pizza</span> m&aacute;s grande</h1>
	   <h1 id="slogan2">de Bah&iacute;a Blanca</h1>
	   <div id="cuadros" class="cuadros_celu d-none">
			<div class="linea">
				<h3 class="cuadro calendario"><i class="fas fa-calendar-alt mr-2"></i> Miércoles a Lunes</h3>
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
			<h3 class="cuadro calendario"><i class="fas fa-calendar-alt mr-2"></i>Miércoles a Lunes</h3>
			<h3 class="cuadro reloj"><i class="far fa-clock mr-2"></i>20hs a 23hs</h3>
			<h3 class="cuadro lugar" onclick="siguiente()">
				<a href="contacto">
					<i class="fas fa-map-marked-alt mr-2"></i>
					Sarmiento 906
				</a>
			</h3>
			<h3 class="cuadro persona">
				<i class="fas fa-phone mr-2"></i> 
				<a href="tel:02914526024">452-6024</a>
			</h3>
			<h3 class="cuadro persona d-none">
				<a href="http://instagram.com/pizaalCuadrado" target="_blanck"><i class="fab fa-instagram"></i></a>
			</h3>
			<h3 class="cuadro persona">
				<i class="fab fa-whatsapp mr-2"></i>
				<a href="https://api.whatsapp.com/send?phone=5492914400810" target="_blanck">Pedí por Whatsapp</a>
			</h3>
			<h3 class="cuadro persona d-none">
				<a href="https://www.facebook.com/pizzaalCuadrado" target="_blanck"><i class="fab fa-facebook-square"></i></a>
			</h3>
	   	</div>	   
		<section class="menu-atajos col-12">
			<div class="transparencia">
				<div class="mx-auto col-12 col-sm-10 col-xl-9 p-0 m-0 container">
					<a class="opcion opcion-header d-none d-lg-inline-block" href="faq">
						<div class="texto"><i class="fas fa-info-circle mr-2"></i>Información</div>
					</a>
					<a class="opcion opcion-header d-none d-lg-inline-block" href="menu?desde_inicio">
						<div class="texto"><i class="fas fa-pizza-slice mr-2"></i>Nuestras Pizzas</div>
					</a>
					<a class="opcion opcion-header d-none d-lg-inline-block" href="#opiniones">
						<div class="texto"><i class="fas fa-comment mr-2"></i>Opiniones</div>
					</a>
				</div>
			</div>
		</section>
    </header>
	<section class="menu-atajos col-12 d-lg-none position-relative">
		<div class="transparencia">
			<div class="mx-auto col-12 col-sm-10 col-xl-9 p-0 m-0 container">
				<a class="opcion dif" href="menu?desde_inicio">
					<div class="texto"><i class="fas fa-pizza-slice mr-2"></i>Nuestras Pizzas</div>
				</a>
				<a class="opcion d-none" href="https://api.whatsapp.com/send?phone=5492914400810">
					<div class="texto"><i class="fab fa-whatsapp mr-2"></i>Pedí por Whatsapp</div>
				</a>
				<a class="opcion" href="#opiniones">
					<div class="texto"><i class="fas fa-comment mr-2"></i>Opiniones</div>
				</a>
				<a class="opcion d-none" href="faq">
					<div class="texto"><i class="fas fa-info-circle mr-2"></i>Información</div>
				</a>
				<a class="opcion dif d-none" href="galeria">
					<div class="texto"><i class="fas fa-info-circle mr-2"></i>Galería</div>
				</a>
			</div>
		</div>
	</section>

	<section id="faq" class="pt-4 pt-md-5 pb-0">   
		<div class="mx-auto col-12 col-sm-10 col-xl-9 p-0 m-0 container">  
			<div class="contenido col-12 col-md-6">
				<h2 class="col-12 sub text-center mt-1 mt-md-4 mb-2 float-left">Pizza Completa</h2>  
				<div class="lista mt-1 text-center ">
					<!-- <img loading="lazy" class="img_sab d-inline-block" src="img/faq_pizza1sab.jpg" width="150" alt="Pizza completa de un sabor">
					<img loading="lazy" class="img_sab d-inline-block" src="img/faq_pizza2sab.jpg" width="150" alt="Pizza completa de dos sabores">
					<img loading="lazy" class="img_sab d-inline-block" src="img/faq_pizza3sab.jpg" width="150" alt="Pizza completa de tres sabores"> -->
					<img loading="lazy" class="img_sab sin-borde d-inline-block" src="img/pizza-completa.png?a" height="200px" alt="Pizza completa de uno a cuatro sabores">
					<p class="clearfix display-5 mt-0 text-center p-4 pt-0 pb-0">
						Podes elegir hasta cuatro sabores por pizza. <strong>¡Mide 43x43cm!</strong> 
						Equivale a dos pizzas tradicionales: <strong>comen 4</strong>, pican 5.
					</p>
				</div> 
			</div>

			<div class="contenido col-12 col-md-6">
				<h2 class="col-12 sub text-center mt-4 mb-2 float-left">Media Pizza</h2>  
				<div class="lista mt-1 text-center">
<!-- 					<img loading="lazy" class="img_sab d-inline-block" src="img/faq_mediapizza.jpg" width="75" alt="Media pizza de uno o dos sabores.">    
 -->					<img loading="lazy" class="img_sab sin-borde d-inline-block" src="img/pizza-media.png?a" height="200px" alt="Media pizza de uno o dos sabores.">   
					<p class="clearfix display-5 mt-0 text-center p-4 pt-0 pb-0">
						Podes elegir hasta dos sabores por pizza. <strong>¡Mide 43x21cm!</strong>
						Equivale a una pizza tradicional: <strong>comen 2</strong>.
					</p>
				</div> 
			</div>

			<div class="clearfix"></div>
			
			<div class="contenido col-12 col-md-6">
				<h2 class="col-12 sub text-center mt-4 mb-2 float-left">Pizza al Paso</h2>  
				<div class="lista mt-1 text-center">
					<img loading="lazy" class="img_sab sin-borde d-inline-block" src="img/faq_pizzaporcion.jpg" height="70" alt="Media pizza de uno o dos sabores.">    
					<p class="clearfix display-5 mt-1 text-center p-4 pt-0 pb-0">
						Porción de pizza de un sabor <strong>para retirar</strong> en Sarmiento 906. 
						<strong>Come uno</strong>.
					</p>
				</div> 
			</div>

			<div class="contenido col-12 col-md-6 d-inline-block">
				<h2 class="col-12 sub text-center mt-4 mb-3 float-left">Zona de Delivery</h2>  
				<div class="lista mt-1 text-center">
					<i class="fas fa-motorcycle d-inline-block display-3"></i>
					<p class="clearfix display-5 mt-1 text-center p-4 pt-0 pb-0">
						Tenemos una amplia cobertura de delivery para Bahía Blanca.
						Mandanos un <a href="https://api.whatsapp.com/send?phone=5492914400810" target="_blanck">Whatsapp</a> 
						o llamanos al <a href="tel:02914526024">452-6024</a> para saber si tu zona está incluida.
					</p>
				</div> 
			</div>
		</div>
	</section>

	<section class="col-12 p-0 pb-2 bg-dark d-md-none float-left position-relative">
		<div id="carouselExampleControls" class="carousel2 slide position-relative" data-ride="carousel2">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img loading="lazy" class="d-block w-100" src="img/promos/3.jpg">
				</div>
				<div class="carousel-item">
					<img loading="lazy" class="d-block w-100" src="img/promos/2.jpg">
				</div>
				<div class="carousel-item">
					<img loading="lazy" class="d-block w-100" src="img/promos/1.jpg">
				</div>
			</div>
		</div>
	</section>

	<section class="opiniones">
        <div class="ancla float-left">
            <div id="opiniones" class="punto"></div>
        </div>
		<div class="transparencia h-100 pt-5">
			<div class="mx-auto col-12 col-sm-10 col-xl-9 p-0 m-0 container">  
				<h1 class="col-12 text-center">Pizza al Cuadrado</h1>
				<h5 class="col-12 text-center">Opiniones</h5>

				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators d-none">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner mt-5">


						<?php 
						shuffle($opiniones);
						foreach($opiniones as $opinion){ ?>

							<div class="carousel-item <?php if($opiniones[0]==$opinion) echo 'active'; ?>">
								<div class="opinion">
									<i class="frase col-12">
										"<?php echo $opinion['opinion']; ?>"
									</i>
									<div class="autor col-12 mt-4 pb-5 pb-md-1">
										<img loading="lazy" class="imagen" width="23px" src="<?php echo $opinion['foto']; ?>" />
										<span class="nombre mt-1 ml-2 mr-2"><?php echo $opinion['nombre']; ?></span>
										<span class="separador mt-1 mr-2 d-none d-lg-inline-block">-</span>
										<span class="clearfix d-lg-none"></span>
										<span class="lugar mt-1 d-none d-lg-inline-block"><?php echo $opinion['fuente']; ?></span>
										<a href="<?php echo $fuente[$opinion['fuente']] ?>" target="_blank" class="col-12 mt-5 pt-2 float-left text-center">
											Dejanos tu comentario
										</a>
									</div>
								</div>
							</div>							
						<?php }	?>
					</div>
					<a class="carousel-control-prev carousel-control" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next carousel-control" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>	
	</section>
	
	
    <section id="oferta" class="d-none">
		<img loading="lazy" src="img/promocion.jpg" />
	</section>	
	<?php include_once 'bloques/footer.php'; ?>
</body>
<script>
	$('.carousel').carousel({
		interval: 6000
	});
	$('.carousel2').carousel({
		interval: 4000
	})
</script>



<!-- Latest compiled and minified CSS 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->

</html>
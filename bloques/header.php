<script>

	$(window).scroll(function(event) {
		const altura = $(window).scrollTop();
		const ancho = $(document).width();
		console.log(altura);
		
		if(altura>0 && ancho<960){ 
			$('#logo-menu').css("height","74px");
			$('#top').css("height","189px");
			$('header#top #logo-menu  #logo img').css("width","90px");	
			$('header#top #logo-menu  #logo').css("margin-top","10px");	
			$('header#top #titulo').css("margin-top","73px");	
			$('header#top #logo-menu  a#menu-icono').css("margin-top","13px");
		}

	});


	/*document.onscroll = function(){
		//obtengo la altura
		const altura = document.documentElement.scrollTop;

		console.log(altura);

		if(altura>200){
			//$('header#top').hide();
		}else if(altura<200){
			//$('header#top').show();
		}
		
	};*/

	

</script>


<meta name="theme-color" content="orange">

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
	<div id="titulo">
		<div id="sombra"><h3><?php echo $lugar; ?></h3></div>
	</div>
</header>	
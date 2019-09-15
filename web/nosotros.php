<?php $lugar = 'Nosotros'; ?> 
<!DOCTYPE HTML> 
<html> 
<head>
<title><?php echo $lugar; ?> | Pizza al cuadrado - Bah&iacute;a Blanca</title>
<meta charset="UTF-8" />
<link rel="shortcut icon" href="img/icono.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Satisfy" rel="stylesheet">
<meta name="description" content="Con recetas cl&aacute;sicas o una selecta variedad de gustos especiales en nuestras pizzas, y con tentadoras promociones, hemos hecho que sea un placer comer en las casas bahienses." />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script> 
<script type="text/javascript">
$(function() {
	var imagenes = ['header.jpg', 'header2.jpg', 'header3.jpg', 'header4.jpg'];
  $('header#top #titulo').css({'background-image': 'url(img/' + imagenes[Math.floor(Math.random() * imagenes.length)] + ')'});
});
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144567784-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144567784-1');
</script>

<script src="https://kit.fontawesome.com/591d68fa75.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="css/index.css?fecha=29l08l2019" />
<link rel="stylesheet" href="css/global.css?fecha=29l08l2019" />
<link rel="stylesheet" href="css/footer.css?fecha=29l08l2019" />


</head>
 
<body>
	<?php include_once 'bloques/header.php'; ?>    
    
  <section id="nosotros" class="mb-3 mb-lg-5">
		<div class="mx-auto col-12 col-sm-10 col-xl-9 p-0 m-0 container">
			<h3 class="m-0 p-0 pt-4">
				<span>
					<h1>Pizzas de 43cm por 43cm</h1>
				</span>
				<span class="sub">Para <strong>4 o 5 personas</strong> con 3 gustos</span>			
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
				Nuestras pizzas elaboradas con la materia prima de mejor calidad, llegan 
				a ser, hoy en d&iacute;a, una de las m&aacute;s exquisitas de la ciudad bahiense. 
				Con recetas cl&aacute;sicas o una selecta variedad de gustos especiales en nuestras
				pizzas, y con tentadoras promociones, hemos hecho que sea un placer comer en casa.
				</p>
				<p class="ultimo">
				&#191;Est&aacute;s c&oacute;modo en tu casa?, &#191;Se te complica acercarte a Sarmiento 906? Nosotros tenemos 
				la soluci&oacute;n: &#161;ENTREGAMOS PEDIDOS POR MEDIO DE NUESTRO DELIVERY!, el cual se encuentra
				disponible para gran parte de Bah&iacute;a Blanca. Recomendamos en &eacute;pocas de bajas temperaturas 
				esperar la pizza con el horno precalentado e introducirla 3/4 minutos, para disfrutar de 
				su m&aacute;ximo sabor. Antes de llamar al (0291) 4526024 para hacer tu pedido, consulta la 
				secci&oacute;n de <a href="faq.php">información útil</a>, y enterate como encargar nuestros productos.
				</p>
			</h4>
		</div>
	</section> 
	<?php include_once 'bloques/footer.php'; ?>   
</body>
</html>
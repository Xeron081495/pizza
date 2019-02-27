<?php $lugar = 'Preguntas Frecuentes'; ?> 
<!DOCTYPE HTML> 
<html> 
<head>
<title><?php echo $lugar; ?> | Pizza al cuadrado, Pizzas y Empanadas - Bah&iacute;a Blanca</title>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/global.css" />
<link rel="stylesheet" href="css/footer.css" />
<link rel="stylesheet" href="css/faq.css" />
<link rel="shortcut icon" href="img/icono.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Satisfy" rel="stylesheet">
<meta name="description" content="Con recetas clásicas o una selecta variedad de gustos especiales en nuestras pizzas y empanadas, y con tentadoras promociones, hemos hecho que sea un placer comer en las casas bahienses." />
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
    <section id="faq">
		<div class="titulo">C&oacute;mo hacer mi pedido</div>
		<div class="contenido">
			<img class="img_sab" src="img/faq_pizza1sab.jpg" height="115" alt="Pizza completa de un sabor">
            <img class="img_sab" src="img/faq_pizza2sab.jpg" height="115" alt="Pizza completa de dos sabores">
            <img class="img_sab" src="img/faq_pizza3sab.jpg" height="115" alt="Pizza completa de tres sabores">
            <img class="img_sab" src="img/faq_mediapizza.jpg"height="115" alt="Media pizza de uno o dos sabores.">       
            <img class="img_sab" src="img/faq_pizzactos.png" height="115" alt="Comen 4 o pican 5 personas">
        <p>Para realizar t&uacute; pedido por medio de nuestro delivery, ten&eacute;s que tener en cuenta los siguientes pasos:
        </p>
        <ol class="lista">
          <li>Saber si tu direcci&oacute;n est&aacute; dentro de nuestra &aacute;rea de delivery, en caso contrario te invitamos a pasar 
		  por Sarmiento 906 a retirar tu pedido. Preguntar por tel&eacute;fono o en el local por &aacute;rea de cobertura del delivery. <!--<a href="#dos" class="link">(Click acá para ver área de delivery)</a>.--></li>
          <li>Elegir la cantidad de sabores que deseas en tu pizza y su tama&ntilde;o. Una<strong> pizza completa</strong> 
		  <em>(43cm x 43cm)</em> puede ser de una variedad, dos variedades o tres variedades. Una <strong>media pizza</strong><em>
		  (43cm x 22cm)</em> puede ser de una o dos variedades. <a class="link" href="https://www.facebook.com/pizzaalcuadrado/photos_all" target="_blank">(Te invitamos a ver nuestras pizzas)</a>.</li>
          <li>Decidir que gustos queres, los cuales podes ver en:  <a href="menu.php" target="_blank" class="link">
		  pizzas y empanadas.</a></li>
          <li>Llamarnos al  <a href="tel:02914526024" class="link">(0291) 4526024</a> para tener tu pedido 
		  en el confort de tu hogar</li>
        </ol>
      </div>
	</section>
	<?php include_once 'bloques/footer.php'; ?>   
</body>
</html>
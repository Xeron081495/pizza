<?php $lugar = 'Información'; ?> 
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
 
<link rel="stylesheet" href="css/global.css?fecha=29l08l2019" />
<link rel="stylesheet" href="css/footer.css?fecha=29l08l2019" />
<link rel="stylesheet" href="css/faq.css?fecha=29l08l2019" />


</head>
 
<body>
	<?php include_once 'bloques/header.php'; ?>    
    <section id="faq">      
		  <div class="mx-auto col-12 col-sm-10 col-xl-9 p-0 m-0 container">
        <h2 class="titulo mb-3">Las pizzas más grandes de Bahía Blanca</h2>
        <div id="info" class="mb-3 mb-lg-5 display-5" ><i><strong>¡Nuestras pizzas equivalen a dos de las tradicionales!</strong> Comen 4, pican 5</i></div>
        
        <div class="col-12 col-lg-5 float-left text-center">
          <h4 class="info pb-2 d-none d-lg-inline-block ">Una pizza de Pizza al Cuadrado</h4>
          <img class="d-inline-block" src="img/pizza-completa.png" height="300" alt="Comen 4 o pican 5 personas">        
        </div>
        <div class=" mb-5 pt-4 display-1 col-12 d-none d-lg-inline-block col-md-2 float-left text-center">
          <h4 class="info pb-2"> igual a</h4>
          <i class="fas fa-equals mt-5"></i>
        </div>
        <div class="col-12 col-md-5 float-left  d-none d-lg-inline-block text-center">
          <h4 class="info pb-2">Dos pizzas tradicionales</h4>
          <img class="d-inline-block mt-4" src="img/2-pizzas.png" height="200" alt="Comen 4 o pican 5 personas">
          
        </div>

        <div class="clearfix"></div>
      </div>

      <div class="contenido">
        <h2 class="col-12 sub text-center mt-4 mb-3 float-left">Pizza completa</h2>  
        <div class="lista mt-1 text-center">
          <!-- <img class="img_sab d-inline-block" src="img/faq_pizza1sab.jpg" width="150" alt="Pizza completa de un sabor"> -->
          <img class="img_sab d-inline-block" src="img/faq_pizza1sab.jpg" width="150" alt="Pizza completa de dos sabores">
          <img class="img_sab d-inline-block" src="img/faq_pizza2sab.jpg" width="150" alt="Pizza completa de tres sabores">
          <img class="img_sab d-inline-block" src="img/faq_pizza3sab.jpg" width="150" alt="Pizza completa de cuatro sabores">
          <p class="clearfix display-5 mt-3 text-center">Podes elegir hasta tres sabores por pizza. <strong>¡Mide 43x43cm!</strong> <br>Equivale a dos pizzas tradicionales: <strong>comen 4</strong>, pican 5.</p>
        </div> 


        <h2 class="col-12 sub text-center mt-4 mb-2 float-left">Media Pizza</h2>  
        <div class="lista mt-1 text-center">
<!--         <img class="img_sab d-inline-block" src="img/faq_mediapizza.jpg" width="75" alt="Media pizza de uno o dos sabores.">    
 -->        <img class="img_sab d-inline-block" src="img/faq_mediapizza.jpg" width="75" alt="Media pizza de uno o dos sabores.">   
          <p class="clearfix display-5 mt-3  text-center">Podes elegir hasta dos sabores por pizza. <strong>¡Mide 43x21cm!</strong> <br>Equivale a una pizza tradicional: <strong>comen 2</strong>.</p>
        </div> 
        
        <!-- <h2 class="col-12 sub text-center mt-4 mb-2 float-left">Pizza al paso</h2>  
        <div class="lista mt-1 text-center">
        <img class="img_sab d-inline-block" src="img/faq_pizzaporcion.jpg" height="70" alt="Media pizza de uno o dos sabores.">    
          <p class="clearfix display-5 mt-3  text-center">Porción de pizza de un sabor <strong>para retirar</strong> en Sarmiento 906. <br><strong>Come uno</strong>.</p>
        </div> 
 -->
        
        <h2 class="col-12 sub text-center mt-4 mb-3 float-left">Zona de Delivery</h2>  
        <div class="lista mt-1 text-center">
          <p class="clearfix display-5 mt-3 text-center">
            Tenemos una amplia cobertura de delivery para Bahía Blanca.<br>
            Para saber si tu zona está incluida, mandanos un mensaje por 
            <a href="https://api.whatsapp.com/send?phone=5492914400810" target="_blanck">Whatsapp</a> 
            o llamanos al <a href="tel:02914526024">452-6024</a>.
          </p>
        </div> 
      </div>

		<h2 class="titulo d-none">Tamaños de pizzas y Delivery</h2>
		<div class="contenido d-none">
			<img class="img_sab" src="img/faq_pizza1sab.jpg" height="115" alt="Pizza completa de un sabor">
            <img class="img_sab" src="img/faq_pizza2sab.jpg" height="115" alt="Pizza completa de dos sabores">
            <img class="img_sab" src="img/faq_pizza3sab.jpg" height="115" alt="Pizza completa de tres sabores">
            <img class="img_sab" src="img/faq_pizza4sab.jpg" height="115" alt="Pizza completa de cuatro sabores">
            <img class="img_sab" src="img/faq_mediapizza.jpg"height="115" alt="Media pizza de uno o dos sabores.">    
            <img class="img_sab" src="img/faq_mediapizza.jpg"height="115" alt="Media pizza de uno o dos sabores.">       
            <img class="img_sab" src="img/faq_pizzactos.png" height="115" alt="Comen 4 o pican 5 personas">  
        <p>Para realizar t&uacute; pedido por medio de nuestro delivery, ten&eacute;s que tener en cuenta los siguientes pasos:
        </p>
        <ol class="lista">
          <li>Saber si tu direcci&oacute;n est&aacute; dentro de nuestra &aacute;rea de delivery, en caso contrario te invitamos a pasar 
		  por Sarmiento 906 a retirar tu pedido. Preguntar por tel&eacute;fono o en el local por &aacute;rea de cobertura del delivery. <!--<a href="#dos" class="link">(Click ac� para ver �rea de delivery)</a>.--></li>
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
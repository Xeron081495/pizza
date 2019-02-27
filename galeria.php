<?php $lugar = 'Galer&iacute;a'; ?> 
<!DOCTYPE HTML> 
<html> 
<head>
<title><?php echo $lugar; ?> | Pizza al cuadrado, Pizzas y Empanadas - Bahía Blanca</title>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/global.css" />
<link rel="stylesheet" href="css/footer.css" />
<link rel="stylesheet" href="css/galeria.css" />
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
	<?php 
		$arreglo = array(
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1634937370147287%3A0&width=500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>',
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1619137951727229%3A0&width=500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>',
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1619137411727283%3A0&width=500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>',
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1618800211761003%3A0&width=500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>',
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1605585533082471%3A0&width=500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>',
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1600878130219878%3A0&width=500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>',
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1600869526887405%3A0&width=500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>',
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1597728747201483%3A0&width=500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>',
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1595980414042983%3A0&width=500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>',
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1593500230957668%3A0&width=500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>',
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1591260097848348%3A0&width=500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>',	
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1787729238201432%3A0&width=500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>',		
		);	
		shuffle($arreglo); 
	?>
	<section id="facebook">
		<?php
			for($i=0;$i<count($arreglo);$i++){
				echo $arreglo[$i];				
			}
		?>
	</section>	
	<?php include_once 'bloques/footer.php'; ?>    
</body>
</html>
<?php $lugar = 'Galer&iacute;a'; ?> 
<!DOCTYPE HTML> 
<html> 
<head>
<title><?php echo $lugar; ?> | Pizza al cuadrado -  Bah&iacute;a Blanca</title>
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

<script src="https://kit.fontawesome.com/591d68fa75.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

<link rel="stylesheet" href="css/global.css?fecha=29l08l2019" />
<link rel="stylesheet" href="css/footer.css?fecha=29l08l2019" />
<link rel="stylesheet" href="css/galeria.css?fecha=29l08l2019" />


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144567784-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144567784-1');
</script>
<script>
	$('.portfolio-item').isotope({
         	itemSelector: '.item',
         	layoutMode: 'fitRows'
		});
		$('.portfolio-menu ul li').click(function(){
		$('.portfolio-menu ul li').removeClass('active');
		$(this).addClass('active');
		
		var selector = $(this).attr('data-filter');
		$('.portfolio-item').isotope({
			filter:selector
		});
		return  false;
		});
		$(document).ready(function() {
		var popup_btn = $('.popup-btn');
		popup_btn.magnificPopup({
		type : 'image',
		gallery : {
		enabled : true
		}
		});
	});
</script>


</head>
 
<body>
	<?php include_once 'bloques/header.php'; ?>

	<div class="container">
         <div class="portfolio-menu mt-0 mb-4">
            <ul>
               <li class="btn btn-outline-dark active mt-2" data-filter="*">Todas las fotos</li>
            </ul>
         </div>
         <div class="portfolio-item row">
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="galeria/2.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="galeria/2.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="galeria/3.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="galeria/3.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="galeria/4.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="galeria/4.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="galeria/5.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="galeria/5.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="galeria/6.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="galeria/6.jpg" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="galeria/8.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="galeria/8.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="galeria/9.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="galeria/10.jpg" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="galeria/11.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="galeria/11.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="galeria/12.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="galeria/12.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="galeria/13.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="galeria/13.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="galeria/15.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="galeria/15.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="galeria/16.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="galeria/16.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="galeria/1.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="galeria/1.jpg" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="galeria/7.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="galeria/7.jpg" alt="">
               </a>
            </div>
         </div>
      </div>







	<!-- <?php 
		$arreglo = array(
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2F1425058161135210%2Fposts%2F2094585820849104%2F&width=500&show_text=false&height=498&appId" width="500" height="498" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>',	
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1595980414042983%3A0&width=500&show_text=false&height=375&appId" width="500" height="375" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>',
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1600869526887405%3A0&width=500&show_text=false&height=318&appId" width="500" height="318" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>',	
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1597728747201483%3A0&width=500&show_text=false&height=375&appId" width="500" height="375" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>',
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1600878130219878%3A0&width=500&show_text=false&height=498&appId" width="500" height="498" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>',
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1593500230957668%3A0&width=500&show_text=false&height=375&appId" width="500" height="375" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>',
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1619137951727229%3A0&width=500&show_text=false&height=498&appId" width="500" height="498" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>',
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2F1425058161135210%2Fposts%2F2063556253952061&width=500&show_text=false&height=498&appId" width="500" height="498" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>',
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1591260097848348%3A0&width=500&show_text=false&height=498&appId" width="500" height="498" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>'/*					
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
		'<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpizzaalcuadrado%2Fposts%2F1787729238201432%3A0&width=500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>',*/		
		);	
		shuffle($arreglo); 
	?>
	<section id="facebook">
		<?php
			for($i=0;$i<count($arreglo);$i++){
				echo $arreglo[$i];				
			}
		?>
	</section>	 -->
	<?php include_once 'bloques/footer.php'; ?>    
</body>
</html>
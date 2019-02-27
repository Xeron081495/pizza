<?php
include_once '../_clases/productos.php'; 
$menu = new Menu();
$sabores = $menu->getSabores();
?>

<form action="php/agregar.php?tipo=producto" method="post">
	<p>Agregar Producto</p>
	<p><input name="id" type="number" min="1"></p>	
	<?php 
		$i=1;
		foreach($sabores as $sabor){
			echo '<div style="width:150px; float:left;" ><label><input  type="checkbox" name="sabores[]" value="'.$sabor["id"].'" />'.$sabor["nombre"].'</label></div>';
			if(($i%3)==0)
				echo '<br />';
			$i++;
		}
	?>
	<br><br>
	<p><input type="submit" value="Enviar"></p>
</form>
<br><br><br>
<form action="php/agregar.php?tipo=sabor" method="post">	
	<p>Agregar Sabor</p>
	<p><input name="nombre" type="text"></p>	
	<p><input type="submit" value="Enviar"></p>
</form>


<?php
include_once '../_clases/productos.php'; 
$menu = new Menu();
$sabores = $menu->getSabores();
?>

<form action="php/agregar.php?tipo=producto" method="post" class="col-12">
	<h2 class="mb-3">Agregar Producto</h2>
	<p class="float-left m-0 p-0 mb-1">
		<label class="m-0 p-0 mr-3">Numero</label>
		<input name="id" type="number" min="1" required>
	</p>
	<p class="float-left m-0 p-0 mb-1">
		<label class="m-0 p-0 ml-5 mr-3">Nombre</label>
		<input name="nombre" type="text">
	</p>	
	<p class="float-left m-0 p-0 mb-1">
		<label class="m-0 p-0 ml-5 mr-3">Categoría</label>
		<select name="categoria" required>
			<option>Pizzas</option>
		</select>
	</p>	
	<div class="clearfix mb-1"></div>
	<p class="col-12 col-12 m-0 p-0 mb-1">
		<label class="col-1 m-0 p-0">Gustos</label>
	</p>		
	<?php foreach($sabores as $sabor){ ?>
			<label class="col-3 float-left m-0 p-0" >
				<input type="checkbox" name="sabores[]" value="<?php echo $sabor["id"]; ?>" />
				<?php echo $sabor["nombre"]; ?>
			</label>
	<?php } ?>
	<div class="clearfix mt-2 mb-1"></div>
	<p class="col-12 col-12 m-0 p-0 mb-1 mt-2">
		<label class="col-2 m-0 btn btn-dark" onclick="mostrarOpcionales()">Gustos opcionales</label>
	</p>		
	<?php foreach($sabores as $sabor){ ?>
			<label class="col-3 opcional d-none float-left m-0 p-0" >
				<input type="checkbox" name="opcionales[]" value="<?php echo $sabor["id"]; ?>" />
				<?php echo $sabor["nombre"]; ?>
			</label>
	<?php } ?>	
	<br><br>
	<div class="clearfix mb-2"></div>
	<p><input type="submit" class="btn btn-primary" value="Enviar"></p>
</form>
<br><br><br>
<form action="php/agregar.php?tipo=sabor" method="post" class="col-12">	
	<h2>Agregar Sabor</h2>
	<p class="float-left m-0 p-0 mb-1">
		<label class="m-0 p-0 mr-3">Nombre</label>
		<input name="id" type="text">
	</p>
	<div class="clearfix mb-2"></div>
	<p><input type="submit" class="btn btn-primary" value="Enviar"></p>
</form>


<script src="https://kit.fontawesome.com/591d68fa75.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
<script>
	let visible = false;
	function mostrarOpcionales(){
		if(visible)
			$('.opcional').addClass('d-none');
		else	
			$('.opcional').removeClass('d-none');

		visible =!visible;
	}
</script>

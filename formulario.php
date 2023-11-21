<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo Libro</h1>
	<form method="post" action="nuevo.php">
		<label for="nombre_libro">Nombre del libro:</label>
		<input class="form-control" name="nombre_libro" required type="text" id="nombre_libro" placeholder="Nombre del libro">

		<label for="genero">Genero:</label>
		<input class="form-control" name="genero" required type="text" id="genero" placeholder="Genero del libro">

		<label for="autor_libro">Autor:</label>
		<input class="form-control" name="autor_libro" required type="text" id="autor_libro" placeholder="Autor">

		<label for="codigo_fabrica">Codigo:</label>
		<input class="form-control" name="codigo_fabrica" required type="number" id="codigo_fabrica" placeholder="Codigo">

		<label for="editorial">Editorial:</label>
		<input class="form-control" name="editorial" required type="text" id="editorial" placeholder="Editorial">

		<label for="fecha_venta_renta">Fecha de venta o renta:</label>
		<input class="form-control" name="fecha_venta_renta" required type="date" id="fecha_venta_renta" placeholder="Fecha de venta o renta">

		<label for="precio">Precio:</label>
		<input class="form-control" name="precio" required type="number" id="precio" placeholder="Precio">

		<label for="existencia">Existencia:</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>
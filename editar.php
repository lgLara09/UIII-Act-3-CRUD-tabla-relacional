<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM tbl_libro WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar libro con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="nombre_libro">Nombre del libro:</label>
			<input value="<?php echo $producto->nombre_libro ?>" class="form-control" name="nombre_libro" required type="text" id="nombre_libro" placeholder="Nombre del libro">

			<label for="genero">Genero:</label>
			<input value="<?php echo $producto->genero ?>" class="form-control" name="genero" required type="text" id="genero" placeholder="Genero del libro">

			<label for="autor_libro">Autor:</label>
			<input value="<?php echo $producto->autor_libro ?>" class="form-control" name="autor_libro" required type="text" id="autor_libro" placeholder="Autor del libro">

			<label for="codigo_fabrica">Codigo:</label>
			<input value="<?php echo $producto->codigo_fabrica ?>" class="form-control" name="codigo_fabrica" required type="number" id="codigo_fabrica" placeholder="Codigo">

			<label for="editorial">Editorial:</label>
			<input value="<?php echo $producto->editorial ?>" class="form-control" name="editorial" required type="text" id="editorial" placeholder="Editorial">

			<label for="fecha_venta_renta">Fecha de venta o renta:</label>
			<input value="<?php echo $producto->fecha_venta_renta ?>" class="form-control" name="fecha_venta_renta" required type="date" id="fecha_venta_renta" placeholder="Fecha de la venta o renta">

			<label for="precio">Precio:</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" required type="number" id="precio" placeholder="Precio de libro">

			<label for="existencia">Existencia:</label>
			<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>

<?php include_once "encabezado.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM tbl_libro;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Libros</h1>
		<div>
			<a class="btn btn-success" href="./formulario.php">Nuevo Libro <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>id_libro</th>
					<th>Nombre del libro</th>
					<th>Genero</th>
					<th>Autor</th>
					<th>Codigo</th>
					<th>Editorial</th>
					<th>Fecha Venta_Renta</th>
					<th>Precio</th>
					<th>Existencia</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr>
					<td><?php echo $producto->id ?></td>
					<td><?php echo $producto->nombre_libro ?></td>
					<td><?php echo $producto->genero ?></td>
					<td><?php echo $producto->autor_libro ?></td>
					<td><?php echo $producto->codigo_fabrica ?></td>
					<td><?php echo $producto->editorial ?></td>
					<td><?php echo $producto->fecha_venta_renta ?></td>
					<td><?php echo $producto->precio ?></td>
					<td><?php echo $producto->existencia ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>
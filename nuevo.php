<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["nombre_libro"]) || !isset($_POST["genero"]) || !isset($_POST["autor_libro"]) || !isset($_POST["codigo_fabrica"]) || !isset($_POST["editorial"]) || !isset($_POST["fecha_venta_renta"]) || !isset($_POST["precio"]) || !isset($_POST["existencia"]))

#Si todo va bien, se ejecuta esta parte del código...
$contrasena="";
$usuario = "root";
$nombre_base_de_datos = "bd_libreriag2";
try{
	$base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, "");
	 $base_de_datos->query("set names utf8;");
    $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}$nombre_libro = $_POST["nombre_libro"];
$genero = $_POST["genero"];
$autor_libro = $_POST["autor_libro"];
$codigo_fabrica = $_POST["codigo_fabrica"];
$editorial = $_POST["editorial"];
$fecha_venta_renta = $_POST["fecha_venta_renta"];
$precio = $_POST["precio"];
$existencia = $_POST["existencia"];

$sentencia = $base_de_datos->prepare("INSERT INTO tbl_libro(nombre_libro, genero, autor_libro, codigo_fabrica, editorial, fecha_venta_renta, precio, existencia) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre_libro, $genero, $autor_libro, $codigo_fabrica, $editorial, $fecha_venta_renta, $precio, $existencia]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>
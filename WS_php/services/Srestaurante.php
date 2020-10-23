<?php //Recibir peticiones de restaurante:
include('../controllers/Crestaurante.php');
include('../controllers/Calgoritmos.php');
//instancia a la clase restaurante
$rest = new Restaurante();

$accion = $_SERVER["REQUEST_URI"];


//SELECT RESTAURANTE
if ($_GET["accion"] == "select") {
	$var = $_GET["var"];
	if ($var == "all") {
		$data = $rest->listarrestaurante();
		print json_encode($data, JSON_FORCE_OBJECT);
	}

	if ($var == "one") {
		$id = $_GET["id"];
		$data = $rest->listarrestaurante_one($id);
		if (!empty($data)) {
			print json_encode($data, JSON_FORCE_OBJECT);
		}
	}
}
//INSERT RESTAURANTE
if ($_GET["accion"] == "insert") {
	$alg = new Algoritmos();
	$resta = $alg->palabra($_GET["rest"]);
	$direc = $alg->palabra($_GET["direc"]);
	$tel = $_GET["tel"];

	$data = $rest->insertarrest($resta, $direc, $tel);

	if ($data) print json_encode("true", JSON_FORCE_OBJECT);
	else print json_encode("false", JSON_FORCE_OBJECT);
}
//Update Restaurante
if ($_GET["accion"] == "update") {
	$alg = new Algoritmos();
	$resta = $alg->palabra($_GET["rest"]);
	$direc = $alg->palabra($_GET["direc"]);
	$tel = $_GET["tel"];
	$id = $_GET["id"];

	$data = $rest->modificarestaurante($id, $resta, $direc, $tel);

	if ($data) print json_encode("true", JSON_FORCE_OBJECT);
	else print json_encode("false", JSON_FORCE_OBJECT);
}

//Delete
if ($_GET["accion"] == "delete") {
	if (is_numeric($_GET["id"])) {

		$id = $_GET["id"];
		$data = $rest->eliminarrestaurante($id);

		if ($data) print json_encode("true", JSON_FORCE_OBJECT);
		else print json_encode("false", JSON_FORCE_OBJECT);
	}
}

<?php //Recibir peticiones de restaurante:



include('../controllers/Crestaurante.php');
include('../controllers/Calgoritmos.php');
//instancia a la clase restaurante
$rest = new Restaurante();
//obtener la accion
$method = $_SERVER["REQUEST_METHOD"];


//SELECT RESTAURANTE
if ($method == "GET") {

	if (!isset($_GET["id"])) {
		$data = $rest->listarrestaurante();
		print json_encode($data, JSON_FORCE_OBJECT);
	} else {

		if (is_numeric($_GET["id"])) {
			$id = $_GET["id"];
			$data = $rest->listarrestaurante_one($id);
			if (!empty($data)) {
				print json_encode($data, JSON_FORCE_OBJECT);
			}
		}
	}
}

//INSERT RESTAURANTE
if ($method == "POST") {
	if (!isset($_REQUEST["id"])) {

		$alg = new Algoritmos();
		$resta = $alg->palabra($_REQUEST["rest"]);
		$direc = $alg->palabra($_REQUEST["direc"]);
		$tel = trim($_REQUEST["tel"]);

		$data = $rest->insertarrest($resta, $direc, $tel);

		if ($data) print json_encode(true, JSON_FORCE_OBJECT);
		else print json_encode(false, JSON_FORCE_OBJECT);
	} else {
		//Update Restaurante
		$alg = new Algoritmos();
		$resta = $alg->palabra($_REQUEST["rest"]);
		$direc = $alg->palabra($_REQUEST["direc"]);
		$tel = $_REQUEST["tel"];
		$id = $_REQUEST["id"];

		$data = $rest->modificarestaurante($id, $resta, $direc, $tel);

		if ($data) print json_encode(true, JSON_FORCE_OBJECT);
		else print json_encode(false, JSON_FORCE_OBJECT);
	}
}

//Delete
if ($method == "DELETE") {
	if (is_numeric($_GET["id"])) {

		$id = $_GET["id"];
		$data = $rest->eliminarrestaurante($id);

		if ($data) print json_encode(true, JSON_FORCE_OBJECT);
		else print json_encode(false, JSON_FORCE_OBJECT);
	}
}

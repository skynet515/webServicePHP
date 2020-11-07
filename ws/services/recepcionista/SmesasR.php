<?php
include('../../controllers/CMesa.php');
include('../../controllers/Calgoritmos.php');

$mesa = new CMesa();
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET" && isset($_GET["id"]) && isset($_GET["fecha"])) {
	//http://localhost:8080/webServicePHP/WS_php/services/SMesa.php?id=2

	$id = $_GET["id"];
	$fecha = $_GET["fecha"];

	$data = $mesa->ListarMesa_h($id, $fecha);
	print json_encode($data, JSON_FORCE_OBJECT);
}

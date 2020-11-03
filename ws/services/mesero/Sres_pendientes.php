<?php
include('../../controllers/Crespend.php');

//instancia a la clase respend
$rest = new Respend();

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET") {

	$data = $rest->listarespendi();
	print json_encode($data, JSON_FORCE_OBJECT);
}


if ($method ==  "PUT") {
	$id = $_GET["id"];
	$data = $rest->modificarespendiente($id);

	if ($data) print json_encode(true, JSON_FORCE_OBJECT);
	else print json_encode(false, JSON_FORCE_OBJECT);
}

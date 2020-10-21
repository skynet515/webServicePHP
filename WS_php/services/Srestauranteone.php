<?php //Recibir peticiones de restaurante:
include('../controllers/Crestaurante.php');


$rest = new Restaurante();
$data = $rest->listarrestaurante();

foreach ($data as $n => $datos) {
	print json_encode($datos, JSON_FORCE_OBJECT);
}
//Obtener el http

//read 

//create Post

//update put


//delete delete
<?php
include('../../controllers/CMesa.php');
include('../../controllers/Calgoritmos.php');

$mesa = new CMesa();
$method = $_SERVER["REQUEST_METHOD"];

//Vista de administrador y recpcionista
//seleccionar mesas:
//http://localhost:8080/webServicePHP/WS_php/services/SMesa.php
if ($method == "GET") {
    //todos los datos
    $idr = $_GET["id"];
    $data = $mesa->ListarMesas($idr);

    print json_encode($data, JSON_FORCE_OBJECT);
}


//insertar mesa
http: //localhost:8080/webServicePHP/WS_php/services/SMesa.php?num=5
if ($method = "POST" && isset($_GET["num"])) {
    $numsillas = $_GET["num"];
    $idr = $_GET["id"];
    $data = $mesa->InsertarMesa($numsillas, $idr);
    if ($data)
        print json_encode(true, JSON_FORCE_OBJECT);
    else
        print json_encode(false, JSON_FORCE_OBJECT);
}

//editar 
//http://localhost:8080/webServicePHP/WS_php/services/SMesa.php?num=4&id=3
if ($method == "PUT" && isset($_GET["num"])) {
    $id = $_GET["id"];
    $numsillas = $_GET["numsillas"];
    $id = $_GET["idrest"];
    $data = $mesa->EditarMesa($numsillas, $id, $idr);
    if ($data)
        print json_encode(true, JSON_FORCE_OBJECT);
    else
        print json_encode(false, JSON_FORCE_OBJECT);
}

//eliminar mesas
//http://localhost:8080/webServicePHP/WS_php/services/SMesa.php?accion=delete&id=3
if ($method == "DELETE" && isset($_GET["id"])) {

    $id = $_GET["id"];
    $id = $_GET["idrest"];
    $data = $mesa->EliminarMesa($id, $idr);
    if ($data)
        print json_encode(true, JSON_FORCE_OBJECT);
    else
        print json_encode(false, JSON_FORCE_OBJECT);
}

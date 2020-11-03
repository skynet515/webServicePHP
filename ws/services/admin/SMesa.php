<?php
include('../../controllers/CMesa.php');
include('../../controllers/Calgoritmos.php');

$mesa = new CMesa();
$method = $_SERVER["REQUEST_METHOD"];

//Vista de administrador y recpcionista
//seleccionar mesas:
//http://localhost:8080/webServicePHP/WS_php/services/SMesa.php
if ($method == "GET" && !isset($_GET['id'])) {
    //todos los datos
    $data = $mesa->ListarMesas();

    print json_encode($data, JSON_FORCE_OBJECT);
}
if ($method == "GET" && isset($_GET["id"]) && isset($_GET["fecha"])) {
    //http://localhost:8080/webServicePHP/WS_php/services/SMesa.php?id=2

    $id = $_GET["id"];
    $fecha = $_GET["fecha"];

    $data = $mesa->ListarMesa_h($id, $fecha);
    print json_encode($data, JSON_FORCE_OBJECT);
}



//insertar mesa
http: //localhost:8080/webServicePHP/WS_php/services/SMesa.php?num=5
if ($method = "POST" && isset($_GET["num"])) {
    $numsillas = $_GET["num"];
    $data = $mesa->InsertarMesa($numsillas);
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

    $data = $mesa->EditarMesa($numsillas, $id);
    if ($data)
        print json_encode(true, JSON_FORCE_OBJECT);
    else
        print json_encode(false, JSON_FORCE_OBJECT);
}

//eliminar mesas
//http://localhost:8080/webServicePHP/WS_php/services/SMesa.php?accion=delete&id=3
if ($method == "DELETE" && isset($_GET["id"])) {

    $id = $_GET["id"];
    $data = $mesa->EliminarMesa($id);
    if ($data)
        print json_encode(true, JSON_FORCE_OBJECT);
    else
        print json_encode(false, JSON_FORCE_OBJECT);
}

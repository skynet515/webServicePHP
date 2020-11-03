<?php
include('../../controllers/CCliente.php');
include('../../controllers/Calgoritmos.php');

$cl = new CCliente();
$method = $_SERVER["REQUEST_METHOD"];

//Aceptar al cliente
if (isset($_GET["conf"]) && isset($_GET["id"])) {

    $data = $cl->confCliente($_GET["id"]);
    if ($data)
        print json_encode(true, JSON_FORCE_OBJECT);
    else
        print json_encode(false, JSON_FORCE_OBJECT);
}

if ($method == "GET") {

    //Mostrar cliente confirmados
    if (!isset($_GET["id"])) {
        $data = $cl->ListarCliente();
        print json_encode($data, JSON_FORCE_OBJECT);
    }
    //mostrar solo uno
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $data = $cl->ListarCli_one($id);
        print json_encode($data, JSON_FORCE_OBJECT);
    }

    //Mostrar clientes sin confirmar
    if (isset($_GET["var"]) && $_GET["var"] == "!conf") {
        $data = $cl->ListarClientesconf();
        print json_encode($data, JSON_FORCE_OBJECT);
    }
}

//insertar cliente
//http://localhost:8080/webServicePHP/WS_php/services/SCliente.php?accion=insert&rol=Estudiante&nombre=Kenny&apellido=Garay&tel=7495-0154&correo=3312562020@mail.utec.com&dui=12345678-9&clave=contraseña

if (
    $method == "POST" &&
    !empty($_GET["rol"]) &&
    !empty($_GET["nombre"]) &&
    !empty($_GET["apellido"]) ||
    !empty($_GET["tel"]) ||
    !empty($_GET["dui"]) ||
    !empty($_GET["clave"])
) {
    $alg = new Algoritmos();
    $rol = $alg->palabra(($_GET["rol"]));
    $nombre = $alg->palabra(($_GET["nombre"]));
    $apellido = $alg->palabra(($_GET["apellido"]));
    $tel = $alg->palabra(($_GET["tel"]));
    $correo = $alg->palabra(($_GET["correo"]));
    $dui = $alg->palabra(($_GET["dui"]));
    $clave = $alg->palabra(($_GET["clave"]));

    if (!empty($correo)  && $rol != "Otro") {
        $data =  $cl->InsertarCliente($rol, $nombre, $apellido, $tel, $correo, $dui, $clave);
    } else {
        $data = $cl->InsertarClienteO($rol, $nombre, $apellido, $tel, $correo, $dui, $clave);
    }
    if ($data)
        print json_encode(true, JSON_FORCE_OBJECT);
    else
        print json_encode(false, JSON_FORCE_OBJECT);
}

//modificar cliente
//http://localhost:8080/webServicePHP/WS_php/services/SCliente.php?accion=update&rol=Estudiante&nombre=Kennia&apellido=Garay&tel=7495-0154&correo=3312562020@mail.utec.com&dui=12345678-9&clave=contraseña&id=3

if (
    $method == "PUT" &&
    !isset($_GET["rol"]) &&
    !isset($_GET["nombre"]) &&
    !isset($_GET["apellido"]) &&
    !isset($_GET["tel"]) &&
    !isset($_GET["correo"]) &&
    !isset($_GET["dui"]) &&
    !isset($_GET["clave"]) &&
    !isset($_GET["id"])
) {
    $alg = new Algoritmos();
    $rol = $alg->palabra(($_GET["rol"]));
    $nombre = $alg->palabra(($_GET["nombre"]));
    $apellido = $alg->palabra(($_GET["apellido"]));
    $tel = $alg->palabra(($_GET["tel"]));
    $correo = $alg->palabra(($_GET["correo"]));
    $dui = $alg->palabra(($_GET["dui"]));
    $clave = $alg->palabra(($_GET["clave"]));
    $id = $alg->palabra(($_GET["id"]));

    $data = $cl->EditarCliente($rol, $nombre, $apellido, $tel, $correo, $dui, $clave, $id);
    if ($data)
        print json_encode(true, JSON_FORCE_OBJECT);
    else
        print json_encode(false, JSON_FORCE_OBJECT);
}

//eliminar
if ($method == "DELETE" && is_numeric($_GET["id"])) {
    $id = $_GET["id"];

    $data = $cl->EliminarCliente($id);
    if ($data)
        print json_encode(true, JSON_FORCE_OBJECT);
    else
        print json_encode(false, JSON_FORCE_OBJECT);
}

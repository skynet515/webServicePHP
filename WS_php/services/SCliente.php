<?php
include('../controllers/CCliente.php');
include('../controllers/Calgoritmos.php');


$cl = new CCliente();

//Aceptar al cliente
if ($_GET["accion"] == "conf" && is_numeric($_GET["idcliente"])) {

    if ($cl->confCliente($_GET["idcliente"]))
        print json_encode(true, JSON_FORCE_OBJECT);
}


if ($_GET["accion"] == "select") {

    $var = $_GET["var"];

    //Mostrar cliente confirmados
    if ($var == "all") {
        $data = $cl->ListarCliente();
        print json_encode($data, JSON_FORCE_OBJECT);
    }

    if ($var == "one") {
        $id = $_GET["id"];
        $data = $cl->ListarCli_one($id);
        if (!empty($data)) {
            print json_encode($data, JSON_FORCE_OBJECT);
        }
    }

    //Mostrar clientes sin confirmar
    if ($var == "!conf") {
        $data = $cl->ListarClientesconf();
        print json_encode($data, JSON_FORCE_OBJECT);
    }
}

//insertar cliente
//http://localhost:8080/webServicePHP/WS_php/services/SCliente.php?accion=insert&rol=Estudiante&nombre=Kenny&apellido=Garay&tel=7495-0154&correo=3312562020@mail.utec.com&dui=12345678-9&clave=contraseña

if (
    $_GET["accion"] == "insert" &&
    !empty($_GET["rol"]) &&
    !empty($_GET["nombre"]) &&
    !empty($_GET["apellido"]) &&
    !empty($_GET["tel"]) &&
    !empty($_GET["dui"]) &&
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

    print json_encode($data, JSON_FORCE_OBJECT);
}

//modificar cliente
//http://localhost:8080/webServicePHP/WS_php/services/SCliente.php?accion=update&rol=Estudiante&nombre=Kennia&apellido=Garay&tel=7495-0154&correo=3312562020@mail.utec.com&dui=12345678-9&clave=contraseña&idcliente=3

if (
    $_GET["accion"] == "update" &&
    !empty($_GET["rol"]) &&
    !empty($_GET["nombre"]) &&
    !empty($_GET["apellido"]) &&
    !empty($_GET["tel"]) &&
    !empty($_GET["correo"]) &&
    !empty($_GET["dui"]) &&
    !empty($_GET["clave"]) &&
    !empty($_GET["idcliente"])
) {
    $alg = new Algoritmos();
    $rol = $alg->palabra(($_GET["rol"]));
    $nombre = $alg->palabra(($_GET["nombre"]));
    $apellido = $alg->palabra(($_GET["apellido"]));
    $tel = $alg->palabra(($_GET["tel"]));
    $correo = $alg->palabra(($_GET["correo"]));
    $dui = $alg->palabra(($_GET["dui"]));
    $clave = $alg->palabra(($_GET["clave"]));
    $id = $alg->palabra(($_GET["idcliente"]));

    if ($cl->EditarCliente($rol, $nombre, $apellido, $tel, $correo, $dui, $clave, $id)) {
        print json_encode(true, JSON_FORCE_OBJECT);
    }
}

//eliminar
if ($_GET["accion"] == "delete" && is_numeric($_GET["idcliente"])) {
    $idcliente = $_GET["idcliente"];

    if ($cl->EliminarCliente($idcliente)) {
        print json_encode(true, JSON_FORCE_OBJECT);
    }
}

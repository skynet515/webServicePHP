<?php
include('../../controllers/CReservas-A.php');
include('../../controllers/Calgoritmos.php');

$re = new CReservasA();
$alg = new Algoritmos();
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET" && !isset($_GET["conf"])) {
    $data = $re->ReservasLinea();
    print json_encode($data, JSON_FORCE_OBJECT);
}
if ($method == "GET" && isset($_GET["conf"])) {
    $data = $re->ReservasLineaConfir();
    print json_encode($data, JSON_FORCE_OBJECT);
}

//Realizar Reservas cuando no haya una solicitud del cliente.
if ($method == "POST") {

    //Datos de la reserva:
    $mesa = $_GET["mesa"];
    $silla = $_GET["silla"];
    $hora = $_GET["hora"];

    //arrays
    $a_hora = $alg->hora($hora);
    $a_mesa = $alg->mesas($mesa);



    //Ya está en nuestras bases de datos:
    if (isset($_GET["idcli"])) {
        //id del cliente 
        $idcli = $_GET["idcli"];
        $num_a = $_GET["num_a"];
        $fecha = $_GET["fecha"];
        $datos = array(
            'idcli' => $idcli,
            'mesa' => $mesa,
            'hora' => $hora,
            'sillas' => $silla,
            'num_a' => $num_a,
            'fecha' => $fecha
        );
        $data = $re->reservaClienteExist($datos, $a_mesa, $a_hora);
        print json_encode(true, JSON_FORCE_OBJECT);
    } /*else {
        //No está en nuestras bases de datos
        $alg = new Algoritmos();
        $rol = "Otro";
        $nombre = $alg->palabra(($_GET["nombre"]));
        $apellido = $alg->palabra(($_GET["apellido"]));
        $tel = $_GET["tel"];
        $correo = $_GET["correo"];
        $dui = $alg->palabra(($_GET["dui"]));

        $datos = array(
            'rol' => $rol,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'tel' => $tel,
            'correo' => $correo,
            'dui' => $dui,
            'mesa' => $mesa,
            'hora' => $hora,
            'silla' => $silla
        );
    }*/
}


//Registrar reservas que el cliente ya ha solicitado.
if ($method == "PUT") {
    $mesa = $_GET["mesa"];
    $silla = $_GET["silla"];
    $hora = $_GET["hora"];
    $idreserva = $_GET["id"];

    //arrays
    $a_hora = $alg->hora($hora);
    $a_mesa = $alg->mesas($mesa);

    $data = $re->realizarReserva($idreserva, $mesa, $silla, $hora, $a_hora, $a_mesa);
    if ($data) {
        print json_encode(true, JSON_FORCE_OBJECT);
    }
}

<?php
include('../../controllers/CReserva.php');
include('../../controllers/Calgoritmos.php');
$reserva = new CReservas();
$alg = new Algoritmos();
$method = $_SERVER["REQUEST_METHOD"];

if (
    $method == "POST" &&
    !empty($_GET["numasistentes"]) &&
    !empty($_GET["fechare"]) &&
    !empty($_GET["sillase"]) &&
    !empty($_GET["idtrabajador"]) &&
    !empty($_GET["idrest"])
) {

    $numasis = $_GET["numasistentes"];
    $fechare = $_GET["fechare"];
    $sillase = $_GET["sillase"];
    $idtrabajador = $_GET["idtrabajador"];
    $idrest = $_GET["idrest"];
    $data = $reserva->InsertarReserva($numasis, $fechare, $sillase, $idtrabajador, $idrest);
    if ($data) {
        print json_encode(true, JSON_FORCE_OBJECT);
    } else {
        print json_encode(false, JSON_FORCE_OBJECT);
    }
}


if ($method == "GET") {
    //Enlistar todas las reservas confirmadas para el cliente (Buzon de entrada Reservas...)
    if (!isset($_GET['idreserva'])) {
        $data = $reserva->ListarReservas();
        print json_encode($data, JSON_FORCE_OBJECT);
    }
    //Recuperar los datos de una reserva a traves del id de dicha reserva (No es necesario 
    //el id restaurante ya que solo hay un unico id de reserva)
    else {
    }
}

<?php
include('../../controllers/CReservas-A.php');
include('../../controllers/Calgoritmos.php');

$re = new CReservasA();
$alg= new Algoritmos();
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET" && !isset($_GET["conf"])) {
    $data = $re->ReservasLinea();
    print json_encode($data, JSON_FORCE_OBJECT);
} else {
    $data = $re->ReservasLineaConfir();
    print json_encode($data, JSON_FORCE_OBJECT);
}

if($method=="PUT"){
    $mesa=$_GET["mesa"];
    $silla=$_GET["silla"];
    $hora=$_GET["hora"];
    $id=$_GET["id"];
    
    //arrays

    $a_hora= $alg->hora($hora);
    $a_mesa=$alg->mesas($mesa);

    $data=$re->realizarReserva($id, $mesa, $silla, $hora, $a_hora, $a_mesa);
    if($data){
        print json_encode(true, JSON_FORCE_OBJECT);
    }
}


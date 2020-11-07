<?php
include('../../controllers/CReservas-A.php');

$re = new CReservasA();
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET" && !isset($_GET["conf"])) {
    $data = $re->ReservasLinea();
    print json_encode($data, JSON_FORCE_OBJECT);
} else {
    $data = $re->ReservasLineaConfir();
    print json_encode($data, JSON_FORCE_OBJECT);
}

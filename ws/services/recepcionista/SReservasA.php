<?php
include('../../controllers/CReservas-A.php');

$re = new CReservasA();
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "GET") {

    $data = $re->ReservasLinea();
    print json_encode($data, JSON_FORCE_OBJECT);
}

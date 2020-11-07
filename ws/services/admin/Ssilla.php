<?php
include("../../controllers/Csilla.php");

$silla = new Silla();

$method = $_SERVER["REQUEST_METHOD"];

//Count de sillas
if ($method == "GET") {
    $data = $silla->listarsilla($_GET["id"]);
    print json_encode($data, JSON_FORCE_OBJECT);
}

//inseertar
if ($method == "POST") {
    if (is_numeric($_GET["num"])) {
        $idr = $_GET["idr"];
        $num = $_GET["num"];
        $data = $silla->insertarsilla($num, $idr);
        if ($data)
            print json_encode(true, JSON_FORCE_OBJECT);
        else
            print json_encode(false, JSON_FORCE_OBJECT);
    }
}


if ($method == "DELETE") {
    if (is_numeric($_GET["num"])) {
        $num = $_GET["num"];
        $idr = $_GET["id"];
        $data = $silla->eliminarsilla($num, $idr);
        if ($data)
            print json_encode(true, JSON_FORCE_OBJECT);
        else
            print json_encode(false, JSON_FORCE_OBJECT);
    }
}

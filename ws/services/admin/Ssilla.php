<?php
include("../../controllers/Csilla.php");

$silla = new Silla();

$method = $_SERVER["REQUEST_METHOD"];

//Count de sillas
if ($method == "GET") {
    $data = $silla->listarsilla();
    print json_encode($data, JSON_FORCE_OBJECT);
}

//inseertar
if ($method == "POST") {
    if (is_numeric($_GET["num"])) {
        $num = $_GET["num"];
        $data = $silla->insertarsilla($num);
        if ($data)
            print json_encode(true, JSON_FORCE_OBJECT);
        else
            print json_encode(false, JSON_FORCE_OBJECT);
    }
}


if ($method == "DELETE") {
    if (is_numeric($_GET["num"])) {
        $num = $_GET["num"];
        $data = $silla->eliminarsilla($num);
        if ($data)
            print json_encode(true, JSON_FORCE_OBJECT);
        else
            print json_encode(false, JSON_FORCE_OBJECT);
    }
}

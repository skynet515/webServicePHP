<?php
include("../controllers/Csilla.php");

$silla = new Silla();

$accion = $_GET["accion"];

if ($accion == "select") {

    $data = $silla->listarsilla();

    if (!empty($data)) {
        print json_encode($data, JSON_FORCE_OBJECT);
    }
}

if ($accion == "insert") {

    if (is_numeric($_GET["num"])) {
        $num = $_GET["num"];
        $data = $silla->insertarsilla($num);
        if ($data) {
            print json_encode(true, JSON_FORCE_OBJECT);
        } else {
            print json_encode(false, JSON_FORCE_OBJECT);
        }
    }
}

if ($accion == "delete") {
    if (is_numeric($_GET["num"])) {
        $num = $_GET["num"];
        $data = $silla->eliminarsilla($num);
        if ($data) {
            print json_encode(true, JSON_FORCE_OBJECT);
        } else {
            print json_encode(false, JSON_FORCE_OBJECT);
        }
    }
}

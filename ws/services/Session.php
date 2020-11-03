<?php
include('../controllers/CLogin.php');

$clogin = new CLogin();
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
    $correo = $_GET['correo'];
    $clave = $_GET['clave'];

    if ($clogin->VerificarUsuario($correo, $clave)) {
        $data = $clogin->sesion();
        print json_encode($data, JSON_FORCE_OBJECT);
    } else {
        $data["session"] = null;
        print json_encode($data, JSON_FORCE_OBJECT);
    }
}
if ($method == "PUT") {
    if (isset($_GET["tel"])) {
        $data = $clogin->tel($_GET["tel"]);
        print json_encode($data, JSON_FORCE_OBJECT);
    } else {
        $data = $clogin->passw($_GET["pnew"], $_GET["pold"]);
        print json_encode($data, JSON_FORCE_OBJECT);
    }
}

if ($method == "DELETE") {
    $clogin->close();
}

if ($method == "GET") {
    $data = $clogin->sesion();
    if ($data)
        print json_encode($data, JSON_FORCE_OBJECT);
}

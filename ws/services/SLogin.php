<?php
include('../controllers/CLogin.php');

$clogin= new CLogin();
$accion=$_SERVER["REQUEST_URI"];

if($_GET['accion']=="login"){
    $correo=$_GET['correo'];
    $clave=$_GET['clave'];
    if($clogin->VerificarUsuario($correo, $clave)){
        print json_encode(true, JSON_FORCE_OBJECT);
    }else{
        print json_encode(false, JSON_FORCE_OBJECT);
    }
}

?>
<?php
include('../controllers/CMesa.php');
include('../controllers/Calgoritmos.php');

$mesa= new CMesa();
$accion=$_SERVER["REQUEST_URI"];

//seleccionar mesas:
//http://localhost:8080/webServicePHP/WS_php/services/SMesa.php?accion=select&var=all
if($_GET["accion"]=="select"){
    //todos los datos
    $var=$_GET["var"];
    if($var=="all"){
        $data=$mesa->ListarMesas();
        print json_encode($data, JSON_FORCE_OBJECT);
    }
    //solo un registro
    //http://localhost:8080/webServicePHP/WS_php/services/SMesa.php?accion=select&var=one&id=1
    if($var=="one"){
        $id=$_GET["id"];
        $data=$mesa->ListarMesa_one($id);
        if(!empty($data)){
            print json_encode($data, JSON_FORCE_OBJECT);
        }
    }
}


//insertar mesa
http://localhost:8080/webServicePHP/WS_php/services/SMesa.php?accion=insert&numsillas=5s
if($_GET["accion"]=="insert"&&!empty($_GET["numsillas"])){
    $numsillas=$_GET["numsillas"];
    $data=$mesa->InsertarMesa($numsillas);
    if($data){
        print json_encode(true, JSON_FORCE_OBJECT);
    }
}
//editar 
//http://localhost:8080/webServicePHP/WS_php/services/SMesa.php?accion=update&numsillas=4&idmesa=3
if($_GET["accion"]=="update" &&!empty($_GET["idmesa"])&&!empty($_GET["numsillas"])){
    $idmesa=$_GET["idmesa"];
    $numsillas=$_GET["numsillas"];

    $data=$mesa->EditarMesa($numsillas, $idmesa);
    if($data){
        print json_encode(true, JSON_FORCE_OBJECT);
    }

}

//eliminar mesas
//http://localhost:8080/webServicePHP/WS_php/services/SMesa.php?accion=delete&idmesa=3
if($_GET["accion"]=="delete" &&!empty($_GET["idmesa"])){
    $idmesa=$_GET["idmesa"];
    $data=$mesa->EliminarMesa($idmesa);
    if($data){
        print json_encode(true, JSON_FORCE_OBJECT);
    }
}



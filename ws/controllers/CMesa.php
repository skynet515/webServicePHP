<?php
include_once("../models/MMesa.php");

class CMesa{

    private $mesa;

    public function __construct()
    {
        $this->mesa=new MMesa();
    }

    //Listar mesas

    public function ListarMesas(){
        return $this->mesa->ListarMesas();
    }

    public function ListarMesa_one($id){
        return $this->mesa->ListarMesas_one($id);
    }

    public function InsertarMesa($numsillas){
        return $this->mesa->InsertarMesa($numsillas);
    }

    public function EditarMesa($numsillas, $idmesa){
        return $this->mesa->EditarMesa($numsillas, $idmesa);
    }

    public function EliminarMesa($idmesa){
        return $this->mesa->EliminarMesa($idmesa);
    }
}


?>
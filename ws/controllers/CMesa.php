<?php
include_once("../../models/MMesa.php");

class CMesa
{

    private $mesa;

    public function __construct()
    {
        $this->mesa = new MMesa();
    }

    //Listar mesas

    public function ListarMesas()
    {
        return $this->mesa->ListarMesas();
    }

    public function ListarMesa_h($id, $fecha)
    {
        session_start();
        $idr = $_SESSION["idrest"];
        return $this->mesa->ListarMesas_h($id, $fecha, $idr);
    }

    public function InsertarMesa($numsillas)
    {
        return $this->mesa->InsertarMesa($numsillas);
    }

    public function EditarMesa($numsillas, $idmesa)
    {
        return $this->mesa->EditarMesa($numsillas, $idmesa);
    }

    public function EliminarMesa($idmesa)
    {
        return $this->mesa->EliminarMesa($idmesa);
    }
}

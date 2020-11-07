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

    public function ListarMesas($idr)
    {
        return $this->mesa->ListarMesas($idr);
    }

    public function ListarMesa_h($id, $fecha)
    {
        session_start();
        $idr = $_SESSION["idrest"];
        return $this->mesa->ListarMesas_h($id, $fecha, $idr);
    }

    public function InsertarMesa($numsillas, $idr)
    {
        return $this->mesa->InsertarMesa($numsillas, $idr);
    }

    public function EditarMesa($numsillas, $idmesa, $idr)
    {
        return $this->mesa->EditarMesa($numsillas, $idmesa, $idr);
    }

    public function EliminarMesa($idmesa, $idr)
    {
        return $this->mesa->EliminarMesa($idmesa, $idr);
    }
}

<?php
include('../../models/MReservas.php');
class CReservas{
    private $reserva;
    private $idpersona;

    public function __construct()
    {
        $this->reserva= new MReservas();
    }

    public function InsertarReserva($numasis, $fechare, $sillase, $idtrabajador, $idrest){

        session_start();
        $idpersona=$_SESSION["id"];
        return $this->reserva->InsertarReserva($idpersona, $numasis, $fechare, $sillase, $idtrabajador, $idrest);

    }

    public function ListarReservas(){
        session_start();
        $idpersona=$_SESSION["id"];
        return $this->reserva->ReservasConfirmadas($idpersona);
    }
}


?>
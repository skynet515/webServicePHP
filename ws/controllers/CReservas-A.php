<?php
include('../../models/MReservas-A.php');
class CReservasA
{
    private $re;
    public function __construct()
    {
        $this->re = new MReservasA();
    }

    public function ReservasLinea()
    {
        session_start();
        return $this->re->ReservasLinea($_SESSION["idrest"]);
    }

    public function ReservasLineaConfir()
    {
        session_start();
        return $this->re->ReservasLineaConfir($_SESSION["idrest"]);
    }
}

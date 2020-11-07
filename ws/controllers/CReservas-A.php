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

    public function realizarReserva($idresv, $mesa, $sillae, $hora, $a_hora, $a_mesa){
        if (session_status() == 1)
            session_start();
            
        $idrest=$_SESSION["idrest"];
        $idt=$_SESSION["idt"];
        return $this->re->realizarReserva($idresv, $mesa, $sillae, $hora, $a_hora, $a_mesa, $idt);


    }
}

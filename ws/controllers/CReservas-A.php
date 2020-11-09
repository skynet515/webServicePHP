<?php
include('../../models/MReservas-A.php');
class CReservasA
{
    private $re;
    public function __construct()
    {
        $this->re = new MReservasA();
    }

    //Reserva Cliente en bd
    public function reservaClienteExist($data, $a_mesa, $a_hora)
    {
        if (session_status() == 1)
            session_start();
        $idt = $_SESSION['idt'];
        $idrest = $_SESSION['idrest'];
        return $this->re->reservaClienteExist($data, $idt, $idrest, $a_mesa, $a_hora);
    }

    //Reserva Cliente no esta en bd
    public function ReservasLinea()
    {
        if (session_status() == 1)
            session_start();
        return $this->re->ReservasLinea($_SESSION["idrest"]);
    }

    public function ReservasLineaConfir()
    {
        if (session_status() == 1)
            session_start();
        return $this->re->ReservasLineaConfir($_SESSION["idrest"]);
    }

    public function realizarReserva($idresv, $mesa, $sillae, $hora, $a_hora, $a_mesa)
    {
        if (session_status() == 1)
            session_start();

        $idrest = $_SESSION["idrest"];
        $idt = $_SESSION["idt"];
        return $this->re->realizarReserva($idresv, $mesa, $sillae, $hora, $a_hora, $a_mesa, $idt);
    }
}

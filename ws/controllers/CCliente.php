<?php
include('../models/MCliente.php');

class CCliente
{
    private $cliente;

    public function __construct()
    {
        $this->cliente = new MCliente();
    }

    //confirmar cliente
    public function confCliente($id)
    {
        return $this->cliente->confCliente($id);
    }

    //clientes sin confirmar
    public function ListarClientesconf()
    {
        return $this->cliente->ListarClientesconf();
    }

    public function ListarCliente()
    {
        return $this->cliente->ListarCliente();
    }

    public function ListarCli_one($id)
    {
        return $this->cliente->ListarCli_one($id);
    }

    public function InsertarCliente($rol, $nombres, $apellidos, $tel, $correo, $dui, $clave)
    {
        return $this->cliente->InsertarCliente($rol, $nombres, $apellidos, $tel, $correo, $dui, $clave);
    }

    public function InsertarClienteO($rol, $nombres, $apellidos, $tel, $correo, $dui, $clave)
    {
        return $this->cliente->InsertarClienteO($rol, $nombres, $apellidos, $tel, $correo, $dui, $clave);
    }

    public function EditarCliente($rol, $nombre, $apellido, $tel, $correo, $dui, $clave, $idcliente)
    {
        return $this->cliente->ModificarCliente($rol, $nombre, $apellido, $tel, $correo, $dui, $clave, $idcliente);
    }

    public function EliminarCliente($idcliente)
    {
        $data = $this->cliente->EliminarCl($idcliente);
        return $data;
    }
}

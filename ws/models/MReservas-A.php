<?php
include_once('../../conexion/conexion.php');
include_once('MCliente.php');

class MReservasA
{
    private $cnn, $newCli;

    public function __construct()
    {
        $this->cnn = Conexion::getInstance();
        $this->newCli = new MCliente();
    }

    public function ReservasLinea($id)
    {
        $sql = "CALL sp_reservas_a(?);";
        try {

            $PrepareStatement = $this->cnn->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $id, PDO::PARAM_INT);
            $PrepareStatement->execute();
            return $PrepareStatement->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e;
            return false;
        }
    }
    public function ReservasLineaConfir($id)
    {
        $sql = "CALL sp_r_confirmadas(?);";
        try {

            $PrepareStatement = $this->cnn->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $id, PDO::PARAM_INT);
            $PrepareStatement->execute();
            return $PrepareStatement->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e;
            return false;
        }
    }

    //Realizar Reserva cuando el cliente no existe
    public function reservaClienteNoExist($data, $idt, $idrest, $a_mesa, $a_hora)
    {
        //Insertar clienteaaaaaaaaa
        $client = $this->newCli->InsertarClienteO($data['rol'], $data['nombre'], $data['apellido'], $data['tel'], $data['correo'], $data['dui'], $data['clave']);

        //Recuperar Cliente
        if ($client) {
            $sql = "SELECT idcliente FROM tblclientes a 
            INNER JOIN tblpersonas b ON a.idpersona=b.idpersona
            WHERE b.nombre=? AND b.apellido=? AND b.tel=? AND b.correo=?";
            try {
                $PrepareStatement = $this->cnn->getPrepareStatement($sql);
                $PrepareStatement->bindValue(1, $data['nombre'], PDO::PARAM_STR);
                $PrepareStatement->bindValue(2, $data['apellido'], PDO::PARAM_STR);
                $PrepareStatement->bindValue(3, $data['tel'], PDO::PARAM_STR);
                $PrepareStatement->bindValue(4, $data['correo'], PDO::PARAM_STR);
                $PrepareStatement->execute();
                $idc = $PrepareStatement->fetch();
                $data['idcli'] = $idc;

                //Seguir el proceso como si el cliente ya existiera, con el metodo que ya se habia creado (reservaClienteExist)
                return $this->reservaClienteExist($data, $idt, $idrest, $a_mesa, $a_hora);
            } catch (PDOException $e) {
                echo "Error: " . $e;
                return false;
            }
        }
    }

    //Realizar Reserva cuando el cliente ya en nuestras bases de datos
    public function reservaClienteExist($data, $idt, $idrest, $a_mesa, $a_hora)
    {
        //Realizar reserva:
        $sql = "INSERT INTO tblreserva(estadoC, numasistentes, fechareserva, sillasextra, 
        idcliente, idtrabajador, idrestaurante, estado, mesas, horas)
        VALUES (?,?,?,?,?,?,?,?,?,?);";
        try {
            $PrepareStatement = $this->cnn->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, 0, PDO::PARAM_INT);
            $PrepareStatement->bindValue(2, $data['num_a'], PDO::PARAM_INT);
            $PrepareStatement->bindValue(3, $data['fecha'], PDO::PARAM_STR);
            $PrepareStatement->bindValue(4, $data['sillas'], PDO::PARAM_INT);
            $PrepareStatement->bindValue(5, $data['idcli'], PDO::PARAM_INT);
            $PrepareStatement->bindValue(6, $idt, PDO::PARAM_INT);
            $PrepareStatement->bindValue(7, $idrest, PDO::PARAM_INT);
            $PrepareStatement->bindValue(8, 1, PDO::PARAM_INT);
            $PrepareStatement->bindValue(9, $data['mesa'], PDO::PARAM_STR);
            $PrepareStatement->bindValue(10, $data['hora'], PDO::PARAM_STR);
            $exec = $PrepareStatement->execute();
            if ($exec) {
                $sql = "SELECT MAX(idreserva) AS idreserva FROM tblreserva
                WHERE idrestaurante=? AND idcliente=? AND fechareserva = ?";
                $PrepareStatement = $this->cnn->getPrepareStatement($sql);
                $PrepareStatement->bindValue(1, $idrest, PDO::PARAM_INT);
                $PrepareStatement->bindValue(2, $data['idcli'], PDO::PARAM_INT);
                $PrepareStatement->bindValue(3, $data['fecha'], PDO::PARAM_INT);
                $PrepareStatement->execute();
                $idreserva = $PrepareStatement->fetch();


                $sql = "select idhora from tblhoras WHERE hora=?;";

                foreach ($a_hora as $nh => $horas) {

                    $h = $a_hora[$nh];
                    $PrepareStatement = $this->cnn->getPrepareStatement($sql);
                    $PrepareStatement->bindValue(1, $h, PDO::PARAM_STR);
                    $PrepareStatement->execute();
                    $idh = $PrepareStatement->fetch();

                    foreach ($a_mesa as $nm => $mesas) {
                        $m = $a_mesa[$nm];
                        $request = $this->resevaG($idreserva['idreserva'], $idh, $m);
                    }
                }
                return $request;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e;
            return false;
        }
    }

    //_-------------------------------------------------------
    //Realizar Reserva cuando el cliente ya la haya solicitado
    public function realizarReserva($idre, $mesa, $sillae, $hora, $a_hora, $a_mesa, $idt)
    {
        $sql = "UPDATE tblreserva 
        SET horas=?, mesas=?, estadoC=0, sillasextra=?, idtrabajador=?
        WHERE idreserva=?;";
        try {

            $PrepareStatement = $this->cnn->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $hora, PDO::PARAM_STR);
            $PrepareStatement->bindValue(2, $mesa, PDO::PARAM_STR);
            $PrepareStatement->bindValue(3, $sillae, PDO::PARAM_INT);
            $PrepareStatement->bindValue(4, $idt, PDO::PARAM_INT);
            $PrepareStatement->bindValue(5, $idre, PDO::PARAM_INT);

            $re = $PrepareStatement->execute();
            if ($re) {
                $sql = "select idhora from tblhoras WHERE hora=?;";

                foreach ($a_hora as $nh => $horas) {

                    $h = $a_hora[$nh];
                    $PrepareStatement = $this->cnn->getPrepareStatement($sql);
                    $PrepareStatement->bindValue(1, $h, PDO::PARAM_STR);
                    $PrepareStatement->execute();
                    $idh = $PrepareStatement->fetch();

                    foreach ($a_mesa as $nm => $mesas) {
                        $m = $a_mesa[$nm];
                        $data = $this->resevaG($idre, $idh, $m);
                    }
                }
                return $data;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e;
            return false;
        }
    }

    function resevaG($idres, $idh, $m)
    {
        $sql1 = "INSERT INTO tblasignarmesas(idreserva, idhora, idmesa)
        VALUES(?,?,?)";

        try {
            $PrepareStatement = $this->cnn->getPrepareStatement($sql1);
            $PrepareStatement->bindValue(1, $idres, PDO::PARAM_INT);
            $PrepareStatement->bindValue(2, $idh["idhora"], PDO::PARAM_INT);
            $PrepareStatement->bindValue(3, $m, PDO::PARAM_INT);
            return $PrepareStatement->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e;
            return false;
        }
    }
}

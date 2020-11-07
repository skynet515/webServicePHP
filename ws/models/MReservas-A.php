<?php
include_once('../../conexion/conexion.php');

class MReservasA
{
    private $cnn;

    public function __construct()
    {
        $this->cnn = Conexion::getInstance();
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


                $sql1 = "INSERT INTO tblasignarmesas(idreserva, idhora, idmesa)
                VALUES(?,?,?)";

                foreach ($a_hora as $nh => $horas) {

                    $h = $a_hora[$nh];
                    $PrepareStatement = $this->cnn->getPrepareStatement($sql);
                    $PrepareStatement->bindValue(1, $h, PDO::PARAM_STR);
                    $PrepareStatement->execute();
                    $idh = $PrepareStatement->fetch();

                    foreach ($a_mesa as $nm => $mesas) {
                        $m = $a_mesa[$nm];
                        $PrepareStatement = $this->cnn->getPrepareStatement($sql1);
                        $PrepareStatement->bindValue(1, $idre, PDO::PARAM_INT);
                        $PrepareStatement->bindValue(2, $idh["idhora"], PDO::PARAM_INT);
                        $PrepareStatement->bindValue(3, $m, PDO::PARAM_INT);
                        $data=$PrepareStatement->execute();
                    }
                }
             return $data;   
            }
        } catch (PDOException $e) {
            echo "Error: " . $e;
            return false;
        }
    }
}

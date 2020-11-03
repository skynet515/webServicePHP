<?php
include_once('../../conexion/conexion.php');

class MMesa
{

    private $conexion;

    public function __construct()
    {
        $this->conexion = Conexion::getInstance();
    }

    public function ListarMesas()
    {
        $sql = "SELECT * FROM tblmesas where estado=1";
        try {

            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->execute();
            return $PrepareStatement->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e;
        }
    }

    public function ListarMesas_h($id, $fecha, $idr)
    {
        try {

            //REcuperar el id de las horas ocupadas para esa mesa
            $sql = "SELECT a.idhora FROM 
            tblhoras a 
            INNER JOIN tblasignarmesas b ON b.idhora=a.idhora
            INNER JOIN tblreserva c ON b.idreserva = c.idreserva
            INNER JOIN tblrestaurantes d ON d.idrestaurante=c.idrestaurante
            WHERE b.idmesa =? AND b.estado = 0 AND d.idrestaurante=? AND c.fechareserva=?;";

            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $id, PDO::PARAM_INT);
            $PrepareStatement->bindValue(2, $idr, PDO::PARAM_INT);
            $PrepareStatement->bindValue(3, $fecha, PDO::PARAM_STR);
            $PrepareStatement->execute();
            $h_ocupado = $PrepareStatement->fetchAll();

            //mostrar las horas disponibles de la mesa
            if ($h_ocupado) {
                $sql = "SELECT * FROM tblhoras WHERE idhora";
                foreach ($h_ocupado as $n => $valor) {
                    if ($n == 0) {
                        $sql = $sql . " <> " . $valor['idhora'];
                    } else {
                        $sql = $sql . " AND idhora <> " . $valor['idhora'];
                    }
                }
                $PrepareStatement = $this->conexion->getPrepareStatement($sql);
                $PrepareStatement->execute();
                return $PrepareStatement->fetchAll();
            } else {
                $sql = "SELECT * FROM tblhoras";
                $PrepareStatement = $this->conexion->getPrepareStatement($sql);
                $PrepareStatement->execute();
                return $PrepareStatement->fetchAll();
            }
        } catch (PDOException $e) {
            echo "ERROR: " . $e;
        }
    }

    public function InsertarMesa($numsillas)
    {
        $sql = "INSERT INTO tblmesas(numsillas) VALUES(?)";
        try {
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $numsillas, PDO::PARAM_INT);
            return $PrepareStatement->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e;
            return false;
        }
    }

    public function EditarMesa($numsillas, $idmesa)
    {
        $sql = "UPDATE tblmesas SET numsillas=? WHERE idmesa=?";
        try {
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $idmesa, PDO::PARAM_INT);
            $PrepareStatement->bindValue(2, $numsillas, PDO::PARAM_INT);
            return $PrepareStatement->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e;
            return false;
        }
    }

    public function EliminarMesa($idmesa)
    {
        $sql = "UPDATE tblmesas SET estado=0 WHERE idmesa=?";
        try {
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $idmesa, PDO::PARAM_INT);
            return $PrepareStatement->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e;
        }
    }
}

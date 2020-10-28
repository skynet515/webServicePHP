<?php
include_once('../conexion/conexion.php');

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

    public function ListarMesas_one($id)
    {

        $sql = "SELECT * FROM tblmesas WHERE idmesa=?";
        try {
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $id, PDO::PARAM_INT);
            $PrepareStatement->execute();
            return $PrepareStatement->fetch();
        } catch (PDOException $e) {
            echo "ERROR: " . $e;
        }
    }

    public function InsertarMesa($numsillas){
        $sql="INSERT INTO tblmesas(numsillas) VALUES(?)";
        try{
            $PrepareStatement=$this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $numsillas, PDO::PARAM_INT);
            return $PrepareStatement->execute();

        }catch(PDOException $e){
            echo "Error: ".$e;
            return false;
        }
    }

    public function EditarMesa($numsillas, $idmesa){
        $sql="UPDATE tblmesas SET numsillas=? WHERE idmesa=?";
        try{
            $PrepareStatement=$this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $idmesa, PDO::PARAM_INT);
            $PrepareStatement->bindValue(2, $numsillas, PDO::PARAM_INT);
            return $PrepareStatement->execute();
        }catch(PDOException $e){
            echo "Error: ".$e;
            return false;
        }

    }

    public function EliminarMesa($idmesa){
        $sql="UPDATE tblmesas SET estado=0 WHERE idmesa=?";
        try{
            $PrepareStatement=$this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $idmesa, PDO::PARAM_INT);
            return $PrepareStatement->execute();

        }catch(PDOException $e){
            echo "Error: ".$e;
        }
    }
}

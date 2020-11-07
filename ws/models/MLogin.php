<?php
include_once('../conexion/conexion.php');

class MLogin
{

    private $cnn;

    public function __construct()
    {
        $this->cnn = Conexion::getInstance();
    }

    //modificar el tel:
    public function mtel($id, $tel)
    {

        $sql = "UPDATE tblpersonas 
        SET tel =? WHERE idpersona = ?;";
        try {
            $PrepareStatement = $this->cnn->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $tel, PDO::PARAM_STR);
            $PrepareStatement->bindValue(2, $id, PDO::PARAM_INT);
            return $PrepareStatement->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e;
        }
    }

    //modificar el password:
    public function mpassw($id, $pnew, $pold)
    {
        try {
            $sql = "SELECT clave FROM tblpersonas 
            WHERE idpersona = ?;";
            $PrepareStatement = $this->cnn->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $id, PDO::PARAM_STR);
            $PrepareStatement->execute();
            $clave = $PrepareStatement->fetch();

            if ($clave["clave"] == $pold) {
                $sql = "UPDATE tblpersonas 
                SET clave = ? WHERE idpersona = ?;";
                $PrepareStatement = $this->cnn->getPrepareStatement($sql);
                $PrepareStatement->bindValue(1, $pnew, PDO::PARAM_STR);
                $PrepareStatement->bindValue(2, $id, PDO::PARAM_INT);
                return $PrepareStatement->execute();
            } else
                return false;
        } catch (PDOException $e) {
            echo "Error: " . $e;
        }
    }

    public function datossesionT($id)
    {
        $sql = "Call sp_s_trabajador_one(?)";
        try {
            $PrepareStatement = $this->cnn->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $id, PDO::PARAM_INT);
            $PrepareStatement->execute();
            return $PrepareStatement->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e;
        }
    }

    public function datossesionC($id)
    {
        $sql = "Call sp_s_cliente_one(?)";
        try {
            $PrepareStatement = $this->cnn->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $id, PDO::PARAM_INT);
            $PrepareStatement->execute();
            return $PrepareStatement->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e;
        }
    }

    public function VerificarUsuario($correo, $clave)
    {
        $sql = "Call sp_verify(?,?)";
        try {
            $PrepareStatement = $this->cnn->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $correo, PDO::PARAM_STR);
            $PrepareStatement->bindValue(2, $clave, PDO::PARAM_STR);
            $PrepareStatement->execute();
            return $PrepareStatement->fetch();
        } catch (PDOException $e) {
            echo "Error: " . $e;
        }
    }

    public function restarante($id)
    {
        $sql = "SELECT idrestaurante FROM 
        tbltrabajadores WHERE idtrabajador = ?";
        try {
            $PrepareStatement = $this->cnn->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $id, PDO::PARAM_INT);
            $PrepareStatement->execute();
            return $PrepareStatement->fetch();
        } catch (PDOException $e) {
            echo "Error: " . $e;
        }
    }
}

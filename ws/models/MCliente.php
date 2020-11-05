<?php
include_once('../../conexion/conexion.php');

class MCliente
{

    private $conexion;
    public function __construct()
    {
        $this->conexion = Conexion::getInstance();
    }

    //confirmar cliente
    public function  confCliente($id)
    {
        $sql = "CALL sp_u_cliente_conf(?)";
        try {
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $id, PDO::PARAM_INT);
            return $PrepareStatement->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e;
            return false;
        }
    }

    public function ListarClientesconf()
    {

        $sql = "CALL sp_s_cliente_sc"; //get from person table
        try {
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->execute();
            return $PrepareStatement->fetchAll();
        } catch (PDOException $e) {
            echo 'Error: ' . $e;
            return false;
        }
    }

    public function ListarCliente()
    {

        $sql = "CALL sp_s_cliente_all"; //get from person table
        try {
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->execute();
            return $PrepareStatement->fetchAll();
        } catch (PDOException $e) {
            echo 'Error: ' . $e;
            return false;
        }
    }

    public function ListarCli_one($id)
    {
        $sql = "CALL sp_s_cliente_one(?)";
        try {
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $id, PDO::PARAM_INT);
            $PrepareStatement->execute();
            return $PrepareStatement->fetch();
        } catch (PDOException $e) {
            echo 'Error: ' . $e;
        }
    }

    public function InsertarClienteO($rol, $nombres, $apellidos, $tel, $correo, $dui, $clave)
    {

        try {
            $sql = "CALL sp_s_rol(?)";
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $rol, PDO::PARAM_STR);
            $PrepareStatement->execute();
            $idr = $PrepareStatement->fetch();

            $sql = "SELECT correo FROM tblpersonas WHERE correo=(?)";
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $correo, PDO::PARAM_STR);
            $PrepareStatement->execute();
            $val = $PrepareStatement->fetch();

            if ($val["correo"] != "") {
                return "exist";
            } else {

                if (!empty($idr)) {
                    $sql = "CALL sp_c_personas(?,?,?,?,?,?,?)";
                    $PrepareStatement = $this->conexion->getPrepareStatement($sql);
                    $PrepareStatement->bindValue(1, $nombres, PDO::PARAM_STR);
                    $PrepareStatement->bindValue(2, $apellidos, PDO::PARAM_STR);
                    $PrepareStatement->bindValue(3, $tel, PDO::PARAM_STR);
                    $PrepareStatement->bindValue(4, $correo, PDO::PARAM_STR);
                    $PrepareStatement->bindValue(5, $dui, PDO::PARAM_STR);
                    $PrepareStatement->bindValue(6, $clave, PDO::PARAM_STR);
                    $PrepareStatement->bindValue(7, $idr['idrol'], PDO::PARAM_INT);
                    $req = $PrepareStatement->execute();
                    if ($req) {
                        $sql = "CALL sp_s_persona_max(?)";
                        $PrepareStatement = $this->conexion->getPrepareStatement($sql);
                        $PrepareStatement->bindValue(1, $tel, PDO::PARAM_STR);
                        $PrepareStatement->execute();
                        $idpers = $PrepareStatement->fetch();

                        if (!empty($idpers)) {
                            $sql = "CALL sp_c_cliente(?)";
                            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
                            $PrepareStatement->bindValue(1, $idpers["idpersona"], PDO::PARAM_INT);
                            return $PrepareStatement->execute();
                        }
                    }
                }
            }
        } catch (PDOException $e) {
            return false;
        }
    }

    public function InsertarCliente($rol, $nombres, $apellidos, $tel, $correo, $dui, $clave)
    {
        try {
            $sql = "CALL sp_s_rol(?)";
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $rol, PDO::PARAM_STR);
            $PrepareStatement->execute();
            $idr = $PrepareStatement->fetch();

            $sql = "SELECT correo FROM tblpersonas WHERE correo=(?)";
            $PrepareStatement = $this->cnn->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $correo, PDO::PARAM_STR);
            $PrepareStatement->execute();
            $val = $PrepareStatement->fetch();

            if ($val) {
                return "exist";
            } else {

                if (!empty($idr)) {
                    $sql = "CALL sp_c_personas(?,?,?,?,?,?,?)";
                    $PrepareStatement = $this->conexion->getPrepareStatement($sql);
                    $PrepareStatement->bindValue(1, $nombres, PDO::PARAM_STR);
                    $PrepareStatement->bindValue(2, $apellidos, PDO::PARAM_STR);
                    $PrepareStatement->bindValue(3, $tel, PDO::PARAM_STR);
                    $PrepareStatement->bindValue(4, $correo, PDO::PARAM_STR);
                    $PrepareStatement->bindValue(5, $dui, PDO::PARAM_STR);
                    $PrepareStatement->bindValue(6, $clave, PDO::PARAM_STR);
                    $PrepareStatement->bindValue(7, $idr['idrol'], PDO::PARAM_INT);
                    $req = $PrepareStatement->execute();
                    if ($req) {
                        $sql = "CALL sp_s_persona_max(?)";
                        $PrepareStatement = $this->conexion->getPrepareStatement($sql);
                        $PrepareStatement->bindValue(1, $tel, PDO::PARAM_STR);
                        $PrepareStatement->execute();
                        $idpers = $PrepareStatement->fetch();

                        if (!empty($idpers)) {
                            $sql = "CALL sp_c_cliente(?)";
                            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
                            $PrepareStatement->bindValue(1, $idpers["idpersona"], PDO::PARAM_INT);
                            return $PrepareStatement->execute();
                        }
                    }
                }
            }
        } catch (PDOException $e) {
        }
    }

    public function ModificarCliente($rol, $nombre, $apellido, $tel, $correo, $dui, $clave, $idcliente)
    {
        try {
            $sql = "CALL sp_s_rol(?)";
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $rol, PDO::PARAM_STR);
            $PrepareStatement->execute();
            $idr = $PrepareStatement->fetch();
            if (!empty($idr)) {
                $sql = "SELECT idpersona FROM tblclientes WHERE idcliente=?";
                $PrepareStatement = $this->conexion->getPrepareStatement($sql);
                $PrepareStatement->bindValue(1, $idcliente, PDO::PARAM_INT);
                $PrepareStatement->execute();
                $idpers = $PrepareStatement->fetch();

                $sql = "CALL sp_u_persona(?,?,?,?,?,?,?,?)";

                $PrepareStatement = $this->conexion->getPrepareStatement($sql);
                $PrepareStatement->bindValue(1, $nombre, PDO::PARAM_STR);
                $PrepareStatement->bindValue(2, $apellido, PDO::PARAM_STR);
                $PrepareStatement->bindValue(3, $tel, PDO::PARAM_STR);
                $PrepareStatement->bindValue(4, $correo, PDO::PARAM_STR);
                $PrepareStatement->bindValue(5, $dui, PDO::PARAM_STR);
                $PrepareStatement->bindValue(6, $clave, PDO::PARAM_STR);
                $PrepareStatement->bindValue(7, $idr['idrol'], PDO::PARAM_INT);
                $PrepareStatement->bindValue(8, $idpers['idpersona'], PDO::PARAM_INT);

                return $PrepareStatement->execute();
            }
        } catch (PDOException $e) {
            echo "Error: " . $e;
            return false;
        }
    }

    public function EliminarCl($idcliente)
    {

        try {
            $sql = "CALL sp_d_cliente(?)";
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $idcliente, PDO::PARAM_STR);
            $data = $PrepareStatement->execute();

            if ($data) {
                $sql = "SELECT idpersona FROM tblclientes WHERE idcliente=?";
                $PrepareStatement = $this->conexion->getPrepareStatement($sql);
                $PrepareStatement->bindValue(1, $idcliente, PDO::PARAM_INT);
                $PrepareStatement->execute();
                $idpers = $PrepareStatement->fetch();

                $sql = "CALL sp_d_persona(?)";
                $PrepareStatement = $this->conexion->getPrepareStatement($sql);
                $PrepareStatement->bindValue(1, $idpers['idpersona'], PDO::PARAM_STR);
                return $PrepareStatement->execute();
            }
        } catch (PDOException $e) {
            echo "Error: " . $e;
            return false;
        }
    }

    
}

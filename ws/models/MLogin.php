<?php
include_once('../conexion/conexion.php');

class MLogin{

    private $cnn;

    public function __construct()
    {
        $this->cnn=Conexion::getInstance();
    }

    public function VerificarUsuario($correo, $clave){
        $sql="Call sp_verify(?,?)";
        try{
            $PrepareStatement=$this->cnn->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $correo, PDO::PARAM_STR);
            $PrepareStatement->bindValue(2,$clave, PDO::PARAM_STR);
            $PrepareStatement->execute();
            return $PrepareStatement->fetch();
        }catch(PDOException $e){
            echo "Error: ".$e;
        }
    }
}


?>
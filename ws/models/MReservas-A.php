<?php
include_once('../../conexion/conexion.php');

class MReservasA
{
    private $cnn;

    public function __construct()
    {
        $this->cnn = Conexion::getInstance();
    }

   public function ReservasLinea($id){
    $sql="CALL sp_reservas_a(?);";
    try{

        $PrepareStatement=$this->cnn->getPrepareStatement($sql);
        $PrepareStatement->bindValue(1, $id, PDO::PARAM_INT);
        $PrepareStatement->execute();
        return $PrepareStatement->fetchAll();

    }catch(PDOException $e){
        echo "Error: ".$e;
        return false;
    }
   }

 
}

?>
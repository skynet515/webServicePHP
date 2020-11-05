 <?php
    include('../../conexion/conexion.php');
    class MReservas
    {
        private $cnn;

        public function __construct()
        {
            $this->cnn = Conexion::getInstance();
        }
        // solicitar reservas del lado del cliente

        public function InsertarReserva($idpersona, $numasis, $fechare, $sillase, $idtrabajador, $idrest)
        {
            try {
                $sql = "CALL sp_s_cliente_one(?)";
                $PrepareStatement = $this->cnn->getPrepareStatement($sql);
                $PrepareStatement->bindValue(1, $idpersona, PDO::PARAM_INT);
                $PrepareStatement->execute();
                $idcliente = $PrepareStatement->fetch();
                if (!empty($idcliente)) {
                    $sql = "CALL sp_c_reserva(?, ?, ?, ?, ?, ?)";
                    //$idtrabajador = 8;
                    $PrepareStatement = $this->cnn->getPrepareStatement($sql);
                    $PrepareStatement->bindValue(1, $numasis, PDO::PARAM_INT);
                    $PrepareStatement->bindValue(2, $fechare, PDO::PARAM_STR);
                    $PrepareStatement->bindValue(3, $sillase, PDO::PARAM_INT);
                    $PrepareStatement->bindValue(4, $idcliente, PDO::PARAM_INT);
                    $PrepareStatement->bindValue(5, $idtrabajador, PDO::PARAM_INT);
                    $PrepareStatement->bindValue(6, $idrest, PDO::PARAM_INT);
                    return $PrepareStatement->execute();
                }else{
                    return false;
                }
            } catch (PDOException $e) {
                echo "Error: " . $e;
                return false;
            }
        }
    }


    ?>
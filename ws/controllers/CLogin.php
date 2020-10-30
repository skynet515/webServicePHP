<?php
include('../models/MLogin.php');
class CLogin{

    
    private $login;

    public function __construct()
    {
        $this->login= new MLogin();
    }

    public function VerificarUsuario($correo, $clave){

        if(!empty($correo)&&!empty($clave)){
            
            $request=$this->login->VerificarUsuario($correo, $clave);

            if($request){
                session_start();
                $_SESSION['idrol']=$request['idrol'];
                $_SESSION['nombre']=$request['nombres'];
                if($_SESSION['idrol']==2 || $_SESSION['idrol']==3){
                    print 'cliente';
                }else{
                    print 'Admin';
                }
                return $request;
            }else{
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error, el usuario o la contraseña son incorrectos.</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
            }
        }

    }
}

?>
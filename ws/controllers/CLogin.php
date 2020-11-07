<?php
include('../models/MLogin.php');
class CLogin
{
    private $login;

    public function __construct()
    {
        $this->login = new MLogin();
    }

    //modificar el tel:
    public function tel($tel)
    {
        session_start();
        return $this->login->mtel($_SESSION["id"], $tel);
    }

    //modificar el passw:
    public function passw($pnew, $pold)
    {
        session_start();
        return $this->login->mpassw($_SESSION["id"], $pnew, $pold);
    }

    //Cerrar sesion;
    public function close()
    {
        if (session_status() == 1)
            session_start();

        session_destroy();
    }

    public function sesion()
    {
        if (session_status() == 1)
            session_start();

        if (isset($_SESSION['id'])) {
            if ($_SESSION['rol'] != "cliente") {
                return $this->login->datossesionT($_SESSION['id']);
            } else {
                return $this->login->datossesionC($_SESSION['id']);
            }
        } else {
            $data["session"] = null;
            return $data;
        }
    }

    public function VerificarUsuario($correo, $clave)
    {

        if (!empty($correo) && !empty($clave)) {

            $request = $this->login->VerificarUsuario($correo, $clave);
            //si el usuario es correcto iniciará session
            //sino retornará null
            if ($request) {
                session_start();
                $_SESSION['idrol'] = $request['idrol'];
                $_SESSION['id'] = $request['idpersona'];


                //identificar que tipo de usuario es:
                //Si es 4 5 6 corresponde a cliente directamente
                if ($_SESSION['idrol'] > 3) {
                    $_SESSION['rol'] = 'cliente';
                } else {
                    $data=$this->login->datossesionT($_SESSION["id"]);
                    $_SESSION['idt']=$data["idtrabajador"];

                    $req = $this->login->restarante($_SESSION['idt']);
                    $_SESSION['rol'] = $request["rol"];
                    $_SESSION['idrest'] = $req["idrestaurante"];
                   
                }
                return $request;
            }
        }
    }
}

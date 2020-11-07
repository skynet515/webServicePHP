<?php
include("../models/Mreestablecer.php");
include("mailSend.php");
class Creestablecer
{
	private $res, $mail;


	public function __construct()
	{
		$this->res = new Reestablecer();
		$this->mail = new mailR();
	}
	//Modificar al usuario
	public function update($id, $clave)
	{
		return $this->res->modificar($id, $clave);
	}

	//Saber si el token aún es válido:
	public function validarToken($token)
	{
		$dat = array(
			"execute" => "false"
		);

		$data = $this->res->token($token);
		if ($data) {
			//convertir las fecha a tipo de dato tiempo, para compararlas:
			$fecha_hoy = strtotime(date("Y-m-d H:i:s"));
			$fecha_lim = strtotime($data["fecha_rec"]);

			if ($fecha_hoy > $fecha_lim) {
				return $dat;
			} else {
				$dat = array(
					"execute" => "true",
					"id" => $data["idpersona"]
				);;
				return $dat;
			}
		} else {
			return $dat;
		}
	}


	public function correo($correo, $app)
	{
		// El parametro $app, me identificará si es web o es desktop

		$req = $this->res->correoExist($correo);

		if ($req) {
			//obtener el token generado
			$codigo = $this->getToken();
			//Establecer zona horario SV
			date_default_timezone_set("America/El_Salvador");

			//asignar la fecha limite hasta la que es válido este código
			$fecha = date("Y-m-d H:i:s", strtotime('+24 hours'));
			$data = $this->res->codigo($correo, $codigo, $fecha);

			if ($data) {
				//recuperar nuevamente los datos con el codigo del usuario:
				$req = $this->res->correoExist($correo);

				if ($this->mail->envio($req, $app)) {
					$data = array(
						"execute" => "true"
					);
					return $data;
				}
			}
		} else {
			return false;
		}
	}

	//Generará un códiho único para que recupere la passw
	public function getToken()
	{
		//Caracteres con los que puede generar los codigos
		$caracteres = "-_.0123456789ABCDEFabcdefghijklmnopqrstGHIJKLMNOPQRSTUVWXYZuvwxyz";

		$x = 0;
		$token = "";
		while ($x <= 9) {
			$num = rand() % 33;
			$tmp = substr($caracteres, $num, 1);
			$token = $token . $tmp;
			$x++;
		}
		return time() . $token;
	}
}

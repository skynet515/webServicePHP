<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
class mailR
{

	//----------------------------------------
	public function envio($data, $app)
	{
		// Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);
		//include("/xampp/htdocs/ws/controllers/html.php");
		$msn = file_get_contents("/xampp/htdocs/ws/controllers/html.php");


		$msn = str_replace("{{nombre}}", $data['nombres'], $msn);

		//Si es desktop
		if ($app == 1) {
			$msn = str_replace("{{indicacion}}", "copie el siguiente código y peguelo en la aplicacion de escritorio CETU", $msn);
			$msn = str_replace("{{indicacion2}}", "código", $msn);

			$msn = str_replace(
				"{{codigo}}",
				"<a style=\"color: #ffffff; text-align: center; text-decoration: none;\">Código:<br>" . $data["codigo"] . "</a>",
				$msn
			);
		}
		//Si es web
		else {
			$msn = str_replace("{{indicacion}}", "de click en el siguiente enlace, para reestablecer su contraseña", $msn);
			$msn = str_replace("{{indicacion2}}", "enlace", $msn);

			$msn = str_replace(
				"{{codigo}}",
				"<a href=\"http://localhost:8084/CETUPrueba/newPassword?aer=" . $data["codigo"] . "Ñscdsc(v&fv742c=c23%5/45vfe)\" style=\"color: #ffffff; text-align: center; text-decoration: none;\">Reestablecer Contraseña </a>",
				$msn
			);
		}

		try {

			$mail->SMTPOptions = array(
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				)
			);
			//Server settings
			$mail->SMTPDebug = 1;                      // Enable verbose debug output
			$mail->isSMTP();                                            // Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                  // Enable SMTP authentication
			$mail->Username   = 'restaurante.cetu@gmail.com';                     // SMTP username
			$mail->Password   = 'cetugrupo8.';                               // SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
			$destinatario = $data["correo"];
			//Recipients
			$mail->setFrom('restaurante.cetu@gmail.com', 'Restaurante CETU');
			$mail->addAddress($destinatario, $destinatario);     // Add a recipient
			//$mail->addAddress('ellen@example.com');               // Name is optional
			//	$mail->addReplyTo('info@example.com', 'Information');
			//	$mail->addCC('cc@example.com');
			//	$mail->addBCC('bcc@example.com');

			// Attachments
			/*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */   // Optional name

			// Content
			$mail->isHTML(true);                                 // Set email format to HTML
			$mail->Subject = 'Solicitud cambiar contraseña.';
			$mail->Body    = $msn;
			//	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			if ($mail->send()) {
				return true;
			} else return false;
		} catch (Exception $e) {
			echo "Message Error: {$mail->ErrorInfo}";
		}
	}
}

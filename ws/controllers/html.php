<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>ProUI Email Template - Welcome</title>
    <meta name="viewport" content="width=device-width" />
    <style type="text/css">
        @media only screen and (max-width: 550px),
        screen and (max-device-width: 550px) {
            body[yahoo] .buttonwrapper {
                background-color: transparent !important;
            }

            body[yahoo] .button {
                padding: 0 !important;
            }

            body[yahoo] .button a {
                background-color: #0ead87;
                padding: 15px 25px !important;
            }
        }

        @media only screen and (min-device-width: 601px) {
            .content {
                width: 600px !important;
            }

            .col387 {
                width: 387px !important;
            }
        }
    </style>
</head>

<body style="margin: 0; padding: 0;" yahoo="fix">
    <!--[if (gte mso 9)|(IE)]>
        <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td>
        <![endif]-->
    <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 400px;" class="content">
        <tr>
            <td style="padding: 15px 10px 15px 10px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>

                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" bgcolor="#0ead87" style="padding: 0px 0px 0px 0px; color: #ffffff; font-family: Arial, sans-serif; font-size: 36px; font-weight: bold;">
                <img src="https://i.ibb.co/zNjc01n/passw.png" alt="" width="150" height="150" style="display:block;" />
            </td>
        </tr>
        <tr>
            <td align="center" bgcolor="#F8FFFF" style="padding: 30px 20px 0px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 20px; line-height: 30px; border-bottom: 1px solid #f6f6f6;">
                <b>¡Hola! {{nombre}} ¿Olvidaste tu contraseña?</b>
            </td>
        </tr>
        <tr>
            <td align="center" bgcolor="#F8FFFF" style="padding: 0px 4px 0px 4px; color: #555555; font-family: Arial, sans-serif; font-size: 20px; line-height: 20px;">
                <b>
                    <h6>Al parecer alguien a intentado reestablecer su contraseña, si a sido usted {{indicacion}}, de lo contrario ignore este mensaje.
                        </6><br><b>
                            <h7>(Este {{indicacion2}}, caduca en 24 horas.)</h7>
                        </b>
            </td>
        </tr>
        <tr>
            <td align="center" bgcolor="#F8FFFF" style="padding: 0px 20px 30px 20px; font-family: Arial, sans-serif; border-bottom: 1px solid #f6f6f6;">
                <table bgcolor="#0ead87" border="0" cellspacing="0" cellpadding="0" class="buttonwrapper">
                    <tr>
                        <td align="center" height="50" style=" padding: 0 25px 0 25px; font-family: Arial, sans-serif; font-size: 16px; font-weight: bold;" class="button">
                            <!--    <a style=\"color: #ffffff; text-align: center; text-decoration: none;\">Codigo: 123456</a>-->
                            {{codigo}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td align="center" bgcolor="#dddddd" style="padding: 15px 10px 15px 10px; color: #555555; font-family: Arial, sans-serif; font-size: 12px; line-height: 18px;">
                <b>Restaurante CETU.</b><br />Programación IV. &bull; UTEC &bull; El Salvador, CA SV.
            </td>
        </tr>
        <tr>
            <td style="padding: 15px 10px 15px 10px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td align="center" width="100%" style="color: #999999; font-family: Arial, sans-serif; font-size: 12px;">
                            <!--    2020 &copy; <a style="color: #0ead87;">Restaurante CETU</a>-->
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
                </td>
            </tr>
        </table>
        <![endif]-->
</body>

</html>
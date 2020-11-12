<%-- 
    Document   : login
    Created on : 11-10-2020, 12:00:19 AM
    Author     : kevin
--%>

<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">

        <title>ProUI - Responsive Bootstrap Admin Template</title>

        <meta name="description"
              content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="views/trabajador/img/favicon.png">
        <link rel="apple-touch-icon" href="views/trabajador/img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="views/trabajador/img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="views/trabajador/img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="views/trabajador/img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="views/trabajador/img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="views/trabajador/img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="views/trabajador/img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="views/trabajador/img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="views/trabajador/css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="views/trabajador/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="views/trabajador/css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="views/trabajador/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="views/trabajador/js/vendor/modernizr.min.js"></script>
    </head>

    <body>
        <!-- Login Full Background -->
        <!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
        <img src="views/trabajador/img/placeholders/backgrounds/f_web.jpg" alt="Login Full Background" class="full-bg animation-pulseSlow">
        <!-- END Login Full Background -->

        <!-- Login Container -->
        <div id="login-container" class="animation-fadeIn" >
            <!-- Login Title -->
            <div class="login-title text-center">
                <h1> <strong> CETU</strong><br><small>Por Favor <strong>Inicia Sesion</strong> ó <strong>Crea una
                            Cuenta</strong></small></h1>
            </div>
            <!-- END Login Title -->

            <!-- Login Block -->
            <div class="block push-bit">
                <!-- Login Form -->
                <form action="index.html" method="post" id="form-login"
                      class="form-horizontal form-bordered form-control-borderless">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                <input type="text" id="login-email" name="login-email" class="form-control input-lg"
                                       placeholder="Nombre de Usuario">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" id="login-password" name="login-password"
                                       class="form-control input-lg" placeholder="Contraseña">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-4">

                        </div>
                        <div class="col-xs-8 text-right">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="gi gi-log_in"></i> Iniciar
                                Sesion</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <a href="javascript:void(0)" id="link-reminder-login"><small>Olvido su contraseña?</small></a> -
                            <a href="javascript:void(0)" id="link-register-login"><small>Crear un nuevo Usuario</small></a>
                        </div>
                    </div>
                </form>
                <!-- END Login Form -->

                <!-- Reminder Form -->
                <form action="login_full.html#reminder" method="post" id="form-reminder"
                      class="form-horizontal form-bordered form-control-borderless display-none">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                <input type="text" id="reminder-email" name="reminder-email" class="form-control input-lg"
                                       placeholder="Correo">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="submit" class="btn btn-sm btn-primary"><i
                                    class="fa fa-angle-right"></i>Restablecer Contraseña</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <small>Recuerdas tu contraseña?</small> <a href="javascript:void(0)"
                                                                       id="link-reminder"><small>Iniciar Sesion</small></a>
                        </div>
                    </div>
                </form>
                <!-- END Reminder Form -->

                <!-- Register Form -->
                <form action="login_full.html#register" method="post" id="form-register"
                      class="form-horizontal form-bordered form-control-borderless display-none">
                    <div class="form-group">
                        <div class="col-xs-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                <input type="text" id="register-firstname" name="register-firstname"
                                       class="form-control input-lg" placeholder="Nombres">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <input type="text" id="register-lastname" name="register-lastname" class="form-control input-lg"
                                   placeholder="Apellidos">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                <input type="text" id="register-email" name="register-email" class="form-control input-lg"
                                       placeholder="Correo">
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>Seleccione un cargo</label>
                            <br>
                            <a href="javascript:void(0)" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Cargo
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu text-left">
                                <li class="dropdown-header">Cargo</li>
                                <li><a href="javascript:void(0)">Docente</a></li>
                                <li><a href="javascript:void(0)">Estudiante</a></li>
                                <li><a href="javascript:void(0)">Trabajador Cetu</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" id="register-password" name="register-password"
                                       class="form-control input-lg" placeholder="Contraseña">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" id="register-password-verify" name="register-password-verify"
                                       class="form-control input-lg" placeholder="Confirmar Contraseña">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs- text-right">
                            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Crear
                                Cuenta</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 text-center">
                            <small>Tienes una cuenta?</small> <a href="javascript:void(0)" id="link-register"><small>Iniciar
                                    Sesion</small></a>
                        </div>
                    </div>
                </form>
                <!-- END Register Form -->
            </div>
            <!-- END Login Block -->
        </div>
        <!-- END Login Container -->



        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="views/trabajador/js/vendor/jquery.min.js"></script>
        <script src="views/trabajador/js/vendor/bootstrap.min.js"></script>
        <script src="views/trabajador/js/plugins.js"></script>
        <script src="views/trabajador/js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="views/trabajador/js/pages/login.js"></script>
        <script>
            $(function () {
                Login.init();
            });
        </script>
    </body>

</html>
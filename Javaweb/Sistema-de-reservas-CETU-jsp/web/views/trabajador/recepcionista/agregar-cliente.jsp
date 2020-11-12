<%-- 
    Document   : agregar-cliente
    Created on : 10/11/2020, 10:09:34 PM
    Author     : gerar
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
 <html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">

        <title>Administración CETU - Clientes</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <jsp:include page="helpers/icons-css-import.jsp"></jsp:include>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </head>
    <body>


        <div id="page-wrapper">

            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                <jsp:include page="sidebar.jsp"></jsp:include>

                <!-- Main Container -->
                <div id="main-container">

                <jsp:include page="navbar.jsp"></jsp:include>


                    <!-- Page content -->
                    <div id="page-content">

                        <!-- Product Edit Content -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- General Data Block -->
                                <div class="block">
                                    <!-- General Data Title -->
                                    <div class="block-title">
                                        <h2><i class="fa fa-pencil"></i> <strong>Datos de </strong>cliente</h2>
                                    </div>
                                    <!-- END General Data Title -->

                                    <!-- General Data Content -->
                                    <form action="#" method="post" class="form-horizontal form-bordered"
                                    onsubmit="return false;" id="form-validation" name="AgregarUsuario">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-name" name="nombre">Nombres</label>
                                            <div class="col-md-9">
                                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombres..." required required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-name" name="Apellido">Apellidos</label>
                                            <div class="col-md-9">
                                                <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido..." required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-name" name="telefono">Teléfono</label>
                                            <div class="col-md-9">
                                                <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Numero de telefono..." required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-name" name="DUI">N° DUI</label>
                                            <div class="col-md-9">
                                                <input type="text" id="DUI" name="DUI" class="form-control" placeholder="Numero de DUI" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-category">Tipo</label>
                                            <div class="col-md-8">
                                                <!-- Chosen plugin (class is initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://harvesthq.github.io/chosen/ -->
                                                <select id="categoriausuario" name="categoriausuario" class="select-chosen" data-placeholder="Seleccione uno..." style="width: 250px;">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                                    <option value="1">Docente</option>
                                                    <option value="2">Estudiante</option>
                                                    <option value="3">Trabajador CETU</option>
                                                    <option value="2">Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="product-name" name="correo">Correo</label>
                                            <div class="col-md-9">
                                                <input type="text" id="correo" name="correo" class="form-control" placeholder="Correo electronico..." required>
                                            </div>
                                        </div>

                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-sm btn-primary" ><i class="fa fa-floppy-o" ></i> Guardar</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Cancelar</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END General Data Content -->
                                </div>
                                <!-- END General Data Block -->
                            </div>

                        </div>
                        <!-- END Product Edit Content -->
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <footer class="clearfix">

                        <div class="pull-left">
                         &copy; Restaurante CETU 2020</a>
                        </div>
                    </footer>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- MODAL SUCCESS -->
        <jsp:include page="helpers/modal-success.jsp"></jsp:include>
        <!-- Modal Error-->
        <jsp:include page="helpers/modal-error.jsp"></jsp:include>
        <!-- Validaciones jquery para el formulario y modals -->
        <script src="js/validate.js" ></script>
        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <jsp:include page="helpers/jquery-import-bootstrap.jsp"></jsp:include>

        <!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
        <script src="../administracion/js/helpers/ckeditor/ckeditor.js"></script>


        <!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
        <script src="../administracion/js/helpers/ckeditor/ckeditor.js"></script>

        <!-- SCRIPTS DE VALIDACION DE INPUT -->
        <script src="../administracion/js/pages/formsValidation.js"></script>
        <script>$(function(){ FormsValidation.init(); });</script>
    </body>
</html>

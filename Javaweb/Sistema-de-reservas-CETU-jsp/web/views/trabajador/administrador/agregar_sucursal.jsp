<html>
    <html class="no-js" lang="es"> 
        <head>
            <meta charset="utf-8">

            <title>Administración CETU</title>

            <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
            <meta name="author" content="pixelcave">
            <meta name="robots" content="noindex, nofollow">
            <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        </head>
        <body>

            <jsp:include page="menu_admin.jsp"></jsp:include>


            <!-- Page content -->
            <div id="page-content">

                <!-- Product Edit Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- General Data Block -->
                        <div class="block">
                            <!-- General Data Title -->
                            <div class="block-title">
                                <h2><i class="fa fa-pencil"></i> <strong>Datos de </strong>Sucursal</h2>
                            </div>
                            <!-- END General Data Title -->

                            <!-- General Data Content -->
                            <form action="page_ecom_product_edit.html" id="form-validation" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="product-id">ID</label>
                                    <div class="col-md-9">
                                        <input type="text" id="product-id" name="product-id" class="form-control" value="6825">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for=direccion_sucursal">Dirección</label>
                                    <div class="col-md-9">
                                        <input type="text" id="direccion_sucursal" name="direccion_sucursal" class="form-control" placeholder="Ingrese direcciòn">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="telefono">Teléfono</label>
                                    <div class="col-md-9">
                                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Ingrese telefono">
                                    </div>
                                </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="tipo">Tipo</label>
                                <div class="col-md-9">
                                    <select id="tipo" name="tipo" class="form-control ">
                                        <option value="">Selecione un encargado</option>
                                        <option value="1">Alejandra Abrego</option>
                                        <option value="2">Elizabeth Vasquez</option>
                                        <option value="3">Kevin Mejia</option>
                                    </select>
                                </div>
                            </div>

                                <div class="form-group form-actions">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button>
                                        <a href="sucursales.jsp"><button type="button" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Cancelar</button></a> 
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

<!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
<script src="../js/vendor/jquery.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/plugins.js"></script>
<script src="../js/app.js"></script>

<!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
<script src="../js/helpers/ckeditor/ckeditor.js"></script>
<script src="../js/pages/formsValidation.js"></script>
<script>
                                $(function () {
                                    FormsValidation.init();
                                });
</script>

</body>
</html>
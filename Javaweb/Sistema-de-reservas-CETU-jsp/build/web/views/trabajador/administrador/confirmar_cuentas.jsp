<html class="no-js" lang="es"> 
    <head>
        <meta charset="utf-8">

        <title>Confirmar Cuentas</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">


    </head>
    <body>
        <jsp:include page="menu_admin.jsp"></jsp:include>
        <!-- Page content -->
        <div id="page-content">

            <div class="row text-center">       
                <div class="col-sm-6 col-lg-3">
                    <a  class="widget widget-hover-effect2">
                        <div class="widget-extra themed-background-dark">
                            <h4 class="widget-content-light"><strong>Confirmación </strong>de Cuentas</h4>
                        </div>
                    </a>
                </div>

            </div>
            <!-- END Quick Stats -->

            <!-- All Products Block -->
            <div class="block full">

                <table id="ecom-products" class="table table-bordered table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 70px;">ID</th>
                            <th>Nombre</th>
                            <th class="text-right hidden-xs">Apellido</th>
                            <th class="hidden-xs">Tipo</th>
                            <th class="hidden-xs text-center">Telefono</th>
                            <th class="hidden-xs text-center">Correo</th>
                            <th class="text-center">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><a href="editar-cliente.html"><strong>1</strong></a></td>
                            <td><a href="editar-cliente.html">Rudy Ricardo</a></td>
                            <td class="text-right hidden-xs"><strong>Colocho Rodríguez</strong></td>
                            <td class="hidden-xs">
                                <span class="label label-success">Estudiante</span>
                            </td>
                            <td class="hidden-xs text-center">6159-9501</td>
                            <td class="hidden-xs text-center">2520432018@mail.utec.edu.sv</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-xs">
                                    <button type="submit" class="btn btn-sm btn-info"><i class="hi hi-check"></i></i> Confirmar</button>
                                   
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <!-- END All Products Content -->
            </div>
            <!-- END All Products Block -->
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


<!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
<script src="../js/vendor/jquery.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/plugins.js"></script>
<script src="../js/app.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="../js/pages/ecomProducts.js"></script>
<script>$(function () {
        EcomProducts.init();
    });</script>


<script src="../js/pages/formsValidation.js"></script>
<script>
    $(function () {
        FormsValidation.init();
    });
</script>
</body>
</html>
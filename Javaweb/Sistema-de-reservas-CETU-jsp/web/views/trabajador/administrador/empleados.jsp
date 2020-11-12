
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

        <jsp:include page="menu_admin.jsp" ></jsp:include>
        <!-- Main Container -->


        <!-- Page content -->
        <div id="page-content">

            <div class="row text-center">
                <div class="col-sm-6 col-lg-3">
                    <a href="agregar_empleado.jsp" class="widget widget-hover-effect2">
                        <div class="widget-extra themed-background-success">
                            <h4 class="widget-content-light"><strong>Agregar nuevo</strong> Empleado</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><i class="fa fa-plus"></i></span></div>
                    </a>
                </div>

            </div>
            <!-- END Quick Stats -->

            <!-- All Products Block -->
            <!-- Datatables Content -->
            <div class="block full">
                <div class="block-title">
                    <h2><strong>Datatables</strong> integration</h2>
                </div>
                
                <div class="table-responsive">
                    <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 70px;">ID</th>
                                <th>Nombre</th>
                                <th class="text-right hidden-xs">Apellido</th>
                                <th class="hidden-xs">Tipo</th>
                                <th class="hidden-xs">Sucursal</th>
                                <th class="hidden-xs text-center">Telefono</th>
                                <th class="hidden-xs text-center">Correo</th>
                                <th class="text-center">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><a href="agregar_empleado.jsp"><strong>1</strong></a></td>
                                <td><a href="agregar_empleado.jsp">Alejandra Guadalupe</a></td>
                                <td class="text-right hidden-xs"><strong>Majano Abrego</strong></td>
                                <td class="hidden-xs">
                                    <span class="label label-success">Administrador</span>
                                </td>
                                <td class="hidden-xs">
                                    <span class="label label-success">Benito Juarez</span>
                                </td>
                                <td class="hidden-xs text-center">7777-1234</td>
                                <td class="hidden-xs text-center">2536882018@mail.utec.edu.sv</td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-xs">
                                        <a href="agregar_empleado.jsp" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
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
<script src="../js/pages/tablesDatatables.js"></script>
<script>$(function () {
        TablesDatatables.init();
    });</script>



<!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
<script src="../js/helpers/ckeditor/ckeditor.js"></script>
</body>
</html>

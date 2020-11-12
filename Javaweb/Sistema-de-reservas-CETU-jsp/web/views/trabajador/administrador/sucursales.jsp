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

                        <div class="row text-center">
                            <div class="col-sm-6 col-lg-3">
                                <a href="agregar_sucursal.jsp" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-success">
                                        <h4 class="widget-content-light"><strong>Añadir nueva</strong> Sucursal</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><i class="fa fa-plus"></i></span></div>
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
                                        <th class="hidden-xs">Dirección</th>
                                        <th class="hidden-xs">Teléfono</th>
                                        <th class="hidden-xs">Encargado</th>
                                        <th class="hidden-xs">Añadir Mesas</th>
                                        <th class="hidden-xs">Sillas extra</th>
                                        <th class="text-center">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><a href="editar-sucursal.html"><strong>PID.8799</strong></a></td>
                                        <td><a href="editar-sucursal.html">Benito Juárez</a></td>
                                        <td class="hidden-xs"><strong>Avenida sur, calle Arce local #5678</strong></td>
                                        <td class="hidden-xs">
                                            <span>2298-7951</span>
                                        </td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Alejandra Abrego</span>
                                        </td>
                                        <td class="text-center"><a href="mesas.jsp"><strong>Mesas</strong></a></td>
                                        <td class="text-center"><a href="añadir_sillas_extras.jsp"><strong>Sillas</strong></a></td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
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
        <script src="../js/pages/ecomProducts.js"></script>
        <script>$(function(){ EcomProducts.init(); });</script>
    </body>
</html>
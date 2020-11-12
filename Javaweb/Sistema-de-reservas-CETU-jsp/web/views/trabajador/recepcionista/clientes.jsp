<%-- 
    Document   : clientes
    Created on : 10/11/2020, 10:27:35 PM
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

                        <div class="row text-center">
                            <div class="col-sm-6 col-lg-3">
                                <a href="agregar-cliente.jsp" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-success">
                                        <h4 class="widget-content-light"><strong>Agregar nuevo</strong> Cliente</h4>
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
                                                <a href="editar-cliente.html" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
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
        <jsp:include page="helpers/jquery-import-bootstrap.jsp"></jsp:include>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/ecomProducts.js"></script>
        <script>$(function(){ EcomProducts.init(); });</script>
    </body>
</html>
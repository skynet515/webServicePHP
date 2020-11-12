<%-- 
    Document   : solicitudes
    Created on : 10/11/2020, 11:01:39 PM
    Author     : gerar
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
 <html class="no-js" lang="es"> 
    <head>
        <meta charset="utf-8">

        <title>Administración CETU - Solicitudes</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
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
                        <!-- Inbox Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1><i class="gi gi-envelope"></i>Solicitudes</small></h1>
                            </div>
                        </div>
                       
                        <!-- END Inbox Header -->

                        <!-- Inbox Content -->
                        <div class="row">
                      
                            <!-- Messages List -->
                            <div class="col-sm-8 col-lg-11">
                                <!-- Messages List Block -->
                                <div class="block">
                                    <!-- Messages List Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <h2>Solicitudes de Reservas</h2>
                                    </div>
                                    <!-- END Messages List Title -->

                                    <!-- Messages List Content -->
                                    <div class="table-responsive">
                                        <table class="table table-hover table-vcenter">
                                           
                                            <tbody>
                                                <!-- Use the first row as a prototype for your column widths -->
                                                <tr>
                                                    <td class="text-center" style="width: 30px;">
                                                        <input type="checkbox" id="checkbox1" name="checkbox1">
                                                    </td>
                                                    <td class="text-center" style="width: 30px;">
                                                        <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                                    </td>
                                                    <td class="text-center" style="width: 30px;">
                                                        <a href="javascript:void(0)" class="text-success msg-read-btn"><i class="fa fa-circle"></i></a>
                                                    </td>
                                                    <td style="width: 20%;">Debra Stanley</td>
                                                    <td>
                                                        <a href="agregar-reserva.jsp"><strong>Solicitud web</strong></a>
                                                        <span class="text-muted">Hey, me gustaria reservar ...</span>
                                                    </td>
                                                    <td class="text-center" style="width: 30px;">
                                                        <i class="fa fa-paperclip"></i>
                                                    </td>
                                                    <td class="text-right" style="width: 90px;"><em>just now</em></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Messages List Content -->
                                </div>
                                <!-- END Messages List Block -->
                            </div>
                            <!-- END Messages List -->
                        </div>
                        <!-- END Inbox Content -->
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
    
        <!-- END User Settings -->

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
         <jsp:include page="helpers/jquery-import-bootstrap.jsp"></jsp:include>

        <!-- Load and execute javascript code used only in this page -->
        <script src="..administracion/js/pages/readyInbox.js"></script>
        <script>$(function(){ ReadyInbox.init(); });</script>
    </body>

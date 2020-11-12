<%-- 
    Document   : agregar-reserva
    Created on : 10/11/2020, 06:17:00 PM
    Author     : gerar
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">

    <title>Agregar Reserva</title>

    <meta name="description"
        content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <jsp:include page="helpers/icons-css-import.jsp"></jsp:include>
</head>

<body>

    <div id="page-wrapper">

        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">

              <!-- Wrapper for scrolling functionality -->
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
                                    <h2><i class="fa fa-pencil"></i> <strong>Registro </strong>Reserva</h2>
                                    <div class="block-options pull-right">
                                        <input type="search" class="form-control" placeholder="Search"
                                            aria-controls="ecom-products">
                                            

                                    </div>
                                </div>
                                <!-- END General Data Title -->

                                <!-- General Data Content -->
                                <form action="page_ecom_product_edit.html" method="post"
                                    class="form-horizontal form-bordered" onsubmit="return false;">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-id">ID</label>
                                        <div class="col-md-9">
                                            <input type="text" id="id_reserva" name="product-id" class="form-control"
                                                value="452">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-name">Nombres</label>
                                        <div class="col-md-9">
                                            <input type="text" id="nombre_cliente" name="nombre_cliente"
                                                class="form-control" placeholder="Ingrese el nombre..." required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-name">Apellidos</label>
                                        <div class="col-md-9">
                                            <input type="text" id="apellido_cliente" name="apellido_cliente"
                                                class="form-control" placeholder="Ingrese el apellido..." required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-name">Correo</label>
                                        <div class="col-md-9">
                                            <input type="text" id="correo_cliente" name="correo_cliente"
                                                class="form-control" placeholder="Ingrese el correo.." required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-name">N° Dui</label>
                                        <div class="col-md-9">
                                            <input type="number" id="dui" name="dui" class="form-control"
                                                placeholder="Ingrese el Dui" min="1" pattern="^[0-9]+" required min="0">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-name">N° Personas</label>
                                        <div class="col-md-9">
                                            <input type="number" id="num_persona" name="num_persona"
                                                class="form-control" placeholder="1-100" min="1" pattern="^[0-9]+"
                                                required min="1" max="100">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-name">N° Mesa</label>
                                        <div class="col-md-9">
                                            <input type="number" id="num_mesa" name="num_mesa" class="form-control"
                                                placeholder="1-50" min="1" pattern="^[0-9]+" required min="1" max="50">
                                            <!-- BOTON MESAS DISPONIBLES -->
                                            <a href="#" data-toggle="modal" data-target="#exampleModal"
                                                data-whatever="@mdo"> <button type="button"
                                                    class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i>
                                                    Mesas disponibles</button>

                                            </a>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-name">Silla
                                            adicional</label>
                                        <div class="col-md-9">
                                            <input type="number" id="num_silla" name="num_silla" class="form-control"
                                                placeholder="1-20" min="1" pattern="^[0-9]+" max="20">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-name">Fecha</label>
                                        <div class="col-md-9">
                                            <input type="date" id="fecha" name="fecha" class="form-control"
                                                placeholder="Ingrese el numero de mesa" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-name">Hora</label>
                                        <div class="col-md-9">
                                            <input type="time" id="hora" name="hora" class="form-control"
                                                placeholder="Ingrese el numero de mesa" required>
                                        </div>
                                    </div>

                                    <!-- botones -->
                                    <div class="form-group form-actions">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i>
                                                Agregar</button>
                                            <button type="reset" class="btn btn-sm btn-warning"><i
                                                    class="fa fa-repeat"></i>
                                                Atras</button>
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
    <jsp:include page="helpers/jquery-import-bootstrap.jsp"></jsp:include>

    <!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
    <script src="../administracion/js/helpers/ckeditor/ckeditor.js"></script>
</body>



<!-- INICIO MODA -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Mesas Disponibles</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="search" class="form-control" placeholder="Search" aria-controls="ecom-products">
                <!-- All Products Block -->
                <div class="block full">

                    <table id="ecom-products" class="table table-bordered table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 70px;">ID</th>
                                <th>Mesas</th>
                                <th class="text-right hidden-xs">Sillas</th>
                                <th class="hidden-xs">Horarios</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><a href="editar-cliente.html"><strong>1</strong></a></td>
                                <td><a href="#">Mesa N° 1</a></td>
                                <td class="text-right hidden-xs"><strong>25</strong></td>
                                <td class="hidden-xs">
                                    <span class="label label-success">2:00-3:00</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <!-- END All Products Content -->

                    <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>

                </div>
                <!-- END All Products Block -->
            </div>
            <!-- END Page Content -->
        </div>

    </div>
</div>
</div>


<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus');
    });
</script>


<!-- FIN MODAL -->






</html>
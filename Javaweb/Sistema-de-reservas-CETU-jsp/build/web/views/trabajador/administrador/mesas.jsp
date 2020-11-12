<html class="no-js" lang="es"> 
    <head>
        <meta charset="utf-8">

        <title>Clientes</title>

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
                    <a href="agregar_mesa.jsp" class="widget widget-hover-effect2">
                        <div class="widget-extra themed-background-success">
                            <h4 class="widget-content-light"><strong>Añadir </strong>Mesas</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><i class="hi hi-check"></i></span></div>
                    </a>
                </div>

            </div>
            <!-- END Quick Stats -->

            <!-- Datatables Content -->
            <div class="block full">
                <div class="block-title">
                    <h2><strong>Datatables</strong> integration</h2>
                </div>
                <div class="table-responsive">
                    <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">

                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Nº Mesa</th>
                                <th>Silla</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td><a href="javascript:void(0)">1</a></td>
                                <td>4</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Datatables Content -->
        </div>

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

<script src="../js/pages/formsValidation.js"></script>
<script>
    $(function () {
        FormsValidation.init();
    });
</script>
</body>
</html>
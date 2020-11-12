<!DOCTYPE html>
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
            <!-- Dashboard Header -->
            <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
            <div class="content-header content-header-media">
                <div class="header-section">
                    <div class="row">
                        <!-- Main Title (hidden on small devices for the statistics to fit) -->
                        <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                            <h1>Bienvenido <strong>Admin</strong><br><small>You Look Awesome!</small></h1>
                        </div>

                        <!-- END Top Stats -->
                    </div>
                </div>
                <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
                <img src="../img/placeholders/headers/profile_header.jpg" alt="header image" class="animation-pulseSlow">
            </div>
            <!-- END Dashboard Header -->

            <!-- Mini Top Stats Row -->
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <!-- Widget -->
                    <a href="page_ready_article.html" class="widget widget-hover-effect1">
                        <div class="widget-simple">
                            <div class="widget-icon pull-left themed-background-autumn animation-fadeIn">
                                <i class="fa fa-file-text"></i>
                            </div>
                            <h3 class="widget-content text-right animation-pullDown">
                                New <strong>Article</strong><br>
                                <small>Mountain Trip</small>
                            </h3>
                        </div>
                    </a>
                    <!-- END Widget -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Widget -->
                    <a href="page_comp_charts.html" class="widget widget-hover-effect1">
                        <div class="widget-simple">
                            <div class="widget-icon pull-left themed-background-spring animation-fadeIn">
                                <i class="gi gi-usd"></i>
                            </div>
                            <h3 class="widget-content text-right animation-pullDown">
                                + <strong>250%</strong><br>
                                <small>Sales Today</small>
                            </h3>
                        </div>
                    </a>
                    <!-- END Widget -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Widget -->
                    <a href="page_ready_inbox.html" class="widget widget-hover-effect1">
                        <div class="widget-simple">
                            <div class="widget-icon pull-left themed-background-fire animation-fadeIn">
                                <i class="gi gi-envelope"></i>
                            </div>
                            <h3 class="widget-content text-right animation-pullDown">
                                5 <strong>Messages</strong>
                                <small>Support Center</small>
                            </h3>
                        </div>
                    </a>
                    <!-- END Widget -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Widget -->
                    <a href="page_comp_gallery.html" class="widget widget-hover-effect1">
                        <div class="widget-simple">
                            <div class="widget-icon pull-left themed-background-amethyst animation-fadeIn">
                                <i class="gi gi-picture"></i>
                            </div>
                            <h3 class="widget-content text-right animation-pullDown">
                                +30 <strong>Photos</strong>
                                <small>Gallery</small>
                            </h3>
                        </div>
                    </a>
                    <!-- END Widget -->
                </div>
                <div class="col-sm-6">
                    <!-- Widget -->

                    <!-- END Widget -->
                </div>

            </div>

            <!-- END Widgets Row -->
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

<!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
<!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
<script src="https://maps.googleapis.com/maps/api/js?key="></script>
<script src="../js/helpers/gmaps.min.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="../js/pages/index.js"></script>
<script>$(function () {
        Index.init();
    });</script>
</body>
</html>
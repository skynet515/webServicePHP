<!-- Icons -->
<!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
<link rel="shortcut icon" href="img/favicon.png">
<link rel="apple-touch-icon" href="../img/icon57.png" sizes="57x57">
<link rel="apple-touch-icon" href="../img/icon72.png" sizes="72x72">
<link rel="apple-touch-icon" href="../img/icon76.png" sizes="76x76">
<link rel="apple-touch-icon" href="../img/icon114.png" sizes="114x114">
<link rel="apple-touch-icon" href="../img/icon120.png" sizes="120x120">
<link rel="apple-touch-icon" href="../img/icon144.png" sizes="144x144">
<link rel="apple-touch-icon" href="../img/icon152.png" sizes="152x152">
<link rel="apple-touch-icon" href="../img/icon180.png" sizes="180x180">
<!-- END Icons -->

<!-- Stylesheets -->
<!-- Bootstrap is included in its original form, unaltered -->
<link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Related styles of various icon packs and plugins -->
<link rel="stylesheet" href="../css/plugins.css">

<!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
<link rel="stylesheet" href="../css/main.css">

<!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

<!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
<link rel="stylesheet" href="../css/themes.css">
<!-- END Stylesheets -->



<!-- Modernizr (browser feature detection library) -->
<script src="../js/vendor/modernizr.min.js"></script>
<div id="page-wrapper">

    <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">

        <div id="sidebar">
            <!-- Wrapper for scrolling functionality -->
            <div id="sidebar-scroll">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Brand -->
                    <a href="index_admin.jsp" class="sidebar-brand">
                        <i class="gi gi-flash"></i><span class="sidebar-nav-mini-hide"><strong>Restaurante</strong>CETU</span>
                    </a>
                    <!-- Sidebar Navigation -->
                    <ul class="sidebar-nav">
                        <li>
                            <a href="index_admin.jsp"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Inicio</span></a>
                        </li>

                        <li>
                            <a href="empleados.jsp" ><i class="sidebar-nav-mini-hide"></i><i class="gi gi-certificate sidebar-nav-icon"></i>Empleados</span></a>  
                        </li>
                        <li>
                            <a href="clientes.jsp"><i class="sidebar-nav-mini-hide"></i><i class="gi gi-notes_2 sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Clientes</span></a>

                        </li>
                        <li>
                            <a href="sucursales.jsp"><i class="sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-table sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Sucursales</span></a>

                        </li>

                    </ul>

                </div>
                <!-- END Sidebar Content -->
            </div>
            <!-- END Wrapper for scrolling functionality -->
        </div>
        <!-- END Main Sidebar -->

        <!-- Main Container -->
        <div id="main-container">

            <header class="navbar navbar-default">
                <!-- Left Header Navigation -->
                <ul class="nav navbar-nav-custom">
                    <!-- Main Sidebar Toggle Button -->
                    <li>
                        <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                            <i class="fa fa-bars fa-fw"></i>
                        </a>
                    </li>

                    <!-- END Template Options -->
                </ul>


                <ul class="nav navbar-nav-custom pull-right">


                    <!-- User Dropdown -->
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../img/placeholders/avatars/avatar2.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                            <li class="dropdown-header text-center">Account</li>

                            <li class="divider"></li>
                            <li>
                                <a href="page_ready_user_profile.html">
                                    <i class="fa fa-user fa-fw pull-right"></i>
                                    Perfil
                                </a>
                                <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                <a href="#modal-user-settings" data-toggle="modal">
                                    <i class="fa fa-cog fa-fw pull-right"></i>
                                    Configuración
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="login.jsp"><i class="fa fa-ban fa-fw pull-right"></i> Cerrar Sesión</a>
                            </li>

                        </ul>
                    </li>
                    <!-- END User Dropdown -->
                </ul>
                <!-- END Right Header Navigation -->
            </header>
            <!-- END Header -->

          
<div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">

                <div id="sidebar">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <a href="index_mesero.jsp" class="sidebar-brand">
                                <i class="gi gi-flash"></i><span class="sidebar-nav-mini-hide"><strong>Restaurante</strong>CETU</span>
                            </a>
                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="index_mesero.jsp" class="active"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Inicio</span></a>
                                </li>

                                <li>
                                    <a href="reservas_pen.jsp"><i class="sidebar-nav-mini-hide"></i><i class="gi gi-certificate sidebar-nav-icon"></i>Reservas pendientes</span></a>  
                                </li>
                                <li>
                                    <a href="reservas_pre.jsp"><i class="sidebar-nav-mini-hide"></i><i class="gi gi-notes_2 sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Reservas  Presentes</span></a>

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
                                    <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                    <li class="dropdown-header text-center">Cuenta</li>
                                
                                    <li class="divider"></li>
                                    <li>
                                        <a href="perfi_ladmin.jsp">
                                            <i class="fa fa-user fa-fw pull-right"></i>
                                            Mi Perfil
                                        </a>
                                        <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="login.html"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                    </li>
                                 
                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Tomato Responsive Restaurant HTML5 Template</title>
        <meta name="author" content="Surjith S M">

        <!-- SEO -->
        <meta name="description" content="Tomato is a Responsive HTML5 Template for Restaurants and food related services.">
        <meta name="keywords" content="tomato, responsive, html5, restaurant, template, food, reservation">

        <!-- Favicons -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <script src="https://kit.fontawesome.com/b4b5e95396.js" crossorigin="anonymous"></script>
        <!-- Responsive Tag -->
        <meta name="viewport" content="width=device-width">

        <!-- CSS Files -->
        <link rel="stylesheet" href="../cliente/css/bootstrap.min.css">
        <link rel="stylesheet" href="../cliente/css/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="../cliente/css/plugin.css">
        <link rel="stylesheet" href="../cliente/css/main.css">

        <!--[if lt IE 9]>
                <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
            <![endif]-->
    </head>

    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

        <!-- Preloder-->
        <div class="preloder animated">
            <div class="scoket">
                <img src="img/preloader.svg" alt="" />
            </div>
        </div>

        <div class="body">

            <div class="main-wrapper">
               <!-- Navigation-->
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="./index.html">
                            <img src="img/cet.png" alt="nav-logo">
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="./index.html">Inicio</a></li>
                            <li><a href="./reservar.html">Reservar</a></li>
                            <li><a href="./reservar.html">Mis Reservas</a></li>
                            <li class="dropdown">
                                <a href="./index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sign-out-alt"></i><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./miperfil.html">Configurar cuenta</a></li>
                                    <li><a href="./index.html">Cerrar sesion</a></li>
                        </ul>
                        </li>

                        </ul>
                    </div>
                    <!--/.navbar-collapse -->
                </div>
            </nav>

                <!-- Page Header -->
                <section class="page_header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2 class="text-uppercase">Reservar</h2>
                                <p>Completa los campos para realizar una reserva</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Reservations page - OPENTABLE -->
                <section class="reservation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-header wow fadeInDown">
                                    <h1>Reservar<small>Gracias por preferirnos</small></h1>
                                </div>
                            </div>
                        </div>
                        <div class="reservation-form wow fadeInUp">
                            <div class="open-table-container" data-restaurant-id="66241">
                                <div id="OT_searchWrapperAll">
                                    <form name="ism" id="ism" method="POST" action="https://secure.opentable.com/ism/interim.aspx">
                                        <div id="OT_searchWrapper">
                                            <div id="OT_defList" class="row">
                                                <div id="OT_date" class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Día</label>
                                                        <input type="text" id="datepicker" class="OT_feedFormfieldCalendar datepicker" name="startDate" placeholder="Escoge una dia">
                                                        <i class="fa fa-calendar-o"></i>
                                                    </div>
                                                </div>
                                                <div id="OT_partySize" class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Invitados</label>
                                                        <select name="PartySize" class="feedFormField">
                                                            <option selected disabled>Cantidad</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11 </option>
                                                            <option value="12">12 </option>
                                                            <option value="13">13 </option>
                                                            <option value="14">14 </option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                        </select>
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div id="OT_time" class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Tiempo</label>
                                                        <select name="ResTime" class="feedFormField">
                                                            <option selected disabled>Escoge una hora</option>
                                                            <option value="7:00 AM">7:00 AM -9:00 AM </option>
                                                            <option value="9:00 AM">9:00 AM - 11:00 AM</option>
                                                            <option value="10:00 AM">11:00 AM - 1:00 PM</option>
                                                            <option value="12:00 PM">1:00 PM - 3:00 PM</option>
                                                            <option value="2:00 PM">3:00 PM - 5:00 PM</option>
                                                            <option value="5:00 PM">5:00 PM - 7:00 PM</option>
                                                        </select>
                                                        <i class="fa fa-clock-o"></i>
                                                    </div>
                                                </div>

                                                <div id="OT_time" class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Sucursal</label>
                                                        <select name="ResTime" class="feedFormField">
                                                            <option selected disabled>Escoge una Sucursal</option>
                                                            <option value="7:00 AM">Benito Juarez </option>
                                                            <option value="9:00 AM">Francisco Morazan</option>
                                                            <option value="10:00 AM">Simon Bolivar</option>
                                                        </select>
                                                        <i class="fa fa-clock-o"></i>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                        <div id="OT_submitWrap" class="reservation-btn">
                                            <button type="submit" class="btn btn-default btn-lg OT_TableButton">Hacer Reservación</button>
                                        </div>

                                        <!-- // end .text-center -->
                                        <div class="OT_hidden">
                                            <input type="hidden" class="OT_hidden" name="RestaurantID" value="">
                                            <input type="hidden" class="OT_hidden" name="GeoID" value="7">
                                            <input type="hidden" class="OT_hidden" name="txtHidServerTime" value="6/26/2014 8:50 PM">
                                            <input type="hidden" class="OT_hidden" name="txtDateFormat" value="MM/dd/yyyy">
                                        </div>
                                    </form>
                                    <noscript>&amp;lt;a href="http://www.omniture.com" title="Web Analytics"&amp;gt;&amp;lt;img src="http://o.opentable.com/b/ss/otrestref/1/H.22.1--NS/0" height="1" width="1" border="0" alt="" /&amp;gt;&amp;lt;/a&amp;gt;</noscript>
                                    <!--/DO NOT REMOVE/-->
                                </div>
                            </div>
                        </div>
                        <div class="reservation-footer">
                            <p>Puedes llamar a : <strong>+1 224 6787 004</strong> para hacer una reservación.</p>

                            <span></span>
                        </div>
                    </div>
                </section>

                
                <!-- Footer-->
                <section class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <h1>About us</h1>
                                <p>Duis leo justo, condimentum at purus eu,Aenean sed dolor sem. Etiam massa libero, auctor vitae egestas et, accumsan quis nunc.Duis leo justo, condimentum at purus eu, posuere pretium tellus.</p>
                                <a href="./about.html">Read more &rarr;</a>
                            </div>
                            <div class="col-md-4  col-sm-6">
                                <h1>Recent post</h1>
                                <div class="footer-blog clearfix">
                                    <a href="./blog_right_sidebar.html">
                                        <img src="img/thumb8.png" class="img-responsive footer-photo" alt="blog photos">
                                        <p class="footer-blog-text">Hand picked ingredients for our best customers</p>
                                        <p class="footer-blog-date">29 may 2015</p>
                                    </a>
                                </div>
                                <div class="footer-blog clearfix last">
                                    <a href="./blog_right_sidebar.html">
                                        <img src="img/thumb9.png" class="img-responsive footer-photo" alt="blog photos">
                                        <p class="footer-blog-text">Daily special foods that you will going to love</p>
                                        <p class="footer-blog-date">29 may 2015</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4  col-sm-6">
                                <h1>Reach us</h1>
                                <div class="footer-social-icons">
                                    <a href="http://www.facebook.com">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="http://www.twitter.com">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="http://plus.google.com">
                                        <i class="fa fa-google"></i>
                                    </a>
                                    <a href="http://www.youtube.com">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                    <a href="http://www.vimeo.com">
                                        <i class="fa fa-vimeo"></i>
                                    </a>
                                    <a href="http://www.pinterest.com">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                    <a href="http://www.linkedin.com">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                                <div class="footer-address">
                                    <p><i class="fa fa-map-marker"></i>28 Seventh Avenue, Neew York, 10014</p>
                                    <p><i class="fa fa-phone"></i>Phone: (415) 124-5678</p>
                                    <p><i class="fa fa-envelope-o"></i>support@restaurant.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer - Copyright -->
                    <div class="footer-copyrights">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><i class="fa fa-copyright"></i> 2015.Tomato.All rights reserved. Designed with <i class="fa fa-heart primary-color"></i> by Surjithctly</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div> 

        <!-- Javascript -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery.flexslider-min.js"></script>
        <script src="js/vendor/spectragram.js"></script>
        <script src="js/vendor/owl.carousel.min.js"></script>
        <script src="js/vendor/velocity.min.js"></script>
        <script src="js/vendor/velocity.ui.min.js"></script>
        <script src="js/vendor/bootstrap-datepicker.min.js"></script>
        <script src="js/vendor/bootstrap-clockpicker.min.js"></script>
        <script src="js/vendor/jquery.magnific-popup.min.js"></script>
        <script src="js/vendor/isotope.pkgd.min.js"></script>
        <script src="js/vendor/slick.min.js"></script>
        <script src="js/vendor/wow.min.js"></script>
        <script src="js/animation.js"></script>
        <script src="js/vendor/vegas/vegas.min.js"></script>
        <script src="js/vendor/jquery.mb.YTPlayer.js"></script>
        <script src="js/vendor/jquery.stellar.js"></script>

        <script src="js/vendor/mc/jquery.ketchup.all.min.js"></script>
        <script src="js/vendor/mc/main.js"></script>
        <script src="js/vendor/validate.js"></script>

        <!-- Main JS -->
        <script src="js/main.js"></script>

    </body>

    </html>

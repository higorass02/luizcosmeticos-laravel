<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>App Name - @yield('title')</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <header>
        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="{{Route('SiteHomePage.index')}}" class="logo">
                                <img src="./img/logo_luiz.png" alt="">
                            </a>
                        </div>

{{--                        @if (Route::has('login'))--}}
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
                                    <a href="{{ route('login.login') }}">Login</a>

{{--                                    @if (Route::has('register.register'))--}}
{{--                                        <a href="{{ route('register.register') }}">Register</a>--}}
{{--                                    @endif--}}
                                @endauth
                            </div>
{{--                        @endif--}}

                    </div>
                    <!-- /LOGO -->
                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->



                <ul class="main-nav nav navbar-nav">'
                    <li class="active"><a href="{{route('SiteHomePage.index')}}">Home</a></li>
                    <li class=""><a href="#ofertas">Ofertas</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->

        </div>
        <!-- /container -->
    </nav>
    @section('conteudo')

    @show
    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Nos Envio o seu E-Mail para receber as  <strong>NOVIDADES</strong></p>
                        <form>
                            <input class="input" type="email" placeholder="Entre com seu E-Mail">
                            <button class="newsletter-btn"><i class="fa fa-envelope"></i> Enviar</button>
                        </form>
                        <ul class="newsletter-follow">
                            <li><a target="_blank" href="#face"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="#twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="#instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a target="_blank" href="#pinterest"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Sobre Mim</h3>
                            <p>Trecho da Biografia! bla bla bla bla bla bla bla bla bla bla bla bla</p>
                            <ul class="footer-links">
                                <li><i class="fa fa-map-marker"></i>Localização Em Breve!</li>
                                <li><a href="#enviar-para-whats"><i class="fa fa-phone"></i>+55 (24) 9 9999-9999</a></li>
                                <li><i class="fa fa-envelope-o"></i>email@email.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Categorias</h3>
                            <ul class="footer-links">

                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <!--                <div class="col-md-3 col-xs-6">-->
                    <!--                    <div class="footer">-->
                    <!--                        <h3 class="footer-title">Information</h3>-->
                    <!--                        <ul class="footer-links">-->
                    <!--                            <li><a href="#">About Us</a></li>-->
                    <!--                            <li><a href="#">Contact Us</a></li>-->
                    <!--                            <li><a href="#">Privacy Policy</a></li>-->
                    <!--                            <li><a href="#">Orders and Returns</a></li>-->
                    <!--                            <li><a href="#">Terms & Conditions</a></li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                    <!--                </div>-->

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Serviços</h3>
                            <ul class="footer-links">
                                <li><a href="#">Catálago de Serviços</a></li>
                                <li><a href="#">Área de Atendimento</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->

        <!-- bottom footer -->
        <div id="bottom-footer" class="section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="footer-payments">
                            <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                            <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>-->
                            <!-- <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>-->
                            <!-- <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>-->
                        </ul>
                        <span class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os Direitos Reservados a EMPRESA
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </span>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>

    <div>
        @yield('js')
    </div>
</body>
</html>

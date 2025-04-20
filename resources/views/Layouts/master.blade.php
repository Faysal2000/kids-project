<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <title>{{ __('message.Little Astronauts') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower" rel="stylesheet">


    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body style="direction: {{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" data-spy="scroll"
    data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>








        <header class="site-navbar site-navbar-target" role="banner">

            <div class="container mb-3">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto">
                        <a href="/home">{{ __('message.Little Astronauts') }}<span class="text-primary">.</span></a>
                    </div>
                    <div class="site-quick-contact d-none d-lg-flex ml-auto ">


                    </div>
                </div>
            </div>


            <div class="container">
                <div class="menu-wrap d-flex align-items-center">
                    <span class="d-inline-block d-lg-none"><a href="#"
                            class="text-black site-menu-toggle js-menu-toggle py-5"><span
                                class="icon-menu h3 text-black"></span></a></span>



                    <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto ">
                            <li class="main_nav_item"><a href="/home">{{ __('message.home') }}</a></li>
                            <li class="main_nav_item"><a href="/about">{{ __('message.about') }}</a></li>
                            <li><a href="games" class="nav-link">{{ __('message.games') }}</a></li>
                            <li><a href="/contact" class="nav-link">{{ __('message.contact') }}</a></li>
                        </ul>
                    </nav>

                    <div class="top-social ml-auto">

                        <a href="https://www.linkedin.com/in/faysal-elbeg-715285223/" target="_blank"><span
                                class="icon-linkedin text-black"></span></a>
                        <a href="https://github.com/Faysal2000" target="_blank"><span
                                class="icon-github text-black   "></span></a>
                    </div>





                    <li><a class="dropdown-item" href="{{ url('locale/en') }}">English</a></li>
                    <li><a class="dropdown-item" href="{{ url('locale/ar') }}">العربية</a></li>
                    <li><a class="dropdown-item" href="{{ url('locale/tr') }}">Türkçe</a></li>










                </div>
            </div>






        </header>








        @yield('content')






        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="footer-heading mb-3">{{ __('message.about') }}</h2>
                        <p class="mb-5"> {{ __('message.about text2') }}</p>

                        <h2 class="footer-heading mb-4">{{ __('message.Newsletter') }}</h2>
                        <form action="#" class="d-flex" class="subscribe">
                            <input type="text" class="form-control mr-3" placeholder="{{ __('message.email') }}">
                            <input type="submit" value="{{ __('message.send') }}" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">

                            <div class="text-center col-lg-4">
                                <h2 class="footer-heading mb-4">Navigation</h2>
                                <ul class=" list-unstyled">
                                    <li><a href="/about">{{ __('message.about') }}</a></li>
                                    <li><a href="#">{{ __('message.Testimonials') }}</a></li>
                                    <li><a href="#">{{ __('message.Terms of Service') }}</a></li>
                                    <li><a href="#">{{ __('message.Privacy') }}</a></li>
                                    <li><a href="#">{{ __('message.Contact Us') }}</a></li>
                                </ul>

                            </div>



                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This project is made with <i
                                    class="icon-heart text-danger" aria-hidden="true"></i> | "AR Solar System"
                                Educational Project
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>


    <script>
        const btn = document.getElementById('languageButton');
        const menu = document.getElementById('languageMenu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        window.addEventListener('click', function(e) {
            if (!btn.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });
    </script>



</body>

</html>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
         <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Medical Supply</title>
        @include('partials.head')
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Colorbox css  -->
    <link rel="stylesheet" href="assets/css/colorbox.css" />
    <!-- Slider carousel css  -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css" />
    <!-- font Awesome-4.6.3 css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <!-- Main style css -->
    <link rel="stylesheet" href="assets/style.css" />
    <!-- shop css -->
    <link rel="stylesheet" href="assets/css/shop.css" />
    <!-- effects css -->
    <link rel="stylesheet" href="assets/css/components/effects.css">
    <!-- fancybox css -->
    <link rel="stylesheet" href="assets/css/sliders/stylesheet.css">
    <link rel="stylesheet" href="assets/css/components/jquery.fancybox.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    </head>
    <body>
            <!-- page loader start -->
        <div class="images-preloader">
            <div class="preloader4"></div>
        </div>
                <!-- page loader end -->
            <div class="wrapper">
                <div class="main-content scroll-none home-page ">
                        <header class="site-header header14 shadow">
                                 @include('partials.header')
                        </header>
                        <section class="home-slider">
                            <div id="slider">
                                <!-- revolution slider begin -->
                                @include('partials.slider')
                                <!-- revolution slider close -->
                            </div>
                        </section>
                         @include('auth.login')
                         
            <!-- portfolio project -->
                    <section class="row">
                        <div class="container" style="margin-top:20px;">
                            <h2 class="text-center title "><strong class="strong-red">Express </strong> <strong class="strong-green">Medical Depot</strong></h2>
                               <p class="text-heading text-center">Specializes in hospitals, doctors, dentists, pharmacies,</br>health clinics, and personal needs at wholesale prices.</p>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="content-container">
                                <div class="content-inner ">
                                    <div id="gallery" class="all-projects   projects-3">
                                        <div class="item css html5 ">
                                            <div class="project-box ">
                                                <div class="image-project">
                                                    <img src="assets/images/projects/1.jpg" alt="">
                                                    <div class="content">
                                                        <p> watch</p>
                                                        <span>Media</span>
                                                    </div>
                                                    <div class="overlay">
                                                        <a href="images/projects/1.jpg" class="zoomin">
                                                            <i class="fa fa-expand"></i>
                                                        </a>
                                                        <a href="projects-single.html" class="linkout">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item wordpress html5">
                                            <div class="project-box ">
                                                <div class="image-project">
                                                    <img src="assets/images/projects/4.jpg" alt="">
                                                    <div class="content">
                                                        <p>white shirt</p>
                                                        <span>clothing</span>
                                                    </div>
                                                    <div class="overlay">
                                                        <a href="images/projects/4.jpg" class="zoomin">
                                                            <i class="fa fa-expand"></i>
                                                        </a>
                                                        <a href="projects-single.html" class="linkout">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item css wordpress">
                                            <div class="project-box ">
                                                <div class="image-project">
                                                    <img src="assets/images/projects/3.jpg" alt="">
                                                    <div class="content">
                                                        <p>black watch</p>
                                                        <span>media</span>
                                                    </div>
                                                    <div class="overlay">
                                                        <a href="images/projects/3.jpg" class="zoomin">
                                                            <i class="fa fa-expand"></i>
                                                        </a>
                                                        <a href="projects-single.html" class="linkout">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item jquery design">
                                            <div class="project-box ">
                                                <div class="image-project">
                                                    <img src="assets/images/projects/2.jpg" alt="">
                                                    <div class="content">
                                                        <p>white imac</p>
                                                        <span>brand</span>
                                                    </div>
                                                    <div class="overlay">
                                                        <a href="images/projects/2.jpg" class="zoomin">
                                                            <i class="fa fa-expand"></i>
                                                        </a>
                                                        <a href="projects-single.html" class="linkout">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                        
                                        <div class="item jquery design">
                                            <div class="project-box ">
                                                <div class="image-project">
                                                    <img src="assets/images/projects/5.jpg" alt="">
                                                    <div class="content">
                                                        <p>white Headphones</p>
                                                        <span>brand</span>
                                                    </div>
                                                    <div class="overlay">
                                                        <a href="images/projects/5.jpg" class="zoomin">
                                                            <i class="fa fa-expand"></i>
                                                        </a>
                                                        <a href="projects-single.html" class="linkout">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item css jquery">
                                            <div class="project-box ">
                                                <div class="image-project">
                                                    <img src="assets/images/projects/6.jpg" alt="">
                                                    <div class="content">
                                                        <p>white iphone</p>
                                                        <span>brand</span>
                                                    </div>
                                                    <div class="overlay">
                                                        <a href="images/projects/6.jpg" class="zoomin">
                                                            <i class="fa fa-expand"></i>
                                                        </a>
                                                        <a href="projects-single.html" class="linkout">
                                                            <i class="fa fa-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                    </div>

                                </div>
                            </div>                            
                        </div>
                    </section>
                    <section class="shop-section paddtop-50 wow fadeInUp" data-wow-delay=".1s">
<div class="container">
    <div class="row">
        <h2 class="title"><strong class="strong-green"><i class="fa  fa-bookmark"></i> Featured</strong> Products</h2>
    </div>
</div>
<div class="container">
    <div class="row">
        <div id="top-slider" class="shop-owl">
            <div class="shop-item hover effect-10">
                <img src="assets/images/shop/11.jpg" alt="">
                <div class="new">
                    <p>New</p>
                </div>
                <div class="stars">
                    <ul class="list-unstyled">
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                    </ul>
                </div>
                <div class="info">
                    <h4><a href="">Dictum spsuming</a></h4>
                    <div class="price">
                        <span>$125.50</span>
                    </div>
                </div>
                <div class="cart-overlay">
                    <a class="info" href=""><i class="fa fa-shopping-cart"></i> Add to cart</a>
                    <p class="icon-links">
                        <a href="#"><span class="fa fa-shopping-cart"></span></a>
                        <a href="#"><span class="fa fa-heart"></span></a>
                        <a href="#"><span class="fa fa-search"></span></a>
                    </p>
                </div>
            </div>
            <div class="shop-item hover effect-10">
                <img src="assets/images/shop/12.jpg" alt="">
                <div class="new">
                    <p>New</p>
                </div>
                <div class="sale">
                    <p>Sale</p>
                </div>
                <div class="stars">
                    <ul class="list-unstyled">
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                    </ul>
                </div>
                <div class="info">
                    <h4><a href="">Aliquam lobortis</a></h4>
                    <div class="price">
                        <span>$37.00</span>
                    </div>
                </div>
                <div class="cart-overlay">
                    <a class="info" href=""><i class="fa fa-shopping-cart"></i> Add to cart</a>
                    <p class="icon-links">
                        <a href="#"><span class="fa fa-shopping-cart"></span></a>
                        <a href="#"><span class="fa fa-heart"></span></a>
                        <a href="#"><span class="fa fa-search"></span></a>
                    </p>
                </div>
            </div>
            <div class="shop-item hover effect-10">
                <img src="assets/images/shop/9.jpg" alt="">
                <div class="new">
                    <p>New</p>
                </div>
                <div class="sale">
                    <p>Sale</p>
                </div>
                <div class="stars">
                    <ul class="list-unstyled">
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                    </ul>
                </div>
                <div class="info">
                    <h4><a href="">Lectus egestas</a></h4>
                    <div class="price">
                        <span>$110.00</span>
                    </div>
                </div>
                <div class="cart-overlay">
                    <a class="info" href=""><i class="fa fa-shopping-cart"></i> Add to cart</a>
                    <p class="icon-links">
                        <a href="#"><span class="fa fa-shopping-cart"></span></a>
                        <a href="#"><span class="fa fa-heart"></span></a>
                        <a href="#"><span class="fa fa-search"></span></a>
                    </p>
                </div>
            </div>
            <div class="shop-item hover effect-10">
                <img src="assets/images/shop/10.jpg" alt="">
                <div class="new">
                    <p>New</p>
                </div>
                <div class="stars">
                    <ul class="list-unstyled">
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                    </ul>
                </div>
                <div class="info">
                    <h4><a href="">Peberkas tongue</a></h4>
                    <div class="price">
                        <span>$250.55</span>
                        <span class="old-price">$310.00</span>
                    </div>
                </div>
                <div class="cart-overlay">
                    <a class="info" href=""><i class="fa fa-shopping-cart"></i> Add to cart</a>
                    <p class="icon-links">
                        <a href="#"><span class="fa fa-shopping-cart"></span></a>
                        <a href="#"><span class="fa fa-heart"></span></a>
                        <a href="#"><span class="fa fa-search"></span></a>
                    </p>
                </div>
            </div>

            <div class="shop-item hover effect-10">
                <img src="assets/images/shop/3.jpg" alt="">
                <div class="new">
                    <p>New</p>
                </div>
                <div class="stars">
                    <ul class="list-unstyled">
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                        <li><a href=""><i class="fa fa-star"></i></a></li>
                    </ul>
                </div>
                <div class="info">
                    <h4><a href="">Peberkas tongue</a></h4>
                    <div class="price">
                        <span>$250.55</span>
                        <span class="old-price">$310.00</span>
                    </div>
                </div>
                <div class="cart-overlay">
                    <a class="info" href=""><i class="fa fa-shopping-cart"></i> Add to cart</a>
                    <p class="icon-links">
                        <a href="#"><span class="fa fa-shopping-cart"></span></a>
                        <a href="#"><span class="fa fa-heart"></span></a>
                        <a href="#"><span class="fa fa-search"></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
            </section>
            <section class="medical-our-Services">
                <div class="container">
                @include('partials.ourService')
                </div>
            </section>

            
                    
                    <footer>
                        @include('partials.footer')
                    </footer>
                </div>
            </div>
            
            @include('partials.routesScripts')
            <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script type="text/javascript">
        function getTimeRemaining(endtime) {
            var t = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
            };
        }

        function initializeClock(id, endtime) {
            var clock = document.getElementById(id);
            var daysSpan = clock.querySelector('.days');
            var hoursSpan = clock.querySelector('.hours');
            var minutesSpan = clock.querySelector('.minutes');
            var secondsSpan = clock.querySelector('.seconds');

            function updateClock() {
                var t = getTimeRemaining(endtime);

                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                if (t.total <= 0) {
                    clearInterval(timeinterval);
                }
            }

            updateClock();
            var timeinterval = setInterval(updateClock, 1000);
        }

        var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
        initializeClock('clockdiv', deadline);
    </script>
    <!-- Bootstrap js -->
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <!-- Carousel Slider js -->
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <!-- Jquery accordion  js -->
    <script type="text/javascript" src="assets/js/smk-accordion.js"></script>
    <script type="text/javascript" src="assets/js/visible.min.js"></script>
    <!-- counter up Requires js -->
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.easing.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <!-- Jquery progressbar js -->
    <script type="text/javascript" src="assets/js/pro-bars.js"></script>
    <script type="text/javascript" src="assets/js/classie.js"></script>
    <!-- wow animate js -->
    <script type="text/javascript" src="assets/js/wow.js"></script>
    <!-- Jquery about js -->
    <script type="text/javascript" src="assets/js/index-shop.js"></script>
    <!-- Jquery progressbar  js -->
    <script type="text/javascript" src="assets/js/progressbar.js"></script>
    <!-- Top Header fixed js -->
    <script type="text/javascript" src="assets/js/header-fixed.js"></script>
    </body>
</html>

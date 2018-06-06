






<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Baako - Multipurpose  HTML Template</title>
    <meta name="keywords" content="HTML5 Template , Responsive , html5 , css3" />
    <meta name="description" content="Baako - Responsive HTML5 CSS3 Template">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
    ================================================== -->
 @include('partials.head')
</head>

<body>
    <!-- page loader start -->
    <div class="images-preloader">
        <div class="preloader4"></div>
    </div>
    <!-- page loader end -->
    <div class="wrapper">
        <!-- header start -->
        <header class="site-header header11">
            @include('partials.header')
            @include('auth.login')
        </header>
        <!-- header End -->
        <!-- breadcrumbs start -->
        <div class="breadcrumbs">
            <div class="breadcrumbs-overlay"></div>
            <div class="page-title">
                <h2>About Us</h2>
                <p>Work is easy when you have all tools around you!</p>
            </div>
            <ul class="crumb">
                <li><i class="fa fa-home"></i></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i> Home</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>About Us</a></li>
            </ul>
        </div>
        <!-- breadcrumbs end -->
        <!-- main content start -->
        <div class="main-content">
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-container">
                                <div class="content-inner">
                                    <!-- our about-us -->
                                     <section class="about-us">
                                                <div class="container">
                                                   <div class="row">
                                                    <div class="col-md-6">
                                                        <h2>About Us</h2>
                                                        <p class="text-align">Medical Supplies are in high demand and our Products meet the needs of Healthcare Distributors and Clinicians by providing a quality,
                                                        cost efficient, competitive product offering comprised of multiple product categories.
                                                        All Products meet rigorous quality standards designed to assist in generating improved patient outcomes and patient satisfaction levels. 
                                                        Our products include but are not limited to include:.</p>
                                                        <ul>
                                                            <li><i class="fa fa-check-square-o"></i> Diagnostics</li>
                                                            <li><i class="fa fa-check-square-o"></i> Exam Room Equipment and Furniture</li>
                                                            <li><i class="fa fa-check-square-o"></i> Gloves</li>
                                                            <li><i class="fa fa-check-square-o"></i> Housekeeping/Janitorial</li>
                                                            <li><i class="fa fa-check-square-o"></i> Laboratory</li>
                                                            <li><i class="fa fa-check-square-o"></i> Orthopedic/Physical Therapy</li>
                                                            <li><i class="fa fa-check-square-o"></i> Patient Care Supplies</li>
                                                            <li><i class="fa fa-check-square-o"></i> Skin and Wound Care</li>
                                                            <li><i class="fa fa-check-square-o"></i> Sterilization and Infection Control</li>
                                                            <li><i class="fa fa-check-square-o"></i> Surgery Products</i>
                                                            <li><i class="fa fa-check-square-o"></i> Surgical Instruments</i>
                                                        </ul>
                                                    </div>
        
                                                    <div class="col-md-6">
                                                        <div id="about_me" class="testi-slider testi-dark text-center">
                                                            <img src="assets/imagesMedical/about1.jpg" alt="">
                                                            <img src="assets/imagesMedical/about2.jpg" alt="">
                                                        </div>
                                                    </div>
        
                                                   </div>
                                                </div>
                                            </section>

                                    <!-- our team -->
                                    <!--<section class="our-team-3">-->
                                    <!--    <h3>Our <strong>Team</strong></h3>-->
                                    <!--    <div class="container">-->
                                    <!--       <div class="row">-->
                                    <!--        <div class="col-md-3">-->
                                    <!--            <div class="team-member">-->
                                    <!--                <img src="images/about_us/team/team-member-4.jpg" alt="">-->
                                    <!--                <h4>Jane Doe</h4>-->
                                    <!--                <span>CEO</span>-->
                                    <!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->

                                    <!--                <div class="social-content">-->
                                    <!--                    <ul>-->
                                    <!--                        <li><a href=""><i class="fa fa-facebook"></i></a></li>-->
                                    <!--                        <li><a href=""><i class="fa fa-twitter"></i></a></li>-->
                                    <!--                        <li><a href=""><i class="fa fa-google"></i></a></li>-->
                                    <!--                    </ul>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->

                                    <!--        <div class="col-md-3">-->
                                    <!--            <div class="team-member">-->
                                    <!--                <img src="images/about_us/team/team-member-5.jpg" alt="">-->
                                    <!--                <h4>Janaton Doe</h4>-->
                                    <!--                <span>CEO</span>-->
                                    <!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->

                                    <!--                <div class="social-content">-->
                                    <!--                    <ul>-->
                                    <!--                        <li><a href=""><i class="fa fa-facebook"></i></a></li>-->
                                    <!--                        <li><a href=""><i class="fa fa-twitter"></i></a></li>-->
                                    <!--                        <li><a href=""><i class="fa fa-google"></i></a></li>-->
                                    <!--                    </ul>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->

                                    <!--        <div class="col-md-3">-->
                                    <!--            <div class="team-member">-->
                                    <!--                <img src="images/about_us/team/team-member-6.jpg" alt="">-->
                                    <!--                <h4>John Doe</h4>-->
                                    <!--                <span>CEO</span>-->
                                    <!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->

                                    <!--                <div class="social-content">-->
                                    <!--                    <ul>-->
                                    <!--                        <li><a href=""><i class="fa fa-facebook"></i></a></li>-->
                                    <!--                        <li><a href=""><i class="fa fa-twitter"></i></a></li>-->
                                    <!--                        <li><a href=""><i class="fa fa-google"></i></a></li>-->
                                    <!--                    </ul>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->

                                    <!--        <div class="col-md-3">-->
                                    <!--            <div class="team-member">-->
                                    <!--                <img src="images/about_us/team/team-member-7.jpg" alt="">-->
                                    <!--                <h4>Jason Doe</h4>-->
                                    <!--                <span>CEO</span>-->
                                    <!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->

                                    <!--                <div class="social-content">-->
                                    <!--                    <ul>-->
                                    <!--                        <li><a href=""><i class="fa fa-facebook"></i></a></li>-->
                                    <!--                        <li><a href=""><i class="fa fa-twitter"></i></a></li>-->
                                    <!--                        <li><a href=""><i class="fa fa-google"></i></a></li>-->
                                    <!--                    </ul>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->

                                    <!--       </div>-->
                                    <!--    </div>-->
                                    <!--</section>-->
                                    <!-- fun-fact -->
                                    <!--<section class="fun-fact bg-grey padd-65">-->
                                    <!--    <div class="container">-->
                                    <!--        <div class="row">-->
                                    <!--            <div class="col-md-3 col-sm-6">-->
                                    <!--                <div class="fact-box bottom-20">-->
                                    <!--                    <i class="fa fa-user"></i>-->
                                    <!--                    <div class="num-fact grey counter-skills">512</div>-->
                                    <!--                    <p class="grey">Happy Clients</p>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="col-md-3 col-sm-6">-->
                                    <!--                <div class="fact-box bottom-20">-->
                                    <!--                    <i class="fa fa-desktop"></i>-->
                                    <!--                    <div class="num-fact grey counter-skills">256</div>-->
                                    <!--                    <p class="grey">Premade HomePages</p>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="col-md-3 col-sm-6">-->
                                    <!--                <div class="fact-box">-->
                                    <!--                    <i class="fa fa-home"></i>-->
                                    <!--                    <div class="num-fact grey counter-skills">128</div>-->
                                    <!--                    <p class="grey">Answered Tickets</p>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="col-md-3 col-sm-6">-->
                                    <!--                <div class="fact-box">-->
                                    <!--                    <i class="fa fa-clock-o"></i>-->
                                    <!--                    <div class="num-fact grey counter-skills">64</div>-->
                                    <!--                    <p class="grey">Development Hours</p>-->
                                    <!--                </div>-->
                                    <!--            </div>                        -->
                                                
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</section>-->
                                    <!-- End fun-fact -->
                                    <!-- testimonials start -->
                                    <section class="wesay-light bot-50">
                                        <div class="container">
                                            @include('partials.testimonialsClients')
                                        </div>
                                    </section>
                                    <!-- testimonials End -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- call to action start -->
        <!--<section class="callto-action bg-color2 padding">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-md-12">-->
        <!--                <div class="call-action">-->
        <!--                    <div class="text">-->
        <!--                        <h3>Baako is a <strong>unique & multipurpose</strong> template</h3>-->
        <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod-->
        <!--                        tempor incididunt ut magna aliqua.</p>-->
        <!--                    </div>-->
        <!--                    <a href="#" class="btn btn-dark-blue">Purchase Now !</a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!-- call to action end -->
        <!-- footer start -->
        <footer>
            @include('partials.footer')
        </footer>
        <!-- footer end -->
    </div>
    <!-- Jquery -->
@include('partials.routesScripts')


</body>

</html>

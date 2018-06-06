<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Contact</title>
    <meta name="keywords" content="HTML5 Template , Responsive , html5 , css3" />
    <meta name="description" content="Baako - Responsive HTML5 CSS3 Template">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
    ================================================== -->
    
    <!-- Bootstrap-3.3.7 fremwork css -->
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
        </header>
        <!-- header End -->
        <!-- Breadcrumbs start -->
        <div class="breadcrumbs2">
            <div class="breadcrumbs2-overlay"></div>
            <div class="page-title">
                <h2>Contacts</h2>
                <p></p>
            </div>
            <ul class="crumb">
                <li><i class="fa fa-home"></i></li>
                <li><a href="index.html"><i class="fa fa-angle-double-right"></i> Home</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Contacts</a></li>
            </ul>
        </div>
        <!-- Breadcrumbs end -->
        <div class="main-content">
            <div class="page-content">
                <!-- container start -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-container">
                                <div class="content-inner">
                                      @include('partials.login')
                                    <section>
                                        <div id="google_map"></div>
                                    </section>
                                    <section>
                                        <div class="container">
                                            <div class="col-md-6 padding">
                                                <h4 class="h4-color">Get in Touch</h4>
                                                <p class="paddtop-20">We are here every day to assist you. Call or Email us now for fast support!.</p>

                                                <h4 class="h4-color">The Office</h4>
                                                <ul class="none-style work-time">
                                                    <li><i class="fa fa-phone"></i> <strong>Phone:</strong> +1 (833) 9SUPPLY  -  (833) 978-7759</li>
                                                    <li><i class="fa fa fa-envelope"></i> <strong>Email:</strong> sales@medical-supply.us</li>
                                                    <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 7045 NW 46th St. Miami, FL 33166</li>
                                                </ul>

                                                <h4 class="h4-color">Business Hours</h4>
                                                <ul class="none-style work-time">
                                                    <li><i class="fa fa-clock-o bg-clear"></i> Monday - Friday - 9am to 5pm</li>
                                                    <li><i class="fa fa-clock-o bg-clear"></i> Saturday - 9am to 2pm</li>
                                                    <li><i class="fa fa-clock-o bg-clear"></i> Sunday - Closed</li>
                                                </ul>

                                            </div>

                                            <div class="col-md-6 padding c-form">
                                                <h2 class="pri-color">CONTACT US</h2>
                                                <form action="#" method="post" class="comment-form contact-form" id="ajax-form" novalidate="">
                                                    <label>Your name *</label>       
                                                    <p class="comment-form-author">
                                                        <input id="name" name="name" type="text" value="" placeholder="">
                                                        <span class="error" id="err-name">please enter name</span>
                                                    </p>
                                                    <label>Your email address *</label> 
                                                    <p class="comment-form-email">
                                                        <input id="email" name="email" type="email" value="" placeholder="">
                                                        <span class="error" id="err-email">please enter e-mail</span>
                                                        <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                                    </p>
                                                    <label>Subject *</label> 
                                                    <p class="comment-form-site"><input id="site" name="site" type="text" value="" placeholder=""></p>
                                                    <label>Message *</label> 
                                                    <p class="comment-form-comment"><textarea id="comment" name="comment" placeholder=""></textarea></p>
                                                    <div class="error text-align-center" id="err-form">There was a problem validating the form please check!</div>
                                                    <div class="error text-align-center" id="err-timedout">The connection to the server timed out!</div>
                                                    <div class="error" id="err-state"></div>
                                                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit btn btn-color" value="SEND MESSAGE"></p>              
                                                </form>
                                                <div id="ajaxsuccess">Successfully sent!!</div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!-- container end -->
            </div>
        </div>
        <!-- main content end -->
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
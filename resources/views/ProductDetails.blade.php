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
 
    <!-- shop css -->
    <link rel="stylesheet" href="css/shop.css" />
    @include('partials.head')
    <!-- Favicons
    ================================================== -->
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
        <!--<div class="breadcrumbs">-->
        <!--    <div class="breadcrumbs-overlay"></div>-->
        <!--    <div class="page-title">-->
        <!--        <h2>Single Product</h2>-->
        <!--        <p>Work is easy when you have all tools around you!</p>-->
        <!--    </div>-->
        <!--    <ul class="crumb">-->
        <!--        <li><i class="fa fa-home"></i></li>-->
        <!--        <li><a href="index.html"><i class="fa fa-angle-double-right"></i> Home</a></li>-->
        <!--        <li><a href=""><i class="fa fa-angle-double-right"></i>Shop</a></li>-->
        <!--        <li><a href=""><i class="fa fa-angle-double-right"></i>Single Product</a></li>-->
        <!--    </ul>-->
        <!--</div>-->
        <!-- Breadcrumbs end -->
        <!-- Main start -->
        <div class="main-content">
        
            <div class="page-content page-sidebar">
                <div class="container" style="margin-top:8em;">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="content-container">
                                <div class="content-inner">
                                    <div class="padding">
                                        <div class="pro-details">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    
                                                    <div id="img-preview" class="img-product">
                                                    @foreach($itemdetails['Items']['Item']['ImageSets']['ImageSet'] as $image)
                                                        <img src="{{$image['LargeImage']['URL']}}" alt="">
                                                       
                                                    @endforeach
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <h3>{{ $itemdetails['Items']['Item']['ItemAttributes']['Title']}}</h3>
                                                    <div class="single-rating">
                                                        <!--<spa>n>-->
                                                        <!--    <i class="fa fa-star"></i>-->
                                                        <!--    <i class="fa fa-star"></i>-->
                                                        <!--    <i class="fa fa-star"></i>-->
                                                        <!--    <i class="fa fa-star"></i>-->
                                                        <!--    <i class="fa fa-star-o"></i>-->
                                                        <!--</span-->

                                                        <p>Availability: <span>In stock</span></p>
                                                        
                                                       
                                                        <p class="single-price">{{ $itemdetails['Items']['Item']['ItemAttributes']['ListPrice']['FormattedPrice']}}</p>
                                                        <div class="product-cart">
                                                            <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                                                            <button type="submit" class="btn btn-color2">Add to cart</button>
                                                            
                                                        </div>
                                                        <div class="cat">
                                                            Categories:
                                                            <a href="#">{{ $itemdetails['Items']['Item']['ItemAttributes']['Binding']}}</a>
                                                        </div>
                                                        <!--<div class="follow-us">-->
                                                        <!--    <ul>-->
                                                        <!--        <li>-->
                                                        <!--            <p>Follow us:</p>-->
                                                        <!--        </li>-->
                                                        <!--        <li><i class="fa fa-facebook"></i></li>-->
                                                        <!--        <li><i class="fa fa-twitter"></i></li>-->
                                                        <!--        <li><i class="fa fa-google"></i></li>-->
                                                        <!--    </ul>-->
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-meta">
                                                <div id="tabs-default" class="tabs-default">
                                                    <ul class="title-tabs none-style">
                                                        <li><a href="#tab13"> Description </a></li>
                                                      
                                                    </ul>
                                                    <div class="content-tabs">
                                                        <div id="tab13">
                                                            @foreach($itemdetails['Items']['Item']['ItemAttributes']['Feature'] as $features)
                                                            <p>{{$features}}</p>
                                                            @endforeach
                                                        </div>
                                                        <!--<div id="tab23">-->
                                                        <!--    <div class="comment-list">-->
                                                        <!--        <h4>2 COMMENTS</h4>-->
                                                        <!--        <div class="comment-item">-->
                                                        <!--            <img src="images/faces/thum100/5.jpg" alt="">-->
                                                        <!--            <div class="box-info">-->
                                                        <!--                <div class="meta">-->
                                                        <!--                    <strong>Timothy Guzman</strong> - Feb 25, 2016-->
                                                        <!--                    <div class="rating">-->
                                                        <!--                        <i class="fa fa-star"></i>-->
                                                        <!--                        <i class="fa fa-star"></i>-->
                                                        <!--                        <i class="fa fa-star"></i>-->
                                                        <!--                        <i class="fa fa-star"></i>-->
                                                        <!--                        <i class="fa fa-star"></i>-->
                                                        <!--                    </div>-->
                                                        <!--                </div>-->
                                                        <!--                <div class="text">-->
                                                        <!--                    <p>Great product!</p>-->
                                                        <!--                </div>-->
                                                        <!--            </div>-->
                                                        <!--        </div>-->
                                                        <!--        <div class="comment-item">-->
                                                        <!--            <img src="images/faces/thum100/3.jpg" alt="">-->
                                                        <!--            <div class="box-info">-->
                                                        <!--                <div class="meta">-->
                                                        <!--                    <strong>Alice e. Somerville</strong> - Jul 12, 2016-->
                                                        <!--                    <div class="rating">-->
                                                        <!--                        <i class="fa fa-star"></i>-->
                                                        <!--                        <i class="fa fa-star"></i>-->
                                                        <!--                        <i class="fa fa-star"></i>-->
                                                        <!--                        <i class="fa fa-star"></i>-->
                                                        <!--                        <i class="fa fa-star-o"></i>-->
                                                        <!--                    </div>-->
                                                        <!--                </div>-->
                                                        <!--                <div class="text">-->
                                                        <!--                    <p>Great product!</p>-->
                                                        <!--                </div>-->
                                                        <!--            </div>-->
                                                        <!--        </div>-->
                                                        <!--    </div>-->
                                                        <!--    <div class="review">-->
                                                        <!--        <h4>YOUR REVIEW</h4>-->
                                                        <!--        <div class="rating">-->
                                                        <!--            <i class="fa fa-star-o"></i>-->
                                                        <!--            <i class="fa fa-star-o"></i>-->
                                                        <!--            <i class="fa fa-star-o"></i>-->
                                                        <!--            <i class="fa fa-star-o"></i>-->
                                                        <!--            <i class="fa fa-star-o"></i>-->
                                                        <!--        </div>-->
                                                        <!--        <form action="#" class="comment-form">-->
                                                        <!--            <div class="row-comment">-->
                                                        <!--                <p class="col-6 comment-form-author">-->
                                                        <!--                    <input id="author" name="author" type="text" value="" placeholder="your name">-->
                                                        <!--                </p>-->
                                                        <!--                <p class="col-6 comment-form-email">-->
                                                        <!--                    <input id="email" name="email" type="email" value="" placeholder="your email">-->
                                                        <!--                </p>-->
                                                        <!--            </div>-->
                                                        <!--            <p class="comment-form-comment">-->
                                                        <!--                <textarea id="comment" name="comment" placeholder="your review..."></textarea>-->
                                                        <!--            </p>-->
                                                        <!--            <p class="form-submit">-->
                                                        <!--                <input name="submit" type="submit" id="submit" class="submit btn btn-color" value="submit">-->
                                                        <!--            </p>-->
                                                        <!--        </form>-->
                                                        <!--    </div>-->
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Related product  start -->
                                        <div class="pro-related">
                                            <h4>RELATED PRODUCTS</h4>
                                            <div id="product-owl" class="pro-slider">
                                                <div class="item-product">
                                                    <div class="product-thumb">
                                                        <div class="midd">
                                                            <a href="product.html"><img src="images/shop/3.jpg" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="info-product">
                                                        <h4>
                                                            <a href="product.html">Washing Machine</a>
                                                        </h4>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <p class="price">$230</p>
                                                        <div class="add-cart">
                                                            <a href="#" class="related-btn">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-product">
                                                    <div class="product-thumb">
                                                        <div class="midd">
                                                            <a href="product.html"><img src="images/shop/4.jpg" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="info-product">
                                                        <h4>
                                                            <a href="product.html">Bag</a>
                                                        </h4>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <p class="price">$140</p>
                                                        <div class="add-cart">
                                                            <a href="#" class="related-btn">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-product">
                                                    <div class="product-thumb">
                                                        <div class="midd">
                                                            <a href="product.html"><img src="images/shop/5.jpg" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="info-product">
                                                        <h4>
                                                            <a href="product.html">Sony phone</a>
                                                        </h4>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <p class="price">$130</p>
                                                        <div class="add-cart">
                                                            <a href="#" class="related-btn">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-product">
                                                    <div class="product-thumb">
                                                        <div class="midd">
                                                            <a href="product.html"><img src="images/shop/6.jpg" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="info-product">
                                                        <h4>
                                                            <a href="product.html">iphone 7</a>
                                                        </h4>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <p class="price">$170</p>
                                                        <div class="add-cart">
                                                            <a href="#" class="related-btn">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-product">
                                                    <div class="product-thumb">
                                                        <div class="midd">
                                                            <a href="product.html"><img src="images/shop/1.jpg" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="info-product">
                                                        <h4>
                                                            <a href="product.html">Black camera</a>
                                                        </h4>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <p class="price">$170</p>
                                                        <div class="add-cart">
                                                            <a href="#" class="related-btn">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main end -->
        <!-- Footer start -->
        <footer>
            <div class="content-widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget widget">
                                <img src="images/logo-light.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <ul class="contact">
                                    <li>
                                        <i class="fa fa-map-marker"></i> 1234 Street Name, United States
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i> (526) 236-895-4782
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i> mail@example.com
                                    </li>
                                </ul>
                                <div class="social-media">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget widget">
                                <h4>Popular Tags</h4>
                                <div class="tagcloud">
                                    <a href="#">Design</a>
                                    <a href="#">Tips</a>
                                    <a href="#">Interior</a>
                                    <a href="#">Doors</a>
                                    <a href="#">Audio</a>
                                </div>
                                <h4>Gallery</h4>
                                <div class="footer-gallery">
                                    <img src="images/blog/thumbs50x50/1.jpg" alt="">
                                    <img src="images/blog/thumbs50x50/2.jpg" alt="">
                                    <img src="images/blog/thumbs50x50/3.jpg" alt="">
                                    <img src="images/blog/thumbs50x50/4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget widget">
                                <h4>Recent Posts</h4>
                                <ul class="recent-post">
                                    <li>
                                        <a class="thumb" href="blog-post.html"><img src="images/blog/thumbs60x60/2.jpg" alt=""></a>
                                        <div class="right-post">
                                            <a href="blog-post.html">Nullam Massa Turpis...</a>
                                            <p><i class="fa fa-clock-o"></i> Oct 3,2016</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="thumb" href="blog-post.html"><img src="images/blog/thumbs60x60/3.jpg" alt=""></a>
                                        <div class="right-post">
                                            <a href="blog-post.html">Malesuada Lacinia...</a>
                                            <p><i class="fa fa-clock-o"></i> Aug 3,2016</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="thumb" href="blog-post.html"><img src="images/blog/thumbs60x60/1.jpg" alt=""></a>
                                        <div class="right-post">
                                            <a href="blog-post.html">Quis Dictum Nulla...</a>
                                            <p><i class="fa fa-clock-o"></i> Dec 3,2016</p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="" class="btn-readmore">Read More <i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget widget">
                                <h4>Send Us Message</h4>
                                <form action="#" method="post" class="footer-form" id="" novalidate="">
                                    <input id="name" name="name" type="text" value="" placeholder="name *">
                                    <input id="email" name="email" type="email" value="" placeholder="email *">
                                    <textarea id="comment" name="comment" placeholder="Message *"></textarea>
                                    <a href="" class="btn login-btn">Send Us</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <p>&copy; Copyright 2017. All Rights Reserved.</p>
                        </div>
                        <div class="col-md-3">
                            <p class="back-top"><a href="#" id="to-top">BACK TO TOP <i class="fa fa-angle-up"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer end -->
    </div>
    
    <!-- Jquery -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <!-- Jquery tabs js -->
    <script type="text/javascript" src="assets/js/jquery.responsiveTabs.js"></script>
    <!-- Jquery carousel slider js -->
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/classie.js"></script>
    <!-- Template projects JS -->
    <script type="text/javascript" src="assets/js/custom-product.js"></script>
    <!-- header fixed js -->
    <script type="text/javascript" src="assets/js/header-fixed.js"></script>

</body>

</html>

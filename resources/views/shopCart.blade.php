<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Cart</title>
    <meta name="keywords" content="HTML5 Template , Responsive , html5 , css3" />
    <meta name="description" content="Baako - Responsive HTML5 CSS3 Template">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
    ================================================== -->
    <!-- Bootstrap-3.3.7 fremwork css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <!-- Slider carousel css  -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css"/>
    <!-- font Awesome-4.6.3 css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
    <!-- shop css -->
    <link rel="stylesheet" href="assets/css/shop.css"/>
    <!-- Main style css -->
    <link rel="stylesheet" href="assets/style.css"/>
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

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
        <!--        <h2>Shoping Cart</h2>-->
        <!--        <p>Work is easy when you have all tools around you!</p>-->
        <!--    </div>-->
        <!--    <ul class="crumb">-->
        <!--        <li><i class="fa fa-home"></i></li>-->
        <!--        <li><a href="index.html"><i class="fa fa-angle-double-right"></i> Home</a></li>-->
        <!--        <li><a href=""><i class="fa fa-angle-double-right"></i>Shop</a></li>-->
        <!--        <li><a href=""><i class="fa fa-angle-double-right"></i>Shoping Cart</a></li>-->
        <!--    </ul>-->
        <!--</div>-->
        <!-- Breadcrumbs end -->
        <div class="main-content">
            <div class="page-content page-sidebar">
                <div class="container"  style="margin-top:6em">
                    <div class="row">
                        @include('auth.login')
                        <div class="col-md-7 col-lg-8">
                            <div class="content-container">
                                <div class="title-page">
                                    <h2>Shopping Cart</h2>
                                </div>
                                <div class="content-inner">
                                    <div class="padding">
                                        <p class="font-10">YOU HAVE <strong>3</strong> ITEMS IN YOUR SHOPPING CART</p>
                                        <table class="shop-cart">
                                            <tr>
                                                <th>PRODUCT</th>
                                                <th>QUANTITY</th>
                                                <th>PRICE</th>
                                                <th>TOTAL</th>
                                            </tr>
                                            <tr>
                                                <td class="long">
                                                    <img src="assets/images/shop/1.jpg" alt="">
                                                    <h4><a href="#">Biker Jacket</a></h4>
                                                    <a href="#">REMOVE</a>
                                                </td>
                                                <td>
                                                    <input type="number" value="1" />
                                                </td>
                                                <td>
                                                    $39.00
                                                </td>
                                                <td class="total">
                                                    $39.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="long">
                                                    <img src="assets/images/shop/2.jpg" alt="">
                                                    <h4><a href="#">Biker Coat</a></h4>
                                                    <a href="#">REMOVE</a>
                                                </td>
                                                <td>
                                                    <input type="number" value="1" />
                                                </td>
                                                <td>
                                                    $99.00
                                                </td>
                                                <td class="total">
                                                    $99.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="long">
                                                    <img src="assets/images/shop/3.jpg" alt="">
                                                    <h4><a href="#">Biker Coat Black</a></h4>
                                                    <a href="#">REMOVE</a>
                                                </td>
                                                <td>
                                                    <input type="number" value="2" />
                                                </td>
                                                <td>
                                                    $60.00
                                                </td>
                                                <td class="total">
                                                    $120.00
                                                </td>
                                            </tr>
                                            <!--<tr>-->
                                            <!--    <td colspan="6">-->
                                            <!--        <div class="coupon">-->
                                            <!--            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="COUPON CODE"> <input type="submit" class="btn btn-color" name="apply_coupon" value="Apply Coupon">-->
                                            <!--        </div>-->
                                            <!--    </td>-->
                                            <!--</tr>-->
                                        </table>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4">
                                <div class="widget">
                                   <div class="total-cart "style="margin-top:13em">
                                            <h4>TOTALS</h4>
                                            <form accept="#">
                                                <table class="fully">
                                                    <tr>
                                                        <td>Cart subtotal:</td>
                                                        <td class="total">$484.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping:</td>
                                                        <td class="total">FREE</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Order total:</td>
                                                        <td class="total color">$484.00</td>
                                                    </tr>
                                                </table>
                                                <div class="btns-bot">
                                                    <a href="#" class="btn btn-dark">UPDATE CART</a>
                                                    <a href="#" class="btn btn-color">PROCEED TO CHECKOUT</a>
                                                </div>
                                            </form>
                                        </div>
                                </div>
                                <!--<div class="widget">-->
                                <!--    <h4>Popular Tags</h4>-->
                                <!--    <div class="tags">-->
                                <!--        <a href="">span</a>-->
                                <!--        <a href="">business</a>-->
                                <!--        <a href="">food</a>-->
                                <!--        <a href="">fashion</a>-->
                                <!--        <a href="">finance</a>-->
                                <!--        <a href="">culture</a>-->
                                <!--        <a href="">health</a>-->
                                <!--        <a href="">sports</a>-->
                                <!--        <a href="">life style</a>-->
                                <!--        <a href="">books</a>-->
                                <!--    </div>-->
                                <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div><!-- container end -->
            </div><!-- page content end -->
        </div><!-- main content end -->
        <!-- footer start -->
        <footer>
            @include('partials.footer')
        </footer>
        <!-- End: footer -->
    </div>
    <!-- Jquery -->
    @include('partials.routesScripts')

</body>
</html>
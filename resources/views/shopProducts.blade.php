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
    <title>Products</title>
    <meta name="keywords" content="HTML5 Template , Responsive , html5 , css3" />
    <meta name="description" content="">
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
        <div class="breadcrumbsshop breadcrumbs">
            <div class="breadcrumbsshop-overlay"></div>
            <div class="page-title">
                <h2>4 column</h2>
                <p>Work is easy when you have all tools around you!</p>
            </div>
            <ul class="crumb">
                <li><i class="fa fa-home"></i></li>
                <li><a href="index.html"><i class="fa fa-angle-double-right"></i> Home</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Shop</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Shop Right Sidebar</a></li>
            </ul>
        </div>
      
        <!-- Breadcrumbs end -->
        <div class="main-content">
            <div class="page-content page-sidebar">
                <div class="container">
                    <div class="row">
                        @include('partials.login')
                        <div class="col-md-8 col-lg-9">
                            <div class="row">
                               
                      
                             
                             
                               @foreach($items as $product)
            
                               
                                <div class="col-md-3">
                                    <div class="item-product first">
                                        <div class="product-thumb">
                                            <div class="midd">
                                                <a href="product.html">
                                                    <img src="images/shop/1.jpg" alt="">{{$product}}</a>
                                                <div class="n-content">
                                                    <p>New</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-product">
                                            <h4><a href="product.html"></a></h4>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <p class="price">500</p>
                                            <div class="add-cart">
                                                <a href="#" class="shop-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                                     <!--<div class="col-md-3">-->
                                <!--    <div class="item-product">-->
                                <!--        <div class="product-thumb">-->
                                <!--            <div class="midd">-->
                                <!--                <a href="product.html"><img src="images/shop/2.jpg" alt=""></a>-->
                                <!--                <div class="n-content">-->
                                <!--                    <p>New</p>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="info-product">-->
                                <!--            <h4><a href="product.html">Aliquam lobortis</a></h4>-->
                                <!--            <div class="rating">-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--            </div>-->
                                <!--            <p class="price">$200</p>-->
                                <!--            <div class="add-cart">-->
                                <!--                <a href="#" class="shop-btn">Add to Cart</a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="col-md-3">-->
                                <!--    <div class="item-product">-->
                                <!--        <div class="product-thumb">-->
                                <!--            <div class="midd">-->
                                <!--                <a href="product.html"><img src="images/shop/3.jpg" alt=""></a>-->
                                <!--                <div class="n-content">-->
                                <!--                    <p>New</p>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="info-product">-->
                                <!--            <h4><a href="product.html">Peberkas tongue</a></h4>-->
                                <!--            <div class="rating">-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--            </div>-->
                                <!--            <p class="price">$200</p>-->
                                <!--            <div class="add-cart">-->
                                <!--                <a href="#" class="shop-btn">Add to Cart</a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="col-md-3">-->
                                <!--    <div class="item-product first">-->
                                <!--        <div class="product-thumb">-->
                                <!--            <div class="midd">-->
                                <!--                <a href="product.html"><img src="images/shop/5.jpg" alt=""></a>-->
                                <!--                <div class="n-content">-->
                                <!--                    <p>New</p>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="info-product">-->
                                <!--            <h4><a href="product.html">Porta tenderloin</a></h4>-->
                                <!--            <div class="rating">-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star-o"></i>-->
                                <!--                <i class="fa fa-star-o"></i>-->
                                <!--            </div>-->
                                <!--            <p class="price">$140</p>-->
                                <!--            <div class="add-cart">-->
                                <!--                <a href="#" class="shop-btn">Add to Cart</a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="col-md-3">-->
                                <!--    <div class="item-product">-->
                                <!--        <div class="product-thumb">-->
                                <!--            <div class="midd">-->
                                <!--                <a href="product.html"><img src="images/shop/4.jpg" alt=""></a>-->
                                <!--                <div class="n-content">-->
                                <!--                    <p>New</p>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="info-product">-->
                                <!--            <h4><a href="product.html">Lectus egestas</a></h4>-->
                                <!--            <div class="rating">-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star-half-o"></i>-->
                                <!--            </div>-->
                                <!--            <p class="price">$230</p>-->
                                <!--            <div class="add-cart">-->
                                <!--                <a href="#" class="shop-btn">Add to Cart</a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="col-md-3">-->
                                <!--    <div class="item-product">-->
                                <!--        <div class="product-thumb">-->
                                <!--            <div class="midd">-->
                                <!--                <a href="product.html"><img src="images/shop/6.jpg" alt=""></a>-->
                                <!--                <div class="n-content">-->
                                <!--                    <p>New</p>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="info-product">-->
                                <!--            <h4><a href="product.html">Cenean congue</a></h4>-->
                                <!--            <div class="rating">-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--            </div>-->
                                <!--            <p class="price">$170</p>-->
                                <!--            <div class="add-cart">-->
                                <!--                <a href="#" class="shop-btn">Add to Cart</a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="col-md-3">-->
                                <!--    <div class="item-product">-->
                                <!--        <div class="product-thumb">-->
                                <!--            <div class="midd">-->
                                <!--                <a href="product.html"><img src="images/shop/6.jpg" alt=""></a>-->
                                <!--                <div class="n-content">-->
                                <!--                    <p>New</p>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="info-product">-->
                                <!--            <h4><a href="product.html">Cenean congue</a></h4>-->
                                <!--            <div class="rating">-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--            </div>-->
                                <!--            <p class="price">$170</p>-->
                                <!--            <div class="add-cart">-->
                                <!--                <a href="#" class="shop-btn">Add to Cart</a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="col-md-3">-->
                                <!--    <div class="item-product">-->
                                <!--        <div class="product-thumb">-->
                                <!--            <div class="midd">-->
                                <!--                <a href="product.html"><img src="images/shop/6.jpg" alt=""></a>-->
                                <!--                <div class="n-content">-->
                                <!--                    <p>New</p>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="info-product">-->
                                <!--            <h4><a href="product.html">Cenean congue</a></h4>-->
                                <!--            <div class="rating">-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--            </div>-->
                                <!--            <p class="price">$170</p>-->
                                <!--            <div class="add-cart">-->
                                <!--                <a href="#" class="shop-btn">Add to Cart</a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <ul class="pagination">
                                    <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                          
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="sidebar">
                                <div class="widget widget_search">
                                    <form method="get" class="search-form input-group" action="#">
                                        <input class="form-control" type="text" value="" name="s" id="s" placeholder="type to search...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                        </span>
                                    </form>
                                </div>
                                <div class="widget">
                                    <h4>Top Rated Products</h4>
                                    <div class="sidebar-products">
                                        <img src="images/shop/2.jpg" alt="">
                                        <h3><a href="">Photo Camera</a></h3>
                                        <span>$300</span>
                                    </div>
                                    <div class="sidebar-products">
                                        <img src="images/shop/3.jpg" alt="">
                                        <h3><a href="">Photo Camera</a></h3>
                                        <span>$250</span>
                                    </div>
                                    <div class="sidebar-products">
                                        <img src="images/shop/6.jpg" alt="">
                                        <h3><a href="">Photo Camera</a></h3>
                                        <span>$170</span>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h4>Tag cloud</h4>
                                    <div class="tags">
                                    <a href="#">Obesity</a>
                                    <a href="#">Desieases</a>
                                    <a href="#">Tips</a>
                                    <a href="#">Kids Health</a>
                                    <a href="#">Mothers</a>
                                    <a href="#">Eating</a>
                                    <a href="#">Emergency</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            @include('partials.footer')
        </footer><!-- End: footer -->
    </div>
    <!-- Jquery -->
  @include('partials.routesScripts')
</body>

</html>

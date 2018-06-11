@extends('layouts.app')
@section('content')
                  
                    <section class="home-slider">
                            <div id="slider">
                                <!-- revolution slider begin -->
                                @include('partials.slider')
                                <!-- revolution slider close -->
                            </div>
                        </section>
                    <section class="row">
                        <div class="container" style="margin-top:20px;">
                            <h2 class="text-center title "><strong class="strong-red">Express </strong> <strong class="strong-green">Medical Depot</strong></h2>
                               <p class="text-heading text-center">Specializes in hospitals, doctors, dentists, pharmacies,</br>health clinics, and personal needs at wholesale prices.</p>
                        </div>
                    </section>
                    <section class="row">
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
                    <section class="shop-section paddtop-50 wow fadeInUp" style="padding-bottom: 25px;" data-wow-delay=".1s" id="app">
                        <div class="container">
                            <div class="row">
                                <h2 class="title"><strong class="strong-green"><i class="fa  fa-bookmark"></i> Featured</strong> Products</h2>
                            </div>
                        </div>
                        <div class="container">
                            
                            <div class="row">
                                <div id="top-slider" class="shop-owl">
                                    {{dd($allProducts)}}
                                    @foreach($allProducts['Items']['Item'] as $products)
                                    <div class="shop-item hover effect-10">
                                        <img src="{{$products['MediumImage']['URL']}}" alt="">
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
                                            <h4><a href="">{{$products['ItemAttributes']['Studio']}}</a></h4>
                                            <div class="price">
                                                <span>{{$products['ItemAttributes']['ListPrice']['Amount']}}</span>
                                            </div>
                                        </div>
                                        <div class="cart-overlay">
                                            <a class="info" href=""><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <!--<p class="icon-links">-->
                                            <!--    <a href="#"><span class="fa fa-shopping-cart"></span></a>-->
                                            <!--    <a href="#"><span class="fa fa-heart"></span></a>-->
                                            <!--    <a href="#"><span class="fa fa-search"></span></a>-->
                                            <!--</p>-->
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="medical-our-Services">
                    <div class="container">
                        @include('partials.ourService')
                    </div>
                    </section>
                    <section class="wesay-light-3  ">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                     <button type="button" class="b-btn btn-lg btn-pill btn-success"name="shop" />Shop </button>
                                     <button type="button" class="b-btn btn-lg btn-pill btn-success" name="shop" /> Contact Us</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    
      @include('partials.vuecart')
                    
@endsection
            

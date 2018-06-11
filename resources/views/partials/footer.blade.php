            <div class="content-widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget widget">
                                <img src="assets/images/logo-n.png" alt="">
                                <p>Express Medical Depot is operated by Logistic Medical Equipment Supply Chain Solutions based in Miami. We specifically cater to the needs of hospitals, doctors, sergions, dentists, pharmacies, health clinics and all other who are seeking wholesale pricing and shipments</p>
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
                                <?php $brands = DB::table('brands')->orderby('hit_count', 'desc')->limit(15)->get(); <?>
                                <h4>Top Brands</h4>
                                <div class="tagcloud">
                                    @foreach($brands as $brand)
                                    <a href="#">{{$brand->title}}</a>
                                   
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget widget">
                                <h4>Reach Us</h4>
                                  <ul class="contact">
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                         7045 NW 46th St. Miami, FL 33166
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        +1 (786) 590-1030
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        info@expressmedicaldepot.com
                                    </li>
                                </ul>
                                <!--<a href="" class="btn-readmore">Read More <i class="fa fa-caret-right"></i></a>-->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget widget">
                                <h4>Send Us Message</h4>
                                <form action="#" method="post" class="footer-form">
                                    <input name="namec" type="text" value="" placeholder="name *">
                                    <input name="emailc" type="email" value="" placeholder="email *">
                                    <textarea name="comment" placeholder="Message *"></textarea>
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
                            <p>&copy; Copyright 2018 Express Medical Depot . All rights reserved. <a href ="#">Terms of Use </a> | <a href="#"> Privacy Policy.</a> </p>
                        </div>
                        <div class="col-md-3">
                            <p class="back-top"><a href="#" id="to-top">BACK TO TOP <i class="fa fa-angle-up"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
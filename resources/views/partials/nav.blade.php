   <ul class="main-menu">
                            <li>
                                <a href="{{ route('welcome')}}">Home</a>
                            </li>
                            <li>
                                 <a href="{{ route('aboutUs')}}">About Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                 <a href="{{ route('contact')}}">Contact</a>
                                 
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('shopProducts')}}">shop <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-arrow">
                                    <li class="menu-item-has-children">
                                        <a href="#">Braces, Splints & Supports<i class="fa"></i></a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Health Monitors <i class="fa"></i></a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Mobility & Daily Living Aids <i class="fa"></i></a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Physical Therapy Aids<i class="fa"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                             @guest
                               <a href="#"  data-toggle="modal" data-target="#create" ><i class="glyphicons glyphicons-user  "></i>Sign in <i class="fa"></i></a>
                               <!--<a href="route('register') }}"><i class="glyphicons glyphicons-user"></i>Sign Up <i class="fa"></i></a>-->
                               @else
                               <a><i class="glyphicons glyphicons-user "></i>{{Auth::user()->name}} <i class="fa fa-angle-down"></i></a>
                               <ul class="dropdown-menu dropdown-arrow">
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}<i class="fa"></i></a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                             @endguest
                            </li>
                            <li class="cart-dropdown"><a class="padd-0" href="{{ route('shopCart')}}"><i class="fa fa-shopping-cart"></i> 8</a>
                                <div class="dropdown-content">
                                    <div class="item-box">
                                        <div class="image-info">
                                            <img class="img-thumbnail" src="assets/images/shop/1.jpg">
                                        </div> 
                                        <div class="item-content">
                                            <h2><a href="">Photo camera</a></h2>
                                            <span>$ 400</span>
                                        </div>
                                        <div class="cart-delete">
                                            <a href=""><i class="fa fa-trash-o"></i></a>
                                        </div>
                                    </div>
                                    <div class="item-box">
                                        <div class="image-info">
                                            <img class="img-thumbnail" src="assets/images/shop/2.jpg">
                                        </div> 
                                        <div class="item-content">
                                            <h2><a href="">Headphone</a></h2>
                                            <span>$ 200</span>
                                        </div>
                                        <div class="cart-delete">
                                            <a href=""><i class="fa fa-trash-o"></i></a>
                                        </div>
                                    </div>
                                    <div class="item-box">
                                        <div class="image-info">
                                            <img class="img-thumbnail" src="assets/images/shop/3.jpg">
                                        </div> 
                                        <div class="item-content">
                                            <h2><a href="">Washing Machine</a></h2>
                                            <span>$ 355</span>
                                        </div>
                                        <div class="cart-delete">
                                            <a href=""><i class="fa fa-trash-o"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <p>SubTotal: $955</p>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('shopCart')}}" class="btn cart-btn blue">View Cart</a>
                                        <a href="" class="btn cart-btn border">Check Out</a>
                                    </div>
                                </div>
                            </li>
                               
                             </ul>
                            
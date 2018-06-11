<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
         <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'EXPRESS MEDICAL DEPOT') }}</title>
        @include('partials.head')
    </head>
    <body>
            <!-- page loader start -->
         <div class="images-preloader">
        <div class="preloader4"></div>
      </div>

                 <!-- page loader end -->
                <div class="wrapper" id="wishlist">
                    <div class="main-content scroll-none home-page">
                            <header class="site-header header11">
                                     @include('partials.header')
                            </header>
                               @yield('content')
                        @include('auth.login')
                        <footer>
                        @include('partials.footer')
                        </footer>
                    </div>
                </div>
        
        @include('partials.routesScripts')
        @include('partials.vuecart')
    
    </body>
     
</html>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
         <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Medical Supply</title>
        @include('partials.head')
    </head>
    <body>
        <div class="wrapper">
            <!-- page loader start -->
                <div class="images-preloader">
                    <div class="preloader4"></div>
                </div>
                <!-- page loader end -->
            <div class="wrapper">
                
                 
                 <header class="site-header header11">
                     @include('partials.header')
                 </header>
                 <div class="main-content home-page">
                     @include('auth.login')
                @include('partials.contentPage')
                </div>
                <footer>
                    @include('partials.footer')
                </footer>
            </div>
            @include('partials.routesScripts')
    </body>
</html>

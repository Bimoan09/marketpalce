<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title','TokoKita')
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css
">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    {{--<link rel="stylesheet" href="{{asset('css/app.css')}}"/>--}}
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


</head>
<body>
<div  id="app">

    <div class="top-bar">
        <div style="color:white" class="top-bar-left">
            <h4 class="brand-title">
                <a href="{{route('home')}}">
                    <i class="fa fa-home fa-lg" aria-hidden="true">
                    </i>
                    TokoKita.com
                </a>
            </h4>
        </div>
        <div class="top-bar-right">
            <ol class="menu">
                <li>
                    <a href="{{route('shirts')}}">
                        Koleksi
                    </a>
                </li>
                <li>
                    <a href="admin">
                        Dashborad
                    </a>
                </li>
                <li>
                    <a href="shipping-info">
                        Checkout
                    </a>
                </li>
            
                <li>
                    <cart-count  :cartcount="totalItems"  > </cart-count>
                </li>
            </ol>
        </div>
    </div>
    <div>
        @yield('content')
    </div>


    <div>
        <div class="reveal" id="checkoutDetailModal" data-reveal>
            <cart-detail :cart="cart" :carttotal="cartTotal" :totalitems="totalItems"></cart-detail>

            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="false">&times;</span>
            </button>
        </div>
    </div>
</div>


<footer class="footer">
    <div class="row full-width">
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-laptop"></i>
            <p>dimulai dari TokoKita.com</p>
        </div>
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-html5"></i>
            <p>Belanja semua kebutuhanmu disini</p>
        </div>

        <div class="small-6 medium-4 large-4 columns">
            <h4>Follow me</h4>
            <ul class="footer-links">
                <li><a href="https://github.com/Bimoan09">GitHub</a></li>
                <li><a href="https://www.facebook.com/bimo.anugrah?ref=bookmarks">Facebook</a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script src="{{asset('dist/js/app.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('dist/js/vendor/foundation.js')}}"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>

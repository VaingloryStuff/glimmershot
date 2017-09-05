<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.meta')
    <title>Glimmershot | @yield('title')</title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <script src="https://use.fontawesome.com/8b18c79530.js"></script>

    <style>
        .header-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.49), rgba(0, 0, 0, 0.89)), url("{{ asset('/images/backgrounds/Kestrel_Winter_War_R.jpg') }}");
            background-position: top center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
    </style>
</head>
<body>

<section class="hero is-primary header-image">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered is-mobile">
                @yield('header')
            </div>
        </div>
    </div>
    <div class="hero-foot">
        <header class="nav">
            <div class="container">
                <div class="nav-left">
                    <a class="nav-item is-active">
                        Overview
                    </a>
                    <a href="{{ 'https://vainsocial.com/player/' . $player['name'] }}" target="_blank" class="nav-item">
                        Matches
                    </a>
                </div>
            </div>
        </header>

    </div>
</section>

@yield('content')

<footer class="footer">
    @include('includes.footer')
</footer>

<!-- Scripts -->
<script src="{{ mix('/js/Chart.min.js') }}"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.meta')
    <title>Glimmershot</title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <script src="https://use.fontawesome.com/8b18c79530.js"></script>

    <style>
        .header-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.49), rgba(0, 0, 0, 0.89)), url("{{ asset('/images/backgrounds/Kestrel_Winter_War_R.jpg') }}");
            background-position: center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
    </style>
</head>
<body>
<section class="hero is-primary is-fullheight header-image">
    @include('includes.kestrel')
</section>

<div class="hero-cta">
    <nav class="level">
        <div class="level-item has-text-centered">
            @yield('slogan')
        </div>
    </nav>
</div>

<div class="section main">
    <div class="container">
        <div class="columns">
            @yield('columns')
        </div>
    </div>
</div>

<footer class="footer">
    @include('includes.footer')
</footer>

</body>
</html>
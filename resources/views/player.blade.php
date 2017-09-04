<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Glimmershot | {{ $player['name'] }}
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

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
                <div class="column is-half is-offset-one-quarter">
                    <div class="summoner-profile-picture">
                        <img src="{{ asset('images/portraits/Vox_Portrait.png') }}"
                             alt="{{ $player['picks']['0']['actor'] }}">
                        <div class="region has-text-centered">
                            {{ $player['shard_id'] }}
                        </div>
                    </div>
                    <p class="title has-text-centered" id="H1_1">
                        {{ $player['name'] }}
                    </p>
                </div>
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

<section class="section">
    <div class="container">

        <div class="columns">
            <div class="column">

                <div class="box">
                    <h3 class="title has-text-centered">Ranked</h3>
                    {!! $ranked_chart->render() !!}
                </div>

            </div>

            <div class="column">
                <div class="box">
                    <h3 class="title has-text-centered">Casual</h3>
                    {!! $casual_chart->render() !!}
                </div>
            </div>
        </div>

    </div>
</section>

<p>
    {{ $player['picks']['0']['actor'] }}
    {{ $player['picks']['0']['hero_pick'] }}
</p>

<!-- Scripts -->
<script src="{{ mix('/js/Chart.min.js') }}">
</script>

</body>
</html>
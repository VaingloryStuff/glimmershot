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
      .summoner-profile-picture {
        height: 120px;
        margin: 20px auto 10px;
        width: 120px;
        z-index: 1;
        position: relative;
      }
      .summoner-profile-picture img {
        border-radius: 100%;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        -ms-border-radius: 100%;
        height: 100%;
        width: 100%;
        box-shadow: 0 0 10px 3px rgba(0, 0, 0, 0.5);
        -webkit-box-shadow: 0 0 10px 3px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: 0 0 10px 3px rgba(0, 0, 0, 0.5);
        -ms-box-shadow: 0 0 10px 3px rgba(0, 0, 0, 0.5);
      }
      .summoner-profile-picture .region {
        position: absolute;
        bottom: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.75);
        height: 32px;
        width: 32px;
        border-radius: 100%;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        -ms-border-radius: 100%;
        color: #FFF;
        font-size: 0.75em;
        line-height: 32px;
        text-transform: uppercase;
      }
      .summoner-name {
        color: #FFF;
        font-family: "Montserrat",  sans-serif;
        font-size: 1.5em;
        text-shadow: 0 0 30px black;
        z-index: 1;
        position: relative;
        text-transform: none;
        display: inherit;
        line-height: normal;
        margin: 0;
        max-width: none;
      }
      .header-image {
        background-image: linear-gradient(rgba(0, 0, 0, 0.49),rgba(0, 0, 0, 0.89)),url('/images/backgrounds/Kestrel_Winter_War_R.jpg');
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
              <img src="{{ asset('images/portraits/Vox_Portrait.png') }}" alt="{{ $player['picks']['0']['actor'] }}">
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
          {!! $ranked_chart->render() !!}
        </div>

      </div>

      <div class="column">
        <div class="box">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce orci turpis, blandit in efficitur sit amet, iaculis in odio. Nullam at iaculis mi, ut mollis enim. Integer egestas massa pretium arcu semper pharetra. Sed tincidunt sem sed condimentum pellentesque.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<p>
      {{ $player['picks']['0']['actor'] }}
      {{ $player['picks']['0']['hero_pick'] }}
</p>

<div style="position: relative; height:20vh; width:40vw">
    {!! $ranked_chart->render() !!}
</div>

    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}">
    </script>

  </body>
</html>
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
      #IMG_1 {
        display: block;
        margin: 0 auto;
        box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 10px 3px;
        box-sizing: border-box;
        color: rgb(62, 58, 71);
        height: 120px;
        text-align: center;
        text-decoration: none solid rgb(62, 58, 71);
        width: 120px;
        column-rule-color: rgb(62, 58, 71);
        perspective-origin: 60px 60px;
        transform-origin: 60px 60px;
        caret-color: rgb(62, 58, 71);
        border: 0px none rgb(62, 58, 71);
        border-radius: 100% 100% 100% 100%;
        font: normal normal normal normal 14px / normal "Source Sans Pro", Calibri, sans-serif;
        outline: rgb(62, 58, 71) none 0px;
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
            <img src="{{ asset('images/portraits/Vox_Portrait.png') }}" alt="{{ $player['picks']['0']['actor'] }}" id="IMG_1">
        </div>
    </div>
  </div>
</div>
</section>

  <img src="{{ asset('images/portraits/Vox_Portrait.png') }}" alt="{{ $player['picks']['0']['actor'] }}" id="IMG_1">

<p>
      {{ $player['picks']['0']['actor'] }}
      {{ $player['picks']['0']['hero_pick'] }}
</p>
  </body>
</html>
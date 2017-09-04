<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} {{ app()->version() }}
    </title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <style>
      .header-image {
        background-image: linear-gradient(rgba(0, 0, 0, 0.49),rgba(0, 0, 0, 0.89)),url('/images/backgrounds/Kestrel_Winter_War_R.jpg');
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
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title">
            Glimmershot
          </h1>
          <div class="column is-6 is-offset-3">
            <div class="field has-addons">
              <div class="control is-expanded">
                <input class="input" type="text" placeholder="Player name">
              </div>
              <div class="control">
                <div class="select">
                  <select>
                    <option>NA
                    </option>
                    <option>EU
                    </option>
                    <option>SA
                    </option>
                    <option>EA
                    </option>
                    <option>SG
                    </option>
                    <option>CN
                    </option>
                  </select>
                </div>
              </div>
              <div class="control">
                <a class="button is-primary">
                  <span class="icon">
                    <i class="fa fa-search"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="hero-cta">
      <nav class="level">
        <div class="level-item has-text-centered">
          <p class="title">Minimalistic Player Statistics
          </p>
        </div>
      </nav>
    </div>
    <div class="section main">
      <div class="container">
        <div class="columns">
          <div class="column is-6">
            <div class="panel">
              <div class="panel-block section">
                <p>Glimmershot is a simple Vainglory API site that doesn't provide any match history, instead it focuses on quick up-to-date player info lookup.
                </p>
              </div>
            </div>
          </div>
          <div class="column is-6">
            <div class="panel">
              <div class="panel-block section">
                <p>Glimmershot provides all information listed <a href="https://developer.vainglorygame.com/docs#players">here</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="content has-text-centered">
          <p>
            <strong>Glimmershot
            </strong> by 
            <a href="http://github.com/agangofkittens">agangofkittens
            </a>. The source code is licensed under
            <a href="http://opensource.org/licenses/mit-license.php">MIT
            </a>.
          </p>
          <p>
            <i>Glimmershot is not affiliated, endorsed, sponsored or approved by Super Evil Megacorp and its affiliates.
            </i>
          </p>
          <p>
            <a class="icon" href="https://kitsune.gq/agangofkittens/Glimmershots">
              <i class="fa fa-github">
              </i>
            </a>
          </p>
        </div>
      </div>
    </footer>

    <noscript id="deferred-styles">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </noscript>
    <script>
        var loadDeferredStyles = function() {
            var addStylesNode = document.getElementById("deferred-styles");
            var replacement = document.createElement("div");
            replacement.innerHTML = addStylesNode.textContent;
            document.body.appendChild(replacement)
            addStylesNode.parentElement.removeChild(addStylesNode);
        };
        var raf = requestAnimationFrame || mozRequestAnimationFrame ||
            webkitRequestAnimationFrame || msRequestAnimationFrame;
        if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
        else window.addEventListener('load', loadDeferredStyles);
    </script>


    {{--     
    <!-- Scripts -->
    <script src="{{ mix('/js/mix.js') }}">
    </script> --}}

  </body>
</html>
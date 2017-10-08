<?php

/* home.twig */
class __TwigTemplate_8000e57027df07c39f92862bbc2456f141e409e6ae35d97a679a595dc93ccada extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <meta property=\"og:title\" content=\"Glimmershot\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\">
    <meta property=\"og:description\" content=\"Glimmershot is a minimalistic Vainglory API site that focuses on fast up-to-date player lookup.\">
    <meta property=\"og:image\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/images/glimmershot/128x128.png\">

    <meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:site\" content=\"@glimmershots\" />
    <meta name=\"twitter:title\" content=\"glimmershot.tk\">
    <meta name=\"twitter:description\" content=\"Glimmershot is a minimalistic Vainglory API site that focuses on fast up-to-date player lookup.\">
    <meta name=\"twitter:image\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/images/glimmershot/128x128.png\">

    <title>Glimmershot</title>

    <!-- Styles -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/app.css\" rel=\"stylesheet\">

    <script src=\"https://use.fontawesome.com/8b18c79530.js\"></script>

    <style>
        .header-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.49), rgba(0, 0, 0, 0.89)), url(\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "//images/backgrounds/Kestrel_Winter_War_R.jpg\");
            background-position: center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
    </style>
</head>
<body>
<section class=\"hero is-primary is-fullheight header-image\">
    <div class=\"hero-body\">
    <div class=\"container has-text-centered\">
        <h1 class=\"title\">
            Glimmershot
        </h1>
        <div class=\"column is-6 is-offset-3\">
            <div class=\"field has-addons\">
                <div class=\"control is-expanded\">
                    <input class=\"input\" type=\"text\" placeholder=\"Player name\">
                </div>

                <div class=\"control\">
                    <a class=\"button is-primary\">
                        <span class=\"icon\">
                            <i class=\"fa fa-search\"></i>
                        </span>
                        <span>Search</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<div class=\"hero-cta\">
    <nav class=\"level\">
        <div class=\"level-item has-text-centered\">
              <p class=\"title\">Minimalistic Player Statistics</p>
        </div>
    </nav>
</div>

<div class=\"section main\">
    <div class=\"container\">
        <div class=\"columns\">
              <div class=\"column is-6\">
    <div class=\"panel\">
      <div class=\"panel-block section\">
        <p>Glimmershot is a simple Vainglory API site that doesn't provide any match history,
          instead it focuses on quick up-to-date player info lookup.
        </p>
      </div>
    </div>
  </div>
  <div class=\"column is-6\">
    <div class=\"panel\">
      <div class=\"panel-block section\">
        <p>Glimmershot provides all information listed <a href=\"https://developer.vainglorygame.com/docs#players\">here</a>
        </p>
      </div>
    </div>
  </div>
        </div>
    </div>
</div>

<footer class=\"footer\">
    <div class=\"container\">
    <div class=\"content has-text-centered\">
        <p>
            <strong>Glimmershot
            </strong> by
            <a href=\"http://github.com/miraris\">Miraris</a>. The source code is licensed under
            <a href=\"https://www.gnu.org/licenses/gpl.html\">GPLv3</a>.
        </p>
        <p>
            <i>Glimmershot is not affiliated, endorsed, sponsored or approved by Super Evil Megacorp and its affiliates.</i>
        </p>
        <p>
            <a class=\"icon\" href=\"https://github.com/miraris/glimmershot\">
                <i class=\"fa fa-github\"></i>
            </a>
        </p>
    </div>
</div></footer>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 29,  52 => 23,  44 => 18,  35 => 12,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <meta property=\"og:title\" content=\"Glimmershot\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"{{ base_url() }}\">
    <meta property=\"og:description\" content=\"Glimmershot is a minimalistic Vainglory API site that focuses on fast up-to-date player lookup.\">
    <meta property=\"og:image\" content=\"{{ base_url() }}/images/glimmershot/128x128.png\">

    <meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:site\" content=\"@glimmershots\" />
    <meta name=\"twitter:title\" content=\"glimmershot.tk\">
    <meta name=\"twitter:description\" content=\"Glimmershot is a minimalistic Vainglory API site that focuses on fast up-to-date player lookup.\">
    <meta name=\"twitter:image\" content=\"{{ base_url() }}/images/glimmershot/128x128.png\">

    <title>Glimmershot</title>

    <!-- Styles -->
    <link href=\"{{ base_url() }}/css/app.css\" rel=\"stylesheet\">

    <script src=\"https://use.fontawesome.com/8b18c79530.js\"></script>

    <style>
        .header-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.49), rgba(0, 0, 0, 0.89)), url(\"{{ base_url() }}//images/backgrounds/Kestrel_Winter_War_R.jpg\");
            background-position: center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
    </style>
</head>
<body>
<section class=\"hero is-primary is-fullheight header-image\">
    <div class=\"hero-body\">
    <div class=\"container has-text-centered\">
        <h1 class=\"title\">
            Glimmershot
        </h1>
        <div class=\"column is-6 is-offset-3\">
            <div class=\"field has-addons\">
                <div class=\"control is-expanded\">
                    <input class=\"input\" type=\"text\" placeholder=\"Player name\">
                </div>

                <div class=\"control\">
                    <a class=\"button is-primary\">
                        <span class=\"icon\">
                            <i class=\"fa fa-search\"></i>
                        </span>
                        <span>Search</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<div class=\"hero-cta\">
    <nav class=\"level\">
        <div class=\"level-item has-text-centered\">
              <p class=\"title\">Minimalistic Player Statistics</p>
        </div>
    </nav>
</div>

<div class=\"section main\">
    <div class=\"container\">
        <div class=\"columns\">
              <div class=\"column is-6\">
    <div class=\"panel\">
      <div class=\"panel-block section\">
        <p>Glimmershot is a simple Vainglory API site that doesn't provide any match history,
          instead it focuses on quick up-to-date player info lookup.
        </p>
      </div>
    </div>
  </div>
  <div class=\"column is-6\">
    <div class=\"panel\">
      <div class=\"panel-block section\">
        <p>Glimmershot provides all information listed <a href=\"https://developer.vainglorygame.com/docs#players\">here</a>
        </p>
      </div>
    </div>
  </div>
        </div>
    </div>
</div>

<footer class=\"footer\">
    <div class=\"container\">
    <div class=\"content has-text-centered\">
        <p>
            <strong>Glimmershot
            </strong> by
            <a href=\"http://github.com/miraris\">Miraris</a>. The source code is licensed under
            <a href=\"https://www.gnu.org/licenses/gpl.html\">GPLv3</a>.
        </p>
        <p>
            <i>Glimmershot is not affiliated, endorsed, sponsored or approved by Super Evil Megacorp and its affiliates.</i>
        </p>
        <p>
            <a class=\"icon\" href=\"https://github.com/miraris/glimmershot\">
                <i class=\"fa fa-github\"></i>
            </a>
        </p>
    </div>
</div></footer>

</body>
</html>", "home.twig", "/home/ashe/Projects/glimmershot/templates/home.twig");
    }
}

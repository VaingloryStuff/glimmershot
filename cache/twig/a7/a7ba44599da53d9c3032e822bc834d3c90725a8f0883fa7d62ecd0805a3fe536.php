<?php

/* player.twig */
class __TwigTemplate_56d0830550d9842badc9f4498f8db6759ba0a3030cbaf42e6a302d33ae60fb42 extends Twig_Template
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
    <meta property=\"og:url\" content=\"https://glimmershot.tk\">
    <meta property=\"og:description\" content=\"Glimmershot is a minimalistic Vainglory API site that focuses on fast up-to-date player lookup.\">
    <meta property=\"og:image\" content=\"https://glimmershot.tk/images/glimmershot/128x128.png\">

    <meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:site\" content=\"@glimmershots\" />
    <meta name=\"twitter:title\" content=\"glimmershot.tk\">
    <meta name=\"twitter:description\" content=\"Glimmershot is a minimalistic Vainglory API site that focuses on fast up-to-date player lookup.\">
    <meta name=\"twitter:image\" content=\"https://glimmershot.tk/images/glimmershot/128x128.png\">

    <title>Glimmershot | L3oN</title>

    <!-- Styles -->
    <link href=\"/css/app.css\" rel=\"stylesheet\">

    <script src=\"https://use.fontawesome.com/8b18c79530.js\"></script>

    <style>
        .header-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.49), rgba(0, 0, 0, 0.89)), url(\"https://glimmershot.tk/images/backgrounds/Kestrel_Winter_War_R.jpg\");
            background-position: top center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
    </style>
</head>
<body>

<section class=\"hero is-primary header-image\">
    <div class=\"hero-body\">
        <div class=\"container\">
            <div class=\"columns is-vcentered is-mobile\">
                    <div class=\"column is-half is-offset-one-quarter\">
        <div class=\"summoner-profile-picture\">
            <img src=\"https://glimmershot.tk/images/portraits/Vox_Portrait.png\"
                 alt=\"*Vox*\">
            <div class=\"region has-text-centered\">
                eu
            </div>
        </div>
        <p class=\"title has-text-centered\">
            L3oN
        </p>
    </div>
            </div>
        </div>
    </div>
    <div class=\"hero-foot\">
        <header class=\"nav\">
            <div class=\"container\">
                <div class=\"nav-left\">
                    <a class=\"nav-item is-active\">
                        Overview
                    </a>
                    <a href=\"https://vainsocial.com/player/L3oN\" target=\"_blank\" class=\"nav-item\">
                        Matches
                    </a>
                </div>
            </div>
        </header>

    </div>
</section>

<section class=\"section\">
    <div class=\"container\">

        <div class=\"columns\">
            <div class=\"column\">

                <div class=\"box\">
                    <h3 class=\"subtitle is-3 has-text-centered\">Ranked</h3>
                    <!-- Chart.js Canvas here -->
                </div>

            </div>

            <div class=\"column\">
                <div class=\"box\">
                    <h3 class=\"subtitle is-3 has-text-centered\">Casual</h3>
                    <!-- Chart.js Canvas here -->
                </div>
            </div>
        </div>

    </div>
</section>

<section>
    <div class=\"container\">

        <pre>";
        // line 103
        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, ($context["name"] ?? null)), "html", null, true);
        echo "</pre>

    </div>
</section>

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
    </div>
</footer>

<!-- Scripts -->
<script src=\"/js/dist/Chart.min.js\"></script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "player.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 103,  19 => 1,);
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
    <meta property=\"og:url\" content=\"https://glimmershot.tk\">
    <meta property=\"og:description\" content=\"Glimmershot is a minimalistic Vainglory API site that focuses on fast up-to-date player lookup.\">
    <meta property=\"og:image\" content=\"https://glimmershot.tk/images/glimmershot/128x128.png\">

    <meta name=\"twitter:card\" content=\"summary\" />
    <meta name=\"twitter:site\" content=\"@glimmershots\" />
    <meta name=\"twitter:title\" content=\"glimmershot.tk\">
    <meta name=\"twitter:description\" content=\"Glimmershot is a minimalistic Vainglory API site that focuses on fast up-to-date player lookup.\">
    <meta name=\"twitter:image\" content=\"https://glimmershot.tk/images/glimmershot/128x128.png\">

    <title>Glimmershot | L3oN</title>

    <!-- Styles -->
    <link href=\"/css/app.css\" rel=\"stylesheet\">

    <script src=\"https://use.fontawesome.com/8b18c79530.js\"></script>

    <style>
        .header-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.49), rgba(0, 0, 0, 0.89)), url(\"https://glimmershot.tk/images/backgrounds/Kestrel_Winter_War_R.jpg\");
            background-position: top center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
    </style>
</head>
<body>

<section class=\"hero is-primary header-image\">
    <div class=\"hero-body\">
        <div class=\"container\">
            <div class=\"columns is-vcentered is-mobile\">
                    <div class=\"column is-half is-offset-one-quarter\">
        <div class=\"summoner-profile-picture\">
            <img src=\"https://glimmershot.tk/images/portraits/Vox_Portrait.png\"
                 alt=\"*Vox*\">
            <div class=\"region has-text-centered\">
                eu
            </div>
        </div>
        <p class=\"title has-text-centered\">
            L3oN
        </p>
    </div>
            </div>
        </div>
    </div>
    <div class=\"hero-foot\">
        <header class=\"nav\">
            <div class=\"container\">
                <div class=\"nav-left\">
                    <a class=\"nav-item is-active\">
                        Overview
                    </a>
                    <a href=\"https://vainsocial.com/player/L3oN\" target=\"_blank\" class=\"nav-item\">
                        Matches
                    </a>
                </div>
            </div>
        </header>

    </div>
</section>

<section class=\"section\">
    <div class=\"container\">

        <div class=\"columns\">
            <div class=\"column\">

                <div class=\"box\">
                    <h3 class=\"subtitle is-3 has-text-centered\">Ranked</h3>
                    <!-- Chart.js Canvas here -->
                </div>

            </div>

            <div class=\"column\">
                <div class=\"box\">
                    <h3 class=\"subtitle is-3 has-text-centered\">Casual</h3>
                    <!-- Chart.js Canvas here -->
                </div>
            </div>
        </div>

    </div>
</section>

<section>
    <div class=\"container\">

        <pre>{{ dump(name) }}</pre>

    </div>
</section>

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
    </div>
</footer>

<!-- Scripts -->
<script src=\"/js/dist/Chart.min.js\"></script>

</body>
</html>
", "player.twig", "/home/ashe/Projects/glimmershot/templates/player.twig");
    }
}

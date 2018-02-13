<?php

/* /Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/layouts/default.htm */
class __TwigTemplate_532d84df543f299a66309db056cc9ae36ab55af623f712bd019f85c8f75798d3 extends Twig_Template
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
<html>
<head>
    <meta charset=\"utf-8\">
    <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">


    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\">

    <![endif]-->

    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/demo.css");
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/custom.css");
        echo "\" />

    <link href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">

    ";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 26
        echo "
    <!--<script>-->
        <!--function sentence(num){-->
            <!--var result = \"\", mysentence = \"Lorem ipsum dolor sit amet, consectetur adipisicing elit. \";-->
            <!--for(var i = 0; i < num; i++){ result += mysentence; } return result;-->
        <!--}-->
    <!--</script>-->


</head>
<body style=\"font-family: 'Open Sans'\">

";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "<div class=\"space\" style=\"margin-bottom: 350px\"></div>
<!-- Content -->
<section id=\"layout-content\" class=\"\">
    ";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 43
        echo "</section>

<!--";
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "-->




<!--<script src=\"";
        // line 50
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery-1.12.4.min.js");
        echo "\"></script>
<script src=\"";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/main.js");
        echo "\"></script>
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js\"></script>-->
<script type=\"text/javascript\" src=\"http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js\"></script>

<!--<script src=\"";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/masonry.pkgd.min.js");
        echo "\"></script>-->
<!--<script src=\"https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js\"></script>-->
<!--<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>-->
<!--<script type=\"text/javascript\" src=\"";
        // line 58
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquerypp.custom.js");
        echo "\"></script>-->
<!--<script type=\"text/javascript\" src=\"";
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.elastislide.js");
        echo "\"></script>-->


<script
        type=\"text/javascript\"
        async defer
        src=\"//assets.pinterest.com/js/pinit.js\"
></script>





";
        // line 72
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 73
        echo "<script src=\"https://code.jquery.com/jquery-1.11.3.min.js\"
        integrity=\"sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g=\"
        crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 76
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/min/main.js");
        echo "\"></script>
";
        // line 77
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 78
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 78,  163 => 77,  159 => 76,  154 => 73,  151 => 72,  135 => 59,  131 => 58,  125 => 55,  118 => 51,  114 => 50,  104 => 45,  100 => 43,  98 => 42,  93 => 39,  89 => 38,  75 => 26,  72 => 25,  67 => 23,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  42 => 13,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>October CMS - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">


    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">

    <![endif]-->

    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/font-awesome.min.css'|theme }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/css/demo.css' |theme}}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/css/custom.css' |theme}}\" />

    <link href=\"{{ 'assets/css/style.css'|theme }}\" rel=\"stylesheet\">

    {% styles %}

    <!--<script>-->
        <!--function sentence(num){-->
            <!--var result = \"\", mysentence = \"Lorem ipsum dolor sit amet, consectetur adipisicing elit. \";-->
            <!--for(var i = 0; i < num; i++){ result += mysentence; } return result;-->
        <!--}-->
    <!--</script>-->


</head>
<body style=\"font-family: 'Open Sans'\">

{% partial 'header' %}
<div class=\"space\" style=\"margin-bottom: 350px\"></div>
<!-- Content -->
<section id=\"layout-content\" class=\"\">
    {% page %}
</section>

<!--{% partial 'footer' %}-->




<!--<script src=\"{{ 'assets/js/jquery-1.12.4.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/main.js'|theme }}\"></script>
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js\"></script>-->
<script type=\"text/javascript\" src=\"http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js\"></script>

<!--<script src=\"{{ 'assets/js/masonry.pkgd.min.js'|theme }}\"></script>-->
<!--<script src=\"https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js\"></script>-->
<!--<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>-->
<!--<script type=\"text/javascript\" src=\"{{'assets/js/jquerypp.custom.js' |theme}}\"></script>-->
<!--<script type=\"text/javascript\" src=\"{{'assets/js/jquery.elastislide.js' |theme}}\"></script>-->


<script
        type=\"text/javascript\"
        async defer
        src=\"//assets.pinterest.com/js/pinit.js\"
></script>





{% scripts %}
<script src=\"https://code.jquery.com/jquery-1.11.3.min.js\"
        integrity=\"sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g=\"
        crossorigin=\"anonymous\"></script>
<script src=\"{{'assets/js/min/main.js' | theme}}\"></script>
{% framework extras %}

</body>
</html>", "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/layouts/default.htm", "");
    }
}

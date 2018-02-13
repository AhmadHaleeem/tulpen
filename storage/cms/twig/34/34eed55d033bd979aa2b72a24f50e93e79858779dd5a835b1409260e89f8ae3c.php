<?php

/* /Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/layouts/tulpen-zakelijk.htm */
class __TwigTemplate_2b5e40d40c10f45228b50aa23285dfdbf0f19686b05a4e7d071ae22e3b2ffb6b extends Twig_Template
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
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\">

    <![endif]-->


    <link href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\">


    <link href=\"https://fonts.googleapis.com/css?family=Playfair+Display\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/demo.css");
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/elastislide.css");
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/custom.css");
        echo "\" />
    <link href=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/modernizr.custom.17475.js");
        echo "\"></script>
    ";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 27
        echo "
    <script>
        function sentence(num){
            var result = \"\", mysentence = \"Lorem ipsum dolor sit amet, consectetur adipisicing elit. \";
            for(var i = 0; i < num; i++){ result += mysentence; } return result;
        }
    </script>


</head>
<body style=\"font-family: 'Open Sans'\">

";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("customPage"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "<div class=\"space\" style=\"margin-bottom: 350px\"></div>
<!-- Content -->
<section id=\"layout-content\" class=\"\">
    ";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 44
        echo "</section>

<!--";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "-->




<script src=\"";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery-3.2.1.min.js");
        echo "\"></script>
<script src=\"";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script src=\"";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/app.js");
        echo "\"></script>
<script src=\"";
        // line 54
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/main.js");
        echo "\"></script>
<script src=\"";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/masonry.pkgd.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 57
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquerypp.custom.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 58
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.elastislide.js");
        echo "\"></script>
<script type=\"text/javascript\">

    \$( '#carousel' ).elastislide();

</script>
<script
        type=\"text/javascript\"
        async defer
        src=\"//assets.pinterest.com/js/pinit.js\"
></script>

";
        // line 70
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 71
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 72
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/layouts/tulpen-zakelijk.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 72,  168 => 71,  161 => 70,  146 => 58,  142 => 57,  137 => 55,  133 => 54,  129 => 53,  125 => 52,  121 => 51,  111 => 46,  107 => 44,  105 => 43,  100 => 40,  96 => 39,  82 => 27,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  63 => 22,  59 => 21,  52 => 17,  48 => 16,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
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


    <link href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/font-awesome.min.css'|theme }}\" rel=\"stylesheet\">


    <link href=\"https://fonts.googleapis.com/css?family=Playfair+Display\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/css/demo.css' |theme}}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/css/elastislide.css' |theme}}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{'assets/css/custom.css' |theme}}\" />
    <link href=\"{{ 'assets/css/style.css'|theme }}\" rel=\"stylesheet\">
    <script src=\"{{'assets/js/modernizr.custom.17475.js' | theme}}\"></script>
    {% styles %}

    <script>
        function sentence(num){
            var result = \"\", mysentence = \"Lorem ipsum dolor sit amet, consectetur adipisicing elit. \";
            for(var i = 0; i < num; i++){ result += mysentence; } return result;
        }
    </script>


</head>
<body style=\"font-family: 'Open Sans'\">

{% partial 'customPage' %}
<div class=\"space\" style=\"margin-bottom: 350px\"></div>
<!-- Content -->
<section id=\"layout-content\" class=\"\">
    {% page %}
</section>

<!--{% partial 'footer' %}-->




<script src=\"{{ 'assets/js/jquery-3.2.1.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/app.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/main.js'|theme }}\"></script>
<script src=\"{{ 'assets/js/masonry.pkgd.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"{{'assets/js/jquerypp.custom.js' |theme}}\"></script>
<script type=\"text/javascript\" src=\"{{'assets/js/jquery.elastislide.js' |theme}}\"></script>
<script type=\"text/javascript\">

    \$( '#carousel' ).elastislide();

</script>
<script
        type=\"text/javascript\"
        async defer
        src=\"//assets.pinterest.com/js/pinit.js\"
></script>

{% framework extras %}
{% scripts %}

</body>
</html>", "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/layouts/tulpen-zakelijk.htm", "");
    }
}

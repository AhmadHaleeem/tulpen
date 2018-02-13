<?php

/* /Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/partials/header.htm */
class __TwigTemplate_dcfa2a9daecb2642fe3aee4cbeedb91fc90c5b02afd0a20b213f23c49acf6dc0 extends Twig_Template
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
        echo "<header class=\"page\">
        <div class=\"header-container\">
            <img class=\"header-image\" src=\"";
        // line 3
        echo "../../themes/tulpen/assets/img/header.png";
        echo "\">
            <span class=\"header-text\">Alles over Tulpen</span>
            <img  class=\"header__tulip-lady\" src=\"";
        // line 5
        echo "../../themes/tulpen/assets/img/tulip-lady.png";
        echo "\">
        </div>

        <!--<div class=\"colored-bar\">-->
            <!--<div class=\"colored-bar__block colored-bar__block&#45;&#45;red\"></div>-->
            <!--<div class=\"colored-bar__block colored-bar__block&#45;&#45;yellow\"></div>-->
            <!--<div class=\"colored-bar__block colored-bar__block&#45;&#45;orange\"></div>-->
            <!--<div class=\"colored-bar__block colored-bar__block&#45;&#45;green\"></div>-->
            <!--<div class=\"colored-bar__block colored-bar__block&#45;&#45;orange\"></div>-->
            <!--<div class=\"colored-bar__block colored-bar__block&#45;&#45;deep-orange\"></div>-->
        <!--</div>-->
        <!--<div class=\"nav-bar\">-->
            <!--<img class=\"nav-bar__logo\" src=\"";
        // line 17
        echo "../../themes/tulpen/assets/img/logo.png";
        echo "\">-->
            <!--<div class=\"nav-bar__hamburger\">-->
                <!--<span></span>-->
                <!--<span></span>-->
                <!--<span></span>-->
            <!--</div>-->
        <!--</div>-->
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\"> <img class=\"nav-bar__logo\" src=\"";
        // line 34
        echo "../../themes/tulpen/assets/img/logo.png";
        echo "\"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                    ";
        // line 40
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogCategories"] ?? null), "categories", array())) {
            // line 41
            echo "                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"";
            // line 42
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home-page");
            echo "\">Home</a></li>
                        <li class=\"news_margin\"><a href=\"";
            // line 43
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("news");
            echo "\">News</a></li>
                        <li>";
            // line 44
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['categories'] = twig_get_attribute($this->env, $this->getSourceContext(),             // line 45
($context["blogCategories"] ?? null), "categories", array())            ;
            $context['__cms_partial_params']['currentCategorySlug'] = twig_get_attribute($this->env, $this->getSourceContext(),             // line 46
($context["blogCategories"] ?? null), "currentCategorySlug", array())            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((            // line 44
($context["blogCategories"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 48
            echo "                        </li>
                        <li><a href=\"";
            // line 49
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("tulpennl-zakelijk");
            echo "\">Tulpen.nl_zakelijk</a></li>
                        <li><a href=\"";
            // line 50
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
            echo "\">Contact</a></li>
                    </ul>
                    ";
        }
        // line 53
        echo "                </div>
            </div>
        </nav>
    </header>
</div>
";
        // line 58
        $context["posts"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["newsPosts"] ?? null), "posts", array());
        // line 59
        echo "
<div class=\" demo-1\" style=\"margin-left: -10px;;width: 101.5%;margin-top: -20px;\">
    <div class=\"main\">
        <ul id=\"carousel\" class=\"elastislide-list\">
            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 64
            echo "            <li><a href=\"/";
            echo twig_escape_filter($this->env, ($context["postPage"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array()), "html", null, true);
            echo "\"><img src=\"";
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "image", array()));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "\"><span class=\"nav_title_span\">";
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), 20));
            echo "</span></a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 66,  126 => 64,  122 => 63,  116 => 59,  114 => 58,  107 => 53,  101 => 50,  97 => 49,  94 => 48,  91 => 44,  89 => 46,  87 => 45,  85 => 44,  81 => 43,  77 => 42,  74 => 41,  72 => 40,  63 => 34,  43 => 17,  28 => 5,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"page\">
        <div class=\"header-container\">
            <img class=\"header-image\" src=\"{{'../../themes/tulpen/assets/img/header.png'}}\">
            <span class=\"header-text\">Alles over Tulpen</span>
            <img  class=\"header__tulip-lady\" src=\"{{'../../themes/tulpen/assets/img/tulip-lady.png'}}\">
        </div>

        <!--<div class=\"colored-bar\">-->
            <!--<div class=\"colored-bar__block colored-bar__block&#45;&#45;red\"></div>-->
            <!--<div class=\"colored-bar__block colored-bar__block&#45;&#45;yellow\"></div>-->
            <!--<div class=\"colored-bar__block colored-bar__block&#45;&#45;orange\"></div>-->
            <!--<div class=\"colored-bar__block colored-bar__block&#45;&#45;green\"></div>-->
            <!--<div class=\"colored-bar__block colored-bar__block&#45;&#45;orange\"></div>-->
            <!--<div class=\"colored-bar__block colored-bar__block&#45;&#45;deep-orange\"></div>-->
        <!--</div>-->
        <!--<div class=\"nav-bar\">-->
            <!--<img class=\"nav-bar__logo\" src=\"{{'../../themes/tulpen/assets/img/logo.png'}}\">-->
            <!--<div class=\"nav-bar__hamburger\">-->
                <!--<span></span>-->
                <!--<span></span>-->
                <!--<span></span>-->
            <!--</div>-->
        <!--</div>-->
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\"> <img class=\"nav-bar__logo\" src=\"{{'../../themes/tulpen/assets/img/logo.png'}}\"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                    {% if blogCategories.categories %}
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"{{ 'home-page'|page}}\">Home</a></li>
                        <li class=\"news_margin\"><a href=\"{{ 'news'|page}}\">News</a></li>
                        <li>{% partial blogCategories ~ \"::items\"
                            categories = blogCategories.categories
                            currentCategorySlug = blogCategories.currentCategorySlug
                            %}
                        </li>
                        <li><a href=\"{{ 'tulpennl-zakelijk'|page}}\">Tulpen.nl_zakelijk</a></li>
                        <li><a href=\"{{ 'contact'|page}}\">Contact</a></li>
                    </ul>
                    {% endif %}
                </div>
            </div>
        </nav>
    </header>
</div>
{% set posts = newsPosts.posts %}

<div class=\" demo-1\" style=\"margin-left: -10px;;width: 101.5%;margin-top: -20px;\">
    <div class=\"main\">
        <ul id=\"carousel\" class=\"elastislide-list\">
            {% for post in posts %}
            <li><a href=\"/{{ postPage }}/{{ post.slug }}\"><img src=\"{{ post.image|media }}\" alt=\"{{ post.title}}\"><span class=\"nav_title_span\">{{ str_limit(post.title, 20)}}</span></a></li>
            {% endfor %}
        </ul>
    </div>
</div>", "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/partials/header.htm", "");
    }
}

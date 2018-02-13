<?php

/* /Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/blog/category.htm */
class __TwigTemplate_25d9be68f7f2409416275a6a48feadb73e0557aaf788da930ea426484b56554c extends Twig_Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogPosts"] ?? null), "posts", array());
        // line 2
        echo "
";
        // line 3
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "name", array()) == "Bijzaken")) {
            // line 4
            echo "<div class=\"container \">

    <section id=\"section\" style=\"margin-top: -300px\" class=\"bijzaken\">
        <nav class=\"breadcrumb\">
            <a class=\"breadcrumb-item\" href=\"";
            // line 8
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home-page");
            echo "\">Home</a>
            <span class=\"breadcrumb-item active\">/ ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "name", array()), "html", null, true);
            echo "</span>
        </nav>
        <div class=\"masonry\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 13
                echo "            <div class=\"block ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "name", array()), "html", null, true);
                echo "\">
                ";
                // line 14
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array())) {
                    // line 15
                    echo "                <h3 ><a style=\"text-decoration: none\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                    echo "</a></h3>
                ";
                }
                // line 17
                echo "                ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array())) {
                    // line 18
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
                    echo "\"><img   src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "thumb", array(0 => 400, 1 => 400), "method"), "html", null, true);
                    echo "\"></a>
                ";
                } else {
                    // line 20
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "poster_images", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 21
                        echo "                <img  src=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "thumb", array(0 => 300, 1 => 400), "method"), "html", null, true);
                        echo "\">
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "                ";
                }
                // line 24
                echo "                <p >";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "subImage", array());
                echo "</p>
                <p>";
                // line 25
                echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content_html", array()), 470));
                echo "</p>
                <div class=\"social\" >
                    ";
                // line 27
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("yandexShare"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                // line 28
                echo "
                </div>
                <a class=\"pinter_icon\" style=\"\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url=";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "path", array()), "html", null, true);
                echo "&media=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "path", array()), "html", null, true);
                echo "\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px;margin-left: 0;float: right;margin-right: 4px\" src=\"";
                echo "../../themes/tulpen/assets/img/pin.jpg";
                echo "\" width=\"25\" height=\"25\"></a>

            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        </div>
    </section>
</div>


";
        } else {
            // line 40
            echo "
<div class=\"container \" style=\"max-width: 1600px\">

    <section id=\"section1\" style=\"margin-top: -300px\">
        <nav style=\"display: block;\" class=\"breadcrumb\">
            <a style=\"color: #000\" class=\"breadcrumb-item\" href=\"";
            // line 45
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home-page");
            echo "\">Home ></a>
            <span class=\"breadcrumb-item active\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "path", array()), "html", null, true);
            echo "</span>
        </nav>
        <div id=\"listBlock\" class=\"masonry\" >

            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 51
                echo "            <div class=\"block ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["category"] ?? null), "name", array()), "html", null, true);
                echo "\">
                ";
                // line 52
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array())) {
                    // line 53
                    echo "                    <h3 ><a style=\"text-decoration: none\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                    echo "</a></h3>
                ";
                }
                // line 55
                echo "                ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array())) {
                    // line 56
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
                    echo "\"><img   src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "thumb", array(0 => 1700, 1 => 1700), "method"), "html", null, true);
                    echo "\"></a>
                ";
                } else {
                    // line 58
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "poster_images", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 59
                        echo "                    <img  src=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "thumb", array(0 => 300, 1 => 400), "method"), "html", null, true);
                        echo "\">
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "                ";
                }
                // line 62
                echo "                <p >";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "subImage", array());
                echo "</p>
                <p>";
                // line 63
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content_html", array()), 270));
                echo "</p>
                <div class=\"social\" >
                    ";
                // line 65
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("yandexShare"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                // line 66
                echo "
                </div>
                <a class=\"pinter_icon\" style=\"display: inline-block;float: right;margin-right: 4px\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url=";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "path", array()), "html", null, true);
                echo "&media=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "path", array()), "html", null, true);
                echo "\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px;margin-left: 0\" src=\"";
                echo "../../themes/tulpen/assets/img/pin.jpg";
                echo "\" width=\"25\" height=\"25\"></a>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "        </div>
        <div id=\"loadMore\">Toon meer tulpeninfo artikelen</div>
    </section>
";
        }
        // line 75
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/blog/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 75,  227 => 71,  214 => 68,  210 => 66,  206 => 65,  201 => 63,  196 => 62,  193 => 61,  184 => 59,  179 => 58,  171 => 56,  168 => 55,  160 => 53,  158 => 52,  153 => 51,  149 => 50,  140 => 46,  136 => 45,  129 => 40,  121 => 34,  107 => 30,  103 => 28,  99 => 27,  94 => 25,  89 => 24,  86 => 23,  77 => 21,  72 => 20,  64 => 18,  61 => 17,  53 => 15,  51 => 14,  46 => 13,  42 => 12,  36 => 9,  32 => 8,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = blogPosts.posts %}

{% if category.name == 'Bijzaken' %}
<div class=\"container \">

    <section id=\"section\" style=\"margin-top: -300px\" class=\"bijzaken\">
        <nav class=\"breadcrumb\">
            <a class=\"breadcrumb-item\" href=\"{{ 'home-page'|page}}\">Home</a>
            <span class=\"breadcrumb-item active\">/ {{ category.name }}</span>
        </nav>
        <div class=\"masonry\">
            {% for post in posts %}
            <div class=\"block {{category.name }}\">
                {% if post.title %}
                <h3 ><a style=\"text-decoration: none\" href=\"{{ post.url }}\">{{ post.title }}</a></h3>
                {% endif %}
                {% if post.featured_images %}
                <a href=\"{{post.url}}\"><img   src=\"{{post.featured_images.thumb(400,400)}}\"></a>
                {% else %}
                {% for image in post.poster_images %}
                <img  src=\"{{image.thumb(300,400)}}\">
                {% endfor %}
                {% endif %}
                <p >{{ post.subImage|raw }}</p>
                <p>{{ str_limit(post.content_html|raw, 470) }}</p>
                <div class=\"social\" >
                    {% component 'yandexShare' %}

                </div>
                <a class=\"pinter_icon\" style=\"\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url={{ post.featured_images.path }}&media={{ post.featured_images.path }}\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px;margin-left: 0;float: right;margin-right: 4px\" src=\"{{'../../themes/tulpen/assets/img/pin.jpg'}}\" width=\"25\" height=\"25\"></a>

            </div>
            {% endfor %}
        </div>
    </section>
</div>


{% else %}

<div class=\"container \" style=\"max-width: 1600px\">

    <section id=\"section1\" style=\"margin-top: -300px\">
        <nav style=\"display: block;\" class=\"breadcrumb\">
            <a style=\"color: #000\" class=\"breadcrumb-item\" href=\"{{ 'home-page'|page}}\">Home ></a>
            <span class=\"breadcrumb-item active\">{{ category.name }} {{ category.path }}</span>
        </nav>
        <div id=\"listBlock\" class=\"masonry\" >

            {% for post in posts %}
            <div class=\"block {{category.name }}\">
                {% if post.title %}
                    <h3 ><a style=\"text-decoration: none\" href=\"{{ post.url }}\">{{ post.title }}</a></h3>
                {% endif %}
                {% if post.featured_images %}
                    <a href=\"{{post.url}}\"><img   src=\"{{post.featured_images.thumb(1700,1700)}}\"></a>
                {% else %}
                {% for image in post.poster_images %}
                    <img  src=\"{{image.thumb(300,400)}}\">
                {% endfor %}
                {% endif %}
                <p >{{ post.subImage|raw }}</p>
                <p>{{ html_limit(post.content_html|raw, 270) }}</p>
                <div class=\"social\" >
                    {% component 'yandexShare' %}

                </div>
                <a class=\"pinter_icon\" style=\"display: inline-block;float: right;margin-right: 4px\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url={{ post.featured_images.path }}&media={{ post.featured_images.path }}\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px;margin-left: 0\" src=\"{{'../../themes/tulpen/assets/img/pin.jpg'}}\" width=\"25\" height=\"25\"></a>
            </div>
            {% endfor %}
        </div>
        <div id=\"loadMore\">Toon meer tulpeninfo artikelen</div>
    </section>
{% endif %}
</div>", "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/blog/category.htm", "");
    }
}

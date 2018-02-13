<?php

/* /Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/home-page.htm */
class __TwigTemplate_ce10044c5314bb35c350879057967b52d3e3222040fecb26d3cb7c3cbdf4c57b extends Twig_Template
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
<div class=\"container home_container\">
    
    <section id=\"section\" style=\"margin-top: -300px\">
        <div id=\"listBlock\" class=\"masonry\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "
                ";
            // line 9
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_in_homePage", array()) == 1)) {
                // line 10
                echo "                    <div  class=\"block ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "categories", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\">
                        ";
                // line 11
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array())) {
                    // line 12
                    echo "                        <!--<div class=\"fb-share-button\"  data-href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
                    echo "\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>-->

                        <h3 ><a style=\"text-decoration: none\" href=\"";
                    // line 14
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content_html", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
                        echo " ";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                    echo "</a></h3>
                        ";
                }
                // line 16
                echo "                        ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array())) {
                    // line 17
                    echo "                            <a href=\" ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
                    echo " \"><img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "thumb", array(0 => 1700, 1 => 1700), "method"), "html", null, true);
                    echo "\"></a>

                        ";
                } else {
                    // line 20
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "poster_images", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 21
                        echo "                            <img  src=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "thumb", array(0 => 300, 1 => 400), "method"), "html", null, true);
                        echo "\">
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "                        ";
                }
                // line 24
                echo "                        ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content_html", array())) {
                    // line 25
                    echo "                            <p >";
                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "subImage", array());
                    echo "</p>
                            <p>";
                    // line 26
                    echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content_html", array()), 200));
                    echo "</p>

                        ";
                }
                // line 29
                echo "                        <div class=\"social\" >
                            ";
                // line 30
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("yandexShare"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                // line 31
                echo "                            <a class=\"pinter_icon\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "path", array()), "html", null, true);
                echo "&media=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "path", array()), "html", null, true);
                echo "&description=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                echo "\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px; margin-left: -50px;
    margin-top: -46px;\" src=\"";
                // line 32
                echo "../../themes/tulpen/assets/img/pin.jpg";
                echo "\" width=\"25\" height=\"25\"></a>
                        </div>
                    </div>
                ";
            }
            // line 36
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
        <div id=\"loadMore\">Toon meer tulpeninfo artikelen</div>
    </section>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/home-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 37,  136 => 36,  129 => 32,  120 => 31,  116 => 30,  113 => 29,  107 => 26,  102 => 25,  99 => 24,  96 => 23,  87 => 21,  82 => 20,  73 => 17,  70 => 16,  59 => 14,  53 => 12,  51 => 11,  37 => 10,  35 => 9,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = blogPosts.posts %}

<div class=\"container home_container\">
    
    <section id=\"section\" style=\"margin-top: -300px\">
        <div id=\"listBlock\" class=\"masonry\">
            {% for post in posts %}

                {% if post.published_in_homePage == 1 %}
                    <div  class=\"block {% for category in post.categories %} {{ category.name }} {% endfor %}\">
                        {% if post.title %}
                        <!--<div class=\"fb-share-button\"  data-href=\"{{post.url}}\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>-->

                        <h3 ><a style=\"text-decoration: none\" href=\"{% if post.content_html %} {{ post.url }} {% endif %}\">{{ post.title }}</a></h3>
                        {% endif %}
                        {% if post.featured_images %}
                            <a href=\" {{ post.url }} \"><img src=\"{{post.featured_images.thumb(1700,1700)}}\"></a>

                        {% else %}
                        {% for image in post.poster_images %}
                            <img  src=\"{{image.thumb(300,400)}}\">
                        {% endfor %}
                        {% endif %}
                        {% if post.content_html %}
                            <p >{{ post.subImage|raw }}</p>
                            <p>{{ str_limit(post.content_html|raw, 200) }}</p>

                        {% endif %}
                        <div class=\"social\" >
                            {% component 'yandexShare' %}
                            <a class=\"pinter_icon\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url={{post.featured_images.path}}&media={{post.featured_images.path}}&description={{post.title}}\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px; margin-left: -50px;
    margin-top: -46px;\" src=\"{{'../../themes/tulpen/assets/img/pin.jpg'}}\" width=\"25\" height=\"25\"></a>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
        <div id=\"loadMore\">Toon meer tulpeninfo artikelen</div>
    </section>
</div>", "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/home-page.htm", "");
    }
}

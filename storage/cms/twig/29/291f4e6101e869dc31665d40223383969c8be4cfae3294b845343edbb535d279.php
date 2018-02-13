<?php

/* /Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/tulpennl-zakelijk.htm */
class __TwigTemplate_92b90097d6265b9495966de87f7d30cc3f9f6c10aad02ab10d144ef147d0e502 extends Twig_Template
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



<div class=\"container zakelijk_container\" style=\"margin-top: -300px\">
    ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("breadcrumbs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "    <section id=\"section\" class=\"zakelijk\">
        <div class=\"masonry\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_in_tulpenZakelijk", array()) == 1)) {
                // line 12
                echo "            ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()) == false)) {
                    // line 13
                    echo "            <div class=\"block without_title\">
                ";
                    // line 14
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array())) {
                        // line 15
                        echo "                <h3 ><a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                        echo "</a></h3>
                ";
                    }
                    // line 17
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content_html", array())) {
                        // line 18
                        echo "                <p>";
                        echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content_html", array());
                        echo "</p>
                ";
                    }
                    // line 20
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "excerpt", array())) {
                        // line 21
                        echo "                <p>";
                        echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "excerpt", array());
                        echo "</p>
                ";
                    }
                    // line 23
                    echo "            </div>
            ";
                } else {
                    // line 25
                    echo "            <div class='block'>
                ";
                    // line 26
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array())) {
                        // line 27
                        echo "                <h3 ><a style=\"text-decoration: none\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                        echo "</a></h3>
                ";
                    }
                    // line 29
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array())) {
                        // line 30
                        echo "                <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
                        echo "\"><img  src=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "thumb", array(0 => 1700, 1 => 1700), "method"), "html", null, true);
                        echo "\"></a>
                ";
                    } else {
                        // line 32
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "poster_images", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 33
                            echo "                <img  src=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "thumb", array(0 => 300, 1 => 400), "method"), "html", null, true);
                            echo "\">
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 35
                        echo "                ";
                    }
                    // line 36
                    echo "                <p >";
                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "subImage", array());
                    echo "</p>
                ";
                    // line 37
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content_html", array())) {
                        // line 38
                        echo "                <p>";
                        echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content_html", array()), 300));
                        echo "</p>
                <div class=\"social\" >
                    ";
                        // line 40
                        $context['__cms_component_params'] = [];
                        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("yandexShare"                        , $context['__cms_component_params']                        );
                        unset($context['__cms_component_params']);
                        // line 41
                        echo "
                </div>
                <a class=\"pinter_icon\" style=\"float: right;margin-right: 0;\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url=";
                        // line 43
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "path", array()), "html", null, true);
                        echo "&media=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "path", array()), "html", null, true);
                        echo "&description=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                        echo "\" data-pin-custom=\"true\"><img style=\"float: right;margin-right: 4px;width:46px;height: 46px;margin-left: 0\" src=\"";
                        echo "../../themes/tulpen/assets/img/pin.jpg";
                        echo "\" width=\"25\" height=\"25\"></a>
                ";
                    }
                    // line 45
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "excerpt", array())) {
                        // line 46
                        echo "                <p>";
                        echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "excerpt", array()), 300));
                        echo "</p>
                <div class=\"social\" >
                    ";
                        // line 48
                        $context['__cms_component_params'] = [];
                        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("yandexShare"                        , $context['__cms_component_params']                        );
                        unset($context['__cms_component_params']);
                        // line 49
                        echo "
                </div>
                <a class=\"pinter_icon\" style=\"position: absolute;right: 110px;\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url=";
                        // line 51
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "path", array()), "html", null, true);
                        echo "&media=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "path", array()), "html", null, true);
                        echo "&description=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                        echo "\" data-pin-custom=\"true\"><img style=\"float: right;margin-right: 4px;width:46px;height: 46px;margin-left: 0\" src=\"";
                        echo "../../themes/tulpen/assets/img/pin.jpg";
                        echo "\" width=\"25\" height=\"25\"></a>
                ";
                    }
                    // line 53
                    echo "            </div>
            ";
                }
                // line 55
                echo "            ";
            }
            // line 56
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </div>
    </section>
    <div class=\"contact_page text-center col-sm-6 col-sm-offset-5\">
        <p><a href=\"";
        // line 60
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(($context["contact"] ?? null));
        echo "\" style=\"text-decoration: none;color: #FFF\" >Contact</a></p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/tulpennl-zakelijk.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 60,  195 => 57,  189 => 56,  186 => 55,  182 => 53,  171 => 51,  167 => 49,  163 => 48,  157 => 46,  154 => 45,  143 => 43,  139 => 41,  135 => 40,  129 => 38,  127 => 37,  122 => 36,  119 => 35,  110 => 33,  105 => 32,  97 => 30,  94 => 29,  86 => 27,  84 => 26,  81 => 25,  77 => 23,  71 => 21,  68 => 20,  62 => 18,  59 => 17,  51 => 15,  49 => 14,  46 => 13,  43 => 12,  40 => 11,  36 => 10,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = blogPosts.posts %}




<div class=\"container zakelijk_container\" style=\"margin-top: -300px\">
    {% component 'breadcrumbs' %}
    <section id=\"section\" class=\"zakelijk\">
        <div class=\"masonry\">
            {% for post in posts %}
            {% if post.published_in_tulpenZakelijk == 1 %}
            {% if post.featured_images == false %}
            <div class=\"block without_title\">
                {% if post.title %}
                <h3 ><a href=\"{{ post.url }}\">{{ post.title }}</a></h3>
                {% endif %}
                {% if post.content_html %}
                <p>{{post.content_html|raw }}</p>
                {% endif %}
                {% if post.excerpt %}
                <p>{{post.excerpt|raw }}</p>
                {% endif %}
            </div>
            {% else %}
            <div class='block'>
                {% if post.title %}
                <h3 ><a style=\"text-decoration: none\" href=\"{{ post.url }}\">{{ post.title }}</a></h3>
                {% endif %}
                {% if post.featured_images %}
                <a href=\"{{post.url}}\"><img  src=\"{{post.featured_images.thumb(1700,1700)}}\"></a>
                {% else %}
                {% for image in post.poster_images %}
                <img  src=\"{{image.thumb(300,400)}}\">
                {% endfor %}
                {% endif %}
                <p >{{ post.subImage|raw }}</p>
                {% if post.content_html %}
                <p>{{str_limit(post.content_html|raw, 300) }}</p>
                <div class=\"social\" >
                    {% component 'yandexShare' %}

                </div>
                <a class=\"pinter_icon\" style=\"float: right;margin-right: 0;\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url={{post.featured_images.path}}&media={{post.featured_images.path}}&description={{post.title}}\" data-pin-custom=\"true\"><img style=\"float: right;margin-right: 4px;width:46px;height: 46px;margin-left: 0\" src=\"{{'../../themes/tulpen/assets/img/pin.jpg'}}\" width=\"25\" height=\"25\"></a>
                {% endif %}
                {% if post.excerpt %}
                <p>{{str_limit(post.excerpt, 300) }}</p>
                <div class=\"social\" >
                    {% component 'yandexShare' %}

                </div>
                <a class=\"pinter_icon\" style=\"position: absolute;right: 110px;\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url={{post.featured_images.path}}&media={{post.featured_images.path}}&description={{post.title}}\" data-pin-custom=\"true\"><img style=\"float: right;margin-right: 4px;width:46px;height: 46px;margin-left: 0\" src=\"{{'../../themes/tulpen/assets/img/pin.jpg'}}\" width=\"25\" height=\"25\"></a>
                {% endif %}
            </div>
            {% endif %}
            {% endif %}
            {% endfor %}
        </div>
    </section>
    <div class=\"contact_page text-center col-sm-6 col-sm-offset-5\">
        <p><a href=\"{{ contact|page }}\" style=\"text-decoration: none;color: #FFF\" >Contact</a></p>
    </div>
</div>", "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/tulpennl-zakelijk.htm", "");
    }
}

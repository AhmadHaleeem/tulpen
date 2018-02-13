<?php

/* /Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/singlepostpage.htm */
class __TwigTemplate_83210973a79c33083db9098b755b28ef400f1202142a6eb752f93a49a17bea68 extends Twig_Template
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
        $context["post"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogPost"] ?? null), "post", array());
        // line 2
        echo "<div class=\"container single_container\" style=\"margin-top: -300px;\">
    <nav style=\"margin-left: 35px\" class=\"breadcrumb\">
        <a class=\"breadcrumb-item\" href=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home-page");
        echo "\">Home ></a>
        ";
        // line 5
        if (($context["category"] ?? null)) {
            // line 6
            echo "        <a class=\"breadcrumb-item\" href=\"http://tulpen.beeldr/blog/category/";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 8
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo " >
        </a>
        ";
        }
        // line 12
        echo "        <span class=\"breadcrumb-item active\">
            ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "
        </span>
    </nav>
    <div id=\"content\" >
        ";
        // line 17
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content", array())) {
            // line 18
            echo "        <div href=\"#\" class=\"post featured\">
            <a ><h2 >";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
            echo "</h2></a>
            <p>";
            // line 20
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content_html", array());
            echo "</p>
            <div class=\"social\" >
                ";
            // line 22
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("yandexShare"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 23
            echo "            </div>
            <a class=\"pinter_icon\" style=\"position: absolute;right: 122px;\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url=";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()), "path", array()), "html", null, true);
            echo "&media=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()), "path", array()), "html", null, true);
            echo "&description=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
            echo "\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px;margin-left: 0\" src=\"";
            echo "../../themes/tulpen/assets/img/pin.jpg";
            echo "\" width=\"25\" height=\"25\"></a>

        </div>
        ";
        }
        // line 28
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "excerpt", array())) {
            // line 29
            echo "        <div href=\"#\" class=\"post featured\">
            <a ><h2 >";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
            echo "</h2></a>
            <p>";
            // line 31
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "excerpt", array());
            echo "</p>
            <div class=\"social\" >
                ";
            // line 33
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("yandexShare"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 34
            echo "
            </div>
            <a class=\"pinter_icon\" style=\"position: absolute;right: 122px;\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url=";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()), "path", array()), "html", null, true);
            echo "&media=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()), "path", array()), "html", null, true);
            echo "&description=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
            echo "\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px;margin-left: 0\" src=\"";
            echo "../../themes/tulpen/assets/img/pin.jpg";
            echo "\" width=\"25\" height=\"25\"></a>

        </div>
        ";
        }
        // line 40
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogRelated"] ?? null), "posts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["Post"]) {
            // line 41
            echo "        <div class=\"post related \">
            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["Post"], "url", array()), "html", null, true);
            echo "\"><h2 >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["Post"], "title", array()), "html", null, true);
            echo "</h2></a>
            <p>
                <a  href=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["Post"], "url", array()), "html", null, true);
            echo "\"><img style=\"margin-bottom: -30px;\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["Post"], "featured_images", array()), "thumb", array(0 => 1700, 1 => 1700), "method"), "html", null, true);
            echo "\"></a>
                <!--<a data-pin-do=\"buttonBookmark\" href=\"https://www.pinterest.com/pin/create/button/\"></a>-->
            </p>
            ";
            // line 47
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["Post"], "content_html", array())) {
                // line 48
                echo "                 <p>";
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["Post"], "content_html", array()), 200));
                echo "</p>
                <div class=\"social\" >
                    ";
                // line 50
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("yandexShare"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                // line 51
                echo "
                </div>
                <a class=\"pinter_icon\" style=\"position: absolute;right: 110px;\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url=";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["Post"], "featured_images", array()), "path", array()), "html", null, true);
                echo "&media=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["Post"], "featured_images", array()), "path", array()), "html", null, true);
                echo "&description=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["Post"], "title", array()), "html", null, true);
                echo "\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px;margin-left: 0\" src=\"";
                echo "../../themes/tulpen/assets/img/pin.jpg";
                echo "\" width=\"25\" height=\"25\"></a>

            ";
            }
            // line 56
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["Post"], "excerpt", array())) {
                // line 57
                echo "                <p>";
                echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["Post"], "excerpt", array()), 200));
                echo "</p>
                <div class=\"social\" >
                    ";
                // line 59
                $context['__cms_component_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("yandexShare"                , $context['__cms_component_params']                );
                unset($context['__cms_component_params']);
                // line 60
                echo "
                </div>
                <a class=\"pinter_icon\" style=\"position: absolute;right: 110px;\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url=";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["Post"], "featured_images", array()), "path", array()), "html", null, true);
                echo "&media=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["Post"], "featured_images", array()), "path", array()), "html", null, true);
                echo "&description=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["Post"], "title", array()), "html", null, true);
                echo "\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px;margin-left: 0\" src=\"";
                echo "../../themes/tulpen/assets/img/pin.jpg";
                echo "\" width=\"25\" height=\"25\"></a>

            ";
            }
            // line 65
            echo "        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        <div id=\"loadMore\">Toon meer tulpeninfo artikelen</div>
        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "poster_images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 69
            echo "        <div style=\"margin-left: 40px; \" class=\"post poster_image\">
            <img style=\"position: relative;\" src=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "thumb", array(0 => 300, 1 => 400), "method"), "html", null, true);
            echo "\">
            <a class=\"pinter_icon\" style=\"position: absolute;right: 8px;\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url=";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "html", null, true);
            echo "&media=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "html", null, true);
            echo "&description=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
            echo "\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px; margin-left: -50px;
    margin-top: -46px;\" src=\"";
            // line 72
            echo "../../themes/tulpen/assets/img/pin.jpg";
            echo "\" width=\"25\" height=\"25\"></a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/singlepostpage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 75,  251 => 72,  243 => 71,  239 => 70,  236 => 69,  232 => 68,  229 => 67,  222 => 65,  210 => 62,  206 => 60,  202 => 59,  196 => 57,  193 => 56,  181 => 53,  177 => 51,  173 => 50,  167 => 48,  165 => 47,  157 => 44,  150 => 42,  147 => 41,  142 => 40,  129 => 36,  125 => 34,  121 => 33,  116 => 31,  112 => 30,  109 => 29,  106 => 28,  93 => 24,  90 => 23,  86 => 22,  81 => 20,  77 => 19,  74 => 18,  72 => 17,  65 => 13,  62 => 12,  57 => 9,  48 => 8,  44 => 7,  31 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = blogPost.post %}
<div class=\"container single_container\" style=\"margin-top: -300px;\">
    <nav style=\"margin-left: 35px\" class=\"breadcrumb\">
        <a class=\"breadcrumb-item\" href=\"{{ 'home-page'|page}}\">Home ></a>
        {% if category %}
        <a class=\"breadcrumb-item\" href=\"http://tulpen.beeldr/blog/category/{% for category in post.categories %}{{ category.name }} {% endfor %}\">
            {% for category in post.categories %}
                {{ category.name }}
            {% endfor %} >
        </a>
        {% endif %}
        <span class=\"breadcrumb-item active\">
            {{ post.title }}
        </span>
    </nav>
    <div id=\"content\" >
        {% if post.content %}
        <div href=\"#\" class=\"post featured\">
            <a ><h2 >{{ post.title }}</h2></a>
            <p>{{ post.content_html|raw }}</p>
            <div class=\"social\" >
                {% component 'yandexShare' %}
            </div>
            <a class=\"pinter_icon\" style=\"position: absolute;right: 122px;\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url={{post.featured_images.path}}&media={{post.featured_images.path}}&description={{post.title}}\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px;margin-left: 0\" src=\"{{'../../themes/tulpen/assets/img/pin.jpg'}}\" width=\"25\" height=\"25\"></a>

        </div>
        {% endif %}
        {% if post.excerpt %}
        <div href=\"#\" class=\"post featured\">
            <a ><h2 >{{ post.title }}</h2></a>
            <p>{{ post.excerpt|raw }}</p>
            <div class=\"social\" >
                {% component 'yandexShare' %}

            </div>
            <a class=\"pinter_icon\" style=\"position: absolute;right: 122px;\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url={{post.featured_images.path}}&media={{post.featured_images.path}}&description={{post.title}}\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px;margin-left: 0\" src=\"{{'../../themes/tulpen/assets/img/pin.jpg'}}\" width=\"25\" height=\"25\"></a>

        </div>
        {% endif %}
        {% for Post in blogRelated.posts %}
        <div class=\"post related \">
            <a href=\"{{Post.url}}\"><h2 >{{ Post.title }}</h2></a>
            <p>
                <a  href=\"{{Post.url}}\"><img style=\"margin-bottom: -30px;\" src=\"{{Post.featured_images.thumb(1700,1700)}}\"></a>
                <!--<a data-pin-do=\"buttonBookmark\" href=\"https://www.pinterest.com/pin/create/button/\"></a>-->
            </p>
            {% if Post.content_html %}
                 <p>{{html_limit(Post.content_html, 200)|raw}}</p>
                <div class=\"social\" >
                    {% component 'yandexShare' %}

                </div>
                <a class=\"pinter_icon\" style=\"position: absolute;right: 110px;\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url={{Post.featured_images.path}}&media={{Post.featured_images.path}}&description={{Post.title}}\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px;margin-left: 0\" src=\"{{'../../themes/tulpen/assets/img/pin.jpg'}}\" width=\"25\" height=\"25\"></a>

            {% endif %}
            {% if Post.excerpt %}
                <p>{{html_limit(Post.excerpt, 200)|raw }}</p>
                <div class=\"social\" >
                    {% component 'yandexShare' %}

                </div>
                <a class=\"pinter_icon\" style=\"position: absolute;right: 110px;\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url={{Post.featured_images.path}}&media={{Post.featured_images.path}}&description={{Post.title}}\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px;margin-left: 0\" src=\"{{'../../themes/tulpen/assets/img/pin.jpg'}}\" width=\"25\" height=\"25\"></a>

            {% endif %}
        </div>
        {% endfor %}
        <div id=\"loadMore\">Toon meer tulpeninfo artikelen</div>
        {% for image in post.poster_images %}
        <div style=\"margin-left: 40px; \" class=\"post poster_image\">
            <img style=\"position: relative;\" src=\"{{image.thumb(300,400)}}\">
            <a class=\"pinter_icon\" style=\"position: absolute;right: 8px;\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url={{ image.path }}&media={{ image.path}}&description={{post.title}}\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px; margin-left: -50px;
    margin-top: -46px;\" src=\"{{'../../themes/tulpen/assets/img/pin.jpg'}}\" width=\"25\" height=\"25\"></a>
        </div>
        {% endfor %}

    </div>

</div>", "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/singlepostpage.htm", "");
    }
}

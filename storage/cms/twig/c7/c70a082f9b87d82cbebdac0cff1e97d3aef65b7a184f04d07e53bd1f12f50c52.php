<?php

/* /Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/post-page.htm */
class __TwigTemplate_e8649eec88535ec9ee8ae8d0f5b6d1fb9e9024f8f26679d03e4a28646aa4b979 extends Twig_Template
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
        echo "<div class=\"container\">
    <section id=\"section\" style=\"margin-top: -300px\">
        <div class=\"masonry\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "display_in_homepage", array()) == 1)) {
                // line 7
                echo "            <div class=\"block\">
                ";
                // line 8
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array())) {
                    // line 9
                    echo "                <h3 ><a style=\"text-decoration: none\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                    echo "</a></h3>
                ";
                }
                // line 11
                echo "                ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array())) {
                    // line 12
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
                    echo "\"><img   src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "thumb", array(0 => 1700, 1 => 1700), "method"), "html", null, true);
                    echo "\"></a>
                ";
                } else {
                    // line 14
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "poster_images", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 15
                        echo "                <img  src=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "thumb", array(0 => 300, 1 => 400), "method"), "html", null, true);
                        echo "\">
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "                ";
                }
                // line 18
                echo "                <p >";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "subImage", array());
                echo "</p>
                <p>";
                // line 19
                echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content_html", array()), 200));
                echo "</p>
            </div>
            ";
            }
            // line 22
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </section>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/post-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  85 => 22,  79 => 19,  74 => 18,  71 => 17,  62 => 15,  57 => 14,  49 => 12,  46 => 11,  38 => 9,  36 => 8,  33 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = blogPosts.posts %}
<div class=\"container\">
    <section id=\"section\" style=\"margin-top: -300px\">
        <div class=\"masonry\">
            {% for post in posts %}
            {% if post.display_in_homepage == 1 %}
            <div class=\"block\">
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
                <p>{{ str_limit(post.content_html|raw, 200) }}</p>
            </div>
            {% endif %}
            {% endfor %}
        </div>
    </section>
</div>", "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/post-page.htm", "");
    }
}

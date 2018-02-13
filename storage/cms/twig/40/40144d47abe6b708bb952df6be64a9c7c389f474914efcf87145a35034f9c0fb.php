<?php

/* /Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/news.htm */
class __TwigTemplate_3f03496f6b3c45807100ec2fd721a9f6627237c3ec465f87d4adef4df3816a69 extends Twig_Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["newsPosts"] ?? null), "posts", array());
        // line 2
        echo "
<div class=\"container container-news\">
    ";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("breadcrumbs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "    <div class=\"well\" ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()) == "News")) {
            echo " style=\"border: 2px solid #00AB4A;background-color: #FFF\"   ";
        }
        echo ">
        <h2 class=\"news_title\" ";
        // line 6
        echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
        echo ">Nieuws</h2>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "        <div class=\"media\">
            <a class=\"pull-left\" href=\"#\">
                ";
            // line 10
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "image", array())) {
                echo "<div class=\"post-image\"><a href=\"/";
                echo twig_escape_filter($this->env, ($context["postPage"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array()), "html", null, true);
                echo "\"><img  src=\"";
                echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "image", array()));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                echo "\"></a></div>";
            }
            // line 11
            echo "            </a>
            <div class=\"media-body\" >
                <h4 class=\"media-heading\"><a href=\"/";
            // line 13
            echo twig_escape_filter($this->env, ($context["postPage"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</a></h4>

                ";
            // line 15
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "introductory", array())) {
                // line 16
                echo "                <div class=\"post-introductory\">";
                echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "introductory", array()), 150));
                echo "</div>
                ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 17
$context["post"], "content", array())) {
                // line 18
                echo "                <div class=\"post-content\">";
                echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content", array()), 150));
                echo "</div>
                ";
            }
            // line 20
            echo "            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </div>
    <div class=\"social\">
        ";
        // line 25
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("ssbuttonsssb"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "    </div>
    ";
        // line 27
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "render", array());
        echo "
    
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 27,  104 => 26,  100 => 25,  96 => 23,  88 => 20,  82 => 18,  80 => 17,  75 => 16,  73 => 15,  64 => 13,  60 => 11,  48 => 10,  44 => 8,  40 => 7,  36 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = newsPosts.posts %}

<div class=\"container container-news\">
    {% component 'breadcrumbs' %}
    <div class=\"well\" {% if this.page.title == \"News\" %} style=\"border: 2px solid #00AB4A;background-color: #FFF\"   {% endif %}>
        <h2 class=\"news_title\" {{ style }}>Nieuws</h2>
        {% for post in posts %}
        <div class=\"media\">
            <a class=\"pull-left\" href=\"#\">
                {% if post.image %}<div class=\"post-image\"><a href=\"/{{ postPage }}/{{ post.slug }}\"><img  src=\"{{ post.image|media }}\" alt=\"{{ post.title }}\"></a></div>{% endif %}
            </a>
            <div class=\"media-body\" >
                <h4 class=\"media-heading\"><a href=\"/{{ postPage }}/{{ post.slug }}\">{{ post.title }}</a></h4>

                {% if post.introductory %}
                <div class=\"post-introductory\">{{ str_limit(post.introductory|raw, 150) }}</div>
                {% elseif post.content %}
                <div class=\"post-content\">{{ str_limit(post.content|raw, 150) }}</div>
                {% endif %}
            </div>
        </div>
        {% endfor %}
    </div>
    <div class=\"social\">
        {% component 'ssbuttonsssb' %}
    </div>
    {{ posts.render|raw }}
    
</div>", "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/news.htm", "");
    }
}

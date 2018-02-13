<?php

/* /Users/ahmadhaleem/Desktop/tulpen/install-master /plugins/alexlit/yandexshare/components/buttons/default.htm */
class __TwigTemplate_c121f788891c68a53297c013d576a464c4f8d927f0fd168396c585cc92124b0d extends Twig_Template
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
        echo "<div

    class=\"ya-share2\"

    ";
        // line 5
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "access_token"), "method")) {
            // line 6
            echo "        data-access-token=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "access_token"), "method"), "html", null, true);
            echo "\"
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "bare"), "method")) {
            // line 10
            echo "        data-bare
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "counter"), "method")) {
            // line 14
            echo "        data-counter
    ";
        }
        // line 16
        echo "
    data-copy=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "copy"), "method"), "html", null, true);
        echo "\"

    ";
        // line 19
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "description"), "method")) {
            // line 20
            echo "        data-description=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "description"), "method"), "html", null, true);
            echo "\"
    ";
        }
        // line 22
        echo "
    data-direction=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "direction"), "method"), "html", null, true);
        echo "\"

    ";
        // line 25
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "hashtags"), "method")) {
            // line 26
            echo "        data-hashtags=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "hashtags"), "method"), "html", null, true);
            echo "\"
    ";
        }
        // line 28
        echo "
    ";
        // line 29
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "image"), "method")) {
            // line 30
            echo "        data-image=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "image"), "method"), "html", null, true);
            echo "\"
    ";
        }
        // line 32
        echo "
    data-lang=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "lang"), "method"), "html", null, true);
        echo "\"

    ";
        // line 35
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "limit"), "method")) {
            // line 36
            echo "        data-limit=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "limit"), "method"), "html", null, true);
            echo "\"
    ";
        }
        // line 38
        echo "
    data-popup-direction=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "popup_direction"), "method"), "html", null, true);
        echo "\"

    data-popup-position=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "popup_position"), "method"), "html", null, true);
        echo "\"

    data-size=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "size"), "method"), "html", null, true);
        echo "\"

    ";
        // line 45
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "title"), "method")) {
            // line 46
            echo "        data-title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "title"), "method"), "html", null, true);
            echo "\"
    ";
        }
        // line 48
        echo "
    ";
        // line 49
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "url"), "method")) {
            // line 50
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "url"), "method"), "html", null, true);
            echo "\"
    ";
        }
        // line 52
        echo "
    data-services=\"";
        // line 53
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "collections"), "method")) {
            echo "collections,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "vkontakte"), "method")) {
            echo "vkontakte,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "facebook"), "method")) {
            echo "facebook,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "odnoklassniki"), "method")) {
            echo "odnoklassniki,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "moimir"), "method")) {
            echo "moimir,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "gplus"), "method")) {
            echo "gplus,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "pinterest"), "method")) {
            echo "pinterest,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "twitter"), "method")) {
            echo "twitter,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "blogger"), "method")) {
            echo "blogger,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "delicious"), "method")) {
            echo "delicious,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "digg"), "method")) {
            echo "digg,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "reddit"), "method")) {
            echo "reddit,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "evernote"), "method")) {
            echo "evernote,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "linkedin"), "method")) {
            echo "linkedin,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "lj"), "method")) {
            echo "lj,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "pocket"), "method")) {
            echo "pocket,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "qzone"), "method")) {
            echo "qzone,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "renren"), "method")) {
            echo "renren,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "sinaWeibo"), "method")) {
            echo "sinaWeibo,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "surfingbird"), "method")) {
            echo "surfingbird,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "tencentWeibo"), "method")) {
            echo "tencentWeibo,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "tumblr"), "method")) {
            echo "tumblr,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "viber"), "method")) {
            echo "viber,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "whatsapp"), "method")) {
            echo "whatsapp,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "skype"), "method")) {
            echo "skype,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "telegram"), "method")) {
            echo "telegram";
        }
        echo "\"

></div>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Desktop/tulpen/install-master /plugins/alexlit/yandexshare/components/buttons/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 53,  147 => 52,  141 => 50,  139 => 49,  136 => 48,  130 => 46,  128 => 45,  123 => 43,  118 => 41,  113 => 39,  110 => 38,  104 => 36,  102 => 35,  97 => 33,  94 => 32,  88 => 30,  86 => 29,  83 => 28,  77 => 26,  75 => 25,  70 => 23,  67 => 22,  61 => 20,  59 => 19,  54 => 17,  51 => 16,  47 => 14,  45 => 13,  42 => 12,  38 => 10,  36 => 9,  33 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div

    class=\"ya-share2\"

    {% if __SELF__.property('access_token') %}
        data-access-token=\"{{ __SELF__.property('access_token') }}\"
    {% endif %}

    {% if __SELF__.property('bare') %}
        data-bare
    {% endif %}

    {% if __SELF__.property('counter') %}
        data-counter
    {% endif %}

    data-copy=\"{{ __SELF__.property('copy') }}\"

    {% if __SELF__.property('description') %}
        data-description=\"{{ __SELF__.property('description') }}\"
    {% endif %}

    data-direction=\"{{ __SELF__.property('direction') }}\"

    {% if __SELF__.property('hashtags') %}
        data-hashtags=\"{{ __SELF__.property('hashtags') }}\"
    {% endif %}

    {% if __SELF__.property('image') %}
        data-image=\"{{ __SELF__.property('image') }}\"
    {% endif %}

    data-lang=\"{{ __SELF__.property('lang') }}\"

    {% if __SELF__.property('limit') %}
        data-limit=\"{{ __SELF__.property('limit') }}\"
    {% endif %}

    data-popup-direction=\"{{ __SELF__.property('popup_direction') }}\"

    data-popup-position=\"{{ __SELF__.property('popup_position') }}\"

    data-size=\"{{ __SELF__.property('size') }}\"

    {% if __SELF__.property('title') %}
        data-title=\"{{ __SELF__.property('title') }}\"
    {% endif %}

    {% if __SELF__.property('url') %}
        data-url=\"{{ __SELF__.property('url') }}\"
    {% endif %}

    data-services=\"{% if __SELF__.property('collections') %}collections,{% endif %}{% if __SELF__.property('vkontakte') %}vkontakte,{% endif %}{% if __SELF__.property('facebook') %}facebook,{% endif %}{% if __SELF__.property('odnoklassniki') %}odnoklassniki,{% endif %}{% if __SELF__.property('moimir') %}moimir,{% endif %}{% if __SELF__.property('gplus') %}gplus,{% endif %}{% if __SELF__.property('pinterest') %}pinterest,{% endif %}{% if __SELF__.property('twitter') %}twitter,{% endif %}{% if __SELF__.property('blogger') %}blogger,{% endif %}{% if __SELF__.property('delicious') %}delicious,{% endif %}{% if __SELF__.property('digg') %}digg,{% endif %}{% if __SELF__.property('reddit') %}reddit,{% endif %}{% if __SELF__.property('evernote') %}evernote,{% endif %}{% if __SELF__.property('linkedin') %}linkedin,{% endif %}{% if __SELF__.property('lj') %}lj,{% endif %}{% if __SELF__.property('pocket') %}pocket,{% endif %}{% if __SELF__.property('qzone') %}qzone,{% endif %}{% if __SELF__.property('renren') %}renren,{% endif %}{% if __SELF__.property('sinaWeibo') %}sinaWeibo,{% endif %}{% if __SELF__.property('surfingbird') %}surfingbird,{% endif %}{% if __SELF__.property('tencentWeibo') %}tencentWeibo,{% endif %}{% if __SELF__.property('tumblr') %}tumblr,{% endif %}{% if __SELF__.property('viber') %}viber,{% endif %}{% if __SELF__.property('whatsapp') %}whatsapp,{% endif %}{% if __SELF__.property('skype') %}skype,{% endif %}{% if __SELF__.property('telegram') %}telegram{% endif %}\"

></div>", "/Users/ahmadhaleem/Desktop/tulpen/install-master /plugins/alexlit/yandexshare/components/buttons/default.htm", "");
    }
}

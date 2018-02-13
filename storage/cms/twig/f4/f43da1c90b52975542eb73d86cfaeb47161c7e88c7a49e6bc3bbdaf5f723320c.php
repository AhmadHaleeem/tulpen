<?php

/* /Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/news-page.htm */
class __TwigTemplate_4c2659680af866b5647dc12d28aa96480248629732e07e140b05b4a80edcce8a extends Twig_Template
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
        $context["post"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["newsPost"] ?? null), "post", array());
        // line 2
        echo "<div class=\"container \" style=\"margin-top: -300px\">
    <div class=\"single-news col-md-8 col-xs-12\" >
        <div class=\"post-content \" style=\"margin-bottom: 50px\">
            <h2 class=\"post-title\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h2>
            ";
        // line 6
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "introductory", array())) {
            echo "<div class=\"post-introductory\">";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "introductory", array());
            echo "</div>";
        }
        // line 7
        echo "            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content", array())) {
            echo "<div class=\"post-content\">";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content", array());
            echo "</div>";
        }
        // line 8
        echo "            <p class=\"post-date\" style=\"\">Geplaatst op ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "published_at", array()), "Y-m-d"), "html", null, true);
        echo "</p>
            <!-- Your share button code -->

        </div>
        <div class=\"social_m\">
            <div

    class=\"ya-share2\"

    ";
        // line 17
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "access_token"), "method")) {
            // line 18
            echo "        data-access-token=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "access_token"), "method"), "html", null, true);
            echo "\"
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "bare"), "method")) {
            // line 22
            echo "        data-bare
    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "counter"), "method")) {
            // line 26
            echo "        data-counter
    ";
        }
        // line 28
        echo "
    data-copy=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "copy"), "method"), "html", null, true);
        echo "\"

    ";
        // line 31
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "description"), "method")) {
            // line 32
            echo "        data-description=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "description"), "method"), "html", null, true);
            echo "\"
    ";
        }
        // line 34
        echo "
    data-direction=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "direction"), "method"), "html", null, true);
        echo "\"

    ";
        // line 37
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "hashtags"), "method")) {
            // line 38
            echo "        data-hashtags=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "hashtags"), "method"), "html", null, true);
            echo "\"
    ";
        }
        // line 40
        echo "
    ";
        // line 41
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "image"), "method")) {
            // line 42
            echo "        data-image=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "image"), "method"), "html", null, true);
            echo "\"
    ";
        }
        // line 44
        echo "
    data-lang=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "lang"), "method"), "html", null, true);
        echo "\"

    ";
        // line 47
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "limit"), "method")) {
            // line 48
            echo "        data-limit=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "limit"), "method"), "html", null, true);
            echo "\"
    ";
        }
        // line 50
        echo "
    data-popup-direction=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "popup_direction"), "method"), "html", null, true);
        echo "\"

    data-popup-position=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "popup_position"), "method"), "html", null, true);
        echo "\"

    data-size=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "size"), "method"), "html", null, true);
        echo "\"

    ";
        // line 57
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "title"), "method")) {
            // line 58
            echo "        data-title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "title"), "method"), "html", null, true);
            echo "\"
    ";
        }
        // line 60
        echo "
    ";
        // line 61
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "url"), "method")) {
            // line 62
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "url"), "method"), "html", null, true);
            echo "\"
    ";
        }
        // line 64
        echo "
    data-services=\"";
        // line 65
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "collections"), "method")) {
            echo "collections,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "vkontakte"), "method")) {
            echo "vkontakte,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "facebook"), "method")) {
            echo "facebook,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "odnoklassniki"), "method")) {
            echo "odnoklassniki,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "moimir"), "method")) {
            echo "moimir,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "gplus"), "method")) {
            echo "gplus,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "pinterest"), "method")) {
            echo "pinterest,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "twitter"), "method")) {
            echo "twitter,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "blogger"), "method")) {
            echo "blogger,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "delicious"), "method")) {
            echo "delicious,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "digg"), "method")) {
            echo "digg,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "reddit"), "method")) {
            echo "reddit,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "evernote"), "method")) {
            echo "evernote,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "linkedin"), "method")) {
            echo "linkedin,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "lj"), "method")) {
            echo "lj,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "pocket"), "method")) {
            echo "pocket,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "qzone"), "method")) {
            echo "qzone,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "renren"), "method")) {
            echo "renren,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "sinaWeibo"), "method")) {
            echo "sinaWeibo,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "surfingbird"), "method")) {
            echo "surfingbird,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "tencentWeibo"), "method")) {
            echo "tencentWeibo,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "tumblr"), "method")) {
            echo "tumblr,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "viber"), "method")) {
            echo "viber,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "whatsapp"), "method")) {
            echo "whatsapp,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "skype"), "method")) {
            echo "skype,";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["yandexShare"] ?? null), "property", array(0 => "telegram"), "method")) {
            echo "telegram";
        }
        echo "\">

        </div>
        <a class=\"pinter_icon\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url=";
        // line 68
        echo $this->env->getExtension('System\Twig\Extension')->appFilter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "path", array()));
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "image", array()));
        echo "&media=";
        echo $this->env->getExtension('System\Twig\Extension')->appFilter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "path", array()));
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "image", array()));
        echo "&description=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px; margin-left: -50px;
    margin-top: -46px;\" src=\"";
        // line 69
        echo "../../themes/tulpen/assets/img/pin.jpg";
        echo "\" width=\"25\" height=\"25\"></a>
        </div>
        
    </div>

    <div  class=\"single-img col-md-4 col-sm-12\" >
        ";
        // line 75
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "image", array())) {
            // line 76
            echo "        <div class=\"post-image\">
            <img  src=\"";
            // line 77
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "image", array()));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
            echo "\">
            <!--<p style=\"color: red\">";
            // line 78
            echo $this->env->getExtension('System\Twig\Extension')->appFilter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["image"] ?? null), "path", array()));
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "image", array()));
            echo "</p>-->
        </div>
        ";
        }
        // line 81
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/news-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 81,  294 => 78,  288 => 77,  285 => 76,  283 => 75,  274 => 69,  264 => 68,  181 => 65,  178 => 64,  172 => 62,  170 => 61,  167 => 60,  161 => 58,  159 => 57,  154 => 55,  149 => 53,  144 => 51,  141 => 50,  135 => 48,  133 => 47,  128 => 45,  125 => 44,  119 => 42,  117 => 41,  114 => 40,  108 => 38,  106 => 37,  101 => 35,  98 => 34,  92 => 32,  90 => 31,  85 => 29,  82 => 28,  78 => 26,  76 => 25,  73 => 24,  69 => 22,  67 => 21,  64 => 20,  58 => 18,  56 => 17,  43 => 8,  36 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = newsPost.post %}
<div class=\"container \" style=\"margin-top: -300px\">
    <div class=\"single-news col-md-8 col-xs-12\" >
        <div class=\"post-content \" style=\"margin-bottom: 50px\">
            <h2 class=\"post-title\">{{ post.title }}</h2>
            {% if post.introductory %}<div class=\"post-introductory\">{{ post.introductory|raw }}</div>{% endif %}
            {% if post.content %}<div class=\"post-content\">{{ post.content|raw }}</div>{% endif %}
            <p class=\"post-date\" style=\"\">Geplaatst op {{ post.published_at|date('Y-m-d') }}</p>
            <!-- Your share button code -->

        </div>
        <div class=\"social_m\">
            <div

    class=\"ya-share2\"

    {% if yandexShare.property('access_token') %}
        data-access-token=\"{{ yandexShare.property('access_token') }}\"
    {% endif %}

    {% if yandexShare.property('bare') %}
        data-bare
    {% endif %}

    {% if yandexShare.property('counter') %}
        data-counter
    {% endif %}

    data-copy=\"{{ yandexShare.property('copy') }}\"

    {% if yandexShare.property('description') %}
        data-description=\"{{ yandexShare.property('description') }}\"
    {% endif %}

    data-direction=\"{{ yandexShare.property('direction') }}\"

    {% if yandexShare.property('hashtags') %}
        data-hashtags=\"{{ yandexShare.property('hashtags') }}\"
    {% endif %}

    {% if yandexShare.property('image') %}
        data-image=\"{{ yandexShare.property('image') }}\"
    {% endif %}

    data-lang=\"{{ yandexShare.property('lang') }}\"

    {% if yandexShare.property('limit') %}
        data-limit=\"{{ yandexShare.property('limit') }}\"
    {% endif %}

    data-popup-direction=\"{{ yandexShare.property('popup_direction') }}\"

    data-popup-position=\"{{ yandexShare.property('popup_position') }}\"

    data-size=\"{{ yandexShare.property('size') }}\"

    {% if yandexShare.property('title') %}
        data-title=\"{{ yandexShare.property('title') }}\"
    {% endif %}

    {% if yandexShare.property('url') %}
        data-url=\"{{ yandexShare.property('url') }}\"
    {% endif %}

    data-services=\"{% if yandexShare.property('collections') %}collections,{% endif %}{% if yandexShare.property('vkontakte') %}vkontakte,{% endif %}{% if yandexShare.property('facebook') %}facebook,{% endif %}{% if yandexShare.property('odnoklassniki') %}odnoklassniki,{% endif %}{% if yandexShare.property('moimir') %}moimir,{% endif %}{% if yandexShare.property('gplus') %}gplus,{% endif %}{% if yandexShare.property('pinterest') %}pinterest,{% endif %}{% if yandexShare.property('twitter') %}twitter,{% endif %}{% if yandexShare.property('blogger') %}blogger,{% endif %}{% if yandexShare.property('delicious') %}delicious,{% endif %}{% if yandexShare.property('digg') %}digg,{% endif %}{% if yandexShare.property('reddit') %}reddit,{% endif %}{% if yandexShare.property('evernote') %}evernote,{% endif %}{% if yandexShare.property('linkedin') %}linkedin,{% endif %}{% if yandexShare.property('lj') %}lj,{% endif %}{% if yandexShare.property('pocket') %}pocket,{% endif %}{% if yandexShare.property('qzone') %}qzone,{% endif %}{% if yandexShare.property('renren') %}renren,{% endif %}{% if yandexShare.property('sinaWeibo') %}sinaWeibo,{% endif %}{% if yandexShare.property('surfingbird') %}surfingbird,{% endif %}{% if yandexShare.property('tencentWeibo') %}tencentWeibo,{% endif %}{% if yandexShare.property('tumblr') %}tumblr,{% endif %}{% if yandexShare.property('viber') %}viber,{% endif %}{% if yandexShare.property('whatsapp') %}whatsapp,{% endif %}{% if yandexShare.property('skype') %}skype,{% endif %}{% if yandexShare.property('telegram') %}telegram{% endif %}\">

        </div>
        <a class=\"pinter_icon\" data-pin-do=\"buttonPin\" href=\"https://www.pinterest.com/pin/create/button/?url={{ image.path|app }}{{ post.image|media  }}&media={{ image.path|app }}{{ post.image|media  }}&description={{post.title}}\" data-pin-custom=\"true\"><img style=\"width:46px;height: 46px; margin-left: -50px;
    margin-top: -46px;\" src=\"{{'../../themes/tulpen/assets/img/pin.jpg'}}\" width=\"25\" height=\"25\"></a>
        </div>
        
    </div>

    <div  class=\"single-img col-md-4 col-sm-12\" >
        {% if post.image %}
        <div class=\"post-image\">
            <img  src=\"{{ post.image|media }}\" alt=\"{{ post.title }}\">
            <!--<p style=\"color: red\">{{ image.path|app }}{{ post.image|media  }}</p>-->
        </div>
        {% endif %}
    </div>
</div>", "/Users/ahmadhaleem/Desktop/tulpen/install-master /themes/tulpen/pages/news-page.htm", "");
    }
}

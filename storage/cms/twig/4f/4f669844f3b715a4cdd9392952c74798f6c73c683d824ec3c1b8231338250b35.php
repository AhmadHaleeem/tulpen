<?php

/* /Users/ahmadhaleem/Desktop/tulpen/install-master /plugins/martin/ssbuttons/components/ssbuttonsssb/default.htm */
class __TwigTemplate_97a6e52a33cd051532db3f18aa12b69b28459f5fccca10d297827b5a964f2b06 extends Twig_Template
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
        echo "<div class=\"SocialSharingButtons\">
    <ul class=\"share-buttons share-buttons-";
        // line 2
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "buttons_order"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 4
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => $context["button"]), "method")) {
                // line 5
                echo "        <li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "buttons_parameters"), "method"), $context["button"], array(), "array"), "href", array(), "array"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "buttons_parameters"), "method"), $context["button"], array(), "array"), "title", array(), "array"), "html", null, true);
                echo "\" target=\"_blank\"><img src=\"/plugins/martin/ssbuttons/assets/imgs/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "theme"), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "buttons_parameters"), "method"), $context["button"], array(), "array"), "image", array(), "array"), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "buttons_parameters"), "method"), $context["button"], array(), "array"), "label", array(), "array"), "html", null, true);
                echo "\"></a></li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
</div>

";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "property", array(0 => "js"), "method")) {
            // line 12
            echo "    <script src=\"/plugins/martin/ssbuttons/assets/js/ssbuttons.js\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/ahmadhaleem/Desktop/tulpen/install-master /plugins/martin/ssbuttons/components/ssbuttonsssb/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  58 => 11,  53 => 8,  33 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"SocialSharingButtons\">
    <ul class=\"share-buttons share-buttons-{{ type }}\">
{% for button in __SELF__.property('buttons_order') %}
    {% if(__SELF__.property(button)) %}
        <li><a href=\"{{ __SELF__.property('buttons_parameters')[button]['href'] }}\" title=\"{{ __SELF__.property('buttons_parameters')[button]['title'] }}\" target=\"_blank\"><img src=\"/plugins/martin/ssbuttons/assets/imgs/{{ __SELF__.property('theme') }}/{{ __SELF__.property('buttons_parameters')[button]['image'] }}.{{ type }}\" alt=\"{{ __SELF__.property('buttons_parameters')[button]['label'] }}\"></a></li>
    {% endif %}
{% endfor %}
    </ul>
</div>

{% if __SELF__.property('js') %}
    <script src=\"/plugins/martin/ssbuttons/assets/js/ssbuttons.js\"></script>
{% endif %}", "/Users/ahmadhaleem/Desktop/tulpen/install-master /plugins/martin/ssbuttons/components/ssbuttonsssb/default.htm", "");
    }
}

<?php

/* partials/layout.html.twig */
class __TwigTemplate_5150cf6c6977335a8eb6f744a47b30ca47cf780b5350b50c48b99e86d2f37824 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        if (( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method") &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            // line 3
            echo "  ";
            $context["item_col"] = ((($context["show_sidebar"] ?? null)) ? ("col-9 col-md-12") : ("col-12"));
            // line 4
            echo "  ";
            $context["sidebar_col"] = ((($context["show_sidebar"] ?? null)) ? ("col-3 col-md-12") : ("col-12"));
        }
        // line 6
        echo "
<div class=\"columns\">
    <div id=\"item\" class=\"column ";
        // line 8
        echo ($context["item_col"] ?? null);
        echo " extra-spacing\">
        ";
        // line 9
        $this->displayBlock('item', $context, $blocks);
        // line 10
        echo "    </div>
    ";
        // line 12
        echo "    ";
        if (( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method") &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            // line 13
            echo "      ";
            if (($context["show_sidebar"] ?? null)) {
                // line 14
                echo "      <div id=\"sidebar\" class=\"column ";
                echo ($context["sidebar_col"] ?? null);
                echo "\">
          ";
                // line 15
                $this->displayBlock('sidebar', $context, $blocks);
                // line 16
                echo "      </div>
      ";
            }
            // line 18
            echo "    ";
        }
        // line 19
        echo "</div>
";
    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  68 => 9,  63 => 19,  60 => 18,  56 => 16,  54 => 15,  49 => 14,  46 => 13,  43 => 12,  40 => 10,  38 => 9,  34 => 8,  30 => 6,  26 => 4,  23 => 3,  21 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# check content display flag - hibbittsdesign.org #}
{% if not(grav.uri.param('chromeless')) and (not theme_var('chromeless.enabled')) %}
  {% set item_col = show_sidebar ? 'col-9 col-md-12' : 'col-12' %}
  {% set sidebar_col = show_sidebar ? 'col-3 col-md-12' : 'col-12' %}
{% endif %}

<div class=\"columns\">
    <div id=\"item\" class=\"column {{ item_col }} extra-spacing\">
        {% block item %}{% endblock %}
    </div>
    {# check content display flag - hibbittsdesign.org #}
    {% if not(grav.uri.param('chromeless')) and (not theme_var('chromeless.enabled')) %}
      {% if show_sidebar %}
      <div id=\"sidebar\" class=\"column {{ sidebar_col }}\">
          {% block sidebar %}{% endblock %}
      </div>
      {% endif %}
    {% endif %}
</div>
", "partials/layout.html.twig", "/var/www/user/themes/quark-open-publishing/templates/partials/layout.html.twig");
    }
}

<?php

/* partials/creative_commons_license.html.twig */
class __TwigTemplate_64a59e8260dcff249ca5feba860fcdb7d40f95724af9350779915eee4aab6976 extends Twig_Template
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
        // line 2
        echo "<div class=\"creative-commons-license\"><br>
";
        // line 3
        if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("cc_license.type") == "ccby")) {
            // line 4
            echo "  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by/4.0/\"><img alt=\"Creative Commons License\" style=\"border-width:0\" src=\"https://i.creativecommons.org/l/by/4.0/88x31.png\"/></a><br/>
  ";
            // line 5
            if ( !$this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "icon", array())) {
                echo " This work is licensed under a
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by/4.0/\">Creative Commons Attribution 4.0 International License</a>";
            }
            // line 6
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "text", array())) {
                echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "text", array());
            }
        } elseif (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("cc_license.type") == "ccbysa")) {
            // line 8
            echo "  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-sa/4.0/\"><img alt=\"Creative Commons License\" style=\"border-width:0\" src=\"https://i.creativecommons.org/l/by-sa/4.0/88x31.png\"/></a><br/>
  ";
            // line 9
            if ( !$this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "icon", array())) {
                echo " This work is licensed under a
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-sa/4.0/\">Creative Commons Attribution-ShareAlike 4.0 International License</a>";
            }
            // line 10
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "text", array())) {
                echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "text", array());
            }
        } elseif (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("cc_license.type") == "ccbynd")) {
            // line 12
            echo "  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nd/4.0/\"><img alt=\"Creative Commons License\" style=\"border-width:0\" src=\"https://i.creativecommons.org/l/by-nd/4.0/88x31.png\"/></a><br/>
  ";
            // line 13
            if ( !$this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "icon", array())) {
                echo " This work is licensed under a
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nd/4.0/\">Creative Commons Attribution-NoDerivatives 4.0 International License</a>";
            }
            // line 14
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "text", array())) {
                echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "text", array());
            }
        } elseif (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("cc_license.type") == "ccbync")) {
            // line 16
            echo "  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc/4.0/\"><img alt=\"Creative Commons License\" style=\"border-width:0\" src=\"https://i.creativecommons.org/l/by-nc/4.0/88x31.png\"/></a><br/>
  ";
            // line 17
            if ( !$this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "icon", array())) {
                echo " This work is licensed under a
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc/4.0/\">Creative Commons Attribution-NonCommercial 4.0 International License</a>";
            }
            // line 18
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "text", array())) {
                echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "text", array());
            }
        } elseif (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("cc_license.type") == "ccbyncsa")) {
            // line 20
            echo "  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-sa/4.0/\"><img alt=\"Creative Commons License\" style=\"border-width:0\" src=\"https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png\"/></a><br/>
  ";
            // line 21
            if ( !$this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "icon", array())) {
                echo " This work is licensed under a
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-sa/4.0/\">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>";
            }
            // line 22
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "text", array())) {
                echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "text", array());
            }
        } elseif (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("cc_license.type") == "ccbyncnd")) {
            // line 24
            echo "  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-nd/4.0/\"><img alt=\"Creative Commons License\" style=\"border-width:0\" src=\"https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png\"/></a><br/>
  ";
            // line 25
            if ( !$this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "icon", array())) {
                echo " This work is licensed under a
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-nd/4.0/\">Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>";
            }
            // line 26
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "text", array())) {
                echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "cc_license", array()), "text", array());
            }
        }
        // line 28
        echo "<br></div>
";
    }

    public function getTemplateName()
    {
        return "partials/creative_commons_license.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  97 => 26,  92 => 25,  89 => 24,  84 => 22,  79 => 21,  76 => 20,  71 => 18,  66 => 17,  63 => 16,  58 => 14,  53 => 13,  50 => 12,  45 => 10,  40 => 9,  37 => 8,  32 => 6,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# new twig template file - hibbittsdesign.org #}
<div class=\"creative-commons-license\"><br>
{% if  theme_var('cc_license.type') == 'ccby' %}
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by/4.0/\"><img alt=\"Creative Commons License\" style=\"border-width:0\" src=\"https://i.creativecommons.org/l/by/4.0/88x31.png\"/></a><br/>
  {% if not (theme_config.cc_license.icon) %} This work is licensed under a
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by/4.0/\">Creative Commons Attribution 4.0 International License</a>{% endif %}{% if theme_config.cc_license.text %}{{ theme_config.cc_license.text }}{% endif %}
{% elseif( theme_var('cc_license.type') == 'ccbysa') %}
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-sa/4.0/\"><img alt=\"Creative Commons License\" style=\"border-width:0\" src=\"https://i.creativecommons.org/l/by-sa/4.0/88x31.png\"/></a><br/>
  {% if not (theme_config.cc_license.icon) %} This work is licensed under a
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-sa/4.0/\">Creative Commons Attribution-ShareAlike 4.0 International License</a>{% endif %}{% if theme_config.cc_license.text %}{{ theme_config.cc_license.text }}{% endif %}
{% elseif( theme_var('cc_license.type') == 'ccbynd') %}
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nd/4.0/\"><img alt=\"Creative Commons License\" style=\"border-width:0\" src=\"https://i.creativecommons.org/l/by-nd/4.0/88x31.png\"/></a><br/>
  {% if not (theme_config.cc_license.icon) %} This work is licensed under a
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nd/4.0/\">Creative Commons Attribution-NoDerivatives 4.0 International License</a>{% endif %}{% if theme_config.cc_license.text %}{{ theme_config.cc_license.text }}{% endif %}
{% elseif( theme_var('cc_license.type') == 'ccbync') %}
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc/4.0/\"><img alt=\"Creative Commons License\" style=\"border-width:0\" src=\"https://i.creativecommons.org/l/by-nc/4.0/88x31.png\"/></a><br/>
  {% if not (theme_config.cc_license.icon) %} This work is licensed under a
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc/4.0/\">Creative Commons Attribution-NonCommercial 4.0 International License</a>{% endif %}{% if theme_config.cc_license.text %}{{ theme_config.cc_license.text }}{% endif %}
{% elseif( theme_var('cc_license.type') == 'ccbyncsa') %}
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-sa/4.0/\"><img alt=\"Creative Commons License\" style=\"border-width:0\" src=\"https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png\"/></a><br/>
  {% if not (theme_config.cc_license.icon) %} This work is licensed under a
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-sa/4.0/\">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>{% endif %}{% if theme_config.cc_license.text %}{{ theme_config.cc_license.text }}{% endif %}
{% elseif( theme_var('cc_license.type') == 'ccbyncnd') %}
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-nd/4.0/\"><img alt=\"Creative Commons License\" style=\"border-width:0\" src=\"https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png\"/></a><br/>
  {% if not (theme_config.cc_license.icon) %} This work is licensed under a
  <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-nd/4.0/\">Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>{% endif %}{% if theme_config.cc_license.text %}{{ theme_config.cc_license.text }}{% endif %}
{% endif %}
<br></div>
", "partials/creative_commons_license.html.twig", "/var/www/user/themes/quark-open-publishing/templates/partials/creative_commons_license.html.twig");
    }
}

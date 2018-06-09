<?php

/* partials/navigation.html.twig */
class __TwigTemplate_a37ab65ad9d452745ef7866e2e39cf6fb42dd394d44dce93af79eb9982763f00 extends Twig_Template
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
        $context["hide_home_menu_link"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("hidehomemenulink");
        // line 2
        $context["home_alias"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "home", array()), "alias", array());
        // line 3
        echo "
";
        // line 28
        echo "
<ul ";
        // line 29
        echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
        echo ">
    ";
        // line 30
        echo $this->getAttribute($this, "nav_loop", array(0 => ($context["pages"] ?? null), 1 => ($context["hide_home_menu_link"] ?? null), 2 => ($context["home_alias"] ?? null)), "method");
        echo "
    ";
        // line 32
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("displaycustommenus.enabled")) {
            // line 33
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("menu"));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 34
                echo "        <li>
          <a href=\"";
                // line 35
                echo $this->getAttribute($context["mitem"], "url", array());
                echo "\" target=\"";
                echo $this->getAttribute($context["mitem"], "target", array());
                echo "\">
            ";
                // line 36
                if ($this->getAttribute($context["mitem"], "icon", array())) {
                    // line 37
                    echo "              <i class=\"fa fa-";
                    echo $this->getAttribute($context["mitem"], "icon", array());
                    echo "\"></i>
            ";
                }
                // line 39
                echo "            ";
                echo $this->getAttribute($context["mitem"], "text", array());
                echo "
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        // line 45
        echo "    ";
        if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "menu") || ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == ($context["empty"] ?? null)))) {
            // line 46
            echo "      <li>";
            $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/navigation.html.twig", 46)->display($context);
            echo "</li>
    ";
        }
        // line 48
        echo "</ul>
";
    }

    // line 4
    public function getnav_loop($__page__ = null, $__hide_home_menu_link__ = null, $__home_alias__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "hide_home_menu_link" => $__hide_home_menu_link__,
            "home_alias" => $__home_alias__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 6
                echo "      ";
                // line 7
                echo "      ";
                if ( !(($context["hide_home_menu_link"] ?? null) && twig_in_filter($this->getAttribute($context["p"], "slug", array()), ($context["home_alias"] ?? null)))) {
                    // line 8
                    echo "        ";
                    $context["active_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                    // line 9
                    echo "        ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                        // line 10
                        echo "            <li>
                <a href=\"";
                        // line 11
                        echo $this->getAttribute($context["p"], "url", array());
                        echo "\" class=\"";
                        echo ($context["active_page"] ?? null);
                        echo "\">
                    ";
                        // line 12
                        echo $this->getAttribute($context["p"], "menu", array());
                        echo "
                </a>
                <ul>
                    ";
                        // line 15
                        echo $this->getAttribute($this, "nav_loop", array(0 => $context["p"]), "method");
                        echo "
                </ul>
            </li>
        ";
                    } else {
                        // line 19
                        echo "            <li>
                <a href=\"";
                        // line 20
                        echo $this->getAttribute($context["p"], "url", array());
                        echo "\" class=\"";
                        echo ($context["active_page"] ?? null);
                        echo "\">
                    ";
                        // line 21
                        echo $this->getAttribute($context["p"], "menu", array());
                        echo "
                </a>
            </li>
        ";
                    }
                    // line 25
                    echo "      ";
                }
                // line 26
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 26,  160 => 25,  153 => 21,  147 => 20,  144 => 19,  137 => 15,  131 => 12,  125 => 11,  122 => 10,  119 => 9,  116 => 8,  113 => 7,  111 => 6,  106 => 5,  92 => 4,  87 => 48,  81 => 46,  78 => 45,  76 => 44,  73 => 43,  62 => 39,  56 => 37,  54 => 36,  48 => 35,  45 => 34,  40 => 33,  37 => 32,  33 => 30,  29 => 29,  26 => 28,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set hide_home_menu_link = theme_var('hidehomemenulink') %}
{% set home_alias = config.system.home.alias %}

{% macro nav_loop(page, hide_home_menu_link, home_alias) %}
    {% for p in page.children.visible %}
      {# Supress home menu link - hibbittsdesign.org #}
      {% if not((hide_home_menu_link) and (p.slug in home_alias)) %}
        {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if p.children.visible.count > 0 %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                    {{ p.menu }}
                </a>
                <ul>
                    {{ _self.nav_loop(p) }}
                </ul>
            </li>
        {% else %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
      {% endif %}
    {% endfor %}
{% endmacro %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
    {{ _self.nav_loop(pages, hide_home_menu_link, home_alias ) }}
    {# custom menu items check and display - hibbittsdesign.org #}
    {% if theme_var('displaycustommenus.enabled') %}
      {% for mitem in theme_var('menu') %}
        <li>
          <a href=\"{{ mitem.url }}\" target=\"{{ mitem.target }}\">
            {% if mitem.icon %}
              <i class=\"fa fa-{{ mitem.icon }}\"></i>
            {% endif %}
            {{ mitem.text }}
          </a>
        </li>
      {% endfor %}
    {% endif %}
    {# check to display git sync link in menu - hibbittsdesign.org #}
    {% if theme_var('display_of_git_sync_repo_link') == 'menu' or theme_var('display_of_git_sync_repo_link') == empty %}
      <li>{% include 'partials/git_sync_repo_link.html.twig' %}</li>
    {% endif %}
</ul>
", "partials/navigation.html.twig", "/var/www/user/themes/quark-open-publishing/templates/partials/navigation.html.twig");
    }
}

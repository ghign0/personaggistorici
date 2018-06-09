<?php

/* partials/blog-item.html.twig */
class __TwigTemplate_7f64eb127bf15dd1ae88a6dfcdb9301239ac6da095914fd1894f5d87ef675f5c extends Twig_Template
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
        echo "<div class=\"content-item h-entry\">

";
        // line 3
        if ( !($context["hero_image_name"] ?? null)) {
            // line 4
            echo "    <div class=\"content-title text-center\">
        ";
            // line 5
            $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-item.html.twig", 5)->display(array_merge($context, array("title_level" => "h2")));
            // line 6
            echo "        ";
            if ( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "hidepagetitle"), "method")) {
                // line 7
                echo "          ";
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subtitle", array())) {
                    // line 8
                    echo "          <h3 >";
                    echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subtitle", array());
                    echo "</h3>
          ";
                }
                // line 10
                echo "          ";
                $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-item.html.twig", 10)->display($context);
                // line 11
                echo "          ";
                $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-item.html.twig", 11)->display($context);
                // line 12
                echo "        ";
            }
            // line 13
            echo "    </div>
";
        }
        // line 15
        echo "
    <div class=\"e-content\">
        ";
        // line 18
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "header", array()), "display_post_summary", array()), "enabled", array())) {
            // line 19
            echo "          ";
            $context["content"] = twig_slice($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), twig_length_filter($this->env, $this->getAttribute(($context["page"] ?? null), "summary", array())));
            // line 20
            echo "        ";
        } else {
            // line 21
            echo "          ";
            $context["content"] = $this->getAttribute(($context["page"] ?? null), "content", array());
            // line 22
            echo "        ";
        }
        // line 23
        echo "
        ";
        // line 25
        echo "        ";
        if ( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "summaryonly"), "method")) {
            // line 26
            echo "            ";
            if ( !twig_test_empty(($context["content"] ?? null))) {
                // line 27
                echo "                ";
                echo ($context["content"] ?? null);
                echo "
            ";
            } else {
                // line 29
                echo "                ";
                echo $this->getAttribute(($context["page"] ?? null), "summary", array());
                echo "
            ";
            }
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "summary", array());
            echo "
        ";
        }
        // line 34
        echo "    </div>

    ";
        // line 36
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "comments", array()), "enabled", array()))) {
            // line 37
            echo "        ";
            $this->loadTemplate("partials/comments.html.twig", "partials/blog-item.html.twig", 37)->display($context);
            // line 38
            echo "    ";
        }
        // line 39
        echo "

</div>

";
        // line 44
        if ((($context["show_prev_next"] ?? null) &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method"))) {
            // line 45
            echo "
  <p class=\"prev-next text-center\">


      ";
            // line 49
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
                // line 50
                echo "              <a class=\"btn\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-angle-left\"></i> ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.PREV_POST");
                echo "</a>
      ";
            }
            // line 52
            echo "
      ";
            // line 53
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
                // line 54
                echo "          <a class=\"btn\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.NEXT_POST");
                echo " <i class=\"fa fa-angle-right\"></i></a>
      ";
            }
            // line 56
            echo "  </p>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/blog-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 56,  145 => 54,  143 => 53,  140 => 52,  132 => 50,  130 => 49,  124 => 45,  122 => 44,  116 => 39,  113 => 38,  110 => 37,  108 => 36,  104 => 34,  98 => 32,  95 => 31,  89 => 29,  83 => 27,  80 => 26,  77 => 25,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  62 => 19,  59 => 18,  55 => 15,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  36 => 8,  33 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"content-item h-entry\">

{% if not hero_image_name %}
    <div class=\"content-title text-center\">
        {% include 'partials/blog/title.html.twig' with {title_level: 'h2'} %}
        {% if not (grav.uri.param('hidepagetitle')) %}
          {% if page.header.subtitle %}
          <h3 >{{ page.header.subtitle }}</h3>
          {% endif %}
          {% include 'partials/blog/date.html.twig' %}
          {% include 'partials/blog/taxonomy.html.twig' %}
        {% endif %}
    </div>
{% endif %}

    <div class=\"e-content\">
        {# check to hide post summary on page - hibbittsdesign.org #}
        {% if page.parent.header.display_post_summary.enabled %}
          {% set content = page.content | slice(page.summary | length) %}
        {% else %}
          {% set content = page.content %}
        {% endif %}

        {# check to show summary only - hibbittsdesign.org #}
        {% if not (grav.uri.param('summaryonly')) %}
            {% if content is not empty  %}
                {{ content }}
            {% else %}
                {{ page.summary }}
            {% endif %}
        {% else %}
            {{ page.summary }}
        {% endif %}
    </div>

    {% if page.header.continue_link is sameas(true) and config.plugins.comments.enabled %}
        {% include 'partials/comments.html.twig' %}
    {% endif %}


</div>

{# added check for content display flag - hibbittsdesign.org #}
{% if show_prev_next and not (grav.uri.param('chromeless')) %}

  <p class=\"prev-next text-center\">


      {% if not page.isLast %}
              <a class=\"btn\" href=\"{{ page.prevSibling.url }}\"><i class=\"fa fa-angle-left\"></i> {{ 'BLOG.ITEM.PREV_POST'|t }}</a>
      {% endif %}

      {% if not page.isFirst %}
          <a class=\"btn\" href=\"{{ page.nextSibling.url }}\">{{ 'BLOG.ITEM.NEXT_POST'|t }} <i class=\"fa fa-angle-right\"></i></a>
      {% endif %}
  </p>

{% endif %}
", "partials/blog-item.html.twig", "/var/www/user/themes/quark-open-publishing/templates/partials/blog-item.html.twig");
    }
}

<?php

/* blog.html.twig */
class __TwigTemplate_2215a5ac38182ee16ff5f14a06c16812944d0eec375c162b26523665c97377a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'hero' => array($this, 'block_hero'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array()), array(), "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))));
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 4
        $context["show_breadcrumbs"] = _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_sidebar", "/blog"), true);
        // line 5
        $context["show_sidebar"] = _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_sidebar"), true);
        // line 6
        $context["show_pagination"] = _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_sidebar"), true);
        // line 19
        if (( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method") &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/bricklayer.css"), "method");
        // line 10
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 15
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/bricklayer.min.js"), "method");
    }

    // line 20
    public function block_hero($context, array $blocks = array())
    {
        // line 21
        echo "      ";
        $this->loadTemplate("partials/hero.html.twig", "blog.html.twig", 21)->display(array_merge($context, array("id" => "blog-hero", "content" => $this->getAttribute(($context["page"] ?? null), "content", array()), "hero_image" => ($context["blog_image"] ?? null))));
        // line 22
        echo "  ";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container ";
        // line 27
        echo ($context["grid_size"] ?? null);
        echo "\">

        ";
        // line 29
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array()))) {
            // line 30
            echo "            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 30)->display($context);
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        ";
        // line 33
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 33, "336634757")->display(array_merge($context, array("blog" => ($context["page"] ?? null))));
        // line 67
        echo "        </section>

        <div style=\"text-align:center;\">
        ";
        // line 70
        echo " ";
        // line 71
        echo "        ";
        if ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "page") &&  !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "summaryonly"), "method"))) {
            // line 72
            echo "          <p>";
            $this->loadTemplate("partials/git_sync_repo_link_note.html.twig", "blog.html.twig", 72)->display($context);
            echo "</p>
        ";
        }
        // line 74
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("cc_license.enabled")) {
            // line 75
            echo "          <p>";
            $this->loadTemplate("partials/creative_commons_license.html.twig", "blog.html.twig", 75)->display($context);
            echo "</p>
        ";
        }
        // line 77
        echo "      </div>
      
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 77,  123 => 75,  120 => 74,  114 => 72,  111 => 71,  109 => 70,  104 => 67,  102 => 33,  99 => 32,  96 => 31,  93 => 30,  91 => 29,  86 => 27,  83 => 26,  80 => 25,  76 => 22,  73 => 21,  70 => 20,  66 => 15,  61 => 14,  58 => 13,  51 => 10,  48 => 9,  45 => 8,  41 => 1,  38 => 19,  36 => 6,  34 => 5,  32 => 4,  30 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{% set show_breadcrumbs = header_var('show_sidebar', '/blog')|default(true) %}
{% set show_sidebar = header_var('show_sidebar')|default(true) %}
{% set show_pagination = header_var('show_sidebar')|default(true) %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
{% endblock %}

{# check content display flag - hibbittsdesign.org #}
{% if not(grav.uri.param('chromeless')) and (not theme_var('chromeless.enabled')) %}
  {% block hero %}
      {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content, hero_image: blog_image} %}
  {% endblock %}
{% endif %}

{% block body %}
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container {{ grid_size }}\">

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

                <div class=\"bricklayer\">

                {# display posts with 'featured' tag on current blog page - hibbittsdesign.org #}
                {% for child in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
                    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                {% endfor %}

                {# display posts without 'featured' tag - hibbittsdesign.org #}
                {% for child in collection %}
                  {% if \"featured\" not in child.taxonomy['tag'] %}
                    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                  {% endif %}
                {% endfor %}

                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}

            {% endblock %}

            {# check content display flag - hibbittsdesign.org #}
            {% if not(grav.uri.param('chromeless')) and (not theme_var('chromeless.enabled')) %}
              {% block sidebar %}
                  {% include 'partials/sidebar.html.twig' %}
              {% endblock %}
            {% endif %}
        {% endembed %}
        </section>

        <div style=\"text-align:center;\">
        {# check to display CC License - hibbittsdesign.org #} {# check to display git sync link in page - hibbittsdesign.org #}
        {% if theme_var('display_of_git_sync_repo_link') == 'page' and not (grav.uri.param('summaryonly')) %}
          <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
        {% endif %}
        {% if theme_var('cc_license.enabled') %}
          <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
        {% endif %}
      </div>
      
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
{% endblock %}
", "blog.html.twig", "/var/www/user/themes/quark-open-publishing/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_2215a5ac38182ee16ff5f14a06c16812944d0eec375c162b26523665c97377a9_336634757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 33
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "blog.html.twig", 33);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 61
        if (( !$this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", array()), "param", array(0 => "chromeless"), "method") &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
        }
        // line 33
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_item($context, array $blocks = array())
    {
        // line 35
        echo "
                <div class=\"bricklayer\">

                ";
        // line 39
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", array(0 => array("tag" => "featured")), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 40
            echo "                    ";
            $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 40)->display(array_merge($context, array("blog" => ($context["page"] ?? null), "page" => $context["child"])));
            // line 41
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
                ";
        // line 44
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 45
            echo "                  ";
            if (!twig_in_filter("featured", $this->getAttribute($this->getAttribute($context["child"], "taxonomy", array()), "tag", array(), "array"))) {
                // line 46
                echo "                    ";
                $this->loadTemplate("partials/blog-list-item.html.twig", "blog.html.twig", 46)->display(array_merge($context, array("blog" => ($context["page"] ?? null), "page" => $context["child"])));
                // line 47
                echo "                  ";
            }
            // line 48
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
                </div>

                ";
        // line 52
        if (((($context["show_pagination"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array())) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 53
            echo "                    <div id=\"listing-footer\">
                        ";
            // line 54
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 54)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 55
            echo "                    </div>
                ";
        }
        // line 57
        echo "
            ";
    }

    // line 62
    public function block_sidebar($context, array $blocks = array())
    {
        // line 63
        echo "                  ";
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 63)->display($context);
        // line 64
        echo "              ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 64,  394 => 63,  391 => 62,  386 => 57,  382 => 55,  380 => 54,  377 => 53,  375 => 52,  370 => 49,  356 => 48,  353 => 47,  350 => 46,  347 => 45,  329 => 44,  326 => 42,  312 => 41,  309 => 40,  291 => 39,  286 => 35,  283 => 34,  279 => 33,  276 => 61,  261 => 33,  129 => 77,  123 => 75,  120 => 74,  114 => 72,  111 => 71,  109 => 70,  104 => 67,  102 => 33,  99 => 32,  96 => 31,  93 => 30,  91 => 29,  86 => 27,  83 => 26,  80 => 25,  76 => 22,  73 => 21,  70 => 20,  66 => 15,  61 => 14,  58 => 13,  51 => 10,  48 => 9,  45 => 8,  41 => 1,  38 => 19,  36 => 6,  34 => 5,  32 => 4,  30 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% set blog_image = page.media.images[page.header.hero_image] ?: page.media.images|first %}
{% set collection = page.collection() %}
{% set show_breadcrumbs = header_var('show_sidebar', '/blog')|default(true) %}
{% set show_sidebar = header_var('show_sidebar')|default(true) %}
{% set show_pagination = header_var('show_sidebar')|default(true) %}

{% block stylesheets %}
    {% do assets.addCss('theme://css/bricklayer.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% do assets.add('theme://js/bricklayer.min.js') %}
{% endblock %}

{# check content display flag - hibbittsdesign.org #}
{% if not(grav.uri.param('chromeless')) and (not theme_var('chromeless.enabled')) %}
  {% block hero %}
      {% include 'partials/hero.html.twig' with {id: 'blog-hero', content: page.content, hero_image: blog_image} %}
  {% endblock %}
{% endif %}

{% block body %}
    <section id=\"body-wrapper\" class=\"section blog-listing\">
        <section class=\"container {{ grid_size }}\">

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

                <div class=\"bricklayer\">

                {# display posts with 'featured' tag on current blog page - hibbittsdesign.org #}
                {% for child in taxonomy.findTaxonomy({'tag': \"featured\"}) %}
                    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                {% endfor %}

                {# display posts without 'featured' tag - hibbittsdesign.org #}
                {% for child in collection %}
                  {% if \"featured\" not in child.taxonomy['tag'] %}
                    {% include 'partials/blog-list-item.html.twig' with {blog: page, page: child} %}
                  {% endif %}
                {% endfor %}

                </div>

                {% if show_pagination and config.plugins.pagination.enabled and collection.params.pagination %}
                    <div id=\"listing-footer\">
                        {% include 'partials/pagination.html.twig' with {base_url: page.url, pagination: collection.params.pagination} %}
                    </div>
                {% endif %}

            {% endblock %}

            {# check content display flag - hibbittsdesign.org #}
            {% if not(grav.uri.param('chromeless')) and (not theme_var('chromeless.enabled')) %}
              {% block sidebar %}
                  {% include 'partials/sidebar.html.twig' %}
              {% endblock %}
            {% endif %}
        {% endembed %}
        </section>

        <div style=\"text-align:center;\">
        {# check to display CC License - hibbittsdesign.org #} {# check to display git sync link in page - hibbittsdesign.org #}
        {% if theme_var('display_of_git_sync_repo_link') == 'page' and not (grav.uri.param('summaryonly')) %}
          <p>{% include 'partials/git_sync_repo_link_note.html.twig' %}</p>
        {% endif %}
        {% if theme_var('cc_license.enabled') %}
          <p>{% include 'partials/creative_commons_license.html.twig' %}</p>
        {% endif %}
      </div>
      
    </section>
    <script>
        //Bricklayer
        var bricklayer = new Bricklayer(document.querySelector('.bricklayer'))
    </script>
{% endblock %}
", "blog.html.twig", "/var/www/user/themes/quark-open-publishing/templates/blog.html.twig");
    }
}

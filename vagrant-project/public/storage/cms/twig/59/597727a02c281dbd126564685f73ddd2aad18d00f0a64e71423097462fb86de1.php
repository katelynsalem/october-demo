<?php

/* /var/www/public/themes/synema-salem-mdb-loaded/partials/sidebar.htm */
class __TwigTemplate_a223ed456e5b950db48cdbbf73712152a17bc22f335161d975dd2c3e9cde7cd7 extends Twig_Template
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
        echo "<div id=\"sidebar\" class=\"p-2\">
    ";
        // line 2
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "post")) {
            // line 3
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("getBlogCategories"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    ";
        } else {
            // line 5
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sideMenu"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 9
        echo "    ";
        // line 10
        echo "    ";
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/synema-salem-mdb-loaded/partials/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  45 => 10,  43 => 9,  40 => 7,  37 => 6,  32 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sidebar\" class=\"p-2\">
    {% if this.page.id == 'post' %}
        {% partial 'getBlogCategories' %}
    {% else %}
        {% partial 'sideMenu' %}
    {% endif %}

    {# Other side bar components #}
    {# can be added here as well #}
    {# Add as many as you like #}
</div>", "/var/www/public/themes/synema-salem-mdb-loaded/partials/sidebar.htm", "");
    }
}

<?php

/* /var/www/public/themes/synema-salem-mdb-loaded/layouts/withSidebar.htm */
class __TwigTemplate_eb04c42241ea251c61077d3dd138146f3d916fe88dd237cb8c74a57e0aa1d982 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
<div class=\"container mt-2 px-sm-3\">
    <div class=\"row no-gutters\">
        <div class=\"col-md-3 d-none d-md-block\">
            ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "        </div>
        <div class=\"col-md-9 pt-1 p-sm-3\">
            <h4 class=\"h4-responsive\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h4>
            <hr>
            ";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 13
        echo "        </div>
        <div class=\"col-md-3 pt-3 d-md-none d-sm-block\">
            ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "        </div>
    </div>
</div>

";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/synema-salem-mdb-loaded/layouts/withSidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  56 => 16,  52 => 15,  48 => 13,  46 => 12,  41 => 10,  37 => 8,  33 => 7,  27 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/head' %}
{% partial 'site/nav' %}

<div class=\"container mt-2 px-sm-3\">
    <div class=\"row no-gutters\">
        <div class=\"col-md-3 d-none d-md-block\">
            {% partial 'sidebar' %}
        </div>
        <div class=\"col-md-9 pt-1 p-sm-3\">
            <h4 class=\"h4-responsive\">{{ this.page.title }}</h4>
            <hr>
            {% page %}
        </div>
        <div class=\"col-md-3 pt-3 d-md-none d-sm-block\">
            {% partial 'sidebar' %}
        </div>
    </div>
</div>

{% partial 'site/footer' %}", "/var/www/public/themes/synema-salem-mdb-loaded/layouts/withSidebar.htm", "");
    }
}

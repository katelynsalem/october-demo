<?php

/* /var/www/public/themes/synema-salem-mdb-loaded/layouts/noSidebar.htm */
class __TwigTemplate_8c33d538b3cb1b89fbc56572f0e8663266a4f4c33afc31066b0bef4cfd56f218 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scrollingNavbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "

";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 6
        echo "

";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/synema-salem-mdb-loaded/layouts/noSidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  33 => 6,  31 => 5,  27 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/head' %}
{% partial 'site/scrollingNavbar' %}


{% page %}


{% partial 'site/footer' %}", "/var/www/public/themes/synema-salem-mdb-loaded/layouts/noSidebar.htm", "");
    }
}

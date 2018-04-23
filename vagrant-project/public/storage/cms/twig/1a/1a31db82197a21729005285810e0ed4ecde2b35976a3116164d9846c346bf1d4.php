<?php

/* /var/www/public/themes/zanor-zanor-mdb-loaded/layouts/noSidebar.htm */
class __TwigTemplate_60d858feb134882ede269eb4be97887d9d74799016ad0b40eb6b156b798eb27e extends Twig_Template
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
<div class=\"container py-5\">
    
    ";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 7
        echo "    
</div>

";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/zanor-zanor-mdb-loaded/layouts/noSidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  34 => 7,  32 => 6,  27 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/head' %}
{% partial 'site/nav' %}

<div class=\"container py-5\">
    
    {% page %}
    
</div>

{% partial 'site/footer' %}", "/var/www/public/themes/zanor-zanor-mdb-loaded/layouts/noSidebar.htm", "");
    }
}

<?php

/* /var/www/public/themes/synema-salem-mdb-loaded/layouts/halfpageImage.htm */
class __TwigTemplate_eceec642910ecd14c999bbdadf2afd9f2929538bd9b0f04729766e1ac11e15f8 extends Twig_Template
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











<!--Mask-->
<div class=\"view hm-black-light half-page\">
  <img src=\"";
        // line 17
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(($context["bgImageXSmall"] ?? null));
        echo "\"
    alt=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["altText"] ?? null), "html", null, true);
        echo "\"
    style=\"height: 100%; margin: auto;\" >

    <div id=\"synemaAccent\" class=\"full-bg-img flex-center\">
        <ul class=\"animated fadeInUp\">
            <li>
                <h1 class=\"display-3 mb-4 font-bold\">";
        // line 24
        echo twig_escape_filter($this->env, ($context["introTitle"] ?? null), "html", null, true);
        echo "<span style=\"color: #da1f27\"> ";
        echo twig_escape_filter($this->env, ($context["introTitleAccent"] ?? null), "html", null, true);
        echo " </span>";
        echo twig_escape_filter($this->env, ($context["introTitle2"] ?? null), "html", null, true);
        echo "</h1></li>
            <li>
                <h3 class=\"mb-5\">";
        // line 26
        echo twig_escape_filter($this->env, ($context["tagline"] ?? null), "html", null, true);
        echo "</h3>
            </li>
            <li>
                ";
        // line 29
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["fields"] ?? null), "btn1Text", array()) != "")) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["btn1Link"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg\" rel=\"nofollow\">";
            echo twig_escape_filter($this->env, ($context["btn1Text"] ?? null), "html", null, true);
            echo "</a>";
        }
        // line 30
        echo "                ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["fields"] ?? null), "btn2Text", array()) != "")) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["btn2Link"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-outline-white btn-lg\" rel=\"nofollow\">";
            echo twig_escape_filter($this->env, ($context["btn2Text"] ?? null), "html", null, true);
            echo "</a>";
        }
        // line 31
        echo "            </li>
        </ul>
    </div>
</div>
<!--/.Mask-->

<!-- Content -->
<div class=\"container\">
  ";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 40
        echo "</div>



";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/synema-salem-mdb-loaded/layouts/halfpageImage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 44,  100 => 40,  98 => 39,  88 => 31,  79 => 30,  71 => 29,  65 => 26,  56 => 24,  47 => 18,  43 => 17,  27 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/head' %}
{% partial 'site/scrollingNavbar' %}












<!--Mask-->
<div class=\"view hm-black-light half-page\">
  <img src=\"{{ bgImageXSmall|media }}\"
    alt=\"{{ altText }}\"
    style=\"height: 100%; margin: auto;\" >

    <div id=\"synemaAccent\" class=\"full-bg-img flex-center\">
        <ul class=\"animated fadeInUp\">
            <li>
                <h1 class=\"display-3 mb-4 font-bold\">{{ introTitle }}<span style=\"color: #da1f27\"> {{ introTitleAccent }} </span>{{ introTitle2 }}</h1></li>
            <li>
                <h3 class=\"mb-5\">{{ tagline }}</h3>
            </li>
            <li>
                {% if fields.btn1Text != '' %}<a target=\"_blank\" href=\"{{ btn1Link }}\" class=\"btn btn-primary btn-lg\" rel=\"nofollow\">{{ btn1Text }}</a>{% endif%}
                {% if fields.btn2Text != '' %}<a target=\"_blank\" href=\"{{ btn2Link }}\" class=\"btn btn-outline-white btn-lg\" rel=\"nofollow\">{{ btn2Text }}</a>{% endif%}
            </li>
        </ul>
    </div>
</div>
<!--/.Mask-->

<!-- Content -->
<div class=\"container\">
  {% page %}
</div>



{% partial 'site/footer' %}", "/var/www/public/themes/synema-salem-mdb-loaded/layouts/halfpageImage.htm", "");
    }
}

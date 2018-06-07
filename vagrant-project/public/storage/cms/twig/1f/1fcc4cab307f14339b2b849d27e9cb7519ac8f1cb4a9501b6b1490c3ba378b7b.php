<?php

/* /var/www/public/themes/synema-salem-mdb-loaded/layouts/fullImageBg.htm */
class __TwigTemplate_35cca78c3cb7d63c970df0588475066dc31f17ecbcb93306d9c3e0eb88c56aeb extends Twig_Template
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
<div class=\"view hm-black-light\">
  <img src=\"";
        // line 22
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(($context["bgImageLarge"] ?? null));
        echo "\"
    srcset=\"
      ";
        // line 24
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(($context["bgImageXSmall"] ?? null));
        echo " 750w,
      ";
        // line 25
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(($context["bgImageXLarge"] ?? null));
        echo " 2880w\"
    sizes=\"100vw\"
    alt=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["altText"] ?? null), "html", null, true);
        echo "\"
    class=\"full-width\" >

    <div id=\"synemaAccent\" class=\"full-bg-img flex-center\">
        <ul class=\"animated fadeInUp\">
            <li>
                <h1 class=\"display-3 mb-4 font-bold\">";
        // line 33
        echo twig_escape_filter($this->env, ($context["introTitle"] ?? null), "html", null, true);
        echo "<span style=\"color: #da1f27\"> ";
        echo twig_escape_filter($this->env, ($context["introTitleAccent"] ?? null), "html", null, true);
        echo " </span>";
        echo twig_escape_filter($this->env, ($context["introTitle2"] ?? null), "html", null, true);
        echo "</h1></li>
            <li>
                <h3 class=\"mb-5\">";
        // line 35
        echo twig_escape_filter($this->env, ($context["tagline"] ?? null), "html", null, true);
        echo "</h3>
            </li>
            <li>
                ";
        // line 38
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["fields"] ?? null), "btn1Text", array()) != "")) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["btn1Link"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg\" rel=\"nofollow\">";
            echo twig_escape_filter($this->env, ($context["btn1Text"] ?? null), "html", null, true);
            echo "</a>";
        }
        // line 39
        echo "                ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["fields"] ?? null), "btn2Text", array()) != "")) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["btn2Link"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-outline-white btn-lg\" rel=\"nofollow\">";
            echo twig_escape_filter($this->env, ($context["btn2Text"] ?? null), "html", null, true);
            echo "</a>";
        }
        // line 40
        echo "            </li>
        </ul>
    </div>
</div>
<!--/.Mask-->

<!-- Content -->
<div class=\"container\">
  ";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 49
        echo "</div>



";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/synema-salem-mdb-loaded/layouts/fullImageBg.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 53,  115 => 49,  113 => 48,  103 => 40,  94 => 39,  86 => 38,  80 => 35,  71 => 33,  62 => 27,  57 => 25,  53 => 24,  48 => 22,  27 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/head' %}
{% partial 'site/scrollingNavbar' %}

















<!--Mask-->
<div class=\"view hm-black-light\">
  <img src=\"{{ bgImageLarge|media }}\"
    srcset=\"
      {{ bgImageXSmall|media }} 750w,
      {{ bgImageXLarge|media }} 2880w\"
    sizes=\"100vw\"
    alt=\"{{ altText }}\"
    class=\"full-width\" >

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



{% partial 'site/footer' %}", "/var/www/public/themes/synema-salem-mdb-loaded/layouts/fullImageBg.htm", "");
    }
}

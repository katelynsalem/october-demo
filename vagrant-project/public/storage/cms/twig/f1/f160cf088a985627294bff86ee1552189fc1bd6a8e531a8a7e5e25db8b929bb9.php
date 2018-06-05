<?php

/* /var/www/public/themes/synema-salem-mdb-loaded/layouts/testlayout.htm */
class __TwigTemplate_0c604b5a25f889852ce50c2cf8abd6ee0e1e217149d375cd1b7a3da14a7e571a extends Twig_Template
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
        echo "<html>
    <head>
        <title>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    </head>
    <body>
        ";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 7
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/synema-salem-mdb-loaded/layouts/testlayout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
        <title>{{ this.page.title }}</title>
    </head>
    <body>
        {% page %}
    </body>
</html>", "/var/www/public/themes/synema-salem-mdb-loaded/layouts/testlayout.htm", "");
    }
}

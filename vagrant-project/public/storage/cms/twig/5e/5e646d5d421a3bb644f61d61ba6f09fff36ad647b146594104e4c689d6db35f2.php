<?php

/* /var/www/public/themes/synema-salem-mdb-loaded/partials/site/footer.htm */
class __TwigTemplate_24e3dcefecb4976b60af38f3ba1872b1fe8a62ec925a6c487bce32df9ee54b13 extends Twig_Template
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
        echo "<!--Footer-->
<footer class=\"page-footer center-on-small-only\">


    <hr>



    <!--Copyright-->
    <div class=\"footer-copyright\">
        <div class=\"container-fluid\">
            © ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Copyright: synemastudios.com

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<script src=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/jquery-3.2.1.min.js", 1 => "assets/js/popper.js", 2 => "assets/js/bootstrap.min.js", 3 => "assets/js/mdb.min.js"));
        // line 26
        echo "\"></script>

    ";
        // line 28
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 29
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 30
        echo "
<script>
    new WOW().init();
</script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/synema-salem-mdb-loaded/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 30,  57 => 29,  50 => 28,  46 => 26,  44 => 21,  32 => 12,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--Footer-->
<footer class=\"page-footer center-on-small-only\">


    <hr>



    <!--Copyright-->
    <div class=\"footer-copyright\">
        <div class=\"container-fluid\">
            © {{ 'now'|date('Y') }} Copyright: synemastudios.com

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<script src=\"{{ [
        'assets/js/jquery-3.2.1.min.js',
        'assets/js/popper.js',
        'assets/js/bootstrap.min.js',
        'assets/js/mdb.min.js'
    ]|theme }}\"></script>

    {% framework extras %}
    {% scripts %}

<script>
    new WOW().init();
</script>

</body>
</html>", "/var/www/public/themes/synema-salem-mdb-loaded/partials/site/footer.htm", "");
    }
}

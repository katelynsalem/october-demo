<?php

/* /var/www/public/themes/synema-salem-mdb-loaded/layouts/corporate.htm */
class __TwigTemplate_8df4e4365b9edc320cad4917d98b34059cfd98b8f9de9994337ed95e351f9182 extends Twig_Template
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
<!-- Intro Section -->
<section class=\"view hm-white-light jarallax\" data-jarallax='{\"speed\": 0.2}' style=\"background-image: url(https://mdbootstrap.com/img/Photos/Others/images/76.jpg);\">
    <div class=\"full-bg-img\">
        <div class=\"container flex-center\">
            <div class=\"row pt-5 mt-3\">
                <div class=\"col-md-12 mb-3\">
                    <div class=\"intro-info-content text-center\">
                        <h1 class=\"display-1 white-text mb-5 wow fadeInDown\" data-wow-delay=\"0.3s\">CREATIVE
                            <a class=\"white-text font-bold\">AGENCY</a>
                        </h1>
                        <h5 class=\"font-up mb-5 mt-1 dark-grey-text spacing font-bold wow fadeInDown\" data-wow-delay=\"0.3s\">We help businesses evolve & grow</h5>
                        <a class=\"btn btn-light-blue btn-lg wow fadeInDown\" data-wow-delay=\"0.3s\">portfolio</a>
                        <a class=\"btn btn-indigo btn-lg wow fadeInDown\" data-wow-delay=\"0.3s\">About us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Main layout-->
<main class=\"pb-0\">

    <div class=\"container\">

        <!--First row-->
        <div class=\"row mt-5 pt-lg-4 wow fadeIn\" data-wow-delay=\"0.2s\">
            <div class=\"col-lg-7\">
                <!--Featured image -->
                <div class=\"view overlay hm-white-light z-depth-1-half\">
                    <img src=\"https://mdbootstrap.com/img/Mockups/Horizontal/6-col/bf-tutorial.jpg\" class=\"img-fluid \" alt=\"\">
                    <div class=\"mask\">
                    </div>
                </div>
                <br>
            </div>

            <!--Main information-->
            <div class=\"col-lg-5 wow fadeIn\" data-wow-delay=\"0.2s\">
                <h2 class=\"h2-responsive font-bold dark-grey-text\">We are professionals</h2>
                <hr>
                <p class=\"dark-grey-text mt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis pariatur quod ipsum atque quam dolorem
                    voluptate officia sunt placeat consectetur alias fugit cum praesentium ratione sint mollitia, perferendis
                    natus quaerat! Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <a href=\"\" class=\"btn btn-indigo btn-md\">Get it now!</a>
            </div>
        </div>
        <!--/.First row-->

        <hr class=\"extra-margins my-5\">

        <!--Second row-->
        <div class=\"row pt-4 mb-4\">
            <!--First columnn-->
            <div class=\"col-lg-4\">
                <!--Card-->
                <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.4s\">

                    <!--Card image-->
                    <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Others/images/65.jpg\" alt=\"Card image cap\">

                    <!--Card content-->
                    <div class=\"card-body\">
                        <!--Title-->
                        <h4 class=\"card-title text-center dark-grey-text\">
                            <strong>Card title</strong>
                        </h4>
                        <hr>
                        <!--Text-->
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--First columnn-->

            <!--Second columnn-->
            <div class=\"col-lg-4\">
                <!--Card-->
                <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.6s\">

                    <!--Card image-->
                    <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Others/images/64.jpg\" alt=\"Card image cap\">

                    <!--Card content-->
                    <div class=\"card-body\">
                        <!--Title-->
                        <h4 class=\"card-title text-center dark-grey-text\">
                            <strong>Card title</strong>
                        </h4>
                        <hr>
                        <!--Text-->
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--Second columnn-->

            <!--Third columnn-->
            <div class=\"col-lg-4\">
                <!--Card-->
                <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.8s\">

                    <!--Card image-->
                    <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Others/images/72.jpg\" alt=\"Card image cap\">

                    <!--Card content-->
                    <div class=\"card-body\">
                        <!--Title-->
                        <h4 class=\"card-title text-center dark-grey-text\">
                            <strong>Card title</strong>
                        </h4>
                        <hr>
                        <!--Text-->
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--Third columnn-->
        </div>
        <!--/.Second row-->
    </div>

    <!--Second container-->
    <div class=\"container-fluid pb-0\" style=\"background-color: #f4f4fa\">
        <div class=\"container py-4\">

            <!--Section: Services-->
            <section id=\"services\" class=\"section mt-3 mb-3 pb-3\">

                <!-- Section heading -->
                <h3 class=\"text-center title my-5 pt-4 pb-5 dark-grey-text font-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                    <strong>Our services</strong>
                </h3>

                <!-- First row -->
                <div class=\"row wow fadeIn\" data-wow-delay=\"0.4s\">

                    <!-- First column -->
                    <div class=\"col-md-6 mb-r text-center\">

                        <!--Panel-->
                        <div class=\"card card-body text-left white hoverable\">
                            <p class=\"feature-title title font-bold dark-grey-text font-up spacing mt-4 mx-4\">
                                <i class=\"fa fa-square indigo-text mr-2\" aria-hidden=\"true\"></i>
                                <strong>Web design</strong>
                            </p>
                            <p class=\"grey-text font-small mx-4\">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente earu
                                proident. Ad vegan excepteur butcher vice lomo leggings.
                                <p class=\"font-small font-bold indigo-text mx-4 mb-0\">
                                    <a>read more</a>
                                </p>
                            </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /First column -->

                    <!-- Second column -->
                    <div class=\"col-md-6 mb-r text-center\">

                        <!--Panel-->
                        <div class=\"card card-body text-left white hoverable\">
                            <p class=\"feature-title title font-bold dark-grey-text font-up spacing mt-4 mx-4\">
                                <i class=\"fa fa-square indigo-text mr-2\" aria-hidden=\"true\"></i>
                                <strong>Development</strong>
                            </p>
                            <p class=\"grey-text font-small mx-4\">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente earu
                                proident. Ad vegan excepteur butcher vice lomo leggings.
                                <p class=\"font-small font-bold indigo-text mx-4 mb-0\">
                                    <a>read more</a>
                                </p>
                            </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /.Second column -->

                    <!-- Third column -->
                    <div class=\"col-md-6 mb-r text-center\">

                        <!--Panel-->
                        <div class=\"card card-body text-left white hoverable\">
                            <p class=\"feature-title title font-bold dark-grey-text font-up spacing mt-4 mx-4\">
                                <i class=\"fa fa-square indigo-text mr-2\" aria-hidden=\"true\"></i>
                                <strong>Branding</strong>
                            </p>
                            <p class=\"grey-text font-small mx-4\">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente earu
                                proident. Ad vegan excepteur butcher vice lomo leggings.
                                <p class=\"font-small font-bold indigo-text mx-4 mb-0\">
                                    <a>read more</a>
                                </p>
                            </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /.Third column -->

                    <!-- Fourth column -->
                    <div class=\"col-md-6 mb-r text-center\">

                        <!--Panel-->
                        <div class=\"card card-body text-left white hoverable\">
                            <p class=\"feature-title title font-bold dark-grey-text font-up spacing mt-4 mx-4\">
                                <i class=\"fa fa-square indigo-text mr-2\" aria-hidden=\"true\"></i>
                                <strong>Marketing</strong>
                            </p>
                            <p class=\"grey-text font-small mx-4\">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente earu
                                proident. Ad vegan excepteur butcher vice lomo leggings.
                                <p class=\"font-small font-bold indigo-text mx-4 mb-0\">
                                    <a>read more</a>
                                </p>
                            </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /.Fourth column -->

                </div>
                <!-- /.First row -->

            </section>
            <!--/Section: Services-->

        </div>

    </div>
    <!--Second container-->

</main>
<!--/.Main layout-->

";
        // line 245
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/synema-salem-mdb-loaded/layouts/corporate.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 245,  27 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/head' %}
{% partial 'site/scrollingNavbar' %}

<!-- Intro Section -->
<section class=\"view hm-white-light jarallax\" data-jarallax='{\"speed\": 0.2}' style=\"background-image: url(https://mdbootstrap.com/img/Photos/Others/images/76.jpg);\">
    <div class=\"full-bg-img\">
        <div class=\"container flex-center\">
            <div class=\"row pt-5 mt-3\">
                <div class=\"col-md-12 mb-3\">
                    <div class=\"intro-info-content text-center\">
                        <h1 class=\"display-1 white-text mb-5 wow fadeInDown\" data-wow-delay=\"0.3s\">CREATIVE
                            <a class=\"white-text font-bold\">AGENCY</a>
                        </h1>
                        <h5 class=\"font-up mb-5 mt-1 dark-grey-text spacing font-bold wow fadeInDown\" data-wow-delay=\"0.3s\">We help businesses evolve & grow</h5>
                        <a class=\"btn btn-light-blue btn-lg wow fadeInDown\" data-wow-delay=\"0.3s\">portfolio</a>
                        <a class=\"btn btn-indigo btn-lg wow fadeInDown\" data-wow-delay=\"0.3s\">About us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Main layout-->
<main class=\"pb-0\">

    <div class=\"container\">

        <!--First row-->
        <div class=\"row mt-5 pt-lg-4 wow fadeIn\" data-wow-delay=\"0.2s\">
            <div class=\"col-lg-7\">
                <!--Featured image -->
                <div class=\"view overlay hm-white-light z-depth-1-half\">
                    <img src=\"https://mdbootstrap.com/img/Mockups/Horizontal/6-col/bf-tutorial.jpg\" class=\"img-fluid \" alt=\"\">
                    <div class=\"mask\">
                    </div>
                </div>
                <br>
            </div>

            <!--Main information-->
            <div class=\"col-lg-5 wow fadeIn\" data-wow-delay=\"0.2s\">
                <h2 class=\"h2-responsive font-bold dark-grey-text\">We are professionals</h2>
                <hr>
                <p class=\"dark-grey-text mt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis pariatur quod ipsum atque quam dolorem
                    voluptate officia sunt placeat consectetur alias fugit cum praesentium ratione sint mollitia, perferendis
                    natus quaerat! Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <a href=\"\" class=\"btn btn-indigo btn-md\">Get it now!</a>
            </div>
        </div>
        <!--/.First row-->

        <hr class=\"extra-margins my-5\">

        <!--Second row-->
        <div class=\"row pt-4 mb-4\">
            <!--First columnn-->
            <div class=\"col-lg-4\">
                <!--Card-->
                <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.4s\">

                    <!--Card image-->
                    <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Others/images/65.jpg\" alt=\"Card image cap\">

                    <!--Card content-->
                    <div class=\"card-body\">
                        <!--Title-->
                        <h4 class=\"card-title text-center dark-grey-text\">
                            <strong>Card title</strong>
                        </h4>
                        <hr>
                        <!--Text-->
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--First columnn-->

            <!--Second columnn-->
            <div class=\"col-lg-4\">
                <!--Card-->
                <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.6s\">

                    <!--Card image-->
                    <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Others/images/64.jpg\" alt=\"Card image cap\">

                    <!--Card content-->
                    <div class=\"card-body\">
                        <!--Title-->
                        <h4 class=\"card-title text-center dark-grey-text\">
                            <strong>Card title</strong>
                        </h4>
                        <hr>
                        <!--Text-->
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--Second columnn-->

            <!--Third columnn-->
            <div class=\"col-lg-4\">
                <!--Card-->
                <div class=\"card mb-r wow fadeIn\" data-wow-delay=\"0.8s\">

                    <!--Card image-->
                    <img class=\"img-fluid\" src=\"https://mdbootstrap.com/img/Photos/Others/images/72.jpg\" alt=\"Card image cap\">

                    <!--Card content-->
                    <div class=\"card-body\">
                        <!--Title-->
                        <h4 class=\"card-title text-center dark-grey-text\">
                            <strong>Card title</strong>
                        </h4>
                        <hr>
                        <!--Text-->
                        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--Third columnn-->
        </div>
        <!--/.Second row-->
    </div>

    <!--Second container-->
    <div class=\"container-fluid pb-0\" style=\"background-color: #f4f4fa\">
        <div class=\"container py-4\">

            <!--Section: Services-->
            <section id=\"services\" class=\"section mt-3 mb-3 pb-3\">

                <!-- Section heading -->
                <h3 class=\"text-center title my-5 pt-4 pb-5 dark-grey-text font-bold wow fadeIn\" data-wow-delay=\"0.2s\">
                    <strong>Our services</strong>
                </h3>

                <!-- First row -->
                <div class=\"row wow fadeIn\" data-wow-delay=\"0.4s\">

                    <!-- First column -->
                    <div class=\"col-md-6 mb-r text-center\">

                        <!--Panel-->
                        <div class=\"card card-body text-left white hoverable\">
                            <p class=\"feature-title title font-bold dark-grey-text font-up spacing mt-4 mx-4\">
                                <i class=\"fa fa-square indigo-text mr-2\" aria-hidden=\"true\"></i>
                                <strong>Web design</strong>
                            </p>
                            <p class=\"grey-text font-small mx-4\">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente earu
                                proident. Ad vegan excepteur butcher vice lomo leggings.
                                <p class=\"font-small font-bold indigo-text mx-4 mb-0\">
                                    <a>read more</a>
                                </p>
                            </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /First column -->

                    <!-- Second column -->
                    <div class=\"col-md-6 mb-r text-center\">

                        <!--Panel-->
                        <div class=\"card card-body text-left white hoverable\">
                            <p class=\"feature-title title font-bold dark-grey-text font-up spacing mt-4 mx-4\">
                                <i class=\"fa fa-square indigo-text mr-2\" aria-hidden=\"true\"></i>
                                <strong>Development</strong>
                            </p>
                            <p class=\"grey-text font-small mx-4\">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente earu
                                proident. Ad vegan excepteur butcher vice lomo leggings.
                                <p class=\"font-small font-bold indigo-text mx-4 mb-0\">
                                    <a>read more</a>
                                </p>
                            </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /.Second column -->

                    <!-- Third column -->
                    <div class=\"col-md-6 mb-r text-center\">

                        <!--Panel-->
                        <div class=\"card card-body text-left white hoverable\">
                            <p class=\"feature-title title font-bold dark-grey-text font-up spacing mt-4 mx-4\">
                                <i class=\"fa fa-square indigo-text mr-2\" aria-hidden=\"true\"></i>
                                <strong>Branding</strong>
                            </p>
                            <p class=\"grey-text font-small mx-4\">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente earu
                                proident. Ad vegan excepteur butcher vice lomo leggings.
                                <p class=\"font-small font-bold indigo-text mx-4 mb-0\">
                                    <a>read more</a>
                                </p>
                            </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /.Third column -->

                    <!-- Fourth column -->
                    <div class=\"col-md-6 mb-r text-center\">

                        <!--Panel-->
                        <div class=\"card card-body text-left white hoverable\">
                            <p class=\"feature-title title font-bold dark-grey-text font-up spacing mt-4 mx-4\">
                                <i class=\"fa fa-square indigo-text mr-2\" aria-hidden=\"true\"></i>
                                <strong>Marketing</strong>
                            </p>
                            <p class=\"grey-text font-small mx-4\">Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente earu
                                proident. Ad vegan excepteur butcher vice lomo leggings.
                                <p class=\"font-small font-bold indigo-text mx-4 mb-0\">
                                    <a>read more</a>
                                </p>
                            </p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /.Fourth column -->

                </div>
                <!-- /.First row -->

            </section>
            <!--/Section: Services-->

        </div>

    </div>
    <!--Second container-->

</main>
<!--/.Main layout-->

{% partial 'site/footer' %}", "/var/www/public/themes/synema-salem-mdb-loaded/layouts/corporate.htm", "");
    }
}

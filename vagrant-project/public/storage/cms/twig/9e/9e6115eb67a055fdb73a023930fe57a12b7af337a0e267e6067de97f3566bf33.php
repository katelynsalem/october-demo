<?php

/* /var/www/public/themes/synema-salem-mdb-loaded/layouts/teamProfiles.htm */
class __TwigTemplate_fef944b218c9e070646654e9764f16a37d13325f9b4962c5bfe282f03fdd6941 extends Twig_Template
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
        // line 20
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(($context["bgImageLarge"] ?? null));
        echo "\"
    srcset=\"
      ";
        // line 22
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(($context["bgImageXSmall"] ?? null));
        echo " 750w,
      ";
        // line 23
        echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(($context["bgImageXLarge"] ?? null));
        echo " 2880w\"
    sizes=\"100vw\"
    alt=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["altText"] ?? null), "html", null, true);
        echo "\"
    class=\"full-width\" >

    <div id=\"synemaAccent\" class=\"full-bg-img flex-center\">
        <ul class=\"animated fadeInUp\">
            <li>
                <h1 class=\"display-3 mb-4 font-bold underlined\">";
        // line 31
        echo twig_escape_filter($this->env, ($context["introTitle"] ?? null), "html", null, true);
        echo "<span style=\"color: #da1f27\"> ";
        echo twig_escape_filter($this->env, ($context["introTitleAccent"] ?? null), "html", null, true);
        echo " </span>";
        echo twig_escape_filter($this->env, ($context["introTitle2"] ?? null), "html", null, true);
        echo "</h1></li>
            <li>
                <h3 class=\"mb-5\">";
        // line 33
        echo twig_escape_filter($this->env, ($context["tagline"] ?? null), "html", null, true);
        echo "</h3>
            </li>
            <li>
                ";
        // line 36
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["fields"] ?? null), "btn1Text", array()) != "")) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["btn1Link"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg\" rel=\"nofollow\">";
            echo twig_escape_filter($this->env, ($context["btn1Text"] ?? null), "html", null, true);
            echo "</a>";
        }
        // line 37
        echo "                ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["fields"] ?? null), "btn2Text", array()) != "")) {
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["btn2Link"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-outline-white btn-lg\" rel=\"nofollow\">";
            echo twig_escape_filter($this->env, ($context["btn2Text"] ?? null), "html", null, true);
            echo "</a>";
        }
        // line 38
        echo "            </li>
        </ul>
    </div>
</div>
<!--/.Mask-->

<!-- Content -->
<div>
  ";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 47
        echo "</div>

<div class=\"container\">
    <div class=\"row\">
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["extraData"] ?? null), "Profiles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 52
            echo "
        
        
        
        
        
        
        
        
        
        
        
        

        <div class=\"col-lg-3 col-md-6\">
            <!--Card-->
            <div class=\"card mb-r light-grey\">
                <!--Card image-->
                    <img src=\"";
            // line 70
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileImage", array()));
            echo "\" class=\"img-fluid mx-auto\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), "html", null, true);
            echo "\">
                    <div class=\"mask waves-effect waves-light\"></div>
                <!--Card content-->
                <div class=\"p-3\" style=\"min-height: 7rem;\">
                    <!--Title-->
                    <h5 class=\"card-title\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), "html", null, true);
            echo "</h5>
                    <!--Text-->
                    <p class=\"card-text text-muted\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileTitle", array()), "html", null, true);
            echo "</p>
                </div>
                <!--Card footer-->
                <div class=\"card-footer pb-1\">
                    <button type=\"button\" class=\"btn btn-primary btn-sm float-right\"
                            data-toggle=\"modal\"
                            data-target=\"#";
            // line 83
            echo twig_escape_filter($this->env, twig_replace_filter(twig_replace_filter(twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), array(" " => "-")), array("(" => "-")), array(")" => "")), "html", null, true);
            echo "\">
                        View Bio
                    </button>
                </div>
                <!--/.Card content-->
            </div>
            <!--/.Card-->
        </div>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"";
            // line 93
            echo twig_escape_filter($this->env, twig_replace_filter(twig_replace_filter(twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), array(" " => "-")), array("(" => "-")), array(")" => "")), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <!--Content-->
                <div class=\"modal-content\">
                    <!--Header-->
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title w-100\" id=\"myModalLabel\">
                            ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), "html", null, true);
            echo "
                            ";
            // line 101
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileTitle", array())) {
                echo "<br>
                                <small class=\"text-muted\">";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileTitle", array()), "html", null, true);
                echo "</small>
                            ";
            }
            // line 104
            echo "                        </h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>

                    <!--Body for small screens including tabs-->
                    <!-- Nav tabs -->
                    <div class=\"modal-body small-screen\">
                      <img src=\"";
            // line 113
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileImage", array()));
            echo "\" class=\"img-thumbnail mx-auto d-block\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), "html", null, true);
            echo "\">
                      <ul id=\"teamNav\" class=\"nav nav-tabs nav-justified\">
                        <li class=\"nav-item waves-effect waves-light\">
                          <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#panel1\" role=\"tab\">Bio</a>
                        </li>
                        <li class=\"nav-item waves-effect waves-light\">
                          <a class=\"nav-link\" data-toggle=\"tab\" href=\"#panel2\" role=\"tab\">Education</a>
                        </li>
                        <li class=\"nav-item waves-effect waves-light\">
                          <a class=\"nav-link\" data-toggle=\"tab\" href=\"#panel3\" role=\"tab\">Skills</a>
                        </li>
                      </ul>
                      <!-- Tab panels -->
                      <div class=\"tab-content card\">
                        <!--Panel 1-->
                        <div class=\"tab-pane fade in show active\" id=\"panel1\" role=\"tabpanel\">
                          <br>
                          <p>";
            // line 130
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileBio", array());
            echo "</p>
                        </div>
                        <!--/.Panel 1-->
                        <!--Panel 2-->
                        <div class=\"tab-pane fade\" id=\"panel2\" role=\"tabpanel\">
                          <br>
                          <p>";
            // line 136
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileEducation", array());
            echo "</p>
                        </div>
                        <!--/.Panel 2-->
                        <!--Panel 3-->
                        <div class=\"tab-pane fade\" id=\"panel3\" role=\"tabpanel\">
                          <br>
                          <p></p>
                          ";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills1", array()), "html", null, true);
            echo "
                          <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills1Level", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills1Level", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills1Level", array()), "html", null, true);
            echo "%</div>
                          </div>
                          ";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills2", array()), "html", null, true);
            echo "
                          <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills2Level", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills2Level", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills2Level", array()), "html", null, true);
            echo "%</div>
                          </div>
                          ";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills3", array()), "html", null, true);
            echo "
                          <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills3Level", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills3Level", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills3Level", array()), "html", null, true);
            echo "%</div>
                          </div>
                          ";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills4", array()), "html", null, true);
            echo "
                          <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills4Level", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills4Level", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills4Level", array()), "html", null, true);
            echo "%</div>
                          </div>
                        </div>
                        <!--/.Panel 3-->
                        </div>
                    </div>

                    <!--Body for large screens-->
                    <div class=\"modal-body large-screen\">
                        <img src=\"";
            // line 166
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileImage", array()));
            echo "\" class=\"img-thumbnail mx-auto d-block\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), "html", null, true);
            echo "\">
                        <br>
                        <h3 class=\"underlined\">Bio</h3>
                        ";
            // line 169
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileBio", array());
            echo "
                        <br>
                        ";
            // line 171
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileEducation", array())) {
                // line 172
                echo "                          <h3 class=\"underlined\">Education</h3>
                          ";
                // line 173
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileEducation", array());
                echo "
                        ";
            }
            // line 175
            echo "                        <br>
                        <h3 class=\"underlined\">Skills</h3>
                        <br>
                        ";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills1", array()), "html", null, true);
            echo "
                        <div class=\"progress\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills1Level", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills1Level", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills1Level", array()), "html", null, true);
            echo "%</div>
                        </div>
                        ";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills2", array()), "html", null, true);
            echo "
                        <div class=\"progress\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills2Level", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills2Level", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills2Level", array()), "html", null, true);
            echo "%</div>
                        </div>
                        ";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills3", array()), "html", null, true);
            echo "
                        <div class=\"progress\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills3Level", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills3Level", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills3Level", array()), "html", null, true);
            echo "%</div>
                        </div>
                        ";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills4", array()), "html", null, true);
            echo "
                        <div class=\"progress\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills4Level", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills4Level", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills4Level", array()), "html", null, true);
            echo "%</div>
                        </div>
                    </div>
                    <!--Footer-->
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!-- Modal -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "    </div>
</div>

";
        // line 208
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/public/themes/synema-salem-mdb-loaded/layouts/teamProfiles.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 208,  416 => 205,  393 => 192,  388 => 190,  379 => 188,  374 => 186,  365 => 184,  360 => 182,  351 => 180,  346 => 178,  341 => 175,  336 => 173,  333 => 172,  331 => 171,  326 => 169,  318 => 166,  302 => 157,  297 => 155,  288 => 153,  283 => 151,  274 => 149,  269 => 147,  260 => 145,  255 => 143,  245 => 136,  236 => 130,  214 => 113,  203 => 104,  198 => 102,  194 => 101,  190 => 100,  180 => 93,  167 => 83,  158 => 77,  153 => 75,  143 => 70,  123 => 52,  119 => 51,  113 => 47,  111 => 46,  101 => 38,  92 => 37,  84 => 36,  78 => 33,  69 => 31,  60 => 25,  55 => 23,  51 => 22,  46 => 20,  27 => 3,  23 => 2,  19 => 1,);
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
                <h1 class=\"display-3 mb-4 font-bold underlined\">{{ introTitle }}<span style=\"color: #da1f27\"> {{ introTitleAccent }} </span>{{ introTitle2 }}</h1></li>
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
<div>
  {% page %}
</div>

<div class=\"container\">
    <div class=\"row\">
        {% for fields in extraData.Profiles %}

        
        
        
        
        
        
        
        
        
        
        
        

        <div class=\"col-lg-3 col-md-6\">
            <!--Card-->
            <div class=\"card mb-r light-grey\">
                <!--Card image-->
                    <img src=\"{{ fields.profileImage|media }}\" class=\"img-fluid mx-auto\" alt=\"{{ fields.profileName }}\">
                    <div class=\"mask waves-effect waves-light\"></div>
                <!--Card content-->
                <div class=\"p-3\" style=\"min-height: 7rem;\">
                    <!--Title-->
                    <h5 class=\"card-title\">{{ fields.profileName }}</h5>
                    <!--Text-->
                    <p class=\"card-text text-muted\">{{ fields.profileTitle }}</p>
                </div>
                <!--Card footer-->
                <div class=\"card-footer pb-1\">
                    <button type=\"button\" class=\"btn btn-primary btn-sm float-right\"
                            data-toggle=\"modal\"
                            data-target=\"#{{ fields.profileName|replace({' ':'-'})|replace({'(':'-'})|replace({')':''}) }}\">
                        View Bio
                    </button>
                </div>
                <!--/.Card content-->
            </div>
            <!--/.Card-->
        </div>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"{{ fields.profileName|replace({' ':'-'})|replace({'(':'-'})|replace({')':''}) }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <!--Content-->
                <div class=\"modal-content\">
                    <!--Header-->
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title w-100\" id=\"myModalLabel\">
                            {{ fields.profileName }}
                            {% if fields.profileTitle %}<br>
                                <small class=\"text-muted\">{{ fields.profileTitle }}</small>
                            {% endif %}
                        </h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>

                    <!--Body for small screens including tabs-->
                    <!-- Nav tabs -->
                    <div class=\"modal-body small-screen\">
                      <img src=\"{{ fields.profileImage|media }}\" class=\"img-thumbnail mx-auto d-block\" alt=\"{{ fields.profileName }}\">
                      <ul id=\"teamNav\" class=\"nav nav-tabs nav-justified\">
                        <li class=\"nav-item waves-effect waves-light\">
                          <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#panel1\" role=\"tab\">Bio</a>
                        </li>
                        <li class=\"nav-item waves-effect waves-light\">
                          <a class=\"nav-link\" data-toggle=\"tab\" href=\"#panel2\" role=\"tab\">Education</a>
                        </li>
                        <li class=\"nav-item waves-effect waves-light\">
                          <a class=\"nav-link\" data-toggle=\"tab\" href=\"#panel3\" role=\"tab\">Skills</a>
                        </li>
                      </ul>
                      <!-- Tab panels -->
                      <div class=\"tab-content card\">
                        <!--Panel 1-->
                        <div class=\"tab-pane fade in show active\" id=\"panel1\" role=\"tabpanel\">
                          <br>
                          <p>{{ fields.profileBio|raw }}</p>
                        </div>
                        <!--/.Panel 1-->
                        <!--Panel 2-->
                        <div class=\"tab-pane fade\" id=\"panel2\" role=\"tabpanel\">
                          <br>
                          <p>{{ fields.profileEducation|raw }}</p>
                        </div>
                        <!--/.Panel 2-->
                        <!--Panel 3-->
                        <div class=\"tab-pane fade\" id=\"panel3\" role=\"tabpanel\">
                          <br>
                          <p></p>
                          {{ fields.profileSkills1 }}
                          <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ fields.profileSkills1Level }}%\" aria-valuenow=\"{{ fields.profileSkills1Level }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">{{ fields.profileSkills1Level }}%</div>
                          </div>
                          {{ fields.profileSkills2 }}
                          <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ fields.profileSkills2Level }}%\" aria-valuenow=\"{{ fields.profileSkills2Level }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">{{ fields.profileSkills2Level }}%</div>
                          </div>
                          {{ fields.profileSkills3 }}
                          <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ fields.profileSkills3Level }}%\" aria-valuenow=\"{{ fields.profileSkills3Level }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">{{ fields.profileSkills3Level }}%</div>
                          </div>
                          {{ fields.profileSkills4 }}
                          <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ fields.profileSkills4Level }}%\" aria-valuenow=\"{{ fields.profileSkills4Level }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">{{ fields.profileSkills4Level }}%</div>
                          </div>
                        </div>
                        <!--/.Panel 3-->
                        </div>
                    </div>

                    <!--Body for large screens-->
                    <div class=\"modal-body large-screen\">
                        <img src=\"{{ fields.profileImage|media }}\" class=\"img-thumbnail mx-auto d-block\" alt=\"{{ fields.profileName }}\">
                        <br>
                        <h3 class=\"underlined\">Bio</h3>
                        {{ fields.profileBio|raw }}
                        <br>
                        {% if fields.profileEducation %}
                          <h3 class=\"underlined\">Education</h3>
                          {{ fields.profileEducation|raw }}
                        {% endif %}
                        <br>
                        <h3 class=\"underlined\">Skills</h3>
                        <br>
                        {{ fields.profileSkills1 }}
                        <div class=\"progress\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ fields.profileSkills1Level }}%\" aria-valuenow=\"{{ fields.profileSkills1Level }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">{{ fields.profileSkills1Level }}%</div>
                        </div>
                        {{ fields.profileSkills2 }}
                        <div class=\"progress\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ fields.profileSkills2Level }}%\" aria-valuenow=\"{{ fields.profileSkills2Level }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">{{ fields.profileSkills2Level }}%</div>
                        </div>
                        {{ fields.profileSkills3 }}
                        <div class=\"progress\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ fields.profileSkills3Level }}%\" aria-valuenow=\"{{ fields.profileSkills3Level }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">{{ fields.profileSkills3Level }}%</div>
                        </div>
                        {{ fields.profileSkills4 }}
                        <div class=\"progress\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ fields.profileSkills4Level }}%\" aria-valuenow=\"{{ fields.profileSkills4Level }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">{{ fields.profileSkills4Level }}%</div>
                        </div>
                    </div>
                    <!--Footer-->
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-sm btn-primary\" data-dismiss=\"modal\">Close</button>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!-- Modal -->
{% endfor %}
    </div>
</div>

{% partial 'site/footer' %}", "/var/www/public/themes/synema-salem-mdb-loaded/layouts/teamProfiles.htm", "");
    }
}

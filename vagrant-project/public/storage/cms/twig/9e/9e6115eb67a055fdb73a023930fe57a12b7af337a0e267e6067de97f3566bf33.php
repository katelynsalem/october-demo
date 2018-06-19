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
<!-- Content -->
<div>
  ";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 7
        echo "</div>

<div class=\"container\">
    <div class=\"row\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["extraData"] ?? null), "Profiles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 12
            echo "
        
        
        
        
        
        
        
        
        
        
        
        

        <div class=\"col-lg-3 col-md-6\">
            <!--Card-->
            <div class=\"card mb-r light-grey\">
                <!--Card image-->
                    <img src=\"";
            // line 30
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileImage", array()));
            echo "\" class=\"img-fluid mx-auto\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), "html", null, true);
            echo "\">
                    <div class=\"mask waves-effect waves-light\"></div>
                <!--Card content-->
                <div class=\"p-3\" style=\"min-height: 7rem;\">
                    <!--Title-->
                    <h5 class=\"card-title\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), "html", null, true);
            echo "</h5>
                    <!--Text-->
                    <p class=\"card-text text-muted\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileTitle", array()), "html", null, true);
            echo "</p>
                </div>
                <!--Card footer-->
                <div class=\"card-footer pb-1\">
                    <button type=\"button\" class=\"btn btn-primary btn-sm float-right\"
                            data-toggle=\"modal\"
                            data-target=\"#";
            // line 43
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
            // line 53
            echo twig_escape_filter($this->env, twig_replace_filter(twig_replace_filter(twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), array(" " => "-")), array("(" => "-")), array(")" => "")), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <!--Content-->
                <div class=\"modal-content\">
                    <!--Header-->
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title w-100\" id=\"myModalLabel\">
                            ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), "html", null, true);
            echo "
                            ";
            // line 61
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileTitle", array())) {
                echo "<br>
                                <small class=\"text-muted\">";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileTitle", array()), "html", null, true);
                echo "</small>
                            ";
            }
            // line 64
            echo "                        </h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>

                    <!--Body for small screens including tabs-->
                    <!-- Nav tabs -->
                    <div class=\"modal-body small-screen\">
                      <img src=\"";
            // line 73
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
            // line 90
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileBio", array());
            echo "</p>
                        </div>
                        <!--/.Panel 1-->
                        <!--Panel 2-->
                        <div class=\"tab-pane fade\" id=\"panel2\" role=\"tabpanel\">
                          <br>
                          <p>";
            // line 96
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileEducation", array());
            echo "</p>
                        </div>
                        <!--/.Panel 2-->
                        <!--Panel 3-->
                        <div class=\"tab-pane fade\" id=\"panel3\" role=\"tabpanel\">
                          <br>
                          <p></p>
                          ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills1", array()), "html", null, true);
            echo "
                          <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills1Level", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills1Level", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills1Level", array()), "html", null, true);
            echo "%</div>
                          </div>
                          ";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills2", array()), "html", null, true);
            echo "
                          <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills2Level", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills2Level", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills2Level", array()), "html", null, true);
            echo "%</div>
                          </div>
                          ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills3", array()), "html", null, true);
            echo "
                          <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills3Level", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills3Level", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills3Level", array()), "html", null, true);
            echo "%</div>
                          </div>
                          ";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills4", array()), "html", null, true);
            echo "
                          <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 117
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
            // line 126
            echo $this->env->getExtension('System\Twig\Extension')->mediaFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileImage", array()));
            echo "\" class=\"img-thumbnail mx-auto d-block\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileName", array()), "html", null, true);
            echo "\">
                        <br>
                        <h3 class=\"underlined\">Bio</h3>
                        ";
            // line 129
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileBio", array());
            echo "
                        <br>
                        ";
            // line 131
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileEducation", array())) {
                // line 132
                echo "                          <h3 class=\"underlined\">Education</h3>
                          ";
                // line 133
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileEducation", array());
                echo "
                        ";
            }
            // line 135
            echo "                        <br>
                        <h3 class=\"underlined\">Skills</h3>
                        <br>
                        ";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills1", array()), "html", null, true);
            echo "
                        <div class=\"progress\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills1Level", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills1Level", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills1Level", array()), "html", null, true);
            echo "%</div>
                        </div>
                        ";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills2", array()), "html", null, true);
            echo "
                        <div class=\"progress\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills2Level", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills2Level", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills2Level", array()), "html", null, true);
            echo "%</div>
                        </div>
                        ";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills3", array()), "html", null, true);
            echo "
                        <div class=\"progress\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills3Level", array()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills3Level", array()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills3Level", array()), "html", null, true);
            echo "%</div>
                        </div>
                        ";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fields"], "profileSkills4", array()), "html", null, true);
            echo "
                        <div class=\"progress\">
                          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 152
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
        // line 165
        echo "    </div>
</div>

";
        // line 168
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
        return array (  342 => 168,  337 => 165,  314 => 152,  309 => 150,  300 => 148,  295 => 146,  286 => 144,  281 => 142,  272 => 140,  267 => 138,  262 => 135,  257 => 133,  254 => 132,  252 => 131,  247 => 129,  239 => 126,  223 => 117,  218 => 115,  209 => 113,  204 => 111,  195 => 109,  190 => 107,  181 => 105,  176 => 103,  166 => 96,  157 => 90,  135 => 73,  124 => 64,  119 => 62,  115 => 61,  111 => 60,  101 => 53,  88 => 43,  79 => 37,  74 => 35,  64 => 30,  44 => 12,  40 => 11,  34 => 7,  32 => 6,  27 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/head' %}
{% partial 'site/scrollingNavbar' %}

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

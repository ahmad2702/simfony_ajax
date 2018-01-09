<?php

/* profile.php.twig */
class __TwigTemplate_5d38ba0e1625edc5774d894ccc325643afd5cd25c1dbc90ac379d31cfcbcb4fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "profile.php.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.php.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98171a43a7cbb6fbfc444bf1129085f977cc99b16517db812a5bb8b0063b0828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98171a43a7cbb6fbfc444bf1129085f977cc99b16517db812a5bb8b0063b0828->enter($__internal_98171a43a7cbb6fbfc444bf1129085f977cc99b16517db812a5bb8b0063b0828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $__internal_da46bf8f7b5beb24cede57224c7aa0823eb5cf1932dcc97e90425a471515f1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da46bf8f7b5beb24cede57224c7aa0823eb5cf1932dcc97e90425a471515f1f5->enter($__internal_da46bf8f7b5beb24cede57224c7aa0823eb5cf1932dcc97e90425a471515f1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98171a43a7cbb6fbfc444bf1129085f977cc99b16517db812a5bb8b0063b0828->leave($__internal_98171a43a7cbb6fbfc444bf1129085f977cc99b16517db812a5bb8b0063b0828_prof);

        
        $__internal_da46bf8f7b5beb24cede57224c7aa0823eb5cf1932dcc97e90425a471515f1f5->leave($__internal_da46bf8f7b5beb24cede57224c7aa0823eb5cf1932dcc97e90425a471515f1f5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f677822da1bdd89e28a5f7e4549a8cbe618ffe44f706e191bb3c3dbbf38e76f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f677822da1bdd89e28a5f7e4549a8cbe618ffe44f706e191bb3c3dbbf38e76f8->enter($__internal_f677822da1bdd89e28a5f7e4549a8cbe618ffe44f706e191bb3c3dbbf38e76f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4f82b4f5196cc0d2aa90d025c07110e0ae5e376ba75de2fa0dd851552a61385e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f82b4f5196cc0d2aa90d025c07110e0ae5e376ba75de2fa0dd851552a61385e->enter($__internal_4f82b4f5196cc0d2aa90d025c07110e0ae5e376ba75de2fa0dd851552a61385e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
  ";
        // line 10
        echo "
  ";
        // line 12
        echo "
    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Profil von: ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo " </h1>
    </div>

    ";
        // line 17
        if (((isset($context["profile_error"]) || array_key_exists("profile_error", $context) ? $context["profile_error"] : (function () { throw new Twig_Error_Runtime('Variable "profile_error" does not exist.', 17, $this->getSourceContext()); })()) == "no_found")) {
            // line 18
            echo "
        <div class=\"noLinesFound\">
            Profil nicht gefunden. <br>
        </div>

    ";
        } else {
            // line 24
            echo "
        ";
            // line 25
            if ((twig_length_filter($this->env, (isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 25, $this->getSourceContext()); })())) == 0)) {
                // line 26
                echo "
            <div style=\"width: 100%; height: 50px; color: blue; text-align: center;\">

                Anzahl der Lauftage: 0 <br>

                Gesamttage seit dem ersten Lauftag bis heute:
                ";
                // line 32
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 33
                    echo "                    0
                ";
                } else {
                    // line 35
                    echo "                    <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                ";
                }
                // line 37
                echo "                <br>

                Gesamte bisher gelaufene Strecke: 0

            </div>

            <div class=\"noLinesFound\">
                Die Liste ist noch leer. <br>
            </div>



        ";
            } else {
                // line 50
                echo "
            ";
                // line 51
                $context["gesamtStreckee"] = 0;
                // line 52
                echo "
            ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 53, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 54
                    echo "                ";
                    $context["gesamtStreckee"] = ((isset($context["gesamtStreckee"]) || array_key_exists("gesamtStreckee", $context) ? $context["gesamtStreckee"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStreckee" does not exist.', 54, $this->getSourceContext()); })()) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"));
                    // line 55
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "
            <div style=\"width: 100%; height: 50px; color: blue; text-align: center;\">

                Anzahl der Lauftage: ";
                // line 59
                echo twig_escape_filter($this->env, (isset($context["anzahl"]) || array_key_exists("anzahl", $context) ? $context["anzahl"] : (function () { throw new Twig_Error_Runtime('Variable "anzahl" does not exist.', 59, $this->getSourceContext()); })()), "html", null, true);
                echo " <br>

                Gesamttage seit dem ersten Lauftag bis heute:
                ";
                // line 62
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 63
                    echo "                    ";
                    echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new Twig_Error_Runtime('Variable "now" does not exist.', 63, $this->getSourceContext()); })()), "U") - twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 63, $this->getSourceContext()); })()), "getDay", array(), "method"), "U")) / 86400), "html", null, true);
                    echo "
                ";
                } else {
                    // line 65
                    echo "                    <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                ";
                }
                // line 67
                echo "                <br>

                Gesamte bisher gelaufene Strecke: ";
                // line 69
                echo twig_escape_filter($this->env, (isset($context["gesamtStreckee"]) || array_key_exists("gesamtStreckee", $context) ? $context["gesamtStreckee"] : (function () { throw new Twig_Error_Runtime('Variable "gesamtStreckee" does not exist.', 69, $this->getSourceContext()); })()), "html", null, true);
                echo "

            </div>



            <div class=\"trackerLine\">
                <div class=\"trackerDatum\">
                    <span style=\"text-transform: uppercase; font-weight: bold;\">Datum</span>
                </div>

                <div class=\"trackerStrecke\">
                    <span style=\"text-transform: uppercase; font-weight: bold;\">Gelaufene Strecke</span>
                </div>

                <div class=\"trackerZeit\">
                    <span style=\"text-transform: uppercase; font-weight: bold;\">Gelaufene Zeit</span>
                </div>

                <div class=\"trackerSpeed\">
                    <span style=\"text-transform: uppercase; font-weight: bold;\">geschwindigkeit</span>
                </div>

                ";
                // line 92
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 92, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 92, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                    // line 93
                    echo "                    <div class=\"trackerRemove\">
                        <span style=\"text-transform: uppercase; font-weight: bold;\">eintrag loschen</span>
                    </div>
                ";
                }
                // line 97
                echo "
            </div>

            ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 100, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 101
                    echo "
                <div class=\"trackerLine\">
                    <div class=\"trackerDatum\">
                        ";
                    // line 104
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getDay", array(), "method"), "html", null, true);
                    echo "
                    </div>

                    <div class=\"trackerStrecke\">
                        ";
                    // line 108
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"), "html", null, true);
                    echo " km
                    </div>

                    <div class=\"trackerZeit\">
                        ";
                    // line 112
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 113
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getZeit", array(), "method"), 2, "floor"), "html", null, true);
                        echo " min
                        ";
                    } else {
                        // line 115
                        echo "                            <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                        ";
                    }
                    // line 117
                    echo "                    </div>

                    <div class=\"trackerSpeed\">
                        ";
                    // line 120
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 121
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getSpeed", array(), "method"), 1, "floor"), "html", null, true);
                        echo " km/h
                        ";
                    } else {
                        // line 123
                        echo "                            <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                        ";
                    }
                    // line 125
                    echo "                    </div>

                    ";
                    // line 127
                    if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 127, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 127, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                        // line 128
                        echo "             ";
                        // line 129
                        echo "                        <div class=\"trackerRemove\">
                            <form method=\"post\" action=\"";
                        // line 130
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remove_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 130, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
                        echo "\">
                                <input type=\"hidden\" value=\"";
                        // line 131
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getId", array(), "method"), "html", null, true);
                        echo "\" name=\"id_toRemove\">


                                        <input type=\"submit\" value=\"löschen\" name=\"removeForm\">


                            </form>
                        </div>
                    ";
                    }
                    // line 140
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "


        ";
            }
            // line 147
            echo "


        ";
            // line 150
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 150, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 150, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                // line 151
                echo "
            <div class=\"page-header\">

            </div>

            <form class=\"form-horizontal\" action=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 156, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
                echo "\" method=\"post\">
                <fieldset>

                    <!-- Datum-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"datum\">DATUM:</label>
                        <div class=\"col-md-6\">
                            <input id=\"name\" name=\"datum\" type=\"date\" placeholder=\"JJJJ-MM-TT\" class=\"form-control\" value=\"";
                // line 163
                echo twig_escape_filter($this->env, (isset($context["datum"]) || array_key_exists("datum", $context) ? $context["datum"] : (function () { throw new Twig_Error_Runtime('Variable "datum" does not exist.', 163, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 164
                echo twig_escape_filter($this->env, (isset($context["error_datum"]) || array_key_exists("error_datum", $context) ? $context["error_datum"] : (function () { throw new Twig_Error_Runtime('Variable "error_datum" does not exist.', 164, $this->getSourceContext()); })()), "html", null, true);
                echo "</span>
                        </div>
                    </div>

                    <!-- Strecke-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"strecke\">STRECKE (km):</label>
                        <div class=\"col-md-6\">
                            <input id=\"email\" name=\"strecke\" type=\"text\" placeholder=\"nn / nn.n\" class=\"form-control\" value=\"";
                // line 172
                echo twig_escape_filter($this->env, (isset($context["strecke"]) || array_key_exists("strecke", $context) ? $context["strecke"] : (function () { throw new Twig_Error_Runtime('Variable "strecke" does not exist.', 172, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 173
                echo twig_escape_filter($this->env, (isset($context["error_strecke"]) || array_key_exists("error_strecke", $context) ? $context["error_strecke"] : (function () { throw new Twig_Error_Runtime('Variable "error_strecke" does not exist.', 173, $this->getSourceContext()); })()), "html", null, true);
                echo "</span>
                        </div>
                    </div>

                    <!-- Zeit-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"zeit\">ZEIT:</label>
                        <div class=\"col-md-6\">
                            <input id=\"email\" name=\"zeit\" type=\"text\" placeholder=\"hh:mm:ss\" class=\"form-control\" value=\"";
                // line 181
                echo twig_escape_filter($this->env, (isset($context["zeit"]) || array_key_exists("zeit", $context) ? $context["zeit"] : (function () { throw new Twig_Error_Runtime('Variable "zeit" does not exist.', 181, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 182
                echo twig_escape_filter($this->env, (isset($context["error_zeit"]) || array_key_exists("error_zeit", $context) ? $context["error_zeit"] : (function () { throw new Twig_Error_Runtime('Variable "error_zeit" does not exist.', 182, $this->getSourceContext()); })()), "html", null, true);
                echo "</span>
                        </div>
                    </div>


                    <!-- Action -->
                    <div class=\"form-group\">
                        <div class=\"col-md-9 text-right\">
                                <input type=\"submit\" class=\"btn btn-primary btn-lg\" name=\"addForm\" value=\"ADD\"></input>
                        </div>
                    </div>

                </fieldset>
            </form>

        ";
            }
            // line 198
            echo "
    ";
        }
        // line 200
        echo "



";
        
        $__internal_4f82b4f5196cc0d2aa90d025c07110e0ae5e376ba75de2fa0dd851552a61385e->leave($__internal_4f82b4f5196cc0d2aa90d025c07110e0ae5e376ba75de2fa0dd851552a61385e_prof);

        
        $__internal_f677822da1bdd89e28a5f7e4549a8cbe618ffe44f706e191bb3c3dbbf38e76f8->leave($__internal_f677822da1bdd89e28a5f7e4549a8cbe618ffe44f706e191bb3c3dbbf38e76f8_prof);

    }

    public function getTemplateName()
    {
        return "profile.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 200,  370 => 198,  351 => 182,  347 => 181,  336 => 173,  332 => 172,  321 => 164,  317 => 163,  307 => 156,  300 => 151,  298 => 150,  293 => 147,  287 => 143,  279 => 140,  267 => 131,  263 => 130,  260 => 129,  258 => 128,  256 => 127,  252 => 125,  248 => 123,  242 => 121,  240 => 120,  235 => 117,  231 => 115,  225 => 113,  223 => 112,  216 => 108,  209 => 104,  204 => 101,  200 => 100,  195 => 97,  189 => 93,  187 => 92,  161 => 69,  157 => 67,  153 => 65,  147 => 63,  145 => 62,  139 => 59,  134 => 56,  128 => 55,  125 => 54,  121 => 53,  118 => 52,  116 => 51,  113 => 50,  98 => 37,  94 => 35,  90 => 33,  88 => 32,  80 => 26,  78 => 25,  75 => 24,  67 => 18,  65 => 17,  59 => 14,  55 => 12,  52 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

  {#

  Um Vozer zu benutzen, bitte zeile 11 ausklammern und dazu noch die zeilen 127-128 miteinander tauschen

  #}

  {#    {% set can_edit = is_granted('edit', user_name) %}            #}

    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Profil von: {{ profileName }} </h1>
    </div>

    {% if profile_error == \"no_found\" %}

        <div class=\"noLinesFound\">
            Profil nicht gefunden. <br>
        </div>

    {% else %}

        {% if (lines|length) == 0 %}

            <div style=\"width: 100%; height: 50px; color: blue; text-align: center;\">

                Anzahl der Lauftage: 0 <br>

                Gesamttage seit dem ersten Lauftag bis heute:
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    0
                {% else %}
                    <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                {% endif %}
                <br>

                Gesamte bisher gelaufene Strecke: 0

            </div>

            <div class=\"noLinesFound\">
                Die Liste ist noch leer. <br>
            </div>



        {% else %}

            {% set gesamtStreckee=0 %}

            {% for i in lines %}
                {% set gesamtStreckee=gesamtStreckee+i.getStrecke() %}
            {% endfor %}

            <div style=\"width: 100%; height: 50px; color: blue; text-align: center;\">

                Anzahl der Lauftage: {{ anzahl }} <br>

                Gesamttage seit dem ersten Lauftag bis heute:
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {{ ( (now | date('U')) - (first.getDay() | date('U')) )/86400 }}
                {% else %}
                    <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                {% endif %}
                <br>

                Gesamte bisher gelaufene Strecke: {{ gesamtStreckee }}

            </div>



            <div class=\"trackerLine\">
                <div class=\"trackerDatum\">
                    <span style=\"text-transform: uppercase; font-weight: bold;\">Datum</span>
                </div>

                <div class=\"trackerStrecke\">
                    <span style=\"text-transform: uppercase; font-weight: bold;\">Gelaufene Strecke</span>
                </div>

                <div class=\"trackerZeit\">
                    <span style=\"text-transform: uppercase; font-weight: bold;\">Gelaufene Zeit</span>
                </div>

                <div class=\"trackerSpeed\">
                    <span style=\"text-transform: uppercase; font-weight: bold;\">geschwindigkeit</span>
                </div>

                {% if is_granted('IS_AUTHENTICATED_FULLY') and profileName == app.user.username %}
                    <div class=\"trackerRemove\">
                        <span style=\"text-transform: uppercase; font-weight: bold;\">eintrag loschen</span>
                    </div>
                {% endif %}

            </div>

            {% for i in lines %}

                <div class=\"trackerLine\">
                    <div class=\"trackerDatum\">
                        {{ i.getDay() }}
                    </div>

                    <div class=\"trackerStrecke\">
                        {{ i.getStrecke() }} km
                    </div>

                    <div class=\"trackerZeit\">
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            {{ i.getZeit() | round(2, 'floor') }} min
                        {% else %}
                            <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                        {% endif %}
                    </div>

                    <div class=\"trackerSpeed\">
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            {{ i.getSpeed() | round(1, 'floor') }} km/h
                        {% else %}
                            <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                        {% endif %}
                    </div>

                    {% if is_granted('IS_AUTHENTICATED_FULLY') and profileName == app.user.username %}
             {#       {% if can_edit %}           mit der obigen Zeile wechseln, um custum-voter zu benutzen  #}
                        <div class=\"trackerRemove\">
                            <form method=\"post\" action=\"{{ path('remove_newData', { name : app.user.username }) }}\">
                                <input type=\"hidden\" value=\"{{ i.getId() }}\" name=\"id_toRemove\">


                                        <input type=\"submit\" value=\"löschen\" name=\"removeForm\">


                            </form>
                        </div>
                    {% endif %}

                </div>
            {% endfor %}



        {% endif %}



        {% if is_granted('IS_AUTHENTICATED_FULLY') and profileName == app.user.username %}

            <div class=\"page-header\">

            </div>

            <form class=\"form-horizontal\" action=\"{{ path('add_newData', { name : app.user.username }) }}\" method=\"post\">
                <fieldset>

                    <!-- Datum-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"datum\">DATUM:</label>
                        <div class=\"col-md-6\">
                            <input id=\"name\" name=\"datum\" type=\"date\" placeholder=\"JJJJ-MM-TT\" class=\"form-control\" value=\"{{ datum }}\">
                            <span style=\"color: red;\">{{ error_datum }}</span>
                        </div>
                    </div>

                    <!-- Strecke-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"strecke\">STRECKE (km):</label>
                        <div class=\"col-md-6\">
                            <input id=\"email\" name=\"strecke\" type=\"text\" placeholder=\"nn / nn.n\" class=\"form-control\" value=\"{{ strecke }}\">
                            <span style=\"color: red;\">{{ error_strecke }}</span>
                        </div>
                    </div>

                    <!-- Zeit-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"zeit\">ZEIT:</label>
                        <div class=\"col-md-6\">
                            <input id=\"email\" name=\"zeit\" type=\"text\" placeholder=\"hh:mm:ss\" class=\"form-control\" value=\"{{ zeit }}\">
                            <span style=\"color: red;\">{{ error_zeit }}</span>
                        </div>
                    </div>


                    <!-- Action -->
                    <div class=\"form-group\">
                        <div class=\"col-md-9 text-right\">
                                <input type=\"submit\" class=\"btn btn-primary btn-lg\" name=\"addForm\" value=\"ADD\"></input>
                        </div>
                    </div>

                </fieldset>
            </form>

        {% endif %}

    {% endif %}




{% endblock %}", "profile.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/templates/profile.php.twig");
    }
}

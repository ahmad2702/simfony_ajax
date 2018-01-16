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
        $__internal_989db6687bba98267d25c160216c8bba1bf86d90578fe7995ebf0020b77fbc23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989db6687bba98267d25c160216c8bba1bf86d90578fe7995ebf0020b77fbc23->enter($__internal_989db6687bba98267d25c160216c8bba1bf86d90578fe7995ebf0020b77fbc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $__internal_247e74ded80438a5699509dd693441700c73ef28a193156af2454ab81b6b34d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247e74ded80438a5699509dd693441700c73ef28a193156af2454ab81b6b34d6->enter($__internal_247e74ded80438a5699509dd693441700c73ef28a193156af2454ab81b6b34d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profile.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_989db6687bba98267d25c160216c8bba1bf86d90578fe7995ebf0020b77fbc23->leave($__internal_989db6687bba98267d25c160216c8bba1bf86d90578fe7995ebf0020b77fbc23_prof);

        
        $__internal_247e74ded80438a5699509dd693441700c73ef28a193156af2454ab81b6b34d6->leave($__internal_247e74ded80438a5699509dd693441700c73ef28a193156af2454ab81b6b34d6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_22b767d8fb55ed0e875aadb39b132716e863fdf833d727c367bbccb69122258d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b767d8fb55ed0e875aadb39b132716e863fdf833d727c367bbccb69122258d->enter($__internal_22b767d8fb55ed0e875aadb39b132716e863fdf833d727c367bbccb69122258d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2d00873b2c8df3657a0783cf46ab5e432c050f0bcffcb3f7bdcac4e163bf49e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d00873b2c8df3657a0783cf46ab5e432c050f0bcffcb3f7bdcac4e163bf49e2->enter($__internal_2d00873b2c8df3657a0783cf46ab5e432c050f0bcffcb3f7bdcac4e163bf49e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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


            <a href=\"/export/";
                // line 74
                echo twig_escape_filter($this->env, (isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 74, $this->getSourceContext()); })()), "html", null, true);
                echo "/diary.json\">Export as JSON</a>
            <br>
            <a href=\"/export/";
                // line 76
                echo twig_escape_filter($this->env, (isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
                echo "/diary.csv\">Export as CSV</a>


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
                // line 96
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 96, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 96, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                    // line 97
                    echo "                    <div class=\"trackerRemove\">
                        <span style=\"text-transform: uppercase; font-weight: bold;\">eintrag loschen</span>
                    </div>
                ";
                }
                // line 101
                echo "
            </div>

            ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 104, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 105
                    echo "
                <div class=\"trackerLine\">
                    <div class=\"trackerDatum\">
                        ";
                    // line 108
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getDay", array(), "method"), "html", null, true);
                    echo "
                    </div>

                    <div class=\"trackerStrecke\">
                        ";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"), "html", null, true);
                    echo " km
                    </div>

                    <div class=\"trackerZeit\">
                        ";
                    // line 116
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 117
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getZeit", array(), "method"), 2, "floor"), "html", null, true);
                        echo " min
                        ";
                    } else {
                        // line 119
                        echo "                            <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                        ";
                    }
                    // line 121
                    echo "                    </div>

                    <div class=\"trackerSpeed\">
                        ";
                    // line 124
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 125
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getSpeed", array(), "method"), 1, "floor"), "html", null, true);
                        echo " km/h
                        ";
                    } else {
                        // line 127
                        echo "                            <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                        ";
                    }
                    // line 129
                    echo "                    </div>

                    ";
                    // line 131
                    if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 131, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 131, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                        // line 132
                        echo "             ";
                        // line 133
                        echo "                        <div class=\"trackerRemove\">
                            <form method=\"post\" action=\"";
                        // line 134
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remove_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 134, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
                        echo "\">
                                <input type=\"hidden\" value=\"";
                        // line 135
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getId", array(), "method"), "html", null, true);
                        echo "\" name=\"id_toRemove\">


                                        <input type=\"submit\" value=\"löschen\" name=\"removeForm\">


                            </form>
                        </div>
                    ";
                    }
                    // line 144
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                echo "


        ";
            }
            // line 151
            echo "


        ";
            // line 154
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && ((isset($context["profileName"]) || array_key_exists("profileName", $context) ? $context["profileName"] : (function () { throw new Twig_Error_Runtime('Variable "profileName" does not exist.', 154, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 154, $this->getSourceContext()); })()), "user", array()), "username", array())))) {
                // line 155
                echo "
            <div class=\"page-header\">

            </div>

            <form class=\"form-horizontal\" action=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 160, $this->getSourceContext()); })()), "user", array()), "username", array()))), "html", null, true);
                echo "\" method=\"post\">
                <fieldset>

                    <!-- Datum-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"datum\">DATUM:</label>
                        <div class=\"col-md-6\">
                            <input id=\"name\" name=\"datum\" type=\"date\" placeholder=\"JJJJ-MM-TT\" class=\"form-control\" value=\"";
                // line 167
                echo twig_escape_filter($this->env, (isset($context["datum"]) || array_key_exists("datum", $context) ? $context["datum"] : (function () { throw new Twig_Error_Runtime('Variable "datum" does not exist.', 167, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 168
                echo twig_escape_filter($this->env, (isset($context["error_datum"]) || array_key_exists("error_datum", $context) ? $context["error_datum"] : (function () { throw new Twig_Error_Runtime('Variable "error_datum" does not exist.', 168, $this->getSourceContext()); })()), "html", null, true);
                echo "</span>
                        </div>
                    </div>

                    <!-- Strecke-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"strecke\">STRECKE (km):</label>
                        <div class=\"col-md-6\">
                            <input id=\"email\" name=\"strecke\" type=\"text\" placeholder=\"nn / nn.n\" class=\"form-control\" value=\"";
                // line 176
                echo twig_escape_filter($this->env, (isset($context["strecke"]) || array_key_exists("strecke", $context) ? $context["strecke"] : (function () { throw new Twig_Error_Runtime('Variable "strecke" does not exist.', 176, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 177
                echo twig_escape_filter($this->env, (isset($context["error_strecke"]) || array_key_exists("error_strecke", $context) ? $context["error_strecke"] : (function () { throw new Twig_Error_Runtime('Variable "error_strecke" does not exist.', 177, $this->getSourceContext()); })()), "html", null, true);
                echo "</span>
                        </div>
                    </div>

                    <!-- Zeit-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"zeit\">ZEIT:</label>
                        <div class=\"col-md-6\">
                            <input id=\"email\" name=\"zeit\" type=\"text\" placeholder=\"hh:mm:ss\" class=\"form-control\" value=\"";
                // line 185
                echo twig_escape_filter($this->env, (isset($context["zeit"]) || array_key_exists("zeit", $context) ? $context["zeit"] : (function () { throw new Twig_Error_Runtime('Variable "zeit" does not exist.', 185, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 186
                echo twig_escape_filter($this->env, (isset($context["error_zeit"]) || array_key_exists("error_zeit", $context) ? $context["error_zeit"] : (function () { throw new Twig_Error_Runtime('Variable "error_zeit" does not exist.', 186, $this->getSourceContext()); })()), "html", null, true);
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
            // line 202
            echo "
    ";
        }
        // line 204
        echo "



";
        
        $__internal_2d00873b2c8df3657a0783cf46ab5e432c050f0bcffcb3f7bdcac4e163bf49e2->leave($__internal_2d00873b2c8df3657a0783cf46ab5e432c050f0bcffcb3f7bdcac4e163bf49e2_prof);

        
        $__internal_22b767d8fb55ed0e875aadb39b132716e863fdf833d727c367bbccb69122258d->leave($__internal_22b767d8fb55ed0e875aadb39b132716e863fdf833d727c367bbccb69122258d_prof);

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
        return array (  384 => 204,  380 => 202,  361 => 186,  357 => 185,  346 => 177,  342 => 176,  331 => 168,  327 => 167,  317 => 160,  310 => 155,  308 => 154,  303 => 151,  297 => 147,  289 => 144,  277 => 135,  273 => 134,  270 => 133,  268 => 132,  266 => 131,  262 => 129,  258 => 127,  252 => 125,  250 => 124,  245 => 121,  241 => 119,  235 => 117,  233 => 116,  226 => 112,  219 => 108,  214 => 105,  210 => 104,  205 => 101,  199 => 97,  197 => 96,  174 => 76,  169 => 74,  161 => 69,  157 => 67,  153 => 65,  147 => 63,  145 => 62,  139 => 59,  134 => 56,  128 => 55,  125 => 54,  121 => 53,  118 => 52,  116 => 51,  113 => 50,  98 => 37,  94 => 35,  90 => 33,  88 => 32,  80 => 26,  78 => 25,  75 => 24,  67 => 18,  65 => 17,  59 => 14,  55 => 12,  52 => 10,  49 => 4,  40 => 3,  11 => 1,);
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


            <a href=\"/export/{{ profileName }}/diary.json\">Export as JSON</a>
            <br>
            <a href=\"/export/{{ profileName }}/diary.csv\">Export as CSV</a>


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

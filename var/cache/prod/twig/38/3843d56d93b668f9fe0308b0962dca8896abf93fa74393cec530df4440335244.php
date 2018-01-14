<?php

/* profile.php.twig */
class __TwigTemplate_0b87eb45bf34c11a8633bf5d35a92854365e2592e66f124c646def63e9dfb0f3 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, ($context["profileName"] ?? null), "html", null, true);
        echo " </h1>
    </div>

    ";
        // line 17
        if ((($context["profile_error"] ?? null) == "no_found")) {
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
            if ((twig_length_filter($this->env, ($context["lines"] ?? null)) == 0)) {
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
                $context['_seq'] = twig_ensure_traversable(($context["lines"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 54
                    echo "                ";
                    $context["gesamtStreckee"] = (($context["gesamtStreckee"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"));
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
                echo twig_escape_filter($this->env, ($context["anzahl"] ?? null), "html", null, true);
                echo " <br>

                Gesamttage seit dem ersten Lauftag bis heute:
                ";
                // line 62
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 63
                    echo "                    ";
                    echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, ($context["now"] ?? null), "U") - twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["first"] ?? null), "getDay", array(), "method"), "U")) / 86400), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["gesamtStreckee"] ?? null), "html", null, true);
                echo "

            </div>


            <a href=\"/export/";
                // line 74
                echo twig_escape_filter($this->env, ($context["profileName"] ?? null), "html", null, true);
                echo "/diary.json\">Export as JSON</a>


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
                // line 94
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && (($context["profileName"] ?? null) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array())))) {
                    // line 95
                    echo "                    <div class=\"trackerRemove\">
                        <span style=\"text-transform: uppercase; font-weight: bold;\">eintrag loschen</span>
                    </div>
                ";
                }
                // line 99
                echo "
            </div>

            ";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["lines"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 103
                    echo "
                <div class=\"trackerLine\">
                    <div class=\"trackerDatum\">
                        ";
                    // line 106
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getDay", array(), "method"), "html", null, true);
                    echo "
                    </div>

                    <div class=\"trackerStrecke\">
                        ";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getStrecke", array(), "method"), "html", null, true);
                    echo " km
                    </div>

                    <div class=\"trackerZeit\">
                        ";
                    // line 114
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 115
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getZeit", array(), "method"), 2, "floor"), "html", null, true);
                        echo " min
                        ";
                    } else {
                        // line 117
                        echo "                            <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                        ";
                    }
                    // line 119
                    echo "                    </div>

                    <div class=\"trackerSpeed\">
                        ";
                    // line 122
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 123
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getSpeed", array(), "method"), 1, "floor"), "html", null, true);
                        echo " km/h
                        ";
                    } else {
                        // line 125
                        echo "                            <span style=\"color: gray;\">(nur fur eingeloggte User)</span>
                        ";
                    }
                    // line 127
                    echo "                    </div>

                    ";
                    // line 129
                    if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && (($context["profileName"] ?? null) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array())))) {
                        // line 130
                        echo "             ";
                        // line 131
                        echo "                        <div class=\"trackerRemove\">
                            <form method=\"post\" action=\"";
                        // line 132
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("remove_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array()))), "html", null, true);
                        echo "\">
                                <input type=\"hidden\" value=\"";
                        // line 133
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "getId", array(), "method"), "html", null, true);
                        echo "\" name=\"id_toRemove\">


                                        <input type=\"submit\" value=\"löschen\" name=\"removeForm\">


                            </form>
                        </div>
                    ";
                    }
                    // line 142
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "


        ";
            }
            // line 149
            echo "


        ";
            // line 152
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") && (($context["profileName"] ?? null) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array())))) {
                // line 153
                echo "
            <div class=\"page-header\">

            </div>

            <form class=\"form-horizontal\" action=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_newData", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array()))), "html", null, true);
                echo "\" method=\"post\">
                <fieldset>

                    <!-- Datum-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"datum\">DATUM:</label>
                        <div class=\"col-md-6\">
                            <input id=\"name\" name=\"datum\" type=\"date\" placeholder=\"JJJJ-MM-TT\" class=\"form-control\" value=\"";
                // line 165
                echo twig_escape_filter($this->env, ($context["datum"] ?? null), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 166
                echo twig_escape_filter($this->env, ($context["error_datum"] ?? null), "html", null, true);
                echo "</span>
                        </div>
                    </div>

                    <!-- Strecke-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"strecke\">STRECKE (km):</label>
                        <div class=\"col-md-6\">
                            <input id=\"email\" name=\"strecke\" type=\"text\" placeholder=\"nn / nn.n\" class=\"form-control\" value=\"";
                // line 174
                echo twig_escape_filter($this->env, ($context["strecke"] ?? null), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 175
                echo twig_escape_filter($this->env, ($context["error_strecke"] ?? null), "html", null, true);
                echo "</span>
                        </div>
                    </div>

                    <!-- Zeit-->
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\" for=\"zeit\">ZEIT:</label>
                        <div class=\"col-md-6\">
                            <input id=\"email\" name=\"zeit\" type=\"text\" placeholder=\"hh:mm:ss\" class=\"form-control\" value=\"";
                // line 183
                echo twig_escape_filter($this->env, ($context["zeit"] ?? null), "html", null, true);
                echo "\">
                            <span style=\"color: red;\">";
                // line 184
                echo twig_escape_filter($this->env, ($context["error_zeit"] ?? null), "html", null, true);
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
            // line 200
            echo "
    ";
        }
        // line 202
        echo "



";
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
        return array (  361 => 202,  357 => 200,  338 => 184,  334 => 183,  323 => 175,  319 => 174,  308 => 166,  304 => 165,  294 => 158,  287 => 153,  285 => 152,  280 => 149,  274 => 145,  266 => 142,  254 => 133,  250 => 132,  247 => 131,  245 => 130,  243 => 129,  239 => 127,  235 => 125,  229 => 123,  227 => 122,  222 => 119,  218 => 117,  212 => 115,  210 => 114,  203 => 110,  196 => 106,  191 => 103,  187 => 102,  182 => 99,  176 => 95,  174 => 94,  151 => 74,  143 => 69,  139 => 67,  135 => 65,  129 => 63,  127 => 62,  121 => 59,  116 => 56,  110 => 55,  107 => 54,  103 => 53,  100 => 52,  98 => 51,  95 => 50,  80 => 37,  76 => 35,  72 => 33,  70 => 32,  62 => 26,  60 => 25,  57 => 24,  49 => 18,  47 => 17,  41 => 14,  37 => 12,  34 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profile.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/templates/profile.php.twig");
    }
}

<?php

/* gesamt.php.twig */
class __TwigTemplate_278b1d1bfd3e623f4e1583fa46c39d8ff6c79112ac866ecb626f3b53d254b7e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "gesamt.php.twig", 1);
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
        $__internal_e1c1450ba9a4a086445b794e547d229c20c87e228010ed1a2b6e1dd733ffabba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c1450ba9a4a086445b794e547d229c20c87e228010ed1a2b6e1dd733ffabba->enter($__internal_e1c1450ba9a4a086445b794e547d229c20c87e228010ed1a2b6e1dd733ffabba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $__internal_f96b95757b89c579bc7e9b77a7b58591d06b6a3fb0071e07bb85bf26b5e4745d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96b95757b89c579bc7e9b77a7b58591d06b6a3fb0071e07bb85bf26b5e4745d->enter($__internal_f96b95757b89c579bc7e9b77a7b58591d06b6a3fb0071e07bb85bf26b5e4745d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1c1450ba9a4a086445b794e547d229c20c87e228010ed1a2b6e1dd733ffabba->leave($__internal_e1c1450ba9a4a086445b794e547d229c20c87e228010ed1a2b6e1dd733ffabba_prof);

        
        $__internal_f96b95757b89c579bc7e9b77a7b58591d06b6a3fb0071e07bb85bf26b5e4745d->leave($__internal_f96b95757b89c579bc7e9b77a7b58591d06b6a3fb0071e07bb85bf26b5e4745d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f07d3e1c7551124f69dec9843f5fff54db3bf3352f67c026cdf85cc24c27164a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f07d3e1c7551124f69dec9843f5fff54db3bf3352f67c026cdf85cc24c27164a->enter($__internal_f07d3e1c7551124f69dec9843f5fff54db3bf3352f67c026cdf85cc24c27164a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fb35d7682917f4a57cf91978eb5a13eb428a9b706e718848e191b37d5ed21b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb35d7682917f4a57cf91978eb5a13eb428a9b706e718848e191b37d5ed21b19->enter($__internal_fb35d7682917f4a57cf91978eb5a13eb428a9b706e718848e191b37d5ed21b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Laeuferuebersicht</h1>
    </div>

    ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 9, $this->getSourceContext()); })())) == 0)) {
            // line 10
            echo "
        <div class=\"noLinesFound\">
            Datenbank ist noch leer. <br>
        </div>

    ";
        } else {
            // line 16
            echo "


        <div class=\"trackerLine\">

            <div class=\"trackerDatum1\">
                <br>
                    <span style=\"text-transform: uppercase; font-weight: bold;\">username</span>
            </div>

            <div class=\"trackerStrecke\">
                <span style=\"text-transform: uppercase; font-weight: bold;\">Gesamttage bis heute</span>
            </div>

            <div class=\"trackerZeit\">
                <span style=\"text-transform: uppercase; font-weight: bold;\">Gesamte Strecke</span>
            </div>

        </div>

        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new Twig_Error_Runtime('Variable "lines" does not exist.', 36, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 37
                echo "
            <div class=\"trackerLine\">

                <div class=\"trackerDatum1\">
                    <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array()))), "html", null, true);
                echo "\">
                        <br>
                        ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array()), "html", null, true);
                echo "
                    </a>
                </div>

                <div class=\"trackerStrecke\">

                    ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "totalDates", array()), "html", null, true);
                echo "

                    tage
                </div>

                <div class=\"trackerZeit\">

                    ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "distance", array()), "html", null, true);
                echo "

                    km
                </div>

            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "


    ";
        }
        // line 68
        echo "

";
        
        $__internal_fb35d7682917f4a57cf91978eb5a13eb428a9b706e718848e191b37d5ed21b19->leave($__internal_fb35d7682917f4a57cf91978eb5a13eb428a9b706e718848e191b37d5ed21b19_prof);

        
        $__internal_f07d3e1c7551124f69dec9843f5fff54db3bf3352f67c026cdf85cc24c27164a->leave($__internal_f07d3e1c7551124f69dec9843f5fff54db3bf3352f67c026cdf85cc24c27164a_prof);

    }

    public function getTemplateName()
    {
        return "gesamt.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 68,  136 => 64,  122 => 56,  112 => 49,  103 => 43,  98 => 41,  92 => 37,  88 => 36,  66 => 16,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Laeuferuebersicht</h1>
    </div>

    {% if (lines|length) == 0 %}

        <div class=\"noLinesFound\">
            Datenbank ist noch leer. <br>
        </div>

    {% else %}



        <div class=\"trackerLine\">

            <div class=\"trackerDatum1\">
                <br>
                    <span style=\"text-transform: uppercase; font-weight: bold;\">username</span>
            </div>

            <div class=\"trackerStrecke\">
                <span style=\"text-transform: uppercase; font-weight: bold;\">Gesamttage bis heute</span>
            </div>

            <div class=\"trackerZeit\">
                <span style=\"text-transform: uppercase; font-weight: bold;\">Gesamte Strecke</span>
            </div>

        </div>

        {% for user in lines %}

            <div class=\"trackerLine\">

                <div class=\"trackerDatum1\">
                    <a href=\"{{ path('profile', { name : user.user }) }}\">
                        <br>
                        {{ user.user }}
                    </a>
                </div>

                <div class=\"trackerStrecke\">

                    {{ user.totalDates }}

                    tage
                </div>

                <div class=\"trackerZeit\">

                    {{ user.distance }}

                    km
                </div>

            </div>

        {% endfor %}



    {% endif %}


{% endblock %}", "gesamt.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/templates/gesamt.php.twig");
    }
}

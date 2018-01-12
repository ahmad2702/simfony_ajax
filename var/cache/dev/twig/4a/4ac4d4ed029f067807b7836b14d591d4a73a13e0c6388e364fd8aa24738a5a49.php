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
        $__internal_6c82c0672117d22d75ecdfc008091b54e064c672f836576af23e54da635580c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c82c0672117d22d75ecdfc008091b54e064c672f836576af23e54da635580c4->enter($__internal_6c82c0672117d22d75ecdfc008091b54e064c672f836576af23e54da635580c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $__internal_e92cd292d092e470b38dd107e462c69cd844340979fd82dac5fd0a2e66563844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92cd292d092e470b38dd107e462c69cd844340979fd82dac5fd0a2e66563844->enter($__internal_e92cd292d092e470b38dd107e462c69cd844340979fd82dac5fd0a2e66563844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesamt.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c82c0672117d22d75ecdfc008091b54e064c672f836576af23e54da635580c4->leave($__internal_6c82c0672117d22d75ecdfc008091b54e064c672f836576af23e54da635580c4_prof);

        
        $__internal_e92cd292d092e470b38dd107e462c69cd844340979fd82dac5fd0a2e66563844->leave($__internal_e92cd292d092e470b38dd107e462c69cd844340979fd82dac5fd0a2e66563844_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d2f07d99c8444bf50df1fb20dcfe70fcee6276cb030a53b2bd1abd1218df713c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f07d99c8444bf50df1fb20dcfe70fcee6276cb030a53b2bd1abd1218df713c->enter($__internal_d2f07d99c8444bf50df1fb20dcfe70fcee6276cb030a53b2bd1abd1218df713c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_072667c0cb5e9beb4734718b9508c315d33fa7f75d334ca2b8818c47a3c156a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072667c0cb5e9beb4734718b9508c315d33fa7f75d334ca2b8818c47a3c156a6->enter($__internal_072667c0cb5e9beb4734718b9508c315d33fa7f75d334ca2b8818c47a3c156a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_data");
            echo "\">Export as JSON</a>

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
        
        $__internal_072667c0cb5e9beb4734718b9508c315d33fa7f75d334ca2b8818c47a3c156a6->leave($__internal_072667c0cb5e9beb4734718b9508c315d33fa7f75d334ca2b8818c47a3c156a6_prof);

        
        $__internal_d2f07d99c8444bf50df1fb20dcfe70fcee6276cb030a53b2bd1abd1218df713c->leave($__internal_d2f07d99c8444bf50df1fb20dcfe70fcee6276cb030a53b2bd1abd1218df713c_prof);

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
        return array (  145 => 68,  139 => 64,  125 => 56,  115 => 49,  106 => 43,  101 => 41,  95 => 37,  91 => 36,  69 => 17,  66 => 16,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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

        <a href=\"{{ path('all_data') }}\">Export as JSON</a>

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

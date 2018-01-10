<?php

/* vorschlag.php.twig */
class __TwigTemplate_3aa1b72a2ff76649b967f34fc41214584def7e034ed4c03bcb915d72c7ca14fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "vorschlag.php.twig", 1);
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
        $__internal_6e38b1da743228911ffe9da3974b5f719bac0424fa1b8640741a68ce67f9c2f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e38b1da743228911ffe9da3974b5f719bac0424fa1b8640741a68ce67f9c2f1->enter($__internal_6e38b1da743228911ffe9da3974b5f719bac0424fa1b8640741a68ce67f9c2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vorschlag.php.twig"));

        $__internal_1c115067584bde21d1b6d6145d14447ee376af20734518a97e4302a4c9c3ddeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c115067584bde21d1b6d6145d14447ee376af20734518a97e4302a4c9c3ddeb->enter($__internal_1c115067584bde21d1b6d6145d14447ee376af20734518a97e4302a4c9c3ddeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vorschlag.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e38b1da743228911ffe9da3974b5f719bac0424fa1b8640741a68ce67f9c2f1->leave($__internal_6e38b1da743228911ffe9da3974b5f719bac0424fa1b8640741a68ce67f9c2f1_prof);

        
        $__internal_1c115067584bde21d1b6d6145d14447ee376af20734518a97e4302a4c9c3ddeb->leave($__internal_1c115067584bde21d1b6d6145d14447ee376af20734518a97e4302a4c9c3ddeb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6fa52a55fb28d8b3bdae7f365204dd11883100e3a9ee0aca52c90a2ac3fb2333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa52a55fb28d8b3bdae7f365204dd11883100e3a9ee0aca52c90a2ac3fb2333->enter($__internal_6fa52a55fb28d8b3bdae7f365204dd11883100e3a9ee0aca52c90a2ac3fb2333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4b0233348b54b47c250be7f940e32e9209980b944b457244cab6d242c6c59bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0233348b54b47c250be7f940e32e9209980b944b457244cab6d242c6c59bf8->enter($__internal_4b0233348b54b47c250be7f940e32e9209980b944b457244cab6d242c6c59bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        // line 10
        echo "
    ";
        // line 11
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->getSourceContext()); })())) {
            // line 12
            echo "
    <div class=\"noLinesFound\">
        ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
            echo " <br>
    </div>

    ";
        }
        // line 18
        echo "




    ";
        // line 23
        if ((isset($context["vorschlag"]) || array_key_exists("vorschlag", $context) ? $context["vorschlag"] : (function () { throw new Twig_Error_Runtime('Variable "vorschlag" does not exist.', 23, $this->getSourceContext()); })())) {
            // line 24
            echo "
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vorschlag"]) || array_key_exists("vorschlag", $context) ? $context["vorschlag"] : (function () { throw new Twig_Error_Runtime('Variable "vorschlag" does not exist.', 25, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 26
                echo "
            <div class=\"trackerLine\">
                <span>
                    <a id=\"userButton\" href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array()), "html", null, true);
                echo "</a>
                </span>
            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
    ";
        }
        // line 36
        echo "












";
        
        $__internal_4b0233348b54b47c250be7f940e32e9209980b944b457244cab6d242c6c59bf8->leave($__internal_4b0233348b54b47c250be7f940e32e9209980b944b457244cab6d242c6c59bf8_prof);

        
        $__internal_6fa52a55fb28d8b3bdae7f365204dd11883100e3a9ee0aca52c90a2ac3fb2333->leave($__internal_6fa52a55fb28d8b3bdae7f365204dd11883100e3a9ee0aca52c90a2ac3fb2333_prof);

    }

    public function getTemplateName()
    {
        return "vorschlag.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  102 => 34,  89 => 29,  84 => 26,  80 => 25,  77 => 24,  75 => 23,  68 => 18,  61 => 14,  57 => 12,  55 => 11,  52 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

{#
    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Suchergebnis</h1>
    </div>
#}

    {% if error %}

    <div class=\"noLinesFound\">
        {{ error }} <br>
    </div>

    {% endif %}





    {% if vorschlag %}

        {% for user in vorschlag %}

            <div class=\"trackerLine\">
                <span>
                    <a id=\"userButton\" href=\"{{ path('profile', { name : user.user }) }}\">{{ user.user }}</a>
                </span>
            </div>

        {% endfor %}

    {% endif %}













{% endblock %}", "vorschlag.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/templates/vorschlag.php.twig");
    }
}

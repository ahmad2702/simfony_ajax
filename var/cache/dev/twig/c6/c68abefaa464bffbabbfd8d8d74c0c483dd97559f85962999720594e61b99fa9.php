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
        $__internal_c8b161242a599aaad570ac65603194987473cb7a3198c086c47ac4d2bcb242a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b161242a599aaad570ac65603194987473cb7a3198c086c47ac4d2bcb242a4->enter($__internal_c8b161242a599aaad570ac65603194987473cb7a3198c086c47ac4d2bcb242a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vorschlag.php.twig"));

        $__internal_8bd8d8f081fe8bb64023df8bcaf843ac125aa03ea09487f616104336bdb0bda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd8d8f081fe8bb64023df8bcaf843ac125aa03ea09487f616104336bdb0bda6->enter($__internal_8bd8d8f081fe8bb64023df8bcaf843ac125aa03ea09487f616104336bdb0bda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vorschlag.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8b161242a599aaad570ac65603194987473cb7a3198c086c47ac4d2bcb242a4->leave($__internal_c8b161242a599aaad570ac65603194987473cb7a3198c086c47ac4d2bcb242a4_prof);

        
        $__internal_8bd8d8f081fe8bb64023df8bcaf843ac125aa03ea09487f616104336bdb0bda6->leave($__internal_8bd8d8f081fe8bb64023df8bcaf843ac125aa03ea09487f616104336bdb0bda6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d303706e9cbd3550986df54c0d26c0571e9d16a8d850fa7b4f4de8483ca909b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d303706e9cbd3550986df54c0d26c0571e9d16a8d850fa7b4f4de8483ca909b4->enter($__internal_d303706e9cbd3550986df54c0d26c0571e9d16a8d850fa7b4f4de8483ca909b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cb00b016f721a14552f46bb5b68e8e2f967c7f2c9b76d16c77c6559dacf02ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb00b016f721a14552f46bb5b68e8e2f967c7f2c9b76d16c77c6559dacf02ef8->enter($__internal_cb00b016f721a14552f46bb5b68e8e2f967c7f2c9b76d16c77c6559dacf02ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_cb00b016f721a14552f46bb5b68e8e2f967c7f2c9b76d16c77c6559dacf02ef8->leave($__internal_cb00b016f721a14552f46bb5b68e8e2f967c7f2c9b76d16c77c6559dacf02ef8_prof);

        
        $__internal_d303706e9cbd3550986df54c0d26c0571e9d16a8d850fa7b4f4de8483ca909b4->leave($__internal_d303706e9cbd3550986df54c0d26c0571e9d16a8d850fa7b4f4de8483ca909b4_prof);

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

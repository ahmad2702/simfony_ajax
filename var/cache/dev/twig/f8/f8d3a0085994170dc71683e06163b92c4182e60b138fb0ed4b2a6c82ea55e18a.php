<?php

/* login.php.twig */
class __TwigTemplate_0129b75220a730fdec72895af35a22f91576d5efd0a1801a828fd1d2ce19ee9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "login.php.twig", 1);
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
        $__internal_ca053aad611b0a9cd6f398e1f68b2364c59c7dffce2fdf4720e9e18f98ac01cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca053aad611b0a9cd6f398e1f68b2364c59c7dffce2fdf4720e9e18f98ac01cb->enter($__internal_ca053aad611b0a9cd6f398e1f68b2364c59c7dffce2fdf4720e9e18f98ac01cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.php.twig"));

        $__internal_b37d6e1f00cdd0b848d1321b65e0627a6e02f05e8bc209726f5e141e862c0e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37d6e1f00cdd0b848d1321b65e0627a6e02f05e8bc209726f5e141e862c0e13->enter($__internal_b37d6e1f00cdd0b848d1321b65e0627a6e02f05e8bc209726f5e141e862c0e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca053aad611b0a9cd6f398e1f68b2364c59c7dffce2fdf4720e9e18f98ac01cb->leave($__internal_ca053aad611b0a9cd6f398e1f68b2364c59c7dffce2fdf4720e9e18f98ac01cb_prof);

        
        $__internal_b37d6e1f00cdd0b848d1321b65e0627a6e02f05e8bc209726f5e141e862c0e13->leave($__internal_b37d6e1f00cdd0b848d1321b65e0627a6e02f05e8bc209726f5e141e862c0e13_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5d1cba31704e83a9fab327db5a5e4410a6f952c85832700f7fc8c75445fe730c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1cba31704e83a9fab327db5a5e4410a6f952c85832700f7fc8c75445fe730c->enter($__internal_5d1cba31704e83a9fab327db5a5e4410a6f952c85832700f7fc8c75445fe730c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1a40b60c5e051417b092b8f577447a53b99c26c57026551f436ce1a8416df093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a40b60c5e051417b092b8f577447a53b99c26c57026551f436ce1a8416df093->enter($__internal_1a40b60c5e051417b092b8f577447a53b99c26c57026551f436ce1a8416df093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1 align='center'>Login:</h1>
    </div>

    ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 9, $this->getSourceContext()); })())) {
            // line 10
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_start');
        echo "

        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "_username", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "_password", array()), 'row');
        echo "

        <button type=\"submit\" class=\"btn btn-success\">LOGIN <span class=\"fa fa-lock\"></span> </button>

    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'form_end');
        echo "


";
        
        $__internal_1a40b60c5e051417b092b8f577447a53b99c26c57026551f436ce1a8416df093->leave($__internal_1a40b60c5e051417b092b8f577447a53b99c26c57026551f436ce1a8416df093_prof);

        
        $__internal_5d1cba31704e83a9fab327db5a5e4410a6f952c85832700f7fc8c75445fe730c->leave($__internal_5d1cba31704e83a9fab327db5a5e4410a6f952c85832700f7fc8c75445fe730c_prof);

    }

    public function getTemplateName()
    {
        return "login.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  76 => 16,  72 => 15,  67 => 13,  64 => 12,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

    <div class=\"page-header\">
        <h1 align='center'>Login:</h1>
    </div>

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {{ form_start(form) }}

        {{ form_row(form._username) }}
        {{ form_row(form._password) }}

        <button type=\"submit\" class=\"btn btn-success\">LOGIN <span class=\"fa fa-lock\"></span> </button>

    {{ form_end(form) }}


{% endblock %}", "login.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/templates/login.php.twig");
    }
}

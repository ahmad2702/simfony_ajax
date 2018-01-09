<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a0c993e54b5e68893ece89e787798ec04154e5df688e2abae2ee3e72750c1d26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8320b9c2ecacf79e840df876b29c2b3463f724f98af2f5c1977a5dc95ca7d570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8320b9c2ecacf79e840df876b29c2b3463f724f98af2f5c1977a5dc95ca7d570->enter($__internal_8320b9c2ecacf79e840df876b29c2b3463f724f98af2f5c1977a5dc95ca7d570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7e9fd266efec35ac9f9390a32c6395ad026f16a244e810efa189106cd83eec28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9fd266efec35ac9f9390a32c6395ad026f16a244e810efa189106cd83eec28->enter($__internal_7e9fd266efec35ac9f9390a32c6395ad026f16a244e810efa189106cd83eec28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8320b9c2ecacf79e840df876b29c2b3463f724f98af2f5c1977a5dc95ca7d570->leave($__internal_8320b9c2ecacf79e840df876b29c2b3463f724f98af2f5c1977a5dc95ca7d570_prof);

        
        $__internal_7e9fd266efec35ac9f9390a32c6395ad026f16a244e810efa189106cd83eec28->leave($__internal_7e9fd266efec35ac9f9390a32c6395ad026f16a244e810efa189106cd83eec28_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee844355c80c628112b36c73a2143abcebca624ebf52792af5db7e90bebf6973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee844355c80c628112b36c73a2143abcebca624ebf52792af5db7e90bebf6973->enter($__internal_ee844355c80c628112b36c73a2143abcebca624ebf52792af5db7e90bebf6973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_249273af078a74c651c39278878608ba7b9b47d815733d95645fce5958f05e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249273af078a74c651c39278878608ba7b9b47d815733d95645fce5958f05e4c->enter($__internal_249273af078a74c651c39278878608ba7b9b47d815733d95645fce5958f05e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_249273af078a74c651c39278878608ba7b9b47d815733d95645fce5958f05e4c->leave($__internal_249273af078a74c651c39278878608ba7b9b47d815733d95645fce5958f05e4c_prof);

        
        $__internal_ee844355c80c628112b36c73a2143abcebca624ebf52792af5db7e90bebf6973->leave($__internal_ee844355c80c628112b36c73a2143abcebca624ebf52792af5db7e90bebf6973_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1841dd3b76ca7938d78464385b02b80b8c8a48c3f026149af8a57ccc65ef945c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1841dd3b76ca7938d78464385b02b80b8c8a48c3f026149af8a57ccc65ef945c->enter($__internal_1841dd3b76ca7938d78464385b02b80b8c8a48c3f026149af8a57ccc65ef945c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f360e975dd3d026f0e5cf1e967bbce7a90b1e40ff57dead1a3ef0daa8da524b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f360e975dd3d026f0e5cf1e967bbce7a90b1e40ff57dead1a3ef0daa8da524b1->enter($__internal_f360e975dd3d026f0e5cf1e967bbce7a90b1e40ff57dead1a3ef0daa8da524b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f360e975dd3d026f0e5cf1e967bbce7a90b1e40ff57dead1a3ef0daa8da524b1->leave($__internal_f360e975dd3d026f0e5cf1e967bbce7a90b1e40ff57dead1a3ef0daa8da524b1_prof);

        
        $__internal_1841dd3b76ca7938d78464385b02b80b8c8a48c3f026149af8a57ccc65ef945c->leave($__internal_1841dd3b76ca7938d78464385b02b80b8c8a48c3f026149af8a57ccc65ef945c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76a405ed1feffc8b56023dbc9c1026ef27fe59c4129b67124dcc9bd87543693e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a405ed1feffc8b56023dbc9c1026ef27fe59c4129b67124dcc9bd87543693e->enter($__internal_76a405ed1feffc8b56023dbc9c1026ef27fe59c4129b67124dcc9bd87543693e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e7fe7da9ef08b49fccfaa648bd3a37d730ffd337d42c09c8cf2c306557ab7e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fe7da9ef08b49fccfaa648bd3a37d730ffd337d42c09c8cf2c306557ab7e24->enter($__internal_e7fe7da9ef08b49fccfaa648bd3a37d730ffd337d42c09c8cf2c306557ab7e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_e7fe7da9ef08b49fccfaa648bd3a37d730ffd337d42c09c8cf2c306557ab7e24->leave($__internal_e7fe7da9ef08b49fccfaa648bd3a37d730ffd337d42c09c8cf2c306557ab7e24_prof);

        
        $__internal_76a405ed1feffc8b56023dbc9c1026ef27fe59c4129b67124dcc9bd87543693e->leave($__internal_76a405ed1feffc8b56023dbc9c1026ef27fe59c4129b67124dcc9bd87543693e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}

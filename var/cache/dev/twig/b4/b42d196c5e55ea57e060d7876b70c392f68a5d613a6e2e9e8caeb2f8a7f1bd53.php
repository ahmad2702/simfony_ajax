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
        $__internal_470dc513c88a4e14572702b8faf19c663421f9eb68acec740147cc5d3701287d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470dc513c88a4e14572702b8faf19c663421f9eb68acec740147cc5d3701287d->enter($__internal_470dc513c88a4e14572702b8faf19c663421f9eb68acec740147cc5d3701287d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7335ad2654afa48366d75fcf9325c950b9861656062d596541b1cf6de2fac49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7335ad2654afa48366d75fcf9325c950b9861656062d596541b1cf6de2fac49d->enter($__internal_7335ad2654afa48366d75fcf9325c950b9861656062d596541b1cf6de2fac49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_470dc513c88a4e14572702b8faf19c663421f9eb68acec740147cc5d3701287d->leave($__internal_470dc513c88a4e14572702b8faf19c663421f9eb68acec740147cc5d3701287d_prof);

        
        $__internal_7335ad2654afa48366d75fcf9325c950b9861656062d596541b1cf6de2fac49d->leave($__internal_7335ad2654afa48366d75fcf9325c950b9861656062d596541b1cf6de2fac49d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_552259958e5c452cc8c7acd2849594b6f43336d0cfd522f3124e79339af0394c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552259958e5c452cc8c7acd2849594b6f43336d0cfd522f3124e79339af0394c->enter($__internal_552259958e5c452cc8c7acd2849594b6f43336d0cfd522f3124e79339af0394c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4681b5b5d14a8235fb7bdfa57cb72e4aaf00cca9d7bd30add01f319621ae1a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4681b5b5d14a8235fb7bdfa57cb72e4aaf00cca9d7bd30add01f319621ae1a18->enter($__internal_4681b5b5d14a8235fb7bdfa57cb72e4aaf00cca9d7bd30add01f319621ae1a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4681b5b5d14a8235fb7bdfa57cb72e4aaf00cca9d7bd30add01f319621ae1a18->leave($__internal_4681b5b5d14a8235fb7bdfa57cb72e4aaf00cca9d7bd30add01f319621ae1a18_prof);

        
        $__internal_552259958e5c452cc8c7acd2849594b6f43336d0cfd522f3124e79339af0394c->leave($__internal_552259958e5c452cc8c7acd2849594b6f43336d0cfd522f3124e79339af0394c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5329eaaa16b974088878e497a03ce4b7a6509b0ea8b75f8faed0debc2883dbe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5329eaaa16b974088878e497a03ce4b7a6509b0ea8b75f8faed0debc2883dbe5->enter($__internal_5329eaaa16b974088878e497a03ce4b7a6509b0ea8b75f8faed0debc2883dbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a9bac5bc322196e8c19e6139e273b78a49d272f0402f4716325bdbd96df9eb72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bac5bc322196e8c19e6139e273b78a49d272f0402f4716325bdbd96df9eb72->enter($__internal_a9bac5bc322196e8c19e6139e273b78a49d272f0402f4716325bdbd96df9eb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a9bac5bc322196e8c19e6139e273b78a49d272f0402f4716325bdbd96df9eb72->leave($__internal_a9bac5bc322196e8c19e6139e273b78a49d272f0402f4716325bdbd96df9eb72_prof);

        
        $__internal_5329eaaa16b974088878e497a03ce4b7a6509b0ea8b75f8faed0debc2883dbe5->leave($__internal_5329eaaa16b974088878e497a03ce4b7a6509b0ea8b75f8faed0debc2883dbe5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_709c4fa47e0235b5eb6d132133be7048c4ab60ebf8ec8323cd7d4514e182f9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_709c4fa47e0235b5eb6d132133be7048c4ab60ebf8ec8323cd7d4514e182f9e5->enter($__internal_709c4fa47e0235b5eb6d132133be7048c4ab60ebf8ec8323cd7d4514e182f9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3b375e9069e792c41e707d7fadffbbc234e3b831d6bbec4e68883ceda34454a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b375e9069e792c41e707d7fadffbbc234e3b831d6bbec4e68883ceda34454a9->enter($__internal_3b375e9069e792c41e707d7fadffbbc234e3b831d6bbec4e68883ceda34454a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3b375e9069e792c41e707d7fadffbbc234e3b831d6bbec4e68883ceda34454a9->leave($__internal_3b375e9069e792c41e707d7fadffbbc234e3b831d6bbec4e68883ceda34454a9_prof);

        
        $__internal_709c4fa47e0235b5eb6d132133be7048c4ab60ebf8ec8323cd7d4514e182f9e5->leave($__internal_709c4fa47e0235b5eb6d132133be7048c4ab60ebf8ec8323cd7d4514e182f9e5_prof);

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

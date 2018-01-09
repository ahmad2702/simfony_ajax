<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0499015d60673f2b3664922a9f949ff928dc151dd49886789bfcf67ba3004590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_b9ff8c404c4adebbee86b8fff0b3c27e5a3ab4ec23d921f42d968f039e35fe27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ff8c404c4adebbee86b8fff0b3c27e5a3ab4ec23d921f42d968f039e35fe27->enter($__internal_b9ff8c404c4adebbee86b8fff0b3c27e5a3ab4ec23d921f42d968f039e35fe27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_15fc61e76c09f8e26eec1f40219581481c024796c5d6401deb48b9a0565c8d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fc61e76c09f8e26eec1f40219581481c024796c5d6401deb48b9a0565c8d72->enter($__internal_15fc61e76c09f8e26eec1f40219581481c024796c5d6401deb48b9a0565c8d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9ff8c404c4adebbee86b8fff0b3c27e5a3ab4ec23d921f42d968f039e35fe27->leave($__internal_b9ff8c404c4adebbee86b8fff0b3c27e5a3ab4ec23d921f42d968f039e35fe27_prof);

        
        $__internal_15fc61e76c09f8e26eec1f40219581481c024796c5d6401deb48b9a0565c8d72->leave($__internal_15fc61e76c09f8e26eec1f40219581481c024796c5d6401deb48b9a0565c8d72_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7c6a713bf6fa553e44fff57a6969c0640e4efef3a9ef4c204b0dca60d22bb866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6a713bf6fa553e44fff57a6969c0640e4efef3a9ef4c204b0dca60d22bb866->enter($__internal_7c6a713bf6fa553e44fff57a6969c0640e4efef3a9ef4c204b0dca60d22bb866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f386d75e21dc7a093e00d315dbc55272d346c09e5312b271f55a6d812d36d351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f386d75e21dc7a093e00d315dbc55272d346c09e5312b271f55a6d812d36d351->enter($__internal_f386d75e21dc7a093e00d315dbc55272d346c09e5312b271f55a6d812d36d351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f386d75e21dc7a093e00d315dbc55272d346c09e5312b271f55a6d812d36d351->leave($__internal_f386d75e21dc7a093e00d315dbc55272d346c09e5312b271f55a6d812d36d351_prof);

        
        $__internal_7c6a713bf6fa553e44fff57a6969c0640e4efef3a9ef4c204b0dca60d22bb866->leave($__internal_7c6a713bf6fa553e44fff57a6969c0640e4efef3a9ef4c204b0dca60d22bb866_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_414de6388e39b3bd10396338d8db1f0626a3422e7d0e6c4ef814177bf70e4602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414de6388e39b3bd10396338d8db1f0626a3422e7d0e6c4ef814177bf70e4602->enter($__internal_414de6388e39b3bd10396338d8db1f0626a3422e7d0e6c4ef814177bf70e4602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0a6374b6f326aed4a9a686ad9ed094842750ebbc6e8784d126f8c697f0f896e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6374b6f326aed4a9a686ad9ed094842750ebbc6e8784d126f8c697f0f896e8->enter($__internal_0a6374b6f326aed4a9a686ad9ed094842750ebbc6e8784d126f8c697f0f896e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0a6374b6f326aed4a9a686ad9ed094842750ebbc6e8784d126f8c697f0f896e8->leave($__internal_0a6374b6f326aed4a9a686ad9ed094842750ebbc6e8784d126f8c697f0f896e8_prof);

        
        $__internal_414de6388e39b3bd10396338d8db1f0626a3422e7d0e6c4ef814177bf70e4602->leave($__internal_414de6388e39b3bd10396338d8db1f0626a3422e7d0e6c4ef814177bf70e4602_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5668758bf1de488b0340ccd099d1c9b1a281203b161f83871eaa9f785fe3cca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5668758bf1de488b0340ccd099d1c9b1a281203b161f83871eaa9f785fe3cca2->enter($__internal_5668758bf1de488b0340ccd099d1c9b1a281203b161f83871eaa9f785fe3cca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_73662f5b1c64bd51707c1791bc6a7f2349ffc54491b147c4f6a62e320c57ef1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73662f5b1c64bd51707c1791bc6a7f2349ffc54491b147c4f6a62e320c57ef1e->enter($__internal_73662f5b1c64bd51707c1791bc6a7f2349ffc54491b147c4f6a62e320c57ef1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_73662f5b1c64bd51707c1791bc6a7f2349ffc54491b147c4f6a62e320c57ef1e->leave($__internal_73662f5b1c64bd51707c1791bc6a7f2349ffc54491b147c4f6a62e320c57ef1e_prof);

        
        $__internal_5668758bf1de488b0340ccd099d1c9b1a281203b161f83871eaa9f785fe3cca2->leave($__internal_5668758bf1de488b0340ccd099d1c9b1a281203b161f83871eaa9f785fe3cca2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5a2bde0c62848c5ac96bff84fdce9d68fdf55a38fb03f5c896d959b9a0676520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0108a0b1e8ac2be212dc2d0ff3044445f93ad51518fdcb6c10c7106db49caf2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0108a0b1e8ac2be212dc2d0ff3044445f93ad51518fdcb6c10c7106db49caf2c->enter($__internal_0108a0b1e8ac2be212dc2d0ff3044445f93ad51518fdcb6c10c7106db49caf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_beaab2c6fef7771f904aa35e34939343a3cb2d7108e0218c650688cb5145c06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beaab2c6fef7771f904aa35e34939343a3cb2d7108e0218c650688cb5145c06e->enter($__internal_beaab2c6fef7771f904aa35e34939343a3cb2d7108e0218c650688cb5145c06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0108a0b1e8ac2be212dc2d0ff3044445f93ad51518fdcb6c10c7106db49caf2c->leave($__internal_0108a0b1e8ac2be212dc2d0ff3044445f93ad51518fdcb6c10c7106db49caf2c_prof);

        
        $__internal_beaab2c6fef7771f904aa35e34939343a3cb2d7108e0218c650688cb5145c06e->leave($__internal_beaab2c6fef7771f904aa35e34939343a3cb2d7108e0218c650688cb5145c06e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_81caff14e63ec79d3fcf3e9d46505abd3ff23f9956d9bb9e8f6efd48b8f783a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81caff14e63ec79d3fcf3e9d46505abd3ff23f9956d9bb9e8f6efd48b8f783a7->enter($__internal_81caff14e63ec79d3fcf3e9d46505abd3ff23f9956d9bb9e8f6efd48b8f783a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_81a413266dae96fe8706953caa23ee071c595f8bdd5277dbec1c3d7e088e46ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a413266dae96fe8706953caa23ee071c595f8bdd5277dbec1c3d7e088e46ab->enter($__internal_81a413266dae96fe8706953caa23ee071c595f8bdd5277dbec1c3d7e088e46ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_81a413266dae96fe8706953caa23ee071c595f8bdd5277dbec1c3d7e088e46ab->leave($__internal_81a413266dae96fe8706953caa23ee071c595f8bdd5277dbec1c3d7e088e46ab_prof);

        
        $__internal_81caff14e63ec79d3fcf3e9d46505abd3ff23f9956d9bb9e8f6efd48b8f783a7->leave($__internal_81caff14e63ec79d3fcf3e9d46505abd3ff23f9956d9bb9e8f6efd48b8f783a7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3500b0362fc575b3017aee2765f14eeb8fb89d2bfbf17d6e30ce073d3d2238a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3500b0362fc575b3017aee2765f14eeb8fb89d2bfbf17d6e30ce073d3d2238a6->enter($__internal_3500b0362fc575b3017aee2765f14eeb8fb89d2bfbf17d6e30ce073d3d2238a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f80b8deee29fe284c77df83418547cb29457188c60075757df32ca5a6d67e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f80b8deee29fe284c77df83418547cb29457188c60075757df32ca5a6d67e19->enter($__internal_4f80b8deee29fe284c77df83418547cb29457188c60075757df32ca5a6d67e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_4f80b8deee29fe284c77df83418547cb29457188c60075757df32ca5a6d67e19->leave($__internal_4f80b8deee29fe284c77df83418547cb29457188c60075757df32ca5a6d67e19_prof);

        
        $__internal_3500b0362fc575b3017aee2765f14eeb8fb89d2bfbf17d6e30ce073d3d2238a6->leave($__internal_3500b0362fc575b3017aee2765f14eeb8fb89d2bfbf17d6e30ce073d3d2238a6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e22eefcc261ddb70c520de8600c65dc529131000319e15e1e91f5c5dce98a904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e22eefcc261ddb70c520de8600c65dc529131000319e15e1e91f5c5dce98a904->enter($__internal_e22eefcc261ddb70c520de8600c65dc529131000319e15e1e91f5c5dce98a904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cbbad263a841bae8ced624062546428513313271b8c820f75bcf27955f64e90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbad263a841bae8ced624062546428513313271b8c820f75bcf27955f64e90c->enter($__internal_cbbad263a841bae8ced624062546428513313271b8c820f75bcf27955f64e90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_cbbad263a841bae8ced624062546428513313271b8c820f75bcf27955f64e90c->leave($__internal_cbbad263a841bae8ced624062546428513313271b8c820f75bcf27955f64e90c_prof);

        
        $__internal_e22eefcc261ddb70c520de8600c65dc529131000319e15e1e91f5c5dce98a904->leave($__internal_e22eefcc261ddb70c520de8600c65dc529131000319e15e1e91f5c5dce98a904_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}

<?php

/* 404.php.twig */
class __TwigTemplate_4c7272e29453453ff2ca10b90573f5a0291b5fc12d587b197141ce6924a86f88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "404.php.twig", 1);
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
        $__internal_94e84aa223634c9bfab48cae91a9c04c82124fd670734b9863a3531c625d027c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e84aa223634c9bfab48cae91a9c04c82124fd670734b9863a3531c625d027c->enter($__internal_94e84aa223634c9bfab48cae91a9c04c82124fd670734b9863a3531c625d027c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "404.php.twig"));

        $__internal_b5f549b50ed2867cd53db4728cb7b093575813450128ee1ef4b71c08a07b1b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f549b50ed2867cd53db4728cb7b093575813450128ee1ef4b71c08a07b1b96->enter($__internal_b5f549b50ed2867cd53db4728cb7b093575813450128ee1ef4b71c08a07b1b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "404.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94e84aa223634c9bfab48cae91a9c04c82124fd670734b9863a3531c625d027c->leave($__internal_94e84aa223634c9bfab48cae91a9c04c82124fd670734b9863a3531c625d027c_prof);

        
        $__internal_b5f549b50ed2867cd53db4728cb7b093575813450128ee1ef4b71c08a07b1b96->leave($__internal_b5f549b50ed2867cd53db4728cb7b093575813450128ee1ef4b71c08a07b1b96_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_92a04fa7fa6428f863732a33559acfee186a5c6f33ad7284f78ec745a54bec15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a04fa7fa6428f863732a33559acfee186a5c6f33ad7284f78ec745a54bec15->enter($__internal_92a04fa7fa6428f863732a33559acfee186a5c6f33ad7284f78ec745a54bec15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_66ce41835c416510a1b8af9aeb18b631f195395f8aacb481c8ec12c69f70b7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ce41835c416510a1b8af9aeb18b631f195395f8aacb481c8ec12c69f70b7d5->enter($__internal_66ce41835c416510a1b8af9aeb18b631f195395f8aacb481c8ec12c69f70b7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">404: Page Not Found</h1>
    </div>


    <div class=\"noLinesFound\">
        Sorry, but the page you were trying to view does not exist <br>
    </div>




";
        
        $__internal_66ce41835c416510a1b8af9aeb18b631f195395f8aacb481c8ec12c69f70b7d5->leave($__internal_66ce41835c416510a1b8af9aeb18b631f195395f8aacb481c8ec12c69f70b7d5_prof);

        
        $__internal_92a04fa7fa6428f863732a33559acfee186a5c6f33ad7284f78ec745a54bec15->leave($__internal_92a04fa7fa6428f863732a33559acfee186a5c6f33ad7284f78ec745a54bec15_prof);

    }

    public function getTemplateName()
    {
        return "404.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">404: Page Not Found</h1>
    </div>


    <div class=\"noLinesFound\">
        Sorry, but the page you were trying to view does not exist <br>
    </div>




{% endblock %}", "404.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/templates/404.php.twig");
    }
}

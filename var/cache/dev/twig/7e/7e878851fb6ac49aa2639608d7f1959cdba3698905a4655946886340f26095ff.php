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
        $__internal_2ed988597558035a3f7289df8190ab132a9744f8f8b124fad8bde2c435c487bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed988597558035a3f7289df8190ab132a9744f8f8b124fad8bde2c435c487bd->enter($__internal_2ed988597558035a3f7289df8190ab132a9744f8f8b124fad8bde2c435c487bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "404.php.twig"));

        $__internal_d84bc5c6bd4c523f455e93b28c177126c720d0bfec6e490339e9f478ce21e4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84bc5c6bd4c523f455e93b28c177126c720d0bfec6e490339e9f478ce21e4bd->enter($__internal_d84bc5c6bd4c523f455e93b28c177126c720d0bfec6e490339e9f478ce21e4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "404.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ed988597558035a3f7289df8190ab132a9744f8f8b124fad8bde2c435c487bd->leave($__internal_2ed988597558035a3f7289df8190ab132a9744f8f8b124fad8bde2c435c487bd_prof);

        
        $__internal_d84bc5c6bd4c523f455e93b28c177126c720d0bfec6e490339e9f478ce21e4bd->leave($__internal_d84bc5c6bd4c523f455e93b28c177126c720d0bfec6e490339e9f478ce21e4bd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a0a8815725a137b21dc0a329730b883f0bffb5f6f4427cac67178a74c52e10dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a8815725a137b21dc0a329730b883f0bffb5f6f4427cac67178a74c52e10dc->enter($__internal_a0a8815725a137b21dc0a329730b883f0bffb5f6f4427cac67178a74c52e10dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f0793a918c40712df404b53134276cf35a0f2da3473b8c05023f741ebcd7d8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0793a918c40712df404b53134276cf35a0f2da3473b8c05023f741ebcd7d8cf->enter($__internal_f0793a918c40712df404b53134276cf35a0f2da3473b8c05023f741ebcd7d8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Page Not Found</h1>
    </div>


    <div class=\"noLinesFound\">
        Sorry, but the page you were trying to view does not exist <br>
    </div>




";
        
        $__internal_f0793a918c40712df404b53134276cf35a0f2da3473b8c05023f741ebcd7d8cf->leave($__internal_f0793a918c40712df404b53134276cf35a0f2da3473b8c05023f741ebcd7d8cf_prof);

        
        $__internal_a0a8815725a137b21dc0a329730b883f0bffb5f6f4427cac67178a74c52e10dc->leave($__internal_a0a8815725a137b21dc0a329730b883f0bffb5f6f4427cac67178a74c52e10dc_prof);

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
        <h1 style=\"text-align: center;\">Page Not Found</h1>
    </div>


    <div class=\"noLinesFound\">
        Sorry, but the page you were trying to view does not exist <br>
    </div>




{% endblock %}", "404.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/templates/404.php.twig");
    }
}

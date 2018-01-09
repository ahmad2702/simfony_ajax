<?php

/* search.php.twig */
class __TwigTemplate_85e99d64209779f3538e5497339b563f1590b9a66c8d29ff006bcb84cccb0544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "search.php.twig", 1);
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
        $__internal_2777ec8c8d7e7daddb558d7c438e92c75d1bc8130aa4ff594b4ec5198c5d993d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2777ec8c8d7e7daddb558d7c438e92c75d1bc8130aa4ff594b4ec5198c5d993d->enter($__internal_2777ec8c8d7e7daddb558d7c438e92c75d1bc8130aa4ff594b4ec5198c5d993d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search.php.twig"));

        $__internal_4d8ff6168396f69fd81ea01931e2029b8c2cefd8256137989cc4f5b10e2adcfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8ff6168396f69fd81ea01931e2029b8c2cefd8256137989cc4f5b10e2adcfe->enter($__internal_4d8ff6168396f69fd81ea01931e2029b8c2cefd8256137989cc4f5b10e2adcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2777ec8c8d7e7daddb558d7c438e92c75d1bc8130aa4ff594b4ec5198c5d993d->leave($__internal_2777ec8c8d7e7daddb558d7c438e92c75d1bc8130aa4ff594b4ec5198c5d993d_prof);

        
        $__internal_4d8ff6168396f69fd81ea01931e2029b8c2cefd8256137989cc4f5b10e2adcfe->leave($__internal_4d8ff6168396f69fd81ea01931e2029b8c2cefd8256137989cc4f5b10e2adcfe_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6c2a8b59853de61e581e6af6d4b97fe8571e37ecaa7a253d4b5d82d47778ad3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2a8b59853de61e581e6af6d4b97fe8571e37ecaa7a253d4b5d82d47778ad3e->enter($__internal_6c2a8b59853de61e581e6af6d4b97fe8571e37ecaa7a253d4b5d82d47778ad3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_639afcd90e23447fd1ec6ecdf7195d5c4460670864945b98ae0adaa3915b2243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639afcd90e23447fd1ec6ecdf7195d5c4460670864945b98ae0adaa3915b2243->enter($__internal_639afcd90e23447fd1ec6ecdf7195d5c4460670864945b98ae0adaa3915b2243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Search</h1>
    </div>



    <form action=\"/go\" method=\"post\" class=\"search\">
        <input type=\"search\" name=\"name\" id=\"suchField\" placeholder=\"Username...\" class=\"input\" />
        <input type=\"submit\" name=\"searchUser\" value=\"\" class=\"submit\" />
    </form>



    <div id=\"ergebnisse\">

    </div>

";
        // line 42
        echo "
    <script type=\"text/javascript\">
        \$(function(){
            \$(\"#suchField\").keyup(function(){
                var search = \$(\"#suchField\").val();
                \$.ajax({
                    type: \"POST\",
                    url: \"/ajax\",
                    data: {\"search\": search},
                    cache: false,
                    success: function(response){
                        \$(\"#ergebnisse\").html(response);
                    }
                });
                return false;
            });
        });
    </script>








";
        
        $__internal_639afcd90e23447fd1ec6ecdf7195d5c4460670864945b98ae0adaa3915b2243->leave($__internal_639afcd90e23447fd1ec6ecdf7195d5c4460670864945b98ae0adaa3915b2243_prof);

        
        $__internal_6c2a8b59853de61e581e6af6d4b97fe8571e37ecaa7a253d4b5d82d47778ad3e->leave($__internal_6c2a8b59853de61e581e6af6d4b97fe8571e37ecaa7a253d4b5d82d47778ad3e_prof);

    }

    public function getTemplateName()
    {
        return "search.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 42,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}

    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Search</h1>
    </div>



    <form action=\"/go\" method=\"post\" class=\"search\">
        <input type=\"search\" name=\"name\" id=\"suchField\" placeholder=\"Username...\" class=\"input\" />
        <input type=\"submit\" name=\"searchUser\" value=\"\" class=\"submit\" />
    </form>



    <div id=\"ergebnisse\">

    </div>

{#
    <script>
        \$(document).ready(function () {

            \$('#suchField').change(function () {
                \$.ajax({
                    type: 'GET',
                    url: '/'
                });
            });







        });
    </script>
#}

    <script type=\"text/javascript\">
        \$(function(){
            \$(\"#suchField\").keyup(function(){
                var search = \$(\"#suchField\").val();
                \$.ajax({
                    type: \"POST\",
                    url: \"/ajax\",
                    data: {\"search\": search},
                    cache: false,
                    success: function(response){
                        \$(\"#ergebnisse\").html(response);
                    }
                });
                return false;
            });
        });
    </script>








{% endblock %}", "search.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/templates/search.php.twig");
    }
}

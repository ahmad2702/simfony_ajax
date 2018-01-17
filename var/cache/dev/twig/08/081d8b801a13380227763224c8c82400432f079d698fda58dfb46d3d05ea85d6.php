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
        $__internal_a9143d457e6d6077808e9467cbaa6976ee1e54a6265e15855897b987a6c7fbb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9143d457e6d6077808e9467cbaa6976ee1e54a6265e15855897b987a6c7fbb4->enter($__internal_a9143d457e6d6077808e9467cbaa6976ee1e54a6265e15855897b987a6c7fbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search.php.twig"));

        $__internal_a06a2b5d4d39cf7c877b27da00fbbbea830a26ad0cdd8f47fd0ebddffd8e5451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06a2b5d4d39cf7c877b27da00fbbbea830a26ad0cdd8f47fd0ebddffd8e5451->enter($__internal_a06a2b5d4d39cf7c877b27da00fbbbea830a26ad0cdd8f47fd0ebddffd8e5451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9143d457e6d6077808e9467cbaa6976ee1e54a6265e15855897b987a6c7fbb4->leave($__internal_a9143d457e6d6077808e9467cbaa6976ee1e54a6265e15855897b987a6c7fbb4_prof);

        
        $__internal_a06a2b5d4d39cf7c877b27da00fbbbea830a26ad0cdd8f47fd0ebddffd8e5451->leave($__internal_a06a2b5d4d39cf7c877b27da00fbbbea830a26ad0cdd8f47fd0ebddffd8e5451_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fe447f179c80474dea8b43d8670f7b85e1b5f917db1d4635eaba04b523940c02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe447f179c80474dea8b43d8670f7b85e1b5f917db1d4635eaba04b523940c02->enter($__internal_fe447f179c80474dea8b43d8670f7b85e1b5f917db1d4635eaba04b523940c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2bb7dc93fe4a1dbaf496b5ce915f31afb196f922b4aa4cad245c8f91d52796e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb7dc93fe4a1dbaf496b5ce915f31afb196f922b4aa4cad245c8f91d52796e8->enter($__internal_2bb7dc93fe4a1dbaf496b5ce915f31afb196f922b4aa4cad245c8f91d52796e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        var names = JSON.parse(response);

                        var text = \"\";

                        if(names.length !=0 && names[0].length != 0){
                            for(i=0; i < names[0].length; i++){
                                var name = names[0][i].user;
                                text += '<a id=\"userButton\" href=\"#\">'+name+'</a><br>';
                            }
                        }

                        \$(\"#ergebnisse\").html(text);
                    }
                });
                return false;
            });



        });

        \$(document).ready(function () {

            \$(document).on('click', '#userButton', function(){
                var valueFromLink = \$(this).text();
                \$(\"#suchField\").val(valueFromLink);
            });

        });

    </script>








";
        
        $__internal_2bb7dc93fe4a1dbaf496b5ce915f31afb196f922b4aa4cad245c8f91d52796e8->leave($__internal_2bb7dc93fe4a1dbaf496b5ce915f31afb196f922b4aa4cad245c8f91d52796e8_prof);

        
        $__internal_fe447f179c80474dea8b43d8670f7b85e1b5f917db1d4635eaba04b523940c02->leave($__internal_fe447f179c80474dea8b43d8670f7b85e1b5f917db1d4635eaba04b523940c02_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
                        var names = JSON.parse(response);

                        var text = \"\";

                        if(names.length !=0 && names[0].length != 0){
                            for(i=0; i < names[0].length; i++){
                                var name = names[0][i].user;
                                text += '<a id=\"userButton\" href=\"#\">'+name+'</a><br>';
                            }
                        }

                        \$(\"#ergebnisse\").html(text);
                    }
                });
                return false;
            });



        });

        \$(document).ready(function () {

            \$(document).on('click', '#userButton', function(){
                var valueFromLink = \$(this).text();
                \$(\"#suchField\").val(valueFromLink);
            });

        });

    </script>








{% endblock %}", "search.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/templates/search.php.twig");
    }
}

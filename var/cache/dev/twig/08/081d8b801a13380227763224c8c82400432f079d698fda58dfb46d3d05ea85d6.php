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
        $__internal_7aafbfe9227b01efce9769e433e014295f45ba3b3f064d3d5389c49ec1f8ac1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aafbfe9227b01efce9769e433e014295f45ba3b3f064d3d5389c49ec1f8ac1c->enter($__internal_7aafbfe9227b01efce9769e433e014295f45ba3b3f064d3d5389c49ec1f8ac1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search.php.twig"));

        $__internal_e5694e33333859c599d348e57aabfbf90f8517ceb85c011fa39ac55ad3d203c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5694e33333859c599d348e57aabfbf90f8517ceb85c011fa39ac55ad3d203c1->enter($__internal_e5694e33333859c599d348e57aabfbf90f8517ceb85c011fa39ac55ad3d203c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aafbfe9227b01efce9769e433e014295f45ba3b3f064d3d5389c49ec1f8ac1c->leave($__internal_7aafbfe9227b01efce9769e433e014295f45ba3b3f064d3d5389c49ec1f8ac1c_prof);

        
        $__internal_e5694e33333859c599d348e57aabfbf90f8517ceb85c011fa39ac55ad3d203c1->leave($__internal_e5694e33333859c599d348e57aabfbf90f8517ceb85c011fa39ac55ad3d203c1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_828dead4d4a88fbe94651afec05679e26520679e41ec873aa6cbe202f4e586bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_828dead4d4a88fbe94651afec05679e26520679e41ec873aa6cbe202f4e586bd->enter($__internal_828dead4d4a88fbe94651afec05679e26520679e41ec873aa6cbe202f4e586bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8c9bea578b26a2e82e28ef23bdcc6eb576608b786890910fea1230839cd58d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9bea578b26a2e82e28ef23bdcc6eb576608b786890910fea1230839cd58d8a->enter($__internal_8c9bea578b26a2e82e28ef23bdcc6eb576608b786890910fea1230839cd58d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        \$(\"#ergebnisse\").html(response);
                    }
                });
                return false;
            });



        });

        \$(document).ready(function () {

            \$(document).on('click', '#userButton', function(){
                var link = \$(\"#userButton\").attr('href','#');
                var valueFromLink = \$(\"#userButton\").text();

                \$(\"#suchField\").val(valueFromLink);
            });

        });

    </script>








";
        
        $__internal_8c9bea578b26a2e82e28ef23bdcc6eb576608b786890910fea1230839cd58d8a->leave($__internal_8c9bea578b26a2e82e28ef23bdcc6eb576608b786890910fea1230839cd58d8a_prof);

        
        $__internal_828dead4d4a88fbe94651afec05679e26520679e41ec873aa6cbe202f4e586bd->leave($__internal_828dead4d4a88fbe94651afec05679e26520679e41ec873aa6cbe202f4e586bd_prof);

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
                        \$(\"#ergebnisse\").html(response);
                    }
                });
                return false;
            });



        });

        \$(document).ready(function () {

            \$(document).on('click', '#userButton', function(){
                var link = \$(\"#userButton\").attr('href','#');
                var valueFromLink = \$(\"#userButton\").text();

                \$(\"#suchField\").val(valueFromLink);
            });

        });

    </script>








{% endblock %}", "search.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/templates/search.php.twig");
    }
}

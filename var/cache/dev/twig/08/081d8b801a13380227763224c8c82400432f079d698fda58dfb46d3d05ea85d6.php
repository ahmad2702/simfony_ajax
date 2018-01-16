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
        $__internal_ffaa86381a684705a56cafe122f4a415baa68e993d1652d050335356dcb433fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffaa86381a684705a56cafe122f4a415baa68e993d1652d050335356dcb433fd->enter($__internal_ffaa86381a684705a56cafe122f4a415baa68e993d1652d050335356dcb433fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search.php.twig"));

        $__internal_328696e4de5f6c87fd49622d906fdbb60ef05b8645082a490d531ccb75002879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328696e4de5f6c87fd49622d906fdbb60ef05b8645082a490d531ccb75002879->enter($__internal_328696e4de5f6c87fd49622d906fdbb60ef05b8645082a490d531ccb75002879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffaa86381a684705a56cafe122f4a415baa68e993d1652d050335356dcb433fd->leave($__internal_ffaa86381a684705a56cafe122f4a415baa68e993d1652d050335356dcb433fd_prof);

        
        $__internal_328696e4de5f6c87fd49622d906fdbb60ef05b8645082a490d531ccb75002879->leave($__internal_328696e4de5f6c87fd49622d906fdbb60ef05b8645082a490d531ccb75002879_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5b08127c585b26391ad895928de3425ffb089d335536abd04b0783a01b608c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b08127c585b26391ad895928de3425ffb089d335536abd04b0783a01b608c86->enter($__internal_5b08127c585b26391ad895928de3425ffb089d335536abd04b0783a01b608c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_73e15320409ad123ec48814975b4040fefa631221c2530815c7a9c2f89532817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e15320409ad123ec48814975b4040fefa631221c2530815c7a9c2f89532817->enter($__internal_73e15320409ad123ec48814975b4040fefa631221c2530815c7a9c2f89532817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                text += '<a id=\"userButton\" href=\"#\">'+names[0][i].user+'</a><br>';
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
                var link = \$(\"#userButton\").attr('href','#');
                var valueFromLink = \$(\"#userButton\").text();

                \$(\"#suchField\").val(valueFromLink);
            });

        });

    </script>








";
        
        $__internal_73e15320409ad123ec48814975b4040fefa631221c2530815c7a9c2f89532817->leave($__internal_73e15320409ad123ec48814975b4040fefa631221c2530815c7a9c2f89532817_prof);

        
        $__internal_5b08127c585b26391ad895928de3425ffb089d335536abd04b0783a01b608c86->leave($__internal_5b08127c585b26391ad895928de3425ffb089d335536abd04b0783a01b608c86_prof);

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
                                text += '<a id=\"userButton\" href=\"#\">'+names[0][i].user+'</a><br>';
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
                var link = \$(\"#userButton\").attr('href','#');
                var valueFromLink = \$(\"#userButton\").text();

                \$(\"#suchField\").val(valueFromLink);
            });

        });

    </script>








{% endblock %}", "search.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/templates/search.php.twig");
    }
}

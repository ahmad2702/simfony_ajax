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
        $__internal_f732aa4facb43db5d02ab2a4d9289a082bdd46d581d6e481db369b22ba1f07f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f732aa4facb43db5d02ab2a4d9289a082bdd46d581d6e481db369b22ba1f07f7->enter($__internal_f732aa4facb43db5d02ab2a4d9289a082bdd46d581d6e481db369b22ba1f07f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search.php.twig"));

        $__internal_e7fef99cc3ebe91fde6a8116a302bee8e1175f9c8265aa30bd7b1605843d9fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fef99cc3ebe91fde6a8116a302bee8e1175f9c8265aa30bd7b1605843d9fa2->enter($__internal_e7fef99cc3ebe91fde6a8116a302bee8e1175f9c8265aa30bd7b1605843d9fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f732aa4facb43db5d02ab2a4d9289a082bdd46d581d6e481db369b22ba1f07f7->leave($__internal_f732aa4facb43db5d02ab2a4d9289a082bdd46d581d6e481db369b22ba1f07f7_prof);

        
        $__internal_e7fef99cc3ebe91fde6a8116a302bee8e1175f9c8265aa30bd7b1605843d9fa2->leave($__internal_e7fef99cc3ebe91fde6a8116a302bee8e1175f9c8265aa30bd7b1605843d9fa2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e73056f27f9ff2885241adb45556cdcb21cc888ac07fcc88e1edfd1d98b1f606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73056f27f9ff2885241adb45556cdcb21cc888ac07fcc88e1edfd1d98b1f606->enter($__internal_e73056f27f9ff2885241adb45556cdcb21cc888ac07fcc88e1edfd1d98b1f606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e54769411a46d857d567e8c721d52281480aac2386a72116e439ee4cc3e054b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54769411a46d857d567e8c721d52281480aac2386a72116e439ee4cc3e054b8->enter($__internal_e54769411a46d857d567e8c721d52281480aac2386a72116e439ee4cc3e054b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e54769411a46d857d567e8c721d52281480aac2386a72116e439ee4cc3e054b8->leave($__internal_e54769411a46d857d567e8c721d52281480aac2386a72116e439ee4cc3e054b8_prof);

        
        $__internal_e73056f27f9ff2885241adb45556cdcb21cc888ac07fcc88e1edfd1d98b1f606->leave($__internal_e73056f27f9ff2885241adb45556cdcb21cc888ac07fcc88e1edfd1d98b1f606_prof);

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

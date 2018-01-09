<?php

/* base.php.twig */
class __TwigTemplate_2246b39a3a7b509f9a72e498d6080dfe02b4affdaead78f83a649bb5a9435024 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee2104adf8c3579efc1cccf6a0f9a59aa8a77744da0fd9209071ba65c79abeb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2104adf8c3579efc1cccf6a0f9a59aa8a77744da0fd9209071ba65c79abeb8->enter($__internal_ee2104adf8c3579efc1cccf6a0f9a59aa8a77744da0fd9209071ba65c79abeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.php.twig"));

        $__internal_7000452d99f0b435136e6caa3f3cecf90406dd39b1087b178385f9df3b263af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7000452d99f0b435136e6caa3f3cecf90406dd39b1087b178385f9df3b263af8->enter($__internal_7000452d99f0b435136e6caa3f3cecf90406dd39b1087b178385f9df3b263af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.php.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"de\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"http://www.voicelync.com/images/icons/kHqsC.png\">

    <title>Lauftagebuch</title>

    <!-- Meine CSS -->
    <link href=\"css/my-css.css\" rel=\"stylesheet\">
    <link href=\"css/searchCSS.css\" rel=\"stylesheet\">

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <link href=\"http://getbootstrap.com/docs/3.3/assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

    <script src=\"http://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"http://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js\"></script>
    <script src=\"http://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js\"></script>

</head>

<body>


<div id=\"container\">


    <!-- Fixed navbar -->
    <nav class=\"navbar navbar-default navbar-fixed-top\">

        ";
        // line 37
        echo twig_include($this->env, $context, "_navbar.php.twig");
        echo "

    </nav>




    <!-- Middle -->
    <div class=\"web-element\">
        <section class=\"middle-block\">

            ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "
        </section>
    </div>




    <!-- Footer -->
    <footer class=\"footer\">

        ";
        // line 59
        echo twig_include($this->env, $context, "_footer.php.twig");
        echo "

    </footer>



</div>


    <script src=\"js/jquery-3.2.1.min.js\"></script>
</body>
</html>
";
        
        $__internal_ee2104adf8c3579efc1cccf6a0f9a59aa8a77744da0fd9209071ba65c79abeb8->leave($__internal_ee2104adf8c3579efc1cccf6a0f9a59aa8a77744da0fd9209071ba65c79abeb8_prof);

        
        $__internal_7000452d99f0b435136e6caa3f3cecf90406dd39b1087b178385f9df3b263af8->leave($__internal_7000452d99f0b435136e6caa3f3cecf90406dd39b1087b178385f9df3b263af8_prof);

    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        $__internal_df37ea3e0bacf537bd7fed6fa697f079eaae24d64ac51ff20f1a8e103dd46a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df37ea3e0bacf537bd7fed6fa697f079eaae24d64ac51ff20f1a8e103dd46a0b->enter($__internal_df37ea3e0bacf537bd7fed6fa697f079eaae24d64ac51ff20f1a8e103dd46a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_758e39ef29c914f3315e0f8e5ec69a3b37951d5b0536724734fd903799cddf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758e39ef29c914f3315e0f8e5ec69a3b37951d5b0536724734fd903799cddf36->enter($__internal_758e39ef29c914f3315e0f8e5ec69a3b37951d5b0536724734fd903799cddf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_758e39ef29c914f3315e0f8e5ec69a3b37951d5b0536724734fd903799cddf36->leave($__internal_758e39ef29c914f3315e0f8e5ec69a3b37951d5b0536724734fd903799cddf36_prof);

        
        $__internal_df37ea3e0bacf537bd7fed6fa697f079eaae24d64ac51ff20f1a8e103dd46a0b->leave($__internal_df37ea3e0bacf537bd7fed6fa697f079eaae24d64ac51ff20f1a8e103dd46a0b_prof);

    }

    public function getTemplateName()
    {
        return "base.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 48,  92 => 59,  80 => 49,  78 => 48,  64 => 37,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"de\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"http://www.voicelync.com/images/icons/kHqsC.png\">

    <title>Lauftagebuch</title>

    <!-- Meine CSS -->
    <link href=\"css/my-css.css\" rel=\"stylesheet\">
    <link href=\"css/searchCSS.css\" rel=\"stylesheet\">

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <link href=\"http://getbootstrap.com/docs/3.3/assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

    <script src=\"http://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"http://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js\"></script>
    <script src=\"http://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js\"></script>

</head>

<body>


<div id=\"container\">


    <!-- Fixed navbar -->
    <nav class=\"navbar navbar-default navbar-fixed-top\">

        {{ include ('_navbar.php.twig' ) }}

    </nav>




    <!-- Middle -->
    <div class=\"web-element\">
        <section class=\"middle-block\">

            {% block content %}{% endblock %}

        </section>
    </div>




    <!-- Footer -->
    <footer class=\"footer\">

        {{ include ('_footer.php.twig') }}

    </footer>



</div>


    <script src=\"js/jquery-3.2.1.min.js\"></script>
</body>
</html>
", "base.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/templates/base.php.twig");
    }
}

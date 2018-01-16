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
        $__internal_da57126e7c59de471b25613a71e4648f4905399788ad79043c55b5ffebd0a847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da57126e7c59de471b25613a71e4648f4905399788ad79043c55b5ffebd0a847->enter($__internal_da57126e7c59de471b25613a71e4648f4905399788ad79043c55b5ffebd0a847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.php.twig"));

        $__internal_4b1a4516166982be7db15f8691ef6578f984bf18fd12eefe132e0848f94f6e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1a4516166982be7db15f8691ef6578f984bf18fd12eefe132e0848f94f6e81->enter($__internal_4b1a4516166982be7db15f8691ef6578f984bf18fd12eefe132e0848f94f6e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.php.twig"));

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
        
        $__internal_da57126e7c59de471b25613a71e4648f4905399788ad79043c55b5ffebd0a847->leave($__internal_da57126e7c59de471b25613a71e4648f4905399788ad79043c55b5ffebd0a847_prof);

        
        $__internal_4b1a4516166982be7db15f8691ef6578f984bf18fd12eefe132e0848f94f6e81->leave($__internal_4b1a4516166982be7db15f8691ef6578f984bf18fd12eefe132e0848f94f6e81_prof);

    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        $__internal_996a8828e4bf6af11d1b70cfdeb9b6dc14cb73ffdcbad1a578516a67f277e30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_996a8828e4bf6af11d1b70cfdeb9b6dc14cb73ffdcbad1a578516a67f277e30d->enter($__internal_996a8828e4bf6af11d1b70cfdeb9b6dc14cb73ffdcbad1a578516a67f277e30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c700f33fcda3bbe5904182b1dc2feb59443d564af5e7476c168c6e44ccf97af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c700f33fcda3bbe5904182b1dc2feb59443d564af5e7476c168c6e44ccf97af0->enter($__internal_c700f33fcda3bbe5904182b1dc2feb59443d564af5e7476c168c6e44ccf97af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c700f33fcda3bbe5904182b1dc2feb59443d564af5e7476c168c6e44ccf97af0->leave($__internal_c700f33fcda3bbe5904182b1dc2feb59443d564af5e7476c168c6e44ccf97af0_prof);

        
        $__internal_996a8828e4bf6af11d1b70cfdeb9b6dc14cb73ffdcbad1a578516a67f277e30d->leave($__internal_996a8828e4bf6af11d1b70cfdeb9b6dc14cb73ffdcbad1a578516a67f277e30d_prof);

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

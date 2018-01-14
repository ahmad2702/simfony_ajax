<?php

/* base.php.twig */
class __TwigTemplate_b1a2d1dfbe5ba749e14a8de7d7a049f3fabb895410b505f2d0f1beb2a6d6e59f extends Twig_Template
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
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
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
        return array (  103 => 48,  86 => 59,  74 => 49,  72 => 48,  58 => 37,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/templates/base.php.twig");
    }
}

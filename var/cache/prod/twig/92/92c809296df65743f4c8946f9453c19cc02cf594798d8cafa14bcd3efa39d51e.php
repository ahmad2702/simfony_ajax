<?php

/* _navbar.php.twig */
class __TwigTemplate_af97f632f03353919684a2fdb58a676d1126b144da443dd39267dda6041a5481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"web-element\">

    <!-- Mobile version -->
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>

        <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("start");
        echo "\">-LAUFTAGEBUCH-</a>
    </div>



    <div id=\"navbar\" class=\"collapse navbar-collapse\">
        <ul class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("start");
        echo "\">
                    <span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span>
                    Startseite
                </a>
            </li>

            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search_user");
        echo "\">
                    <span class=\"glyphicon\" aria-hidden=\"true\"></span>
                    Go to profile
                </a>
            </li>



        ";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 33
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array()))), "html", null, true);
            echo "\">
                    <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                    Profil ( ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo " )
                </a>
            </li>

            <li><a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                    <span class=\"glyphicon\" aria-hidden=\"true\"></span>
                    Logout
                </a>
            </li>

        ";
        } else {
            // line 46
            echo "
            <li><a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                    <span class=\"glyphicon\" aria-hidden=\"true\"></span>
                    Login
                </a>
            </li>

        ";
        }
        // line 54
        echo "



        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_navbar.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 54,  89 => 47,  86 => 46,  76 => 39,  69 => 35,  63 => 33,  61 => 32,  50 => 24,  41 => 18,  31 => 11,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_navbar.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/templates/_navbar.php.twig");
    }
}

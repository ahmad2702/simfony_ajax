<?php

/* vorschlag.php.twig */
class __TwigTemplate_3aa1b72a2ff76649b967f34fc41214584def7e034ed4c03bcb915d72c7ca14fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "vorschlag.php.twig", 1);
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
        $__internal_7a6085fb01ec932d5c13d38c4e607f1d13e534aee396c797011465c25453f719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6085fb01ec932d5c13d38c4e607f1d13e534aee396c797011465c25453f719->enter($__internal_7a6085fb01ec932d5c13d38c4e607f1d13e534aee396c797011465c25453f719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vorschlag.php.twig"));

        $__internal_8b416ad4ce9abd0da8f8173a21fe4f6dc5947c8dcde6f6477ed60b24f4863720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b416ad4ce9abd0da8f8173a21fe4f6dc5947c8dcde6f6477ed60b24f4863720->enter($__internal_8b416ad4ce9abd0da8f8173a21fe4f6dc5947c8dcde6f6477ed60b24f4863720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vorschlag.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a6085fb01ec932d5c13d38c4e607f1d13e534aee396c797011465c25453f719->leave($__internal_7a6085fb01ec932d5c13d38c4e607f1d13e534aee396c797011465c25453f719_prof);

        
        $__internal_8b416ad4ce9abd0da8f8173a21fe4f6dc5947c8dcde6f6477ed60b24f4863720->leave($__internal_8b416ad4ce9abd0da8f8173a21fe4f6dc5947c8dcde6f6477ed60b24f4863720_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_902a762932b346bf74d6679d69c91a963e2fc4be84dd53411ed217a82451f7fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_902a762932b346bf74d6679d69c91a963e2fc4be84dd53411ed217a82451f7fd->enter($__internal_902a762932b346bf74d6679d69c91a963e2fc4be84dd53411ed217a82451f7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9c954436d132442813425d29be44085edb4529b38b45fff8b118acb5db33885b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c954436d132442813425d29be44085edb4529b38b45fff8b118acb5db33885b->enter($__internal_9c954436d132442813425d29be44085edb4529b38b45fff8b118acb5db33885b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Suchergebnis</h1>
    </div>


    ";
        // line 11
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->getSourceContext()); })())) {
            // line 12
            echo "
    <div class=\"noLinesFound\">
        ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
            echo " <br>
    </div>

    ";
        }
        // line 18
        echo "




    ";
        // line 23
        if ((isset($context["vorschlag"]) || array_key_exists("vorschlag", $context) ? $context["vorschlag"] : (function () { throw new Twig_Error_Runtime('Variable "vorschlag" does not exist.', 23, $this->getSourceContext()); })())) {
            // line 24
            echo "
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vorschlag"]) || array_key_exists("vorschlag", $context) ? $context["vorschlag"] : (function () { throw new Twig_Error_Runtime('Variable "vorschlag" does not exist.', 25, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 26
                echo "
            <div class=\"trackerLine\">
                    <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array()))), "html", null, true);
                echo "\">
                        ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "user", array()), "html", null, true);
                echo "
                    </a>
            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
    ";
        }
        // line 36
        echo "












";
        
        $__internal_9c954436d132442813425d29be44085edb4529b38b45fff8b118acb5db33885b->leave($__internal_9c954436d132442813425d29be44085edb4529b38b45fff8b118acb5db33885b_prof);

        
        $__internal_902a762932b346bf74d6679d69c91a963e2fc4be84dd53411ed217a82451f7fd->leave($__internal_902a762932b346bf74d6679d69c91a963e2fc4be84dd53411ed217a82451f7fd_prof);

    }

    public function getTemplateName()
    {
        return "vorschlag.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  106 => 34,  95 => 29,  91 => 28,  87 => 26,  83 => 25,  80 => 24,  78 => 23,  71 => 18,  64 => 14,  60 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}


    <div class=\"page-header\">
        <h1 style=\"text-align: center;\">Suchergebnis</h1>
    </div>


    {% if error %}

    <div class=\"noLinesFound\">
        {{ error }} <br>
    </div>

    {% endif %}





    {% if vorschlag %}

        {% for user in vorschlag %}

            <div class=\"trackerLine\">
                    <a href=\"{{ path('profile', { name : user.user }) }}\">
                        {{ user.user }}
                    </a>
            </div>

        {% endfor %}

    {% endif %}













{% endblock %}", "vorschlag.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/templates/vorschlag.php.twig");
    }
}

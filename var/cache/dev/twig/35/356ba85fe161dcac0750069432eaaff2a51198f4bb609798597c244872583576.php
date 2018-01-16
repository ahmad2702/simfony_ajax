<?php

/* authentications/login_explicit.php.twig */
class __TwigTemplate_92b68ee999b3fac7e258e4685536a1ce166fa5b698efb5e75ba350576cabea45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.php.twig", "authentications/login_explicit.php.twig", 1);
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
        $__internal_cbb1a986450bc06df833c3e26e98a589e3f48426c1e4c9576608d0b5e5e9e3c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb1a986450bc06df833c3e26e98a589e3f48426c1e4c9576608d0b5e5e9e3c9->enter($__internal_cbb1a986450bc06df833c3e26e98a589e3f48426c1e4c9576608d0b5e5e9e3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login_explicit.php.twig"));

        $__internal_f09e322e8b331ed4295ce7d4c37938eec9e45b341102c4797435b54e535e6a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09e322e8b331ed4295ce7d4c37938eec9e45b341102c4797435b54e535e6a37->enter($__internal_f09e322e8b331ed4295ce7d4c37938eec9e45b341102c4797435b54e535e6a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentications/login_explicit.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbb1a986450bc06df833c3e26e98a589e3f48426c1e4c9576608d0b5e5e9e3c9->leave($__internal_cbb1a986450bc06df833c3e26e98a589e3f48426c1e4c9576608d0b5e5e9e3c9_prof);

        
        $__internal_f09e322e8b331ed4295ce7d4c37938eec9e45b341102c4797435b54e535e6a37->leave($__internal_f09e322e8b331ed4295ce7d4c37938eec9e45b341102c4797435b54e535e6a37_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_616674f85147fe7f6f2d01269f3712c681e794da93394bbf40a59f4249f0de83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616674f85147fe7f6f2d01269f3712c681e794da93394bbf40a59f4249f0de83->enter($__internal_616674f85147fe7f6f2d01269f3712c681e794da93394bbf40a59f4249f0de83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cee6097b10412547e67da83c0f9ce0305ab8dc7866412deab074e15dea16c0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee6097b10412547e67da83c0f9ce0305ab8dc7866412deab074e15dea16c0ba->enter($__internal_cee6097b10412547e67da83c0f9ce0305ab8dc7866412deab074e15dea16c0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    ";
        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "

    <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo " \" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"\"/>

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 23
        echo "
        <button type=\"submit\">login</button>
    </form>













";
        
        $__internal_cee6097b10412547e67da83c0f9ce0305ab8dc7866412deab074e15dea16c0ba->leave($__internal_cee6097b10412547e67da83c0f9ce0305ab8dc7866412deab074e15dea16c0ba_prof);

        
        $__internal_616674f85147fe7f6f2d01269f3712c681e794da93394bbf40a59f4249f0de83->leave($__internal_616674f85147fe7f6f2d01269f3712c681e794da93394bbf40a59f4249f0de83_prof);

    }

    public function getTemplateName()
    {
        return "authentications/login_explicit.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  65 => 11,  61 => 9,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.php.twig\" %}

{% block content %}


    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}


    <form action=\"{{ path('security_login') }} \" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"\"/>

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        {#
            If you want to control the URL the user
            is redirected to on success (more details below)
            <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
        #}

        <button type=\"submit\">login</button>
    </form>













{% endblock %}", "authentications/login_explicit.php.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/templates/authentications/login_explicit.php.twig");
    }
}

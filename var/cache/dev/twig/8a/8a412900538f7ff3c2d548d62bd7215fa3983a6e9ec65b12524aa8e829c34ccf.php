<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0499015d60673f2b3664922a9f949ff928dc151dd49886789bfcf67ba3004590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_792f762b159646f3ea979a4d8791a7fb72bb40cd923ae005dbac2a9dfca30662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792f762b159646f3ea979a4d8791a7fb72bb40cd923ae005dbac2a9dfca30662->enter($__internal_792f762b159646f3ea979a4d8791a7fb72bb40cd923ae005dbac2a9dfca30662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_dd5d4687778dd67815ba09ef45114ac5356988ba2fb968039d3d0e53e24d5db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5d4687778dd67815ba09ef45114ac5356988ba2fb968039d3d0e53e24d5db7->enter($__internal_dd5d4687778dd67815ba09ef45114ac5356988ba2fb968039d3d0e53e24d5db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_792f762b159646f3ea979a4d8791a7fb72bb40cd923ae005dbac2a9dfca30662->leave($__internal_792f762b159646f3ea979a4d8791a7fb72bb40cd923ae005dbac2a9dfca30662_prof);

        
        $__internal_dd5d4687778dd67815ba09ef45114ac5356988ba2fb968039d3d0e53e24d5db7->leave($__internal_dd5d4687778dd67815ba09ef45114ac5356988ba2fb968039d3d0e53e24d5db7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_53f24a26031a5fba31a9e0d6b5b3fd69c9913b8a705d32f5f4b6a62b2c023f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f24a26031a5fba31a9e0d6b5b3fd69c9913b8a705d32f5f4b6a62b2c023f54->enter($__internal_53f24a26031a5fba31a9e0d6b5b3fd69c9913b8a705d32f5f4b6a62b2c023f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e08e2ca06fdefe4b360180c73d9db854705ef1980e2740a0a055e88f037cf513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08e2ca06fdefe4b360180c73d9db854705ef1980e2740a0a055e88f037cf513->enter($__internal_e08e2ca06fdefe4b360180c73d9db854705ef1980e2740a0a055e88f037cf513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e08e2ca06fdefe4b360180c73d9db854705ef1980e2740a0a055e88f037cf513->leave($__internal_e08e2ca06fdefe4b360180c73d9db854705ef1980e2740a0a055e88f037cf513_prof);

        
        $__internal_53f24a26031a5fba31a9e0d6b5b3fd69c9913b8a705d32f5f4b6a62b2c023f54->leave($__internal_53f24a26031a5fba31a9e0d6b5b3fd69c9913b8a705d32f5f4b6a62b2c023f54_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6fa639294bb24338549a729e59a6bd21e1d13de6f15bf61de72bceac09094ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa639294bb24338549a729e59a6bd21e1d13de6f15bf61de72bceac09094ad8->enter($__internal_6fa639294bb24338549a729e59a6bd21e1d13de6f15bf61de72bceac09094ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d64216514e3f50f2434db3e2ebb965c889303993ae484bd9278ba269263501b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64216514e3f50f2434db3e2ebb965c889303993ae484bd9278ba269263501b7->enter($__internal_d64216514e3f50f2434db3e2ebb965c889303993ae484bd9278ba269263501b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d64216514e3f50f2434db3e2ebb965c889303993ae484bd9278ba269263501b7->leave($__internal_d64216514e3f50f2434db3e2ebb965c889303993ae484bd9278ba269263501b7_prof);

        
        $__internal_6fa639294bb24338549a729e59a6bd21e1d13de6f15bf61de72bceac09094ad8->leave($__internal_6fa639294bb24338549a729e59a6bd21e1d13de6f15bf61de72bceac09094ad8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8395413d91d52f2fbe78181bfb771f860e60d47375735f6971064c20eb2ea656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8395413d91d52f2fbe78181bfb771f860e60d47375735f6971064c20eb2ea656->enter($__internal_8395413d91d52f2fbe78181bfb771f860e60d47375735f6971064c20eb2ea656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e0c08c67f90baa695e816d0623455e48b0bbca2f11005dda2ce1cd7cd18cf2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c08c67f90baa695e816d0623455e48b0bbca2f11005dda2ce1cd7cd18cf2c3->enter($__internal_e0c08c67f90baa695e816d0623455e48b0bbca2f11005dda2ce1cd7cd18cf2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e0c08c67f90baa695e816d0623455e48b0bbca2f11005dda2ce1cd7cd18cf2c3->leave($__internal_e0c08c67f90baa695e816d0623455e48b0bbca2f11005dda2ce1cd7cd18cf2c3_prof);

        
        $__internal_8395413d91d52f2fbe78181bfb771f860e60d47375735f6971064c20eb2ea656->leave($__internal_8395413d91d52f2fbe78181bfb771f860e60d47375735f6971064c20eb2ea656_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}

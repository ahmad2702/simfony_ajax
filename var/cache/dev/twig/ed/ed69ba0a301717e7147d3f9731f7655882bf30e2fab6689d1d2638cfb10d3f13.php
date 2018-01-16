<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_55fad747edc362841d89513991e6545dc74aa493beba76d471180c93cf5c9834 extends Twig_Template
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
        $__internal_e19634023271be37a602ed5a43ad013080980ef41457b16609ff4d6cee639643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19634023271be37a602ed5a43ad013080980ef41457b16609ff4d6cee639643->enter($__internal_e19634023271be37a602ed5a43ad013080980ef41457b16609ff4d6cee639643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_b92cb4310fdb1eebb8d9127ae62d29dabd7ba71d036bca824cbfa5800e4a2969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92cb4310fdb1eebb8d9127ae62d29dabd7ba71d036bca824cbfa5800e4a2969->enter($__internal_b92cb4310fdb1eebb8d9127ae62d29dabd7ba71d036bca824cbfa5800e4a2969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_e19634023271be37a602ed5a43ad013080980ef41457b16609ff4d6cee639643->leave($__internal_e19634023271be37a602ed5a43ad013080980ef41457b16609ff4d6cee639643_prof);

        
        $__internal_b92cb4310fdb1eebb8d9127ae62d29dabd7ba71d036bca824cbfa5800e4a2969->leave($__internal_b92cb4310fdb1eebb8d9127ae62d29dabd7ba71d036bca824cbfa5800e4a2969_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}

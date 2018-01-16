<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_2711bdcac8c8a350b4de8eedfaf507c388094e3aaf4f1bc883d1e716eec36b81 extends Twig_Template
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
        $__internal_51569ce6cbe4fa4b447190cd29511ad0146feceeeba829eb8dfd9058a437c839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51569ce6cbe4fa4b447190cd29511ad0146feceeeba829eb8dfd9058a437c839->enter($__internal_51569ce6cbe4fa4b447190cd29511ad0146feceeeba829eb8dfd9058a437c839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_88763883f53bead2344f069c8f72ec6473b272ceed0d136763e3cd7dfcd30f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88763883f53bead2344f069c8f72ec6473b272ceed0d136763e3cd7dfcd30f9f->enter($__internal_88763883f53bead2344f069c8f72ec6473b272ceed0d136763e3cd7dfcd30f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_51569ce6cbe4fa4b447190cd29511ad0146feceeeba829eb8dfd9058a437c839->leave($__internal_51569ce6cbe4fa4b447190cd29511ad0146feceeeba829eb8dfd9058a437c839_prof);

        
        $__internal_88763883f53bead2344f069c8f72ec6473b272ceed0d136763e3cd7dfcd30f9f->leave($__internal_88763883f53bead2344f069c8f72ec6473b272ceed0d136763e3cd7dfcd30f9f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}

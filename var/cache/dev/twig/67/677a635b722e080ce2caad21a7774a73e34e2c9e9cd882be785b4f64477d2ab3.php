<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_0a1994abaea4c5ef21dfb301d07edba09b17c743f6f1b8801487b9b905d08ece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab053e0c857cdecabf0559b15fa98d3b80021a4c018224d55aec63b23f9cce7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab053e0c857cdecabf0559b15fa98d3b80021a4c018224d55aec63b23f9cce7a->enter($__internal_ab053e0c857cdecabf0559b15fa98d3b80021a4c018224d55aec63b23f9cce7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_17952a6d5b0e07d330be10655ace33f67f74afa01cfbc7fdd5e2ce903aacd30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17952a6d5b0e07d330be10655ace33f67f74afa01cfbc7fdd5e2ce903aacd30b->enter($__internal_17952a6d5b0e07d330be10655ace33f67f74afa01cfbc7fdd5e2ce903aacd30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab053e0c857cdecabf0559b15fa98d3b80021a4c018224d55aec63b23f9cce7a->leave($__internal_ab053e0c857cdecabf0559b15fa98d3b80021a4c018224d55aec63b23f9cce7a_prof);

        
        $__internal_17952a6d5b0e07d330be10655ace33f67f74afa01cfbc7fdd5e2ce903aacd30b->leave($__internal_17952a6d5b0e07d330be10655ace33f67f74afa01cfbc7fdd5e2ce903aacd30b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64e2fbdb959432c11d429d241224d3d27d5279ffd4970475fa252d3f95474c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e2fbdb959432c11d429d241224d3d27d5279ffd4970475fa252d3f95474c1d->enter($__internal_64e2fbdb959432c11d429d241224d3d27d5279ffd4970475fa252d3f95474c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c80e4fda3f5c11ce007ab6396f5e87b69f5e7186c3e5d44b7ea48b24a1909b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80e4fda3f5c11ce007ab6396f5e87b69f5e7186c3e5d44b7ea48b24a1909b5a->enter($__internal_c80e4fda3f5c11ce007ab6396f5e87b69f5e7186c3e5d44b7ea48b24a1909b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c80e4fda3f5c11ce007ab6396f5e87b69f5e7186c3e5d44b7ea48b24a1909b5a->leave($__internal_c80e4fda3f5c11ce007ab6396f5e87b69f5e7186c3e5d44b7ea48b24a1909b5a_prof);

        
        $__internal_64e2fbdb959432c11d429d241224d3d27d5279ffd4970475fa252d3f95474c1d->leave($__internal_64e2fbdb959432c11d429d241224d3d27d5279ffd4970475fa252d3f95474c1d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}

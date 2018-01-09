<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9ddecaa29831464a8febfbe338c1772e6740aa1440c2bdf2c65ab188f8ab9253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a565d1b9b452fb56e59a5ac286dab2314f9c4545379539d430edf2d21c7599f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a565d1b9b452fb56e59a5ac286dab2314f9c4545379539d430edf2d21c7599f->enter($__internal_4a565d1b9b452fb56e59a5ac286dab2314f9c4545379539d430edf2d21c7599f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_057f970eeb42b1a80ae8c4845fa52e02d180ba674047c0a58a4828e13a466157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057f970eeb42b1a80ae8c4845fa52e02d180ba674047c0a58a4828e13a466157->enter($__internal_057f970eeb42b1a80ae8c4845fa52e02d180ba674047c0a58a4828e13a466157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_4a565d1b9b452fb56e59a5ac286dab2314f9c4545379539d430edf2d21c7599f->leave($__internal_4a565d1b9b452fb56e59a5ac286dab2314f9c4545379539d430edf2d21c7599f_prof);

        
        $__internal_057f970eeb42b1a80ae8c4845fa52e02d180ba674047c0a58a4828e13a466157->leave($__internal_057f970eeb42b1a80ae8c4845fa52e02d180ba674047c0a58a4828e13a466157_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_40eed15f3d28d120d4c82da78e72023a7fa013755d07c5d4854b8888f7e3d458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40eed15f3d28d120d4c82da78e72023a7fa013755d07c5d4854b8888f7e3d458->enter($__internal_40eed15f3d28d120d4c82da78e72023a7fa013755d07c5d4854b8888f7e3d458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_900b7505ac0c76930e2b70a1237c30d7481f3ae5514e517beeca496bb441a20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900b7505ac0c76930e2b70a1237c30d7481f3ae5514e517beeca496bb441a20f->enter($__internal_900b7505ac0c76930e2b70a1237c30d7481f3ae5514e517beeca496bb441a20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_900b7505ac0c76930e2b70a1237c30d7481f3ae5514e517beeca496bb441a20f->leave($__internal_900b7505ac0c76930e2b70a1237c30d7481f3ae5514e517beeca496bb441a20f_prof);

        
        $__internal_40eed15f3d28d120d4c82da78e72023a7fa013755d07c5d4854b8888f7e3d458->leave($__internal_40eed15f3d28d120d4c82da78e72023a7fa013755d07c5d4854b8888f7e3d458_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c85ae204a36167fb678c80cfccb32c6bf71405c0614006c5398ed8bdf07522b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c85ae204a36167fb678c80cfccb32c6bf71405c0614006c5398ed8bdf07522b->enter($__internal_1c85ae204a36167fb678c80cfccb32c6bf71405c0614006c5398ed8bdf07522b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_80c36cc17dd71bf82ab90ecfc26f8f92f79e4bd5e201e1e68077cf0bf04abf95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c36cc17dd71bf82ab90ecfc26f8f92f79e4bd5e201e1e68077cf0bf04abf95->enter($__internal_80c36cc17dd71bf82ab90ecfc26f8f92f79e4bd5e201e1e68077cf0bf04abf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_80c36cc17dd71bf82ab90ecfc26f8f92f79e4bd5e201e1e68077cf0bf04abf95->leave($__internal_80c36cc17dd71bf82ab90ecfc26f8f92f79e4bd5e201e1e68077cf0bf04abf95_prof);

        
        $__internal_1c85ae204a36167fb678c80cfccb32c6bf71405c0614006c5398ed8bdf07522b->leave($__internal_1c85ae204a36167fb678c80cfccb32c6bf71405c0614006c5398ed8bdf07522b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_724ba9498de5567a3cf0e27523809d97a9abedb70ce26720cbd1d10db87a693f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724ba9498de5567a3cf0e27523809d97a9abedb70ce26720cbd1d10db87a693f->enter($__internal_724ba9498de5567a3cf0e27523809d97a9abedb70ce26720cbd1d10db87a693f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f8f9a0650476af4ee505bba436613d196c3a09c46c36af8f6eaafc1a42c9c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8f9a0650476af4ee505bba436613d196c3a09c46c36af8f6eaafc1a42c9c6b->enter($__internal_5f8f9a0650476af4ee505bba436613d196c3a09c46c36af8f6eaafc1a42c9c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5f8f9a0650476af4ee505bba436613d196c3a09c46c36af8f6eaafc1a42c9c6b->leave($__internal_5f8f9a0650476af4ee505bba436613d196c3a09c46c36af8f6eaafc1a42c9c6b_prof);

        
        $__internal_724ba9498de5567a3cf0e27523809d97a9abedb70ce26720cbd1d10db87a693f->leave($__internal_724ba9498de5567a3cf0e27523809d97a9abedb70ce26720cbd1d10db87a693f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/akhmad.sadullaev/NetBeansProjects/WebEntwickung/aufgabe7/simfony_ajax/simfony_ajax/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}

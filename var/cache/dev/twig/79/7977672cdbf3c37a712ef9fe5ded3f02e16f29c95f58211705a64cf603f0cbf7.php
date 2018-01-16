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
        $__internal_90f08b5da874c66589c0c5a7d6a56387c0b76469d64b6e44a464730951f28c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f08b5da874c66589c0c5a7d6a56387c0b76469d64b6e44a464730951f28c1e->enter($__internal_90f08b5da874c66589c0c5a7d6a56387c0b76469d64b6e44a464730951f28c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4d2ab963a4aea54e4e0a1278589d10719325b420d357492d7fa5f80f48307bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2ab963a4aea54e4e0a1278589d10719325b420d357492d7fa5f80f48307bae->enter($__internal_4d2ab963a4aea54e4e0a1278589d10719325b420d357492d7fa5f80f48307bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_90f08b5da874c66589c0c5a7d6a56387c0b76469d64b6e44a464730951f28c1e->leave($__internal_90f08b5da874c66589c0c5a7d6a56387c0b76469d64b6e44a464730951f28c1e_prof);

        
        $__internal_4d2ab963a4aea54e4e0a1278589d10719325b420d357492d7fa5f80f48307bae->leave($__internal_4d2ab963a4aea54e4e0a1278589d10719325b420d357492d7fa5f80f48307bae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_22b07cebec30247927cdadc4cd4306bab35afe9abac27d11c9cc6326bdb5fd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b07cebec30247927cdadc4cd4306bab35afe9abac27d11c9cc6326bdb5fd8b->enter($__internal_22b07cebec30247927cdadc4cd4306bab35afe9abac27d11c9cc6326bdb5fd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e4698237dfd834b060f9c50baf83163ba1f7c685880e621dc78e98fbde2080c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4698237dfd834b060f9c50baf83163ba1f7c685880e621dc78e98fbde2080c->enter($__internal_7e4698237dfd834b060f9c50baf83163ba1f7c685880e621dc78e98fbde2080c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7e4698237dfd834b060f9c50baf83163ba1f7c685880e621dc78e98fbde2080c->leave($__internal_7e4698237dfd834b060f9c50baf83163ba1f7c685880e621dc78e98fbde2080c_prof);

        
        $__internal_22b07cebec30247927cdadc4cd4306bab35afe9abac27d11c9cc6326bdb5fd8b->leave($__internal_22b07cebec30247927cdadc4cd4306bab35afe9abac27d11c9cc6326bdb5fd8b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_242a4782c61351d13529fd831f1d53b98adbe2070e8900807dd6c469766b26d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242a4782c61351d13529fd831f1d53b98adbe2070e8900807dd6c469766b26d1->enter($__internal_242a4782c61351d13529fd831f1d53b98adbe2070e8900807dd6c469766b26d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_16931098eab3d7d9722c1dced5c3d43cc8ba8f0a7610a85613b7daab21e9f7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16931098eab3d7d9722c1dced5c3d43cc8ba8f0a7610a85613b7daab21e9f7e9->enter($__internal_16931098eab3d7d9722c1dced5c3d43cc8ba8f0a7610a85613b7daab21e9f7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_16931098eab3d7d9722c1dced5c3d43cc8ba8f0a7610a85613b7daab21e9f7e9->leave($__internal_16931098eab3d7d9722c1dced5c3d43cc8ba8f0a7610a85613b7daab21e9f7e9_prof);

        
        $__internal_242a4782c61351d13529fd831f1d53b98adbe2070e8900807dd6c469766b26d1->leave($__internal_242a4782c61351d13529fd831f1d53b98adbe2070e8900807dd6c469766b26d1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_80f9f9f78abc1f7b7279d0f2a1697317c79d58af8737d315b3e80557ae4d4fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f9f9f78abc1f7b7279d0f2a1697317c79d58af8737d315b3e80557ae4d4fd3->enter($__internal_80f9f9f78abc1f7b7279d0f2a1697317c79d58af8737d315b3e80557ae4d4fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a703636137506b78031581885e5cb184d01707075396377a72764fff906c2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a703636137506b78031581885e5cb184d01707075396377a72764fff906c2f7->enter($__internal_1a703636137506b78031581885e5cb184d01707075396377a72764fff906c2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1a703636137506b78031581885e5cb184d01707075396377a72764fff906c2f7->leave($__internal_1a703636137506b78031581885e5cb184d01707075396377a72764fff906c2f7_prof);

        
        $__internal_80f9f9f78abc1f7b7279d0f2a1697317c79d58af8737d315b3e80557ae4d4fd3->leave($__internal_80f9f9f78abc1f7b7279d0f2a1697317c79d58af8737d315b3e80557ae4d4fd3_prof);

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

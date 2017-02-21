<?php

/* base.html.twig */
class __TwigTemplate_6529893593af1e71ea103b33721ce554e83d841cfe884088e23ffb37dbdda3c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_493b94273dfa0065cd00479052463f6f0e517d1b8972b749782f21ab6cd63ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493b94273dfa0065cd00479052463f6f0e517d1b8972b749782f21ab6cd63ebe->enter($__internal_493b94273dfa0065cd00479052463f6f0e517d1b8972b749782f21ab6cd63ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1c182be2ae7bdc8a2cc0690b36e619d5d6ff59c5bd2c2f4d7db2f1be6d9d7678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c182be2ae7bdc8a2cc0690b36e619d5d6ff59c5bd2c2f4d7db2f1be6d9d7678->enter($__internal_1c182be2ae7bdc8a2cc0690b36e619d5d6ff59c5bd2c2f4d7db2f1be6d9d7678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_493b94273dfa0065cd00479052463f6f0e517d1b8972b749782f21ab6cd63ebe->leave($__internal_493b94273dfa0065cd00479052463f6f0e517d1b8972b749782f21ab6cd63ebe_prof);

        
        $__internal_1c182be2ae7bdc8a2cc0690b36e619d5d6ff59c5bd2c2f4d7db2f1be6d9d7678->leave($__internal_1c182be2ae7bdc8a2cc0690b36e619d5d6ff59c5bd2c2f4d7db2f1be6d9d7678_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ba86b269482ca9f34aa2b9d258df0553327f3d5066175c140b26512dccc567b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba86b269482ca9f34aa2b9d258df0553327f3d5066175c140b26512dccc567b->enter($__internal_0ba86b269482ca9f34aa2b9d258df0553327f3d5066175c140b26512dccc567b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03e502ed2f2dcf8990ae7a0946d75947c30444e738ea256cf3fce5e22a4379b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e502ed2f2dcf8990ae7a0946d75947c30444e738ea256cf3fce5e22a4379b6->enter($__internal_03e502ed2f2dcf8990ae7a0946d75947c30444e738ea256cf3fce5e22a4379b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_03e502ed2f2dcf8990ae7a0946d75947c30444e738ea256cf3fce5e22a4379b6->leave($__internal_03e502ed2f2dcf8990ae7a0946d75947c30444e738ea256cf3fce5e22a4379b6_prof);

        
        $__internal_0ba86b269482ca9f34aa2b9d258df0553327f3d5066175c140b26512dccc567b->leave($__internal_0ba86b269482ca9f34aa2b9d258df0553327f3d5066175c140b26512dccc567b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b92d7273aed2a3e2ca5ebef75aeb28a2b4f0ffa80992fb5016308c48ba6d289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b92d7273aed2a3e2ca5ebef75aeb28a2b4f0ffa80992fb5016308c48ba6d289->enter($__internal_7b92d7273aed2a3e2ca5ebef75aeb28a2b4f0ffa80992fb5016308c48ba6d289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3a58880a774ebe50cc89aa7d173b3f03e50f2ae7be826d22b602d389e929cbe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a58880a774ebe50cc89aa7d173b3f03e50f2ae7be826d22b602d389e929cbe5->enter($__internal_3a58880a774ebe50cc89aa7d173b3f03e50f2ae7be826d22b602d389e929cbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3a58880a774ebe50cc89aa7d173b3f03e50f2ae7be826d22b602d389e929cbe5->leave($__internal_3a58880a774ebe50cc89aa7d173b3f03e50f2ae7be826d22b602d389e929cbe5_prof);

        
        $__internal_7b92d7273aed2a3e2ca5ebef75aeb28a2b4f0ffa80992fb5016308c48ba6d289->leave($__internal_7b92d7273aed2a3e2ca5ebef75aeb28a2b4f0ffa80992fb5016308c48ba6d289_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5105ddc1e9273c7adb6ed44a9b34c1cc7aae02125cc034fdddd9990dfc456993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5105ddc1e9273c7adb6ed44a9b34c1cc7aae02125cc034fdddd9990dfc456993->enter($__internal_5105ddc1e9273c7adb6ed44a9b34c1cc7aae02125cc034fdddd9990dfc456993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cdbbf09ad5f4af4667d8e6b24fd22c0044f5a6e588259d9d9478a97c6b506467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbbf09ad5f4af4667d8e6b24fd22c0044f5a6e588259d9d9478a97c6b506467->enter($__internal_cdbbf09ad5f4af4667d8e6b24fd22c0044f5a6e588259d9d9478a97c6b506467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cdbbf09ad5f4af4667d8e6b24fd22c0044f5a6e588259d9d9478a97c6b506467->leave($__internal_cdbbf09ad5f4af4667d8e6b24fd22c0044f5a6e588259d9d9478a97c6b506467_prof);

        
        $__internal_5105ddc1e9273c7adb6ed44a9b34c1cc7aae02125cc034fdddd9990dfc456993->leave($__internal_5105ddc1e9273c7adb6ed44a9b34c1cc7aae02125cc034fdddd9990dfc456993_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9093dbc9280cedfd503af5d82285d12136442c3d403955e2b80b2ff84de928a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9093dbc9280cedfd503af5d82285d12136442c3d403955e2b80b2ff84de928a1->enter($__internal_9093dbc9280cedfd503af5d82285d12136442c3d403955e2b80b2ff84de928a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_25816cf0f327b24fbae42634944f747ba74adffdf266af3a80e646d9ec4dcebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25816cf0f327b24fbae42634944f747ba74adffdf266af3a80e646d9ec4dcebc->enter($__internal_25816cf0f327b24fbae42634944f747ba74adffdf266af3a80e646d9ec4dcebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_25816cf0f327b24fbae42634944f747ba74adffdf266af3a80e646d9ec4dcebc->leave($__internal_25816cf0f327b24fbae42634944f747ba74adffdf266af3a80e646d9ec4dcebc_prof);

        
        $__internal_9093dbc9280cedfd503af5d82285d12136442c3d403955e2b80b2ff84de928a1->leave($__internal_9093dbc9280cedfd503af5d82285d12136442c3d403955e2b80b2ff84de928a1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/hom/app/Resources/views/base.html.twig");
    }
}

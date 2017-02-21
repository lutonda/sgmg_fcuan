<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_7b7515ea65ce5fd2c2cf2350b14c109004010eac7ab979815bb0c51c44ed4072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_981fd6731269df431de7a11455018f2e8c6b2cb44bf00f605704545e87edae83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981fd6731269df431de7a11455018f2e8c6b2cb44bf00f605704545e87edae83->enter($__internal_981fd6731269df431de7a11455018f2e8c6b2cb44bf00f605704545e87edae83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_9ae28152e9892c6e76e45516fc15dd793deffe2e46e54e13d6f1a401efbc478a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae28152e9892c6e76e45516fc15dd793deffe2e46e54e13d6f1a401efbc478a->enter($__internal_9ae28152e9892c6e76e45516fc15dd793deffe2e46e54e13d6f1a401efbc478a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_981fd6731269df431de7a11455018f2e8c6b2cb44bf00f605704545e87edae83->leave($__internal_981fd6731269df431de7a11455018f2e8c6b2cb44bf00f605704545e87edae83_prof);

        
        $__internal_9ae28152e9892c6e76e45516fc15dd793deffe2e46e54e13d6f1a401efbc478a->leave($__internal_9ae28152e9892c6e76e45516fc15dd793deffe2e46e54e13d6f1a401efbc478a_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8cbd8464be5193549e6d7628a8527d329bfa7653c85fd8829e17b39d68cecf4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cbd8464be5193549e6d7628a8527d329bfa7653c85fd8829e17b39d68cecf4a->enter($__internal_8cbd8464be5193549e6d7628a8527d329bfa7653c85fd8829e17b39d68cecf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_01790687c8b2f0199cc2661646660234e35cf9377aac8dfd457a8d5360b9f7a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01790687c8b2f0199cc2661646660234e35cf9377aac8dfd457a8d5360b9f7a8->enter($__internal_01790687c8b2f0199cc2661646660234e35cf9377aac8dfd457a8d5360b9f7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_01790687c8b2f0199cc2661646660234e35cf9377aac8dfd457a8d5360b9f7a8->leave($__internal_01790687c8b2f0199cc2661646660234e35cf9377aac8dfd457a8d5360b9f7a8_prof);

        
        $__internal_8cbd8464be5193549e6d7628a8527d329bfa7653c85fd8829e17b39d68cecf4a->leave($__internal_8cbd8464be5193549e6d7628a8527d329bfa7653c85fd8829e17b39d68cecf4a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56798ca434715801b66da97f4fec47513902210648f6b02acc27385a6d5333be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56798ca434715801b66da97f4fec47513902210648f6b02acc27385a6d5333be->enter($__internal_56798ca434715801b66da97f4fec47513902210648f6b02acc27385a6d5333be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_06a0ee2c940170c4a358cf3626d27ddef947c95305a217ef5cad0fea1603308d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a0ee2c940170c4a358cf3626d27ddef947c95305a217ef5cad0fea1603308d->enter($__internal_06a0ee2c940170c4a358cf3626d27ddef947c95305a217ef5cad0fea1603308d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_06a0ee2c940170c4a358cf3626d27ddef947c95305a217ef5cad0fea1603308d->leave($__internal_06a0ee2c940170c4a358cf3626d27ddef947c95305a217ef5cad0fea1603308d_prof);

        
        $__internal_56798ca434715801b66da97f4fec47513902210648f6b02acc27385a6d5333be->leave($__internal_56798ca434715801b66da97f4fec47513902210648f6b02acc27385a6d5333be_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

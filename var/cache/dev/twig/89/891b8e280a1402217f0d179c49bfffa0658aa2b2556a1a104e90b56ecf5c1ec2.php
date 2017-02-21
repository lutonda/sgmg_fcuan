<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4374d80b1c28ea19892f9ca61b7421b8737ebfe7eaa7c9c830615e313086e4b7 extends Twig_Template
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
        $__internal_a2849934638e03e70f503843aaaa8dbc501108beb40dcaa540f31809270f4d06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2849934638e03e70f503843aaaa8dbc501108beb40dcaa540f31809270f4d06->enter($__internal_a2849934638e03e70f503843aaaa8dbc501108beb40dcaa540f31809270f4d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f37d0fbc9b2c1247d9274e224a1709ef2f9c6f1866433f57b1155b12fd57a780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37d0fbc9b2c1247d9274e224a1709ef2f9c6f1866433f57b1155b12fd57a780->enter($__internal_f37d0fbc9b2c1247d9274e224a1709ef2f9c6f1866433f57b1155b12fd57a780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2849934638e03e70f503843aaaa8dbc501108beb40dcaa540f31809270f4d06->leave($__internal_a2849934638e03e70f503843aaaa8dbc501108beb40dcaa540f31809270f4d06_prof);

        
        $__internal_f37d0fbc9b2c1247d9274e224a1709ef2f9c6f1866433f57b1155b12fd57a780->leave($__internal_f37d0fbc9b2c1247d9274e224a1709ef2f9c6f1866433f57b1155b12fd57a780_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8dfe31810a0ce05997edf499ec89a2e592aec68faee347ca2e1be0e5e39dc479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dfe31810a0ce05997edf499ec89a2e592aec68faee347ca2e1be0e5e39dc479->enter($__internal_8dfe31810a0ce05997edf499ec89a2e592aec68faee347ca2e1be0e5e39dc479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4adb346f020b07e9dfa9775044ab93f54a49f10f5e827c25683cc69f9644342b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4adb346f020b07e9dfa9775044ab93f54a49f10f5e827c25683cc69f9644342b->enter($__internal_4adb346f020b07e9dfa9775044ab93f54a49f10f5e827c25683cc69f9644342b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
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
        
        $__internal_4adb346f020b07e9dfa9775044ab93f54a49f10f5e827c25683cc69f9644342b->leave($__internal_4adb346f020b07e9dfa9775044ab93f54a49f10f5e827c25683cc69f9644342b_prof);

        
        $__internal_8dfe31810a0ce05997edf499ec89a2e592aec68faee347ca2e1be0e5e39dc479->leave($__internal_8dfe31810a0ce05997edf499ec89a2e592aec68faee347ca2e1be0e5e39dc479_prof);

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
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

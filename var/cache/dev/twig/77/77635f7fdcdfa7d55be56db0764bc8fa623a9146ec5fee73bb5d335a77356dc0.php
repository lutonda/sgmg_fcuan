<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_fe30b528d3a03ed938d0e2d77dc666efa98a858d9aece164504762dc56e42f35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14a660ec99037a0ba88feca867ff59aa79e1b669e70665623c874899f648d448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a660ec99037a0ba88feca867ff59aa79e1b669e70665623c874899f648d448->enter($__internal_14a660ec99037a0ba88feca867ff59aa79e1b669e70665623c874899f648d448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_b685e9b38c7326f1214523c6a8db50c56390f285a7ad1f62ddb2238c7fb6157e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b685e9b38c7326f1214523c6a8db50c56390f285a7ad1f62ddb2238c7fb6157e->enter($__internal_b685e9b38c7326f1214523c6a8db50c56390f285a7ad1f62ddb2238c7fb6157e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14a660ec99037a0ba88feca867ff59aa79e1b669e70665623c874899f648d448->leave($__internal_14a660ec99037a0ba88feca867ff59aa79e1b669e70665623c874899f648d448_prof);

        
        $__internal_b685e9b38c7326f1214523c6a8db50c56390f285a7ad1f62ddb2238c7fb6157e->leave($__internal_b685e9b38c7326f1214523c6a8db50c56390f285a7ad1f62ddb2238c7fb6157e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_541bc291165a4b4d00bd4b7a7c9d290790a39d15a59c8da7d25678df4a40920e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541bc291165a4b4d00bd4b7a7c9d290790a39d15a59c8da7d25678df4a40920e->enter($__internal_541bc291165a4b4d00bd4b7a7c9d290790a39d15a59c8da7d25678df4a40920e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_322873ec3ad46099c140fd4a582d6b9c734af2b854cb0a496e29c875d497db3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322873ec3ad46099c140fd4a582d6b9c734af2b854cb0a496e29c875d497db3c->enter($__internal_322873ec3ad46099c140fd4a582d6b9c734af2b854cb0a496e29c875d497db3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_322873ec3ad46099c140fd4a582d6b9c734af2b854cb0a496e29c875d497db3c->leave($__internal_322873ec3ad46099c140fd4a582d6b9c734af2b854cb0a496e29c875d497db3c_prof);

        
        $__internal_541bc291165a4b4d00bd4b7a7c9d290790a39d15a59c8da7d25678df4a40920e->leave($__internal_541bc291165a4b4d00bd4b7a7c9d290790a39d15a59c8da7d25678df4a40920e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1ab71495ff07ebeceb3432db810f416573bd87681d2bd263d2aa7c23ea0e123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ab71495ff07ebeceb3432db810f416573bd87681d2bd263d2aa7c23ea0e123->enter($__internal_f1ab71495ff07ebeceb3432db810f416573bd87681d2bd263d2aa7c23ea0e123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2926a7672560c70ebb28a41be6842e6b941573b4e7bf7b32d9f50bef6a059c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2926a7672560c70ebb28a41be6842e6b941573b4e7bf7b32d9f50bef6a059c2f->enter($__internal_2926a7672560c70ebb28a41be6842e6b941573b4e7bf7b32d9f50bef6a059c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_2926a7672560c70ebb28a41be6842e6b941573b4e7bf7b32d9f50bef6a059c2f->leave($__internal_2926a7672560c70ebb28a41be6842e6b941573b4e7bf7b32d9f50bef6a059c2f_prof);

        
        $__internal_f1ab71495ff07ebeceb3432db810f416573bd87681d2bd263d2aa7c23ea0e123->leave($__internal_f1ab71495ff07ebeceb3432db810f416573bd87681d2bd263d2aa7c23ea0e123_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

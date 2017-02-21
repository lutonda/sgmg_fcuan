<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_3ab0db22834e39d41d78062cb9c8a9cb9731436a0dc6608a8be447376900f6bb extends Twig_Template
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
        $__internal_da46e72fa96fd2db4c997fcfd97b64318499e16597a40aefe3e2ab8fed22d3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da46e72fa96fd2db4c997fcfd97b64318499e16597a40aefe3e2ab8fed22d3d0->enter($__internal_da46e72fa96fd2db4c997fcfd97b64318499e16597a40aefe3e2ab8fed22d3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_a9b7b057d832ffb565e3ab1e73c0747fb9c7c38002000885468dbbaa708bd6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b7b057d832ffb565e3ab1e73c0747fb9c7c38002000885468dbbaa708bd6cb->enter($__internal_a9b7b057d832ffb565e3ab1e73c0747fb9c7c38002000885468dbbaa708bd6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_da46e72fa96fd2db4c997fcfd97b64318499e16597a40aefe3e2ab8fed22d3d0->leave($__internal_da46e72fa96fd2db4c997fcfd97b64318499e16597a40aefe3e2ab8fed22d3d0_prof);

        
        $__internal_a9b7b057d832ffb565e3ab1e73c0747fb9c7c38002000885468dbbaa708bd6cb->leave($__internal_a9b7b057d832ffb565e3ab1e73c0747fb9c7c38002000885468dbbaa708bd6cb_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}

<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_487981bf662ed4082231ba7d604437b178e370e6681feecfa1be186f27716e5f extends Twig_Template
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
        $__internal_d504fa491c118d5a8c3787233187327ade8d844919e25fff1b4712c34011e3ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d504fa491c118d5a8c3787233187327ade8d844919e25fff1b4712c34011e3ea->enter($__internal_d504fa491c118d5a8c3787233187327ade8d844919e25fff1b4712c34011e3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f26ea389d1feec0161b22e18b7739f050690275598526d177cdda5809ec9ce49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26ea389d1feec0161b22e18b7739f050690275598526d177cdda5809ec9ce49->enter($__internal_f26ea389d1feec0161b22e18b7739f050690275598526d177cdda5809ec9ce49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_d504fa491c118d5a8c3787233187327ade8d844919e25fff1b4712c34011e3ea->leave($__internal_d504fa491c118d5a8c3787233187327ade8d844919e25fff1b4712c34011e3ea_prof);

        
        $__internal_f26ea389d1feec0161b22e18b7739f050690275598526d177cdda5809ec9ce49->leave($__internal_f26ea389d1feec0161b22e18b7739f050690275598526d177cdda5809ec9ce49_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

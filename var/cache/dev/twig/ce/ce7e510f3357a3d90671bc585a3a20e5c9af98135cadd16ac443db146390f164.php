<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_29b35248b9b4381e149ccd80e886508fe98b4d62b9531e6f10a530f76acd409d extends Twig_Template
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
        $__internal_ca527823b69cc6a28d960ac8528f70ea49e4dc796dbba69ef21063371c5f0297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca527823b69cc6a28d960ac8528f70ea49e4dc796dbba69ef21063371c5f0297->enter($__internal_ca527823b69cc6a28d960ac8528f70ea49e4dc796dbba69ef21063371c5f0297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_005066b7a9f3f892a9702a62729c18d5642d48b47d4bd046c08ef57f5bad8984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005066b7a9f3f892a9702a62729c18d5642d48b47d4bd046c08ef57f5bad8984->enter($__internal_005066b7a9f3f892a9702a62729c18d5642d48b47d4bd046c08ef57f5bad8984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_ca527823b69cc6a28d960ac8528f70ea49e4dc796dbba69ef21063371c5f0297->leave($__internal_ca527823b69cc6a28d960ac8528f70ea49e4dc796dbba69ef21063371c5f0297_prof);

        
        $__internal_005066b7a9f3f892a9702a62729c18d5642d48b47d4bd046c08ef57f5bad8984->leave($__internal_005066b7a9f3f892a9702a62729c18d5642d48b47d4bd046c08ef57f5bad8984_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}

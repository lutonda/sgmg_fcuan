<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_9e456e542bb6cc25c538375f79d3167c12d27fc4f3b4531eabd8a1440eb8ad14 extends Twig_Template
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
        $__internal_e13a95aab08696d2711affba84d7912d2d7af8989fb8d707f9417f4c4a3f163b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e13a95aab08696d2711affba84d7912d2d7af8989fb8d707f9417f4c4a3f163b->enter($__internal_e13a95aab08696d2711affba84d7912d2d7af8989fb8d707f9417f4c4a3f163b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_e1dc4567859d8efefa16e8cfea9b10190b2a9910ee3e27ff5eec53241843ffeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1dc4567859d8efefa16e8cfea9b10190b2a9910ee3e27ff5eec53241843ffeb->enter($__internal_e1dc4567859d8efefa16e8cfea9b10190b2a9910ee3e27ff5eec53241843ffeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_e13a95aab08696d2711affba84d7912d2d7af8989fb8d707f9417f4c4a3f163b->leave($__internal_e13a95aab08696d2711affba84d7912d2d7af8989fb8d707f9417f4c4a3f163b_prof);

        
        $__internal_e1dc4567859d8efefa16e8cfea9b10190b2a9910ee3e27ff5eec53241843ffeb->leave($__internal_e1dc4567859d8efefa16e8cfea9b10190b2a9910ee3e27ff5eec53241843ffeb_prof);

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

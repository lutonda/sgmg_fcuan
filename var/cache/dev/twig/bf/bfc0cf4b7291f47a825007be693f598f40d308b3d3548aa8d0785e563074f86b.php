<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bc83685e045a336ea97f2c09ad8699ad415350f223a691e05768eaf26ff272e0 extends Twig_Template
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
        $__internal_bc714bea3a35d1836e86ffff41bb6a57999eb97d80a773fc11ef3d191ea56ac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc714bea3a35d1836e86ffff41bb6a57999eb97d80a773fc11ef3d191ea56ac9->enter($__internal_bc714bea3a35d1836e86ffff41bb6a57999eb97d80a773fc11ef3d191ea56ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_c6413848e4b1b57abee7982a418cf83a622cfeef9c283e147a712e9e2bdef146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6413848e4b1b57abee7982a418cf83a622cfeef9c283e147a712e9e2bdef146->enter($__internal_c6413848e4b1b57abee7982a418cf83a622cfeef9c283e147a712e9e2bdef146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_bc714bea3a35d1836e86ffff41bb6a57999eb97d80a773fc11ef3d191ea56ac9->leave($__internal_bc714bea3a35d1836e86ffff41bb6a57999eb97d80a773fc11ef3d191ea56ac9_prof);

        
        $__internal_c6413848e4b1b57abee7982a418cf83a622cfeef9c283e147a712e9e2bdef146->leave($__internal_c6413848e4b1b57abee7982a418cf83a622cfeef9c283e147a712e9e2bdef146_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

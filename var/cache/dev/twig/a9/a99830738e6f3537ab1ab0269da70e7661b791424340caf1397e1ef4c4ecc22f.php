<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_63a39efcfbab460dbf7aafa4deb0bdf21633a4b16029e82e2e5a864d4dad3237 extends Twig_Template
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
        $__internal_cfdd78790b481b3e7f60788f71f568de0e1bad2e2c97f0744fbf5ce017db99c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfdd78790b481b3e7f60788f71f568de0e1bad2e2c97f0744fbf5ce017db99c9->enter($__internal_cfdd78790b481b3e7f60788f71f568de0e1bad2e2c97f0744fbf5ce017db99c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_82265a61fd486d4f73ce416819c1031c49ce3c27e8b095d2db6a4ea868d4931a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82265a61fd486d4f73ce416819c1031c49ce3c27e8b095d2db6a4ea868d4931a->enter($__internal_82265a61fd486d4f73ce416819c1031c49ce3c27e8b095d2db6a4ea868d4931a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_cfdd78790b481b3e7f60788f71f568de0e1bad2e2c97f0744fbf5ce017db99c9->leave($__internal_cfdd78790b481b3e7f60788f71f568de0e1bad2e2c97f0744fbf5ce017db99c9_prof);

        
        $__internal_82265a61fd486d4f73ce416819c1031c49ce3c27e8b095d2db6a4ea868d4931a->leave($__internal_82265a61fd486d4f73ce416819c1031c49ce3c27e8b095d2db6a4ea868d4931a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

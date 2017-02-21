<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_62bbb8bbcdae280c08b7ec519012024119886eb42a34066e68dba2aead4fb7d1 extends Twig_Template
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
        $__internal_951de4f5b069dd72142049561e1d2777e834d25b4dbb803732d0901e6c6523bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_951de4f5b069dd72142049561e1d2777e834d25b4dbb803732d0901e6c6523bb->enter($__internal_951de4f5b069dd72142049561e1d2777e834d25b4dbb803732d0901e6c6523bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_de5e00816ea6230c3a87926223cffbd0f49b46efc005447504071dda55a6e7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5e00816ea6230c3a87926223cffbd0f49b46efc005447504071dda55a6e7ea->enter($__internal_de5e00816ea6230c3a87926223cffbd0f49b46efc005447504071dda55a6e7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_951de4f5b069dd72142049561e1d2777e834d25b4dbb803732d0901e6c6523bb->leave($__internal_951de4f5b069dd72142049561e1d2777e834d25b4dbb803732d0901e6c6523bb_prof);

        
        $__internal_de5e00816ea6230c3a87926223cffbd0f49b46efc005447504071dda55a6e7ea->leave($__internal_de5e00816ea6230c3a87926223cffbd0f49b46efc005447504071dda55a6e7ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

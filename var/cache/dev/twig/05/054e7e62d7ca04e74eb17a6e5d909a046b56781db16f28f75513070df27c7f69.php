<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bfdbf3d78654b9e1c07ae8f1cbe6d324ea887356de82e98004ac68a0442ec56f extends Twig_Template
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
        $__internal_6591ae4b6cecc2de014933d1b8751e39856788ad893b36db0c6a6798c52e3e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6591ae4b6cecc2de014933d1b8751e39856788ad893b36db0c6a6798c52e3e96->enter($__internal_6591ae4b6cecc2de014933d1b8751e39856788ad893b36db0c6a6798c52e3e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_8cf4cb9ffceaa2c8222e60367c3e929bbbe1e996260b04cfbb984405fd473737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf4cb9ffceaa2c8222e60367c3e929bbbe1e996260b04cfbb984405fd473737->enter($__internal_8cf4cb9ffceaa2c8222e60367c3e929bbbe1e996260b04cfbb984405fd473737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6591ae4b6cecc2de014933d1b8751e39856788ad893b36db0c6a6798c52e3e96->leave($__internal_6591ae4b6cecc2de014933d1b8751e39856788ad893b36db0c6a6798c52e3e96_prof);

        
        $__internal_8cf4cb9ffceaa2c8222e60367c3e929bbbe1e996260b04cfbb984405fd473737->leave($__internal_8cf4cb9ffceaa2c8222e60367c3e929bbbe1e996260b04cfbb984405fd473737_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

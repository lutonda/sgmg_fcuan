<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_beff339c502e54f26dbdb1a82cd68d5fc0fab2e9f72450a9c660d65ca809fcfa extends Twig_Template
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
        $__internal_5333ed19e2f722f3258b9b654a43fdf587bb90adaa800e8cc01945ad1849370f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5333ed19e2f722f3258b9b654a43fdf587bb90adaa800e8cc01945ad1849370f->enter($__internal_5333ed19e2f722f3258b9b654a43fdf587bb90adaa800e8cc01945ad1849370f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_bbd04328e2607e961ef6c1cc4f3dd46d377f5b6c41cba14023844b4c5c549057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd04328e2607e961ef6c1cc4f3dd46d377f5b6c41cba14023844b4c5c549057->enter($__internal_bbd04328e2607e961ef6c1cc4f3dd46d377f5b6c41cba14023844b4c5c549057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_5333ed19e2f722f3258b9b654a43fdf587bb90adaa800e8cc01945ad1849370f->leave($__internal_5333ed19e2f722f3258b9b654a43fdf587bb90adaa800e8cc01945ad1849370f_prof);

        
        $__internal_bbd04328e2607e961ef6c1cc4f3dd46d377f5b6c41cba14023844b4c5c549057->leave($__internal_bbd04328e2607e961ef6c1cc4f3dd46d377f5b6c41cba14023844b4c5c549057_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

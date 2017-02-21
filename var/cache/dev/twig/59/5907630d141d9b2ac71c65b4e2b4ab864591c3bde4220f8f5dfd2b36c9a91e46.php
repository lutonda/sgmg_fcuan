<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d819ad1ea57074ff2f41162cb635825c28603dd30bda87fb7484cab791a14bb5 extends Twig_Template
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
        $__internal_0af883f5122eb0b29553f77202f7cca1be193292de66a95cf21abe328cab9f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af883f5122eb0b29553f77202f7cca1be193292de66a95cf21abe328cab9f25->enter($__internal_0af883f5122eb0b29553f77202f7cca1be193292de66a95cf21abe328cab9f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_fd11e8fa8508a0193e28b2f761d9db191b70d535fe85fd1d2e58003d45e1c552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd11e8fa8508a0193e28b2f761d9db191b70d535fe85fd1d2e58003d45e1c552->enter($__internal_fd11e8fa8508a0193e28b2f761d9db191b70d535fe85fd1d2e58003d45e1c552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_0af883f5122eb0b29553f77202f7cca1be193292de66a95cf21abe328cab9f25->leave($__internal_0af883f5122eb0b29553f77202f7cca1be193292de66a95cf21abe328cab9f25_prof);

        
        $__internal_fd11e8fa8508a0193e28b2f761d9db191b70d535fe85fd1d2e58003d45e1c552->leave($__internal_fd11e8fa8508a0193e28b2f761d9db191b70d535fe85fd1d2e58003d45e1c552_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

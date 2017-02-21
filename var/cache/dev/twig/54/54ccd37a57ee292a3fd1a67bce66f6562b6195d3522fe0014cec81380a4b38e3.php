<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6552dfd4b786628aab194f7e325d29938757f72bb0e692b8229f2b30c2eff144 extends Twig_Template
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
        $__internal_828013a87db31276c8be7163846f2ddeb97f7e0f0d94ee570577b6360640d85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_828013a87db31276c8be7163846f2ddeb97f7e0f0d94ee570577b6360640d85d->enter($__internal_828013a87db31276c8be7163846f2ddeb97f7e0f0d94ee570577b6360640d85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_35e52e89bdfc2eb0d3ccf2d37dce613c6b66e61e945ad29fa70ef97c506f827b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e52e89bdfc2eb0d3ccf2d37dce613c6b66e61e945ad29fa70ef97c506f827b->enter($__internal_35e52e89bdfc2eb0d3ccf2d37dce613c6b66e61e945ad29fa70ef97c506f827b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_828013a87db31276c8be7163846f2ddeb97f7e0f0d94ee570577b6360640d85d->leave($__internal_828013a87db31276c8be7163846f2ddeb97f7e0f0d94ee570577b6360640d85d_prof);

        
        $__internal_35e52e89bdfc2eb0d3ccf2d37dce613c6b66e61e945ad29fa70ef97c506f827b->leave($__internal_35e52e89bdfc2eb0d3ccf2d37dce613c6b66e61e945ad29fa70ef97c506f827b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

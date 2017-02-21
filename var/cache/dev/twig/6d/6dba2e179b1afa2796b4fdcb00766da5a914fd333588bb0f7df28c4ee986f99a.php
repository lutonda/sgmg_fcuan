<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_98cd367ea2eecbb2deb77c8ee96b175a8189adac1e128ed83188c923ec19c8e6 extends Twig_Template
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
        $__internal_55e6a74615a54f7c5a65cf7b0bba49c8ca8eaab75079dd95da8edaa0d9d2b3d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55e6a74615a54f7c5a65cf7b0bba49c8ca8eaab75079dd95da8edaa0d9d2b3d2->enter($__internal_55e6a74615a54f7c5a65cf7b0bba49c8ca8eaab75079dd95da8edaa0d9d2b3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_0a38af5dc0e6901a334a286f488b69b7b57b84404978e4ad3b5e9e06c45f5d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a38af5dc0e6901a334a286f488b69b7b57b84404978e4ad3b5e9e06c45f5d0d->enter($__internal_0a38af5dc0e6901a334a286f488b69b7b57b84404978e4ad3b5e9e06c45f5d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_55e6a74615a54f7c5a65cf7b0bba49c8ca8eaab75079dd95da8edaa0d9d2b3d2->leave($__internal_55e6a74615a54f7c5a65cf7b0bba49c8ca8eaab75079dd95da8edaa0d9d2b3d2_prof);

        
        $__internal_0a38af5dc0e6901a334a286f488b69b7b57b84404978e4ad3b5e9e06c45f5d0d->leave($__internal_0a38af5dc0e6901a334a286f488b69b7b57b84404978e4ad3b5e9e06c45f5d0d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

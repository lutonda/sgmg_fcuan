<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_43c88f2387885de758eb9736a172f8e2ba5c2acf90722011df0f2c4eb911130c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afee217be75ca7248c7c149379fe03feca30ea59e16e4839d184f1dd32845745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afee217be75ca7248c7c149379fe03feca30ea59e16e4839d184f1dd32845745->enter($__internal_afee217be75ca7248c7c149379fe03feca30ea59e16e4839d184f1dd32845745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_de527039c19fc0bf2e7518552137fc43e5350fd69d32941382d6da9edccac32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de527039c19fc0bf2e7518552137fc43e5350fd69d32941382d6da9edccac32f->enter($__internal_de527039c19fc0bf2e7518552137fc43e5350fd69d32941382d6da9edccac32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afee217be75ca7248c7c149379fe03feca30ea59e16e4839d184f1dd32845745->leave($__internal_afee217be75ca7248c7c149379fe03feca30ea59e16e4839d184f1dd32845745_prof);

        
        $__internal_de527039c19fc0bf2e7518552137fc43e5350fd69d32941382d6da9edccac32f->leave($__internal_de527039c19fc0bf2e7518552137fc43e5350fd69d32941382d6da9edccac32f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1df75b81d8873b7db7ebcc408b80992795384ccc8c13d0df9effcf8f651735b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df75b81d8873b7db7ebcc408b80992795384ccc8c13d0df9effcf8f651735b4->enter($__internal_1df75b81d8873b7db7ebcc408b80992795384ccc8c13d0df9effcf8f651735b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_16bdef1a5d38aad5af9fe0f93d4144505090b6498fdd4f67269db01a6e5a48d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16bdef1a5d38aad5af9fe0f93d4144505090b6498fdd4f67269db01a6e5a48d6->enter($__internal_16bdef1a5d38aad5af9fe0f93d4144505090b6498fdd4f67269db01a6e5a48d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_16bdef1a5d38aad5af9fe0f93d4144505090b6498fdd4f67269db01a6e5a48d6->leave($__internal_16bdef1a5d38aad5af9fe0f93d4144505090b6498fdd4f67269db01a6e5a48d6_prof);

        
        $__internal_1df75b81d8873b7db7ebcc408b80992795384ccc8c13d0df9effcf8f651735b4->leave($__internal_1df75b81d8873b7db7ebcc408b80992795384ccc8c13d0df9effcf8f651735b4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf26d730eeae765acc6914f2bd83614195a23b80b532e9483004f3b84644b528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf26d730eeae765acc6914f2bd83614195a23b80b532e9483004f3b84644b528->enter($__internal_bf26d730eeae765acc6914f2bd83614195a23b80b532e9483004f3b84644b528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d7e67e3dedf731e022aacda5948e416b9fe453eb3eb1e63ff8f94f61d00000ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e67e3dedf731e022aacda5948e416b9fe453eb3eb1e63ff8f94f61d00000ac->enter($__internal_d7e67e3dedf731e022aacda5948e416b9fe453eb3eb1e63ff8f94f61d00000ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d7e67e3dedf731e022aacda5948e416b9fe453eb3eb1e63ff8f94f61d00000ac->leave($__internal_d7e67e3dedf731e022aacda5948e416b9fe453eb3eb1e63ff8f94f61d00000ac_prof);

        
        $__internal_bf26d730eeae765acc6914f2bd83614195a23b80b532e9483004f3b84644b528->leave($__internal_bf26d730eeae765acc6914f2bd83614195a23b80b532e9483004f3b84644b528_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_882e512019486bda3d7a4279a8355cbc52099b38df0f2beae30d57a4c07e8893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882e512019486bda3d7a4279a8355cbc52099b38df0f2beae30d57a4c07e8893->enter($__internal_882e512019486bda3d7a4279a8355cbc52099b38df0f2beae30d57a4c07e8893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_931c217ba93f012f5c141691f25e304cd1daba5ebc137e725ec934199fdfbb4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931c217ba93f012f5c141691f25e304cd1daba5ebc137e725ec934199fdfbb4c->enter($__internal_931c217ba93f012f5c141691f25e304cd1daba5ebc137e725ec934199fdfbb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_931c217ba93f012f5c141691f25e304cd1daba5ebc137e725ec934199fdfbb4c->leave($__internal_931c217ba93f012f5c141691f25e304cd1daba5ebc137e725ec934199fdfbb4c_prof);

        
        $__internal_882e512019486bda3d7a4279a8355cbc52099b38df0f2beae30d57a4c07e8893->leave($__internal_882e512019486bda3d7a4279a8355cbc52099b38df0f2beae30d57a4c07e8893_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

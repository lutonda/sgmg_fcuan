<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_42ba24b1d21359d1b826573d77b0857ab9c89dda48babfc45c7198892839bbfa extends Twig_Template
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
        $__internal_d2e94c74fcc5e3e38bee01bf0a0e37f81215f2882da5234170affaa75927c66f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e94c74fcc5e3e38bee01bf0a0e37f81215f2882da5234170affaa75927c66f->enter($__internal_d2e94c74fcc5e3e38bee01bf0a0e37f81215f2882da5234170affaa75927c66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8bdacec36727242ce7df91b1ea0c91bee9b4acc2b76fa62e09ec98520c5a92f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bdacec36727242ce7df91b1ea0c91bee9b4acc2b76fa62e09ec98520c5a92f2->enter($__internal_8bdacec36727242ce7df91b1ea0c91bee9b4acc2b76fa62e09ec98520c5a92f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2e94c74fcc5e3e38bee01bf0a0e37f81215f2882da5234170affaa75927c66f->leave($__internal_d2e94c74fcc5e3e38bee01bf0a0e37f81215f2882da5234170affaa75927c66f_prof);

        
        $__internal_8bdacec36727242ce7df91b1ea0c91bee9b4acc2b76fa62e09ec98520c5a92f2->leave($__internal_8bdacec36727242ce7df91b1ea0c91bee9b4acc2b76fa62e09ec98520c5a92f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4cca88b5b7d2b45ecc3366faf99969159b8f9ab15413367d78a74d4177cbb981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cca88b5b7d2b45ecc3366faf99969159b8f9ab15413367d78a74d4177cbb981->enter($__internal_4cca88b5b7d2b45ecc3366faf99969159b8f9ab15413367d78a74d4177cbb981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_37060ed42f61868e4c3e935a575af4840ac55dbb1882ca9e0ffebfda6b52be11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37060ed42f61868e4c3e935a575af4840ac55dbb1882ca9e0ffebfda6b52be11->enter($__internal_37060ed42f61868e4c3e935a575af4840ac55dbb1882ca9e0ffebfda6b52be11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_37060ed42f61868e4c3e935a575af4840ac55dbb1882ca9e0ffebfda6b52be11->leave($__internal_37060ed42f61868e4c3e935a575af4840ac55dbb1882ca9e0ffebfda6b52be11_prof);

        
        $__internal_4cca88b5b7d2b45ecc3366faf99969159b8f9ab15413367d78a74d4177cbb981->leave($__internal_4cca88b5b7d2b45ecc3366faf99969159b8f9ab15413367d78a74d4177cbb981_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ef619a123339402916075d373e4de49e21ec66bcf55973801f66521b538ed69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef619a123339402916075d373e4de49e21ec66bcf55973801f66521b538ed69->enter($__internal_8ef619a123339402916075d373e4de49e21ec66bcf55973801f66521b538ed69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_31967bcaa7ac54d3c4505ef45f7f6b0bd3e92f39993d2d172a9af9bf312a1f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31967bcaa7ac54d3c4505ef45f7f6b0bd3e92f39993d2d172a9af9bf312a1f0e->enter($__internal_31967bcaa7ac54d3c4505ef45f7f6b0bd3e92f39993d2d172a9af9bf312a1f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_31967bcaa7ac54d3c4505ef45f7f6b0bd3e92f39993d2d172a9af9bf312a1f0e->leave($__internal_31967bcaa7ac54d3c4505ef45f7f6b0bd3e92f39993d2d172a9af9bf312a1f0e_prof);

        
        $__internal_8ef619a123339402916075d373e4de49e21ec66bcf55973801f66521b538ed69->leave($__internal_8ef619a123339402916075d373e4de49e21ec66bcf55973801f66521b538ed69_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff8204fb87ea1722f6851d459b265dc8a0d4856d5ee3e29f7cb0bc61e9666c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8204fb87ea1722f6851d459b265dc8a0d4856d5ee3e29f7cb0bc61e9666c47->enter($__internal_ff8204fb87ea1722f6851d459b265dc8a0d4856d5ee3e29f7cb0bc61e9666c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee8624548e06d60f06a3522b9fec500a029bbe649411d9e359b5b43ee711ba01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8624548e06d60f06a3522b9fec500a029bbe649411d9e359b5b43ee711ba01->enter($__internal_ee8624548e06d60f06a3522b9fec500a029bbe649411d9e359b5b43ee711ba01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ee8624548e06d60f06a3522b9fec500a029bbe649411d9e359b5b43ee711ba01->leave($__internal_ee8624548e06d60f06a3522b9fec500a029bbe649411d9e359b5b43ee711ba01_prof);

        
        $__internal_ff8204fb87ea1722f6851d459b265dc8a0d4856d5ee3e29f7cb0bc61e9666c47->leave($__internal_ff8204fb87ea1722f6851d459b265dc8a0d4856d5ee3e29f7cb0bc61e9666c47_prof);

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

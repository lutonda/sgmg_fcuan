<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0b62ff85b8710e0defec368ceded8067ac66015f4fc0b033f9ce5679ae5841fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8911067574993c757787019c57817024a84e728999872ad22133d2b5a804b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8911067574993c757787019c57817024a84e728999872ad22133d2b5a804b02->enter($__internal_f8911067574993c757787019c57817024a84e728999872ad22133d2b5a804b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_ee051273143be43ff4340de0a758590e6ab8927e156128fd78ed2e223df59b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee051273143be43ff4340de0a758590e6ab8927e156128fd78ed2e223df59b27->enter($__internal_ee051273143be43ff4340de0a758590e6ab8927e156128fd78ed2e223df59b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f8911067574993c757787019c57817024a84e728999872ad22133d2b5a804b02->leave($__internal_f8911067574993c757787019c57817024a84e728999872ad22133d2b5a804b02_prof);

        
        $__internal_ee051273143be43ff4340de0a758590e6ab8927e156128fd78ed2e223df59b27->leave($__internal_ee051273143be43ff4340de0a758590e6ab8927e156128fd78ed2e223df59b27_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e953d6696d27c7ae0d349a192b66a45e132bc434b85fceeabdf85f6cb419c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e953d6696d27c7ae0d349a192b66a45e132bc434b85fceeabdf85f6cb419c55->enter($__internal_9e953d6696d27c7ae0d349a192b66a45e132bc434b85fceeabdf85f6cb419c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7f83b8de4a637fe146767f424cd1f0a1f0adc12ae5dbd3e3ae039e81779d73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f83b8de4a637fe146767f424cd1f0a1f0adc12ae5dbd3e3ae039e81779d73a->enter($__internal_f7f83b8de4a637fe146767f424cd1f0a1f0adc12ae5dbd3e3ae039e81779d73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f7f83b8de4a637fe146767f424cd1f0a1f0adc12ae5dbd3e3ae039e81779d73a->leave($__internal_f7f83b8de4a637fe146767f424cd1f0a1f0adc12ae5dbd3e3ae039e81779d73a_prof);

        
        $__internal_9e953d6696d27c7ae0d349a192b66a45e132bc434b85fceeabdf85f6cb419c55->leave($__internal_9e953d6696d27c7ae0d349a192b66a45e132bc434b85fceeabdf85f6cb419c55_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

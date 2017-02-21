<?php

/* :MUS:new.html.twig */
class __TwigTemplate_b0e46264766768ae83bad3a4e20c9d1caeccb14645e682d52817ec01db72fcbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":MUS:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27536d7ecc7408f2d117cfe6c2d3d4b2eaa823a537743edc92c232cdc8f7a0f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27536d7ecc7408f2d117cfe6c2d3d4b2eaa823a537743edc92c232cdc8f7a0f3->enter($__internal_27536d7ecc7408f2d117cfe6c2d3d4b2eaa823a537743edc92c232cdc8f7a0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS:new.html.twig"));

        $__internal_5a9076101b7d99566634ca2aecf404e139f08113930f3f91161782081fd8546b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9076101b7d99566634ca2aecf404e139f08113930f3f91161782081fd8546b->enter($__internal_5a9076101b7d99566634ca2aecf404e139f08113930f3f91161782081fd8546b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27536d7ecc7408f2d117cfe6c2d3d4b2eaa823a537743edc92c232cdc8f7a0f3->leave($__internal_27536d7ecc7408f2d117cfe6c2d3d4b2eaa823a537743edc92c232cdc8f7a0f3_prof);

        
        $__internal_5a9076101b7d99566634ca2aecf404e139f08113930f3f91161782081fd8546b->leave($__internal_5a9076101b7d99566634ca2aecf404e139f08113930f3f91161782081fd8546b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_324060dff3ddd15137e2ebee46c329fba471f5bd83c0bada48c02763caede1eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_324060dff3ddd15137e2ebee46c329fba471f5bd83c0bada48c02763caede1eb->enter($__internal_324060dff3ddd15137e2ebee46c329fba471f5bd83c0bada48c02763caede1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5471c7be86b975089aa39555761b2af3824095889808702d039eb06fbd26948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5471c7be86b975089aa39555761b2af3824095889808702d039eb06fbd26948->enter($__internal_c5471c7be86b975089aa39555761b2af3824095889808702d039eb06fbd26948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Amostra creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("amostra_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c5471c7be86b975089aa39555761b2af3824095889808702d039eb06fbd26948->leave($__internal_c5471c7be86b975089aa39555761b2af3824095889808702d039eb06fbd26948_prof);

        
        $__internal_324060dff3ddd15137e2ebee46c329fba471f5bd83c0bada48c02763caede1eb->leave($__internal_324060dff3ddd15137e2ebee46c329fba471f5bd83c0bada48c02763caede1eb_prof);

    }

    public function getTemplateName()
    {
        return ":MUS:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Amostra creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('amostra_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":MUS:new.html.twig", "/var/www/html/hom/app/Resources/views/MUS/new.html.twig");
    }
}

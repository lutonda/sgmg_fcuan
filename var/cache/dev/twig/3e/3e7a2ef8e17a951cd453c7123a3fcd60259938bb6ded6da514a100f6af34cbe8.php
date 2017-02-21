<?php

/* :amostra:new.html.twig */
class __TwigTemplate_67085a7b4661a29905dc99557d6fd3817b0fea12d1e0ac4c2604b40adb259877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":amostra:new.html.twig", 1);
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
        $__internal_1f7c7fd8088635c262845e05a497afd8a217682b2a7604e5965a8caa1d465542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f7c7fd8088635c262845e05a497afd8a217682b2a7604e5965a8caa1d465542->enter($__internal_1f7c7fd8088635c262845e05a497afd8a217682b2a7604e5965a8caa1d465542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra:new.html.twig"));

        $__internal_d0ef63243bedcdf150e92a266990e8913b82bbfa4b3eb9ddccdfb0f36b30098a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ef63243bedcdf150e92a266990e8913b82bbfa4b3eb9ddccdfb0f36b30098a->enter($__internal_d0ef63243bedcdf150e92a266990e8913b82bbfa4b3eb9ddccdfb0f36b30098a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f7c7fd8088635c262845e05a497afd8a217682b2a7604e5965a8caa1d465542->leave($__internal_1f7c7fd8088635c262845e05a497afd8a217682b2a7604e5965a8caa1d465542_prof);

        
        $__internal_d0ef63243bedcdf150e92a266990e8913b82bbfa4b3eb9ddccdfb0f36b30098a->leave($__internal_d0ef63243bedcdf150e92a266990e8913b82bbfa4b3eb9ddccdfb0f36b30098a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_18872c69f8f0d6de3d55c4dd500e6707dc710866b10b06557c7105f6ea4f1f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18872c69f8f0d6de3d55c4dd500e6707dc710866b10b06557c7105f6ea4f1f30->enter($__internal_18872c69f8f0d6de3d55c4dd500e6707dc710866b10b06557c7105f6ea4f1f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1188c715d3d3debbd7844ac69eb91a4622db48897fe499fd971d24d163e8ded4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1188c715d3d3debbd7844ac69eb91a4622db48897fe499fd971d24d163e8ded4->enter($__internal_1188c715d3d3debbd7844ac69eb91a4622db48897fe499fd971d24d163e8ded4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1188c715d3d3debbd7844ac69eb91a4622db48897fe499fd971d24d163e8ded4->leave($__internal_1188c715d3d3debbd7844ac69eb91a4622db48897fe499fd971d24d163e8ded4_prof);

        
        $__internal_18872c69f8f0d6de3d55c4dd500e6707dc710866b10b06557c7105f6ea4f1f30->leave($__internal_18872c69f8f0d6de3d55c4dd500e6707dc710866b10b06557c7105f6ea4f1f30_prof);

    }

    public function getTemplateName()
    {
        return ":amostra:new.html.twig";
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
", ":amostra:new.html.twig", "/var/www/html/hom/app/Resources/views/amostra/new.html.twig");
    }
}

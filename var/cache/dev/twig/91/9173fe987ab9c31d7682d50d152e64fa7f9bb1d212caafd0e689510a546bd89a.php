<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_68dcf10749fbcbfdfc8432a5f57547ddbc4cd1f2c57d8b52e076cfbcc0f06206 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_83df4b187beb06dd2ee2198bfa97b42cd1f4027b9c99a351c104956dcda8b717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83df4b187beb06dd2ee2198bfa97b42cd1f4027b9c99a351c104956dcda8b717->enter($__internal_83df4b187beb06dd2ee2198bfa97b42cd1f4027b9c99a351c104956dcda8b717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e36cbeaaa0b5d2bd565a8f5b20445403098b26ce1fc2805415d1a878bd7c8237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36cbeaaa0b5d2bd565a8f5b20445403098b26ce1fc2805415d1a878bd7c8237->enter($__internal_e36cbeaaa0b5d2bd565a8f5b20445403098b26ce1fc2805415d1a878bd7c8237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83df4b187beb06dd2ee2198bfa97b42cd1f4027b9c99a351c104956dcda8b717->leave($__internal_83df4b187beb06dd2ee2198bfa97b42cd1f4027b9c99a351c104956dcda8b717_prof);

        
        $__internal_e36cbeaaa0b5d2bd565a8f5b20445403098b26ce1fc2805415d1a878bd7c8237->leave($__internal_e36cbeaaa0b5d2bd565a8f5b20445403098b26ce1fc2805415d1a878bd7c8237_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_74d1764815fe4e357e849ceb25beb9175965b8a997cd8d435d36d0eb0d6226aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d1764815fe4e357e849ceb25beb9175965b8a997cd8d435d36d0eb0d6226aa->enter($__internal_74d1764815fe4e357e849ceb25beb9175965b8a997cd8d435d36d0eb0d6226aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_abef89de361e5e71767600b78f0e89d7312498d7666687afa0790baa390f25c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abef89de361e5e71767600b78f0e89d7312498d7666687afa0790baa390f25c5->enter($__internal_abef89de361e5e71767600b78f0e89d7312498d7666687afa0790baa390f25c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_abef89de361e5e71767600b78f0e89d7312498d7666687afa0790baa390f25c5->leave($__internal_abef89de361e5e71767600b78f0e89d7312498d7666687afa0790baa390f25c5_prof);

        
        $__internal_74d1764815fe4e357e849ceb25beb9175965b8a997cd8d435d36d0eb0d6226aa->leave($__internal_74d1764815fe4e357e849ceb25beb9175965b8a997cd8d435d36d0eb0d6226aa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_40a0dd86ce9eb4b936447153805f27f8a763487e5af8d7d02c56ed9b4f39fe47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a0dd86ce9eb4b936447153805f27f8a763487e5af8d7d02c56ed9b4f39fe47->enter($__internal_40a0dd86ce9eb4b936447153805f27f8a763487e5af8d7d02c56ed9b4f39fe47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8589c2c847ac9a4f92265b6b1d811f07802505223578c674d65407e2e85567b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8589c2c847ac9a4f92265b6b1d811f07802505223578c674d65407e2e85567b9->enter($__internal_8589c2c847ac9a4f92265b6b1d811f07802505223578c674d65407e2e85567b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8589c2c847ac9a4f92265b6b1d811f07802505223578c674d65407e2e85567b9->leave($__internal_8589c2c847ac9a4f92265b6b1d811f07802505223578c674d65407e2e85567b9_prof);

        
        $__internal_40a0dd86ce9eb4b936447153805f27f8a763487e5af8d7d02c56ed9b4f39fe47->leave($__internal_40a0dd86ce9eb4b936447153805f27f8a763487e5af8d7d02c56ed9b4f39fe47_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_871e8e4f0193fe0d20667f297b1c2d1ca1c0cd38b669d4814dab3d4289561f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871e8e4f0193fe0d20667f297b1c2d1ca1c0cd38b669d4814dab3d4289561f00->enter($__internal_871e8e4f0193fe0d20667f297b1c2d1ca1c0cd38b669d4814dab3d4289561f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c070299126713dc040756cfaa7853704a61636553a60a2e5f918b2f7beacc7d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c070299126713dc040756cfaa7853704a61636553a60a2e5f918b2f7beacc7d3->enter($__internal_c070299126713dc040756cfaa7853704a61636553a60a2e5f918b2f7beacc7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_c070299126713dc040756cfaa7853704a61636553a60a2e5f918b2f7beacc7d3->leave($__internal_c070299126713dc040756cfaa7853704a61636553a60a2e5f918b2f7beacc7d3_prof);

        
        $__internal_871e8e4f0193fe0d20667f297b1c2d1ca1c0cd38b669d4814dab3d4289561f00->leave($__internal_871e8e4f0193fe0d20667f297b1c2d1ca1c0cd38b669d4814dab3d4289561f00_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

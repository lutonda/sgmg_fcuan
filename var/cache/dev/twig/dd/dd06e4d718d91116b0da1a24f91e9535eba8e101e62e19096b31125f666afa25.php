<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_37cf9a4eee5ce3a42c38e8f687e5a9504db0e9b0e7d1afcd4e17964689c5540d extends Twig_Template
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
        $__internal_c847f010e6c24a0f2cade9eef929489b83de4c5369426cbb4fde101497618822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c847f010e6c24a0f2cade9eef929489b83de4c5369426cbb4fde101497618822->enter($__internal_c847f010e6c24a0f2cade9eef929489b83de4c5369426cbb4fde101497618822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d828c480708b2879a637b41b8de3728e23e0876de791b03e6a037215a2c17dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d828c480708b2879a637b41b8de3728e23e0876de791b03e6a037215a2c17dd8->enter($__internal_d828c480708b2879a637b41b8de3728e23e0876de791b03e6a037215a2c17dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c847f010e6c24a0f2cade9eef929489b83de4c5369426cbb4fde101497618822->leave($__internal_c847f010e6c24a0f2cade9eef929489b83de4c5369426cbb4fde101497618822_prof);

        
        $__internal_d828c480708b2879a637b41b8de3728e23e0876de791b03e6a037215a2c17dd8->leave($__internal_d828c480708b2879a637b41b8de3728e23e0876de791b03e6a037215a2c17dd8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36d69c91bd0bf233ea008c013cd5619a2bdfd738bfd2ac40b5766c80eb80cfa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d69c91bd0bf233ea008c013cd5619a2bdfd738bfd2ac40b5766c80eb80cfa7->enter($__internal_36d69c91bd0bf233ea008c013cd5619a2bdfd738bfd2ac40b5766c80eb80cfa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d93cad8c4e96e697142a440c28e27ba7a887654415342f706d5c370bfb4eed5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93cad8c4e96e697142a440c28e27ba7a887654415342f706d5c370bfb4eed5f->enter($__internal_d93cad8c4e96e697142a440c28e27ba7a887654415342f706d5c370bfb4eed5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d93cad8c4e96e697142a440c28e27ba7a887654415342f706d5c370bfb4eed5f->leave($__internal_d93cad8c4e96e697142a440c28e27ba7a887654415342f706d5c370bfb4eed5f_prof);

        
        $__internal_36d69c91bd0bf233ea008c013cd5619a2bdfd738bfd2ac40b5766c80eb80cfa7->leave($__internal_36d69c91bd0bf233ea008c013cd5619a2bdfd738bfd2ac40b5766c80eb80cfa7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22d9dc483092d0ea934f4714e8bb3459fa88118705a61cf66e68fb001a2d51e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d9dc483092d0ea934f4714e8bb3459fa88118705a61cf66e68fb001a2d51e2->enter($__internal_22d9dc483092d0ea934f4714e8bb3459fa88118705a61cf66e68fb001a2d51e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2f65c9726a3de47d7ad6806df693856f15b1f33fc0c56daa46612bb0e1bffff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f65c9726a3de47d7ad6806df693856f15b1f33fc0c56daa46612bb0e1bffff2->enter($__internal_2f65c9726a3de47d7ad6806df693856f15b1f33fc0c56daa46612bb0e1bffff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2f65c9726a3de47d7ad6806df693856f15b1f33fc0c56daa46612bb0e1bffff2->leave($__internal_2f65c9726a3de47d7ad6806df693856f15b1f33fc0c56daa46612bb0e1bffff2_prof);

        
        $__internal_22d9dc483092d0ea934f4714e8bb3459fa88118705a61cf66e68fb001a2d51e2->leave($__internal_22d9dc483092d0ea934f4714e8bb3459fa88118705a61cf66e68fb001a2d51e2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ca69862a62dc4681ab28351b9acd07e59de7cae7501235e9f8480021d06129a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca69862a62dc4681ab28351b9acd07e59de7cae7501235e9f8480021d06129a->enter($__internal_0ca69862a62dc4681ab28351b9acd07e59de7cae7501235e9f8480021d06129a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a747f3898eaf600fd5a40c736ab66c9c5f69f4549437db0a1e2b83da56231d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a747f3898eaf600fd5a40c736ab66c9c5f69f4549437db0a1e2b83da56231d3d->enter($__internal_a747f3898eaf600fd5a40c736ab66c9c5f69f4549437db0a1e2b83da56231d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a747f3898eaf600fd5a40c736ab66c9c5f69f4549437db0a1e2b83da56231d3d->leave($__internal_a747f3898eaf600fd5a40c736ab66c9c5f69f4549437db0a1e2b83da56231d3d_prof);

        
        $__internal_0ca69862a62dc4681ab28351b9acd07e59de7cae7501235e9f8480021d06129a->leave($__internal_0ca69862a62dc4681ab28351b9acd07e59de7cae7501235e9f8480021d06129a_prof);

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

<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_6842060438db324a079140d8af097e9824da4143badaf8cf57560e102adae3ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cbfb445dbaeaec6683c02027128b2ac9611747b0822bc99d8cccacdb1b5259c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cbfb445dbaeaec6683c02027128b2ac9611747b0822bc99d8cccacdb1b5259c->enter($__internal_5cbfb445dbaeaec6683c02027128b2ac9611747b0822bc99d8cccacdb1b5259c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5647c24dfaa9edaf79b1892023cadfc9d42fc4a6c56ab67f5957389195846ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5647c24dfaa9edaf79b1892023cadfc9d42fc4a6c56ab67f5957389195846ec9->enter($__internal_5647c24dfaa9edaf79b1892023cadfc9d42fc4a6c56ab67f5957389195846ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cbfb445dbaeaec6683c02027128b2ac9611747b0822bc99d8cccacdb1b5259c->leave($__internal_5cbfb445dbaeaec6683c02027128b2ac9611747b0822bc99d8cccacdb1b5259c_prof);

        
        $__internal_5647c24dfaa9edaf79b1892023cadfc9d42fc4a6c56ab67f5957389195846ec9->leave($__internal_5647c24dfaa9edaf79b1892023cadfc9d42fc4a6c56ab67f5957389195846ec9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6df9c856834d20cb9a8dc1722abc89c331a0de12a9fde39024a804bfe9bf558e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6df9c856834d20cb9a8dc1722abc89c331a0de12a9fde39024a804bfe9bf558e->enter($__internal_6df9c856834d20cb9a8dc1722abc89c331a0de12a9fde39024a804bfe9bf558e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8039fdade4130336efa62fa2bdafb82f41bc63bb391ffd817252d47e66f0c350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8039fdade4130336efa62fa2bdafb82f41bc63bb391ffd817252d47e66f0c350->enter($__internal_8039fdade4130336efa62fa2bdafb82f41bc63bb391ffd817252d47e66f0c350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8039fdade4130336efa62fa2bdafb82f41bc63bb391ffd817252d47e66f0c350->leave($__internal_8039fdade4130336efa62fa2bdafb82f41bc63bb391ffd817252d47e66f0c350_prof);

        
        $__internal_6df9c856834d20cb9a8dc1722abc89c331a0de12a9fde39024a804bfe9bf558e->leave($__internal_6df9c856834d20cb9a8dc1722abc89c331a0de12a9fde39024a804bfe9bf558e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

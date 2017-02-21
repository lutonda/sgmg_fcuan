<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_eefc3d76e3eb04f468379b924cdea843c432b16a07c01916c255b985bb4e2d91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a59327d045c06e35caa65c53e52cda73a857973439e6199b435b4323538450d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a59327d045c06e35caa65c53e52cda73a857973439e6199b435b4323538450d->enter($__internal_0a59327d045c06e35caa65c53e52cda73a857973439e6199b435b4323538450d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c3fa1a6b80b23eadcf58792b1b2e2e9d4ba43169ddabf51ac1c02455f8ad9755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fa1a6b80b23eadcf58792b1b2e2e9d4ba43169ddabf51ac1c02455f8ad9755->enter($__internal_c3fa1a6b80b23eadcf58792b1b2e2e9d4ba43169ddabf51ac1c02455f8ad9755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a59327d045c06e35caa65c53e52cda73a857973439e6199b435b4323538450d->leave($__internal_0a59327d045c06e35caa65c53e52cda73a857973439e6199b435b4323538450d_prof);

        
        $__internal_c3fa1a6b80b23eadcf58792b1b2e2e9d4ba43169ddabf51ac1c02455f8ad9755->leave($__internal_c3fa1a6b80b23eadcf58792b1b2e2e9d4ba43169ddabf51ac1c02455f8ad9755_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2dd55cc10b96564bc207523c8a8caa1ecd909edc66fc66b374d8771452add09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2dd55cc10b96564bc207523c8a8caa1ecd909edc66fc66b374d8771452add09->enter($__internal_d2dd55cc10b96564bc207523c8a8caa1ecd909edc66fc66b374d8771452add09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c42b40c30621593527d608dc00427cf3d37bcde9ee18d8deacea7e0b9b10e63f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42b40c30621593527d608dc00427cf3d37bcde9ee18d8deacea7e0b9b10e63f->enter($__internal_c42b40c30621593527d608dc00427cf3d37bcde9ee18d8deacea7e0b9b10e63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c42b40c30621593527d608dc00427cf3d37bcde9ee18d8deacea7e0b9b10e63f->leave($__internal_c42b40c30621593527d608dc00427cf3d37bcde9ee18d8deacea7e0b9b10e63f_prof);

        
        $__internal_d2dd55cc10b96564bc207523c8a8caa1ecd909edc66fc66b374d8771452add09->leave($__internal_d2dd55cc10b96564bc207523c8a8caa1ecd909edc66fc66b374d8771452add09_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3ff63cec818148e585550bb048c6699a11754deb1efd9739651540f3251e7f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ff63cec818148e585550bb048c6699a11754deb1efd9739651540f3251e7f8->enter($__internal_b3ff63cec818148e585550bb048c6699a11754deb1efd9739651540f3251e7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_179ef2161ca20fc25a1e19a661039dbf4a720b3db964742bbffbbd68cf2f5e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179ef2161ca20fc25a1e19a661039dbf4a720b3db964742bbffbbd68cf2f5e0c->enter($__internal_179ef2161ca20fc25a1e19a661039dbf4a720b3db964742bbffbbd68cf2f5e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_179ef2161ca20fc25a1e19a661039dbf4a720b3db964742bbffbbd68cf2f5e0c->leave($__internal_179ef2161ca20fc25a1e19a661039dbf4a720b3db964742bbffbbd68cf2f5e0c_prof);

        
        $__internal_b3ff63cec818148e585550bb048c6699a11754deb1efd9739651540f3251e7f8->leave($__internal_b3ff63cec818148e585550bb048c6699a11754deb1efd9739651540f3251e7f8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

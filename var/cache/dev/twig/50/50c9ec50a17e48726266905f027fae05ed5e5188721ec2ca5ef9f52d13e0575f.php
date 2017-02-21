<?php

/* :MUS:start.html.twig */
class __TwigTemplate_23bec7294d9f13a198b12eb737ccdfb928459efdc408686fb06397955ffb1b33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("inicio.html.twig", ":MUS:start.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "inicio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f649a33d8848a3724007e36c0f952c872b303ab1aa4d2cc1c682475b3af42df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f649a33d8848a3724007e36c0f952c872b303ab1aa4d2cc1c682475b3af42df6->enter($__internal_f649a33d8848a3724007e36c0f952c872b303ab1aa4d2cc1c682475b3af42df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS:start.html.twig"));

        $__internal_6150958e140e0f57ce3eae505f220c9303caa9fa439a66c113b9ae33acb1f4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6150958e140e0f57ce3eae505f220c9303caa9fa439a66c113b9ae33acb1f4ca->enter($__internal_6150958e140e0f57ce3eae505f220c9303caa9fa439a66c113b9ae33acb1f4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS:start.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f649a33d8848a3724007e36c0f952c872b303ab1aa4d2cc1c682475b3af42df6->leave($__internal_f649a33d8848a3724007e36c0f952c872b303ab1aa4d2cc1c682475b3af42df6_prof);

        
        $__internal_6150958e140e0f57ce3eae505f220c9303caa9fa439a66c113b9ae33acb1f4ca->leave($__internal_6150958e140e0f57ce3eae505f220c9303caa9fa439a66c113b9ae33acb1f4ca_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84ff16715855cb012d4dc5a1c9b3d72599a74bbdb15a0ec61b63b748f7e362f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ff16715855cb012d4dc5a1c9b3d72599a74bbdb15a0ec61b63b748f7e362f8->enter($__internal_84ff16715855cb012d4dc5a1c9b3d72599a74bbdb15a0ec61b63b748f7e362f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ec041c8fbf3589dafaedfc151050c0155809ec3ab1209fe20e1d1faf336a33b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec041c8fbf3589dafaedfc151050c0155809ec3ab1209fe20e1d1faf336a33b7->enter($__internal_ec041c8fbf3589dafaedfc151050c0155809ec3ab1209fe20e1d1faf336a33b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "        <script>
            \$(document).ready(function(e){
                \$('li').removeClass('active open selected');
                \$('.inicio').addClass('active open selected');
                \$('.tree').treegrid();
            })
        </script>
    ";
        
        $__internal_ec041c8fbf3589dafaedfc151050c0155809ec3ab1209fe20e1d1faf336a33b7->leave($__internal_ec041c8fbf3589dafaedfc151050c0155809ec3ab1209fe20e1d1faf336a33b7_prof);

        
        $__internal_84ff16715855cb012d4dc5a1c9b3d72599a74bbdb15a0ec61b63b748f7e362f8->leave($__internal_84ff16715855cb012d4dc5a1c9b3d72599a74bbdb15a0ec61b63b748f7e362f8_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_a58c2b33fe60430d09a8c270c6a301cfa77323dca6edccf1b8d6343114170707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a58c2b33fe60430d09a8c270c6a301cfa77323dca6edccf1b8d6343114170707->enter($__internal_a58c2b33fe60430d09a8c270c6a301cfa77323dca6edccf1b8d6343114170707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4f77b38f4b3827dadd55aacb8f4fc99667f6833f34568f93ae42234211520b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f77b38f4b3827dadd55aacb8f4fc99667f6833f34568f93ae42234211520b3->enter($__internal_f4f77b38f4b3827dadd55aacb8f4fc99667f6833f34568f93ae42234211520b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f4f77b38f4b3827dadd55aacb8f4fc99667f6833f34568f93ae42234211520b3->leave($__internal_f4f77b38f4b3827dadd55aacb8f4fc99667f6833f34568f93ae42234211520b3_prof);

        
        $__internal_a58c2b33fe60430d09a8c270c6a301cfa77323dca6edccf1b8d6343114170707->leave($__internal_a58c2b33fe60430d09a8c270c6a301cfa77323dca6edccf1b8d6343114170707_prof);

    }

    public function getTemplateName()
    {
        return ":MUS:start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'inicio.html.twig' %}

    {% block javascripts %}
        <script>
            \$(document).ready(function(e){
                \$('li').removeClass('active open selected');
                \$('.inicio').addClass('active open selected');
                \$('.tree').treegrid();
            })
        </script>
    {% endblock %}

{% block body %}
{% endblock %}", ":MUS:start.html.twig", "/var/www/html/hom/app/Resources/views/MUS/start.html.twig");
    }
}

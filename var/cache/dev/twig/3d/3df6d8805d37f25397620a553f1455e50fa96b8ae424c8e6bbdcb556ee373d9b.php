<?php

/* :amostra:edit.html.twig */
class __TwigTemplate_6a2f317cf9fb7d79af8521ba91027d1fbdcf06ca1c6d9b2845e6b069f913f890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":amostra:edit.html.twig", 1);
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
        $__internal_a5baece32b90beb04652dd3c485b06e04c1c34079cc22a9234e2615494f732f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5baece32b90beb04652dd3c485b06e04c1c34079cc22a9234e2615494f732f7->enter($__internal_a5baece32b90beb04652dd3c485b06e04c1c34079cc22a9234e2615494f732f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra:edit.html.twig"));

        $__internal_67dce84f8a49041101929b7d2b2dc73b0c600aa9ed7ab7e3e54ec205572dd5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67dce84f8a49041101929b7d2b2dc73b0c600aa9ed7ab7e3e54ec205572dd5bb->enter($__internal_67dce84f8a49041101929b7d2b2dc73b0c600aa9ed7ab7e3e54ec205572dd5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5baece32b90beb04652dd3c485b06e04c1c34079cc22a9234e2615494f732f7->leave($__internal_a5baece32b90beb04652dd3c485b06e04c1c34079cc22a9234e2615494f732f7_prof);

        
        $__internal_67dce84f8a49041101929b7d2b2dc73b0c600aa9ed7ab7e3e54ec205572dd5bb->leave($__internal_67dce84f8a49041101929b7d2b2dc73b0c600aa9ed7ab7e3e54ec205572dd5bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3c90f3cdf1326632c7d553f9f4e1dd2fcfb9d37528c4d1ddde1adf3508c8d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3c90f3cdf1326632c7d553f9f4e1dd2fcfb9d37528c4d1ddde1adf3508c8d38->enter($__internal_c3c90f3cdf1326632c7d553f9f4e1dd2fcfb9d37528c4d1ddde1adf3508c8d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02d7cf33e2cf271461056b7b44d0acabc7a608b8b13936dc4c1c1026541f6614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d7cf33e2cf271461056b7b44d0acabc7a608b8b13936dc4c1c1026541f6614->enter($__internal_02d7cf33e2cf271461056b7b44d0acabc7a608b8b13936dc4c1c1026541f6614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Amostra edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("amostra_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_02d7cf33e2cf271461056b7b44d0acabc7a608b8b13936dc4c1c1026541f6614->leave($__internal_02d7cf33e2cf271461056b7b44d0acabc7a608b8b13936dc4c1c1026541f6614_prof);

        
        $__internal_c3c90f3cdf1326632c7d553f9f4e1dd2fcfb9d37528c4d1ddde1adf3508c8d38->leave($__internal_c3c90f3cdf1326632c7d553f9f4e1dd2fcfb9d37528c4d1ddde1adf3508c8d38_prof);

    }

    public function getTemplateName()
    {
        return ":amostra:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Amostra edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('amostra_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":amostra:edit.html.twig", "/var/www/html/hom/app/Resources/views/amostra/edit.html.twig");
    }
}

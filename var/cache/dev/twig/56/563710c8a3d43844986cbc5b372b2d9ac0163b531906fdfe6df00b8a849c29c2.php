<?php

/* :MUS:show.html.twig */
class __TwigTemplate_6af5990af1730eac2afd72e2fedb05a90c3215ba42f8b5200bc6561b80271378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":MUS:show.html.twig", 1);
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
        $__internal_31c0f8857dfddddfc75e2bef55a241debba91b7c395138601ea142bad18a8407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c0f8857dfddddfc75e2bef55a241debba91b7c395138601ea142bad18a8407->enter($__internal_31c0f8857dfddddfc75e2bef55a241debba91b7c395138601ea142bad18a8407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS:show.html.twig"));

        $__internal_d9be66d7c03ad87dcda1318c4f062fb617d8547d527a2acf5eba4cff4431afd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9be66d7c03ad87dcda1318c4f062fb617d8547d527a2acf5eba4cff4431afd0->enter($__internal_d9be66d7c03ad87dcda1318c4f062fb617d8547d527a2acf5eba4cff4431afd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c0f8857dfddddfc75e2bef55a241debba91b7c395138601ea142bad18a8407->leave($__internal_31c0f8857dfddddfc75e2bef55a241debba91b7c395138601ea142bad18a8407_prof);

        
        $__internal_d9be66d7c03ad87dcda1318c4f062fb617d8547d527a2acf5eba4cff4431afd0->leave($__internal_d9be66d7c03ad87dcda1318c4f062fb617d8547d527a2acf5eba4cff4431afd0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6eead15f04893f5a1cedb8c16f20ae7f973f83c9fd3a5e6eb4c77cbb29574117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eead15f04893f5a1cedb8c16f20ae7f973f83c9fd3a5e6eb4c77cbb29574117->enter($__internal_6eead15f04893f5a1cedb8c16f20ae7f973f83c9fd3a5e6eb4c77cbb29574117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f71aa34038b63154e14f36867acf548729e84e4c612381c9a05722271058dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f71aa34038b63154e14f36867acf548729e84e4c612381c9a05722271058dc1->enter($__internal_8f71aa34038b63154e14f36867acf548729e84e4c612381c9a05722271058dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Amostra</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 14, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Risca</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 18, $this->getSourceContext()); })()), "risca", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Brilho</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 22, $this->getSourceContext()); })()), "brilho", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dureza</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 26, $this->getSourceContext()); })()), "dureza", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Peso</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 30, $this->getSourceContext()); })()), "peso", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datacadastro</th>
                <td>";
        // line 34
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 34, $this->getSourceContext()); })()), "datacadastro", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 34, $this->getSourceContext()); })()), "datacadastro", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Caraceristica</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 38, $this->getSourceContext()); })()), "caraceristica", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Aplicacao</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 42, $this->getSourceContext()); })()), "aplicacao", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data</th>
                <td>";
        // line 46
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 46, $this->getSourceContext()); })()), "data", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 46, $this->getSourceContext()); })()), "data", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("amostra_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("amostra_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 56, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 59, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 61, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8f71aa34038b63154e14f36867acf548729e84e4c612381c9a05722271058dc1->leave($__internal_8f71aa34038b63154e14f36867acf548729e84e4c612381c9a05722271058dc1_prof);

        
        $__internal_6eead15f04893f5a1cedb8c16f20ae7f973f83c9fd3a5e6eb4c77cbb29574117->leave($__internal_6eead15f04893f5a1cedb8c16f20ae7f973f83c9fd3a5e6eb4c77cbb29574117_prof);

    }

    public function getTemplateName()
    {
        return ":MUS:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 61,  146 => 59,  140 => 56,  134 => 53,  122 => 46,  115 => 42,  108 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Amostra</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ amostra.id }}</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>{{ amostra.nome }}</td>
            </tr>
            <tr>
                <th>Risca</th>
                <td>{{ amostra.risca }}</td>
            </tr>
            <tr>
                <th>Brilho</th>
                <td>{{ amostra.brilho }}</td>
            </tr>
            <tr>
                <th>Dureza</th>
                <td>{{ amostra.dureza }}</td>
            </tr>
            <tr>
                <th>Peso</th>
                <td>{{ amostra.peso }}</td>
            </tr>
            <tr>
                <th>Datacadastro</th>
                <td>{% if amostra.datacadastro %}{{ amostra.datacadastro|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Caraceristica</th>
                <td>{{ amostra.caraceristica }}</td>
            </tr>
            <tr>
                <th>Aplicacao</th>
                <td>{{ amostra.aplicacao }}</td>
            </tr>
            <tr>
                <th>Data</th>
                <td>{% if amostra.data %}{{ amostra.data|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('amostra_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('amostra_edit', { 'id': amostra.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":MUS:show.html.twig", "/var/www/html/hom/app/Resources/views/MUS/show.html.twig");
    }
}

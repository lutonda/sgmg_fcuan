<?php

/* :amostra:show.html.twig */
class __TwigTemplate_4b8679e2464eb5ceeee69bedd061a37504c3d3c27a1c0195c3b79fb4c972787d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":amostra:show.html.twig", 1);
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
        $__internal_255c031c184fd104041325ec974a2cb6d38b841698fef431a1c7e54f63c0140c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255c031c184fd104041325ec974a2cb6d38b841698fef431a1c7e54f63c0140c->enter($__internal_255c031c184fd104041325ec974a2cb6d38b841698fef431a1c7e54f63c0140c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra:show.html.twig"));

        $__internal_0abfd5086b81a492e69a798ac2cef116a6a3462381a11a811b9620d0e2b8859a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0abfd5086b81a492e69a798ac2cef116a6a3462381a11a811b9620d0e2b8859a->enter($__internal_0abfd5086b81a492e69a798ac2cef116a6a3462381a11a811b9620d0e2b8859a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_255c031c184fd104041325ec974a2cb6d38b841698fef431a1c7e54f63c0140c->leave($__internal_255c031c184fd104041325ec974a2cb6d38b841698fef431a1c7e54f63c0140c_prof);

        
        $__internal_0abfd5086b81a492e69a798ac2cef116a6a3462381a11a811b9620d0e2b8859a->leave($__internal_0abfd5086b81a492e69a798ac2cef116a6a3462381a11a811b9620d0e2b8859a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d5ca2f78c063986c790835db90272690f8fe17425ee1ae034c1cf85f5e1f638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5ca2f78c063986c790835db90272690f8fe17425ee1ae034c1cf85f5e1f638->enter($__internal_5d5ca2f78c063986c790835db90272690f8fe17425ee1ae034c1cf85f5e1f638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1b7ab950e97e4bc45f40c2d98621a84bb39db220d462f084e536fc6ce6ca2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b7ab950e97e4bc45f40c2d98621a84bb39db220d462f084e536fc6ce6ca2c4->enter($__internal_a1b7ab950e97e4bc45f40c2d98621a84bb39db220d462f084e536fc6ce6ca2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a1b7ab950e97e4bc45f40c2d98621a84bb39db220d462f084e536fc6ce6ca2c4->leave($__internal_a1b7ab950e97e4bc45f40c2d98621a84bb39db220d462f084e536fc6ce6ca2c4_prof);

        
        $__internal_5d5ca2f78c063986c790835db90272690f8fe17425ee1ae034c1cf85f5e1f638->leave($__internal_5d5ca2f78c063986c790835db90272690f8fe17425ee1ae034c1cf85f5e1f638_prof);

    }

    public function getTemplateName()
    {
        return ":amostra:show.html.twig";
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
", ":amostra:show.html.twig", "/var/www/html/hom/app/Resources/views/amostra/show.html.twig");
    }
}

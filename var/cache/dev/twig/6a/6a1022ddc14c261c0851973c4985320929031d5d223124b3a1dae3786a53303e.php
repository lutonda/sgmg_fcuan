<?php

/* :amostra/api:amostra_rocha_ver.html.twig */
class __TwigTemplate_6f604e0e1aaf6183c284607126225b99be62fbc961921e2d5f6500f4d7832656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c58726a4a62a4898cdef337c6bd55036f1f5a300563babaa2912e4b5b6528038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58726a4a62a4898cdef337c6bd55036f1f5a300563babaa2912e4b5b6528038->enter($__internal_c58726a4a62a4898cdef337c6bd55036f1f5a300563babaa2912e4b5b6528038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:amostra_rocha_ver.html.twig"));

        $__internal_f3cdd8bfbabe62472b1e4ea5dcaa841ce2d8bde49505b9fd54c785d520ec026e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3cdd8bfbabe62472b1e4ea5dcaa841ce2d8bde49505b9fd54c785d520ec026e->enter($__internal_f3cdd8bfbabe62472b1e4ea5dcaa841ce2d8bde49505b9fd54c785d520ec026e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:amostra_rocha_ver.html.twig"));

        // line 1
        echo "<div class=\"caption\">
    <h2 class=\"caption-subject font-dark sbold uppercase titulo\"> ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 2, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
        echo "</h2>
</div>
<div class=\"col-md-6 \">
    <div class=\"portlet-body\">
        <div class=\"table-scrollable\">
            <table class=\"table table-striped table-no-bordered table-advance table-hover\">
                <thead>
                <tr>
                    <td style=\"width: 40%\">
                        Classe
                    </td>
                    <th class=\"hidden-xs\">
                        ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 14, $this->getSourceContext()); })()), "getTipo", array()), "dependencia", array()), "nome", array()), "html", null, true);
        echo " >
                        ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 15, $this->getSourceContext()); })()), "getTipo", array()), "nome", array()), "html", null, true);
        echo "
                    </th>

                </tr>
                <tr>
                    <td>
                        Condições de Formação
                    </td>
                    <th class=\"hidden-xs\">
                        <b>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 24, $this->getSourceContext()); })()), "condicoesdeFormas", array()), "html", null, true);
        echo "</b>
                    </th>

                </tr>
                <tr>
                    <td>
                        Aplicação
                    </td>
                    <th class=\"hidden-xs\">
                        <b>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 33, $this->getSourceContext()); })()), "aplicacao", array()), "html", null, true);
        echo "</b>
                    </th>
                </tr>
                <tr>
                    <td>
                        Mineralogia
                    </td>
                    <th class=\"hidden-xs\">
                        <b>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 41, $this->getSourceContext()); })()), "mineralogia", array()), "html", null, true);
        echo "</b>
                    </th>
                </tr>
                <tr>
                    <td>

                        ";
        // line 47
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 47, $this->getSourceContext()); })()), "tipo", array()), "id", array()) == 13)) {
            // line 48
            echo "                            Modo de jazida
                        ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 49
(isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 49, $this->getSourceContext()); })()), "tipo", array()), "id", array()) == 14)) {
            // line 50
            echo "                            Grau Metamórfico
                        ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 51
(isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 51, $this->getSourceContext()); })()), "tipo", array()), "id", array()) == 15)) {
            // line 52
            echo "                            Ambiente Sedimentar
                        ";
        }
        // line 54
        echo "                    </td>
                    <th class=\"hidden-xs\">
                        ";
        // line 56
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 56, $this->getSourceContext()); })()), "tipo", array()), "id", array()) == 14)) {
            // line 57
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 57, $this->getSourceContext()); })()), "tipoDados", array()), "descricao", array()), "html", null, true);
            echo "
                        ";
        } else {
            // line 59
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 59, $this->getSourceContext()); })()), "tipoDados", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
                // line 60
                echo "                                <b>
                                    ";
                // line 61
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 61, $this->getSourceContext()); })()), "tipo", array()), "id", array()) == 13)) {
                    // line 62
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["tipo"], "idmododejazida", array()), "nome", array()), "html", null, true);
                    echo "
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                 // line 63
(isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 63, $this->getSourceContext()); })()), "tipo", array()), "id", array()) == 14)) {
                    // line 64
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["tipo"], "idmododejazida", array()), "nome", array()), "html", null, true);
                    echo "
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                 // line 65
(isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 65, $this->getSourceContext()); })()), "tipo", array()), "id", array()) == 15)) {
                    // line 66
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tipo"], "nome", array()), "html", null, true);
                    echo "
                                    ";
                }
                // line 68
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["tipo"], "idmododejazida", array()), "nome", array()), "html", null, true);
                echo "
                                </b>,
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                        ";
        }
        // line 72
        echo "                    </th>

                </tr>
                <tr>
                    <td>
                        Prateleira
                    </td>
                    <th class=\"hidden-xs\">
                        <b>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 80, $this->getSourceContext()); })()), "prateleira", array()), "nome", array()), "html", null, true);
        echo "</b>
                    </th>
                </tr>
                <tr>
                    <td>
                        Local de extração
                    </td>
                    <th class=\"hidden-xs\">
                        <b>";
        // line 88
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 88, $this->getSourceContext()); })()), "local", array()), "nome", array())), "html", null, true);
        echo "</b>, Provincia de
                        <b>";
        // line 89
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 89, $this->getSourceContext()); })()), "local", array()), "idprovincia", array()), "nome", array())), "html", null, true);
        echo "</b> -
                        <b>";
        // line 90
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 90, $this->getSourceContext()); })()), "local", array()), "idprovincia", array()), "idpais", array()), "nome", array())), "html", null, true);
        echo "</b>
                    </th>
                </tr>
                <tr>
                    <td>
                        Data
                    </td>
                    <th class=\"hidden-xs\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 97, $this->getSourceContext()); })()), "data", array()), "html", null, true);
        echo "
                    </th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<div class=\"col-md-6\">

    <div class=\"portlet-body\">
        <div class=\"table-scrollable\">
            <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("global/img/acervos/amostra/" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 109, $this->getSourceContext()); })()), "nome", array()))) . "-1.jpg")), "html", null, true);
        echo "\" class=\"img-thumbnail\">
            <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("global/img/acervos/amostra/" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 110, $this->getSourceContext()); })()), "nome", array()))) . "-2.jpg")), "html", null, true);
        echo "\" class=\"img-thumbnail\">
        </div>
    </div>
</div>";
        
        $__internal_c58726a4a62a4898cdef337c6bd55036f1f5a300563babaa2912e4b5b6528038->leave($__internal_c58726a4a62a4898cdef337c6bd55036f1f5a300563babaa2912e4b5b6528038_prof);

        
        $__internal_f3cdd8bfbabe62472b1e4ea5dcaa841ce2d8bde49505b9fd54c785d520ec026e->leave($__internal_f3cdd8bfbabe62472b1e4ea5dcaa841ce2d8bde49505b9fd54c785d520ec026e_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:amostra_rocha_ver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 110,  216 => 109,  201 => 97,  191 => 90,  187 => 89,  183 => 88,  172 => 80,  162 => 72,  159 => 71,  149 => 68,  143 => 66,  141 => 65,  136 => 64,  134 => 63,  129 => 62,  127 => 61,  124 => 60,  119 => 59,  113 => 57,  111 => 56,  107 => 54,  103 => 52,  101 => 51,  98 => 50,  96 => 49,  93 => 48,  91 => 47,  82 => 41,  71 => 33,  59 => 24,  47 => 15,  43 => 14,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"caption\">
    <h2 class=\"caption-subject font-dark sbold uppercase titulo\"> {{ amostra.nome }}</h2>
</div>
<div class=\"col-md-6 \">
    <div class=\"portlet-body\">
        <div class=\"table-scrollable\">
            <table class=\"table table-striped table-no-bordered table-advance table-hover\">
                <thead>
                <tr>
                    <td style=\"width: 40%\">
                        Classe
                    </td>
                    <th class=\"hidden-xs\">
                        {{ amostra.getTipo.dependencia.nome }} >
                        {{ amostra.getTipo.nome }}
                    </th>

                </tr>
                <tr>
                    <td>
                        Condições de Formação
                    </td>
                    <th class=\"hidden-xs\">
                        <b>{{ amostra.condicoesdeFormas }}</b>
                    </th>

                </tr>
                <tr>
                    <td>
                        Aplicação
                    </td>
                    <th class=\"hidden-xs\">
                        <b>{{ amostra.aplicacao }}</b>
                    </th>
                </tr>
                <tr>
                    <td>
                        Mineralogia
                    </td>
                    <th class=\"hidden-xs\">
                        <b>{{ amostra.mineralogia }}</b>
                    </th>
                </tr>
                <tr>
                    <td>

                        {% if amostra.tipo.id == 13 %}
                            Modo de jazida
                        {% elseif amostra.tipo.id == 14 %}
                            Grau Metamórfico
                        {% elseif amostra.tipo.id == 15 %}
                            Ambiente Sedimentar
                        {% endif %}
                    </td>
                    <th class=\"hidden-xs\">
                        {% if amostra.tipo.id == 14 %}
                            {{ amostra.tipoDados.descricao }}
                        {% else %}
                            {% for tipo in amostra.tipoDados %}
                                <b>
                                    {% if amostra.tipo.id == 13 %}
                                        {{ tipo.idmododejazida.nome }}
                                    {% elseif amostra.tipo.id == 14 %}
                                        {{ tipo.idmododejazida.nome }}
                                    {% elseif amostra.tipo.id == 15 %}
                                        {{ tipo.nome }}
                                    {% endif %}
                                    {{ tipo.idmododejazida.nome }}
                                </b>,
                            {% endfor %}
                        {% endif %}
                    </th>

                </tr>
                <tr>
                    <td>
                        Prateleira
                    </td>
                    <th class=\"hidden-xs\">
                        <b>{{ amostra.prateleira.nome }}</b>
                    </th>
                </tr>
                <tr>
                    <td>
                        Local de extração
                    </td>
                    <th class=\"hidden-xs\">
                        <b>{{ amostra.local.nome | capitalize }}</b>, Provincia de
                        <b>{{ amostra.local.idprovincia.nome | capitalize }}</b> -
                        <b>{{ amostra.local.idprovincia.idpais.nome | capitalize }}</b>
                    </th>
                </tr>
                <tr>
                    <td>
                        Data
                    </td>
                    <th class=\"hidden-xs\">{{ amostra.data }}
                    </th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<div class=\"col-md-6\">

    <div class=\"portlet-body\">
        <div class=\"table-scrollable\">
            <img src=\"{{ asset('global/img/acervos/amostra/'~amostra.nome | lower ~'-1.jpg') }}\" class=\"img-thumbnail\">
            <img src=\"{{ asset('global/img/acervos/amostra/'~amostra.nome | lower ~'-2.jpg') }}\" class=\"img-thumbnail\">
        </div>
    </div>
</div>", ":amostra/api:amostra_rocha_ver.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/amostra_rocha_ver.html.twig");
    }
}

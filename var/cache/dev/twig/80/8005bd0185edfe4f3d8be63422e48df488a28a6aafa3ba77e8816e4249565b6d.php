<?php

/* :amostra/api:amostra_fosseis_ver.html.twig */
class __TwigTemplate_762237a38cfad1fd908762bc9fc50cbf870ea09082e6f1aaf76650de10ce52aa extends Twig_Template
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
        $__internal_19d3442032eac75f500a79fcdaa47f727e6afb300e87442b12c120e9a385d46c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d3442032eac75f500a79fcdaa47f727e6afb300e87442b12c120e9a385d46c->enter($__internal_19d3442032eac75f500a79fcdaa47f727e6afb300e87442b12c120e9a385d46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:amostra_fosseis_ver.html.twig"));

        $__internal_bf17d44e38750f3ff34ceebb6a8fad9fadd738007f90831dcdd311546d0dbfce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf17d44e38750f3ff34ceebb6a8fad9fadd738007f90831dcdd311546d0dbfce->enter($__internal_bf17d44e38750f3ff34ceebb6a8fad9fadd738007f90831dcdd311546d0dbfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:amostra_fosseis_ver.html.twig"));

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
                    <td>
                        Classe
                    </td>
                    <th class=\"hidden-xs\">
                        ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 14, $this->getSourceContext()); })()), "tipo", array()), "dependencia", array()), "nome", array()), "html", null, true);
        echo ">
                        ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 15, $this->getSourceContext()); })()), "tipo", array()), "nome", array()), "html", null, true);
        echo "
                    </th>
                </tr>
                <tr>
                    <td>
                        Nome da coleção
                    </td>
                    <th class=\"hidden-xs\">
                        <b>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 23, $this->getSourceContext()); })()), "nomeColecao", array()), "html", null, true);
        echo "</b>
                    </th>

                </tr>
                <tr>
                    <td>
                        Estado de concervação
                    </td>
                    <th class=\"hidden-xs\">
                        <b>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 32, $this->getSourceContext()); })()), "estadoConservacao", array()), "html", null, true);
        echo "</b>
                    </th>
                </tr>
                <tr>
                    <td>
                        Dimenção
                    </td>
                    <th class=\"hidden-xs\">
                        <table>
                            <tr><td>Espeçura: </td><td><b>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 41, $this->getSourceContext()); })()), "dimensao", array()), "especura", array()), "html", null, true);
        echo "</b></td></tr>
                            <tr><td>Altura: </td><td><b>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 42, $this->getSourceContext()); })()), "dimensao", array()), "altura", array()), "html", null, true);
        echo "</b></td></tr>
                            <tr><td>Comprimento: </td><td><b>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 43, $this->getSourceContext()); })()), "dimensao", array()), "comprimento", array()), "html", null, true);
        echo "</b></td></tr>
                            <tr><td>Largura: </td><td><b>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 44, $this->getSourceContext()); })()), "dimensao", array()), "largura", array()), "html", null, true);
        echo "</b></td></tr>
                        </table>
                    </th>
                </tr>
                <tr>
                    <td>
                        Prateleira
                    </td>
                    <th class=\"hidden-xs\">
                        <b>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 53, $this->getSourceContext()); })()), "prateleira", array()), "nome", array()), "html", null, true);
        echo "</b>
                    </th>
                </tr>
                <tr>
                    <td>
                        Local de extração
                    </td>
                    <th class=\"hidden-xs\">
                        <b>";
        // line 61
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 61, $this->getSourceContext()); })()), "localespecifico", array()), "nome", array())), "html", null, true);
        echo "</b>, Provincia de
                        <b>";
        // line 62
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 62, $this->getSourceContext()); })()), "localespecifico", array()), "idprovincia", array()), "nome", array())), "html", null, true);
        echo "</b> -
                        <b>";
        // line 63
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 63, $this->getSourceContext()); })()), "localespecifico", array()), "idprovincia", array()), "idpais", array()), "nome", array())), "html", null, true);
        echo "</b>
                    </th>
                </tr>
                <tr>
                    <td>
                        Local de Colheta
                    </td>
                    <th class=\"hidden-xs\">
                        <b>";
        // line 71
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 71, $this->getSourceContext()); })()), "idlocalcolheita", array()), "nome", array())), "html", null, true);
        echo "</b>, Provincia de
                        <b>";
        // line 72
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 72, $this->getSourceContext()); })()), "idlocalcolheita", array()), "idprovincia", array()), "nome", array())), "html", null, true);
        echo "</b> -
                        <b>";
        // line 73
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 73, $this->getSourceContext()); })()), "idlocalcolheita", array()), "idprovincia", array()), "idpais", array()), "nome", array())), "html", null, true);
        echo "</b>
                    </th>
                </tr>
                <tr>
                    <td>
                        Data
                    </td>
                    <th class=\"hidden-xs\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 80, $this->getSourceContext()); })()), "data", array()), "html", null, true);
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
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("global/img/acervos/amostra/" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 92, $this->getSourceContext()); })()), "nome", array()))) . "-1.jpg")), "html", null, true);
        echo "\" class=\"img-thumbnail\">
            <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("global/img/acervos/amostra/" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 93, $this->getSourceContext()); })()), "nome", array()))) . "-2.jpg")), "html", null, true);
        echo "\" class=\"img-thumbnail\">
        </div>
    </div>
</div>";
        
        $__internal_19d3442032eac75f500a79fcdaa47f727e6afb300e87442b12c120e9a385d46c->leave($__internal_19d3442032eac75f500a79fcdaa47f727e6afb300e87442b12c120e9a385d46c_prof);

        
        $__internal_bf17d44e38750f3ff34ceebb6a8fad9fadd738007f90831dcdd311546d0dbfce->leave($__internal_bf17d44e38750f3ff34ceebb6a8fad9fadd738007f90831dcdd311546d0dbfce_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:amostra_fosseis_ver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 93,  169 => 92,  154 => 80,  144 => 73,  140 => 72,  136 => 71,  125 => 63,  121 => 62,  117 => 61,  106 => 53,  94 => 44,  90 => 43,  86 => 42,  82 => 41,  70 => 32,  58 => 23,  47 => 15,  43 => 14,  28 => 2,  25 => 1,);
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
                    <td>
                        Classe
                    </td>
                    <th class=\"hidden-xs\">
                        {{ amostra.tipo.dependencia.nome }}>
                        {{ amostra.tipo.nome }}
                    </th>
                </tr>
                <tr>
                    <td>
                        Nome da coleção
                    </td>
                    <th class=\"hidden-xs\">
                        <b>{{ amostra.nomeColecao }}</b>
                    </th>

                </tr>
                <tr>
                    <td>
                        Estado de concervação
                    </td>
                    <th class=\"hidden-xs\">
                        <b>{{ amostra.estadoConservacao }}</b>
                    </th>
                </tr>
                <tr>
                    <td>
                        Dimenção
                    </td>
                    <th class=\"hidden-xs\">
                        <table>
                            <tr><td>Espeçura: </td><td><b>{{ amostra.dimensao.especura }}</b></td></tr>
                            <tr><td>Altura: </td><td><b>{{ amostra.dimensao.altura }}</b></td></tr>
                            <tr><td>Comprimento: </td><td><b>{{ amostra.dimensao.comprimento }}</b></td></tr>
                            <tr><td>Largura: </td><td><b>{{ amostra.dimensao.largura }}</b></td></tr>
                        </table>
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
                        <b>{{ amostra.localespecifico.nome | capitalize }}</b>, Provincia de
                        <b>{{ amostra.localespecifico.idprovincia.nome | capitalize}}</b> -
                        <b>{{ amostra.localespecifico.idprovincia.idpais.nome | capitalize}}</b>
                    </th>
                </tr>
                <tr>
                    <td>
                        Local de Colheta
                    </td>
                    <th class=\"hidden-xs\">
                        <b>{{ amostra.idlocalcolheita.nome | capitalize }}</b>, Provincia de
                        <b>{{ amostra.idlocalcolheita.idprovincia.nome | capitalize}}</b> -
                        <b>{{ amostra.idlocalcolheita.idprovincia.idpais.nome | capitalize}}</b>
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
</div>", ":amostra/api:amostra_fosseis_ver.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/amostra_fosseis_ver.html.twig");
    }
}

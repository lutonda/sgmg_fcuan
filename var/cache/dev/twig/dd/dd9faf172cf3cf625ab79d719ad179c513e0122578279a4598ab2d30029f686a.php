<?php

/* :amostra/api:amostra_mineiro_ver.html.twig */
class __TwigTemplate_ddfe6cbeee95d8d50a2479b2111b431a9e456555ce3986fec90e40ba00787e59 extends Twig_Template
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
        $__internal_484d43860cb8feb4e0ffa6f8173b800a11012fb08fc603e806f9e078931924ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_484d43860cb8feb4e0ffa6f8173b800a11012fb08fc603e806f9e078931924ad->enter($__internal_484d43860cb8feb4e0ffa6f8173b800a11012fb08fc603e806f9e078931924ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:amostra_mineiro_ver.html.twig"));

        $__internal_31f452b3e950bec240c0653c48c39c5339753bc6150378f6e29ec8324a67b02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f452b3e950bec240c0653c48c39c5339753bc6150378f6e29ec8324a67b02b->enter($__internal_31f452b3e950bec240c0653c48c39c5339753bc6150378f6e29ec8324a67b02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:amostra_mineiro_ver.html.twig"));

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
                        Classe </td>
                    <th class=\"hidden-xs\">
                        ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 13, $this->getSourceContext()); })()), "getIdcategoria", array()), "dependencia", array()), "nome", array()), "html", null, true);
        echo " >
                        ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 14, $this->getSourceContext()); })()), "getIdcategoria", array()), "nome", array()), "html", null, true);
        echo "
                    </th>

                </tr>
                <tr>
                    <td>
                        Composição </td>
                    <th class=\"hidden-xs\">
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 22, $this->getSourceContext()); })()), "composicaoquimico", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["Elemento"]) {
            // line 23
            echo "                            <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["Elemento"], "nome", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["Elemento"], "simbolo", array()), "html", null, true);
            echo ")</b><br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Elemento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                    </th>

                </tr>
                <tr>
                    <td>
                        Dureza </td>
                    <th class=\"hidden-xs\">
                        Minimo
                        <b>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 33, $this->getSourceContext()); })()), "getIddureza", array()), "getMin", array()), "html", null, true);
        echo "</b>
                        Maximo <b>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 34, $this->getSourceContext()); })()), "getIddureza", array()), "getMax", array()), "html", null, true);
        echo "</b>
                        </th>

                </tr>
                <tr>
                    <td>
                        Cor </td>
                    <th class=\"hidden-xs\">

                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 43, $this->getSourceContext()); })()), "cores", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["Cor"]) {
            // line 44
            echo "                            <label class=\"label\" style=\"background: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["Cor"], "hex", array()), "html", null, true);
            echo "\">-</label><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["Cor"], "nome", array()), "html", null, true);
            echo "</b> <br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Cor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
                         </th>

                </tr>
                <tr>
                    <td>
                        Transparência </td>
                    <th class=\"hidden-xs\">
                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 54, $this->getSourceContext()); })()), "transparencia", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["Trans"]) {
            // line 55
            echo "                            </label><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["Trans"], "nome", array()), "html", null, true);
            echo "</b> <br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Trans'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </th></tr>
                <tr>
                    <td>
                        Brilho </td>
                    <th class=\"hidden-xs\">
                        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 62, $this->getSourceContext()); })()), "brilhos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["bril"]) {
            // line 63
            echo "                            <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bril"], "nome", array()), "html", null, true);
            echo "</b> <br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bril'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </th></tr>
                <tr>
                    <td>
                        Densidade </td>
                    <th class=\"hidden-xs\">
                        ";
        // line 70
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 70, $this->getSourceContext()); })()), "iddensidade", array()))) {
            // line 71
            echo "                        de <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 71, $this->getSourceContext()); })()), "iddensidade", array()), "getMin", array()), "html", null, true);
            echo "</b>
                        á <b>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 72, $this->getSourceContext()); })()), "iddensidade", array()), "getMax", array()), "html", null, true);
            echo "</b>
                        ";
        }
        // line 74
        echo "                    </th></tr>
                <tr>
                    <td>
                        Clivagem </td>
                    <th class=\"hidden-xs\">
                        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 79, $this->getSourceContext()); })()), "clivagem", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cli"]) {
            // line 80
            echo "                            <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cli"], "tipo", array()), "html", null, true);
            echo "</b> {<b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cli"], "valor", array()), "html", null, true);
            echo "</b>} <br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cli'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                    </th></tr>
                <tr>
                    <td>
                        Fratura </td>
                    <th class=\"hidden-xs\">
                        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 87, $this->getSourceContext()); })()), "fractura", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["frac"]) {
            // line 88
            echo "                            <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["frac"], "nome", array()), "html", null, true);
            echo "</b> <br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frac'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                    </th></tr>

                <tr>
                    <td>
                        Hábito </td>
                    <th class=\"hidden-xs\">
                        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 96, $this->getSourceContext()); })()), "habito", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["hab"]) {
            // line 97
            echo "                            <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hab"], "nome", array()), "html", null, true);
            echo "</b> <br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                    </th></tr>
                <tr>
                    <td>
                        Sistema cristalino </td>
                    <th class=\"hidden-xs\">
                        ";
        // line 104
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 104, $this->getSourceContext()); })()), "idsistemacristalina", array()))) {
            // line 105
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 105, $this->getSourceContext()); })()), "idsistemacristalina", array()), "getNome", array()), "html", null, true);
            echo "
                        ";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 106, $this->getSourceContext()); })()), "idsistemacristalina", array()), "getDescricao", array()), "html", null, true);
            echo "
                        ";
        }
        // line 108
        echo "                    </th></tr>
                <tr>
                    <td>
                        Forma dos Cristais </td>
                    <th class=\"hidden-xs\">
                    </th></tr>
                <tr>
                    <td>
                        Ocorrência </td>
                    <th class=\"hidden-xs\">";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 117, $this->getSourceContext()); })()), "idocorencia", array()), "html", null, true);
        echo "
                    </th></tr>
                <tr>
                    <td>
                        Gêneses </td>
                    <th class=\"hidden-xs\">
                        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 123, $this->getSourceContext()); })()), "genese", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gen"]) {
            // line 124
            echo "                            <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["gen"], "nome", array()), "html", null, true);
            echo "</b> <br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                    </th></tr>
                <tr>
                    <td>
                        Paragêneses </td>
                    <th class=\"hidden-xs\">
                        ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 131, $this->getSourceContext()); })()), "paragenese", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pgen"]) {
            // line 132
            echo "                            <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pgen"], "nome", array()), "html", null, true);
            echo "</b> <br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pgen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                    </th></tr>
                <tr>
                    <td>
                        características Particulares </td>
                    <th class=\"hidden-xs\">";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 138, $this->getSourceContext()); })()), "caraceristica", array()), "html", null, true);
        echo "
                    </th></tr>
                <tr>
                    <td>
                        Aplicação </td>
                    <th class=\"hidden-xs\">";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 143, $this->getSourceContext()); })()), "aplicacao", array()), "html", null, true);
        echo "
                    </th></tr>
                <tr>
                    <td>
                        Data de cadastro </td>
                    <th class=\"hidden-xs\">";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 148, $this->getSourceContext()); })()), "data", array()), "html", null, true);
        echo "
                    </th></tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<div class=\"col-md-6\">

    <div class=\"portlet-body\">
        <div class=\"table-scrollable\">
    <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("global/img/acervos/mineiro/" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 159, $this->getSourceContext()); })()), "nome", array()))) . "-1.jpg")), "html", null, true);
        echo "\" class=\"img-thumbnail\">
    <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("global/img/acervos/mineiro/" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["amostra"]) || array_key_exists("amostra", $context) ? $context["amostra"] : (function () { throw new Twig_Error_Runtime('Variable "amostra" does not exist.', 160, $this->getSourceContext()); })()), "nome", array()))) . "-2.jpg")), "html", null, true);
        echo "\" class=\"img-thumbnail\">
        </div>
    </div>
</div>";
        
        $__internal_484d43860cb8feb4e0ffa6f8173b800a11012fb08fc603e806f9e078931924ad->leave($__internal_484d43860cb8feb4e0ffa6f8173b800a11012fb08fc603e806f9e078931924ad_prof);

        
        $__internal_31f452b3e950bec240c0653c48c39c5339753bc6150378f6e29ec8324a67b02b->leave($__internal_31f452b3e950bec240c0653c48c39c5339753bc6150378f6e29ec8324a67b02b_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:amostra_mineiro_ver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 160,  346 => 159,  332 => 148,  324 => 143,  316 => 138,  310 => 134,  301 => 132,  297 => 131,  290 => 126,  281 => 124,  277 => 123,  268 => 117,  257 => 108,  252 => 106,  247 => 105,  245 => 104,  238 => 99,  229 => 97,  225 => 96,  217 => 90,  208 => 88,  204 => 87,  197 => 82,  186 => 80,  182 => 79,  175 => 74,  170 => 72,  165 => 71,  163 => 70,  156 => 65,  147 => 63,  143 => 62,  136 => 57,  127 => 55,  123 => 54,  113 => 46,  102 => 44,  98 => 43,  86 => 34,  82 => 33,  72 => 25,  61 => 23,  57 => 22,  46 => 14,  42 => 13,  28 => 2,  25 => 1,);
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
                        Classe </td>
                    <th class=\"hidden-xs\">
                        {{ amostra.getIdcategoria.dependencia.nome }} >
                        {{ amostra.getIdcategoria.nome }}
                    </th>

                </tr>
                <tr>
                    <td>
                        Composição </td>
                    <th class=\"hidden-xs\">
                        {% for Elemento in amostra.composicaoquimico %}
                            <b>{{ Elemento.nome }} ({{ Elemento.simbolo }})</b><br>
                        {% endfor %}
                    </th>

                </tr>
                <tr>
                    <td>
                        Dureza </td>
                    <th class=\"hidden-xs\">
                        Minimo
                        <b>{{ amostra.getIddureza.getMin }}</b>
                        Maximo <b>{{ amostra.getIddureza.getMax }}</b>
                        </th>

                </tr>
                <tr>
                    <td>
                        Cor </td>
                    <th class=\"hidden-xs\">

                        {% for Cor in amostra.cores %}
                            <label class=\"label\" style=\"background: {{ Cor.hex }}\">-</label><b>{{ Cor.nome }}</b> <br>
                        {% endfor %}

                         </th>

                </tr>
                <tr>
                    <td>
                        Transparência </td>
                    <th class=\"hidden-xs\">
                        {% for Trans in amostra.transparencia %}
                            </label><b>{{ Trans.nome }}</b> <br>
                        {% endfor %}
                    </th></tr>
                <tr>
                    <td>
                        Brilho </td>
                    <th class=\"hidden-xs\">
                        {% for bril in amostra.brilhos %}
                            <b>{{ bril.nome }}</b> <br>
                        {% endfor %}
                    </th></tr>
                <tr>
                    <td>
                        Densidade </td>
                    <th class=\"hidden-xs\">
                        {% if amostra.iddensidade is not null %}
                        de <b>{{ amostra.iddensidade.getMin }}</b>
                        á <b>{{ amostra.iddensidade.getMax }}</b>
                        {% endif %}
                    </th></tr>
                <tr>
                    <td>
                        Clivagem </td>
                    <th class=\"hidden-xs\">
                        {% for cli in amostra.clivagem %}
                            <b>{{ cli.tipo }}</b> {<b>{{ cli.valor }}</b>} <br>
                        {% endfor %}
                    </th></tr>
                <tr>
                    <td>
                        Fratura </td>
                    <th class=\"hidden-xs\">
                        {% for frac in amostra.fractura %}
                            <b>{{ frac.nome }}</b> <br>
                        {% endfor %}
                    </th></tr>

                <tr>
                    <td>
                        Hábito </td>
                    <th class=\"hidden-xs\">
                        {% for hab in amostra.habito %}
                            <b>{{ hab.nome }}</b> <br>
                        {% endfor %}
                    </th></tr>
                <tr>
                    <td>
                        Sistema cristalino </td>
                    <th class=\"hidden-xs\">
                        {% if amostra.idsistemacristalina is not null %}
                        {{ amostra.idsistemacristalina.getNome}}
                        {{ amostra.idsistemacristalina.getDescricao}}
                        {% endif %}
                    </th></tr>
                <tr>
                    <td>
                        Forma dos Cristais </td>
                    <th class=\"hidden-xs\">
                    </th></tr>
                <tr>
                    <td>
                        Ocorrência </td>
                    <th class=\"hidden-xs\">{{ amostra.idocorencia }}
                    </th></tr>
                <tr>
                    <td>
                        Gêneses </td>
                    <th class=\"hidden-xs\">
                        {% for gen in amostra.genese %}
                            <b>{{ gen.nome }}</b> <br>
                        {% endfor %}
                    </th></tr>
                <tr>
                    <td>
                        Paragêneses </td>
                    <th class=\"hidden-xs\">
                        {% for pgen in amostra.paragenese %}
                            <b>{{ pgen.nome }}</b> <br>
                        {% endfor %}
                    </th></tr>
                <tr>
                    <td>
                        características Particulares </td>
                    <th class=\"hidden-xs\">{{ amostra.caraceristica }}
                    </th></tr>
                <tr>
                    <td>
                        Aplicação </td>
                    <th class=\"hidden-xs\">{{ amostra.aplicacao }}
                    </th></tr>
                <tr>
                    <td>
                        Data de cadastro </td>
                    <th class=\"hidden-xs\">{{ amostra.data }}
                    </th></tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<div class=\"col-md-6\">

    <div class=\"portlet-body\">
        <div class=\"table-scrollable\">
    <img src=\"{{ asset('global/img/acervos/mineiro/'~amostra.nome | lower ~'-1.jpg') }}\" class=\"img-thumbnail\">
    <img src=\"{{ asset('global/img/acervos/mineiro/'~amostra.nome | lower ~'-2.jpg') }}\" class=\"img-thumbnail\">
        </div>
    </div>
</div>", ":amostra/api:amostra_mineiro_ver.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/amostra_mineiro_ver.html.twig");
    }
}

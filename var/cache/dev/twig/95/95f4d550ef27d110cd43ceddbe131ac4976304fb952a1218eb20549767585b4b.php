<?php

/* :amostra/api:amostra_ver.html.twig */
class __TwigTemplate_9d85a171411a9492897496f8be914f2223f618bd39016ba35b6cf6b5759fcc28 extends Twig_Template
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
        $__internal_24c6e05e244b7d0302f122c1165b18ac440a5cc6ab489ad62e782d23c8be658a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c6e05e244b7d0302f122c1165b18ac440a5cc6ab489ad62e782d23c8be658a->enter($__internal_24c6e05e244b7d0302f122c1165b18ac440a5cc6ab489ad62e782d23c8be658a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:amostra_ver.html.twig"));

        $__internal_fca2a4068ec7aef33f7c37254598db3ce2d7c026910d1721e245613e413aa10b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca2a4068ec7aef33f7c37254598db3ce2d7c026910d1721e245613e413aa10b->enter($__internal_fca2a4068ec7aef33f7c37254598db3ce2d7c026910d1721e245613e413aa10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:amostra_ver.html.twig"));

        // line 1
        echo "<div class=\"caption\">
    <h2 class=\"caption-subject font-dark sbold uppercase titulo\"> ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 2, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 13, $this->getSourceContext()); })()), "getIdcategoria", array()), "dependencia", array()), "nome", array()), "html", null, true);
        echo " >
                        ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 14, $this->getSourceContext()); })()), "getIdcategoria", array()), "nome", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 22, $this->getSourceContext()); })()), "composicaoquimico", array()));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 33, $this->getSourceContext()); })()), "getIddureza", array()), "getMin", array()), "html", null, true);
        echo "</b>
                        Maximo <b>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 34, $this->getSourceContext()); })()), "getIddureza", array()), "getMax", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 43, $this->getSourceContext()); })()), "cores", array()));
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
                        Transparencia </td>
                    <th class=\"hidden-xs\">

                    </th></tr>
                <tr>
                    <td>
                        Brilho </td>
                    <th class=\"hidden-xs\">
                    </th></tr>
                <tr>
                    <td>
                        Densidade </td>
                    <th class=\"hidden-xs\">
                        ";
        // line 65
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 65, $this->getSourceContext()); })()), "iddensidade", array()))) {
            // line 66
            echo "                        de <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 66, $this->getSourceContext()); })()), "iddensidade", array()), "getMin", array()), "html", null, true);
            echo "</b>
                        á <b>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 67, $this->getSourceContext()); })()), "iddensidade", array()), "getMax", array()), "html", null, true);
            echo "</b>
                        ";
        }
        // line 69
        echo "                    </th></tr>
                <tr>
                    <td>
                        Clivagem </td>
                    <th class=\"hidden-xs\">
                    </th></tr>
                <tr>
                    <td>
                        Fractura </td>
                    <th class=\"hidden-xs\">
                    </th></tr>

                <tr>
                    <td>
                        Hábito </td>
                    <th class=\"hidden-xs\">
                    </th></tr>
                <tr>
                    <td>
                        Sistema cristalino </td>
                    <th class=\"hidden-xs\">
                        ";
        // line 90
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 90, $this->getSourceContext()); })()), "idsistemacristalina", array()))) {
            // line 91
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 91, $this->getSourceContext()); })()), "idsistemacristalina", array()), "getNome", array()), "html", null, true);
            echo "
                        ";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 92, $this->getSourceContext()); })()), "idsistemacristalina", array()), "getDescricao", array()), "html", null, true);
            echo "
                        ";
        }
        // line 94
        echo "                    </th></tr>
                <tr>
                    <td>
                        Forma dos Cristais </td>
                    <th class=\"hidden-xs\">
                    </th></tr>
                <tr>
                    <td>
                        Ocorencia </td>
                    <th class=\"hidden-xs\">";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 103, $this->getSourceContext()); })()), "idocorencia", array()), "html", null, true);
        echo "
                    </th></tr>
                <tr>
                    <td>
                        Geneses </td>
                    <th class=\"hidden-xs\">
                    </th></tr>
                <tr>
                    <td>
                        Parageneses </td>
                    <th class=\"hidden-xs\">
                    </th></tr>
                <tr>
                    <td>
                        caracteristicas Particulares </td>
                    <th class=\"hidden-xs\">";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 118, $this->getSourceContext()); })()), "caraceristica", array()), "html", null, true);
        echo "
                    </th></tr>
                <tr>
                    <td>
                        Aplicação </td>
                    <th class=\"hidden-xs\">";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 123, $this->getSourceContext()); })()), "aplicacao", array()), "html", null, true);
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
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("global/img/acervos/mineiro/" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 134, $this->getSourceContext()); })()), "nome", array()))) . "-1.jpg")), "html", null, true);
        echo "\" class=\"img-thumbnail\">
    <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("global/img/acervos/mineiro/" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Mineiro"]) || array_key_exists("Mineiro", $context) ? $context["Mineiro"] : (function () { throw new Twig_Error_Runtime('Variable "Mineiro" does not exist.', 135, $this->getSourceContext()); })()), "nome", array()))) . "-2.jpg")), "html", null, true);
        echo "\" class=\"img-thumbnail\">
        </div>
    </div>
</div>";
        
        $__internal_24c6e05e244b7d0302f122c1165b18ac440a5cc6ab489ad62e782d23c8be658a->leave($__internal_24c6e05e244b7d0302f122c1165b18ac440a5cc6ab489ad62e782d23c8be658a_prof);

        
        $__internal_fca2a4068ec7aef33f7c37254598db3ce2d7c026910d1721e245613e413aa10b->leave($__internal_fca2a4068ec7aef33f7c37254598db3ce2d7c026910d1721e245613e413aa10b_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:amostra_ver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 135,  232 => 134,  218 => 123,  210 => 118,  192 => 103,  181 => 94,  176 => 92,  171 => 91,  169 => 90,  146 => 69,  141 => 67,  136 => 66,  134 => 65,  113 => 46,  102 => 44,  98 => 43,  86 => 34,  82 => 33,  72 => 25,  61 => 23,  57 => 22,  46 => 14,  42 => 13,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"caption\">
    <h2 class=\"caption-subject font-dark sbold uppercase titulo\"> {{ Mineiro.nome }}</h2>
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
                        {{ Mineiro.getIdcategoria.dependencia.nome }} >
                        {{ Mineiro.getIdcategoria.nome }}
                    </th>

                </tr>
                <tr>
                    <td>
                        Composição </td>
                    <th class=\"hidden-xs\">
                        {% for Elemento in Mineiro.composicaoquimico %}
                            <b>{{ Elemento.nome }} ({{ Elemento.simbolo }})</b><br>
                        {% endfor %}
                    </th>

                </tr>
                <tr>
                    <td>
                        Dureza </td>
                    <th class=\"hidden-xs\">
                        Minimo
                        <b>{{ Mineiro.getIddureza.getMin }}</b>
                        Maximo <b>{{ Mineiro.getIddureza.getMax }}</b>
                        </th>

                </tr>
                <tr>
                    <td>
                        Cor </td>
                    <th class=\"hidden-xs\">

                        {% for Cor in Mineiro.cores %}
                            <label class=\"label\" style=\"background: {{ Cor.hex }}\">-</label><b>{{ Cor.nome }}</b> <br>
                        {% endfor %}

                         </th>

                </tr>
                <tr>
                    <td>
                        Transparencia </td>
                    <th class=\"hidden-xs\">

                    </th></tr>
                <tr>
                    <td>
                        Brilho </td>
                    <th class=\"hidden-xs\">
                    </th></tr>
                <tr>
                    <td>
                        Densidade </td>
                    <th class=\"hidden-xs\">
                        {% if Mineiro.iddensidade is not null %}
                        de <b>{{ Mineiro.iddensidade.getMin }}</b>
                        á <b>{{ Mineiro.iddensidade.getMax }}</b>
                        {% endif %}
                    </th></tr>
                <tr>
                    <td>
                        Clivagem </td>
                    <th class=\"hidden-xs\">
                    </th></tr>
                <tr>
                    <td>
                        Fractura </td>
                    <th class=\"hidden-xs\">
                    </th></tr>

                <tr>
                    <td>
                        Hábito </td>
                    <th class=\"hidden-xs\">
                    </th></tr>
                <tr>
                    <td>
                        Sistema cristalino </td>
                    <th class=\"hidden-xs\">
                        {% if Mineiro.idsistemacristalina is not null %}
                        {{ Mineiro.idsistemacristalina.getNome}}
                        {{ Mineiro.idsistemacristalina.getDescricao}}
                        {% endif %}
                    </th></tr>
                <tr>
                    <td>
                        Forma dos Cristais </td>
                    <th class=\"hidden-xs\">
                    </th></tr>
                <tr>
                    <td>
                        Ocorencia </td>
                    <th class=\"hidden-xs\">{{ Mineiro.idocorencia }}
                    </th></tr>
                <tr>
                    <td>
                        Geneses </td>
                    <th class=\"hidden-xs\">
                    </th></tr>
                <tr>
                    <td>
                        Parageneses </td>
                    <th class=\"hidden-xs\">
                    </th></tr>
                <tr>
                    <td>
                        caracteristicas Particulares </td>
                    <th class=\"hidden-xs\">{{ Mineiro.caraceristica }}
                    </th></tr>
                <tr>
                    <td>
                        Aplicação </td>
                    <th class=\"hidden-xs\">{{ Mineiro.aplicacao }}
                    </th></tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<div class=\"col-md-6\">

    <div class=\"portlet-body\">
        <div class=\"table-scrollable\">
    <img src=\"{{ asset('global/img/acervos/mineiro/'~Mineiro.nome | lower ~'-1.jpg') }}\" class=\"img-thumbnail\">
    <img src=\"{{ asset('global/img/acervos/mineiro/'~Mineiro.nome | lower ~'-2.jpg') }}\" class=\"img-thumbnail\">
        </div>
    </div>
</div>", ":amostra/api:amostra_ver.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/amostra_ver.html.twig");
    }
}

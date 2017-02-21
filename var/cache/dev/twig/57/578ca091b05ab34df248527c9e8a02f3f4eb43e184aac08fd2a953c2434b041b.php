<?php

/* :MVS:visita_list.html.twig */
class __TwigTemplate_79ae80283ea210568297b6e6d2cf192274879332840a76c1d0d77864a9c68b39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2eda80b09b7867c6f7aecc46e28ffe506558353c9b3a335facf0f098fbe36e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2eda80b09b7867c6f7aecc46e28ffe506558353c9b3a335facf0f098fbe36e1->enter($__internal_b2eda80b09b7867c6f7aecc46e28ffe506558353c9b3a335facf0f098fbe36e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MVS:visita_list.html.twig"));

        $__internal_ecb1f874b80bbc0f52c639604631ba24e27a080bd4b2fea121a159c6975f30c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb1f874b80bbc0f52c639604631ba24e27a080bd4b2fea121a159c6975f30c3->enter($__internal_ecb1f874b80bbc0f52c639604631ba24e27a080bd4b2fea121a159c6975f30c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MVS:visita_list.html.twig"));

        // line 1
        $this->displayBlock('css', $context, $blocks);
        // line 4
        $this->displayBlock('javascript', $context, $blocks);
        // line 62
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption font-dark\">
                    <i class=\"icon-user font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> VISITA</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">

                        ";
        // line 74
        if (twig_in_filter("ROLE_VISITA_ADD", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 74, $this->getSourceContext()); })()), "R", array()))) {
            // line 75
            echo "                        <button id=\"sample_editable_1_new\" class=\"btn sbold green cadastrar\" title=\"membro\" VALUE=\"0\">
                            Inserir Nova
                            <i class=\"fa fa-plus\"></i>
                        </button>
                        ";
        }
        // line 80
        echo "                        <button class=\"btn green  btn-outline dropdown-toggle\" data-toggle=\"dropdown\"
                                aria-expanded=\"false\">Feramentas
                            <i class=\"fa fa-angle-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu pull-right\">
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"fa fa-print\"></i> Imprimir </a>
                            </li>
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"fa fa-file-pdf-o\"></i> Salvar em PDF </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">

                <table class=\"table table-striped table-bordered dt-responsive nowrap table-hover\">
                    <thead>
                    <tr role=\"row\">
                        <th style=\"width: 35px;\"></th>
                        <th style=\"width: 200px;\">
                            Nome participante
                        </th>
                        <th style=\"width: 80px;\">
                            Tipo
                        </th>
                        <th style=\"width: 100px;\">
                            Data Visita
                        </th>
                        <th style=\"width: 60px;\">
                            Estado
                        </th>
                        <th style=\"width: 180px;\">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 121
        $context["i"] = 0;
        // line 122
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 122, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["membro"]) {
            // line 123
            echo "                    ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 123, $this->getSourceContext()); })()) + 1);
            // line 124
            echo "                    <tr class=\"gradeX odd\" role=\"row\">
                        <td class=\"sorting_1\"> ";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 125, $this->getSourceContext()); })()), "html", null, true);
            echo " </td>
                        <td>
                            ";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "Idparticipante", array()), "nome", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "tipo", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "dataVisita", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                                    <span class=\"label label-sm
                                    ";
            // line 137
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "estado", array()) == "Pendente")) {
                // line 138
                echo "                                        label-warning
                                    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 139
$context["membro"], "estado", array()) == "Activo")) {
                // line 140
                echo "                                        label-primary
                                    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 141
$context["membro"], "estado", array()) == "Excluido")) {
                // line 142
                echo "                                        label-danger
                                    ";
            }
            // line 144
            echo "                                    \">
                                    ";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "estado", array()), "html", null, true);
            echo " </span>
                        </td>
                        <td>
                            <div class=\"btn-group\">



                                ";
            // line 152
            if (twig_in_filter("ROLE_VISITA_DELETE", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 152, $this->getSourceContext()); })()), "R", array()))) {
                // line 153
                echo "                                <button class=\"btn btn-xs red dropdown-toggle eliminar\" title=\"membro\" type=\"button\"
                                        aria-expanded=\"false\" value=\"";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "id", array()), "html", null, true);
                echo "\" d=\"\">
                                    <i class=\"fa fa-eraser\"></i> Eliminar
                                </button>
                                ";
            }
            // line 158
            echo "                                ";
            if (twig_in_filter("ROLE_VISITA_EDIT", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 158, $this->getSourceContext()); })()), "R", array()))) {
                // line 159
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visita_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "id", array()))), "html", null, true);
                echo "\">
                                        <button class=\"btn btn-xs green dropdown-toggle editar\"
                                                value=\"";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "id", array()), "html", null, true);
                echo "\" type=\"button\"
                                                aria-expanded=\"false\">
                                            <i class=\"fa fa-edit\"></i> Editar
                                        </button></a>
                                ";
            }
            // line 166
            echo "                                ";
            if (twig_in_filter("ROLE_VISITA_VIEW", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 166, $this->getSourceContext()); })()), "R", array()))) {
                // line 167
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visita_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "id", array()))), "html", null, true);
                echo "\">
                                        <button class=\"btn btn-xs green dropdown-toggle ver\" title=\"membro\"
                                                value=\"";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "id", array()), "html", null, true);
                echo "\" type=\"button\"
                                                aria-expanded=\"false\">
                                            <i class=\"fa fa-eye\"></i> Ver
                                        </button>
                                    </a>
                                ";
            }
            // line 175
            echo "                            </div>
                        </td>
                    </tr>
                    </tbody>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>";
        
        $__internal_b2eda80b09b7867c6f7aecc46e28ffe506558353c9b3a335facf0f098fbe36e1->leave($__internal_b2eda80b09b7867c6f7aecc46e28ffe506558353c9b3a335facf0f098fbe36e1_prof);

        
        $__internal_ecb1f874b80bbc0f52c639604631ba24e27a080bd4b2fea121a159c6975f30c3->leave($__internal_ecb1f874b80bbc0f52c639604631ba24e27a080bd4b2fea121a159c6975f30c3_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_31b769d5b5e0c32103b1d8f1aa9a018edf3c2c005d77228c733dde8c45fcdf54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31b769d5b5e0c32103b1d8f1aa9a018edf3c2c005d77228c733dde8c45fcdf54->enter($__internal_31b769d5b5e0c32103b1d8f1aa9a018edf3c2c005d77228c733dde8c45fcdf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_d07dae2f42966bd8cc6d5b79268740e5b1db14d2efe8a405b10bc0deeb6ae4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07dae2f42966bd8cc6d5b79268740e5b1db14d2efe8a405b10bc0deeb6ae4bc->enter($__internal_d07dae2f42966bd8cc6d5b79268740e5b1db14d2efe8a405b10bc0deeb6ae4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_d07dae2f42966bd8cc6d5b79268740e5b1db14d2efe8a405b10bc0deeb6ae4bc->leave($__internal_d07dae2f42966bd8cc6d5b79268740e5b1db14d2efe8a405b10bc0deeb6ae4bc_prof);

        
        $__internal_31b769d5b5e0c32103b1d8f1aa9a018edf3c2c005d77228c733dde8c45fcdf54->leave($__internal_31b769d5b5e0c32103b1d8f1aa9a018edf3c2c005d77228c733dde8c45fcdf54_prof);

    }

    // line 4
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a0bcbce84111d31c24ff874c47d8979b2bebb2a2d492d251abb7b32931fb80bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0bcbce84111d31c24ff874c47d8979b2bebb2a2d492d251abb7b32931fb80bf->enter($__internal_a0bcbce84111d31c24ff874c47d8979b2bebb2a2d492d251abb7b32931fb80bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_1747c7679e73827f745bdf08208a97cad650419929f7f2b8f3d5411f23406b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1747c7679e73827f745bdf08208a97cad650419929f7f2b8f3d5411f23406b85->enter($__internal_1747c7679e73827f745bdf08208a97cad650419929f7f2b8f3d5411f23406b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 5
        echo "    <script>
        \$(document).ready(function () {


            \$('li').removeClass('active open selected');
            \$('.Visita').addClass('active open selected');

            \$('.cadastrar').click(function (e) {

                \$('.page-content-col').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Loader.gif"), "html", null, true);
        echo "\"></div>');
                e.preventDefault();
                cadastrarVisita(\"GET\", \$(this).attr('title'))
            });

            function cadastrarVisita(tipo, data) {
                \$.ajax({
                    type: tipo,
                    dataType: 'json',
                    url: ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membro_new");
        echo ",
                    data: data,
                    success: function (template) {
                        \$('.page-content-col').html(template.message); //Change the html of the div with the id = \"your_div\"

                        \$('.cadastrarVisita').submit(function (e) {
                            e.preventDefault();
                            cadastrarVisita(\"POST\", \$(this).serialize())
                        })
                        if (template.status == 1) {
                            swal({
                                title: 'Parabens!',
                                text: \"A visita foi cadastrada com sucesso pro dia \"+\$('.date-picker').val(),
                                type: 'success',
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ok, Continuar!',
                                confirmButtonClass: 'btn btn-success',
                                buttonsStyling: false
                            }, function (dismiss) {
                                // dismiss can be 'cancel', 'overlay',
                                // 'close', and 'timer'
                                if (dismiss == true) {
                                    location.reload();
                                }

                            })
                        }

                    },
                    error: function (e) {
                        alert(e.message)
                        \$('.page-content-col').html(e.responseText)
                    }
                });
            }
        })
    </script>
";
        
        $__internal_1747c7679e73827f745bdf08208a97cad650419929f7f2b8f3d5411f23406b85->leave($__internal_1747c7679e73827f745bdf08208a97cad650419929f7f2b8f3d5411f23406b85_prof);

        
        $__internal_a0bcbce84111d31c24ff874c47d8979b2bebb2a2d492d251abb7b32931fb80bf->leave($__internal_a0bcbce84111d31c24ff874c47d8979b2bebb2a2d492d251abb7b32931fb80bf_prof);

    }

    public function getTemplateName()
    {
        return ":MVS:visita_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 23,  277 => 14,  266 => 5,  257 => 4,  244 => 2,  235 => 1,  220 => 180,  210 => 175,  201 => 169,  195 => 167,  192 => 166,  184 => 161,  178 => 159,  175 => 158,  168 => 154,  165 => 153,  163 => 152,  153 => 145,  150 => 144,  146 => 142,  144 => 141,  141 => 140,  139 => 139,  136 => 138,  134 => 137,  127 => 133,  121 => 130,  115 => 127,  110 => 125,  107 => 124,  104 => 123,  99 => 122,  97 => 121,  54 => 80,  47 => 75,  45 => 74,  31 => 62,  29 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block css %}
    <link href=\"{{ asset('global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}
{% block javascript %}
    <script>
        \$(document).ready(function () {


            \$('li').removeClass('active open selected');
            \$('.Visita').addClass('active open selected');

            \$('.cadastrar').click(function (e) {

                \$('.page-content-col').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"{{ asset('img/Loader.gif') }}\"></div>');
                e.preventDefault();
                cadastrarVisita(\"GET\", \$(this).attr('title'))
            });

            function cadastrarVisita(tipo, data) {
                \$.ajax({
                    type: tipo,
                    dataType: 'json',
                    url: {{ path('membro_new') }},
                    data: data,
                    success: function (template) {
                        \$('.page-content-col').html(template.message); //Change the html of the div with the id = \"your_div\"

                        \$('.cadastrarVisita').submit(function (e) {
                            e.preventDefault();
                            cadastrarVisita(\"POST\", \$(this).serialize())
                        })
                        if (template.status == 1) {
                            swal({
                                title: 'Parabens!',
                                text: \"A visita foi cadastrada com sucesso pro dia \"+\$('.date-picker').val(),
                                type: 'success',
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ok, Continuar!',
                                confirmButtonClass: 'btn btn-success',
                                buttonsStyling: false
                            }, function (dismiss) {
                                // dismiss can be 'cancel', 'overlay',
                                // 'close', and 'timer'
                                if (dismiss == true) {
                                    location.reload();
                                }

                            })
                        }

                    },
                    error: function (e) {
                        alert(e.message)
                        \$('.page-content-col').html(e.responseText)
                    }
                });
            }
        })
    </script>
{% endblock %}
<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption font-dark\">
                    <i class=\"icon-user font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> VISITA</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">

                        {% if 'ROLE_VISITA_ADD' in user.R  %}
                        <button id=\"sample_editable_1_new\" class=\"btn sbold green cadastrar\" title=\"membro\" VALUE=\"0\">
                            Inserir Nova
                            <i class=\"fa fa-plus\"></i>
                        </button>
                        {% endif %}
                        <button class=\"btn green  btn-outline dropdown-toggle\" data-toggle=\"dropdown\"
                                aria-expanded=\"false\">Feramentas
                            <i class=\"fa fa-angle-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu pull-right\">
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"fa fa-print\"></i> Imprimir </a>
                            </li>
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"fa fa-file-pdf-o\"></i> Salvar em PDF </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">

                <table class=\"table table-striped table-bordered dt-responsive nowrap table-hover\">
                    <thead>
                    <tr role=\"row\">
                        <th style=\"width: 35px;\"></th>
                        <th style=\"width: 200px;\">
                            Nome participante
                        </th>
                        <th style=\"width: 80px;\">
                            Tipo
                        </th>
                        <th style=\"width: 100px;\">
                            Data Visita
                        </th>
                        <th style=\"width: 60px;\">
                            Estado
                        </th>
                        <th style=\"width: 180px;\">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    {% set i=0 %}
                    {% for membro in dados %}
                    {% set i=i+1 %}
                    <tr class=\"gradeX odd\" role=\"row\">
                        <td class=\"sorting_1\"> {{ i }} </td>
                        <td>
                            {{ membro.Idparticipante.nome }}
                        </td>
                        <td>
                            {{ membro.tipo }}
                        </td>
                        <td>
                            {{ membro.dataVisita }}
                        </td>
                        <td>
                                    <span class=\"label label-sm
                                    {% if membro.estado ==\"Pendente\" %}
                                        label-warning
                                    {% elseif membro.estado ==\"Activo\" %}
                                        label-primary
                                    {% elseif membro.estado ==\"Excluido\" %}
                                        label-danger
                                    {% endif %}
                                    \">
                                    {{ membro.estado }} </span>
                        </td>
                        <td>
                            <div class=\"btn-group\">



                                {% if 'ROLE_VISITA_DELETE' in user.R  %}
                                <button class=\"btn btn-xs red dropdown-toggle eliminar\" title=\"membro\" type=\"button\"
                                        aria-expanded=\"false\" value=\"{{ membro.id }}\" d=\"\">
                                    <i class=\"fa fa-eraser\"></i> Eliminar
                                </button>
                                {% endif %}
                                {% if 'ROLE_VISITA_EDIT' in user.R  %}
                                    <a href=\"{{ path('visita_show',{'id':membro.id}) }}\">
                                        <button class=\"btn btn-xs green dropdown-toggle editar\"
                                                value=\"{{ membro.id }}\" type=\"button\"
                                                aria-expanded=\"false\">
                                            <i class=\"fa fa-edit\"></i> Editar
                                        </button></a>
                                {% endif %}
                                {% if 'ROLE_VISITA_VIEW' in user.R  %}
                                    <a href=\"{{ path('visita_show',{'id':membro.id}) }}\">
                                        <button class=\"btn btn-xs green dropdown-toggle ver\" title=\"membro\"
                                                value=\"{{ membro.id }}\" type=\"button\"
                                                aria-expanded=\"false\">
                                            <i class=\"fa fa-eye\"></i> Ver
                                        </button>
                                    </a>
                                {% endif %}
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    {% endfor %}
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>", ":MVS:visita_list.html.twig", "/var/www/html/hom/app/Resources/views/MVS/visita_list.html.twig");
    }
}

<?php

/* :MUS:membros_list.html.twig */
class __TwigTemplate_73177fc907b26862842b17d83ea188ff6202115063ae23fb57404d0cbb77c4fc extends Twig_Template
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
        $__internal_3ea061077b75abdd8b82b2dce4d583908fc9ae572a5216ec08f363da29db8d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea061077b75abdd8b82b2dce4d583908fc9ae572a5216ec08f363da29db8d72->enter($__internal_3ea061077b75abdd8b82b2dce4d583908fc9ae572a5216ec08f363da29db8d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS:membros_list.html.twig"));

        $__internal_c413f2209acd5d875f3b35b8d343d18686a590bba3785222f8a9d912a3348f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c413f2209acd5d875f3b35b8d343d18686a590bba3785222f8a9d912a3348f76->enter($__internal_c413f2209acd5d875f3b35b8d343d18686a590bba3785222f8a9d912a3348f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS:membros_list.html.twig"));

        // line 1
        $this->displayBlock('css', $context, $blocks);
        // line 5
        $this->displayBlock('javascript', $context, $blocks);
        // line 136
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption font-dark\">
                    <i class=\"icon-user font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> MEMBROS</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">

                        ";
        // line 148
        if (twig_in_filter("ROLE_MEMBRO_ADD", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 148, $this->getSourceContext()); })()), "R", array()))) {
            // line 149
            echo "                        <button id=\"sample_editable_1_new\" class=\"btn sbold green cadastrar\" title=\"membro\" VALUE=\"0\">
                            Inserir Nova
                            <i class=\"fa fa-plus\"></i>
                        </button>
                        ";
        }
        // line 154
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

                <table id=\"datatable\" class=\"table table-striped table-bordered dt-responsive nowrap table-hover\"
                       >
                    <thead>
                    <tr role=\"row\">
                        <th style=\"width: 35px;\"></th>
                        <th style=\"width: 244px;\">
                            Nome
                        </th>
                        <th style=\"width: 105px;\">
                            Tipo
                        </th>
                        <th style=\"width: 105px;\">
                            Estado
                        </th>
                        <th style=\"width: 163px;\">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 193
        $context["i"] = 0;
        // line 194
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 194, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["membro"]) {
            // line 195
            echo "                    ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 195, $this->getSourceContext()); })()) + 1);
            // line 196
            echo "                    <tr class=\"gradeX odd_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "id", array()), "html", null, true);
            echo "\" role=\"row\">
                        <td class=\"sorting_1\"> ";
            // line 197
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 197, $this->getSourceContext()); })()), "html", null, true);
            echo " </td>
                        <td>
                            ";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "nome", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "tipo", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                                    <span class=\"label label-sm label-warning\">
                                    ";
            // line 206
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "estado", array()), "html", null, true);
            echo " </span>
                        </td>
                        <td>
                            <div class=\"btn-group\">

                                ";
            // line 211
            if (twig_in_filter("ROLE_MEMBRO_VIEW", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 211, $this->getSourceContext()); })()), "R", array()))) {
                // line 212
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "id", array()))), "html", null, true);
                echo "\">
                                    <button class=\"btn btn-xs green dropdown-toggle ver\" title=\"membro\"
                                            value=\"";
                // line 214
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "id", array()), "html", null, true);
                echo "\" type=\"button\"
                                            aria-expanded=\"false\">
                                        <i class=\"fa fa-eye\"></i> Ver
                                    </button>
                                </a>
                                ";
            }
            // line 220
            echo "                                ";
            if (twig_in_filter("ROLE_MEMBRO_EDIT", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 220, $this->getSourceContext()); })()), "R", array()))) {
                // line 221
                echo "                                <button class=\"btn btn-xs green dropdown-toggle editar\"
                                        value=\"";
                // line 222
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "id", array()), "html", null, true);
                echo "\" type=\"button\"
                                        aria-expanded=\"false\">
                                    <i class=\"fa fa-edit\"></i> Editar
                                </button>
                                ";
            }
            // line 227
            echo "                                ";
            if (twig_in_filter("ROLE_MEMBRO_DELETE", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 227, $this->getSourceContext()); })()), "R", array()))) {
                // line 228
                echo "                                <button class=\"btn btn-xs red dropdown-toggle eliminar\" title=\"membro\" type=\"button\"
                                        aria-expanded=\"false\" value=\"";
                // line 229
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "id", array()), "html", null, true);
                echo "\" d=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "nome", array()), "html", null, true);
                echo "\">
                                    <i class=\"fa fa-eraser\"></i> Eliminar
                                </button>
                                ";
            }
            // line 233
            echo "
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>";
        
        $__internal_3ea061077b75abdd8b82b2dce4d583908fc9ae572a5216ec08f363da29db8d72->leave($__internal_3ea061077b75abdd8b82b2dce4d583908fc9ae572a5216ec08f363da29db8d72_prof);

        
        $__internal_c413f2209acd5d875f3b35b8d343d18686a590bba3785222f8a9d912a3348f76->leave($__internal_c413f2209acd5d875f3b35b8d343d18686a590bba3785222f8a9d912a3348f76_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_8b8f9bace709aca97f6f8baa2fbeb590e472b1fad0879c9af1b83bb7d2a67fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8f9bace709aca97f6f8baa2fbeb590e472b1fad0879c9af1b83bb7d2a67fa5->enter($__internal_8b8f9bace709aca97f6f8baa2fbeb590e472b1fad0879c9af1b83bb7d2a67fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_179e0a9e8690334254b5fc177ee868bfb26aabb84bb001e505b9b7f599803ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179e0a9e8690334254b5fc177ee868bfb26aabb84bb001e505b9b7f599803ec1->enter($__internal_179e0a9e8690334254b5fc177ee868bfb26aabb84bb001e505b9b7f599803ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/datatables/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_179e0a9e8690334254b5fc177ee868bfb26aabb84bb001e505b9b7f599803ec1->leave($__internal_179e0a9e8690334254b5fc177ee868bfb26aabb84bb001e505b9b7f599803ec1_prof);

        
        $__internal_8b8f9bace709aca97f6f8baa2fbeb590e472b1fad0879c9af1b83bb7d2a67fa5->leave($__internal_8b8f9bace709aca97f6f8baa2fbeb590e472b1fad0879c9af1b83bb7d2a67fa5_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_464b5fc618bd41ae3690a97888c4d46e2295bb16362c396243e9f2edef5f51c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_464b5fc618bd41ae3690a97888c4d46e2295bb16362c396243e9f2edef5f51c7->enter($__internal_464b5fc618bd41ae3690a97888c4d46e2295bb16362c396243e9f2edef5f51c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_bd0e4e2e86cc9fed8286856d048dca119958124e40e51bddec60826ebbdb4d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0e4e2e86cc9fed8286856d048dca119958124e40e51bddec60826ebbdb4d5b->enter($__internal_bd0e4e2e86cc9fed8286856d048dca119958124e40e51bddec60826ebbdb4d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 6
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready(function () {

            \$('li').removeClass('active open selected');
            \$('.Utilizadores').addClass('active open selected');
            \$('.cadastrar').click(function (e) {
                \$('.page-content-col').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Loader.gif"), "html", null, true);
        echo "\"></div>');

                e.preventDefault();
                cadastrarMembro(\"GET\", \$(this).attr('title'))
            })
            \$('.editar').click(function (e) {
                \$('.page-content-col').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Loader.gif"), "html", null, true);
        echo "\"></div>');
                e.preventDefault();

                editarMembro(\"GET\", \$(this).attr('title'))
            })

            \$('.eliminar').click(function(e){
                var nome = \$(this).attr('d')
                \$.ajax({
                    type:'POST',
                    dataType: 'Json',
                    url: '";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membro_delete");
        echo "',
                    data: {'data':\$(this).attr('value')},
                    success: function(e){
                        if(e.status==1)
                        {
                            swal({
                                title: 'Parabens!',
                                text: \"A membro \" +nome+\" foi Eliminada com sucesso \",
                                type: 'success',
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ok, Continuar!',
                                confirmButtonClass: 'btn btn-success',
                                buttonsStyling: false
                            }, function (dismiss) {
                                location.reload()
                            })
                        }

                    },
                    erro:function(x){
                        alert(x)
                    }
                })
            })
            function cadastrarMembro(tipo, data) {
                \$.ajax({
                    type: tipo,
                    dataType: 'json',
                    url: '";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membro_new");
        echo "',
                    data:  data,
                    success: function (template) {
                        \$('.page-content-col').html(template.message); //Change the html of the div with the id = \"your_div\"
                        \$('.cadastrarMembro').submit(function (e) {
                            e.preventDefault();
                            cadastrarMembro(\"POST\", \$(this).serialize())
                        })
                        if (template.status == 1) {
                            swal({
                                title: 'Parabens!',
                                text: \"Foi criado um Membro com sucesso\",
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
                    error: function(err){
                        alert(err.message)
                    }
                })

            }

            function editarMembro(tipo, data) {
                \$.ajax({
                    type: tipo,
                    dataType: 'json',
                    url: null,
                    data:  data,
                    success: function (template) {
                        \$('.page-content-col').html(template.message); //Change the html of the div with the id = \"your_div\"
                        \$('.editarMembro').submit(function (e) {
                            e.preventDefault();
                            cadastrarMembro(\"POST\", \$(this).serialize())
                        })
                        if (template.status == 1) {
                            swal({
                                title: 'Parabens!',
                                text: \"Foi criado um Membro com sucesso\",
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
                    error: function(err){
                        alert(err.message)
                    }
                })
            }


        })
    </script>
";
        
        $__internal_bd0e4e2e86cc9fed8286856d048dca119958124e40e51bddec60826ebbdb4d5b->leave($__internal_bd0e4e2e86cc9fed8286856d048dca119958124e40e51bddec60826ebbdb4d5b_prof);

        
        $__internal_464b5fc618bd41ae3690a97888c4d46e2295bb16362c396243e9f2edef5f51c7->leave($__internal_464b5fc618bd41ae3690a97888c4d46e2295bb16362c396243e9f2edef5f51c7_prof);

    }

    public function getTemplateName()
    {
        return ":MUS:membros_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 59,  277 => 30,  263 => 19,  254 => 13,  243 => 6,  234 => 5,  222 => 3,  217 => 2,  208 => 1,  193 => 239,  182 => 233,  173 => 229,  170 => 228,  167 => 227,  159 => 222,  156 => 221,  153 => 220,  144 => 214,  138 => 212,  136 => 211,  128 => 206,  121 => 202,  115 => 199,  110 => 197,  105 => 196,  102 => 195,  97 => 194,  95 => 193,  54 => 154,  47 => 149,  45 => 148,  31 => 136,  29 => 5,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block css %}
    <link href=\"{{ asset('global/plugins/datatables/datatables.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}
{% block javascript %}
    <script src=\"{{ asset('global/plugins/datatables/datatables.min.js')}}\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready(function () {

            \$('li').removeClass('active open selected');
            \$('.Utilizadores').addClass('active open selected');
            \$('.cadastrar').click(function (e) {
                \$('.page-content-col').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"{{ asset('img/Loader.gif') }}\"></div>');

                e.preventDefault();
                cadastrarMembro(\"GET\", \$(this).attr('title'))
            })
            \$('.editar').click(function (e) {
                \$('.page-content-col').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"{{ asset('img/Loader.gif') }}\"></div>');
                e.preventDefault();

                editarMembro(\"GET\", \$(this).attr('title'))
            })

            \$('.eliminar').click(function(e){
                var nome = \$(this).attr('d')
                \$.ajax({
                    type:'POST',
                    dataType: 'Json',
                    url: '{{ path('membro_delete') }}',
                    data: {'data':\$(this).attr('value')},
                    success: function(e){
                        if(e.status==1)
                        {
                            swal({
                                title: 'Parabens!',
                                text: \"A membro \" +nome+\" foi Eliminada com sucesso \",
                                type: 'success',
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ok, Continuar!',
                                confirmButtonClass: 'btn btn-success',
                                buttonsStyling: false
                            }, function (dismiss) {
                                location.reload()
                            })
                        }

                    },
                    erro:function(x){
                        alert(x)
                    }
                })
            })
            function cadastrarMembro(tipo, data) {
                \$.ajax({
                    type: tipo,
                    dataType: 'json',
                    url: '{{ path('membro_new') }}',
                    data:  data,
                    success: function (template) {
                        \$('.page-content-col').html(template.message); //Change the html of the div with the id = \"your_div\"
                        \$('.cadastrarMembro').submit(function (e) {
                            e.preventDefault();
                            cadastrarMembro(\"POST\", \$(this).serialize())
                        })
                        if (template.status == 1) {
                            swal({
                                title: 'Parabens!',
                                text: \"Foi criado um Membro com sucesso\",
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
                    error: function(err){
                        alert(err.message)
                    }
                })

            }

            function editarMembro(tipo, data) {
                \$.ajax({
                    type: tipo,
                    dataType: 'json',
                    url: null,
                    data:  data,
                    success: function (template) {
                        \$('.page-content-col').html(template.message); //Change the html of the div with the id = \"your_div\"
                        \$('.editarMembro').submit(function (e) {
                            e.preventDefault();
                            cadastrarMembro(\"POST\", \$(this).serialize())
                        })
                        if (template.status == 1) {
                            swal({
                                title: 'Parabens!',
                                text: \"Foi criado um Membro com sucesso\",
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
                    error: function(err){
                        alert(err.message)
                    }
                })
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
                    <span class=\"caption-subject bold uppercase\"> MEMBROS</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">

                        {% if 'ROLE_MEMBRO_ADD' in user.R  %}
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

                <table id=\"datatable\" class=\"table table-striped table-bordered dt-responsive nowrap table-hover\"
                       >
                    <thead>
                    <tr role=\"row\">
                        <th style=\"width: 35px;\"></th>
                        <th style=\"width: 244px;\">
                            Nome
                        </th>
                        <th style=\"width: 105px;\">
                            Tipo
                        </th>
                        <th style=\"width: 105px;\">
                            Estado
                        </th>
                        <th style=\"width: 163px;\">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    {% set i=0 %}
                    {% for membro in dados %}
                    {% set i=i+1 %}
                    <tr class=\"gradeX odd_{{ membro.id }}\" role=\"row\">
                        <td class=\"sorting_1\"> {{ i }} </td>
                        <td>
                            {{ membro.nome }}
                        </td>
                        <td>
                            {{ membro.tipo }}
                        </td>
                        <td>
                                    <span class=\"label label-sm label-warning\">
                                    {{ membro.estado }} </span>
                        </td>
                        <td>
                            <div class=\"btn-group\">

                                {% if 'ROLE_MEMBRO_VIEW' in user.R  %}
                                <a href=\"{{ path('pessoa_show',{'id':membro.id}) }}\">
                                    <button class=\"btn btn-xs green dropdown-toggle ver\" title=\"membro\"
                                            value=\"{{ membro.id }}\" type=\"button\"
                                            aria-expanded=\"false\">
                                        <i class=\"fa fa-eye\"></i> Ver
                                    </button>
                                </a>
                                {% endif %}
                                {% if 'ROLE_MEMBRO_EDIT' in user.R  %}
                                <button class=\"btn btn-xs green dropdown-toggle editar\"
                                        value=\"{{ membro.id }}\" type=\"button\"
                                        aria-expanded=\"false\">
                                    <i class=\"fa fa-edit\"></i> Editar
                                </button>
                                {% endif %}
                                {% if 'ROLE_MEMBRO_DELETE' in user.R  %}
                                <button class=\"btn btn-xs red dropdown-toggle eliminar\" title=\"membro\" type=\"button\"
                                        aria-expanded=\"false\" value=\"{{ membro.id }}\" d=\"{{ membro.nome }}\">
                                    <i class=\"fa fa-eraser\"></i> Eliminar
                                </button>
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
</div>", ":MUS:membros_list.html.twig", "/var/www/html/hom/app/Resources/views/MUS/membros_list.html.twig");
    }
}

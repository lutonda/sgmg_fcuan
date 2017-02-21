<?php

/* MUS/membros_list.html.twig */
class __TwigTemplate_fca3eff37690e9f292bd32286374435c9651bbb6a3567f364436a6c4937fe743 extends Twig_Template
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
        $__internal_64c7eaed60630b20990a361ac5120ba1f605f9c3c8cb67b8fd3e1fc1533d3f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c7eaed60630b20990a361ac5120ba1f605f9c3c8cb67b8fd3e1fc1533d3f67->enter($__internal_64c7eaed60630b20990a361ac5120ba1f605f9c3c8cb67b8fd3e1fc1533d3f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MUS/membros_list.html.twig"));

        $__internal_f3cb38f49ec9254bbaf71250a6324ac01c19da112d6df1432aa005b77933fce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3cb38f49ec9254bbaf71250a6324ac01c19da112d6df1432aa005b77933fce4->enter($__internal_f3cb38f49ec9254bbaf71250a6324ac01c19da112d6df1432aa005b77933fce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MUS/membros_list.html.twig"));

        // line 1
        $this->displayBlock('css', $context, $blocks);
        // line 5
        $this->displayBlock('javascript', $context, $blocks);
        // line 138
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
        // line 150
        if (twig_in_filter("ROLE_MEMBRO_ADD", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 150, $this->getSourceContext()); })()), "R", array()))) {
            // line 151
            echo "                        <button id=\"sample_editable_1_new\" class=\"btn sbold green cadastrar\" title=\"membro\" VALUE=\"0\">
                            Inserir Nova
                            <i class=\"fa fa-plus\"></i>
                        </button>
                        ";
        }
        // line 156
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
        // line 195
        $context["i"] = 0;
        // line 196
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 196, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["membro"]) {
            // line 197
            echo "                    ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 197, $this->getSourceContext()); })()) + 1);
            // line 198
            echo "                    <tr class=\"gradeX odd tr_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "id", array()), "html", null, true);
            echo "\" role=\"row\">
                        <td class=\"sorting_1\"> ";
            // line 199
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 199, $this->getSourceContext()); })()), "html", null, true);
            echo " </td>
                        <td>
                            ";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "nome", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "id", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "tipo", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                                    <span class=\"label label-sm label-warning\">
                                    ";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "estado", array()), "html", null, true);
            echo " </span>
                        </td>
                        <td>
                            <div class=\"btn-group\">

                                ";
            // line 213
            if (twig_in_filter("ROLE_MEMBRO_VIEW", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 213, $this->getSourceContext()); })()), "R", array()))) {
                // line 214
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "id", array()))), "html", null, true);
                echo "\">
                                    <button class=\"btn btn-xs green dropdown-toggle ver\" title=\"membro\"
                                            value=\"";
                // line 216
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "id", array()), "html", null, true);
                echo "\" type=\"button\"
                                            aria-expanded=\"false\">
                                        <i class=\"fa fa-eye\"></i> Ver
                                    </button>
                                </a>
                                ";
            }
            // line 222
            echo "                                ";
            if (twig_in_filter("ROLE_MEMBRO_EDIT", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 222, $this->getSourceContext()); })()), "R", array()))) {
                // line 223
                echo "                                <button class=\"btn btn-xs green dropdown-toggle editar\"
                                        value=\"";
                // line 224
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "id", array()), "html", null, true);
                echo "\" type=\"button\"
                                        aria-expanded=\"false\">
                                    <i class=\"fa fa-edit\"></i> Editar
                                </button>
                                ";
            }
            // line 229
            echo "                                ";
            if (twig_in_filter("ROLE_MEMBRO_DELETE", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 229, $this->getSourceContext()); })()), "R", array()))) {
                // line 230
                echo "                                <button class=\"btn btn-xs red dropdown-toggle eliminar\" title=\"membro\" type=\"button\"
                                        aria-expanded=\"false\" value=\"";
                // line 231
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "id", array()), "html", null, true);
                echo "\" d=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["membro"], "nome", array()), "html", null, true);
                echo "\">
                                    <i class=\"fa fa-eraser\"></i> Eliminar
                                </button>
                                ";
            }
            // line 235
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
        // line 241
        echo "                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>";
        
        $__internal_64c7eaed60630b20990a361ac5120ba1f605f9c3c8cb67b8fd3e1fc1533d3f67->leave($__internal_64c7eaed60630b20990a361ac5120ba1f605f9c3c8cb67b8fd3e1fc1533d3f67_prof);

        
        $__internal_f3cb38f49ec9254bbaf71250a6324ac01c19da112d6df1432aa005b77933fce4->leave($__internal_f3cb38f49ec9254bbaf71250a6324ac01c19da112d6df1432aa005b77933fce4_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_8b257487bf719f3fca34193b7662b5bf45f6f5b2203a731d26de19329bb58110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b257487bf719f3fca34193b7662b5bf45f6f5b2203a731d26de19329bb58110->enter($__internal_8b257487bf719f3fca34193b7662b5bf45f6f5b2203a731d26de19329bb58110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_51ab733359df9d7364a3942f145152257f0fa602a00b2e0c74c58677c78a3df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ab733359df9d7364a3942f145152257f0fa602a00b2e0c74c58677c78a3df7->enter($__internal_51ab733359df9d7364a3942f145152257f0fa602a00b2e0c74c58677c78a3df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/datatables/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_51ab733359df9d7364a3942f145152257f0fa602a00b2e0c74c58677c78a3df7->leave($__internal_51ab733359df9d7364a3942f145152257f0fa602a00b2e0c74c58677c78a3df7_prof);

        
        $__internal_8b257487bf719f3fca34193b7662b5bf45f6f5b2203a731d26de19329bb58110->leave($__internal_8b257487bf719f3fca34193b7662b5bf45f6f5b2203a731d26de19329bb58110_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_78d0efd9992e9a49f588cb4a94dd066b23cdd3b7f6de8ef16d80e3e91abbd276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d0efd9992e9a49f588cb4a94dd066b23cdd3b7f6de8ef16d80e3e91abbd276->enter($__internal_78d0efd9992e9a49f588cb4a94dd066b23cdd3b7f6de8ef16d80e3e91abbd276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_f35c072bb2bd270b7c460d68435e633f74c18e76f54faef53cfcd26cf290526f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35c072bb2bd270b7c460d68435e633f74c18e76f54faef53cfcd26cf290526f->enter($__internal_f35c072bb2bd270b7c460d68435e633f74c18e76f54faef53cfcd26cf290526f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
                var data = \$(this).attr('value')
                \$.ajax({
                    type:'POST',
                    dataType: 'Json',
                    url: '";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membro_delete");
        echo "',
                    data: {'data':data},
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
                                // \$('.tr_'+data).remove();
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
        // line 61
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
        
        $__internal_f35c072bb2bd270b7c460d68435e633f74c18e76f54faef53cfcd26cf290526f->leave($__internal_f35c072bb2bd270b7c460d68435e633f74c18e76f54faef53cfcd26cf290526f_prof);

        
        $__internal_78d0efd9992e9a49f588cb4a94dd066b23cdd3b7f6de8ef16d80e3e91abbd276->leave($__internal_78d0efd9992e9a49f588cb4a94dd066b23cdd3b7f6de8ef16d80e3e91abbd276_prof);

    }

    public function getTemplateName()
    {
        return "MUS/membros_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 61,  279 => 31,  264 => 19,  255 => 13,  244 => 6,  235 => 5,  223 => 3,  218 => 2,  209 => 1,  194 => 241,  183 => 235,  174 => 231,  171 => 230,  168 => 229,  160 => 224,  157 => 223,  154 => 222,  145 => 216,  139 => 214,  137 => 213,  129 => 208,  122 => 204,  115 => 201,  110 => 199,  105 => 198,  102 => 197,  97 => 196,  95 => 195,  54 => 156,  47 => 151,  45 => 150,  31 => 138,  29 => 5,  27 => 1,);
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
                var data = \$(this).attr('value')
                \$.ajax({
                    type:'POST',
                    dataType: 'Json',
                    url: '{{ path('membro_delete') }}',
                    data: {'data':data},
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
                                // \$('.tr_'+data).remove();
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
                    <tr class=\"gradeX odd tr_{{ membro.id }}\" role=\"row\">
                        <td class=\"sorting_1\"> {{ i }} </td>
                        <td>
                            {{ membro.nome }}{{ membro.id }}
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
</div>", "MUS/membros_list.html.twig", "/var/www/html/hom/app/Resources/views/MUS/membros_list.html.twig");
    }
}

<?php

/* :amostra:configuracoes.html.twig */
class __TwigTemplate_104c6b134da9440b669231cdf5265384c5bd23731fc98fd8feba58e511b3f739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("inicio.html.twig", ":amostra:configuracoes.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "inicio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e83a8554231e5fd4c3a3000aef27c4dd783ece30ead88d0b27b3690b24c16ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e83a8554231e5fd4c3a3000aef27c4dd783ece30ead88d0b27b3690b24c16ffb->enter($__internal_e83a8554231e5fd4c3a3000aef27c4dd783ece30ead88d0b27b3690b24c16ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra:configuracoes.html.twig"));

        $__internal_192c8dfc829971cd199538689c1ee2eeb264979cfdb930dfaf890c7090f6a4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192c8dfc829971cd199538689c1ee2eeb264979cfdb930dfaf890c7090f6a4f6->enter($__internal_192c8dfc829971cd199538689c1ee2eeb264979cfdb930dfaf890c7090f6a4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra:configuracoes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e83a8554231e5fd4c3a3000aef27c4dd783ece30ead88d0b27b3690b24c16ffb->leave($__internal_e83a8554231e5fd4c3a3000aef27c4dd783ece30ead88d0b27b3690b24c16ffb_prof);

        
        $__internal_192c8dfc829971cd199538689c1ee2eeb264979cfdb930dfaf890c7090f6a4f6->leave($__internal_192c8dfc829971cd199538689c1ee2eeb264979cfdb930dfaf890c7090f6a4f6_prof);

    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        $__internal_ef4dac7b55c23f891622dfe59fd96e94a3089511613ee11018b72eeeef8c4ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef4dac7b55c23f891622dfe59fd96e94a3089511613ee11018b72eeeef8c4ae8->enter($__internal_ef4dac7b55c23f891622dfe59fd96e94a3089511613ee11018b72eeeef8c4ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_963ecd0ad4e4e1b88a8ca0e82e3bc43716ca85e9ee3acc2acd20624a47f2eb77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963ecd0ad4e4e1b88a8ca0e82e3bc43716ca85e9ee3acc2acd20624a47f2eb77->enter($__internal_963ecd0ad4e4e1b88a8ca0e82e3bc43716ca85e9ee3acc2acd20624a47f2eb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 3
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/jquery.treegrid.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_963ecd0ad4e4e1b88a8ca0e82e3bc43716ca85e9ee3acc2acd20624a47f2eb77->leave($__internal_963ecd0ad4e4e1b88a8ca0e82e3bc43716ca85e9ee3acc2acd20624a47f2eb77_prof);

        
        $__internal_ef4dac7b55c23f891622dfe59fd96e94a3089511613ee11018b72eeeef8c4ae8->leave($__internal_ef4dac7b55c23f891622dfe59fd96e94a3089511613ee11018b72eeeef8c4ae8_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0dcd5b65d7012da3c78bbd198499951d4f4ec8fa0fe37a56c2cce3e4d032039d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dcd5b65d7012da3c78bbd198499951d4f4ec8fa0fe37a56c2cce3e4d032039d->enter($__internal_0dcd5b65d7012da3c78bbd198499951d4f4ec8fa0fe37a56c2cce3e4d032039d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7419d5d812f6196d9780f1a184eb2721eef8ab1feed7f975de64b7a7877641d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7419d5d812f6196d9780f1a184eb2721eef8ab1feed7f975de64b7a7877641d2->enter($__internal_7419d5d812f6196d9780f1a184eb2721eef8ab1feed7f975de64b7a7877641d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery.treegrid.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(document).ready(function (e) {
                \$('li').removeClass('active open selected');
                \$('.Acervos').addClass('active open selected');
                \$('.cadastrar').click(function (e) {
                    e.preventDefault();
                    debugger;
                    snRequest(null, \$(this).attr('value'),\$(this).attr('title'));
                })
                function snRequest(\$data, \$titulo,\$type) {
                   \$.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url: '/'+\$type+'/new/' + \$titulo,
                        data: \$data,
                        success: function (template) {
                            if (template.status == 0) {

                                \$('.configuracoes-content').html(template.message); //Change the html of the div with the id = \"your_div\"

                                \$('form.gravar').submit(function (e) {

                                    e.preventDefault();
                                    snRequest(\$(this).serialize(), \$(this).attr('value'),\$(this).attr('title'))
                                })
                            }
                            if (template.status == 1) {
                                swal({
                                    title: 'Parabens!',
                                    text: \"A actualização da Categoria foi feita com sucesso\",
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
                            if (template.status == 2) {
                                swal({
                                    title: 'Parabens!',
                                    text: \"A Categoria inserida com sucesso\",
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
                            alert(typeof e)

                        }

                    });
                }

                \$('.eliminar').click(function (e) {
                    var item=\$(this).attr('d')
                    var tipo=\$(this).attr('title')
                    var id=\$(this).attr('value')
                    swal({
                        title: 'Atenção!',
                        text: \"esta operação ira elimnar definitivamente a \"+tipo+\" \" + item + \". se Tiver dependentes, estes etarão sem dependecia\",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sim, Eliminar!',
                        cancelButtonText: 'Não, Desisto!',
                        confirmButtonClass: 'btn btn-success',
                        cancelButtonClass: 'btn btn-danger',
                        buttonsStyling: false
                    }, function (dismiss) {
                        // dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'

                        if (dismiss == true) {
                            \$.ajax({
                                type: 'POST',
                                dataType: 'json',
                                url: '/'+tipo+'/delete/' + id,
                                data: null,
                                success: function (template) {
                                    swal({
                                        title: 'Ok!',
                                        text: \"A \"+tipo+\" \" + item + \" foi Eliminado com Sucesso\",
                                        type: 'success'
                                    }, function(dismiss){
                                            if(dismiss==true){
                                            location.reload()
                                            }
                                        })
                                    }


                            })
                        }
                        else {
                            swal({
                                title: 'Cancelado!',
                                text: \"A \"+tipo+\" não \" + item + \" foi Eliminado\",
                                type: 'error'
                            }).then()
                        }
                    })
                })


            })
        </script>
    ";
        
        $__internal_7419d5d812f6196d9780f1a184eb2721eef8ab1feed7f975de64b7a7877641d2->leave($__internal_7419d5d812f6196d9780f1a184eb2721eef8ab1feed7f975de64b7a7877641d2_prof);

        
        $__internal_0dcd5b65d7012da3c78bbd198499951d4f4ec8fa0fe37a56c2cce3e4d032039d->leave($__internal_0dcd5b65d7012da3c78bbd198499951d4f4ec8fa0fe37a56c2cce3e4d032039d_prof);

    }

    // line 136
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a5424a723e010744819607e506ac3dc85a01f914208d0d79b1bf734ca0c0c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5424a723e010744819607e506ac3dc85a01f914208d0d79b1bf734ca0c0c5f->enter($__internal_3a5424a723e010744819607e506ac3dc85a01f914208d0d79b1bf734ca0c0c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_460baf23afb8659b750fbaf5f9bc193037dd750335be6c55e8f58bb4b9404e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460baf23afb8659b750fbaf5f9bc193037dd750335be6c55e8f58bb4b9404e40->enter($__internal_460baf23afb8659b750fbaf5f9bc193037dd750335be6c55e8f58bb4b9404e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 137
        echo "    <div class=\"container-fluid\">
        <div class=\"page-content\" style=\"min-height: 414px;\">
            <!-- BEGIN BREADCRUMBS -->

            <!-- END BREADCRUMBS -->
            <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
            <div class=\"page-content-container\">
                <div class=\"page-content-row\">
                    <!-- BEGIN PAGE SIDEBAR -->
                    <div class=\"page-sidebar\">
                        <nav class=\"navbar\" role=\"navigation\">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <ul class=\"nav navbar-nav margin-bottom-35\">
                                <li class=\"active\">
                                    <a href=\"/acervos/configuracoes/categoria\">
                                        <i class=\"icon-home\"></i> Categoria</a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/cor\">
                                        <i class=\"icon-note \"></i> Cor </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/elementosQuimicos\">
                                        <i class=\"icon-user\"></i> Elementos Químicos </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/brilho\">
                                        <i class=\"icon-basket \"></i> Brilho </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/transparência\">
                                        <i class=\"icon-bell\"></i> Trasnparência </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/fractura\">
                                        <i class=\"icon-bell\"></i> Fractura </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/prateleira\">
                                        <i class=\"icon-bell\"></i> Prateleira </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/seccao\">
                                        <i class=\"icon-bell\"></i> Secção </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/fratura\">
                                        <i class=\"icon-bell\"></i> Fractura </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/habito\">
                                        <i class=\"icon-bell\"></i> Hábito </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/genese\">
                                        <i class=\"icon-bell\"></i> Gênese </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/paragenese\">
                                        <i class=\"icon-bell\"></i> Paragênese </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/risca\">
                                        <i class=\"icon-bell\"></i> Risca </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/clivagem\">
                                        <i class=\"icon-bell\"></i> Clivagem </a>
                                </li>
                            </ul>
                            <h3>Quick Actions</h3>
                            <ul class=\"nav navbar-nav\">
                                <li>
                                    <a href=\"#\">
                                        <i class=\"icon-envelope \"></i> Inbox
                                        <label class=\"label label-danger\">New</label>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"icon-paper-clip \"></i> Task </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"icon-star\"></i> Projects </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"icon-pin\"></i> Events
                                        <span class=\"badge badge-success\">2</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- END PAGE SIDEBAR -->
                    <div class=\"page-content-col configuracoes-content\">
                        <!-- BEGIN PAGE BASE CONTENT -->
                        ";
        // line 237
        $this->loadTemplate((isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new Twig_Error_Runtime('Variable "pagina" does not exist.', 237, $this->getSourceContext()); })()), ":amostra:configuracoes.html.twig", 237)->display($context);
        // line 238
        echo "                        <div class=\"row\">

                            <div class=\"col-md-12\">

                                <!-- Begin: life time stats -->
                                <div class=\"portlet light portlet-fit portlet-datatable bordered\">
                                    <div class=\"portlet-body\">
                                        <div class=\"row amostra-content\">

                                        </div>
                                    </div>
                                </div>
                                <!-- End: life time stats -->
                            </div>
                        </div>
                        <!-- END PAGE BASE CONTENT -->
                    </div>
                </div>
            </div>
            <!-- END SIDEBAR CONTENT LAYOUT -->
        </div>
        <!-- BEGIN FOOTER -->
        <p class=\"copyright\"> 2016 © Metronic Theme By
            <a target=\"_blank\" href=\"http://keenthemes.com\">Keenthemes</a> &nbsp;|&nbsp;
            <a href=\"http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes\"
               title=\"Purchase Metronic just for 27\$ and get lifetime updates for free\" target=\"_blank\">Purchase
                Metronic!</a>
        </p>
        <a href=\"#index\" class=\"go2top\" style=\"display: none;\">
            <i class=\"icon-arrow-up\"></i>
        </a>
        <!-- END FOOTER -->
    </div>
";
        
        $__internal_460baf23afb8659b750fbaf5f9bc193037dd750335be6c55e8f58bb4b9404e40->leave($__internal_460baf23afb8659b750fbaf5f9bc193037dd750335be6c55e8f58bb4b9404e40_prof);

        
        $__internal_3a5424a723e010744819607e506ac3dc85a01f914208d0d79b1bf734ca0c0c5f->leave($__internal_3a5424a723e010744819607e506ac3dc85a01f914208d0d79b1bf734ca0c0c5f_prof);

    }

    public function getTemplateName()
    {
        return ":amostra:configuracoes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 238,  324 => 237,  222 => 137,  213 => 136,  73 => 6,  64 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'inicio.html.twig' %}
    {% block css %}
        <link rel=\"stylesheet\" href=\"{{ asset('stylesheets/jquery.treegrid.css') }}\">
    {% endblock %}
    {% block javascripts %}
        <script type=\"text/javascript\" src=\"{{ asset('javascripts/jquery.treegrid.js') }}\"></script>
        <script>
            \$(document).ready(function (e) {
                \$('li').removeClass('active open selected');
                \$('.Acervos').addClass('active open selected');
                \$('.cadastrar').click(function (e) {
                    e.preventDefault();
                    debugger;
                    snRequest(null, \$(this).attr('value'),\$(this).attr('title'));
                })
                function snRequest(\$data, \$titulo,\$type) {
                   \$.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url: '/'+\$type+'/new/' + \$titulo,
                        data: \$data,
                        success: function (template) {
                            if (template.status == 0) {

                                \$('.configuracoes-content').html(template.message); //Change the html of the div with the id = \"your_div\"

                                \$('form.gravar').submit(function (e) {

                                    e.preventDefault();
                                    snRequest(\$(this).serialize(), \$(this).attr('value'),\$(this).attr('title'))
                                })
                            }
                            if (template.status == 1) {
                                swal({
                                    title: 'Parabens!',
                                    text: \"A actualização da Categoria foi feita com sucesso\",
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
                            if (template.status == 2) {
                                swal({
                                    title: 'Parabens!',
                                    text: \"A Categoria inserida com sucesso\",
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
                            alert(typeof e)

                        }

                    });
                }

                \$('.eliminar').click(function (e) {
                    var item=\$(this).attr('d')
                    var tipo=\$(this).attr('title')
                    var id=\$(this).attr('value')
                    swal({
                        title: 'Atenção!',
                        text: \"esta operação ira elimnar definitivamente a \"+tipo+\" \" + item + \". se Tiver dependentes, estes etarão sem dependecia\",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sim, Eliminar!',
                        cancelButtonText: 'Não, Desisto!',
                        confirmButtonClass: 'btn btn-success',
                        cancelButtonClass: 'btn btn-danger',
                        buttonsStyling: false
                    }, function (dismiss) {
                        // dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'

                        if (dismiss == true) {
                            \$.ajax({
                                type: 'POST',
                                dataType: 'json',
                                url: '/'+tipo+'/delete/' + id,
                                data: null,
                                success: function (template) {
                                    swal({
                                        title: 'Ok!',
                                        text: \"A \"+tipo+\" \" + item + \" foi Eliminado com Sucesso\",
                                        type: 'success'
                                    }, function(dismiss){
                                            if(dismiss==true){
                                            location.reload()
                                            }
                                        })
                                    }


                            })
                        }
                        else {
                            swal({
                                title: 'Cancelado!',
                                text: \"A \"+tipo+\" não \" + item + \" foi Eliminado\",
                                type: 'error'
                            }).then()
                        }
                    })
                })


            })
        </script>
    {% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"page-content\" style=\"min-height: 414px;\">
            <!-- BEGIN BREADCRUMBS -->

            <!-- END BREADCRUMBS -->
            <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
            <div class=\"page-content-container\">
                <div class=\"page-content-row\">
                    <!-- BEGIN PAGE SIDEBAR -->
                    <div class=\"page-sidebar\">
                        <nav class=\"navbar\" role=\"navigation\">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <ul class=\"nav navbar-nav margin-bottom-35\">
                                <li class=\"active\">
                                    <a href=\"/acervos/configuracoes/categoria\">
                                        <i class=\"icon-home\"></i> Categoria</a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/cor\">
                                        <i class=\"icon-note \"></i> Cor </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/elementosQuimicos\">
                                        <i class=\"icon-user\"></i> Elementos Químicos </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/brilho\">
                                        <i class=\"icon-basket \"></i> Brilho </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/transparência\">
                                        <i class=\"icon-bell\"></i> Trasnparência </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/fractura\">
                                        <i class=\"icon-bell\"></i> Fractura </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/prateleira\">
                                        <i class=\"icon-bell\"></i> Prateleira </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/seccao\">
                                        <i class=\"icon-bell\"></i> Secção </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/fratura\">
                                        <i class=\"icon-bell\"></i> Fractura </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/habito\">
                                        <i class=\"icon-bell\"></i> Hábito </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/genese\">
                                        <i class=\"icon-bell\"></i> Gênese </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/paragenese\">
                                        <i class=\"icon-bell\"></i> Paragênese </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/risca\">
                                        <i class=\"icon-bell\"></i> Risca </a>
                                </li>
                                <li>
                                    <a href=\"/acervos/configuracoes/clivagem\">
                                        <i class=\"icon-bell\"></i> Clivagem </a>
                                </li>
                            </ul>
                            <h3>Quick Actions</h3>
                            <ul class=\"nav navbar-nav\">
                                <li>
                                    <a href=\"#\">
                                        <i class=\"icon-envelope \"></i> Inbox
                                        <label class=\"label label-danger\">New</label>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"icon-paper-clip \"></i> Task </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"icon-star\"></i> Projects </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"icon-pin\"></i> Events
                                        <span class=\"badge badge-success\">2</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- END PAGE SIDEBAR -->
                    <div class=\"page-content-col configuracoes-content\">
                        <!-- BEGIN PAGE BASE CONTENT -->
                        {% include pagina %}
                        <div class=\"row\">

                            <div class=\"col-md-12\">

                                <!-- Begin: life time stats -->
                                <div class=\"portlet light portlet-fit portlet-datatable bordered\">
                                    <div class=\"portlet-body\">
                                        <div class=\"row amostra-content\">

                                        </div>
                                    </div>
                                </div>
                                <!-- End: life time stats -->
                            </div>
                        </div>
                        <!-- END PAGE BASE CONTENT -->
                    </div>
                </div>
            </div>
            <!-- END SIDEBAR CONTENT LAYOUT -->
        </div>
        <!-- BEGIN FOOTER -->
        <p class=\"copyright\"> 2016 © Metronic Theme By
            <a target=\"_blank\" href=\"http://keenthemes.com\">Keenthemes</a> &nbsp;|&nbsp;
            <a href=\"http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes\"
               title=\"Purchase Metronic just for 27\$ and get lifetime updates for free\" target=\"_blank\">Purchase
                Metronic!</a>
        </p>
        <a href=\"#index\" class=\"go2top\" style=\"display: none;\">
            <i class=\"icon-arrow-up\"></i>
        </a>
        <!-- END FOOTER -->
    </div>
{% endblock %}
", ":amostra:configuracoes.html.twig", "/var/www/html/hom/app/Resources/views/amostra/configuracoes.html.twig");
    }
}

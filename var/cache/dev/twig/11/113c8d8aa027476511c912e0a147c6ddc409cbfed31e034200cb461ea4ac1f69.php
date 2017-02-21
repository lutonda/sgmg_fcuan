<?php

/* MVS/index.html.twig */
class __TwigTemplate_bf0a93c2aa00205faadcf95278d8996277ff466336f726f6eab72baa9d0e3fea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("inicio.html.twig", "MVS/index.html.twig", 1);
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
        $__internal_3b2b5044c83f71b12eabfab5b645742ca52212e94196d2e43543adf1b39e9b5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2b5044c83f71b12eabfab5b645742ca52212e94196d2e43543adf1b39e9b5d->enter($__internal_3b2b5044c83f71b12eabfab5b645742ca52212e94196d2e43543adf1b39e9b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MVS/index.html.twig"));

        $__internal_bcae46ad8c1fc0126d418e92c813fbd30494f92ced69b4c03d3d048b14979d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcae46ad8c1fc0126d418e92c813fbd30494f92ced69b4c03d3d048b14979d10->enter($__internal_bcae46ad8c1fc0126d418e92c813fbd30494f92ced69b4c03d3d048b14979d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MVS/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b2b5044c83f71b12eabfab5b645742ca52212e94196d2e43543adf1b39e9b5d->leave($__internal_3b2b5044c83f71b12eabfab5b645742ca52212e94196d2e43543adf1b39e9b5d_prof);

        
        $__internal_bcae46ad8c1fc0126d418e92c813fbd30494f92ced69b4c03d3d048b14979d10->leave($__internal_bcae46ad8c1fc0126d418e92c813fbd30494f92ced69b4c03d3d048b14979d10_prof);

    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        $__internal_b64837733a8ced6e62075b844c2c4c35e184ecab266808ad23b35fab05231960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b64837733a8ced6e62075b844c2c4c35e184ecab266808ad23b35fab05231960->enter($__internal_b64837733a8ced6e62075b844c2c4c35e184ecab266808ad23b35fab05231960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_114fe5f4d5df33151d54d7681470161c62a095da2c68fc01c51586c7b4e43233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114fe5f4d5df33151d54d7681470161c62a095da2c68fc01c51586c7b4e43233->enter($__internal_114fe5f4d5df33151d54d7681470161c62a095da2c68fc01c51586c7b4e43233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 3
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/cubeportfolio/css/cubeportfolio.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/css/portfolio.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/css/magicsuggest-min.css"), "html", null, true);
        echo "\">
        <style>
            input, textarea, label, button select {
                border-radius: 0 !important;
            }
        </style>
    ";
        
        $__internal_114fe5f4d5df33151d54d7681470161c62a095da2c68fc01c51586c7b4e43233->leave($__internal_114fe5f4d5df33151d54d7681470161c62a095da2c68fc01c51586c7b4e43233_prof);

        
        $__internal_b64837733a8ced6e62075b844c2c4c35e184ecab266808ad23b35fab05231960->leave($__internal_b64837733a8ced6e62075b844c2c4c35e184ecab266808ad23b35fab05231960_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20f21512d3f8200cf680a206a07718ec00758ef48f48a5b7ff5c68372ab05ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f21512d3f8200cf680a206a07718ec00758ef48f48a5b7ff5c68372ab05ba7->enter($__internal_20f21512d3f8200cf680a206a07718ec00758ef48f48a5b7ff5c68372ab05ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5c52d6d85b5c3a9a1818be815dae474c0680a4dba61bafe3e290739ace19ef3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c52d6d85b5c3a9a1818be815dae474c0680a4dba61bafe3e290739ace19ef3a->enter($__internal_5c52d6d85b5c3a9a1818be815dae474c0680a4dba61bafe3e290739ace19ef3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"
                type=\"text/javascript\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/form-repeter/jquery.form-repeater.js"), "html", null, true);
        echo "\"
                type=\"text/javascript\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/scripts/portfolio-1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/magicsuggest/magicsuggest-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script>
            \$(document).ready(function (e) {

                \$('li').removeClass('active open selected');
                \$('.Visita').addClass('active open selected');
                \$('#datatable').DataTable()
                \$('.cadastrar').click(function (e) {
                    \$('.page-content-col').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Loader.gif"), "html", null, true);
        echo "\"></div>');
                    e.preventDefault();
                    cadastrarVisita(\"GET\", {nome:\$(this).attr('title')})
                });
                \$('.eliminar').click(function(){

                    \$.ajax({
                        type:'POST',
                        dataType: 'Json',
                        url: '";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visita_delete");
        echo "',
                        data: {'data':\$(this).attr('value')},
                        success: function(e){
                            if(e.status==1)
                            {
                                swal({
                                    title: 'Parabens!',
                                    text: \"A visita foi Eliminada com sucesso \",
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
                function cadastrarVisita(method,data){
                    \$.ajax({
                        type: method,
                        dataType: 'Json',
                        url: '";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visita_new");
        echo "',
                        data: data,
                        success: function(template){
                            \$('.page-content-col').html(template.message);
                            \$('.cadastrarVisita').submit(function (e) {
                                e.preventDefault();
                                cadastrarVisita(\"POST\", \$(this).serialize())
                            })
                            if (template.status == 1) {
                                swal({
                                    title: 'Parabens!',
                                    text: \"A visita foi cadastrada com sucesso para as \"
                                          +\$('.timepicker').val()+\" do dia \"+\$('.date-picker').val(),
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
                        error: function(err){
                            \$('.page-content-col').html(err.responseText)
                        }
                    })

                }
            })
        </script>
    ";
        
        $__internal_5c52d6d85b5c3a9a1818be815dae474c0680a4dba61bafe3e290739ace19ef3a->leave($__internal_5c52d6d85b5c3a9a1818be815dae474c0680a4dba61bafe3e290739ace19ef3a_prof);

        
        $__internal_20f21512d3f8200cf680a206a07718ec00758ef48f48a5b7ff5c68372ab05ba7->leave($__internal_20f21512d3f8200cf680a206a07718ec00758ef48f48a5b7ff5c68372ab05ba7_prof);

    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        $__internal_93d93bb5171b172019f01a43b815527d663796df1f0eb4ff4db81c0e50fa17e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d93bb5171b172019f01a43b815527d663796df1f0eb4ff4db81c0e50fa17e4->enter($__internal_93d93bb5171b172019f01a43b815527d663796df1f0eb4ff4db81c0e50fa17e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_036dd4c9e21495760656b6e430f7ad6c0b309268c413392c3cbe33ac27bf5ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036dd4c9e21495760656b6e430f7ad6c0b309268c413392c3cbe33ac27bf5ff4->enter($__internal_036dd4c9e21495760656b6e430f7ad6c0b309268c413392c3cbe33ac27bf5ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 99
        echo "    <div class=\"container-fluid\">
        <div class=\"page-content\" style=\"min-height: 414px;\">

            <div class=\"page-content-container\">
                <div class=\"page-content-row\">
                    <!-- BEGIN PAGE SIDEBAR -->
                    <div class=\"page-sidebar\">

                        <h3>Quick Actions</h3>
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visita_view");
        echo "\">
                                    <i class=\"icon-home \"></i> INICIO
                                    <label class=\"label label-danger\">New</label>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"icon-settings \"></i> Configurações </a>
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
                    </div>
                    <!-- END PAGE SIDEBAR -->
                    <div class=\"page-content-col\">
                        <!-- BEGIN PAGE BASE CONTENT -->

                        ";
        // line 135
        $this->loadTemplate((isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new Twig_Error_Runtime('Variable "pagina" does not exist.', 135, $this->getSourceContext()); })()), "MVS/index.html.twig", 135)->display($context);
        // line 136
        echo "                        <!-- END PAGE BASE CONTENT -->
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
        
        $__internal_036dd4c9e21495760656b6e430f7ad6c0b309268c413392c3cbe33ac27bf5ff4->leave($__internal_036dd4c9e21495760656b6e430f7ad6c0b309268c413392c3cbe33ac27bf5ff4_prof);

        
        $__internal_93d93bb5171b172019f01a43b815527d663796df1f0eb4ff4db81c0e50fa17e4->leave($__internal_93d93bb5171b172019f01a43b815527d663796df1f0eb4ff4db81c0e50fa17e4_prof);

    }

    public function getTemplateName()
    {
        return "MVS/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 136,  249 => 135,  221 => 110,  208 => 99,  199 => 98,  156 => 64,  124 => 35,  112 => 26,  101 => 18,  97 => 17,  92 => 15,  86 => 13,  77 => 12,  60 => 5,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'inicio.html.twig' %}
    {% block css %}
        <link href=\"{{ asset('global/plugins/cubeportfolio/css/cubeportfolio.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('pages/css/portfolio.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('global/css/magicsuggest-min.css') }}\">
        <style>
            input, textarea, label, button select {
                border-radius: 0 !important;
            }
        </style>
    {% endblock %}
    {% block javascripts %}
        <script src=\"{{ asset('global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') }}\"
                type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/form-repeter/jquery.form-repeater.js') }}\"
                type=\"text/javascript\"></script>
        <script src=\"{{ asset('pages/scripts/portfolio-1.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/magicsuggest/magicsuggest-min.js') }}\" type=\"text/javascript\"></script>
        <script>
            \$(document).ready(function (e) {

                \$('li').removeClass('active open selected');
                \$('.Visita').addClass('active open selected');
                \$('#datatable').DataTable()
                \$('.cadastrar').click(function (e) {
                    \$('.page-content-col').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"{{ asset('img/Loader.gif') }}\"></div>');
                    e.preventDefault();
                    cadastrarVisita(\"GET\", {nome:\$(this).attr('title')})
                });
                \$('.eliminar').click(function(){

                    \$.ajax({
                        type:'POST',
                        dataType: 'Json',
                        url: '{{ path('visita_delete') }}',
                        data: {'data':\$(this).attr('value')},
                        success: function(e){
                            if(e.status==1)
                            {
                                swal({
                                    title: 'Parabens!',
                                    text: \"A visita foi Eliminada com sucesso \",
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
                function cadastrarVisita(method,data){
                    \$.ajax({
                        type: method,
                        dataType: 'Json',
                        url: '{{ path('visita_new') }}',
                        data: data,
                        success: function(template){
                            \$('.page-content-col').html(template.message);
                            \$('.cadastrarVisita').submit(function (e) {
                                e.preventDefault();
                                cadastrarVisita(\"POST\", \$(this).serialize())
                            })
                            if (template.status == 1) {
                                swal({
                                    title: 'Parabens!',
                                    text: \"A visita foi cadastrada com sucesso para as \"
                                          +\$('.timepicker').val()+\" do dia \"+\$('.date-picker').val(),
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
                        error: function(err){
                            \$('.page-content-col').html(err.responseText)
                        }
                    })

                }
            })
        </script>
    {% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"page-content\" style=\"min-height: 414px;\">

            <div class=\"page-content-container\">
                <div class=\"page-content-row\">
                    <!-- BEGIN PAGE SIDEBAR -->
                    <div class=\"page-sidebar\">

                        <h3>Quick Actions</h3>
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"{{ path('visita_view') }}\">
                                    <i class=\"icon-home \"></i> INICIO
                                    <label class=\"label label-danger\">New</label>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"icon-settings \"></i> Configurações </a>
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
                    </div>
                    <!-- END PAGE SIDEBAR -->
                    <div class=\"page-content-col\">
                        <!-- BEGIN PAGE BASE CONTENT -->

                        {% include pagina %}
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
", "MVS/index.html.twig", "/var/www/html/hom/app/Resources/views/MVS/index.html.twig");
    }
}

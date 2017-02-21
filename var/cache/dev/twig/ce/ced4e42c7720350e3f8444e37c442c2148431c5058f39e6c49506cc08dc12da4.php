<?php

/* :MVS:index.html.twig */
class __TwigTemplate_6e2302a02cdd253fd39d47ff15be94fb4f6e7bc4e5f665dd1290619522b7876c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("inicio.html.twig", ":MVS:index.html.twig", 1);
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
        $__internal_3cc16b9cd76c0f4b69922e96380e87cbfdf219541c0ebcdf7fdedec20c674238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc16b9cd76c0f4b69922e96380e87cbfdf219541c0ebcdf7fdedec20c674238->enter($__internal_3cc16b9cd76c0f4b69922e96380e87cbfdf219541c0ebcdf7fdedec20c674238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MVS:index.html.twig"));

        $__internal_16fbd0ce4ec8a8cb56159881f72e49a049e3c0edcc3f63ea0cd37d87d95e221f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16fbd0ce4ec8a8cb56159881f72e49a049e3c0edcc3f63ea0cd37d87d95e221f->enter($__internal_16fbd0ce4ec8a8cb56159881f72e49a049e3c0edcc3f63ea0cd37d87d95e221f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MVS:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cc16b9cd76c0f4b69922e96380e87cbfdf219541c0ebcdf7fdedec20c674238->leave($__internal_3cc16b9cd76c0f4b69922e96380e87cbfdf219541c0ebcdf7fdedec20c674238_prof);

        
        $__internal_16fbd0ce4ec8a8cb56159881f72e49a049e3c0edcc3f63ea0cd37d87d95e221f->leave($__internal_16fbd0ce4ec8a8cb56159881f72e49a049e3c0edcc3f63ea0cd37d87d95e221f_prof);

    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        $__internal_3b11f0edbdf7dc73f52d3f9cab525674f223a0f8b7feaf4004fa404c73fe1620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b11f0edbdf7dc73f52d3f9cab525674f223a0f8b7feaf4004fa404c73fe1620->enter($__internal_3b11f0edbdf7dc73f52d3f9cab525674f223a0f8b7feaf4004fa404c73fe1620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_bc596ab0ed0a73f5d07a403152e94f176e51d5f9faf62f664b49f993cd7151ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc596ab0ed0a73f5d07a403152e94f176e51d5f9faf62f664b49f993cd7151ae->enter($__internal_bc596ab0ed0a73f5d07a403152e94f176e51d5f9faf62f664b49f993cd7151ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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
        
        $__internal_bc596ab0ed0a73f5d07a403152e94f176e51d5f9faf62f664b49f993cd7151ae->leave($__internal_bc596ab0ed0a73f5d07a403152e94f176e51d5f9faf62f664b49f993cd7151ae_prof);

        
        $__internal_3b11f0edbdf7dc73f52d3f9cab525674f223a0f8b7feaf4004fa404c73fe1620->leave($__internal_3b11f0edbdf7dc73f52d3f9cab525674f223a0f8b7feaf4004fa404c73fe1620_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_137f7a81edda994343ab2791da8f07cef583948e8352f8180d9780f1e65266d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_137f7a81edda994343ab2791da8f07cef583948e8352f8180d9780f1e65266d8->enter($__internal_137f7a81edda994343ab2791da8f07cef583948e8352f8180d9780f1e65266d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6c0d9b6ae7439229628462f31d03232c520f0fbcde36591c0d395e77adac8a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0d9b6ae7439229628462f31d03232c520f0fbcde36591c0d395e77adac8a16->enter($__internal_6c0d9b6ae7439229628462f31d03232c520f0fbcde36591c0d395e77adac8a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6c0d9b6ae7439229628462f31d03232c520f0fbcde36591c0d395e77adac8a16->leave($__internal_6c0d9b6ae7439229628462f31d03232c520f0fbcde36591c0d395e77adac8a16_prof);

        
        $__internal_137f7a81edda994343ab2791da8f07cef583948e8352f8180d9780f1e65266d8->leave($__internal_137f7a81edda994343ab2791da8f07cef583948e8352f8180d9780f1e65266d8_prof);

    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        $__internal_562d281b7251be054834c4f874adf60a89b46727f75b032bb0d5c9cb124e8c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562d281b7251be054834c4f874adf60a89b46727f75b032bb0d5c9cb124e8c5a->enter($__internal_562d281b7251be054834c4f874adf60a89b46727f75b032bb0d5c9cb124e8c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f90b071b9dede9e81ae0ca5e55da33196aa94067d618e9eb48ec680a3812a5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90b071b9dede9e81ae0ca5e55da33196aa94067d618e9eb48ec680a3812a5cc->enter($__internal_f90b071b9dede9e81ae0ca5e55da33196aa94067d618e9eb48ec680a3812a5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate((isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new Twig_Error_Runtime('Variable "pagina" does not exist.', 135, $this->getSourceContext()); })()), ":MVS:index.html.twig", 135)->display($context);
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
        
        $__internal_f90b071b9dede9e81ae0ca5e55da33196aa94067d618e9eb48ec680a3812a5cc->leave($__internal_f90b071b9dede9e81ae0ca5e55da33196aa94067d618e9eb48ec680a3812a5cc_prof);

        
        $__internal_562d281b7251be054834c4f874adf60a89b46727f75b032bb0d5c9cb124e8c5a->leave($__internal_562d281b7251be054834c4f874adf60a89b46727f75b032bb0d5c9cb124e8c5a_prof);

    }

    public function getTemplateName()
    {
        return ":MVS:index.html.twig";
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
", ":MVS:index.html.twig", "/var/www/html/hom/app/Resources/views/MVS/index.html.twig");
    }
}

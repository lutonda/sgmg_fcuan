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
        $__internal_af68a6e447651c922abce2d888a1ff7a3c25d5cea2cdbd8e93219914e1853b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af68a6e447651c922abce2d888a1ff7a3c25d5cea2cdbd8e93219914e1853b9e->enter($__internal_af68a6e447651c922abce2d888a1ff7a3c25d5cea2cdbd8e93219914e1853b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MVS/index.html.twig"));

        $__internal_0a6278f18342e217f20033f184c5476c1082064d31abc966459a443e172a3dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6278f18342e217f20033f184c5476c1082064d31abc966459a443e172a3dc6->enter($__internal_0a6278f18342e217f20033f184c5476c1082064d31abc966459a443e172a3dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MVS/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af68a6e447651c922abce2d888a1ff7a3c25d5cea2cdbd8e93219914e1853b9e->leave($__internal_af68a6e447651c922abce2d888a1ff7a3c25d5cea2cdbd8e93219914e1853b9e_prof);

        
        $__internal_0a6278f18342e217f20033f184c5476c1082064d31abc966459a443e172a3dc6->leave($__internal_0a6278f18342e217f20033f184c5476c1082064d31abc966459a443e172a3dc6_prof);

    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        $__internal_e591f039021c1339be94c5d4ae8441dbcd12511f44a2f24ece7e7ec8b6f07279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e591f039021c1339be94c5d4ae8441dbcd12511f44a2f24ece7e7ec8b6f07279->enter($__internal_e591f039021c1339be94c5d4ae8441dbcd12511f44a2f24ece7e7ec8b6f07279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_abf939f3c1b66c8883728949e4d3373bb6f249d3c8af1723d0663f1cc04a48b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf939f3c1b66c8883728949e4d3373bb6f249d3c8af1723d0663f1cc04a48b6->enter($__internal_abf939f3c1b66c8883728949e4d3373bb6f249d3c8af1723d0663f1cc04a48b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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
        
        $__internal_abf939f3c1b66c8883728949e4d3373bb6f249d3c8af1723d0663f1cc04a48b6->leave($__internal_abf939f3c1b66c8883728949e4d3373bb6f249d3c8af1723d0663f1cc04a48b6_prof);

        
        $__internal_e591f039021c1339be94c5d4ae8441dbcd12511f44a2f24ece7e7ec8b6f07279->leave($__internal_e591f039021c1339be94c5d4ae8441dbcd12511f44a2f24ece7e7ec8b6f07279_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e14a3fbcfca482e5f45163e991ca78b1f794a2836007a4ecc865761231667830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14a3fbcfca482e5f45163e991ca78b1f794a2836007a4ecc865761231667830->enter($__internal_e14a3fbcfca482e5f45163e991ca78b1f794a2836007a4ecc865761231667830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_979cde54eaad3269d70d6e5745f41c4e28c87d5b6738ac4c53b8c8f279c9611d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979cde54eaad3269d70d6e5745f41c4e28c87d5b6738ac4c53b8c8f279c9611d->enter($__internal_979cde54eaad3269d70d6e5745f41c4e28c87d5b6738ac4c53b8c8f279c9611d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
                    var data=\$(this).attr('value');
                    \$.ajax({
                        type:'POST',
                        dataType: 'Json',
                        url: '";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visita_delete");
        echo "',
                        data: {'data':data},
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
                                    \$('.tr_'+data).remove();
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
        
        $__internal_979cde54eaad3269d70d6e5745f41c4e28c87d5b6738ac4c53b8c8f279c9611d->leave($__internal_979cde54eaad3269d70d6e5745f41c4e28c87d5b6738ac4c53b8c8f279c9611d_prof);

        
        $__internal_e14a3fbcfca482e5f45163e991ca78b1f794a2836007a4ecc865761231667830->leave($__internal_e14a3fbcfca482e5f45163e991ca78b1f794a2836007a4ecc865761231667830_prof);

    }

    // line 98
    public function block_body($context, array $blocks = array())
    {
        $__internal_d56f71879690ec7751839a232b02ca0f48e9fef14f3aaac468b3671de5f2610f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56f71879690ec7751839a232b02ca0f48e9fef14f3aaac468b3671de5f2610f->enter($__internal_d56f71879690ec7751839a232b02ca0f48e9fef14f3aaac468b3671de5f2610f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_412bfcee38f8847f88e8bb95deb72683b4f1b26110f3bcc6171ebc7c558fa839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412bfcee38f8847f88e8bb95deb72683b4f1b26110f3bcc6171ebc7c558fa839->enter($__internal_412bfcee38f8847f88e8bb95deb72683b4f1b26110f3bcc6171ebc7c558fa839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_412bfcee38f8847f88e8bb95deb72683b4f1b26110f3bcc6171ebc7c558fa839->leave($__internal_412bfcee38f8847f88e8bb95deb72683b4f1b26110f3bcc6171ebc7c558fa839_prof);

        
        $__internal_d56f71879690ec7751839a232b02ca0f48e9fef14f3aaac468b3671de5f2610f->leave($__internal_d56f71879690ec7751839a232b02ca0f48e9fef14f3aaac468b3671de5f2610f_prof);

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
                    var data=\$(this).attr('value');
                    \$.ajax({
                        type:'POST',
                        dataType: 'Json',
                        url: '{{ path('visita_delete') }}',
                        data: {'data':data},
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
                                    \$('.tr_'+data).remove();
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

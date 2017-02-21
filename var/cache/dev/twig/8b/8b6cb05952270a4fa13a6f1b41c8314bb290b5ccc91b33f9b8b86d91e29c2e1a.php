<?php

/* :SYS/definicoes:definicoes_base.html.twig */
class __TwigTemplate_b284be2dd584304953eaa452e6c2ad0e33d462fbf1a1e741ded3299df26e0055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("inicio.html.twig", ":SYS/definicoes:definicoes_base.html.twig", 1);
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
        $__internal_35c4d88c272cc47a3d060c8ae1eca1510650a2b7c8d521e13dc3818fd4f8ac6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c4d88c272cc47a3d060c8ae1eca1510650a2b7c8d521e13dc3818fd4f8ac6d->enter($__internal_35c4d88c272cc47a3d060c8ae1eca1510650a2b7c8d521e13dc3818fd4f8ac6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":SYS/definicoes:definicoes_base.html.twig"));

        $__internal_f0f4eba35b2a4879548e06384200930fb13ceb1e0f463d30945f998f4a0c183a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f4eba35b2a4879548e06384200930fb13ceb1e0f463d30945f998f4a0c183a->enter($__internal_f0f4eba35b2a4879548e06384200930fb13ceb1e0f463d30945f998f4a0c183a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":SYS/definicoes:definicoes_base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35c4d88c272cc47a3d060c8ae1eca1510650a2b7c8d521e13dc3818fd4f8ac6d->leave($__internal_35c4d88c272cc47a3d060c8ae1eca1510650a2b7c8d521e13dc3818fd4f8ac6d_prof);

        
        $__internal_f0f4eba35b2a4879548e06384200930fb13ceb1e0f463d30945f998f4a0c183a->leave($__internal_f0f4eba35b2a4879548e06384200930fb13ceb1e0f463d30945f998f4a0c183a_prof);

    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        $__internal_39d56490b061ee28c181c490de5862234d692d8f9f7baa46174b81ce334b53ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d56490b061ee28c181c490de5862234d692d8f9f7baa46174b81ce334b53ba->enter($__internal_39d56490b061ee28c181c490de5862234d692d8f9f7baa46174b81ce334b53ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_569ab7b2da9d30cb7c9d5a28edbab6e7c11988b82476e3e7e2a685e356294551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569ab7b2da9d30cb7c9d5a28edbab6e7c11988b82476e3e7e2a685e356294551->enter($__internal_569ab7b2da9d30cb7c9d5a28edbab6e7c11988b82476e3e7e2a685e356294551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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
            input, textarea, label, button select{border-radius: 0 !important;}
        </style>
    ";
        
        $__internal_569ab7b2da9d30cb7c9d5a28edbab6e7c11988b82476e3e7e2a685e356294551->leave($__internal_569ab7b2da9d30cb7c9d5a28edbab6e7c11988b82476e3e7e2a685e356294551_prof);

        
        $__internal_39d56490b061ee28c181c490de5862234d692d8f9f7baa46174b81ce334b53ba->leave($__internal_39d56490b061ee28c181c490de5862234d692d8f9f7baa46174b81ce334b53ba_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc9069ca6413e6cabd8ce8a5d0cc38cc0dc31748b5106a4c839a1b633d841a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9069ca6413e6cabd8ce8a5d0cc38cc0dc31748b5106a4c839a1b633d841a77->enter($__internal_bc9069ca6413e6cabd8ce8a5d0cc38cc0dc31748b5106a4c839a1b633d841a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6d37ab944144c0bf70cdc1be7217a5aca1c92e255d6c952cfcc0e50238545aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d37ab944144c0bf70cdc1be7217a5aca1c92e255d6c952cfcc0e50238545aa9->enter($__internal_6d37ab944144c0bf70cdc1be7217a5aca1c92e255d6c952cfcc0e50238545aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"
                type=\"text/javascript\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/form-repeter/jquery.form-repeater.js"), "html", null, true);
        echo "\"
                type=\"text/javascript\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/scripts/portfolio-1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/magicsuggest/magicsuggest-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script>
            \$(document).ready(function (e) {
                \$('li').removeClass('active open selected');
                \$('.Utilizadores').addClass('active open selected');
                \$('.cadastrar').click(function (e) {
                    \$('.page-content-col').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Loader.gif"), "html", null, true);
        echo "\"></div>');
                    e.preventDefault();
                    cadastrarMembro(\"GET\", \$(this).attr('title'))
                });


                function cadastrarMembro(tipo, data) {
                    \$.ajax({
                        type: tipo,
                        dataType: 'json',
                        url: '/membros/novo',
                        data:  data
                        ,
                        success: function (template) {
                            \$('.page-content-col').html(template.message); //Change the html of the div with the id = \"your_div\"

                            \$('.cadastrarMembro').submit(function (e) {
                                e.preventDefault();
                                cadastrarMembro(\"POST\", \$(this).serialize())
                            })

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
        
        $__internal_6d37ab944144c0bf70cdc1be7217a5aca1c92e255d6c952cfcc0e50238545aa9->leave($__internal_6d37ab944144c0bf70cdc1be7217a5aca1c92e255d6c952cfcc0e50238545aa9_prof);

        
        $__internal_bc9069ca6413e6cabd8ce8a5d0cc38cc0dc31748b5106a4c839a1b633d841a77->leave($__internal_bc9069ca6413e6cabd8ce8a5d0cc38cc0dc31748b5106a4c839a1b633d841a77_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_0100412696f66d2ebba4bebed65e7d794fa5ddeed80ee0672662c3893ec44b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0100412696f66d2ebba4bebed65e7d794fa5ddeed80ee0672662c3893ec44b73->enter($__internal_0100412696f66d2ebba4bebed65e7d794fa5ddeed80ee0672662c3893ec44b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e264563586b8627f57b87596eaa5910d5757f8d0f601d7306ad4f6d681d631a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e264563586b8627f57b87596eaa5910d5757f8d0f601d7306ad4f6d681d631a->enter($__internal_3e264563586b8627f57b87596eaa5910d5757f8d0f601d7306ad4f6d681d631a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 77
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
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membro_index");
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
        
        $__internal_3e264563586b8627f57b87596eaa5910d5757f8d0f601d7306ad4f6d681d631a->leave($__internal_3e264563586b8627f57b87596eaa5910d5757f8d0f601d7306ad4f6d681d631a_prof);

        
        $__internal_0100412696f66d2ebba4bebed65e7d794fa5ddeed80ee0672662c3893ec44b73->leave($__internal_0100412696f66d2ebba4bebed65e7d794fa5ddeed80ee0672662c3893ec44b73_prof);

    }

    public function getTemplateName()
    {
        return ":SYS/definicoes:definicoes_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 88,  180 => 77,  171 => 76,  108 => 22,  99 => 16,  95 => 15,  90 => 13,  84 => 11,  75 => 10,  60 => 5,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'inicio.html.twig' %}
    {% block css %}
        <link href=\"{{ asset('global/plugins/cubeportfolio/css/cubeportfolio.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('pages/css/portfolio.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('global/css/magicsuggest-min.css') }}\">
        <style>
            input, textarea, label, button select{border-radius: 0 !important;}
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
                \$('.Utilizadores').addClass('active open selected');
                \$('.cadastrar').click(function (e) {
                    \$('.page-content-col').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"{{ asset('img/Loader.gif') }}\"></div>');
                    e.preventDefault();
                    cadastrarMembro(\"GET\", \$(this).attr('title'))
                });


                function cadastrarMembro(tipo, data) {
                    \$.ajax({
                        type: tipo,
                        dataType: 'json',
                        url: '/membros/novo',
                        data:  data
                        ,
                        success: function (template) {
                            \$('.page-content-col').html(template.message); //Change the html of the div with the id = \"your_div\"

                            \$('.cadastrarMembro').submit(function (e) {
                                e.preventDefault();
                                cadastrarMembro(\"POST\", \$(this).serialize())
                            })

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
                                <a href=\"{{ path('membro_index') }}\">
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
", ":SYS/definicoes:definicoes_base.html.twig", "/var/www/html/hom/app/Resources/views/SYS/definicoes/definicoes_base.html.twig");
    }
}

<?php

/* :MUS:index.html.twig */
class __TwigTemplate_ce3cf852af3d992145384d914315a6faea5987ec5ef38cc5479ac9e9d3f262fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("inicio.html.twig", ":MUS:index.html.twig", 1);
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
        $__internal_652f1f735bc540c65f6f197b1b00fa3b30feb3a6b02b1015ff415c888fb5fff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_652f1f735bc540c65f6f197b1b00fa3b30feb3a6b02b1015ff415c888fb5fff8->enter($__internal_652f1f735bc540c65f6f197b1b00fa3b30feb3a6b02b1015ff415c888fb5fff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS:index.html.twig"));

        $__internal_5199907a894b851f2271036021e824bbab5cff6839cbf7d708d37e9d21d17bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5199907a894b851f2271036021e824bbab5cff6839cbf7d708d37e9d21d17bd4->enter($__internal_5199907a894b851f2271036021e824bbab5cff6839cbf7d708d37e9d21d17bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_652f1f735bc540c65f6f197b1b00fa3b30feb3a6b02b1015ff415c888fb5fff8->leave($__internal_652f1f735bc540c65f6f197b1b00fa3b30feb3a6b02b1015ff415c888fb5fff8_prof);

        
        $__internal_5199907a894b851f2271036021e824bbab5cff6839cbf7d708d37e9d21d17bd4->leave($__internal_5199907a894b851f2271036021e824bbab5cff6839cbf7d708d37e9d21d17bd4_prof);

    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        $__internal_7f42ce9098fdf210481c8d702761f852a3f3375f3f7bd8f83847de852e66d28a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f42ce9098fdf210481c8d702761f852a3f3375f3f7bd8f83847de852e66d28a->enter($__internal_7f42ce9098fdf210481c8d702761f852a3f3375f3f7bd8f83847de852e66d28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_b2f2128c63decda9d6f4a00902f3db5c07d57cf75511c4c0c51497ee635c768e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f2128c63decda9d6f4a00902f3db5c07d57cf75511c4c0c51497ee635c768e->enter($__internal_b2f2128c63decda9d6f4a00902f3db5c07d57cf75511c4c0c51497ee635c768e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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
        
        $__internal_b2f2128c63decda9d6f4a00902f3db5c07d57cf75511c4c0c51497ee635c768e->leave($__internal_b2f2128c63decda9d6f4a00902f3db5c07d57cf75511c4c0c51497ee635c768e_prof);

        
        $__internal_7f42ce9098fdf210481c8d702761f852a3f3375f3f7bd8f83847de852e66d28a->leave($__internal_7f42ce9098fdf210481c8d702761f852a3f3375f3f7bd8f83847de852e66d28a_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd0be0a3521af6e7c3493b9dc4098b795953890764a0820b2bf5729854a8dc9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0be0a3521af6e7c3493b9dc4098b795953890764a0820b2bf5729854a8dc9b->enter($__internal_cd0be0a3521af6e7c3493b9dc4098b795953890764a0820b2bf5729854a8dc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d5bbaf2982aaa10ad0141e87e90f665fcd31283e6ec33941e00c3cf777198346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5bbaf2982aaa10ad0141e87e90f665fcd31283e6ec33941e00c3cf777198346->enter($__internal_d5bbaf2982aaa10ad0141e87e90f665fcd31283e6ec33941e00c3cf777198346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
                \$('.Utilizadores').addClass('active open selected');
                \$('.cadastrar').click(function (e) {
                    \$('.page-content-col').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Loader.gif"), "html", null, true);
        echo "\"></div>');
                    e.preventDefault();
                    cadastrarMembro(\"GET\", \$(this).attr('title'))
                });



                function cadastrarMembro(tipo, data) {
                    \$.ajax({
                        type: tipo,
                        dataType: 'json',
                        url: ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membro_new");
        echo ",
                        data: data,
                        success: function (template) {
                            \$('.page-content-col').html(template.message); //Change the html of the div with the id = \"your_div\"

                            \$('.cadastrarMembro').submit(function (e) {
                                e.preventDefault();
                                cadastrarMembro(\"POST\", \$(this).serialize())
                            })

                            if (template.status == 1) {
                                alert(1)
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

                \$('.editar').click(function (e) {
                    \$('.page-content-col').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Loader.gif"), "html", null, true);
        echo "\"></div>');
                    e.preventDefault();
                    editarMembro(\"GET\", null,\$(this).attr('value'))
                });

                function editarMembro(tipo, data,id) {
                    \$.ajax({
                        type: tipo,
                        dataType: 'json',
                        url: 'membro/editar/'+id,
                        data: data,
                        success: function (template) {
                            \$('.page-content-col').html(template.message); //Change the html of the div with the id = \"your_div\"

                            \$('.cadastrarMembro').submit(function (e) {
                                e.preventDefault();
                                cadastrarMembro(\"POST\", \$(this).serialize())
                            })

                            if (template.status == 1) {
                                alert(1)
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
        
        $__internal_d5bbaf2982aaa10ad0141e87e90f665fcd31283e6ec33941e00c3cf777198346->leave($__internal_d5bbaf2982aaa10ad0141e87e90f665fcd31283e6ec33941e00c3cf777198346_prof);

        
        $__internal_cd0be0a3521af6e7c3493b9dc4098b795953890764a0820b2bf5729854a8dc9b->leave($__internal_cd0be0a3521af6e7c3493b9dc4098b795953890764a0820b2bf5729854a8dc9b_prof);

    }

    // line 127
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd24173c81999040e3fab5fe4a07e5c1b0392ec3c61482fb6d9f989304b166e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd24173c81999040e3fab5fe4a07e5c1b0392ec3c61482fb6d9f989304b166e0->enter($__internal_fd24173c81999040e3fab5fe4a07e5c1b0392ec3c61482fb6d9f989304b166e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9efc491e0cfee6a59c5e8bd8a94bbdaa45d43cb094e6950a7e756a6a8ade3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9efc491e0cfee6a59c5e8bd8a94bbdaa45d43cb094e6950a7e756a6a8ade3fe->enter($__internal_f9efc491e0cfee6a59c5e8bd8a94bbdaa45d43cb094e6950a7e756a6a8ade3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 128
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
        // line 139
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

                        ";
        // line 164
        $this->loadTemplate((isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new Twig_Error_Runtime('Variable "pagina" does not exist.', 164, $this->getSourceContext()); })()), ":MUS:index.html.twig", 164)->display($context);
        // line 165
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
        
        $__internal_f9efc491e0cfee6a59c5e8bd8a94bbdaa45d43cb094e6950a7e756a6a8ade3fe->leave($__internal_f9efc491e0cfee6a59c5e8bd8a94bbdaa45d43cb094e6950a7e756a6a8ade3fe_prof);

        
        $__internal_fd24173c81999040e3fab5fe4a07e5c1b0392ec3c61482fb6d9f989304b166e0->leave($__internal_fd24173c81999040e3fab5fe4a07e5c1b0392ec3c61482fb6d9f989304b166e0_prof);

    }

    public function getTemplateName()
    {
        return ":MUS:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 165,  278 => 164,  250 => 139,  237 => 128,  228 => 127,  168 => 76,  125 => 36,  111 => 25,  101 => 18,  97 => 17,  92 => 15,  86 => 13,  77 => 12,  60 => 5,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
                        url: {{ path('membro_new') }},
                        data: data,
                        success: function (template) {
                            \$('.page-content-col').html(template.message); //Change the html of the div with the id = \"your_div\"

                            \$('.cadastrarMembro').submit(function (e) {
                                e.preventDefault();
                                cadastrarMembro(\"POST\", \$(this).serialize())
                            })

                            if (template.status == 1) {
                                alert(1)
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

                \$('.editar').click(function (e) {
                    \$('.page-content-col').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"{{ asset('img/Loader.gif') }}\"></div>');
                    e.preventDefault();
                    editarMembro(\"GET\", null,\$(this).attr('value'))
                });

                function editarMembro(tipo, data,id) {
                    \$.ajax({
                        type: tipo,
                        dataType: 'json',
                        url: 'membro/editar/'+id,
                        data: data,
                        success: function (template) {
                            \$('.page-content-col').html(template.message); //Change the html of the div with the id = \"your_div\"

                            \$('.cadastrarMembro').submit(function (e) {
                                e.preventDefault();
                                cadastrarMembro(\"POST\", \$(this).serialize())
                            })

                            if (template.status == 1) {
                                alert(1)
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
", ":MUS:index.html.twig", "/var/www/html/hom/app/Resources/views/MUS/index.html.twig");
    }
}

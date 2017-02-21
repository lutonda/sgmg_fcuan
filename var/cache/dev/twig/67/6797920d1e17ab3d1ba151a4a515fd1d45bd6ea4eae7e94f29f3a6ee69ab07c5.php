<?php

/* MUS/index.html.twig */
class __TwigTemplate_fcea4efd69974c52a8c10f637cc4adba3a9d0acc3e3eb1cf4a88731f595b49b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("inicio.html.twig", "MUS/index.html.twig", 1);
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
        $__internal_7aea4d53e90d38e0ef63ea5f8b5ceaf024f09d5c19ff705b61d2bf33e6ef1fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aea4d53e90d38e0ef63ea5f8b5ceaf024f09d5c19ff705b61d2bf33e6ef1fe2->enter($__internal_7aea4d53e90d38e0ef63ea5f8b5ceaf024f09d5c19ff705b61d2bf33e6ef1fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MUS/index.html.twig"));

        $__internal_0ac62f3a04b87338047d7a198c6230e8e86adbf47fb945807e80df0229955533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac62f3a04b87338047d7a198c6230e8e86adbf47fb945807e80df0229955533->enter($__internal_0ac62f3a04b87338047d7a198c6230e8e86adbf47fb945807e80df0229955533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MUS/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aea4d53e90d38e0ef63ea5f8b5ceaf024f09d5c19ff705b61d2bf33e6ef1fe2->leave($__internal_7aea4d53e90d38e0ef63ea5f8b5ceaf024f09d5c19ff705b61d2bf33e6ef1fe2_prof);

        
        $__internal_0ac62f3a04b87338047d7a198c6230e8e86adbf47fb945807e80df0229955533->leave($__internal_0ac62f3a04b87338047d7a198c6230e8e86adbf47fb945807e80df0229955533_prof);

    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        $__internal_f2a33e51fc8ee444ec4a9b6d00e356bb11e0e9de706f623e474c0a25d77e53a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a33e51fc8ee444ec4a9b6d00e356bb11e0e9de706f623e474c0a25d77e53a9->enter($__internal_f2a33e51fc8ee444ec4a9b6d00e356bb11e0e9de706f623e474c0a25d77e53a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_62aaeb255dea7346f0cbcf60190e4ed0fe7a6b1be3a470711da31fcf4b7b9e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62aaeb255dea7346f0cbcf60190e4ed0fe7a6b1be3a470711da31fcf4b7b9e86->enter($__internal_62aaeb255dea7346f0cbcf60190e4ed0fe7a6b1be3a470711da31fcf4b7b9e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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
        
        $__internal_62aaeb255dea7346f0cbcf60190e4ed0fe7a6b1be3a470711da31fcf4b7b9e86->leave($__internal_62aaeb255dea7346f0cbcf60190e4ed0fe7a6b1be3a470711da31fcf4b7b9e86_prof);

        
        $__internal_f2a33e51fc8ee444ec4a9b6d00e356bb11e0e9de706f623e474c0a25d77e53a9->leave($__internal_f2a33e51fc8ee444ec4a9b6d00e356bb11e0e9de706f623e474c0a25d77e53a9_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e72e6b0e098917acf4c631c22cc0e8f192f963f8e170f838bad02f410a2ba3db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72e6b0e098917acf4c631c22cc0e8f192f963f8e170f838bad02f410a2ba3db->enter($__internal_e72e6b0e098917acf4c631c22cc0e8f192f963f8e170f838bad02f410a2ba3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a9697c2ae627e2fc68ca39078d4363da18e511535e9b51a565225bac87295694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9697c2ae627e2fc68ca39078d4363da18e511535e9b51a565225bac87295694->enter($__internal_a9697c2ae627e2fc68ca39078d4363da18e511535e9b51a565225bac87295694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a9697c2ae627e2fc68ca39078d4363da18e511535e9b51a565225bac87295694->leave($__internal_a9697c2ae627e2fc68ca39078d4363da18e511535e9b51a565225bac87295694_prof);

        
        $__internal_e72e6b0e098917acf4c631c22cc0e8f192f963f8e170f838bad02f410a2ba3db->leave($__internal_e72e6b0e098917acf4c631c22cc0e8f192f963f8e170f838bad02f410a2ba3db_prof);

    }

    // line 127
    public function block_body($context, array $blocks = array())
    {
        $__internal_434cad855f24a3c84b6f2ad7a16cfd5b4b8387e21bf943f7bd8f6d2714199ccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434cad855f24a3c84b6f2ad7a16cfd5b4b8387e21bf943f7bd8f6d2714199ccc->enter($__internal_434cad855f24a3c84b6f2ad7a16cfd5b4b8387e21bf943f7bd8f6d2714199ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90fcf571e64709719ee67605afa17a287583cd1d21168e5554808d4e68c7bbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fcf571e64709719ee67605afa17a287583cd1d21168e5554808d4e68c7bbdb->enter($__internal_90fcf571e64709719ee67605afa17a287583cd1d21168e5554808d4e68c7bbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate((isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new Twig_Error_Runtime('Variable "pagina" does not exist.', 164, $this->getSourceContext()); })()), "MUS/index.html.twig", 164)->display($context);
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
        
        $__internal_90fcf571e64709719ee67605afa17a287583cd1d21168e5554808d4e68c7bbdb->leave($__internal_90fcf571e64709719ee67605afa17a287583cd1d21168e5554808d4e68c7bbdb_prof);

        
        $__internal_434cad855f24a3c84b6f2ad7a16cfd5b4b8387e21bf943f7bd8f6d2714199ccc->leave($__internal_434cad855f24a3c84b6f2ad7a16cfd5b4b8387e21bf943f7bd8f6d2714199ccc_prof);

    }

    public function getTemplateName()
    {
        return "MUS/index.html.twig";
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
", "MUS/index.html.twig", "/var/www/html/hom/app/Resources/views/MUS/index.html.twig");
    }
}

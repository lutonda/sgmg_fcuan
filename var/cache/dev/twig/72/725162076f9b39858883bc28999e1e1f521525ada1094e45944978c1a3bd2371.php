<?php

/* :SYS/definicoes:definicoes.html.twig */
class __TwigTemplate_f636c39b19fba5a06c80db617f372293538b2a190ab643515cc74e84a4baddd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("inicio.html.twig", ":SYS/definicoes:definicoes.html.twig", 1);
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
        $__internal_9120683f9dffcd8359f5fcaa98153a2a3058e0be60d06071b5c70e8f393cd5c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9120683f9dffcd8359f5fcaa98153a2a3058e0be60d06071b5c70e8f393cd5c3->enter($__internal_9120683f9dffcd8359f5fcaa98153a2a3058e0be60d06071b5c70e8f393cd5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":SYS/definicoes:definicoes.html.twig"));

        $__internal_697ed0a9596d4eced910da7276e49d1ce1dbe28fa26fd6b0bc052bfc04cc97ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697ed0a9596d4eced910da7276e49d1ce1dbe28fa26fd6b0bc052bfc04cc97ae->enter($__internal_697ed0a9596d4eced910da7276e49d1ce1dbe28fa26fd6b0bc052bfc04cc97ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":SYS/definicoes:definicoes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9120683f9dffcd8359f5fcaa98153a2a3058e0be60d06071b5c70e8f393cd5c3->leave($__internal_9120683f9dffcd8359f5fcaa98153a2a3058e0be60d06071b5c70e8f393cd5c3_prof);

        
        $__internal_697ed0a9596d4eced910da7276e49d1ce1dbe28fa26fd6b0bc052bfc04cc97ae->leave($__internal_697ed0a9596d4eced910da7276e49d1ce1dbe28fa26fd6b0bc052bfc04cc97ae_prof);

    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        $__internal_ca42ca7b130727043b6bc4b1e4f88c153022422bd5d8f77616554ef0ce534cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca42ca7b130727043b6bc4b1e4f88c153022422bd5d8f77616554ef0ce534cc1->enter($__internal_ca42ca7b130727043b6bc4b1e4f88c153022422bd5d8f77616554ef0ce534cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_f2c3320b4ff264a15043207314b0b141c2dc7ef23f5e043d83f3a37e9676179e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c3320b4ff264a15043207314b0b141c2dc7ef23f5e043d83f3a37e9676179e->enter($__internal_f2c3320b4ff264a15043207314b0b141c2dc7ef23f5e043d83f3a37e9676179e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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
        
        $__internal_f2c3320b4ff264a15043207314b0b141c2dc7ef23f5e043d83f3a37e9676179e->leave($__internal_f2c3320b4ff264a15043207314b0b141c2dc7ef23f5e043d83f3a37e9676179e_prof);

        
        $__internal_ca42ca7b130727043b6bc4b1e4f88c153022422bd5d8f77616554ef0ce534cc1->leave($__internal_ca42ca7b130727043b6bc4b1e4f88c153022422bd5d8f77616554ef0ce534cc1_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5416350cb9231e306bdc1da384117d51efa9249400813acaa16d549120d425d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5416350cb9231e306bdc1da384117d51efa9249400813acaa16d549120d425d->enter($__internal_e5416350cb9231e306bdc1da384117d51efa9249400813acaa16d549120d425d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6258d9d281b98664ea6abad316a9fffb82424e66d1dccf431291035fcdf189a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6258d9d281b98664ea6abad316a9fffb82424e66d1dccf431291035fcdf189a9->enter($__internal_6258d9d281b98664ea6abad316a9fffb82424e66d1dccf431291035fcdf189a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
                \$('.Definicoes').addClass('active open selected');
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
        
        $__internal_6258d9d281b98664ea6abad316a9fffb82424e66d1dccf431291035fcdf189a9->leave($__internal_6258d9d281b98664ea6abad316a9fffb82424e66d1dccf431291035fcdf189a9_prof);

        
        $__internal_e5416350cb9231e306bdc1da384117d51efa9249400813acaa16d549120d425d->leave($__internal_e5416350cb9231e306bdc1da384117d51efa9249400813acaa16d549120d425d_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_80d2145f89df2e95450d6af93fcac053dfdcd6cda732b49c73463b1c86ee1a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d2145f89df2e95450d6af93fcac053dfdcd6cda732b49c73463b1c86ee1a15->enter($__internal_80d2145f89df2e95450d6af93fcac053dfdcd6cda732b49c73463b1c86ee1a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e186afe3d95a4515bca59eddc6abb544ab0ee6df89b4561f335fdef72dae4832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e186afe3d95a4515bca59eddc6abb544ab0ee6df89b4561f335fdef72dae4832->enter($__internal_e186afe3d95a4515bca59eddc6abb544ab0ee6df89b4561f335fdef72dae4832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "    <div class=\"container-fluid\">
        <div class=\"page-content\" style=\"min-height: 414px;\">

            <div class=\"page-content-container\">
                <div class=\"page-content-row\">
                    <!-- BEGIN PAGE SIDEBAR -->
                    <div class=\"page-sidebar\">

                        <h3>Definições</h3>
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("definicoes_config", array("tipo" => "ACL"));
        echo "\">
                                    <i class=\"icon-home \"></i> ACL
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE SIDEBAR -->
                    <div class=\"page-content-col\">
                        <!-- BEGIN PAGE BASE CONTENT -->
                        ";
        // line 97
        $this->loadTemplate((isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new Twig_Error_Runtime('Variable "pagina" does not exist.', 97, $this->getSourceContext()); })()), ":SYS/definicoes:definicoes.html.twig", 97)->display($context);
        // line 98
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
        
        $__internal_e186afe3d95a4515bca59eddc6abb544ab0ee6df89b4561f335fdef72dae4832->leave($__internal_e186afe3d95a4515bca59eddc6abb544ab0ee6df89b4561f335fdef72dae4832_prof);

        
        $__internal_80d2145f89df2e95450d6af93fcac053dfdcd6cda732b49c73463b1c86ee1a15->leave($__internal_80d2145f89df2e95450d6af93fcac053dfdcd6cda732b49c73463b1c86ee1a15_prof);

    }

    public function getTemplateName()
    {
        return ":SYS/definicoes:definicoes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 98,  205 => 97,  193 => 88,  180 => 77,  171 => 76,  108 => 22,  99 => 16,  95 => 15,  90 => 13,  84 => 11,  75 => 10,  60 => 5,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
                \$('.Definicoes').addClass('active open selected');
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

                        <h3>Definições</h3>
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"{{ path('definicoes_config',{'tipo':'ACL'}) }}\">
                                    <i class=\"icon-home \"></i> ACL
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
", ":SYS/definicoes:definicoes.html.twig", "/var/www/html/hom/app/Resources/views/SYS/definicoes/definicoes.html.twig");
    }
}

<?php

/* inicio.html.twig */
class __TwigTemplate_3ac3a10f0978de4232d1898ffd3314bfcdbc8ee8f8a6fde7293c285a62e27bc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6978d7d600998654d8510dd252700367b2955cdb78c26a7e4dd656c20e1e5d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6978d7d600998654d8510dd252700367b2955cdb78c26a7e4dd656c20e1e5d43->enter($__internal_6978d7d600998654d8510dd252700367b2955cdb78c26a7e4dd656c20e1e5d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inicio.html.twig"));

        $__internal_908d4c77dee5642132ff81930cd3ba42c6f45a941d76edf734286e9c3f0017d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908d4c77dee5642132ff81930cd3ba42c6f45a941d76edf734286e9c3f0017d6->enter($__internal_908d4c77dee5642132ff81930cd3ba42c6f45a941d76edf734286e9c3f0017d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inicio.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]>
<html lang=\"en\" class=\"ie8 no-js') }}\"> <![endif]-->
<!--[if IE 9]>
<html lang=\"en\" class=\"ie9 no-js') }}\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset=\"utf-8\"/>
    <title>Metronic Admin Theme #5 | User Profile</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    <meta content=\"Preview page of Metronic Admin Theme #5 for \" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    <!-- BEGIN LAYOUT FIRST STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Oswald:400,300,700\" rel=\"stylesheet\" type=\"text/css') }}\"/>
    <!-- END LAYOUT FIRST STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-sweetalert/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/css/components-md.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\"
          type=\"text/css\"/>
    <link href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/css/plugins-md.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- BEGIN DATATABLES -->
    <link href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/css/jquery.dataTables.cssX"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/datatables/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- END DATATABLES -->

    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("layouts/layout5/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("layouts/layout5/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

    <link href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/css/profile.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END THEME LAYOUT STYLES -->
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery-1.10.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/scripts/table-bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery-ui.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-table/bootstrap-table.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery.timeago.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- BEGIN DATATABLES -->
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/datatables/jquery.dataTables.jsX"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END DATATABLES -->

    <link rel=\"shortcut icon\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>

    <script>
        \$(document).ready(function(){

        })</script>
</head>
<!-- END HEAD -->
";
        // line 92
        $this->displayBlock('css', $context, $blocks);
        // line 93
        echo "<body class=\"page-header-fixed page-sidebar-closed-hide-logo page-md\">
<!-- BEGIN CONTAINER -->
<div class=\"wrapper\">
    <!-- BEGIN HEADER -->
    <header class=\"page-header\">
        <nav class=\"navbar mega-menu\" role=\"navigation\">
            <div class=\"container-fluid\">
                <div class=\"clearfix navbar-fixed-top\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                            data-target=\".navbar-responsive-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"toggle-icon\">
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </span>
                    </button>
                    <!-- End Toggle Button -->
                    <!-- BEGIN LOGO -->
                    <a id=\"index\" class=\"page-logo\" href=\"index.html\">
                        <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("layouts/layout5/img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"> </a>
                    <!-- END LOGO -->
                    <!-- BEGIN SEARCH -->
                    <form class=\"search\"
                          action=\"http://keenthemes.com/preview/metronic/theme/admin_5_material_design/extra_search.html\"
                          method=\"GET\">
                        <input type=\"name\" class=\"form-control\" name=\"query\" placeholder=\"Procurar...\">
                        <a href=\"javascript:;\" class=\"btn submit md-skip\">
                            <i class=\"fa fa-search\"></i>
                        </a>
                    </form>
                    <!-- END SEARCH -->
                    <!-- BEGIN TOPBAR ACTIONS -->
                    <div class=\"topbar-actions\">
                        <!-- BEGIN GROUP NOTIFICATION -->
                        <div class=\"btn-group-notification btn-group\" id=\"header_notification_bar\">
                            <button type=\"button\" class=\"btn btn-sm md-skip dropdown-toggle\" data-toggle=\"dropdown\"
                                    data-hover=\"dropdown\" data-close-others=\"true\">
                                <i class=\"icon-bell\"></i>
                                <span class=\"badge\">7</span>
                            </button>
                            <ul class=\"dropdown-menu-v2\">
                                <li class=\"external\">
                                    <h3>
                                        <span class=\"bold\">12 pendentes</span> Notificações</h3>
                                    <a href=\"page_user_profile_1.html#\">Ver mais</a>
                                </li>
                                <li>
                                    <ul class=\"dropdown-menu-list scroller\" style=\"height: 250px; padding: 0;\"
                                        data-handle-color=\"#637283\">
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-success md-skip\">
                                                                <i class=\"fa fa-plus\"></i>
                                                            </span> New user registered. </span>
                                                <span class=\"time\">just now</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-danger md-skip\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </span> Server #12 overloaded. </span>
                                                <span class=\"time\">3 mins</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-warning md-skip\">
                                                                <i class=\"fa fa-bell-o\"></i>
                                                            </span> Server #2 not responding. </span>
                                                <span class=\"time\">10 mins</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-info md-skip\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </span> Application error. </span>
                                                <span class=\"time\">14 hrs</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-danger md-skip\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </span> Database overloaded 68%. </span>
                                                <span class=\"time\">2 days</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-danger md-skip\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </span> A user IP blocked. </span>
                                                <span class=\"time\">3 days</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-warning md-skip\">
                                                                <i class=\"fa fa-bell-o\"></i>
                                                            </span> Storage Server #4 not responding dfdfdfd. </span>
                                                <span class=\"time\">4 days</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-info md-skip\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </span> System Error. </span>
                                                <span class=\"time\">5 days</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-danger md-skip\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </span> Storage server failed. </span>
                                                <span class=\"time\">9 days</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END GROUP NOTIFICATION -->
                        <!-- BEGIN GROUP INFORMATION -->
                        <div class=\"btn-group-red btn-group\">
                            <button type=\"button\" class=\"btn btn-sm md-skip dropdown-toggle\" data-toggle=\"dropdown\"
                                    data-hover=\"dropdown\" data-close-others=\"true\" title=\"favoritos\">
                                <i class=\"fa fa-star-o\"></i>
                            </button>
                            <ul class=\"dropdown-menu-v2\" role=\"menu\">
                                <li class=\"active\">
                                    <a href=\"page_user_profile_1.html#\">New Post</a>
                                </li>
                                <li>
                                    <a href=\"page_user_profile_1.html#\">New Comment</a>
                                </li>
                                <li>
                                    <a href=\"page_user_profile_1.html#\">Share</a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"page_user_profile_1.html#\">Comments
                                        <span class=\"badge badge-success\">4</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"page_user_profile_1.html#\">Feedbacks
                                        <span class=\"badge badge-danger\">2</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END GROUP INFORMATION -->
                        <!-- BEGIN USER PROFILE -->
                        <div class=\"btn-group-img btn-group\">
                            <button type=\"button\" class=\"btn btn-sm md-skip dropdown-toggle\" data-toggle=\"dropdown\"
                                    data-hover=\"dropdown\" data-close-others=\"true\">
                                <span>Ola, ";
        // line 264
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 264, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</span>
                                <img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("layouts/layout5/img/avatar2.png"), "html", null, true);
        echo "\" alt=\"\"></button>
                            <ul class=\"dropdown-menu-v2\" role=\"menu\">
                                <li>
                                    <a href=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 268, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">
                                        <i class=\"icon-user\"></i> Meu Perfil
                                        <span class=\"badge badge-danger\">1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"icon-calendar\"></i> My Calendar </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"icon-envelope-open\"></i> Favoritos
                                        <span class=\"badge badge-danger\"> 3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"app_todo_2.html\">
                                        <i class=\"icon-rocket\"></i> Tarefas
                                        <span class=\"badge badge-success\"> 7 </span>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"icon-lock\"></i> Bloquear o ecram </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 295
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">
                                        <i class=\"icon-key\"></i> Terminar Sessão </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END USER PROFILE -->
                    </div>
                    <!-- END TOPBAR ACTIONS -->
                </div>
                <!-- BEGIN HEADER MENU -->
                <div class=\"nav-collapse collapse navbar-collapse navbar-responsive-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown dropdown-fw dropdown-fw-disabled inicio \">
                            <a href=\"/\" class=\"text-uppercase\">
                                <i class=\"icon-home\"></i>
                            </a>
                        </li>
                        ";
        // line 312
        if (twig_in_filter("ROLE_ACERVO_VIEW", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 312, $this->getSourceContext()); })()), "R", array()))) {
            // line 313
            echo "                        <li class=\"dropdown dropdown-fw dropdown-fw-disabled  Acervos\">
                            <a href=\"";
            // line 314
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acervos");
            echo "\" class=\"text-uppercase\">
                                <i class=\"icon-puzzle\"></i> Acervos </a>
                            <ul class=\"dropdown-menu dropdown-menu-fw\">
                                <li class=\"\">
                                    <a href=\"/acervos\">
                                        <i class=\"icon-settings\"></i> Inicio </a>
                                </li>
                                <li class=\"dropdown\">
                                    <a class=\"btn-outline\" href=\"javascript:;\"
                                       data-toggle=\"dropdown\">
                                        <i class=\"icon-plus\"></i> Inserir Novo
                                        <i class=\"fa fa-angle-down\"></i> </a>
                                    <ul class=\"dropdown-menu pull-right\" style=\"box-shadow: 0 0 10px #000 !important;\" >
                                        <li>
                                            <a href=\"javascript:;\" title=\"Mineiro\"> Mineiro </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\" title=\"Rocha\"> Rocha </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\" title=\"Fosseis\"> Fosseis </a>
                                        </li>
                                    </ul>

                                </li>
                                <li class=\"\">
                                    <a href=\"/acervos/configuracoes/categoria\">
                                        <i class=\"icon-settings\"></i> Configurações </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"javascript:;\">
                                        <i class=\"icon-puzzle\"></i> Emprestimo </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"javascript:;\">
                                        <i class=\"icon-cloud-upload\"></i> Doações </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"page_user_profile_1.html@p=.html\">
                                        <i class=\"icon-wallet\"></i> Troca </a>
                                </li>
                            </ul>
                        </li>
                        ";
        }
        // line 358
        echo "                        ";
        if (twig_in_filter("ROLE_VISITA_VIEW", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 358, $this->getSourceContext()); })()), "R", array()))) {
            // line 359
            echo "                        <li class=\"dropdown dropdown-fw dropdown-fw-disabled  Visita\">
                            <a href=\"";
            // line 360
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visita_view");
            echo "\" class=\"text-uppercase\">
                                <i class=\"icon-briefcase\"></i> Visitas </a>
                        </li>
                        ";
        }
        // line 364
        echo "                        ";
        if (twig_in_filter("ROLE_EVENTO_VIEW", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 364, $this->getSourceContext()); })()), "R", array()))) {
            // line 365
            echo "                        <li class=\"dropdown dropdown-fw dropdown-fw-disabled\">
                            <a href=\"javascript:;\" class=\"text-uppercase\">
                                <i class=\"icon-layers\"></i> Eventos </a>
                        </li>
                        ";
        }
        // line 370
        echo "                        ";
        if (twig_in_filter("ROLE_MEMBRO_VIEW", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 370, $this->getSourceContext()); })()), "R", array()))) {
            // line 371
            echo "                        <li class=\"dropdown dropdown-fw dropdown-fw-disabled Utilizadores\">
                            <a href=\"";
            // line 372
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membro_index");
            echo "\" class=\"text-uppercase\">
                                <i class=\"icon-user\"></i>Membros </a>
                        </li>
                        ";
        }
        // line 376
        echo "                        ";
        if (twig_in_filter("ROLE_ESTATISTICA_VIEW", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 376, $this->getSourceContext()); })()), "R", array()))) {
            // line 377
            echo "                        <li class=\"dropdown more-dropdown\">
                            <a href=\"javascript:;\" class=\"text-uppercase\">
                                <i class=\"icon-bubbles\"></i>Estatisticas </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <a href=\"page_user_profile_1.html#\">Link 1</a>
                                </li>
                                <li>
                                    <a href=\"page_user_profile_1.html#\">Link 2</a>
                                </li>
                                <li>
                                    <a href=\"page_user_profile_1.html#\">Link 3</a>
                                </li>
                                <li>
                                    <a href=\"page_user_profile_1.html#\">Link 4</a>
                                </li>
                                <li>
                                    <a href=\"page_user_profile_1.html#\">Link 5</a>
                                </li>
                            </ul>
                        </li>
                        ";
        }
        // line 399
        echo "                        <li class=\"Definicoes\">
                            <a href=\"";
        // line 400
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("definicoes");
        echo "\" class=\"text-uppercase\">
                                <i class=\"icon-settings\"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- END HEADER MENU -->
            </div>
            <!--/container-->
        </nav>
    </header>
    <!-- END HEADER -->
    ";
        // line 411
        $this->displayBlock('body', $context, $blocks);
        // line 412
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 413
        echo "</div>
<!-- END CONTAINER -->
<!-- BEGIN QUICK NAV -->

<div class=\"quick-nav-overlay\"></div>
<!-- END QUICK NAV -->
<!-- End -->
</body>


</html>";
        
        $__internal_6978d7d600998654d8510dd252700367b2955cdb78c26a7e4dd656c20e1e5d43->leave($__internal_6978d7d600998654d8510dd252700367b2955cdb78c26a7e4dd656c20e1e5d43_prof);

        
        $__internal_908d4c77dee5642132ff81930cd3ba42c6f45a941d76edf734286e9c3f0017d6->leave($__internal_908d4c77dee5642132ff81930cd3ba42c6f45a941d76edf734286e9c3f0017d6_prof);

    }

    // line 92
    public function block_css($context, array $blocks = array())
    {
        $__internal_4522bcaae1005f75d4fe76e630f38b74307291e025a53e586eb9ff066e475309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4522bcaae1005f75d4fe76e630f38b74307291e025a53e586eb9ff066e475309->enter($__internal_4522bcaae1005f75d4fe76e630f38b74307291e025a53e586eb9ff066e475309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_4e59feb75b32876c2e41ad1eba28cf90fd1ebdaddbb0b26013102e4d48df36f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e59feb75b32876c2e41ad1eba28cf90fd1ebdaddbb0b26013102e4d48df36f0->enter($__internal_4e59feb75b32876c2e41ad1eba28cf90fd1ebdaddbb0b26013102e4d48df36f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_4e59feb75b32876c2e41ad1eba28cf90fd1ebdaddbb0b26013102e4d48df36f0->leave($__internal_4e59feb75b32876c2e41ad1eba28cf90fd1ebdaddbb0b26013102e4d48df36f0_prof);

        
        $__internal_4522bcaae1005f75d4fe76e630f38b74307291e025a53e586eb9ff066e475309->leave($__internal_4522bcaae1005f75d4fe76e630f38b74307291e025a53e586eb9ff066e475309_prof);

    }

    // line 411
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c4807bfdabaa65260ca48b77f9776d70dad655178df2541a8eae77cd0bb7851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4807bfdabaa65260ca48b77f9776d70dad655178df2541a8eae77cd0bb7851->enter($__internal_6c4807bfdabaa65260ca48b77f9776d70dad655178df2541a8eae77cd0bb7851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b953d934fcba6ac6eee60c05729ccae53417c4a42c3107b5bb9b24bf1a1c51c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b953d934fcba6ac6eee60c05729ccae53417c4a42c3107b5bb9b24bf1a1c51c4->enter($__internal_b953d934fcba6ac6eee60c05729ccae53417c4a42c3107b5bb9b24bf1a1c51c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b953d934fcba6ac6eee60c05729ccae53417c4a42c3107b5bb9b24bf1a1c51c4->leave($__internal_b953d934fcba6ac6eee60c05729ccae53417c4a42c3107b5bb9b24bf1a1c51c4_prof);

        
        $__internal_6c4807bfdabaa65260ca48b77f9776d70dad655178df2541a8eae77cd0bb7851->leave($__internal_6c4807bfdabaa65260ca48b77f9776d70dad655178df2541a8eae77cd0bb7851_prof);

    }

    // line 412
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b868d4393400d912545125f3c93f97ae7478e13348f80160ece2708859a0952e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b868d4393400d912545125f3c93f97ae7478e13348f80160ece2708859a0952e->enter($__internal_b868d4393400d912545125f3c93f97ae7478e13348f80160ece2708859a0952e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_145a9ed412167a39fe6afb66a9fc3dfcb24789e13711e7fd5054e8946779c2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145a9ed412167a39fe6afb66a9fc3dfcb24789e13711e7fd5054e8946779c2e3->enter($__internal_145a9ed412167a39fe6afb66a9fc3dfcb24789e13711e7fd5054e8946779c2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_145a9ed412167a39fe6afb66a9fc3dfcb24789e13711e7fd5054e8946779c2e3->leave($__internal_145a9ed412167a39fe6afb66a9fc3dfcb24789e13711e7fd5054e8946779c2e3_prof);

        
        $__internal_b868d4393400d912545125f3c93f97ae7478e13348f80160ece2708859a0952e->leave($__internal_b868d4393400d912545125f3c93f97ae7478e13348f80160ece2708859a0952e_prof);

    }

    public function getTemplateName()
    {
        return "inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  631 => 412,  614 => 411,  597 => 92,  577 => 413,  574 => 412,  572 => 411,  558 => 400,  555 => 399,  531 => 377,  528 => 376,  521 => 372,  518 => 371,  515 => 370,  508 => 365,  505 => 364,  498 => 360,  495 => 359,  492 => 358,  445 => 314,  442 => 313,  440 => 312,  420 => 295,  390 => 268,  384 => 265,  380 => 264,  227 => 114,  204 => 93,  202 => 92,  191 => 84,  185 => 81,  181 => 80,  177 => 79,  172 => 77,  168 => 76,  164 => 75,  160 => 74,  156 => 73,  152 => 72,  148 => 71,  144 => 70,  140 => 69,  135 => 67,  130 => 65,  126 => 64,  115 => 56,  111 => 55,  107 => 54,  102 => 52,  97 => 50,  90 => 46,  85 => 44,  79 => 41,  75 => 40,  70 => 38,  66 => 37,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]>
<html lang=\"en\" class=\"ie8 no-js') }}\"> <![endif]-->
<!--[if IE 9]>
<html lang=\"en\" class=\"ie9 no-js') }}\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset=\"utf-8\"/>
    <title>Metronic Admin Theme #5 | User Profile</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    <meta content=\"Preview page of Metronic Admin Theme #5 for \" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    <!-- BEGIN LAYOUT FIRST STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Oswald:400,300,700\" rel=\"stylesheet\" type=\"text/css') }}\"/>
    <!-- END LAYOUT FIRST STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"{{ asset('global/plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('global/plugins/simple-line-icons/simple-line-icons.min.css') }}\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"{{ asset('global/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href=\"{{ asset('global/plugins/bootstrap-sweetalert/sweetalert.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href=\"{{ asset('global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href=\"{{ asset('global/css/components-md.min.css') }}\" rel=\"stylesheet\" id=\"style_components\"
          type=\"text/css\"/>
    <link href=\"{{ asset('global/css/plugins-md.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- BEGIN DATATABLES -->
    <link href=\"{{ asset('global/css/jquery.dataTables.cssX') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('global/plugins/datatables/datatables.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- END DATATABLES -->

    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->

    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href=\"{{ asset('layouts/layout5/css/layout.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('layouts/layout5/css/custom.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>

    <link href=\"{{ asset('pages/css/profile.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END THEME LAYOUT STYLES -->
    <script src=\"{{ asset('javascripts/jquery-1.10.2.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('pages/scripts/table-bootstrap.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/jquery-ui.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('global/plugins/bootstrap-table/bootstrap-table.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('global/scripts/app.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('global/scripts/app.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('global/plugins/bootstrap-sweetalert/sweetalert.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('javascripts/jquery.timeago.js') }}\" type=\"text/javascript\"></script>
    <!-- BEGIN DATATABLES -->
    <script src=\"{{ asset('global/plugins/datatables/jquery.dataTables.jsX') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('global/scripts/datatable.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('global/plugins/datatables/datatables.min.js') }}\" type=\"text/javascript\"></script>
    <!-- END DATATABLES -->

    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\"/>

    <script>
        \$(document).ready(function(){

        })</script>
</head>
<!-- END HEAD -->
{% block css %}{% endblock %}
<body class=\"page-header-fixed page-sidebar-closed-hide-logo page-md\">
<!-- BEGIN CONTAINER -->
<div class=\"wrapper\">
    <!-- BEGIN HEADER -->
    <header class=\"page-header\">
        <nav class=\"navbar mega-menu\" role=\"navigation\">
            <div class=\"container-fluid\">
                <div class=\"clearfix navbar-fixed-top\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                            data-target=\".navbar-responsive-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"toggle-icon\">
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </span>
                    </button>
                    <!-- End Toggle Button -->
                    <!-- BEGIN LOGO -->
                    <a id=\"index\" class=\"page-logo\" href=\"index.html\">
                        <img src=\"{{ asset('layouts/layout5/img/logo.png') }}\" alt=\"Logo\"> </a>
                    <!-- END LOGO -->
                    <!-- BEGIN SEARCH -->
                    <form class=\"search\"
                          action=\"http://keenthemes.com/preview/metronic/theme/admin_5_material_design/extra_search.html\"
                          method=\"GET\">
                        <input type=\"name\" class=\"form-control\" name=\"query\" placeholder=\"Procurar...\">
                        <a href=\"javascript:;\" class=\"btn submit md-skip\">
                            <i class=\"fa fa-search\"></i>
                        </a>
                    </form>
                    <!-- END SEARCH -->
                    <!-- BEGIN TOPBAR ACTIONS -->
                    <div class=\"topbar-actions\">
                        <!-- BEGIN GROUP NOTIFICATION -->
                        <div class=\"btn-group-notification btn-group\" id=\"header_notification_bar\">
                            <button type=\"button\" class=\"btn btn-sm md-skip dropdown-toggle\" data-toggle=\"dropdown\"
                                    data-hover=\"dropdown\" data-close-others=\"true\">
                                <i class=\"icon-bell\"></i>
                                <span class=\"badge\">7</span>
                            </button>
                            <ul class=\"dropdown-menu-v2\">
                                <li class=\"external\">
                                    <h3>
                                        <span class=\"bold\">12 pendentes</span> Notificações</h3>
                                    <a href=\"page_user_profile_1.html#\">Ver mais</a>
                                </li>
                                <li>
                                    <ul class=\"dropdown-menu-list scroller\" style=\"height: 250px; padding: 0;\"
                                        data-handle-color=\"#637283\">
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-success md-skip\">
                                                                <i class=\"fa fa-plus\"></i>
                                                            </span> New user registered. </span>
                                                <span class=\"time\">just now</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-danger md-skip\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </span> Server #12 overloaded. </span>
                                                <span class=\"time\">3 mins</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-warning md-skip\">
                                                                <i class=\"fa fa-bell-o\"></i>
                                                            </span> Server #2 not responding. </span>
                                                <span class=\"time\">10 mins</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-info md-skip\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </span> Application error. </span>
                                                <span class=\"time\">14 hrs</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-danger md-skip\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </span> Database overloaded 68%. </span>
                                                <span class=\"time\">2 days</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-danger md-skip\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </span> A user IP blocked. </span>
                                                <span class=\"time\">3 days</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-warning md-skip\">
                                                                <i class=\"fa fa-bell-o\"></i>
                                                            </span> Storage Server #4 not responding dfdfdfd. </span>
                                                <span class=\"time\">4 days</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-info md-skip\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </span> System Error. </span>
                                                <span class=\"time\">5 days</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-danger md-skip\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </span> Storage server failed. </span>
                                                <span class=\"time\">9 days</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END GROUP NOTIFICATION -->
                        <!-- BEGIN GROUP INFORMATION -->
                        <div class=\"btn-group-red btn-group\">
                            <button type=\"button\" class=\"btn btn-sm md-skip dropdown-toggle\" data-toggle=\"dropdown\"
                                    data-hover=\"dropdown\" data-close-others=\"true\" title=\"favoritos\">
                                <i class=\"fa fa-star-o\"></i>
                            </button>
                            <ul class=\"dropdown-menu-v2\" role=\"menu\">
                                <li class=\"active\">
                                    <a href=\"page_user_profile_1.html#\">New Post</a>
                                </li>
                                <li>
                                    <a href=\"page_user_profile_1.html#\">New Comment</a>
                                </li>
                                <li>
                                    <a href=\"page_user_profile_1.html#\">Share</a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"page_user_profile_1.html#\">Comments
                                        <span class=\"badge badge-success\">4</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"page_user_profile_1.html#\">Feedbacks
                                        <span class=\"badge badge-danger\">2</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END GROUP INFORMATION -->
                        <!-- BEGIN USER PROFILE -->
                        <div class=\"btn-group-img btn-group\">
                            <button type=\"button\" class=\"btn btn-sm md-skip dropdown-toggle\" data-toggle=\"dropdown\"
                                    data-hover=\"dropdown\" data-close-others=\"true\">
                                <span>Ola, {{ user.username }}</span>
                                <img src=\"{{ asset('layouts/layout5/img/avatar2.png') }}\" alt=\"\"></button>
                            <ul class=\"dropdown-menu-v2\" role=\"menu\">
                                <li>
                                    <a href=\"{{ path('usuario_show',{'id':user.id}) }}\">
                                        <i class=\"icon-user\"></i> Meu Perfil
                                        <span class=\"badge badge-danger\">1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"icon-calendar\"></i> My Calendar </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"icon-envelope-open\"></i> Favoritos
                                        <span class=\"badge badge-danger\"> 3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"app_todo_2.html\">
                                        <i class=\"icon-rocket\"></i> Tarefas
                                        <span class=\"badge badge-success\"> 7 </span>
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"icon-lock\"></i> Bloquear o ecram </a>
                                </li>
                                <li>
                                    <a href=\"{{ path('logout') }}\">
                                        <i class=\"icon-key\"></i> Terminar Sessão </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END USER PROFILE -->
                    </div>
                    <!-- END TOPBAR ACTIONS -->
                </div>
                <!-- BEGIN HEADER MENU -->
                <div class=\"nav-collapse collapse navbar-collapse navbar-responsive-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown dropdown-fw dropdown-fw-disabled inicio \">
                            <a href=\"/\" class=\"text-uppercase\">
                                <i class=\"icon-home\"></i>
                            </a>
                        </li>
                        {% if 'ROLE_ACERVO_VIEW' in user.R %}
                        <li class=\"dropdown dropdown-fw dropdown-fw-disabled  Acervos\">
                            <a href=\"{{ path('acervos') }}\" class=\"text-uppercase\">
                                <i class=\"icon-puzzle\"></i> Acervos </a>
                            <ul class=\"dropdown-menu dropdown-menu-fw\">
                                <li class=\"\">
                                    <a href=\"/acervos\">
                                        <i class=\"icon-settings\"></i> Inicio </a>
                                </li>
                                <li class=\"dropdown\">
                                    <a class=\"btn-outline\" href=\"javascript:;\"
                                       data-toggle=\"dropdown\">
                                        <i class=\"icon-plus\"></i> Inserir Novo
                                        <i class=\"fa fa-angle-down\"></i> </a>
                                    <ul class=\"dropdown-menu pull-right\" style=\"box-shadow: 0 0 10px #000 !important;\" >
                                        <li>
                                            <a href=\"javascript:;\" title=\"Mineiro\"> Mineiro </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\" title=\"Rocha\"> Rocha </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\" title=\"Fosseis\"> Fosseis </a>
                                        </li>
                                    </ul>

                                </li>
                                <li class=\"\">
                                    <a href=\"/acervos/configuracoes/categoria\">
                                        <i class=\"icon-settings\"></i> Configurações </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"javascript:;\">
                                        <i class=\"icon-puzzle\"></i> Emprestimo </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"javascript:;\">
                                        <i class=\"icon-cloud-upload\"></i> Doações </a>
                                </li>
                                <li class=\"\">
                                    <a href=\"page_user_profile_1.html@p=.html\">
                                        <i class=\"icon-wallet\"></i> Troca </a>
                                </li>
                            </ul>
                        </li>
                        {% endif %}
                        {% if 'ROLE_VISITA_VIEW' in user.R  %}
                        <li class=\"dropdown dropdown-fw dropdown-fw-disabled  Visita\">
                            <a href=\"{{ path('visita_view') }}\" class=\"text-uppercase\">
                                <i class=\"icon-briefcase\"></i> Visitas </a>
                        </li>
                        {% endif %}
                        {% if 'ROLE_EVENTO_VIEW' in user.R  %}
                        <li class=\"dropdown dropdown-fw dropdown-fw-disabled\">
                            <a href=\"javascript:;\" class=\"text-uppercase\">
                                <i class=\"icon-layers\"></i> Eventos </a>
                        </li>
                        {% endif %}
                        {% if 'ROLE_MEMBRO_VIEW' in user.R  %}
                        <li class=\"dropdown dropdown-fw dropdown-fw-disabled Utilizadores\">
                            <a href=\"{{ path('membro_index') }}\" class=\"text-uppercase\">
                                <i class=\"icon-user\"></i>Membros </a>
                        </li>
                        {% endif %}
                        {% if 'ROLE_ESTATISTICA_VIEW' in user.R  %}
                        <li class=\"dropdown more-dropdown\">
                            <a href=\"javascript:;\" class=\"text-uppercase\">
                                <i class=\"icon-bubbles\"></i>Estatisticas </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <a href=\"page_user_profile_1.html#\">Link 1</a>
                                </li>
                                <li>
                                    <a href=\"page_user_profile_1.html#\">Link 2</a>
                                </li>
                                <li>
                                    <a href=\"page_user_profile_1.html#\">Link 3</a>
                                </li>
                                <li>
                                    <a href=\"page_user_profile_1.html#\">Link 4</a>
                                </li>
                                <li>
                                    <a href=\"page_user_profile_1.html#\">Link 5</a>
                                </li>
                            </ul>
                        </li>
                        {% endif %}
                        <li class=\"Definicoes\">
                            <a href=\"{{ path('definicoes') }}\" class=\"text-uppercase\">
                                <i class=\"icon-settings\"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- END HEADER MENU -->
            </div>
            <!--/container-->
        </nav>
    </header>
    <!-- END HEADER -->
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
</div>
<!-- END CONTAINER -->
<!-- BEGIN QUICK NAV -->

<div class=\"quick-nav-overlay\"></div>
<!-- END QUICK NAV -->
<!-- End -->
</body>


</html>", "inicio.html.twig", "/var/www/html/hom/app/Resources/views/inicio.html.twig");
    }
}

<?php

/* template_1/components_bootstrap_select.html */
class __TwigTemplate_efa7a6249cdf00f51e1c95aa55e40750036b0edca25e07cf567f6afe8f914589 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae6c8b1b5b6aa0c8b8ef2e005c2282229f87925e3d9b415dcdf1fba6dcb63d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae6c8b1b5b6aa0c8b8ef2e005c2282229f87925e3d9b415dcdf1fba6dcb63d5b->enter($__internal_ae6c8b1b5b6aa0c8b8ef2e005c2282229f87925e3d9b415dcdf1fba6dcb63d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template_1/components_bootstrap_select.html"));

        $__internal_f628e3facdb5f6b29c90f7c27ea81461dcf434f64ba33ed5d4901e93b31f74d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f628e3facdb5f6b29c90f7c27ea81461dcf434f64ba33ed5d4901e93b31f74d7->enter($__internal_f628e3facdb5f6b29c90f7c27ea81461dcf434f64ba33ed5d4901e93b31f74d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template_1/components_bootstrap_select.html"));

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
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    
<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_1/components_bootstrap_select.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2016 17:50:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
        <meta charset=\"utf-8\" />
        <title>Metronic Admin Theme #1 | Bootstrap Select</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"Preview page of Metronic Admin Theme #1 for bootstrap select with multiple select, live search and more\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"../assets/global/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"../assets/global/plugins/simple-line-icons/simple-line-icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"../assets/global/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"../assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"../assets/global/css/components.min.css\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"../assets/global/css/plugins.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"../assets/layouts/layout/css/layout.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"../assets/layouts/layout/css/themes/darkblue.min.css\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"../assets/layouts/layout/css/custom.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
    <!-- END HEAD -->

    <body class=\"page-header-fixed page-sidebar-closed-hide-logo page-content-white\">
        <div class=\"page-wrapper\">
            <!-- BEGIN HEADER -->
            <div class=\"page-header navbar navbar-fixed-top\">
                <!-- BEGIN HEADER INNER -->
                <div class=\"page-header-inner \">
                    <!-- BEGIN LOGO -->
                    <div class=\"page-logo\">
                        <a href=\"index.html\">
                            <img src=\"../assets/layouts/layout/img/logo.png\" alt=\"logo\" class=\"logo-default\" /> </a>
                        <div class=\"menu-toggler sidebar-toggler\">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class=\"top-menu\">
                        <ul class=\"nav navbar-nav pull-right\">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after \"dropdown-extended\" to change the dropdown styte -->
                            <!-- DOC: Apply \"dropdown-hoverable\" class after below \"dropdown\" and remove data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove \"dropdown-hoverable\" and add data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to the below A element with dropdown-toggle class -->
                            <li class=\"dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-bell\"></i>
                                    <span class=\"badge badge-default\"> 7 </span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"external\">
                                        <h3>
                                            <span class=\"bold\">12 pending</span> notifications</h3>
                                        <a href=\"page_user_profile_1.html\">view all</a>
                                    </li>
                                    <li>
                                        <ul class=\"dropdown-menu-list scroller\" style=\"height: 250px;\" data-handle-color=\"#637283\">
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">just now</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-success\">
                                                            <i class=\"fa fa-plus\"></i>
                                                        </span> New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">3 mins</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-danger\">
                                                            <i class=\"fa fa-bolt\"></i>
                                                        </span> Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">10 mins</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-warning\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </span> Server #2 not responding. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">14 hrs</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-info\">
                                                            <i class=\"fa fa-bullhorn\"></i>
                                                        </span> Application error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">2 days</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-danger\">
                                                            <i class=\"fa fa-bolt\"></i>
                                                        </span> Database overloaded 68%. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">3 days</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-danger\">
                                                            <i class=\"fa fa-bolt\"></i>
                                                        </span> A user IP blocked. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">4 days</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-warning\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">5 days</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-info\">
                                                            <i class=\"fa fa-bullhorn\"></i>
                                                        </span> System Error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">9 days</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-danger\">
                                                            <i class=\"fa fa-bolt\"></i>
                                                        </span> Storage server failed. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-envelope-open\"></i>
                                    <span class=\"badge badge-default\"> 4 </span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"external\">
                                        <h3>You have
                                            <span class=\"bold\">7 New</span> Messages</h3>
                                        <a href=\"app_inbox.html\">view all</a>
                                    </li>
                                    <li>
                                        <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\" data-handle-color=\"#637283\">
                                            <li>
                                                <a href=\"#\">
                                                    <span class=\"photo\">
                                                        <img src=\"../assets/layouts/layout3/img/avatar2.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                    <span class=\"subject\">
                                                        <span class=\"from\"> Lisa Wong </span>
                                                        <span class=\"time\">Just Now </span>
                                                    </span>
                                                    <span class=\"message\"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <span class=\"photo\">
                                                        <img src=\"../assets/layouts/layout3/img/avatar3.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                    <span class=\"subject\">
                                                        <span class=\"from\"> Richard Doe </span>
                                                        <span class=\"time\">16 mins </span>
                                                    </span>
                                                    <span class=\"message\"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <span class=\"photo\">
                                                        <img src=\"../assets/layouts/layout3/img/avatar1.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                    <span class=\"subject\">
                                                        <span class=\"from\"> Bob Nilson </span>
                                                        <span class=\"time\">2 hrs </span>
                                                    </span>
                                                    <span class=\"message\"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <span class=\"photo\">
                                                        <img src=\"../assets/layouts/layout3/img/avatar2.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                    <span class=\"subject\">
                                                        <span class=\"from\"> Lisa Wong </span>
                                                        <span class=\"time\">40 mins </span>
                                                    </span>
                                                    <span class=\"message\"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <span class=\"photo\">
                                                        <img src=\"../assets/layouts/layout3/img/avatar3.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                    <span class=\"subject\">
                                                        <span class=\"from\"> Richard Doe </span>
                                                        <span class=\"time\">46 mins </span>
                                                    </span>
                                                    <span class=\"message\"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-extended dropdown-tasks\" id=\"header_task_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-calendar\"></i>
                                    <span class=\"badge badge-default\"> 3 </span>
                                </a>
                                <ul class=\"dropdown-menu extended tasks\">
                                    <li class=\"external\">
                                        <h3>You have
                                            <span class=\"bold\">12 pending</span> tasks</h3>
                                        <a href=\"app_todo.html\">view all</a>
                                    </li>
                                    <li>
                                        <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\" data-handle-color=\"#637283\">
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">New release v1.2 </span>
                                                        <span class=\"percent\">30%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 40%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">40% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">Application deployment</span>
                                                        <span class=\"percent\">65%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 65%;\" class=\"progress-bar progress-bar-danger\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">65% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">Mobile app release</span>
                                                        <span class=\"percent\">98%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 98%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">98% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">Database migration</span>
                                                        <span class=\"percent\">10%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 10%;\" class=\"progress-bar progress-bar-warning\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">10% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">Web server upgrade</span>
                                                        <span class=\"percent\">58%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 58%;\" class=\"progress-bar progress-bar-info\" aria-valuenow=\"58\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">58% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">Mobile development</span>
                                                        <span class=\"percent\">85%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 85%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">85% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">New UI release</span>
                                                        <span class=\"percent\">38%</span>
                                                    </span>
                                                    <span class=\"progress progress-striped\">
                                                        <span style=\"width: 38%;\" class=\"progress-bar progress-bar-important\" aria-valuenow=\"18\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">38% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-user\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <img alt=\"\" class=\"img-circle\" src=\"../assets/layouts/layout/img/avatar3_small.jpg\" />
                                    <span class=\"username username-hide-on-mobile\"> Nick </span>
                                    <i class=\"fa fa-angle-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-default\">
                                    <li>
                                        <a href=\"page_user_profile_1.html\">
                                            <i class=\"icon-user\"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href=\"app_calendar.html\">
                                            <i class=\"icon-calendar\"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href=\"app_inbox.html\">
                                            <i class=\"icon-envelope-open\"></i> My Inbox
                                            <span class=\"badge badge-danger\"> 3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"app_todo.html\">
                                            <i class=\"icon-rocket\"></i> My Tasks
                                            <span class=\"badge badge-success\"> 7 </span>
                                        </a>
                                    </li>
                                    <li class=\"divider\"> </li>
                                    <li>
                                        <a href=\"page_user_lock_1.html\">
                                            <i class=\"icon-lock\"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href=\"page_user_login_1.html\">
                                            <i class=\"icon-key\"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-quick-sidebar-toggler\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\">
                                    <i class=\"icon-logout\"></i>
                                </a>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class=\"clearfix\"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class=\"page-container\">
                <!-- BEGIN SIDEBAR -->
                <div class=\"page-sidebar-wrapper\">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                    <div class=\"page-sidebar navbar-collapse collapse\">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply \"page-sidebar-menu-light\" class right after \"page-sidebar-menu\" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply \"page-sidebar-menu-hover-submenu\" class right after \"page-sidebar-menu\" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply \"page-sidebar-menu-closed\" class right after \"page-sidebar-menu\" to collapse(\"page-sidebar-closed\" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand=\"true\" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                        <ul class=\"page-sidebar-menu  page-header-fixed \" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\" style=\"padding-top: 20px\">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below \"sidebar-toggler-wrapper\" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class=\"sidebar-toggler-wrapper hide\">
                                <div class=\"sidebar-toggler\">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below \"sidebar-search-wrapper\" LI element -->
                            <li class=\"sidebar-search-wrapper\">
                                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                <!-- DOC: Apply \"sidebar-search-bordered\" class the below search form to have bordered search box -->
                                <!-- DOC: Apply \"sidebar-search-bordered sidebar-search-solid\" class the below search form to have bordered & solid search box -->
                                <form class=\"sidebar-search  \" action=\"http://keenthemes.com/preview/metronic/theme/admin_1/page_general_search_3.html\" method=\"POST\">
                                    <a href=\"javascript:;\" class=\"remove\">
                                        <i class=\"icon-close\"></i>
                                    </a>
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                        <span class=\"input-group-btn\">
                                            <a href=\"javascript:;\" class=\"btn submit\">
                                                <i class=\"icon-magnifier\"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                            </li>
                            <li class=\"nav-item start \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-home\"></i>
                                    <span class=\"title\">Dashboard</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item start \">
                                        <a href=\"index.html\" class=\"nav-link \">
                                            <i class=\"icon-bar-chart\"></i>
                                            <span class=\"title\">Dashboard 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item start \">
                                        <a href=\"dashboard_2.html\" class=\"nav-link \">
                                            <i class=\"icon-bulb\"></i>
                                            <span class=\"title\">Dashboard 2</span>
                                            <span class=\"badge badge-success\">1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item start \">
                                        <a href=\"dashboard_3.html\" class=\"nav-link \">
                                            <i class=\"icon-graph\"></i>
                                            <span class=\"title\">Dashboard 3</span>
                                            <span class=\"badge badge-danger\">5</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"heading\">
                                <h3 class=\"uppercase\">Features</h3>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-diamond\"></i>
                                    <span class=\"title\">UI Features</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_colors.html\" class=\"nav-link \">
                                            <span class=\"title\">Color Library</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_metronic_grid.html\" class=\"nav-link \">
                                            <span class=\"title\">Metronic Grid System</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_general.html\" class=\"nav-link \">
                                            <span class=\"title\">General Components</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_buttons.html\" class=\"nav-link \">
                                            <span class=\"title\">Buttons</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_buttons_spinner.html\" class=\"nav-link \">
                                            <span class=\"title\">Spinner Buttons</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_confirmations.html\" class=\"nav-link \">
                                            <span class=\"title\">Popover Confirmations</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_sweetalert.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Sweet Alerts</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_icons.html\" class=\"nav-link \">
                                            <span class=\"title\">Font Icons</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_socicons.html\" class=\"nav-link \">
                                            <span class=\"title\">Social Icons</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_typography.html\" class=\"nav-link \">
                                            <span class=\"title\">Typography</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_tabs_accordions_navs.html\" class=\"nav-link \">
                                            <span class=\"title\">Tabs, Accordions & Navs</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_timeline.html\" class=\"nav-link \">
                                            <span class=\"title\">Timeline 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_timeline_2.html\" class=\"nav-link \">
                                            <span class=\"title\">Timeline 2</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_timeline_horizontal.html\" class=\"nav-link \">
                                            <span class=\"title\">Horizontal Timeline</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_tree.html\" class=\"nav-link \">
                                            <span class=\"title\">Tree View</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                            <span class=\"title\">Page Progress Bar</span>
                                            <span class=\"arrow\"></span>
                                        </a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"nav-item \">
                                                <a href=\"ui_page_progress_style_1.html\" class=\"nav-link \"> Flash </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"ui_page_progress_style_2.html\" class=\"nav-link \"> Big Counter </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_blockui.html\" class=\"nav-link \">
                                            <span class=\"title\">Block UI</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_bootstrap_growl.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Growl Notifications</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_notific8.html\" class=\"nav-link \">
                                            <span class=\"title\">Notific8 Notifications</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_toastr.html\" class=\"nav-link \">
                                            <span class=\"title\">Toastr Notifications</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_bootbox.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootbox Dialogs</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_alerts_api.html\" class=\"nav-link \">
                                            <span class=\"title\">Metronic Alerts API</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_session_timeout.html\" class=\"nav-link \">
                                            <span class=\"title\">Session Timeout</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_idle_timeout.html\" class=\"nav-link \">
                                            <span class=\"title\">User Idle Timeout</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_modals.html\" class=\"nav-link \">
                                            <span class=\"title\">Modals</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_extended_modals.html\" class=\"nav-link \">
                                            <span class=\"title\">Extended Modals</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_tiles.html\" class=\"nav-link \">
                                            <span class=\"title\">Tiles</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_datepaginator.html\" class=\"nav-link \">
                                            <span class=\"title\">Date Paginator</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_nestable.html\" class=\"nav-link \">
                                            <span class=\"title\">Nestable List</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  active open\">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-puzzle\"></i>
                                    <span class=\"title\">Components</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow open\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"components_date_time_pickers.html\" class=\"nav-link \">
                                            <span class=\"title\">Date & Time Pickers</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_color_pickers.html\" class=\"nav-link \">
                                            <span class=\"title\">Color Pickers</span>
                                            <span class=\"badge badge-danger\">2</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_select2.html\" class=\"nav-link \">
                                            <span class=\"title\">Select2 Dropdowns</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_bootstrap_multiselect_dropdown.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Multiselect Dropdowns</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  active open\">
                                        <a href=\"components_bootstrap_select.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Select</span>
                                            <span class=\"selected\"></span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_multi_select.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Multiple Select</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_bootstrap_select_splitter.html\" class=\"nav-link \">
                                            <span class=\"title\">Select Splitter</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_clipboard.html\" class=\"nav-link \">
                                            <span class=\"title\">Clipboard</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_typeahead.html\" class=\"nav-link \">
                                            <span class=\"title\">Typeahead Autocomplete</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_bootstrap_tagsinput.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Tagsinput</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_bootstrap_switch.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Switch</span>
                                            <span class=\"badge badge-success\">6</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_bootstrap_maxlength.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Maxlength</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_bootstrap_fileinput.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap File Input</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_bootstrap_touchspin.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Touchspin</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_form_tools.html\" class=\"nav-link \">
                                            <span class=\"title\">Form Widgets & Tools</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_context_menu.html\" class=\"nav-link \">
                                            <span class=\"title\">Context Menu</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_editors.html\" class=\"nav-link \">
                                            <span class=\"title\">Markdown & WYSIWYG Editors</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_code_editors.html\" class=\"nav-link \">
                                            <span class=\"title\">Code Editors</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_ion_sliders.html\" class=\"nav-link \">
                                            <span class=\"title\">Ion Range Sliders</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_noui_sliders.html\" class=\"nav-link \">
                                            <span class=\"title\">NoUI Range Sliders</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_knob_dials.html\" class=\"nav-link \">
                                            <span class=\"title\">Knob Circle Dials</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-settings\"></i>
                                    <span class=\"title\">Form Stuff</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"form_controls.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Form
                                                <br>Controls</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_controls_md.html\" class=\"nav-link \">
                                            <span class=\"title\">Material Design
                                                <br>Form Controls</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_validation.html\" class=\"nav-link \">
                                            <span class=\"title\">Form Validation</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_validation_states_md.html\" class=\"nav-link \">
                                            <span class=\"title\">Material Design
                                                <br>Form Validation States</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_validation_md.html\" class=\"nav-link \">
                                            <span class=\"title\">Material Design
                                                <br>Form Validation</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_layouts.html\" class=\"nav-link \">
                                            <span class=\"title\">Form Layouts</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_repeater.html\" class=\"nav-link \">
                                            <span class=\"title\">Form Repeater</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_input_mask.html\" class=\"nav-link \">
                                            <span class=\"title\">Form Input Mask</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_editable.html\" class=\"nav-link \">
                                            <span class=\"title\">Form X-editable</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_wizard.html\" class=\"nav-link \">
                                            <span class=\"title\">Form Wizard</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_icheck.html\" class=\"nav-link \">
                                            <span class=\"title\">iCheck Controls</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_image_crop.html\" class=\"nav-link \">
                                            <span class=\"title\">Image Cropping</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_fileupload.html\" class=\"nav-link \">
                                            <span class=\"title\">Multiple File Upload</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_dropzone.html\" class=\"nav-link \">
                                            <span class=\"title\">Dropzone File Upload</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-bulb\"></i>
                                    <span class=\"title\">Elements</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"elements_steps.html\" class=\"nav-link \">
                                            <span class=\"title\">Steps</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"elements_lists.html\" class=\"nav-link \">
                                            <span class=\"title\">Lists</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"elements_ribbons.html\" class=\"nav-link \">
                                            <span class=\"title\">Ribbons</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"elements_overlay.html\" class=\"nav-link \">
                                            <span class=\"title\">Overlays</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"elements_cards.html\" class=\"nav-link \">
                                            <span class=\"title\">User Cards</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-briefcase\"></i>
                                    <span class=\"title\">Tables</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"table_static_basic.html\" class=\"nav-link \">
                                            <span class=\"title\">Basic Tables</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"table_static_responsive.html\" class=\"nav-link \">
                                            <span class=\"title\">Responsive Tables</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"table_bootstrap.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Tables</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                            <span class=\"title\">Datatables</span>
                                            <span class=\"arrow\"></span>
                                        </a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_managed.html\" class=\"nav-link \"> Managed Datatables </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_buttons.html\" class=\"nav-link \"> Buttons Extension </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_colreorder.html\" class=\"nav-link \"> Colreorder Extension </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_rowreorder.html\" class=\"nav-link \"> Rowreorder Extension </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_scroller.html\" class=\"nav-link \"> Scroller Extension </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_fixedheader.html\" class=\"nav-link \"> FixedHeader Extension </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_responsive.html\" class=\"nav-link \"> Responsive Extension </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_editable.html\" class=\"nav-link \"> Editable Datatables </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_ajax.html\" class=\"nav-link \"> Ajax Datatables </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"components_bootstrap_select8a36.html?p=\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-wallet\"></i>
                                    <span class=\"title\">Portlets</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"portlet_boxed.html\" class=\"nav-link \">
                                            <span class=\"title\">Boxed Portlets</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"portlet_light.html\" class=\"nav-link \">
                                            <span class=\"title\">Light Portlets</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"portlet_solid.html\" class=\"nav-link \">
                                            <span class=\"title\">Solid Portlets</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"portlet_ajax.html\" class=\"nav-link \">
                                            <span class=\"title\">Ajax Portlets</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"portlet_draggable.html\" class=\"nav-link \">
                                            <span class=\"title\">Draggable Portlets</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-bar-chart\"></i>
                                    <span class=\"title\">Charts</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"charts_amcharts.html\" class=\"nav-link \">
                                            <span class=\"title\">amChart</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"charts_flotcharts.html\" class=\"nav-link \">
                                            <span class=\"title\">Flot Charts</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"charts_flowchart.html\" class=\"nav-link \">
                                            <span class=\"title\">Flow Charts</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"charts_google.html\" class=\"nav-link \">
                                            <span class=\"title\">Google Charts</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"charts_echarts.html\" class=\"nav-link \">
                                            <span class=\"title\">eCharts</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"charts_morris.html\" class=\"nav-link \">
                                            <span class=\"title\">Morris Charts</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                            <span class=\"title\">HighCharts</span>
                                            <span class=\"arrow\"></span>
                                        </a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"nav-item \">
                                                <a href=\"charts_highcharts.html\" class=\"nav-link \"> HighCharts </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"charts_highstock.html\" class=\"nav-link \"> HighStock </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"charts_highmaps.html\" class=\"nav-link \"> HighMaps </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-pointer\"></i>
                                    <span class=\"title\">Maps</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"maps_google.html\" class=\"nav-link \">
                                            <span class=\"title\">Google Maps</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"maps_vector.html\" class=\"nav-link \">
                                            <span class=\"title\">Vector Maps</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"heading\">
                                <h3 class=\"uppercase\">Layouts</h3>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-layers\"></i>
                                    <span class=\"title\">Page Layouts</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_blank_page.html\" class=\"nav-link \">
                                            <span class=\"title\">Blank Page</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_ajax_page.html\" class=\"nav-link \">
                                            <span class=\"title\">Ajax Content Layout</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_offcanvas_mobile_menu.html\" class=\"nav-link \">
                                            <span class=\"title\">Off-canvas Mobile Menu</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_classic_page_head.html\" class=\"nav-link \">
                                            <span class=\"title\">Classic Page Head</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_light_page_head.html\" class=\"nav-link \">
                                            <span class=\"title\">Light Page Head</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_content_grey.html\" class=\"nav-link \">
                                            <span class=\"title\">Grey Bg Content</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_search_on_header_1.html\" class=\"nav-link \">
                                            <span class=\"title\">Search Box On Header 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_search_on_header_2.html\" class=\"nav-link \">
                                            <span class=\"title\">Search Box On Header 2</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_language_bar.html\" class=\"nav-link \">
                                            <span class=\"title\">Header Language Bar</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_footer_fixed.html\" class=\"nav-link \">
                                            <span class=\"title\">Fixed Footer</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_boxed_page.html\" class=\"nav-link \">
                                            <span class=\"title\">Boxed Page</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-feed\"></i>
                                    <span class=\"title\">Sidebar Layouts</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_sidebar_menu_light.html\" class=\"nav-link \">
                                            <span class=\"title\">Light Sidebar Menu</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_sidebar_menu_hover.html\" class=\"nav-link \">
                                            <span class=\"title\">Hover Sidebar Menu</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_sidebar_search_1.html\" class=\"nav-link \">
                                            <span class=\"title\">Sidebar Search Option 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_sidebar_search_2.html\" class=\"nav-link \">
                                            <span class=\"title\">Sidebar Search Option 2</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_toggler_on_sidebar.html\" class=\"nav-link \">
                                            <span class=\"title\">Sidebar Toggler On Sidebar</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_sidebar_reversed.html\" class=\"nav-link \">
                                            <span class=\"title\">Reversed Sidebar Page</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_sidebar_fixed.html\" class=\"nav-link \">
                                            <span class=\"title\">Fixed Sidebar Layout</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_sidebar_closed.html\" class=\"nav-link \">
                                            <span class=\"title\">Closed Sidebar Layout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-paper-plane\"></i>
                                    <span class=\"title\">Horizontal Menu</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_mega_menu_light.html\" class=\"nav-link \">
                                            <span class=\"title\">Light Mega Menu</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_mega_menu_dark.html\" class=\"nav-link \">
                                            <span class=\"title\">Dark Mega Menu</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_full_width.html\" class=\"nav-link \">
                                            <span class=\"title\">Full Width Layout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\" icon-wrench\"></i>
                                    <span class=\"title\">Custom Layouts</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_disabled_menu.html\" class=\"nav-link \">
                                            <span class=\"title\">Disabled Menu Links</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_full_height_portlet.html\" class=\"nav-link \">
                                            <span class=\"title\">Full Height Portlet</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_full_height_content.html\" class=\"nav-link \">
                                            <span class=\"title\">Full Height Content</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"heading\">
                                <h3 class=\"uppercase\">Pages</h3>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-basket\"></i>
                                    <span class=\"title\">eCommerce</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"ecommerce_index.html\" class=\"nav-link \">
                                            <i class=\"icon-home\"></i>
                                            <span class=\"title\">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ecommerce_orders.html\" class=\"nav-link \">
                                            <i class=\"icon-basket\"></i>
                                            <span class=\"title\">Orders</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ecommerce_orders_view.html\" class=\"nav-link \">
                                            <i class=\"icon-tag\"></i>
                                            <span class=\"title\">Order View</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ecommerce_products.html\" class=\"nav-link \">
                                            <i class=\"icon-graph\"></i>
                                            <span class=\"title\">Products</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ecommerce_products_edit.html\" class=\"nav-link \">
                                            <i class=\"icon-graph\"></i>
                                            <span class=\"title\">Product Edit</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-docs\"></i>
                                    <span class=\"title\">Apps</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"app_todo.html\" class=\"nav-link \">
                                            <i class=\"icon-clock\"></i>
                                            <span class=\"title\">Todo 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"app_todo_2.html\" class=\"nav-link \">
                                            <i class=\"icon-check\"></i>
                                            <span class=\"title\">Todo 2</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"app_inbox.html\" class=\"nav-link \">
                                            <i class=\"icon-envelope\"></i>
                                            <span class=\"title\">Inbox</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"app_calendar.html\" class=\"nav-link \">
                                            <i class=\"icon-calendar\"></i>
                                            <span class=\"title\">Calendar</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"app_ticket.html\" class=\"nav-link \">
                                            <i class=\"icon-notebook\"></i>
                                            <span class=\"title\">Support</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-user\"></i>
                                    <span class=\"title\">User</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"page_user_profile_1.html\" class=\"nav-link \">
                                            <i class=\"icon-user\"></i>
                                            <span class=\"title\">Profile 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_user_profile_1_account.html\" class=\"nav-link \">
                                            <i class=\"icon-user-female\"></i>
                                            <span class=\"title\">Profile 1 Account</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_user_profile_1_help.html\" class=\"nav-link \">
                                            <i class=\"icon-user-following\"></i>
                                            <span class=\"title\">Profile 1 Help</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_user_profile_2.html\" class=\"nav-link \">
                                            <i class=\"icon-users\"></i>
                                            <span class=\"title\">Profile 2</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                            <i class=\"icon-notebook\"></i>
                                            <span class=\"title\">Login</span>
                                            <span class=\"arrow\"></span>
                                        </a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"nav-item \">
                                                <a href=\"page_user_login_1.html\" class=\"nav-link \" target=\"_blank\"> Login Page 1 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_user_login_2.html\" class=\"nav-link \" target=\"_blank\"> Login Page 2 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_user_login_3.html\" class=\"nav-link \" target=\"_blank\"> Login Page 3 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_user_login_4.html\" class=\"nav-link \" target=\"_blank\"> Login Page 4 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_user_login_5.html\" class=\"nav-link \" target=\"_blank\"> Login Page 5 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_user_login_6.html\" class=\"nav-link \" target=\"_blank\"> Login Page 6 </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_user_lock_1.html\" class=\"nav-link \" target=\"_blank\">
                                            <i class=\"icon-lock\"></i>
                                            <span class=\"title\">Lock Screen 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_user_lock_2.html\" class=\"nav-link \" target=\"_blank\">
                                            <i class=\"icon-lock-open\"></i>
                                            <span class=\"title\">Lock Screen 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-social-dribbble\"></i>
                                    <span class=\"title\">General</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"page_general_about.html\" class=\"nav-link \">
                                            <i class=\"icon-info\"></i>
                                            <span class=\"title\">About</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_general_contact.html\" class=\"nav-link \">
                                            <i class=\"icon-call-end\"></i>
                                            <span class=\"title\">Contact</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                            <i class=\"icon-notebook\"></i>
                                            <span class=\"title\">Portfolio</span>
                                            <span class=\"arrow\"></span>
                                        </a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_portfolio_1.html\" class=\"nav-link \"> Portfolio 1 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_portfolio_2.html\" class=\"nav-link \"> Portfolio 2 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_portfolio_3.html\" class=\"nav-link \"> Portfolio 3 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_portfolio_4.html\" class=\"nav-link \"> Portfolio 4 </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                            <i class=\"icon-magnifier\"></i>
                                            <span class=\"title\">Search</span>
                                            <span class=\"arrow\"></span>
                                        </a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_search.html\" class=\"nav-link \"> Search 1 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_search_2.html\" class=\"nav-link \"> Search 2 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_search_3.html\" class=\"nav-link \"> Search 3 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_search_4.html\" class=\"nav-link \"> Search 4 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_search_5.html\" class=\"nav-link \"> Search 5 </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_general_pricing.html\" class=\"nav-link \">
                                            <i class=\"icon-tag\"></i>
                                            <span class=\"title\">Pricing</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_general_faq.html\" class=\"nav-link \">
                                            <i class=\"icon-wrench\"></i>
                                            <span class=\"title\">FAQ</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_general_blog.html\" class=\"nav-link \">
                                            <i class=\"icon-pencil\"></i>
                                            <span class=\"title\">Blog</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_general_blog_post.html\" class=\"nav-link \">
                                            <i class=\"icon-note\"></i>
                                            <span class=\"title\">Blog Post</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_general_invoice.html\" class=\"nav-link \">
                                            <i class=\"icon-envelope\"></i>
                                            <span class=\"title\">Invoice</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_general_invoice_2.html\" class=\"nav-link \">
                                            <i class=\"icon-envelope\"></i>
                                            <span class=\"title\">Invoice 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-settings\"></i>
                                    <span class=\"title\">System</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"page_cookie_consent_1.html\" class=\"nav-link \">
                                            <span class=\"title\">Cookie Consent 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_cookie_consent_2.html\" class=\"nav-link \">
                                            <span class=\"title\">Cookie Consent 2</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_system_coming_soon.html\" class=\"nav-link \" target=\"_blank\">
                                            <span class=\"title\">Coming Soon</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_system_404_1.html\" class=\"nav-link \">
                                            <span class=\"title\">404 Page 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_system_404_2.html\" class=\"nav-link \" target=\"_blank\">
                                            <span class=\"title\">404 Page 2</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_system_404_3.html\" class=\"nav-link \" target=\"_blank\">
                                            <span class=\"title\">404 Page 3</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_system_500_1.html\" class=\"nav-link \">
                                            <span class=\"title\">500 Page 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_system_500_2.html\" class=\"nav-link \" target=\"_blank\">
                                            <span class=\"title\">500 Page 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-folder\"></i>
                                    <span class=\"title\">Multi Level Menu</span>
                                    <span class=\"arrow \"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item\">
                                        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                            <i class=\"icon-settings\"></i> Item 1
                                            <span class=\"arrow\"></span>
                                        </a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"nav-item\">
                                                <a href=\"javascript:;\" target=\"_blank\" class=\"nav-link\">
                                                    <i class=\"icon-user\"></i> Arrow Toggle
                                                    <span class=\"arrow nav-toggle\"></span>
                                                </a>
                                                <ul class=\"sub-menu\">
                                                    <li class=\"nav-item\">
                                                        <a href=\"#\" class=\"nav-link\">
                                                            <i class=\"icon-power\"></i> Sample Link 1</a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a href=\"#\" class=\"nav-link\">
                                                            <i class=\"icon-paper-plane\"></i> Sample Link 1</a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a href=\"#\" class=\"nav-link\">
                                                            <i class=\"icon-star\"></i> Sample Link 1</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    <i class=\"icon-camera\"></i> Sample Link 1</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    <i class=\"icon-link\"></i> Sample Link 2</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    <i class=\"icon-pointer\"></i> Sample Link 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"javascript:;\" target=\"_blank\" class=\"nav-link\">
                                            <i class=\"icon-globe\"></i> Arrow Toggle
                                            <span class=\"arrow nav-toggle\"></span>
                                        </a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    <i class=\"icon-tag\"></i> Sample Link 1</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    <i class=\"icon-pencil\"></i> Sample Link 1</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    <i class=\"icon-graph\"></i> Sample Link 1</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            <i class=\"icon-bar-chart\"></i> Item 3 </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class=\"page-content-wrapper\">
                    <!-- BEGIN CONTENT BODY -->
                    <div class=\"page-content\">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->
                        <div class=\"theme-panel hidden-xs hidden-sm\">
                            <div class=\"toggler\"> </div>
                            <div class=\"toggler-close\"> </div>
                            <div class=\"theme-options\">
                                <div class=\"theme-option theme-colors clearfix\">
                                    <span> THEME COLOR </span>
                                    <ul>
                                        <li class=\"color-default current tooltips\" data-style=\"default\" data-container=\"body\" data-original-title=\"Default\"> </li>
                                        <li class=\"color-darkblue tooltips\" data-style=\"darkblue\" data-container=\"body\" data-original-title=\"Dark Blue\"> </li>
                                        <li class=\"color-blue tooltips\" data-style=\"blue\" data-container=\"body\" data-original-title=\"Blue\"> </li>
                                        <li class=\"color-grey tooltips\" data-style=\"grey\" data-container=\"body\" data-original-title=\"Grey\"> </li>
                                        <li class=\"color-light tooltips\" data-style=\"light\" data-container=\"body\" data-original-title=\"Light\"> </li>
                                        <li class=\"color-light2 tooltips\" data-style=\"light2\" data-container=\"body\" data-html=\"true\" data-original-title=\"Light 2\"> </li>
                                    </ul>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Theme Style </span>
                                    <select class=\"layout-style-option form-control input-sm\">
                                        <option value=\"square\" selected=\"selected\">Square corners</option>
                                        <option value=\"rounded\">Rounded corners</option>
                                    </select>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Layout </span>
                                    <select class=\"layout-option form-control input-sm\">
                                        <option value=\"fluid\" selected=\"selected\">Fluid</option>
                                        <option value=\"boxed\">Boxed</option>
                                    </select>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Header </span>
                                    <select class=\"page-header-option form-control input-sm\">
                                        <option value=\"fixed\" selected=\"selected\">Fixed</option>
                                        <option value=\"default\">Default</option>
                                    </select>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Top Menu Dropdown</span>
                                    <select class=\"page-header-top-dropdown-style-option form-control input-sm\">
                                        <option value=\"light\" selected=\"selected\">Light</option>
                                        <option value=\"dark\">Dark</option>
                                    </select>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Sidebar Mode</span>
                                    <select class=\"sidebar-option form-control input-sm\">
                                        <option value=\"fixed\">Fixed</option>
                                        <option value=\"default\" selected=\"selected\">Default</option>
                                    </select>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Sidebar Menu </span>
                                    <select class=\"sidebar-menu-option form-control input-sm\">
                                        <option value=\"accordion\" selected=\"selected\">Accordion</option>
                                        <option value=\"hover\">Hover</option>
                                    </select>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Sidebar Style </span>
                                    <select class=\"sidebar-style-option form-control input-sm\">
                                        <option value=\"default\" selected=\"selected\">Default</option>
                                        <option value=\"light\">Light</option>
                                    </select>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Sidebar Position </span>
                                    <select class=\"sidebar-pos-option form-control input-sm\">
                                        <option value=\"left\" selected=\"selected\">Left</option>
                                        <option value=\"right\">Right</option>
                                    </select>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Footer </span>
                                    <select class=\"page-footer-option form-control input-sm\">
                                        <option value=\"fixed\">Fixed</option>
                                        <option value=\"default\" selected=\"selected\">Default</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        <div class=\"page-bar\">
                            <ul class=\"page-breadcrumb\">
                                <li>
                                    <a href=\"index.html\">Home</a>
                                    <i class=\"fa fa-circle\"></i>
                                </li>
                                <li>
                                    <span>Components</span>
                                </li>
                            </ul>
                            <div class=\"page-toolbar\">
                                <div class=\"btn-group pull-right\">
                                    <button type=\"button\" class=\"btn green btn-sm btn-outline dropdown-toggle\" data-toggle=\"dropdown\"> Actions
                                        <i class=\"fa fa-angle-down\"></i>
                                    </button>
                                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"icon-bell\"></i> Action</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"icon-shield\"></i> Another action</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"icon-user\"></i> Something else here</a>
                                        </li>
                                        <li class=\"divider\"> </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"icon-bag\"></i> Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class=\"page-title\"> Bootstrap Select
                            <small>bootstrap select with multiple select, live search and more</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"note note-success\">
                                    <h3>Bootstrap Select</h3>
                                    <p> Bootstrap-select is a jQuery plugin that utilizes Bootstrap's dropdown.js to style and bring additional functionality to standard select elements. For more info please check out
                                        <a href=\"http://silviomoreto.github.io/bootstrap-select/\"
                                            target=\"_blank\">the official documentation</a>. </p>
                                </div>
                                <!-- BEGIN PORTLET-->
                                <div class=\"portlet light form-fit bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-social-dribbble font-green\"></i>
                                            <span class=\"caption-subject font-green bold uppercase\">Bootstrap Select</span>
                                        </div>
                                        <div class=\"actions\">
                                            <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                <i class=\"icon-cloud-upload\"></i>
                                            </a>
                                            <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                <i class=\"icon-wrench\"></i>
                                            </a>
                                            <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                <i class=\"icon-trash\"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body form\">
                                        <!-- BEGIN FORM-->
                                        <form action=\"http://keenthemes.com/preview/metronic/theme/admin_1/index.html\" class=\"form-horizontal form-row-seperated\">
                                            <div class=\"form-body\">
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Default</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\">
                                                            <option>Mustard</option>
                                                            <option>Ketchup</option>
                                                            <option>Relish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Disabled</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\" disabled>
                                                            <option>Mustard</option>
                                                            <option>Ketchup</option>
                                                            <option>Relish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Grouped</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\">
                                                            <optgroup label=\"Picnic\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </optgroup>
                                                            <optgroup label=\"Camping\">
                                                                <option>Tent</option>
                                                                <option>Flashlight</option>
                                                                <option>Toilet Paper</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Multiple</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\" multiple>
                                                            <option>Mustard</option>
                                                            <option>Ketchup</option>
                                                            <option>Relish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Multiple With Toolbar</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\" multiple data-actions-box=\"true\">
                                                            <option>Mustard</option>
                                                            <option>Ketchup</option>
                                                            <option>Relish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Bootstrap Styles</label>
                                                    <div class=\"col-md-9\">
                                                        <div class=\"margin-bottom-10\">
                                                            <select class=\"bs-select form-control input-small\" data-style=\"btn-primary\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                            <select class=\"bs-select form-control input-small\" data-style=\"btn-success\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                            <select class=\"bs-select form-control input-small\" data-style=\"btn-info\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                            <select class=\"bs-select form-control input-small\" data-style=\"btn-warning\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                            <select class=\"bs-select form-control input-small\" data-style=\"btn-danger\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Metronic Styles</label>
                                                    <div class=\"col-md-9\">
                                                        <div class=\"margin-bottom-10\">
                                                            <select class=\"bs-select form-control input-small\" data-style=\"blue\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                            <select class=\"bs-select form-control input-small\" data-style=\"green\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                            <select class=\"bs-select form-control input-small\" data-style=\"red\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                            <select class=\"bs-select form-control input-small\" data-style=\"yellow\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                            <select class=\"bs-select form-control input-small\" data-style=\"purple\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Live Search(Countries)</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\" data-live-search=\"true\" data-size=\"8\">
                                                            <option value=\"AF\">Afghanistan</option>
                                                            <option value=\"AL\">Albania</option>
                                                            <option value=\"DZ\">Algeria</option>
                                                            <option value=\"AS\">American Samoa</option>
                                                            <option value=\"AD\">Andorra</option>
                                                            <option value=\"AO\">Angola</option>
                                                            <option value=\"AI\">Anguilla</option>
                                                            <option value=\"AR\">Argentina</option>
                                                            <option value=\"AM\">Armenia</option>
                                                            <option value=\"AW\">Aruba</option>
                                                            <option value=\"AU\">Australia</option>
                                                            <option value=\"AT\">Austria</option>
                                                            <option value=\"AZ\">Azerbaijan</option>
                                                            <option value=\"BS\">Bahamas</option>
                                                            <option value=\"BH\">Bahrain</option>
                                                            <option value=\"BD\">Bangladesh</option>
                                                            <option value=\"BB\">Barbados</option>
                                                            <option value=\"BY\">Belarus</option>
                                                            <option value=\"BE\">Belgium</option>
                                                            <option value=\"BZ\">Belize</option>
                                                            <option value=\"BJ\">Benin</option>
                                                            <option value=\"BM\">Bermuda</option>
                                                            <option value=\"BT\">Bhutan</option>
                                                            <option value=\"BO\">Bolivia</option>
                                                            <option value=\"BA\">Bosnia and Herzegowina</option>
                                                            <option value=\"BW\">Botswana</option>
                                                            <option value=\"BV\">Bouvet Island</option>
                                                            <option value=\"BR\">Brazil</option>
                                                            <option value=\"IO\">British Indian Ocean Territory</option>
                                                            <option value=\"BN\">Brunei Darussalam</option>
                                                            <option value=\"BG\">Bulgaria</option>
                                                            <option value=\"BF\">Burkina Faso</option>
                                                            <option value=\"BI\">Burundi</option>
                                                            <option value=\"KH\">Cambodia</option>
                                                            <option value=\"CM\">Cameroon</option>
                                                            <option value=\"CA\">Canada</option>
                                                            <option value=\"CV\">Cape Verde</option>
                                                            <option value=\"KY\">Cayman Islands</option>
                                                            <option value=\"CF\">Central African Republic</option>
                                                            <option value=\"TD\">Chad</option>
                                                            <option value=\"CL\">Chile</option>
                                                            <option value=\"CN\">China</option>
                                                            <option value=\"CX\">Christmas Island</option>
                                                            <option value=\"CC\">Cocos (Keeling) Islands</option>
                                                            <option value=\"CO\">Colombia</option>
                                                            <option value=\"KM\">Comoros</option>
                                                            <option value=\"CG\">Congo</option>
                                                            <option value=\"CD\">Congo, the Democratic Republic of the</option>
                                                            <option value=\"CK\">Cook Islands</option>
                                                            <option value=\"CR\">Costa Rica</option>
                                                            <option value=\"CI\">Cote d'Ivoire</option>
                                                            <option value=\"HR\">Croatia (Hrvatska)</option>
                                                            <option value=\"CU\">Cuba</option>
                                                            <option value=\"CY\">Cyprus</option>
                                                            <option value=\"CZ\">Czech Republic</option>
                                                            <option value=\"DK\">Denmark</option>
                                                            <option value=\"DJ\">Djibouti</option>
                                                            <option value=\"DM\">Dominica</option>
                                                            <option value=\"DO\">Dominican Republic</option>
                                                            <option value=\"EC\">Ecuador</option>
                                                            <option value=\"EG\">Egypt</option>
                                                            <option value=\"SV\">El Salvador</option>
                                                            <option value=\"GQ\">Equatorial Guinea</option>
                                                            <option value=\"ER\">Eritrea</option>
                                                            <option value=\"EE\">Estonia</option>
                                                            <option value=\"ET\">Ethiopia</option>
                                                            <option value=\"FK\">Falkland Islands (Malvinas)</option>
                                                            <option value=\"FO\">Faroe Islands</option>
                                                            <option value=\"FJ\">Fiji</option>
                                                            <option value=\"FI\">Finland</option>
                                                            <option value=\"FR\">France</option>
                                                            <option value=\"GF\">French Guiana</option>
                                                            <option value=\"PF\">French Polynesia</option>
                                                            <option value=\"TF\">French Southern Territories</option>
                                                            <option value=\"GA\">Gabon</option>
                                                            <option value=\"GM\">Gambia</option>
                                                            <option value=\"GE\">Georgia</option>
                                                            <option value=\"DE\">Germany</option>
                                                            <option value=\"GH\">Ghana</option>
                                                            <option value=\"GI\">Gibraltar</option>
                                                            <option value=\"GR\">Greece</option>
                                                            <option value=\"GL\">Greenland</option>
                                                            <option value=\"GD\">Grenada</option>
                                                            <option value=\"GP\">Guadeloupe</option>
                                                            <option value=\"GU\">Guam</option>
                                                            <option value=\"GT\">Guatemala</option>
                                                            <option value=\"GN\">Guinea</option>
                                                            <option value=\"GW\">Guinea-Bissau</option>
                                                            <option value=\"GY\">Guyana</option>
                                                            <option value=\"HT\">Haiti</option>
                                                            <option value=\"HM\">Heard and Mc Donald Islands</option>
                                                            <option value=\"VA\">Holy See (Vatican City State)</option>
                                                            <option value=\"HN\">Honduras</option>
                                                            <option value=\"HK\">Hong Kong</option>
                                                            <option value=\"HU\">Hungary</option>
                                                            <option value=\"IS\">Iceland</option>
                                                            <option value=\"IN\">India</option>
                                                            <option value=\"ID\">Indonesia</option>
                                                            <option value=\"IR\">Iran (Islamic Republic of)</option>
                                                            <option value=\"IQ\">Iraq</option>
                                                            <option value=\"IE\">Ireland</option>
                                                            <option value=\"IL\">Israel</option>
                                                            <option value=\"IT\">Italy</option>
                                                            <option value=\"JM\">Jamaica</option>
                                                            <option value=\"JP\">Japan</option>
                                                            <option value=\"JO\">Jordan</option>
                                                            <option value=\"KZ\">Kazakhstan</option>
                                                            <option value=\"KE\">Kenya</option>
                                                            <option value=\"KI\">Kiribati</option>
                                                            <option value=\"KP\">Korea, Democratic People's Republic of</option>
                                                            <option value=\"KR\">Korea, Republic of</option>
                                                            <option value=\"KW\">Kuwait</option>
                                                            <option value=\"KG\">Kyrgyzstan</option>
                                                            <option value=\"LA\">Lao People's Democratic Republic</option>
                                                            <option value=\"LV\">Latvia</option>
                                                            <option value=\"LB\">Lebanon</option>
                                                            <option value=\"LS\">Lesotho</option>
                                                            <option value=\"LR\">Liberia</option>
                                                            <option value=\"LY\">Libyan Arab Jamahiriya</option>
                                                            <option value=\"LI\">Liechtenstein</option>
                                                            <option value=\"LT\">Lithuania</option>
                                                            <option value=\"LU\">Luxembourg</option>
                                                            <option value=\"MO\">Macau</option>
                                                            <option value=\"MK\">Macedonia, The Former Yugoslav Republic of</option>
                                                            <option value=\"MG\">Madagascar</option>
                                                            <option value=\"MW\">Malawi</option>
                                                            <option value=\"MY\">Malaysia</option>
                                                            <option value=\"MV\">Maldives</option>
                                                            <option value=\"ML\">Mali</option>
                                                            <option value=\"MT\">Malta</option>
                                                            <option value=\"MH\">Marshall Islands</option>
                                                            <option value=\"MQ\">Martinique</option>
                                                            <option value=\"MR\">Mauritania</option>
                                                            <option value=\"MU\">Mauritius</option>
                                                            <option value=\"YT\">Mayotte</option>
                                                            <option value=\"MX\">Mexico</option>
                                                            <option value=\"FM\">Micronesia, Federated States of</option>
                                                            <option value=\"MD\">Moldova, Republic of</option>
                                                            <option value=\"MC\">Monaco</option>
                                                            <option value=\"MN\">Mongolia</option>
                                                            <option value=\"MS\">Montserrat</option>
                                                            <option value=\"MA\">Morocco</option>
                                                            <option value=\"MZ\">Mozambique</option>
                                                            <option value=\"MM\">Myanmar</option>
                                                            <option value=\"NA\">Namibia</option>
                                                            <option value=\"NR\">Nauru</option>
                                                            <option value=\"NP\">Nepal</option>
                                                            <option value=\"NL\">Netherlands</option>
                                                            <option value=\"AN\">Netherlands Antilles</option>
                                                            <option value=\"NC\">New Caledonia</option>
                                                            <option value=\"NZ\">New Zealand</option>
                                                            <option value=\"NI\">Nicaragua</option>
                                                            <option value=\"NE\">Niger</option>
                                                            <option value=\"NG\">Nigeria</option>
                                                            <option value=\"NU\">Niue</option>
                                                            <option value=\"NF\">Norfolk Island</option>
                                                            <option value=\"MP\">Northern Mariana Islands</option>
                                                            <option value=\"NO\">Norway</option>
                                                            <option value=\"OM\">Oman</option>
                                                            <option value=\"PK\">Pakistan</option>
                                                            <option value=\"PW\">Palau</option>
                                                            <option value=\"PA\">Panama</option>
                                                            <option value=\"PG\">Papua New Guinea</option>
                                                            <option value=\"PY\">Paraguay</option>
                                                            <option value=\"PE\">Peru</option>
                                                            <option value=\"PH\">Philippines</option>
                                                            <option value=\"PN\">Pitcairn</option>
                                                            <option value=\"PL\">Poland</option>
                                                            <option value=\"PT\">Portugal</option>
                                                            <option value=\"PR\">Puerto Rico</option>
                                                            <option value=\"QA\">Qatar</option>
                                                            <option value=\"RE\">Reunion</option>
                                                            <option value=\"RO\">Romania</option>
                                                            <option value=\"RU\">Russian Federation</option>
                                                            <option value=\"RW\">Rwanda</option>
                                                            <option value=\"KN\">Saint Kitts and Nevis</option>
                                                            <option value=\"LC\">Saint LUCIA</option>
                                                            <option value=\"VC\">Saint Vincent and the Grenadines</option>
                                                            <option value=\"WS\">Samoa</option>
                                                            <option value=\"SM\">San Marino</option>
                                                            <option value=\"ST\">Sao Tome and Principe</option>
                                                            <option value=\"SA\">Saudi Arabia</option>
                                                            <option value=\"SN\">Senegal</option>
                                                            <option value=\"SC\">Seychelles</option>
                                                            <option value=\"SL\">Sierra Leone</option>
                                                            <option value=\"SG\">Singapore</option>
                                                            <option value=\"SK\">Slovakia (Slovak Republic)</option>
                                                            <option value=\"SI\">Slovenia</option>
                                                            <option value=\"SB\">Solomon Islands</option>
                                                            <option value=\"SO\">Somalia</option>
                                                            <option value=\"ZA\">South Africa</option>
                                                            <option value=\"GS\">South Georgia and the South Sandwich Islands</option>
                                                            <option value=\"ES\">Spain</option>
                                                            <option value=\"LK\">Sri Lanka</option>
                                                            <option value=\"SH\">St. Helena</option>
                                                            <option value=\"PM\">St. Pierre and Miquelon</option>
                                                            <option value=\"SD\">Sudan</option>
                                                            <option value=\"SR\">Suriname</option>
                                                            <option value=\"SJ\">Svalbard and Jan Mayen Islands</option>
                                                            <option value=\"SZ\">Swaziland</option>
                                                            <option value=\"SE\">Sweden</option>
                                                            <option value=\"CH\">Switzerland</option>
                                                            <option value=\"SY\">Syrian Arab Republic</option>
                                                            <option value=\"TW\">Taiwan, Province of China</option>
                                                            <option value=\"TJ\">Tajikistan</option>
                                                            <option value=\"TZ\">Tanzania, United Republic of</option>
                                                            <option value=\"TH\">Thailand</option>
                                                            <option value=\"TG\">Togo</option>
                                                            <option value=\"TK\">Tokelau</option>
                                                            <option value=\"TO\">Tonga</option>
                                                            <option value=\"TT\">Trinidad and Tobago</option>
                                                            <option value=\"TN\">Tunisia</option>
                                                            <option value=\"TR\">Turkey</option>
                                                            <option value=\"TM\">Turkmenistan</option>
                                                            <option value=\"TC\">Turks and Caicos Islands</option>
                                                            <option value=\"TV\">Tuvalu</option>
                                                            <option value=\"UG\">Uganda</option>
                                                            <option value=\"UA\">Ukraine</option>
                                                            <option value=\"AE\">United Arab Emirates</option>
                                                            <option value=\"GB\">United Kingdom</option>
                                                            <option value=\"US\">United States</option>
                                                            <option value=\"UM\">United States Minor Outlying Islands</option>
                                                            <option value=\"UY\">Uruguay</option>
                                                            <option value=\"UZ\">Uzbekistan</option>
                                                            <option value=\"VU\">Vanuatu</option>
                                                            <option value=\"VE\">Venezuela</option>
                                                            <option value=\"VN\">Viet Nam</option>
                                                            <option value=\"VG\">Virgin Islands (British)</option>
                                                            <option value=\"VI\">Virgin Islands (U.S.)</option>
                                                            <option value=\"WF\">Wallis and Futuna Islands</option>
                                                            <option value=\"EH\">Western Sahara</option>
                                                            <option value=\"YE\">Yemen</option>
                                                            <option value=\"ZM\">Zambia</option>
                                                            <option value=\"ZW\">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Disabled Option</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\" multiple>
                                                            <option>Mustard</option>
                                                            <option disabled>Ketchup</option>
                                                            <option>Relish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Option Devider</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\">
                                                            <option>Mustard</option>
                                                            <option>Ketchup</option>
                                                            <option>Relish</option>
                                                            <option>Mayonnaise</option>
                                                            <option data-divider=\"true\"></option>
                                                            <option>Barbecue Sauce</option>
                                                            <option>Salad Dressing</option>
                                                            <option>Tabasco</option>
                                                            <option>Salsa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Custom Sizes</label>
                                                    <div class=\"col-md-9\">
                                                        <div class=\"margin-bottom-10\">
                                                            <select class=\"bs-select form-control\" data-width=\"125px\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select> 125px </div>
                                                        <div class=\"margin-bottom-10\">
                                                            <select class=\"bs-select form-control input-medium\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select> .input-medium </div>
                                                        <div class=\"margin-bottom-10\">
                                                            <select class=\"bs-select form-control\" data-width=\"75%\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select> 75% </div>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Sub Text</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\" data-show-subtext=\"true\">
                                                            <option data-subtext=\"French's\">Mustard</option>
                                                            <option data-subtext=\"Heinz\">Ketchup</option>
                                                            <option data-subtext=\"Sweet\">Relish</option>
                                                            <option data-subtext=\"Miracle Whip\">Mayonnaise</option>
                                                            <option data-divider=\"true\"></option>
                                                            <option data-subtext=\"Honey\">Barbecue Sauce</option>
                                                            <option data-subtext=\"Ranch\">Salad Dressing</option>
                                                            <option data-subtext=\"Sweet &amp; Spicy\">Tabasco</option>
                                                            <option data-subtext=\"Chunky\">Salsa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Fontawesome Icons</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\" data-show-subtext=\"true\">
                                                            <option data-icon=\"fa-glass icon-success\">Mustard</option>
                                                            <option data-icon=\"fa-heart icon-info\">Ketchup</option>
                                                            <option data-icon=\"fa-film icon-default\">Relish</option>
                                                            <option data-icon=\"fa-home icon-warning\">Mayonnaise</option>
                                                            <option data-icon=\"fa-user icon-danger\">Barbecue Sauce</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group \">
                                                    <label class=\"control-label col-md-3\">HTML content</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\" data-show-subtext=\"true\">
                                                            <option data-content=\"Mustard <span class='label lable-sm label-success'>fresh </span>
\t\t\t\t\t\t\t\t\t\t\">Mustard</option>
                                                            <option data-content=\"Ketchup <span class='label lable-sm label-default'>tasty </span>
\t\t\t\t\t\t\t\t\t\t\">Ketchup</option>
                                                            <option data-content=\"Relish <span class='label lable-sm label-warning'>warning </span>
\t\t\t\t\t\t\t\t\t\t\">Relish</option>
                                                            <option data-content=\"Mayonnaise <span class='label lable-sm label-info'>organic </span>
\t\t\t\t\t\t\t\t\t\t\">Mayonnaise</option>
                                                            <option data-content=\"Barbecue sauce <span class='label lable-sm label-danger'>hot </span>
\t\t\t\t\t\t\t\t\t\t\">Barbecue Sauce</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group last\">
                                                    <label class=\"control-label col-md-3\"></label>
                                                    <div class=\"col-md-4\">
                                                        <a class=\"btn green btn-outline sbold upppercase\" href=\"#form_modal11\" data-toggle=\"modal\"> View in modal
                                                            <i class=\"fa fa-share\"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-actions\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-offset-3 col-md-9\">
                                                        <button type=\"submit\" class=\"btn green\">
                                                            <i class=\"fa fa-check\"></i> Submit</button>
                                                        <button type=\"button\" class=\"btn default\">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END FORM-->
                                        <div id=\"form_modal11\" class=\"modal fade\" role=\"dialog\" aria-labelledby=\"myModalLabel10\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                                                        <h4 class=\"modal-title\">Sample Form in Modal</h4>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <form action=\"#\" class=\"form-horizontal\" role=\"form\">
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label col-md-4\">Default</label>
                                                                <div class=\"col-md-8\">
                                                                    <select class=\"bs-select form-control\">
                                                                        <option>Mustard</option>
                                                                        <option>Ketchup</option>
                                                                        <option>Relish</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label col-md-4\">Disabled</label>
                                                                <div class=\"col-md-8\">
                                                                    <select class=\"bs-select form-control\" disabled>
                                                                        <option>Mustard</option>
                                                                        <option>Ketchup</option>
                                                                        <option>Relish</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label col-md-4\">Grouped</label>
                                                                <div class=\"col-md-8\">
                                                                    <select class=\"bs-select form-control\">
                                                                        <optgroup label=\"Picnic\">
                                                                            <option>Mustard</option>
                                                                            <option>Ketchup</option>
                                                                            <option>Relish</option>
                                                                        </optgroup>
                                                                        <optgroup label=\"Camping\">
                                                                            <option>Tent</option>
                                                                            <option>Flashlight</option>
                                                                            <option>Toilet Paper</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button class=\"btn grey-salsa btn-outline\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
                                                        <button class=\"btn green\" data-dismiss=\"modal\">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET-->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
                <a href=\"javascript:;\" class=\"page-quick-sidebar-toggler\">
                    <i class=\"icon-login\"></i>
                </a>
                <div class=\"page-quick-sidebar-wrapper\" data-close-on-body-click=\"false\">
                    <div class=\"page-quick-sidebar\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\">
                                <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_1\" data-toggle=\"tab\"> Users
                                    <span class=\"badge badge-danger\">2</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_2\" data-toggle=\"tab\"> Alerts
                                    <span class=\"badge badge-success\">7</span>
                                </a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> More
                                    <i class=\"fa fa-angle-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu pull-right\">
                                    <li>
                                        <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                            <i class=\"icon-bell\"></i> Alerts </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                            <i class=\"icon-info\"></i> Notifications </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                            <i class=\"icon-speech\"></i> Activities </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                            <i class=\"icon-settings\"></i> Settings </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active page-quick-sidebar-chat\" id=\"quick_sidebar_tab_1\">
                                <div class=\"page-quick-sidebar-chat-users\" data-rail-color=\"#ddd\" data-wrapper-class=\"page-quick-sidebar-list\">
                                    <h3 class=\"list-heading\">Staff</h3>
                                    <ul class=\"media-list list-items\">
                                        <li class=\"media\">
                                            <div class=\"media-status\">
                                                <span class=\"badge badge-success\">8</span>
                                            </div>
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar3.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Bob Nilson</h4>
                                                <div class=\"media-heading-sub\"> Project Manager </div>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar1.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Nick Larson</h4>
                                                <div class=\"media-heading-sub\"> Art Director </div>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <div class=\"media-status\">
                                                <span class=\"badge badge-danger\">3</span>
                                            </div>
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar4.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Deon Hubert</h4>
                                                <div class=\"media-heading-sub\"> CTO </div>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar2.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Ella Wong</h4>
                                                <div class=\"media-heading-sub\"> CEO </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class=\"list-heading\">Customers</h3>
                                    <ul class=\"media-list list-items\">
                                        <li class=\"media\">
                                            <div class=\"media-status\">
                                                <span class=\"badge badge-warning\">2</span>
                                            </div>
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar6.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Lara Kunis</h4>
                                                <div class=\"media-heading-sub\"> CEO, Loop Inc </div>
                                                <div class=\"media-heading-small\"> Last seen 03:10 AM </div>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <div class=\"media-status\">
                                                <span class=\"label label-sm label-success\">new</span>
                                            </div>
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar7.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Ernie Kyllonen</h4>
                                                <div class=\"media-heading-sub\"> Project Manager,
                                                    <br> SmartBizz PTL </div>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar8.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Lisa Stone</h4>
                                                <div class=\"media-heading-sub\"> CTO, Keort Inc </div>
                                                <div class=\"media-heading-small\"> Last seen 13:10 PM </div>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <div class=\"media-status\">
                                                <span class=\"badge badge-success\">7</span>
                                            </div>
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar9.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Deon Portalatin</h4>
                                                <div class=\"media-heading-sub\"> CFO, H&D LTD </div>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar10.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Irina Savikova</h4>
                                                <div class=\"media-heading-sub\"> CEO, Tizda Motors Inc </div>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <div class=\"media-status\">
                                                <span class=\"badge badge-danger\">4</span>
                                            </div>
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar11.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Maria Gomez</h4>
                                                <div class=\"media-heading-sub\"> Manager, Infomatic Inc </div>
                                                <div class=\"media-heading-small\"> Last seen 03:10 AM </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"page-quick-sidebar-item\">
                                    <div class=\"page-quick-sidebar-chat-user\">
                                        <div class=\"page-quick-sidebar-nav\">
                                            <a href=\"javascript:;\" class=\"page-quick-sidebar-back-to-list\">
                                                <i class=\"icon-arrow-left\"></i>Back</a>
                                        </div>
                                        <div class=\"page-quick-sidebar-chat-user-messages\">
                                            <div class=\"post out\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar3.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                    <span class=\"datetime\">20:15</span>
                                                    <span class=\"body\"> When could you send me the report ? </span>
                                                </div>
                                            </div>
                                            <div class=\"post in\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar2.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                    <span class=\"datetime\">20:15</span>
                                                    <span class=\"body\"> Its almost done. I will be sending it shortly </span>
                                                </div>
                                            </div>
                                            <div class=\"post out\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar3.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                    <span class=\"datetime\">20:15</span>
                                                    <span class=\"body\"> Alright. Thanks! :) </span>
                                                </div>
                                            </div>
                                            <div class=\"post in\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar2.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                    <span class=\"datetime\">20:16</span>
                                                    <span class=\"body\"> You are most welcome. Sorry for the delay. </span>
                                                </div>
                                            </div>
                                            <div class=\"post out\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar3.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                    <span class=\"datetime\">20:17</span>
                                                    <span class=\"body\"> No probs. Just take your time :) </span>
                                                </div>
                                            </div>
                                            <div class=\"post in\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar2.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                    <span class=\"datetime\">20:40</span>
                                                    <span class=\"body\"> Alright. I just emailed it to you. </span>
                                                </div>
                                            </div>
                                            <div class=\"post out\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar3.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                    <span class=\"datetime\">20:17</span>
                                                    <span class=\"body\"> Great! Thanks. Will check it right away. </span>
                                                </div>
                                            </div>
                                            <div class=\"post in\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar2.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                    <span class=\"datetime\">20:40</span>
                                                    <span class=\"body\"> Please let me know if you have any comment. </span>
                                                </div>
                                            </div>
                                            <div class=\"post out\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar3.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                    <span class=\"datetime\">20:17</span>
                                                    <span class=\"body\"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"page-quick-sidebar-chat-user-form\">
                                            <div class=\"input-group\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Type a message here...\">
                                                <div class=\"input-group-btn\">
                                                    <button type=\"button\" class=\"btn green\">
                                                        <i class=\"icon-paper-clip\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane page-quick-sidebar-alerts\" id=\"quick_sidebar_tab_2\">
                                <div class=\"page-quick-sidebar-alerts-list\">
                                    <h3 class=\"list-heading\">General</h3>
                                    <ul class=\"feeds list-items\">
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-info\">
                                                            <i class=\"fa fa-check\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> You have 4 pending tasks.
                                                            <span class=\"label label-sm label-warning \"> Take action
                                                                <i class=\"fa fa-share\"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-success\">
                                                                <i class=\"fa fa-bar-chart-o\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> Finance Report for year 2013 has been released. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 20 mins </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-danger\">
                                                            <i class=\"fa fa-user\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 24 mins </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-info\">
                                                            <i class=\"fa fa-shopping-cart\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New order received with
                                                            <span class=\"label label-sm label-success\"> Reference Number: DR23923 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 30 mins </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-user\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 24 mins </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-info\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> Web server hardware needs to be upgraded.
                                                            <span class=\"label label-sm label-warning\"> Overdue </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 2 hours </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-default\">
                                                                <i class=\"fa fa-briefcase\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> IPO Report for year 2013 has been released. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 20 mins </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class=\"list-heading\">System</h3>
                                    <ul class=\"feeds list-items\">
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-info\">
                                                            <i class=\"fa fa-check\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> You have 4 pending tasks.
                                                            <span class=\"label label-sm label-warning \"> Take action
                                                                <i class=\"fa fa-share\"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-danger\">
                                                                <i class=\"fa fa-bar-chart-o\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> Finance Report for year 2013 has been released. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 20 mins </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-default\">
                                                            <i class=\"fa fa-user\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 24 mins </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-info\">
                                                            <i class=\"fa fa-shopping-cart\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New order received with
                                                            <span class=\"label label-sm label-success\"> Reference Number: DR23923 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 30 mins </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-user\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 24 mins </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-warning\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> Web server hardware needs to be upgraded.
                                                            <span class=\"label label-sm label-default \"> Overdue </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 2 hours </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-info\">
                                                                <i class=\"fa fa-briefcase\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> IPO Report for year 2013 has been released. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 20 mins </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"tab-pane page-quick-sidebar-settings\" id=\"quick_sidebar_tab_3\">
                                <div class=\"page-quick-sidebar-settings-list\">
                                    <h3 class=\"list-heading\">General Settings</h3>
                                    <ul class=\"list-items borderless\">
                                        <li> Enable Notifications
                                            <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                        <li> Allow Tracking
                                            <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"info\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                        <li> Log Errors
                                            <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                        <li> Auto Sumbit Issues
                                            <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                        <li> Enable SMS Alerts
                                            <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    </ul>
                                    <h3 class=\"list-heading\">System Settings</h3>
                                    <ul class=\"list-items borderless\">
                                        <li> Security Level
                                            <select class=\"form-control input-inline input-sm input-small\">
                                                <option value=\"1\">Normal</option>
                                                <option value=\"2\" selected>Medium</option>
                                                <option value=\"e\">High</option>
                                            </select>
                                        </li>
                                        <li> Failed Email Attempts
                                            <input class=\"form-control input-inline input-sm input-small\" value=\"5\" /> </li>
                                        <li> Secondary SMTP Port
                                            <input class=\"form-control input-inline input-sm input-small\" value=\"3560\" /> </li>
                                        <li> Notify On System Error
                                            <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                        <li> Notify On SMTP Error
                                            <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    </ul>
                                    <div class=\"inner-content\">
                                        <button class=\"btn btn-success\">
                                            <i class=\"icon-settings\"></i> Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class=\"page-footer\">
                <div class=\"page-footer-inner\"> 2016 &copy; Metronic Theme By
                    <a target=\"_blank\" href=\"http://keenthemes.com/\">Keenthemes</a> &nbsp;|&nbsp;
                    <a href=\"http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes\" title=\"Purchase Metronic just for 27\$ and get lifetime updates for free\" target=\"_blank\">Purchase Metronic!</a>
                </div>
                <div class=\"scroll-to-top\">
                    <i class=\"icon-arrow-up\"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <!-- BEGIN QUICK NAV -->
        <nav class=\"quick-nav\">
            <a class=\"quick-nav-trigger\" href=\"#0\">
                <span aria-hidden=\"true\"></span>
            </a>
            <ul>
                <li>
                    <a href=\"https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes\" target=\"_blank\" class=\"active\">
                        <span>Purchase Metronic</span>
                        <i class=\"icon-basket\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes\" target=\"_blank\">
                        <span>Customer Reviews</span>
                        <i class=\"icon-users\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"http://keenthemes.com/showcast/\" target=\"_blank\">
                        <span>Showcase</span>
                        <i class=\"icon-user\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"http://keenthemes.com/metronic-theme/changelog/\" target=\"_blank\">
                        <span>Changelog</span>
                        <i class=\"icon-graph\"></i>
                    </a>
                </li>
            </ul>
            <span aria-hidden=\"true\" class=\"quick-nav-bg\"></span>
        </nav>
        <div class=\"quick-nav-overlay\"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src=\"../assets/global/plugins/respond.min.js\"></script>
<script src=\"../assets/global/plugins/excanvas.min.js\"></script> 
<script src=\"../assets/global/plugins/ie8.fix.min.js\"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src=\"../assets/global/plugins/jquery.min.js\" type=\"text/javascript\"></script>
        <script src=\"../assets/global/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
        <script src=\"../assets/global/plugins/js.cookie.min.js\" type=\"text/javascript\"></script>
        <script src=\"../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js\" type=\"text/javascript\"></script>
        <script src=\"../assets/global/plugins/jquery.blockui.min.js\" type=\"text/javascript\"></script>
        <script src=\"../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"../assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"../assets/global/scripts/app.min.js\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"../assets/pages/scripts/components-bootstrap-select.min.js\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"../assets/layouts/layout/scripts/layout.min.js\" type=\"text/javascript\"></script>
        <script src=\"../assets/layouts/layout/scripts/demo.min.js\" type=\"text/javascript\"></script>
        <script src=\"../assets/layouts/global/scripts/quick-sidebar.min.js\" type=\"text/javascript\"></script>
        <script src=\"../assets/layouts/global/scripts/quick-nav.min.js\" type=\"text/javascript\"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    <!-- Google Code for Universal Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37564768-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- End -->

<!-- Google Tag Manager -->
<noscript><iframe src=\"http://www.googletagmanager.com/ns.html?id=GTM-W276BJ\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W276BJ');</script>
<!-- End -->
</body>



<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_1/components_bootstrap_select.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2016 17:51:07 GMT -->
</html>";
        
        $__internal_ae6c8b1b5b6aa0c8b8ef2e005c2282229f87925e3d9b415dcdf1fba6dcb63d5b->leave($__internal_ae6c8b1b5b6aa0c8b8ef2e005c2282229f87925e3d9b415dcdf1fba6dcb63d5b_prof);

        
        $__internal_f628e3facdb5f6b29c90f7c27ea81461dcf434f64ba33ed5d4901e93b31f74d7->leave($__internal_f628e3facdb5f6b29c90f7c27ea81461dcf434f64ba33ed5d4901e93b31f74d7_prof);

    }

    public function getTemplateName()
    {
        return "template_1/components_bootstrap_select.html";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    
<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_1/components_bootstrap_select.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2016 17:50:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
        <meta charset=\"utf-8\" />
        <title>Metronic Admin Theme #1 | Bootstrap Select</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"Preview page of Metronic Admin Theme #1 for bootstrap select with multiple select, live search and more\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"../assets/global/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"../assets/global/plugins/simple-line-icons/simple-line-icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"../assets/global/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=\"../assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"../assets/global/css/components.min.css\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"../assets/global/css/plugins.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"../assets/layouts/layout/css/layout.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"../assets/layouts/layout/css/themes/darkblue.min.css\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"../assets/layouts/layout/css/custom.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
    <!-- END HEAD -->

    <body class=\"page-header-fixed page-sidebar-closed-hide-logo page-content-white\">
        <div class=\"page-wrapper\">
            <!-- BEGIN HEADER -->
            <div class=\"page-header navbar navbar-fixed-top\">
                <!-- BEGIN HEADER INNER -->
                <div class=\"page-header-inner \">
                    <!-- BEGIN LOGO -->
                    <div class=\"page-logo\">
                        <a href=\"index.html\">
                            <img src=\"../assets/layouts/layout/img/logo.png\" alt=\"logo\" class=\"logo-default\" /> </a>
                        <div class=\"menu-toggler sidebar-toggler\">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class=\"top-menu\">
                        <ul class=\"nav navbar-nav pull-right\">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after \"dropdown-extended\" to change the dropdown styte -->
                            <!-- DOC: Apply \"dropdown-hoverable\" class after below \"dropdown\" and remove data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove \"dropdown-hoverable\" and add data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to the below A element with dropdown-toggle class -->
                            <li class=\"dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-bell\"></i>
                                    <span class=\"badge badge-default\"> 7 </span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"external\">
                                        <h3>
                                            <span class=\"bold\">12 pending</span> notifications</h3>
                                        <a href=\"page_user_profile_1.html\">view all</a>
                                    </li>
                                    <li>
                                        <ul class=\"dropdown-menu-list scroller\" style=\"height: 250px;\" data-handle-color=\"#637283\">
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">just now</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-success\">
                                                            <i class=\"fa fa-plus\"></i>
                                                        </span> New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">3 mins</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-danger\">
                                                            <i class=\"fa fa-bolt\"></i>
                                                        </span> Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">10 mins</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-warning\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </span> Server #2 not responding. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">14 hrs</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-info\">
                                                            <i class=\"fa fa-bullhorn\"></i>
                                                        </span> Application error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">2 days</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-danger\">
                                                            <i class=\"fa fa-bolt\"></i>
                                                        </span> Database overloaded 68%. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">3 days</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-danger\">
                                                            <i class=\"fa fa-bolt\"></i>
                                                        </span> A user IP blocked. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">4 days</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-warning\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">5 days</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-info\">
                                                            <i class=\"fa fa-bullhorn\"></i>
                                                        </span> System Error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">9 days</span>
                                                    <span class=\"details\">
                                                        <span class=\"label label-sm label-icon label-danger\">
                                                            <i class=\"fa fa-bolt\"></i>
                                                        </span> Storage server failed. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-envelope-open\"></i>
                                    <span class=\"badge badge-default\"> 4 </span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"external\">
                                        <h3>You have
                                            <span class=\"bold\">7 New</span> Messages</h3>
                                        <a href=\"app_inbox.html\">view all</a>
                                    </li>
                                    <li>
                                        <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\" data-handle-color=\"#637283\">
                                            <li>
                                                <a href=\"#\">
                                                    <span class=\"photo\">
                                                        <img src=\"../assets/layouts/layout3/img/avatar2.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                    <span class=\"subject\">
                                                        <span class=\"from\"> Lisa Wong </span>
                                                        <span class=\"time\">Just Now </span>
                                                    </span>
                                                    <span class=\"message\"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <span class=\"photo\">
                                                        <img src=\"../assets/layouts/layout3/img/avatar3.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                    <span class=\"subject\">
                                                        <span class=\"from\"> Richard Doe </span>
                                                        <span class=\"time\">16 mins </span>
                                                    </span>
                                                    <span class=\"message\"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <span class=\"photo\">
                                                        <img src=\"../assets/layouts/layout3/img/avatar1.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                    <span class=\"subject\">
                                                        <span class=\"from\"> Bob Nilson </span>
                                                        <span class=\"time\">2 hrs </span>
                                                    </span>
                                                    <span class=\"message\"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <span class=\"photo\">
                                                        <img src=\"../assets/layouts/layout3/img/avatar2.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                    <span class=\"subject\">
                                                        <span class=\"from\"> Lisa Wong </span>
                                                        <span class=\"time\">40 mins </span>
                                                    </span>
                                                    <span class=\"message\"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <span class=\"photo\">
                                                        <img src=\"../assets/layouts/layout3/img/avatar3.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                    <span class=\"subject\">
                                                        <span class=\"from\"> Richard Doe </span>
                                                        <span class=\"time\">46 mins </span>
                                                    </span>
                                                    <span class=\"message\"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-extended dropdown-tasks\" id=\"header_task_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-calendar\"></i>
                                    <span class=\"badge badge-default\"> 3 </span>
                                </a>
                                <ul class=\"dropdown-menu extended tasks\">
                                    <li class=\"external\">
                                        <h3>You have
                                            <span class=\"bold\">12 pending</span> tasks</h3>
                                        <a href=\"app_todo.html\">view all</a>
                                    </li>
                                    <li>
                                        <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\" data-handle-color=\"#637283\">
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">New release v1.2 </span>
                                                        <span class=\"percent\">30%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 40%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">40% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">Application deployment</span>
                                                        <span class=\"percent\">65%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 65%;\" class=\"progress-bar progress-bar-danger\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">65% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">Mobile app release</span>
                                                        <span class=\"percent\">98%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 98%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">98% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">Database migration</span>
                                                        <span class=\"percent\">10%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 10%;\" class=\"progress-bar progress-bar-warning\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">10% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">Web server upgrade</span>
                                                        <span class=\"percent\">58%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 58%;\" class=\"progress-bar progress-bar-info\" aria-valuenow=\"58\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">58% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">Mobile development</span>
                                                        <span class=\"percent\">85%</span>
                                                    </span>
                                                    <span class=\"progress\">
                                                        <span style=\"width: 85%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">85% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"task\">
                                                        <span class=\"desc\">New UI release</span>
                                                        <span class=\"percent\">38%</span>
                                                    </span>
                                                    <span class=\"progress progress-striped\">
                                                        <span style=\"width: 38%;\" class=\"progress-bar progress-bar-important\" aria-valuenow=\"18\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">38% Complete</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-user\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <img alt=\"\" class=\"img-circle\" src=\"../assets/layouts/layout/img/avatar3_small.jpg\" />
                                    <span class=\"username username-hide-on-mobile\"> Nick </span>
                                    <i class=\"fa fa-angle-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-default\">
                                    <li>
                                        <a href=\"page_user_profile_1.html\">
                                            <i class=\"icon-user\"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href=\"app_calendar.html\">
                                            <i class=\"icon-calendar\"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href=\"app_inbox.html\">
                                            <i class=\"icon-envelope-open\"></i> My Inbox
                                            <span class=\"badge badge-danger\"> 3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"app_todo.html\">
                                            <i class=\"icon-rocket\"></i> My Tasks
                                            <span class=\"badge badge-success\"> 7 </span>
                                        </a>
                                    </li>
                                    <li class=\"divider\"> </li>
                                    <li>
                                        <a href=\"page_user_lock_1.html\">
                                            <i class=\"icon-lock\"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href=\"page_user_login_1.html\">
                                            <i class=\"icon-key\"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-quick-sidebar-toggler\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\">
                                    <i class=\"icon-logout\"></i>
                                </a>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class=\"clearfix\"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class=\"page-container\">
                <!-- BEGIN SIDEBAR -->
                <div class=\"page-sidebar-wrapper\">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                    <div class=\"page-sidebar navbar-collapse collapse\">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply \"page-sidebar-menu-light\" class right after \"page-sidebar-menu\" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply \"page-sidebar-menu-hover-submenu\" class right after \"page-sidebar-menu\" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply \"page-sidebar-menu-closed\" class right after \"page-sidebar-menu\" to collapse(\"page-sidebar-closed\" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand=\"true\" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                        <ul class=\"page-sidebar-menu  page-header-fixed \" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\" style=\"padding-top: 20px\">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below \"sidebar-toggler-wrapper\" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class=\"sidebar-toggler-wrapper hide\">
                                <div class=\"sidebar-toggler\">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below \"sidebar-search-wrapper\" LI element -->
                            <li class=\"sidebar-search-wrapper\">
                                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                <!-- DOC: Apply \"sidebar-search-bordered\" class the below search form to have bordered search box -->
                                <!-- DOC: Apply \"sidebar-search-bordered sidebar-search-solid\" class the below search form to have bordered & solid search box -->
                                <form class=\"sidebar-search  \" action=\"http://keenthemes.com/preview/metronic/theme/admin_1/page_general_search_3.html\" method=\"POST\">
                                    <a href=\"javascript:;\" class=\"remove\">
                                        <i class=\"icon-close\"></i>
                                    </a>
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                        <span class=\"input-group-btn\">
                                            <a href=\"javascript:;\" class=\"btn submit\">
                                                <i class=\"icon-magnifier\"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                            </li>
                            <li class=\"nav-item start \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-home\"></i>
                                    <span class=\"title\">Dashboard</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item start \">
                                        <a href=\"index.html\" class=\"nav-link \">
                                            <i class=\"icon-bar-chart\"></i>
                                            <span class=\"title\">Dashboard 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item start \">
                                        <a href=\"dashboard_2.html\" class=\"nav-link \">
                                            <i class=\"icon-bulb\"></i>
                                            <span class=\"title\">Dashboard 2</span>
                                            <span class=\"badge badge-success\">1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item start \">
                                        <a href=\"dashboard_3.html\" class=\"nav-link \">
                                            <i class=\"icon-graph\"></i>
                                            <span class=\"title\">Dashboard 3</span>
                                            <span class=\"badge badge-danger\">5</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"heading\">
                                <h3 class=\"uppercase\">Features</h3>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-diamond\"></i>
                                    <span class=\"title\">UI Features</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_colors.html\" class=\"nav-link \">
                                            <span class=\"title\">Color Library</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_metronic_grid.html\" class=\"nav-link \">
                                            <span class=\"title\">Metronic Grid System</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_general.html\" class=\"nav-link \">
                                            <span class=\"title\">General Components</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_buttons.html\" class=\"nav-link \">
                                            <span class=\"title\">Buttons</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_buttons_spinner.html\" class=\"nav-link \">
                                            <span class=\"title\">Spinner Buttons</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_confirmations.html\" class=\"nav-link \">
                                            <span class=\"title\">Popover Confirmations</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_sweetalert.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Sweet Alerts</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_icons.html\" class=\"nav-link \">
                                            <span class=\"title\">Font Icons</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_socicons.html\" class=\"nav-link \">
                                            <span class=\"title\">Social Icons</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_typography.html\" class=\"nav-link \">
                                            <span class=\"title\">Typography</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_tabs_accordions_navs.html\" class=\"nav-link \">
                                            <span class=\"title\">Tabs, Accordions & Navs</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_timeline.html\" class=\"nav-link \">
                                            <span class=\"title\">Timeline 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_timeline_2.html\" class=\"nav-link \">
                                            <span class=\"title\">Timeline 2</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_timeline_horizontal.html\" class=\"nav-link \">
                                            <span class=\"title\">Horizontal Timeline</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_tree.html\" class=\"nav-link \">
                                            <span class=\"title\">Tree View</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                            <span class=\"title\">Page Progress Bar</span>
                                            <span class=\"arrow\"></span>
                                        </a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"nav-item \">
                                                <a href=\"ui_page_progress_style_1.html\" class=\"nav-link \"> Flash </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"ui_page_progress_style_2.html\" class=\"nav-link \"> Big Counter </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_blockui.html\" class=\"nav-link \">
                                            <span class=\"title\">Block UI</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_bootstrap_growl.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Growl Notifications</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_notific8.html\" class=\"nav-link \">
                                            <span class=\"title\">Notific8 Notifications</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_toastr.html\" class=\"nav-link \">
                                            <span class=\"title\">Toastr Notifications</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_bootbox.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootbox Dialogs</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_alerts_api.html\" class=\"nav-link \">
                                            <span class=\"title\">Metronic Alerts API</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_session_timeout.html\" class=\"nav-link \">
                                            <span class=\"title\">Session Timeout</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_idle_timeout.html\" class=\"nav-link \">
                                            <span class=\"title\">User Idle Timeout</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_modals.html\" class=\"nav-link \">
                                            <span class=\"title\">Modals</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_extended_modals.html\" class=\"nav-link \">
                                            <span class=\"title\">Extended Modals</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_tiles.html\" class=\"nav-link \">
                                            <span class=\"title\">Tiles</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_datepaginator.html\" class=\"nav-link \">
                                            <span class=\"title\">Date Paginator</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ui_nestable.html\" class=\"nav-link \">
                                            <span class=\"title\">Nestable List</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  active open\">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-puzzle\"></i>
                                    <span class=\"title\">Components</span>
                                    <span class=\"selected\"></span>
                                    <span class=\"arrow open\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"components_date_time_pickers.html\" class=\"nav-link \">
                                            <span class=\"title\">Date & Time Pickers</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_color_pickers.html\" class=\"nav-link \">
                                            <span class=\"title\">Color Pickers</span>
                                            <span class=\"badge badge-danger\">2</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_select2.html\" class=\"nav-link \">
                                            <span class=\"title\">Select2 Dropdowns</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_bootstrap_multiselect_dropdown.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Multiselect Dropdowns</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  active open\">
                                        <a href=\"components_bootstrap_select.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Select</span>
                                            <span class=\"selected\"></span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_multi_select.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Multiple Select</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_bootstrap_select_splitter.html\" class=\"nav-link \">
                                            <span class=\"title\">Select Splitter</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_clipboard.html\" class=\"nav-link \">
                                            <span class=\"title\">Clipboard</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_typeahead.html\" class=\"nav-link \">
                                            <span class=\"title\">Typeahead Autocomplete</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_bootstrap_tagsinput.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Tagsinput</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_bootstrap_switch.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Switch</span>
                                            <span class=\"badge badge-success\">6</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_bootstrap_maxlength.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Maxlength</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_bootstrap_fileinput.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap File Input</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_bootstrap_touchspin.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Touchspin</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_form_tools.html\" class=\"nav-link \">
                                            <span class=\"title\">Form Widgets & Tools</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_context_menu.html\" class=\"nav-link \">
                                            <span class=\"title\">Context Menu</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_editors.html\" class=\"nav-link \">
                                            <span class=\"title\">Markdown & WYSIWYG Editors</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_code_editors.html\" class=\"nav-link \">
                                            <span class=\"title\">Code Editors</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_ion_sliders.html\" class=\"nav-link \">
                                            <span class=\"title\">Ion Range Sliders</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_noui_sliders.html\" class=\"nav-link \">
                                            <span class=\"title\">NoUI Range Sliders</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"components_knob_dials.html\" class=\"nav-link \">
                                            <span class=\"title\">Knob Circle Dials</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-settings\"></i>
                                    <span class=\"title\">Form Stuff</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"form_controls.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Form
                                                <br>Controls</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_controls_md.html\" class=\"nav-link \">
                                            <span class=\"title\">Material Design
                                                <br>Form Controls</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_validation.html\" class=\"nav-link \">
                                            <span class=\"title\">Form Validation</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_validation_states_md.html\" class=\"nav-link \">
                                            <span class=\"title\">Material Design
                                                <br>Form Validation States</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_validation_md.html\" class=\"nav-link \">
                                            <span class=\"title\">Material Design
                                                <br>Form Validation</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_layouts.html\" class=\"nav-link \">
                                            <span class=\"title\">Form Layouts</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_repeater.html\" class=\"nav-link \">
                                            <span class=\"title\">Form Repeater</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_input_mask.html\" class=\"nav-link \">
                                            <span class=\"title\">Form Input Mask</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_editable.html\" class=\"nav-link \">
                                            <span class=\"title\">Form X-editable</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_wizard.html\" class=\"nav-link \">
                                            <span class=\"title\">Form Wizard</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_icheck.html\" class=\"nav-link \">
                                            <span class=\"title\">iCheck Controls</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_image_crop.html\" class=\"nav-link \">
                                            <span class=\"title\">Image Cropping</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_fileupload.html\" class=\"nav-link \">
                                            <span class=\"title\">Multiple File Upload</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"form_dropzone.html\" class=\"nav-link \">
                                            <span class=\"title\">Dropzone File Upload</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-bulb\"></i>
                                    <span class=\"title\">Elements</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"elements_steps.html\" class=\"nav-link \">
                                            <span class=\"title\">Steps</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"elements_lists.html\" class=\"nav-link \">
                                            <span class=\"title\">Lists</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"elements_ribbons.html\" class=\"nav-link \">
                                            <span class=\"title\">Ribbons</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"elements_overlay.html\" class=\"nav-link \">
                                            <span class=\"title\">Overlays</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"elements_cards.html\" class=\"nav-link \">
                                            <span class=\"title\">User Cards</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-briefcase\"></i>
                                    <span class=\"title\">Tables</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"table_static_basic.html\" class=\"nav-link \">
                                            <span class=\"title\">Basic Tables</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"table_static_responsive.html\" class=\"nav-link \">
                                            <span class=\"title\">Responsive Tables</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"table_bootstrap.html\" class=\"nav-link \">
                                            <span class=\"title\">Bootstrap Tables</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                            <span class=\"title\">Datatables</span>
                                            <span class=\"arrow\"></span>
                                        </a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_managed.html\" class=\"nav-link \"> Managed Datatables </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_buttons.html\" class=\"nav-link \"> Buttons Extension </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_colreorder.html\" class=\"nav-link \"> Colreorder Extension </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_rowreorder.html\" class=\"nav-link \"> Rowreorder Extension </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_scroller.html\" class=\"nav-link \"> Scroller Extension </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_fixedheader.html\" class=\"nav-link \"> FixedHeader Extension </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_responsive.html\" class=\"nav-link \"> Responsive Extension </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_editable.html\" class=\"nav-link \"> Editable Datatables </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"table_datatables_ajax.html\" class=\"nav-link \"> Ajax Datatables </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"components_bootstrap_select8a36.html?p=\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-wallet\"></i>
                                    <span class=\"title\">Portlets</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"portlet_boxed.html\" class=\"nav-link \">
                                            <span class=\"title\">Boxed Portlets</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"portlet_light.html\" class=\"nav-link \">
                                            <span class=\"title\">Light Portlets</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"portlet_solid.html\" class=\"nav-link \">
                                            <span class=\"title\">Solid Portlets</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"portlet_ajax.html\" class=\"nav-link \">
                                            <span class=\"title\">Ajax Portlets</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"portlet_draggable.html\" class=\"nav-link \">
                                            <span class=\"title\">Draggable Portlets</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-bar-chart\"></i>
                                    <span class=\"title\">Charts</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"charts_amcharts.html\" class=\"nav-link \">
                                            <span class=\"title\">amChart</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"charts_flotcharts.html\" class=\"nav-link \">
                                            <span class=\"title\">Flot Charts</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"charts_flowchart.html\" class=\"nav-link \">
                                            <span class=\"title\">Flow Charts</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"charts_google.html\" class=\"nav-link \">
                                            <span class=\"title\">Google Charts</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"charts_echarts.html\" class=\"nav-link \">
                                            <span class=\"title\">eCharts</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"charts_morris.html\" class=\"nav-link \">
                                            <span class=\"title\">Morris Charts</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                            <span class=\"title\">HighCharts</span>
                                            <span class=\"arrow\"></span>
                                        </a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"nav-item \">
                                                <a href=\"charts_highcharts.html\" class=\"nav-link \"> HighCharts </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"charts_highstock.html\" class=\"nav-link \"> HighStock </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"charts_highmaps.html\" class=\"nav-link \"> HighMaps </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-pointer\"></i>
                                    <span class=\"title\">Maps</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"maps_google.html\" class=\"nav-link \">
                                            <span class=\"title\">Google Maps</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"maps_vector.html\" class=\"nav-link \">
                                            <span class=\"title\">Vector Maps</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"heading\">
                                <h3 class=\"uppercase\">Layouts</h3>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-layers\"></i>
                                    <span class=\"title\">Page Layouts</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_blank_page.html\" class=\"nav-link \">
                                            <span class=\"title\">Blank Page</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_ajax_page.html\" class=\"nav-link \">
                                            <span class=\"title\">Ajax Content Layout</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_offcanvas_mobile_menu.html\" class=\"nav-link \">
                                            <span class=\"title\">Off-canvas Mobile Menu</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_classic_page_head.html\" class=\"nav-link \">
                                            <span class=\"title\">Classic Page Head</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_light_page_head.html\" class=\"nav-link \">
                                            <span class=\"title\">Light Page Head</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_content_grey.html\" class=\"nav-link \">
                                            <span class=\"title\">Grey Bg Content</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_search_on_header_1.html\" class=\"nav-link \">
                                            <span class=\"title\">Search Box On Header 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_search_on_header_2.html\" class=\"nav-link \">
                                            <span class=\"title\">Search Box On Header 2</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_language_bar.html\" class=\"nav-link \">
                                            <span class=\"title\">Header Language Bar</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_footer_fixed.html\" class=\"nav-link \">
                                            <span class=\"title\">Fixed Footer</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_boxed_page.html\" class=\"nav-link \">
                                            <span class=\"title\">Boxed Page</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-feed\"></i>
                                    <span class=\"title\">Sidebar Layouts</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_sidebar_menu_light.html\" class=\"nav-link \">
                                            <span class=\"title\">Light Sidebar Menu</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_sidebar_menu_hover.html\" class=\"nav-link \">
                                            <span class=\"title\">Hover Sidebar Menu</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_sidebar_search_1.html\" class=\"nav-link \">
                                            <span class=\"title\">Sidebar Search Option 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_sidebar_search_2.html\" class=\"nav-link \">
                                            <span class=\"title\">Sidebar Search Option 2</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_toggler_on_sidebar.html\" class=\"nav-link \">
                                            <span class=\"title\">Sidebar Toggler On Sidebar</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_sidebar_reversed.html\" class=\"nav-link \">
                                            <span class=\"title\">Reversed Sidebar Page</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_sidebar_fixed.html\" class=\"nav-link \">
                                            <span class=\"title\">Fixed Sidebar Layout</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_sidebar_closed.html\" class=\"nav-link \">
                                            <span class=\"title\">Closed Sidebar Layout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-paper-plane\"></i>
                                    <span class=\"title\">Horizontal Menu</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_mega_menu_light.html\" class=\"nav-link \">
                                            <span class=\"title\">Light Mega Menu</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_mega_menu_dark.html\" class=\"nav-link \">
                                            <span class=\"title\">Dark Mega Menu</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_full_width.html\" class=\"nav-link \">
                                            <span class=\"title\">Full Width Layout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\" icon-wrench\"></i>
                                    <span class=\"title\">Custom Layouts</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_disabled_menu.html\" class=\"nav-link \">
                                            <span class=\"title\">Disabled Menu Links</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_full_height_portlet.html\" class=\"nav-link \">
                                            <span class=\"title\">Full Height Portlet</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"layout_full_height_content.html\" class=\"nav-link \">
                                            <span class=\"title\">Full Height Content</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"heading\">
                                <h3 class=\"uppercase\">Pages</h3>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-basket\"></i>
                                    <span class=\"title\">eCommerce</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"ecommerce_index.html\" class=\"nav-link \">
                                            <i class=\"icon-home\"></i>
                                            <span class=\"title\">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ecommerce_orders.html\" class=\"nav-link \">
                                            <i class=\"icon-basket\"></i>
                                            <span class=\"title\">Orders</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ecommerce_orders_view.html\" class=\"nav-link \">
                                            <i class=\"icon-tag\"></i>
                                            <span class=\"title\">Order View</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ecommerce_products.html\" class=\"nav-link \">
                                            <i class=\"icon-graph\"></i>
                                            <span class=\"title\">Products</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"ecommerce_products_edit.html\" class=\"nav-link \">
                                            <i class=\"icon-graph\"></i>
                                            <span class=\"title\">Product Edit</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-docs\"></i>
                                    <span class=\"title\">Apps</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"app_todo.html\" class=\"nav-link \">
                                            <i class=\"icon-clock\"></i>
                                            <span class=\"title\">Todo 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"app_todo_2.html\" class=\"nav-link \">
                                            <i class=\"icon-check\"></i>
                                            <span class=\"title\">Todo 2</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"app_inbox.html\" class=\"nav-link \">
                                            <i class=\"icon-envelope\"></i>
                                            <span class=\"title\">Inbox</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"app_calendar.html\" class=\"nav-link \">
                                            <i class=\"icon-calendar\"></i>
                                            <span class=\"title\">Calendar</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"app_ticket.html\" class=\"nav-link \">
                                            <i class=\"icon-notebook\"></i>
                                            <span class=\"title\">Support</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-user\"></i>
                                    <span class=\"title\">User</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"page_user_profile_1.html\" class=\"nav-link \">
                                            <i class=\"icon-user\"></i>
                                            <span class=\"title\">Profile 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_user_profile_1_account.html\" class=\"nav-link \">
                                            <i class=\"icon-user-female\"></i>
                                            <span class=\"title\">Profile 1 Account</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_user_profile_1_help.html\" class=\"nav-link \">
                                            <i class=\"icon-user-following\"></i>
                                            <span class=\"title\">Profile 1 Help</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_user_profile_2.html\" class=\"nav-link \">
                                            <i class=\"icon-users\"></i>
                                            <span class=\"title\">Profile 2</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                            <i class=\"icon-notebook\"></i>
                                            <span class=\"title\">Login</span>
                                            <span class=\"arrow\"></span>
                                        </a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"nav-item \">
                                                <a href=\"page_user_login_1.html\" class=\"nav-link \" target=\"_blank\"> Login Page 1 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_user_login_2.html\" class=\"nav-link \" target=\"_blank\"> Login Page 2 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_user_login_3.html\" class=\"nav-link \" target=\"_blank\"> Login Page 3 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_user_login_4.html\" class=\"nav-link \" target=\"_blank\"> Login Page 4 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_user_login_5.html\" class=\"nav-link \" target=\"_blank\"> Login Page 5 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_user_login_6.html\" class=\"nav-link \" target=\"_blank\"> Login Page 6 </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_user_lock_1.html\" class=\"nav-link \" target=\"_blank\">
                                            <i class=\"icon-lock\"></i>
                                            <span class=\"title\">Lock Screen 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_user_lock_2.html\" class=\"nav-link \" target=\"_blank\">
                                            <i class=\"icon-lock-open\"></i>
                                            <span class=\"title\">Lock Screen 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-social-dribbble\"></i>
                                    <span class=\"title\">General</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"page_general_about.html\" class=\"nav-link \">
                                            <i class=\"icon-info\"></i>
                                            <span class=\"title\">About</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_general_contact.html\" class=\"nav-link \">
                                            <i class=\"icon-call-end\"></i>
                                            <span class=\"title\">Contact</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                            <i class=\"icon-notebook\"></i>
                                            <span class=\"title\">Portfolio</span>
                                            <span class=\"arrow\"></span>
                                        </a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_portfolio_1.html\" class=\"nav-link \"> Portfolio 1 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_portfolio_2.html\" class=\"nav-link \"> Portfolio 2 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_portfolio_3.html\" class=\"nav-link \"> Portfolio 3 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_portfolio_4.html\" class=\"nav-link \"> Portfolio 4 </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                            <i class=\"icon-magnifier\"></i>
                                            <span class=\"title\">Search</span>
                                            <span class=\"arrow\"></span>
                                        </a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_search.html\" class=\"nav-link \"> Search 1 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_search_2.html\" class=\"nav-link \"> Search 2 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_search_3.html\" class=\"nav-link \"> Search 3 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_search_4.html\" class=\"nav-link \"> Search 4 </a>
                                            </li>
                                            <li class=\"nav-item \">
                                                <a href=\"page_general_search_5.html\" class=\"nav-link \"> Search 5 </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_general_pricing.html\" class=\"nav-link \">
                                            <i class=\"icon-tag\"></i>
                                            <span class=\"title\">Pricing</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_general_faq.html\" class=\"nav-link \">
                                            <i class=\"icon-wrench\"></i>
                                            <span class=\"title\">FAQ</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_general_blog.html\" class=\"nav-link \">
                                            <i class=\"icon-pencil\"></i>
                                            <span class=\"title\">Blog</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_general_blog_post.html\" class=\"nav-link \">
                                            <i class=\"icon-note\"></i>
                                            <span class=\"title\">Blog Post</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_general_invoice.html\" class=\"nav-link \">
                                            <i class=\"icon-envelope\"></i>
                                            <span class=\"title\">Invoice</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_general_invoice_2.html\" class=\"nav-link \">
                                            <i class=\"icon-envelope\"></i>
                                            <span class=\"title\">Invoice 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item  \">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-settings\"></i>
                                    <span class=\"title\">System</span>
                                    <span class=\"arrow\"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item  \">
                                        <a href=\"page_cookie_consent_1.html\" class=\"nav-link \">
                                            <span class=\"title\">Cookie Consent 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_cookie_consent_2.html\" class=\"nav-link \">
                                            <span class=\"title\">Cookie Consent 2</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_system_coming_soon.html\" class=\"nav-link \" target=\"_blank\">
                                            <span class=\"title\">Coming Soon</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_system_404_1.html\" class=\"nav-link \">
                                            <span class=\"title\">404 Page 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_system_404_2.html\" class=\"nav-link \" target=\"_blank\">
                                            <span class=\"title\">404 Page 2</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_system_404_3.html\" class=\"nav-link \" target=\"_blank\">
                                            <span class=\"title\">404 Page 3</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_system_500_1.html\" class=\"nav-link \">
                                            <span class=\"title\">500 Page 1</span>
                                        </a>
                                    </li>
                                    <li class=\"nav-item  \">
                                        <a href=\"page_system_500_2.html\" class=\"nav-link \" target=\"_blank\">
                                            <span class=\"title\">500 Page 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                    <i class=\"icon-folder\"></i>
                                    <span class=\"title\">Multi Level Menu</span>
                                    <span class=\"arrow \"></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"nav-item\">
                                        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                                            <i class=\"icon-settings\"></i> Item 1
                                            <span class=\"arrow\"></span>
                                        </a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"nav-item\">
                                                <a href=\"javascript:;\" target=\"_blank\" class=\"nav-link\">
                                                    <i class=\"icon-user\"></i> Arrow Toggle
                                                    <span class=\"arrow nav-toggle\"></span>
                                                </a>
                                                <ul class=\"sub-menu\">
                                                    <li class=\"nav-item\">
                                                        <a href=\"#\" class=\"nav-link\">
                                                            <i class=\"icon-power\"></i> Sample Link 1</a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a href=\"#\" class=\"nav-link\">
                                                            <i class=\"icon-paper-plane\"></i> Sample Link 1</a>
                                                    </li>
                                                    <li class=\"nav-item\">
                                                        <a href=\"#\" class=\"nav-link\">
                                                            <i class=\"icon-star\"></i> Sample Link 1</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    <i class=\"icon-camera\"></i> Sample Link 1</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    <i class=\"icon-link\"></i> Sample Link 2</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    <i class=\"icon-pointer\"></i> Sample Link 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"javascript:;\" target=\"_blank\" class=\"nav-link\">
                                            <i class=\"icon-globe\"></i> Arrow Toggle
                                            <span class=\"arrow nav-toggle\"></span>
                                        </a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    <i class=\"icon-tag\"></i> Sample Link 1</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    <i class=\"icon-pencil\"></i> Sample Link 1</a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=\"#\" class=\"nav-link\">
                                                    <i class=\"icon-graph\"></i> Sample Link 1</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            <i class=\"icon-bar-chart\"></i> Item 3 </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class=\"page-content-wrapper\">
                    <!-- BEGIN CONTENT BODY -->
                    <div class=\"page-content\">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->
                        <div class=\"theme-panel hidden-xs hidden-sm\">
                            <div class=\"toggler\"> </div>
                            <div class=\"toggler-close\"> </div>
                            <div class=\"theme-options\">
                                <div class=\"theme-option theme-colors clearfix\">
                                    <span> THEME COLOR </span>
                                    <ul>
                                        <li class=\"color-default current tooltips\" data-style=\"default\" data-container=\"body\" data-original-title=\"Default\"> </li>
                                        <li class=\"color-darkblue tooltips\" data-style=\"darkblue\" data-container=\"body\" data-original-title=\"Dark Blue\"> </li>
                                        <li class=\"color-blue tooltips\" data-style=\"blue\" data-container=\"body\" data-original-title=\"Blue\"> </li>
                                        <li class=\"color-grey tooltips\" data-style=\"grey\" data-container=\"body\" data-original-title=\"Grey\"> </li>
                                        <li class=\"color-light tooltips\" data-style=\"light\" data-container=\"body\" data-original-title=\"Light\"> </li>
                                        <li class=\"color-light2 tooltips\" data-style=\"light2\" data-container=\"body\" data-html=\"true\" data-original-title=\"Light 2\"> </li>
                                    </ul>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Theme Style </span>
                                    <select class=\"layout-style-option form-control input-sm\">
                                        <option value=\"square\" selected=\"selected\">Square corners</option>
                                        <option value=\"rounded\">Rounded corners</option>
                                    </select>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Layout </span>
                                    <select class=\"layout-option form-control input-sm\">
                                        <option value=\"fluid\" selected=\"selected\">Fluid</option>
                                        <option value=\"boxed\">Boxed</option>
                                    </select>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Header </span>
                                    <select class=\"page-header-option form-control input-sm\">
                                        <option value=\"fixed\" selected=\"selected\">Fixed</option>
                                        <option value=\"default\">Default</option>
                                    </select>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Top Menu Dropdown</span>
                                    <select class=\"page-header-top-dropdown-style-option form-control input-sm\">
                                        <option value=\"light\" selected=\"selected\">Light</option>
                                        <option value=\"dark\">Dark</option>
                                    </select>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Sidebar Mode</span>
                                    <select class=\"sidebar-option form-control input-sm\">
                                        <option value=\"fixed\">Fixed</option>
                                        <option value=\"default\" selected=\"selected\">Default</option>
                                    </select>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Sidebar Menu </span>
                                    <select class=\"sidebar-menu-option form-control input-sm\">
                                        <option value=\"accordion\" selected=\"selected\">Accordion</option>
                                        <option value=\"hover\">Hover</option>
                                    </select>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Sidebar Style </span>
                                    <select class=\"sidebar-style-option form-control input-sm\">
                                        <option value=\"default\" selected=\"selected\">Default</option>
                                        <option value=\"light\">Light</option>
                                    </select>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Sidebar Position </span>
                                    <select class=\"sidebar-pos-option form-control input-sm\">
                                        <option value=\"left\" selected=\"selected\">Left</option>
                                        <option value=\"right\">Right</option>
                                    </select>
                                </div>
                                <div class=\"theme-option\">
                                    <span> Footer </span>
                                    <select class=\"page-footer-option form-control input-sm\">
                                        <option value=\"fixed\">Fixed</option>
                                        <option value=\"default\" selected=\"selected\">Default</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        <div class=\"page-bar\">
                            <ul class=\"page-breadcrumb\">
                                <li>
                                    <a href=\"index.html\">Home</a>
                                    <i class=\"fa fa-circle\"></i>
                                </li>
                                <li>
                                    <span>Components</span>
                                </li>
                            </ul>
                            <div class=\"page-toolbar\">
                                <div class=\"btn-group pull-right\">
                                    <button type=\"button\" class=\"btn green btn-sm btn-outline dropdown-toggle\" data-toggle=\"dropdown\"> Actions
                                        <i class=\"fa fa-angle-down\"></i>
                                    </button>
                                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"icon-bell\"></i> Action</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"icon-shield\"></i> Another action</a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"icon-user\"></i> Something else here</a>
                                        </li>
                                        <li class=\"divider\"> </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"icon-bag\"></i> Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class=\"page-title\"> Bootstrap Select
                            <small>bootstrap select with multiple select, live search and more</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"note note-success\">
                                    <h3>Bootstrap Select</h3>
                                    <p> Bootstrap-select is a jQuery plugin that utilizes Bootstrap's dropdown.js to style and bring additional functionality to standard select elements. For more info please check out
                                        <a href=\"http://silviomoreto.github.io/bootstrap-select/\"
                                            target=\"_blank\">the official documentation</a>. </p>
                                </div>
                                <!-- BEGIN PORTLET-->
                                <div class=\"portlet light form-fit bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-social-dribbble font-green\"></i>
                                            <span class=\"caption-subject font-green bold uppercase\">Bootstrap Select</span>
                                        </div>
                                        <div class=\"actions\">
                                            <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                <i class=\"icon-cloud-upload\"></i>
                                            </a>
                                            <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                <i class=\"icon-wrench\"></i>
                                            </a>
                                            <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                                <i class=\"icon-trash\"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body form\">
                                        <!-- BEGIN FORM-->
                                        <form action=\"http://keenthemes.com/preview/metronic/theme/admin_1/index.html\" class=\"form-horizontal form-row-seperated\">
                                            <div class=\"form-body\">
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Default</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\">
                                                            <option>Mustard</option>
                                                            <option>Ketchup</option>
                                                            <option>Relish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Disabled</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\" disabled>
                                                            <option>Mustard</option>
                                                            <option>Ketchup</option>
                                                            <option>Relish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Grouped</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\">
                                                            <optgroup label=\"Picnic\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </optgroup>
                                                            <optgroup label=\"Camping\">
                                                                <option>Tent</option>
                                                                <option>Flashlight</option>
                                                                <option>Toilet Paper</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Multiple</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\" multiple>
                                                            <option>Mustard</option>
                                                            <option>Ketchup</option>
                                                            <option>Relish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Multiple With Toolbar</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\" multiple data-actions-box=\"true\">
                                                            <option>Mustard</option>
                                                            <option>Ketchup</option>
                                                            <option>Relish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Bootstrap Styles</label>
                                                    <div class=\"col-md-9\">
                                                        <div class=\"margin-bottom-10\">
                                                            <select class=\"bs-select form-control input-small\" data-style=\"btn-primary\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                            <select class=\"bs-select form-control input-small\" data-style=\"btn-success\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                            <select class=\"bs-select form-control input-small\" data-style=\"btn-info\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                            <select class=\"bs-select form-control input-small\" data-style=\"btn-warning\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                            <select class=\"bs-select form-control input-small\" data-style=\"btn-danger\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Metronic Styles</label>
                                                    <div class=\"col-md-9\">
                                                        <div class=\"margin-bottom-10\">
                                                            <select class=\"bs-select form-control input-small\" data-style=\"blue\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                            <select class=\"bs-select form-control input-small\" data-style=\"green\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                            <select class=\"bs-select form-control input-small\" data-style=\"red\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                            <select class=\"bs-select form-control input-small\" data-style=\"yellow\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                            <select class=\"bs-select form-control input-small\" data-style=\"purple\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Live Search(Countries)</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\" data-live-search=\"true\" data-size=\"8\">
                                                            <option value=\"AF\">Afghanistan</option>
                                                            <option value=\"AL\">Albania</option>
                                                            <option value=\"DZ\">Algeria</option>
                                                            <option value=\"AS\">American Samoa</option>
                                                            <option value=\"AD\">Andorra</option>
                                                            <option value=\"AO\">Angola</option>
                                                            <option value=\"AI\">Anguilla</option>
                                                            <option value=\"AR\">Argentina</option>
                                                            <option value=\"AM\">Armenia</option>
                                                            <option value=\"AW\">Aruba</option>
                                                            <option value=\"AU\">Australia</option>
                                                            <option value=\"AT\">Austria</option>
                                                            <option value=\"AZ\">Azerbaijan</option>
                                                            <option value=\"BS\">Bahamas</option>
                                                            <option value=\"BH\">Bahrain</option>
                                                            <option value=\"BD\">Bangladesh</option>
                                                            <option value=\"BB\">Barbados</option>
                                                            <option value=\"BY\">Belarus</option>
                                                            <option value=\"BE\">Belgium</option>
                                                            <option value=\"BZ\">Belize</option>
                                                            <option value=\"BJ\">Benin</option>
                                                            <option value=\"BM\">Bermuda</option>
                                                            <option value=\"BT\">Bhutan</option>
                                                            <option value=\"BO\">Bolivia</option>
                                                            <option value=\"BA\">Bosnia and Herzegowina</option>
                                                            <option value=\"BW\">Botswana</option>
                                                            <option value=\"BV\">Bouvet Island</option>
                                                            <option value=\"BR\">Brazil</option>
                                                            <option value=\"IO\">British Indian Ocean Territory</option>
                                                            <option value=\"BN\">Brunei Darussalam</option>
                                                            <option value=\"BG\">Bulgaria</option>
                                                            <option value=\"BF\">Burkina Faso</option>
                                                            <option value=\"BI\">Burundi</option>
                                                            <option value=\"KH\">Cambodia</option>
                                                            <option value=\"CM\">Cameroon</option>
                                                            <option value=\"CA\">Canada</option>
                                                            <option value=\"CV\">Cape Verde</option>
                                                            <option value=\"KY\">Cayman Islands</option>
                                                            <option value=\"CF\">Central African Republic</option>
                                                            <option value=\"TD\">Chad</option>
                                                            <option value=\"CL\">Chile</option>
                                                            <option value=\"CN\">China</option>
                                                            <option value=\"CX\">Christmas Island</option>
                                                            <option value=\"CC\">Cocos (Keeling) Islands</option>
                                                            <option value=\"CO\">Colombia</option>
                                                            <option value=\"KM\">Comoros</option>
                                                            <option value=\"CG\">Congo</option>
                                                            <option value=\"CD\">Congo, the Democratic Republic of the</option>
                                                            <option value=\"CK\">Cook Islands</option>
                                                            <option value=\"CR\">Costa Rica</option>
                                                            <option value=\"CI\">Cote d'Ivoire</option>
                                                            <option value=\"HR\">Croatia (Hrvatska)</option>
                                                            <option value=\"CU\">Cuba</option>
                                                            <option value=\"CY\">Cyprus</option>
                                                            <option value=\"CZ\">Czech Republic</option>
                                                            <option value=\"DK\">Denmark</option>
                                                            <option value=\"DJ\">Djibouti</option>
                                                            <option value=\"DM\">Dominica</option>
                                                            <option value=\"DO\">Dominican Republic</option>
                                                            <option value=\"EC\">Ecuador</option>
                                                            <option value=\"EG\">Egypt</option>
                                                            <option value=\"SV\">El Salvador</option>
                                                            <option value=\"GQ\">Equatorial Guinea</option>
                                                            <option value=\"ER\">Eritrea</option>
                                                            <option value=\"EE\">Estonia</option>
                                                            <option value=\"ET\">Ethiopia</option>
                                                            <option value=\"FK\">Falkland Islands (Malvinas)</option>
                                                            <option value=\"FO\">Faroe Islands</option>
                                                            <option value=\"FJ\">Fiji</option>
                                                            <option value=\"FI\">Finland</option>
                                                            <option value=\"FR\">France</option>
                                                            <option value=\"GF\">French Guiana</option>
                                                            <option value=\"PF\">French Polynesia</option>
                                                            <option value=\"TF\">French Southern Territories</option>
                                                            <option value=\"GA\">Gabon</option>
                                                            <option value=\"GM\">Gambia</option>
                                                            <option value=\"GE\">Georgia</option>
                                                            <option value=\"DE\">Germany</option>
                                                            <option value=\"GH\">Ghana</option>
                                                            <option value=\"GI\">Gibraltar</option>
                                                            <option value=\"GR\">Greece</option>
                                                            <option value=\"GL\">Greenland</option>
                                                            <option value=\"GD\">Grenada</option>
                                                            <option value=\"GP\">Guadeloupe</option>
                                                            <option value=\"GU\">Guam</option>
                                                            <option value=\"GT\">Guatemala</option>
                                                            <option value=\"GN\">Guinea</option>
                                                            <option value=\"GW\">Guinea-Bissau</option>
                                                            <option value=\"GY\">Guyana</option>
                                                            <option value=\"HT\">Haiti</option>
                                                            <option value=\"HM\">Heard and Mc Donald Islands</option>
                                                            <option value=\"VA\">Holy See (Vatican City State)</option>
                                                            <option value=\"HN\">Honduras</option>
                                                            <option value=\"HK\">Hong Kong</option>
                                                            <option value=\"HU\">Hungary</option>
                                                            <option value=\"IS\">Iceland</option>
                                                            <option value=\"IN\">India</option>
                                                            <option value=\"ID\">Indonesia</option>
                                                            <option value=\"IR\">Iran (Islamic Republic of)</option>
                                                            <option value=\"IQ\">Iraq</option>
                                                            <option value=\"IE\">Ireland</option>
                                                            <option value=\"IL\">Israel</option>
                                                            <option value=\"IT\">Italy</option>
                                                            <option value=\"JM\">Jamaica</option>
                                                            <option value=\"JP\">Japan</option>
                                                            <option value=\"JO\">Jordan</option>
                                                            <option value=\"KZ\">Kazakhstan</option>
                                                            <option value=\"KE\">Kenya</option>
                                                            <option value=\"KI\">Kiribati</option>
                                                            <option value=\"KP\">Korea, Democratic People's Republic of</option>
                                                            <option value=\"KR\">Korea, Republic of</option>
                                                            <option value=\"KW\">Kuwait</option>
                                                            <option value=\"KG\">Kyrgyzstan</option>
                                                            <option value=\"LA\">Lao People's Democratic Republic</option>
                                                            <option value=\"LV\">Latvia</option>
                                                            <option value=\"LB\">Lebanon</option>
                                                            <option value=\"LS\">Lesotho</option>
                                                            <option value=\"LR\">Liberia</option>
                                                            <option value=\"LY\">Libyan Arab Jamahiriya</option>
                                                            <option value=\"LI\">Liechtenstein</option>
                                                            <option value=\"LT\">Lithuania</option>
                                                            <option value=\"LU\">Luxembourg</option>
                                                            <option value=\"MO\">Macau</option>
                                                            <option value=\"MK\">Macedonia, The Former Yugoslav Republic of</option>
                                                            <option value=\"MG\">Madagascar</option>
                                                            <option value=\"MW\">Malawi</option>
                                                            <option value=\"MY\">Malaysia</option>
                                                            <option value=\"MV\">Maldives</option>
                                                            <option value=\"ML\">Mali</option>
                                                            <option value=\"MT\">Malta</option>
                                                            <option value=\"MH\">Marshall Islands</option>
                                                            <option value=\"MQ\">Martinique</option>
                                                            <option value=\"MR\">Mauritania</option>
                                                            <option value=\"MU\">Mauritius</option>
                                                            <option value=\"YT\">Mayotte</option>
                                                            <option value=\"MX\">Mexico</option>
                                                            <option value=\"FM\">Micronesia, Federated States of</option>
                                                            <option value=\"MD\">Moldova, Republic of</option>
                                                            <option value=\"MC\">Monaco</option>
                                                            <option value=\"MN\">Mongolia</option>
                                                            <option value=\"MS\">Montserrat</option>
                                                            <option value=\"MA\">Morocco</option>
                                                            <option value=\"MZ\">Mozambique</option>
                                                            <option value=\"MM\">Myanmar</option>
                                                            <option value=\"NA\">Namibia</option>
                                                            <option value=\"NR\">Nauru</option>
                                                            <option value=\"NP\">Nepal</option>
                                                            <option value=\"NL\">Netherlands</option>
                                                            <option value=\"AN\">Netherlands Antilles</option>
                                                            <option value=\"NC\">New Caledonia</option>
                                                            <option value=\"NZ\">New Zealand</option>
                                                            <option value=\"NI\">Nicaragua</option>
                                                            <option value=\"NE\">Niger</option>
                                                            <option value=\"NG\">Nigeria</option>
                                                            <option value=\"NU\">Niue</option>
                                                            <option value=\"NF\">Norfolk Island</option>
                                                            <option value=\"MP\">Northern Mariana Islands</option>
                                                            <option value=\"NO\">Norway</option>
                                                            <option value=\"OM\">Oman</option>
                                                            <option value=\"PK\">Pakistan</option>
                                                            <option value=\"PW\">Palau</option>
                                                            <option value=\"PA\">Panama</option>
                                                            <option value=\"PG\">Papua New Guinea</option>
                                                            <option value=\"PY\">Paraguay</option>
                                                            <option value=\"PE\">Peru</option>
                                                            <option value=\"PH\">Philippines</option>
                                                            <option value=\"PN\">Pitcairn</option>
                                                            <option value=\"PL\">Poland</option>
                                                            <option value=\"PT\">Portugal</option>
                                                            <option value=\"PR\">Puerto Rico</option>
                                                            <option value=\"QA\">Qatar</option>
                                                            <option value=\"RE\">Reunion</option>
                                                            <option value=\"RO\">Romania</option>
                                                            <option value=\"RU\">Russian Federation</option>
                                                            <option value=\"RW\">Rwanda</option>
                                                            <option value=\"KN\">Saint Kitts and Nevis</option>
                                                            <option value=\"LC\">Saint LUCIA</option>
                                                            <option value=\"VC\">Saint Vincent and the Grenadines</option>
                                                            <option value=\"WS\">Samoa</option>
                                                            <option value=\"SM\">San Marino</option>
                                                            <option value=\"ST\">Sao Tome and Principe</option>
                                                            <option value=\"SA\">Saudi Arabia</option>
                                                            <option value=\"SN\">Senegal</option>
                                                            <option value=\"SC\">Seychelles</option>
                                                            <option value=\"SL\">Sierra Leone</option>
                                                            <option value=\"SG\">Singapore</option>
                                                            <option value=\"SK\">Slovakia (Slovak Republic)</option>
                                                            <option value=\"SI\">Slovenia</option>
                                                            <option value=\"SB\">Solomon Islands</option>
                                                            <option value=\"SO\">Somalia</option>
                                                            <option value=\"ZA\">South Africa</option>
                                                            <option value=\"GS\">South Georgia and the South Sandwich Islands</option>
                                                            <option value=\"ES\">Spain</option>
                                                            <option value=\"LK\">Sri Lanka</option>
                                                            <option value=\"SH\">St. Helena</option>
                                                            <option value=\"PM\">St. Pierre and Miquelon</option>
                                                            <option value=\"SD\">Sudan</option>
                                                            <option value=\"SR\">Suriname</option>
                                                            <option value=\"SJ\">Svalbard and Jan Mayen Islands</option>
                                                            <option value=\"SZ\">Swaziland</option>
                                                            <option value=\"SE\">Sweden</option>
                                                            <option value=\"CH\">Switzerland</option>
                                                            <option value=\"SY\">Syrian Arab Republic</option>
                                                            <option value=\"TW\">Taiwan, Province of China</option>
                                                            <option value=\"TJ\">Tajikistan</option>
                                                            <option value=\"TZ\">Tanzania, United Republic of</option>
                                                            <option value=\"TH\">Thailand</option>
                                                            <option value=\"TG\">Togo</option>
                                                            <option value=\"TK\">Tokelau</option>
                                                            <option value=\"TO\">Tonga</option>
                                                            <option value=\"TT\">Trinidad and Tobago</option>
                                                            <option value=\"TN\">Tunisia</option>
                                                            <option value=\"TR\">Turkey</option>
                                                            <option value=\"TM\">Turkmenistan</option>
                                                            <option value=\"TC\">Turks and Caicos Islands</option>
                                                            <option value=\"TV\">Tuvalu</option>
                                                            <option value=\"UG\">Uganda</option>
                                                            <option value=\"UA\">Ukraine</option>
                                                            <option value=\"AE\">United Arab Emirates</option>
                                                            <option value=\"GB\">United Kingdom</option>
                                                            <option value=\"US\">United States</option>
                                                            <option value=\"UM\">United States Minor Outlying Islands</option>
                                                            <option value=\"UY\">Uruguay</option>
                                                            <option value=\"UZ\">Uzbekistan</option>
                                                            <option value=\"VU\">Vanuatu</option>
                                                            <option value=\"VE\">Venezuela</option>
                                                            <option value=\"VN\">Viet Nam</option>
                                                            <option value=\"VG\">Virgin Islands (British)</option>
                                                            <option value=\"VI\">Virgin Islands (U.S.)</option>
                                                            <option value=\"WF\">Wallis and Futuna Islands</option>
                                                            <option value=\"EH\">Western Sahara</option>
                                                            <option value=\"YE\">Yemen</option>
                                                            <option value=\"ZM\">Zambia</option>
                                                            <option value=\"ZW\">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Disabled Option</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\" multiple>
                                                            <option>Mustard</option>
                                                            <option disabled>Ketchup</option>
                                                            <option>Relish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Option Devider</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\">
                                                            <option>Mustard</option>
                                                            <option>Ketchup</option>
                                                            <option>Relish</option>
                                                            <option>Mayonnaise</option>
                                                            <option data-divider=\"true\"></option>
                                                            <option>Barbecue Sauce</option>
                                                            <option>Salad Dressing</option>
                                                            <option>Tabasco</option>
                                                            <option>Salsa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Custom Sizes</label>
                                                    <div class=\"col-md-9\">
                                                        <div class=\"margin-bottom-10\">
                                                            <select class=\"bs-select form-control\" data-width=\"125px\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select> 125px </div>
                                                        <div class=\"margin-bottom-10\">
                                                            <select class=\"bs-select form-control input-medium\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select> .input-medium </div>
                                                        <div class=\"margin-bottom-10\">
                                                            <select class=\"bs-select form-control\" data-width=\"75%\">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select> 75% </div>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Sub Text</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\" data-show-subtext=\"true\">
                                                            <option data-subtext=\"French's\">Mustard</option>
                                                            <option data-subtext=\"Heinz\">Ketchup</option>
                                                            <option data-subtext=\"Sweet\">Relish</option>
                                                            <option data-subtext=\"Miracle Whip\">Mayonnaise</option>
                                                            <option data-divider=\"true\"></option>
                                                            <option data-subtext=\"Honey\">Barbecue Sauce</option>
                                                            <option data-subtext=\"Ranch\">Salad Dressing</option>
                                                            <option data-subtext=\"Sweet &amp; Spicy\">Tabasco</option>
                                                            <option data-subtext=\"Chunky\">Salsa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"control-label col-md-3\">Fontawesome Icons</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\" data-show-subtext=\"true\">
                                                            <option data-icon=\"fa-glass icon-success\">Mustard</option>
                                                            <option data-icon=\"fa-heart icon-info\">Ketchup</option>
                                                            <option data-icon=\"fa-film icon-default\">Relish</option>
                                                            <option data-icon=\"fa-home icon-warning\">Mayonnaise</option>
                                                            <option data-icon=\"fa-user icon-danger\">Barbecue Sauce</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group \">
                                                    <label class=\"control-label col-md-3\">HTML content</label>
                                                    <div class=\"col-md-4\">
                                                        <select class=\"bs-select form-control\" data-show-subtext=\"true\">
                                                            <option data-content=\"Mustard <span class='label lable-sm label-success'>fresh </span>
\t\t\t\t\t\t\t\t\t\t\">Mustard</option>
                                                            <option data-content=\"Ketchup <span class='label lable-sm label-default'>tasty </span>
\t\t\t\t\t\t\t\t\t\t\">Ketchup</option>
                                                            <option data-content=\"Relish <span class='label lable-sm label-warning'>warning </span>
\t\t\t\t\t\t\t\t\t\t\">Relish</option>
                                                            <option data-content=\"Mayonnaise <span class='label lable-sm label-info'>organic </span>
\t\t\t\t\t\t\t\t\t\t\">Mayonnaise</option>
                                                            <option data-content=\"Barbecue sauce <span class='label lable-sm label-danger'>hot </span>
\t\t\t\t\t\t\t\t\t\t\">Barbecue Sauce</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group last\">
                                                    <label class=\"control-label col-md-3\"></label>
                                                    <div class=\"col-md-4\">
                                                        <a class=\"btn green btn-outline sbold upppercase\" href=\"#form_modal11\" data-toggle=\"modal\"> View in modal
                                                            <i class=\"fa fa-share\"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-actions\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-offset-3 col-md-9\">
                                                        <button type=\"submit\" class=\"btn green\">
                                                            <i class=\"fa fa-check\"></i> Submit</button>
                                                        <button type=\"button\" class=\"btn default\">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END FORM-->
                                        <div id=\"form_modal11\" class=\"modal fade\" role=\"dialog\" aria-labelledby=\"myModalLabel10\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                                                        <h4 class=\"modal-title\">Sample Form in Modal</h4>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <form action=\"#\" class=\"form-horizontal\" role=\"form\">
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label col-md-4\">Default</label>
                                                                <div class=\"col-md-8\">
                                                                    <select class=\"bs-select form-control\">
                                                                        <option>Mustard</option>
                                                                        <option>Ketchup</option>
                                                                        <option>Relish</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label col-md-4\">Disabled</label>
                                                                <div class=\"col-md-8\">
                                                                    <select class=\"bs-select form-control\" disabled>
                                                                        <option>Mustard</option>
                                                                        <option>Ketchup</option>
                                                                        <option>Relish</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"form-group\">
                                                                <label class=\"control-label col-md-4\">Grouped</label>
                                                                <div class=\"col-md-8\">
                                                                    <select class=\"bs-select form-control\">
                                                                        <optgroup label=\"Picnic\">
                                                                            <option>Mustard</option>
                                                                            <option>Ketchup</option>
                                                                            <option>Relish</option>
                                                                        </optgroup>
                                                                        <optgroup label=\"Camping\">
                                                                            <option>Tent</option>
                                                                            <option>Flashlight</option>
                                                                            <option>Toilet Paper</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button class=\"btn grey-salsa btn-outline\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
                                                        <button class=\"btn green\" data-dismiss=\"modal\">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET-->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
                <a href=\"javascript:;\" class=\"page-quick-sidebar-toggler\">
                    <i class=\"icon-login\"></i>
                </a>
                <div class=\"page-quick-sidebar-wrapper\" data-close-on-body-click=\"false\">
                    <div class=\"page-quick-sidebar\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\">
                                <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_1\" data-toggle=\"tab\"> Users
                                    <span class=\"badge badge-danger\">2</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_2\" data-toggle=\"tab\"> Alerts
                                    <span class=\"badge badge-success\">7</span>
                                </a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> More
                                    <i class=\"fa fa-angle-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu pull-right\">
                                    <li>
                                        <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                            <i class=\"icon-bell\"></i> Alerts </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                            <i class=\"icon-info\"></i> Notifications </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                            <i class=\"icon-speech\"></i> Activities </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                            <i class=\"icon-settings\"></i> Settings </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active page-quick-sidebar-chat\" id=\"quick_sidebar_tab_1\">
                                <div class=\"page-quick-sidebar-chat-users\" data-rail-color=\"#ddd\" data-wrapper-class=\"page-quick-sidebar-list\">
                                    <h3 class=\"list-heading\">Staff</h3>
                                    <ul class=\"media-list list-items\">
                                        <li class=\"media\">
                                            <div class=\"media-status\">
                                                <span class=\"badge badge-success\">8</span>
                                            </div>
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar3.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Bob Nilson</h4>
                                                <div class=\"media-heading-sub\"> Project Manager </div>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar1.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Nick Larson</h4>
                                                <div class=\"media-heading-sub\"> Art Director </div>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <div class=\"media-status\">
                                                <span class=\"badge badge-danger\">3</span>
                                            </div>
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar4.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Deon Hubert</h4>
                                                <div class=\"media-heading-sub\"> CTO </div>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar2.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Ella Wong</h4>
                                                <div class=\"media-heading-sub\"> CEO </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class=\"list-heading\">Customers</h3>
                                    <ul class=\"media-list list-items\">
                                        <li class=\"media\">
                                            <div class=\"media-status\">
                                                <span class=\"badge badge-warning\">2</span>
                                            </div>
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar6.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Lara Kunis</h4>
                                                <div class=\"media-heading-sub\"> CEO, Loop Inc </div>
                                                <div class=\"media-heading-small\"> Last seen 03:10 AM </div>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <div class=\"media-status\">
                                                <span class=\"label label-sm label-success\">new</span>
                                            </div>
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar7.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Ernie Kyllonen</h4>
                                                <div class=\"media-heading-sub\"> Project Manager,
                                                    <br> SmartBizz PTL </div>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar8.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Lisa Stone</h4>
                                                <div class=\"media-heading-sub\"> CTO, Keort Inc </div>
                                                <div class=\"media-heading-small\"> Last seen 13:10 PM </div>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <div class=\"media-status\">
                                                <span class=\"badge badge-success\">7</span>
                                            </div>
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar9.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Deon Portalatin</h4>
                                                <div class=\"media-heading-sub\"> CFO, H&D LTD </div>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar10.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Irina Savikova</h4>
                                                <div class=\"media-heading-sub\"> CEO, Tizda Motors Inc </div>
                                            </div>
                                        </li>
                                        <li class=\"media\">
                                            <div class=\"media-status\">
                                                <span class=\"badge badge-danger\">4</span>
                                            </div>
                                            <img class=\"media-object\" src=\"../assets/layouts/layout/img/avatar11.jpg\" alt=\"...\">
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Maria Gomez</h4>
                                                <div class=\"media-heading-sub\"> Manager, Infomatic Inc </div>
                                                <div class=\"media-heading-small\"> Last seen 03:10 AM </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"page-quick-sidebar-item\">
                                    <div class=\"page-quick-sidebar-chat-user\">
                                        <div class=\"page-quick-sidebar-nav\">
                                            <a href=\"javascript:;\" class=\"page-quick-sidebar-back-to-list\">
                                                <i class=\"icon-arrow-left\"></i>Back</a>
                                        </div>
                                        <div class=\"page-quick-sidebar-chat-user-messages\">
                                            <div class=\"post out\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar3.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                    <span class=\"datetime\">20:15</span>
                                                    <span class=\"body\"> When could you send me the report ? </span>
                                                </div>
                                            </div>
                                            <div class=\"post in\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar2.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                    <span class=\"datetime\">20:15</span>
                                                    <span class=\"body\"> Its almost done. I will be sending it shortly </span>
                                                </div>
                                            </div>
                                            <div class=\"post out\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar3.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                    <span class=\"datetime\">20:15</span>
                                                    <span class=\"body\"> Alright. Thanks! :) </span>
                                                </div>
                                            </div>
                                            <div class=\"post in\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar2.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                    <span class=\"datetime\">20:16</span>
                                                    <span class=\"body\"> You are most welcome. Sorry for the delay. </span>
                                                </div>
                                            </div>
                                            <div class=\"post out\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar3.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                    <span class=\"datetime\">20:17</span>
                                                    <span class=\"body\"> No probs. Just take your time :) </span>
                                                </div>
                                            </div>
                                            <div class=\"post in\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar2.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                    <span class=\"datetime\">20:40</span>
                                                    <span class=\"body\"> Alright. I just emailed it to you. </span>
                                                </div>
                                            </div>
                                            <div class=\"post out\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar3.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                    <span class=\"datetime\">20:17</span>
                                                    <span class=\"body\"> Great! Thanks. Will check it right away. </span>
                                                </div>
                                            </div>
                                            <div class=\"post in\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar2.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                    <span class=\"datetime\">20:40</span>
                                                    <span class=\"body\"> Please let me know if you have any comment. </span>
                                                </div>
                                            </div>
                                            <div class=\"post out\">
                                                <img class=\"avatar\" alt=\"\" src=\"../assets/layouts/layout/img/avatar3.jpg\" />
                                                <div class=\"message\">
                                                    <span class=\"arrow\"></span>
                                                    <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                    <span class=\"datetime\">20:17</span>
                                                    <span class=\"body\"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"page-quick-sidebar-chat-user-form\">
                                            <div class=\"input-group\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Type a message here...\">
                                                <div class=\"input-group-btn\">
                                                    <button type=\"button\" class=\"btn green\">
                                                        <i class=\"icon-paper-clip\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane page-quick-sidebar-alerts\" id=\"quick_sidebar_tab_2\">
                                <div class=\"page-quick-sidebar-alerts-list\">
                                    <h3 class=\"list-heading\">General</h3>
                                    <ul class=\"feeds list-items\">
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-info\">
                                                            <i class=\"fa fa-check\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> You have 4 pending tasks.
                                                            <span class=\"label label-sm label-warning \"> Take action
                                                                <i class=\"fa fa-share\"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-success\">
                                                                <i class=\"fa fa-bar-chart-o\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> Finance Report for year 2013 has been released. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 20 mins </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-danger\">
                                                            <i class=\"fa fa-user\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 24 mins </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-info\">
                                                            <i class=\"fa fa-shopping-cart\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New order received with
                                                            <span class=\"label label-sm label-success\"> Reference Number: DR23923 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 30 mins </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-user\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 24 mins </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-info\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> Web server hardware needs to be upgraded.
                                                            <span class=\"label label-sm label-warning\"> Overdue </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 2 hours </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-default\">
                                                                <i class=\"fa fa-briefcase\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> IPO Report for year 2013 has been released. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 20 mins </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class=\"list-heading\">System</h3>
                                    <ul class=\"feeds list-items\">
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-info\">
                                                            <i class=\"fa fa-check\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> You have 4 pending tasks.
                                                            <span class=\"label label-sm label-warning \"> Take action
                                                                <i class=\"fa fa-share\"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-danger\">
                                                                <i class=\"fa fa-bar-chart-o\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> Finance Report for year 2013 has been released. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 20 mins </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-default\">
                                                            <i class=\"fa fa-user\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 24 mins </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-info\">
                                                            <i class=\"fa fa-shopping-cart\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New order received with
                                                            <span class=\"label label-sm label-success\"> Reference Number: DR23923 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 30 mins </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-user\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 24 mins </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-warning\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> Web server hardware needs to be upgraded.
                                                            <span class=\"label label-sm label-default \"> Overdue </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 2 hours </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-info\">
                                                                <i class=\"fa fa-briefcase\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> IPO Report for year 2013 has been released. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 20 mins </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"tab-pane page-quick-sidebar-settings\" id=\"quick_sidebar_tab_3\">
                                <div class=\"page-quick-sidebar-settings-list\">
                                    <h3 class=\"list-heading\">General Settings</h3>
                                    <ul class=\"list-items borderless\">
                                        <li> Enable Notifications
                                            <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                        <li> Allow Tracking
                                            <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"info\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                        <li> Log Errors
                                            <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                        <li> Auto Sumbit Issues
                                            <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                        <li> Enable SMS Alerts
                                            <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    </ul>
                                    <h3 class=\"list-heading\">System Settings</h3>
                                    <ul class=\"list-items borderless\">
                                        <li> Security Level
                                            <select class=\"form-control input-inline input-sm input-small\">
                                                <option value=\"1\">Normal</option>
                                                <option value=\"2\" selected>Medium</option>
                                                <option value=\"e\">High</option>
                                            </select>
                                        </li>
                                        <li> Failed Email Attempts
                                            <input class=\"form-control input-inline input-sm input-small\" value=\"5\" /> </li>
                                        <li> Secondary SMTP Port
                                            <input class=\"form-control input-inline input-sm input-small\" value=\"3560\" /> </li>
                                        <li> Notify On System Error
                                            <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                        <li> Notify On SMTP Error
                                            <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    </ul>
                                    <div class=\"inner-content\">
                                        <button class=\"btn btn-success\">
                                            <i class=\"icon-settings\"></i> Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class=\"page-footer\">
                <div class=\"page-footer-inner\"> 2016 &copy; Metronic Theme By
                    <a target=\"_blank\" href=\"http://keenthemes.com/\">Keenthemes</a> &nbsp;|&nbsp;
                    <a href=\"http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes\" title=\"Purchase Metronic just for 27\$ and get lifetime updates for free\" target=\"_blank\">Purchase Metronic!</a>
                </div>
                <div class=\"scroll-to-top\">
                    <i class=\"icon-arrow-up\"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <!-- BEGIN QUICK NAV -->
        <nav class=\"quick-nav\">
            <a class=\"quick-nav-trigger\" href=\"#0\">
                <span aria-hidden=\"true\"></span>
            </a>
            <ul>
                <li>
                    <a href=\"https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes\" target=\"_blank\" class=\"active\">
                        <span>Purchase Metronic</span>
                        <i class=\"icon-basket\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes\" target=\"_blank\">
                        <span>Customer Reviews</span>
                        <i class=\"icon-users\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"http://keenthemes.com/showcast/\" target=\"_blank\">
                        <span>Showcase</span>
                        <i class=\"icon-user\"></i>
                    </a>
                </li>
                <li>
                    <a href=\"http://keenthemes.com/metronic-theme/changelog/\" target=\"_blank\">
                        <span>Changelog</span>
                        <i class=\"icon-graph\"></i>
                    </a>
                </li>
            </ul>
            <span aria-hidden=\"true\" class=\"quick-nav-bg\"></span>
        </nav>
        <div class=\"quick-nav-overlay\"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src=\"../assets/global/plugins/respond.min.js\"></script>
<script src=\"../assets/global/plugins/excanvas.min.js\"></script> 
<script src=\"../assets/global/plugins/ie8.fix.min.js\"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src=\"../assets/global/plugins/jquery.min.js\" type=\"text/javascript\"></script>
        <script src=\"../assets/global/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
        <script src=\"../assets/global/plugins/js.cookie.min.js\" type=\"text/javascript\"></script>
        <script src=\"../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js\" type=\"text/javascript\"></script>
        <script src=\"../assets/global/plugins/jquery.blockui.min.js\" type=\"text/javascript\"></script>
        <script src=\"../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=\"../assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"../assets/global/scripts/app.min.js\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"../assets/pages/scripts/components-bootstrap-select.min.js\" type=\"text/javascript\"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"../assets/layouts/layout/scripts/layout.min.js\" type=\"text/javascript\"></script>
        <script src=\"../assets/layouts/layout/scripts/demo.min.js\" type=\"text/javascript\"></script>
        <script src=\"../assets/layouts/global/scripts/quick-sidebar.min.js\" type=\"text/javascript\"></script>
        <script src=\"../assets/layouts/global/scripts/quick-nav.min.js\" type=\"text/javascript\"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    <!-- Google Code for Universal Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37564768-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- End -->

<!-- Google Tag Manager -->
<noscript><iframe src=\"http://www.googletagmanager.com/ns.html?id=GTM-W276BJ\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W276BJ');</script>
<!-- End -->
</body>



<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_1/components_bootstrap_select.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2016 17:51:07 GMT -->
</html>", "template_1/components_bootstrap_select.html", "/var/www/html/hom/app/Resources/views/template_1/components_bootstrap_select.html");
    }
}

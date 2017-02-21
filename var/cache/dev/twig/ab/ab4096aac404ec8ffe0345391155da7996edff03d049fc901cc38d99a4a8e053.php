<?php

/* template_1/layout_ajax_page_content_5.html */
class __TwigTemplate_21e5b3cb066dd1f43c7bfd03f34e2b0da67691939bdcd6ca203eef7983351dd1 extends Twig_Template
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
        $__internal_ac417f028415d84e237a15aa176b0517257fb2358a47d3f30b622c6bca3ada41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac417f028415d84e237a15aa176b0517257fb2358a47d3f30b622c6bca3ada41->enter($__internal_ac417f028415d84e237a15aa176b0517257fb2358a47d3f30b622c6bca3ada41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template_1/layout_ajax_page_content_5.html"));

        $__internal_6082d4f3dbb14f8f7501206a33e67e9769e6b949e6e112a17681427d09318cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6082d4f3dbb14f8f7501206a33e67e9769e6b949e6e112a17681427d09318cc5->enter($__internal_6082d4f3dbb14f8f7501206a33e67e9769e6b949e6e112a17681427d09318cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template_1/layout_ajax_page_content_5.html"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-6\">
        <!-- BEGIN LABELS AND BADGES PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"icon-share font-red-sunglo\"></i>
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Labels & Badges</span>
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
            <div class=\"portlet-body\">
                <h4 class=\"block\">Labels & Badges Styles</h4>
                <table class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th> Class </th>
                            <th> Labels </th>
                            <th> Badges </th>
                            <th> Roundless Badges </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Default </td>
                            <td>
                                <span class=\"label label-default\"> Default </span>
                            </td>
                            <td>
                                <span class=\"badge badge-default\"> 5 </span>
                            </td>
                            <td>
                                <span class=\"badge badge-default badge-roundless\"> 3 </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Primary </td>
                            <td>
                                <span class=\"label label-primary\"> Primary </span>
                            </td>
                            <td>
                                <span class=\"badge badge-primary\"> 4 </span>
                            </td>
                            <td>
                                <span class=\"badge badge-primary badge-roundless\"> Hot </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Info </td>
                            <td>
                                <span class=\"label label-info\"> Info </span>
                            </td>
                            <td>
                                <span class=\"badge badge-info\"> 6 </span>
                            </td>
                            <td>
                                <span class=\"badge badge-info badge-roundless\"> New </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Success </td>
                            <td>
                                <span class=\"label label-success\"> Success </span>
                            </td>
                            <td>
                                <span class=\"badge badge-success\"> 1 </span>
                            </td>
                            <td>
                                <span class=\"badge badge-success badge-roundless\"> 2 </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Danger </td>
                            <td>
                                <span class=\"label label-danger\"> Danger </span>
                            </td>
                            <td>
                                <span class=\"badge badge-danger\"> 3 </span>
                            </td>
                            <td>
                                <span class=\"badge badge-danger badge-roundless\"> 5 </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Warning </td>
                            <td>
                                <span class=\"label label-warning\"> Warning </span>
                            </td>
                            <td>
                                <span class=\"badge badge-warning\"> 12 </span>
                            </td>
                            <td>
                                <span class=\"badge badge-warning badge-roundless\"> 3 </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h4 class=\"block\">Labels In Headings</h4>
                <div class=\"well\">
                    <h1>Example heading
                        <span class=\"label label-default\"> default </span>
                    </h1>
                    <h2>Example heading
                        <span class=\"label label-success\"> success </span>
                    </h2>
                    <h3>Example heading
                        <span class=\"label label-danger\"> danger </span>
                    </h3>
                    <h4 class=\"block\">Example heading
                        <span class=\"label label-info\"> info </span>
                    </h4>
                    <h4>Example heading
                        <span class=\"label label-warning\"> warning </span>
                    </h4>
                    <h6>Example heading
                        <span class=\"label label-primary\"> primary </span>
                    </h6>
                </div>
                <div class=\"clearfix\">
                    <h4 class=\"block\">Badges in Navs</h4>
                    <ul class=\"nav nav-pills\">
                        <li class=\"active\">
                            <a href=\"javascript:;\"> Home
                                <span class=\"badge1\"> 42 </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> Profile </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> Messages
                                <span class=\"badge badge-danger\"> 3 </span>
                            </a>
                        </li>
                    </ul>
                    <div class=\"clearfix margin-bottom-10\"> </div>
                    <ul class=\"nav nav-pills nav-stacked\" style=\"max-width: 260px;\">
                        <li class=\"active\">
                            <a href=\"javascript:;\">
                                <span class=\"badge badge-warning pull-right\"> 42 </span> Home </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> Profile </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\">
                                <span class=\"badge badge-success pull-right\"> 3 </span> Messages </a>
                        </li>
                    </ul>
                </div>
                <div class=\"clearfix\">
                    <h4 class=\"block\">Badges in Inline Dropdowns</h4>
                    <div class=\"dropdown inline clearfix\">
                        <!-- Link or button to toggle dropdown -->
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:;\"> Action
                                    <span class=\"badge badge-success\"> 2 </span>
                                </a>
                            </li>
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:;\"> Another action
                                    <span class=\"badge badge-warning\"> 5 </span>
                                </a>
                            </li>
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:;\"> Something here
                                    <span class=\"badge badge-danger\"> 7 </span>
                                </a>
                            </li>
                            <li role=\"presentation\" class=\"divider\"> </li>
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:;\"> Separated link
                                    <span class=\"badge badge-info\"> 12 </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"clearfix\"> </div>
                    <h4 class=\"block\">Badges in Button Dropdowns</h4>
                    <div class=\"btn-group \">
                        <button class=\"btn blue dropdown-toggle\" data-toggle=\"dropdown\">Open Me!
                            <i class=\"fa fa-angle-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:;\"> Action
                                    <span class=\"badge badge-success\"> 2 </span>
                                </a>
                            </li>
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:;\"> Another action
                                    <span class=\"badge badge-warning\"> 5 </span>
                                </a>
                            </li>
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:;\"> Something here
                                    <span class=\"badge badge-danger\"> 7 </span>
                                </a>
                            </li>
                            <li role=\"presentation\" class=\"divider\"> </li>
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:;\"> Separated link
                                    <span class=\"badge badge-info\"> 12 </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END LABELS AND BADGES PORTLET-->
    </div>
    <div class=\"col-md-6\">
        <!-- BEGIN PAGINATION PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"icon-share font-red-sunglo\"></i>
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Pagination</span>
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
            <div class=\"portlet-body\">
                <div>
                    <ul class=\"pagination pagination-lg\">
                        <li>
                            <a href=\"javascript:;\">
                                <i class=\"fa fa-angle-left\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 1 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 2 </a>
                        </li>
                        <li class=\"active\">
                            <a href=\"javascript:;\"> 3 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 4 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 5 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 6 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\">
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class=\"pagination\">
                        <li>
                            <a href=\"javascript:;\">
                                <i class=\"fa fa-angle-left\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 1 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 2 </a>
                        </li>
                        <li class=\"active\">
                            <a href=\"javascript:;\"> 3 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 4 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 5 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 6 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\">
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class=\"pagination pagination-sm\">
                        <li>
                            <a href=\"javascript:;\">
                                <i class=\"fa fa-angle-left\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 1 </a>
                        </li>
                        <li class=\"active\">
                            <a href=\"javascript:;\"> 2 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 3 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 4 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 5 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 6 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\">
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END PAGINATION PORTLET-->
    </div>
</div>";
        
        $__internal_ac417f028415d84e237a15aa176b0517257fb2358a47d3f30b622c6bca3ada41->leave($__internal_ac417f028415d84e237a15aa176b0517257fb2358a47d3f30b622c6bca3ada41_prof);

        
        $__internal_6082d4f3dbb14f8f7501206a33e67e9769e6b949e6e112a17681427d09318cc5->leave($__internal_6082d4f3dbb14f8f7501206a33e67e9769e6b949e6e112a17681427d09318cc5_prof);

    }

    public function getTemplateName()
    {
        return "template_1/layout_ajax_page_content_5.html";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-md-6\">
        <!-- BEGIN LABELS AND BADGES PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"icon-share font-red-sunglo\"></i>
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Labels & Badges</span>
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
            <div class=\"portlet-body\">
                <h4 class=\"block\">Labels & Badges Styles</h4>
                <table class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th> Class </th>
                            <th> Labels </th>
                            <th> Badges </th>
                            <th> Roundless Badges </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Default </td>
                            <td>
                                <span class=\"label label-default\"> Default </span>
                            </td>
                            <td>
                                <span class=\"badge badge-default\"> 5 </span>
                            </td>
                            <td>
                                <span class=\"badge badge-default badge-roundless\"> 3 </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Primary </td>
                            <td>
                                <span class=\"label label-primary\"> Primary </span>
                            </td>
                            <td>
                                <span class=\"badge badge-primary\"> 4 </span>
                            </td>
                            <td>
                                <span class=\"badge badge-primary badge-roundless\"> Hot </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Info </td>
                            <td>
                                <span class=\"label label-info\"> Info </span>
                            </td>
                            <td>
                                <span class=\"badge badge-info\"> 6 </span>
                            </td>
                            <td>
                                <span class=\"badge badge-info badge-roundless\"> New </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Success </td>
                            <td>
                                <span class=\"label label-success\"> Success </span>
                            </td>
                            <td>
                                <span class=\"badge badge-success\"> 1 </span>
                            </td>
                            <td>
                                <span class=\"badge badge-success badge-roundless\"> 2 </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Danger </td>
                            <td>
                                <span class=\"label label-danger\"> Danger </span>
                            </td>
                            <td>
                                <span class=\"badge badge-danger\"> 3 </span>
                            </td>
                            <td>
                                <span class=\"badge badge-danger badge-roundless\"> 5 </span>
                            </td>
                        </tr>
                        <tr>
                            <td> Warning </td>
                            <td>
                                <span class=\"label label-warning\"> Warning </span>
                            </td>
                            <td>
                                <span class=\"badge badge-warning\"> 12 </span>
                            </td>
                            <td>
                                <span class=\"badge badge-warning badge-roundless\"> 3 </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h4 class=\"block\">Labels In Headings</h4>
                <div class=\"well\">
                    <h1>Example heading
                        <span class=\"label label-default\"> default </span>
                    </h1>
                    <h2>Example heading
                        <span class=\"label label-success\"> success </span>
                    </h2>
                    <h3>Example heading
                        <span class=\"label label-danger\"> danger </span>
                    </h3>
                    <h4 class=\"block\">Example heading
                        <span class=\"label label-info\"> info </span>
                    </h4>
                    <h4>Example heading
                        <span class=\"label label-warning\"> warning </span>
                    </h4>
                    <h6>Example heading
                        <span class=\"label label-primary\"> primary </span>
                    </h6>
                </div>
                <div class=\"clearfix\">
                    <h4 class=\"block\">Badges in Navs</h4>
                    <ul class=\"nav nav-pills\">
                        <li class=\"active\">
                            <a href=\"javascript:;\"> Home
                                <span class=\"badge1\"> 42 </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> Profile </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> Messages
                                <span class=\"badge badge-danger\"> 3 </span>
                            </a>
                        </li>
                    </ul>
                    <div class=\"clearfix margin-bottom-10\"> </div>
                    <ul class=\"nav nav-pills nav-stacked\" style=\"max-width: 260px;\">
                        <li class=\"active\">
                            <a href=\"javascript:;\">
                                <span class=\"badge badge-warning pull-right\"> 42 </span> Home </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> Profile </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\">
                                <span class=\"badge badge-success pull-right\"> 3 </span> Messages </a>
                        </li>
                    </ul>
                </div>
                <div class=\"clearfix\">
                    <h4 class=\"block\">Badges in Inline Dropdowns</h4>
                    <div class=\"dropdown inline clearfix\">
                        <!-- Link or button to toggle dropdown -->
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:;\"> Action
                                    <span class=\"badge badge-success\"> 2 </span>
                                </a>
                            </li>
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:;\"> Another action
                                    <span class=\"badge badge-warning\"> 5 </span>
                                </a>
                            </li>
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:;\"> Something here
                                    <span class=\"badge badge-danger\"> 7 </span>
                                </a>
                            </li>
                            <li role=\"presentation\" class=\"divider\"> </li>
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:;\"> Separated link
                                    <span class=\"badge badge-info\"> 12 </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"clearfix\"> </div>
                    <h4 class=\"block\">Badges in Button Dropdowns</h4>
                    <div class=\"btn-group \">
                        <button class=\"btn blue dropdown-toggle\" data-toggle=\"dropdown\">Open Me!
                            <i class=\"fa fa-angle-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:;\"> Action
                                    <span class=\"badge badge-success\"> 2 </span>
                                </a>
                            </li>
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:;\"> Another action
                                    <span class=\"badge badge-warning\"> 5 </span>
                                </a>
                            </li>
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:;\"> Something here
                                    <span class=\"badge badge-danger\"> 7 </span>
                                </a>
                            </li>
                            <li role=\"presentation\" class=\"divider\"> </li>
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:;\"> Separated link
                                    <span class=\"badge badge-info\"> 12 </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END LABELS AND BADGES PORTLET-->
    </div>
    <div class=\"col-md-6\">
        <!-- BEGIN PAGINATION PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"icon-share font-red-sunglo\"></i>
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Pagination</span>
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
            <div class=\"portlet-body\">
                <div>
                    <ul class=\"pagination pagination-lg\">
                        <li>
                            <a href=\"javascript:;\">
                                <i class=\"fa fa-angle-left\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 1 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 2 </a>
                        </li>
                        <li class=\"active\">
                            <a href=\"javascript:;\"> 3 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 4 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 5 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 6 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\">
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class=\"pagination\">
                        <li>
                            <a href=\"javascript:;\">
                                <i class=\"fa fa-angle-left\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 1 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 2 </a>
                        </li>
                        <li class=\"active\">
                            <a href=\"javascript:;\"> 3 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 4 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 5 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 6 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\">
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class=\"pagination pagination-sm\">
                        <li>
                            <a href=\"javascript:;\">
                                <i class=\"fa fa-angle-left\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 1 </a>
                        </li>
                        <li class=\"active\">
                            <a href=\"javascript:;\"> 2 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 3 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 4 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 5 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"> 6 </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\">
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END PAGINATION PORTLET-->
    </div>
</div>", "template_1/layout_ajax_page_content_5.html", "/var/www/html/hom/app/Resources/views/template_1/layout_ajax_page_content_5.html");
    }
}

<?php

/* template_1/layout_ajax_page_content_1.html */
class __TwigTemplate_f299beb4eef2a3166ba4f7ea603974354ffbafc0867d6d5c2317ac0a784dfb19 extends Twig_Template
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
        $__internal_1607e96dce2b22410851344d3c64a7c742a733371e6d5643bba48c94ada7fcc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1607e96dce2b22410851344d3c64a7c742a733371e6d5643bba48c94ada7fcc9->enter($__internal_1607e96dce2b22410851344d3c64a7c742a733371e6d5643bba48c94ada7fcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template_1/layout_ajax_page_content_1.html"));

        $__internal_92c0d20c1c33fbf7f75181d86bb9f2bb6289bd13815cf835c00333b40ff5a2f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c0d20c1c33fbf7f75181d86bb9f2bb6289bd13815cf835c00333b40ff5a2f3->enter($__internal_92c0d20c1c33fbf7f75181d86bb9f2bb6289bd13815cf835c00333b40ff5a2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template_1/layout_ajax_page_content_1.html"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-6\">
        <!-- BEGIN PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"icon-share font-dark\"></i>
                    <span class=\"caption-subject font-dark bold uppercase\">Alerts</span>
                </div>
                <div class=\"actions\">
                    <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                        <i class=\"icon-cloud-upload\"></i>
                    </a>
                    <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                        <i class=\"icon-wrench\"></i>
                    </a>
                    <a class=\"btn btn-circle btn-icon-only btn-default fullscreen\" href=\"javascript:;\"> </a>
                    <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                        <i class=\"icon-trash\"></i>
                    </a>
                </div>
            </div>
            <div class=\"portlet-body\">
                <h4 class=\"block\">Default Alerts</h4>
                <div class=\"alert alert-success\">
                    <strong>Success!</strong> The page has been added. </div>
                <div class=\"alert alert-info\">
                    <strong>Info!</strong> You have 198 unread messages. </div>
                <div class=\"alert alert-warning\">
                    <strong>Warning!</strong> Your monthly traffic is reaching limit. </div>
                <div class=\"alert alert-danger\">
                    <strong>Error!</strong> The daily cronjob has failed. </div>
                <h4 class=\"block\">Dismissable Alerts</h4>
                <div class=\"alert alert-warning alert-dismissable\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>
                    <strong>Warning!</strong> Something went wrong. Please check. </div>
                <h4 class=\"block\">Links in alerts</h4>
                <div class=\"alert alert-success alert-dismissable\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>
                    <strong>WOW!</strong> Well done and everything looks OK.
                    <a href=\"#\" class=\"alert-link\"> Please check this one as well </a>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
    <div class=\"col-md-6\">
        <!-- BEGIN PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"icon-share font-dark\"></i>
                    <span class=\"caption-subject font-dark bold uppercase\">Inline Notifications</span>
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
                <div class=\"alert alert-block alert-danger fade in\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\"></button>
                    <h4 class=\"alert-heading\">Error!</h4>
                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                    <p>
                        <a class=\"btn red\" href=\"javascript:;\"> Do this </a>
                        <a class=\"btn blue\" href=\"javascript:;\"> Cancel </a>
                    </p>
                </div>
                <div class=\"alert alert-block alert-success fade in\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\"></button>
                    <h4 class=\"alert-heading\">Success!</h4>
                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                    <p>
                        <a class=\"btn green\" href=\"javascript:;\"> Do this </a>
                        <a class=\"btn btn-link\" href=\"javascript:;\"> Cancel </a>
                    </p>
                </div>
                <div class=\"alert alert-block alert-info fade in\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\"></button>
                    <h4 class=\"alert-heading\">Info!</h4>
                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                    <p>
                        <a class=\"btn purple\" href=\"javascript:;\"> Do this </a>
                        <a class=\"btn dark\" href=\"javascript:;\"> Cancel </a>
                    </p>
                </div>
                <div class=\"alert alert-block alert-warning fade in\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\"></button>
                    <h4 class=\"alert-heading\">Warning!</h4>
                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                    <p>
                        <a class=\"btn red\" href=\"javascript:;\"> Do this </a>
                        <a class=\"btn blue\" href=\"javascript:;\"> Cancel </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>";
        
        $__internal_1607e96dce2b22410851344d3c64a7c742a733371e6d5643bba48c94ada7fcc9->leave($__internal_1607e96dce2b22410851344d3c64a7c742a733371e6d5643bba48c94ada7fcc9_prof);

        
        $__internal_92c0d20c1c33fbf7f75181d86bb9f2bb6289bd13815cf835c00333b40ff5a2f3->leave($__internal_92c0d20c1c33fbf7f75181d86bb9f2bb6289bd13815cf835c00333b40ff5a2f3_prof);

    }

    public function getTemplateName()
    {
        return "template_1/layout_ajax_page_content_1.html";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-md-6\">
        <!-- BEGIN PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"icon-share font-dark\"></i>
                    <span class=\"caption-subject font-dark bold uppercase\">Alerts</span>
                </div>
                <div class=\"actions\">
                    <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                        <i class=\"icon-cloud-upload\"></i>
                    </a>
                    <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                        <i class=\"icon-wrench\"></i>
                    </a>
                    <a class=\"btn btn-circle btn-icon-only btn-default fullscreen\" href=\"javascript:;\"> </a>
                    <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                        <i class=\"icon-trash\"></i>
                    </a>
                </div>
            </div>
            <div class=\"portlet-body\">
                <h4 class=\"block\">Default Alerts</h4>
                <div class=\"alert alert-success\">
                    <strong>Success!</strong> The page has been added. </div>
                <div class=\"alert alert-info\">
                    <strong>Info!</strong> You have 198 unread messages. </div>
                <div class=\"alert alert-warning\">
                    <strong>Warning!</strong> Your monthly traffic is reaching limit. </div>
                <div class=\"alert alert-danger\">
                    <strong>Error!</strong> The daily cronjob has failed. </div>
                <h4 class=\"block\">Dismissable Alerts</h4>
                <div class=\"alert alert-warning alert-dismissable\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>
                    <strong>Warning!</strong> Something went wrong. Please check. </div>
                <h4 class=\"block\">Links in alerts</h4>
                <div class=\"alert alert-success alert-dismissable\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>
                    <strong>WOW!</strong> Well done and everything looks OK.
                    <a href=\"#\" class=\"alert-link\"> Please check this one as well </a>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
    <div class=\"col-md-6\">
        <!-- BEGIN PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"icon-share font-dark\"></i>
                    <span class=\"caption-subject font-dark bold uppercase\">Inline Notifications</span>
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
                <div class=\"alert alert-block alert-danger fade in\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\"></button>
                    <h4 class=\"alert-heading\">Error!</h4>
                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                    <p>
                        <a class=\"btn red\" href=\"javascript:;\"> Do this </a>
                        <a class=\"btn blue\" href=\"javascript:;\"> Cancel </a>
                    </p>
                </div>
                <div class=\"alert alert-block alert-success fade in\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\"></button>
                    <h4 class=\"alert-heading\">Success!</h4>
                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                    <p>
                        <a class=\"btn green\" href=\"javascript:;\"> Do this </a>
                        <a class=\"btn btn-link\" href=\"javascript:;\"> Cancel </a>
                    </p>
                </div>
                <div class=\"alert alert-block alert-info fade in\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\"></button>
                    <h4 class=\"alert-heading\">Info!</h4>
                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                    <p>
                        <a class=\"btn purple\" href=\"javascript:;\"> Do this </a>
                        <a class=\"btn dark\" href=\"javascript:;\"> Cancel </a>
                    </p>
                </div>
                <div class=\"alert alert-block alert-warning fade in\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\"></button>
                    <h4 class=\"alert-heading\">Warning!</h4>
                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                    <p>
                        <a class=\"btn red\" href=\"javascript:;\"> Do this </a>
                        <a class=\"btn blue\" href=\"javascript:;\"> Cancel </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>", "template_1/layout_ajax_page_content_1.html", "/var/www/html/hom/app/Resources/views/template_1/layout_ajax_page_content_1.html");
    }
}

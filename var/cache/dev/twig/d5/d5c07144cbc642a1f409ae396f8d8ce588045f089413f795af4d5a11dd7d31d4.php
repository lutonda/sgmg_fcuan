<?php

/* template_1/layout_ajax_page_content_4.html */
class __TwigTemplate_48e9ff0af323313fd88959d9d05b49b1c68a522b47a8c78de3eaa4531b52c5bd extends Twig_Template
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
        $__internal_bf206e4c9dee67fd2a0cd1f134b55f0523c26895674c30b3ab575f3608b10ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf206e4c9dee67fd2a0cd1f134b55f0523c26895674c30b3ab575f3608b10ff6->enter($__internal_bf206e4c9dee67fd2a0cd1f134b55f0523c26895674c30b3ab575f3608b10ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template_1/layout_ajax_page_content_4.html"));

        $__internal_c2e46bfa124aee249979bf2e93895810a3079a1236ff428586e4d8c2ea5787e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e46bfa124aee249979bf2e93895810a3079a1236ff428586e4d8c2ea5787e0->enter($__internal_c2e46bfa124aee249979bf2e93895810a3079a1236ff428586e4d8c2ea5787e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template_1/layout_ajax_page_content_4.html"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-6\">
        <!-- BEGIN PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"icon-edit font-dark\"></i>
                    <span class=\"caption-subject font-dark bold uppercase\">Notes</span>
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
                <div class=\"note note-success\">
                    <h4 class=\"block\">Success! Some Header Goes Here</h4>
                    <p> Duis mollis, est non commodo luctus, nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                </div>
                <div class=\"note note-info\">
                    <h4 class=\"block\">Info! Some Header Goes Here</h4>
                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, mattis consectetur purus sit amet eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                </div>
                <div class=\"note note-danger\">
                    <h4 class=\"block\">Danger! Some Header Goes Here</h4>
                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit mattis consectetur purus sit amet.\\ Cras mattis consectetur purus sit amet fermentum. </p>
                </div>
                <div class=\"note note-warning\">
                    <h4 class=\"block\">Warning! Some Header Goes Here</h4>
                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit mattis consectetur purus sit amet. Cras mattis consectetur purus sit amet fermentum. </p>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
    <div class=\"col-md-6\">
        <!-- BEGIN PROGRESS BARS PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"icon-share font-red-sunglo\"></i>
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Progress Bars</span>
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
                <div class=\"note note-warning\">
                    <h4 class=\"block\">Cross-browser compatibility</h4>
                    <p> Progress bars use CSS3 transitions and animations to achieve some of their effects. These features are not supported in Internet Explorer 9 and below or older versions of Firefox. Opera 12 does not support animations. </p>
                </div>
                <h3>Basic</h3>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                        <span class=\"sr-only\"> 40% Complete (success) </span>
                    </div>
                </div>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                        <span class=\"sr-only\"> 20% Complete </span>
                    </div>
                </div>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                        <span class=\"sr-only\"> 60% Complete (warning) </span>
                    </div>
                </div>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                        <span class=\"sr-only\"> 80% Complete </span>
                    </div>
                </div>
                <h3>Striped</h3>
                <div class=\"progress progress-striped\">
                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                        <span class=\"sr-only\"> 40% Complete (success) </span>
                    </div>
                </div>
                <div class=\"progress progress-striped\">
                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                        <span class=\"sr-only\"> 20% Complete </span>
                    </div>
                </div>
                <div class=\"progress progress-striped\">
                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                        <span class=\"sr-only\"> 60% Complete (warning) </span>
                    </div>
                </div>
                <div class=\"progress progress-striped\">
                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                        <span class=\"sr-only\"> 80% Complete (danger) </span>
                    </div>
                </div>
                <h3>Animated</h3>
                <div class=\"progress progress-striped active\">
                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                        <span class=\"sr-only\"> 40% Complete (success) </span>
                    </div>
                </div>
                <div class=\"progress progress-striped active\">
                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                        <span class=\"sr-only\"> 20% Complete </span>
                    </div>
                </div>
                <div class=\"progress progress-striped active\">
                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                        <span class=\"sr-only\"> 60% Complete (warning) </span>
                    </div>
                </div>
                <div class=\"progress progress-striped active\">
                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                        <span class=\"sr-only\"> 80% Complete (danger) </span>
                    </div>
                </div>
                <h3>Stacked</h3>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-success\" style=\"width: 35%\">
                        <span class=\"sr-only\"> 35% Complete (success) </span>
                    </div>
                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 20%\">
                        <span class=\"sr-only\"> 20% Complete (warning) </span>
                    </div>
                    <div class=\"progress-bar progress-bar-danger\" style=\"width: 10%\">
                        <span class=\"sr-only\"> 10% Complete (danger) </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PROGRESS BARS PORTLET-->
    </div>
</div>";
        
        $__internal_bf206e4c9dee67fd2a0cd1f134b55f0523c26895674c30b3ab575f3608b10ff6->leave($__internal_bf206e4c9dee67fd2a0cd1f134b55f0523c26895674c30b3ab575f3608b10ff6_prof);

        
        $__internal_c2e46bfa124aee249979bf2e93895810a3079a1236ff428586e4d8c2ea5787e0->leave($__internal_c2e46bfa124aee249979bf2e93895810a3079a1236ff428586e4d8c2ea5787e0_prof);

    }

    public function getTemplateName()
    {
        return "template_1/layout_ajax_page_content_4.html";
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
                    <i class=\"icon-edit font-dark\"></i>
                    <span class=\"caption-subject font-dark bold uppercase\">Notes</span>
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
                <div class=\"note note-success\">
                    <h4 class=\"block\">Success! Some Header Goes Here</h4>
                    <p> Duis mollis, est non commodo luctus, nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                </div>
                <div class=\"note note-info\">
                    <h4 class=\"block\">Info! Some Header Goes Here</h4>
                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, mattis consectetur purus sit amet eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                </div>
                <div class=\"note note-danger\">
                    <h4 class=\"block\">Danger! Some Header Goes Here</h4>
                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit mattis consectetur purus sit amet.\\ Cras mattis consectetur purus sit amet fermentum. </p>
                </div>
                <div class=\"note note-warning\">
                    <h4 class=\"block\">Warning! Some Header Goes Here</h4>
                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit mattis consectetur purus sit amet. Cras mattis consectetur purus sit amet fermentum. </p>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
    <div class=\"col-md-6\">
        <!-- BEGIN PROGRESS BARS PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"icon-share font-red-sunglo\"></i>
                    <span class=\"caption-subject font-red-sunglo bold uppercase\">Progress Bars</span>
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
                <div class=\"note note-warning\">
                    <h4 class=\"block\">Cross-browser compatibility</h4>
                    <p> Progress bars use CSS3 transitions and animations to achieve some of their effects. These features are not supported in Internet Explorer 9 and below or older versions of Firefox. Opera 12 does not support animations. </p>
                </div>
                <h3>Basic</h3>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                        <span class=\"sr-only\"> 40% Complete (success) </span>
                    </div>
                </div>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                        <span class=\"sr-only\"> 20% Complete </span>
                    </div>
                </div>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                        <span class=\"sr-only\"> 60% Complete (warning) </span>
                    </div>
                </div>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                        <span class=\"sr-only\"> 80% Complete </span>
                    </div>
                </div>
                <h3>Striped</h3>
                <div class=\"progress progress-striped\">
                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                        <span class=\"sr-only\"> 40% Complete (success) </span>
                    </div>
                </div>
                <div class=\"progress progress-striped\">
                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                        <span class=\"sr-only\"> 20% Complete </span>
                    </div>
                </div>
                <div class=\"progress progress-striped\">
                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                        <span class=\"sr-only\"> 60% Complete (warning) </span>
                    </div>
                </div>
                <div class=\"progress progress-striped\">
                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                        <span class=\"sr-only\"> 80% Complete (danger) </span>
                    </div>
                </div>
                <h3>Animated</h3>
                <div class=\"progress progress-striped active\">
                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                        <span class=\"sr-only\"> 40% Complete (success) </span>
                    </div>
                </div>
                <div class=\"progress progress-striped active\">
                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                        <span class=\"sr-only\"> 20% Complete </span>
                    </div>
                </div>
                <div class=\"progress progress-striped active\">
                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                        <span class=\"sr-only\"> 60% Complete (warning) </span>
                    </div>
                </div>
                <div class=\"progress progress-striped active\">
                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                        <span class=\"sr-only\"> 80% Complete (danger) </span>
                    </div>
                </div>
                <h3>Stacked</h3>
                <div class=\"progress\">
                    <div class=\"progress-bar progress-bar-success\" style=\"width: 35%\">
                        <span class=\"sr-only\"> 35% Complete (success) </span>
                    </div>
                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 20%\">
                        <span class=\"sr-only\"> 20% Complete (warning) </span>
                    </div>
                    <div class=\"progress-bar progress-bar-danger\" style=\"width: 10%\">
                        <span class=\"sr-only\"> 10% Complete (danger) </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PROGRESS BARS PORTLET-->
    </div>
</div>", "template_1/layout_ajax_page_content_4.html", "/var/www/html/hom/app/Resources/views/template_1/layout_ajax_page_content_4.html");
    }
}

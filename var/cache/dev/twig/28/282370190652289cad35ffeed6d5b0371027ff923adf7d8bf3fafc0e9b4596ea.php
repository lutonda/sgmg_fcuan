<?php

/* template_1/portlet_ajax_content_2.html */
class __TwigTemplate_648406035b30f2c769ca25655642585f97c535aa266cf111ea02059167bac4ef extends Twig_Template
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
        $__internal_81a5ec5aed7ba0a5630856beb2ea234d77799bf5851d7cc00b86f1e6d7e32b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a5ec5aed7ba0a5630856beb2ea234d77799bf5851d7cc00b86f1e6d7e32b7c->enter($__internal_81a5ec5aed7ba0a5630856beb2ea234d77799bf5851d7cc00b86f1e6d7e32b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template_1/portlet_ajax_content_2.html"));

        $__internal_ca5d142ef0beec649756b14f7007397905f5c94dd61ac7313feb7bc394afa63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5d142ef0beec649756b14f7007397905f5c94dd61ac7313feb7bc394afa63a->enter($__internal_ca5d142ef0beec649756b14f7007397905f5c94dd61ac7313feb7bc394afa63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template_1/portlet_ajax_content_2.html"));

        // line 1
        echo "<form role=\"form\">
    <div class=\"form-body\">
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Text</label>
            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter text\">
            <span class=\"help-block\"> A block of help text. </span>
        </div>
        <div class=\"form-group\">
            <label>Email Address</label>
            <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <i class=\"fa fa-envelope\"></i>
                </span>
                <input type=\"text\" class=\"form-control\" placeholder=\"Email Address\"> </div>
        </div>
        <div class=\"form-group last\">
            <label>Checkboxes</label>
            <div class=\"checkbox-list\">
                <label class=\"checkbox-inline\">
                    <input type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\"> Checkbox 1 </label>
                <label class=\"checkbox-inline\">
                    <input type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\"> Checkbox 2 </label>
            </div>
        </div>
    </div>
    <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn blue\">Submit</button>
        <button type=\"button\" class=\"btn default\">Cancel</button>
    </div>
</form>
<script>
    jQuery(document).ready(function()
    {
        App.initAjax();
    });
</script>";
        
        $__internal_81a5ec5aed7ba0a5630856beb2ea234d77799bf5851d7cc00b86f1e6d7e32b7c->leave($__internal_81a5ec5aed7ba0a5630856beb2ea234d77799bf5851d7cc00b86f1e6d7e32b7c_prof);

        
        $__internal_ca5d142ef0beec649756b14f7007397905f5c94dd61ac7313feb7bc394afa63a->leave($__internal_ca5d142ef0beec649756b14f7007397905f5c94dd61ac7313feb7bc394afa63a_prof);

    }

    public function getTemplateName()
    {
        return "template_1/portlet_ajax_content_2.html";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form role=\"form\">
    <div class=\"form-body\">
        <div class=\"form-group\">
            <label for=\"exampleInputEmail1\">Text</label>
            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter text\">
            <span class=\"help-block\"> A block of help text. </span>
        </div>
        <div class=\"form-group\">
            <label>Email Address</label>
            <div class=\"input-group\">
                <span class=\"input-group-addon\">
                    <i class=\"fa fa-envelope\"></i>
                </span>
                <input type=\"text\" class=\"form-control\" placeholder=\"Email Address\"> </div>
        </div>
        <div class=\"form-group last\">
            <label>Checkboxes</label>
            <div class=\"checkbox-list\">
                <label class=\"checkbox-inline\">
                    <input type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\"> Checkbox 1 </label>
                <label class=\"checkbox-inline\">
                    <input type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\"> Checkbox 2 </label>
            </div>
        </div>
    </div>
    <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn blue\">Submit</button>
        <button type=\"button\" class=\"btn default\">Cancel</button>
    </div>
</form>
<script>
    jQuery(document).ready(function()
    {
        App.initAjax();
    });
</script>", "template_1/portlet_ajax_content_2.html", "/var/www/html/hom/app/Resources/views/template_1/portlet_ajax_content_2.html");
    }
}

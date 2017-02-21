<?php

/* :amostra/api:elementosQuimicos_form.html.twig */
class __TwigTemplate_db0fee24dc076fb5b03b4024c57fb4fda7c891e1043540ec3e35d0a738cd8ae8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90f3011788e9e4396ae7c1fc0b315991848a37be24342e241f000f2557e2b3a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f3011788e9e4396ae7c1fc0b315991848a37be24342e241f000f2557e2b3a4->enter($__internal_90f3011788e9e4396ae7c1fc0b315991848a37be24342e241f000f2557e2b3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:elementosQuimicos_form.html.twig"));

        $__internal_5b1a52909a434afa53a8baf9ed5fe3c74540c3174739be74a16262a27c9dc24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1a52909a434afa53a8baf9ed5fe3c74540c3174739be74a16262a27c9dc24b->enter($__internal_5b1a52909a434afa53a8baf9ed5fe3c74540c3174739be74a16262a27c9dc24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:elementosQuimicos_form.html.twig"));

        // line 1
        $this->displayBlock('css', $context, $blocks);
        // line 4
        $this->displayBlock('javascripts', $context, $blocks);
        // line 8
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption font-dark\">
                    <i class=\"icon-settings font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> COR</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"elementosQuimicos\"  value=\"form\">
                    <div class=\"form-body\">
                        <div class=\"alert alert-danger display-hide\">
                            <button class=\"close\" data-close=\"alert\"></button>
                            You have some form errors. Please check below.
                        </div>
                        <div class=\"alert alert-success display-hide\">
                            <button class=\"close\" data-close=\"alert\"></button>
                            Your form validation is successful!
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Nome
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"id\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Elemeto"]) || array_key_exists("Elemeto", $context) ? $context["Elemeto"] : (function () { throw new Twig_Error_Runtime('Variable "Elemeto" does not exist.', 42, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Elemeto"]) || array_key_exists("Elemeto", $context) ? $context["Elemeto"] : (function () { throw new Twig_Error_Runtime('Variable "Elemeto" does not exist.', 44, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Simbolo
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"simbolo\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["Elemeto"]) || array_key_exists("Elemeto", $context) ? $context["Elemeto"] : (function () { throw new Twig_Error_Runtime('Variable "Elemeto" does not exist.', 54, $this->getSourceContext()); })()), "simbolo", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Estado
                                <span class=\"required\" aria-required=\"true\"> * </span>
                            </label>
                            <div class=\"col-md-4\">
                                <div class=\"bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-off bootstrap-switch-animate\"
                                     style=\"width: 66px;\">
                                    <div class=\"bootstrap-switch-container\" style=\"width: 96px; margin-left: -32px;\">
                                        <span class=\"bootstrap-switch-handle-on bootstrap-switch-primary\"
                                              style=\"width: 32px;\"><i class=\"fa fa-check\"></i></span><span
                                                class=\"bootstrap-switch-label\" style=\"width: 32px;\">&nbsp;</span><span
                                                class=\"bootstrap-switch-handle-off bootstrap-switch-default\"
                                                style=\"width: 32px;\"><i class=\"fa fa-times\"></i></span><input
                                                type=\"checkbox\" checked=\"\" class=\"make-switch switch-large\"
                                                data-label-icon=\"fa fa-fullscreen\"
                                                data-on-text=\"<i class='fa fa-check'></i>\"
                                                data-off-text=\"<i class='fa fa-times'></i>\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-actions\">
                        <div class=\"row\">
                            <div class=\"col-md-offset-3 col-md-9\">
                                <button type=\"submit\" class=\"btn green\">Submit</button>
                                <button type=\"button\" class=\"btn grey-salsa btn-outline\">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_90f3011788e9e4396ae7c1fc0b315991848a37be24342e241f000f2557e2b3a4->leave($__internal_90f3011788e9e4396ae7c1fc0b315991848a37be24342e241f000f2557e2b3a4_prof);

        
        $__internal_5b1a52909a434afa53a8baf9ed5fe3c74540c3174739be74a16262a27c9dc24b->leave($__internal_5b1a52909a434afa53a8baf9ed5fe3c74540c3174739be74a16262a27c9dc24b_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_651ad00b5af480887d83c37a9e7b6b8f9fe6a2456cc4506b9126b2a7e0c07548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651ad00b5af480887d83c37a9e7b6b8f9fe6a2456cc4506b9126b2a7e0c07548->enter($__internal_651ad00b5af480887d83c37a9e7b6b8f9fe6a2456cc4506b9126b2a7e0c07548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_0befefa20e3c35312975818509af682b40c7528bbefe6a6463a208f128cdb32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0befefa20e3c35312975818509af682b40c7528bbefe6a6463a208f128cdb32d->enter($__internal_0befefa20e3c35312975818509af682b40c7528bbefe6a6463a208f128cdb32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "
";
        
        $__internal_0befefa20e3c35312975818509af682b40c7528bbefe6a6463a208f128cdb32d->leave($__internal_0befefa20e3c35312975818509af682b40c7528bbefe6a6463a208f128cdb32d_prof);

        
        $__internal_651ad00b5af480887d83c37a9e7b6b8f9fe6a2456cc4506b9126b2a7e0c07548->leave($__internal_651ad00b5af480887d83c37a9e7b6b8f9fe6a2456cc4506b9126b2a7e0c07548_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce6c395df8f3fd5ca4261b3d5de6bcfad52455e225639dfc54caf1a7a3f58b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce6c395df8f3fd5ca4261b3d5de6bcfad52455e225639dfc54caf1a7a3f58b32->enter($__internal_ce6c395df8f3fd5ca4261b3d5de6bcfad52455e225639dfc54caf1a7a3f58b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_75de5c76c9fbf1255a51479e7c45fcb1d79a520acee59de9c4d53adf5377777d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75de5c76c9fbf1255a51479e7c45fcb1d79a520acee59de9c4d53adf5377777d->enter($__internal_75de5c76c9fbf1255a51479e7c45fcb1d79a520acee59de9c4d53adf5377777d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "

";
        
        $__internal_75de5c76c9fbf1255a51479e7c45fcb1d79a520acee59de9c4d53adf5377777d->leave($__internal_75de5c76c9fbf1255a51479e7c45fcb1d79a520acee59de9c4d53adf5377777d_prof);

        
        $__internal_ce6c395df8f3fd5ca4261b3d5de6bcfad52455e225639dfc54caf1a7a3f58b32->leave($__internal_ce6c395df8f3fd5ca4261b3d5de6bcfad52455e225639dfc54caf1a7a3f58b32_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:elementosQuimicos_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 5,  154 => 4,  143 => 2,  134 => 1,  85 => 54,  72 => 44,  67 => 42,  31 => 8,  29 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block css %}

{% endblock %}
{% block javascripts %}


{% endblock %}
<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption font-dark\">
                    <i class=\"icon-settings font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> COR</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"elementosQuimicos\"  value=\"form\">
                    <div class=\"form-body\">
                        <div class=\"alert alert-danger display-hide\">
                            <button class=\"close\" data-close=\"alert\"></button>
                            You have some form errors. Please check below.
                        </div>
                        <div class=\"alert alert-success display-hide\">
                            <button class=\"close\" data-close=\"alert\"></button>
                            Your form validation is successful!
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Nome
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"id\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ Elemeto.id }}\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ Elemeto.nome }}\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Simbolo
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"simbolo\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ Elemeto.simbolo }}\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Estado
                                <span class=\"required\" aria-required=\"true\"> * </span>
                            </label>
                            <div class=\"col-md-4\">
                                <div class=\"bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-off bootstrap-switch-animate\"
                                     style=\"width: 66px;\">
                                    <div class=\"bootstrap-switch-container\" style=\"width: 96px; margin-left: -32px;\">
                                        <span class=\"bootstrap-switch-handle-on bootstrap-switch-primary\"
                                              style=\"width: 32px;\"><i class=\"fa fa-check\"></i></span><span
                                                class=\"bootstrap-switch-label\" style=\"width: 32px;\">&nbsp;</span><span
                                                class=\"bootstrap-switch-handle-off bootstrap-switch-default\"
                                                style=\"width: 32px;\"><i class=\"fa fa-times\"></i></span><input
                                                type=\"checkbox\" checked=\"\" class=\"make-switch switch-large\"
                                                data-label-icon=\"fa fa-fullscreen\"
                                                data-on-text=\"<i class='fa fa-check'></i>\"
                                                data-off-text=\"<i class='fa fa-times'></i>\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-actions\">
                        <div class=\"row\">
                            <div class=\"col-md-offset-3 col-md-9\">
                                <button type=\"submit\" class=\"btn green\">Submit</button>
                                <button type=\"button\" class=\"btn grey-salsa btn-outline\">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
", ":amostra/api:elementosQuimicos_form.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/elementosQuimicos_form.html.twig");
    }
}

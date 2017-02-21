<?php

/* :amostra/api:brilho_form.html.twig */
class __TwigTemplate_ef4493121b244c0e0cb383c14bc8b0fbf8a97b0a0095c78269a1be12d12e4dd8 extends Twig_Template
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
        $__internal_3511e8f21ffe7eafbcf491443c9fc64c9d71a705e2451faf40ff645b09a905cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3511e8f21ffe7eafbcf491443c9fc64c9d71a705e2451faf40ff645b09a905cc->enter($__internal_3511e8f21ffe7eafbcf491443c9fc64c9d71a705e2451faf40ff645b09a905cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:brilho_form.html.twig"));

        $__internal_afeba28f20e1dec00c5f6acec6882623ff551addb3d01d1785e881a2d0dc34af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afeba28f20e1dec00c5f6acec6882623ff551addb3d01d1785e881a2d0dc34af->enter($__internal_afeba28f20e1dec00c5f6acec6882623ff551addb3d01d1785e881a2d0dc34af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:brilho_form.html.twig"));

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
                    <span class=\"caption-subject bold uppercase\"> BRILHO</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"brilho\"  value=\"form\">
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["brilho"]) || array_key_exists("brilho", $context) ? $context["brilho"] : (function () { throw new Twig_Error_Runtime('Variable "brilho" does not exist.', 42, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["brilho"]) || array_key_exists("brilho", $context) ? $context["brilho"] : (function () { throw new Twig_Error_Runtime('Variable "brilho" does not exist.', 44, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Descrição
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"descricao\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["brilho"]) || array_key_exists("brilho", $context) ? $context["brilho"] : (function () { throw new Twig_Error_Runtime('Variable "brilho" does not exist.', 54, $this->getSourceContext()); })()), "descricao", array()), "html", null, true);
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
        
        $__internal_3511e8f21ffe7eafbcf491443c9fc64c9d71a705e2451faf40ff645b09a905cc->leave($__internal_3511e8f21ffe7eafbcf491443c9fc64c9d71a705e2451faf40ff645b09a905cc_prof);

        
        $__internal_afeba28f20e1dec00c5f6acec6882623ff551addb3d01d1785e881a2d0dc34af->leave($__internal_afeba28f20e1dec00c5f6acec6882623ff551addb3d01d1785e881a2d0dc34af_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_3079a0cb860e872ada570f92ebaa8e3c5a2e464420c2aa71e23b40658a6fa1d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3079a0cb860e872ada570f92ebaa8e3c5a2e464420c2aa71e23b40658a6fa1d1->enter($__internal_3079a0cb860e872ada570f92ebaa8e3c5a2e464420c2aa71e23b40658a6fa1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_4aaa9753baeed6e5e83686c3eb47c77421b607fe23adcd55e08a78ab88f0007d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aaa9753baeed6e5e83686c3eb47c77421b607fe23adcd55e08a78ab88f0007d->enter($__internal_4aaa9753baeed6e5e83686c3eb47c77421b607fe23adcd55e08a78ab88f0007d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "
";
        
        $__internal_4aaa9753baeed6e5e83686c3eb47c77421b607fe23adcd55e08a78ab88f0007d->leave($__internal_4aaa9753baeed6e5e83686c3eb47c77421b607fe23adcd55e08a78ab88f0007d_prof);

        
        $__internal_3079a0cb860e872ada570f92ebaa8e3c5a2e464420c2aa71e23b40658a6fa1d1->leave($__internal_3079a0cb860e872ada570f92ebaa8e3c5a2e464420c2aa71e23b40658a6fa1d1_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d67c8b16c96eca26ab3dfe7d651b8f5049b406d6b4ba9bc50b8064b0d0685546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67c8b16c96eca26ab3dfe7d651b8f5049b406d6b4ba9bc50b8064b0d0685546->enter($__internal_d67c8b16c96eca26ab3dfe7d651b8f5049b406d6b4ba9bc50b8064b0d0685546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d290317b870cc0f5c8f7b18e08cf9f8bdc9dc38a38a612af1fb56b0f0215aff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d290317b870cc0f5c8f7b18e08cf9f8bdc9dc38a38a612af1fb56b0f0215aff4->enter($__internal_d290317b870cc0f5c8f7b18e08cf9f8bdc9dc38a38a612af1fb56b0f0215aff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "

";
        
        $__internal_d290317b870cc0f5c8f7b18e08cf9f8bdc9dc38a38a612af1fb56b0f0215aff4->leave($__internal_d290317b870cc0f5c8f7b18e08cf9f8bdc9dc38a38a612af1fb56b0f0215aff4_prof);

        
        $__internal_d67c8b16c96eca26ab3dfe7d651b8f5049b406d6b4ba9bc50b8064b0d0685546->leave($__internal_d67c8b16c96eca26ab3dfe7d651b8f5049b406d6b4ba9bc50b8064b0d0685546_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:brilho_form.html.twig";
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
                    <span class=\"caption-subject bold uppercase\"> BRILHO</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"brilho\"  value=\"form\">
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
                                       value=\"{{ brilho.id }}\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ brilho.nome }}\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Descrição
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"descricao\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ brilho.descricao }}\">
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
", ":amostra/api:brilho_form.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/brilho_form.html.twig");
    }
}

<?php

/* :amostra/api:seccao_form.html.twig */
class __TwigTemplate_59b5d853d4cbd2041cb1326a6608511ae60b688d2963b87cd2a05ef82ef27a02 extends Twig_Template
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
        $__internal_0cefc03a96f176be6dbfee294ba11d067f4db215f0d415930fd8e9726375e7fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cefc03a96f176be6dbfee294ba11d067f4db215f0d415930fd8e9726375e7fd->enter($__internal_0cefc03a96f176be6dbfee294ba11d067f4db215f0d415930fd8e9726375e7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:seccao_form.html.twig"));

        $__internal_b4a698a0f088edcaff5ae590f499272327bd2284e9e32e5bfe2437e9c5b9392e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a698a0f088edcaff5ae590f499272327bd2284e9e32e5bfe2437e9c5b9392e->enter($__internal_b4a698a0f088edcaff5ae590f499272327bd2284e9e32e5bfe2437e9c5b9392e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:seccao_form.html.twig"));

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
                    <span class=\"caption-subject bold uppercase\"> seccao</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"seccao\"
                      value=\"form\">
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
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["seccao"]) || array_key_exists("seccao", $context) ? $context["seccao"] : (function () { throw new Twig_Error_Runtime('Variable "seccao" does not exist.', 43, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["seccao"]) || array_key_exists("seccao", $context) ? $context["seccao"] : (function () { throw new Twig_Error_Runtime('Variable "seccao" does not exist.', 45, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Estado
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"estado\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["seccao"]) || array_key_exists("seccao", $context) ? $context["seccao"] : (function () { throw new Twig_Error_Runtime('Variable "seccao" does not exist.', 55, $this->getSourceContext()); })()), "estado", array()), "html", null, true);
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
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["seccao"]) || array_key_exists("seccao", $context) ? $context["seccao"] : (function () { throw new Twig_Error_Runtime('Variable "seccao" does not exist.', 64, $this->getSourceContext()); })()), "descricao", array()), "html", null, true);
        echo "\">
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
        
        $__internal_0cefc03a96f176be6dbfee294ba11d067f4db215f0d415930fd8e9726375e7fd->leave($__internal_0cefc03a96f176be6dbfee294ba11d067f4db215f0d415930fd8e9726375e7fd_prof);

        
        $__internal_b4a698a0f088edcaff5ae590f499272327bd2284e9e32e5bfe2437e9c5b9392e->leave($__internal_b4a698a0f088edcaff5ae590f499272327bd2284e9e32e5bfe2437e9c5b9392e_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_067af918d90df950ae77dc38ef0066ca8939c6ae37fcfe2c6429ab7880e54f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067af918d90df950ae77dc38ef0066ca8939c6ae37fcfe2c6429ab7880e54f47->enter($__internal_067af918d90df950ae77dc38ef0066ca8939c6ae37fcfe2c6429ab7880e54f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_dbffaf79b9704dcf6f67b900476bebc6c487223f63a7dc8bc57fa1da75ce3249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbffaf79b9704dcf6f67b900476bebc6c487223f63a7dc8bc57fa1da75ce3249->enter($__internal_dbffaf79b9704dcf6f67b900476bebc6c487223f63a7dc8bc57fa1da75ce3249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "
";
        
        $__internal_dbffaf79b9704dcf6f67b900476bebc6c487223f63a7dc8bc57fa1da75ce3249->leave($__internal_dbffaf79b9704dcf6f67b900476bebc6c487223f63a7dc8bc57fa1da75ce3249_prof);

        
        $__internal_067af918d90df950ae77dc38ef0066ca8939c6ae37fcfe2c6429ab7880e54f47->leave($__internal_067af918d90df950ae77dc38ef0066ca8939c6ae37fcfe2c6429ab7880e54f47_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84622d2519a2fe05b6f4389763bbc094a22ab912f83bb4f95558d440e85f1ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84622d2519a2fe05b6f4389763bbc094a22ab912f83bb4f95558d440e85f1ed2->enter($__internal_84622d2519a2fe05b6f4389763bbc094a22ab912f83bb4f95558d440e85f1ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2e9529cde2ce73ce475cecb007ae29efeafd7675dada0779d986178252f4be11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9529cde2ce73ce475cecb007ae29efeafd7675dada0779d986178252f4be11->enter($__internal_2e9529cde2ce73ce475cecb007ae29efeafd7675dada0779d986178252f4be11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "

";
        
        $__internal_2e9529cde2ce73ce475cecb007ae29efeafd7675dada0779d986178252f4be11->leave($__internal_2e9529cde2ce73ce475cecb007ae29efeafd7675dada0779d986178252f4be11_prof);

        
        $__internal_84622d2519a2fe05b6f4389763bbc094a22ab912f83bb4f95558d440e85f1ed2->leave($__internal_84622d2519a2fe05b6f4389763bbc094a22ab912f83bb4f95558d440e85f1ed2_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:seccao_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 5,  147 => 4,  136 => 2,  127 => 1,  98 => 64,  86 => 55,  73 => 45,  68 => 43,  31 => 8,  29 => 4,  27 => 1,);
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
                    <span class=\"caption-subject bold uppercase\"> seccao</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"seccao\"
                      value=\"form\">
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
                                       value=\"{{ seccao.id }}\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ seccao.nome }}\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Estado
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"estado\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ seccao.estado }}\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Descrição
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"descricao\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ seccao.descricao }}\">
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
", ":amostra/api:seccao_form.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/seccao_form.html.twig");
    }
}

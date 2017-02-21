<?php

/* :amostra/api:clivagem_form.html.twig */
class __TwigTemplate_bc3e4734130a96f0b0b8e3a86d63a87af831ff7f11fdc323cc011b15b5dbf85f extends Twig_Template
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
        $__internal_42918c8fac1f89a44bb012c28606faecfe3ba09a7c0cef0503a7290735f3a301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42918c8fac1f89a44bb012c28606faecfe3ba09a7c0cef0503a7290735f3a301->enter($__internal_42918c8fac1f89a44bb012c28606faecfe3ba09a7c0cef0503a7290735f3a301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:clivagem_form.html.twig"));

        $__internal_2d990bb0d1c9a3b585403a2a05d6448ca676003d1a6d1588757acbcb0d0a2fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d990bb0d1c9a3b585403a2a05d6448ca676003d1a6d1588757acbcb0d0a2fba->enter($__internal_2d990bb0d1c9a3b585403a2a05d6448ca676003d1a6d1588757acbcb0d0a2fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:clivagem_form.html.twig"));

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
                    <span class=\"caption-subject bold uppercase\"> CLIVAGEM</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"clivagem\"  value=\"form\">
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
                            <label class=\"control-label col-md-3\">Valor
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"id\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["clivagem"]) || array_key_exists("clivagem", $context) ? $context["clivagem"] : (function () { throw new Twig_Error_Runtime('Variable "clivagem" does not exist.', 42, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"valor\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["clivagem"]) || array_key_exists("clivagem", $context) ? $context["clivagem"] : (function () { throw new Twig_Error_Runtime('Variable "clivagem" does not exist.', 44, $this->getSourceContext()); })()), "valor", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Tipo
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"tipo\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["clivagem"]) || array_key_exists("clivagem", $context) ? $context["clivagem"] : (function () { throw new Twig_Error_Runtime('Variable "clivagem" does not exist.', 53, $this->getSourceContext()); })()), "tipo", array()), "html", null, true);
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
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["clivagem"]) || array_key_exists("clivagem", $context) ? $context["clivagem"] : (function () { throw new Twig_Error_Runtime('Variable "clivagem" does not exist.', 63, $this->getSourceContext()); })()), "descricao", array()), "html", null, true);
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
        
        $__internal_42918c8fac1f89a44bb012c28606faecfe3ba09a7c0cef0503a7290735f3a301->leave($__internal_42918c8fac1f89a44bb012c28606faecfe3ba09a7c0cef0503a7290735f3a301_prof);

        
        $__internal_2d990bb0d1c9a3b585403a2a05d6448ca676003d1a6d1588757acbcb0d0a2fba->leave($__internal_2d990bb0d1c9a3b585403a2a05d6448ca676003d1a6d1588757acbcb0d0a2fba_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_c9aba3556656ee53c39b802c00cfe587bf687f83e8d32c0c8354814154815c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9aba3556656ee53c39b802c00cfe587bf687f83e8d32c0c8354814154815c15->enter($__internal_c9aba3556656ee53c39b802c00cfe587bf687f83e8d32c0c8354814154815c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_dc63041d1f819f1e452518b33c63305183746c921a5eb734041bce6bbfea2ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc63041d1f819f1e452518b33c63305183746c921a5eb734041bce6bbfea2ff0->enter($__internal_dc63041d1f819f1e452518b33c63305183746c921a5eb734041bce6bbfea2ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "
";
        
        $__internal_dc63041d1f819f1e452518b33c63305183746c921a5eb734041bce6bbfea2ff0->leave($__internal_dc63041d1f819f1e452518b33c63305183746c921a5eb734041bce6bbfea2ff0_prof);

        
        $__internal_c9aba3556656ee53c39b802c00cfe587bf687f83e8d32c0c8354814154815c15->leave($__internal_c9aba3556656ee53c39b802c00cfe587bf687f83e8d32c0c8354814154815c15_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81dd9f2023e68631d1d4c725b10c4ae44b47dfd6185a2f2fb242ad5ca261e2f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81dd9f2023e68631d1d4c725b10c4ae44b47dfd6185a2f2fb242ad5ca261e2f1->enter($__internal_81dd9f2023e68631d1d4c725b10c4ae44b47dfd6185a2f2fb242ad5ca261e2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_762fa6f8da193ee194d7cf70e1c964170857ce76b00ea9689b2508014026211f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762fa6f8da193ee194d7cf70e1c964170857ce76b00ea9689b2508014026211f->enter($__internal_762fa6f8da193ee194d7cf70e1c964170857ce76b00ea9689b2508014026211f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "

";
        
        $__internal_762fa6f8da193ee194d7cf70e1c964170857ce76b00ea9689b2508014026211f->leave($__internal_762fa6f8da193ee194d7cf70e1c964170857ce76b00ea9689b2508014026211f_prof);

        
        $__internal_81dd9f2023e68631d1d4c725b10c4ae44b47dfd6185a2f2fb242ad5ca261e2f1->leave($__internal_81dd9f2023e68631d1d4c725b10c4ae44b47dfd6185a2f2fb242ad5ca261e2f1_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:clivagem_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 5,  147 => 4,  136 => 2,  127 => 1,  97 => 63,  84 => 53,  72 => 44,  67 => 42,  31 => 8,  29 => 4,  27 => 1,);
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
                    <span class=\"caption-subject bold uppercase\"> CLIVAGEM</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"clivagem\"  value=\"form\">
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
                            <label class=\"control-label col-md-3\">Valor
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"id\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ clivagem.id }}\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"valor\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ clivagem.valor }}\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Tipo
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"tipo\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ clivagem.tipo }}\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Descrição
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"descricao\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ clivagem.descricao }}\">
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
", ":amostra/api:clivagem_form.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/clivagem_form.html.twig");
    }
}

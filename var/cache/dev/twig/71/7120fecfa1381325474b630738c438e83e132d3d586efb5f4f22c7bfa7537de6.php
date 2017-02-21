<?php

/* :amostra/api:cor_form.html.twig */
class __TwigTemplate_9d9f6a23922c0b88bab5025a04b6240fea9bdbd93312cbc6abf93f45c2f144c7 extends Twig_Template
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
        $__internal_526f57c18e0395d1326c1ce33a0596af968ed676eb215385b6d8187f9d72369b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526f57c18e0395d1326c1ce33a0596af968ed676eb215385b6d8187f9d72369b->enter($__internal_526f57c18e0395d1326c1ce33a0596af968ed676eb215385b6d8187f9d72369b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:cor_form.html.twig"));

        $__internal_2cef35bb3467822dfd34767b1c11c2f5b27136d63a3f14c766ffc86f7a0a3489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cef35bb3467822dfd34767b1c11c2f5b27136d63a3f14c766ffc86f7a0a3489->enter($__internal_2cef35bb3467822dfd34767b1c11c2f5b27136d63a3f14c766ffc86f7a0a3489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:cor_form.html.twig"));

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
                    <span class=\"caption-subject bold uppercase\"> cor</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"cor\"  value=\"form\">
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cor"]) || array_key_exists("cor", $context) ? $context["cor"] : (function () { throw new Twig_Error_Runtime('Variable "cor" does not exist.', 42, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cor"]) || array_key_exists("cor", $context) ? $context["cor"] : (function () { throw new Twig_Error_Runtime('Variable "cor" does not exist.', 44, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Descrição
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"hex\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cor"]) || array_key_exists("cor", $context) ? $context["cor"] : (function () { throw new Twig_Error_Runtime('Variable "cor" does not exist.', 54, $this->getSourceContext()); })()), "hex", array()), "html", null, true);
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
        
        $__internal_526f57c18e0395d1326c1ce33a0596af968ed676eb215385b6d8187f9d72369b->leave($__internal_526f57c18e0395d1326c1ce33a0596af968ed676eb215385b6d8187f9d72369b_prof);

        
        $__internal_2cef35bb3467822dfd34767b1c11c2f5b27136d63a3f14c766ffc86f7a0a3489->leave($__internal_2cef35bb3467822dfd34767b1c11c2f5b27136d63a3f14c766ffc86f7a0a3489_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_913ebca0b75ddc7056ec3947f920fe19a850477159c2c7ae1a23cc0aabc2880c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913ebca0b75ddc7056ec3947f920fe19a850477159c2c7ae1a23cc0aabc2880c->enter($__internal_913ebca0b75ddc7056ec3947f920fe19a850477159c2c7ae1a23cc0aabc2880c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_e2d4d4ec190490c8bf6f8cec26eb1fe7f96eaa10d894e78e52abdb842c729be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d4d4ec190490c8bf6f8cec26eb1fe7f96eaa10d894e78e52abdb842c729be1->enter($__internal_e2d4d4ec190490c8bf6f8cec26eb1fe7f96eaa10d894e78e52abdb842c729be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "
";
        
        $__internal_e2d4d4ec190490c8bf6f8cec26eb1fe7f96eaa10d894e78e52abdb842c729be1->leave($__internal_e2d4d4ec190490c8bf6f8cec26eb1fe7f96eaa10d894e78e52abdb842c729be1_prof);

        
        $__internal_913ebca0b75ddc7056ec3947f920fe19a850477159c2c7ae1a23cc0aabc2880c->leave($__internal_913ebca0b75ddc7056ec3947f920fe19a850477159c2c7ae1a23cc0aabc2880c_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48939e1a5141f3eba3f639d926071876bcda49f4a8d22cb57da32c25bda20f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48939e1a5141f3eba3f639d926071876bcda49f4a8d22cb57da32c25bda20f05->enter($__internal_48939e1a5141f3eba3f639d926071876bcda49f4a8d22cb57da32c25bda20f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d72fcb74c063f34a44571a468f125c40045c46b8ed956cb851fadd2609cd78bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72fcb74c063f34a44571a468f125c40045c46b8ed956cb851fadd2609cd78bd->enter($__internal_d72fcb74c063f34a44571a468f125c40045c46b8ed956cb851fadd2609cd78bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "

";
        
        $__internal_d72fcb74c063f34a44571a468f125c40045c46b8ed956cb851fadd2609cd78bd->leave($__internal_d72fcb74c063f34a44571a468f125c40045c46b8ed956cb851fadd2609cd78bd_prof);

        
        $__internal_48939e1a5141f3eba3f639d926071876bcda49f4a8d22cb57da32c25bda20f05->leave($__internal_48939e1a5141f3eba3f639d926071876bcda49f4a8d22cb57da32c25bda20f05_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:cor_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 5,  134 => 4,  123 => 2,  114 => 1,  85 => 54,  72 => 44,  67 => 42,  31 => 8,  29 => 4,  27 => 1,);
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
                    <span class=\"caption-subject bold uppercase\"> cor</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"cor\"  value=\"form\">
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
                                       value=\"{{ cor.id }}\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ cor.nome }}\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Descrição
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"hex\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ cor.hex }}\">
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
", ":amostra/api:cor_form.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/cor_form.html.twig");
    }
}

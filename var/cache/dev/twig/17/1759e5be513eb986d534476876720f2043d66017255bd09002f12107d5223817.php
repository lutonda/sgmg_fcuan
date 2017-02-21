<?php

/* :amostra/api:habito_form.html.twig */
class __TwigTemplate_e21d4be4728dcad6b54f2f81b95108af59fce4f65cc3f6fae4520b89ac7cd454 extends Twig_Template
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
        $__internal_4499cd2bdcef99c40eb7dcaab01108808ef7c1086fd200850cd8780cd2dcd6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4499cd2bdcef99c40eb7dcaab01108808ef7c1086fd200850cd8780cd2dcd6fc->enter($__internal_4499cd2bdcef99c40eb7dcaab01108808ef7c1086fd200850cd8780cd2dcd6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:habito_form.html.twig"));

        $__internal_7f8d15c2a930fde9ca3147b21daf063824ab777faacf56d073cd1191793454b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8d15c2a930fde9ca3147b21daf063824ab777faacf56d073cd1191793454b3->enter($__internal_7f8d15c2a930fde9ca3147b21daf063824ab777faacf56d073cd1191793454b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:habito_form.html.twig"));

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
                    <span class=\"caption-subject bold uppercase\"> HÁBITO</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"habito\"  value=\"form\">
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["habito"]) || array_key_exists("habito", $context) ? $context["habito"] : (function () { throw new Twig_Error_Runtime('Variable "habito" does not exist.', 42, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["habito"]) || array_key_exists("habito", $context) ? $context["habito"] : (function () { throw new Twig_Error_Runtime('Variable "habito" does not exist.', 44, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["habito"]) || array_key_exists("habito", $context) ? $context["habito"] : (function () { throw new Twig_Error_Runtime('Variable "habito" does not exist.', 54, $this->getSourceContext()); })()), "designacao", array()), "html", null, true);
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
        
        $__internal_4499cd2bdcef99c40eb7dcaab01108808ef7c1086fd200850cd8780cd2dcd6fc->leave($__internal_4499cd2bdcef99c40eb7dcaab01108808ef7c1086fd200850cd8780cd2dcd6fc_prof);

        
        $__internal_7f8d15c2a930fde9ca3147b21daf063824ab777faacf56d073cd1191793454b3->leave($__internal_7f8d15c2a930fde9ca3147b21daf063824ab777faacf56d073cd1191793454b3_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_36dc7160bff5e82d40a8bcbfeece1a90d538c1331aa5628fb3a8e200e324e9d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36dc7160bff5e82d40a8bcbfeece1a90d538c1331aa5628fb3a8e200e324e9d9->enter($__internal_36dc7160bff5e82d40a8bcbfeece1a90d538c1331aa5628fb3a8e200e324e9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_2447200458e15bce1e29850d31db8b0128836e72e309b0852623d74976f3fbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2447200458e15bce1e29850d31db8b0128836e72e309b0852623d74976f3fbc4->enter($__internal_2447200458e15bce1e29850d31db8b0128836e72e309b0852623d74976f3fbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "
";
        
        $__internal_2447200458e15bce1e29850d31db8b0128836e72e309b0852623d74976f3fbc4->leave($__internal_2447200458e15bce1e29850d31db8b0128836e72e309b0852623d74976f3fbc4_prof);

        
        $__internal_36dc7160bff5e82d40a8bcbfeece1a90d538c1331aa5628fb3a8e200e324e9d9->leave($__internal_36dc7160bff5e82d40a8bcbfeece1a90d538c1331aa5628fb3a8e200e324e9d9_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7bf0c8287bc5126be0676c2d07847ab1fa3611e3ce73a30650fcbf6ed1fd37f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7bf0c8287bc5126be0676c2d07847ab1fa3611e3ce73a30650fcbf6ed1fd37f->enter($__internal_e7bf0c8287bc5126be0676c2d07847ab1fa3611e3ce73a30650fcbf6ed1fd37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6fb8da84cb49b80bcd0cdff296b2451b308f90292fd1f50eaf9eae07a271506e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb8da84cb49b80bcd0cdff296b2451b308f90292fd1f50eaf9eae07a271506e->enter($__internal_6fb8da84cb49b80bcd0cdff296b2451b308f90292fd1f50eaf9eae07a271506e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "

";
        
        $__internal_6fb8da84cb49b80bcd0cdff296b2451b308f90292fd1f50eaf9eae07a271506e->leave($__internal_6fb8da84cb49b80bcd0cdff296b2451b308f90292fd1f50eaf9eae07a271506e_prof);

        
        $__internal_e7bf0c8287bc5126be0676c2d07847ab1fa3611e3ce73a30650fcbf6ed1fd37f->leave($__internal_e7bf0c8287bc5126be0676c2d07847ab1fa3611e3ce73a30650fcbf6ed1fd37f_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:habito_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 5,  135 => 4,  124 => 2,  115 => 1,  85 => 54,  72 => 44,  67 => 42,  31 => 8,  29 => 4,  27 => 1,);
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
                    <span class=\"caption-subject bold uppercase\"> HÁBITO</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"habito\"  value=\"form\">
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
                                       value=\"{{ habito.id }}\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ habito.nome }}\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Descrição
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"descricao\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ habito.designacao }}\">
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
", ":amostra/api:habito_form.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/habito_form.html.twig");
    }
}

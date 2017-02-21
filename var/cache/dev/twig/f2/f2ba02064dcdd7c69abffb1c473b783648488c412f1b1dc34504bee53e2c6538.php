<?php

/* :amostra/api:genese_form.html.twig */
class __TwigTemplate_d3b521ad4719670c96ed52402827e1598aea3084073e34a1f823c75dd976b339 extends Twig_Template
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
        $__internal_0d9d9e7f97d1e8002df7bf084ed9c4cbc2d717340cd5f72d0f58ea371a5a7a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9d9e7f97d1e8002df7bf084ed9c4cbc2d717340cd5f72d0f58ea371a5a7a2a->enter($__internal_0d9d9e7f97d1e8002df7bf084ed9c4cbc2d717340cd5f72d0f58ea371a5a7a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:genese_form.html.twig"));

        $__internal_43e55a0fd9d971ccfa0d6a7750f78da8471c106c787b63d84d6887c7fe311ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e55a0fd9d971ccfa0d6a7750f78da8471c106c787b63d84d6887c7fe311ca5->enter($__internal_43e55a0fd9d971ccfa0d6a7750f78da8471c106c787b63d84d6887c7fe311ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:genese_form.html.twig"));

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
                    <span class=\"caption-subject bold uppercase\"> GÉNESE</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"genese\"  value=\"form\">
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["genese"]) || array_key_exists("genese", $context) ? $context["genese"] : (function () { throw new Twig_Error_Runtime('Variable "genese" does not exist.', 42, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["genese"]) || array_key_exists("genese", $context) ? $context["genese"] : (function () { throw new Twig_Error_Runtime('Variable "genese" does not exist.', 44, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["genese"]) || array_key_exists("genese", $context) ? $context["genese"] : (function () { throw new Twig_Error_Runtime('Variable "genese" does not exist.', 54, $this->getSourceContext()); })()), "descricao", array()), "html", null, true);
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
        
        $__internal_0d9d9e7f97d1e8002df7bf084ed9c4cbc2d717340cd5f72d0f58ea371a5a7a2a->leave($__internal_0d9d9e7f97d1e8002df7bf084ed9c4cbc2d717340cd5f72d0f58ea371a5a7a2a_prof);

        
        $__internal_43e55a0fd9d971ccfa0d6a7750f78da8471c106c787b63d84d6887c7fe311ca5->leave($__internal_43e55a0fd9d971ccfa0d6a7750f78da8471c106c787b63d84d6887c7fe311ca5_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_08f41fc017281b7b7b6e9e64edf4bc630184c5d7e66adce9c3572227615892ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f41fc017281b7b7b6e9e64edf4bc630184c5d7e66adce9c3572227615892ec->enter($__internal_08f41fc017281b7b7b6e9e64edf4bc630184c5d7e66adce9c3572227615892ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_83d23f0209be2ef5fbbf99620d49c94d99b479a19c5182f19ab3ba3e48787001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d23f0209be2ef5fbbf99620d49c94d99b479a19c5182f19ab3ba3e48787001->enter($__internal_83d23f0209be2ef5fbbf99620d49c94d99b479a19c5182f19ab3ba3e48787001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "
";
        
        $__internal_83d23f0209be2ef5fbbf99620d49c94d99b479a19c5182f19ab3ba3e48787001->leave($__internal_83d23f0209be2ef5fbbf99620d49c94d99b479a19c5182f19ab3ba3e48787001_prof);

        
        $__internal_08f41fc017281b7b7b6e9e64edf4bc630184c5d7e66adce9c3572227615892ec->leave($__internal_08f41fc017281b7b7b6e9e64edf4bc630184c5d7e66adce9c3572227615892ec_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f54256ae9e1b8a3872d3b565fbc7aabed4ff156e0b98543901ca4d1b78a7b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f54256ae9e1b8a3872d3b565fbc7aabed4ff156e0b98543901ca4d1b78a7b10->enter($__internal_6f54256ae9e1b8a3872d3b565fbc7aabed4ff156e0b98543901ca4d1b78a7b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f60d720f6c1d576a3ddaf29c9dc61fb25e52c04a5996e98d337c359e831a33da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60d720f6c1d576a3ddaf29c9dc61fb25e52c04a5996e98d337c359e831a33da->enter($__internal_f60d720f6c1d576a3ddaf29c9dc61fb25e52c04a5996e98d337c359e831a33da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "

";
        
        $__internal_f60d720f6c1d576a3ddaf29c9dc61fb25e52c04a5996e98d337c359e831a33da->leave($__internal_f60d720f6c1d576a3ddaf29c9dc61fb25e52c04a5996e98d337c359e831a33da_prof);

        
        $__internal_6f54256ae9e1b8a3872d3b565fbc7aabed4ff156e0b98543901ca4d1b78a7b10->leave($__internal_6f54256ae9e1b8a3872d3b565fbc7aabed4ff156e0b98543901ca4d1b78a7b10_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:genese_form.html.twig";
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
                    <span class=\"caption-subject bold uppercase\"> GÉNESE</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"genese\"  value=\"form\">
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
                                       value=\"{{ genese.id }}\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ genese.nome }}\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Descrição
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"descricao\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ genese.descricao }}\">
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
", ":amostra/api:genese_form.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/genese_form.html.twig");
    }
}

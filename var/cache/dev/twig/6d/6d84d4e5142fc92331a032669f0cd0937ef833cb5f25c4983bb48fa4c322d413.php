<?php

/* :amostra/api:fractura_form.html.twig */
class __TwigTemplate_8987fc88119869d013a30b5461343cd13bdd17bd9ac428cc7cc1cfe266a2e372 extends Twig_Template
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
        $__internal_2e4586f1edeaa78316f05f957982892afa85cd8952bad017cc2a26322cc45010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4586f1edeaa78316f05f957982892afa85cd8952bad017cc2a26322cc45010->enter($__internal_2e4586f1edeaa78316f05f957982892afa85cd8952bad017cc2a26322cc45010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:fractura_form.html.twig"));

        $__internal_4d7d136aca5a70161ca412c93c048a973e9d5b560c2802bc9ce5de406b886478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7d136aca5a70161ca412c93c048a973e9d5b560c2802bc9ce5de406b886478->enter($__internal_4d7d136aca5a70161ca412c93c048a973e9d5b560c2802bc9ce5de406b886478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:fractura_form.html.twig"));

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
                    <span class=\"caption-subject bold uppercase\"> FRACTURA</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"fractura\"  value=\"form\">
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fractura"]) || array_key_exists("fractura", $context) ? $context["fractura"] : (function () { throw new Twig_Error_Runtime('Variable "fractura" does not exist.', 42, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fractura"]) || array_key_exists("fractura", $context) ? $context["fractura"] : (function () { throw new Twig_Error_Runtime('Variable "fractura" does not exist.', 44, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["fractura"]) || array_key_exists("fractura", $context) ? $context["fractura"] : (function () { throw new Twig_Error_Runtime('Variable "fractura" does not exist.', 54, $this->getSourceContext()); })()), "descricao", array()), "html", null, true);
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
        
        $__internal_2e4586f1edeaa78316f05f957982892afa85cd8952bad017cc2a26322cc45010->leave($__internal_2e4586f1edeaa78316f05f957982892afa85cd8952bad017cc2a26322cc45010_prof);

        
        $__internal_4d7d136aca5a70161ca412c93c048a973e9d5b560c2802bc9ce5de406b886478->leave($__internal_4d7d136aca5a70161ca412c93c048a973e9d5b560c2802bc9ce5de406b886478_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_6c23e3412858a1bfb4e86329060f143b144c0b949babb598d0d3551483a7f5a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c23e3412858a1bfb4e86329060f143b144c0b949babb598d0d3551483a7f5a5->enter($__internal_6c23e3412858a1bfb4e86329060f143b144c0b949babb598d0d3551483a7f5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_e56ff1b5063bbe99dbd82e56c0154097e76c77735e18918764ffeb20c6f28126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56ff1b5063bbe99dbd82e56c0154097e76c77735e18918764ffeb20c6f28126->enter($__internal_e56ff1b5063bbe99dbd82e56c0154097e76c77735e18918764ffeb20c6f28126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "
";
        
        $__internal_e56ff1b5063bbe99dbd82e56c0154097e76c77735e18918764ffeb20c6f28126->leave($__internal_e56ff1b5063bbe99dbd82e56c0154097e76c77735e18918764ffeb20c6f28126_prof);

        
        $__internal_6c23e3412858a1bfb4e86329060f143b144c0b949babb598d0d3551483a7f5a5->leave($__internal_6c23e3412858a1bfb4e86329060f143b144c0b949babb598d0d3551483a7f5a5_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4aa5bac60ba5b67506d17a0d54cbdbf56e9bdb6d6cbbdfa1b73a392d74700df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4aa5bac60ba5b67506d17a0d54cbdbf56e9bdb6d6cbbdfa1b73a392d74700df->enter($__internal_a4aa5bac60ba5b67506d17a0d54cbdbf56e9bdb6d6cbbdfa1b73a392d74700df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c351e065dbe56830da37f2b1af5b24da6af2c8ab19abfe2e5cb2aeb2d3d84238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c351e065dbe56830da37f2b1af5b24da6af2c8ab19abfe2e5cb2aeb2d3d84238->enter($__internal_c351e065dbe56830da37f2b1af5b24da6af2c8ab19abfe2e5cb2aeb2d3d84238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "

";
        
        $__internal_c351e065dbe56830da37f2b1af5b24da6af2c8ab19abfe2e5cb2aeb2d3d84238->leave($__internal_c351e065dbe56830da37f2b1af5b24da6af2c8ab19abfe2e5cb2aeb2d3d84238_prof);

        
        $__internal_a4aa5bac60ba5b67506d17a0d54cbdbf56e9bdb6d6cbbdfa1b73a392d74700df->leave($__internal_a4aa5bac60ba5b67506d17a0d54cbdbf56e9bdb6d6cbbdfa1b73a392d74700df_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:fractura_form.html.twig";
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
                    <span class=\"caption-subject bold uppercase\"> FRACTURA</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"fractura\"  value=\"form\">
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
                                       value=\"{{ fractura.id }}\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ fractura.nome }}\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Descrição
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"descricao\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ fractura.descricao }}\">
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
", ":amostra/api:fractura_form.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/fractura_form.html.twig");
    }
}

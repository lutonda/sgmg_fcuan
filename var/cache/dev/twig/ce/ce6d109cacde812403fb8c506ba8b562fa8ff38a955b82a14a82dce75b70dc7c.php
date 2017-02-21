<?php

/* :amostra/api:risca_form.html.twig */
class __TwigTemplate_fb1a3e4ac0394971ed0867afa7d56d99603071930321cefcf53cc0d6fc584a47 extends Twig_Template
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
        $__internal_0b4a3b23a19b8185b9e1ee6f92e65b84c50d52b8ed5fc74cd5aa64f219f3cd8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4a3b23a19b8185b9e1ee6f92e65b84c50d52b8ed5fc74cd5aa64f219f3cd8d->enter($__internal_0b4a3b23a19b8185b9e1ee6f92e65b84c50d52b8ed5fc74cd5aa64f219f3cd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:risca_form.html.twig"));

        $__internal_c10ab467d3e9f9ad6c6514e8d603c0c15f9eb3f08b8e1f51d1b244d27c1146c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10ab467d3e9f9ad6c6514e8d603c0c15f9eb3f08b8e1f51d1b244d27c1146c0->enter($__internal_c10ab467d3e9f9ad6c6514e8d603c0c15f9eb3f08b8e1f51d1b244d27c1146c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:risca_form.html.twig"));

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
                    <span class=\"caption-subject bold uppercase\"> RISCA</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"risca\"  value=\"form\">
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["risca"]) || array_key_exists("risca", $context) ? $context["risca"] : (function () { throw new Twig_Error_Runtime('Variable "risca" does not exist.', 42, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["risca"]) || array_key_exists("risca", $context) ? $context["risca"] : (function () { throw new Twig_Error_Runtime('Variable "risca" does not exist.', 44, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["risca"]) || array_key_exists("risca", $context) ? $context["risca"] : (function () { throw new Twig_Error_Runtime('Variable "risca" does not exist.', 54, $this->getSourceContext()); })()), "descricao", array()), "html", null, true);
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
        
        $__internal_0b4a3b23a19b8185b9e1ee6f92e65b84c50d52b8ed5fc74cd5aa64f219f3cd8d->leave($__internal_0b4a3b23a19b8185b9e1ee6f92e65b84c50d52b8ed5fc74cd5aa64f219f3cd8d_prof);

        
        $__internal_c10ab467d3e9f9ad6c6514e8d603c0c15f9eb3f08b8e1f51d1b244d27c1146c0->leave($__internal_c10ab467d3e9f9ad6c6514e8d603c0c15f9eb3f08b8e1f51d1b244d27c1146c0_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_0c5b56acf0620558f7d41e7946a9cd3ee53666f47cf60d0ef85d46526da6b9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5b56acf0620558f7d41e7946a9cd3ee53666f47cf60d0ef85d46526da6b9c4->enter($__internal_0c5b56acf0620558f7d41e7946a9cd3ee53666f47cf60d0ef85d46526da6b9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_6d66c6f2e0bb6d81060c3dd82c6870a9c0ac2d7e9037b96f646f1df8344c06b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d66c6f2e0bb6d81060c3dd82c6870a9c0ac2d7e9037b96f646f1df8344c06b6->enter($__internal_6d66c6f2e0bb6d81060c3dd82c6870a9c0ac2d7e9037b96f646f1df8344c06b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "
";
        
        $__internal_6d66c6f2e0bb6d81060c3dd82c6870a9c0ac2d7e9037b96f646f1df8344c06b6->leave($__internal_6d66c6f2e0bb6d81060c3dd82c6870a9c0ac2d7e9037b96f646f1df8344c06b6_prof);

        
        $__internal_0c5b56acf0620558f7d41e7946a9cd3ee53666f47cf60d0ef85d46526da6b9c4->leave($__internal_0c5b56acf0620558f7d41e7946a9cd3ee53666f47cf60d0ef85d46526da6b9c4_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91f110cdccf911e9a1f4ccd80bb2a3437e30c6be25c0d8e75bc209ad3f79702f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f110cdccf911e9a1f4ccd80bb2a3437e30c6be25c0d8e75bc209ad3f79702f->enter($__internal_91f110cdccf911e9a1f4ccd80bb2a3437e30c6be25c0d8e75bc209ad3f79702f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6baee0873ddc4f3376ee3e24e092476aca7e20ddbb2531f2c105b7ce7af0e96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6baee0873ddc4f3376ee3e24e092476aca7e20ddbb2531f2c105b7ce7af0e96d->enter($__internal_6baee0873ddc4f3376ee3e24e092476aca7e20ddbb2531f2c105b7ce7af0e96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "

";
        
        $__internal_6baee0873ddc4f3376ee3e24e092476aca7e20ddbb2531f2c105b7ce7af0e96d->leave($__internal_6baee0873ddc4f3376ee3e24e092476aca7e20ddbb2531f2c105b7ce7af0e96d_prof);

        
        $__internal_91f110cdccf911e9a1f4ccd80bb2a3437e30c6be25c0d8e75bc209ad3f79702f->leave($__internal_91f110cdccf911e9a1f4ccd80bb2a3437e30c6be25c0d8e75bc209ad3f79702f_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:risca_form.html.twig";
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
                    <span class=\"caption-subject bold uppercase\"> RISCA</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"risca\"  value=\"form\">
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
                                       value=\"{{ risca.id }}\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ risca.nome }}\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Descrição
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"descricao\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ risca.descricao }}\">
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
", ":amostra/api:risca_form.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/risca_form.html.twig");
    }
}

<?php

/* :amostra/api:prateleira_form.html.twig */
class __TwigTemplate_f2d1297b8e5840666e69661fc76dd7c95f8e9661abde4ab62f9c62a3d4b94e0b extends Twig_Template
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
        $__internal_60801e933b28d5d290db97892aa143c2171703113163dc5d2ac71eec549801fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60801e933b28d5d290db97892aa143c2171703113163dc5d2ac71eec549801fa->enter($__internal_60801e933b28d5d290db97892aa143c2171703113163dc5d2ac71eec549801fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:prateleira_form.html.twig"));

        $__internal_e487182ab6924d18f1beb2e39adac2d30a63efe1b50bc6fdc12017882f7fc173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e487182ab6924d18f1beb2e39adac2d30a63efe1b50bc6fdc12017882f7fc173->enter($__internal_e487182ab6924d18f1beb2e39adac2d30a63efe1b50bc6fdc12017882f7fc173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:prateleira_form.html.twig"));

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
                    <span class=\"caption-subject bold uppercase\"> prateleira</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"prateleira\"
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["prateleira"]) || array_key_exists("prateleira", $context) ? $context["prateleira"] : (function () { throw new Twig_Error_Runtime('Variable "prateleira" does not exist.', 43, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["prateleira"]) || array_key_exists("prateleira", $context) ? $context["prateleira"] : (function () { throw new Twig_Error_Runtime('Variable "prateleira" does not exist.', 45, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Secção
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <select class=\"form-control\" name=\"seccao\">
                                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seccoes"]) || array_key_exists("seccoes", $context) ? $context["seccoes"] : (function () { throw new Twig_Error_Runtime('Variable "seccoes" does not exist.', 55, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pra"]) {
            // line 56
            echo "
                                        <option value=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pra"], "id", array()), "html", null, true);
            echo "\"
                                                ";
            // line 58
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["prateleira"]) || array_key_exists("prateleira", $context) ? $context["prateleira"] : (function () { throw new Twig_Error_Runtime('Variable "prateleira" does not exist.', 58, $this->getSourceContext()); })()), "nome", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["pra"], "nome", array()))) {
                // line 59
                echo "                                                    selected=\"selected\"
                                                ";
            }
            // line 61
            echo "                                        >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pra"], "nome", array()), "html", null, true);
            echo "</option>


                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pra'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                </select>

                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Estado
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"estado\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["prateleira"]) || array_key_exists("prateleira", $context) ? $context["prateleira"] : (function () { throw new Twig_Error_Runtime('Variable "prateleira" does not exist.', 75, $this->getSourceContext()); })()), "estado", array()), "html", null, true);
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
        
        $__internal_60801e933b28d5d290db97892aa143c2171703113163dc5d2ac71eec549801fa->leave($__internal_60801e933b28d5d290db97892aa143c2171703113163dc5d2ac71eec549801fa_prof);

        
        $__internal_e487182ab6924d18f1beb2e39adac2d30a63efe1b50bc6fdc12017882f7fc173->leave($__internal_e487182ab6924d18f1beb2e39adac2d30a63efe1b50bc6fdc12017882f7fc173_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_5007802b9f1f3acaea8657c12d70373a8a15e18a64cbf0280003505250464462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5007802b9f1f3acaea8657c12d70373a8a15e18a64cbf0280003505250464462->enter($__internal_5007802b9f1f3acaea8657c12d70373a8a15e18a64cbf0280003505250464462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_8940f876a6b00896d9801446477f6d7c0d149ed766ad45ee4dc93abaf9baa3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8940f876a6b00896d9801446477f6d7c0d149ed766ad45ee4dc93abaf9baa3bd->enter($__internal_8940f876a6b00896d9801446477f6d7c0d149ed766ad45ee4dc93abaf9baa3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "
";
        
        $__internal_8940f876a6b00896d9801446477f6d7c0d149ed766ad45ee4dc93abaf9baa3bd->leave($__internal_8940f876a6b00896d9801446477f6d7c0d149ed766ad45ee4dc93abaf9baa3bd_prof);

        
        $__internal_5007802b9f1f3acaea8657c12d70373a8a15e18a64cbf0280003505250464462->leave($__internal_5007802b9f1f3acaea8657c12d70373a8a15e18a64cbf0280003505250464462_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_179861c701c34f1c49065a0b1a3c6a4838ee8c0d9b5203b15646f8264214779b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179861c701c34f1c49065a0b1a3c6a4838ee8c0d9b5203b15646f8264214779b->enter($__internal_179861c701c34f1c49065a0b1a3c6a4838ee8c0d9b5203b15646f8264214779b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a564e895e2d22a791cd59825222a8e40d5386b81d474903f56f9d02d0e640e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a564e895e2d22a791cd59825222a8e40d5386b81d474903f56f9d02d0e640e21->enter($__internal_a564e895e2d22a791cd59825222a8e40d5386b81d474903f56f9d02d0e640e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "

";
        
        $__internal_a564e895e2d22a791cd59825222a8e40d5386b81d474903f56f9d02d0e640e21->leave($__internal_a564e895e2d22a791cd59825222a8e40d5386b81d474903f56f9d02d0e640e21_prof);

        
        $__internal_179861c701c34f1c49065a0b1a3c6a4838ee8c0d9b5203b15646f8264214779b->leave($__internal_179861c701c34f1c49065a0b1a3c6a4838ee8c0d9b5203b15646f8264214779b_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:prateleira_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 5,  175 => 4,  164 => 2,  155 => 1,  126 => 75,  114 => 65,  103 => 61,  99 => 59,  97 => 58,  93 => 57,  90 => 56,  86 => 55,  73 => 45,  68 => 43,  31 => 8,  29 => 4,  27 => 1,);
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
                    <span class=\"caption-subject bold uppercase\"> prateleira</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"prateleira\"
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
                                       value=\"{{ prateleira.id }}\" hidden=\"hidden\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ prateleira.nome }}\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Secção
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <select class=\"form-control\" name=\"seccao\">
                                    {% for pra in seccoes %}

                                        <option value=\"{{ pra.id }}\"
                                                {% if prateleira.nome == pra.nome %}
                                                    selected=\"selected\"
                                                {% endif %}
                                        >{{ pra.nome }}</option>


                                    {% endfor %}
                                </select>

                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Estado
                                <span class=\"required\" aria-required=\"true\"> </span>
                            </label>
                            <div class=\"col-md-4\">
                                <input type=\"text\" name=\"estado\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ prateleira.estado }}\">
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
", ":amostra/api:prateleira_form.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/prateleira_form.html.twig");
    }
}

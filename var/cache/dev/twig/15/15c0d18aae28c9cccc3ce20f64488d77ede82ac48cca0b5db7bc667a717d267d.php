<?php

/* :amostra/api:categoria_form.html.twig */
class __TwigTemplate_5cfe3b4050429a8cfab01aadc45c1e1ebdd15972a10dee1284e19a96e95e33c8 extends Twig_Template
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
        $__internal_7a2a1049459b6fe5ee19eb005604c26da1f527b724f25e3d4289e6095ecdfd9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2a1049459b6fe5ee19eb005604c26da1f527b724f25e3d4289e6095ecdfd9e->enter($__internal_7a2a1049459b6fe5ee19eb005604c26da1f527b724f25e3d4289e6095ecdfd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:categoria_form.html.twig"));

        $__internal_629a46ee34234b901ea1ff339340ddd47987ff22f3073f15f8785f82074f8cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629a46ee34234b901ea1ff339340ddd47987ff22f3073f15f8785f82074f8cee->enter($__internal_629a46ee34234b901ea1ff339340ddd47987ff22f3073f15f8785f82074f8cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:categoria_form.html.twig"));

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
                    <span class=\"caption-subject bold uppercase\"> CATEGORIAS</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"categoria\" value=\"form\">
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new Twig_Error_Runtime('Variable "categoria" does not exist.', 42, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new Twig_Error_Runtime('Variable "categoria" does not exist.', 44, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Dependencia
                                <span class=\"required\" aria-required=\"true\"> * </span>
                            </label>
                            <div class=\"col-md-4\">
                                <select class=\"form-control\" name=\"dependencia\">
                                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new Twig_Error_Runtime('Variable "categorias" does not exist.', 53, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
            // line 54
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["dep"], "nome", array()) != twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new Twig_Error_Runtime('Variable "categoria" does not exist.', 54, $this->getSourceContext()); })()), "nome", array()))) {
                // line 55
                echo "
                                            <option value=\"";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dep"], "id", array()), "html", null, true);
                echo "\"
                                                    ";
                // line 57
                if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new Twig_Error_Runtime('Variable "categoria" does not exist.', 57, $this->getSourceContext()); })()), "dependencia", array()) != null)) {
                    // line 58
                    echo "                                                    ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new Twig_Error_Runtime('Variable "categoria" does not exist.', 58, $this->getSourceContext()); })()), "dependencia", array()), "nome", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["dep"], "nome", array()))) {
                        // line 59
                        echo "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new Twig_Error_Runtime('Variable "categoria" does not exist.', 59, $this->getSourceContext()); })()), "dependencia", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["depi"]) {
                            // line 60
                            echo "                                                            ";
                            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["depi"], "nome", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["dep"], "nome", array()))) {
                                // line 61
                                echo "                                                                selected=\"selected\"
                                                            ";
                            }
                            // line 63
                            echo "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['depi'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 64
                        echo "                                                selected=\"selected\"";
                    }
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dep"], "nome", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            // line 66
            echo "
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                </select>
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
        
        $__internal_7a2a1049459b6fe5ee19eb005604c26da1f527b724f25e3d4289e6095ecdfd9e->leave($__internal_7a2a1049459b6fe5ee19eb005604c26da1f527b724f25e3d4289e6095ecdfd9e_prof);

        
        $__internal_629a46ee34234b901ea1ff339340ddd47987ff22f3073f15f8785f82074f8cee->leave($__internal_629a46ee34234b901ea1ff339340ddd47987ff22f3073f15f8785f82074f8cee_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_bc62ea78191a9f74bf46e7b73e3f854dc5535925eb32e8bf289c765be5944dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc62ea78191a9f74bf46e7b73e3f854dc5535925eb32e8bf289c765be5944dfd->enter($__internal_bc62ea78191a9f74bf46e7b73e3f854dc5535925eb32e8bf289c765be5944dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_b453ebb973ba49bcf1dca1ef2769406619cef51796c16d4ba0afeb367f058631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b453ebb973ba49bcf1dca1ef2769406619cef51796c16d4ba0afeb367f058631->enter($__internal_b453ebb973ba49bcf1dca1ef2769406619cef51796c16d4ba0afeb367f058631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "
";
        
        $__internal_b453ebb973ba49bcf1dca1ef2769406619cef51796c16d4ba0afeb367f058631->leave($__internal_b453ebb973ba49bcf1dca1ef2769406619cef51796c16d4ba0afeb367f058631_prof);

        
        $__internal_bc62ea78191a9f74bf46e7b73e3f854dc5535925eb32e8bf289c765be5944dfd->leave($__internal_bc62ea78191a9f74bf46e7b73e3f854dc5535925eb32e8bf289c765be5944dfd_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44006bce8afe02cf5a70e48fd3c954fdca86e5fc124dd7ea06b27bd8fc75b999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44006bce8afe02cf5a70e48fd3c954fdca86e5fc124dd7ea06b27bd8fc75b999->enter($__internal_44006bce8afe02cf5a70e48fd3c954fdca86e5fc124dd7ea06b27bd8fc75b999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_824e0d1a80d461ca37de8b8b568881b072595898bcef6b6842384c3222a945ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824e0d1a80d461ca37de8b8b568881b072595898bcef6b6842384c3222a945ed->enter($__internal_824e0d1a80d461ca37de8b8b568881b072595898bcef6b6842384c3222a945ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "

";
        
        $__internal_824e0d1a80d461ca37de8b8b568881b072595898bcef6b6842384c3222a945ed->leave($__internal_824e0d1a80d461ca37de8b8b568881b072595898bcef6b6842384c3222a945ed_prof);

        
        $__internal_44006bce8afe02cf5a70e48fd3c954fdca86e5fc124dd7ea06b27bd8fc75b999->leave($__internal_44006bce8afe02cf5a70e48fd3c954fdca86e5fc124dd7ea06b27bd8fc75b999_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:categoria_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 5,  205 => 4,  194 => 2,  185 => 1,  137 => 68,  130 => 66,  121 => 64,  115 => 63,  111 => 61,  108 => 60,  103 => 59,  100 => 58,  98 => 57,  94 => 56,  91 => 55,  88 => 54,  84 => 53,  72 => 44,  67 => 42,  31 => 8,  29 => 4,  27 => 1,);
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
                    <span class=\"caption-subject bold uppercase\"> CATEGORIAS</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">


                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <!-- BEGIN FORM-->
                <form action=\"javascript:;\" id=\"form_sample_1\" method=\"post\" class=\"form-horizontal gravar\" title=\"categoria\" value=\"form\">
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
                                       value=\"{{ categoria.id }}\" style=\"display: none\">
                                <input type=\"text\" name=\"nome\" data-required=\"1\" class=\"form-control\"
                                       value=\"{{ categoria.nome }}\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3\">Dependencia
                                <span class=\"required\" aria-required=\"true\"> * </span>
                            </label>
                            <div class=\"col-md-4\">
                                <select class=\"form-control\" name=\"dependencia\">
                                    {% for dep in categorias %}
                                        {% if dep.nome != categoria.nome %}

                                            <option value=\"{{ dep.id }}\"
                                                    {% if categoria.dependencia != null %}
                                                    {% if categoria.dependencia.nome == dep.nome %}
                                                        {% for depi in categoria.dependencia %}
                                                            {% if depi.nome == dep.nome %}
                                                                selected=\"selected\"
                                                            {% endif %}
                                                        {% endfor %}
                                                selected=\"selected\"{% endif %}{% endif %}>{{ dep.nome }}</option>
                                        {% endif %}

                                    {% endfor %}
                                </select>
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
", ":amostra/api:categoria_form.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/categoria_form.html.twig");
    }
}

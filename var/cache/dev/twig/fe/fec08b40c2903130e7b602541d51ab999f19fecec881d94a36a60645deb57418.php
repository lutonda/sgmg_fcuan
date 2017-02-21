<?php

/* :MVS:visita_edit_form.html.twig */
class __TwigTemplate_d8bbd46bb5eb15e451026c97b54a3e779efd370747c0c848c1e7efb888109a2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78c9a90bd6e5b3d154f754e1a3a646e9ea18e85230d04f1d9f36c674452a7d52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c9a90bd6e5b3d154f754e1a3a646e9ea18e85230d04f1d9f36c674452a7d52->enter($__internal_78c9a90bd6e5b3d154f754e1a3a646e9ea18e85230d04f1d9f36c674452a7d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MVS:visita_edit_form.html.twig"));

        $__internal_7342ec8c7e78bf96d9ee2c5b244b0b307a270fcd64810500fe9f773f767ac03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7342ec8c7e78bf96d9ee2c5b244b0b307a270fcd64810500fe9f773f767ac03b->enter($__internal_7342ec8c7e78bf96d9ee2c5b244b0b307a270fcd64810500fe9f773f767ac03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MVS:visita_edit_form.html.twig"));

        // line 1
        $this->displayBlock('css', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('javascript', $context, $blocks);
        // line 54
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption font-dark\">
                    <i class=\"icon-user font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> Cadastrar Visitas</span>
                </div>
                <div class=\"actions\">

                </div>
            </div>
            <div class=\"portlet-body\">
                <form role=\"form\" class=\"cadastrarVisita\" method=\"POST\" action=\"javascript:;\">
                    <div class=\"form-body\">

                        <div class=\"form-group\" style=\"margin:0 15px;  margin-bottom: 30px\">
                            <label class=\"control-label\">Nome Completo</label>
                            <div class=\"input-group \">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"pessoa\"></div>
                            </div>
                        </div>
                        <div class=\"form-group col-md-3\">
                            <label>Tipo</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-check\"></i>
                                <input type=\"text\" name=\"tipo\" class=\"form-control input-lg\"
                                       placeholder=\"Tipo de visita\"></div>
                        </div>
                        <div class=\"form-group col-md-3\">
                            <label>Duração</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-clock\"></i>
                                <input type=\"text\" name=\"duracao\" class=\"form-control input-lg\"
                                       placeholder=\"Duração em minutos\"></div>
                        </div>
                        <div class=\"form-group col-md-3\">
                            <label>Data</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-calendar-o\"></i>
                                <input type=\"text\" name=\"data\" class=\"form-control input-lg date-picker\"
                                       placeholder=\"data\"></div>
                        </div>
                        <div class=\"form-group col-md-3\">
                            <label>Hora</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-clock-o\"></i>
                                <input type=\"text\" name=\"hora\" class=\"form-control input-lg\"
                                       placeholder=\"Hora\"></div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>Descrição</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-anchor\"></i>
                                <textarea name=\"descricao\" class=\"form-control input-lg\"
                                          placeholder=\"Descrição\" rows=\"9\"></textarea></div>
                        </div>
                        <div class=\"form-group col-md-6\" style=\"\">
                            <label class=\"control-label\">Categoria de Interece</label>
                            <div class=\"input-group \">
                                <span class=\"input-group-addon\"></span>
                                <div id=\"categoria\"></div>
                            </div>
                        </div>

                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"form-actions row\">
                            <button type=\"submit\" class=\"btn blue\">Submit</button>
                            <a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visita_view");
        echo "\"><button type=\"button\" class=\"btn default\">Cancel</button></a>

                        </div>
                    </div>
                </form>
                <div class=\"row\"></div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>";
        
        $__internal_78c9a90bd6e5b3d154f754e1a3a646e9ea18e85230d04f1d9f36c674452a7d52->leave($__internal_78c9a90bd6e5b3d154f754e1a3a646e9ea18e85230d04f1d9f36c674452a7d52_prof);

        
        $__internal_7342ec8c7e78bf96d9ee2c5b244b0b307a270fcd64810500fe9f773f767ac03b->leave($__internal_7342ec8c7e78bf96d9ee2c5b244b0b307a270fcd64810500fe9f773f767ac03b_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_c3f293f8b8f22e58ee71a19de9a97b6fcf650474ecdacfa2a9da40c1dfede15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f293f8b8f22e58ee71a19de9a97b6fcf650474ecdacfa2a9da40c1dfede15b->enter($__internal_c3f293f8b8f22e58ee71a19de9a97b6fcf650474ecdacfa2a9da40c1dfede15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_71b193a1ddd28f06e4aa31e8315560d3529cdcda3da5253e28ca85825598ee82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b193a1ddd28f06e4aa31e8315560d3529cdcda3da5253e28ca85825598ee82->enter($__internal_71b193a1ddd28f06e4aa31e8315560d3529cdcda3da5253e28ca85825598ee82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\">
    <style>
        #pessoa, #categoria{border-radius: 0 !important; max-width: 100%; min-height: 55px; z-index: 0; z-index: 0 !important;}
        #categoria input{border:none}
        #categoria{height: 230px; vertical-align: text-top}
    </style>
";
        
        $__internal_71b193a1ddd28f06e4aa31e8315560d3529cdcda3da5253e28ca85825598ee82->leave($__internal_71b193a1ddd28f06e4aa31e8315560d3529cdcda3da5253e28ca85825598ee82_prof);

        
        $__internal_c3f293f8b8f22e58ee71a19de9a97b6fcf650474ecdacfa2a9da40c1dfede15b->leave($__internal_c3f293f8b8f22e58ee71a19de9a97b6fcf650474ecdacfa2a9da40c1dfede15b_prof);

    }

    // line 11
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6c1ec5050e169da33f38f13d5ea22d9efe2b509a506ab1b5560732eab3747319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1ec5050e169da33f38f13d5ea22d9efe2b509a506ab1b5560732eab3747319->enter($__internal_6c1ec5050e169da33f38f13d5ea22d9efe2b509a506ab1b5560732eab3747319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_278a8822b60555929b04038db67b9a2bd285336f3c01e75d6bdb39b951e35538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278a8822b60555929b04038db67b9a2bd285336f3c01e75d6bdb39b951e35538->enter($__internal_278a8822b60555929b04038db67b9a2bd285336f3c01e75d6bdb39b951e35538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 12
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            var d=new Date(1999,10-1,25)
            var data=d.getTime()
            \$('.date-picker').datepicker({
                autoclose: true,
                format: 'dd/mm/yyyy',
                minDate: '-1d',
                maxDate: '+1d'
            })
            \$('#pessoa').magicSuggest({

                data: [
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pessoas"]) || array_key_exists("pessoas", $context) ? $context["pessoas"] : (function () { throw new Twig_Error_Runtime('Variable "pessoas" does not exist.', 26, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pessoa"]) {
            // line 27
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pessoa"], "nome", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["pessoa"], "contactos", array()), "descricao", array()), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pessoa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                maxSelection:1,
                name: \"nomecompleto\"
            });

            \$('#categoria').magicSuggest({

                data: [
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new Twig_Error_Runtime('Variable "categorias" does not exist.', 39, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 40
            echo "                        ";
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "dependencia", array()))) {
                // line 41
                echo "                            \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "nome", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "dependencia", array()), "nome", array()), "html", null, true);
                echo "\",
                        ";
            }
            // line 43
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                maxSelection:6,
                name: \"categoria\"
            });

        })
    </script>
";
        
        $__internal_278a8822b60555929b04038db67b9a2bd285336f3c01e75d6bdb39b951e35538->leave($__internal_278a8822b60555929b04038db67b9a2bd285336f3c01e75d6bdb39b951e35538_prof);

        
        $__internal_6c1ec5050e169da33f38f13d5ea22d9efe2b509a506ab1b5560732eab3747319->leave($__internal_6c1ec5050e169da33f38f13d5ea22d9efe2b509a506ab1b5560732eab3747319_prof);

    }

    public function getTemplateName()
    {
        return ":MVS:visita_edit_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 44,  225 => 43,  217 => 41,  214 => 40,  210 => 39,  198 => 29,  187 => 27,  183 => 26,  165 => 12,  156 => 11,  137 => 2,  128 => 1,  107 => 125,  34 => 54,  32 => 11,  29 => 10,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block css %}
    <link href=\"{{ asset('global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}\" rel=\"stylesheet\"
          type=\"text/css\">
    <style>
        #pessoa, #categoria{border-radius: 0 !important; max-width: 100%; min-height: 55px; z-index: 0; z-index: 0 !important;}
        #categoria input{border:none}
        #categoria{height: 230px; vertical-align: text-top}
    </style>
{% endblock %}

{% block javascript %}
    <script src=\"{{ asset('global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}\"></script>
    <script>
        \$(document).ready(function () {
            var d=new Date(1999,10-1,25)
            var data=d.getTime()
            \$('.date-picker').datepicker({
                autoclose: true,
                format: 'dd/mm/yyyy',
                minDate: '-1d',
                maxDate: '+1d'
            })
            \$('#pessoa').magicSuggest({

                data: [
                    {% for pessoa in pessoas %}
                    \"{{ pessoa.nome }} - {{ pessoa.contactos.descricao }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                maxSelection:1,
                name: \"nomecompleto\"
            });

            \$('#categoria').magicSuggest({

                data: [
                    {% for categoria in categorias %}
                        {% if(categoria.dependencia is not null) %}
                            \"{{ categoria.nome }} - {{ categoria.dependencia.nome }}\",
                        {% endif %}
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                maxSelection:6,
                name: \"categoria\"
            });

        })
    </script>
{% endblock %}
<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption font-dark\">
                    <i class=\"icon-user font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> Cadastrar Visitas</span>
                </div>
                <div class=\"actions\">

                </div>
            </div>
            <div class=\"portlet-body\">
                <form role=\"form\" class=\"cadastrarVisita\" method=\"POST\" action=\"javascript:;\">
                    <div class=\"form-body\">

                        <div class=\"form-group\" style=\"margin:0 15px;  margin-bottom: 30px\">
                            <label class=\"control-label\">Nome Completo</label>
                            <div class=\"input-group \">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"pessoa\"></div>
                            </div>
                        </div>
                        <div class=\"form-group col-md-3\">
                            <label>Tipo</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-check\"></i>
                                <input type=\"text\" name=\"tipo\" class=\"form-control input-lg\"
                                       placeholder=\"Tipo de visita\"></div>
                        </div>
                        <div class=\"form-group col-md-3\">
                            <label>Duração</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-clock\"></i>
                                <input type=\"text\" name=\"duracao\" class=\"form-control input-lg\"
                                       placeholder=\"Duração em minutos\"></div>
                        </div>
                        <div class=\"form-group col-md-3\">
                            <label>Data</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-calendar-o\"></i>
                                <input type=\"text\" name=\"data\" class=\"form-control input-lg date-picker\"
                                       placeholder=\"data\"></div>
                        </div>
                        <div class=\"form-group col-md-3\">
                            <label>Hora</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-clock-o\"></i>
                                <input type=\"text\" name=\"hora\" class=\"form-control input-lg\"
                                       placeholder=\"Hora\"></div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>Descrição</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-anchor\"></i>
                                <textarea name=\"descricao\" class=\"form-control input-lg\"
                                          placeholder=\"Descrição\" rows=\"9\"></textarea></div>
                        </div>
                        <div class=\"form-group col-md-6\" style=\"\">
                            <label class=\"control-label\">Categoria de Interece</label>
                            <div class=\"input-group \">
                                <span class=\"input-group-addon\"></span>
                                <div id=\"categoria\"></div>
                            </div>
                        </div>

                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"form-actions row\">
                            <button type=\"submit\" class=\"btn blue\">Submit</button>
                            <a href=\"{{ path('visita_view') }}\"><button type=\"button\" class=\"btn default\">Cancel</button></a>

                        </div>
                    </div>
                </form>
                <div class=\"row\"></div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>", ":MVS:visita_edit_form.html.twig", "/var/www/html/hom/app/Resources/views/MVS/visita_edit_form.html.twig");
    }
}

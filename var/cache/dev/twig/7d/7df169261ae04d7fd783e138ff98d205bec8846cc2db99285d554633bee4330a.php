<?php

/* :MVS:visita_form.html.twig */
class __TwigTemplate_0f2d36ba2965dde531714960faa680f0ac14f4f6d8ca245d2ee1aee0af254c49 extends Twig_Template
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
        $__internal_4a4c2f711c9a0d3ce15a5316830d7914ddd2126c58c10fbdb462061cf185bc86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4c2f711c9a0d3ce15a5316830d7914ddd2126c58c10fbdb462061cf185bc86->enter($__internal_4a4c2f711c9a0d3ce15a5316830d7914ddd2126c58c10fbdb462061cf185bc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MVS:visita_form.html.twig"));

        $__internal_b84294448c180123248e3460d713af137e0e17cdf1772768b22a83bb5feee9e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b84294448c180123248e3460d713af137e0e17cdf1772768b22a83bb5feee9e6->enter($__internal_b84294448c180123248e3460d713af137e0e17cdf1772768b22a83bb5feee9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MVS:visita_form.html.twig"));

        // line 1
        $this->displayBlock('css', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('javascript', $context, $blocks);
        // line 113
        echo "
<!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">fechar</button>

            </div>
            <div class=\"modal-body\">
                <p>Some text in the modal.</p>
            </div>
        </div>
    </div>
</div>
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
                                <span class=\"input-group-addon\"><button class=\"btn btn-primary\"  data-toggle=\"modal\" data-target=\"#myModal\" data-toggle=\"modal\" data-target=\"#myModal\" type=\"button\"><i
                                                class=\"fa fa-user-plus\"></i></button></span>
                            </div>
                        </div>
                        <div class=\"form-group col-md-3\">
                            <label>Tipo</label>
                            <div class=\"md-checkbox has-success\">

                            </div>

                            <div class=\"md-radio-inline\">
                                <div class=\"md-radio\">
                                    <input type=\"radio\" id=\"radio14\" checked name=\"tipo\" class=\"md-radiobtn\" value=\"1\">
                                    <label for=\"radio14\">
                                        <span class=\"inc\"></span>
                                        <span class=\"check\"></span>
                                        <span class=\"box\"></span> Guiada </label>
                                </div>
                                <div class=\"md-radio has-primary\">
                                    <input type=\"radio\" id=\"radio16\" name=\"tipo\" class=\"md-radiobtn\" value=\"0\">
                                    <label for=\"radio16\">
                                        <span></span>
                                        <span class=\"check\"></span>
                                        <span class=\"box\"></span> Não Guiada </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group col-md-3\">
                            <label>Duração</label>
                            <div class=\"input-icon input-icon-lg\">
                                <input type=\"text\" name=\"duracao\" value=\"15\" class=\"form-control input-lg duracao\">
                            </div>
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
                                <input type=\"text\" name=\"hora\" value=\"12:00\"
                                       class=\"form-control input-lg timepicker\">
                            </div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>Descrição</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-anchor\"></i>
                                <textarea name=\"descricao\" class=\"form-control input-lg\"
                                          placeholder=\"Descrição\" rows=\"9\" maxlength=\"490\"></textarea></div>
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
        // line 218
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visita_view");
        echo "\">
                                <button type=\"button\" class=\"btn default\">Cancel</button>
                            </a>

                        </div>
                    </div>
                </form>
                <div class=\"row\"></div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>";
        
        $__internal_4a4c2f711c9a0d3ce15a5316830d7914ddd2126c58c10fbdb462061cf185bc86->leave($__internal_4a4c2f711c9a0d3ce15a5316830d7914ddd2126c58c10fbdb462061cf185bc86_prof);

        
        $__internal_b84294448c180123248e3460d713af137e0e17cdf1772768b22a83bb5feee9e6->leave($__internal_b84294448c180123248e3460d713af137e0e17cdf1772768b22a83bb5feee9e6_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_7b960b8783ef2c73f29e5b48876873a5d29083bdb20b824552d400d5f096dfb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b960b8783ef2c73f29e5b48876873a5d29083bdb20b824552d400d5f096dfb6->enter($__internal_7b960b8783ef2c73f29e5b48876873a5d29083bdb20b824552d400d5f096dfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_bcd3d3f0ed1b35917b7c327dff34087135d3c98969bf82304f5c09baee6d28ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd3d3f0ed1b35917b7c327dff34087135d3c98969bf82304f5c09baee6d28ad->enter($__internal_bcd3d3f0ed1b35917b7c327dff34087135d3c98969bf82304f5c09baee6d28ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\">
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>

    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-touchspin/bootstrap.touchspin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <style>
        #pessoa, #categoria {
            border-radius: 0 !important;
            max-width: 100%;
            min-height: 55px;
            z-index: 0;
            z-index: 0 !important;
        }

        #categoria input {
            border: none
        }

        #categoria {
            height: 230px;
            vertical-align: text-top
        }
        .modal-dialog{
            overflow-y:initial !important;
        }
        .modal-body{
            max-height: 600px;
            overflow-y:auto;
        }
        .modal #espandirForm, .modal .form-actions a{display:none}

    </style>
";
        
        $__internal_bcd3d3f0ed1b35917b7c327dff34087135d3c98969bf82304f5c09baee6d28ad->leave($__internal_bcd3d3f0ed1b35917b7c327dff34087135d3c98969bf82304f5c09baee6d28ad_prof);

        
        $__internal_7b960b8783ef2c73f29e5b48876873a5d29083bdb20b824552d400d5f096dfb6->leave($__internal_7b960b8783ef2c73f29e5b48876873a5d29083bdb20b824552d400d5f096dfb6_prof);

    }

    // line 38
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_daf7f85af1221520c8e44a4e3b34c186766a550fc6012275e28af87e28969f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf7f85af1221520c8e44a4e3b34c186766a550fc6012275e28af87e28969f01->enter($__internal_daf7f85af1221520c8e44a4e3b34c186766a550fc6012275e28af87e28969f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_60dc6e7c897330ee18f5692b145e4ba92b42a6a109ff48f24e903e119ad7675f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60dc6e7c897330ee18f5692b145e4ba92b42a6a109ff48f24e903e119ad7675f->enter($__internal_60dc6e7c897330ee18f5692b145e4ba92b42a6a109ff48f24e903e119ad7675f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 39
        echo "
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-touchspin/bootstrap.touchspin.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            var d = new Date(1999, 10 - 1, 25)
            var data = d.getTime()
            \$('.date-picker').datepicker({
                autoclose: true,
                format: 'dd/mm/yyyy',
                minDate: '-1d',
                maxDate: '+1d'
            })

            \$('.timepicker').timepicker({
                showMeridian: false,
                minuteStep: 5,
                autoclose: true
            })
            \$('.duracao').TouchSpin({
                min: 15,
                max: 360,
                step: 5,
                postfix: 'minutos'
            });
            \$('#pessoa').magicSuggest({

                data: [
                    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pessoas"]) || array_key_exists("pessoas", $context) ? $context["pessoas"] : (function () { throw new Twig_Error_Runtime('Variable "pessoas" does not exist.', 70, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pessoa"]) {
            // line 71
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
        // line 73
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                maxSelection: 1,
                name: \"nomecompleto\"
            });

            \$('#categoria').magicSuggest({

                data: [
                    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new Twig_Error_Runtime('Variable "categorias" does not exist.', 83, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 84
            echo "                    ";
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "dependencia", array()))) {
                // line 85
                echo "                    \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "nome", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "dependencia", array()), "nome", array()), "html", null, true);
                echo "\",
                    ";
            }
            // line 87
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                maxSelection: 6,
                name: \"categoria\"
            });
            \$('[data-toggle=\"modal\"]').click(function (e) {
                e.preventDefault();
                \$.ajax({
                    dataType: 'Json',
                    type: 'GET',
                    url: '";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membro_new");
        echo "',
                    data: null,
                    success: function (template) {
                        \$('.modal .modal-body').html(template.message)
                    },
                    error: function (e) {
                        alert(e)
                        \$('.modal .modal-body').html('helo world x')
                    }
                })
            });
        })
    </script>
";
        
        $__internal_60dc6e7c897330ee18f5692b145e4ba92b42a6a109ff48f24e903e119ad7675f->leave($__internal_60dc6e7c897330ee18f5692b145e4ba92b42a6a109ff48f24e903e119ad7675f_prof);

        
        $__internal_daf7f85af1221520c8e44a4e3b34c186766a550fc6012275e28af87e28969f01->leave($__internal_daf7f85af1221520c8e44a4e3b34c186766a550fc6012275e28af87e28969f01_prof);

    }

    public function getTemplateName()
    {
        return ":MVS:visita_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 99,  324 => 88,  318 => 87,  310 => 85,  307 => 84,  303 => 83,  291 => 73,  280 => 71,  276 => 70,  247 => 44,  242 => 42,  237 => 40,  234 => 39,  225 => 38,  185 => 7,  179 => 4,  173 => 2,  164 => 1,  141 => 218,  34 => 113,  32 => 38,  29 => 37,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block css %}
    <link href=\"{{ asset('global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}\" rel=\"stylesheet\"
          type=\"text/css\">
    <link href=\"{{ asset('global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}\" rel=\"stylesheet\"
          type=\"text/css\"/>

    <link href=\"{{ asset('global/plugins/bootstrap-touchspin/bootstrap.touchspin.css') }}\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <style>
        #pessoa, #categoria {
            border-radius: 0 !important;
            max-width: 100%;
            min-height: 55px;
            z-index: 0;
            z-index: 0 !important;
        }

        #categoria input {
            border: none
        }

        #categoria {
            height: 230px;
            vertical-align: text-top
        }
        .modal-dialog{
            overflow-y:initial !important;
        }
        .modal-body{
            max-height: 600px;
            overflow-y:auto;
        }
        .modal #espandirForm, .modal .form-actions a{display:none}

    </style>
{% endblock %}

{% block javascript %}

    <script src=\"{{ asset('global/plugins/bootstrap-touchspin/bootstrap.touchspin.js') }}\"
            type=\"text/javascript\"></script>
    <script src=\"{{ asset('global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}\"
            type=\"text/javascript\"></script>
    <script src=\"{{ asset('global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}\"></script>
    <script>
        \$(document).ready(function () {
            var d = new Date(1999, 10 - 1, 25)
            var data = d.getTime()
            \$('.date-picker').datepicker({
                autoclose: true,
                format: 'dd/mm/yyyy',
                minDate: '-1d',
                maxDate: '+1d'
            })

            \$('.timepicker').timepicker({
                showMeridian: false,
                minuteStep: 5,
                autoclose: true
            })
            \$('.duracao').TouchSpin({
                min: 15,
                max: 360,
                step: 5,
                postfix: 'minutos'
            });
            \$('#pessoa').magicSuggest({

                data: [
                    {% for pessoa in pessoas %}
                    \"{{ pessoa.nome }} - {{ pessoa.contactos.descricao }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                maxSelection: 1,
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
                maxSelection: 6,
                name: \"categoria\"
            });
            \$('[data-toggle=\"modal\"]').click(function (e) {
                e.preventDefault();
                \$.ajax({
                    dataType: 'Json',
                    type: 'GET',
                    url: '{{ path('membro_new') }}',
                    data: null,
                    success: function (template) {
                        \$('.modal .modal-body').html(template.message)
                    },
                    error: function (e) {
                        alert(e)
                        \$('.modal .modal-body').html('helo world x')
                    }
                })
            });
        })
    </script>
{% endblock %}

<!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">fechar</button>

            </div>
            <div class=\"modal-body\">
                <p>Some text in the modal.</p>
            </div>
        </div>
    </div>
</div>
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
                                <span class=\"input-group-addon\"><button class=\"btn btn-primary\"  data-toggle=\"modal\" data-target=\"#myModal\" data-toggle=\"modal\" data-target=\"#myModal\" type=\"button\"><i
                                                class=\"fa fa-user-plus\"></i></button></span>
                            </div>
                        </div>
                        <div class=\"form-group col-md-3\">
                            <label>Tipo</label>
                            <div class=\"md-checkbox has-success\">

                            </div>

                            <div class=\"md-radio-inline\">
                                <div class=\"md-radio\">
                                    <input type=\"radio\" id=\"radio14\" checked name=\"tipo\" class=\"md-radiobtn\" value=\"1\">
                                    <label for=\"radio14\">
                                        <span class=\"inc\"></span>
                                        <span class=\"check\"></span>
                                        <span class=\"box\"></span> Guiada </label>
                                </div>
                                <div class=\"md-radio has-primary\">
                                    <input type=\"radio\" id=\"radio16\" name=\"tipo\" class=\"md-radiobtn\" value=\"0\">
                                    <label for=\"radio16\">
                                        <span></span>
                                        <span class=\"check\"></span>
                                        <span class=\"box\"></span> Não Guiada </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group col-md-3\">
                            <label>Duração</label>
                            <div class=\"input-icon input-icon-lg\">
                                <input type=\"text\" name=\"duracao\" value=\"15\" class=\"form-control input-lg duracao\">
                            </div>
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
                                <input type=\"text\" name=\"hora\" value=\"12:00\"
                                       class=\"form-control input-lg timepicker\">
                            </div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>Descrição</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-anchor\"></i>
                                <textarea name=\"descricao\" class=\"form-control input-lg\"
                                          placeholder=\"Descrição\" rows=\"9\" maxlength=\"490\"></textarea></div>
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
                            <a href=\"{{ path('visita_view') }}\">
                                <button type=\"button\" class=\"btn default\">Cancel</button>
                            </a>

                        </div>
                    </div>
                </form>
                <div class=\"row\"></div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>", ":MVS:visita_form.html.twig", "/var/www/html/hom/app/Resources/views/MVS/visita_form.html.twig");
    }
}

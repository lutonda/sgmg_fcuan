<?php

/* :MUS/api:membro_form_edit.html.twig */
class __TwigTemplate_b4b65b6f85315c7b3331c78d418e01e8d066563730d15e6fd1096249b7fd6074 extends Twig_Template
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
        $__internal_61ccf308f7a2b13dc7ff6063dc3b48c6234c95da3a059e27184a2d40cecfd6f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ccf308f7a2b13dc7ff6063dc3b48c6234c95da3a059e27184a2d40cecfd6f3->enter($__internal_61ccf308f7a2b13dc7ff6063dc3b48c6234c95da3a059e27184a2d40cecfd6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS/api:membro_form_edit.html.twig"));

        $__internal_7065cae5e932c368ffeabda089fab8b258b67152aac96924082cd881e2196548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7065cae5e932c368ffeabda089fab8b258b67152aac96924082cd881e2196548->enter($__internal_7065cae5e932c368ffeabda089fab8b258b67152aac96924082cd881e2196548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS/api:membro_form_edit.html.twig"));

        // line 1
        $this->displayBlock('css', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('javascript', $context, $blocks);
        // line 41
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption font-dark\">
                    <i class=\"icon-book-open icon-4x font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> EDITAR MEMBRO</span>
                </div>
                <div class=\"actions\">

                </div>
            </div>
            <div class=\"portlet-body\">
                <form role=\"form\" class=\"cadastrarMembro\">
                    <div class=\"form-body\">
                        <div class=\"form-group col-md-12\">
                            <label>Nome Copleto</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-user\"></i>
                                <input type=\"text\" name=\"nomecompleto\" class=\"form-control input-lg\"
                                       placeholder=\"nome completo\"></div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>Tipo</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-plug\"></i>
                                <select name=\"tipo\" class=\"form-control input-lg\" style=\"border-radius: 0 !important;\">
                                    ";
        // line 69
        $context["i"] = 0;
        // line 70
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipos"]) || array_key_exists("tipos", $context) ? $context["tipos"] : (function () { throw new Twig_Error_Runtime('Variable "tipos" does not exist.', 70, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
            // line 71
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 71, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["tipo"], "html", null, true);
            echo "</option>
                                    ";
            // line 72
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 72, $this->getSourceContext()); })()) + 1);
            // line 73
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                </select></div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>Genero</label>
                            <div class=\"mt-radio-inline\">
                                <label class=\"mt-radio\">
                                    <input type=\"radio\" name=\"genero\" id=\"optionsRadios4\" value=\"0\"
                                           checked=\"\"> Masculino
                                    <span></span>
                                </label>
                                <label class=\"mt-radio\">
                                    <input type=\"radio\" name=\"genero\" id=\"optionsRadios5\" value=\"1\">
                                    Femenino
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>E-mail</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-envelope-o\"></i>
                                <input type=\"text\" name=\"contacto[0]\" class=\"form-control input-lg\" placeholder=\"E-mail\">
                                <input type=\"text\" name=\"tipocontacto[0]\" class=\"hidden\" value=\"4\">
                            </div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>Username</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-user-plus\"></i>
                                <input type=\"text\" name=\"username\" class=\"form-control input-lg\"
                                       placeholder=\"username\"></div>
                        </div>
                    </div>
                    <div class=\"form-body\">
                        <div class=\"row\"></div>
                        <div class=\"form-group col-md-6\">
                            <label>Nivel Academico</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-plug\"></i>
                                <select name=\"nivelacademico\" class=\"form-control input-lg\"
                                        style=\"border-radius: 0 !important;\">
                                    ";
        // line 115
        $context["i"] = 0;
        // line 116
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nivelacademico"]) || array_key_exists("nivelacademico", $context) ? $context["nivelacademico"] : (function () { throw new Twig_Error_Runtime('Variable "nivelacademico" does not exist.', 116, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nivel"]) {
            // line 117
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 117, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["nivel"], "html", null, true);
            echo "</option>
                                        ";
            // line 118
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 118, $this->getSourceContext()); })()) + 1);
            // line 119
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nivel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                                </select></div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>Especialidades</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-plug\"></i>
                                <select name=\"especialidade\" class=\"form-control input-lg\"
                                        style=\"border-radius: 0 !important;\">
                                    ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["especialidades"]) || array_key_exists("especialidades", $context) ? $context["especialidades"] : (function () { throw new Twig_Error_Runtime('Variable "especialidades" does not exist.', 128, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["especialidade"]) {
            // line 129
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["especialidade"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["especialidade"], "nome", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['especialidade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "
                                </select></div>
                        </div>
                        <div class=\"form-group col-md-12\">
                            <label>Data de Nascimento</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-calendar-o\"></i>
                                <input name=\"datadenascimento\" type=\"text\" class=\"form-control input-lg date-picker\"
                                       placeholder=\"Data de Nascimento\" autocomplete=\"no\">
                            </div>
                        </div>

                        <div class=\"form-group col-md-6\">
                            <label>Morada</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-map-o\"></i>
                                <select name=\"morada\"
                                        class=\"form-control input-lg\"
                                        style=\"border-radius: 0 !important;\">
                                    <option disabled selected=\"selected\">Escolha uma morada</option>
                                    ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["morada"]) || array_key_exists("morada", $context) ? $context["morada"] : (function () { throw new Twig_Error_Runtime('Variable "morada" does not exist.', 151, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 152
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["el"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["el"], "nome", array())), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["el"], "idprovincia", array()), "nome", array())), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["el"], "idprovincia", array()), "idpais", array()), "nome", array())), "html", null, true);
            echo " </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>Naturalidade</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-map-marker\"></i>
                                <select name=\"naturalidade\"
                                        class=\"form-control input-lg\"
                                        style=\"border-radius: 0 !important;\">
                                    <option disabled selected=\"selected\">Escolha uma Naturalidade</option>
                                    ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["morada"]) || array_key_exists("morada", $context) ? $context["morada"] : (function () { throw new Twig_Error_Runtime('Variable "morada" does not exist.', 165, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 166
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["el"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["el"], "nome", array())), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["el"], "idprovincia", array()), "nome", array())), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["el"], "idprovincia", array()), "idpais", array()), "nome", array())), "html", null, true);
            echo " </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group col-md-6 grey\" id=\"contactosMembro\" style=\"background: #f0f0f0\">
                            <!-- BEGIN Portlet PORTLET-->
                            <div class=\"form-group\">
                                <label style=\"width: 45%\">Contacto</label>
                                <label style=\"width: 30%\">Tipo</label></div>
                            <div class=\"r-group form-group\">
                                <input type=\"text\" name=\"contacto[1]\" id=\"elemento-qtd_1\"
                                       data-pattern-name=\"contacto[++]\" data-pattern-id=\"elemento-qtd_++\"
                                       class=\"form-control input-lg col-md-6\" style=\"width: 45%\"/>
                                <select name=\"tipocontacto[1]\" id=\"elemento-nome_1\"
                                        data-pattern-name=\"tipocontacto[++]\" data-pattern-id=\"elemento-nome_++\"
                                        class=\"form-control input-lg col-md-6\"
                                        style=\"width: 40%;border-radius: 0 !important;\">
                                    ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipoContacto"]) || array_key_exists("tipoContacto", $context) ? $context["tipoContacto"] : (function () { throw new Twig_Error_Runtime('Variable "tipoContacto" does not exist.', 184, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 185
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["el"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["el"], "nome", array()), "html", null, true);
            echo " </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                                </select>
                                <p>
                                    <!-- Add a remove button for the item. If one didn't exist, it would be added to overall group -->
                                    <button href=\"javascript:;\" data-repeater-delete=\"\"
                                            class=\"r-btnRemove btn btn-danger mt-repeater-delete btn-lg\">
                                        <i class=\"fa fa-close\"></i>
                                    </button>
                                </p>
                            </div>
                            <div class=\"actions\">
                                <button type=\"button\" class=\"r-btnAdd btn default btn-sm\"><i
                                            class=\"fa fa-plus icon-black\"></i> Adicionar
                                </button>
                            </div>
                            .
                            <!-- END GRID PORTLET-->
                        </div>
                        .
                        <div class=\"form-group col-md-6\" style=\"background: #f0f0f0\">
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"form-actions row\">
                            <button type=\"submit\" class=\"btn blue\">Submit</button>
                            <button type=\"button\" class=\"btn default\">Cancel</button>
                            <button id=\"espandirForm\" class=\"btn btn-flickr left\" type=\"button\">
                                <i class=\"fa fa-expand fa-fw\"></i> Formulario Completo
                            </button>
                            <button id=\"reduzirForm\" class=\"btn btn-flickr left hidden\" type=\"button\">
                                <i class=\"fa fa-minus-circle fa-fw\"></i> Formulario reduzido
                            </button>
                        </div>
                    </div>
                </form>
                <div class=\"row\"></div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>";
        
        $__internal_61ccf308f7a2b13dc7ff6063dc3b48c6234c95da3a059e27184a2d40cecfd6f3->leave($__internal_61ccf308f7a2b13dc7ff6063dc3b48c6234c95da3a059e27184a2d40cecfd6f3_prof);

        
        $__internal_7065cae5e932c368ffeabda089fab8b258b67152aac96924082cd881e2196548->leave($__internal_7065cae5e932c368ffeabda089fab8b258b67152aac96924082cd881e2196548_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_46e73a856d1340b240066adfa33513b1f26ceedd6b57eeb33c30326087741b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e73a856d1340b240066adfa33513b1f26ceedd6b57eeb33c30326087741b0a->enter($__internal_46e73a856d1340b240066adfa33513b1f26ceedd6b57eeb33c30326087741b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_9742c8940b16d369df0ad894ff34a12ed8a55ff1b9fb480ca60a31032669e732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9742c8940b16d369df0ad894ff34a12ed8a55ff1b9fb480ca60a31032669e732->enter($__internal_9742c8940b16d369df0ad894ff34a12ed8a55ff1b9fb480ca60a31032669e732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\">
";
        
        $__internal_9742c8940b16d369df0ad894ff34a12ed8a55ff1b9fb480ca60a31032669e732->leave($__internal_9742c8940b16d369df0ad894ff34a12ed8a55ff1b9fb480ca60a31032669e732_prof);

        
        $__internal_46e73a856d1340b240066adfa33513b1f26ceedd6b57eeb33c30326087741b0a->leave($__internal_46e73a856d1340b240066adfa33513b1f26ceedd6b57eeb33c30326087741b0a_prof);

    }

    // line 6
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_13db1764e78a4604f355eac05b8d73e6b4816117a2097ae59e001c4f5f132b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13db1764e78a4604f355eac05b8d73e6b4816117a2097ae59e001c4f5f132b46->enter($__internal_13db1764e78a4604f355eac05b8d73e6b4816117a2097ae59e001c4f5f132b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_4b50c1ac26fef705627b73ba02453cd0dfd2c119bff64f86404a98b3260d17a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b50c1ac26fef705627b73ba02453cd0dfd2c119bff64f86404a98b3260d17a4->enter($__internal_4b50c1ac26fef705627b73ba02453cd0dfd2c119bff64f86404a98b3260d17a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$('.date-picker').datepicker({
                autoclose: true,
                format: 'dd/mm/yyyy'
            })
            \$('#contactosMembro').repeater({
                btnAddClass: 'r-btnAdd',
                btnRemoveClass: 'r-btnRemove',
                groupClass: 'r-group',
                minItems: 0,
                maxItems: 0,
                startingIndex: 0,
                reindexOnDelete: true,
                repeatMode: 'append',
                animation: null,
                animationSpeed: 400,
                animationEasing: 'swing',
                clearValues: true
            });
            \$('#moradax').magicSuggest({
                data: [
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["morada"]) || array_key_exists("morada", $context) ? $context["morada"] : (function () { throw new Twig_Error_Runtime('Variable "morada" does not exist.', 30, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mr"]) {
            // line 31
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mr"], "nome", array()), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"habitoMineiro\"
            });
        })
    </script>
";
        
        $__internal_4b50c1ac26fef705627b73ba02453cd0dfd2c119bff64f86404a98b3260d17a4->leave($__internal_4b50c1ac26fef705627b73ba02453cd0dfd2c119bff64f86404a98b3260d17a4_prof);

        
        $__internal_13db1764e78a4604f355eac05b8d73e6b4816117a2097ae59e001c4f5f132b46->leave($__internal_13db1764e78a4604f355eac05b8d73e6b4816117a2097ae59e001c4f5f132b46_prof);

    }

    public function getTemplateName()
    {
        return ":MUS/api:membro_form_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 33,  394 => 31,  390 => 30,  363 => 7,  354 => 6,  340 => 2,  331 => 1,  282 => 187,  271 => 185,  267 => 184,  249 => 168,  234 => 166,  230 => 165,  217 => 154,  202 => 152,  198 => 151,  176 => 131,  165 => 129,  161 => 128,  151 => 120,  145 => 119,  143 => 118,  136 => 117,  131 => 116,  129 => 115,  86 => 74,  80 => 73,  78 => 72,  71 => 71,  66 => 70,  64 => 69,  34 => 41,  32 => 6,  29 => 5,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block css %}
    <link href=\"{{ asset('global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}\" rel=\"stylesheet\"
          type=\"text/css\">
{% endblock %}

{% block javascript %}
    <script src=\"{{ asset('global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}\"></script>
    <script>
        \$(document).ready(function () {
            \$('.date-picker').datepicker({
                autoclose: true,
                format: 'dd/mm/yyyy'
            })
            \$('#contactosMembro').repeater({
                btnAddClass: 'r-btnAdd',
                btnRemoveClass: 'r-btnRemove',
                groupClass: 'r-group',
                minItems: 0,
                maxItems: 0,
                startingIndex: 0,
                reindexOnDelete: true,
                repeatMode: 'append',
                animation: null,
                animationSpeed: 400,
                animationEasing: 'swing',
                clearValues: true
            });
            \$('#moradax').magicSuggest({
                data: [
                    {% for mr in morada %}
                    \"{{ mr.nome }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"habitoMineiro\"
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
                    <i class=\"icon-book-open icon-4x font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> EDITAR MEMBRO</span>
                </div>
                <div class=\"actions\">

                </div>
            </div>
            <div class=\"portlet-body\">
                <form role=\"form\" class=\"cadastrarMembro\">
                    <div class=\"form-body\">
                        <div class=\"form-group col-md-12\">
                            <label>Nome Copleto</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-user\"></i>
                                <input type=\"text\" name=\"nomecompleto\" class=\"form-control input-lg\"
                                       placeholder=\"nome completo\"></div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>Tipo</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-plug\"></i>
                                <select name=\"tipo\" class=\"form-control input-lg\" style=\"border-radius: 0 !important;\">
                                    {% set i=0 %}
                                    {% for tipo in tipos %}
                                        <option value=\"{{ i }}\">{{ tipo }}</option>
                                    {% set i=i+1 %}
                                    {% endfor %}
                                </select></div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>Genero</label>
                            <div class=\"mt-radio-inline\">
                                <label class=\"mt-radio\">
                                    <input type=\"radio\" name=\"genero\" id=\"optionsRadios4\" value=\"0\"
                                           checked=\"\"> Masculino
                                    <span></span>
                                </label>
                                <label class=\"mt-radio\">
                                    <input type=\"radio\" name=\"genero\" id=\"optionsRadios5\" value=\"1\">
                                    Femenino
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>E-mail</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-envelope-o\"></i>
                                <input type=\"text\" name=\"contacto[0]\" class=\"form-control input-lg\" placeholder=\"E-mail\">
                                <input type=\"text\" name=\"tipocontacto[0]\" class=\"hidden\" value=\"4\">
                            </div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>Username</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-user-plus\"></i>
                                <input type=\"text\" name=\"username\" class=\"form-control input-lg\"
                                       placeholder=\"username\"></div>
                        </div>
                    </div>
                    <div class=\"form-body\">
                        <div class=\"row\"></div>
                        <div class=\"form-group col-md-6\">
                            <label>Nivel Academico</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-plug\"></i>
                                <select name=\"nivelacademico\" class=\"form-control input-lg\"
                                        style=\"border-radius: 0 !important;\">
                                    {% set i=0 %}
                                    {% for nivel in nivelacademico %}
                                        <option value=\"{{ i }}\">{{ nivel }}</option>
                                        {% set i=i+1 %}
                                    {% endfor %}
                                </select></div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>Especialidades</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-plug\"></i>
                                <select name=\"especialidade\" class=\"form-control input-lg\"
                                        style=\"border-radius: 0 !important;\">
                                    {% for especialidade in especialidades %}
                                        <option value=\"{{ especialidade.id }}\">{{ especialidade.nome }}</option>
                                    {% endfor %}

                                </select></div>
                        </div>
                        <div class=\"form-group col-md-12\">
                            <label>Data de Nascimento</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-calendar-o\"></i>
                                <input name=\"datadenascimento\" type=\"text\" class=\"form-control input-lg date-picker\"
                                       placeholder=\"Data de Nascimento\" autocomplete=\"no\">
                            </div>
                        </div>

                        <div class=\"form-group col-md-6\">
                            <label>Morada</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-map-o\"></i>
                                <select name=\"morada\"
                                        class=\"form-control input-lg\"
                                        style=\"border-radius: 0 !important;\">
                                    <option disabled selected=\"selected\">Escolha uma morada</option>
                                    {% for el in morada %}
                                        <option value=\"{{ el.id }}\">{{ el.nome |capitalize }}, {{ el.idprovincia.nome |capitalize }}, {{ el.idprovincia.idpais.nome |capitalize }} </option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>Naturalidade</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-map-marker\"></i>
                                <select name=\"naturalidade\"
                                        class=\"form-control input-lg\"
                                        style=\"border-radius: 0 !important;\">
                                    <option disabled selected=\"selected\">Escolha uma Naturalidade</option>
                                    {% for el in morada %}
                                        <option value=\"{{ el.id }}\">{{ el.nome |capitalize }}, {{ el.idprovincia.nome |capitalize }}, {{ el.idprovincia.idpais.nome |capitalize }} </option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group col-md-6 grey\" id=\"contactosMembro\" style=\"background: #f0f0f0\">
                            <!-- BEGIN Portlet PORTLET-->
                            <div class=\"form-group\">
                                <label style=\"width: 45%\">Contacto</label>
                                <label style=\"width: 30%\">Tipo</label></div>
                            <div class=\"r-group form-group\">
                                <input type=\"text\" name=\"contacto[1]\" id=\"elemento-qtd_1\"
                                       data-pattern-name=\"contacto[++]\" data-pattern-id=\"elemento-qtd_++\"
                                       class=\"form-control input-lg col-md-6\" style=\"width: 45%\"/>
                                <select name=\"tipocontacto[1]\" id=\"elemento-nome_1\"
                                        data-pattern-name=\"tipocontacto[++]\" data-pattern-id=\"elemento-nome_++\"
                                        class=\"form-control input-lg col-md-6\"
                                        style=\"width: 40%;border-radius: 0 !important;\">
                                    {% for el in tipoContacto %}
                                        <option value=\"{{ el.id }}\">{{ el.nome }} </option>
                                    {% endfor %}
                                </select>
                                <p>
                                    <!-- Add a remove button for the item. If one didn't exist, it would be added to overall group -->
                                    <button href=\"javascript:;\" data-repeater-delete=\"\"
                                            class=\"r-btnRemove btn btn-danger mt-repeater-delete btn-lg\">
                                        <i class=\"fa fa-close\"></i>
                                    </button>
                                </p>
                            </div>
                            <div class=\"actions\">
                                <button type=\"button\" class=\"r-btnAdd btn default btn-sm\"><i
                                            class=\"fa fa-plus icon-black\"></i> Adicionar
                                </button>
                            </div>
                            .
                            <!-- END GRID PORTLET-->
                        </div>
                        .
                        <div class=\"form-group col-md-6\" style=\"background: #f0f0f0\">
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"form-actions row\">
                            <button type=\"submit\" class=\"btn blue\">Submit</button>
                            <button type=\"button\" class=\"btn default\">Cancel</button>
                            <button id=\"espandirForm\" class=\"btn btn-flickr left\" type=\"button\">
                                <i class=\"fa fa-expand fa-fw\"></i> Formulario Completo
                            </button>
                            <button id=\"reduzirForm\" class=\"btn btn-flickr left hidden\" type=\"button\">
                                <i class=\"fa fa-minus-circle fa-fw\"></i> Formulario reduzido
                            </button>
                        </div>
                    </div>
                </form>
                <div class=\"row\"></div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>", ":MUS/api:membro_form_edit.html.twig", "/var/www/html/hom/app/Resources/views/MUS/api/membro_form_edit.html.twig");
    }
}

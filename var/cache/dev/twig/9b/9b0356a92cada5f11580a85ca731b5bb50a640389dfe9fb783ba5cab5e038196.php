<?php

/* :MUS/api:membro_form.html.twig */
class __TwigTemplate_a78396828228a594d6fe74d5c5524c784b0da6800f1bafde3c8f14ba80dc9e76 extends Twig_Template
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
        $__internal_6b51e10b3054135f6a2c1d851491af8f1ace33dc5a91ce152118353f279d9dec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b51e10b3054135f6a2c1d851491af8f1ace33dc5a91ce152118353f279d9dec->enter($__internal_6b51e10b3054135f6a2c1d851491af8f1ace33dc5a91ce152118353f279d9dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS/api:membro_form.html.twig"));

        $__internal_48de3ce0fb2a07e11add5d451f5b99181521645753e2a700ee3d17833ee19823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48de3ce0fb2a07e11add5d451f5b99181521645753e2a700ee3d17833ee19823->enter($__internal_48de3ce0fb2a07e11add5d451f5b99181521645753e2a700ee3d17833ee19823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS/api:membro_form.html.twig"));

        // line 1
        $this->displayBlock('css', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('javascript', $context, $blocks);
        // line 51
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption font-dark\">
                    <i class=\"icon-user font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> MEMBROS</span>
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
        // line 79
        $context["i"] = 0;
        // line 80
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipos"]) || array_key_exists("tipos", $context) ? $context["tipos"] : (function () { throw new Twig_Error_Runtime('Variable "tipos" does not exist.', 80, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
            // line 81
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 81, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["tipo"], "html", null, true);
            echo "</option>
                                    ";
            // line 82
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 82, $this->getSourceContext()); })()) + 1);
            // line 83
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
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
                    <div class=\"form-body mais hidden\">
                        <div class=\"row\"></div>
                        <div class=\"form-group col-md-6\">
                            <label>Nivel Academico</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-plug\"></i>
                                <select name=\"nivelacademico\" class=\"form-control input-lg\"
                                        style=\"border-radius: 0 !important;\">
                                    ";
        // line 125
        $context["i"] = 0;
        // line 126
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nivelacademico"]) || array_key_exists("nivelacademico", $context) ? $context["nivelacademico"] : (function () { throw new Twig_Error_Runtime('Variable "nivelacademico" does not exist.', 126, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nivel"]) {
            // line 127
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 127, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["nivel"], "html", null, true);
            echo "</option>
                                        ";
            // line 128
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 128, $this->getSourceContext()); })()) + 1);
            // line 129
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nivel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                                </select></div>
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label>Especialidades</label>
                            <div class=\"input-icon input-icon-lg\">
                                <i class=\"fa fa-plug\"></i>
                                <select name=\"especialidade\" class=\"form-control input-lg\"
                                        style=\"border-radius: 0 !important;\">
                                    ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["especialidades"]) || array_key_exists("especialidades", $context) ? $context["especialidades"] : (function () { throw new Twig_Error_Runtime('Variable "especialidades" does not exist.', 138, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["especialidade"]) {
            // line 139
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
        // line 141
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
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["morada"]) || array_key_exists("morada", $context) ? $context["morada"] : (function () { throw new Twig_Error_Runtime('Variable "morada" does not exist.', 161, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 162
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
        // line 164
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
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["morada"]) || array_key_exists("morada", $context) ? $context["morada"] : (function () { throw new Twig_Error_Runtime('Variable "morada" does not exist.', 175, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 176
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
        // line 178
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
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipoContacto"]) || array_key_exists("tipoContacto", $context) ? $context["tipoContacto"] : (function () { throw new Twig_Error_Runtime('Variable "tipoContacto" does not exist.', 194, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 195
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
        // line 197
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
                            <a href=\"/membros\"><button type=\"button\" class=\"btn default\">Cancel</button></a>
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
        
        $__internal_6b51e10b3054135f6a2c1d851491af8f1ace33dc5a91ce152118353f279d9dec->leave($__internal_6b51e10b3054135f6a2c1d851491af8f1ace33dc5a91ce152118353f279d9dec_prof);

        
        $__internal_48de3ce0fb2a07e11add5d451f5b99181521645753e2a700ee3d17833ee19823->leave($__internal_48de3ce0fb2a07e11add5d451f5b99181521645753e2a700ee3d17833ee19823_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_c28d44983764ad57141a03a82fea5aa52f0b5304a32bbf0ebd0fc7ec20cfcf6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28d44983764ad57141a03a82fea5aa52f0b5304a32bbf0ebd0fc7ec20cfcf6b->enter($__internal_c28d44983764ad57141a03a82fea5aa52f0b5304a32bbf0ebd0fc7ec20cfcf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_9beb31f91f3006b6f1d266c518ac3a9947510d4de9b5fcd28b6599a454f2199e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9beb31f91f3006b6f1d266c518ac3a9947510d4de9b5fcd28b6599a454f2199e->enter($__internal_9beb31f91f3006b6f1d266c518ac3a9947510d4de9b5fcd28b6599a454f2199e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\">
";
        
        $__internal_9beb31f91f3006b6f1d266c518ac3a9947510d4de9b5fcd28b6599a454f2199e->leave($__internal_9beb31f91f3006b6f1d266c518ac3a9947510d4de9b5fcd28b6599a454f2199e_prof);

        
        $__internal_c28d44983764ad57141a03a82fea5aa52f0b5304a32bbf0ebd0fc7ec20cfcf6b->leave($__internal_c28d44983764ad57141a03a82fea5aa52f0b5304a32bbf0ebd0fc7ec20cfcf6b_prof);

    }

    // line 6
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_7fb92220dd45fd6b0f683ab0400afe901a1c2b710af32d59cedeb4a0342762bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb92220dd45fd6b0f683ab0400afe901a1c2b710af32d59cedeb4a0342762bd->enter($__internal_7fb92220dd45fd6b0f683ab0400afe901a1c2b710af32d59cedeb4a0342762bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_0863dbad52d7412019ae5273858ed1cab8c65cc21e67178a5667b57ebb5f2411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0863dbad52d7412019ae5273858ed1cab8c65cc21e67178a5667b57ebb5f2411->enter($__internal_0863dbad52d7412019ae5273858ed1cab8c65cc21e67178a5667b57ebb5f2411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
            \$('#espandirForm').click(function (e) {
                \$('div.mais').removeClass('hidden');
                \$(this).addClass('hidden');
                \$('#reduzirForm').removeClass('hidden');
            })
            \$('#reduzirForm').click(function () {
                \$('div.mais').addClass('hidden');
                \$(this).addClass('hidden');
                \$('#espandirForm').removeClass('hidden');
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
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["morada"]) || array_key_exists("morada", $context) ? $context["morada"] : (function () { throw new Twig_Error_Runtime('Variable "morada" does not exist.', 40, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mr"]) {
            // line 41
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mr"], "nome", array()), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"habitoMineiro\"
            });
        })
    </script>
";
        
        $__internal_0863dbad52d7412019ae5273858ed1cab8c65cc21e67178a5667b57ebb5f2411->leave($__internal_0863dbad52d7412019ae5273858ed1cab8c65cc21e67178a5667b57ebb5f2411_prof);

        
        $__internal_7fb92220dd45fd6b0f683ab0400afe901a1c2b710af32d59cedeb4a0342762bd->leave($__internal_7fb92220dd45fd6b0f683ab0400afe901a1c2b710af32d59cedeb4a0342762bd_prof);

    }

    public function getTemplateName()
    {
        return ":MUS/api:membro_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 43,  404 => 41,  400 => 40,  363 => 7,  354 => 6,  340 => 2,  331 => 1,  282 => 197,  271 => 195,  267 => 194,  249 => 178,  234 => 176,  230 => 175,  217 => 164,  202 => 162,  198 => 161,  176 => 141,  165 => 139,  161 => 138,  151 => 130,  145 => 129,  143 => 128,  136 => 127,  131 => 126,  129 => 125,  86 => 84,  80 => 83,  78 => 82,  71 => 81,  66 => 80,  64 => 79,  34 => 51,  32 => 6,  29 => 5,  27 => 1,);
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
            \$('#espandirForm').click(function (e) {
                \$('div.mais').removeClass('hidden');
                \$(this).addClass('hidden');
                \$('#reduzirForm').removeClass('hidden');
            })
            \$('#reduzirForm').click(function () {
                \$('div.mais').addClass('hidden');
                \$(this).addClass('hidden');
                \$('#espandirForm').removeClass('hidden');
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
                    <i class=\"icon-user font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> MEMBROS</span>
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
                    <div class=\"form-body mais hidden\">
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
                            <a href=\"/membros\"><button type=\"button\" class=\"btn default\">Cancel</button></a>
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
</div>", ":MUS/api:membro_form.html.twig", "/var/www/html/hom/app/Resources/views/MUS/api/membro_form.html.twig");
    }
}

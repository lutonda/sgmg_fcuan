<?php

/* :SYS/definicoes:definicoes_ACL.html.twig */
class __TwigTemplate_00a320c240c42904ece858863e40ff8404310cb9638d6d26cef42128d30f9702 extends Twig_Template
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
        $__internal_9adb3041a06aebe0322dd247bff54f4b007df64b9ac47e35b39c23dd0079151a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9adb3041a06aebe0322dd247bff54f4b007df64b9ac47e35b39c23dd0079151a->enter($__internal_9adb3041a06aebe0322dd247bff54f4b007df64b9ac47e35b39c23dd0079151a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":SYS/definicoes:definicoes_ACL.html.twig"));

        $__internal_3eb9362591fffa3110f134815c6a1380cc8367fc2e9e17495e5d28366cfb382b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb9362591fffa3110f134815c6a1380cc8367fc2e9e17495e5d28366cfb382b->enter($__internal_3eb9362591fffa3110f134815c6a1380cc8367fc2e9e17495e5d28366cfb382b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":SYS/definicoes:definicoes_ACL.html.twig"));

        // line 1
        $this->displayBlock('css', $context, $blocks);
        // line 4
        $this->displayBlock('javascript', $context, $blocks);
        // line 35
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption font-dark\">
                    <i class=\"icon-user font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> Permissões</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                        <button type=\"button\" class=\"btn blue activarform\" title=\"activar\">Activar Edição</button>
                        <button type=\"button\" class=\"btn red activarform hidden\">Cancelar Edição</button>

                    </div>
                </div>
            </div>
            <form action=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("definicoes_config", array("tipo" => "ACL"));
        echo "\" method=\"POST\"><input value=\"ACL\" name=\"ACL\"
                                                                                               class=\"hidden\"
                                                                                               style=\"display: none\">
                <div class=\"portlet-body\">

                    <div class=\"table-scrollable\" style=\"overflow: auto; max-height: 400px\">

                        <table class=\"table table-striped table-bordered table-hover\">
                            <thead>
                            <tr>
                                <th scope=\"col\" colspan=\"2\"
                                    class=\"caption font-red-sunglo caption-subject bold uppercase\">
                                    <i class=\"icon-settings font-red-sunglo\"></i>
                                    Descrição
                                </th>
                                <th scope=\"col\" class=\"caption font-red-sunglo caption-subject bold uppercase\">
                                    <i class=\"icon-settings font-red-sunglo\"></i>
                                    Administrador
                                </th>
                                <th scope=\"col\" class=\"caption font-red-sunglo caption-subject bold uppercase\">
                                    <i class=\"icon-settings font-red-sunglo\"></i>
                                    Gestor
                                </th>
                                <th scope=\"col\" class=\"caption font-red-sunglo caption-subject bold uppercase\">
                                    <i class=\"icon-settings font-red-sunglo\"></i>
                                    Funcionario
                                </th>
                                <th scope=\"col\" class=\"caption font-red-sunglo caption-subject bold uppercase\">
                                    <i class=\"icon-settings font-red-sunglo\"></i>
                                    Visitante
                                </th>
                                <th scope=\"col\" class=\"caption font-red-sunglo caption-subject bold uppercase\">
                                    <i class=\"icon-settings font-red-sunglo\"></i>
                                    Anonymo
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 90
        $context["i"] = 1;
        // line 91
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 91, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dado"]) {
            // line 92
            echo "                                <tr>
                                    <td></td>
                                    <th> ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dado"], "descricao", array()), "html", null, true);
            echo " </th>
                                    <td>
                                        <div class=\"md-checkbox has-success\">
                                            <input type=\"checkbox\" id=\"admin[";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 97, $this->getSourceContext()); })()), "html", null, true);
            echo "]\" class=\"md-check disabled\"
                                                   name=\"admin[";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 98, $this->getSourceContext()); })()), "html", null, true);
            echo "]\"
                                                   ";
            // line 99
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["dado"], "admin", array()))) {
                echo "checked";
            }
            echo " disabled/>
                                            <label for=\"admin[";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 100, $this->getSourceContext()); })()), "html", null, true);
            echo "]\">
                                                <span class=\"inc\"></span>
                                                <span class=\"check\"></span>
                                                <span class=\"box\"></span></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"md-checkbox has-success\">
                                            <input type=\"checkbox\" id=\"gestor[";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 108, $this->getSourceContext()); })()), "html", null, true);
            echo "]\" class=\"md-check\"
                                                   name=\"gestor[";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 109, $this->getSourceContext()); })()), "html", null, true);
            echo "]\" value=\"1\"
                                                   ";
            // line 110
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["dado"], "gestor", array()))) {
                echo "checked";
            }
            echo " disabled/>
                                            <label for=\"gestor[";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 111, $this->getSourceContext()); })()), "html", null, true);
            echo "]\">
                                                <span class=\"inc\"></span>
                                                <span class=\"check\"></span>
                                                <span class=\"box\"></span></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"md-checkbox has-success\">
                                            <input type=\"checkbox\" id=\"funcionario[";
            // line 119
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 119, $this->getSourceContext()); })()), "html", null, true);
            echo "]\" class=\"md-check\"
                                                   name=\"funcionario[";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 120, $this->getSourceContext()); })()), "html", null, true);
            echo "]\" value=\"1\"
                                                   ";
            // line 121
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["dado"], "funcionario", array()))) {
                echo "checked";
            }
            echo " disabled/>
                                            <label for=\"funcionario[";
            // line 122
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 122, $this->getSourceContext()); })()), "html", null, true);
            echo "]\">
                                                <span class=\"inc\"></span>
                                                <span class=\"check\"></span>
                                                <span class=\"box\"></span></label>
                                        </div>

                                    </td>
                                    <td>
                                        <div class=\"md-checkbox has-success\">
                                            <input type=\"checkbox\" id=\"visitante[";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 131, $this->getSourceContext()); })()), "html", null, true);
            echo "]\" class=\"md-check\"
                                                   name=\"visitante[";
            // line 132
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 132, $this->getSourceContext()); })()), "html", null, true);
            echo "]\" value=\"1\"
                                                   ";
            // line 133
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["dado"], "visitante", array()))) {
                echo "checked";
            }
            echo " disabled/>
                                            <label for=\"visitante[";
            // line 134
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 134, $this->getSourceContext()); })()), "html", null, true);
            echo "]\">
                                                <span class=\"inc\"></span>
                                                <span class=\"check\"></span>
                                                <span class=\"box\"></span></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"md-checkbox has-success\">
                                            <input type=\"checkbox\" id=\"anonimo[";
            // line 142
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 142, $this->getSourceContext()); })()), "html", null, true);
            echo "]\" class=\"md-check\"
                                                   name=\"anonimo[";
            // line 143
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 143, $this->getSourceContext()); })()), "html", null, true);
            echo "]\" value=\"1\"
                                                   ";
            // line 144
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["dado"], "anonimo", array()))) {
                echo "checked";
            }
            echo " disabled/>
                                            <label for=\"anonimo[";
            // line 145
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "]\">
                                                <span class=\"inc\"></span>
                                                <span class=\"check\"></span>
                                                <span class=\"box\"></span></label>
                                        </div>

                                    </td>
                                </tr>
                                ";
            // line 153
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 153, $this->getSourceContext()); })()) + 1);
            // line 154
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                            </tbody>
                        </table>

                    </div>
                    <div class=\"form-actions noborder hidden\">
                        <button type=\"submit\" class=\"btn blue\">Salvar</button>
                        <button type=\"button\" class=\"btn default\">Cancel</button>
                    </div>
            </form>
        </div>
    </div>
    <!-- END EXAMPLE TABLE PORTLET-->
</div>
</div>";
        
        $__internal_9adb3041a06aebe0322dd247bff54f4b007df64b9ac47e35b39c23dd0079151a->leave($__internal_9adb3041a06aebe0322dd247bff54f4b007df64b9ac47e35b39c23dd0079151a_prof);

        
        $__internal_3eb9362591fffa3110f134815c6a1380cc8367fc2e9e17495e5d28366cfb382b->leave($__internal_3eb9362591fffa3110f134815c6a1380cc8367fc2e9e17495e5d28366cfb382b_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_ab0bc1530052dd02cbfa64accbd7cfec60504a97cd8d5091931cad2bcd6c8dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab0bc1530052dd02cbfa64accbd7cfec60504a97cd8d5091931cad2bcd6c8dc5->enter($__internal_ab0bc1530052dd02cbfa64accbd7cfec60504a97cd8d5091931cad2bcd6c8dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_34d8a64d6b717d9502d80a9ab454743aa53b7a1e6bcaf48f8338d63cbe1fdf6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d8a64d6b717d9502d80a9ab454743aa53b7a1e6bcaf48f8338d63cbe1fdf6e->enter($__internal_34d8a64d6b717d9502d80a9ab454743aa53b7a1e6bcaf48f8338d63cbe1fdf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "
";
        
        $__internal_34d8a64d6b717d9502d80a9ab454743aa53b7a1e6bcaf48f8338d63cbe1fdf6e->leave($__internal_34d8a64d6b717d9502d80a9ab454743aa53b7a1e6bcaf48f8338d63cbe1fdf6e_prof);

        
        $__internal_ab0bc1530052dd02cbfa64accbd7cfec60504a97cd8d5091931cad2bcd6c8dc5->leave($__internal_ab0bc1530052dd02cbfa64accbd7cfec60504a97cd8d5091931cad2bcd6c8dc5_prof);

    }

    // line 4
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c2e562118d51423a0bd46a29aef091c31952a76ab041e20c2ed6d63702561e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e562118d51423a0bd46a29aef091c31952a76ab041e20c2ed6d63702561e91->enter($__internal_c2e562118d51423a0bd46a29aef091c31952a76ab041e20c2ed6d63702561e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_16944532e861947e95648ebe58c19d17af2dbd8f495dc85ea9a598f66fd04401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16944532e861947e95648ebe58c19d17af2dbd8f495dc85ea9a598f66fd04401->enter($__internal_16944532e861947e95648ebe58c19d17af2dbd8f495dc85ea9a598f66fd04401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 5
        echo "    <script>
        \$(document).ready(function () {
            if (1 ==";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new Twig_Error_Runtime('Variable "success" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo ") {
                swal({
                    title: 'Parabens!',
                    text: \"As actualizações das Permissões foram feitas com sucesso\",
                    type: 'success',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok, Continuar!',
                    confirmButtonClass: 'btn btn-success',
                    buttonsStyling: false
                })
            }
            \$('.activarform').click(function () {
                if (\$(this).attr('title') == 'activar') {
                    \$('form input').prop('disabled', false)
                    \$('.disabled').prop('disabled', true)
                    \$('.form-actions').removeClass('hidden')
                }
                else {
                    \$('form input').prop('disabled', true);
                    \$('.form-actions').addClass('hidden')
                }
                \$('.activarform').removeClass('hidden')
                \$(this).addClass('hidden')
            })
        })
    </script>
";
        
        $__internal_16944532e861947e95648ebe58c19d17af2dbd8f495dc85ea9a598f66fd04401->leave($__internal_16944532e861947e95648ebe58c19d17af2dbd8f495dc85ea9a598f66fd04401_prof);

        
        $__internal_c2e562118d51423a0bd46a29aef091c31952a76ab041e20c2ed6d63702561e91->leave($__internal_c2e562118d51423a0bd46a29aef091c31952a76ab041e20c2ed6d63702561e91_prof);

    }

    public function getTemplateName()
    {
        return ":SYS/definicoes:definicoes_ACL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 7,  294 => 5,  285 => 4,  274 => 2,  265 => 1,  242 => 155,  236 => 154,  234 => 153,  223 => 145,  217 => 144,  213 => 143,  209 => 142,  198 => 134,  192 => 133,  188 => 132,  184 => 131,  172 => 122,  166 => 121,  162 => 120,  158 => 119,  147 => 111,  141 => 110,  137 => 109,  133 => 108,  122 => 100,  116 => 99,  112 => 98,  108 => 97,  102 => 94,  98 => 92,  93 => 91,  91 => 90,  50 => 52,  31 => 35,  29 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block css %}

{% endblock %}
{% block javascript %}
    <script>
        \$(document).ready(function () {
            if (1 =={{ success }}) {
                swal({
                    title: 'Parabens!',
                    text: \"As actualizações das Permissões foram feitas com sucesso\",
                    type: 'success',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok, Continuar!',
                    confirmButtonClass: 'btn btn-success',
                    buttonsStyling: false
                })
            }
            \$('.activarform').click(function () {
                if (\$(this).attr('title') == 'activar') {
                    \$('form input').prop('disabled', false)
                    \$('.disabled').prop('disabled', true)
                    \$('.form-actions').removeClass('hidden')
                }
                else {
                    \$('form input').prop('disabled', true);
                    \$('.form-actions').addClass('hidden')
                }
                \$('.activarform').removeClass('hidden')
                \$(this).addClass('hidden')
            })
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
                    <span class=\"caption-subject bold uppercase\"> Permissões</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                        <button type=\"button\" class=\"btn blue activarform\" title=\"activar\">Activar Edição</button>
                        <button type=\"button\" class=\"btn red activarform hidden\">Cancelar Edição</button>

                    </div>
                </div>
            </div>
            <form action=\"{{ path('definicoes_config',{'tipo':'ACL'}) }}\" method=\"POST\"><input value=\"ACL\" name=\"ACL\"
                                                                                               class=\"hidden\"
                                                                                               style=\"display: none\">
                <div class=\"portlet-body\">

                    <div class=\"table-scrollable\" style=\"overflow: auto; max-height: 400px\">

                        <table class=\"table table-striped table-bordered table-hover\">
                            <thead>
                            <tr>
                                <th scope=\"col\" colspan=\"2\"
                                    class=\"caption font-red-sunglo caption-subject bold uppercase\">
                                    <i class=\"icon-settings font-red-sunglo\"></i>
                                    Descrição
                                </th>
                                <th scope=\"col\" class=\"caption font-red-sunglo caption-subject bold uppercase\">
                                    <i class=\"icon-settings font-red-sunglo\"></i>
                                    Administrador
                                </th>
                                <th scope=\"col\" class=\"caption font-red-sunglo caption-subject bold uppercase\">
                                    <i class=\"icon-settings font-red-sunglo\"></i>
                                    Gestor
                                </th>
                                <th scope=\"col\" class=\"caption font-red-sunglo caption-subject bold uppercase\">
                                    <i class=\"icon-settings font-red-sunglo\"></i>
                                    Funcionario
                                </th>
                                <th scope=\"col\" class=\"caption font-red-sunglo caption-subject bold uppercase\">
                                    <i class=\"icon-settings font-red-sunglo\"></i>
                                    Visitante
                                </th>
                                <th scope=\"col\" class=\"caption font-red-sunglo caption-subject bold uppercase\">
                                    <i class=\"icon-settings font-red-sunglo\"></i>
                                    Anonymo
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            {% set i=1 %}
                            {% for dado in dados %}
                                <tr>
                                    <td></td>
                                    <th> {{ dado.descricao }} </th>
                                    <td>
                                        <div class=\"md-checkbox has-success\">
                                            <input type=\"checkbox\" id=\"admin[{{ i }}]\" class=\"md-check disabled\"
                                                   name=\"admin[{{ i }}]\"
                                                   {% if dado.admin is not null %}checked{% endif %} disabled/>
                                            <label for=\"admin[{{ i }}]\">
                                                <span class=\"inc\"></span>
                                                <span class=\"check\"></span>
                                                <span class=\"box\"></span></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"md-checkbox has-success\">
                                            <input type=\"checkbox\" id=\"gestor[{{ i }}]\" class=\"md-check\"
                                                   name=\"gestor[{{ i }}]\" value=\"1\"
                                                   {% if dado.gestor is not null %}checked{% endif %} disabled/>
                                            <label for=\"gestor[{{ i }}]\">
                                                <span class=\"inc\"></span>
                                                <span class=\"check\"></span>
                                                <span class=\"box\"></span></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"md-checkbox has-success\">
                                            <input type=\"checkbox\" id=\"funcionario[{{ i }}]\" class=\"md-check\"
                                                   name=\"funcionario[{{ i }}]\" value=\"1\"
                                                   {% if dado.funcionario is not null %}checked{% endif %} disabled/>
                                            <label for=\"funcionario[{{ i }}]\">
                                                <span class=\"inc\"></span>
                                                <span class=\"check\"></span>
                                                <span class=\"box\"></span></label>
                                        </div>

                                    </td>
                                    <td>
                                        <div class=\"md-checkbox has-success\">
                                            <input type=\"checkbox\" id=\"visitante[{{ i }}]\" class=\"md-check\"
                                                   name=\"visitante[{{ i }}]\" value=\"1\"
                                                   {% if dado.visitante is not null %}checked{% endif %} disabled/>
                                            <label for=\"visitante[{{ i }}]\">
                                                <span class=\"inc\"></span>
                                                <span class=\"check\"></span>
                                                <span class=\"box\"></span></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"md-checkbox has-success\">
                                            <input type=\"checkbox\" id=\"anonimo[{{ i }}]\" class=\"md-check\"
                                                   name=\"anonimo[{{ i }}]\" value=\"1\"
                                                   {% if dado.anonimo is not null %}checked{% endif %} disabled/>
                                            <label for=\"anonimo[{{ i }}]\">
                                                <span class=\"inc\"></span>
                                                <span class=\"check\"></span>
                                                <span class=\"box\"></span></label>
                                        </div>

                                    </td>
                                </tr>
                                {% set i=i+1 %}
                            {% endfor %}
                            </tbody>
                        </table>

                    </div>
                    <div class=\"form-actions noborder hidden\">
                        <button type=\"submit\" class=\"btn blue\">Salvar</button>
                        <button type=\"button\" class=\"btn default\">Cancel</button>
                    </div>
            </form>
        </div>
    </div>
    <!-- END EXAMPLE TABLE PORTLET-->
</div>
</div>", ":SYS/definicoes:definicoes_ACL.html.twig", "/var/www/html/hom/app/Resources/views/SYS/definicoes/definicoes_ACL.html.twig");
    }
}

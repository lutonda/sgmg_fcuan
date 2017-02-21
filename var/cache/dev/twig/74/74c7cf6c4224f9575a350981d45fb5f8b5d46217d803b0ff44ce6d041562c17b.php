<?php

/* :MUS/api:membro_detalhesconta_ver.html.twig */
class __TwigTemplate_a8436335b02c5bff420e33d637c863bd573ec2c4870b82762a6381a64ac1734c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23dc45bfda2ebf115711df545046ea9f79816b9b00aa55e1184ea6864cfec197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23dc45bfda2ebf115711df545046ea9f79816b9b00aa55e1184ea6864cfec197->enter($__internal_23dc45bfda2ebf115711df545046ea9f79816b9b00aa55e1184ea6864cfec197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS/api:membro_detalhesconta_ver.html.twig"));

        $__internal_e98231c7e96bd55748c3999fcc37909c720f74c425c7d23282ccf10269bf5f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98231c7e96bd55748c3999fcc37909c720f74c425c7d23282ccf10269bf5f6f->enter($__internal_e98231c7e96bd55748c3999fcc37909c720f74c425c7d23282ccf10269bf5f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS/api:membro_detalhesconta_ver.html.twig"));

        // line 1
        $this->displayBlock('javascript', $context, $blocks);
        // line 60
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"portlet light bordered\" style=\"min-height: 550px\">
            <div class=\"portlet-title tabbable-line\">
                <div class=\"caption caption-md\">
                    <i class=\"icon-globe theme-font hide\"></i>
                    <span class=\"caption-subject font-blue-madison bold uppercase\">Profile Account</span>
                </div>
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\">
                        <a href=\"#tab_1_1\" data-toggle=\"tab\">Dados pessoais</a>
                    </li>
                    <li>
                        <a href=\"#tab_1_2\" data-toggle=\"tab\">Contactos</a>
                    </li>
                    <li>
                        <a href=\"#tab_1_3\" data-toggle=\"tab\">Contada</a>
                    </li>
                    <li>
                        <a href=\"#tab_1_4\" data-toggle=\"tab\">Permissões<span class=\"badge badge-success\">";
        // line 79
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["utilisador"]) || array_key_exists("utilisador", $context) ? $context["utilisador"] : (function () { throw new Twig_Error_Runtime('Variable "utilisador" does not exist.', 79, $this->getSourceContext()); })()), "R", array())), "html", null, true);
        echo "</span></a>
                    </li>
                </ul>
            </div>
            <div class=\"portlet-body\">
                <div class=\"tab-content\">
                    <!-- PERSONAL INFO TAB -->
                    <div class=\"tab-pane active\" id=\"tab_1_1\">
                        <form role=\"form\" action=\"#\">
                            <div class=\"form-group col-md-12\">
                                <label class=\"control-label\">Nome completo</label>
                                <input type=\"text\" placeholder=\"John\" class=\"form-control\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 90, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"form-group col-md-4\">
                                <label class=\"control-label\">Genero</label>
                                <input type=\"text\" placeholder=\"Web Developer\" class=\"form-control\"
                                       value=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 95, $this->getSourceContext()); })()), "genero", array()), "html", null, true);
        echo "\"></div>
                            <div class=\"form-group col-md-8\">
                                <label class=\"control-label\">Data de nascimento</label>
                                <input type=\"text\" placeholder=\"Web Developer\" class=\"form-control\"
                                       value=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 99, $this->getSourceContext()); })()), "datanascimento", array()), "html", null, true);
        echo "\"></div>
                            <div class=\"form-group col-md-12\">
                                <label class=\"control-label\">Morada</label>
                                <input type=\"text\" placeholder=\"Web Developer\" class=\"form-control\"
                                       value=\"";
        // line 103
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 103, $this->getSourceContext()); })()), "morada", array()))) {
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 103, $this->getSourceContext()); })()), "morada", array()), "nome", array())), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 103, $this->getSourceContext()); })()), "morada", array()), "idprovincia", array()), "nome", array())), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 103, $this->getSourceContext()); })()), "morada", array()), "idprovincia", array()), "idpais", array()), "nome", array())), "html", null, true);
        }
        echo "\">
                            </div>
                            <div class=\"form-group col-md-12\">
                                <label class=\"control-label\">Naturalidade</label>
                                <input type=\"text\" placeholder=\"Doe\" class=\"form-control\"
                                       value=\"";
        // line 108
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 108, $this->getSourceContext()); })()), "idmunicipio", array()))) {
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 108, $this->getSourceContext()); })()), "idmunicipio", array()), "nome", array())), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 108, $this->getSourceContext()); })()), "idmunicipio", array()), "idprovincia", array()), "nome", array())), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 108, $this->getSourceContext()); })()), "idmunicipio", array()), "idprovincia", array()), "idpais", array()), "nome", array())), "html", null, true);
        }
        echo "\">
                            </div>
                            <div class=\"form-group col-md-4\">
                                <label class=\"control-label\">Nivel academico</label>
                                <input type=\"text\" placeholder=\"+1 646 580 DEMO (6284)\" class=\"form-control\"
                                       value=\"";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 113, $this->getSourceContext()); })()), "nivelacademico", array()), "html", null, true);
        echo "\"></div>
                            <div class=\"form-group col-md-8\">
                                <label class=\"control-label\">Especialidade</label>
                                <input type=\"text\" placeholder=\"Design, Web etc.\" class=\"form-control\"
                                       value=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 117, $this->getSourceContext()); })()), "datanascimento", array()), "html", null, true);
        echo "\"></div>
                            <div class=\"margiv-top-10 col-md-12\">
                                <a href=\"javascript:;\" class=\"btn green\"> Save Changes </a>
                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                            </div>
                            <
                        </form>
                    </div>
                    <!-- END PERSONAL INFO TAB -->
                    <!-- CHANGE AVATAR TAB -->
                    <div class=\"tab-pane\" id=\"tab_1_2\">
                        <form role=\"form\" action=\"#\">
                            <div class=\"form-group col-md-12\">
                                <table class=\"table\">
                                    ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 131, $this->getSourceContext()); })()), "contactos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["contactos"]) {
            // line 132
            echo "                                        <tr>
                                            <td><i class=\"icon-";
            // line 133
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["contactos"], "idtipocontacto", array()), "nome", array())), "html", null, true);
            echo "\"></i></td>
                                            <td width=\"80px\">";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["contactos"], "idtipocontacto", array()), "nome", array()), "html", null, true);
            echo "</td>
                                            <td><b>";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contactos"], "descricao", array()), "html", null, true);
            echo "</b></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                                </table>
                            </div>

                            <div class=\"margiv-top-10 col-md-12\">
                                <a href=\"javascript:;\" class=\"btn green\"> Save Changes </a>
                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                            </div>
                            <
                        </form>
                    </div>
                    <!-- END CHANGE AVATAR TAB -->
                    <!-- CHANGE PASSWORD TAB -->
                    <div class=\"tab-pane\" id=\"tab_1_3\">
                        <form action=\"#\">
                            <div class=\"form-group col-md-12\">
                                <label class=\"control-label\">Username</label>
                                <input type=\"text\" class=\"form-control\" value=\"";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["utilisador"]) || array_key_exists("utilisador", $context) ? $context["utilisador"] : (function () { throw new Twig_Error_Runtime('Variable "utilisador" does not exist.', 154, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "\"></div>
                            <div class=\"form-group col-md-12\">
                                <label class=\"control-label\">New Password</label><br>
                                <button class=\"btn btn-lg btn-success resetPassword\" type=\"button\"
                                        value=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 158, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\"><i
                                            class=\"fa fa-refresh\"></i>Enviar Link
                                </button>
                            </div>
                            <div class=\"form-group col-md-12\">
                                <label class=\"control-label\">Ultimo acesso</label>
                                <input type=\"text\" class=\"form-control\" value=\"02/02/2017, 09:32:22\"></div>
                            <div class=\"form-group col-md-12\">
                                <input type=\"text\" class=\"form-control\" value=\"172.168.11.10 \"></div>
                            <div class=\"margin-top-10\">
                                <a href=\"javascript:;\" class=\"btn green\"> Change Password </a>
                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                            </div>
                        </form>
                    </div>
                    <!-- END CHANGE PASSWORD TAB -->
                    <!-- PRIVACY SETTINGS TAB -->
                    <div class=\"tab-pane\" id=\"tab_1_4\" style=\"overflow: auto; max-height: 460px\">

                                ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["utilisador"]) || array_key_exists("utilisador", $context) ? $context["utilisador"] : (function () { throw new Twig_Error_Runtime('Variable "utilisador" does not exist.', 177, $this->getSourceContext()); })()), "R", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 178
            echo "                                    <div class=\"col-md-6 form-group\" ><li class=\"fa fa-check-circle fa-2x green\"></li> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["role"], "descricao", array()), "html", null, true);
            echo "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "
                    </div>
                    <!-- END PRIVACY SETTINGS TAB -->
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_23dc45bfda2ebf115711df545046ea9f79816b9b00aa55e1184ea6864cfec197->leave($__internal_23dc45bfda2ebf115711df545046ea9f79816b9b00aa55e1184ea6864cfec197_prof);

        
        $__internal_e98231c7e96bd55748c3999fcc37909c720f74c425c7d23282ccf10269bf5f6f->leave($__internal_e98231c7e96bd55748c3999fcc37909c720f74c425c7d23282ccf10269bf5f6f_prof);

    }

    // line 1
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d3268ed5678f1ceb800cc8dc2fcdaec3ab22c917225114d669ca387f65abed63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3268ed5678f1ceb800cc8dc2fcdaec3ab22c917225114d669ca387f65abed63->enter($__internal_d3268ed5678f1ceb800cc8dc2fcdaec3ab22c917225114d669ca387f65abed63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_57afab3b28ae197f53853b65c7053d6e9ff18cc5d87ada505ad493b2d76efcab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57afab3b28ae197f53853b65c7053d6e9ff18cc5d87ada505ad493b2d76efcab->enter($__internal_57afab3b28ae197f53853b65c7053d6e9ff18cc5d87ada505ad493b2d76efcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 2
        echo "    <script>
        \$(document).ready(function () {
            \$('button.resetPassword').click(function () {
                var tipo=\$(this).attr('value');
                swal({
                    title: 'Atenção!',
                    text: \"esta operação ira inactivar a actual palavrapasse e enviar\"
                    +\" um novo Link para criar uma nova palavrapasse\",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, Eliminar!',
                    cancelButtonText: 'Não, Desisto!',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                }, function (dismiss) {
                    // dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                    alert(dismiss);
                    if (dismiss == true) {
                        \$.ajax({
                            type: 'POST',
                            dataType: 'json',
                            url: '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reset_password", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 27, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "',
                            data: null,
                            success: function (template) {
                                swal({
                                    title: 'Ok!',
                                    text: \"O link foi enviado com Sucesso\",
                                    type: 'success'
                                }, function (dismiss) {
                                    if (dismiss == true) {
                                    alert(1);
                                    }
                                })
                            },
                            erro:function (e) {
                                alert(2)
                                alert(e.message)
                            }


                        })
                    }
                    else {
                        swal({
                            title: 'Cancelado!',
                            text: \"A atual palavrapasse persiste\",
                            type: 'error'
                        }).then()
                    }
                })
            })
        })
    </script>
";
        
        $__internal_57afab3b28ae197f53853b65c7053d6e9ff18cc5d87ada505ad493b2d76efcab->leave($__internal_57afab3b28ae197f53853b65c7053d6e9ff18cc5d87ada505ad493b2d76efcab_prof);

        
        $__internal_d3268ed5678f1ceb800cc8dc2fcdaec3ab22c917225114d669ca387f65abed63->leave($__internal_d3268ed5678f1ceb800cc8dc2fcdaec3ab22c917225114d669ca387f65abed63_prof);

    }

    public function getTemplateName()
    {
        return ":MUS/api:membro_detalhesconta_ver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 27,  247 => 2,  238 => 1,  221 => 180,  212 => 178,  208 => 177,  186 => 158,  179 => 154,  161 => 138,  152 => 135,  148 => 134,  144 => 133,  141 => 132,  137 => 131,  120 => 117,  113 => 113,  99 => 108,  85 => 103,  78 => 99,  71 => 95,  63 => 90,  49 => 79,  28 => 60,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block javascript %}
    <script>
        \$(document).ready(function () {
            \$('button.resetPassword').click(function () {
                var tipo=\$(this).attr('value');
                swal({
                    title: 'Atenção!',
                    text: \"esta operação ira inactivar a actual palavrapasse e enviar\"
                    +\" um novo Link para criar uma nova palavrapasse\",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, Eliminar!',
                    cancelButtonText: 'Não, Desisto!',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                }, function (dismiss) {
                    // dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                    alert(dismiss);
                    if (dismiss == true) {
                        \$.ajax({
                            type: 'POST',
                            dataType: 'json',
                            url: '{{ path('reset_password',{'id':membro.id}) }}',
                            data: null,
                            success: function (template) {
                                swal({
                                    title: 'Ok!',
                                    text: \"O link foi enviado com Sucesso\",
                                    type: 'success'
                                }, function (dismiss) {
                                    if (dismiss == true) {
                                    alert(1);
                                    }
                                })
                            },
                            erro:function (e) {
                                alert(2)
                                alert(e.message)
                            }


                        })
                    }
                    else {
                        swal({
                            title: 'Cancelado!',
                            text: \"A atual palavrapasse persiste\",
                            type: 'error'
                        }).then()
                    }
                })
            })
        })
    </script>
{% endblock %}
<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"portlet light bordered\" style=\"min-height: 550px\">
            <div class=\"portlet-title tabbable-line\">
                <div class=\"caption caption-md\">
                    <i class=\"icon-globe theme-font hide\"></i>
                    <span class=\"caption-subject font-blue-madison bold uppercase\">Profile Account</span>
                </div>
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\">
                        <a href=\"#tab_1_1\" data-toggle=\"tab\">Dados pessoais</a>
                    </li>
                    <li>
                        <a href=\"#tab_1_2\" data-toggle=\"tab\">Contactos</a>
                    </li>
                    <li>
                        <a href=\"#tab_1_3\" data-toggle=\"tab\">Contada</a>
                    </li>
                    <li>
                        <a href=\"#tab_1_4\" data-toggle=\"tab\">Permissões<span class=\"badge badge-success\">{{ utilisador.R|length }}</span></a>
                    </li>
                </ul>
            </div>
            <div class=\"portlet-body\">
                <div class=\"tab-content\">
                    <!-- PERSONAL INFO TAB -->
                    <div class=\"tab-pane active\" id=\"tab_1_1\">
                        <form role=\"form\" action=\"#\">
                            <div class=\"form-group col-md-12\">
                                <label class=\"control-label\">Nome completo</label>
                                <input type=\"text\" placeholder=\"John\" class=\"form-control\" value=\"{{ membro.nome }}\">
                            </div>
                            <div class=\"form-group col-md-4\">
                                <label class=\"control-label\">Genero</label>
                                <input type=\"text\" placeholder=\"Web Developer\" class=\"form-control\"
                                       value=\"{{ membro.genero }}\"></div>
                            <div class=\"form-group col-md-8\">
                                <label class=\"control-label\">Data de nascimento</label>
                                <input type=\"text\" placeholder=\"Web Developer\" class=\"form-control\"
                                       value=\"{{ membro.datanascimento }}\"></div>
                            <div class=\"form-group col-md-12\">
                                <label class=\"control-label\">Morada</label>
                                <input type=\"text\" placeholder=\"Web Developer\" class=\"form-control\"
                                       value=\"{% if membro.morada is not null %}{{ membro.morada.nome | capitalize }}, {{ membro.morada.idprovincia.nome | capitalize }}, {{ membro.morada.idprovincia.idpais.nome | capitalize }}{% endif %}\">
                            </div>
                            <div class=\"form-group col-md-12\">
                                <label class=\"control-label\">Naturalidade</label>
                                <input type=\"text\" placeholder=\"Doe\" class=\"form-control\"
                                       value=\"{% if membro.idmunicipio is not null %}{{ membro.idmunicipio.nome | capitalize }}, {{ membro.idmunicipio.idprovincia.nome | capitalize }}, {{ membro.idmunicipio.idprovincia.idpais.nome | capitalize }}{% endif %}\">
                            </div>
                            <div class=\"form-group col-md-4\">
                                <label class=\"control-label\">Nivel academico</label>
                                <input type=\"text\" placeholder=\"+1 646 580 DEMO (6284)\" class=\"form-control\"
                                       value=\"{{ membro.nivelacademico }}\"></div>
                            <div class=\"form-group col-md-8\">
                                <label class=\"control-label\">Especialidade</label>
                                <input type=\"text\" placeholder=\"Design, Web etc.\" class=\"form-control\"
                                       value=\"{{ membro.datanascimento }}\"></div>
                            <div class=\"margiv-top-10 col-md-12\">
                                <a href=\"javascript:;\" class=\"btn green\"> Save Changes </a>
                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                            </div>
                            <
                        </form>
                    </div>
                    <!-- END PERSONAL INFO TAB -->
                    <!-- CHANGE AVATAR TAB -->
                    <div class=\"tab-pane\" id=\"tab_1_2\">
                        <form role=\"form\" action=\"#\">
                            <div class=\"form-group col-md-12\">
                                <table class=\"table\">
                                    {% for contactos  in membro.contactos %}
                                        <tr>
                                            <td><i class=\"icon-{{ contactos.idtipocontacto.nome |lower }}\"></i></td>
                                            <td width=\"80px\">{{ contactos.idtipocontacto.nome }}</td>
                                            <td><b>{{ contactos.descricao }}</b></td>
                                        </tr>
                                    {% endfor %}
                                </table>
                            </div>

                            <div class=\"margiv-top-10 col-md-12\">
                                <a href=\"javascript:;\" class=\"btn green\"> Save Changes </a>
                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                            </div>
                            <
                        </form>
                    </div>
                    <!-- END CHANGE AVATAR TAB -->
                    <!-- CHANGE PASSWORD TAB -->
                    <div class=\"tab-pane\" id=\"tab_1_3\">
                        <form action=\"#\">
                            <div class=\"form-group col-md-12\">
                                <label class=\"control-label\">Username</label>
                                <input type=\"text\" class=\"form-control\" value=\"{{ utilisador.username }}\"></div>
                            <div class=\"form-group col-md-12\">
                                <label class=\"control-label\">New Password</label><br>
                                <button class=\"btn btn-lg btn-success resetPassword\" type=\"button\"
                                        value=\"{{ membro.id }}\"><i
                                            class=\"fa fa-refresh\"></i>Enviar Link
                                </button>
                            </div>
                            <div class=\"form-group col-md-12\">
                                <label class=\"control-label\">Ultimo acesso</label>
                                <input type=\"text\" class=\"form-control\" value=\"02/02/2017, 09:32:22\"></div>
                            <div class=\"form-group col-md-12\">
                                <input type=\"text\" class=\"form-control\" value=\"172.168.11.10 \"></div>
                            <div class=\"margin-top-10\">
                                <a href=\"javascript:;\" class=\"btn green\"> Change Password </a>
                                <a href=\"javascript:;\" class=\"btn default\"> Cancel </a>
                            </div>
                        </form>
                    </div>
                    <!-- END CHANGE PASSWORD TAB -->
                    <!-- PRIVACY SETTINGS TAB -->
                    <div class=\"tab-pane\" id=\"tab_1_4\" style=\"overflow: auto; max-height: 460px\">

                                {% for role in utilisador.R %}
                                    <div class=\"col-md-6 form-group\" ><li class=\"fa fa-check-circle fa-2x green\"></li> {{ role.descricao }}</div>
                                {% endfor %}

                    </div>
                    <!-- END PRIVACY SETTINGS TAB -->
                </div>
            </div>
        </div>
    </div>
</div>", ":MUS/api:membro_detalhesconta_ver.html.twig", "/var/www/html/hom/app/Resources/views/MUS/api/membro_detalhesconta_ver.html.twig");
    }
}

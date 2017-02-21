<?php

/* MVS/visita_view.html.twig */
class __TwigTemplate_58646e7fca97ff728969f05d82f30635eac7a7dbb0048e204e801028165eb6b0 extends Twig_Template
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
        $__internal_7639738c24d4d94f6571ce6076c9c0cdfba2a25368196d818f7aeb95e429297a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7639738c24d4d94f6571ce6076c9c0cdfba2a25368196d818f7aeb95e429297a->enter($__internal_7639738c24d4d94f6571ce6076c9c0cdfba2a25368196d818f7aeb95e429297a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MVS/visita_view.html.twig"));

        $__internal_5b79695ca7db55ee394adc9459d55ab24d8434b0ea2299fa89f5ee03924d2ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b79695ca7db55ee394adc9459d55ab24d8434b0ea2299fa89f5ee03924d2ea2->enter($__internal_5b79695ca7db55ee394adc9459d55ab24d8434b0ea2299fa89f5ee03924d2ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MVS/visita_view.html.twig"));

        // line 1
        $this->displayBlock('css', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('javascript', $context, $blocks);
        // line 92
        echo "
<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption font-dark\">
                    <i class=\"icon- font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> Visitas</span>
                </div>
                <div class=\"actions\">

                </div>
            </div>
            <div class=\"portlet-body\" style=\"min-height: 550px\">
                <div class=\"row\">
                <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"portlet light portlet-fit bordered\">
                        <div class=\"portlet-body\" style=\"min-height: 230px\">
                            <div class=\"mt-element-overlay\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"mt-overlay-1\">
                                            <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/pages/img/avatars/team12.jpg"), "html", null, true);
        echo "\">
                                            <div class=\"mt-overlay\">
                                                <ul class=\"mt-info\">
                                                    <li>
                                                        <a class=\"btn default btn-outline\"
                                                           href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 120, $this->getSourceContext()); })()), "idparticipante", array()), "id", array()))), "html", null, true);
        echo "\">
                                                            <i class=\"icon-link\"></i>Ver Perfil
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-9 col-md-6 col-sm-6 col-xs-12\">
                    <!-- BEGIN Portlet PORTLET-->
                    <div class=\"portlet light portlet-fit bordered\">
                        <div class=\"portlet-body\" style=\"min-height: 230px\">
                            <div class=\"row\">
                                <div class=\"col-md-4 right\">Nome</div>
                                <div class=\"btn btn-outline col-md-8 text-left\">";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 139, $this->getSourceContext()); })()), "idparticipante", array()), "nome", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-4 right\">Tipo</div>
                                <div class=\"btn btn-outline col-md-8 text-left\">";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 143, $this->getSourceContext()); })()), "tipo", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-4 right\">Data da Visita</div>
                                <div class=\"btn btn-outline col-md-8 text-left\">";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 147, $this->getSourceContext()); })()), "datavisita", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-4 right\">Duração</div>
                                <div class=\"btn btn-outline col-md-8 text-left\">";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 151, $this->getSourceContext()); })()), "duracao", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-4 right\">Estado</div>
                                <div class=\"btn btn-outline col-md-8 text-left\">";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 155, $this->getSourceContext()); })()), "estado", array()), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-4 right\">Data de cadastro</div>
                                <div class=\"btn btn-outline col-md-8 text-left\">";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 159, $this->getSourceContext()); })()), "data", array()), "html", null, true);
        echo "</div>
                            </div>
                        </div>
                    </div>
                </div></div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"mt-element-ribbon bg-grey-steel\" style=\"min-height: 220px\">
                        <div class=\"ribbon ribbon-round ribbon-border-dash-hor ribbon-color-default uppercase bold\">
                            Categoria de Interece
                            <span class=\"badge badge-success\">";
        // line 168
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 168, $this->getSourceContext()); })()), "area", array())), "html", null, true);
        echo "</span></div>
                        <div class=\"col-md-12\"><br>
                        <ul>
                            ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 171, $this->getSourceContext()); })()), "area", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 172
            echo "                                <li class=\"caption-subject font-back bold uppercase\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "area", array()), "nome", array()), "html", null, true);
            echo " </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"mt-element-ribbon bg-grey-steel\" style=\"min-height: 220px;\">
                        <div class=\"ribbon ribbon-round ribbon-border-dash-hor ribbon-color-default uppercase bold\">
                            Descrição
                        </div>
                    <div class=\"col-md-12 bordered\">
                        <br>
                        <p>";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 185, $this->getSourceContext()); })()), "descricao", array()), "html", null, true);
        echo " .</p>
                        <hr>
                    </div>
                    </div>
                </div>
                ";
        // line 190
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 190, $this->getSourceContext()); })()), "estado", array()) == "Excluido")) {
            // line 191
            echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"mt-element-ribbon bg-grey-steel\" style=\"min-height: 220px;\">

                        <div class=\"col-md-12 bordered\">
                            <br>
                                <div class=\"form-group\"><br>

                                    <button class=\"btn btn-danger \">Cancelado</button>
                                </div>
                            <hr>
                        </div>
                    </div>
                </div>
                ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 204
(isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 204, $this->getSourceContext()); })()), "tipo", array()) != "Guiada")) {
            // line 205
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 205, $this->getSourceContext()); })()), "estado", array()) != "Activo")) {
                // line 206
                echo "                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"mt-element-ribbon bg-grey-steel\" style=\"min-height: 220px;\">

                            <div class=\"col-md-12 bordered\">
                                <br>
                                <form method=\"POST\" action=\"javascript:;\">
                                    <div class=\"form-group\"><br>

                                        <input class=\"hidden\" value=\"x\" name=\"guia\" hidden>
                                        <input class=\"hidden\" value=\"";
                // line 215
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 215, $this->getSourceContext()); })()), "id", array()), "html", null, true);
                echo "\" name=\"data\" hidden>
                                        <input class=\"hidden\" hidden value=\"check\" name=\"check\">
                                        <br>
                                        <button type=\"submit\"  class=\"btn btn-primary aprovar\">Aprovar</button>
                                        <button class=\"btn btn-danger negar\">Negar</button>
                                    </div>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                    ";
            }
            // line 227
            echo "                ";
        } else {
            // line 228
            echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"mt-element-ribbon bg-grey-steel\" style=\"min-height: 220px\">
                        <div class=\"ribbon ribbon-round ribbon-border-dash-hor ribbon-color-default uppercase bold\">
                            Guia da Visita
                        </div>
                        <br>

                        ";
            // line 235
            if ((null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 235, $this->getSourceContext()); })()), "guia", array()))) {
                // line 236
                echo "                        <div class=\"bow setguia hidden col-md-12\">
                            <form method=\"POST\" action=\"javascript:;\">
                                <div class=\"form-group\"><br>
                                    <label>Escolha o Guia pra esta visita</label>
                                    <div class=\"input-icon input-icon-lg\">
                                        <input class=\"hidden\" value=\"";
                // line 241
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 241, $this->getSourceContext()); })()), "id", array()), "html", null, true);
                echo "\" name=\"data\" hidden>
                                        <input class=\"hidden\" hidden value=\"check\" name=\"check\">
                                        <div id=\"pessoa\" class=\"input-icon input-icon-lg\" style=\"position: relative\"></div>
                                    </div><br><button type=\"submit\" class=\"btn btn-primary aprovar\">Salvar</button>
                                    <button type=\"button\" class=\"btn btn-default cancelar\">Cancelar</button>
                                </div>
                            </form>
                        </div>
                        <div class=\"bow getguia\">
                            <p class=\"ribbon-content\">Visita Criada e aguardando Aprovação Superior<br>
                                <button class=\"btn btn-primary aprovar\">Aprovar</button>
                                <button class=\"btn btn-danger negar\">Negar</button>
                            </p>
                        </div>
                        ";
            } else {
                // line 256
                echo "                            <div class=\"bow isguia\">
                                <hr>
                                <div class=\"mt-overlay-1\">
                                    <div class=\"col-md-4\">
                                        <img src=\"";
                // line 260
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/pages/img/avatars/team12.jpg"), "html", null, true);
                echo "\" style=\"width: 100%\">
                                    </div>
                                    <div class=\"col-md-6\"><br>
                                        <b class=\"caption-subject font-back bold uppercase\">
                                            ";
                // line 264
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 264, $this->getSourceContext()); })()), "guia", array()), "nome", array()), "html", null, true);
                echo "</b><br>
                                        <a href=\"";
                // line 265
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 265, $this->getSourceContext()); })()), "guia", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn\">
                                                <i class=\"icon-link\"></i>Ver Perfil
                                                </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 273
            echo "                            <hr>
                        </div>
                    </div>
                    <!-- END Portlet PORTLET-->
                </div>
                ";
        }
        // line 279
        echo "            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>";
        
        $__internal_7639738c24d4d94f6571ce6076c9c0cdfba2a25368196d818f7aeb95e429297a->leave($__internal_7639738c24d4d94f6571ce6076c9c0cdfba2a25368196d818f7aeb95e429297a_prof);

        
        $__internal_5b79695ca7db55ee394adc9459d55ab24d8434b0ea2299fa89f5ee03924d2ea2->leave($__internal_5b79695ca7db55ee394adc9459d55ab24d8434b0ea2299fa89f5ee03924d2ea2_prof);

    }

    // line 1
    public function block_css($context, array $blocks = array())
    {
        $__internal_c9cd92fea2b1c98cc74c1136ac94aa8c13d4538e1ccc3de84ea620f8c56a0389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9cd92fea2b1c98cc74c1136ac94aa8c13d4538e1ccc3de84ea620f8c56a0389->enter($__internal_c9cd92fea2b1c98cc74c1136ac94aa8c13d4538e1ccc3de84ea620f8c56a0389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_c610dd26f711fd565d5f142d65550a64bdb6bd5e01a6e78598e813e9ec45b6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c610dd26f711fd565d5f142d65550a64bdb6bd5e01a6e78598e813e9ec45b6d1->enter($__internal_c610dd26f711fd565d5f142d65550a64bdb6bd5e01a6e78598e813e9ec45b6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 2
        echo "    <style>
        .text-left {
            text-align: left
        }</style>
";
        
        $__internal_c610dd26f711fd565d5f142d65550a64bdb6bd5e01a6e78598e813e9ec45b6d1->leave($__internal_c610dd26f711fd565d5f142d65550a64bdb6bd5e01a6e78598e813e9ec45b6d1_prof);

        
        $__internal_c9cd92fea2b1c98cc74c1136ac94aa8c13d4538e1ccc3de84ea620f8c56a0389->leave($__internal_c9cd92fea2b1c98cc74c1136ac94aa8c13d4538e1ccc3de84ea620f8c56a0389_prof);

    }

    // line 8
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_1400899f3d042ecd9c1828d92459b4328eaae019084ea81aea4642e4c9d00b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1400899f3d042ecd9c1828d92459b4328eaae019084ea81aea4642e4c9d00b21->enter($__internal_1400899f3d042ecd9c1828d92459b4328eaae019084ea81aea4642e4c9d00b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_afc43336562b1a29fb0a73994e0c4088c11b4d33ef437f1e26aee359e626de7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc43336562b1a29fb0a73994e0c4088c11b4d33ef437f1e26aee359e626de7b->enter($__internal_afc43336562b1a29fb0a73994e0c4088c11b4d33ef437f1e26aee359e626de7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 9
        echo "    <script>
        \$(document).ready(function () {

            \$('#pessoa').magicSuggest({

                data: [
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pessoas"]) || array_key_exists("pessoas", $context) ? $context["pessoas"] : (function () { throw new Twig_Error_Runtime('Variable "pessoas" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pessoa"]) {
            // line 16
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
        // line 18
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                maxSelection: 1,
                name: \"guia\"
            });
            \$('.aprovar').click(function () {
                \$('div.bow').addClass('hidden');
                \$('div.setguia').removeClass('hidden');

            })
            \$('.cancelar').click(function(){
                \$('div.bow').addClass('hidden');
                \$('div.getguia').removeClass('hidden');
            })
            \$('.negar').click(function(){
                alert(1)
                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: \"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visita_able");
        echo "\",
                    data: {'guia':'x','data':";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 39, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "},
                    success: function (template) {
                        if (template.status == 1) {
                            swal({
                                title: 'Parabens!',
                                text: \"A visita negada com sucesso\",
                                type: 'success',
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ok, Continuar!',
                                confirmButtonClass: 'btn btn-success',
                                buttonsStyling: false
                            }, function (dismiss) {
                                location.reload()
                            })
                        }
                    },
                    error: function (e) {
                        \$('html').prepend(e.responseText)
                    }
                });
            })
            \$('form').submit(function(){
                    \$.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url: \"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visita_able");
        echo "\",
                        data: \$(this).serialize(),
                        success: function (template) {
                            if (template.status == 1) {
                                swal({
                                    title: 'Parabens!',
                                    text: \"A visita aprovada com sucesso\",
                                    type: 'success',
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Ok, Continuar!',
                                    confirmButtonClass: 'btn btn-success',
                                    buttonsStyling: false
                                }, function (dismiss) {
                                    location.reload()
                                })
                            }
                        },
                        error: function (e) {
                            \$('html').prepend(e.responseText)
                        }
                    });
            })

        })
    </script>
";
        
        $__internal_afc43336562b1a29fb0a73994e0c4088c11b4d33ef437f1e26aee359e626de7b->leave($__internal_afc43336562b1a29fb0a73994e0c4088c11b4d33ef437f1e26aee359e626de7b_prof);

        
        $__internal_1400899f3d042ecd9c1828d92459b4328eaae019084ea81aea4642e4c9d00b21->leave($__internal_1400899f3d042ecd9c1828d92459b4328eaae019084ea81aea4642e4c9d00b21_prof);

    }

    public function getTemplateName()
    {
        return "MVS/visita_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 65,  394 => 39,  390 => 38,  368 => 18,  357 => 16,  353 => 15,  345 => 9,  336 => 8,  322 => 2,  313 => 1,  299 => 279,  291 => 273,  280 => 265,  276 => 264,  269 => 260,  263 => 256,  245 => 241,  238 => 236,  236 => 235,  227 => 228,  224 => 227,  209 => 215,  198 => 206,  195 => 205,  193 => 204,  178 => 191,  176 => 190,  168 => 185,  155 => 174,  146 => 172,  142 => 171,  136 => 168,  124 => 159,  117 => 155,  110 => 151,  103 => 147,  96 => 143,  89 => 139,  67 => 120,  59 => 115,  34 => 92,  32 => 8,  29 => 7,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block css %}
    <style>
        .text-left {
            text-align: left
        }</style>
{% endblock %}

{% block javascript %}
    <script>
        \$(document).ready(function () {

            \$('#pessoa').magicSuggest({

                data: [
                    {% for pessoa in pessoas %}
                    \"{{ pessoa.nome }} - {{ pessoa.contactos.descricao }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                maxSelection: 1,
                name: \"guia\"
            });
            \$('.aprovar').click(function () {
                \$('div.bow').addClass('hidden');
                \$('div.setguia').removeClass('hidden');

            })
            \$('.cancelar').click(function(){
                \$('div.bow').addClass('hidden');
                \$('div.getguia').removeClass('hidden');
            })
            \$('.negar').click(function(){
                alert(1)
                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: \"{{ path('visita_able') }}\",
                    data: {'guia':'x','data':{{ dados.id }}},
                    success: function (template) {
                        if (template.status == 1) {
                            swal({
                                title: 'Parabens!',
                                text: \"A visita negada com sucesso\",
                                type: 'success',
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ok, Continuar!',
                                confirmButtonClass: 'btn btn-success',
                                buttonsStyling: false
                            }, function (dismiss) {
                                location.reload()
                            })
                        }
                    },
                    error: function (e) {
                        \$('html').prepend(e.responseText)
                    }
                });
            })
            \$('form').submit(function(){
                    \$.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url: \"{{ path('visita_able') }}\",
                        data: \$(this).serialize(),
                        success: function (template) {
                            if (template.status == 1) {
                                swal({
                                    title: 'Parabens!',
                                    text: \"A visita aprovada com sucesso\",
                                    type: 'success',
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Ok, Continuar!',
                                    confirmButtonClass: 'btn btn-success',
                                    buttonsStyling: false
                                }, function (dismiss) {
                                    location.reload()
                                })
                            }
                        },
                        error: function (e) {
                            \$('html').prepend(e.responseText)
                        }
                    });
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
                    <i class=\"icon- font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> Visitas</span>
                </div>
                <div class=\"actions\">

                </div>
            </div>
            <div class=\"portlet-body\" style=\"min-height: 550px\">
                <div class=\"row\">
                <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"portlet light portlet-fit bordered\">
                        <div class=\"portlet-body\" style=\"min-height: 230px\">
                            <div class=\"mt-element-overlay\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"mt-overlay-1\">
                                            <img src=\"{{ asset('/pages/img/avatars/team12.jpg') }}\">
                                            <div class=\"mt-overlay\">
                                                <ul class=\"mt-info\">
                                                    <li>
                                                        <a class=\"btn default btn-outline\"
                                                           href=\"{{ path('pessoa_show',{'id':dados.idparticipante.id}) }}\">
                                                            <i class=\"icon-link\"></i>Ver Perfil
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-9 col-md-6 col-sm-6 col-xs-12\">
                    <!-- BEGIN Portlet PORTLET-->
                    <div class=\"portlet light portlet-fit bordered\">
                        <div class=\"portlet-body\" style=\"min-height: 230px\">
                            <div class=\"row\">
                                <div class=\"col-md-4 right\">Nome</div>
                                <div class=\"btn btn-outline col-md-8 text-left\">{{ dados.idparticipante.nome }}</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-4 right\">Tipo</div>
                                <div class=\"btn btn-outline col-md-8 text-left\">{{ dados.tipo }}</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-4 right\">Data da Visita</div>
                                <div class=\"btn btn-outline col-md-8 text-left\">{{ dados.datavisita }}</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-4 right\">Duração</div>
                                <div class=\"btn btn-outline col-md-8 text-left\">{{ dados.duracao }}</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-4 right\">Estado</div>
                                <div class=\"btn btn-outline col-md-8 text-left\">{{ dados.estado }}</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-4 right\">Data de cadastro</div>
                                <div class=\"btn btn-outline col-md-8 text-left\">{{ dados.data }}</div>
                            </div>
                        </div>
                    </div>
                </div></div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"mt-element-ribbon bg-grey-steel\" style=\"min-height: 220px\">
                        <div class=\"ribbon ribbon-round ribbon-border-dash-hor ribbon-color-default uppercase bold\">
                            Categoria de Interece
                            <span class=\"badge badge-success\">{{ dados.area|length }}</span></div>
                        <div class=\"col-md-12\"><br>
                        <ul>
                            {% for categoria in dados.area %}
                                <li class=\"caption-subject font-back bold uppercase\">{{ categoria.area.nome }} </li>
                            {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"mt-element-ribbon bg-grey-steel\" style=\"min-height: 220px;\">
                        <div class=\"ribbon ribbon-round ribbon-border-dash-hor ribbon-color-default uppercase bold\">
                            Descrição
                        </div>
                    <div class=\"col-md-12 bordered\">
                        <br>
                        <p>{{ dados.descricao }} .</p>
                        <hr>
                    </div>
                    </div>
                </div>
                {% if dados.estado =='Excluido'  %}
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"mt-element-ribbon bg-grey-steel\" style=\"min-height: 220px;\">

                        <div class=\"col-md-12 bordered\">
                            <br>
                                <div class=\"form-group\"><br>

                                    <button class=\"btn btn-danger \">Cancelado</button>
                                </div>
                            <hr>
                        </div>
                    </div>
                </div>
                {% elseif dados.tipo != 'Guiada' %}
                    {% if dados.estado !='Activo'  %}
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"mt-element-ribbon bg-grey-steel\" style=\"min-height: 220px;\">

                            <div class=\"col-md-12 bordered\">
                                <br>
                                <form method=\"POST\" action=\"javascript:;\">
                                    <div class=\"form-group\"><br>

                                        <input class=\"hidden\" value=\"x\" name=\"guia\" hidden>
                                        <input class=\"hidden\" value=\"{{ dados.id }}\" name=\"data\" hidden>
                                        <input class=\"hidden\" hidden value=\"check\" name=\"check\">
                                        <br>
                                        <button type=\"submit\"  class=\"btn btn-primary aprovar\">Aprovar</button>
                                        <button class=\"btn btn-danger negar\">Negar</button>
                                    </div>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                    {% endif %}
                {% else %}
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                    <div class=\"mt-element-ribbon bg-grey-steel\" style=\"min-height: 220px\">
                        <div class=\"ribbon ribbon-round ribbon-border-dash-hor ribbon-color-default uppercase bold\">
                            Guia da Visita
                        </div>
                        <br>

                        {% if dados.guia is null %}
                        <div class=\"bow setguia hidden col-md-12\">
                            <form method=\"POST\" action=\"javascript:;\">
                                <div class=\"form-group\"><br>
                                    <label>Escolha o Guia pra esta visita</label>
                                    <div class=\"input-icon input-icon-lg\">
                                        <input class=\"hidden\" value=\"{{ dados.id }}\" name=\"data\" hidden>
                                        <input class=\"hidden\" hidden value=\"check\" name=\"check\">
                                        <div id=\"pessoa\" class=\"input-icon input-icon-lg\" style=\"position: relative\"></div>
                                    </div><br><button type=\"submit\" class=\"btn btn-primary aprovar\">Salvar</button>
                                    <button type=\"button\" class=\"btn btn-default cancelar\">Cancelar</button>
                                </div>
                            </form>
                        </div>
                        <div class=\"bow getguia\">
                            <p class=\"ribbon-content\">Visita Criada e aguardando Aprovação Superior<br>
                                <button class=\"btn btn-primary aprovar\">Aprovar</button>
                                <button class=\"btn btn-danger negar\">Negar</button>
                            </p>
                        </div>
                        {% else %}
                            <div class=\"bow isguia\">
                                <hr>
                                <div class=\"mt-overlay-1\">
                                    <div class=\"col-md-4\">
                                        <img src=\"{{ asset('/pages/img/avatars/team12.jpg') }}\" style=\"width: 100%\">
                                    </div>
                                    <div class=\"col-md-6\"><br>
                                        <b class=\"caption-subject font-back bold uppercase\">
                                            {{ dados.guia.nome }}</b><br>
                                        <a href=\"{{ path('pessoa_show',{'id':dados.guia.id}) }}\" class=\"btn\">
                                                <i class=\"icon-link\"></i>Ver Perfil
                                                </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                            <hr>
                        </div>
                    </div>
                    <!-- END Portlet PORTLET-->
                </div>
                {% endif %}
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>", "MVS/visita_view.html.twig", "/var/www/html/hom/app/Resources/views/MVS/visita_view.html.twig");
    }
}

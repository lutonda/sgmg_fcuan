<?php

/* :MUS:membro_view.html.twig */
class __TwigTemplate_662e218661cadfb7d410fdf0f5e9d3296a3503d56e1407f783ce953e3627b2c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fda80afaadefa483a38505d3d8cf8d69f7b8af29d49a31a101e8cc0443d30e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda80afaadefa483a38505d3d8cf8d69f7b8af29d49a31a101e8cc0443d30e5a->enter($__internal_fda80afaadefa483a38505d3d8cf8d69f7b8af29d49a31a101e8cc0443d30e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS:membro_view.html.twig"));

        $__internal_d13deafced4b32c4ed6f2b218639be5f68afe9de33349c21efb8ab46916d371c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13deafced4b32c4ed6f2b218639be5f68afe9de33349c21efb8ab46916d371c->enter($__internal_d13deafced4b32c4ed6f2b218639be5f68afe9de33349c21efb8ab46916d371c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS:membro_view.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('javascripts', $context, $blocks);
        // line 126
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class=\"profile-sidebar\">
            <!-- PORTLET MAIN -->
            <div class=\"portlet light profile-sidebar-portlet bordered\" style=\"min-height: 550px\">
                <!-- SIDEBAR USERPIC -->
                <div class=\"profile-userpic\">
                    <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/media/profile/profile_user.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"> </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class=\"profile-usertitle\">
                    <div class=\"profile-usertitle-name\"> ";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 138, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
        echo " </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class=\"profile-userbuttons\">
                    <button type=\"button\" class=\"btn btn-circle green btn-sm\">";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 143, $this->getSourceContext()); })()), "tipo", array()), "html", null, true);
        echo "</button>
                    <button type=\"button\" class=\"btn btn-circle red btn-sm\">Message</button>
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class=\"profile-usermenu\">
                    <ul class=\"nav\">
                        <li class=\"active\">
                            <a href=\"javascript:;\" value=\"actividade\">
                                <i class=\"icon-home\"></i> Actividades </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"  class=\"xi\" value=\"detalhesconta\">
                                <i class=\"icon-settings\"></i> Detalhes de Conta </a>
                        </li>
                    </ul>
                </div>
                <div class=\"widget-thumb widget-bg-color-white text-uppercase margin-bottom-5 bordered\">
                    Grupos
                    <div class=\"widget-thumb-wrap\">
                        <i class=\"widget-thumb-icon bg-blue icon-bar-chart\"></i>
                        <i class=\"widget-thumb-icon bg-yellow icon-bubbles\"></i>
                        <i class=\"widget-thumb-icon bg-green icon-calculator\"></i>
                    </div>
                </div>
                <!-- END MENU -->
            </div>
            <!-- END PORTLET MAIN -->
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class=\"profile-content\">
            ";
        // line 175
        $this->loadTemplate((isset($context["api"]) || array_key_exists("api", $context) ? $context["api"] : (function () { throw new Twig_Error_Runtime('Variable "api" does not exist.', 175, $this->getSourceContext()); })()), ":MUS:membro_view.html.twig", 175)->display($context);
        // line 176
        echo "        </div>
        <!-- END PROFILE CONTENT -->
    </div>
</div>
<!-- END PAGE BASE CONTENT -->
";
        
        $__internal_fda80afaadefa483a38505d3d8cf8d69f7b8af29d49a31a101e8cc0443d30e5a->leave($__internal_fda80afaadefa483a38505d3d8cf8d69f7b8af29d49a31a101e8cc0443d30e5a_prof);

        
        $__internal_d13deafced4b32c4ed6f2b218639be5f68afe9de33349c21efb8ab46916d371c->leave($__internal_d13deafced4b32c4ed6f2b218639be5f68afe9de33349c21efb8ab46916d371c_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c2617c708f4d364dda8637d244b238652e9730f18bf5c675e9c82922fc2fcb86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2617c708f4d364dda8637d244b238652e9730f18bf5c675e9c82922fc2fcb86->enter($__internal_c2617c708f4d364dda8637d244b238652e9730f18bf5c675e9c82922fc2fcb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_408a994808aa248c849757d24a874429ff48bfc02e121932234046dc4c15764f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408a994808aa248c849757d24a874429ff48bfc02e121932234046dc4c15764f->enter($__internal_408a994808aa248c849757d24a874429ff48bfc02e121932234046dc4c15764f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    <script>
        \$(document).ready(function (e) {
            \$('.profile-usermenu .nav a').click(function (e) {
                e.preventDefault();
                snRequest(\$(this).attr('value'));
            })
            function snRequest(\$type) {
                \$('.profile-content').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 500px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Loader.gif"), "html", null, true);
        echo "\"></div>');
                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'api/'+\$type+'/";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["membro"]) || array_key_exists("membro", $context) ? $context["membro"] : (function () { throw new Twig_Error_Runtime('Variable "membro" does not exist.', 14, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "',
                    data: null,
                    success: function (template) {
                        if (template.status == 0) {

                            \$('.profile-content').html(template.message); //Change the html of the div with the id = \"your_div\"


                        }
                        if (template.status == 1) {
                            swal({
                                title: 'Parabens!',
                                text: \"A actualização da Categoria foi feita com sucesso\",
                                type: 'success',
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ok, Continuar!',
                                confirmButtonClass: 'btn btn-success',
                                buttonsStyling: false
                            }, function (dismiss) {
                                // dismiss can be 'cancel', 'overlay',
                                // 'close', and 'timer'
                                if (dismiss == true) {
                                    location.reload();
                                }

                            })
                        }
                        if (template.status == 2) {
                            swal({
                                title: 'Parabens!',
                                text: \"A Categoria inserida com sucesso\",
                                type: 'success',
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ok, Continuar!',
                                confirmButtonClass: 'btn btn-success',
                                buttonsStyling: false
                            }, function (dismiss) {
                                // dismiss can be 'cancel', 'overlay',
                                // 'close', and 'timer'
                                if (dismiss == true) {
                                    location.reload();
                                }

                            })
                        }
                    },
                    error: function (e) {
                        alert(typeof e);
                        \$('.profile-content').html(e.message)

                    }

                });
            }

            \$('.eliminar').click(function (e) {
                var item=\$(this).attr('d')
                var tipo=\$(this).attr('title')
                var id=\$(this).attr('value')
                swal({
                    title: 'Atenção!',
                    text: \"esta operação ira elimnar definitivamente a \"+tipo+\" \" + item + \". se Tiver dependentes, estes etarão sem dependecia\",
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

                    if (dismiss == true) {
                        \$.ajax({
                            type: 'POST',
                            dataType: 'json',
                            url: '/'+tipo+'/delete/' + id,
                            data: null,
                            success: function (template) {
                                swal({
                                    title: 'Ok!',
                                    text: \"A \"+tipo+\" \" + item + \" foi Eliminado com Sucesso\",
                                    type: 'success'
                                }, function(dismiss){
                                    if(dismiss==true){
                                        location.reload()
                                    }
                                })
                            }


                        })
                    }
                    else {
                        swal({
                            title: 'Cancelado!',
                            text: \"A \"+tipo+\" não \" + item + \" foi Eliminado\",
                            type: 'error'
                        }).then()
                    }
                })
            })


        })
    </script>
";
        
        $__internal_408a994808aa248c849757d24a874429ff48bfc02e121932234046dc4c15764f->leave($__internal_408a994808aa248c849757d24a874429ff48bfc02e121932234046dc4c15764f_prof);

        
        $__internal_c2617c708f4d364dda8637d244b238652e9730f18bf5c675e9c82922fc2fcb86->leave($__internal_c2617c708f4d364dda8637d244b238652e9730f18bf5c675e9c82922fc2fcb86_prof);

    }

    public function getTemplateName()
    {
        return ":MUS:membro_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 14,  126 => 10,  117 => 3,  108 => 2,  93 => 176,  91 => 175,  56 => 143,  48 => 138,  41 => 134,  31 => 126,  29 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block javascripts %}
    <script>
        \$(document).ready(function (e) {
            \$('.profile-usermenu .nav a').click(function (e) {
                e.preventDefault();
                snRequest(\$(this).attr('value'));
            })
            function snRequest(\$type) {
                \$('.profile-content').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 500px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"{{ asset('img/Loader.gif') }}\"></div>');
                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'api/'+\$type+'/{{ membro.id }}',
                    data: null,
                    success: function (template) {
                        if (template.status == 0) {

                            \$('.profile-content').html(template.message); //Change the html of the div with the id = \"your_div\"


                        }
                        if (template.status == 1) {
                            swal({
                                title: 'Parabens!',
                                text: \"A actualização da Categoria foi feita com sucesso\",
                                type: 'success',
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ok, Continuar!',
                                confirmButtonClass: 'btn btn-success',
                                buttonsStyling: false
                            }, function (dismiss) {
                                // dismiss can be 'cancel', 'overlay',
                                // 'close', and 'timer'
                                if (dismiss == true) {
                                    location.reload();
                                }

                            })
                        }
                        if (template.status == 2) {
                            swal({
                                title: 'Parabens!',
                                text: \"A Categoria inserida com sucesso\",
                                type: 'success',
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ok, Continuar!',
                                confirmButtonClass: 'btn btn-success',
                                buttonsStyling: false
                            }, function (dismiss) {
                                // dismiss can be 'cancel', 'overlay',
                                // 'close', and 'timer'
                                if (dismiss == true) {
                                    location.reload();
                                }

                            })
                        }
                    },
                    error: function (e) {
                        alert(typeof e);
                        \$('.profile-content').html(e.message)

                    }

                });
            }

            \$('.eliminar').click(function (e) {
                var item=\$(this).attr('d')
                var tipo=\$(this).attr('title')
                var id=\$(this).attr('value')
                swal({
                    title: 'Atenção!',
                    text: \"esta operação ira elimnar definitivamente a \"+tipo+\" \" + item + \". se Tiver dependentes, estes etarão sem dependecia\",
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

                    if (dismiss == true) {
                        \$.ajax({
                            type: 'POST',
                            dataType: 'json',
                            url: '/'+tipo+'/delete/' + id,
                            data: null,
                            success: function (template) {
                                swal({
                                    title: 'Ok!',
                                    text: \"A \"+tipo+\" \" + item + \" foi Eliminado com Sucesso\",
                                    type: 'success'
                                }, function(dismiss){
                                    if(dismiss==true){
                                        location.reload()
                                    }
                                })
                            }


                        })
                    }
                    else {
                        swal({
                            title: 'Cancelado!',
                            text: \"A \"+tipo+\" não \" + item + \" foi Eliminado\",
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
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class=\"profile-sidebar\">
            <!-- PORTLET MAIN -->
            <div class=\"portlet light profile-sidebar-portlet bordered\" style=\"min-height: 550px\">
                <!-- SIDEBAR USERPIC -->
                <div class=\"profile-userpic\">
                    <img src=\"{{ asset('pages/media/profile/profile_user.jpg') }}\" class=\"img-responsive\" alt=\"\"> </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class=\"profile-usertitle\">
                    <div class=\"profile-usertitle-name\"> {{ membro.nome  }} </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class=\"profile-userbuttons\">
                    <button type=\"button\" class=\"btn btn-circle green btn-sm\">{{ membro.tipo }}</button>
                    <button type=\"button\" class=\"btn btn-circle red btn-sm\">Message</button>
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class=\"profile-usermenu\">
                    <ul class=\"nav\">
                        <li class=\"active\">
                            <a href=\"javascript:;\" value=\"actividade\">
                                <i class=\"icon-home\"></i> Actividades </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\"  class=\"xi\" value=\"detalhesconta\">
                                <i class=\"icon-settings\"></i> Detalhes de Conta </a>
                        </li>
                    </ul>
                </div>
                <div class=\"widget-thumb widget-bg-color-white text-uppercase margin-bottom-5 bordered\">
                    Grupos
                    <div class=\"widget-thumb-wrap\">
                        <i class=\"widget-thumb-icon bg-blue icon-bar-chart\"></i>
                        <i class=\"widget-thumb-icon bg-yellow icon-bubbles\"></i>
                        <i class=\"widget-thumb-icon bg-green icon-calculator\"></i>
                    </div>
                </div>
                <!-- END MENU -->
            </div>
            <!-- END PORTLET MAIN -->
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class=\"profile-content\">
            {%  include api %}
        </div>
        <!-- END PROFILE CONTENT -->
    </div>
</div>
<!-- END PAGE BASE CONTENT -->
", ":MUS:membro_view.html.twig", "/var/www/html/hom/app/Resources/views/MUS/membro_view.html.twig");
    }
}

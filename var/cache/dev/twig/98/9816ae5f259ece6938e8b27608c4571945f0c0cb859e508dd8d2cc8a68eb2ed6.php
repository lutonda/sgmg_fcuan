<?php

/* :amostra/api:amostra_Rocha_form.html.twig */
class __TwigTemplate_c46cc00129f7ec36abf85c79bf87e81c942109ea400c043a91605cdbf0237736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'javascript' => array($this, 'block_javascript'),
            'css' => array($this, 'block_css'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b207e2cadbff9ba91525b16bbf599ef4028816b1ddb8c8dd839c05d1008bdd5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b207e2cadbff9ba91525b16bbf599ef4028816b1ddb8c8dd839c05d1008bdd5c->enter($__internal_b207e2cadbff9ba91525b16bbf599ef4028816b1ddb8c8dd839c05d1008bdd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:amostra_Rocha_form.html.twig"));

        $__internal_91799c75291a1b9ef491228c681564b472e4e0e5b00ac270afe56125b0067310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91799c75291a1b9ef491228c681564b472e4e0e5b00ac270afe56125b0067310->enter($__internal_91799c75291a1b9ef491228c681564b472e4e0e5b00ac270afe56125b0067310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:amostra_Rocha_form.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
        echo "
";
        // line 185
        echo "
<script id=\"template-upload\" type=\"text/x-tmpl\">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class=\"template-upload fade\">
        <td>
            <span class=\"preview\"></span>
        </td>
        <td>
            <p class=\"name\">{%=file.name%}</p>
            <strong class=\"error text-danger\"></strong>
        </td>
        <td>
            <p class=\"size\">Processing...</p>
            <div class=\"progress progress-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-valuenow=\"0\"><div class=\"progress-bar progress-bar-success\" style=\"width:0%;\"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class=\"btn btn-primary start\" disabled>
                    <i class=\"glyphicon glyphicon-upload\"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class=\"btn btn-warning cancel\">
                    <i class=\"glyphicon glyphicon-ban-circle\"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id=\"template-download\" type=\"text/x-tmpl\">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class=\"template-download fade\">
        <td>
            <span class=\"preview\">
                {% if (file.thumbnailUrl) { %}
                    <a href=\"{%=file.url%}\" title=\"{%=file.name%}\" download=\"{%=file.name%}\" data-gallery><img src=\"{%=file.thumbnailUrl%}\"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class=\"name\">
                {% if (file.url) { %}
                    <a href=\"{%=file.url%}\" title=\"{%=file.name%}\" download=\"{%=file.name%}\" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class=\"label label-danger\">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class=\"size\">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class=\"btn btn-danger delete\" data-type=\"{%=file.deleteType%}\" data-url=\"{%=file.deleteUrl%}\"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{\"withCredentials\":true}'{% } %}>
                    <i class=\"glyphicon glyphicon-trash\"></i>
                    <span>Delete</span>
                </button>
                <input type=\"checkbox\" name=\"delete\" value=\"1\" class=\"toggle\">
            {% } else { %}
                <button class=\"btn btn-warning cancel\">
                    <i class=\"glyphicon glyphicon-ban-circle\"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
";
        echo "
";
        // line 186
        $this->displayBlock('javascript', $context, $blocks);
        // line 220
        $this->displayBlock('css', $context, $blocks);
        // line 240
        echo "<div class=\"col-md-12\">
    <div class=\"portlet box\">
        <div class=\"portlet-body form\">
            <!-- BEGIN FORM-->
            <form action=\"javascript:;\" method=\"POST\" class=\"cadastrarAcervo\" enctype=\"multipart/form-data\"  id=\"fileupload\">
                <input name=\"form\" value=\"Rocha\" class=\"hidden\"><input name=\"tipo\" value=\"Salvar\" class=\"hidden\">
                <div class=\"col-md-6\">
                    <div class=\"form-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nome</label>
                            <input type=\"text\" name=\"nome\" class=\"form-control\" placeholder=\"Nome do acervo\">
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Prateleira</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <select name=\"prateleira\" id=\"elemento-nome_0\"
                                        data-pattern-name=\"elemento-nome[++]\" data-pattern-id=\"elemento-nome_++\"
                                        class=\"form-control\">
                                    ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prateleira"]) || array_key_exists("prateleira", $context) ? $context["prateleira"] : (function () { throw new Twig_Error_Runtime('Variable "prateleira" does not exist.', 260, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
            // line 261
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pt"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pt"], "nome", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Categoria</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <select name=\"categoria\" id=\"categoria\"
                                        data-pattern-name=\"elemento-nome[++]\" data-pattern-id=\"elemento-nome_++\"
                                        class=\"form-control\">
                                    ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new Twig_Error_Runtime('Variable "categoria" does not exist.', 274, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ct"]) {
            // line 275
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "nome", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "dependencia", array()), "nome", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-group categoria mododejazida\">
                            <label class=\"control-label\">Modo de Jazida</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"mododejazida\"></div>
                            </div>
                        </div>

                        <div class=\"form-group categoria ambiente hidden\">
                            <label class=\"control-label\">Ambiente Sedimentar</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"ambiente\"></div>
                            </div>
                        </div>

                        <div class=\"form-group categoria graumetamorfico hidden\">
                            <label class=\"control-label\">Grau Metamórfico</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <input name=\"graumetamorfico\" class=\"form-control\" type=\"text\" multiple=\"multiple\">
                            </div>
                        </div>


                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"form-body\">

                        <div class=\"form-group\">
                            <label class=\"control-label\">Mineralogia</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <input name=\"mineralogia\" class=\"form-control\" type=\"text\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Aplicação</label>
                            <textarea class=\"form-control\" name=\"aplicacao\"></textarea>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Condições de Formações</label>
                            <textarea class=\"form-control\" name=\"condicoes\"></textarea>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Descrição</label>
                            <textarea class=\"form-control\" name=\"descricao\"></textarea>
                        </div>

                    </div>
                </div>
                <div class=\"col-md-12\">
                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                    <div class=\"row fileupload-buttonbar\">
                        <div class=\"col-lg-7\">
                            <!-- The fileinput-button span is used to style the file input field as button -->
                            <span class=\"btn green fileinput-button\">
                                                        <i class=\"fa fa-plus\"></i>
                                                        <span> Add files... </span>
                                                        <input type=\"file\" name=\"files[]\" multiple=\"\"> </span>
                            <button type=\"button\" class=\"btn red delete\">
                                <i class=\"fa fa-trash\"></i>
                                <span> Delete </span>
                            </button>
                            <input type=\"checkbox\" class=\"toggle\">
                            <!-- The global file processing state -->
                            <span class=\"fileupload-process\"> </span>
                        </div>
                        <!-- The global progress information -->
                        <div class=\"col-lg-5 fileupload-progress fade\">
                            <!-- The global progress bar -->
                            <div class=\"progress progress-striped active\" role=\"progressbar\" aria-valuemin=\"0\"
                                 aria-valuemax=\"100\">
                                <div class=\"progress-bar progress-bar-success\" style=\"width:0%;\"></div>
                            </div>
                            <!-- The extended global progress information -->
                            <div class=\"progress-extended\"> &nbsp; </div>
                        </div>
                    </div>
                    <!-- The table listing the files available for upload/download -->
                    <table role=\"presentation\" class=\"table table-striped clearfix\">
                        <tbody class=\"files\"></tbody>
                    </table>

                </div>
                <div class=\"form-actions col-md-12 right\">
                    <button type=\"submit\" class=\"btn green\">Submit</button>
                    <button type=\"button\" class=\"btn default\">Cancel</button>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
</div>";
        
        $__internal_b207e2cadbff9ba91525b16bbf599ef4028816b1ddb8c8dd839c05d1008bdd5c->leave($__internal_b207e2cadbff9ba91525b16bbf599ef4028816b1ddb8c8dd839c05d1008bdd5c_prof);

        
        $__internal_91799c75291a1b9ef491228c681564b472e4e0e5b00ac270afe56125b0067310->leave($__internal_91799c75291a1b9ef491228c681564b472e4e0e5b00ac270afe56125b0067310_prof);

    }

    // line 1
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5289e6cfefae5c18416e8ef9c9e1fee123a79888beccc30a83c4e9d1294f500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5289e6cfefae5c18416e8ef9c9e1fee123a79888beccc30a83c4e9d1294f500->enter($__internal_c5289e6cfefae5c18416e8ef9c9e1fee123a79888beccc30a83c4e9d1294f500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e557201ea598227a68b712fb9ac7e27ba6a8be656d096e16a5b58852337e78c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e557201ea598227a68b712fb9ac7e27ba6a8be656d096e16a5b58852337e78c6->enter($__internal_e557201ea598227a68b712fb9ac7e27ba6a8be656d096e16a5b58852337e78c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2
        echo "    <script>
        \$(function () {
            \$('.cadastrarAcervo').submit(function () {
                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: '/acervos/new',
                    data: \$(this).serialize(),
                    success: function (template) {
                        alert(9);
                        if (template.status == 1) {
                            swal({
                                title: 'Parabens!',
                                text: \"O Mineiro foi criado com sucesso\",
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
                        } else {
                            swal({
                                title: 'Lamentamos!',
                                text: \"Ocoreu um Erro ao cadastrar o Acervo, Por favor Tente mais tarde, se persistir contacte o Administrador\",
                                type: 'error',
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
                        swal({
                            title: 'Lamentamos! ' + e.status,
                            text: \"Ocoreu um Erro ao cadastrar o Acervo, Por favor Tente mais tarde, se persistir contacte o Administrador\",
                            type: 'error',
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ok, Continuar!',
                            confirmButtonClass: 'btn btn-success',
                            buttonsStyling: false
                        }, function (dismiss) {
                            // dismiss can be 'cancel', 'overlay',
                            // 'close', and 'timer'
                            if (dismiss == true) {
                                // location.reload();
                            }

                        })
                    }
                });

            });
            \$('#categoria').change(function () {
                \$('div.categoria').addClass('hidden')
                if (\$('#categoria').val() == \"13\") {
                    \$('.mododejazida').removeClass('hidden');
                }
                else if (\$('#categoria').val() == \"14\") {
                    \$('.graumetamorfico').removeClass('hidden');
                }
                else if (\$('#categoria').val() == \"15\") {
                    \$('.ambiente').removeClass('hidden');
                }
            })
            \$('#mododejazida').magicSuggest({
                data: [
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mododejazida"]) || array_key_exists("mododejazida", $context) ? $context["mododejazida"] : (function () { throw new Twig_Error_Runtime('Variable "mododejazida" does not exist.', 87, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cr"]) {
            // line 88
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cr"], "nome", array()), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"mododejazida\"
            });
            \$('#ambiente').magicSuggest({
                data: [
                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ambiente"]) || array_key_exists("ambiente", $context) ? $context["ambiente"] : (function () { throw new Twig_Error_Runtime('Variable "ambiente" does not exist.', 97, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cr"]) {
            // line 98
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cr"], "nome", array()), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"ambiente\"
            });
        })
        ;
    </script>
";
        
        $__internal_e557201ea598227a68b712fb9ac7e27ba6a8be656d096e16a5b58852337e78c6->leave($__internal_e557201ea598227a68b712fb9ac7e27ba6a8be656d096e16a5b58852337e78c6_prof);

        
        $__internal_c5289e6cfefae5c18416e8ef9c9e1fee123a79888beccc30a83c4e9d1294f500->leave($__internal_c5289e6cfefae5c18416e8ef9c9e1fee123a79888beccc30a83c4e9d1294f500_prof);

    }

    // line 186
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_554ad2eec6783509a36b594c9e9f4697a4bccfacad49ba4036d3c6f1944fd5d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554ad2eec6783509a36b594c9e9f4697a4bccfacad49ba4036d3c6f1944fd5d6->enter($__internal_554ad2eec6783509a36b594c9e9f4697a4bccfacad49ba4036d3c6f1944fd5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_4f12c99fc7e2a3fe828b97ea6e3063bec08e8fd70ea2d5334944d354b6aa70fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f12c99fc7e2a3fe828b97ea6e3063bec08e8fd70ea2d5334944d354b6aa70fd->enter($__internal_4f12c99fc7e2a3fe828b97ea6e3063bec08e8fd70ea2d5334944d354b6aa70fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 187
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/tmpl.min.js"), "html", null, true);
        echo "\"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/load-image.all.min.js"), "html", null, true);
        echo "\"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/canvas-to-blob.min.js"), "html", null, true);
        echo "\"></script>
<!-- blueimp Gallery script -->
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.blueimp-gallery.min.js"), "html", null, true);
        echo "\"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
<!-- The basic File Upload plugin -->
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload processing plugin -->
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-process.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload image preview & resize plugin -->
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-image.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload audio preview plugin -->
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload video preview plugin -->
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-video.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload validation plugin -->
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload user interface plugin -->
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"), "html", null, true);
        echo "\"></script>
<!-- The main application script -->
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/main.js"), "html", null, true);
        echo "\"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4f12c99fc7e2a3fe828b97ea6e3063bec08e8fd70ea2d5334944d354b6aa70fd->leave($__internal_4f12c99fc7e2a3fe828b97ea6e3063bec08e8fd70ea2d5334944d354b6aa70fd_prof);

        
        $__internal_554ad2eec6783509a36b594c9e9f4697a4bccfacad49ba4036d3c6f1944fd5d6->leave($__internal_554ad2eec6783509a36b594c9e9f4697a4bccfacad49ba4036d3c6f1944fd5d6_prof);

    }

    // line 220
    public function block_css($context, array $blocks = array())
    {
        $__internal_92b899ac42812443efb939a94a9f8311d5803e8277920ddf710f3834c5eb25a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b899ac42812443efb939a94a9f8311d5803e8277920ddf710f3834c5eb25a1->enter($__internal_92b899ac42812443efb939a94a9f8311d5803e8277920ddf710f3834c5eb25a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_2e23c26bee0024ad3bd0457e10b259f14f4450e590e9a89c329e25754216f1ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e23c26bee0024ad3bd0457e10b259f14f4450e590e9a89c329e25754216f1ac->enter($__internal_2e23c26bee0024ad3bd0457e10b259f14f4450e590e9a89c329e25754216f1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 221
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/css/jquery.fileupload.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <!-- Generic page styles -->
<link rel=\"stylesheet\" href=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/style.css"), "html", null, true);
        echo "\">
<!-- blueimp Gallery styles -->
<link rel=\"stylesheet\" href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/blueimp-gallery.min.css"), "html", null, true);
        echo "\">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel=\"stylesheet\" href=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/jquery.fileupload.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/jquery.fileupload-ui.css"), "html", null, true);
        echo "\">
<!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript>
        <link rel=\"stylesheet\" href=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/jquery.fileupload-noscript.css"), "html", null, true);
        echo "\">
    </noscript>
    <noscript>
        <link rel=\"stylesheet\" href=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/jquery.fileupload-ui-noscript.css"), "html", null, true);
        echo "\">
    </noscript>
";
        
        $__internal_2e23c26bee0024ad3bd0457e10b259f14f4450e590e9a89c329e25754216f1ac->leave($__internal_2e23c26bee0024ad3bd0457e10b259f14f4450e590e9a89c329e25754216f1ac_prof);

        
        $__internal_92b899ac42812443efb939a94a9f8311d5803e8277920ddf710f3834c5eb25a1->leave($__internal_92b899ac42812443efb939a94a9f8311d5803e8277920ddf710f3834c5eb25a1_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:amostra_Rocha_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 237,  589 => 234,  583 => 231,  579 => 230,  574 => 228,  569 => 226,  564 => 224,  560 => 223,  556 => 222,  551 => 221,  542 => 220,  530 => 218,  524 => 215,  519 => 213,  514 => 211,  509 => 209,  504 => 207,  499 => 205,  494 => 203,  489 => 201,  484 => 199,  479 => 197,  474 => 195,  469 => 193,  464 => 191,  459 => 189,  453 => 187,  444 => 186,  426 => 100,  417 => 98,  413 => 97,  404 => 90,  395 => 88,  391 => 87,  304 => 2,  295 => 1,  183 => 277,  170 => 275,  166 => 274,  153 => 263,  142 => 261,  138 => 260,  116 => 240,  114 => 220,  112 => 186,  33 => 185,  30 => 109,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block javascripts %}
    <script>
        \$(function () {
            \$('.cadastrarAcervo').submit(function () {
                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: '/acervos/new',
                    data: \$(this).serialize(),
                    success: function (template) {
                        alert(9);
                        if (template.status == 1) {
                            swal({
                                title: 'Parabens!',
                                text: \"O Mineiro foi criado com sucesso\",
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
                        } else {
                            swal({
                                title: 'Lamentamos!',
                                text: \"Ocoreu um Erro ao cadastrar o Acervo, Por favor Tente mais tarde, se persistir contacte o Administrador\",
                                type: 'error',
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
                        swal({
                            title: 'Lamentamos! ' + e.status,
                            text: \"Ocoreu um Erro ao cadastrar o Acervo, Por favor Tente mais tarde, se persistir contacte o Administrador\",
                            type: 'error',
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ok, Continuar!',
                            confirmButtonClass: 'btn btn-success',
                            buttonsStyling: false
                        }, function (dismiss) {
                            // dismiss can be 'cancel', 'overlay',
                            // 'close', and 'timer'
                            if (dismiss == true) {
                                // location.reload();
                            }

                        })
                    }
                });

            });
            \$('#categoria').change(function () {
                \$('div.categoria').addClass('hidden')
                if (\$('#categoria').val() == \"13\") {
                    \$('.mododejazida').removeClass('hidden');
                }
                else if (\$('#categoria').val() == \"14\") {
                    \$('.graumetamorfico').removeClass('hidden');
                }
                else if (\$('#categoria').val() == \"15\") {
                    \$('.ambiente').removeClass('hidden');
                }
            })
            \$('#mododejazida').magicSuggest({
                data: [
                    {% for cr in mododejazida %}
                    \"{{ cr.nome }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"mododejazida\"
            });
            \$('#ambiente').magicSuggest({
                data: [
                    {% for cr in ambiente %}
                    \"{{ cr.nome }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"ambiente\"
            });
        })
        ;
    </script>
{% endblock %}

{% verbatim %}
<script id=\"template-upload\" type=\"text/x-tmpl\">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class=\"template-upload fade\">
        <td>
            <span class=\"preview\"></span>
        </td>
        <td>
            <p class=\"name\">{%=file.name%}</p>
            <strong class=\"error text-danger\"></strong>
        </td>
        <td>
            <p class=\"size\">Processing...</p>
            <div class=\"progress progress-striped active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" aria-valuenow=\"0\"><div class=\"progress-bar progress-bar-success\" style=\"width:0%;\"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class=\"btn btn-primary start\" disabled>
                    <i class=\"glyphicon glyphicon-upload\"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class=\"btn btn-warning cancel\">
                    <i class=\"glyphicon glyphicon-ban-circle\"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id=\"template-download\" type=\"text/x-tmpl\">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class=\"template-download fade\">
        <td>
            <span class=\"preview\">
                {% if (file.thumbnailUrl) { %}
                    <a href=\"{%=file.url%}\" title=\"{%=file.name%}\" download=\"{%=file.name%}\" data-gallery><img src=\"{%=file.thumbnailUrl%}\"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class=\"name\">
                {% if (file.url) { %}
                    <a href=\"{%=file.url%}\" title=\"{%=file.name%}\" download=\"{%=file.name%}\" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class=\"label label-danger\">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class=\"size\">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class=\"btn btn-danger delete\" data-type=\"{%=file.deleteType%}\" data-url=\"{%=file.deleteUrl%}\"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{\"withCredentials\":true}'{% } %}>
                    <i class=\"glyphicon glyphicon-trash\"></i>
                    <span>Delete</span>
                </button>
                <input type=\"checkbox\" name=\"delete\" value=\"1\" class=\"toggle\">
            {% } else { %}
                <button class=\"btn btn-warning cancel\">
                    <i class=\"glyphicon glyphicon-ban-circle\"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
{% endverbatim %}
{% block javascript %}
    <script src=\"{{ asset('global/plugins/jquery-file-upload/js/jquery.min.js') }}\"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src=\"{{ asset('global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js') }}\"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
    <script src=\"{{ asset('global/plugins/jquery-file-upload/js/tmpl.min.js') }}\"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src=\"{{ asset('global/plugins/jquery-file-upload/js/load-image.all.min.js') }}\"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src=\"{{ asset('global/plugins/jquery-file-upload/js/canvas-to-blob.min.js') }}\"></script>
<!-- blueimp Gallery script -->
    <script src=\"{{ asset('global/plugins/jquery-file-upload/js/jquery.blueimp-gallery.min.js') }}\"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src=\"{{ asset('global/plugins/jquery-file-upload/js/jquery.iframe-transport.js') }}\"></script>
<!-- The basic File Upload plugin -->
    <script src=\"{{ asset('global/plugins/jquery-file-upload/js/jquery.fileupload.js') }}\"></script>
<!-- The File Upload processing plugin -->
    <script src=\"{{ asset('global/plugins/jquery-file-upload/js/jquery.fileupload-process.js') }}\"></script>
<!-- The File Upload image preview & resize plugin -->
    <script src=\"{{ asset('global/plugins/jquery-file-upload/js/jquery.fileupload-image.js') }}\"></script>
<!-- The File Upload audio preview plugin -->
    <script src=\"{{ asset('global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js') }}\"></script>
<!-- The File Upload video preview plugin -->
    <script src=\"{{ asset('global/plugins/jquery-file-upload/js/jquery.fileupload-video.js') }}\"></script>
<!-- The File Upload validation plugin -->
    <script src=\"{{ asset('global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js') }}\"></script>
<!-- The File Upload user interface plugin -->
    <script src=\"{{ asset('global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js') }}\"></script>
<!-- The main application script -->
    <script src=\"{{ asset('global/plugins/jquery-file-upload/js/main.js') }}\"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src=\"{{ asset('global/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js') }}\"></script>
{% endblock %}
{% block css %}
    <link href=\"{{ asset('global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('global/plugins/jquery-file-upload/css/jquery.fileupload.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('global/plugins/file-upload/css/bootstrap.min.css') }}\" rel=\"stylesheet\" >
    <!-- Generic page styles -->
<link rel=\"stylesheet\" href=\"{{ asset('global/plugins/file-upload/css/style.css') }}\">
<!-- blueimp Gallery styles -->
<link rel=\"stylesheet\" href=\"{{ asset('global/plugins/file-upload/css/blueimp-gallery.min.css') }}\">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel=\"stylesheet\" href=\"{{ asset('global/plugins/file-upload/css/jquery.fileupload.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('global/plugins/file-upload/css/jquery.fileupload-ui.css') }}\">
<!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript>
        <link rel=\"stylesheet\" href=\"{{ asset('global/plugins/file-upload/css/jquery.fileupload-noscript.css') }}\">
    </noscript>
    <noscript>
        <link rel=\"stylesheet\" href=\"{{ asset('global/plugins/file-upload/css/jquery.fileupload-ui-noscript.css') }}\">
    </noscript>
{% endblock %}
<div class=\"col-md-12\">
    <div class=\"portlet box\">
        <div class=\"portlet-body form\">
            <!-- BEGIN FORM-->
            <form action=\"javascript:;\" method=\"POST\" class=\"cadastrarAcervo\" enctype=\"multipart/form-data\"  id=\"fileupload\">
                <input name=\"form\" value=\"Rocha\" class=\"hidden\"><input name=\"tipo\" value=\"Salvar\" class=\"hidden\">
                <div class=\"col-md-6\">
                    <div class=\"form-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nome</label>
                            <input type=\"text\" name=\"nome\" class=\"form-control\" placeholder=\"Nome do acervo\">
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Prateleira</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <select name=\"prateleira\" id=\"elemento-nome_0\"
                                        data-pattern-name=\"elemento-nome[++]\" data-pattern-id=\"elemento-nome_++\"
                                        class=\"form-control\">
                                    {% for pt in prateleira %}
                                        <option value=\"{{ pt.id }}\">{{ pt.nome }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Categoria</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <select name=\"categoria\" id=\"categoria\"
                                        data-pattern-name=\"elemento-nome[++]\" data-pattern-id=\"elemento-nome_++\"
                                        class=\"form-control\">
                                    {% for ct in categoria %}
                                        <option value=\"{{ ct.id }}\">{{ ct.nome }} - {{ ct.dependencia.nome }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>

                        <div class=\"form-group categoria mododejazida\">
                            <label class=\"control-label\">Modo de Jazida</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"mododejazida\"></div>
                            </div>
                        </div>

                        <div class=\"form-group categoria ambiente hidden\">
                            <label class=\"control-label\">Ambiente Sedimentar</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"ambiente\"></div>
                            </div>
                        </div>

                        <div class=\"form-group categoria graumetamorfico hidden\">
                            <label class=\"control-label\">Grau Metamórfico</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <input name=\"graumetamorfico\" class=\"form-control\" type=\"text\" multiple=\"multiple\">
                            </div>
                        </div>


                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"form-body\">

                        <div class=\"form-group\">
                            <label class=\"control-label\">Mineralogia</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <input name=\"mineralogia\" class=\"form-control\" type=\"text\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Aplicação</label>
                            <textarea class=\"form-control\" name=\"aplicacao\"></textarea>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Condições de Formações</label>
                            <textarea class=\"form-control\" name=\"condicoes\"></textarea>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Descrição</label>
                            <textarea class=\"form-control\" name=\"descricao\"></textarea>
                        </div>

                    </div>
                </div>
                <div class=\"col-md-12\">
                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                    <div class=\"row fileupload-buttonbar\">
                        <div class=\"col-lg-7\">
                            <!-- The fileinput-button span is used to style the file input field as button -->
                            <span class=\"btn green fileinput-button\">
                                                        <i class=\"fa fa-plus\"></i>
                                                        <span> Add files... </span>
                                                        <input type=\"file\" name=\"files[]\" multiple=\"\"> </span>
                            <button type=\"button\" class=\"btn red delete\">
                                <i class=\"fa fa-trash\"></i>
                                <span> Delete </span>
                            </button>
                            <input type=\"checkbox\" class=\"toggle\">
                            <!-- The global file processing state -->
                            <span class=\"fileupload-process\"> </span>
                        </div>
                        <!-- The global progress information -->
                        <div class=\"col-lg-5 fileupload-progress fade\">
                            <!-- The global progress bar -->
                            <div class=\"progress progress-striped active\" role=\"progressbar\" aria-valuemin=\"0\"
                                 aria-valuemax=\"100\">
                                <div class=\"progress-bar progress-bar-success\" style=\"width:0%;\"></div>
                            </div>
                            <!-- The extended global progress information -->
                            <div class=\"progress-extended\"> &nbsp; </div>
                        </div>
                    </div>
                    <!-- The table listing the files available for upload/download -->
                    <table role=\"presentation\" class=\"table table-striped clearfix\">
                        <tbody class=\"files\"></tbody>
                    </table>

                </div>
                <div class=\"form-actions col-md-12 right\">
                    <button type=\"submit\" class=\"btn green\">Submit</button>
                    <button type=\"button\" class=\"btn default\">Cancel</button>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
</div>", ":amostra/api:amostra_Rocha_form.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/amostra_Rocha_form.html.twig");
    }
}

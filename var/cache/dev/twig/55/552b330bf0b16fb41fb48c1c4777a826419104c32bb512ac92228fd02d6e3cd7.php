<?php

/* :amostra/api:amostra_Mineiro_form.html.twig */
class __TwigTemplate_9c762ab51cdc233b8a230e7842fe1d6bea569054b922e9950026318afa7cc439 extends Twig_Template
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
        $__internal_fb2de20320f8a2d36353d2d9939bda6d03e0fad8ea110c801d04b22ed5acc705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2de20320f8a2d36353d2d9939bda6d03e0fad8ea110c801d04b22ed5acc705->enter($__internal_fb2de20320f8a2d36353d2d9939bda6d03e0fad8ea110c801d04b22ed5acc705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:amostra_Mineiro_form.html.twig"));

        $__internal_c72f61da016af18174db738e4719ff2249cc3e7b9005288656d0fe8fe8560032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72f61da016af18174db738e4719ff2249cc3e7b9005288656d0fe8fe8560032->enter($__internal_c72f61da016af18174db738e4719ff2249cc3e7b9005288656d0fe8fe8560032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:amostra_Mineiro_form.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        // line 186
        echo "
";
        // line 262
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
        // line 263
        $this->displayBlock('javascript', $context, $blocks);
        // line 297
        $this->displayBlock('css', $context, $blocks);
        // line 317
        echo "<div class=\"col-md-12\">
    <div class=\"portlet box\">
        <div class=\"portlet-body form\">
            <!-- BEGIN FORM-->
            <form action=\"javascript:;\" method=\"POST\" class=\"cadastrarAcervo\" enctype=\"multipart/form-data\"
                  id=\"fileupload\">
                <input name=\"form\" value=\"Mineiro\" class=\"hidden\"><input name=\"tipo\" value=\"Salvar\" class=\"hidden\">
                <div class=\"col-md-6\">
                    <div class=\"form-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nome</label>
                            <input type=\"text\" name=\"nome\" class=\"form-control\" placeholder=\"Nome do acervo\">
                        </div>
                        <div class=\"form-group\">
                            <!-- BEGIN Portlet COMPOSICAO QUIMICA-->
                            <div class=\"portlet solid grey-silver\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"fa fa-gift\"></i>Composição Química
                                    </div>
                                </div>
                                <div class=\"portlet-body\" id=\"composicaoQuimica\">
                                    <div class=\"r-group\">
                                        <input type=\"number\" value=\"1\" name=\"elemento-qtd[0]\" id=\"elemento-qtd_0\"
                                               data-pattern-name=\"elemento-qtd[++]\" data-pattern-id=\"elemento-qtd_++\"
                                               class=\"form-control col-md-4\" style=\"width: 20%\"/>
                                        <select name=\"elemento-nome[0]\" id=\"elemento-nome_0\"
                                                data-pattern-name=\"elemento-nome[++]\" data-pattern-id=\"elemento-nome_++\"
                                                class=\"form-control col-md-8\" style=\"width: 65%\">
                                            ";
        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elemestosQuimicos"]) || array_key_exists("elemestosQuimicos", $context) ? $context["elemestosQuimicos"] : (function () { throw new Twig_Error_Runtime('Variable "elemestosQuimicos" does not exist.', 346, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 347
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["el"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["el"], "nome", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["el"], "simbolo", array()), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "                                        </select>
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

                                </div>
                            </div>
                            <!-- END GRID COMPOSICAO QUIMICA-->
                        </div>

                        <div class=\"form-group\">
                            <!-- BEGIN Portlet DUREZA-->
                            <div class=\"portlet solid grey-silver\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"fa fa-gift\"></i>Dureza
                                    </div>
                                </div>
                                <div class=\"portlet-body\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\">Minimo</span>
                                        <input type=\"number\" class=\"form-control\" name=\"dureza-Min\">
                                        <span class=\"input-group-addon\">Maximo</span>
                                        <input type=\"number\" class=\"form-control\" name=\"dureza-Max\">
                                    </div>
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"durezaDescricao\" multiple class=\"form-control\"
                                               placeholder=\"Descrição\">
                                        <span class=\"input-group-addon\">
                                                                                        <i class=\"fa fa-user\"></i>
                                                                                    </span>
                                    </div>
                                </div>
                            </div>
                            <!-- END GRID DUREZA-->
                        </div>

                        <div class=\"form-group\">
                            <!-- BEGIN Portlet DUREZA-->
                            <div class=\"portlet solid grey-silver\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"fa fa-gift\"></i>Medida
                                    </div>
                                </div>
                                <div class=\"portlet-body\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\">Espessura</span>
                                        <input type=\"number\" class=\"form-control\" name=\"medidaEspecura\">
                                        <span class=\"input-group-addon\">Altura</span>
                                        <input type=\"number\" class=\"form-control\" name=\"medidaAltura\">
                                    </div>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\">Comprimento</span>
                                        <input type=\"number\" class=\"form-control\" name=\"medidaComprimento\">
                                        <span class=\"input-group-addon\">Largura</span>
                                        <input type=\"number\" class=\"form-control\" name=\"medidaLargura\">
                                    </div>
                                </div>
                            </div>
                            <!-- END GRID DUREZA-->
                        </div>


                        <div class=\"form-group\">
                            <label class=\"control-label\">Transparência</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"trasparenciaMineiro\"></div>
                            </div>
                        </div>


                        <div class=\"form-group\">
                            <label class=\"control-label\">Categoria</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <select name=\"categoria\" id=\"elemento-nome_0\"
                                        data-pattern-name=\"elemento-nome[++]\" data-pattern-id=\"elemento-nome_++\"
                                        class=\"form-control\">
                                    ";
        // line 439
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new Twig_Error_Runtime('Variable "categoria" does not exist.', 439, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ct"]) {
            // line 440
            echo "                                        ";
            if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "dependencia", array()))) {
                // line 441
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "nome", array()), "html", null, true);
                echo "
                                                - ";
                // line 442
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["ct"], "dependencia", array()), "nome", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            // line 444
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 445
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Prateleira</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <select name=\"prateleira\" id=\"elemento-nome_0\"
                                        data-pattern-name=\"elemento-nome[++]\" data-pattern-id=\"elemento-nome_++\"
                                        class=\"form-control\">
                                    ";
        // line 456
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prateleira"]) || array_key_exists("prateleira", $context) ? $context["prateleira"] : (function () { throw new Twig_Error_Runtime('Variable "prateleira" does not exist.', 456, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
            // line 457
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
        // line 459
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-group last\">
                            <label class=\"control-label\">Static Control</label>
                            <p class=\"form-control-static\"> email@example.com </p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"form-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Brilho</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"brilhosMineiro\"></div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Risca</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"riscasMineiro\"></div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Cor</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"corMineiro\"></div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Gênese</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"geneseMineiro\"></div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Paragênese</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"parageneseMineiro\"></div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Hábito</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"habitoMineiro\"></div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Fratura</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"fraturaMineiro\"></div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Clivagem</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"clivagemMineiro\"></div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Aplicação</label>
                            <textarea class=\"form-control\" name=\"aplicacao\"></textarea>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Caracteristica</label>
                            <textarea class=\"form-control\" rows=\"3\" name=\"caracteristica\"></textarea>
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
                    <button type=\"submit\" class=\"btn green\">Cadastrar</button>
                    <button type=\"button\" class=\"btn default\">Cancel</button>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
</div>";
        
        $__internal_fb2de20320f8a2d36353d2d9939bda6d03e0fad8ea110c801d04b22ed5acc705->leave($__internal_fb2de20320f8a2d36353d2d9939bda6d03e0fad8ea110c801d04b22ed5acc705_prof);

        
        $__internal_c72f61da016af18174db738e4719ff2249cc3e7b9005288656d0fe8fe8560032->leave($__internal_c72f61da016af18174db738e4719ff2249cc3e7b9005288656d0fe8fe8560032_prof);

    }

    // line 1
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3802fd78b354f1eca850c35163dec81ef74a4fb101d9414557ca160aed185d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3802fd78b354f1eca850c35163dec81ef74a4fb101d9414557ca160aed185d23->enter($__internal_3802fd78b354f1eca850c35163dec81ef74a4fb101d9414557ca160aed185d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2ba2d3e44824f54d0970079d0b363d6347c068f60c6486e63adf3cd41cc4a78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba2d3e44824f54d0970079d0b363d6347c068f60c6486e63adf3cd41cc4a78c->enter($__internal_2ba2d3e44824f54d0970079d0b363d6347c068f60c6486e63adf3cd41cc4a78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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

            })
            \$('#brilhosMineiro').magicSuggest({

                data: [
                    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brilho"]) || array_key_exists("brilho", $context) ? $context["brilho"] : (function () { throw new Twig_Error_Runtime('Variable "brilho" does not exist.', 76, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["br"]) {
            // line 77
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["br"], "nome", array()), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['br'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"brilhosMineiro\"
            });
            \$('#riscasMineiro').magicSuggest({

                data: [
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["risca"]) || array_key_exists("risca", $context) ? $context["risca"] : (function () { throw new Twig_Error_Runtime('Variable "risca" does not exist.', 87, $this->getSourceContext()); })()));
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
                name: \"riscasMineiro\"
            });
            \$('#corMineiro').magicSuggest({

                data: [
                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cor"]) || array_key_exists("cor", $context) ? $context["cor"] : (function () { throw new Twig_Error_Runtime('Variable "cor" does not exist.', 98, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cr"]) {
            // line 99
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cr"], "nome", array()), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"corMineiro\"
            });

            \$('#geneseMineiro').magicSuggest({
                data: [
                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genese"]) || array_key_exists("genese", $context) ? $context["genese"] : (function () { throw new Twig_Error_Runtime('Variable "genese" does not exist.', 109, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["gn"]) {
            // line 110
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["gn"], "nome", array()), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"geneseMineiro\"
            });
            \$('#parageneseMineiro').magicSuggest({
                data: [
                    ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paragenese"]) || array_key_exists("paragenese", $context) ? $context["paragenese"] : (function () { throw new Twig_Error_Runtime('Variable "paragenese" does not exist.', 119, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pg"]) {
            // line 120
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pg"], "nome", array()), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"parageneseMineiro\"
            });
            \$('#habitoMineiro').magicSuggest({
                data: [
                    ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["habito"]) || array_key_exists("habito", $context) ? $context["habito"] : (function () { throw new Twig_Error_Runtime('Variable "habito" does not exist.', 129, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hb"]) {
            // line 130
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["hb"], "nome", array()), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"habitoMineiro\"
            });
            \$('#fraturaMineiro').magicSuggest({
                data: [
                    ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fratura"]) || array_key_exists("fratura", $context) ? $context["fratura"] : (function () { throw new Twig_Error_Runtime('Variable "fratura" does not exist.', 139, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ft"]) {
            // line 140
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ft"], "nome", array()), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ft'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"fraturaMineiro\"
            });
            \$('#clivagemMineiro').magicSuggest({
                data: [
                    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clivagem"]) || array_key_exists("clivagem", $context) ? $context["clivagem"] : (function () { throw new Twig_Error_Runtime('Variable "clivagem" does not exist.', 149, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 150
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cl"], "valor", array()), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"clivagemMineiro\"
            });
            \$('#trasparenciaMineiro').magicSuggest({
                data: [
                    ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trasparencia"]) || array_key_exists("trasparencia", $context) ? $context["trasparencia"] : (function () { throw new Twig_Error_Runtime('Variable "trasparencia" does not exist.', 159, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
            // line 160
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tr"], "nome", array()), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"trasparenciaMineiro\"
            });
            /*     /*  */
            \$('#composicaoQuimica').repeater({
                btnAddClass: 'r-btnAdd',
                btnRemoveClass: 'r-btnRemove',
                groupClass: 'r-group',
                minItems: null,
                maxItems: 0,
                startingIndex: 0,
                reindexOnDelete: true,
                repeatMode: 'append',
                animation: null,
                animationSpeed: 400,
                animationEasing: 'swing',
                clearValues: true
            });
        })
        ;
    </script>
";
        
        $__internal_2ba2d3e44824f54d0970079d0b363d6347c068f60c6486e63adf3cd41cc4a78c->leave($__internal_2ba2d3e44824f54d0970079d0b363d6347c068f60c6486e63adf3cd41cc4a78c_prof);

        
        $__internal_3802fd78b354f1eca850c35163dec81ef74a4fb101d9414557ca160aed185d23->leave($__internal_3802fd78b354f1eca850c35163dec81ef74a4fb101d9414557ca160aed185d23_prof);

    }

    // line 263
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_5a3e237361b45e0c6d4ad19420d4e62a4462bdde3458dcc68527c5f25d96de0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a3e237361b45e0c6d4ad19420d4e62a4462bdde3458dcc68527c5f25d96de0e->enter($__internal_5a3e237361b45e0c6d4ad19420d4e62a4462bdde3458dcc68527c5f25d96de0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_c54ffb14676962561709330d5f1d067ffa666e5d6e0ea760f43ec7cabdb2f3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54ffb14676962561709330d5f1d067ffa666e5d6e0ea760f43ec7cabdb2f3e6->enter($__internal_c54ffb14676962561709330d5f1d067ffa666e5d6e0ea760f43ec7cabdb2f3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 264
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/tmpl.min.js"), "html", null, true);
        echo "\"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/load-image.all.min.js"), "html", null, true);
        echo "\"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/canvas-to-blob.min.js"), "html", null, true);
        echo "\"></script>
<!-- blueimp Gallery script -->
    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.blueimp-gallery.min.js"), "html", null, true);
        echo "\"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
<!-- The basic File Upload plugin -->
    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload processing plugin -->
    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-process.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload image preview & resize plugin -->
    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-image.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload audio preview plugin -->
    <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload video preview plugin -->
    <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-video.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload validation plugin -->
    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload user interface plugin -->
    <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"), "html", null, true);
        echo "\"></script>
<!-- The main application script -->
    <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/main.js"), "html", null, true);
        echo "\"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c54ffb14676962561709330d5f1d067ffa666e5d6e0ea760f43ec7cabdb2f3e6->leave($__internal_c54ffb14676962561709330d5f1d067ffa666e5d6e0ea760f43ec7cabdb2f3e6_prof);

        
        $__internal_5a3e237361b45e0c6d4ad19420d4e62a4462bdde3458dcc68527c5f25d96de0e->leave($__internal_5a3e237361b45e0c6d4ad19420d4e62a4462bdde3458dcc68527c5f25d96de0e_prof);

    }

    // line 297
    public function block_css($context, array $blocks = array())
    {
        $__internal_8678fb191d8bbb6771bff5fc716744ec123b41f26255eb22061bf26cd2849c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8678fb191d8bbb6771bff5fc716744ec123b41f26255eb22061bf26cd2849c16->enter($__internal_8678fb191d8bbb6771bff5fc716744ec123b41f26255eb22061bf26cd2849c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_ae4e25d6e6a1f7c26cdf504056563efcd2a3919b4599385b22553172a0672846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4e25d6e6a1f7c26cdf504056563efcd2a3919b4599385b22553172a0672846->enter($__internal_ae4e25d6e6a1f7c26cdf504056563efcd2a3919b4599385b22553172a0672846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 298
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/css/jquery.fileupload.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <!-- Generic page styles -->
<link rel=\"stylesheet\" href=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/style.css"), "html", null, true);
        echo "\">
<!-- blueimp Gallery styles -->
<link rel=\"stylesheet\" href=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/blueimp-gallery.min.css"), "html", null, true);
        echo "\">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel=\"stylesheet\" href=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/jquery.fileupload.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/jquery.fileupload-ui.css"), "html", null, true);
        echo "\">
<!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript>
        <link rel=\"stylesheet\" href=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/jquery.fileupload-noscript.css"), "html", null, true);
        echo "\">
    </noscript>
    <noscript>
        <link rel=\"stylesheet\" href=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/jquery.fileupload-ui-noscript.css"), "html", null, true);
        echo "\">
    </noscript>
";
        
        $__internal_ae4e25d6e6a1f7c26cdf504056563efcd2a3919b4599385b22553172a0672846->leave($__internal_ae4e25d6e6a1f7c26cdf504056563efcd2a3919b4599385b22553172a0672846_prof);

        
        $__internal_8678fb191d8bbb6771bff5fc716744ec123b41f26255eb22061bf26cd2849c16->leave($__internal_8678fb191d8bbb6771bff5fc716744ec123b41f26255eb22061bf26cd2849c16_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:amostra_Mineiro_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  911 => 314,  905 => 311,  899 => 308,  895 => 307,  890 => 305,  885 => 303,  880 => 301,  876 => 300,  872 => 299,  867 => 298,  858 => 297,  846 => 295,  840 => 292,  835 => 290,  830 => 288,  825 => 286,  820 => 284,  815 => 282,  810 => 280,  805 => 278,  800 => 276,  795 => 274,  790 => 272,  785 => 270,  780 => 268,  775 => 266,  769 => 264,  760 => 263,  727 => 162,  718 => 160,  714 => 159,  705 => 152,  696 => 150,  692 => 149,  683 => 142,  674 => 140,  670 => 139,  661 => 132,  652 => 130,  648 => 129,  639 => 122,  630 => 120,  626 => 119,  617 => 112,  608 => 110,  604 => 109,  594 => 101,  585 => 99,  581 => 98,  571 => 90,  562 => 88,  558 => 87,  548 => 79,  539 => 77,  535 => 76,  459 => 2,  450 => 1,  309 => 459,  298 => 457,  294 => 456,  281 => 445,  275 => 444,  270 => 442,  263 => 441,  260 => 440,  256 => 439,  164 => 349,  151 => 347,  147 => 346,  116 => 317,  114 => 297,  112 => 263,  33 => 262,  30 => 186,  28 => 1,);
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

            })
            \$('#brilhosMineiro').magicSuggest({

                data: [
                    {% for br in brilho %}
                    \"{{ br.nome }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"brilhosMineiro\"
            });
            \$('#riscasMineiro').magicSuggest({

                data: [
                    {% for cr in risca %}
                    \"{{ cr.nome }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"riscasMineiro\"
            });
            \$('#corMineiro').magicSuggest({

                data: [
                    {% for cr in cor %}
                    \"{{ cr.nome }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"corMineiro\"
            });

            \$('#geneseMineiro').magicSuggest({
                data: [
                    {% for gn in genese %}
                    \"{{ gn.nome }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"geneseMineiro\"
            });
            \$('#parageneseMineiro').magicSuggest({
                data: [
                    {% for pg in paragenese %}
                    \"{{ pg.nome }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"parageneseMineiro\"
            });
            \$('#habitoMineiro').magicSuggest({
                data: [
                    {% for hb in habito %}
                    \"{{ hb.nome }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"habitoMineiro\"
            });
            \$('#fraturaMineiro').magicSuggest({
                data: [
                    {% for ft in fratura %}
                    \"{{ ft.nome }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"fraturaMineiro\"
            });
            \$('#clivagemMineiro').magicSuggest({
                data: [
                    {% for cl in clivagem %}
                    \"{{ cl.valor }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"clivagemMineiro\"
            });
            \$('#trasparenciaMineiro').magicSuggest({
                data: [
                    {% for tr in trasparencia %}
                    \"{{ tr.nome }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"trasparenciaMineiro\"
            });
            /*     /*  */
            \$('#composicaoQuimica').repeater({
                btnAddClass: 'r-btnAdd',
                btnRemoveClass: 'r-btnRemove',
                groupClass: 'r-group',
                minItems: null,
                maxItems: 0,
                startingIndex: 0,
                reindexOnDelete: true,
                repeatMode: 'append',
                animation: null,
                animationSpeed: 400,
                animationEasing: 'swing',
                clearValues: true
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
            <form action=\"javascript:;\" method=\"POST\" class=\"cadastrarAcervo\" enctype=\"multipart/form-data\"
                  id=\"fileupload\">
                <input name=\"form\" value=\"Mineiro\" class=\"hidden\"><input name=\"tipo\" value=\"Salvar\" class=\"hidden\">
                <div class=\"col-md-6\">
                    <div class=\"form-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nome</label>
                            <input type=\"text\" name=\"nome\" class=\"form-control\" placeholder=\"Nome do acervo\">
                        </div>
                        <div class=\"form-group\">
                            <!-- BEGIN Portlet COMPOSICAO QUIMICA-->
                            <div class=\"portlet solid grey-silver\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"fa fa-gift\"></i>Composição Química
                                    </div>
                                </div>
                                <div class=\"portlet-body\" id=\"composicaoQuimica\">
                                    <div class=\"r-group\">
                                        <input type=\"number\" value=\"1\" name=\"elemento-qtd[0]\" id=\"elemento-qtd_0\"
                                               data-pattern-name=\"elemento-qtd[++]\" data-pattern-id=\"elemento-qtd_++\"
                                               class=\"form-control col-md-4\" style=\"width: 20%\"/>
                                        <select name=\"elemento-nome[0]\" id=\"elemento-nome_0\"
                                                data-pattern-name=\"elemento-nome[++]\" data-pattern-id=\"elemento-nome_++\"
                                                class=\"form-control col-md-8\" style=\"width: 65%\">
                                            {% for el in elemestosQuimicos %}
                                                <option value=\"{{ el.id }}\">{{ el.nome }} - {{ el.simbolo }}</option>
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

                                </div>
                            </div>
                            <!-- END GRID COMPOSICAO QUIMICA-->
                        </div>

                        <div class=\"form-group\">
                            <!-- BEGIN Portlet DUREZA-->
                            <div class=\"portlet solid grey-silver\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"fa fa-gift\"></i>Dureza
                                    </div>
                                </div>
                                <div class=\"portlet-body\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\">Minimo</span>
                                        <input type=\"number\" class=\"form-control\" name=\"dureza-Min\">
                                        <span class=\"input-group-addon\">Maximo</span>
                                        <input type=\"number\" class=\"form-control\" name=\"dureza-Max\">
                                    </div>
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"durezaDescricao\" multiple class=\"form-control\"
                                               placeholder=\"Descrição\">
                                        <span class=\"input-group-addon\">
                                                                                        <i class=\"fa fa-user\"></i>
                                                                                    </span>
                                    </div>
                                </div>
                            </div>
                            <!-- END GRID DUREZA-->
                        </div>

                        <div class=\"form-group\">
                            <!-- BEGIN Portlet DUREZA-->
                            <div class=\"portlet solid grey-silver\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"fa fa-gift\"></i>Medida
                                    </div>
                                </div>
                                <div class=\"portlet-body\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\">Espessura</span>
                                        <input type=\"number\" class=\"form-control\" name=\"medidaEspecura\">
                                        <span class=\"input-group-addon\">Altura</span>
                                        <input type=\"number\" class=\"form-control\" name=\"medidaAltura\">
                                    </div>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\">Comprimento</span>
                                        <input type=\"number\" class=\"form-control\" name=\"medidaComprimento\">
                                        <span class=\"input-group-addon\">Largura</span>
                                        <input type=\"number\" class=\"form-control\" name=\"medidaLargura\">
                                    </div>
                                </div>
                            </div>
                            <!-- END GRID DUREZA-->
                        </div>


                        <div class=\"form-group\">
                            <label class=\"control-label\">Transparência</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"trasparenciaMineiro\"></div>
                            </div>
                        </div>


                        <div class=\"form-group\">
                            <label class=\"control-label\">Categoria</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <select name=\"categoria\" id=\"elemento-nome_0\"
                                        data-pattern-name=\"elemento-nome[++]\" data-pattern-id=\"elemento-nome_++\"
                                        class=\"form-control\">
                                    {% for ct in categoria %}
                                        {% if ct.dependencia is not null %}
                                            <option value=\"{{ ct.id }}\">{{ ct.nome }}
                                                - {{ ct.dependencia.nome }}</option>
                                        {% endif %}
                                    {% endfor %}
                                </select>
                            </div>
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

                        <div class=\"form-group last\">
                            <label class=\"control-label\">Static Control</label>
                            <p class=\"form-control-static\"> email@example.com </p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"form-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Brilho</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"brilhosMineiro\"></div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Risca</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"riscasMineiro\"></div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Cor</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"corMineiro\"></div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Gênese</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"geneseMineiro\"></div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Paragênese</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"parageneseMineiro\"></div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Hábito</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"habitoMineiro\"></div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Fratura</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"fraturaMineiro\"></div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Clivagem</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <div id=\"clivagemMineiro\"></div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Aplicação</label>
                            <textarea class=\"form-control\" name=\"aplicacao\"></textarea>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Caracteristica</label>
                            <textarea class=\"form-control\" rows=\"3\" name=\"caracteristica\"></textarea>
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
                    <button type=\"submit\" class=\"btn green\">Cadastrar</button>
                    <button type=\"button\" class=\"btn default\">Cancel</button>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
</div>", ":amostra/api:amostra_Mineiro_form.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/amostra_Mineiro_form.html.twig");
    }
}

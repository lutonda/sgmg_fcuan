<?php

/* :amostra/api:amostra_Fosseis_form.html.twig */
class __TwigTemplate_a24a1c3d07749e285dfe8040414c7f650f23e639e379956cf4fc76278c4f567c extends Twig_Template
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
        $__internal_ccfe038c66ce2a221414f68fd8f93bbc1872ad12e278dbdd17ebee8e9fb08305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccfe038c66ce2a221414f68fd8f93bbc1872ad12e278dbdd17ebee8e9fb08305->enter($__internal_ccfe038c66ce2a221414f68fd8f93bbc1872ad12e278dbdd17ebee8e9fb08305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:amostra_Fosseis_form.html.twig"));

        $__internal_27455fd705148d6f26deff46bfbde8b7085c7c7661e6d09ebe730b7d5f8c4865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27455fd705148d6f26deff46bfbde8b7085c7c7661e6d09ebe730b7d5f8c4865->enter($__internal_27455fd705148d6f26deff46bfbde8b7085c7c7661e6d09ebe730b7d5f8c4865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:amostra_Fosseis_form.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        // line 111
        echo "
";
        // line 187
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
        // line 188
        $this->displayBlock('javascript', $context, $blocks);
        // line 222
        $this->displayBlock('css', $context, $blocks);
        // line 242
        echo "<div class=\"col-md-12\">
    <div class=\"portlet box\">
        <div class=\"portlet-body form\">
            <!-- BEGIN FORM-->
            <form action=\"javascript:;\" method=\"POST\" class=\"cadastrarAcervo\" enctype=\"multipart/form-data\"
                  id=\"fileupload\">
                <input name=\"form\" value=\"Fosse\" class=\"hidden\"><input name=\"tipo\" value=\"Salvar\" class=\"hidden\">
                <div class=\"col-md-6\">
                    <div class=\"form-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nome</label>
                            <input type=\"text\" name=\"nome\" class=\"form-control\" placeholder=\"Nome do acervo\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nome da Colecção</label>
                            <input type=\"text\" name=\"nomecoleccao\" class=\"form-control\" placeholder=\"Nome do acervo\">
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Estado Conservação</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <select name=\"estadoconcervacao\" id=\"categoria\"
                                        data-pattern-name=\"elemento-nome[++]\" data-pattern-id=\"elemento-nome_++\"
                                        class=\"form-control\">
                                    ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new Twig_Error_Runtime('Variable "categoria" does not exist.', 267, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ct"]) {
            // line 268
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
        // line 270
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
        // line 282
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoria"]) || array_key_exists("categoria", $context) ? $context["categoria"] : (function () { throw new Twig_Error_Runtime('Variable "categoria" does not exist.', 282, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ct"]) {
            // line 283
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
        // line 285
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
        // line 296
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prateleira"]) || array_key_exists("prateleira", $context) ? $context["prateleira"] : (function () { throw new Twig_Error_Runtime('Variable "prateleira" does not exist.', 296, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
            // line 297
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
        // line 299
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Local específico</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-map\"></i></span>
                                <div id=\"localespecifico\"></div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Local colheta</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-map-o\"></i></span>
                                <div id=\"localcolheta\"></div>
                            </div>
                        </div>

                        <div class=\"portlet solid grey-silver\">
                            <div class=\"portlet-title\">
                                <div class=\"caption\">
                                    <i class=\"fa fa-gift\"></i>Medida
                                </div>
                            </div>
                            <div class=\"portlet-body\">
                                <div class=\"col-md-12\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\"
                                              style=\"width: 25%; text-align: left\">Espessura</span>
                                        <input type=\"number\" class=\"form-control\" name=\"medidaEspecura\">
                                        <span class=\"input-group-addon\"
                                              style=\"width: 25%; text-align: left\">Altura</span>
                                        <input type=\"number\" class=\"form-control\" name=\"medidaAltura\">
                                    </div>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\"
                                              style=\"width: 25%; text-align: left\">Comprimento</span>
                                        <input type=\"number\" class=\"form-control\" name=\"medidaComprimento\">
                                        <span class=\"input-group-addon\"
                                              style=\"width: 25%; text-align: left\">Largura</span>
                                        <input type=\"number\" class=\"form-control\" name=\"medidaLargura\">
                                    </div>
                                </div>
                                <span>x</span>
                            </div>
                        </div>


                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"form-body\">
                        <div class=\"portlet solid grey-silver\">
                            <div class=\"portlet-title\">
                                <div class=\"caption\">
                                    <i class=\"fa fa-gift\"></i>Taxonomia
                                </div>
                            </div>
                            <div class=\"portlet-body\">
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Filo</label>
                                    <select name=\"filo\" class=\"form-control\">
                                        ";
        // line 364
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filo"]) || array_key_exists("filo", $context) ? $context["filo"] : (function () { throw new Twig_Error_Runtime('Variable "filo" does not exist.', 364, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fl"]) {
            // line 365
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "nome", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 367
        echo "                                    </select></div>
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Reino</label>
                                    <select name=\"reino\" class=\"form-control\">
                                        ";
        // line 371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reino"]) || array_key_exists("reino", $context) ? $context["reino"] : (function () { throw new Twig_Error_Runtime('Variable "reino" does not exist.', 371, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fl"]) {
            // line 372
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "nome", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 374
        echo "                                    </select></div>
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Classe</label>
                                    <select name=\"classe\" class=\"form-control\">
                                        ";
        // line 378
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new Twig_Error_Runtime('Variable "classe" does not exist.', 378, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fl"]) {
            // line 379
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "nome", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 381
        echo "                                    </select></div>
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Subclasse</label>
                                    <select name=\"subclasse\" class=\"form-control\">
                                        ";
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subclasse"]) || array_key_exists("subclasse", $context) ? $context["subclasse"] : (function () { throw new Twig_Error_Runtime('Variable "subclasse" does not exist.', 385, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fl"]) {
            // line 386
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "nome", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        echo "                                    </select></div>
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Ordem</label>
                                    <select name=\"ordem\" class=\"form-control\">
                                        ";
        // line 392
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ordem"]) || array_key_exists("ordem", $context) ? $context["ordem"] : (function () { throw new Twig_Error_Runtime('Variable "ordem" does not exist.', 392, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fl"]) {
            // line 393
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "nome", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 395
        echo "                                    </select></div>
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Subordem</label>
                                    <select name=\"subordem\" class=\"form-control\">
                                        ";
        // line 399
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subordem"]) || array_key_exists("subordem", $context) ? $context["subordem"] : (function () { throw new Twig_Error_Runtime('Variable "subordem" does not exist.', 399, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fl"]) {
            // line 400
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "nome", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo "                                    </select></div>
                                <div class=\"col-md-12\">
                                    <label class=\"control-label\">Família</label>
                                    <select name=\"familia\" class=\"form-control\">
                                        ";
        // line 406
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["familia"]) || array_key_exists("familia", $context) ? $context["familia"] : (function () { throw new Twig_Error_Runtime('Variable "familia" does not exist.', 406, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fl"]) {
            // line 407
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "nome", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 409
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"portlet-form\"><span class=\"grey-silver\"><</span></div>
                        </div>
                        <div class=\"portlet solid grey-silver\">
                            <div class=\"portlet-title\">
                                <div class=\"caption\">
                                    <i class=\"fa fa-gift\"></i>Estrategrafia
                                </div>
                            </div>
                            <div class=\"portlet-body\">

                                <div class=\"form-group col-md-12\">
                                    <label class=\"control-label\">Nome</label>
                                    <input type=\"text\" name=\"nomeEstrategrafia\" class=\"form-control\"
                                           placeholder=\"Nome de Estrategrafia\">
                                </div>
                                <div class=\"form-group col-md-12\">
                                    <label class=\"control-label\">Descrição</label>
                                    <textarea name=\"descricaoEstrategrafia\" class=\"form-control\"
                                              placeholder=\"Nome de Estrategrafia\"></textarea>
                                </div>

                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Era</label>
                                    <select name=\"era\" class=\"form-control\">
                                        ";
        // line 436
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["era"]) || array_key_exists("era", $context) ? $context["era"] : (function () { throw new Twig_Error_Runtime('Variable "era" does not exist.', 436, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fl"]) {
            // line 437
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "nome", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 439
        echo "                                    </select></div>
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Periodo</label>
                                    <select name=\"periodo\" class=\"form-control\">
                                        ";
        // line 443
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["periodo"]) || array_key_exists("periodo", $context) ? $context["periodo"] : (function () { throw new Twig_Error_Runtime('Variable "periodo" does not exist.', 443, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fl"]) {
            // line 444
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "nome", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 446
        echo "                                    </select></div>
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Epoca</label>
                                    <select name=\"epoca\" class=\"form-control\">
                                        ";
        // line 450
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["epoca"]) || array_key_exists("epoca", $context) ? $context["epoca"] : (function () { throw new Twig_Error_Runtime('Variable "epoca" does not exist.', 450, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fl"]) {
            // line 451
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "nome", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 453
        echo "                                    </select></div>
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Idade</label>
                                    <select name=\"idade\" class=\"form-control\">
                                        ";
        // line 457
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["idade"]) || array_key_exists("idade", $context) ? $context["idade"] : (function () { throw new Twig_Error_Runtime('Variable "idade" does not exist.', 457, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fl"]) {
            // line 458
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "nome", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 460
        echo "                                    </select></div>
                                <div class=\"col-md-12\">
                                    <label class=\"control-label\">Formação</label>
                                    <select name=\"formação\" class=\"form-control\">
                                        ";
        // line 464
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formacao"]) || array_key_exists("formacao", $context) ? $context["formacao"] : (function () { throw new Twig_Error_Runtime('Variable "formacao" does not exist.', 464, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fl"]) {
            // line 465
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["fl"], "nome", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 467
        echo "                                    </select></div>
                            </div>
                            <div class=\"portlet-form\"><span class=\"grey-silver\"><</span></div>
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
                                <span> Apagar </span>
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
        
        $__internal_ccfe038c66ce2a221414f68fd8f93bbc1872ad12e278dbdd17ebee8e9fb08305->leave($__internal_ccfe038c66ce2a221414f68fd8f93bbc1872ad12e278dbdd17ebee8e9fb08305_prof);

        
        $__internal_27455fd705148d6f26deff46bfbde8b7085c7c7661e6d09ebe730b7d5f8c4865->leave($__internal_27455fd705148d6f26deff46bfbde8b7085c7c7661e6d09ebe730b7d5f8c4865_prof);

    }

    // line 1
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6bd8c2c42e8429a8087f219022dce1eefd118e14dbdb868b6ce74e6f990ad5e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bd8c2c42e8429a8087f219022dce1eefd118e14dbdb868b6ce74e6f990ad5e0->enter($__internal_6bd8c2c42e8429a8087f219022dce1eefd118e14dbdb868b6ce74e6f990ad5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1a4830276caecc45af5453b5956743ff12619634d0b405835279ffff12dcb5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4830276caecc45af5453b5956743ff12619634d0b405835279ffff12dcb5cd->enter($__internal_1a4830276caecc45af5453b5956743ff12619634d0b405835279ffff12dcb5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
            \$('#localcolheta').magicSuggest({
                data: [
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["local"]) || array_key_exists("local", $context) ? $context["local"] : (function () { throw new Twig_Error_Runtime('Variable "local" does not exist.', 87, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lc"]) {
            // line 88
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lc"], "nome", array()), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"localcolheta\",
                maxSelection: 1
            });
            \$('#localespecifico').magicSuggest({
                data: [
                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["local"]) || array_key_exists("local", $context) ? $context["local"] : (function () { throw new Twig_Error_Runtime('Variable "local" does not exist.', 98, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lc"]) {
            // line 99
            echo "                    \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["lc"], "nome", array()), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"localespecifico\",
                maxSelection: 1
            });
        })
        ;
    </script>
";
        
        $__internal_1a4830276caecc45af5453b5956743ff12619634d0b405835279ffff12dcb5cd->leave($__internal_1a4830276caecc45af5453b5956743ff12619634d0b405835279ffff12dcb5cd_prof);

        
        $__internal_6bd8c2c42e8429a8087f219022dce1eefd118e14dbdb868b6ce74e6f990ad5e0->leave($__internal_6bd8c2c42e8429a8087f219022dce1eefd118e14dbdb868b6ce74e6f990ad5e0_prof);

    }

    // line 188
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_37cc7d00f02dc105a5b03d04fcbca7133626c598627bd99b72784303a958d811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37cc7d00f02dc105a5b03d04fcbca7133626c598627bd99b72784303a958d811->enter($__internal_37cc7d00f02dc105a5b03d04fcbca7133626c598627bd99b72784303a958d811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_656bdab91590807f9153d547484ec8bb8aed56e151ea6a4fad2543065eb7435b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656bdab91590807f9153d547484ec8bb8aed56e151ea6a4fad2543065eb7435b->enter($__internal_656bdab91590807f9153d547484ec8bb8aed56e151ea6a4fad2543065eb7435b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 189
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/tmpl.min.js"), "html", null, true);
        echo "\"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/load-image.all.min.js"), "html", null, true);
        echo "\"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/canvas-to-blob.min.js"), "html", null, true);
        echo "\"></script>
<!-- blueimp Gallery script -->
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.blueimp-gallery.min.js"), "html", null, true);
        echo "\"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
<!-- The basic File Upload plugin -->
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload processing plugin -->
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-process.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload image preview & resize plugin -->
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-image.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload audio preview plugin -->
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload video preview plugin -->
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-video.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload validation plugin -->
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"), "html", null, true);
        echo "\"></script>
<!-- The File Upload user interface plugin -->
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"), "html", null, true);
        echo "\"></script>
<!-- The main application script -->
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/main.js"), "html", null, true);
        echo "\"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_656bdab91590807f9153d547484ec8bb8aed56e151ea6a4fad2543065eb7435b->leave($__internal_656bdab91590807f9153d547484ec8bb8aed56e151ea6a4fad2543065eb7435b_prof);

        
        $__internal_37cc7d00f02dc105a5b03d04fcbca7133626c598627bd99b72784303a958d811->leave($__internal_37cc7d00f02dc105a5b03d04fcbca7133626c598627bd99b72784303a958d811_prof);

    }

    // line 222
    public function block_css($context, array $blocks = array())
    {
        $__internal_808361ff6c531b6a7f1e8bce88efb7154803f5b454b91f93891654b1989184db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808361ff6c531b6a7f1e8bce88efb7154803f5b454b91f93891654b1989184db->enter($__internal_808361ff6c531b6a7f1e8bce88efb7154803f5b454b91f93891654b1989184db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_30f79a39eafc9816cbe219465520e616fdad4c13509dbab3b0ffcc860fe0da76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f79a39eafc9816cbe219465520e616fdad4c13509dbab3b0ffcc860fe0da76->enter($__internal_30f79a39eafc9816cbe219465520e616fdad4c13509dbab3b0ffcc860fe0da76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 223
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/css/jquery.fileupload.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <!-- Generic page styles -->
<link rel=\"stylesheet\" href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/style.css"), "html", null, true);
        echo "\">
<!-- blueimp Gallery styles -->
<link rel=\"stylesheet\" href=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/blueimp-gallery.min.css"), "html", null, true);
        echo "\">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel=\"stylesheet\" href=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/jquery.fileupload.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/jquery.fileupload-ui.css"), "html", null, true);
        echo "\">
<!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript>
        <link rel=\"stylesheet\" href=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/jquery.fileupload-noscript.css"), "html", null, true);
        echo "\">
    </noscript>
    <noscript>
        <link rel=\"stylesheet\" href=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/file-upload/css/jquery.fileupload-ui-noscript.css"), "html", null, true);
        echo "\">
    </noscript>
";
        
        $__internal_30f79a39eafc9816cbe219465520e616fdad4c13509dbab3b0ffcc860fe0da76->leave($__internal_30f79a39eafc9816cbe219465520e616fdad4c13509dbab3b0ffcc860fe0da76_prof);

        
        $__internal_808361ff6c531b6a7f1e8bce88efb7154803f5b454b91f93891654b1989184db->leave($__internal_808361ff6c531b6a7f1e8bce88efb7154803f5b454b91f93891654b1989184db_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:amostra_Fosseis_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  915 => 239,  909 => 236,  903 => 233,  899 => 232,  894 => 230,  889 => 228,  884 => 226,  880 => 225,  876 => 224,  871 => 223,  862 => 222,  850 => 220,  844 => 217,  839 => 215,  834 => 213,  829 => 211,  824 => 209,  819 => 207,  814 => 205,  809 => 203,  804 => 201,  799 => 199,  794 => 197,  789 => 195,  784 => 193,  779 => 191,  773 => 189,  764 => 188,  745 => 101,  736 => 99,  732 => 98,  722 => 90,  713 => 88,  709 => 87,  622 => 2,  613 => 1,  555 => 467,  544 => 465,  540 => 464,  534 => 460,  523 => 458,  519 => 457,  513 => 453,  502 => 451,  498 => 450,  492 => 446,  481 => 444,  477 => 443,  471 => 439,  460 => 437,  456 => 436,  427 => 409,  416 => 407,  412 => 406,  406 => 402,  395 => 400,  391 => 399,  385 => 395,  374 => 393,  370 => 392,  364 => 388,  353 => 386,  349 => 385,  343 => 381,  332 => 379,  328 => 378,  322 => 374,  311 => 372,  307 => 371,  301 => 367,  290 => 365,  286 => 364,  219 => 299,  208 => 297,  204 => 296,  191 => 285,  178 => 283,  174 => 282,  160 => 270,  147 => 268,  143 => 267,  116 => 242,  114 => 222,  112 => 188,  33 => 187,  30 => 111,  28 => 1,);
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
            \$('#localcolheta').magicSuggest({
                data: [
                    {% for lc in local %}
                    \"{{ lc.nome }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"localcolheta\",
                maxSelection: 1
            });
            \$('#localespecifico').magicSuggest({
                data: [
                    {% for lc in local %}
                    \"{{ lc.nome }}\",
                    {% endfor %}
                ],
                resultAsString: true,
                allowFreeEntries: false,
                name: \"localespecifico\",
                maxSelection: 1
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
                <input name=\"form\" value=\"Fosse\" class=\"hidden\"><input name=\"tipo\" value=\"Salvar\" class=\"hidden\">
                <div class=\"col-md-6\">
                    <div class=\"form-body\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nome</label>
                            <input type=\"text\" name=\"nome\" class=\"form-control\" placeholder=\"Nome do acervo\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nome da Colecção</label>
                            <input type=\"text\" name=\"nomecoleccao\" class=\"form-control\" placeholder=\"Nome do acervo\">
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Estado Conservação</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                <select name=\"estadoconcervacao\" id=\"categoria\"
                                        data-pattern-name=\"elemento-nome[++]\" data-pattern-id=\"elemento-nome_++\"
                                        class=\"form-control\">
                                    {% for ct in categoria %}
                                        <option value=\"{{ ct.id }}\">{{ ct.nome }} - {{ ct.dependencia.nome }}</option>
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
                            <label class=\"control-label\">Local específico</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-map\"></i></span>
                                <div id=\"localespecifico\"></div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Local colheta</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"fa fa-map-o\"></i></span>
                                <div id=\"localcolheta\"></div>
                            </div>
                        </div>

                        <div class=\"portlet solid grey-silver\">
                            <div class=\"portlet-title\">
                                <div class=\"caption\">
                                    <i class=\"fa fa-gift\"></i>Medida
                                </div>
                            </div>
                            <div class=\"portlet-body\">
                                <div class=\"col-md-12\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\"
                                              style=\"width: 25%; text-align: left\">Espessura</span>
                                        <input type=\"number\" class=\"form-control\" name=\"medidaEspecura\">
                                        <span class=\"input-group-addon\"
                                              style=\"width: 25%; text-align: left\">Altura</span>
                                        <input type=\"number\" class=\"form-control\" name=\"medidaAltura\">
                                    </div>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon\"
                                              style=\"width: 25%; text-align: left\">Comprimento</span>
                                        <input type=\"number\" class=\"form-control\" name=\"medidaComprimento\">
                                        <span class=\"input-group-addon\"
                                              style=\"width: 25%; text-align: left\">Largura</span>
                                        <input type=\"number\" class=\"form-control\" name=\"medidaLargura\">
                                    </div>
                                </div>
                                <span>x</span>
                            </div>
                        </div>


                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"form-body\">
                        <div class=\"portlet solid grey-silver\">
                            <div class=\"portlet-title\">
                                <div class=\"caption\">
                                    <i class=\"fa fa-gift\"></i>Taxonomia
                                </div>
                            </div>
                            <div class=\"portlet-body\">
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Filo</label>
                                    <select name=\"filo\" class=\"form-control\">
                                        {% for fl in filo %}
                                            <option value=\"{{ fl.id }}\">{{ fl.nome }}</option>
                                        {% endfor %}
                                    </select></div>
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Reino</label>
                                    <select name=\"reino\" class=\"form-control\">
                                        {% for fl in reino %}
                                            <option value=\"{{ fl.id }}\">{{ fl.nome }}</option>
                                        {% endfor %}
                                    </select></div>
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Classe</label>
                                    <select name=\"classe\" class=\"form-control\">
                                        {% for fl in classe %}
                                            <option value=\"{{ fl.id }}\">{{ fl.nome }}</option>
                                        {% endfor %}
                                    </select></div>
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Subclasse</label>
                                    <select name=\"subclasse\" class=\"form-control\">
                                        {% for fl in subclasse %}
                                            <option value=\"{{ fl.id }}\">{{ fl.nome }}</option>
                                        {% endfor %}
                                    </select></div>
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Ordem</label>
                                    <select name=\"ordem\" class=\"form-control\">
                                        {% for fl in ordem %}
                                            <option value=\"{{ fl.id }}\">{{ fl.nome }}</option>
                                        {% endfor %}
                                    </select></div>
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Subordem</label>
                                    <select name=\"subordem\" class=\"form-control\">
                                        {% for fl in subordem %}
                                            <option value=\"{{ fl.id }}\">{{ fl.nome }}</option>
                                        {% endfor %}
                                    </select></div>
                                <div class=\"col-md-12\">
                                    <label class=\"control-label\">Família</label>
                                    <select name=\"familia\" class=\"form-control\">
                                        {% for fl in familia %}
                                            <option value=\"{{ fl.id }}\">{{ fl.nome }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"portlet-form\"><span class=\"grey-silver\"><</span></div>
                        </div>
                        <div class=\"portlet solid grey-silver\">
                            <div class=\"portlet-title\">
                                <div class=\"caption\">
                                    <i class=\"fa fa-gift\"></i>Estrategrafia
                                </div>
                            </div>
                            <div class=\"portlet-body\">

                                <div class=\"form-group col-md-12\">
                                    <label class=\"control-label\">Nome</label>
                                    <input type=\"text\" name=\"nomeEstrategrafia\" class=\"form-control\"
                                           placeholder=\"Nome de Estrategrafia\">
                                </div>
                                <div class=\"form-group col-md-12\">
                                    <label class=\"control-label\">Descrição</label>
                                    <textarea name=\"descricaoEstrategrafia\" class=\"form-control\"
                                              placeholder=\"Nome de Estrategrafia\"></textarea>
                                </div>

                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Era</label>
                                    <select name=\"era\" class=\"form-control\">
                                        {% for fl in era %}
                                            <option value=\"{{ fl.id }}\">{{ fl.nome }}</option>
                                        {% endfor %}
                                    </select></div>
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Periodo</label>
                                    <select name=\"periodo\" class=\"form-control\">
                                        {% for fl in periodo %}
                                            <option value=\"{{ fl.id }}\">{{ fl.nome }}</option>
                                        {% endfor %}
                                    </select></div>
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Epoca</label>
                                    <select name=\"epoca\" class=\"form-control\">
                                        {% for fl in epoca %}
                                            <option value=\"{{ fl.id }}\">{{ fl.nome }}</option>
                                        {% endfor %}
                                    </select></div>
                                <div class=\"col-md-6\">
                                    <label class=\"control-label\">Idade</label>
                                    <select name=\"idade\" class=\"form-control\">
                                        {% for fl in idade %}
                                            <option value=\"{{ fl.id }}\">{{ fl.nome }}</option>
                                        {% endfor %}
                                    </select></div>
                                <div class=\"col-md-12\">
                                    <label class=\"control-label\">Formação</label>
                                    <select name=\"formação\" class=\"form-control\">
                                        {% for fl in formacao %}
                                            <option value=\"{{ fl.id }}\">{{ fl.nome }}</option>
                                        {% endfor %}
                                    </select></div>
                            </div>
                            <div class=\"portlet-form\"><span class=\"grey-silver\"><</span></div>
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
                                <span> Apagar </span>
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
</div>", ":amostra/api:amostra_Fosseis_form.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/amostra_Fosseis_form.html.twig");
    }
}

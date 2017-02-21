<?php

/* :amostra:categoria_list.html.twig */
class __TwigTemplate_8d4cd4df94a11e50028f7bee908609660489467f34dfe8d6fe43904ac2c84bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d090c1fa5cda8aff73ce30762c83164b2459cff5ee7dc49e2009fb62c82b422c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d090c1fa5cda8aff73ce30762c83164b2459cff5ee7dc49e2009fb62c82b422c->enter($__internal_d090c1fa5cda8aff73ce30762c83164b2459cff5ee7dc49e2009fb62c82b422c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra:categoria_list.html.twig"));

        $__internal_1f999ebb085883b5c4c6ae9c8be3565e37044dd5e1c212e0fa5939b6aa2c8986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f999ebb085883b5c4c6ae9c8be3565e37044dd5e1c212e0fa5939b6aa2c8986->enter($__internal_1f999ebb085883b5c4c6ae9c8be3565e37044dd5e1c212e0fa5939b6aa2c8986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra:categoria_list.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption font-dark\">
                    <i class=\"icon-settings font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> CATEGORIAS</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                        <button id=\"sample_editable_1_new\" class=\"btn sbold green cadastrar\" title=\"categoria\" VALUE=\"0\"> Inserir Novo
                            <i class=\"fa fa-plus\"></i>
                        </button>
                        <button class=\"btn green  btn-outline dropdown-toggle\" data-toggle=\"dropdown\"
                                aria-expanded=\"false\">Feramentas
                            <i class=\"fa fa-angle-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu pull-right\">
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"fa fa-print\"></i> Imprimir </a>
                            </li>
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"fa fa-file-pdf-o\"></i> Salvar em PDF </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">

                <div id=\"sample_1_wrapper\" class=\"dataTables_wrapper no-footer\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6\">
                        </div>
                        <div class=\"col-md-6 col-sm-6\">
                            <div id=\"sample_1_filter\" class=\"dataTables_filter\"><label>Search:<input type=\"search\"
                                                                                                     class=\"form-control input-sm input-small input-inline\"
                                                                                                     placeholder=\"\"
                                                                                                     aria-controls=\"sample_1\"></label>
                            </div>
                        </div>
                    </div>
                    <div class=\"table-scrollable\">
                        <table class=\"table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer\"
                               id=\"sample_1\" role=\"grid\" aria-describedby=\"sample_1_info\">
                            <thead>
                            <tr role=\"row\">
                                <th class=\"sorting_disabled\" rowspan=\"1\" colspan=\"1\" aria-label=\"\" style=\"width: 62px;\">
                                    <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                        <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#sample_1 .checkboxes\">
                                        <span></span>
                                    </label>
                                </th>
                                <th tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\"
                                    aria-label=\" Username : activate to sort column descending\"
                                    style=\"width: 35px;\"></th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Email : activate to sort column ascending\" style=\"width: 244px;\">
                                    Categoria
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Status : activate to sort column ascending\" style=\"width: 105px;\">
                                    Estado
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Joined : activate to sort column ascending\" style=\"width: 130px;\">
                                    Dependencia
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Actions : activate to sort column ascending\" style=\"width: 140px;\">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 79
        $context["i"] = 0;
        // line 80
        echo "                            ";
        $context["dep"] = null;
        // line 81
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 81, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 82
            echo "                            ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 82, $this->getSourceContext()); })()) + 1);
            // line 83
            echo "                            ";
            if ((null === twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "dependencia", array()))) {
                // line 84
                echo "                                ";
                $context["dep"] = null;
                // line 85
                echo "                            ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "dependencia", array()), "nome", array()) != (isset($context["dep"]) || array_key_exists("dep", $context) ? $context["dep"] : (function () { throw new Twig_Error_Runtime('Variable "dep" does not exist.', 85, $this->getSourceContext()); })()))) {
                // line 86
                echo "                                ";
                $context["dep"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "dependencia", array()), "nome", array());
                // line 87
                echo "                                ";
                $context["i"] = 1;
                // line 88
                echo "                                <tr><th colspan=\"6\">";
                echo twig_escape_filter($this->env, (isset($context["dep"]) || array_key_exists("dep", $context) ? $context["dep"] : (function () { throw new Twig_Error_Runtime('Variable "dep" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
                echo "</th></tr>
                            ";
            }
            // line 90
            echo "                            <tr class=\"gradeX odd\" role=\"row\">
                                <td>
                                    <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                        <input type=\"checkbox\" class=\"checkboxes\" value=\"1\">
                                        <span></span>
                                    </label>
                                </td>
                                <td class=\"sorting_1\"> ";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 97, $this->getSourceContext()); })()), "html", null, true);
            echo " </td>
                                <td>
                                    ";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "nome", array()), "html", null, true);
            echo "
                                </td>
                                <td>
                                    <span class=\"label label-sm label-warning\"> ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "estado", array()), "html", null, true);
            echo "  </span>
                                </td>
                                <td class=\"center\">

                                    ";
            // line 106
            if ((null === twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "dependencia", array()))) {
                // line 107
                echo "                                        --
                                    ";
            } else {
                // line 109
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "dependencia", array()), "nome", array()), "html", null, true);
                echo "
                                    ";
            }
            // line 111
            echo "                                </td>
                                <td>
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-xs green dropdown-toggle cadastrar\" title=\"categoria\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "id", array()), "html", null, true);
            echo "\" type=\"button\"
                                                aria-expanded=\"false\">
                                            <i class=\"fa fa-edit\"></i> Editar
                                        </button>
                                        <button class=\"btn btn-xs red dropdown-toggle eliminar\" title=\"categoria\" type=\"button\"
                                                aria-expanded=\"false\" value=\"";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "id", array()), "html", null, true);
            echo "\" d=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "nome", array()), "html", null, true);
            echo "\" >
                                            <i class=\"fa fa-eraser\"></i> Eliminar
                                        </button>

                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                        </table>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-5 col-sm-5\">
                            <div class=\"dataTables_info\" id=\"sample_1_info\" role=\"status\" aria-live=\"polite\">Showing 11
                                to 15 of 25 records
                            </div>
                        </div>
                        <div class=\"col-md-7 col-sm-7\">
                            <div class=\"dataTables_paginate paging_bootstrap_full_number\" id=\"sample_1_paginate\">
                                <ul class=\"pagination\" style=\"visibility: visible;\">
                                    <li class=\"prev\"><a href=\"#\" title=\"First\"><i
                                                    class=\"fa fa-angle-double-left\"></i></a></li>
                                    <li class=\"prev\"><a href=\"#\" title=\"Prev\"><i class=\"fa fa-angle-left\"></i></a></li>
                                    <li><a href=\"#\">1</a></li>
                                    <li><a href=\"#\">2</a></li>
                                    <li class=\"active\"><a href=\"#\">3</a></li>
                                    <li><a href=\"#\">4</a></li>
                                    <li><a href=\"#\">5</a></li>
                                    <li class=\"next\"><a href=\"#\" title=\"Next\"><i class=\"fa fa-angle-right\"></i></a></li>
                                    <li class=\"next\"><a href=\"#\" title=\"Last\"><i
                                                    class=\"fa fa-angle-double-right\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>";
        
        $__internal_d090c1fa5cda8aff73ce30762c83164b2459cff5ee7dc49e2009fb62c82b422c->leave($__internal_d090c1fa5cda8aff73ce30762c83164b2459cff5ee7dc49e2009fb62c82b422c_prof);

        
        $__internal_1f999ebb085883b5c4c6ae9c8be3565e37044dd5e1c212e0fa5939b6aa2c8986->leave($__internal_1f999ebb085883b5c4c6ae9c8be3565e37044dd5e1c212e0fa5939b6aa2c8986_prof);

    }

    public function getTemplateName()
    {
        return ":amostra:categoria_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 128,  191 => 119,  183 => 114,  178 => 111,  172 => 109,  168 => 107,  166 => 106,  159 => 102,  153 => 99,  148 => 97,  139 => 90,  133 => 88,  130 => 87,  127 => 86,  124 => 85,  121 => 84,  118 => 83,  115 => 82,  110 => 81,  107 => 80,  105 => 79,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption font-dark\">
                    <i class=\"icon-settings font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> CATEGORIAS</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                        <button id=\"sample_editable_1_new\" class=\"btn sbold green cadastrar\" title=\"categoria\" VALUE=\"0\"> Inserir Novo
                            <i class=\"fa fa-plus\"></i>
                        </button>
                        <button class=\"btn green  btn-outline dropdown-toggle\" data-toggle=\"dropdown\"
                                aria-expanded=\"false\">Feramentas
                            <i class=\"fa fa-angle-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu pull-right\">
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"fa fa-print\"></i> Imprimir </a>
                            </li>
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"fa fa-file-pdf-o\"></i> Salvar em PDF </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">

                <div id=\"sample_1_wrapper\" class=\"dataTables_wrapper no-footer\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6\">
                        </div>
                        <div class=\"col-md-6 col-sm-6\">
                            <div id=\"sample_1_filter\" class=\"dataTables_filter\"><label>Search:<input type=\"search\"
                                                                                                     class=\"form-control input-sm input-small input-inline\"
                                                                                                     placeholder=\"\"
                                                                                                     aria-controls=\"sample_1\"></label>
                            </div>
                        </div>
                    </div>
                    <div class=\"table-scrollable\">
                        <table class=\"table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer\"
                               id=\"sample_1\" role=\"grid\" aria-describedby=\"sample_1_info\">
                            <thead>
                            <tr role=\"row\">
                                <th class=\"sorting_disabled\" rowspan=\"1\" colspan=\"1\" aria-label=\"\" style=\"width: 62px;\">
                                    <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                        <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#sample_1 .checkboxes\">
                                        <span></span>
                                    </label>
                                </th>
                                <th tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\"
                                    aria-label=\" Username : activate to sort column descending\"
                                    style=\"width: 35px;\"></th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Email : activate to sort column ascending\" style=\"width: 244px;\">
                                    Categoria
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Status : activate to sort column ascending\" style=\"width: 105px;\">
                                    Estado
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Joined : activate to sort column ascending\" style=\"width: 130px;\">
                                    Dependencia
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Actions : activate to sort column ascending\" style=\"width: 140px;\">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            {% set i=0 %}
                            {% set dep=null %}
                            {% for categoria in dados %}
                            {% set i=i+1 %}
                            {% if categoria.dependencia is null%}
                                {% set dep=null %}
                            {% elseif categoria.dependencia.nome != dep %}
                                {% set dep=categoria.dependencia.nome %}
                                {% set i=1 %}
                                <tr><th colspan=\"6\">{{ dep }}</th></tr>
                            {% endif %}
                            <tr class=\"gradeX odd\" role=\"row\">
                                <td>
                                    <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                        <input type=\"checkbox\" class=\"checkboxes\" value=\"1\">
                                        <span></span>
                                    </label>
                                </td>
                                <td class=\"sorting_1\"> {{ i }} </td>
                                <td>
                                    {{ categoria.nome }}
                                </td>
                                <td>
                                    <span class=\"label label-sm label-warning\"> {{ categoria.estado }}  </span>
                                </td>
                                <td class=\"center\">

                                    {% if categoria.dependencia is null %}
                                        --
                                    {% else %}
                                        {{ categoria.dependencia.nome }}
                                    {% endif %}
                                </td>
                                <td>
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-xs green dropdown-toggle cadastrar\" title=\"categoria\" value=\"{{ categoria.id }}\" type=\"button\"
                                                aria-expanded=\"false\">
                                            <i class=\"fa fa-edit\"></i> Editar
                                        </button>
                                        <button class=\"btn btn-xs red dropdown-toggle eliminar\" title=\"categoria\" type=\"button\"
                                                aria-expanded=\"false\" value=\"{{ categoria.id }}\" d=\"{{ categoria.nome }}\" >
                                            <i class=\"fa fa-eraser\"></i> Eliminar
                                        </button>

                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            {% endfor %}
                        </table>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-5 col-sm-5\">
                            <div class=\"dataTables_info\" id=\"sample_1_info\" role=\"status\" aria-live=\"polite\">Showing 11
                                to 15 of 25 records
                            </div>
                        </div>
                        <div class=\"col-md-7 col-sm-7\">
                            <div class=\"dataTables_paginate paging_bootstrap_full_number\" id=\"sample_1_paginate\">
                                <ul class=\"pagination\" style=\"visibility: visible;\">
                                    <li class=\"prev\"><a href=\"#\" title=\"First\"><i
                                                    class=\"fa fa-angle-double-left\"></i></a></li>
                                    <li class=\"prev\"><a href=\"#\" title=\"Prev\"><i class=\"fa fa-angle-left\"></i></a></li>
                                    <li><a href=\"#\">1</a></li>
                                    <li><a href=\"#\">2</a></li>
                                    <li class=\"active\"><a href=\"#\">3</a></li>
                                    <li><a href=\"#\">4</a></li>
                                    <li><a href=\"#\">5</a></li>
                                    <li class=\"next\"><a href=\"#\" title=\"Next\"><i class=\"fa fa-angle-right\"></i></a></li>
                                    <li class=\"next\"><a href=\"#\" title=\"Last\"><i
                                                    class=\"fa fa-angle-double-right\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>", ":amostra:categoria_list.html.twig", "/var/www/html/hom/app/Resources/views/amostra/categoria_list.html.twig");
    }
}

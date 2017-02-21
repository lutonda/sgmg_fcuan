<?php

/* :amostra:seccao_list.html.twig */
class __TwigTemplate_448f5439eeae533b5e3e4a102236c1821d256bab32418f29eeb2353692f89c0f extends Twig_Template
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
        $__internal_fcc21c25f2ee55acadba0fe0398450f36e7e31e825371095ab888b732738b0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc21c25f2ee55acadba0fe0398450f36e7e31e825371095ab888b732738b0db->enter($__internal_fcc21c25f2ee55acadba0fe0398450f36e7e31e825371095ab888b732738b0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra:seccao_list.html.twig"));

        $__internal_72d6fe7f1f2fb4b6d0d99608729345ea389877255624e7e38bda548c8d422cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d6fe7f1f2fb4b6d0d99608729345ea389877255624e7e38bda548c8d422cc6->enter($__internal_72d6fe7f1f2fb4b6d0d99608729345ea389877255624e7e38bda548c8d422cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra:seccao_list.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption font-dark\">
                    <i class=\"icon-settings font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> SECÇÃO</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                        <button id=\"sample_editable_1_new\" class=\"btn sbold green cadastrar\" title=\"seccao\" VALUE=\"0\"> Inserir Nova
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
                                    aria-label=\" Email : activate to sort column ascending\" style=\"width: 144px;\">
                                    Secção
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Status : activate to sort column ascending\" style=\"width: 105px;\">
                                    Estado
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Status : activate to sort column ascending\">
                                    Descrição
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Actions : activate to sort column ascending\" style=\"width: 163px;\">
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 80, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["seccao"]) {
            // line 81
            echo "                            ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 81, $this->getSourceContext()); })()) + 1);
            // line 82
            echo "                            <tr class=\"gradeX odd\" role=\"row\">
                                <td>
                                    <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                        <input type=\"checkbox\" class=\"checkboxes\" value=\"1\">
                                        <span></span>
                                    </label>
                                </td>
                                <td class=\"sorting_1\"> ";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 89, $this->getSourceContext()); })()), "html", null, true);
            echo " </td>
                                <td>
                                    ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["seccao"], "nome", array()), "html", null, true);
            echo "
                                </td>
                                ";
            // line 93
            $context["estado"] = "info";
            // line 94
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["seccao"], "estado", array()) == "Activo")) {
                // line 95
                echo "                                    ";
                $context["estado"] = "success";
                // line 96
                echo "                                ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["seccao"], "estado", array()) == "Canselado")) {
                // line 97
                echo "                                    ";
                $context["estado"] = "warning";
                // line 98
                echo "                                ";
            }
            // line 99
            echo "                                <td>
                                    <span class=\"label label-sm label-";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["estado"]) || array_key_exists("estado", $context) ? $context["estado"] : (function () { throw new Twig_Error_Runtime('Variable "estado" does not exist.', 100, $this->getSourceContext()); })()), "html", null, true);
            echo "\"> - - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["seccao"], "estado", array()), "html", null, true);
            echo "- -  </span>
                                </td>
                                <td>
                                     ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["seccao"], "descricao", array()), "html", null, true);
            echo "
                                </td>

                                <td>
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-xs green dropdown-toggle cadastrar\" title=\"seccao\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["seccao"], "id", array()), "html", null, true);
            echo "\" type=\"button\"
                                                aria-expanded=\"false\">
                                            <i class=\"fa fa-edit\"></i> Editar
                                        </button>
                                        <button class=\"btn btn-xs red dropdown-toggle eliminar\" title=\"seccao\" type=\"button\"
                                                aria-expanded=\"false\" value=\"";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["seccao"], "id", array()), "html", null, true);
            echo "\" d=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["seccao"], "nome", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seccao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
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
        
        $__internal_fcc21c25f2ee55acadba0fe0398450f36e7e31e825371095ab888b732738b0db->leave($__internal_fcc21c25f2ee55acadba0fe0398450f36e7e31e825371095ab888b732738b0db_prof);

        
        $__internal_72d6fe7f1f2fb4b6d0d99608729345ea389877255624e7e38bda548c8d422cc6->leave($__internal_72d6fe7f1f2fb4b6d0d99608729345ea389877255624e7e38bda548c8d422cc6_prof);

    }

    public function getTemplateName()
    {
        return ":amostra:seccao_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 122,  178 => 113,  170 => 108,  162 => 103,  154 => 100,  151 => 99,  148 => 98,  145 => 97,  142 => 96,  139 => 95,  136 => 94,  134 => 93,  129 => 91,  124 => 89,  115 => 82,  112 => 81,  107 => 80,  105 => 79,  25 => 1,);
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
                    <span class=\"caption-subject bold uppercase\"> SECÇÃO</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                        <button id=\"sample_editable_1_new\" class=\"btn sbold green cadastrar\" title=\"seccao\" VALUE=\"0\"> Inserir Nova
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
                                    aria-label=\" Email : activate to sort column ascending\" style=\"width: 144px;\">
                                    Secção
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Status : activate to sort column ascending\" style=\"width: 105px;\">
                                    Estado
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Status : activate to sort column ascending\">
                                    Descrição
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Actions : activate to sort column ascending\" style=\"width: 163px;\">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            {% set i=0 %}
                            {% for seccao in dados %}
                            {% set i=i+1 %}
                            <tr class=\"gradeX odd\" role=\"row\">
                                <td>
                                    <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                        <input type=\"checkbox\" class=\"checkboxes\" value=\"1\">
                                        <span></span>
                                    </label>
                                </td>
                                <td class=\"sorting_1\"> {{ i }} </td>
                                <td>
                                    {{ seccao.nome }}
                                </td>
                                {% set estado='info' %}
                                {% if seccao.estado == 'Activo' %}
                                    {% set estado='success' %}
                                {% elseif seccao.estado == 'Canselado' %}
                                    {% set estado='warning' %}
                                {% endif %}
                                <td>
                                    <span class=\"label label-sm label-{{ estado }}\"> - - {{ seccao.estado }}- -  </span>
                                </td>
                                <td>
                                     {{ seccao.descricao }}
                                </td>

                                <td>
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-xs green dropdown-toggle cadastrar\" title=\"seccao\" value=\"{{ seccao.id }}\" type=\"button\"
                                                aria-expanded=\"false\">
                                            <i class=\"fa fa-edit\"></i> Editar
                                        </button>
                                        <button class=\"btn btn-xs red dropdown-toggle eliminar\" title=\"seccao\" type=\"button\"
                                                aria-expanded=\"false\" value=\"{{ seccao.id }}\" d=\"{{ seccao.nome }}\" >
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
</div>", ":amostra:seccao_list.html.twig", "/var/www/html/hom/app/Resources/views/amostra/seccao_list.html.twig");
    }
}

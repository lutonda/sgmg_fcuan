<?php

/* :amostra:prateleira_list.html.twig */
class __TwigTemplate_92f59e4e33b4cf4839e7fe56bb694f7ddb7d9cc7129f03d68e595924b70d3476 extends Twig_Template
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
        $__internal_a738fd099caa899c312ce720a8aa40ccadc46fb2ed5398fa1b7e7aa6a44db49a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a738fd099caa899c312ce720a8aa40ccadc46fb2ed5398fa1b7e7aa6a44db49a->enter($__internal_a738fd099caa899c312ce720a8aa40ccadc46fb2ed5398fa1b7e7aa6a44db49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra:prateleira_list.html.twig"));

        $__internal_e7dc1f6b15ad6e786a961fef8887af70456cf856da75fce16282a164062a4ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7dc1f6b15ad6e786a961fef8887af70456cf856da75fce16282a164062a4ff4->enter($__internal_e7dc1f6b15ad6e786a961fef8887af70456cf856da75fce16282a164062a4ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra:prateleira_list.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption font-dark\">
                    <i class=\"icon-settings font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> PRATELEIRAS</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                        <button id=\"sample_editable_1_new\" class=\"btn sbold green cadastrar\" title=\"prateleira\"
                                VALUE=\"0\"> Inserir Nova
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
                                    Prateleira
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Status : activate to sort column ascending\" style=\"width: 105px;\">
                                    Estado
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Status : activate to sort column ascending\" style=\"width: 105px;\">
                                    Secção
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Status : activate to sort column ascending\" style=\"width: 105px;\">
                                    Acervos
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Actions : activate to sort column ascending\" style=\"width: 163px;\">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 84
        $context["i"] = 0;
        // line 85
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 85, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prateleira"]) {
            // line 86
            echo "                            ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 86, $this->getSourceContext()); })()) + 1);
            // line 87
            echo "                            <tr class=\"gradeX odd\" role=\"row\">
                                <td>
                                    <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                        <input type=\"checkbox\" class=\"checkboxes\" value=\"1\">
                                        <span></span>
                                    </label>
                                </td>
                                <td class=\"sorting_1\"> ";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 94, $this->getSourceContext()); })()), "html", null, true);
            echo " </td>
                                <td>
                                    ";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["prateleira"], "nome", array()), "html", null, true);
            echo "
                                </td>
                                ";
            // line 98
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["prateleira"], "estado", array()) == "Activo")) {
                // line 99
                echo "                                    ";
                $context["estado"] = "success";
                // line 100
                echo "                                ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["prateleira"], "estado", array()) == "Canselado")) {
                // line 101
                echo "                                    ";
                $context["estado"] = "warning";
                // line 102
                echo "                                ";
            }
            // line 103
            echo "                                <td>
                                    <span class=\"label label-sm label-";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["estado"]) || array_key_exists("estado", $context) ? $context["estado"] : (function () { throw new Twig_Error_Runtime('Variable "estado" does not exist.', 104, $this->getSourceContext()); })()), "html", null, true);
            echo "\"> - - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["prateleira"], "estado", array()), "html", null, true);
            echo "- -  </span>
                                </td>
                                <td>
                                    ";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["prateleira"], "idseccao", array()), "nome", array()), "html", null, true);
            echo "
                                </td>
                                <td title=\"";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["prateleira"], "acervos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ac"]) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ac"], "nome", array()), "html", null, true);
                echo ", ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ac'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
                                    ";
            // line 110
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["prateleira"], "acervos", array())), "html", null, true);
            echo "
                                </td>
                                <td>
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-xs green dropdown-toggle cadastrar\" title=\"prateleira\"
                                                value=\"";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["prateleira"], "id", array()), "html", null, true);
            echo "\" type=\"button\"
                                                aria-expanded=\"false\">
                                            <i class=\"fa fa-edit\"></i> Editar
                                        </button>
                                        <button class=\"btn btn-xs red dropdown-toggle eliminar\" title=\"prateleira\"
                                                type=\"button\"
                                                aria-expanded=\"false\" value=\"";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["prateleira"], "id", array()), "html", null, true);
            echo "\"
                                                d=\"";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["prateleira"], "nome", array()), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-eraser\"></i> Eliminar
                                        </button>

                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prateleira'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
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
        
        $__internal_a738fd099caa899c312ce720a8aa40ccadc46fb2ed5398fa1b7e7aa6a44db49a->leave($__internal_a738fd099caa899c312ce720a8aa40ccadc46fb2ed5398fa1b7e7aa6a44db49a_prof);

        
        $__internal_e7dc1f6b15ad6e786a961fef8887af70456cf856da75fce16282a164062a4ff4->leave($__internal_e7dc1f6b15ad6e786a961fef8887af70456cf856da75fce16282a164062a4ff4_prof);

    }

    public function getTemplateName()
    {
        return ":amostra:prateleira_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 131,  202 => 122,  198 => 121,  189 => 115,  181 => 110,  169 => 109,  164 => 107,  156 => 104,  153 => 103,  150 => 102,  147 => 101,  144 => 100,  141 => 99,  139 => 98,  134 => 96,  129 => 94,  120 => 87,  117 => 86,  112 => 85,  110 => 84,  25 => 1,);
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
                    <span class=\"caption-subject bold uppercase\"> PRATELEIRAS</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                        <button id=\"sample_editable_1_new\" class=\"btn sbold green cadastrar\" title=\"prateleira\"
                                VALUE=\"0\"> Inserir Nova
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
                                    Prateleira
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Status : activate to sort column ascending\" style=\"width: 105px;\">
                                    Estado
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Status : activate to sort column ascending\" style=\"width: 105px;\">
                                    Secção
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Status : activate to sort column ascending\" style=\"width: 105px;\">
                                    Acervos
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Actions : activate to sort column ascending\" style=\"width: 163px;\">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            {% set i=0 %}
                            {% for prateleira in dados %}
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
                                    {{ prateleira.nome }}
                                </td>
                                {% if prateleira.estado == 'Activo' %}
                                    {% set estado='success' %}
                                {% elseif prateleira.estado == 'Canselado' %}
                                    {% set estado='warning' %}
                                {% endif %}
                                <td>
                                    <span class=\"label label-sm label-{{ estado }}\"> - - {{ prateleira.estado }}- -  </span>
                                </td>
                                <td>
                                    {{ prateleira.idseccao.nome }}
                                </td>
                                <td title=\"{% for ac in prateleira.acervos %}{{ ac.nome }}, {% endfor %}\">
                                    {{ prateleira.acervos | length }}
                                </td>
                                <td>
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-xs green dropdown-toggle cadastrar\" title=\"prateleira\"
                                                value=\"{{ prateleira.id }}\" type=\"button\"
                                                aria-expanded=\"false\">
                                            <i class=\"fa fa-edit\"></i> Editar
                                        </button>
                                        <button class=\"btn btn-xs red dropdown-toggle eliminar\" title=\"prateleira\"
                                                type=\"button\"
                                                aria-expanded=\"false\" value=\"{{ prateleira.id }}\"
                                                d=\"{{ prateleira.nome }}\">
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
</div>", ":amostra:prateleira_list.html.twig", "/var/www/html/hom/app/Resources/views/amostra/prateleira_list.html.twig");
    }
}

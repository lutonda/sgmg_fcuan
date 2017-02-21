<?php

/* :amostra:genese_list.html.twig */
class __TwigTemplate_8e43d16487f1267d89648714f87a8916ff88ce065ac0c01186ea3ce0bdf69799 extends Twig_Template
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
        $__internal_0477f3c2f7f3306c63f6c587e7f4a840e29408bd1c85c39a33f5ebf8fa987d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0477f3c2f7f3306c63f6c587e7f4a840e29408bd1c85c39a33f5ebf8fa987d2e->enter($__internal_0477f3c2f7f3306c63f6c587e7f4a840e29408bd1c85c39a33f5ebf8fa987d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra:genese_list.html.twig"));

        $__internal_33864ed918cd7bc42b5fb3bae0779361d3ad577f718d72c2997cca9ad6be8708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33864ed918cd7bc42b5fb3bae0779361d3ad577f718d72c2997cca9ad6be8708->enter($__internal_33864ed918cd7bc42b5fb3bae0779361d3ad577f718d72c2997cca9ad6be8708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra:genese_list.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet light bordered\">
            <div class=\"portlet-title\">
                <div class=\"caption font-dark\">
                    <i class=\"icon-settings font-dark\"></i>
                    <span class=\"caption-subject bold uppercase\"> GÉNESE</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                        <button id=\"sample_editable_1_new\" class=\"btn sbold green cadastrar\" title=\"genese\" VALUE=\"0\"> Inserir Nova
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
                                    Nome
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Status : activate to sort column ascending\" style=\"width: 105px;\">
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
        // line 75
        $context["i"] = 0;
        // line 76
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dados"]) || array_key_exists("dados", $context) ? $context["dados"] : (function () { throw new Twig_Error_Runtime('Variable "dados" does not exist.', 76, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["genese"]) {
            // line 77
            echo "                            ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 77, $this->getSourceContext()); })()) + 1);
            // line 78
            echo "                            <tr class=\"gradeX odd\" role=\"row\">
                                <td>
                                    <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                        <input type=\"checkbox\" class=\"checkboxes\" value=\"1\">
                                        <span></span>
                                    </label>
                                </td>
                                <td class=\"sorting_1\"> ";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 85, $this->getSourceContext()); })()), "html", null, true);
            echo " </td>
                                <td>
                                    ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["genese"], "nome", array()), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["genese"], "descricao", array()), "html", null, true);
            echo "
                                </td>
                                <td>
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-xs green dropdown-toggle cadastrar\" title=\"genese\" value=\"";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["genese"], "id", array()), "html", null, true);
            echo "\" type=\"button\"
                                                aria-expanded=\"false\">
                                            <i class=\"fa fa-edit\"></i> Editar
                                        </button>
                                        <button class=\"btn btn-xs red dropdown-toggle eliminar\" title=\"genese\" type=\"button\"
                                                aria-expanded=\"false\" value=\"";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["genese"], "id", array()), "html", null, true);
            echo "\" d=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["genese"], "nome", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genese'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
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
        
        $__internal_0477f3c2f7f3306c63f6c587e7f4a840e29408bd1c85c39a33f5ebf8fa987d2e->leave($__internal_0477f3c2f7f3306c63f6c587e7f4a840e29408bd1c85c39a33f5ebf8fa987d2e_prof);

        
        $__internal_33864ed918cd7bc42b5fb3bae0779361d3ad577f718d72c2997cca9ad6be8708->leave($__internal_33864ed918cd7bc42b5fb3bae0779361d3ad577f718d72c2997cca9ad6be8708_prof);

    }

    public function getTemplateName()
    {
        return ":amostra:genese_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 108,  146 => 99,  138 => 94,  131 => 90,  125 => 87,  120 => 85,  111 => 78,  108 => 77,  103 => 76,  101 => 75,  25 => 1,);
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
                    <span class=\"caption-subject bold uppercase\"> GÉNESE</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                        <button id=\"sample_editable_1_new\" class=\"btn sbold green cadastrar\" title=\"genese\" VALUE=\"0\"> Inserir Nova
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
                                    Nome
                                </th>
                                <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\"
                                    aria-label=\" Status : activate to sort column ascending\" style=\"width: 105px;\">
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
                            {% for genese in dados %}
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
                                    {{ genese.nome }}
                                </td>
                                <td>
                                    {{ genese.descricao }}
                                </td>
                                <td>
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-xs green dropdown-toggle cadastrar\" title=\"genese\" value=\"{{ genese.id }}\" type=\"button\"
                                                aria-expanded=\"false\">
                                            <i class=\"fa fa-edit\"></i> Editar
                                        </button>
                                        <button class=\"btn btn-xs red dropdown-toggle eliminar\" title=\"genese\" type=\"button\"
                                                aria-expanded=\"false\" value=\"{{ genese.id }}\" d=\"{{ genese.nome }}\" >
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
</div>", ":amostra:genese_list.html.twig", "/var/www/html/hom/app/Resources/views/amostra/genese_list.html.twig");
    }
}

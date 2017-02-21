<?php

/* :MUS/api:membro_actividade_ver.html.twig */
class __TwigTemplate_9e889d35ef504c055c5560422ab5d34fd814e3aeffc00ee11f91d63acd1aaa7a extends Twig_Template
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
        $__internal_836fcfd3393b2e590d443277bdb7ea41532f0ea56b5d62fed210c9cbe09e19e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_836fcfd3393b2e590d443277bdb7ea41532f0ea56b5d62fed210c9cbe09e19e6->enter($__internal_836fcfd3393b2e590d443277bdb7ea41532f0ea56b5d62fed210c9cbe09e19e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS/api:membro_actividade_ver.html.twig"));

        $__internal_a4f46dacc9ee82eddb13dfbb652b43a49d333e8c20c1b89e81b164b884785a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f46dacc9ee82eddb13dfbb652b43a49d333e8c20c1b89e81b164b884785a54->enter($__internal_a4f46dacc9ee82eddb13dfbb652b43a49d333e8c20c1b89e81b164b884785a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":MUS/api:membro_actividade_ver.html.twig"));

        // line 1
        $this->displayBlock('javascript', $context, $blocks);
        // line 8
        echo "<div class=\"row\">
    <div class=\"col-md-6\">
        <!-- BEGIN PORTLET -->
        <div class=\"portlet light bordered\" style=\"min-height: 550px\">
            <div class=\"portlet-title\">
                <div class=\"caption caption-md\">
                    <i class=\"icon-bar-chart theme-font hide\"></i>
                    <span class=\"caption-subject font-blue-madison bold uppercase\">Actividades</span>
                    <span class=\"caption-helper hide\">weekly stats...</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                        <label class=\"btn btn-transparent grey-salsa btn-circle btn-sm active\">
                            <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option1\">Hoje</label>
                        <label class=\"btn btn-transparent grey-salsa btn-circle btn-sm\">
                            <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Semana</label>
                        <label class=\"btn btn-transparent grey-salsa btn-circle btn-sm\">
                            <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Mês</label>
                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <div class=\"row number-stats margin-bottom-30\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <div class=\"stat-left\">
                            <div class=\"stat-chart\">
                                <!-- do not line break \"sparkline_bar\" div. sparkline chart has an issue when the container div has line break -->
                                <div id=\"sparkline_bar\"><canvas width=\"90\" height=\"45\" style=\"display: inline-block; width: 90px; height: 45px; vertical-align: top;\"></canvas></div>
                            </div>
                            <div class=\"stat-number\">
                                <div class=\"title\"> Total </div>
                                <div class=\"number\"> 2460 </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <div class=\"stat-right\">
                            <div class=\"stat-chart\">
                                <!-- do not line break \"sparkline_bar\" div. sparkline chart has an issue when the container div has line break -->
                                <div id=\"sparkline_bar2\"><canvas width=\"90\" height=\"45\" style=\"display: inline-block; width: 90px; height: 45px; vertical-align: top;\"></canvas></div>
                            </div>
                            <div class=\"stat-number\">
                                <div class=\"title\"> New </div>
                                <div class=\"number\"> 719 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"table-scrollable table-scrollable-borderless\">
                    <table class=\"table table-hover table-light\">
                        <thead>
                        <tr class=\"uppercase\">
                            <th colspan=\"2\"> MEMBER </th>
                            <th> Earnings </th>
                            <th> CASES </th>
                            <th> CLOSED </th>
                            <th> RATE </th>
                        </tr>
                        </thead>
                        <tbody><tr>
                            <td class=\"fit\">
                                <img class=\"user-pic\" src=\"../assets/pages/media/users/avatar4.jpg\"> </td>
                            <td>
                                <a href=\"javascript:;\" class=\"primary-link\">Brain</a>
                            </td>
                            <td> \$345 </td>
                            <td> 45 </td>
                            <td> 124 </td>
                            <td>
                                <span class=\"bold theme-font\">80%</span>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"fit\">
                                <img class=\"user-pic\" src=\"../assets/pages/media/users/avatar5.jpg\"> </td>
                            <td>
                                <a href=\"javascript:;\" class=\"primary-link\">Nick</a>
                            </td>
                            <td> \$560 </td>
                            <td> 12 </td>
                            <td> 24 </td>
                            <td>
                                <span class=\"bold theme-font\">67%</span>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"fit\">
                                <img class=\"user-pic\" src=\"../assets/pages/media/users/avatar6.jpg\"> </td>
                            <td>
                                <a href=\"javascript:;\" class=\"primary-link\">Tim</a>
                            </td>
                            <td> \$1,345 </td>
                            <td> 450 </td>
                            <td> 46 </td>
                            <td>
                                <span class=\"bold theme-font\">98%</span>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"fit\">
                                <img class=\"user-pic\" src=\"../assets/pages/media/users/avatar7.jpg\"> </td>
                            <td>
                                <a href=\"javascript:;\" class=\"primary-link\">Tom</a>
                            </td>
                            <td> \$645 </td>
                            <td> 50 </td>
                            <td> 89 </td>
                            <td>
                                <span class=\"bold theme-font\">58%</span>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
        </div>
        <!-- END PORTLET -->
    </div>
    <div class=\"col-md-6\">
        <!-- BEGIN PORTLET -->
        <div class=\"portlet light bordered\" style=\"min-height: 550px\">
            <div class=\"portlet-title tabbable-line\">
                <div class=\"caption caption-md\">
                    <i class=\"icon-globe theme-font hide\"></i>
                    <span class=\"caption-subject font-blue-madison bold uppercase\">Visitas</span>
                </div>
                <ul class=\"nav nav-tabs\">
                    <li class=\"\">
                        <a href=\"#tab_1_1\" data-toggle=\"tab\"> Portal </a>
                    </li>
                    <li>
                        <a href=\"#tab_1_2\" data-toggle=\"tab\"> Local </a>
                    </li>
                </ul>
            </div>
            <div class=\"portlet-body\">
                <!--BEGIN TABS-->
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab_1_1\">
                        <div class=\"slimScrollDiv\" style=\"position: relative; overflow: hidden; width: auto; height: 320px;\"><div class=\"scroller\" style=\"height: 320px; overflow: hidden; width: auto;\" data-always-visible=\"1\" data-rail-visible1=\"0\" data-handle-color=\"#D7DCE2\" data-initialized=\"1\">
                                <ul class=\"feeds\">
                                    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["visitas"]) || array_key_exists("visitas", $context) ? $context["visitas"] : (function () { throw new Twig_Error_Runtime('Variable "visitas" does not exist.', 148, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["visita"]) {
            // line 149
            echo "                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-success\">
                                                        <i class=\"fa fa-bell-o\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2 col-md-4\">
                                                    <div class=\"desc\"> ";
            // line 158
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["visita"], "dataVisita", array()), "date", array())), "html", null, true);
            echo "</div>
                                                    <time class=\"timeago\" datetime=\"";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["visita"], "data", array()), "date", array()), "html", null, true);
            echo "\"></time>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\">
                                                <a href=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visita_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["visita"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-circle green btn-sm\">Ver</a>
                                            </div>
                                        </div>
                                    </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visita'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                                </ul>
                            </div><div class=\"slimScrollBar\" style=\"background: rgb(215, 220, 226); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 115.706px;\"></div><div class=\"slimScrollRail\" style=\"width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;\"></div></div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab_1_2\">
                        <div class=\"slimScrollDiv\" style=\"position: relative; overflow: hidden; width: auto; height: 337px;\"><div class=\"scroller\" style=\"height: 337px; overflow: hidden; width: auto;\" data-always-visible=\"1\" data-rail-visible1=\"0\" data-handle-color=\"#D7DCE2\" data-initialized=\"1\">
                                <ul class=\"feeds\">
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New user registered </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New order received </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 10 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-danger\">
                                                        <i class=\"fa fa-bolt\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> Order #24DOP4 has been rejected.
                                                        <span class=\"label label-sm label-danger \"> Take action
                                                                                                    <i class=\"fa fa-share\"></i>
                                                                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New user registered </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New user registered </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New user registered </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New user registered </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New user registered </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New user registered </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New user registered </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div><div class=\"slimScrollBar\" style=\"background: rgb(215, 220, 226); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;\"></div><div class=\"slimScrollRail\" style=\"width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;\"></div></div>
                    </div>
                </div>
                <!--END TABS-->
            </div>
        </div>
        <!-- END PORTLET -->
    </div>
</div>";
        
        $__internal_836fcfd3393b2e590d443277bdb7ea41532f0ea56b5d62fed210c9cbe09e19e6->leave($__internal_836fcfd3393b2e590d443277bdb7ea41532f0ea56b5d62fed210c9cbe09e19e6_prof);

        
        $__internal_a4f46dacc9ee82eddb13dfbb652b43a49d333e8c20c1b89e81b164b884785a54->leave($__internal_a4f46dacc9ee82eddb13dfbb652b43a49d333e8c20c1b89e81b164b884785a54_prof);

    }

    // line 1
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_be49d4565735e5c9d861675589911cc920215cbaad770656c655d9db55e248e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be49d4565735e5c9d861675589911cc920215cbaad770656c655d9db55e248e7->enter($__internal_be49d4565735e5c9d861675589911cc920215cbaad770656c655d9db55e248e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_4b5d21c29389cbe1c8e91cf9cc12bea286753b22c504ca55ad5407b468ce4c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5d21c29389cbe1c8e91cf9cc12bea286753b22c504ca55ad5407b468ce4c5f->enter($__internal_4b5d21c29389cbe1c8e91cf9cc12bea286753b22c504ca55ad5407b468ce4c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 2
        echo "<script>
    \$(document).ready(function(){
        \$(\"time.timeago\").timeago();
    })
</script>
";
        
        $__internal_4b5d21c29389cbe1c8e91cf9cc12bea286753b22c504ca55ad5407b468ce4c5f->leave($__internal_4b5d21c29389cbe1c8e91cf9cc12bea286753b22c504ca55ad5407b468ce4c5f_prof);

        
        $__internal_be49d4565735e5c9d861675589911cc920215cbaad770656c655d9db55e248e7->leave($__internal_be49d4565735e5c9d861675589911cc920215cbaad770656c655d9db55e248e7_prof);

    }

    public function getTemplateName()
    {
        return ":MUS/api:membro_actividade_ver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 2,  426 => 1,  209 => 170,  198 => 165,  189 => 159,  185 => 158,  174 => 149,  170 => 148,  28 => 8,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block javascript %}
<script>
    \$(document).ready(function(){
        \$(\"time.timeago\").timeago();
    })
</script>
{% endblock %}
<div class=\"row\">
    <div class=\"col-md-6\">
        <!-- BEGIN PORTLET -->
        <div class=\"portlet light bordered\" style=\"min-height: 550px\">
            <div class=\"portlet-title\">
                <div class=\"caption caption-md\">
                    <i class=\"icon-bar-chart theme-font hide\"></i>
                    <span class=\"caption-subject font-blue-madison bold uppercase\">Actividades</span>
                    <span class=\"caption-helper hide\">weekly stats...</span>
                </div>
                <div class=\"actions\">
                    <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                        <label class=\"btn btn-transparent grey-salsa btn-circle btn-sm active\">
                            <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option1\">Hoje</label>
                        <label class=\"btn btn-transparent grey-salsa btn-circle btn-sm\">
                            <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Semana</label>
                        <label class=\"btn btn-transparent grey-salsa btn-circle btn-sm\">
                            <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Mês</label>
                    </div>
                </div>
            </div>
            <div class=\"portlet-body\">
                <div class=\"row number-stats margin-bottom-30\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <div class=\"stat-left\">
                            <div class=\"stat-chart\">
                                <!-- do not line break \"sparkline_bar\" div. sparkline chart has an issue when the container div has line break -->
                                <div id=\"sparkline_bar\"><canvas width=\"90\" height=\"45\" style=\"display: inline-block; width: 90px; height: 45px; vertical-align: top;\"></canvas></div>
                            </div>
                            <div class=\"stat-number\">
                                <div class=\"title\"> Total </div>
                                <div class=\"number\"> 2460 </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <div class=\"stat-right\">
                            <div class=\"stat-chart\">
                                <!-- do not line break \"sparkline_bar\" div. sparkline chart has an issue when the container div has line break -->
                                <div id=\"sparkline_bar2\"><canvas width=\"90\" height=\"45\" style=\"display: inline-block; width: 90px; height: 45px; vertical-align: top;\"></canvas></div>
                            </div>
                            <div class=\"stat-number\">
                                <div class=\"title\"> New </div>
                                <div class=\"number\"> 719 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"table-scrollable table-scrollable-borderless\">
                    <table class=\"table table-hover table-light\">
                        <thead>
                        <tr class=\"uppercase\">
                            <th colspan=\"2\"> MEMBER </th>
                            <th> Earnings </th>
                            <th> CASES </th>
                            <th> CLOSED </th>
                            <th> RATE </th>
                        </tr>
                        </thead>
                        <tbody><tr>
                            <td class=\"fit\">
                                <img class=\"user-pic\" src=\"../assets/pages/media/users/avatar4.jpg\"> </td>
                            <td>
                                <a href=\"javascript:;\" class=\"primary-link\">Brain</a>
                            </td>
                            <td> \$345 </td>
                            <td> 45 </td>
                            <td> 124 </td>
                            <td>
                                <span class=\"bold theme-font\">80%</span>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"fit\">
                                <img class=\"user-pic\" src=\"../assets/pages/media/users/avatar5.jpg\"> </td>
                            <td>
                                <a href=\"javascript:;\" class=\"primary-link\">Nick</a>
                            </td>
                            <td> \$560 </td>
                            <td> 12 </td>
                            <td> 24 </td>
                            <td>
                                <span class=\"bold theme-font\">67%</span>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"fit\">
                                <img class=\"user-pic\" src=\"../assets/pages/media/users/avatar6.jpg\"> </td>
                            <td>
                                <a href=\"javascript:;\" class=\"primary-link\">Tim</a>
                            </td>
                            <td> \$1,345 </td>
                            <td> 450 </td>
                            <td> 46 </td>
                            <td>
                                <span class=\"bold theme-font\">98%</span>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"fit\">
                                <img class=\"user-pic\" src=\"../assets/pages/media/users/avatar7.jpg\"> </td>
                            <td>
                                <a href=\"javascript:;\" class=\"primary-link\">Tom</a>
                            </td>
                            <td> \$645 </td>
                            <td> 50 </td>
                            <td> 89 </td>
                            <td>
                                <span class=\"bold theme-font\">58%</span>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
        </div>
        <!-- END PORTLET -->
    </div>
    <div class=\"col-md-6\">
        <!-- BEGIN PORTLET -->
        <div class=\"portlet light bordered\" style=\"min-height: 550px\">
            <div class=\"portlet-title tabbable-line\">
                <div class=\"caption caption-md\">
                    <i class=\"icon-globe theme-font hide\"></i>
                    <span class=\"caption-subject font-blue-madison bold uppercase\">Visitas</span>
                </div>
                <ul class=\"nav nav-tabs\">
                    <li class=\"\">
                        <a href=\"#tab_1_1\" data-toggle=\"tab\"> Portal </a>
                    </li>
                    <li>
                        <a href=\"#tab_1_2\" data-toggle=\"tab\"> Local </a>
                    </li>
                </ul>
            </div>
            <div class=\"portlet-body\">
                <!--BEGIN TABS-->
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab_1_1\">
                        <div class=\"slimScrollDiv\" style=\"position: relative; overflow: hidden; width: auto; height: 320px;\"><div class=\"scroller\" style=\"height: 320px; overflow: hidden; width: auto;\" data-always-visible=\"1\" data-rail-visible1=\"0\" data-handle-color=\"#D7DCE2\" data-initialized=\"1\">
                                <ul class=\"feeds\">
                                    {% for visita in visitas %}
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-success\">
                                                        <i class=\"fa fa-bell-o\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2 col-md-4\">
                                                    <div class=\"desc\"> {{ visita.dataVisita.date | date }}</div>
                                                    <time class=\"timeago\" datetime=\"{{ visita.data.date  }}\"></time>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\">
                                                <a href=\"{{ path('visita_show',{'id':visita.id}) }}\" class=\"btn btn-circle green btn-sm\">Ver</a>
                                            </div>
                                        </div>
                                    </li>
                                    {% endfor %}
                                </ul>
                            </div><div class=\"slimScrollBar\" style=\"background: rgb(215, 220, 226); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 115.706px;\"></div><div class=\"slimScrollRail\" style=\"width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;\"></div></div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab_1_2\">
                        <div class=\"slimScrollDiv\" style=\"position: relative; overflow: hidden; width: auto; height: 337px;\"><div class=\"scroller\" style=\"height: 337px; overflow: hidden; width: auto;\" data-always-visible=\"1\" data-rail-visible1=\"0\" data-handle-color=\"#D7DCE2\" data-initialized=\"1\">
                                <ul class=\"feeds\">
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New user registered </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New order received </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 10 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-danger\">
                                                        <i class=\"fa fa-bolt\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> Order #24DOP4 has been rejected.
                                                        <span class=\"label label-sm label-danger \"> Take action
                                                                                                    <i class=\"fa fa-share\"></i>
                                                                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New user registered </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New user registered </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New user registered </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New user registered </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New user registered </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New user registered </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bell-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> New user registered </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> Just now </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div><div class=\"slimScrollBar\" style=\"background: rgb(215, 220, 226); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;\"></div><div class=\"slimScrollRail\" style=\"width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;\"></div></div>
                    </div>
                </div>
                <!--END TABS-->
            </div>
        </div>
        <!-- END PORTLET -->
    </div>
</div>", ":MUS/api:membro_actividade_ver.html.twig", "/var/www/html/hom/app/Resources/views/MUS/api/membro_actividade_ver.html.twig");
    }
}

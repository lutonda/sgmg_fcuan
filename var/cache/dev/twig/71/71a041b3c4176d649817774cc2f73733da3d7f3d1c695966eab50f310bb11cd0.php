<?php

/* amostra/index.html.twig */
class __TwigTemplate_bd865e8de6fb14f264c18fbe2d40e97b0381301682512e6ceda546a919cac91a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("inicio.html.twig", "amostra/index.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "inicio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae238ef792130096467ffd071d38121106b41a9c7f475716172510d6a999959c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae238ef792130096467ffd071d38121106b41a9c7f475716172510d6a999959c->enter($__internal_ae238ef792130096467ffd071d38121106b41a9c7f475716172510d6a999959c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "amostra/index.html.twig"));

        $__internal_dcd2e4e2deab60925cff81f9fd28cfddb7789eaf2acfd7e7d22e58e273193997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd2e4e2deab60925cff81f9fd28cfddb7789eaf2acfd7e7d22e58e273193997->enter($__internal_dcd2e4e2deab60925cff81f9fd28cfddb7789eaf2acfd7e7d22e58e273193997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "amostra/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae238ef792130096467ffd071d38121106b41a9c7f475716172510d6a999959c->leave($__internal_ae238ef792130096467ffd071d38121106b41a9c7f475716172510d6a999959c_prof);

        
        $__internal_dcd2e4e2deab60925cff81f9fd28cfddb7789eaf2acfd7e7d22e58e273193997->leave($__internal_dcd2e4e2deab60925cff81f9fd28cfddb7789eaf2acfd7e7d22e58e273193997_prof);

    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        $__internal_c2b13245f550dc2306a55b4e81bd81445140512f14ce156307fd943a86a28c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b13245f550dc2306a55b4e81bd81445140512f14ce156307fd943a86a28c1b->enter($__internal_c2b13245f550dc2306a55b4e81bd81445140512f14ce156307fd943a86a28c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_f7377e4808928a0196125a97575b97d2c2941c6eb8d1b6e9cb18df4010132f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7377e4808928a0196125a97575b97d2c2941c6eb8d1b6e9cb18df4010132f53->enter($__internal_f7377e4808928a0196125a97575b97d2c2941c6eb8d1b6e9cb18df4010132f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 3
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/cubeportfolio/css/cubeportfolio.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/css/portfolio.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/jquery.treegrid.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/jquery.treegrid.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/css/magicsuggest-min.css"), "html", null, true);
        echo "\">
        <style>
            input, textarea, label, button select{border-radius: 0 !important;}
        </style>
    ";
        
        $__internal_f7377e4808928a0196125a97575b97d2c2941c6eb8d1b6e9cb18df4010132f53->leave($__internal_f7377e4808928a0196125a97575b97d2c2941c6eb8d1b6e9cb18df4010132f53_prof);

        
        $__internal_c2b13245f550dc2306a55b4e81bd81445140512f14ce156307fd943a86a28c1b->leave($__internal_c2b13245f550dc2306a55b4e81bd81445140512f14ce156307fd943a86a28c1b_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1301acb00e1a129ee99fd1f90bcfecd5f03a2a28d9404e03f4165a273fc226cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1301acb00e1a129ee99fd1f90bcfecd5f03a2a28d9404e03f4165a273fc226cb->enter($__internal_1301acb00e1a129ee99fd1f90bcfecd5f03a2a28d9404e03f4165a273fc226cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_97e4e01d6661deb8b147f7b8d2803dc4b67a4a1cce02557f74b53622b3908906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e4e01d6661deb8b147f7b8d2803dc4b67a4a1cce02557f74b53622b3908906->enter($__internal_97e4e01d6661deb8b147f7b8d2803dc4b67a4a1cce02557f74b53622b3908906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"
                type=\"text/javascript\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/form-repeter/jquery.form-repeater.js"), "html", null, true);
        echo "\"
                type=\"text/javascript\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/scripts/portfolio-1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/magicsuggest/magicsuggest-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/jquery.treegrid.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script>
            \$(document).ready(function (e) {
                \$('li').removeClass('active open selected');
                \$('.Acervos').addClass('active open selected');
                \$('.tree').treegrid();
                \$('.tree').treegrid('collapseAll');

                \$('.cadastrar a').click(function (e) {
                    \$('.amostra-content').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Loader.gif"), "html", null, true);
        echo "\"></div>');

                    e.preventDefault();
                    cadastrarAcervo(\"Cadastrar\", \$(this).attr('title'))
                });

                \$('.main-categoria').click(function(){
                    \$('.xdev, .xdev-main').addClass('hidden')
                    \$('.titulo').append(\$(this).attr('value'))
                    \$('.'+\$(this).attr('value')).removeClass('hidden');
                })

                function cadastrarAcervo(titulo, categoria) {
                    \$.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url: '/acervos/new',
                        data: {
                            form: categoria,
                            tipo: \"novo\"
                        },
                        success: function (template) {
                            \$('.titulo .q').html(titulo);
                            \$('.titulo .p').html(categoria);
                            \$('.amostra-content').html(template.message); //Change the html of the div with the id = \"your_div\"

                            \$('.cadastrarAcervo').submit(function (e) {
                                e.preventDefault();
                                cadastrarAcervo(\"Cadastrar\", \$(this).serialize())
                            })

                        },
                        error: function (e) {
                            alert(e.message)
                            \$('.amostra-content').html(e.responseText)

                        }

                    });
                }

                \$('.categoria').click(function (e) {
                    \$('.amostra-content').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Loader.gif"), "html", null, true);
        echo "\"></div>');
                    var titulo = \$(this).attr('title');
                    var categoria = \$(this).attr('about');
                    e.preventDefault();
                    \$.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url: '/acervos/listarCategoria/' + \$(this).attr('value'),
                        data: {
                            zoom: 1
                        },
                        success: function (response) {
                            template = response;
                            \$('.titulo .q').html(titulo);
                            \$('.titulo .p').html(categoria);
                            \$('.amostra-content').html(template.message); //Change the html of the div with the id = \"your_div\"
                            \$('.amostra div.mt-overlay a').click(function (e) {
                                debugger
                                \$('.amostra-content').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Loader.gif"), "html", null, true);
        echo "\"></div>');

                                \$.ajax({
                                    type: 'POST',
                                    dataType: 'json',
                                    url: '/acervos/'+\$(this).attr('tipo')+'/' + \$(this).attr('value'),
                                    data: {
                                        tipo: \$(this).attr('tipo')
                                    },
                                    success: function (response) {
                                        template = response;
                                        \$('.amostra-content').html(template.message); //Change the html of the div with the id = \"your_div\"
                                    },
                                    error: function (e) {
                                        alert(e)
                                        \$('.amostra-content').html(e.responseText)
                                    }

                                });
                            })
                        },
                        error: function (e) {
                            alert(typeof e)
                            \$('.amostra-content').html(e.responseText)

                        }

                    });
                })
            })
        </script>
    ";
        
        $__internal_97e4e01d6661deb8b147f7b8d2803dc4b67a4a1cce02557f74b53622b3908906->leave($__internal_97e4e01d6661deb8b147f7b8d2803dc4b67a4a1cce02557f74b53622b3908906_prof);

        
        $__internal_1301acb00e1a129ee99fd1f90bcfecd5f03a2a28d9404e03f4165a273fc226cb->leave($__internal_1301acb00e1a129ee99fd1f90bcfecd5f03a2a28d9404e03f4165a273fc226cb_prof);

    }

    // line 121
    public function block_body($context, array $blocks = array())
    {
        $__internal_50f434a3bb2bfb042fb5bb73120f4689a3d828c3e9d3ed655086be98ff0cca70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f434a3bb2bfb042fb5bb73120f4689a3d828c3e9d3ed655086be98ff0cca70->enter($__internal_50f434a3bb2bfb042fb5bb73120f4689a3d828c3e9d3ed655086be98ff0cca70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95e3e6e2da60aba9cbd272011c868b9ecb3e2f9a4b89878125523810fd8baf53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e3e6e2da60aba9cbd272011c868b9ecb3e2f9a4b89878125523810fd8baf53->enter($__internal_95e3e6e2da60aba9cbd272011c868b9ecb3e2f9a4b89878125523810fd8baf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 122
        echo "    <div class=\"container-fluid\">
        <div class=\"page-content\" style=\"min-height: 414px;\">
            <!-- BEGIN BREADCRUMBS -->

            <!-- END BREADCRUMBS -->
            <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
            <div class=\"page-content-container\">
                <div class=\"page-content-row\">
                    <!-- BEGIN PAGE SIDEBAR -->
                    <div class=\"page-sidebar\">
                        <nav class=\"navbar\" role=\"navigation\">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <h3>Minerais</h3>
                            <table class=\"tree nav navbar-nav margin-bottom-35 table table-striped table-bordered table-hover dataTable no-footer\">
                                ";
        // line 137
        $context["num"] = 0;
        // line 138
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new Twig_Error_Runtime('Variable "categorias" does not exist.', 138, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 139
            echo "                                    ";
            $context["num"] = ((isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new Twig_Error_Runtime('Variable "num" does not exist.', 139, $this->getSourceContext()); })()) + 1);
            // line 140
            echo "                                    ";
            $context["nun"] = 0;
            // line 141
            echo "                                    <tr class=\"treegrid-";
            echo twig_escape_filter($this->env, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new Twig_Error_Runtime('Variable "num" does not exist.', 141, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                                        <td class=\"btn btn-default col-md-12\"
                                            style=\"text-align: left; margin-left: -30px !important;\">
                                            ";
            // line 144
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "dependencia", array())) > 0)) {
                // line 145
                echo "                                                <i class=\"icon-folder\"></i>
                                            ";
            }
            // line 147
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "nome", array()), "html", null, true);
            echo "
                                            <span class=\"badge badge-success\">";
            // line 148
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "dependencia", array())), "html", null, true);
            echo "</span>
                                        </td>
                                    </tr>
                                    ";
            // line 151
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "dependencia", array(), "any", true, true)) {
                // line 152
                echo "                                        ";
                $context["filho"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "dependencia", array());
                // line 153
                echo "                                        ";
                $context["nun"] = (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new Twig_Error_Runtime('Variable "num" does not exist.', 153, $this->getSourceContext()); })());
                // line 154
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["filho"]) || array_key_exists("filho", $context) ? $context["filho"] : (function () { throw new Twig_Error_Runtime('Variable "filho" does not exist.', 154, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["filho_a"]) {
                    // line 155
                    echo "                                            ";
                    $context["num"] = ((isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new Twig_Error_Runtime('Variable "num" does not exist.', 155, $this->getSourceContext()); })()) + 1);
                    // line 156
                    echo "                                            <tr class=\"treegrid-";
                    echo twig_escape_filter($this->env, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new Twig_Error_Runtime('Variable "num" does not exist.', 156, $this->getSourceContext()); })()), "html", null, true);
                    echo " treegrid-parent-";
                    echo twig_escape_filter($this->env, (isset($context["nun"]) || array_key_exists("nun", $context) ? $context["nun"] : (function () { throw new Twig_Error_Runtime('Variable "nun" does not exist.', 156, $this->getSourceContext()); })()), "html", null, true);
                    echo "\">
                                                <td class=\"categoria\" value=\"";
                    // line 157
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["filho_a"], "id", array()), "html", null, true);
                    echo "\"
                                                    title=\"";
                    // line 158
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["filho_a"], "nome", array()), "html", null, true);
                    echo "\" about=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "nome", array()), "html", null, true);
                    echo "\">
                                                    <a href=\"#\"> ";
                    // line 159
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["filho_a"], "dependencia", array())) > 0)) {
                        // line 160
                        echo "                                                        <i class=\"icon-folder\">
                                                            ";
                    }
                    // line 162
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["filho_a"], "nome", array()), "html", null, true);
                    echo "</a></td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filho_a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "                                    ";
            }
            // line 166
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                            </table>

                        </nav>
                    </div>
                    <!-- END PAGE SIDEBAR -->
                    <div class=\"page-content-col\">
                        <!-- BEGIN PAGE BASE CONTENT -->
                        <div class=\"row\">

                            <div class=\"col-md-12\">

                                <!-- Begin: life time stats -->
                                <div class=\"portlet light portlet-fit portlet-datatable bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-settings font-dark\"></i>
                                            <span class=\"caption-subject font-dark sbold uppercase titulo\"> <span
                                                        class=\"p\"> </span> Categorias |
                                                        <span class=\"hidden-xs q\"> </span>
                                                    </span>
                                        </div>
                                        <div class=\"actions\">
                                            <div class=\"btn-group  cadastrar\">
                                                <button class=\"btn sbold green\" href=\"javascript:;\"
                                                        data-toggle=\"dropdown\">
                                                    <i class=\"fa fa-plus\"></i>
                                                    <span class=\"hidden-xs\"> Inserir Nova </span>
                                                    <i class=\"fa fa-angle-down\"></i>
                                                </button>
                                                <ul class=\"dropdown-menu pull-right\">
                                                    <li>
                                                        <a href=\"javascript:;\" title=\"Mineiro\"> Mineiro </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:;\" title=\"Rocha\"> Rocha </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:;\" title=\"Fosseis\"> Fosseis </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"btn-group \">
                                                <a class=\"btn red btn-outline\" href=\"javascript:;\"
                                                   data-toggle=\"dropdown\">
                                                    <i class=\"fa fa-share\"></i>
                                                    <span class=\"hidden-xs\"> Tools </span>
                                                    <i class=\"fa fa-angle-down\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu pull-right\">
                                                    <li>
                                                        <a href=\"javascript:;\"> Export to Excel </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:;\"> Export to CSV </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:;\"> Export to XML </a>
                                                    </li>
                                                    <li class=\"divider\"></li>
                                                    <li>
                                                        <a href=\"javascript:;\"> Print Invoices </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body\">
                                        <div class=\"row amostra-content\">

                                            ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new Twig_Error_Runtime('Variable "categorias" does not exist.', 236, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 237
            echo "                                                <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12 xdev-main\">
                                                    <div class=\"portlet light portlet-fit bordered\">
                                                        <div class=\"portlet-body amostra\">
                                                            <div class=\"mt-element-overlay\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"mt-overlay-3\">
                                                                            <img src=\"#\">
                                                                            <div class=\"mt-overlay\">
                                                                                <h2>";
            // line 246
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "nome", array()), "html", null, true);
            echo "
                                                                                    <span class=\"badge badge-success\">";
            // line 247
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "dependencia", array())), "html", null, true);
            echo "</span>
                                                                                </h2>
                                                                                <a class=\"mt-info main-categoria\" href=\"#\" value=\"";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "nome", array()), "html", null, true);
            echo "\" tipo=\"-\">Ver</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
            // line 258
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "dependencia", array(), "any", true, true)) {
                // line 259
                echo "                                                    <div class=\"row col-md-12 ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "nome", array()), "html", null, true);
                echo " hidden xdev\">
                                                    ";
                // line 260
                $context["filho"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "dependencia", array());
                // line 261
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["filho"]) || array_key_exists("filho", $context) ? $context["filho"] : (function () { throw new Twig_Error_Runtime('Variable "filho" does not exist.', 261, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["filho_a"]) {
                    // line 262
                    echo "                                                        <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
                                                            <div class=\"portlet light portlet-fit bordered\">
                                                                <div class=\"portlet-body amostra\">
                                                                    <div class=\"mt-element-overlay\">
                                                                        <div class=\"row\">
                                                                            <div class=\"col-md-12\">
                                                                                <div class=\"mt-overlay-3\">
                                                                                    <img src=\"#\">
                                                                                    <div class=\"mt-overlay\">
                                                                                        <h2>";
                    // line 271
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["filho_a"], "nome", array()), "html", null, true);
                    echo "</h2>
                                                                                        <a class=\"mt-info categoria\"  href=\"#\" value=\"";
                    // line 272
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["filho_a"], "id", array()), "html", null, true);
                    echo "\"
                                                                                           title=\"";
                    // line 273
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["filho_a"], "nome", array()), "html", null, true);
                    echo "\" about=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["categoria"], "nome", array()), "html", null, true);
                    echo "\" tipo=\"-\">Ver</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filho_a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 284
                echo "                                                    </div>
                                                ";
            }
            // line 286
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "                                        </div>
                                    </div>
                                </div>
                                <!-- End: life time stats -->
                            </div>
                        </div>
                        <!-- END PAGE BASE CONTENT -->
                    </div>
                </div>
            </div>
            <!-- END SIDEBAR CONTENT LAYOUT -->
        </div>
        <!-- BEGIN FOOTER -->
        <p class=\"copyright\"> 2016 © Metronic Theme By
            <a target=\"_blank\" href=\"http://keenthemes.com\">Keenthemes</a> &nbsp;|&nbsp;
            <a href=\"http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes\"
               title=\"Purchase Metronic just for 27\$ and get lifetime updates for free\" target=\"_blank\">Purchase
                Metronic!</a>
        </p>
        <a href=\"#index\" class=\"go2top\" style=\"display: none;\">
            <i class=\"icon-arrow-up\"></i>
        </a>
        <!-- END FOOTER -->
    </div>
";
        
        $__internal_95e3e6e2da60aba9cbd272011c868b9ecb3e2f9a4b89878125523810fd8baf53->leave($__internal_95e3e6e2da60aba9cbd272011c868b9ecb3e2f9a4b89878125523810fd8baf53_prof);

        
        $__internal_50f434a3bb2bfb042fb5bb73120f4689a3d828c3e9d3ed655086be98ff0cca70->leave($__internal_50f434a3bb2bfb042fb5bb73120f4689a3d828c3e9d3ed655086be98ff0cca70_prof);

    }

    public function getTemplateName()
    {
        return "amostra/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 287,  515 => 286,  511 => 284,  492 => 273,  488 => 272,  484 => 271,  473 => 262,  468 => 261,  466 => 260,  461 => 259,  459 => 258,  447 => 249,  442 => 247,  438 => 246,  427 => 237,  423 => 236,  352 => 167,  346 => 166,  343 => 165,  333 => 162,  329 => 160,  327 => 159,  321 => 158,  317 => 157,  310 => 156,  307 => 155,  302 => 154,  299 => 153,  296 => 152,  294 => 151,  288 => 148,  283 => 147,  279 => 145,  277 => 144,  270 => 141,  267 => 140,  264 => 139,  259 => 138,  257 => 137,  240 => 122,  231 => 121,  189 => 88,  168 => 70,  123 => 28,  111 => 19,  107 => 18,  103 => 17,  98 => 15,  92 => 13,  83 => 12,  68 => 7,  64 => 6,  60 => 5,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'inicio.html.twig' %}
    {% block css %}
        <link href=\"{{ asset('global/plugins/cubeportfolio/css/cubeportfolio.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('pages/css/portfolio.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('stylesheets/jquery.treegrid.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('stylesheets/jquery.treegrid.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('global/css/magicsuggest-min.css') }}\">
        <style>
            input, textarea, label, button select{border-radius: 0 !important;}
        </style>
    {% endblock %}
    {% block javascripts %}
        <script src=\"{{ asset('global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') }}\"
                type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/form-repeter/jquery.form-repeater.js') }}\"
                type=\"text/javascript\"></script>
        <script src=\"{{ asset('pages/scripts/portfolio-1.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/magicsuggest/magicsuggest-min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('javascripts/jquery.treegrid.js') }}\" type=\"text/javascript\"></script>
        <script>
            \$(document).ready(function (e) {
                \$('li').removeClass('active open selected');
                \$('.Acervos').addClass('active open selected');
                \$('.tree').treegrid();
                \$('.tree').treegrid('collapseAll');

                \$('.cadastrar a').click(function (e) {
                    \$('.amostra-content').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"{{ asset('img/Loader.gif') }}\"></div>');

                    e.preventDefault();
                    cadastrarAcervo(\"Cadastrar\", \$(this).attr('title'))
                });

                \$('.main-categoria').click(function(){
                    \$('.xdev, .xdev-main').addClass('hidden')
                    \$('.titulo').append(\$(this).attr('value'))
                    \$('.'+\$(this).attr('value')).removeClass('hidden');
                })

                function cadastrarAcervo(titulo, categoria) {
                    \$.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url: '/acervos/new',
                        data: {
                            form: categoria,
                            tipo: \"novo\"
                        },
                        success: function (template) {
                            \$('.titulo .q').html(titulo);
                            \$('.titulo .p').html(categoria);
                            \$('.amostra-content').html(template.message); //Change the html of the div with the id = \"your_div\"

                            \$('.cadastrarAcervo').submit(function (e) {
                                e.preventDefault();
                                cadastrarAcervo(\"Cadastrar\", \$(this).serialize())
                            })

                        },
                        error: function (e) {
                            alert(e.message)
                            \$('.amostra-content').html(e.responseText)

                        }

                    });
                }

                \$('.categoria').click(function (e) {
                    \$('.amostra-content').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"{{ asset('img/Loader.gif') }}\"></div>');
                    var titulo = \$(this).attr('title');
                    var categoria = \$(this).attr('about');
                    e.preventDefault();
                    \$.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url: '/acervos/listarCategoria/' + \$(this).attr('value'),
                        data: {
                            zoom: 1
                        },
                        success: function (response) {
                            template = response;
                            \$('.titulo .q').html(titulo);
                            \$('.titulo .p').html(categoria);
                            \$('.amostra-content').html(template.message); //Change the html of the div with the id = \"your_div\"
                            \$('.amostra div.mt-overlay a').click(function (e) {
                                debugger
                                \$('.amostra-content').html('<div class=\"Mnloader col-md-12\" style=\"min-height: 100px; text-align: center\"><img class=\"col-md-2 col-md-offset-5\" src=\"{{ asset('img/Loader.gif') }}\"></div>');

                                \$.ajax({
                                    type: 'POST',
                                    dataType: 'json',
                                    url: '/acervos/'+\$(this).attr('tipo')+'/' + \$(this).attr('value'),
                                    data: {
                                        tipo: \$(this).attr('tipo')
                                    },
                                    success: function (response) {
                                        template = response;
                                        \$('.amostra-content').html(template.message); //Change the html of the div with the id = \"your_div\"
                                    },
                                    error: function (e) {
                                        alert(e)
                                        \$('.amostra-content').html(e.responseText)
                                    }

                                });
                            })
                        },
                        error: function (e) {
                            alert(typeof e)
                            \$('.amostra-content').html(e.responseText)

                        }

                    });
                })
            })
        </script>
    {% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"page-content\" style=\"min-height: 414px;\">
            <!-- BEGIN BREADCRUMBS -->

            <!-- END BREADCRUMBS -->
            <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
            <div class=\"page-content-container\">
                <div class=\"page-content-row\">
                    <!-- BEGIN PAGE SIDEBAR -->
                    <div class=\"page-sidebar\">
                        <nav class=\"navbar\" role=\"navigation\">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <h3>Minerais</h3>
                            <table class=\"tree nav navbar-nav margin-bottom-35 table table-striped table-bordered table-hover dataTable no-footer\">
                                {% set num = 0 %}
                                {% for categoria in categorias %}
                                    {% set num = num + 1 %}
                                    {% set nun = 0 %}
                                    <tr class=\"treegrid-{{ num }}\">
                                        <td class=\"btn btn-default col-md-12\"
                                            style=\"text-align: left; margin-left: -30px !important;\">
                                            {% if categoria.dependencia|length>0 %}
                                                <i class=\"icon-folder\"></i>
                                            {% endif %}
                                            {{ categoria.nome }}
                                            <span class=\"badge badge-success\">{{ categoria.dependencia|length }}</span>
                                        </td>
                                    </tr>
                                    {% if categoria.dependencia is defined %}
                                        {% set filho=categoria.dependencia %}
                                        {% set nun = num %}
                                        {% for filho_a in filho %}
                                            {% set num = num + 1 %}
                                            <tr class=\"treegrid-{{ num }} treegrid-parent-{{ nun }}\">
                                                <td class=\"categoria\" value=\"{{ filho_a.id }}\"
                                                    title=\"{{ filho_a.nome }}\" about=\"{{ categoria.nome }}\">
                                                    <a href=\"#\"> {% if filho_a.dependencia|length>0 %}
                                                        <i class=\"icon-folder\">
                                                            {% endif %}
                                                        {{ filho_a.nome }}</a></td>
                                            </tr>
                                        {% endfor %}
                                    {% endif %}
                                {% endfor %}
                            </table>

                        </nav>
                    </div>
                    <!-- END PAGE SIDEBAR -->
                    <div class=\"page-content-col\">
                        <!-- BEGIN PAGE BASE CONTENT -->
                        <div class=\"row\">

                            <div class=\"col-md-12\">

                                <!-- Begin: life time stats -->
                                <div class=\"portlet light portlet-fit portlet-datatable bordered\">
                                    <div class=\"portlet-title\">
                                        <div class=\"caption\">
                                            <i class=\"icon-settings font-dark\"></i>
                                            <span class=\"caption-subject font-dark sbold uppercase titulo\"> <span
                                                        class=\"p\"> </span> Categorias |
                                                        <span class=\"hidden-xs q\"> </span>
                                                    </span>
                                        </div>
                                        <div class=\"actions\">
                                            <div class=\"btn-group  cadastrar\">
                                                <button class=\"btn sbold green\" href=\"javascript:;\"
                                                        data-toggle=\"dropdown\">
                                                    <i class=\"fa fa-plus\"></i>
                                                    <span class=\"hidden-xs\"> Inserir Nova </span>
                                                    <i class=\"fa fa-angle-down\"></i>
                                                </button>
                                                <ul class=\"dropdown-menu pull-right\">
                                                    <li>
                                                        <a href=\"javascript:;\" title=\"Mineiro\"> Mineiro </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:;\" title=\"Rocha\"> Rocha </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:;\" title=\"Fosseis\"> Fosseis </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"btn-group \">
                                                <a class=\"btn red btn-outline\" href=\"javascript:;\"
                                                   data-toggle=\"dropdown\">
                                                    <i class=\"fa fa-share\"></i>
                                                    <span class=\"hidden-xs\"> Tools </span>
                                                    <i class=\"fa fa-angle-down\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu pull-right\">
                                                    <li>
                                                        <a href=\"javascript:;\"> Export to Excel </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:;\"> Export to CSV </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:;\"> Export to XML </a>
                                                    </li>
                                                    <li class=\"divider\"></li>
                                                    <li>
                                                        <a href=\"javascript:;\"> Print Invoices </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"portlet-body\">
                                        <div class=\"row amostra-content\">

                                            {% for categoria in categorias %}
                                                <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12 xdev-main\">
                                                    <div class=\"portlet light portlet-fit bordered\">
                                                        <div class=\"portlet-body amostra\">
                                                            <div class=\"mt-element-overlay\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-12\">
                                                                        <div class=\"mt-overlay-3\">
                                                                            <img src=\"#\">
                                                                            <div class=\"mt-overlay\">
                                                                                <h2>{{ categoria.nome }}
                                                                                    <span class=\"badge badge-success\">{{ categoria.dependencia|length }}</span>
                                                                                </h2>
                                                                                <a class=\"mt-info main-categoria\" href=\"#\" value=\"{{ categoria.nome }}\" tipo=\"-\">Ver</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {% if categoria.dependencia is defined %}
                                                    <div class=\"row col-md-12 {{ categoria.nome }} hidden xdev\">
                                                    {% set filho=categoria.dependencia %}
                                                    {% for filho_a in filho %}
                                                        <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
                                                            <div class=\"portlet light portlet-fit bordered\">
                                                                <div class=\"portlet-body amostra\">
                                                                    <div class=\"mt-element-overlay\">
                                                                        <div class=\"row\">
                                                                            <div class=\"col-md-12\">
                                                                                <div class=\"mt-overlay-3\">
                                                                                    <img src=\"#\">
                                                                                    <div class=\"mt-overlay\">
                                                                                        <h2>{{ filho_a.nome }}</h2>
                                                                                        <a class=\"mt-info categoria\"  href=\"#\" value=\"{{ filho_a.id }}\"
                                                                                           title=\"{{ filho_a.nome }}\" about=\"{{ categoria.nome }}\" tipo=\"-\">Ver</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    {% endfor %}
                                                    </div>
                                                {% endif %}
                                            {% endfor %}
                                        </div>
                                    </div>
                                </div>
                                <!-- End: life time stats -->
                            </div>
                        </div>
                        <!-- END PAGE BASE CONTENT -->
                    </div>
                </div>
            </div>
            <!-- END SIDEBAR CONTENT LAYOUT -->
        </div>
        <!-- BEGIN FOOTER -->
        <p class=\"copyright\"> 2016 © Metronic Theme By
            <a target=\"_blank\" href=\"http://keenthemes.com\">Keenthemes</a> &nbsp;|&nbsp;
            <a href=\"http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes\"
               title=\"Purchase Metronic just for 27\$ and get lifetime updates for free\" target=\"_blank\">Purchase
                Metronic!</a>
        </p>
        <a href=\"#index\" class=\"go2top\" style=\"display: none;\">
            <i class=\"icon-arrow-up\"></i>
        </a>
        <!-- END FOOTER -->
    </div>
{% endblock %}
", "amostra/index.html.twig", "/var/www/html/hom/app/Resources/views/amostra/index.html.twig");
    }
}

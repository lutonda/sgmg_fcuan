<?php

/* start.html.twig */
class __TwigTemplate_1cbfa7cd571fb52490806f649242b9f90d4723605161a29b1b3827dbf36cc4ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("inicio.html.twig", "start.html.twig", 1);
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
        $__internal_fbf498a040b2439bfdf9a96ccacbea6d7e7c49a1f600ba5b67b2f81901c30a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf498a040b2439bfdf9a96ccacbea6d7e7c49a1f600ba5b67b2f81901c30a22->enter($__internal_fbf498a040b2439bfdf9a96ccacbea6d7e7c49a1f600ba5b67b2f81901c30a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "start.html.twig"));

        $__internal_e59bc74dd9eb907711b1d1cd9a3b3f6db168fe5ece08b90f7a300c473019cd04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59bc74dd9eb907711b1d1cd9a3b3f6db168fe5ece08b90f7a300c473019cd04->enter($__internal_e59bc74dd9eb907711b1d1cd9a3b3f6db168fe5ece08b90f7a300c473019cd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "start.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbf498a040b2439bfdf9a96ccacbea6d7e7c49a1f600ba5b67b2f81901c30a22->leave($__internal_fbf498a040b2439bfdf9a96ccacbea6d7e7c49a1f600ba5b67b2f81901c30a22_prof);

        
        $__internal_e59bc74dd9eb907711b1d1cd9a3b3f6db168fe5ece08b90f7a300c473019cd04->leave($__internal_e59bc74dd9eb907711b1d1cd9a3b3f6db168fe5ece08b90f7a300c473019cd04_prof);

    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        $__internal_bc1c9df1c3e8a079a6ea44e00874a25debd2d205df862f5a945a03779de2e50a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1c9df1c3e8a079a6ea44e00874a25debd2d205df862f5a945a03779de2e50a->enter($__internal_bc1c9df1c3e8a079a6ea44e00874a25debd2d205df862f5a945a03779de2e50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_acf38e9495750725c158ff082395fda8ead458c02fdf3a21cb1e5760eb29096f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf38e9495750725c158ff082395fda8ead458c02fdf3a21cb1e5760eb29096f->enter($__internal_acf38e9495750725c158ff082395fda8ead458c02fdf3a21cb1e5760eb29096f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 3
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        ";
        
        $__internal_acf38e9495750725c158ff082395fda8ead458c02fdf3a21cb1e5760eb29096f->leave($__internal_acf38e9495750725c158ff082395fda8ead458c02fdf3a21cb1e5760eb29096f_prof);

        
        $__internal_bc1c9df1c3e8a079a6ea44e00874a25debd2d205df862f5a945a03779de2e50a->leave($__internal_bc1c9df1c3e8a079a6ea44e00874a25debd2d205df862f5a945a03779de2e50a_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_55affba4f1ca20bd69382ace19076020a106d0deb6c1f25c32d110804962ea37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55affba4f1ca20bd69382ace19076020a106d0deb6c1f25c32d110804962ea37->enter($__internal_55affba4f1ca20bd69382ace19076020a106d0deb6c1f25c32d110804962ea37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_207ae6c85e9b5614296b3594546669a3fe5adbf0cd178ed88ad64702a2cdd0b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207ae6c85e9b5614296b3594546669a3fe5adbf0cd178ed88ad64702a2cdd0b4->enter($__internal_207ae6c85e9b5614296b3594546669a3fe5adbf0cd178ed88ad64702a2cdd0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/scripts/dashboard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("layouts/layout5/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/morris/raphael-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/amcharts/amcharts/amcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/amcharts/amcharts/serial.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/amcharts/amcharts/pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/amcharts/amcharts/radar.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/amcharts/amcharts/themes/light.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/amcharts/amcharts/themes/patterns.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/amcharts/amcharts/themes/chalk.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/amcharts/ammap/ammap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/amcharts/ammap/maps/js/worldLow.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/amcharts/amstockcharts/amstock.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/counterup/jquery.waypoints.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/scripts/dashboard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script>
            \$(document).ready(function(e){
                \$('li').removeClass('active open selected');
                \$('.inicio').addClass('active open selected');
                \$('#calendar').fullCalendar()
            })
        </script>

    ";
        
        $__internal_207ae6c85e9b5614296b3594546669a3fe5adbf0cd178ed88ad64702a2cdd0b4->leave($__internal_207ae6c85e9b5614296b3594546669a3fe5adbf0cd178ed88ad64702a2cdd0b4_prof);

        
        $__internal_55affba4f1ca20bd69382ace19076020a106d0deb6c1f25c32d110804962ea37->leave($__internal_55affba4f1ca20bd69382ace19076020a106d0deb6c1f25c32d110804962ea37_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f095cedeb5feeb48b9f6cd6267398dd860cb8eb6d9819f7baf8646dbe714909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f095cedeb5feeb48b9f6cd6267398dd860cb8eb6d9819f7baf8646dbe714909->enter($__internal_9f095cedeb5feeb48b9f6cd6267398dd860cb8eb6d9819f7baf8646dbe714909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7f2bf303261239bad30bce7e24439f37b7f4075bd16d6e57a85036ce5c73ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f2bf303261239bad30bce7e24439f37b7f4075bd16d6e57a85036ce5c73ffd->enter($__internal_c7f2bf303261239bad30bce7e24439f37b7f4075bd16d6e57a85036ce5c73ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "    ";
        $this->loadTemplate((isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new Twig_Error_Runtime('Variable "pagina" does not exist.', 40, $this->getSourceContext()); })()), "start.html.twig", 40)->display($context);
        
        $__internal_c7f2bf303261239bad30bce7e24439f37b7f4075bd16d6e57a85036ce5c73ffd->leave($__internal_c7f2bf303261239bad30bce7e24439f37b7f4075bd16d6e57a85036ce5c73ffd_prof);

        
        $__internal_9f095cedeb5feeb48b9f6cd6267398dd860cb8eb6d9819f7baf8646dbe714909->leave($__internal_9f095cedeb5feeb48b9f6cd6267398dd860cb8eb6d9819f7baf8646dbe714909_prof);

    }

    public function getTemplateName()
    {
        return "start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 40,  176 => 39,  156 => 28,  152 => 27,  148 => 26,  142 => 23,  138 => 22,  134 => 21,  130 => 20,  126 => 19,  122 => 18,  118 => 17,  114 => 16,  110 => 15,  106 => 14,  102 => 13,  98 => 12,  94 => 11,  90 => 10,  86 => 9,  82 => 8,  77 => 7,  68 => 6,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'inicio.html.twig' %}
    {% block css %}
        <link href=\"{{ asset('global/plugins/morris/morris.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('global/plugins/fullcalendar/fullcalendar.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        {% endblock %}
    {% block javascripts %}
        <script src=\"{{ asset('global/scripts/app.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('pages/scripts/dashboard.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('layouts/layout5/scripts/layout.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/morris/morris.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/morris/raphael-min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/amcharts/amcharts/amcharts.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/amcharts/amcharts/serial.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/amcharts/amcharts/pie.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/amcharts/amcharts/radar.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/amcharts/amcharts/themes/light.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/amcharts/amcharts/themes/patterns.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/amcharts/amcharts/themes/chalk.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/amcharts/ammap/ammap.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/amcharts/ammap/maps/js/worldLow.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/amcharts/amstockcharts/amstock.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/counterup/jquery.counterup.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/counterup/jquery.waypoints.min.js') }}\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=\"{{ asset('pages/scripts/dashboard.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/moment.min.js')}}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('global/plugins/fullcalendar/fullcalendar.min.js')}}\" type=\"text/javascript\"></script>
        <script>
            \$(document).ready(function(e){
                \$('li').removeClass('active open selected');
                \$('.inicio').addClass('active open selected');
                \$('#calendar').fullCalendar()
            })
        </script>

    {% endblock %}

{% block body %}
    {% include pagina %}
{% endblock %}", "start.html.twig", "/var/www/html/hom/app/Resources/views/start.html.twig");
    }
}

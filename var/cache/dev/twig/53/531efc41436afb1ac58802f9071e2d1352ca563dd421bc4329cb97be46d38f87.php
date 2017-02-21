<?php

/* start.html.twig */
class __TwigTemplate_972ff35ba49a6d69d3f6b305171495e8752da6f9462c1397175d1abef3b33262 extends Twig_Template
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
        $__internal_0b2cd3e6eac5c7bde41ea030aa2853681a883241f82aee37ec609214b5c454e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2cd3e6eac5c7bde41ea030aa2853681a883241f82aee37ec609214b5c454e1->enter($__internal_0b2cd3e6eac5c7bde41ea030aa2853681a883241f82aee37ec609214b5c454e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "start.html.twig"));

        $__internal_184383a5974a204ccd4e0cc276ee505f1b668025edf103397109bae03155f875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184383a5974a204ccd4e0cc276ee505f1b668025edf103397109bae03155f875->enter($__internal_184383a5974a204ccd4e0cc276ee505f1b668025edf103397109bae03155f875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "start.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b2cd3e6eac5c7bde41ea030aa2853681a883241f82aee37ec609214b5c454e1->leave($__internal_0b2cd3e6eac5c7bde41ea030aa2853681a883241f82aee37ec609214b5c454e1_prof);

        
        $__internal_184383a5974a204ccd4e0cc276ee505f1b668025edf103397109bae03155f875->leave($__internal_184383a5974a204ccd4e0cc276ee505f1b668025edf103397109bae03155f875_prof);

    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        $__internal_2133c8af552d2a04ec00f39dbff8e32a8dd14b9235999e005a8c71a24c6a6c0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2133c8af552d2a04ec00f39dbff8e32a8dd14b9235999e005a8c71a24c6a6c0a->enter($__internal_2133c8af552d2a04ec00f39dbff8e32a8dd14b9235999e005a8c71a24c6a6c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_c62d50ff259a65b6e6ad3dcd341f1daaf55dce4f562876d1e507518e46228a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62d50ff259a65b6e6ad3dcd341f1daaf55dce4f562876d1e507518e46228a02->enter($__internal_c62d50ff259a65b6e6ad3dcd341f1daaf55dce4f562876d1e507518e46228a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 3
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        ";
        
        $__internal_c62d50ff259a65b6e6ad3dcd341f1daaf55dce4f562876d1e507518e46228a02->leave($__internal_c62d50ff259a65b6e6ad3dcd341f1daaf55dce4f562876d1e507518e46228a02_prof);

        
        $__internal_2133c8af552d2a04ec00f39dbff8e32a8dd14b9235999e005a8c71a24c6a6c0a->leave($__internal_2133c8af552d2a04ec00f39dbff8e32a8dd14b9235999e005a8c71a24c6a6c0a_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd140de2f4df5b7655b99d23cdb491338915a419dcf66b47486758866971feff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd140de2f4df5b7655b99d23cdb491338915a419dcf66b47486758866971feff->enter($__internal_dd140de2f4df5b7655b99d23cdb491338915a419dcf66b47486758866971feff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e62a0b5d4b20973a1070d44b541ab2085f6e8fa8259ccdd8ad53d5c750fe58bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62a0b5d4b20973a1070d44b541ab2085f6e8fa8259ccdd8ad53d5c750fe58bd->enter($__internal_e62a0b5d4b20973a1070d44b541ab2085f6e8fa8259ccdd8ad53d5c750fe58bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e62a0b5d4b20973a1070d44b541ab2085f6e8fa8259ccdd8ad53d5c750fe58bd->leave($__internal_e62a0b5d4b20973a1070d44b541ab2085f6e8fa8259ccdd8ad53d5c750fe58bd_prof);

        
        $__internal_dd140de2f4df5b7655b99d23cdb491338915a419dcf66b47486758866971feff->leave($__internal_dd140de2f4df5b7655b99d23cdb491338915a419dcf66b47486758866971feff_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_be890eb9cf508dab729fc7b24f053356f4cc5a8cb1b61ec270040de6a476d30a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be890eb9cf508dab729fc7b24f053356f4cc5a8cb1b61ec270040de6a476d30a->enter($__internal_be890eb9cf508dab729fc7b24f053356f4cc5a8cb1b61ec270040de6a476d30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_642b996a02f2ba2363670a36fce60b08d40988096423764f6cc4ccec656d0cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642b996a02f2ba2363670a36fce60b08d40988096423764f6cc4ccec656d0cf2->enter($__internal_642b996a02f2ba2363670a36fce60b08d40988096423764f6cc4ccec656d0cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "    ";
        $this->loadTemplate((isset($context["pagina"]) || array_key_exists("pagina", $context) ? $context["pagina"] : (function () { throw new Twig_Error_Runtime('Variable "pagina" does not exist.', 40, $this->getSourceContext()); })()), "start.html.twig", 40)->display($context);
        
        $__internal_642b996a02f2ba2363670a36fce60b08d40988096423764f6cc4ccec656d0cf2->leave($__internal_642b996a02f2ba2363670a36fce60b08d40988096423764f6cc4ccec656d0cf2_prof);

        
        $__internal_be890eb9cf508dab729fc7b24f053356f4cc5a8cb1b61ec270040de6a476d30a->leave($__internal_be890eb9cf508dab729fc7b24f053356f4cc5a8cb1b61ec270040de6a476d30a_prof);

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

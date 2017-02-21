<?php

/* :amostra/api:amostra_lista.html.twig */
class __TwigTemplate_deb16c5534400c25d1f22e5a765c5920ede41083701c5ebc456cf2170373b9b9 extends Twig_Template
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
        $__internal_d820595c31000df44311567f22a5552367cd563a20226308d708b72c16b2a4e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d820595c31000df44311567f22a5552367cd563a20226308d708b72c16b2a4e5->enter($__internal_d820595c31000df44311567f22a5552367cd563a20226308d708b72c16b2a4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:amostra_lista.html.twig"));

        $__internal_bd96010ead35b2c504010a1074fa44fe9f72be8c007b94a261183b3def9adf10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd96010ead35b2c504010a1074fa44fe9f72be8c007b94a261183b3def9adf10->enter($__internal_bd96010ead35b2c504010a1074fa44fe9f72be8c007b94a261183b3def9adf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":amostra/api:amostra_lista.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["amostras"]) || array_key_exists("amostras", $context) ? $context["amostras"] : (function () { throw new Twig_Error_Runtime('Variable "amostras" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["amostra"]) {
            // line 2
            echo "
<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
    <div class=\"portlet light portlet-fit bordered\">

        <div class=\"portlet-body amostra\">
            <div class=\"mt-element-overlay\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"mt-overlay-3\">
                            <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("global/img/acervos/mineiro/" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["amostra"], "nome", array()))) . "-1.jpg")), "html", null, true);
            echo "\">
                            <div class=\"mt-overlay\">
                                <h2>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["amostra"], "nome", array()), "html", null, true);
            echo "</h2>
                                <a class=\"mt-info\" href=\"#\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["amostra"], "id", array()), "html", null, true);
            echo "\" tipo=\"";
            echo twig_escape_filter($this->env, (isset($context["tipo"]) || array_key_exists("tipo", $context) ? $context["tipo"] : (function () { throw new Twig_Error_Runtime('Variable "tipo" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
            echo "\">Ver</a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amostra'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d820595c31000df44311567f22a5552367cd563a20226308d708b72c16b2a4e5->leave($__internal_d820595c31000df44311567f22a5552367cd563a20226308d708b72c16b2a4e5_prof);

        
        $__internal_bd96010ead35b2c504010a1074fa44fe9f72be8c007b94a261183b3def9adf10->leave($__internal_bd96010ead35b2c504010a1074fa44fe9f72be8c007b94a261183b3def9adf10_prof);

    }

    public function getTemplateName()
    {
        return ":amostra/api:amostra_lista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  45 => 13,  40 => 11,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for amostra in amostras %}

<div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
    <div class=\"portlet light portlet-fit bordered\">

        <div class=\"portlet-body amostra\">
            <div class=\"mt-element-overlay\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"mt-overlay-3\">
                            <img src=\"{{ asset('global/img/acervos/mineiro/'~amostra.nome | lower ~'-1.jpg') }}\">
                            <div class=\"mt-overlay\">
                                <h2>{{ amostra.nome }}</h2>
                                <a class=\"mt-info\" href=\"#\" value=\"{{ amostra.id }}\" tipo=\"{{ tipo }}\">Ver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endfor %}", ":amostra/api:amostra_lista.html.twig", "/var/www/html/hom/app/Resources/views/amostra/api/amostra_lista.html.twig");
    }
}

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f622a6c73e515a546f0dee265e99c97d3da1343b0c262db6e4941b3bb12e4f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0821bcd699d9f2922f41da2a7be2e1fbd686f591d0bd28e95d00420cf1b30ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0821bcd699d9f2922f41da2a7be2e1fbd686f591d0bd28e95d00420cf1b30ec->enter($__internal_f0821bcd699d9f2922f41da2a7be2e1fbd686f591d0bd28e95d00420cf1b30ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0236c3f5e1e27308051b9c6ad7ae17e36cabf9a217f75e4575914ea9d6577255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0236c3f5e1e27308051b9c6ad7ae17e36cabf9a217f75e4575914ea9d6577255->enter($__internal_0236c3f5e1e27308051b9c6ad7ae17e36cabf9a217f75e4575914ea9d6577255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0821bcd699d9f2922f41da2a7be2e1fbd686f591d0bd28e95d00420cf1b30ec->leave($__internal_f0821bcd699d9f2922f41da2a7be2e1fbd686f591d0bd28e95d00420cf1b30ec_prof);

        
        $__internal_0236c3f5e1e27308051b9c6ad7ae17e36cabf9a217f75e4575914ea9d6577255->leave($__internal_0236c3f5e1e27308051b9c6ad7ae17e36cabf9a217f75e4575914ea9d6577255_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_008ec38bc9c1b55150f5bf013926258029b01a28aca7fbad6abe6202a9876a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008ec38bc9c1b55150f5bf013926258029b01a28aca7fbad6abe6202a9876a70->enter($__internal_008ec38bc9c1b55150f5bf013926258029b01a28aca7fbad6abe6202a9876a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_21894bd8e7c33c9dfbd3f829a95dad5da291da0a7848c7fdd66328982fd663b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21894bd8e7c33c9dfbd3f829a95dad5da291da0a7848c7fdd66328982fd663b1->enter($__internal_21894bd8e7c33c9dfbd3f829a95dad5da291da0a7848c7fdd66328982fd663b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_21894bd8e7c33c9dfbd3f829a95dad5da291da0a7848c7fdd66328982fd663b1->leave($__internal_21894bd8e7c33c9dfbd3f829a95dad5da291da0a7848c7fdd66328982fd663b1_prof);

        
        $__internal_008ec38bc9c1b55150f5bf013926258029b01a28aca7fbad6abe6202a9876a70->leave($__internal_008ec38bc9c1b55150f5bf013926258029b01a28aca7fbad6abe6202a9876a70_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9342f9160f1d5758ec8cb13f2cf9e0e14c22efed85506965c1af08e1d6d5985a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9342f9160f1d5758ec8cb13f2cf9e0e14c22efed85506965c1af08e1d6d5985a->enter($__internal_9342f9160f1d5758ec8cb13f2cf9e0e14c22efed85506965c1af08e1d6d5985a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0fedb9bf1a353ee14b1ecd66fa5fcaae97310cc393fb4f07aceb11c16427ceef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fedb9bf1a353ee14b1ecd66fa5fcaae97310cc393fb4f07aceb11c16427ceef->enter($__internal_0fedb9bf1a353ee14b1ecd66fa5fcaae97310cc393fb4f07aceb11c16427ceef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_0fedb9bf1a353ee14b1ecd66fa5fcaae97310cc393fb4f07aceb11c16427ceef->leave($__internal_0fedb9bf1a353ee14b1ecd66fa5fcaae97310cc393fb4f07aceb11c16427ceef_prof);

        
        $__internal_9342f9160f1d5758ec8cb13f2cf9e0e14c22efed85506965c1af08e1d6d5985a->leave($__internal_9342f9160f1d5758ec8cb13f2cf9e0e14c22efed85506965c1af08e1d6d5985a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4807b0f278ded289600f2c02031eebe0677dbb54959d02a668c3fa75e05aa9fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4807b0f278ded289600f2c02031eebe0677dbb54959d02a668c3fa75e05aa9fc->enter($__internal_4807b0f278ded289600f2c02031eebe0677dbb54959d02a668c3fa75e05aa9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea3fc091d90078ab606fb6f43c03c7e2965ced623640c8c82d967de54e61f0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3fc091d90078ab606fb6f43c03c7e2965ced623640c8c82d967de54e61f0b7->enter($__internal_ea3fc091d90078ab606fb6f43c03c7e2965ced623640c8c82d967de54e61f0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ea3fc091d90078ab606fb6f43c03c7e2965ced623640c8c82d967de54e61f0b7->leave($__internal_ea3fc091d90078ab606fb6f43c03c7e2965ced623640c8c82d967de54e61f0b7_prof);

        
        $__internal_4807b0f278ded289600f2c02031eebe0677dbb54959d02a668c3fa75e05aa9fc->leave($__internal_4807b0f278ded289600f2c02031eebe0677dbb54959d02a668c3fa75e05aa9fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

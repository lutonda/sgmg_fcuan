<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_8f696b73d31cfee365e3dfb14b3f2fbf17163b3ccfd3147e89dcc1c20fd5df3d extends Twig_Template
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
        $__internal_364798600216c7323b9f20199e8facdc4b20c7620694899bc199f8fc01dad4df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364798600216c7323b9f20199e8facdc4b20c7620694899bc199f8fc01dad4df->enter($__internal_364798600216c7323b9f20199e8facdc4b20c7620694899bc199f8fc01dad4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_4ed44c5c32855af1626544c7f79c2d3435cb66ccf949dc15e07fe70333b9a67a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed44c5c32855af1626544c7f79c2d3435cb66ccf949dc15e07fe70333b9a67a->enter($__internal_4ed44c5c32855af1626544c7f79c2d3435cb66ccf949dc15e07fe70333b9a67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_364798600216c7323b9f20199e8facdc4b20c7620694899bc199f8fc01dad4df->leave($__internal_364798600216c7323b9f20199e8facdc4b20c7620694899bc199f8fc01dad4df_prof);

        
        $__internal_4ed44c5c32855af1626544c7f79c2d3435cb66ccf949dc15e07fe70333b9a67a->leave($__internal_4ed44c5c32855af1626544c7f79c2d3435cb66ccf949dc15e07fe70333b9a67a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_26eada4a8ea7a9608342beebdf7bb239062be96dae4ac006a01f02b0664c0eda extends Twig_Template
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
        $__internal_858fd268b48841a54b10ebe731dc8a075af43249da3c7b3bc7c67554c6cea8a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_858fd268b48841a54b10ebe731dc8a075af43249da3c7b3bc7c67554c6cea8a6->enter($__internal_858fd268b48841a54b10ebe731dc8a075af43249da3c7b3bc7c67554c6cea8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f8f8fbec4f061d6778c0f04a643e002fd0d80c3d6080ba3a07cf047cec8d2a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f8fbec4f061d6778c0f04a643e002fd0d80c3d6080ba3a07cf047cec8d2a8c->enter($__internal_f8f8fbec4f061d6778c0f04a643e002fd0d80c3d6080ba3a07cf047cec8d2a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_858fd268b48841a54b10ebe731dc8a075af43249da3c7b3bc7c67554c6cea8a6->leave($__internal_858fd268b48841a54b10ebe731dc8a075af43249da3c7b3bc7c67554c6cea8a6_prof);

        
        $__internal_f8f8fbec4f061d6778c0f04a643e002fd0d80c3d6080ba3a07cf047cec8d2a8c->leave($__internal_f8f8fbec4f061d6778c0f04a643e002fd0d80c3d6080ba3a07cf047cec8d2a8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

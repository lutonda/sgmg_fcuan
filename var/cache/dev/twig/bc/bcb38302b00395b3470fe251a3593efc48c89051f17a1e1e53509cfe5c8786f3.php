<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0cbb4de55c5c49ec02909d1af96a9de69e93d8107f8a57c9c1cecf6e3a292305 extends Twig_Template
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
        $__internal_0029c362a605cc88af15749d0f1e6a8cfe84a41f20055a6eaf463faee134cc1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0029c362a605cc88af15749d0f1e6a8cfe84a41f20055a6eaf463faee134cc1c->enter($__internal_0029c362a605cc88af15749d0f1e6a8cfe84a41f20055a6eaf463faee134cc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_4091e400985924b43b016e7129013927ba819a70492eacea621955632438f6a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4091e400985924b43b016e7129013927ba819a70492eacea621955632438f6a6->enter($__internal_4091e400985924b43b016e7129013927ba819a70492eacea621955632438f6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0029c362a605cc88af15749d0f1e6a8cfe84a41f20055a6eaf463faee134cc1c->leave($__internal_0029c362a605cc88af15749d0f1e6a8cfe84a41f20055a6eaf463faee134cc1c_prof);

        
        $__internal_4091e400985924b43b016e7129013927ba819a70492eacea621955632438f6a6->leave($__internal_4091e400985924b43b016e7129013927ba819a70492eacea621955632438f6a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_bec3b99b773591b13c990a763babc4d2b660792b571350ecebe5826a7668d62a extends Twig_Template
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
        $__internal_c35e8d60f08804cb4d09a6f504ed574e0dcfa9087d902a9adc4e63d5d0bea5cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35e8d60f08804cb4d09a6f504ed574e0dcfa9087d902a9adc4e63d5d0bea5cd->enter($__internal_c35e8d60f08804cb4d09a6f504ed574e0dcfa9087d902a9adc4e63d5d0bea5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_fceb39327514520214459cbe48640625ccfa7746899a13d0450355c824438952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fceb39327514520214459cbe48640625ccfa7746899a13d0450355c824438952->enter($__internal_fceb39327514520214459cbe48640625ccfa7746899a13d0450355c824438952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c35e8d60f08804cb4d09a6f504ed574e0dcfa9087d902a9adc4e63d5d0bea5cd->leave($__internal_c35e8d60f08804cb4d09a6f504ed574e0dcfa9087d902a9adc4e63d5d0bea5cd_prof);

        
        $__internal_fceb39327514520214459cbe48640625ccfa7746899a13d0450355c824438952->leave($__internal_fceb39327514520214459cbe48640625ccfa7746899a13d0450355c824438952_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}

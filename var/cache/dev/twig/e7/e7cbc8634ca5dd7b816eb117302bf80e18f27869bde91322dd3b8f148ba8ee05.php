<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_23915e2a0d9b277758bbbc4910bd566573e79d443fb0376c2eeedae111bfe8a1 extends Twig_Template
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
        $__internal_59815631096780e34a5b38d92c9f8a70baf6f7ee93cab7c6959d2ffe9bbd2740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59815631096780e34a5b38d92c9f8a70baf6f7ee93cab7c6959d2ffe9bbd2740->enter($__internal_59815631096780e34a5b38d92c9f8a70baf6f7ee93cab7c6959d2ffe9bbd2740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2095b29d2420426a02a3e266dec704436c488f1b6013cf91f75672a0ba2a9622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2095b29d2420426a02a3e266dec704436c488f1b6013cf91f75672a0ba2a9622->enter($__internal_2095b29d2420426a02a3e266dec704436c488f1b6013cf91f75672a0ba2a9622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_59815631096780e34a5b38d92c9f8a70baf6f7ee93cab7c6959d2ffe9bbd2740->leave($__internal_59815631096780e34a5b38d92c9f8a70baf6f7ee93cab7c6959d2ffe9bbd2740_prof);

        
        $__internal_2095b29d2420426a02a3e266dec704436c488f1b6013cf91f75672a0ba2a9622->leave($__internal_2095b29d2420426a02a3e266dec704436c488f1b6013cf91f75672a0ba2a9622_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f8b58d9a403fd7f1aa50b62cdd58f888adee752d72e966ddfd55f1c661208593 extends Twig_Template
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
        $__internal_c24dddeb6ce750ae39a268ad08ca9564fc12b32b178f3b57a8aca7ba7eb9cd2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24dddeb6ce750ae39a268ad08ca9564fc12b32b178f3b57a8aca7ba7eb9cd2a->enter($__internal_c24dddeb6ce750ae39a268ad08ca9564fc12b32b178f3b57a8aca7ba7eb9cd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_306016d20f3b5d07907c7fd11a084362bd994feb7897a9455bcad2ebf2fb554d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306016d20f3b5d07907c7fd11a084362bd994feb7897a9455bcad2ebf2fb554d->enter($__internal_306016d20f3b5d07907c7fd11a084362bd994feb7897a9455bcad2ebf2fb554d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c24dddeb6ce750ae39a268ad08ca9564fc12b32b178f3b57a8aca7ba7eb9cd2a->leave($__internal_c24dddeb6ce750ae39a268ad08ca9564fc12b32b178f3b57a8aca7ba7eb9cd2a_prof);

        
        $__internal_306016d20f3b5d07907c7fd11a084362bd994feb7897a9455bcad2ebf2fb554d->leave($__internal_306016d20f3b5d07907c7fd11a084362bd994feb7897a9455bcad2ebf2fb554d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}

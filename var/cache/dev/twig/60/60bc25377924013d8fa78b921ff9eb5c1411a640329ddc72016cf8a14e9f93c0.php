<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_4ba4eff9e32cf6730ab53ce2f962bfec67a55766aeb448acc3b051a68b482785 extends Twig_Template
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
        $__internal_aceb63936846af30109c477851b00706f2a4dfb91f2a7c36cb7dfc6065892e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aceb63936846af30109c477851b00706f2a4dfb91f2a7c36cb7dfc6065892e2e->enter($__internal_aceb63936846af30109c477851b00706f2a4dfb91f2a7c36cb7dfc6065892e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_d023f8037a9581c98fb59b02a61e062f5940a37c27a6d6ef9c3711d1785bee0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d023f8037a9581c98fb59b02a61e062f5940a37c27a6d6ef9c3711d1785bee0d->enter($__internal_d023f8037a9581c98fb59b02a61e062f5940a37c27a6d6ef9c3711d1785bee0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_aceb63936846af30109c477851b00706f2a4dfb91f2a7c36cb7dfc6065892e2e->leave($__internal_aceb63936846af30109c477851b00706f2a4dfb91f2a7c36cb7dfc6065892e2e_prof);

        
        $__internal_d023f8037a9581c98fb59b02a61e062f5940a37c27a6d6ef9c3711d1785bee0d->leave($__internal_d023f8037a9581c98fb59b02a61e062f5940a37c27a6d6ef9c3711d1785bee0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}

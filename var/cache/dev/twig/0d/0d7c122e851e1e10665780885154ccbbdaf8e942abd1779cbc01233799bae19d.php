<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_6fa2d319849af131b36cd300e53481146c0fc8166ab8b78fe1934ee25d9bbd73 extends Twig_Template
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
        $__internal_82cd431f67094e8fcb4309c5afaa28ce8760a676ea25d83ace6371e2454242f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82cd431f67094e8fcb4309c5afaa28ce8760a676ea25d83ace6371e2454242f6->enter($__internal_82cd431f67094e8fcb4309c5afaa28ce8760a676ea25d83ace6371e2454242f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_dc2e8ea90d14e1fc7e48a6aa11ec2829e23d4b66d3546629896d19af29d9f94f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2e8ea90d14e1fc7e48a6aa11ec2829e23d4b66d3546629896d19af29d9f94f->enter($__internal_dc2e8ea90d14e1fc7e48a6aa11ec2829e23d4b66d3546629896d19af29d9f94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_82cd431f67094e8fcb4309c5afaa28ce8760a676ea25d83ace6371e2454242f6->leave($__internal_82cd431f67094e8fcb4309c5afaa28ce8760a676ea25d83ace6371e2454242f6_prof);

        
        $__internal_dc2e8ea90d14e1fc7e48a6aa11ec2829e23d4b66d3546629896d19af29d9f94f->leave($__internal_dc2e8ea90d14e1fc7e48a6aa11ec2829e23d4b66d3546629896d19af29d9f94f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}

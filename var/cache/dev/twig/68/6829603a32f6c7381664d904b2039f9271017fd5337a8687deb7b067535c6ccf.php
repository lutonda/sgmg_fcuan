<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2b0d5d880a24cc82359c48a6920bd0f10fc52a63912a2883b554ff9c7d88f634 extends Twig_Template
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
        $__internal_5d0d66e926b41ae1dcec0a165e933d6b00d42037297fad11e5710b421ee4e978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d0d66e926b41ae1dcec0a165e933d6b00d42037297fad11e5710b421ee4e978->enter($__internal_5d0d66e926b41ae1dcec0a165e933d6b00d42037297fad11e5710b421ee4e978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e2476892c766beda64c94eda6d825d61a75f8f85750db23ba9e2ea77c5ef4c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2476892c766beda64c94eda6d825d61a75f8f85750db23ba9e2ea77c5ef4c35->enter($__internal_e2476892c766beda64c94eda6d825d61a75f8f85750db23ba9e2ea77c5ef4c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5d0d66e926b41ae1dcec0a165e933d6b00d42037297fad11e5710b421ee4e978->leave($__internal_5d0d66e926b41ae1dcec0a165e933d6b00d42037297fad11e5710b421ee4e978_prof);

        
        $__internal_e2476892c766beda64c94eda6d825d61a75f8f85750db23ba9e2ea77c5ef4c35->leave($__internal_e2476892c766beda64c94eda6d825d61a75f8f85750db23ba9e2ea77c5ef4c35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}

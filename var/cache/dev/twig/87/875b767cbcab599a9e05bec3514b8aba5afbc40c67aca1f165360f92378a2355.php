<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_598e7b25429f8f8d4dc664ad92b043c95c3f0be411c7f13cec64efd1f3b24064 extends Twig_Template
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
        $__internal_33556a40c9953deb4a17ffb8f14a73a71421a44932be2444f508490998bf4545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33556a40c9953deb4a17ffb8f14a73a71421a44932be2444f508490998bf4545->enter($__internal_33556a40c9953deb4a17ffb8f14a73a71421a44932be2444f508490998bf4545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_dac61b92016c19f1696a6976db668931b54719b8cff7fad884c1b1076a787a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac61b92016c19f1696a6976db668931b54719b8cff7fad884c1b1076a787a06->enter($__internal_dac61b92016c19f1696a6976db668931b54719b8cff7fad884c1b1076a787a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_33556a40c9953deb4a17ffb8f14a73a71421a44932be2444f508490998bf4545->leave($__internal_33556a40c9953deb4a17ffb8f14a73a71421a44932be2444f508490998bf4545_prof);

        
        $__internal_dac61b92016c19f1696a6976db668931b54719b8cff7fad884c1b1076a787a06->leave($__internal_dac61b92016c19f1696a6976db668931b54719b8cff7fad884c1b1076a787a06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}

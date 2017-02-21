<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_38d80ba4d22f11ab5771f1a140a698a93081f16c40ec8e323545a08ae123c8e2 extends Twig_Template
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
        $__internal_773a9861749bdf897fcbe3bcbe8cb54272e3d2745efe385325780b2b0f92ff2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_773a9861749bdf897fcbe3bcbe8cb54272e3d2745efe385325780b2b0f92ff2c->enter($__internal_773a9861749bdf897fcbe3bcbe8cb54272e3d2745efe385325780b2b0f92ff2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_94c2987aa0e5a4ab89ab26a06e9b305d05fc3b07895f40aaed1627eced3c8d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c2987aa0e5a4ab89ab26a06e9b305d05fc3b07895f40aaed1627eced3c8d98->enter($__internal_94c2987aa0e5a4ab89ab26a06e9b305d05fc3b07895f40aaed1627eced3c8d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_773a9861749bdf897fcbe3bcbe8cb54272e3d2745efe385325780b2b0f92ff2c->leave($__internal_773a9861749bdf897fcbe3bcbe8cb54272e3d2745efe385325780b2b0f92ff2c_prof);

        
        $__internal_94c2987aa0e5a4ab89ab26a06e9b305d05fc3b07895f40aaed1627eced3c8d98->leave($__internal_94c2987aa0e5a4ab89ab26a06e9b305d05fc3b07895f40aaed1627eced3c8d98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}

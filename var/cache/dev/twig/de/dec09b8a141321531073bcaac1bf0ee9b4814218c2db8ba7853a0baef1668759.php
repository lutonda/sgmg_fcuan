<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1c12fca0c39681d7dc69828c68570ce9d59e0f2e5484fe91e4f181833dde4259 extends Twig_Template
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
        $__internal_8fb9527fdd746906d42344bca72d6cc972a758aaeae754712f48c57b92d59d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb9527fdd746906d42344bca72d6cc972a758aaeae754712f48c57b92d59d09->enter($__internal_8fb9527fdd746906d42344bca72d6cc972a758aaeae754712f48c57b92d59d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8499a7f5153133db09a4c70887a9ab76ab341ea8ba367bd08af01f43a68c9875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8499a7f5153133db09a4c70887a9ab76ab341ea8ba367bd08af01f43a68c9875->enter($__internal_8499a7f5153133db09a4c70887a9ab76ab341ea8ba367bd08af01f43a68c9875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8fb9527fdd746906d42344bca72d6cc972a758aaeae754712f48c57b92d59d09->leave($__internal_8fb9527fdd746906d42344bca72d6cc972a758aaeae754712f48c57b92d59d09_prof);

        
        $__internal_8499a7f5153133db09a4c70887a9ab76ab341ea8ba367bd08af01f43a68c9875->leave($__internal_8499a7f5153133db09a4c70887a9ab76ab341ea8ba367bd08af01f43a68c9875_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

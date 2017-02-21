<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c9e473a0518340c5feb68f2005420e8992a530659a581b33b60e804859f410c1 extends Twig_Template
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
        $__internal_c10ed98677cb8b247eebc394f25399061b827cb981c5fb3bc39bb0971cb50cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10ed98677cb8b247eebc394f25399061b827cb981c5fb3bc39bb0971cb50cc5->enter($__internal_c10ed98677cb8b247eebc394f25399061b827cb981c5fb3bc39bb0971cb50cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ecee80260792310c9420064fe77751c8a2b573bc178583d34c3bde97b0c690e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecee80260792310c9420064fe77751c8a2b573bc178583d34c3bde97b0c690e5->enter($__internal_ecee80260792310c9420064fe77751c8a2b573bc178583d34c3bde97b0c690e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c10ed98677cb8b247eebc394f25399061b827cb981c5fb3bc39bb0971cb50cc5->leave($__internal_c10ed98677cb8b247eebc394f25399061b827cb981c5fb3bc39bb0971cb50cc5_prof);

        
        $__internal_ecee80260792310c9420064fe77751c8a2b573bc178583d34c3bde97b0c690e5->leave($__internal_ecee80260792310c9420064fe77751c8a2b573bc178583d34c3bde97b0c690e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

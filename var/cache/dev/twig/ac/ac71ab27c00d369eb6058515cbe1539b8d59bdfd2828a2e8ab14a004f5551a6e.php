<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_072678389e64e61c64c964fa2734ebcfce4b1c5de5ca601e77b5fa356ed69db4 extends Twig_Template
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
        $__internal_def37ec9c7ce79c00331614f447f53e482ee9dee7f844df9c5c1e2f152fb4276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def37ec9c7ce79c00331614f447f53e482ee9dee7f844df9c5c1e2f152fb4276->enter($__internal_def37ec9c7ce79c00331614f447f53e482ee9dee7f844df9c5c1e2f152fb4276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_a42e0b9c771a5b1f8b73e073a965d75b46f73a33a12143430f6f4f56c0e832a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42e0b9c771a5b1f8b73e073a965d75b46f73a33a12143430f6f4f56c0e832a6->enter($__internal_a42e0b9c771a5b1f8b73e073a965d75b46f73a33a12143430f6f4f56c0e832a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_def37ec9c7ce79c00331614f447f53e482ee9dee7f844df9c5c1e2f152fb4276->leave($__internal_def37ec9c7ce79c00331614f447f53e482ee9dee7f844df9c5c1e2f152fb4276_prof);

        
        $__internal_a42e0b9c771a5b1f8b73e073a965d75b46f73a33a12143430f6f4f56c0e832a6->leave($__internal_a42e0b9c771a5b1f8b73e073a965d75b46f73a33a12143430f6f4f56c0e832a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}

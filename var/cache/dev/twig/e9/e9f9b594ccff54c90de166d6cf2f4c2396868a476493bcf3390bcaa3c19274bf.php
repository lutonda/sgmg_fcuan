<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_08bfde386115dd299aabb6d4f9657fa341293827ad3531d0344ef82ef1b8aa8e extends Twig_Template
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
        $__internal_66d97cc81c97c6c74e7e24249b72e09387610096b96ca60b4c245034dddfc626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66d97cc81c97c6c74e7e24249b72e09387610096b96ca60b4c245034dddfc626->enter($__internal_66d97cc81c97c6c74e7e24249b72e09387610096b96ca60b4c245034dddfc626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_a2f0818c34b34e37303821fc60c050e3934fde5f3d553329c1bd7197d50b2d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f0818c34b34e37303821fc60c050e3934fde5f3d553329c1bd7197d50b2d36->enter($__internal_a2f0818c34b34e37303821fc60c050e3934fde5f3d553329c1bd7197d50b2d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_66d97cc81c97c6c74e7e24249b72e09387610096b96ca60b4c245034dddfc626->leave($__internal_66d97cc81c97c6c74e7e24249b72e09387610096b96ca60b4c245034dddfc626_prof);

        
        $__internal_a2f0818c34b34e37303821fc60c050e3934fde5f3d553329c1bd7197d50b2d36->leave($__internal_a2f0818c34b34e37303821fc60c050e3934fde5f3d553329c1bd7197d50b2d36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_253d3d756f45bdaa51bc5bd18db4e246c7b9e682ef7eda1a4609d4cc0a62e467 extends Twig_Template
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
        $__internal_e0934aa3bf2c7519a217939d052bc58d9f8836c8a039857b3ae9e7a655dddfb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0934aa3bf2c7519a217939d052bc58d9f8836c8a039857b3ae9e7a655dddfb7->enter($__internal_e0934aa3bf2c7519a217939d052bc58d9f8836c8a039857b3ae9e7a655dddfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_030a4d7ebef792bda6bd9ee1faff77ed022eba312306633c86980f28a546f332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030a4d7ebef792bda6bd9ee1faff77ed022eba312306633c86980f28a546f332->enter($__internal_030a4d7ebef792bda6bd9ee1faff77ed022eba312306633c86980f28a546f332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_e0934aa3bf2c7519a217939d052bc58d9f8836c8a039857b3ae9e7a655dddfb7->leave($__internal_e0934aa3bf2c7519a217939d052bc58d9f8836c8a039857b3ae9e7a655dddfb7_prof);

        
        $__internal_030a4d7ebef792bda6bd9ee1faff77ed022eba312306633c86980f28a546f332->leave($__internal_030a4d7ebef792bda6bd9ee1faff77ed022eba312306633c86980f28a546f332_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}

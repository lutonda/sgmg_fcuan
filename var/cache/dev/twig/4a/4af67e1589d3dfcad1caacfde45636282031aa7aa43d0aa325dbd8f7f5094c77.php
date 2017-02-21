<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bb1f99f49ab51ce71b0a458621775534a3fa0a386148fcaeb41657da028551c6 extends Twig_Template
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
        $__internal_2f01518377d7094fc6899f39ed216180186f82c9f1b3a848ad275c5206c9d497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f01518377d7094fc6899f39ed216180186f82c9f1b3a848ad275c5206c9d497->enter($__internal_2f01518377d7094fc6899f39ed216180186f82c9f1b3a848ad275c5206c9d497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a03cad4789e9ae00982979cc249bf14222d701f0b55ac60cb9f005da03fe2db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03cad4789e9ae00982979cc249bf14222d701f0b55ac60cb9f005da03fe2db7->enter($__internal_a03cad4789e9ae00982979cc249bf14222d701f0b55ac60cb9f005da03fe2db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2f01518377d7094fc6899f39ed216180186f82c9f1b3a848ad275c5206c9d497->leave($__internal_2f01518377d7094fc6899f39ed216180186f82c9f1b3a848ad275c5206c9d497_prof);

        
        $__internal_a03cad4789e9ae00982979cc249bf14222d701f0b55ac60cb9f005da03fe2db7->leave($__internal_a03cad4789e9ae00982979cc249bf14222d701f0b55ac60cb9f005da03fe2db7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5bf8d28d8517d5ab10f2f4a61e972d5cb09ce1cecff06a51576d101bc3aeeaa7 extends Twig_Template
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
        $__internal_42cb374acf6a1a255d5c20496530db4ed5bae3af1674d9b75e1f48f390358356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42cb374acf6a1a255d5c20496530db4ed5bae3af1674d9b75e1f48f390358356->enter($__internal_42cb374acf6a1a255d5c20496530db4ed5bae3af1674d9b75e1f48f390358356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_4cee94536d165ae3b195e7e262a797724db4604dc2ed1d768495eafa5f35bc89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cee94536d165ae3b195e7e262a797724db4604dc2ed1d768495eafa5f35bc89->enter($__internal_4cee94536d165ae3b195e7e262a797724db4604dc2ed1d768495eafa5f35bc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_42cb374acf6a1a255d5c20496530db4ed5bae3af1674d9b75e1f48f390358356->leave($__internal_42cb374acf6a1a255d5c20496530db4ed5bae3af1674d9b75e1f48f390358356_prof);

        
        $__internal_4cee94536d165ae3b195e7e262a797724db4604dc2ed1d768495eafa5f35bc89->leave($__internal_4cee94536d165ae3b195e7e262a797724db4604dc2ed1d768495eafa5f35bc89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}

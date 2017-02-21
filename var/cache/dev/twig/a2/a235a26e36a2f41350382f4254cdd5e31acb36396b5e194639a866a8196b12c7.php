<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_83c664472da26bc2a294b545432d0ffec9de0885f24caef37bd081fbe9ca48ba extends Twig_Template
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
        $__internal_5d738f16e161a628729d04a7c7bb11f372f776a411a840179aa75b37cfe23ede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d738f16e161a628729d04a7c7bb11f372f776a411a840179aa75b37cfe23ede->enter($__internal_5d738f16e161a628729d04a7c7bb11f372f776a411a840179aa75b37cfe23ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b788e198a25fa7533a742cd129439816f782094e88e7527489dc7418ca812b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b788e198a25fa7533a742cd129439816f782094e88e7527489dc7418ca812b2d->enter($__internal_b788e198a25fa7533a742cd129439816f782094e88e7527489dc7418ca812b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_5d738f16e161a628729d04a7c7bb11f372f776a411a840179aa75b37cfe23ede->leave($__internal_5d738f16e161a628729d04a7c7bb11f372f776a411a840179aa75b37cfe23ede_prof);

        
        $__internal_b788e198a25fa7533a742cd129439816f782094e88e7527489dc7418ca812b2d->leave($__internal_b788e198a25fa7533a742cd129439816f782094e88e7527489dc7418ca812b2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}

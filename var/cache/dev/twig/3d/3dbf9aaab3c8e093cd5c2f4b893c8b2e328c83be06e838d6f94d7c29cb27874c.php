<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_22f3a65ee96c06e042ec1cd4ab29c8c36d728429225e3dcada3ecda10a89d83e extends Twig_Template
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
        $__internal_b456bef792f343cb0dd575c204c65242843f688d6d60484099d671f07bb14135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b456bef792f343cb0dd575c204c65242843f688d6d60484099d671f07bb14135->enter($__internal_b456bef792f343cb0dd575c204c65242843f688d6d60484099d671f07bb14135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_360029c19e0ea9966546ba90edf92ab35fff73655e8e21435c11fe9b36b4a080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360029c19e0ea9966546ba90edf92ab35fff73655e8e21435c11fe9b36b4a080->enter($__internal_360029c19e0ea9966546ba90edf92ab35fff73655e8e21435c11fe9b36b4a080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b456bef792f343cb0dd575c204c65242843f688d6d60484099d671f07bb14135->leave($__internal_b456bef792f343cb0dd575c204c65242843f688d6d60484099d671f07bb14135_prof);

        
        $__internal_360029c19e0ea9966546ba90edf92ab35fff73655e8e21435c11fe9b36b4a080->leave($__internal_360029c19e0ea9966546ba90edf92ab35fff73655e8e21435c11fe9b36b4a080_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

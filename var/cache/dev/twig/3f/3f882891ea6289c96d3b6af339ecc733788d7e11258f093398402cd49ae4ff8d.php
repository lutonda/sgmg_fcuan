<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_47da10ef6d250fa774b05e53912038d0ea137160a8c1aa2a30f29030a3647d8e extends Twig_Template
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
        $__internal_c593a152fbfff0a311b0a2d74f409230461bb30e1eea7b92fa3645932a540618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c593a152fbfff0a311b0a2d74f409230461bb30e1eea7b92fa3645932a540618->enter($__internal_c593a152fbfff0a311b0a2d74f409230461bb30e1eea7b92fa3645932a540618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_6fa31b331fbe23054c52401a109ff394749c6e96875892962ed95fb58e3e6499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa31b331fbe23054c52401a109ff394749c6e96875892962ed95fb58e3e6499->enter($__internal_6fa31b331fbe23054c52401a109ff394749c6e96875892962ed95fb58e3e6499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c593a152fbfff0a311b0a2d74f409230461bb30e1eea7b92fa3645932a540618->leave($__internal_c593a152fbfff0a311b0a2d74f409230461bb30e1eea7b92fa3645932a540618_prof);

        
        $__internal_6fa31b331fbe23054c52401a109ff394749c6e96875892962ed95fb58e3e6499->leave($__internal_6fa31b331fbe23054c52401a109ff394749c6e96875892962ed95fb58e3e6499_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}

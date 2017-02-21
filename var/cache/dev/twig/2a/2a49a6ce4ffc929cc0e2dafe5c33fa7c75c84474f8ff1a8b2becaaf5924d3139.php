<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_73ba59c048b21ff758756d1dda142f7796c005c4654d50e8ea977e982dc3b0cd extends Twig_Template
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
        $__internal_c8764f143683051e434630dcd7038b7b2ae424c75931368e424fb9c534e87179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8764f143683051e434630dcd7038b7b2ae424c75931368e424fb9c534e87179->enter($__internal_c8764f143683051e434630dcd7038b7b2ae424c75931368e424fb9c534e87179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_d57efe7d3146ff172f695c771d96f1293ea9b60802b6ab160f3f54227c8093f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57efe7d3146ff172f695c771d96f1293ea9b60802b6ab160f3f54227c8093f8->enter($__internal_d57efe7d3146ff172f695c771d96f1293ea9b60802b6ab160f3f54227c8093f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c8764f143683051e434630dcd7038b7b2ae424c75931368e424fb9c534e87179->leave($__internal_c8764f143683051e434630dcd7038b7b2ae424c75931368e424fb9c534e87179_prof);

        
        $__internal_d57efe7d3146ff172f695c771d96f1293ea9b60802b6ab160f3f54227c8093f8->leave($__internal_d57efe7d3146ff172f695c771d96f1293ea9b60802b6ab160f3f54227c8093f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}

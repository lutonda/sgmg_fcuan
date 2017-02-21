<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b4189c65ce478f02648c856d42e2cc116789a3f4bf79bff053b3c51c6d303c06 extends Twig_Template
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
        $__internal_6c5099e531d7db070cd8ceb92d6b65af4107b668d872969f45a8396726e721ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5099e531d7db070cd8ceb92d6b65af4107b668d872969f45a8396726e721ce->enter($__internal_6c5099e531d7db070cd8ceb92d6b65af4107b668d872969f45a8396726e721ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4caa13cf18191792bd403437b47c519ecd6706c1543793497c9410ca8e3a7d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4caa13cf18191792bd403437b47c519ecd6706c1543793497c9410ca8e3a7d1e->enter($__internal_4caa13cf18191792bd403437b47c519ecd6706c1543793497c9410ca8e3a7d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6c5099e531d7db070cd8ceb92d6b65af4107b668d872969f45a8396726e721ce->leave($__internal_6c5099e531d7db070cd8ceb92d6b65af4107b668d872969f45a8396726e721ce_prof);

        
        $__internal_4caa13cf18191792bd403437b47c519ecd6706c1543793497c9410ca8e3a7d1e->leave($__internal_4caa13cf18191792bd403437b47c519ecd6706c1543793497c9410ca8e3a7d1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}

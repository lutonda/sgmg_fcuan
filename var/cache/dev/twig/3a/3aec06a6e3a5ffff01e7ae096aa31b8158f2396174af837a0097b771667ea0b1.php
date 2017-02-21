<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_74a5c5af01cddba92a0ac19d21c290d224776a01b14d02cd817a997e909fd70e extends Twig_Template
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
        $__internal_672d8f31a436b72f68e74d85528eccd422eace897aa91ea060fd245d082d5e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_672d8f31a436b72f68e74d85528eccd422eace897aa91ea060fd245d082d5e1e->enter($__internal_672d8f31a436b72f68e74d85528eccd422eace897aa91ea060fd245d082d5e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_297135b0d739d3e5bf454e66e550c3ab29d4359ed63e16df4484dd0a8cb061b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297135b0d739d3e5bf454e66e550c3ab29d4359ed63e16df4484dd0a8cb061b2->enter($__internal_297135b0d739d3e5bf454e66e550c3ab29d4359ed63e16df4484dd0a8cb061b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_672d8f31a436b72f68e74d85528eccd422eace897aa91ea060fd245d082d5e1e->leave($__internal_672d8f31a436b72f68e74d85528eccd422eace897aa91ea060fd245d082d5e1e_prof);

        
        $__internal_297135b0d739d3e5bf454e66e550c3ab29d4359ed63e16df4484dd0a8cb061b2->leave($__internal_297135b0d739d3e5bf454e66e550c3ab29d4359ed63e16df4484dd0a8cb061b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6ae024c41279d8423aae664a0b86bfcfe567c2110059207f73d44b01d72f73e0 extends Twig_Template
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
        $__internal_c3473ca36d125d3da3e2005c151e3d1a708f74a8302b0bd4717ed38631b8a608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3473ca36d125d3da3e2005c151e3d1a708f74a8302b0bd4717ed38631b8a608->enter($__internal_c3473ca36d125d3da3e2005c151e3d1a708f74a8302b0bd4717ed38631b8a608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_fb3f1cca8b7d27a435b53bb931405dd25d1e9b5e6eb0d8bd4d4c18f74dbc11ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3f1cca8b7d27a435b53bb931405dd25d1e9b5e6eb0d8bd4d4c18f74dbc11ea->enter($__internal_fb3f1cca8b7d27a435b53bb931405dd25d1e9b5e6eb0d8bd4d4c18f74dbc11ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c3473ca36d125d3da3e2005c151e3d1a708f74a8302b0bd4717ed38631b8a608->leave($__internal_c3473ca36d125d3da3e2005c151e3d1a708f74a8302b0bd4717ed38631b8a608_prof);

        
        $__internal_fb3f1cca8b7d27a435b53bb931405dd25d1e9b5e6eb0d8bd4d4c18f74dbc11ea->leave($__internal_fb3f1cca8b7d27a435b53bb931405dd25d1e9b5e6eb0d8bd4d4c18f74dbc11ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}

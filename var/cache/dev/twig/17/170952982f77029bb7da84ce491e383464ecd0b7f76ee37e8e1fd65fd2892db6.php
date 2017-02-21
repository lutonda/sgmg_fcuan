<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_7b58ba1fd522ff0de8f186da8683ee1241a935d60475a869c88fc2a107274426 extends Twig_Template
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
        $__internal_192384131e6a651ba16ec0b311e0ef945a081242eacd2c488ca0f1e0b686b85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192384131e6a651ba16ec0b311e0ef945a081242eacd2c488ca0f1e0b686b85f->enter($__internal_192384131e6a651ba16ec0b311e0ef945a081242eacd2c488ca0f1e0b686b85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_13868a7d79301011838149508278d8ba401a84a3ff099420751d315dba99d14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13868a7d79301011838149508278d8ba401a84a3ff099420751d315dba99d14c->enter($__internal_13868a7d79301011838149508278d8ba401a84a3ff099420751d315dba99d14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_192384131e6a651ba16ec0b311e0ef945a081242eacd2c488ca0f1e0b686b85f->leave($__internal_192384131e6a651ba16ec0b311e0ef945a081242eacd2c488ca0f1e0b686b85f_prof);

        
        $__internal_13868a7d79301011838149508278d8ba401a84a3ff099420751d315dba99d14c->leave($__internal_13868a7d79301011838149508278d8ba401a84a3ff099420751d315dba99d14c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}

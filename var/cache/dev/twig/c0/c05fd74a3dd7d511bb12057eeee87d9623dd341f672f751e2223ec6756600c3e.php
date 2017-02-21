<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e96a5aa1e2f7381797e8d17d187ed19e5e2bafc1b940f42578421aaf124175ff extends Twig_Template
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
        $__internal_020d56dc4507e26c9ca282e252ba5d36fe25f98a633f084a36143a3265afc989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_020d56dc4507e26c9ca282e252ba5d36fe25f98a633f084a36143a3265afc989->enter($__internal_020d56dc4507e26c9ca282e252ba5d36fe25f98a633f084a36143a3265afc989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5d1b614e1a4393f8d263bae1d2a7f469182d91b0dc4f12620fb9dc77c80f95a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1b614e1a4393f8d263bae1d2a7f469182d91b0dc4f12620fb9dc77c80f95a5->enter($__internal_5d1b614e1a4393f8d263bae1d2a7f469182d91b0dc4f12620fb9dc77c80f95a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_020d56dc4507e26c9ca282e252ba5d36fe25f98a633f084a36143a3265afc989->leave($__internal_020d56dc4507e26c9ca282e252ba5d36fe25f98a633f084a36143a3265afc989_prof);

        
        $__internal_5d1b614e1a4393f8d263bae1d2a7f469182d91b0dc4f12620fb9dc77c80f95a5->leave($__internal_5d1b614e1a4393f8d263bae1d2a7f469182d91b0dc4f12620fb9dc77c80f95a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

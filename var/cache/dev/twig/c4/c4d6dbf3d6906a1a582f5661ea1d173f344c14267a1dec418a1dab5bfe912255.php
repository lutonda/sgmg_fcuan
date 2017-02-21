<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0df2babeab86c70fe513f539f60e4fcccf6b8453a8fc36215f2065922b825e70 extends Twig_Template
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
        $__internal_ab5e59e44de67843491253c22473630838ddf5ddbadbdcfed085f08489fde774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab5e59e44de67843491253c22473630838ddf5ddbadbdcfed085f08489fde774->enter($__internal_ab5e59e44de67843491253c22473630838ddf5ddbadbdcfed085f08489fde774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_bc29b1c1f4e938503a528a852cf26965303376a5885b305b8c2ea6eb2021f81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc29b1c1f4e938503a528a852cf26965303376a5885b305b8c2ea6eb2021f81f->enter($__internal_bc29b1c1f4e938503a528a852cf26965303376a5885b305b8c2ea6eb2021f81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ab5e59e44de67843491253c22473630838ddf5ddbadbdcfed085f08489fde774->leave($__internal_ab5e59e44de67843491253c22473630838ddf5ddbadbdcfed085f08489fde774_prof);

        
        $__internal_bc29b1c1f4e938503a528a852cf26965303376a5885b305b8c2ea6eb2021f81f->leave($__internal_bc29b1c1f4e938503a528a852cf26965303376a5885b305b8c2ea6eb2021f81f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

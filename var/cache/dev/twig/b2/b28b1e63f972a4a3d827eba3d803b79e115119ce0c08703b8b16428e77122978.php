<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6c5bc807a5f0915bb481b48ff9b5d01f326abccf50d46f2fce9a85e7d1e70c65 extends Twig_Template
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
        $__internal_203eae50400a40d4474b6d94a328940fdc1fd75ad15b7240a3a749354e13140c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_203eae50400a40d4474b6d94a328940fdc1fd75ad15b7240a3a749354e13140c->enter($__internal_203eae50400a40d4474b6d94a328940fdc1fd75ad15b7240a3a749354e13140c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_cbf261eefe139089156c3e7d427f2db63e83d92e7e3ad8256800dec3578a9b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf261eefe139089156c3e7d427f2db63e83d92e7e3ad8256800dec3578a9b7b->enter($__internal_cbf261eefe139089156c3e7d427f2db63e83d92e7e3ad8256800dec3578a9b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_203eae50400a40d4474b6d94a328940fdc1fd75ad15b7240a3a749354e13140c->leave($__internal_203eae50400a40d4474b6d94a328940fdc1fd75ad15b7240a3a749354e13140c_prof);

        
        $__internal_cbf261eefe139089156c3e7d427f2db63e83d92e7e3ad8256800dec3578a9b7b->leave($__internal_cbf261eefe139089156c3e7d427f2db63e83d92e7e3ad8256800dec3578a9b7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}

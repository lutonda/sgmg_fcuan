<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e93e244241aa74f7b1bb9c64640364470f0d5fc5547f4c97ee98c8ef2fa5906b extends Twig_Template
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
        $__internal_fee84e396f2048d0c22be202c9affda8978cf87b1e66f107da2c14a6fd8e2d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee84e396f2048d0c22be202c9affda8978cf87b1e66f107da2c14a6fd8e2d91->enter($__internal_fee84e396f2048d0c22be202c9affda8978cf87b1e66f107da2c14a6fd8e2d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b3d5c9529466ce1141982665915be3be730a1b590bb2efb3e2d521ca5ee668d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d5c9529466ce1141982665915be3be730a1b590bb2efb3e2d521ca5ee668d0->enter($__internal_b3d5c9529466ce1141982665915be3be730a1b590bb2efb3e2d521ca5ee668d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_fee84e396f2048d0c22be202c9affda8978cf87b1e66f107da2c14a6fd8e2d91->leave($__internal_fee84e396f2048d0c22be202c9affda8978cf87b1e66f107da2c14a6fd8e2d91_prof);

        
        $__internal_b3d5c9529466ce1141982665915be3be730a1b590bb2efb3e2d521ca5ee668d0->leave($__internal_b3d5c9529466ce1141982665915be3be730a1b590bb2efb3e2d521ca5ee668d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3d9e856520896d80a5c6d803fdc54da9f88b9ad9bc81e702b9a69888dc0f15d2 extends Twig_Template
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
        $__internal_c0bfea1d488013339b3f52d15bd720e85b31d82719657d455475eedbd49de0a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0bfea1d488013339b3f52d15bd720e85b31d82719657d455475eedbd49de0a4->enter($__internal_c0bfea1d488013339b3f52d15bd720e85b31d82719657d455475eedbd49de0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_176ef4d736fb9f2836cf5bcbbf285bfbeed02ded974271175768b17d4d54bb3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176ef4d736fb9f2836cf5bcbbf285bfbeed02ded974271175768b17d4d54bb3a->enter($__internal_176ef4d736fb9f2836cf5bcbbf285bfbeed02ded974271175768b17d4d54bb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c0bfea1d488013339b3f52d15bd720e85b31d82719657d455475eedbd49de0a4->leave($__internal_c0bfea1d488013339b3f52d15bd720e85b31d82719657d455475eedbd49de0a4_prof);

        
        $__internal_176ef4d736fb9f2836cf5bcbbf285bfbeed02ded974271175768b17d4d54bb3a->leave($__internal_176ef4d736fb9f2836cf5bcbbf285bfbeed02ded974271175768b17d4d54bb3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}

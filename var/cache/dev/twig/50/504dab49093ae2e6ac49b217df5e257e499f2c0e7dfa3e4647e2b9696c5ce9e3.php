<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_95dbbded481a5c1142dd486faae7ea4679dd00e4ba17d38ee16dc820f1a4ea17 extends Twig_Template
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
        $__internal_88fea9712d5fafd4f8fbb3e09d4c9d8860fbe5b22845a9566d3be79b7d1723ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88fea9712d5fafd4f8fbb3e09d4c9d8860fbe5b22845a9566d3be79b7d1723ed->enter($__internal_88fea9712d5fafd4f8fbb3e09d4c9d8860fbe5b22845a9566d3be79b7d1723ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4f6e76d5c633b3cea4e16d12e078bb75cc7b7fb1e5646936aa898fbdfb84365a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6e76d5c633b3cea4e16d12e078bb75cc7b7fb1e5646936aa898fbdfb84365a->enter($__internal_4f6e76d5c633b3cea4e16d12e078bb75cc7b7fb1e5646936aa898fbdfb84365a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_88fea9712d5fafd4f8fbb3e09d4c9d8860fbe5b22845a9566d3be79b7d1723ed->leave($__internal_88fea9712d5fafd4f8fbb3e09d4c9d8860fbe5b22845a9566d3be79b7d1723ed_prof);

        
        $__internal_4f6e76d5c633b3cea4e16d12e078bb75cc7b7fb1e5646936aa898fbdfb84365a->leave($__internal_4f6e76d5c633b3cea4e16d12e078bb75cc7b7fb1e5646936aa898fbdfb84365a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}

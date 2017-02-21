<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_23bd7b5a32686d02c57ce5008eefc28293dd1dc1c2a1b7319b0807a46ac9af3c extends Twig_Template
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
        $__internal_8ddae870b68703edff861e17d049502a1cc2179a604f5ac8abf05a89fad0aac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ddae870b68703edff861e17d049502a1cc2179a604f5ac8abf05a89fad0aac0->enter($__internal_8ddae870b68703edff861e17d049502a1cc2179a604f5ac8abf05a89fad0aac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_4202a5bde61ee0c4dd9f7edb829fababb2a63f795ee0db458f66ac917490690c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4202a5bde61ee0c4dd9f7edb829fababb2a63f795ee0db458f66ac917490690c->enter($__internal_4202a5bde61ee0c4dd9f7edb829fababb2a63f795ee0db458f66ac917490690c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8ddae870b68703edff861e17d049502a1cc2179a604f5ac8abf05a89fad0aac0->leave($__internal_8ddae870b68703edff861e17d049502a1cc2179a604f5ac8abf05a89fad0aac0_prof);

        
        $__internal_4202a5bde61ee0c4dd9f7edb829fababb2a63f795ee0db458f66ac917490690c->leave($__internal_4202a5bde61ee0c4dd9f7edb829fababb2a63f795ee0db458f66ac917490690c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

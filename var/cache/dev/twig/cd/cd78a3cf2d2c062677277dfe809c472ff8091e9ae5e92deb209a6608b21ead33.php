<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8162e324f6e8bfb137908f5729c55ae47fa8ba8615eb63d29456769a793a52d4 extends Twig_Template
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
        $__internal_2aefaaf9ca5eea1dc2829e3e39ceb121b6618d32f0e89cebd47f8fd691d73167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aefaaf9ca5eea1dc2829e3e39ceb121b6618d32f0e89cebd47f8fd691d73167->enter($__internal_2aefaaf9ca5eea1dc2829e3e39ceb121b6618d32f0e89cebd47f8fd691d73167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_a411fe07899226f2891e4f68381b1bc69618b9d50538f596f06301298a85b300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a411fe07899226f2891e4f68381b1bc69618b9d50538f596f06301298a85b300->enter($__internal_a411fe07899226f2891e4f68381b1bc69618b9d50538f596f06301298a85b300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2aefaaf9ca5eea1dc2829e3e39ceb121b6618d32f0e89cebd47f8fd691d73167->leave($__internal_2aefaaf9ca5eea1dc2829e3e39ceb121b6618d32f0e89cebd47f8fd691d73167_prof);

        
        $__internal_a411fe07899226f2891e4f68381b1bc69618b9d50538f596f06301298a85b300->leave($__internal_a411fe07899226f2891e4f68381b1bc69618b9d50538f596f06301298a85b300_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}

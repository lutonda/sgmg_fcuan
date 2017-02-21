<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_379190c5cdf040bfb89282dcbcc509c22f6cdf7960001c4656191e5c84cc28c3 extends Twig_Template
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
        $__internal_dba31171983f15a21511479edef5b7f9b64ce7db79e4ec701c0fa412accf1fd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba31171983f15a21511479edef5b7f9b64ce7db79e4ec701c0fa412accf1fd2->enter($__internal_dba31171983f15a21511479edef5b7f9b64ce7db79e4ec701c0fa412accf1fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a6af1b64fc231e4b0fb28c21b2f2d35ab1081e41374d8feb666f67d1dabfef27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6af1b64fc231e4b0fb28c21b2f2d35ab1081e41374d8feb666f67d1dabfef27->enter($__internal_a6af1b64fc231e4b0fb28c21b2f2d35ab1081e41374d8feb666f67d1dabfef27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_dba31171983f15a21511479edef5b7f9b64ce7db79e4ec701c0fa412accf1fd2->leave($__internal_dba31171983f15a21511479edef5b7f9b64ce7db79e4ec701c0fa412accf1fd2_prof);

        
        $__internal_a6af1b64fc231e4b0fb28c21b2f2d35ab1081e41374d8feb666f67d1dabfef27->leave($__internal_a6af1b64fc231e4b0fb28c21b2f2d35ab1081e41374d8feb666f67d1dabfef27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/hom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}

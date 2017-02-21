<?php

/* ::login.html.twig */
class __TwigTemplate_f47eedba76e4559dfaa66eec176bdac68ec9a967e7cc10f0ddf5fc365a12d099 extends Twig_Template
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
        $__internal_872c9997905b80fd1ec38e67940d82c95091202a704ff695c89d2ca59d491104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872c9997905b80fd1ec38e67940d82c95091202a704ff695c89d2ca59d491104->enter($__internal_872c9997905b80fd1ec38e67940d82c95091202a704ff695c89d2ca59d491104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::login.html.twig"));

        $__internal_8ab324bcfa7125cdebb833508d8aad700d08e75eadca99c51e0c26fbe4a3654b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab324bcfa7125cdebb833508d8aad700d08e75eadca99c51e0c26fbe4a3654b->enter($__internal_8ab324bcfa7125cdebb833508d8aad700d08e75eadca99c51e0c26fbe4a3654b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>
      Login - Dashboard
    </title>
    \t<link href=\"http://fonts.googleapis.com/css?family=Lato:100,300,400,700\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/font-awesome.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/hightop-font.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheets/style.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<script src=\"http://code.jquery.com/jquery-1.10.2.min.js\" type=\"text/javascript\"></script>
\t<script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/modernizr.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascripts/main.js"), "html", null, true);
        echo "'\" type=\"text/javascript\"></script>
    <meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\">
  </head>
  <body class=\"login2\">
    <!-- Login Screen -->
    <div class=\"login-wrapper\">

        ";
        // line 23
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 23, $this->getSourceContext()); })())) {
            // line 24
            echo "            <span class=\"badge badge-negative\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 24, $this->getSourceContext()); })()), "message", array()), "html", null, true);
            echo " <i class=\"ficon-down-dir f-16\"></i></span>
        ";
        }
        // line 26
        echo "      <form method=\"POST\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" name=\"login_form\">
        <div class=\"form-group\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
                <i class=\"fa fa-envelope\"></i></span><input class=\"form-control\" placeholder=\"Username or Email\" type=\"text\" name=\"username\">
          </div>
        </div>
        <div class=\"form-group\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
                <i class=\"fa fa-lock\"></i></span><input class=\"form-control\" placeholder=\"Password\" type=\"text\" name=\"password\">
          </div>
        </div>
        <a class=\"pull-right\" href=\"login2.html#\">Forgot password?</a>
        <div class=\"text-left\">
          <label class=\"checkbox\"><input type=\"checkbox\"><span>Keep me logged in</span></label>
        </div>
        <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"Log in\">

      </form>
    </div>
    <!-- End Login Screen -->
  </body>
</html>
";
        
        $__internal_872c9997905b80fd1ec38e67940d82c95091202a704ff695c89d2ca59d491104->leave($__internal_872c9997905b80fd1ec38e67940d82c95091202a704ff695c89d2ca59d491104_prof);

        
        $__internal_8ab324bcfa7125cdebb833508d8aad700d08e75eadca99c51e0c26fbe4a3654b->leave($__internal_8ab324bcfa7125cdebb833508d8aad700d08e75eadca99c51e0c26fbe4a3654b_prof);

    }

    public function getTemplateName()
    {
        return "::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  72 => 24,  70 => 23,  60 => 16,  56 => 15,  52 => 14,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <title>
      Login - Dashboard
    </title>
    \t<link href=\"http://fonts.googleapis.com/css?family=Lato:100,300,400,700\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"{{ asset('stylesheets/bootstrap.min.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"{{ asset('stylesheets/font-awesome.min.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"{{ asset('stylesheets/hightop-font.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"{{ asset('stylesheets/style.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
\t<script src=\"http://code.jquery.com/jquery-1.10.2.min.js\" type=\"text/javascript\"></script>
\t<script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('javascripts/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('javascripts/modernizr.custom.js') }}\" type=\"text/javascript\"></script>
\t<script src=\"{{ asset('javascripts/main.js') }}'\" type=\"text/javascript\"></script>
    <meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\">
  </head>
  <body class=\"login2\">
    <!-- Login Screen -->
    <div class=\"login-wrapper\">

        {% if error %}
            <span class=\"badge badge-negative\"> {{ error.message }} <i class=\"ficon-down-dir f-16\"></i></span>
        {% endif %}
      <form method=\"POST\" action=\"{{ path('login_check') }}\" name=\"login_form\">
        <div class=\"form-group\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
                <i class=\"fa fa-envelope\"></i></span><input class=\"form-control\" placeholder=\"Username or Email\" type=\"text\" name=\"username\">
          </div>
        </div>
        <div class=\"form-group\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
                <i class=\"fa fa-lock\"></i></span><input class=\"form-control\" placeholder=\"Password\" type=\"text\" name=\"password\">
          </div>
        </div>
        <a class=\"pull-right\" href=\"login2.html#\">Forgot password?</a>
        <div class=\"text-left\">
          <label class=\"checkbox\"><input type=\"checkbox\"><span>Keep me logged in</span></label>
        </div>
        <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"Log in\">

      </form>
    </div>
    <!-- End Login Screen -->
  </body>
</html>
", "::login.html.twig", "/var/www/html/hom/app/Resources/views/login.html.twig");
    }
}

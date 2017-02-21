<?php

/* :SYS:resetpassword.html.twig */
class __TwigTemplate_c49c32f0b0f177daa2cfdb105ea5fc68e4d74ed1990c6f155a26d58b6d15db5f extends Twig_Template
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
        $__internal_c4270a9ad7a31f8332bb597fd8ba067c758bf9a2e885a93f4910170da4fb8f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4270a9ad7a31f8332bb597fd8ba067c758bf9a2e885a93f4910170da4fb8f5f->enter($__internal_c4270a9ad7a31f8332bb597fd8ba067c758bf9a2e885a93f4910170da4fb8f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":SYS:resetpassword.html.twig"));

        $__internal_7b6c535a1164153b533dbc1349d680980509ebcf60fa02f71eac361ce67b8e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6c535a1164153b533dbc1349d680980509ebcf60fa02f71eac361ce67b8e6a->enter($__internal_7b6c535a1164153b533dbc1349d680980509ebcf60fa02f71eac361ce67b8e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":SYS:resetpassword.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- BEGIN HEAD -->


<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_5/page_user_login_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2016 19:22:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
    <meta charset=\"utf-8\" />
    <title>Metronic Admin Theme #5 | User Login 1</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta content=\"Preview page of Metronic Admin Theme #5 for \" name=\"description\" />
    <meta content=\"\" name=\"author\" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/css/login.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
<!-- END HEAD -->

<body class=\" login\">
<!-- BEGIN LOGO -->
<div class=\"logo\">
    <a href=\"index.html\">
        <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/img/logo-big.png"), "html", null, true);
        echo "\" alt=\"\" /> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class=\"content\">
    <!-- BEGIN LOGIN FORM -->
    <form class=\"login-form\" action=\"http://keenthemes.com/preview/metronic/theme/admin_5/index.html\" method=\"post\">
        <h3 class=\"form-title font-green\">Redefinir palavra passe</h3>
        <div class=\"alert alert-danger display-hide\">
            <button class=\"close\" data-close=\"alert\"></button>
            <span> Enter any username and password. </span>
        </div>
        <div class=\"form-group\">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class=\"control-label visible-ie8 visible-ie9\">Insira nova Palavra passe</label>
            <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Insira nova Palavra passe\" name=\"username\" /> </div>
        <div class=\"form-group\">
            <label class=\"control-label visible-ie8 visible-ie9\">Confirme a nova Palavra passe</label>
            <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Confirme a nova Palavra passe\" name=\"password\" /> </div>
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn green uppercase\">Redefinir</button>
        </div>
        <div class=\"create-account\">
            <p>
                <a href=\"javascript:;\" id=\"register-btn\" class=\"uppercase\"></a>
            </p>
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class=\"forget-form\" action=\"http://keenthemes.com/preview/metronic/theme/admin_5/index.html\" method=\"post\">
        <h3 class=\"font-green\">Forget Password ?</h3>
        <p> Enter your e-mail address below to reset your password. </p>
        <div class=\"form-group\">
            <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\" name=\"email\" /> </div>
        <div class=\"form-actions\">
            <button type=\"button\" id=\"back-btn\" class=\"btn green btn-outline\">Back</button>
            <button type=\"submit\" class=\"btn btn-success uppercase pull-right\">Submit</button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <!-- END REGISTRATION FORM -->
</div>
<div class=\"copyright\"> 2014 © Metronic. Admin Dashboard Template. </div>
<!--[if lt IE 9]>
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/ie8.fix.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-validation/js/additional-methods.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/scripts/login.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
<!-- Google Code for Universal Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-37564768-1', 'auto');
    ga('send', 'pageview');
</script>
<!-- End -->

<!-- Google Tag Manager -->
<noscript><iframe src=\"http://www.googletagmanager.com/ns.html?id=GTM-W276BJ\"
                  height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W276BJ');</script>
<!-- End -->
</body>



<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_5/page_user_login_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2016 19:22:35 GMT -->
</html>";
        
        $__internal_c4270a9ad7a31f8332bb597fd8ba067c758bf9a2e885a93f4910170da4fb8f5f->leave($__internal_c4270a9ad7a31f8332bb597fd8ba067c758bf9a2e885a93f4910170da4fb8f5f_prof);

        
        $__internal_7b6c535a1164153b533dbc1349d680980509ebcf60fa02f71eac361ce67b8e6a->leave($__internal_7b6c535a1164153b533dbc1349d680980509ebcf60fa02f71eac361ce67b8e6a_prof);

    }

    public function getTemplateName()
    {
        return ":SYS:resetpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 127,  216 => 124,  210 => 121,  206 => 120,  202 => 119,  196 => 116,  192 => 115,  188 => 114,  184 => 113,  180 => 112,  176 => 111,  170 => 108,  166 => 107,  162 => 106,  113 => 60,  99 => 49,  93 => 46,  89 => 45,  83 => 42,  79 => 41,  73 => 38,  69 => 37,  65 => 36,  61 => 35,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- BEGIN HEAD -->


<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_5/page_user_login_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2016 19:22:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
    <meta charset=\"utf-8\" />
    <title>Metronic Admin Theme #5 | User Login 1</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta content=\"Preview page of Metronic Admin Theme #5 for \" name=\"description\" />
    <meta content=\"\" name=\"author\" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('global/plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('global/plugins/simple-line-icons/simple-line-icons.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('global/plugins/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href=\"{{ asset('global/plugins/select2/css/select2.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('global/plugins/select2/css/select2-bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href=\"{{ asset('global/css/components.min.css')}}\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"{{ asset('global/css/plugins.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href=\"{{ asset('pages/css/login.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
<!-- END HEAD -->

<body class=\" login\">
<!-- BEGIN LOGO -->
<div class=\"logo\">
    <a href=\"index.html\">
        <img src=\"{{ asset('pages/img/logo-big.png') }}\" alt=\"\" /> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class=\"content\">
    <!-- BEGIN LOGIN FORM -->
    <form class=\"login-form\" action=\"http://keenthemes.com/preview/metronic/theme/admin_5/index.html\" method=\"post\">
        <h3 class=\"form-title font-green\">Redefinir palavra passe</h3>
        <div class=\"alert alert-danger display-hide\">
            <button class=\"close\" data-close=\"alert\"></button>
            <span> Enter any username and password. </span>
        </div>
        <div class=\"form-group\">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class=\"control-label visible-ie8 visible-ie9\">Insira nova Palavra passe</label>
            <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Insira nova Palavra passe\" name=\"username\" /> </div>
        <div class=\"form-group\">
            <label class=\"control-label visible-ie8 visible-ie9\">Confirme a nova Palavra passe</label>
            <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Confirme a nova Palavra passe\" name=\"password\" /> </div>
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn green uppercase\">Redefinir</button>
        </div>
        <div class=\"create-account\">
            <p>
                <a href=\"javascript:;\" id=\"register-btn\" class=\"uppercase\"></a>
            </p>
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class=\"forget-form\" action=\"http://keenthemes.com/preview/metronic/theme/admin_5/index.html\" method=\"post\">
        <h3 class=\"font-green\">Forget Password ?</h3>
        <p> Enter your e-mail address below to reset your password. </p>
        <div class=\"form-group\">
            <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\" name=\"email\" /> </div>
        <div class=\"form-actions\">
            <button type=\"button\" id=\"back-btn\" class=\"btn green btn-outline\">Back</button>
            <button type=\"submit\" class=\"btn btn-success uppercase pull-right\">Submit</button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <!-- END REGISTRATION FORM -->
</div>
<div class=\"copyright\"> 2014 © Metronic. Admin Dashboard Template. </div>
<!--[if lt IE 9]>
<script src=\"{{ asset('global/plugins/respond.min.js') }}\"></script>
<script src=\"{{ asset('global/plugins/excanvas.min.js') }}\"></script>
<script src=\"{{ asset('global/plugins/ie8.fix.min.js') }}\"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src=\"{{ asset('global/plugins/jquery.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('global/plugins/bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('global/plugins/js.cookie.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('global/plugins/jquery.blockui.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src=\"{{ asset('global/plugins/jquery-validation/js/jquery.validate.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('global/plugins/jquery-validation/js/additional-methods.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('global/plugins/select2/js/select2.full.min.js') }}\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src=\"{{ asset('global/scripts/app.min.js') }}\" type=\"text/javascript\"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"{{ asset('pages/scripts/login.min.js') }}\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
<!-- Google Code for Universal Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-37564768-1', 'auto');
    ga('send', 'pageview');
</script>
<!-- End -->

<!-- Google Tag Manager -->
<noscript><iframe src=\"http://www.googletagmanager.com/ns.html?id=GTM-W276BJ\"
                  height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W276BJ');</script>
<!-- End -->
</body>



<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_5/page_user_login_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2016 19:22:35 GMT -->
</html>", ":SYS:resetpassword.html.twig", "/var/www/html/hom/app/Resources/views/SYS/resetpassword.html.twig");
    }
}

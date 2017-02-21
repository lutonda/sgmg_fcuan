<?php

/* SYS/login.html.twig */
class __TwigTemplate_ab10f4a25a9bef49744f114d2988e8da8a4f73d2cb41f569e1cde42d8f91f8e6 extends Twig_Template
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
        $__internal_c2ddd22027abc1096d71bb51076cfa7c1ddcb03903f4bacbd5080a25766f4d66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ddd22027abc1096d71bb51076cfa7c1ddcb03903f4bacbd5080a25766f4d66->enter($__internal_c2ddd22027abc1096d71bb51076cfa7c1ddcb03903f4bacbd5080a25766f4d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SYS/login.html.twig"));

        $__internal_c280079f5b0e3547e3819a257cabf42e4d9eb60c71fa35d02068335c1a665ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c280079f5b0e3547e3819a257cabf42e4d9eb60c71fa35d02068335c1a665ca7->enter($__internal_c280079f5b0e3547e3819a257cabf42e4d9eb60c71fa35d02068335c1a665ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SYS/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\"/><!-- /Added by HTTrack -->
<head>
    <meta charset=\"utf-8\"/>
    <title>Login | Museu de Geologia</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    <meta content=\"Preview page of Metronic Admin Theme #5 for \" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/css/components.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\"/>
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/css/login.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\"/>
</head>
<!-- END HEAD -->

<body class=\" login\">
<!-- BEGIN LOGO -->
<div class=\"logo\">
    <a href=\"/\">
        <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("layouts/layout5/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 300px\"/> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class=\"content\">
    <!-- BEGIN LOGIN FORM -->
    <form class=\"login-form\" action=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <h3 class=\"form-title font-green\">Area restrita</h3>
        ";
        // line 49
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 49, $this->getSourceContext()); })())) {
            // line 50
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 50, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 50, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 52
        echo "        <div class=\"alert alert-danger display-hide\">
            <button class=\"close\" data-close=\"alert\"></button>
            <span> Enter any username and password. </span>
        </div>
        <div class=\"form-group\">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class=\"control-label visible-ie8 visible-ie9\">Username</label>
            <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\" autocomplete=\"off\"
                   placeholder=\"Username\" name=\"_username\"/></div>
        <div class=\"form-group\">
            <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
            <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\" autocomplete=\"off\"
                   placeholder=\"Password\" name=\"_password\"/></div>
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn green uppercase\">Entrar</button>
            <label class=\"rememberme check mt-checkbox mt-checkbox-outline\">
                <input type=\"checkbox\" name=\"remember\" value=\"1\"/>lembrar-se de mim
                <span></span>
            </label>
            <a href=\"javascript:;\" id=\"forget-password\" class=\"forget-password\">Esqueceu a palavrapasse?</a>
        </div>
        <div class=\"login-options\">
            <h4>ou, entre com</h4>
            <ul class=\"social-icons\">
                <li>
                    <a class=\"social-icon-color facebook\" data-original-title=\"facebook\" href=\"javascript:;\"></a>
                </li>
                <li>
                    <a class=\"social-icon-color twitter\" data-original-title=\"Twitter\" href=\"javascript:;\"></a>
                </li>
                <li>
                    <a class=\"social-icon-color googleplus\" data-original-title=\"Goole Plus\" href=\"javascript:;\"></a>
                </li>
                <li>
                    <a class=\"social-icon-color linkedin\" data-original-title=\"Linkedin\" href=\"javascript:;\"></a>
                </li>
            </ul>
        </div>
        <div class=\"create-account\">
            <p>
                <a href=\"javascript:;\" class=\"uppercase\">-</a>
            </p>
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class=\"forget-form\" action=\"http://keenthemes.com/preview/metronic/theme/admin_5/index.html\" method=\"post\">
        <h3 class=\"font-green\">Forget Password ?</h3>
        <p> Enter your e-mail address below to reset your password. </p>
        <div class=\"form-group\">
            <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\"
                   name=\"email\"/></div>
        <div class=\"form-actions\">
            <button type=\"button\" id=\"back-btn\" class=\"btn green btn-outline\">Back</button>
            <button type=\"submit\" class=\"btn btn-success uppercase pull-right\">Submit</button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <!-- END REGISTRATION FORM -->
</div>
<div class=\"copyright\"> 2014 © Metronic. Admin Dashboard Template.</div>
<!--[if lt IE 9]>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/ie8.fix.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/jquery-validation/js/additional-methods.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pages/scripts/login.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
<!-- Google Code for Universal Analytics -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../../../www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-37564768-1', 'auto');
    ga('send', 'pageview');
</script>
<!-- End -->

<!-- Google Tag Manager -->
<noscript>
    <iframe src=\"http://www.googletagmanager.com/ns.html?id=GTM-W276BJ\"
            height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '../../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-W276BJ');</script>
<!-- End -->
</body>


<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_5/page_user_login_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2016 19:22:35 GMT -->
</html>";
        
        $__internal_c2ddd22027abc1096d71bb51076cfa7c1ddcb03903f4bacbd5080a25766f4d66->leave($__internal_c2ddd22027abc1096d71bb51076cfa7c1ddcb03903f4bacbd5080a25766f4d66_prof);

        
        $__internal_c280079f5b0e3547e3819a257cabf42e4d9eb60c71fa35d02068335c1a665ca7->leave($__internal_c280079f5b0e3547e3819a257cabf42e4d9eb60c71fa35d02068335c1a665ca7_prof);

    }

    public function getTemplateName()
    {
        return "SYS/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 136,  235 => 133,  229 => 130,  225 => 129,  221 => 128,  215 => 125,  211 => 124,  207 => 123,  203 => 122,  199 => 121,  195 => 120,  189 => 117,  185 => 116,  181 => 115,  116 => 52,  110 => 50,  108 => 49,  103 => 47,  94 => 41,  79 => 29,  73 => 26,  69 => 25,  63 => 22,  59 => 21,  52 => 17,  48 => 16,  44 => 15,  40 => 14,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\"/><!-- /Added by HTTrack -->
<head>
    <meta charset=\"utf-8\"/>
    <title>Login | Museu de Geologia</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    <meta content=\"Preview page of Metronic Admin Theme #5 for \" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <link href=\"{{ asset('global/plugins/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('global/plugins/simple-line-icons/simple-line-icons.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('global/plugins/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}\" rel=\"stylesheet\"
          type=\"text/css\"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href=\"{{ asset('global/plugins/select2/css/select2.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('global/plugins/select2/css/select2-bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href=\"{{ asset('global/css/components.min.css')}}\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\"/>
    <link href=\"{{ asset('global/css/plugins.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href=\"{{ asset('pages/css/login.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\"/>
</head>
<!-- END HEAD -->

<body class=\" login\">
<!-- BEGIN LOGO -->
<div class=\"logo\">
    <a href=\"/\">
        <img src=\"{{ asset('layouts/layout5/img/logo.png')}}\" alt=\"\" style=\"width: 300px\"/> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class=\"content\">
    <!-- BEGIN LOGIN FORM -->
    <form class=\"login-form\" action=\"{{ path('login_check') }}\" method=\"post\">
        <h3 class=\"form-title font-green\">Area restrita</h3>
        {% if error %}
            <div>{{ error.messageKey|trans(error.messageData,'security') }}</div>
        {% endif %}
        <div class=\"alert alert-danger display-hide\">
            <button class=\"close\" data-close=\"alert\"></button>
            <span> Enter any username and password. </span>
        </div>
        <div class=\"form-group\">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class=\"control-label visible-ie8 visible-ie9\">Username</label>
            <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\" autocomplete=\"off\"
                   placeholder=\"Username\" name=\"_username\"/></div>
        <div class=\"form-group\">
            <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
            <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\" autocomplete=\"off\"
                   placeholder=\"Password\" name=\"_password\"/></div>
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn green uppercase\">Entrar</button>
            <label class=\"rememberme check mt-checkbox mt-checkbox-outline\">
                <input type=\"checkbox\" name=\"remember\" value=\"1\"/>lembrar-se de mim
                <span></span>
            </label>
            <a href=\"javascript:;\" id=\"forget-password\" class=\"forget-password\">Esqueceu a palavrapasse?</a>
        </div>
        <div class=\"login-options\">
            <h4>ou, entre com</h4>
            <ul class=\"social-icons\">
                <li>
                    <a class=\"social-icon-color facebook\" data-original-title=\"facebook\" href=\"javascript:;\"></a>
                </li>
                <li>
                    <a class=\"social-icon-color twitter\" data-original-title=\"Twitter\" href=\"javascript:;\"></a>
                </li>
                <li>
                    <a class=\"social-icon-color googleplus\" data-original-title=\"Goole Plus\" href=\"javascript:;\"></a>
                </li>
                <li>
                    <a class=\"social-icon-color linkedin\" data-original-title=\"Linkedin\" href=\"javascript:;\"></a>
                </li>
            </ul>
        </div>
        <div class=\"create-account\">
            <p>
                <a href=\"javascript:;\" class=\"uppercase\">-</a>
            </p>
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class=\"forget-form\" action=\"http://keenthemes.com/preview/metronic/theme/admin_5/index.html\" method=\"post\">
        <h3 class=\"font-green\">Forget Password ?</h3>
        <p> Enter your e-mail address below to reset your password. </p>
        <div class=\"form-group\">
            <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\"
                   name=\"email\"/></div>
        <div class=\"form-actions\">
            <button type=\"button\" id=\"back-btn\" class=\"btn green btn-outline\">Back</button>
            <button type=\"submit\" class=\"btn btn-success uppercase pull-right\">Submit</button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <!-- END REGISTRATION FORM -->
</div>
<div class=\"copyright\"> 2014 © Metronic. Admin Dashboard Template.</div>
<!--[if lt IE 9]>
<script src=\"{{  asset('global/plugins/respond.min.js') }}\"></script>
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
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../../../www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-37564768-1', 'auto');
    ga('send', 'pageview');
</script>
<!-- End -->

<!-- Google Tag Manager -->
<noscript>
    <iframe src=\"http://www.googletagmanager.com/ns.html?id=GTM-W276BJ\"
            height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '../../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-W276BJ');</script>
<!-- End -->
</body>


<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_5/page_user_login_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2016 19:22:35 GMT -->
</html>", "SYS/login.html.twig", "/var/www/html/hom/app/Resources/views/SYS/login.html.twig");
    }
}

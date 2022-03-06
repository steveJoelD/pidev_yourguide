<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base-front.html.twig */
class __TwigTemplate_42a75d322f0f523db15ad000eb9b96cb0da9ecd268a6733fa34606b0cfbe9e2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"wide wow-animation\" lang=\"en\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <!-- Stylesheets-->
    ";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 18
        echo "</head>
<body>

<div class=\"ie-panel\"><a href=\"http://windows.microsoft.com/en-US/internet-explorer/\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ie8-panel/warning_bar_0000_us.jpg"), "html", null, true);
        echo "\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"></a></div>
<div class=\"preloader\">
    <div class=\"preloader-body\">
        <div class=\"cssload-container\">
            <div class=\"cssload-speeding-wheel\"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class=\"page\">
    <!-- Page Header--><a class=\"banner banner-top\" href=\"https://www.templatemonster.com/intense-multipurpose-html-template.html\" target=\"_blank\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/intense_02.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
    <header class=\"section page-header\">
        <!-- RD Navbar-->
        <div class=\"rd-navbar-wrap\">
            <nav class=\"rd-navbar rd-navbar-corporate\" data-layout=\"rd-navbar-fixed\" data-sm-layout=\"rd-navbar-fixed\" data-md-layout=\"rd-navbar-fixed\" data-md-device-layout=\"rd-navbar-fixed\" data-lg-layout=\"rd-navbar-static\" data-lg-device-layout=\"rd-navbar-fixed\" data-xl-layout=\"rd-navbar-static\" data-xl-device-layout=\"rd-navbar-static\" data-xxl-layout=\"rd-navbar-static\" data-xxl-device-layout=\"rd-navbar-static\" data-lg-stick-up-offset=\"46px\" data-xl-stick-up-offset=\"46px\" data-xxl-stick-up-offset=\"106px\" data-lg-stick-up=\"true\" data-xl-stick-up=\"true\" data-xxl-stick-up=\"true\">
                <div class=\"rd-navbar-collapse-toggle rd-navbar-fixed-element-1\" data-rd-navbar-toggle=\".rd-navbar-collapse\"><span></span></div>
                <div class=\"rd-navbar-aside-outer\">
                    <div class=\"rd-navbar-aside\">
                        <!-- RD Navbar Panel-->
                        <div class=\"rd-navbar-panel\">
                            <!-- RD Navbar Toggle-->
                            <button class=\"rd-navbar-toggle\" data-rd-navbar-toggle=\".rd-navbar-nav-wrap\"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class=\"rd-navbar-brand\">
                                <!--Brand--><a class=\"brand\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\" alt=\"\" width=\"225\" height=\"18\"/></a>
                            </div>
                        </div>
                        <div class=\"rd-navbar-aside-right rd-navbar-collapse\">
                            <ul class=\"rd-navbar-corporate-contacts\">
                                <li>
                                    <div class=\"unit unit-spacing-xs\">
                                        <div class=\"unit-left\"><span class=\"icon fa fa-clock-o\"></span></div>
                                        <div class=\"unit-body\">
                                            <p>09:00<span>am</span> — 05:00<span>pm</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"unit unit-spacing-xs\">
                                        <div class=\"unit-left\"><span class=\"icon fa fa-phone\"></span></div>
                                        <div class=\"unit-body\"><a class=\"link-phone\" href=\"tel:#\">+1 323-913-4688</a></div>
                                    </div>
                                </li>
                            </ul><a class=\"button button-md button-default-outline-2 button-ujarak\" href=\"#\">Get a Free Quote</a>
                        </div>
                    </div>
                </div>
                <div class=\"rd-navbar-main-outer\">
                    <div class=\"rd-navbar-main\">
                        <div class=\"rd-navbar-nav-wrap\">
                            <ul class=\"list-inline list-inline-md rd-navbar-corporate-list-social\">
                                <li><a class=\"icon fa fa-facebook\" href=\"#\"></a></li>
                                <li><a class=\"icon fa fa-twitter\" href=\"#\"></a></li>
                                <li><a class=\"icon fa fa-google-plus\" href=\"#\"></a></li>
                                <li><a class=\"icon fa fa-instagram\" href=\"#\"></a></li>
                            </ul>
                            <!-- RD Navbar Nav-->
                            <ul class=\"rd-navbar-nav\">
                                <li class=\"rd-nav-item active\"><a class=\"rd-nav-link\" href=\"index.html\">Home</a>
                                </li>
                                <li class=\"rd-nav-item\"><a class=\"rd-nav-link\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about.html"), "html", null, true);
        echo "\">About</a>
                                </li>
                                <li class=\"rd-nav-item\"><a class=\"rd-nav-link\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("typography.html"), "html", null, true);
        echo "\">Typography</a>
                                </li>
                                <li class=\"rd-nav-item\"><a class=\"rd-nav-link\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact-us.html"), "html", null, true);
        echo "\">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    
    <section class=\"content\">
      <div class=\"item content\">
        <div class=\"container toparea\">
          <div class=\"row text-center\">
            ";
        // line 99
        $this->displayBlock('content', $context, $blocks);
        // line 102
        echo "          </div>
        </div>
      </div>
    </section>
    <!-- Page Footer--><a class=\"banner\" href=\"https://www.templatemonster.com/intense-multipurpose-html-template.html\" target=\"_blank\"><img src=\"images/intense_big_02.jpg\" alt=\"\"/></a>
    <footer class=\"section footer-corporate context-dark\">
        <div class=\"footer-corporate-inset\">
            <div class=\"container\">
                <div class=\"row row-40 justify-content-lg-between\">
                    <div class=\"col-sm-6 col-md-12 col-lg-3 col-xl-4\">
                        <div class=\"oh-desktop\">
                            <div class=\"wow slideInRight\" data-wow-delay=\"0s\">
                                <h6 class=\"text-spacing-100 text-uppercase\">Contact us</h6>
                                <ul class=\"footer-contacts d-inline-block d-sm-block\">
                                    <li>
                                        <div class=\"unit\">
                                            <div class=\"unit-left\"><span class=\"icon fa fa-phone\"></span></div>
                                            <div class=\"unit-body\"><a class=\"link-phone\" href=\"tel:#\">+1 323-913-4688</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"unit\">
                                            <div class=\"unit-left\"><span class=\"icon fa fa-envelope\"></span></div>
                                            <div class=\"unit-body\"><a class=\"link-aemail\" href=\"mailto:#\">info@demolink.org</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"unit\">
                                            <div class=\"unit-left\"><span class=\"icon fa fa-location-arrow\"></span></div>
                                            <div class=\"unit-body\"><a class=\"link-location\" href=\"#\">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-5 col-lg-3 col-xl-4\">
                        <div class=\"oh-desktop\">
                            <div class=\"wow slideInDown\" data-wow-delay=\"0s\">
                                <h6 class=\"text-spacing-100 text-uppercase\">Popular news</h6>
                                <!-- Post Minimal 2-->
                                <article class=\"post post-minimal-2\">
                                    <p class=\"post-minimal-2-title\"><a href=\"#\">Your Personal Guide to 5 Best Places to Visit on Earth</a></p>
                                    <div class=\"post-minimal-2-time\">
                                        <time datetime=\"2019-05-04\">May 04, 2019</time>
                                    </div>
                                </article>
                                <!-- Post Minimal 2-->
                                <article class=\"post post-minimal-2\">
                                    <p class=\"post-minimal-2-title\"><a href=\"#\">Top 10 Hotels: Rating by Wonder Tour Travel Experts</a></p>
                                    <div class=\"post-minimal-2-time\">
                                        <time datetime=\"2019-05-04\">May 04, 2019</time>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-11 col-md-7 col-lg-5 col-xl-4\">
                        <div class=\"oh-desktop\">
                            <div class=\"wow slideInLeft\" data-wow-delay=\"0s\">
                                <h6 class=\"text-spacing-100 text-uppercase\">Quick links</h6>
                                <ul class=\"row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2\">
                                    <li><a href=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about.html"), "html", null, true);
        echo "\">About us</a></li>
                                    <li><a href=\"#\">Our Tours</a></li>
                                    <li><a href=\"#\">Our Team</a></li>
                                    <li><a href=\"#\">Gallery</a></li>
                                    <li><a href=\"#\">Blog</a></li>
                                </ul>
                                <div class=\"group-md group-middle justify-content-sm-start\"><a class=\"button button-lg button-primary button-ujarak\" href=\"#\">Get in touch</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <div class=\"footer-corporate-bottom-panel\">
            <div class=\"container\">
                <div class=\"row justfy-content-xl-space-berween row-10 align-items-md-center2\">
                    <div class=\"col-sm-6 col-md-4 text-sm-right text-md-center\">
                        <div>
                            <ul class=\"list-inline list-inline-sm footer-social-list-2\">
                                <li><a class=\"icon fa fa-facebook\" href=\"#\"></a></li>
                                <li><a class=\"icon fa fa-twitter\" href=\"#\"></a></li>
                                <li><a class=\"icon fa fa-google-plus\" href=\"#\"></a></li>
                                <li><a class=\"icon fa fa-instagram\" href=\"#\"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4 order-sm-first\">
                        <!-- Rights-->
                        <p class=\"rights\"><span>&copy;&nbsp;</span><span class=\"copyright-year\"></span><span>&nbsp;</span><span>Wonder Tour</span>. All Rights Reserved. Design by <a href=\"https://www.templatemonster.com\">TemplateMonster</a></p>
                    </div>
                    <div class=\"col-sm-6 col-md-4 text-md-right\">
                        <p class=\"rights\"><a href=\"#\">Privacy Policy</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Global Mailform Output-->
<div class=\"snackbars\" id=\"form-output-global\"></div>
<!-- Javascript-->
";
        // line 206
        $this->displayBlock('js', $context, $blocks);
        // line 210
        echo "
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Home  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 12
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 100
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 206
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 207
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 208,  382 => 207,  372 => 206,  361 => 100,  351 => 99,  338 => 15,  334 => 14,  330 => 13,  325 => 12,  315 => 11,  296 => 4,  283 => 210,  281 => 206,  236 => 164,  172 => 102,  170 => 99,  153 => 85,  148 => 83,  143 => 81,  102 => 45,  85 => 31,  72 => 21,  67 => 18,  65 => 11,  60 => 9,  52 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"wide wow-animation\" lang=\"en\">
<head>
    <title>{% block title  %} Home  {% endblock %}</title>
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <link rel=\"icon\" href=\"{{asset('images/favicon.ico')  }}\" type=\"image/x-icon\">
    <!-- Stylesheets-->
    {% block css %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('fonts.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    {% endblock %}
</head>
<body>

<div class=\"ie-panel\"><a href=\"http://windows.microsoft.com/en-US/internet-explorer/\"><img src=\"{{ asset('images/ie8-panel/warning_bar_0000_us.jpg') }}\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\"></a></div>
<div class=\"preloader\">
    <div class=\"preloader-body\">
        <div class=\"cssload-container\">
            <div class=\"cssload-speeding-wheel\"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class=\"page\">
    <!-- Page Header--><a class=\"banner banner-top\" href=\"https://www.templatemonster.com/intense-multipurpose-html-template.html\" target=\"_blank\"><img src=\"{{ asset('images/intense_02.jpg') }}\" alt=\"\"/></a>
    <header class=\"section page-header\">
        <!-- RD Navbar-->
        <div class=\"rd-navbar-wrap\">
            <nav class=\"rd-navbar rd-navbar-corporate\" data-layout=\"rd-navbar-fixed\" data-sm-layout=\"rd-navbar-fixed\" data-md-layout=\"rd-navbar-fixed\" data-md-device-layout=\"rd-navbar-fixed\" data-lg-layout=\"rd-navbar-static\" data-lg-device-layout=\"rd-navbar-fixed\" data-xl-layout=\"rd-navbar-static\" data-xl-device-layout=\"rd-navbar-static\" data-xxl-layout=\"rd-navbar-static\" data-xxl-device-layout=\"rd-navbar-static\" data-lg-stick-up-offset=\"46px\" data-xl-stick-up-offset=\"46px\" data-xxl-stick-up-offset=\"106px\" data-lg-stick-up=\"true\" data-xl-stick-up=\"true\" data-xxl-stick-up=\"true\">
                <div class=\"rd-navbar-collapse-toggle rd-navbar-fixed-element-1\" data-rd-navbar-toggle=\".rd-navbar-collapse\"><span></span></div>
                <div class=\"rd-navbar-aside-outer\">
                    <div class=\"rd-navbar-aside\">
                        <!-- RD Navbar Panel-->
                        <div class=\"rd-navbar-panel\">
                            <!-- RD Navbar Toggle-->
                            <button class=\"rd-navbar-toggle\" data-rd-navbar-toggle=\".rd-navbar-nav-wrap\"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class=\"rd-navbar-brand\">
                                <!--Brand--><a class=\"brand\" href=\"{{ asset('index.html') }}\"><img src=\"{{ asset('') }}\" alt=\"\" width=\"225\" height=\"18\"/></a>
                            </div>
                        </div>
                        <div class=\"rd-navbar-aside-right rd-navbar-collapse\">
                            <ul class=\"rd-navbar-corporate-contacts\">
                                <li>
                                    <div class=\"unit unit-spacing-xs\">
                                        <div class=\"unit-left\"><span class=\"icon fa fa-clock-o\"></span></div>
                                        <div class=\"unit-body\">
                                            <p>09:00<span>am</span> — 05:00<span>pm</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"unit unit-spacing-xs\">
                                        <div class=\"unit-left\"><span class=\"icon fa fa-phone\"></span></div>
                                        <div class=\"unit-body\"><a class=\"link-phone\" href=\"tel:#\">+1 323-913-4688</a></div>
                                    </div>
                                </li>
                            </ul><a class=\"button button-md button-default-outline-2 button-ujarak\" href=\"#\">Get a Free Quote</a>
                        </div>
                    </div>
                </div>
                <div class=\"rd-navbar-main-outer\">
                    <div class=\"rd-navbar-main\">
                        <div class=\"rd-navbar-nav-wrap\">
                            <ul class=\"list-inline list-inline-md rd-navbar-corporate-list-social\">
                                <li><a class=\"icon fa fa-facebook\" href=\"#\"></a></li>
                                <li><a class=\"icon fa fa-twitter\" href=\"#\"></a></li>
                                <li><a class=\"icon fa fa-google-plus\" href=\"#\"></a></li>
                                <li><a class=\"icon fa fa-instagram\" href=\"#\"></a></li>
                            </ul>
                            <!-- RD Navbar Nav-->
                            <ul class=\"rd-navbar-nav\">
                                <li class=\"rd-nav-item active\"><a class=\"rd-nav-link\" href=\"index.html\">Home</a>
                                </li>
                                <li class=\"rd-nav-item\"><a class=\"rd-nav-link\" href=\"{{ asset('about.html') }}\">About</a>
                                </li>
                                <li class=\"rd-nav-item\"><a class=\"rd-nav-link\" href=\"{{asset('typography.html')  }}\">Typography</a>
                                </li>
                                <li class=\"rd-nav-item\"><a class=\"rd-nav-link\" href=\"{{ asset('contact-us.html') }}\">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    
    <section class=\"content\">
      <div class=\"item content\">
        <div class=\"container toparea\">
          <div class=\"row text-center\">
            {% block content %}

            {% endblock %}
          </div>
        </div>
      </div>
    </section>
    <!-- Page Footer--><a class=\"banner\" href=\"https://www.templatemonster.com/intense-multipurpose-html-template.html\" target=\"_blank\"><img src=\"images/intense_big_02.jpg\" alt=\"\"/></a>
    <footer class=\"section footer-corporate context-dark\">
        <div class=\"footer-corporate-inset\">
            <div class=\"container\">
                <div class=\"row row-40 justify-content-lg-between\">
                    <div class=\"col-sm-6 col-md-12 col-lg-3 col-xl-4\">
                        <div class=\"oh-desktop\">
                            <div class=\"wow slideInRight\" data-wow-delay=\"0s\">
                                <h6 class=\"text-spacing-100 text-uppercase\">Contact us</h6>
                                <ul class=\"footer-contacts d-inline-block d-sm-block\">
                                    <li>
                                        <div class=\"unit\">
                                            <div class=\"unit-left\"><span class=\"icon fa fa-phone\"></span></div>
                                            <div class=\"unit-body\"><a class=\"link-phone\" href=\"tel:#\">+1 323-913-4688</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"unit\">
                                            <div class=\"unit-left\"><span class=\"icon fa fa-envelope\"></span></div>
                                            <div class=\"unit-body\"><a class=\"link-aemail\" href=\"mailto:#\">info@demolink.org</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"unit\">
                                            <div class=\"unit-left\"><span class=\"icon fa fa-location-arrow\"></span></div>
                                            <div class=\"unit-body\"><a class=\"link-location\" href=\"#\">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-5 col-lg-3 col-xl-4\">
                        <div class=\"oh-desktop\">
                            <div class=\"wow slideInDown\" data-wow-delay=\"0s\">
                                <h6 class=\"text-spacing-100 text-uppercase\">Popular news</h6>
                                <!-- Post Minimal 2-->
                                <article class=\"post post-minimal-2\">
                                    <p class=\"post-minimal-2-title\"><a href=\"#\">Your Personal Guide to 5 Best Places to Visit on Earth</a></p>
                                    <div class=\"post-minimal-2-time\">
                                        <time datetime=\"2019-05-04\">May 04, 2019</time>
                                    </div>
                                </article>
                                <!-- Post Minimal 2-->
                                <article class=\"post post-minimal-2\">
                                    <p class=\"post-minimal-2-title\"><a href=\"#\">Top 10 Hotels: Rating by Wonder Tour Travel Experts</a></p>
                                    <div class=\"post-minimal-2-time\">
                                        <time datetime=\"2019-05-04\">May 04, 2019</time>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-11 col-md-7 col-lg-5 col-xl-4\">
                        <div class=\"oh-desktop\">
                            <div class=\"wow slideInLeft\" data-wow-delay=\"0s\">
                                <h6 class=\"text-spacing-100 text-uppercase\">Quick links</h6>
                                <ul class=\"row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2\">
                                    <li><a href=\"{{ asset('about.html') }}\">About us</a></li>
                                    <li><a href=\"#\">Our Tours</a></li>
                                    <li><a href=\"#\">Our Team</a></li>
                                    <li><a href=\"#\">Gallery</a></li>
                                    <li><a href=\"#\">Blog</a></li>
                                </ul>
                                <div class=\"group-md group-middle justify-content-sm-start\"><a class=\"button button-lg button-primary button-ujarak\" href=\"#\">Get in touch</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <div class=\"footer-corporate-bottom-panel\">
            <div class=\"container\">
                <div class=\"row justfy-content-xl-space-berween row-10 align-items-md-center2\">
                    <div class=\"col-sm-6 col-md-4 text-sm-right text-md-center\">
                        <div>
                            <ul class=\"list-inline list-inline-sm footer-social-list-2\">
                                <li><a class=\"icon fa fa-facebook\" href=\"#\"></a></li>
                                <li><a class=\"icon fa fa-twitter\" href=\"#\"></a></li>
                                <li><a class=\"icon fa fa-google-plus\" href=\"#\"></a></li>
                                <li><a class=\"icon fa fa-instagram\" href=\"#\"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4 order-sm-first\">
                        <!-- Rights-->
                        <p class=\"rights\"><span>&copy;&nbsp;</span><span class=\"copyright-year\"></span><span>&nbsp;</span><span>Wonder Tour</span>. All Rights Reserved. Design by <a href=\"https://www.templatemonster.com\">TemplateMonster</a></p>
                    </div>
                    <div class=\"col-sm-6 col-md-4 text-md-right\">
                        <p class=\"rights\"><a href=\"#\">Privacy Policy</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Global Mailform Output-->
<div class=\"snackbars\" id=\"form-output-global\"></div>
<!-- Javascript-->
{% block js %}
    <script src=\"{{ asset('js/core.min.js') }}\"></script>
    <script src=\"{{ asset('js/script.js') }}\"></script>
{% endblock %}

</body>
</html>
", "base-front.html.twig", "C:\\Users\\LEGION\\FirstProject\\templates\\base-front.html.twig");
    }
}

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Project/Default/AfficherLog.html.twig */
class __TwigTemplate_7e2999ac582b7db71fe2d534bb99515e40b243eb8f7cb2038fbba8f23f90ec6f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/AfficherLog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Project/Default/AfficherLog.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>RoyalUI Admin</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/base/vendor.bundle.base.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/css/style.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/images/favicon.png"), "html", null, true);
        echo "\" />
</head>

<body>
<div class=\"container-scroller\">
    <!-- partial:../../partials/_navbar.html -->
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
        <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
            <a class=\"navbar-brand brand-logo mr-5\" href=\"../../index.html\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "images/logo.svg\" class=\"mr-2\" alt=\"logo\"/></a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"../../index.html\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "images/logo-mini.svg\" alt=\"logo\"/></a>
        </div>
        <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                <span class=\"ti-view-list\"></span>
            </button>
            <ul class=\"navbar-nav mr-lg-2\">
                <li class=\"nav-item nav-search d-none d-lg-block\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend hover-cursor\" id=\"navbar-search-icon\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"ti-search\"></i>
                </span>
                        </div>
                        <div class=\"input-container\">
                            <i class=\"fa fa-search\"></i>
                            <input type=\"search\"  id=\"searsh\" onkeyup=\"myFunction()\" class=\"form-control-sm boxed\">
                            <div class=\"underline\"></div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
                <li class=\"nav-item dropdown mr-1\">
                    <a class=\"nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center\" id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\">
                        <i class=\"ti-email mx-0\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"messageDropdown\">
                        <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Messages</p>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <img src=\"../../images/faces/face4.jpg\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"item-content flex-grow\">
                                <h6 class=\"ellipsis font-weight-normal\">David Grey
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <img src=\"../../images/faces/face2.jpg\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"item-content flex-grow\">
                                <h6 class=\"ellipsis font-weight-normal\">Tim Cook
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <img src=\"../../images/faces/face3.jpg\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"item-content flex-grow\">
                                <h6 class=\"ellipsis font-weight-normal\"> Johnson
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                        <i class=\"ti-bell mx-0\"></i>
                        <span class=\"count\"></span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"notificationDropdown\">
                        <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <div class=\"item-icon bg-success\">
                                    <i class=\"ti-info-alt mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"item-content\">
                                <h6 class=\"font-weight-normal\">Application Error</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <div class=\"item-icon bg-warning\">
                                    <i class=\"ti-settings mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"item-content\">
                                <h6 class=\"font-weight-normal\">Settings</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <div class=\"item-icon bg-info\">
                                    <i class=\"ti-user mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"item-content\">
                                <h6 class=\"font-weight-normal\">New user registration</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item nav-profile dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
                        <img src=\"../../images/faces/face28.jpg\" alt=\"profile\"/>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                        <a class=\"dropdown-item\">
                            <i class=\"ti-settings text-primary\"></i>
                            Settings
                        </a>
                        <a class=\"dropdown-item\">
                            <i class=\"ti-power-off text-primary\"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
            <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                <span class=\"ti-view-list\"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../index.html\">
                        <i class=\"ti-shield menu-icon\"></i>
                        <span class=\"menu-title\">Dashboard</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
                        <i class=\"ti-palette menu-icon\"></i>
                        <span class=\"menu-title\">UI Elements</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"ui-basic\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/ui-features/buttons.html\">Buttons</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/ui-features/typography.html\">Typography</a></li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../pages/forms/basic_elements.html\">
                        <i class=\"ti-layout-list-post menu-icon\"></i>
                        <span class=\"menu-title\">Form elements</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../pages/charts/chartjs.html\">
                        <i class=\"ti-pie-chart menu-icon\"></i>
                        <span class=\"menu-title\">Charts</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../pages/tables/basic-table.html\">
                        <i class=\"ti-view-list-alt menu-icon\"></i>
                        <span class=\"menu-title\">Tables</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../pages/icons/themify.html\">
                        <i class=\"ti-star menu-icon\"></i>
                        <span class=\"menu-title\">Icons</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                        <i class=\"ti-user menu-icon\"></i>
                        <span class=\"menu-title\">User Pages</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"auth\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/login.html\"> Login </a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/login-2.html\"> Login 2 </a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/register.html\"> Register </a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/register-2.html\"> Register 2 </a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/lock-screen.html\"> Lockscreen </a></li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../documentation/documentation.html\">
                        <i class=\"ti-write menu-icon\"></i>
                        <span class=\"menu-title\">Documentation</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <div class=\"row\">
                    <div class=\"col-lg-12 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">LISTE DES LOGEMENT </h4>
                                <p class=\"card-description\">
                                    <a href=\"";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_AjouterLog");
        echo "\">
                                        <button type=\"button\" class=\"btn btn-success btn-rounded btn-fw\">NOUVEAU</button>
                                    </a>                                <div class=\"table-responsive\">
                                    <table id=\"contenu\" class=\"table table-hover\" >
                                        <thead>
                                        <tr>
                                            <th>
                                                Nom logement
                                            </th>
                                            <th>
                                                Adresse du Logement
                                            </th>
                                            <th>
                                                Nombre de chambres
                                            </th>
                                            <th>
                                                Etat Logement
                                            </th>

                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Logement"] ?? $this->getContext($context, "Logement")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 268
            echo "                                            <tr>
                                                <td>
                                                    ";
            // line 270
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nomLog", []), "html", null, true);
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 273
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "adresse", []), "html", null, true);
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 276
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nbChambre", []), "html", null, true);
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "etatLog", []), "html", null, true);
            echo "
                                                </td>
                                                <td>

                                                    <a href=\"";
            // line 283
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_ModifierLog", ["idlog" => $this->getAttribute($context["l"], "idlog", [])]), "html", null, true);
            echo "\">
                                                        <button type=\"button\" class=\"btn btn-success btn-rounded btn-icon\">
                                                            <i class=\"ti-pencil\"></i>
                                                        </button>
                                                    </a>

                                                    <a href=\"";
            // line 289
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_SupprimerLog", ["idlog" => $this->getAttribute($context["l"], "idlog", [])]), "html", null, true);
            echo "\">
                                                        <button type=\"button\" class=\"btn btn-danger btn-rounded btn-icon\">
                                                            <i class=\"ti-trash\"></i>
                                                        </button>
                                                    </a>

                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <a href=\"";
        // line 308
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_payer");
        echo "\">
                <button type=\"button\" class=\"btn btn-primary btn-rounded btn-fw\">
                    Faire un Don
                </button>
            </a>

            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class=\"footer\">
                <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                    <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright © 2018 <a href=\"https://www.templatewatch.com/\" target=\"_blank\">Templatewatch</a>. All rights reserved.</span>
                    <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Hand-crafted & made with <i class=\"ti-heart text-danger ml-1\"></i></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/vendors/base/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/template.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/js/todolist.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<!-- End custom js for this page-->
</body>
<script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-3.1.1.js"), "html", null, true);
        echo "\"></script>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById(\"searsh\");
        filter = input.value.toUpperCase();
        table = document.getElementById(\"contenu\");
        tr = table.getElementsByTagName(\"tr\");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName(\"td\")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = \"\";
                } else {
                    tr[i].style.display = \"none\";
                }
            }

        }
    }
</script>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Project/Default/AfficherLog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 343,  439 => 338,  435 => 337,  431 => 336,  427 => 335,  419 => 330,  394 => 308,  382 => 298,  367 => 289,  358 => 283,  351 => 279,  345 => 276,  339 => 273,  333 => 270,  329 => 268,  325 => 267,  297 => 242,  77 => 25,  73 => 24,  62 => 16,  57 => 14,  51 => 11,  47 => 10,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>RoyalUI Admin</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('back/vendors/ti-icons/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('vendors/base/vendor.bundle.base.css') }}\">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('back/css/style.css') }}\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"{{ asset('back/images/favicon.png') }}\" />
</head>

<body>
<div class=\"container-scroller\">
    <!-- partial:../../partials/_navbar.html -->
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
        <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
            <a class=\"navbar-brand brand-logo mr-5\" href=\"../../index.html\"><img src=\"{{ asset('') }}images/logo.svg\" class=\"mr-2\" alt=\"logo\"/></a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"../../index.html\"><img src=\"{{ asset('') }}images/logo-mini.svg\" alt=\"logo\"/></a>
        </div>
        <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                <span class=\"ti-view-list\"></span>
            </button>
            <ul class=\"navbar-nav mr-lg-2\">
                <li class=\"nav-item nav-search d-none d-lg-block\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend hover-cursor\" id=\"navbar-search-icon\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"ti-search\"></i>
                </span>
                        </div>
                        <div class=\"input-container\">
                            <i class=\"fa fa-search\"></i>
                            <input type=\"search\"  id=\"searsh\" onkeyup=\"myFunction()\" class=\"form-control-sm boxed\">
                            <div class=\"underline\"></div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
                <li class=\"nav-item dropdown mr-1\">
                    <a class=\"nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center\" id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\">
                        <i class=\"ti-email mx-0\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"messageDropdown\">
                        <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Messages</p>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <img src=\"../../images/faces/face4.jpg\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"item-content flex-grow\">
                                <h6 class=\"ellipsis font-weight-normal\">David Grey
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <img src=\"../../images/faces/face2.jpg\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"item-content flex-grow\">
                                <h6 class=\"ellipsis font-weight-normal\">Tim Cook
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <img src=\"../../images/faces/face3.jpg\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"item-content flex-grow\">
                                <h6 class=\"ellipsis font-weight-normal\"> Johnson
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                        <i class=\"ti-bell mx-0\"></i>
                        <span class=\"count\"></span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"notificationDropdown\">
                        <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <div class=\"item-icon bg-success\">
                                    <i class=\"ti-info-alt mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"item-content\">
                                <h6 class=\"font-weight-normal\">Application Error</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <div class=\"item-icon bg-warning\">
                                    <i class=\"ti-settings mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"item-content\">
                                <h6 class=\"font-weight-normal\">Settings</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <div class=\"item-icon bg-info\">
                                    <i class=\"ti-user mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"item-content\">
                                <h6 class=\"font-weight-normal\">New user registration</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item nav-profile dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
                        <img src=\"../../images/faces/face28.jpg\" alt=\"profile\"/>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                        <a class=\"dropdown-item\">
                            <i class=\"ti-settings text-primary\"></i>
                            Settings
                        </a>
                        <a class=\"dropdown-item\">
                            <i class=\"ti-power-off text-primary\"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
            <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                <span class=\"ti-view-list\"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../index.html\">
                        <i class=\"ti-shield menu-icon\"></i>
                        <span class=\"menu-title\">Dashboard</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
                        <i class=\"ti-palette menu-icon\"></i>
                        <span class=\"menu-title\">UI Elements</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"ui-basic\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/ui-features/buttons.html\">Buttons</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/ui-features/typography.html\">Typography</a></li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../pages/forms/basic_elements.html\">
                        <i class=\"ti-layout-list-post menu-icon\"></i>
                        <span class=\"menu-title\">Form elements</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../pages/charts/chartjs.html\">
                        <i class=\"ti-pie-chart menu-icon\"></i>
                        <span class=\"menu-title\">Charts</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../pages/tables/basic-table.html\">
                        <i class=\"ti-view-list-alt menu-icon\"></i>
                        <span class=\"menu-title\">Tables</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../pages/icons/themify.html\">
                        <i class=\"ti-star menu-icon\"></i>
                        <span class=\"menu-title\">Icons</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                        <i class=\"ti-user menu-icon\"></i>
                        <span class=\"menu-title\">User Pages</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"auth\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/login.html\"> Login </a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/login-2.html\"> Login 2 </a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/register.html\"> Register </a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/register-2.html\"> Register 2 </a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/lock-screen.html\"> Lockscreen </a></li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../../documentation/documentation.html\">
                        <i class=\"ti-write menu-icon\"></i>
                        <span class=\"menu-title\">Documentation</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                <div class=\"row\">
                    <div class=\"col-lg-12 grid-margin stretch-card\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">LISTE DES LOGEMENT </h4>
                                <p class=\"card-description\">
                                    <a href=\"{{ path('project_AjouterLog') }}\">
                                        <button type=\"button\" class=\"btn btn-success btn-rounded btn-fw\">NOUVEAU</button>
                                    </a>                                <div class=\"table-responsive\">
                                    <table id=\"contenu\" class=\"table table-hover\" >
                                        <thead>
                                        <tr>
                                            <th>
                                                Nom logement
                                            </th>
                                            <th>
                                                Adresse du Logement
                                            </th>
                                            <th>
                                                Nombre de chambres
                                            </th>
                                            <th>
                                                Etat Logement
                                            </th>

                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for l in Logement %}
                                            <tr>
                                                <td>
                                                    {{ l.nomLog }}
                                                </td>
                                                <td>
                                                    {{ l.adresse }}
                                                </td>
                                                <td>
                                                    {{ l.nbChambre }}
                                                </td>
                                                <td>
                                                    {{ l.etatLog }}
                                                </td>
                                                <td>

                                                    <a href=\"{{ path('project_ModifierLog',{idlog:l.idlog}) }}\">
                                                        <button type=\"button\" class=\"btn btn-success btn-rounded btn-icon\">
                                                            <i class=\"ti-pencil\"></i>
                                                        </button>
                                                    </a>

                                                    <a href=\"{{ path('project_SupprimerLog',{idlog:l.idlog}) }}\">
                                                        <button type=\"button\" class=\"btn btn-danger btn-rounded btn-icon\">
                                                            <i class=\"ti-trash\"></i>
                                                        </button>
                                                    </a>

                                                </td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <a href=\"{{ path('project_payer') }}\">
                <button type=\"button\" class=\"btn btn-primary btn-rounded btn-fw\">
                    Faire un Don
                </button>
            </a>

            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class=\"footer\">
                <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                    <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright © 2018 <a href=\"https://www.templatewatch.com/\" target=\"_blank\">Templatewatch</a>. All rights reserved.</span>
                    <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Hand-crafted & made with <i class=\"ti-heart text-danger ml-1\"></i></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src=\"{{ asset('back/vendors/base/vendor.bundle.base.js') }}\"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src=\"{{ asset('back/js/off-canvas.js') }}\"></script>
<script src=\"{{ asset('back/js/hoverable-collapse.js') }}\"></script>
<script src=\"{{ asset('back/js/template.js') }}\"></script>
<script src=\"{{ asset('back/js/todolist.js') }}\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<!-- End custom js for this page-->
</body>
<script src=\"{{ asset('jquery-3.1.1.js') }}\"></script>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById(\"searsh\");
        filter = input.value.toUpperCase();
        table = document.getElementById(\"contenu\");
        tr = table.getElementsByTagName(\"tr\");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName(\"td\")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = \"\";
                } else {
                    tr[i].style.display = \"none\";
                }
            }

        }
    }
</script>
</html>
", "@Project/Default/AfficherLog.html.twig", "C:\\wamp64\\www\\ProjetPI\\src\\ProjectBundle\\Resources\\views\\Default\\AfficherLog.html.twig");
    }
}

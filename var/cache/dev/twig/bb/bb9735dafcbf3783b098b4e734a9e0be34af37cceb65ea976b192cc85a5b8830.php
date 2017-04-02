<?php

/* @FOSUser/layoutadmin.html.twig */
class __TwigTemplate_0c79fa92b6640eceb8ba7116310f32cfc93c7e101066085e2b9323850a0bd24b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'admin' => array($this, 'block_admin'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76badc27cd093d33956a47fd1337fca4415e91b0126b8e0daed9de74c4d49b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76badc27cd093d33956a47fd1337fca4415e91b0126b8e0daed9de74c4d49b2b->enter($__internal_76badc27cd093d33956a47fd1337fca4415e91b0126b8e0daed9de74c4d49b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layoutadmin.html.twig"));

        // line 1
        echo "<head>


    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 48
        echo "</head>
<body class=\"cbp-spmenu-push\">
<div class=\"main-content\">
    <!--left-fixed -navigation-->
    <div class=\" sidebar\" role=\"navigation\">
        <div class=\"navbar-collapse\">
            <nav class=\"cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left\" id=\"cbp-spmenu-s1\">
                <ul class=\"nav\" id=\"side-menu\">
                    <li>
                        <a href=\"index.html\" class=\"active\"><i class=\"fa fa-home nav_icon\"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("UsersBack");
        echo "\"><i class=\"fa fa-cogs nav_icon\"></i>Gestion Users <span class=\"nav-badge\">12</span> <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li>
                                <a href=\"grids.html\">Grid System</a>
                            </li>
                            <li>
                                <a href=\"media.html\">Media Objects</a>
                            </li>
                        </ul>
                        <!-- /nav-second-level -->
                    </li>
                    <li class=\"\">
                        <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminexperience");
        echo "\"><i class=\"fa fa-book nav_icon\"></i>Gestion Expérience <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li>
                                <a href=\"general.html\">General<span class=\"nav-badge-btm\">08</span></a>
                            </li>
                            <li>
                                <a href=\"typography.html\">Typography</a>
                            </li>
                        </ul>
                        <!-- /nav-second-level -->
                    </li>
                    <li>
                        <a href=\"widgets.html\"><i class=\"fa fa-th-large nav_icon\"></i>Gestion Annonces <span class=\"nav-badge-btm\">08</span></a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-envelope nav_icon\"></i>Mailbox<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li>
                                <a href=\"inbox.html\">Inbox <span class=\"nav-badge-btm\">05</span></a>
                            </li>
                            <li>
                                <a href=\"compose.html\">Compose email</a>
                            </li>
                        </ul>
                        <!-- //nav-second-level -->
                    </li>
                    <li>
                        <a href=\"tables.html\"><i class=\"fa fa-table nav_icon\"></i>Gesion SplitMeetings <span class=\"nav-badge\">05</span></a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-check-square-o nav_icon\"></i>Forms<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li>
                                <a href=\"forms.html\">Basic Forms <span class=\"nav-badge-btm\">07</span></a>
                            </li>
                            <li>
                                <a href=\"validation.html\">Validation</a>
                            </li>
                        </ul>
                        <!-- //nav-second-level -->
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-file-text-o nav_icon\"></i>Gestion Réclamations<span class=\"nav-badge-btm\">02</span><span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li>
                                <a href=\"login.html\">Login</a>
                            </li>
                            <li>
                                <a href=\"signup.html\">SignUp</a>
                            </li>
                            <li>
                                <a href=\"blank-page.html\">Blank Page</a>
                            </li>
                        </ul>
                        <!-- //nav-second-level -->
                    </li>
                    <li>
                        <a href=\"charts.html\" class=\"chart-nav\"><i class=\"fa fa-bar-chart nav_icon\"></i>Statistiques <span class=\"nav-badge-btm pull-right\">new</span></a>
                    </li>
                </ul>
                <!-- //sidebar-collapse -->
            </nav>
        </div>
    </div>
    <!--left-fixed -navigation-->
    <!-- header-starts -->
    <div class=\"sticky-header header-section \">

        <div class=\"header-left\">









            <!--toggle button start-->
            <button id=\"showLeftPush\"><i class=\"fa fa-bars\"></i></button>
            <!--toggle button end-->
            <!--logo -->
            <div class=\"logo\">
                <a href=\"\">
                    <h1>HostAndGuest</h1>
                    <span>AdminPanel</span>
                </a>
            </div>
            <!--//logo-->
            <!--search-box-->
            <div class=\"search-box\">
                <form class=\"input\">
                    <input class=\"sb-search-input input__field--madoka\" placeholder=\"Search...\" type=\"search\" id=\"input-31\" />
                    <label class=\"input__label\" for=\"input-31\">
                        <svg class=\"graphic\" width=\"100%\" height=\"100%\" viewBox=\"0 0 404 77\" preserveAspectRatio=\"none\">
                            <path d=\"m0,0l404,0l0,77l-404,0l0,-77z\"/>
                        </svg>
                    </label>
                </form>
            </div><!--//end-search-box-->
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"header-right\">
            <div class=\"profile_details_left\"><!--notifications of menu start -->
                <ul class=\"nofitications-dropdown\">

            </div>
            <!--notification menu end -->
            <div class=\"profile_details\">
                <ul>
                    <li class=\"dropdown profile_details_drop\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <div class=\"profile_img\">
                                <span class=\"prfil-img\"><img src=\"images/a.png\" alt=\"\"> </span>
                                <div class=\"user-name\">

                                    <span>Administrator</span>
                                </div>
                                <i class=\"fa fa-angle-down lnr\"></i>
                                <i class=\"fa fa-angle-up lnr\"></i>
                                <div class=\"clearfix\"></div>
                            </div>
                        </a>
                        <ul class=\"dropdown-menu drp-mnu\">

                            <li> <a href=\"#\"><i class=\"fa fa-user\"></i> Profile</a> </li>
                            <li> <a href=\"#\"><i class=\"fa fa-sign-out\"></i> Logout</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"clearfix\"> </div>
    </div>
    <!-- //header-ends -->
    <!-- main content start-->
    <div id=\"page-wrapper\">
        <div class=\"main-page\">
            <div class=\"row-one\">



                ";
        // line 215
        $this->displayBlock('admin', $context, $blocks);
        // line 224
        echo "

            <div class=\"clearfix\"> </div>
        </div>


    </div>

    <div class=\"footer\">
        <p>&copy; 2016 Novus Admin Panel. All Rights Reserved | Design by <a href=\"https://w3layouts.com/\" target=\"_blank\">w3layouts</a></p>
    </div>
    <!--//footer-->
</div>
<!-- Classie -->
<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/js/classie.js"), "html", null, true);
        echo "\"></script>
<script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;

    showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
    };


    function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
            classie.toggle( showLeftPush, 'disabled' );
        }
    }
</script>
<!--scrolling js-->
<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/js/scripts.js"), "html", null, true);
        echo "\"></script>
<!--//scrolling js-->
<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/js/bootstrap.js"), "html", null, true);
        echo "\"> </script>
</body>
</html>";
        
        $__internal_76badc27cd093d33956a47fd1337fca4415e91b0126b8e0daed9de74c4d49b2b->leave($__internal_76badc27cd093d33956a47fd1337fca4415e91b0126b8e0daed9de74c4d49b2b_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_964332dd419250cba2b4a128a06939d3cfa3de2f2bb9a9a692769333618a8c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964332dd419250cba2b4a128a06939d3cfa3de2f2bb9a9a692769333618a8c92->enter($__internal_964332dd419250cba2b4a128a06939d3cfa3de2f2bb9a9a692769333618a8c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 47
        echo "    ";
        
        $__internal_964332dd419250cba2b4a128a06939d3cfa3de2f2bb9a9a692769333618a8c92->leave($__internal_964332dd419250cba2b4a128a06939d3cfa3de2f2bb9a9a692769333618a8c92_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f1bb1b2422b3fe7900a9223ae58863e6bfe2780995bf35160669d85671bbf6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1bb1b2422b3fe7900a9223ae58863e6bfe2780995bf35160669d85671bbf6a->enter($__internal_1f1bb1b2422b3fe7900a9223ae58863e6bfe2780995bf35160669d85671bbf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Espace Adminstrateur";
        
        $__internal_1f1bb1b2422b3fe7900a9223ae58863e6bfe2780995bf35160669d85671bbf6a->leave($__internal_1f1bb1b2422b3fe7900a9223ae58863e6bfe2780995bf35160669d85671bbf6a_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_46c1f957d80177aa2eedc61fa0c30db095426c7ef40eb3560a4d050f76ea444e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c1f957d80177aa2eedc61fa0c30db095426c7ef40eb3560a4d050f76ea444e->enter($__internal_46c1f957d80177aa2eedc61fa0c30db095426c7ef40eb3560a4d050f76ea444e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/css/bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
        <!-- font CSS -->
        <!-- font-awesome icons -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- //font-awesome icons -->
        <!-- js-->
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
        <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <!--//webfonts-->
        <!--animate-->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->
        <!-- chart -->
        <script src=\"js/Chart.js\"></script>
        <!-- //chart -->
        <!--Calender-->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/css/clndr.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/js/underscore-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src= \"js/moment-2.2.1.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/js/clndr.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/js/site.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!--End Calender-->
        <!-- Metis Menu -->
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/js/custom.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("ADMIN/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--//Metis Menu -->

    ";
        
        $__internal_46c1f957d80177aa2eedc61fa0c30db095426c7ef40eb3560a4d050f76ea444e->leave($__internal_46c1f957d80177aa2eedc61fa0c30db095426c7ef40eb3560a4d050f76ea444e_prof);

    }

    // line 215
    public function block_admin($context, array $blocks = array())
    {
        $__internal_0fba14778f6a60b656a258c4f34f6b0dee5057461051620b3a7e16b0709842aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fba14778f6a60b656a258c4f34f6b0dee5057461051620b3a7e16b0709842aa->enter($__internal_0fba14778f6a60b656a258c4f34f6b0dee5057461051620b3a7e16b0709842aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        // line 216
        echo "






                ";
        
        $__internal_0fba14778f6a60b656a258c4f34f6b0dee5057461051620b3a7e16b0709842aa->leave($__internal_0fba14778f6a60b656a258c4f34f6b0dee5057461051620b3a7e16b0709842aa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layoutadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 216,  396 => 215,  385 => 43,  381 => 42,  377 => 41,  371 => 38,  367 => 37,  362 => 35,  358 => 34,  346 => 25,  342 => 24,  334 => 19,  330 => 18,  324 => 15,  318 => 12,  313 => 10,  308 => 7,  302 => 6,  290 => 5,  283 => 47,  281 => 6,  276 => 5,  270 => 4,  260 => 263,  254 => 260,  250 => 259,  226 => 238,  210 => 224,  208 => 215,  62 => 72,  47 => 60,  33 => 48,  31 => 4,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<head>


    {% block head %}
        <title>{% block title %} Espace Adminstrateur{% endblock %}</title>
    {% block stylesheet %}

        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
    <link href=\"{{ asset('ADMIN/css/bootstrap.css') }}\" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
    <link href=\"{{ asset('ADMIN/css/style.css') }}\" rel='stylesheet' type='text/css' />
        <!-- font CSS -->
        <!-- font-awesome icons -->
    <link href=\"{{ asset('ADMIN/css/font-awesome.css') }}\" rel=\"stylesheet\">
        <!-- //font-awesome icons -->
        <!-- js-->
        <script src=\"{{ asset('ADMIN/js/jquery-1.11.1.min.js') }}\"></script>
        <script src=\"{{ asset('ADMIN/js/modernizr.custom.js') }}\"></script>
        <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <!--//webfonts-->
        <!--animate-->
    <link href=\"{{ asset('ADMIN/css/animate.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        <script src=\"{{ asset('ADMIN/js/wow.min.js') }}\"></script>
        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->
        <!-- chart -->
        <script src=\"js/Chart.js\"></script>
        <!-- //chart -->
        <!--Calender-->
    <link rel=\"stylesheet\" href=\"{{ asset('ADMIN/css/clndr.css') }}\" type=\"text/css\" />
        <script src=\"{{ asset('ADMIN/js/underscore-min.js') }}\" type=\"text/javascript\"></script>
        <script src= \"js/moment-2.2.1.js\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('ADMIN/js/clndr.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{  asset('ADMIN/js/site.js') }}\" type=\"text/javascript\"></script>
        <!--End Calender-->
        <!-- Metis Menu -->
        <script src=\"{{ asset('ADMIN/js/metisMenu.min.js') }}\"></script>
        <script src=\"{{ asset('ADMIN/js/custom.js') }}\"></script>
    <link href=\"{{ asset('ADMIN/css/custom.css') }}\" rel=\"stylesheet\">
        <!--//Metis Menu -->

    {% endblock  %}
    {% endblock  %}
</head>
<body class=\"cbp-spmenu-push\">
<div class=\"main-content\">
    <!--left-fixed -navigation-->
    <div class=\" sidebar\" role=\"navigation\">
        <div class=\"navbar-collapse\">
            <nav class=\"cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left\" id=\"cbp-spmenu-s1\">
                <ul class=\"nav\" id=\"side-menu\">
                    <li>
                        <a href=\"index.html\" class=\"active\"><i class=\"fa fa-home nav_icon\"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href=\"{{ path('UsersBack') }}\"><i class=\"fa fa-cogs nav_icon\"></i>Gestion Users <span class=\"nav-badge\">12</span> <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li>
                                <a href=\"grids.html\">Grid System</a>
                            </li>
                            <li>
                                <a href=\"media.html\">Media Objects</a>
                            </li>
                        </ul>
                        <!-- /nav-second-level -->
                    </li>
                    <li class=\"\">
                        <a href=\"{{ path('adminexperience') }}\"><i class=\"fa fa-book nav_icon\"></i>Gestion Expérience <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li>
                                <a href=\"general.html\">General<span class=\"nav-badge-btm\">08</span></a>
                            </li>
                            <li>
                                <a href=\"typography.html\">Typography</a>
                            </li>
                        </ul>
                        <!-- /nav-second-level -->
                    </li>
                    <li>
                        <a href=\"widgets.html\"><i class=\"fa fa-th-large nav_icon\"></i>Gestion Annonces <span class=\"nav-badge-btm\">08</span></a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-envelope nav_icon\"></i>Mailbox<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li>
                                <a href=\"inbox.html\">Inbox <span class=\"nav-badge-btm\">05</span></a>
                            </li>
                            <li>
                                <a href=\"compose.html\">Compose email</a>
                            </li>
                        </ul>
                        <!-- //nav-second-level -->
                    </li>
                    <li>
                        <a href=\"tables.html\"><i class=\"fa fa-table nav_icon\"></i>Gesion SplitMeetings <span class=\"nav-badge\">05</span></a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-check-square-o nav_icon\"></i>Forms<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li>
                                <a href=\"forms.html\">Basic Forms <span class=\"nav-badge-btm\">07</span></a>
                            </li>
                            <li>
                                <a href=\"validation.html\">Validation</a>
                            </li>
                        </ul>
                        <!-- //nav-second-level -->
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-file-text-o nav_icon\"></i>Gestion Réclamations<span class=\"nav-badge-btm\">02</span><span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level collapse\">
                            <li>
                                <a href=\"login.html\">Login</a>
                            </li>
                            <li>
                                <a href=\"signup.html\">SignUp</a>
                            </li>
                            <li>
                                <a href=\"blank-page.html\">Blank Page</a>
                            </li>
                        </ul>
                        <!-- //nav-second-level -->
                    </li>
                    <li>
                        <a href=\"charts.html\" class=\"chart-nav\"><i class=\"fa fa-bar-chart nav_icon\"></i>Statistiques <span class=\"nav-badge-btm pull-right\">new</span></a>
                    </li>
                </ul>
                <!-- //sidebar-collapse -->
            </nav>
        </div>
    </div>
    <!--left-fixed -navigation-->
    <!-- header-starts -->
    <div class=\"sticky-header header-section \">

        <div class=\"header-left\">









            <!--toggle button start-->
            <button id=\"showLeftPush\"><i class=\"fa fa-bars\"></i></button>
            <!--toggle button end-->
            <!--logo -->
            <div class=\"logo\">
                <a href=\"\">
                    <h1>HostAndGuest</h1>
                    <span>AdminPanel</span>
                </a>
            </div>
            <!--//logo-->
            <!--search-box-->
            <div class=\"search-box\">
                <form class=\"input\">
                    <input class=\"sb-search-input input__field--madoka\" placeholder=\"Search...\" type=\"search\" id=\"input-31\" />
                    <label class=\"input__label\" for=\"input-31\">
                        <svg class=\"graphic\" width=\"100%\" height=\"100%\" viewBox=\"0 0 404 77\" preserveAspectRatio=\"none\">
                            <path d=\"m0,0l404,0l0,77l-404,0l0,-77z\"/>
                        </svg>
                    </label>
                </form>
            </div><!--//end-search-box-->
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"header-right\">
            <div class=\"profile_details_left\"><!--notifications of menu start -->
                <ul class=\"nofitications-dropdown\">

            </div>
            <!--notification menu end -->
            <div class=\"profile_details\">
                <ul>
                    <li class=\"dropdown profile_details_drop\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <div class=\"profile_img\">
                                <span class=\"prfil-img\"><img src=\"images/a.png\" alt=\"\"> </span>
                                <div class=\"user-name\">

                                    <span>Administrator</span>
                                </div>
                                <i class=\"fa fa-angle-down lnr\"></i>
                                <i class=\"fa fa-angle-up lnr\"></i>
                                <div class=\"clearfix\"></div>
                            </div>
                        </a>
                        <ul class=\"dropdown-menu drp-mnu\">

                            <li> <a href=\"#\"><i class=\"fa fa-user\"></i> Profile</a> </li>
                            <li> <a href=\"#\"><i class=\"fa fa-sign-out\"></i> Logout</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
        <div class=\"clearfix\"> </div>
    </div>
    <!-- //header-ends -->
    <!-- main content start-->
    <div id=\"page-wrapper\">
        <div class=\"main-page\">
            <div class=\"row-one\">



                {% block admin %}







                {% endblock %}


            <div class=\"clearfix\"> </div>
        </div>


    </div>

    <div class=\"footer\">
        <p>&copy; 2016 Novus Admin Panel. All Rights Reserved | Design by <a href=\"https://w3layouts.com/\" target=\"_blank\">w3layouts</a></p>
    </div>
    <!--//footer-->
</div>
<!-- Classie -->
<script src=\"{{ asset('ADMIN/js/classie.js') }}\"></script>
<script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;

    showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
    };


    function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
            classie.toggle( showLeftPush, 'disabled' );
        }
    }
</script>
<!--scrolling js-->
<script src=\"{{ asset('ADMIN/js/jquery.nicescroll.js') }}\"></script>
<script src=\"{{ asset('ADMIN/js/scripts.js') }}\"></script>
<!--//scrolling js-->
<!-- Bootstrap Core JavaScript -->
<script src=\"{{ asset('ADMIN/js/bootstrap.js') }}\"> </script>
</body>
</html>", "@FOSUser/layoutadmin.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\layoutadmin.html.twig");
    }
}

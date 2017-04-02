<?php

/* @HostAndGuest/layout3.html.twig */
class __TwigTemplate_2fc871690cc944e26d8cc69ddefd645ac9a9789a11545d84f1ff8232f2392f7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c206f4804478fb0ed90910b5f9c72cc576e3265f2e1e0146f8a4a465912a07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c206f4804478fb0ed90910b5f9c72cc576e3265f2e1e0146f8a4a465912a07d->enter($__internal_1c206f4804478fb0ed90910b5f9c72cc576e3265f2e1e0146f8a4a465912a07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/layout3.html.twig"));

        // line 1
        echo "<head>


    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 44
        echo "</head>



<body>
<!--header-->
<div class=\"header\">
    <div class=\"top-header navbar navbar-default\"><!--header-one-->
        <div class=\"container\">
            <div class=\"nav navbar-nav wow fadeInLeft animated\" data-wow-delay=\".5s\">

                ";
        // line 55
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 56
            echo "                    <p>Welcome to HostAndGuest </p>
                    ";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                    <a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>

                ";
        } else {
            // line 63
            echo "                    <p>Welcome to HostAndGuest <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Register </a> Or <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Sign In </a></p>
                ";
        }
        // line 65
        echo "            </div>
            <div class=\"nav navbar-nav navbar-right social-icons wow fadeInRight animated\" data-wow-delay=\".5s\">
                <ul>
                    <li><a href=\"#\"> </a></li>
                    <li><a href=\"#\" class=\"pin\"> </a></li>
                    <li><a href=\"#\" class=\"in\"> </a></li>
                    <li><a href=\"#\" class=\"be\"> </a></li>
                    <li><a href=\"#\" class=\"you\"> </a></li>
                    <li><a href=\"#\" class=\"vimeo\"> </a></li>
                </ul>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>
    <div class=\"header-two navbar navbar-default\"><!--header-two-->
        <div class=\"container\">
            <div class=\"nav navbar-nav header-two-left\">
                <ul>
                    <li><i class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"></i>+21621662847</li>
                    <li><i class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></i><a href=\"mailto:info@example.com\">HostAndGuest@gmail.com</a></li>
                </ul>
            </div>
            <div class=\"nav navbar-nav logo wow zoomIn animated\" data-wow-delay=\".7s\">
                <h1><a href=\"index.html\">Host <b>AndGuest</b><span class=\"tag\">For easy Traveling</span> </a></h1>
            </div>
            <div class=\"nav navbar-nav navbar-right header-two-right\">
                <div class=\"header-right my-account\">
                    ";
        // line 92
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 93
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                    ";
        }
        // line 95
        echo "                </div>

                <div class=\"header-right cart\">
                    <a href=\"#\"><span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a>
                    <h4><a href=\"checkout.html\">
                            <span class=\"simpleCart_total\"> \$0.00 </span> (<span id=\"simpleCart_quantity\" class=\"simpleCart_quantity\"> 0 </span>)
                        </a></h4>
                    <div class=\"cart-box\">
                        <p><a href=\"javascript:;\" class=\"simpleCart_empty\">Empty cart</a></p>
                        <div class=\"clearfix\"> </div>
                    </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>
    <div class=\"top-nav navbar navbar-default\"><!--header-three-->
        <div class=\"container\">
            <nav class=\"navbar\" role=\"navigation\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <!--navbar-header-->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav top-nav-info\">
                        <li><a href=\"index.html\" class=\"active\">Home</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Annonces<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu multi-column multi-column1\">
                                <div class=\"row\">
                                    <div class=\"col-sm-4 menu-grids menulist1\">
                                        <h4>Bath & Care</h4>
                                        <ul class=\"multi-column-dropdown \">
                                            <li><a class=\"list\" href=\"products.html\">Diapering</a></li>

                                        </ul>
                                        <ul class=\"multi-column-dropdown\">
                                            <li><a class=\"list\" href=\"products.html\">Body Wash</a></li>

                                        </ul>
                                    </div>
                                    <div class=\"col-sm-2 menu-grids\">
                                        <h4>Baby Clothes</h4>
                                        <ul class=\"multi-column-dropdown\">
                                            <li><a class=\"list\" href=\"products.html\">Onesies & Rompers</a></li>

                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3 menu-grids\">
                                        <ul class=\"multi-column-dropdown\">
                                            <li><a class=\"list\" href=\"products.html\">Blankets</a></li><li><a class=\"list\" href=\"products.html\">Gloves & Mittens</a></li>

                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3 menu-grids\">
                                        <ul class=\"multi-column-dropdown\">
                                            <li><h6><a class=\"list\" href=\"products.html\">Feeding & Nursing</a></h6></li>

                                        </ul>
                                    </div>
                                    <div class=\"clearfix\"> </div>
                                </div>
                            </ul>
                        </li>
                        <li class=\"dropdown grid\">
                            <a href=\"#\" class=\"dropdown-toggle list1\" data-toggle=\"dropdown\">Expériences<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu multi-column multi-column2\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3 menu-grids\">
                                        <h4>Liste des expériences</h4>
                                        <ul class=\"multi-column-dropdown\">
                                            <li><a class=\"list\" href=\"";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("FrontOffice");
        echo "\">Fil d'actualité</a></li>

                                        </ul>



                                        <ul class=\"multi-column-dropdown\">

                                            <li><a class=\"list\" href=\"";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("TopEx");
        echo "\">Top Expériences</a></li>

                                        </ul>

                                        <ul class=\"multi-column-dropdown\">

                                            <li><a class=\"list\" href=\"";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Add");
        echo "\">Ajout Expérience</a></li>

                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3 menu-grids\">
                                        <h4>Gestion Expériences</h4>
                                        <ul class=\"multi-column-dropdown\">
                                            <li><a class=\"list\" href=\"";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExperienceCustom");
        echo "\">Mes expériences</a></li>

                                        </ul>

                                        <ul class=\"multi-column-dropdown\">

                                            <li><a class=\"list\" href=\"";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ExperiencePersonnalisé");
        echo "\">Expériences personnalisés</a></li>

                                        </ul>
                                    </div>



                                    <div class=\"clearfix\"> </div>
                                </div>
                            </ul>
                        </li>
                        <li class=\"dropdown grid\">
                            <a href=\"#\" class=\"dropdown-toggle list1\" data-toggle=\"dropdown\">SplitMeeting<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu multi-column menu-two multi-column3\">
                                <div class=\"row\">
                                    <div class=\"col-sm-4 menu-grids\">
                                        <ul class=\"multi-column-dropdown\">
                                            <li><a class=\"list\" href=\"products.html\">Jewellery</a></li>

                                        </ul>
                                    </div>
                                    <div class=\"col-sm-8 menu-grids\">
                                        <a href=\"products.html\">
                                            <div class=\"new-add\">
                                                <h5>30% OFF <br> Today Only</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"clearfix\"> </div>
                                </div>
                            </ul>
                        </li>
                        <li class=\"dropdown grid\">
                            <a href=\"#\" class=\"dropdown-toggle list1\" data-toggle=\"dropdown\">Famille d'accueil <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu multi-column multi-column4\">
                                <div class=\"row\">
                                    <div class=\"col-sm-4 menu-grids menulist1\">
                                        <h4>BABY</h4>
                                        <ul class=\"multi-column-dropdown \">
                                            <li><a class=\"list\" href=\"products.html\">Rockers</a></li>

                                        </ul>
                                        <ul class=\"multi-column-dropdown\">
                                            <li><a class=\"list\" href=\"products.html\">Toys Dolls</a></li>

                                        </ul>
                                    </div>
                                    <div class=\"col-sm-2 menu-grids\">
                                        <h4>Pretend Play</h4>
                                        <ul class=\"multi-column-dropdown\">
                                            <li><h6><a class=\"list\" href=\"products.html\">Video Games</a></h6></li>

                                        </ul>
                                    </div>
                                    <div class=\"col-sm-2 menu-grids\">
                                        <h4>Outdoor</h4>
                                        <ul class=\"multi-column-dropdown\">
                                            <li><a class=\"list\" href=\"products.html\">Swimming</a></li>

                                        </ul>
                                    </div>
                                    <div class=\"col-sm-4 menu-grids\">
                                        <a href=\"products.html\">
                                            <div class=\"new-add\">
                                                <h5>30% OFF <br> Today Only</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"clearfix\"> </div>
                                </div>
                            </ul>
                        </li>
                        <li><a href=\"codes.html\">Special Offers</a></li>
                    </ul>

        </div>
    </div>
</div>
<!--//header-->
<!--banner-->
<div class=\"banner\">
    <div class=\"container\">
        ";
        // line 281
        $this->displayBlock('contenu', $context, $blocks);
        // line 640
        echo "    <br>
    <br>
    <br>

<!--//trend-->
<!--footer-->
<div class=\"footer\">
    <div class=\"container\">
        <div class=\"footer-info\">
            <div class=\"col-md-4 footer-grids wow fadeInUp animated\" data-wow-delay=\".5s\">
                <h4 class=\"footer-logo\"><a href=\"index.html\">Host <b>AndGuest</b> <span class=\"tag\">Traveling easy</span> </a></h4>
                <p>© 2016 Modern Shoppe . All rights reserved | Design by <a href=\"http://w3layouts.com\" target=\"_blank\">W3layouts</a></p>
            </div>
            <div class=\"col-md-4 footer-grids wow fadeInUp animated\" data-wow-delay=\".7s\">
                <h3>Popular</h3>
                <ul>
                    <li><a href=\"about.html\"s>Annonces</a></li>
                    <li><a href=\"products.html\">Expéreinces</a></li>
                    <li><a href=\"contact.html\">SplitMeeting</a></li>
                    <li><a href=\"faq.html\">Famille d'Accueil</a></li>
                    <li><a href=\"checkout.html\">Contact US</a></li>
                </ul>
            </div>
            <div class=\"col-md-4 footer-grids wow fadeInUp animated\" data-wow-delay=\".9s\">
                <h3>Subscribe</h3>
                <p>Sign Up Now For More Information <br> About Our Company </p>
                <form>
                    <input type=\"text\" placeholder=\"Enter Your Email\" required=\"\">
                    <input type=\"submit\" value=\"Go\">
                </form>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
</div>

<!--//footer-->
<!--search jQuery-->
<script src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/js/main.js"), "html", null, true);
        echo "\"></script>
<!--//search jQuery-->
<!--smooth-scrolling-of-move-up-->
<script type=\"text/javascript\">
    \$(document).ready(function() {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };

        \$().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!--//smooth-scrolling-of-move-up-->
<!--Bootstrap core JavaScript
================================================== -->
<!--Placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 699
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_1c206f4804478fb0ed90910b5f9c72cc576e3265f2e1e0146f8a4a465912a07d->leave($__internal_1c206f4804478fb0ed90910b5f9c72cc576e3265f2e1e0146f8a4a465912a07d_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_0901b64a5ccc4248921653d65d8622cf436ece16369706479c9297a7236e7532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0901b64a5ccc4248921653d65d8622cf436ece16369706479c9297a7236e7532->enter($__internal_0901b64a5ccc4248921653d65d8622cf436ece16369706479c9297a7236e7532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 43
        echo "    ";
        
        $__internal_0901b64a5ccc4248921653d65d8622cf436ece16369706479c9297a7236e7532->leave($__internal_0901b64a5ccc4248921653d65d8622cf436ece16369706479c9297a7236e7532_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_37c87f2ec0d286f4183fe153c1c63f31c085568d1341f5f87715c39a9734a2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c87f2ec0d286f4183fe153c1c63f31c085568d1341f5f87715c39a9734a2bb->enter($__internal_37c87f2ec0d286f4183fe153c1c63f31c085568d1341f5f87715c39a9734a2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Espace User";
        
        $__internal_37c87f2ec0d286f4183fe153c1c63f31c085568d1341f5f87715c39a9734a2bb->leave($__internal_37c87f2ec0d286f4183fe153c1c63f31c085568d1341f5f87715c39a9734a2bb_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_1376ebcb36803eca84abfdc810a4cf5efad4bc8f6c1edec3da2e6eca8a076d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1376ebcb36803eca84abfdc810a4cf5efad4bc8f6c1edec3da2e6eca8a076d32->enter($__internal_1376ebcb36803eca84abfdc810a4cf5efad4bc8f6c1edec3da2e6eca8a076d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/css/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
    <!--//Custom Theme files -->
    <!--js-->
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    <!--//js-->
    <!--cart-->
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/js/simpleCart.min.js"), "html", null, true);
        echo "\"></script>
    <!--cart-->
    <!--web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
    <!--web-fonts-->
    <!--animation-effect-->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        new WOW().init();
    </script>
    <!--//animation-effect-->
    <!--start-smooth-scrolling-->
    <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/js/move-top.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/js/easing.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".scroll\").click(function(event){
                event.preventDefault();
                \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!--//end-smooth-scrolling-->
    ";
        
        $__internal_1376ebcb36803eca84abfdc810a4cf5efad4bc8f6c1edec3da2e6eca8a076d32->leave($__internal_1376ebcb36803eca84abfdc810a4cf5efad4bc8f6c1edec3da2e6eca8a076d32_prof);

    }

    // line 281
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_c285c0b033d002935bad83c715f7d7a4521a188b6998d739cc0b88264ca52230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c285c0b033d002935bad83c715f7d7a4521a188b6998d739cc0b88264ca52230->enter($__internal_c285c0b033d002935bad83c715f7d7a4521a188b6998d739cc0b88264ca52230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 282
        echo "
        <div class=\"banner-text\">

            <div class=\"col-sm-5 banner-left wow fadeInLeft animated\" data-wow-delay=\".5s\">

                <h2>On Entire Fashion range</h2>
                <h3>Coming Soon </h3>
                <h4>Our New Designs</h4>
                <div class=\"count main-row\">
                    <ul id=\"example\">
                        <li><span class=\"hours\">00</span><p class=\"hours_text\">Hours</p></li>
                        <li><span class=\"minutes\">00</span><p class=\"minutes_text\">Minutes</p></li>
                        <li><span class=\"seconds\">00</span><p class=\"seconds_text\">Seconds</p></li>
                    </ul>
                    <div class=\"clearfix\"> </div>
                    <script type=\"text/javascript\" src=";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/js/jquery.countdown.min.js"), "html", null, true);
        echo "></script>
                    <script type=\"text/javascript\">
                        \$('#example').countdown({
                            date: '12/24/2020 15:59:59',
                            offset: -8,
                            day: 'Day',
                            days: 'Days'
                        }, function () {
                            alert('Done!');
                        });
                    </script>
                </div>

            </div>
            <div class=\"col-sm-7 banner-right wow fadeInRight animated\" data-wow-delay=\".5s\">
                <section class=\"slider grid\">
                    <div class=\"flexslider\">
                        <ul class=\"slides\">
                            <li>
                                <h4>-30%</h4>
                                <img src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/b1.png"), "html", null, true);
        echo "\" alt=\"\">
                            </li>
                            <li>
                                <h4>-25%</h4>
                                <img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/b2.png"), "html", null, true);
        echo "\" alt=\"\">
                            </li>
                            <li>
                                <h4>-32%</h4>
                                <img src= \"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/b3.png"), "html", null, true);
        echo "\" alt=\"\">
                            </li>
                        </ul>
                    </div>
                </section>
                <!--FlexSlider-->
                <script defer src=";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/js/jquery.flexslider.js"), "html", null, true);
        echo "></script>
                <script type=\"text/javascript\">
                    \$(window).load(function(){
                        \$('.flexslider').flexslider({
                            animation: \"pagination\",
                            start: function(slider){
                                \$('body').removeClass('loading');
                            }
                        });
                    });
                </script>
                <!--End-slider-script-->
            </div>

            <div class=\"clearfix\"> </div>
        </div>
    </div>
</div>
<!--//banner-->
<!--new-->
<div class=\"new\">
    <div class=\"container\">
        <div class=\"title-info wow fadeInUp animated\" data-wow-delay=\".5s\">
            <h3 class=\"title\">New <span>Arrivals</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
        </div>
        <div class=\"new-info\">
            <div class=\"col-md-3 new-grid simpleCart_shelfItem wow flipInY animated\" data-wow-delay=\".5s\">

                <div class=\"new-top\">
                    <a href=\"single.html\"><img src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/g9.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a>
                    <div class=\"new-text\">
                        <ul>
                            <li><a class=\"item_add\" href=\"\"> Add to cart</a></li>
                            <li><a href=\"single.html\">Quick View </a></li>
                            <li><a href=\"products.html\">Show Details </a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"new-bottom\">
                    <h5><a class=\"name\" href=\"single.html\">Baby Red Dress </a></h5>
                    <div class=\"rating\">
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span>☆</span>
                    </div>
                    <div class=\"ofr\">
                        <p class=\"pric1\"><del>\$2000.00</del></p>
                        <p><span class=\"item_price\">\$500.00</span></p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 new-grid new-mdl simpleCart_shelfItem wow flipInY animated\" data-wow-delay=\".7s\">
                <div class=\"new-top\">
                    <a href=\"single.html\"><img src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/g10.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a>
                    <div class=\"new-text\">
                        <ul>
                            <li><a class=\"item_add\" href=\"\"> Add to cart</a></li>
                            <li><a href=\"single.html\">Quick View </a></li>
                            <li><a href=\"products.html\">Show Details </a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"new-bottom\">
                    <h5><a class=\"name\" href=\"single.html\">Crocs Sandals </a></h5>
                    <div class=\"rating\">
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span>☆</span>
                    </div>
                    <div class=\"ofr\">
                        <p><span class=\"item_price\">\$50.00</span></p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 new-grid new-mdl1 simpleCart_shelfItem wow flipInY animated\" data-wow-delay=\".9s\">
                <div class=\"new-top\">
                    <a href=\"single.html\"><img src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/g11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a>
                    <div class=\"new-text\">
                        <ul>
                            <li><a class=\"item_add\" href=\"\"> Add to cart</a></li>
                            <li><a href=\"single.html\">Quick View </a></li>
                            <li><a href=\"products.html\">Show Details </a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"new-bottom\">
                    <h5><a class=\"name\" href=\"single.html\">Pink Sip Cup </a></h5>
                    <div class=\"rating\">
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span>☆</span>
                    </div>
                    <div class=\"ofr\">
                        <p><span class=\"item_price\">\$150.00</span></p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 new-grid simpleCart_shelfItem wow flipInY animated\" data-wow-delay=\"1.1s\">
                <div class=\"new-top\">
                    <a href=\"single.html\"><img src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/g12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a>
                    <div class=\"new-text\">
                        <ul>
                            <li><a class=\"item_add\" href=\"\"> Add to cart</a></li>
                            <li><a href=\"single.html\">Quick View </a></li>
                            <li><a href=\"products.html\">Show Details </a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"new-bottom\">
                    <h5><a class=\"name\" href=\"single.html\">Child Print Bike </a></h5>
                    <div class=\"rating\">
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span>☆</span>
                    </div>
                    <div class=\"ofr\">
                        <p class=\"pric1\"><del>\$5050.00</del></p>
                        <p><span class=\"item_price\">\$3020.00</span></p>
                    </div>
                </div>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>
</div>
<!--//new-->
<!--gallery-->
<div class=\"gallery\">
    <div class=\"container\">
        <div class=\"title-info wow fadeInUp animated\" data-wow-delay=\".5s\">
            <h3 class=\"title\">Popular<span> Products</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
        </div>
        <div class=\"gallery-info\">
            <div class=\"col-md-3 gallery-grid wow flipInY animated\" data-wow-delay=\".5s\">
                <a href=\"products.html\"><img src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/g1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a>
                <div class=\"gallery-text simpleCart_shelfItem\">
                    <h5><a class=\"name\" href=\"single.html\">Baby Girls' Dress </a></h5>
                    <p><span class=\"item_price\">100\$</span></p>
                    <h4 class=\"sizes\">Sizes: <a href=\"#\"> s</a> - <a href=\"#\">m</a> - <a href=\"#\">l</a> - <a href=\"#\">xl</a> </h4>
                    <ul>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></a></li>
                        <li><a class=\"item_add\" href=\"#\"><span class=\"glyphicon glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 gallery-grid gallery-grid1 wow flipInY animated\" data-wow-delay=\".7s\">
                <a href=\"products.html\"><img src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/g2.jpg"), "html", null, true);
        echo "\"\" class=\"img-responsive\" alt=\"\"/></a>
                <div class=\"gallery-text simpleCart_shelfItem\">
                    <h5><a class=\"name\" href=\"single.html\">Pokemon Onesies</a></h5>
                    <p><span class=\"item_price\">79\$</span></p>
                    <h4 class=\"sizes\">Sizes: <a href=\"#\"> s</a> - <a href=\"#\">m</a> - <a href=\"#\">l</a> - <a href=\"#\">xl</a> </h4>
                    <ul>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></a></li>
                        <li><a class=\"item_add\" href=\"#\"><span class=\"glyphicon glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 gallery-grid gallery-grid2 wow flipInY animated\" data-wow-delay=\".9s\">
                <a href=\"products.html\"><img src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/g3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a>
                <div class=\"gallery-text simpleCart_shelfItem\">
                    <h5><a class=\"name\" href=\"single.html\">Doctor Play Set</a></h5>
                    <p><span class=\"item_price\">30\$</span></p>
                    <h4 class=\"sizes\">Sizes: <a href=\"#\"> s</a> - <a href=\"#\">m</a> - <a href=\"#\">l</a> - <a href=\"#\">xl</a> </h4>
                    <ul>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></a></li>
                        <li><a class=\"item_add\" href=\"#\"><span class=\"glyphicon glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 gallery-grid wow flipInY animated\" data-wow-delay=\"1.1s\">
                <a href=\"products.html\"><img src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/g4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a>
                <div class=\"gallery-text simpleCart_shelfItem\">
                    <h5><a class=\"name\" href=\"single.html\">Cap & Gloves Set</a></h5>
                    <p><span class=\"item_price\">15\$</span></p>
                    <h4 class=\"sizes\">Sizes: <a href=\"#\"> s</a> - <a href=\"#\">m</a> - <a href=\"#\">l</a> - <a href=\"#\">xl</a> </h4>
                    <ul>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></a></li>
                        <li><a class=\"item_add\" href=\"#\"><span class=\"glyphicon glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 gallery-grid wow flipInY animated\" data-wow-delay=\".5s\">
                <a href=\"products.html\"><img src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/g5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a>
                <div class=\"gallery-text simpleCart_shelfItem\">
                    <p><span class=\"item_price\">60\$</span></p>
                    <h4 class=\"sizes\">Sizes: <a href=\"#\"> s</a> - <a href=\"#\">m</a> - <a href=\"#\">l</a> - <a href=\"#\">xl</a> </h4>
                    <ul>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></a></li>
                        <li><a class=\"item_add\" href=\"#\"><span class=\"glyphicon glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 gallery-grid gallery-grid1 wow flipInY animated\" data-wow-delay=\".7s\">
                <a href=\"products.html\"><img src=\"";
        // line 539
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/g6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a>
                <div class=\"gallery-text simpleCart_shelfItem\">
                    <h5><a class=\"name\" href=\"single.html\">Party Wear Frock</a></h5>
                    <p><span class=\"item_price\">80\$</span></p>
                    <h4 class=\"sizes\">Sizes: <a href=\"#\"> s</a> - <a href=\"#\">m</a> - <a href=\"#\">l</a> - <a href=\"#\">xl</a> </h4>
                    <ul>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></a></li>
                        <li><a class=\"item_add\" href=\"#\"><span class=\"glyphicon glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 gallery-grid gallery-grid2 wow flipInY animated\" data-wow-delay=\".9s\">
                <a href=\"products.html\"><img src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/g7.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a>
                <div class=\"gallery-text simpleCart_shelfItem\">
                    <h5><a class=\"name\" href=\"single.html\">Bear Diaper Bag</a></h5>
                    <p><span class=\"item_price\">110\$</span></p>
                    <h4 class=\"sizes\">Sizes: <a href=\"#\"> s</a> - <a href=\"#\">m</a> - <a href=\"#\">l</a> - <a href=\"#\">xl</a> </h4>
                    <ul>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></a></li>
                        <li><a class=\"item_add\" href=\"#\"><span class=\"glyphicon glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 gallery-grid wow flipInY animated\" data-wow-delay=\"1.1s\">
                <a href=\"products.html\"><img src=\"";
        // line 565
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/g8.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a>
                <div class=\"gallery-text simpleCart_shelfItem\">
                    <h5><a class=\"name\" href=\"single.html\">Battery Police Bike</a></h5>
                    <p><span class=\"item_price\">300\$</span></p>
                    <h4 class=\"sizes\">Sizes: <a href=\"#\"> s</a> - <a href=\"#\">m</a> - <a href=\"#\">l</a> - <a href=\"#\">xl</a> </h4>
                    <ul>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></a></li>
                        <li><a class=\"item_add\" href=\"#\"><span class=\"glyphicon glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
</div>
<!--//gallery-->
<!--trend-->
<div class=\"trend wow zoomIn animated\" data-wow-delay=\".5s\">
    <div class=\"container\">
        <div class=\"trend-info\">
            <section class=\"slider grid\">
                <div class=\"flexslider trend-slider\">
                    <ul class=\"slides\">
                        <li>
                            <div class=\"col-md-5 trend-left\">
                                <img src=\"";
        // line 591
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/t1.png"), "html", null, true);
        echo "\" alt=\"\"/>
                            </div>
                            <div class=\"col-md-7 trend-right\">
                                <h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
                                <h5>Flat 20% OFF</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
                            </div>
                            <div class=\"clearfix\"></div>
                        </li>
                        <li>
                            <div class=\"col-md-5 trend-left\">
                                <img src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/t2.png"), "html", null, true);
        echo "\" alt=\"\"/>
                            </div>
                            <div class=\"col-md-7 trend-right\">
                                <h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
                                <h5>Flat 20% OFF</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
                            </div>
                            <div class=\"clearfix\"></div>
                        </li>
                        <li>
                            <div class=\"col-md-5 trend-left\">
                                <img src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/t3.png"), "html", null, true);
        echo "\" alt=\"\"/>
                            </div>
                            <div class=\"col-md-7 trend-right\">
                                <h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
                                <h5>Flat 20% OFF</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
                            </div>
                            <div class=\"clearfix\"></div>
                        </li>
                        <li>
                            <div class=\"col-md-5 trend-left\">
                                <img src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Baby/images/t4.png"), "html", null, true);
        echo "\" alt=\"\"/>
                            </div>
                            <div class=\"col-md-7 trend-right\">
                                <h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
                                <h5>Flat 20% OFF</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
                            </div>
                            <div class=\"clearfix\"></div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>
";
        
        $__internal_c285c0b033d002935bad83c715f7d7a4521a188b6998d739cc0b88264ca52230->leave($__internal_c285c0b033d002935bad83c715f7d7a4521a188b6998d739cc0b88264ca52230_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/layout3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  912 => 624,  898 => 613,  884 => 602,  870 => 591,  841 => 565,  825 => 552,  809 => 539,  794 => 527,  778 => 514,  762 => 501,  746 => 488,  730 => 475,  689 => 437,  661 => 412,  633 => 387,  604 => 361,  571 => 331,  562 => 325,  555 => 321,  548 => 317,  525 => 297,  508 => 282,  502 => 281,  484 => 32,  480 => 31,  471 => 25,  467 => 24,  456 => 16,  450 => 13,  446 => 12,  440 => 9,  436 => 8,  431 => 7,  425 => 6,  413 => 5,  406 => 43,  404 => 6,  399 => 5,  393 => 4,  382 => 699,  358 => 678,  318 => 640,  316 => 281,  231 => 199,  222 => 193,  212 => 186,  203 => 180,  192 => 172,  113 => 95,  105 => 93,  103 => 92,  74 => 65,  66 => 63,  59 => 59,  55 => 58,  51 => 57,  48 => 56,  46 => 55,  33 => 44,  31 => 4,  26 => 1,);
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
    <title>{% block title %} Espace User{% endblock %}</title>
    {% block stylesheet %}
    <link href=\"{{ asset('Baby/css/bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"{{ asset('Baby/css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{ asset('Baby/css/flexslider.css') }}\" type=\"text/css\" media=\"screen\" />
    <!--//Custom Theme files -->
    <!--js-->
    <script src=\"{{ asset('Baby/js/jquery-1.11.1.min.js') }}\"></script>
    <script src=\"{{ asset('Baby/js/modernizr.custom.js')  }}\"></script>
    <!--//js-->
    <!--cart-->
    <script src=\"{{ asset('Baby/js/simpleCart.min.js') }}\"></script>
    <!--cart-->
    <!--web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
    <!--web-fonts-->
    <!--animation-effect-->
    <link href=\"{{ asset('Baby/css/animate.min.css') }}\" rel=\"stylesheet\">
    <script src=\"{{ asset('Baby/js/wow.min.js') }}\"></script>
    <script>
        new WOW().init();
    </script>
    <!--//animation-effect-->
    <!--start-smooth-scrolling-->
    <script type=\"text/javascript\" src=\"{{ asset('Baby/js/move-top.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Baby/js/easing.js') }}\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".scroll\").click(function(event){
                event.preventDefault();
                \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!--//end-smooth-scrolling-->
    {% endblock  %}
    {% endblock  %}
</head>



<body>
<!--header-->
<div class=\"header\">
    <div class=\"top-header navbar navbar-default\"><!--header-one-->
        <div class=\"container\">
            <div class=\"nav navbar-nav wow fadeInLeft animated\" data-wow-delay=\".5s\">

                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <p>Welcome to HostAndGuest </p>
                    {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                    <a href=\"{{ path('fos_user_security_logout') }}\">
                        {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                    </a>

                {% else %}
                    <p>Welcome to HostAndGuest <a href=\"{{ path('fos_user_registration_register') }}\">Register </a> Or <a href=\"{{ path('fos_user_security_login') }}\">Sign In </a></p>
                {% endif %}
            </div>
            <div class=\"nav navbar-nav navbar-right social-icons wow fadeInRight animated\" data-wow-delay=\".5s\">
                <ul>
                    <li><a href=\"#\"> </a></li>
                    <li><a href=\"#\" class=\"pin\"> </a></li>
                    <li><a href=\"#\" class=\"in\"> </a></li>
                    <li><a href=\"#\" class=\"be\"> </a></li>
                    <li><a href=\"#\" class=\"you\"> </a></li>
                    <li><a href=\"#\" class=\"vimeo\"> </a></li>
                </ul>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>
    <div class=\"header-two navbar navbar-default\"><!--header-two-->
        <div class=\"container\">
            <div class=\"nav navbar-nav header-two-left\">
                <ul>
                    <li><i class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"></i>+21621662847</li>
                    <li><i class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></i><a href=\"mailto:info@example.com\">HostAndGuest@gmail.com</a></li>
                </ul>
            </div>
            <div class=\"nav navbar-nav logo wow zoomIn animated\" data-wow-delay=\".7s\">
                <h1><a href=\"index.html\">Host <b>AndGuest</b><span class=\"tag\">For easy Traveling</span> </a></h1>
            </div>
            <div class=\"nav navbar-nav navbar-right header-two-right\">
                <div class=\"header-right my-account\">
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <a href=\"{{ path('fos_user_profile_show') }}\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> {{ app.user.username }}</a>
                    {% endif %}
                </div>

                <div class=\"header-right cart\">
                    <a href=\"#\"><span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a>
                    <h4><a href=\"checkout.html\">
                            <span class=\"simpleCart_total\"> \$0.00 </span> (<span id=\"simpleCart_quantity\" class=\"simpleCart_quantity\"> 0 </span>)
                        </a></h4>
                    <div class=\"cart-box\">
                        <p><a href=\"javascript:;\" class=\"simpleCart_empty\">Empty cart</a></p>
                        <div class=\"clearfix\"> </div>
                    </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>
    <div class=\"top-nav navbar navbar-default\"><!--header-three-->
        <div class=\"container\">
            <nav class=\"navbar\" role=\"navigation\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <!--navbar-header-->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav top-nav-info\">
                        <li><a href=\"index.html\" class=\"active\">Home</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Annonces<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu multi-column multi-column1\">
                                <div class=\"row\">
                                    <div class=\"col-sm-4 menu-grids menulist1\">
                                        <h4>Bath & Care</h4>
                                        <ul class=\"multi-column-dropdown \">
                                            <li><a class=\"list\" href=\"products.html\">Diapering</a></li>

                                        </ul>
                                        <ul class=\"multi-column-dropdown\">
                                            <li><a class=\"list\" href=\"products.html\">Body Wash</a></li>

                                        </ul>
                                    </div>
                                    <div class=\"col-sm-2 menu-grids\">
                                        <h4>Baby Clothes</h4>
                                        <ul class=\"multi-column-dropdown\">
                                            <li><a class=\"list\" href=\"products.html\">Onesies & Rompers</a></li>

                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3 menu-grids\">
                                        <ul class=\"multi-column-dropdown\">
                                            <li><a class=\"list\" href=\"products.html\">Blankets</a></li><li><a class=\"list\" href=\"products.html\">Gloves & Mittens</a></li>

                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3 menu-grids\">
                                        <ul class=\"multi-column-dropdown\">
                                            <li><h6><a class=\"list\" href=\"products.html\">Feeding & Nursing</a></h6></li>

                                        </ul>
                                    </div>
                                    <div class=\"clearfix\"> </div>
                                </div>
                            </ul>
                        </li>
                        <li class=\"dropdown grid\">
                            <a href=\"#\" class=\"dropdown-toggle list1\" data-toggle=\"dropdown\">Expériences<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu multi-column multi-column2\">
                                <div class=\"row\">
                                    <div class=\"col-sm-3 menu-grids\">
                                        <h4>Liste des expériences</h4>
                                        <ul class=\"multi-column-dropdown\">
                                            <li><a class=\"list\" href=\"{{ path('FrontOffice') }}\">Fil d'actualité</a></li>

                                        </ul>



                                        <ul class=\"multi-column-dropdown\">

                                            <li><a class=\"list\" href=\"{{ path('TopEx') }}\">Top Expériences</a></li>

                                        </ul>

                                        <ul class=\"multi-column-dropdown\">

                                            <li><a class=\"list\" href=\"{{ path('Add') }}\">Ajout Expérience</a></li>

                                        </ul>
                                    </div>
                                    <div class=\"col-sm-3 menu-grids\">
                                        <h4>Gestion Expériences</h4>
                                        <ul class=\"multi-column-dropdown\">
                                            <li><a class=\"list\" href=\"{{ path('ExperienceCustom') }}\">Mes expériences</a></li>

                                        </ul>

                                        <ul class=\"multi-column-dropdown\">

                                            <li><a class=\"list\" href=\"{{ path('ExperiencePersonnalisé') }}\">Expériences personnalisés</a></li>

                                        </ul>
                                    </div>



                                    <div class=\"clearfix\"> </div>
                                </div>
                            </ul>
                        </li>
                        <li class=\"dropdown grid\">
                            <a href=\"#\" class=\"dropdown-toggle list1\" data-toggle=\"dropdown\">SplitMeeting<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu multi-column menu-two multi-column3\">
                                <div class=\"row\">
                                    <div class=\"col-sm-4 menu-grids\">
                                        <ul class=\"multi-column-dropdown\">
                                            <li><a class=\"list\" href=\"products.html\">Jewellery</a></li>

                                        </ul>
                                    </div>
                                    <div class=\"col-sm-8 menu-grids\">
                                        <a href=\"products.html\">
                                            <div class=\"new-add\">
                                                <h5>30% OFF <br> Today Only</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"clearfix\"> </div>
                                </div>
                            </ul>
                        </li>
                        <li class=\"dropdown grid\">
                            <a href=\"#\" class=\"dropdown-toggle list1\" data-toggle=\"dropdown\">Famille d'accueil <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu multi-column multi-column4\">
                                <div class=\"row\">
                                    <div class=\"col-sm-4 menu-grids menulist1\">
                                        <h4>BABY</h4>
                                        <ul class=\"multi-column-dropdown \">
                                            <li><a class=\"list\" href=\"products.html\">Rockers</a></li>

                                        </ul>
                                        <ul class=\"multi-column-dropdown\">
                                            <li><a class=\"list\" href=\"products.html\">Toys Dolls</a></li>

                                        </ul>
                                    </div>
                                    <div class=\"col-sm-2 menu-grids\">
                                        <h4>Pretend Play</h4>
                                        <ul class=\"multi-column-dropdown\">
                                            <li><h6><a class=\"list\" href=\"products.html\">Video Games</a></h6></li>

                                        </ul>
                                    </div>
                                    <div class=\"col-sm-2 menu-grids\">
                                        <h4>Outdoor</h4>
                                        <ul class=\"multi-column-dropdown\">
                                            <li><a class=\"list\" href=\"products.html\">Swimming</a></li>

                                        </ul>
                                    </div>
                                    <div class=\"col-sm-4 menu-grids\">
                                        <a href=\"products.html\">
                                            <div class=\"new-add\">
                                                <h5>30% OFF <br> Today Only</h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=\"clearfix\"> </div>
                                </div>
                            </ul>
                        </li>
                        <li><a href=\"codes.html\">Special Offers</a></li>
                    </ul>

        </div>
    </div>
</div>
<!--//header-->
<!--banner-->
<div class=\"banner\">
    <div class=\"container\">
        {% block contenu %}

        <div class=\"banner-text\">

            <div class=\"col-sm-5 banner-left wow fadeInLeft animated\" data-wow-delay=\".5s\">

                <h2>On Entire Fashion range</h2>
                <h3>Coming Soon </h3>
                <h4>Our New Designs</h4>
                <div class=\"count main-row\">
                    <ul id=\"example\">
                        <li><span class=\"hours\">00</span><p class=\"hours_text\">Hours</p></li>
                        <li><span class=\"minutes\">00</span><p class=\"minutes_text\">Minutes</p></li>
                        <li><span class=\"seconds\">00</span><p class=\"seconds_text\">Seconds</p></li>
                    </ul>
                    <div class=\"clearfix\"> </div>
                    <script type=\"text/javascript\" src={{ asset('Baby/js/jquery.countdown.min.js') }}></script>
                    <script type=\"text/javascript\">
                        \$('#example').countdown({
                            date: '12/24/2020 15:59:59',
                            offset: -8,
                            day: 'Day',
                            days: 'Days'
                        }, function () {
                            alert('Done!');
                        });
                    </script>
                </div>

            </div>
            <div class=\"col-sm-7 banner-right wow fadeInRight animated\" data-wow-delay=\".5s\">
                <section class=\"slider grid\">
                    <div class=\"flexslider\">
                        <ul class=\"slides\">
                            <li>
                                <h4>-30%</h4>
                                <img src=\"{{ asset('Baby/images/b1.png') }}\" alt=\"\">
                            </li>
                            <li>
                                <h4>-25%</h4>
                                <img src=\"{{ asset('Baby/images/b2.png') }}\" alt=\"\">
                            </li>
                            <li>
                                <h4>-32%</h4>
                                <img src= \"{{ asset('Baby/images/b3.png') }}\" alt=\"\">
                            </li>
                        </ul>
                    </div>
                </section>
                <!--FlexSlider-->
                <script defer src={{ asset('Baby/js/jquery.flexslider.js') }}></script>
                <script type=\"text/javascript\">
                    \$(window).load(function(){
                        \$('.flexslider').flexslider({
                            animation: \"pagination\",
                            start: function(slider){
                                \$('body').removeClass('loading');
                            }
                        });
                    });
                </script>
                <!--End-slider-script-->
            </div>

            <div class=\"clearfix\"> </div>
        </div>
    </div>
</div>
<!--//banner-->
<!--new-->
<div class=\"new\">
    <div class=\"container\">
        <div class=\"title-info wow fadeInUp animated\" data-wow-delay=\".5s\">
            <h3 class=\"title\">New <span>Arrivals</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
        </div>
        <div class=\"new-info\">
            <div class=\"col-md-3 new-grid simpleCart_shelfItem wow flipInY animated\" data-wow-delay=\".5s\">

                <div class=\"new-top\">
                    <a href=\"single.html\"><img src=\"{{ asset('Baby/images/g9.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a>
                    <div class=\"new-text\">
                        <ul>
                            <li><a class=\"item_add\" href=\"\"> Add to cart</a></li>
                            <li><a href=\"single.html\">Quick View </a></li>
                            <li><a href=\"products.html\">Show Details </a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"new-bottom\">
                    <h5><a class=\"name\" href=\"single.html\">Baby Red Dress </a></h5>
                    <div class=\"rating\">
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span>☆</span>
                    </div>
                    <div class=\"ofr\">
                        <p class=\"pric1\"><del>\$2000.00</del></p>
                        <p><span class=\"item_price\">\$500.00</span></p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 new-grid new-mdl simpleCart_shelfItem wow flipInY animated\" data-wow-delay=\".7s\">
                <div class=\"new-top\">
                    <a href=\"single.html\"><img src=\"{{ asset('Baby/images/g10.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a>
                    <div class=\"new-text\">
                        <ul>
                            <li><a class=\"item_add\" href=\"\"> Add to cart</a></li>
                            <li><a href=\"single.html\">Quick View </a></li>
                            <li><a href=\"products.html\">Show Details </a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"new-bottom\">
                    <h5><a class=\"name\" href=\"single.html\">Crocs Sandals </a></h5>
                    <div class=\"rating\">
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span>☆</span>
                    </div>
                    <div class=\"ofr\">
                        <p><span class=\"item_price\">\$50.00</span></p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 new-grid new-mdl1 simpleCart_shelfItem wow flipInY animated\" data-wow-delay=\".9s\">
                <div class=\"new-top\">
                    <a href=\"single.html\"><img src=\"{{ asset('Baby/images/g11.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a>
                    <div class=\"new-text\">
                        <ul>
                            <li><a class=\"item_add\" href=\"\"> Add to cart</a></li>
                            <li><a href=\"single.html\">Quick View </a></li>
                            <li><a href=\"products.html\">Show Details </a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"new-bottom\">
                    <h5><a class=\"name\" href=\"single.html\">Pink Sip Cup </a></h5>
                    <div class=\"rating\">
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span>☆</span>
                    </div>
                    <div class=\"ofr\">
                        <p><span class=\"item_price\">\$150.00</span></p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 new-grid simpleCart_shelfItem wow flipInY animated\" data-wow-delay=\"1.1s\">
                <div class=\"new-top\">
                    <a href=\"single.html\"><img src=\"{{ asset('Baby/images/g12.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a>
                    <div class=\"new-text\">
                        <ul>
                            <li><a class=\"item_add\" href=\"\"> Add to cart</a></li>
                            <li><a href=\"single.html\">Quick View </a></li>
                            <li><a href=\"products.html\">Show Details </a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"new-bottom\">
                    <h5><a class=\"name\" href=\"single.html\">Child Print Bike </a></h5>
                    <div class=\"rating\">
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span class=\"on\">☆</span>
                        <span>☆</span>
                    </div>
                    <div class=\"ofr\">
                        <p class=\"pric1\"><del>\$5050.00</del></p>
                        <p><span class=\"item_price\">\$3020.00</span></p>
                    </div>
                </div>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>
</div>
<!--//new-->
<!--gallery-->
<div class=\"gallery\">
    <div class=\"container\">
        <div class=\"title-info wow fadeInUp animated\" data-wow-delay=\".5s\">
            <h3 class=\"title\">Popular<span> Products</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
        </div>
        <div class=\"gallery-info\">
            <div class=\"col-md-3 gallery-grid wow flipInY animated\" data-wow-delay=\".5s\">
                <a href=\"products.html\"><img src=\"{{ asset('Baby/images/g1.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a>
                <div class=\"gallery-text simpleCart_shelfItem\">
                    <h5><a class=\"name\" href=\"single.html\">Baby Girls' Dress </a></h5>
                    <p><span class=\"item_price\">100\$</span></p>
                    <h4 class=\"sizes\">Sizes: <a href=\"#\"> s</a> - <a href=\"#\">m</a> - <a href=\"#\">l</a> - <a href=\"#\">xl</a> </h4>
                    <ul>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></a></li>
                        <li><a class=\"item_add\" href=\"#\"><span class=\"glyphicon glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 gallery-grid gallery-grid1 wow flipInY animated\" data-wow-delay=\".7s\">
                <a href=\"products.html\"><img src=\"{{ asset('Baby/images/g2.jpg') }}\"\" class=\"img-responsive\" alt=\"\"/></a>
                <div class=\"gallery-text simpleCart_shelfItem\">
                    <h5><a class=\"name\" href=\"single.html\">Pokemon Onesies</a></h5>
                    <p><span class=\"item_price\">79\$</span></p>
                    <h4 class=\"sizes\">Sizes: <a href=\"#\"> s</a> - <a href=\"#\">m</a> - <a href=\"#\">l</a> - <a href=\"#\">xl</a> </h4>
                    <ul>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></a></li>
                        <li><a class=\"item_add\" href=\"#\"><span class=\"glyphicon glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 gallery-grid gallery-grid2 wow flipInY animated\" data-wow-delay=\".9s\">
                <a href=\"products.html\"><img src=\"{{ asset('Baby/images/g3.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a>
                <div class=\"gallery-text simpleCart_shelfItem\">
                    <h5><a class=\"name\" href=\"single.html\">Doctor Play Set</a></h5>
                    <p><span class=\"item_price\">30\$</span></p>
                    <h4 class=\"sizes\">Sizes: <a href=\"#\"> s</a> - <a href=\"#\">m</a> - <a href=\"#\">l</a> - <a href=\"#\">xl</a> </h4>
                    <ul>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></a></li>
                        <li><a class=\"item_add\" href=\"#\"><span class=\"glyphicon glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 gallery-grid wow flipInY animated\" data-wow-delay=\"1.1s\">
                <a href=\"products.html\"><img src=\"{{ asset('Baby/images/g4.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a>
                <div class=\"gallery-text simpleCart_shelfItem\">
                    <h5><a class=\"name\" href=\"single.html\">Cap & Gloves Set</a></h5>
                    <p><span class=\"item_price\">15\$</span></p>
                    <h4 class=\"sizes\">Sizes: <a href=\"#\"> s</a> - <a href=\"#\">m</a> - <a href=\"#\">l</a> - <a href=\"#\">xl</a> </h4>
                    <ul>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></a></li>
                        <li><a class=\"item_add\" href=\"#\"><span class=\"glyphicon glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 gallery-grid wow flipInY animated\" data-wow-delay=\".5s\">
                <a href=\"products.html\"><img src=\"{{ asset('Baby/images/g5.jpg')  }}\" class=\"img-responsive\" alt=\"\"/></a>
                <div class=\"gallery-text simpleCart_shelfItem\">
                    <p><span class=\"item_price\">60\$</span></p>
                    <h4 class=\"sizes\">Sizes: <a href=\"#\"> s</a> - <a href=\"#\">m</a> - <a href=\"#\">l</a> - <a href=\"#\">xl</a> </h4>
                    <ul>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></a></li>
                        <li><a class=\"item_add\" href=\"#\"><span class=\"glyphicon glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 gallery-grid gallery-grid1 wow flipInY animated\" data-wow-delay=\".7s\">
                <a href=\"products.html\"><img src=\"{{ asset('Baby/images/g6.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a>
                <div class=\"gallery-text simpleCart_shelfItem\">
                    <h5><a class=\"name\" href=\"single.html\">Party Wear Frock</a></h5>
                    <p><span class=\"item_price\">80\$</span></p>
                    <h4 class=\"sizes\">Sizes: <a href=\"#\"> s</a> - <a href=\"#\">m</a> - <a href=\"#\">l</a> - <a href=\"#\">xl</a> </h4>
                    <ul>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></a></li>
                        <li><a class=\"item_add\" href=\"#\"><span class=\"glyphicon glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 gallery-grid gallery-grid2 wow flipInY animated\" data-wow-delay=\".9s\">
                <a href=\"products.html\"><img src=\"{{ asset('Baby/images/g7.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a>
                <div class=\"gallery-text simpleCart_shelfItem\">
                    <h5><a class=\"name\" href=\"single.html\">Bear Diaper Bag</a></h5>
                    <p><span class=\"item_price\">110\$</span></p>
                    <h4 class=\"sizes\">Sizes: <a href=\"#\"> s</a> - <a href=\"#\">m</a> - <a href=\"#\">l</a> - <a href=\"#\">xl</a> </h4>
                    <ul>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></a></li>
                        <li><a class=\"item_add\" href=\"#\"><span class=\"glyphicon glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 gallery-grid wow flipInY animated\" data-wow-delay=\"1.1s\">
                <a href=\"products.html\"><img src=\"{{ asset('Baby/images/g8.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a>
                <div class=\"gallery-text simpleCart_shelfItem\">
                    <h5><a class=\"name\" href=\"single.html\">Battery Police Bike</a></h5>
                    <p><span class=\"item_price\">300\$</span></p>
                    <h4 class=\"sizes\">Sizes: <a href=\"#\"> s</a> - <a href=\"#\">m</a> - <a href=\"#\">l</a> - <a href=\"#\">xl</a> </h4>
                    <ul>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span></a></li>
                        <li><a class=\"item_add\" href=\"#\"><span class=\"glyphicon glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span></a></li>
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon glyphicon-heart-empty\" aria-hidden=\"true\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
</div>
<!--//gallery-->
<!--trend-->
<div class=\"trend wow zoomIn animated\" data-wow-delay=\".5s\">
    <div class=\"container\">
        <div class=\"trend-info\">
            <section class=\"slider grid\">
                <div class=\"flexslider trend-slider\">
                    <ul class=\"slides\">
                        <li>
                            <div class=\"col-md-5 trend-left\">
                                <img src=\"{{ asset('Baby/images/t1.png') }}\" alt=\"\"/>
                            </div>
                            <div class=\"col-md-7 trend-right\">
                                <h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
                                <h5>Flat 20% OFF</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
                            </div>
                            <div class=\"clearfix\"></div>
                        </li>
                        <li>
                            <div class=\"col-md-5 trend-left\">
                                <img src=\"{{ asset('Baby/images/t2.png') }}\" alt=\"\"/>
                            </div>
                            <div class=\"col-md-7 trend-right\">
                                <h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
                                <h5>Flat 20% OFF</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
                            </div>
                            <div class=\"clearfix\"></div>
                        </li>
                        <li>
                            <div class=\"col-md-5 trend-left\">
                                <img src=\"{{ asset('Baby/images/t3.png') }}\" alt=\"\"/>
                            </div>
                            <div class=\"col-md-7 trend-right\">
                                <h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
                                <h5>Flat 20% OFF</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
                            </div>
                            <div class=\"clearfix\"></div>
                        </li>
                        <li>
                            <div class=\"col-md-5 trend-left\">
                                <img src=\"{{ asset('Baby/images/t4.png') }}\" alt=\"\"/>
                            </div>
                            <div class=\"col-md-7 trend-right\">
                                <h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
                                <h5>Flat 20% OFF</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
                            </div>
                            <div class=\"clearfix\"></div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>
{% endblock  %}
    <br>
    <br>
    <br>

<!--//trend-->
<!--footer-->
<div class=\"footer\">
    <div class=\"container\">
        <div class=\"footer-info\">
            <div class=\"col-md-4 footer-grids wow fadeInUp animated\" data-wow-delay=\".5s\">
                <h4 class=\"footer-logo\"><a href=\"index.html\">Host <b>AndGuest</b> <span class=\"tag\">Traveling easy</span> </a></h4>
                <p>© 2016 Modern Shoppe . All rights reserved | Design by <a href=\"http://w3layouts.com\" target=\"_blank\">W3layouts</a></p>
            </div>
            <div class=\"col-md-4 footer-grids wow fadeInUp animated\" data-wow-delay=\".7s\">
                <h3>Popular</h3>
                <ul>
                    <li><a href=\"about.html\"s>Annonces</a></li>
                    <li><a href=\"products.html\">Expéreinces</a></li>
                    <li><a href=\"contact.html\">SplitMeeting</a></li>
                    <li><a href=\"faq.html\">Famille d'Accueil</a></li>
                    <li><a href=\"checkout.html\">Contact US</a></li>
                </ul>
            </div>
            <div class=\"col-md-4 footer-grids wow fadeInUp animated\" data-wow-delay=\".9s\">
                <h3>Subscribe</h3>
                <p>Sign Up Now For More Information <br> About Our Company </p>
                <form>
                    <input type=\"text\" placeholder=\"Enter Your Email\" required=\"\">
                    <input type=\"submit\" value=\"Go\">
                </form>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
</div>

<!--//footer-->
<!--search jQuery-->
<script src=\"{{ asset('Baby/js/main.js') }}\"></script>
<!--//search jQuery-->
<!--smooth-scrolling-of-move-up-->
<script type=\"text/javascript\">
    \$(document).ready(function() {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };

        \$().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!--//smooth-scrolling-of-move-up-->
<!--Bootstrap core JavaScript
================================================== -->
<!--Placed at the end of the document so the pages load faster -->
<script src=\"{{ asset('Baby/js/bootstrap.js') }}\"></script>

</body>
</html>", "@HostAndGuest/layout3.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\layout3.html.twig");
    }
}

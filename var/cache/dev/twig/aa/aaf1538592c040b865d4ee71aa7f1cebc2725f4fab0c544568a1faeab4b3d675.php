<?php

/* HostAndGuestBundle::layoutadmin.html.twig */
class __TwigTemplate_b6279a3cff1e303fb7d356c904164e6c9ba9e1d492ec45f2558da2ab5ba8fa36 extends Twig_Template
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
        $__internal_a9f6e2873f15faf70d2dbb1f9735b39fde4dcf82e7ec667c955b3b76b3d3b322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f6e2873f15faf70d2dbb1f9735b39fde4dcf82e7ec667c955b3b76b3d3b322->enter($__internal_a9f6e2873f15faf70d2dbb1f9735b39fde4dcf82e7ec667c955b3b76b3d3b322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle::layoutadmin.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <meta name=\"description\" content=\"website description\" />
    <meta name=\"keywords\" content=\"website keywords, website keywords\" />
    <meta http-equiv=\"content-type\" content=\"text/html; charset=windows-1252\" />


    ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 19
        echo "

<body>
<div id=\"main\">
    <div id=\"header\">
        <div id=\"logo\">
            <div id=\"logo_text\">
                <!-- class=\"logo_colour\", allows you to change the colour of the text -->
                <h1><a href=\"index.html\">Host<span class=\"logo_colour\">And Guest</span></a></h1>
                ";
        // line 28
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 29
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                    <a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 34
        echo "            </div>
        </div>
        <div id=\"menubar\">
            <ul id=\"menu\">
                <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
                <li class=\"selected\"><a href=\"\">Home</a></li>
                <li><a href=\"\">Gestion annonces</a></li>
                <li><a href=\"\">Gestion spleetmeeting</a></li>
                <li><a href=\"\">Gestion Expérience</a></li>
                <li><a href=\"\">Famille d'Accueil</a></li>


            </ul>
        </div>
    </div>

    <div id=\"site_content\">
        ";
        // line 51
        $this->displayBlock('admin', $context, $blocks);
        // line 53
        echo "


    </div>
    <div id=\"footer\">
        <p><a href=\"index.html\">Home</a> | <a href=\"examples.html\">Expériences</a> | <a href=\"page.html\">Annonces</a> | <a href=\"another_page.html\">SpleetMeeting</a> | <a href=\"contact.html\"> Famille d'accueil</a></p>

    </div>
</div>

</body>


</html>";
        
        $__internal_a9f6e2873f15faf70d2dbb1f9735b39fde4dcf82e7ec667c955b3b76b3d3b322->leave($__internal_a9f6e2873f15faf70d2dbb1f9735b39fde4dcf82e7ec667c955b3b76b3d3b322_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_6cf841ec01d9bd8e2d79c9267151b845c5dcc52f572e096e77f712e3147bc5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf841ec01d9bd8e2d79c9267151b845c5dcc52f572e096e77f712e3147bc5f4->enter($__internal_6cf841ec01d9bd8e2d79c9267151b845c5dcc52f572e096e77f712e3147bc5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 18
        echo "    ";
        
        $__internal_6cf841ec01d9bd8e2d79c9267151b845c5dcc52f572e096e77f712e3147bc5f4->leave($__internal_6cf841ec01d9bd8e2d79c9267151b845c5dcc52f572e096e77f712e3147bc5f4_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d55bbf4fd30a864a67283d25d34a6334c2e0bc6856c04ffd3737942d2296183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d55bbf4fd30a864a67283d25d34a6334c2e0bc6856c04ffd3737942d2296183->enter($__internal_5d55bbf4fd30a864a67283d25d34a6334c2e0bc6856c04ffd3737942d2296183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Espace Admin";
        
        $__internal_5d55bbf4fd30a864a67283d25d34a6334c2e0bc6856c04ffd3737942d2296183->leave($__internal_5d55bbf4fd30a864a67283d25d34a6334c2e0bc6856c04ffd3737942d2296183_prof);

    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a56aa54ba71e36232a0ecbbd0c62babf46abbd5ae1ad8431b1008b8b1a07b9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56aa54ba71e36232a0ecbbd0c62babf46abbd5ae1ad8431b1008b8b1a07b9ee->enter($__internal_a56aa54ba71e36232a0ecbbd0c62babf46abbd5ae1ad8431b1008b8b1a07b9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">



            <link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("night_sky_2/style/style.css"), "html", null, true);
        echo " />
        ";
        
        $__internal_a56aa54ba71e36232a0ecbbd0c62babf46abbd5ae1ad8431b1008b8b1a07b9ee->leave($__internal_a56aa54ba71e36232a0ecbbd0c62babf46abbd5ae1ad8431b1008b8b1a07b9ee_prof);

    }

    // line 51
    public function block_admin($context, array $blocks = array())
    {
        $__internal_8d049ed443eb2907ce8d78d2195aeb3bf9470c5ec9648378c06e32dae7309a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d049ed443eb2907ce8d78d2195aeb3bf9470c5ec9648378c06e32dae7309a09->enter($__internal_8d049ed443eb2907ce8d78d2195aeb3bf9470c5ec9648378c06e32dae7309a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        // line 52
        echo "        ";
        
        $__internal_8d049ed443eb2907ce8d78d2195aeb3bf9470c5ec9648378c06e32dae7309a09->leave($__internal_8d049ed443eb2907ce8d78d2195aeb3bf9470c5ec9648378c06e32dae7309a09_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle::layoutadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 52,  160 => 51,  151 => 16,  145 => 12,  139 => 11,  127 => 10,  120 => 18,  118 => 11,  113 => 10,  107 => 9,  87 => 53,  85 => 51,  66 => 34,  60 => 31,  56 => 30,  51 => 29,  49 => 28,  38 => 19,  36 => 9,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>
<head>
    <meta name=\"description\" content=\"website description\" />
    <meta name=\"keywords\" content=\"website keywords, website keywords\" />
    <meta http-equiv=\"content-type\" content=\"text/html; charset=windows-1252\" />


    {% block head %}
        <title>{% block title %} Espace Admin{% endblock %}</title>
        {% block stylesheet %}
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">



            <link rel=\"stylesheet\" type=\"text/css\" href={{ asset('night_sky_2/style/style.css') }} />
        {% endblock  %}
    {% endblock  %}


<body>
<div id=\"main\">
    <div id=\"header\">
        <div id=\"logo\">
            <div id=\"logo_text\">
                <!-- class=\"logo_colour\", allows you to change the colour of the text -->
                <h1><a href=\"index.html\">Host<span class=\"logo_colour\">And Guest</span></a></h1>
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                    <a href=\"{{ path('fos_user_security_logout') }}\">
                        {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                    </a>
                {% endif %}
            </div>
        </div>
        <div id=\"menubar\">
            <ul id=\"menu\">
                <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
                <li class=\"selected\"><a href=\"\">Home</a></li>
                <li><a href=\"\">Gestion annonces</a></li>
                <li><a href=\"\">Gestion spleetmeeting</a></li>
                <li><a href=\"\">Gestion Expérience</a></li>
                <li><a href=\"\">Famille d'Accueil</a></li>


            </ul>
        </div>
    </div>

    <div id=\"site_content\">
        {% block admin %}
        {% endblock  %}



    </div>
    <div id=\"footer\">
        <p><a href=\"index.html\">Home</a> | <a href=\"examples.html\">Expériences</a> | <a href=\"page.html\">Annonces</a> | <a href=\"another_page.html\">SpleetMeeting</a> | <a href=\"contact.html\"> Famille d'accueil</a></p>

    </div>
</div>

</body>


</html>", "HostAndGuestBundle::layoutadmin.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/layoutadmin.html.twig");
    }
}

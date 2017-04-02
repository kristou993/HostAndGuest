<?php

/* @FOSUser/layoutadmin.html.twig */
class __TwigTemplate_1d90e096d814aaa6b831367501421f723868c60ca96aeaaa46b3786f96057398 extends Twig_Template
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
        $__internal_20d07923a91ca5504f4f21a0446367b844938c3afa0a99f1c8eb372e052f7cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d07923a91ca5504f4f21a0446367b844938c3afa0a99f1c8eb372e052f7cd8->enter($__internal_20d07923a91ca5504f4f21a0446367b844938c3afa0a99f1c8eb372e052f7cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layoutadmin.html.twig"));

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
        
        $__internal_20d07923a91ca5504f4f21a0446367b844938c3afa0a99f1c8eb372e052f7cd8->leave($__internal_20d07923a91ca5504f4f21a0446367b844938c3afa0a99f1c8eb372e052f7cd8_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_7cd979a9ac7b8cfc01fb76adff16c81c881d9e3d4dadfa738b58392f562cf379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd979a9ac7b8cfc01fb76adff16c81c881d9e3d4dadfa738b58392f562cf379->enter($__internal_7cd979a9ac7b8cfc01fb76adff16c81c881d9e3d4dadfa738b58392f562cf379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 18
        echo "    ";
        
        $__internal_7cd979a9ac7b8cfc01fb76adff16c81c881d9e3d4dadfa738b58392f562cf379->leave($__internal_7cd979a9ac7b8cfc01fb76adff16c81c881d9e3d4dadfa738b58392f562cf379_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed604b1fe7f7f1588cf41d4918b890e3f6f68f58dd23fe5994407a43ee6c19c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed604b1fe7f7f1588cf41d4918b890e3f6f68f58dd23fe5994407a43ee6c19c4->enter($__internal_ed604b1fe7f7f1588cf41d4918b890e3f6f68f58dd23fe5994407a43ee6c19c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Espace Admin";
        
        $__internal_ed604b1fe7f7f1588cf41d4918b890e3f6f68f58dd23fe5994407a43ee6c19c4->leave($__internal_ed604b1fe7f7f1588cf41d4918b890e3f6f68f58dd23fe5994407a43ee6c19c4_prof);

    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_767a357c8d143aae3c0aeb7f4c0c2aa89277f4c8429e560e163b77f909a00f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767a357c8d143aae3c0aeb7f4c0c2aa89277f4c8429e560e163b77f909a00f52->enter($__internal_767a357c8d143aae3c0aeb7f4c0c2aa89277f4c8429e560e163b77f909a00f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">



            <link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("night_sky_2/style/style.css"), "html", null, true);
        echo " />
        ";
        
        $__internal_767a357c8d143aae3c0aeb7f4c0c2aa89277f4c8429e560e163b77f909a00f52->leave($__internal_767a357c8d143aae3c0aeb7f4c0c2aa89277f4c8429e560e163b77f909a00f52_prof);

    }

    // line 51
    public function block_admin($context, array $blocks = array())
    {
        $__internal_7d45dec2fe19d643b8eadc35be683627a8d789bf6b75cbcc67ce9b1c9efa1c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d45dec2fe19d643b8eadc35be683627a8d789bf6b75cbcc67ce9b1c9efa1c59->enter($__internal_7d45dec2fe19d643b8eadc35be683627a8d789bf6b75cbcc67ce9b1c9efa1c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        // line 52
        echo "        ";
        
        $__internal_7d45dec2fe19d643b8eadc35be683627a8d789bf6b75cbcc67ce9b1c9efa1c59->leave($__internal_7d45dec2fe19d643b8eadc35be683627a8d789bf6b75cbcc67ce9b1c9efa1c59_prof);

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


</html>", "@FOSUser/layoutadmin.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\layoutadmin.html.twig");
    }
}

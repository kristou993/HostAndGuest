<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_6b6a166054b2871e1c5c3ee0714f2b5cd6934ec3f18ca90704420082b5869875 extends Twig_Template
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
        $__internal_a0b1e4993cca743696bbf52b1db50b78792e206d6b56013fae36c4f755c0bcbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b1e4993cca743696bbf52b1db50b78792e206d6b56013fae36c4f755c0bcbb->enter($__internal_a0b1e4993cca743696bbf52b1db50b78792e206d6b56013fae36c4f755c0bcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "
<!DOCTYPE HTML>
<html>
<head>
    <meta name=\"description\" content=\"website description\" />
    <meta name=\"keywords\" content=\"website keywords, website keywords\" />
    <meta http-equiv=\"content-type\" content=\"text/html; charset=windows-1252\" />


    ";
        // line 10
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
            echo "                ";
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
        echo "                <div id=\"menubar\">
                    <ul id=\"menu\">
                        <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
                        <li class=\"selected\"><a href=\"\">Home</a></li>
                        <li><a href=\"\">Annonces</a></li>
                        <li><a href=\"l\">SpleetMeeting</a></li>
                        <li><a href=";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("FrontOffice");
        echo ">Experiences</a></li>
                        <li><a href=\"\">Famille d'Accueil</a></li>
                        <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Profil</a></li>

                    </ul>
                </div>


            </div>
        </div>

    </div>

    <div id=\"site_content\" >



        ";
        // line 57
        $this->displayBlock('contenu', $context, $blocks);
        // line 59
        echo "


    </div>

    <div id=\"footer\">
        <p><a href=\"index.html\">Home</a> | <a href=\"examples.html\">Expériences</a> | <a href=\"page.html\">Annonces</a> | <a href=\"another_page.html\">SpleetMeeting</a> | <a href=\"contact.html\"> Famille d'accueil</a></p>
    </div>
</div>

</body>


</html>";
        
        $__internal_a0b1e4993cca743696bbf52b1db50b78792e206d6b56013fae36c4f755c0bcbb->leave($__internal_a0b1e4993cca743696bbf52b1db50b78792e206d6b56013fae36c4f755c0bcbb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9186f44d9e6e7e4e04c1c77315aa781595b13aed7b3ad974fe18697a3a88008c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9186f44d9e6e7e4e04c1c77315aa781595b13aed7b3ad974fe18697a3a88008c->enter($__internal_9186f44d9e6e7e4e04c1c77315aa781595b13aed7b3ad974fe18697a3a88008c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 11
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 12
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 18
        echo "    ";
        
        $__internal_9186f44d9e6e7e4e04c1c77315aa781595b13aed7b3ad974fe18697a3a88008c->leave($__internal_9186f44d9e6e7e4e04c1c77315aa781595b13aed7b3ad974fe18697a3a88008c_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_f307aeb1940b00a2483f3427d282293f41ec28682a7758b5345259a29c579d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f307aeb1940b00a2483f3427d282293f41ec28682a7758b5345259a29c579d32->enter($__internal_f307aeb1940b00a2483f3427d282293f41ec28682a7758b5345259a29c579d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Espace User";
        
        $__internal_f307aeb1940b00a2483f3427d282293f41ec28682a7758b5345259a29c579d32->leave($__internal_f307aeb1940b00a2483f3427d282293f41ec28682a7758b5345259a29c579d32_prof);

    }

    // line 12
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_99770fd7e7039fe73682729185bab190a2ce8f9448f194ae4b94904d9e1843f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99770fd7e7039fe73682729185bab190a2ce8f9448f194ae4b94904d9e1843f2->enter($__internal_99770fd7e7039fe73682729185bab190a2ce8f9448f194ae4b94904d9e1843f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">


    <link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("night_sky_2/style/style.css"), "html", null, true);
        echo " />
        ";
        
        $__internal_99770fd7e7039fe73682729185bab190a2ce8f9448f194ae4b94904d9e1843f2->leave($__internal_99770fd7e7039fe73682729185bab190a2ce8f9448f194ae4b94904d9e1843f2_prof);

    }

    // line 57
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_d20ae303f234628e508a5e9dd00ea6fd80fd4d6c3950145339514900bedc2928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20ae303f234628e508a5e9dd00ea6fd80fd4d6c3950145339514900bedc2928->enter($__internal_d20ae303f234628e508a5e9dd00ea6fd80fd4d6c3950145339514900bedc2928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 58
        echo "        ";
        
        $__internal_d20ae303f234628e508a5e9dd00ea6fd80fd4d6c3950145339514900bedc2928->leave($__internal_d20ae303f234628e508a5e9dd00ea6fd80fd4d6c3950145339514900bedc2928_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 58,  172 => 57,  163 => 16,  158 => 13,  152 => 12,  140 => 11,  133 => 18,  131 => 12,  126 => 11,  120 => 10,  100 => 59,  98 => 57,  80 => 42,  75 => 40,  67 => 34,  61 => 31,  57 => 30,  52 => 29,  50 => 28,  39 => 19,  37 => 10,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE HTML>
<html>
<head>
    <meta name=\"description\" content=\"website description\" />
    <meta name=\"keywords\" content=\"website keywords, website keywords\" />
    <meta http-equiv=\"content-type\" content=\"text/html; charset=windows-1252\" />


    {% block head %}
        <title>{% block title %} Espace User{% endblock %}</title>
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
                <div id=\"menubar\">
                    <ul id=\"menu\">
                        <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
                        <li class=\"selected\"><a href=\"\">Home</a></li>
                        <li><a href=\"\">Annonces</a></li>
                        <li><a href=\"l\">SpleetMeeting</a></li>
                        <li><a href={{ path('FrontOffice') }}>Experiences</a></li>
                        <li><a href=\"\">Famille d'Accueil</a></li>
                        <li><a href=\"{{ path('fos_user_profile_show') }}\">Profil</a></li>

                    </ul>
                </div>


            </div>
        </div>

    </div>

    <div id=\"site_content\" >



        {% block contenu %}
        {% endblock  %}



    </div>

    <div id=\"footer\">
        <p><a href=\"index.html\">Home</a> | <a href=\"examples.html\">Expériences</a> | <a href=\"page.html\">Annonces</a> | <a href=\"another_page.html\">SpleetMeeting</a> | <a href=\"contact.html\"> Famille d'accueil</a></p>
    </div>
</div>

</body>


</html>", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\layout.html.twig");
    }
}

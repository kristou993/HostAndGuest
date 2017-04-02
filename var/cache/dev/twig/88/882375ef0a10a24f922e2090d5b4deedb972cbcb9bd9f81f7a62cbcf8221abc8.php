<?php

/* HostAndGuestBundle:Registration:confirmed.html.twig */
class __TwigTemplate_d18cf261cd120d156a727b0735268d8dae93e157b373b3155ed77d4fae441428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "HostAndGuestBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@HostAndGuest/layout3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed3b41c2e3db9f403f9a7b0e7d16dde1ee88cc0c640621e5c1cae377a9d6608a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed3b41c2e3db9f403f9a7b0e7d16dde1ee88cc0c640621e5c1cae377a9d6608a->enter($__internal_ed3b41c2e3db9f403f9a7b0e7d16dde1ee88cc0c640621e5c1cae377a9d6608a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed3b41c2e3db9f403f9a7b0e7d16dde1ee88cc0c640621e5c1cae377a9d6608a->leave($__internal_ed3b41c2e3db9f403f9a7b0e7d16dde1ee88cc0c640621e5c1cae377a9d6608a_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_cbba790ba9929e7527e32cafc46a12a07d1fc2a84ba5f292a43c433be9f8e277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbba790ba9929e7527e32cafc46a12a07d1fc2a84ba5f292a43c433be9f8e277->enter($__internal_cbba790ba9929e7527e32cafc46a12a07d1fc2a84ba5f292a43c433be9f8e277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "   <h2 <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p></h2>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 10
        echo "    <p> <a href=";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo ">Connexion ?</a>.</p>
";
        
        $__internal_cbba790ba9929e7527e32cafc46a12a07d1fc2a84ba5f292a43c433be9f8e277->leave($__internal_cbba790ba9929e7527e32cafc46a12a07d1fc2a84ba5f292a43c433be9f8e277_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@HostAndGuest/layout3.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block contenu %}
   <h2 <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p></h2>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
    <p> <a href={{ path('fos_user_security_login') }}>Connexion ?</a>.</p>
{% endblock  %}
", "HostAndGuestBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Registration/confirmed.html.twig");
    }
}

<?php

/* @HostAndGuest/Registration/confirmed.html.twig */
class __TwigTemplate_c13a5f98f7f63bb92b38e0c2521c7775e745534f3f1b3f2784e1acd740f5f04e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "@HostAndGuest/Registration/confirmed.html.twig", 1);
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
        $__internal_8e459a3743d4bc3571957c6aaa9aa0d263bf667932e83f5c37a055874de67a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e459a3743d4bc3571957c6aaa9aa0d263bf667932e83f5c37a055874de67a0b->enter($__internal_8e459a3743d4bc3571957c6aaa9aa0d263bf667932e83f5c37a055874de67a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e459a3743d4bc3571957c6aaa9aa0d263bf667932e83f5c37a055874de67a0b->leave($__internal_8e459a3743d4bc3571957c6aaa9aa0d263bf667932e83f5c37a055874de67a0b_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_23eacc2068f210d6e95f573ed4b4a5a3ffd3a2f010cc6f494c35a5956c366257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23eacc2068f210d6e95f573ed4b4a5a3ffd3a2f010cc6f494c35a5956c366257->enter($__internal_23eacc2068f210d6e95f573ed4b4a5a3ffd3a2f010cc6f494c35a5956c366257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_23eacc2068f210d6e95f573ed4b4a5a3ffd3a2f010cc6f494c35a5956c366257->leave($__internal_23eacc2068f210d6e95f573ed4b4a5a3ffd3a2f010cc6f494c35a5956c366257_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Registration/confirmed.html.twig";
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
", "@HostAndGuest/Registration/confirmed.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}

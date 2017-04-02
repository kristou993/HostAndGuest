<?php

/* HostAndGuestBundle:Registration:check_email.html.twig */
class __TwigTemplate_c2c9b1e9b646c8e0886e77fdc5faabc45cd7be2f60903b190895916cf055cb5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "HostAndGuestBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@HostAndGuest/layout3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c379f4a962b020734756180da2f4e027418b8f3da11b5388061f905e372c23b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c379f4a962b020734756180da2f4e027418b8f3da11b5388061f905e372c23b4->enter($__internal_c379f4a962b020734756180da2f4e027418b8f3da11b5388061f905e372c23b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c379f4a962b020734756180da2f4e027418b8f3da11b5388061f905e372c23b4->leave($__internal_c379f4a962b020734756180da2f4e027418b8f3da11b5388061f905e372c23b4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4950af83fd0215738f82fb3b4d3e101982c3b4604b03576d2fed480ca006e694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4950af83fd0215738f82fb3b4d3e101982c3b4604b03576d2fed480ca006e694->enter($__internal_4950af83fd0215738f82fb3b4d3e101982c3b4604b03576d2fed480ca006e694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4950af83fd0215738f82fb3b4d3e101982c3b4604b03576d2fed480ca006e694->leave($__internal_4950af83fd0215738f82fb3b4d3e101982c3b4604b03576d2fed480ca006e694_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "HostAndGuestBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Registration/check_email.html.twig");
    }
}

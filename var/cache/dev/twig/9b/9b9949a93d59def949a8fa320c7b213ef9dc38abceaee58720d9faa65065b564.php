<?php

/* HostAndGuestBundle:Profile:show_content.html.twig */
class __TwigTemplate_c284383edfef86a7f495e7fe6816e28c54417392226f2e6923f63a798073e1ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d17e1a85d5764a9e1ece46e5f06ded22f8d4c22d45bcda342437356d89d889ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17e1a85d5764a9e1ece46e5f06ded22f8d4c22d45bcda342437356d89d889ee->enter($__internal_d17e1a85d5764a9e1ece46e5f06ded22f8d4c22d45bcda342437356d89d889ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <h2>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h2>
    <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</h2>
    <h2> Nom: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</h2>
    <h2> Prenom: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</h2>
    <h2> Adresse: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</h2>
<br>
    <br>
    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" class=\" btn btn-primary\">
        <i class=\"glyphicon glyphicon-edit\"></i>
        Modifier
    </a>
</div>
";
        
        $__internal_d17e1a85d5764a9e1ece46e5f06ded22f8d4c22d45bcda342437356d89d889ee->leave($__internal_d17e1a85d5764a9e1ece46e5f06ded22f8d4c22d45bcda342437356d89d889ee_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  46 => 8,  42 => 7,  38 => 6,  32 => 5,  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <h2>{{ 'profile.show.username'|trans }}: {{ user.username }}</h2>
    <h2>{{ 'profile.show.email'|trans }}: {{ user.email }}</h2>
    <h2> Nom: {{ user.nom }}</h2>
    <h2> Prenom: {{ user.prenom }}</h2>
    <h2> Adresse: {{ user.adresse }}</h2>
<br>
    <br>
    <a href=\"{{ path('fos_user_profile_edit') }}\" class=\" btn btn-primary\">
        <i class=\"glyphicon glyphicon-edit\"></i>
        Modifier
    </a>
</div>
", "HostAndGuestBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Profile/show_content.html.twig");
    }
}

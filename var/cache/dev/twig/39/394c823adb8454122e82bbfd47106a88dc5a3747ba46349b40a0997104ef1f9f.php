<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_126d53c636ec7bee41ddc0659f53173571a3b43d16b2380cb1b4dc2b042075a2 extends Twig_Template
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
        $__internal_57e2be9c12054bcc76ff82c5febc3513b95a262875fe45afb0ee79ba5ac81c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e2be9c12054bcc76ff82c5febc3513b95a262875fe45afb0ee79ba5ac81c46->enter($__internal_57e2be9c12054bcc76ff82c5febc3513b95a262875fe45afb0ee79ba5ac81c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <h3 class=\"title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "  </h3>
    <h3 class=\"title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</h3>
    <h3 class=\"title\"> Nom: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</h3>
    <h3 class=\"title\"> Prenom: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</h3>
    <h3 class=\"title\"> Adresse: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</h3>
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
        
        $__internal_57e2be9c12054bcc76ff82c5febc3513b95a262875fe45afb0ee79ba5ac81c46->leave($__internal_57e2be9c12054bcc76ff82c5febc3513b95a262875fe45afb0ee79ba5ac81c46_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
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
    <h3 class=\"title\">{{ 'profile.show.username'|trans }}: {{ user.username }}  </h3>
    <h3 class=\"title\">{{ 'profile.show.email'|trans }}: {{ user.email }}</h3>
    <h3 class=\"title\"> Nom: {{ user.nom }}</h3>
    <h3 class=\"title\"> Prenom: {{ user.prenom }}</h3>
    <h3 class=\"title\"> Adresse: {{ user.adresse }}</h3>
<br>
    <br>
    <a href=\"{{ path('fos_user_profile_edit') }}\" class=\" btn btn-primary\">
        <i class=\"glyphicon glyphicon-edit\"></i>
        Modifier
    </a>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}

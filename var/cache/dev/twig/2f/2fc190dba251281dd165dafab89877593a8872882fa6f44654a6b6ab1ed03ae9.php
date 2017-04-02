<?php

/* @HostAndGuest/Group/show_content.html.twig */
class __TwigTemplate_fd90486bfcb7ec76ff610161bc45f10d8069d01f75d1757d4fce01c0dc0a40de extends Twig_Template
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
        $__internal_0c632c4e8f954cd445320e1cec1a75a3fd9804cdb77f16fd477923d0698e1a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c632c4e8f954cd445320e1cec1a75a3fd9804cdb77f16fd477923d0698e1a8a->enter($__internal_0c632c4e8f954cd445320e1cec1a75a3fd9804cdb77f16fd477923d0698e1a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_0c632c4e8f954cd445320e1cec1a75a3fd9804cdb77f16fd477923d0698e1a8a->leave($__internal_0c632c4e8f954cd445320e1cec1a75a3fd9804cdb77f16fd477923d0698e1a8a_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@HostAndGuest/Group/show_content.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}

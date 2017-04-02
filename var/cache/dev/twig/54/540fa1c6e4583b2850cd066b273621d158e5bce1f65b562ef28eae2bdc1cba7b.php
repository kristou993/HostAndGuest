<?php

/* @HostAndGuest/Resetting/check_email.html.twig */
class __TwigTemplate_2af2a0f82c97db17df9bcdb8a332289ccb4af034caf145ff3da9a861ca615958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "@HostAndGuest/Resetting/check_email.html.twig", 1);
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
        $__internal_8abb540215825a0c3f73a33f7de2f62495fc2a87fbfc452257325ff6c22c1846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abb540215825a0c3f73a33f7de2f62495fc2a87fbfc452257325ff6c22c1846->enter($__internal_8abb540215825a0c3f73a33f7de2f62495fc2a87fbfc452257325ff6c22c1846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8abb540215825a0c3f73a33f7de2f62495fc2a87fbfc452257325ff6c22c1846->leave($__internal_8abb540215825a0c3f73a33f7de2f62495fc2a87fbfc452257325ff6c22c1846_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_973e82a438b784ad339c7002bbfe1255198eb36cfc62c6594bb4b88c959096fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973e82a438b784ad339c7002bbfe1255198eb36cfc62c6594bb4b88c959096fb->enter($__internal_973e82a438b784ad339c7002bbfe1255198eb36cfc62c6594bb4b88c959096fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_973e82a438b784ad339c7002bbfe1255198eb36cfc62c6594bb4b88c959096fb->leave($__internal_973e82a438b784ad339c7002bbfe1255198eb36cfc62c6594bb4b88c959096fb_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@HostAndGuest/Resetting/check_email.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}

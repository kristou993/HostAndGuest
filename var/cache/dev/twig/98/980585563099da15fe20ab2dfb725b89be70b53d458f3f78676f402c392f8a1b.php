<?php

/* HostAndGuestBundle:Resetting:check_email.html.twig */
class __TwigTemplate_e0bc40fd221fee5615b617213d4b34df9fafd53c3a263748194c4baa7afc1d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "HostAndGuestBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_10d086c6578923ea91d21b9c9722ff6058b9774a5af1ab85ca94efc2c182b3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d086c6578923ea91d21b9c9722ff6058b9774a5af1ab85ca94efc2c182b3ff->enter($__internal_10d086c6578923ea91d21b9c9722ff6058b9774a5af1ab85ca94efc2c182b3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10d086c6578923ea91d21b9c9722ff6058b9774a5af1ab85ca94efc2c182b3ff->leave($__internal_10d086c6578923ea91d21b9c9722ff6058b9774a5af1ab85ca94efc2c182b3ff_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_710823a56140b40b364301ebcebb2ab2285eb2604b3831794a50ac8c7b5b95d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710823a56140b40b364301ebcebb2ab2285eb2604b3831794a50ac8c7b5b95d0->enter($__internal_710823a56140b40b364301ebcebb2ab2285eb2604b3831794a50ac8c7b5b95d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_710823a56140b40b364301ebcebb2ab2285eb2604b3831794a50ac8c7b5b95d0->leave($__internal_710823a56140b40b364301ebcebb2ab2285eb2604b3831794a50ac8c7b5b95d0_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Resetting:check_email.html.twig";
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
", "HostAndGuestBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Resetting/check_email.html.twig");
    }
}

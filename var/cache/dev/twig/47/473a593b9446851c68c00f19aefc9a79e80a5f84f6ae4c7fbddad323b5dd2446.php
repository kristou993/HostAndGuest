<?php

/* @HostAndGuest/ChangePassword/change_password.html.twig */
class __TwigTemplate_a65021455af4fad2a3449320f502c41a4008134d13a5429a2673d0a7e156872e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@HostAndGuest/ChangePassword/change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5769c75cb03cc945e913cf6f144a973aad363b9351abdd8fcce94137db3fbe36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5769c75cb03cc945e913cf6f144a973aad363b9351abdd8fcce94137db3fbe36->enter($__internal_5769c75cb03cc945e913cf6f144a973aad363b9351abdd8fcce94137db3fbe36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5769c75cb03cc945e913cf6f144a973aad363b9351abdd8fcce94137db3fbe36->leave($__internal_5769c75cb03cc945e913cf6f144a973aad363b9351abdd8fcce94137db3fbe36_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b592de3e73637643c5b6b01834c3df294277bbaccb3f2d678bd3c8c9cdcef0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b592de3e73637643c5b6b01834c3df294277bbaccb3f2d678bd3c8c9cdcef0c9->enter($__internal_b592de3e73637643c5b6b01834c3df294277bbaccb3f2d678bd3c8c9cdcef0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@HostAndGuest/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_b592de3e73637643c5b6b01834c3df294277bbaccb3f2d678bd3c8c9cdcef0c9->leave($__internal_b592de3e73637643c5b6b01834c3df294277bbaccb3f2d678bd3c8c9cdcef0c9_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@HostAndGuest/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}

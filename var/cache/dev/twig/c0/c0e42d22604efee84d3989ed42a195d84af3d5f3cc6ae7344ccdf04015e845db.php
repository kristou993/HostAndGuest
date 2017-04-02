<?php

/* HostAndGuestBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_bdfe10cc3dd4be8bd75607bf8156c197802d4cb79e544346b49bfb614492695b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "HostAndGuestBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_60aec397e39cff47ff43f7394ae7c39d9f7b4134f39911ae7d8626ca2a59b61e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60aec397e39cff47ff43f7394ae7c39d9f7b4134f39911ae7d8626ca2a59b61e->enter($__internal_60aec397e39cff47ff43f7394ae7c39d9f7b4134f39911ae7d8626ca2a59b61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60aec397e39cff47ff43f7394ae7c39d9f7b4134f39911ae7d8626ca2a59b61e->leave($__internal_60aec397e39cff47ff43f7394ae7c39d9f7b4134f39911ae7d8626ca2a59b61e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2c24dab9ade3a30e46c30d37262d6082053d892b368fc32832ceed024fc55fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c24dab9ade3a30e46c30d37262d6082053d892b368fc32832ceed024fc55fd->enter($__internal_e2c24dab9ade3a30e46c30d37262d6082053d892b368fc32832ceed024fc55fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "HostAndGuestBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_e2c24dab9ade3a30e46c30d37262d6082053d892b368fc32832ceed024fc55fd->leave($__internal_e2c24dab9ade3a30e46c30d37262d6082053d892b368fc32832ceed024fc55fd_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:ChangePassword:change_password.html.twig";
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
", "HostAndGuestBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}

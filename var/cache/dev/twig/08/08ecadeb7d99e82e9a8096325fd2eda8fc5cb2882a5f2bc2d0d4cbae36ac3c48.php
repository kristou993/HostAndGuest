<?php

/* HostAndGuestBundle:Group:list.html.twig */
class __TwigTemplate_018cadbd90f5f1da557af0334819328e7e169b0f894de1d23bff7ec814d17e6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "HostAndGuestBundle:Group:list.html.twig", 1);
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
        $__internal_43175dbe44780b3147deeac8ab56ec51ecef0a6fd019399db563181918eb83b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43175dbe44780b3147deeac8ab56ec51ecef0a6fd019399db563181918eb83b8->enter($__internal_43175dbe44780b3147deeac8ab56ec51ecef0a6fd019399db563181918eb83b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43175dbe44780b3147deeac8ab56ec51ecef0a6fd019399db563181918eb83b8->leave($__internal_43175dbe44780b3147deeac8ab56ec51ecef0a6fd019399db563181918eb83b8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d30d33710de4d5673fe6255166aa736eaa0655d153f6fa370c2b1405f1819a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30d33710de4d5673fe6255166aa736eaa0655d153f6fa370c2b1405f1819a58->enter($__internal_d30d33710de4d5673fe6255166aa736eaa0655d153f6fa370c2b1405f1819a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "HostAndGuestBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d30d33710de4d5673fe6255166aa736eaa0655d153f6fa370c2b1405f1819a58->leave($__internal_d30d33710de4d5673fe6255166aa736eaa0655d153f6fa370c2b1405f1819a58_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "HostAndGuestBundle:Group:list.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Group/list.html.twig");
    }
}

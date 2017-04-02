<?php

/* HostAndGuestBundle:Profile:show.html.twig */
class __TwigTemplate_570bf26594ed4a5a3a2df6b4fbe21c83c274f16bcba6d4e567a11e2cf7506cc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "HostAndGuestBundle:Profile:show.html.twig", 1);
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
        $__internal_f2d94f2dc43728b5ddf1973044e8b686f07cc1570df86effe069a982e60ee794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d94f2dc43728b5ddf1973044e8b686f07cc1570df86effe069a982e60ee794->enter($__internal_f2d94f2dc43728b5ddf1973044e8b686f07cc1570df86effe069a982e60ee794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2d94f2dc43728b5ddf1973044e8b686f07cc1570df86effe069a982e60ee794->leave($__internal_f2d94f2dc43728b5ddf1973044e8b686f07cc1570df86effe069a982e60ee794_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_eaf6f9e7d4c08ca1b28bc7c9135fd1492b3f7116f6be54611eb22000d5cbab71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf6f9e7d4c08ca1b28bc7c9135fd1492b3f7116f6be54611eb22000d5cbab71->enter($__internal_eaf6f9e7d4c08ca1b28bc7c9135fd1492b3f7116f6be54611eb22000d5cbab71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "HostAndGuestBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_eaf6f9e7d4c08ca1b28bc7c9135fd1492b3f7116f6be54611eb22000d5cbab71->leave($__internal_eaf6f9e7d4c08ca1b28bc7c9135fd1492b3f7116f6be54611eb22000d5cbab71_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Profile:show.html.twig";
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
        return new Twig_Source("{% extends \"@HostAndGuest/layout3.html.twig\" %}

{% block contenu %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock %}
", "HostAndGuestBundle:Profile:show.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Profile/show.html.twig");
    }
}

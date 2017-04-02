<?php

/* HostAndGuestBundle:Group:show.html.twig */
class __TwigTemplate_48ab5bbf22f6048cdd2b837e982c4a66d11dfdd5ceec09428175e4439061ebbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "HostAndGuestBundle:Group:show.html.twig", 1);
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
        $__internal_b1a4d49283f33bb36b772e08537c62b55b55fc2277ea0438aafd0133db8f7238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a4d49283f33bb36b772e08537c62b55b55fc2277ea0438aafd0133db8f7238->enter($__internal_b1a4d49283f33bb36b772e08537c62b55b55fc2277ea0438aafd0133db8f7238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a4d49283f33bb36b772e08537c62b55b55fc2277ea0438aafd0133db8f7238->leave($__internal_b1a4d49283f33bb36b772e08537c62b55b55fc2277ea0438aafd0133db8f7238_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8eb9e0f3e32a9c1c164d4196d34c9ac2b25dfd3ebf71ae6e06018cc116cab8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8eb9e0f3e32a9c1c164d4196d34c9ac2b25dfd3ebf71ae6e06018cc116cab8c->enter($__internal_f8eb9e0f3e32a9c1c164d4196d34c9ac2b25dfd3ebf71ae6e06018cc116cab8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "HostAndGuestBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f8eb9e0f3e32a9c1c164d4196d34c9ac2b25dfd3ebf71ae6e06018cc116cab8c->leave($__internal_f8eb9e0f3e32a9c1c164d4196d34c9ac2b25dfd3ebf71ae6e06018cc116cab8c_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "HostAndGuestBundle:Group:show.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Group/show.html.twig");
    }
}

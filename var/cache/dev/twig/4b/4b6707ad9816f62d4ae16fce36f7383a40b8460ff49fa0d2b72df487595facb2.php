<?php

/* @HostAndGuest/Group/list.html.twig */
class __TwigTemplate_b86cd1c1e92f3e98358fea94ec2757b2e0c63e21c94ff3a4f79bb65cf4ca12b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@HostAndGuest/Group/list.html.twig", 1);
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
        $__internal_c5d430e0e0d32fd329d539e3fb8ed094c4f866ad006ab257bcbc5e04cc2f5529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d430e0e0d32fd329d539e3fb8ed094c4f866ad006ab257bcbc5e04cc2f5529->enter($__internal_c5d430e0e0d32fd329d539e3fb8ed094c4f866ad006ab257bcbc5e04cc2f5529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5d430e0e0d32fd329d539e3fb8ed094c4f866ad006ab257bcbc5e04cc2f5529->leave($__internal_c5d430e0e0d32fd329d539e3fb8ed094c4f866ad006ab257bcbc5e04cc2f5529_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_107c338119e4eba0ff8d78394eb7bcad7961ae05b79bdfbc743c1da706783ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107c338119e4eba0ff8d78394eb7bcad7961ae05b79bdfbc743c1da706783ca8->enter($__internal_107c338119e4eba0ff8d78394eb7bcad7961ae05b79bdfbc743c1da706783ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@HostAndGuest/Group/list.html.twig", 4)->display($context);
        
        $__internal_107c338119e4eba0ff8d78394eb7bcad7961ae05b79bdfbc743c1da706783ca8->leave($__internal_107c338119e4eba0ff8d78394eb7bcad7961ae05b79bdfbc743c1da706783ca8_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Group/list.html.twig";
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
", "@HostAndGuest/Group/list.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Group\\list.html.twig");
    }
}

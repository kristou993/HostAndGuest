<?php

/* HostAndGuestBundle:Group:new.html.twig */
class __TwigTemplate_13576f8b4a668f1cdfd230bd120a8b67af5d04b11231d375b09811ebd0b4747d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "HostAndGuestBundle:Group:new.html.twig", 1);
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
        $__internal_af5fb904fbf4a9a5ee907335725cf84b1df10b88df968ba50cb6a53461994c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5fb904fbf4a9a5ee907335725cf84b1df10b88df968ba50cb6a53461994c83->enter($__internal_af5fb904fbf4a9a5ee907335725cf84b1df10b88df968ba50cb6a53461994c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af5fb904fbf4a9a5ee907335725cf84b1df10b88df968ba50cb6a53461994c83->leave($__internal_af5fb904fbf4a9a5ee907335725cf84b1df10b88df968ba50cb6a53461994c83_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2870ae929b36a65ae914ad3be694dce5c1dbff7e841f03d56766440148040511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2870ae929b36a65ae914ad3be694dce5c1dbff7e841f03d56766440148040511->enter($__internal_2870ae929b36a65ae914ad3be694dce5c1dbff7e841f03d56766440148040511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "HostAndGuestBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_2870ae929b36a65ae914ad3be694dce5c1dbff7e841f03d56766440148040511->leave($__internal_2870ae929b36a65ae914ad3be694dce5c1dbff7e841f03d56766440148040511_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "HostAndGuestBundle:Group:new.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Group/new.html.twig");
    }
}

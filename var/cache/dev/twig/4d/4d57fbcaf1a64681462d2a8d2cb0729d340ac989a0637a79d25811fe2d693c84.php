<?php

/* @HostAndGuest/experience/Backoffice.html.twig */
class __TwigTemplate_b45bd5ef8790b271bf01a36282b5d431eff326ee1e7cd85714a6db8d41e8528f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layoutadmin.html.twig", "@HostAndGuest/experience/Backoffice.html.twig", 1);
        $this->blocks = array(
            'admin' => array($this, 'block_admin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layoutadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cbe1c5155acd93338030d35e8499603d0e72e3bdcb21c60bfc3f0b6aa4ce5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cbe1c5155acd93338030d35e8499603d0e72e3bdcb21c60bfc3f0b6aa4ce5c1->enter($__internal_8cbe1c5155acd93338030d35e8499603d0e72e3bdcb21c60bfc3f0b6aa4ce5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/experience/Backoffice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cbe1c5155acd93338030d35e8499603d0e72e3bdcb21c60bfc3f0b6aa4ce5c1->leave($__internal_8cbe1c5155acd93338030d35e8499603d0e72e3bdcb21c60bfc3f0b6aa4ce5c1_prof);

    }

    // line 3
    public function block_admin($context, array $blocks = array())
    {
        $__internal_383db585d407094f9c0ac246c1621951e2d8ac5be01eb67fb951868b6ded93a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383db585d407094f9c0ac246c1621951e2d8ac5be01eb67fb951868b6ded93a1->enter($__internal_383db585d407094f9c0ac246c1621951e2d8ac5be01eb67fb951868b6ded93a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        // line 4
        echo "

<div id=\"page-wrapper\">
    <div class=\"main-page\">
ICI LE BACK OFFICE

    </div>
</div>

";
        
        $__internal_383db585d407094f9c0ac246c1621951e2d8ac5be01eb67fb951868b6ded93a1->leave($__internal_383db585d407094f9c0ac246c1621951e2d8ac5be01eb67fb951868b6ded93a1_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/experience/Backoffice.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layoutadmin.html.twig\" %}

{% block admin %}


<div id=\"page-wrapper\">
    <div class=\"main-page\">
ICI LE BACK OFFICE

    </div>
</div>

{% endblock %}
", "@HostAndGuest/experience/Backoffice.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\experience\\Backoffice.html.twig");
    }
}

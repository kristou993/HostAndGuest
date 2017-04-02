<?php

/* HostAndGuestBundle:Resetting:request.html.twig */
class __TwigTemplate_fbb736498f9c49292e361a32989fa8c05238d22da37f0327640c179ec0c8451c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "HostAndGuestBundle:Resetting:request.html.twig", 1);
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
        $__internal_200fa80aea2b894c9d3edeee30c0bb13c7ed6183b0d6576ff6731f5bbefe428e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200fa80aea2b894c9d3edeee30c0bb13c7ed6183b0d6576ff6731f5bbefe428e->enter($__internal_200fa80aea2b894c9d3edeee30c0bb13c7ed6183b0d6576ff6731f5bbefe428e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_200fa80aea2b894c9d3edeee30c0bb13c7ed6183b0d6576ff6731f5bbefe428e->leave($__internal_200fa80aea2b894c9d3edeee30c0bb13c7ed6183b0d6576ff6731f5bbefe428e_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_22e553cdaffbe4238bcefbfa7ca05e6f00bc9631699f2078d38b6171b2a15c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e553cdaffbe4238bcefbfa7ca05e6f00bc9631699f2078d38b6171b2a15c86->enter($__internal_22e553cdaffbe4238bcefbfa7ca05e6f00bc9631699f2078d38b6171b2a15c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "HostAndGuestBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_22e553cdaffbe4238bcefbfa7ca05e6f00bc9631699f2078d38b6171b2a15c86->leave($__internal_22e553cdaffbe4238bcefbfa7ca05e6f00bc9631699f2078d38b6171b2a15c86_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock%}
", "HostAndGuestBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Resetting/request.html.twig");
    }
}

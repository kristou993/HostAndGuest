<?php

/* HostAndGuestBundle:Group:edit.html.twig */
class __TwigTemplate_a1c453cc13764a7b755da34e4e993a1272d3742399a3f2354c2f00983ff75b32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "HostAndGuestBundle:Group:edit.html.twig", 1);
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
        $__internal_ba4cbdd68462226b4afff1808ea13bd6a120798b937ab0a9f03dd92d3771cb39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4cbdd68462226b4afff1808ea13bd6a120798b937ab0a9f03dd92d3771cb39->enter($__internal_ba4cbdd68462226b4afff1808ea13bd6a120798b937ab0a9f03dd92d3771cb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba4cbdd68462226b4afff1808ea13bd6a120798b937ab0a9f03dd92d3771cb39->leave($__internal_ba4cbdd68462226b4afff1808ea13bd6a120798b937ab0a9f03dd92d3771cb39_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eab8c62f6fad227d3c1f9207e7f3947d89bee1f3bcbf8d3b9581665317b1479b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab8c62f6fad227d3c1f9207e7f3947d89bee1f3bcbf8d3b9581665317b1479b->enter($__internal_eab8c62f6fad227d3c1f9207e7f3947d89bee1f3bcbf8d3b9581665317b1479b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "HostAndGuestBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_eab8c62f6fad227d3c1f9207e7f3947d89bee1f3bcbf8d3b9581665317b1479b->leave($__internal_eab8c62f6fad227d3c1f9207e7f3947d89bee1f3bcbf8d3b9581665317b1479b_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "HostAndGuestBundle:Group:edit.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Group/edit.html.twig");
    }
}

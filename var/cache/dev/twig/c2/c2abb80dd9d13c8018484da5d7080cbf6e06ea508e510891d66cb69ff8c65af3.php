<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_5e528ebc609279bdef160507ef624ed196b2a141ca788fffeeb455f50d4fb146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_22be409cb47ac6203b78eebee4c534c83b3cdf6e9824fdb238c59f08138eb659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22be409cb47ac6203b78eebee4c534c83b3cdf6e9824fdb238c59f08138eb659->enter($__internal_22be409cb47ac6203b78eebee4c534c83b3cdf6e9824fdb238c59f08138eb659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22be409cb47ac6203b78eebee4c534c83b3cdf6e9824fdb238c59f08138eb659->leave($__internal_22be409cb47ac6203b78eebee4c534c83b3cdf6e9824fdb238c59f08138eb659_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_61e46dca710bcb2c1808164b91b0247c4c55e8a914f5f696694e74ea65ffd7f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e46dca710bcb2c1808164b91b0247c4c55e8a914f5f696694e74ea65ffd7f9->enter($__internal_61e46dca710bcb2c1808164b91b0247c4c55e8a914f5f696694e74ea65ffd7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_61e46dca710bcb2c1808164b91b0247c4c55e8a914f5f696694e74ea65ffd7f9->leave($__internal_61e46dca710bcb2c1808164b91b0247c4c55e8a914f5f696694e74ea65ffd7f9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}

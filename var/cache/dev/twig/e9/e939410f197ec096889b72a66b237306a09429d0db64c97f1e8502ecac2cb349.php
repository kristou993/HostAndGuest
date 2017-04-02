<?php

/* @HostAndGuest/Registration/register.html.twig */
class __TwigTemplate_ea58faed4f303e5168150e26a53696801f83d411b5b9eec622b35224217fae5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "@HostAndGuest/Registration/register.html.twig", 1);
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
        $__internal_dcbe6392bba753fd0ff39e284104e183356b67e411dbf5d772e15db98b729d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbe6392bba753fd0ff39e284104e183356b67e411dbf5d772e15db98b729d23->enter($__internal_dcbe6392bba753fd0ff39e284104e183356b67e411dbf5d772e15db98b729d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcbe6392bba753fd0ff39e284104e183356b67e411dbf5d772e15db98b729d23->leave($__internal_dcbe6392bba753fd0ff39e284104e183356b67e411dbf5d772e15db98b729d23_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_6b777728c96c9a87fff970cf1ef773f12061a445caa0ee82481619c1afe5f97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b777728c96c9a87fff970cf1ef773f12061a445caa0ee82481619c1afe5f97e->enter($__internal_6b777728c96c9a87fff970cf1ef773f12061a445caa0ee82481619c1afe5f97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@HostAndGuest/Registration/register.html.twig", 4)->display($context);
        
        $__internal_6b777728c96c9a87fff970cf1ef773f12061a445caa0ee82481619c1afe5f97e->leave($__internal_6b777728c96c9a87fff970cf1ef773f12061a445caa0ee82481619c1afe5f97e_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock %}
", "@HostAndGuest/Registration/register.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}

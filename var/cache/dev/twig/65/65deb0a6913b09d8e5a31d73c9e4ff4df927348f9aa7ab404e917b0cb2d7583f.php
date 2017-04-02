<?php

/* HostAndGuestBundle:Registration:register.html.twig */
class __TwigTemplate_53f60a7af5788e176c22af1264fd12d0ea47369b2a099d11af2dc7c2d819938e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "HostAndGuestBundle:Registration:register.html.twig", 1);
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
        $__internal_6f0b193a4409f48c53ede9626c1f4e712ee0a4834ced50d0385eea7795349a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0b193a4409f48c53ede9626c1f4e712ee0a4834ced50d0385eea7795349a8f->enter($__internal_6f0b193a4409f48c53ede9626c1f4e712ee0a4834ced50d0385eea7795349a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f0b193a4409f48c53ede9626c1f4e712ee0a4834ced50d0385eea7795349a8f->leave($__internal_6f0b193a4409f48c53ede9626c1f4e712ee0a4834ced50d0385eea7795349a8f_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_7786731388d53904375131d67f04c40f18d4a771037f22d748e0d3f7f0fd9bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7786731388d53904375131d67f04c40f18d4a771037f22d748e0d3f7f0fd9bc3->enter($__internal_7786731388d53904375131d67f04c40f18d4a771037f22d748e0d3f7f0fd9bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "HostAndGuestBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7786731388d53904375131d67f04c40f18d4a771037f22d748e0d3f7f0fd9bc3->leave($__internal_7786731388d53904375131d67f04c40f18d4a771037f22d748e0d3f7f0fd9bc3_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Registration:register.html.twig";
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
", "HostAndGuestBundle:Registration:register.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Registration/register.html.twig");
    }
}

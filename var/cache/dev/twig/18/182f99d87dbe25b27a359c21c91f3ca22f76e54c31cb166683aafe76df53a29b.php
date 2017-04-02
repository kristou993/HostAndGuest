<?php

/* @HostAndGuest/Profile/show.html.twig */
class __TwigTemplate_33a3198d03f60864805d08c5d3adde0a01b27f2d088973b10618233d8c809bd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "@HostAndGuest/Profile/show.html.twig", 1);
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
        $__internal_77f2d37a00a56101f21136c2a2f2a219168bfd8221644a434aa8b1c42e98eea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f2d37a00a56101f21136c2a2f2a219168bfd8221644a434aa8b1c42e98eea5->enter($__internal_77f2d37a00a56101f21136c2a2f2a219168bfd8221644a434aa8b1c42e98eea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77f2d37a00a56101f21136c2a2f2a219168bfd8221644a434aa8b1c42e98eea5->leave($__internal_77f2d37a00a56101f21136c2a2f2a219168bfd8221644a434aa8b1c42e98eea5_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_94ab1a6f4a47c6d968afd1fe204c1720ff81f5e9c0fc4d933fd034a7e3a0560d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ab1a6f4a47c6d968afd1fe204c1720ff81f5e9c0fc4d933fd034a7e3a0560d->enter($__internal_94ab1a6f4a47c6d968afd1fe204c1720ff81f5e9c0fc4d933fd034a7e3a0560d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@HostAndGuest/Profile/show.html.twig", 4)->display($context);
        
        $__internal_94ab1a6f4a47c6d968afd1fe204c1720ff81f5e9c0fc4d933fd034a7e3a0560d->leave($__internal_94ab1a6f4a47c6d968afd1fe204c1720ff81f5e9c0fc4d933fd034a7e3a0560d_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Profile/show.html.twig";
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
", "@HostAndGuest/Profile/show.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}

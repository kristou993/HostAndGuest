<?php

/* HostAndGuestBundle:experience:ListeExperience.html.twig */
class __TwigTemplate_f209b27994344ee3d6e2995849d867f87de32d0e54dac4e0454af72cecea28f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HostAndGuestBundle:experience:FrontOffice.html.twig", "HostAndGuestBundle:experience:ListeExperience.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HostAndGuestBundle:experience:FrontOffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a814014538cf23c31fe698fc7bd23799b0fe6145ae313ff3c60514799e6e826a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a814014538cf23c31fe698fc7bd23799b0fe6145ae313ff3c60514799e6e826a->enter($__internal_a814014538cf23c31fe698fc7bd23799b0fe6145ae313ff3c60514799e6e826a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:experience:ListeExperience.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a814014538cf23c31fe698fc7bd23799b0fe6145ae313ff3c60514799e6e826a->leave($__internal_a814014538cf23c31fe698fc7bd23799b0fe6145ae313ff3c60514799e6e826a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e14a951809147f5891df3c2f40dee65672281b8e40c35e5171a442e74ac25df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14a951809147f5891df3c2f40dee65672281b8e40c35e5171a442e74ac25df7->enter($__internal_e14a951809147f5891df3c2f40dee65672281b8e40c35e5171a442e74ac25df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1> ICI se trouvera la fil d'actualités</h1>



        ";
        
        $__internal_e14a951809147f5891df3c2f40dee65672281b8e40c35e5171a442e74ac25df7->leave($__internal_e14a951809147f5891df3c2f40dee65672281b8e40c35e5171a442e74ac25df7_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:experience:ListeExperience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"HostAndGuestBundle:experience:FrontOffice.html.twig\" %}


{% block body %}
<h1> ICI se trouvera la fil d'actualités</h1>



        {% endblock %}", "HostAndGuestBundle:experience:ListeExperience.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/experience/ListeExperience.html.twig");
    }
}

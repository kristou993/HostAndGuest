<?php

/* @HostAndGuest/Resetting/reset.html.twig */
class __TwigTemplate_3c0bb13b7ff0739897337396c6158bc0055814202e19084e121d4a48d9225536 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "@HostAndGuest/Resetting/reset.html.twig", 1);
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
        $__internal_ad0851729fc4122ae214ed2b9d50d23b09af6d2c5fb8191fc6cf2117a1367049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0851729fc4122ae214ed2b9d50d23b09af6d2c5fb8191fc6cf2117a1367049->enter($__internal_ad0851729fc4122ae214ed2b9d50d23b09af6d2c5fb8191fc6cf2117a1367049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad0851729fc4122ae214ed2b9d50d23b09af6d2c5fb8191fc6cf2117a1367049->leave($__internal_ad0851729fc4122ae214ed2b9d50d23b09af6d2c5fb8191fc6cf2117a1367049_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_88fc662b3bf47f701a86fad450a9dbb98ee3dcd78363b3929ed8af4a4f24b5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88fc662b3bf47f701a86fad450a9dbb98ee3dcd78363b3929ed8af4a4f24b5a6->enter($__internal_88fc662b3bf47f701a86fad450a9dbb98ee3dcd78363b3929ed8af4a4f24b5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@HostAndGuest/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_88fc662b3bf47f701a86fad450a9dbb98ee3dcd78363b3929ed8af4a4f24b5a6->leave($__internal_88fc662b3bf47f701a86fad450a9dbb98ee3dcd78363b3929ed8af4a4f24b5a6_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock %}
", "@HostAndGuest/Resetting/reset.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}

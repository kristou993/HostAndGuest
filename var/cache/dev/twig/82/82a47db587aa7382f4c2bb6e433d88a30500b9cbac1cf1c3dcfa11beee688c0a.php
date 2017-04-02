<?php

/* @HostAndGuest/Group/edit.html.twig */
class __TwigTemplate_a5413a256df420d9c5eb55d8a0cb112f3677bd6ca13737a7ad8e804249de79f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@HostAndGuest/Group/edit.html.twig", 1);
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
        $__internal_804adc0115e0b02d29241d6dacad0792773b009f52294c91310607ce7c6b2e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804adc0115e0b02d29241d6dacad0792773b009f52294c91310607ce7c6b2e87->enter($__internal_804adc0115e0b02d29241d6dacad0792773b009f52294c91310607ce7c6b2e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_804adc0115e0b02d29241d6dacad0792773b009f52294c91310607ce7c6b2e87->leave($__internal_804adc0115e0b02d29241d6dacad0792773b009f52294c91310607ce7c6b2e87_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e58787d7327f629fe66689b42b239da1ba26a05bd2208a7ef6f49df3b6475d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58787d7327f629fe66689b42b239da1ba26a05bd2208a7ef6f49df3b6475d2c->enter($__internal_e58787d7327f629fe66689b42b239da1ba26a05bd2208a7ef6f49df3b6475d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@HostAndGuest/Group/edit.html.twig", 4)->display($context);
        
        $__internal_e58787d7327f629fe66689b42b239da1ba26a05bd2208a7ef6f49df3b6475d2c->leave($__internal_e58787d7327f629fe66689b42b239da1ba26a05bd2208a7ef6f49df3b6475d2c_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Group/edit.html.twig";
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
", "@HostAndGuest/Group/edit.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Group\\edit.html.twig");
    }
}

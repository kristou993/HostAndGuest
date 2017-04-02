<?php

/* @HostAndGuest/Security/login.html.twig */
class __TwigTemplate_2c5924ae55d5b70b0ee4e459c84232298ce81dea6603c9b4eb375e95b866eeef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "@HostAndGuest/Security/login.html.twig", 1);
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
        $__internal_c73aed062eb60ac435022cc675270dead2ff7bc08b4259f5431448364669ada0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73aed062eb60ac435022cc675270dead2ff7bc08b4259f5431448364669ada0->enter($__internal_c73aed062eb60ac435022cc675270dead2ff7bc08b4259f5431448364669ada0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c73aed062eb60ac435022cc675270dead2ff7bc08b4259f5431448364669ada0->leave($__internal_c73aed062eb60ac435022cc675270dead2ff7bc08b4259f5431448364669ada0_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_3a1e63b8b997d40856d0618885134ad6311f10fc3c39c2fd3373e738fcda2a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1e63b8b997d40856d0618885134ad6311f10fc3c39c2fd3373e738fcda2a5a->enter($__internal_3a1e63b8b997d40856d0618885134ad6311f10fc3c39c2fd3373e738fcda2a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "
    ";
        // line 6
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "

";
        
        $__internal_3a1e63b8b997d40856d0618885134ad6311f10fc3c39c2fd3373e738fcda2a5a->leave($__internal_3a1e63b8b997d40856d0618885134ad6311f10fc3c39c2fd3373e738fcda2a5a_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
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

    {{ include('@FOSUser/Security/login_content.html.twig') }}

{% endblock  %}
", "@HostAndGuest/Security/login.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Security\\login.html.twig");
    }
}

<?php

/* @HostAndGuest/Default/index.html.twig */
class __TwigTemplate_99d2547a58b134bf2c98b97a52c90c749ac2a267dac83dd9ceff8ba3a1061a70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e646c958504dfe5c34b1fb6f27f489a32e159c100c02dee8fb430776875d95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e646c958504dfe5c34b1fb6f27f489a32e159c100c02dee8fb430776875d95d->enter($__internal_5e646c958504dfe5c34b1fb6f27f489a32e159c100c02dee8fb430776875d95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_5e646c958504dfe5c34b1fb6f27f489a32e159c100c02dee8fb430776875d95d->leave($__internal_5e646c958504dfe5c34b1fb6f27f489a32e159c100c02dee8fb430776875d95d_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "@HostAndGuest/Default/index.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Default\\index.html.twig");
    }
}

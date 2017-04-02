<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_7c0b49f9244ba29ac3755b0250ae9acb60da36309af2cd25f5a3843696c5c4c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20b0696bcb0a6950ee7fb92ea14f215956a9557494bc5ff259023b32d98ab4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b0696bcb0a6950ee7fb92ea14f215956a9557494bc5ff259023b32d98ab4a2->enter($__internal_20b0696bcb0a6950ee7fb92ea14f215956a9557494bc5ff259023b32d98ab4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_20b0696bcb0a6950ee7fb92ea14f215956a9557494bc5ff259023b32d98ab4a2->leave($__internal_20b0696bcb0a6950ee7fb92ea14f215956a9557494bc5ff259023b32d98ab4a2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_781159d3ed60028b7770376d7d143579514c2cc8cd712204855cfedd86202bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781159d3ed60028b7770376d7d143579514c2cc8cd712204855cfedd86202bc1->enter($__internal_781159d3ed60028b7770376d7d143579514c2cc8cd712204855cfedd86202bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_781159d3ed60028b7770376d7d143579514c2cc8cd712204855cfedd86202bc1->leave($__internal_781159d3ed60028b7770376d7d143579514c2cc8cd712204855cfedd86202bc1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}

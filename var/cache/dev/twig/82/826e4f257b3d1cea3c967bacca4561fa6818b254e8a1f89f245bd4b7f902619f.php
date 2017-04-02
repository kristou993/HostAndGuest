<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8b5cc55ed8c507307af3b900f9e11c998e5c8c620417ad9a70fd5c65c2b5eb50 extends Twig_Template
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
        $__internal_ab134ee731b8b033dd8825342976f3ea9e38b460b81eb5792cf2d72af954a58b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab134ee731b8b033dd8825342976f3ea9e38b460b81eb5792cf2d72af954a58b->enter($__internal_ab134ee731b8b033dd8825342976f3ea9e38b460b81eb5792cf2d72af954a58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ab134ee731b8b033dd8825342976f3ea9e38b460b81eb5792cf2d72af954a58b->leave($__internal_ab134ee731b8b033dd8825342976f3ea9e38b460b81eb5792cf2d72af954a58b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a92b76851aad7f31e4448e8fc59fb9a6d3ec104e024fc7e0219fee24904ba503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92b76851aad7f31e4448e8fc59fb9a6d3ec104e024fc7e0219fee24904ba503->enter($__internal_a92b76851aad7f31e4448e8fc59fb9a6d3ec104e024fc7e0219fee24904ba503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a92b76851aad7f31e4448e8fc59fb9a6d3ec104e024fc7e0219fee24904ba503->leave($__internal_a92b76851aad7f31e4448e8fc59fb9a6d3ec104e024fc7e0219fee24904ba503_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

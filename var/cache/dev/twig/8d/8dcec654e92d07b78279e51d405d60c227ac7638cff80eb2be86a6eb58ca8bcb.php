<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_392236fbe8343a043f0fb50ffef3e5b6dc0322d0212d5d1de7b89974ebbb846c extends Twig_Template
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
        $__internal_f6f4e2bddc7fa52b6f1bea057fe02a3510ef68d18ee34d2ffd5482e6141531d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f4e2bddc7fa52b6f1bea057fe02a3510ef68d18ee34d2ffd5482e6141531d8->enter($__internal_f6f4e2bddc7fa52b6f1bea057fe02a3510ef68d18ee34d2ffd5482e6141531d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_f6f4e2bddc7fa52b6f1bea057fe02a3510ef68d18ee34d2ffd5482e6141531d8->leave($__internal_f6f4e2bddc7fa52b6f1bea057fe02a3510ef68d18ee34d2ffd5482e6141531d8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}

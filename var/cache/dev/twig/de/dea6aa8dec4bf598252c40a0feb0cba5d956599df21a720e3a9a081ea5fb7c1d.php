<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_49880b1ddf22b502d55f4264fb85031452477ef5c2db3b5df6394a2b9e310172 extends Twig_Template
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
        $__internal_4ab7c910f1d2cd381ec3c3115b36fab7e30749893723239941c7471a73c83aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab7c910f1d2cd381ec3c3115b36fab7e30749893723239941c7471a73c83aa3->enter($__internal_4ab7c910f1d2cd381ec3c3115b36fab7e30749893723239941c7471a73c83aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_4ab7c910f1d2cd381ec3c3115b36fab7e30749893723239941c7471a73c83aa3->leave($__internal_4ab7c910f1d2cd381ec3c3115b36fab7e30749893723239941c7471a73c83aa3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}

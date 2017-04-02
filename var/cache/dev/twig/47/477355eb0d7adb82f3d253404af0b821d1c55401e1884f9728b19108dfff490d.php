<?php

/* HostAndGuestBundle:Profile:edit.html.twig */
class __TwigTemplate_45fba6fd58fd627b0c2bccb50cc37538fc374ad1a146aa9c4244b953345e1094 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "HostAndGuestBundle:Profile:edit.html.twig", 1);
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
        $__internal_74e611a761fc1f1b20f4b17ce00e4f0ab98399cdee0b65c0d2db87756c4c5af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e611a761fc1f1b20f4b17ce00e4f0ab98399cdee0b65c0d2db87756c4c5af0->enter($__internal_74e611a761fc1f1b20f4b17ce00e4f0ab98399cdee0b65c0d2db87756c4c5af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74e611a761fc1f1b20f4b17ce00e4f0ab98399cdee0b65c0d2db87756c4c5af0->leave($__internal_74e611a761fc1f1b20f4b17ce00e4f0ab98399cdee0b65c0d2db87756c4c5af0_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_76473d3bb537e87e2027d9e4a560a5f4d4e6d745eba9c923a53bad0c667b12d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76473d3bb537e87e2027d9e4a560a5f4d4e6d745eba9c923a53bad0c667b12d5->enter($__internal_76473d3bb537e87e2027d9e4a560a5f4d4e6d745eba9c923a53bad0c667b12d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "HostAndGuestBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_76473d3bb537e87e2027d9e4a560a5f4d4e6d745eba9c923a53bad0c667b12d5->leave($__internal_76473d3bb537e87e2027d9e4a560a5f4d4e6d745eba9c923a53bad0c667b12d5_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock %}
", "HostAndGuestBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Profile/edit.html.twig");
    }
}

<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_7c5fe33c171225416f6b2089cc211772bb570968f5900c07ad38093832aed226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_711330f1d262ab799d2624b42b963405217ca52729187e5c564167efbc16d710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711330f1d262ab799d2624b42b963405217ca52729187e5c564167efbc16d710->enter($__internal_711330f1d262ab799d2624b42b963405217ca52729187e5c564167efbc16d710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_711330f1d262ab799d2624b42b963405217ca52729187e5c564167efbc16d710->leave($__internal_711330f1d262ab799d2624b42b963405217ca52729187e5c564167efbc16d710_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_cf4a8b5b8f6ec696333a8c9b7ee7fd40e3affd9729a90f6fcf49a47c35483320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4a8b5b8f6ec696333a8c9b7ee7fd40e3affd9729a90f6fcf49a47c35483320->enter($__internal_cf4a8b5b8f6ec696333a8c9b7ee7fd40e3affd9729a90f6fcf49a47c35483320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_cf4a8b5b8f6ec696333a8c9b7ee7fd40e3affd9729a90f6fcf49a47c35483320->leave($__internal_cf4a8b5b8f6ec696333a8c9b7ee7fd40e3affd9729a90f6fcf49a47c35483320_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}

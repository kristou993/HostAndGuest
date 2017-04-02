<?php

/* @HostAndGuest/Profile/edit.html.twig */
class __TwigTemplate_92102d376de6e74ef2b60a9f2025c2bea1c2190b073ebb08cff096aff9b74fcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "@HostAndGuest/Profile/edit.html.twig", 1);
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
        $__internal_18f1cb20efacf72b1e39eda0835719f4b9457a89cf707b6f684eb4399ecefbc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f1cb20efacf72b1e39eda0835719f4b9457a89cf707b6f684eb4399ecefbc3->enter($__internal_18f1cb20efacf72b1e39eda0835719f4b9457a89cf707b6f684eb4399ecefbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18f1cb20efacf72b1e39eda0835719f4b9457a89cf707b6f684eb4399ecefbc3->leave($__internal_18f1cb20efacf72b1e39eda0835719f4b9457a89cf707b6f684eb4399ecefbc3_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_904b810bdd212914e96812d61959c4bb09bc259e684e2ec68bd3dce3a55346c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904b810bdd212914e96812d61959c4bb09bc259e684e2ec68bd3dce3a55346c4->enter($__internal_904b810bdd212914e96812d61959c4bb09bc259e684e2ec68bd3dce3a55346c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@HostAndGuest/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_904b810bdd212914e96812d61959c4bb09bc259e684e2ec68bd3dce3a55346c4->leave($__internal_904b810bdd212914e96812d61959c4bb09bc259e684e2ec68bd3dce3a55346c4_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Profile/edit.html.twig";
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
", "@HostAndGuest/Profile/edit.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}

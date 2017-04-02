<?php

/* HostAndGuestBundle:Resetting:reset.html.twig */
class __TwigTemplate_f72ee051a2f97ca85dd5165b98cf6edb6eef37d0efd70ae955aeee39389707a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "HostAndGuestBundle:Resetting:reset.html.twig", 1);
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
        $__internal_b090d1b0bde9c34507b77e11c96767829ac683145b774c16765e90dbeacb38aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b090d1b0bde9c34507b77e11c96767829ac683145b774c16765e90dbeacb38aa->enter($__internal_b090d1b0bde9c34507b77e11c96767829ac683145b774c16765e90dbeacb38aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b090d1b0bde9c34507b77e11c96767829ac683145b774c16765e90dbeacb38aa->leave($__internal_b090d1b0bde9c34507b77e11c96767829ac683145b774c16765e90dbeacb38aa_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b348c6cd6a6f56e0784afba465d82901af945fb3265b3455e76499213c122b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b348c6cd6a6f56e0784afba465d82901af945fb3265b3455e76499213c122b65->enter($__internal_b348c6cd6a6f56e0784afba465d82901af945fb3265b3455e76499213c122b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "HostAndGuestBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b348c6cd6a6f56e0784afba465d82901af945fb3265b3455e76499213c122b65->leave($__internal_b348c6cd6a6f56e0784afba465d82901af945fb3265b3455e76499213c122b65_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock %}
", "HostAndGuestBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Resetting/reset.html.twig");
    }
}

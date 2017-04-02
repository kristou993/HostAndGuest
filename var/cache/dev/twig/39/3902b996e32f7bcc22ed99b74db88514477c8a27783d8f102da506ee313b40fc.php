<?php

/* @HostAndGuest/Resetting/request.html.twig */
class __TwigTemplate_0da94d1ab0c27b4543542aecae24dc3810375495ddca7bf8c93ddd6383c7538e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "@HostAndGuest/Resetting/request.html.twig", 1);
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
        $__internal_81398af4ddd57f50e13778075ba2a278352b9d1bc5f44eb8eacce82f485943a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81398af4ddd57f50e13778075ba2a278352b9d1bc5f44eb8eacce82f485943a0->enter($__internal_81398af4ddd57f50e13778075ba2a278352b9d1bc5f44eb8eacce82f485943a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81398af4ddd57f50e13778075ba2a278352b9d1bc5f44eb8eacce82f485943a0->leave($__internal_81398af4ddd57f50e13778075ba2a278352b9d1bc5f44eb8eacce82f485943a0_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_8268bee32a163ad801a0085997a6b3dce97812dddd6304f845dd599600b30582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8268bee32a163ad801a0085997a6b3dce97812dddd6304f845dd599600b30582->enter($__internal_8268bee32a163ad801a0085997a6b3dce97812dddd6304f845dd599600b30582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@HostAndGuest/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_8268bee32a163ad801a0085997a6b3dce97812dddd6304f845dd599600b30582->leave($__internal_8268bee32a163ad801a0085997a6b3dce97812dddd6304f845dd599600b30582_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock%}
", "@HostAndGuest/Resetting/request.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}

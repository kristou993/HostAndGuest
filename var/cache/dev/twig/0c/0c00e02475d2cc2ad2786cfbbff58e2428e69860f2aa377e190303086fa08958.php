<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_6ea23cf095da5c2c545c8b0b83070fe0583af153e5ba561352e56468962b99f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_3275b311982d0ad747f4dd71e33a886c33d9ca458f93737fff4ccf6790762544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3275b311982d0ad747f4dd71e33a886c33d9ca458f93737fff4ccf6790762544->enter($__internal_3275b311982d0ad747f4dd71e33a886c33d9ca458f93737fff4ccf6790762544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3275b311982d0ad747f4dd71e33a886c33d9ca458f93737fff4ccf6790762544->leave($__internal_3275b311982d0ad747f4dd71e33a886c33d9ca458f93737fff4ccf6790762544_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_43234ddc988ec7876fa0bfa1b6a334f1d9fab5d99b7d0d61ada8b3f1de68584f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43234ddc988ec7876fa0bfa1b6a334f1d9fab5d99b7d0d61ada8b3f1de68584f->enter($__internal_43234ddc988ec7876fa0bfa1b6a334f1d9fab5d99b7d0d61ada8b3f1de68584f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_43234ddc988ec7876fa0bfa1b6a334f1d9fab5d99b7d0d61ada8b3f1de68584f->leave($__internal_43234ddc988ec7876fa0bfa1b6a334f1d9fab5d99b7d0d61ada8b3f1de68584f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}

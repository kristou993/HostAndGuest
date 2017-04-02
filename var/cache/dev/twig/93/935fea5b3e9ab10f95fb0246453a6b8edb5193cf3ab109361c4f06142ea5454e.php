<?php

/* HostAndGuestBundle:Resetting:email.txt.twig */
class __TwigTemplate_17e548651129d10dedb934af05c88a47342581f05c063a4156a28ce2c771586f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4c035a5c0684abce062a90c0a14f72a15bf875eee816d97b787b339d3992fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c035a5c0684abce062a90c0a14f72a15bf875eee816d97b787b339d3992fbd->enter($__internal_c4c035a5c0684abce062a90c0a14f72a15bf875eee816d97b787b339d3992fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c4c035a5c0684abce062a90c0a14f72a15bf875eee816d97b787b339d3992fbd->leave($__internal_c4c035a5c0684abce062a90c0a14f72a15bf875eee816d97b787b339d3992fbd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a75ff3c8cf8bcc087dab41c253d5786a6f80007176a634d6de100bcfd3fcf215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75ff3c8cf8bcc087dab41c253d5786a6f80007176a634d6de100bcfd3fcf215->enter($__internal_a75ff3c8cf8bcc087dab41c253d5786a6f80007176a634d6de100bcfd3fcf215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_a75ff3c8cf8bcc087dab41c253d5786a6f80007176a634d6de100bcfd3fcf215->leave($__internal_a75ff3c8cf8bcc087dab41c253d5786a6f80007176a634d6de100bcfd3fcf215_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2292e936e28ae7986cf195352f0dfcd6dfd8e6b0089eaf449b5693cc191379a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2292e936e28ae7986cf195352f0dfcd6dfd8e6b0089eaf449b5693cc191379a3->enter($__internal_2292e936e28ae7986cf195352f0dfcd6dfd8e6b0089eaf449b5693cc191379a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2292e936e28ae7986cf195352f0dfcd6dfd8e6b0089eaf449b5693cc191379a3->leave($__internal_2292e936e28ae7986cf195352f0dfcd6dfd8e6b0089eaf449b5693cc191379a3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cf04223adea18b1ab843239badd1fea7d3ecf62a8803e10482d82e02c6125eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf04223adea18b1ab843239badd1fea7d3ecf62a8803e10482d82e02c6125eb0->enter($__internal_cf04223adea18b1ab843239badd1fea7d3ecf62a8803e10482d82e02c6125eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cf04223adea18b1ab843239badd1fea7d3ecf62a8803e10482d82e02c6125eb0->leave($__internal_cf04223adea18b1ab843239badd1fea7d3ecf62a8803e10482d82e02c6125eb0_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "HostAndGuestBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Resetting/email.txt.twig");
    }
}

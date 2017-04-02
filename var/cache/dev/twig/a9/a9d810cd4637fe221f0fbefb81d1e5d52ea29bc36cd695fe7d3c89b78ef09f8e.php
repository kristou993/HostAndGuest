<?php

/* @HostAndGuest/Resetting/email.txt.twig */
class __TwigTemplate_2f2872c28b8abe66b4eb2c157a5c51e4c89f326d171c3aff05cc3fe00f16e86a extends Twig_Template
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
        $__internal_cf938a00809b0c8ebb5e051e627816e521e4a5b0ec563e02f9c7949be04fefc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf938a00809b0c8ebb5e051e627816e521e4a5b0ec563e02f9c7949be04fefc2->enter($__internal_cf938a00809b0c8ebb5e051e627816e521e4a5b0ec563e02f9c7949be04fefc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cf938a00809b0c8ebb5e051e627816e521e4a5b0ec563e02f9c7949be04fefc2->leave($__internal_cf938a00809b0c8ebb5e051e627816e521e4a5b0ec563e02f9c7949be04fefc2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_41657c36190cd023410aff8e25a7c75207672b593d99da0d750be154b9f23912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41657c36190cd023410aff8e25a7c75207672b593d99da0d750be154b9f23912->enter($__internal_41657c36190cd023410aff8e25a7c75207672b593d99da0d750be154b9f23912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_41657c36190cd023410aff8e25a7c75207672b593d99da0d750be154b9f23912->leave($__internal_41657c36190cd023410aff8e25a7c75207672b593d99da0d750be154b9f23912_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_28d2ac6da4bb4f43e6e3ffcc8016c16f8b0d4d40f3d1bc0cec6853daafbbbfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d2ac6da4bb4f43e6e3ffcc8016c16f8b0d4d40f3d1bc0cec6853daafbbbfcd->enter($__internal_28d2ac6da4bb4f43e6e3ffcc8016c16f8b0d4d40f3d1bc0cec6853daafbbbfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_28d2ac6da4bb4f43e6e3ffcc8016c16f8b0d4d40f3d1bc0cec6853daafbbbfcd->leave($__internal_28d2ac6da4bb4f43e6e3ffcc8016c16f8b0d4d40f3d1bc0cec6853daafbbbfcd_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_308807388f73d5136072da6090feccfe187c491b444393ff26cce991f758071a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308807388f73d5136072da6090feccfe187c491b444393ff26cce991f758071a->enter($__internal_308807388f73d5136072da6090feccfe187c491b444393ff26cce991f758071a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_308807388f73d5136072da6090feccfe187c491b444393ff26cce991f758071a->leave($__internal_308807388f73d5136072da6090feccfe187c491b444393ff26cce991f758071a_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Resetting/email.txt.twig";
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
", "@HostAndGuest/Resetting/email.txt.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}

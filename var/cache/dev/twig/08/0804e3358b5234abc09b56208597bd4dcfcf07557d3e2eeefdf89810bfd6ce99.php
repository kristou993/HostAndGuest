<?php

/* @HostAndGuest/Registration/email.txt.twig */
class __TwigTemplate_20c91249ee36f2b0d3a209693ec918aaf7b0497ebf8657c89b4f93ed4bda6686 extends Twig_Template
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
        $__internal_96fce8f63c40285c2933c3b42b7bb5235b8253d6cc826e6fa2fb25b172ae0373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96fce8f63c40285c2933c3b42b7bb5235b8253d6cc826e6fa2fb25b172ae0373->enter($__internal_96fce8f63c40285c2933c3b42b7bb5235b8253d6cc826e6fa2fb25b172ae0373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_96fce8f63c40285c2933c3b42b7bb5235b8253d6cc826e6fa2fb25b172ae0373->leave($__internal_96fce8f63c40285c2933c3b42b7bb5235b8253d6cc826e6fa2fb25b172ae0373_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b66d4cf3c53c7b7e6ec23500cd5f99331a14604e47e492123b6d8c0f830c8c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66d4cf3c53c7b7e6ec23500cd5f99331a14604e47e492123b6d8c0f830c8c80->enter($__internal_b66d4cf3c53c7b7e6ec23500cd5f99331a14604e47e492123b6d8c0f830c8c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_b66d4cf3c53c7b7e6ec23500cd5f99331a14604e47e492123b6d8c0f830c8c80->leave($__internal_b66d4cf3c53c7b7e6ec23500cd5f99331a14604e47e492123b6d8c0f830c8c80_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f291b8ca1ee2fe97e5a5991f08401ffe8a317a594ace8d346fa201be19d86374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f291b8ca1ee2fe97e5a5991f08401ffe8a317a594ace8d346fa201be19d86374->enter($__internal_f291b8ca1ee2fe97e5a5991f08401ffe8a317a594ace8d346fa201be19d86374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f291b8ca1ee2fe97e5a5991f08401ffe8a317a594ace8d346fa201be19d86374->leave($__internal_f291b8ca1ee2fe97e5a5991f08401ffe8a317a594ace8d346fa201be19d86374_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_353632c179ce99a853108c8aa8f700dbbb5943d7e9738190bc59af3f6c2fe15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353632c179ce99a853108c8aa8f700dbbb5943d7e9738190bc59af3f6c2fe15b->enter($__internal_353632c179ce99a853108c8aa8f700dbbb5943d7e9738190bc59af3f6c2fe15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_353632c179ce99a853108c8aa8f700dbbb5943d7e9738190bc59af3f6c2fe15b->leave($__internal_353632c179ce99a853108c8aa8f700dbbb5943d7e9738190bc59af3f6c2fe15b_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@HostAndGuest/Registration/email.txt.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}

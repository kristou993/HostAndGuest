<?php

/* HostAndGuestBundle:Registration:email.txt.twig */
class __TwigTemplate_792479444b5d16c5d9a1a282c5de333b04c93adafbbfc101eea5f16d2ece1fd5 extends Twig_Template
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
        $__internal_2979bab190c28833a43a54e48b125160317c3eb8f065ec402fd9dc419898a50e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2979bab190c28833a43a54e48b125160317c3eb8f065ec402fd9dc419898a50e->enter($__internal_2979bab190c28833a43a54e48b125160317c3eb8f065ec402fd9dc419898a50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2979bab190c28833a43a54e48b125160317c3eb8f065ec402fd9dc419898a50e->leave($__internal_2979bab190c28833a43a54e48b125160317c3eb8f065ec402fd9dc419898a50e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ff54155c09f96c6b63309eb69170cd38c7879c40daa1c8efddb32f12934bc7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff54155c09f96c6b63309eb69170cd38c7879c40daa1c8efddb32f12934bc7c2->enter($__internal_ff54155c09f96c6b63309eb69170cd38c7879c40daa1c8efddb32f12934bc7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_ff54155c09f96c6b63309eb69170cd38c7879c40daa1c8efddb32f12934bc7c2->leave($__internal_ff54155c09f96c6b63309eb69170cd38c7879c40daa1c8efddb32f12934bc7c2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_557d288b968e26c8818213b0f0bf35208cdab6d8745f823610bc97746efc5a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557d288b968e26c8818213b0f0bf35208cdab6d8745f823610bc97746efc5a5a->enter($__internal_557d288b968e26c8818213b0f0bf35208cdab6d8745f823610bc97746efc5a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_557d288b968e26c8818213b0f0bf35208cdab6d8745f823610bc97746efc5a5a->leave($__internal_557d288b968e26c8818213b0f0bf35208cdab6d8745f823610bc97746efc5a5a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4d16b53efc3afee8c336caf55224bd27115c4b82ee4c07784cf5a60f512e3c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d16b53efc3afee8c336caf55224bd27115c4b82ee4c07784cf5a60f512e3c12->enter($__internal_4d16b53efc3afee8c336caf55224bd27115c4b82ee4c07784cf5a60f512e3c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4d16b53efc3afee8c336caf55224bd27115c4b82ee4c07784cf5a60f512e3c12->leave($__internal_4d16b53efc3afee8c336caf55224bd27115c4b82ee4c07784cf5a60f512e3c12_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Registration:email.txt.twig";
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
", "HostAndGuestBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Registration/email.txt.twig");
    }
}

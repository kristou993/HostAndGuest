<?php

/* @HostAndGuest/Registration/check_email.html.twig */
class __TwigTemplate_1ff93950396fe081a203ef847c3e33466e36b784311b118191a8f95a1cfd6a74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "@HostAndGuest/Registration/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@HostAndGuest/layout3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7824495acc4c8f110e11c753bb8ae57e121c1a24892f6369165543ae99d5ee65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7824495acc4c8f110e11c753bb8ae57e121c1a24892f6369165543ae99d5ee65->enter($__internal_7824495acc4c8f110e11c753bb8ae57e121c1a24892f6369165543ae99d5ee65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7824495acc4c8f110e11c753bb8ae57e121c1a24892f6369165543ae99d5ee65->leave($__internal_7824495acc4c8f110e11c753bb8ae57e121c1a24892f6369165543ae99d5ee65_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7358719285826e9d5e47d797264987dad74f1fb0eed54e1e9feed4ff4a77ca8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7358719285826e9d5e47d797264987dad74f1fb0eed54e1e9feed4ff4a77ca8e->enter($__internal_7358719285826e9d5e47d797264987dad74f1fb0eed54e1e9feed4ff4a77ca8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7358719285826e9d5e47d797264987dad74f1fb0eed54e1e9feed4ff4a77ca8e->leave($__internal_7358719285826e9d5e47d797264987dad74f1fb0eed54e1e9feed4ff4a77ca8e_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@HostAndGuest/Registration/check_email.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}

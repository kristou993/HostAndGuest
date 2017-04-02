<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_3c05daca9a6732029510cbf0a360ea901911b016f15209cf3542c675d49b307c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_04f3fda683eb91d2ec6bedfa62da03423b5a04c30a32f8cb866df4c7870a1c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f3fda683eb91d2ec6bedfa62da03423b5a04c30a32f8cb866df4c7870a1c4b->enter($__internal_04f3fda683eb91d2ec6bedfa62da03423b5a04c30a32f8cb866df4c7870a1c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04f3fda683eb91d2ec6bedfa62da03423b5a04c30a32f8cb866df4c7870a1c4b->leave($__internal_04f3fda683eb91d2ec6bedfa62da03423b5a04c30a32f8cb866df4c7870a1c4b_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_276f4916ecb8c81a1bc8a3667d5a3ccca45aa77c543bd491a6379ed039171220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276f4916ecb8c81a1bc8a3667d5a3ccca45aa77c543bd491a6379ed039171220->enter($__internal_276f4916ecb8c81a1bc8a3667d5a3ccca45aa77c543bd491a6379ed039171220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "   <h2 <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p></h2>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 10
        echo "   
";
        
        $__internal_276f4916ecb8c81a1bc8a3667d5a3ccca45aa77c543bd491a6379ed039171220->leave($__internal_276f4916ecb8c81a1bc8a3667d5a3ccca45aa77c543bd491a6379ed039171220_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% block contenu %}
   <h2 <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p></h2>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
   
{% endblock  %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}

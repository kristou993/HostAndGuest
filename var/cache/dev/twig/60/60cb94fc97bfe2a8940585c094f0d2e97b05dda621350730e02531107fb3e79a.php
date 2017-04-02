<?php

/* HostAndGuestBundle:Group:show_content.html.twig */
class __TwigTemplate_d80779b449bbc85a6fe6c323653f354f6996d8821b93d7d47826dc34dcdcec26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80167a034788079597bc2f8879a2475da686af80970da1eda7f7df44039b141f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80167a034788079597bc2f8879a2475da686af80970da1eda7f7df44039b141f->enter($__internal_80167a034788079597bc2f8879a2475da686af80970da1eda7f7df44039b141f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_80167a034788079597bc2f8879a2475da686af80970da1eda7f7df44039b141f->leave($__internal_80167a034788079597bc2f8879a2475da686af80970da1eda7f7df44039b141f_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "HostAndGuestBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Group/show_content.html.twig");
    }
}

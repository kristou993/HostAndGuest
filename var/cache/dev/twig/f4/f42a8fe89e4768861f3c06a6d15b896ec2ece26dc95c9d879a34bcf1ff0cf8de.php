<?php

/* HostAndGuestBundle:Group:list_content.html.twig */
class __TwigTemplate_cce160539de5eb16afc1d2283d3c6a2ad6fb6ecbe5174c508eca2f5e28894f91 extends Twig_Template
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
        $__internal_c2dbc777b96e448ee25cb67300717bd63584d806eca86f717198cb56a981e32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2dbc777b96e448ee25cb67300717bd63584d806eca86f717198cb56a981e32a->enter($__internal_c2dbc777b96e448ee25cb67300717bd63584d806eca86f717198cb56a981e32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_c2dbc777b96e448ee25cb67300717bd63584d806eca86f717198cb56a981e32a->leave($__internal_c2dbc777b96e448ee25cb67300717bd63584d806eca86f717198cb56a981e32a_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "HostAndGuestBundle:Group:list_content.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Group/list_content.html.twig");
    }
}

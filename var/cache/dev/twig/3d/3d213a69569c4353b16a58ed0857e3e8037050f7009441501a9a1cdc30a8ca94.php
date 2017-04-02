<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b70825c376cbf290ba2f5c3a23468c26484398e8de5c21dec14c404ca015707c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fd1e5552b71b42325d79a0d78f9dc059d0641e9e02ad128764769419210e8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd1e5552b71b42325d79a0d78f9dc059d0641e9e02ad128764769419210e8cd->enter($__internal_1fd1e5552b71b42325d79a0d78f9dc059d0641e9e02ad128764769419210e8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fd1e5552b71b42325d79a0d78f9dc059d0641e9e02ad128764769419210e8cd->leave($__internal_1fd1e5552b71b42325d79a0d78f9dc059d0641e9e02ad128764769419210e8cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7783edc09b9c628764c76f551c771d3102da8eb474e00b7b88288d80d42dd4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7783edc09b9c628764c76f551c771d3102da8eb474e00b7b88288d80d42dd4b7->enter($__internal_7783edc09b9c628764c76f551c771d3102da8eb474e00b7b88288d80d42dd4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7783edc09b9c628764c76f551c771d3102da8eb474e00b7b88288d80d42dd4b7->leave($__internal_7783edc09b9c628764c76f551c771d3102da8eb474e00b7b88288d80d42dd4b7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc051cee20301b848dce1fb2bd6499e25c606caf4a22294b82b4546234b5c37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc051cee20301b848dce1fb2bd6499e25c606caf4a22294b82b4546234b5c37a->enter($__internal_fc051cee20301b848dce1fb2bd6499e25c606caf4a22294b82b4546234b5c37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc051cee20301b848dce1fb2bd6499e25c606caf4a22294b82b4546234b5c37a->leave($__internal_fc051cee20301b848dce1fb2bd6499e25c606caf4a22294b82b4546234b5c37a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7abe187213657043eff1b4d3219fdb5c9b32e89c317d37d605b2496e6f4dcb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7abe187213657043eff1b4d3219fdb5c9b32e89c317d37d605b2496e6f4dcb6->enter($__internal_e7abe187213657043eff1b4d3219fdb5c9b32e89c317d37d605b2496e6f4dcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e7abe187213657043eff1b4d3219fdb5c9b32e89c317d37d605b2496e6f4dcb6->leave($__internal_e7abe187213657043eff1b4d3219fdb5c9b32e89c317d37d605b2496e6f4dcb6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

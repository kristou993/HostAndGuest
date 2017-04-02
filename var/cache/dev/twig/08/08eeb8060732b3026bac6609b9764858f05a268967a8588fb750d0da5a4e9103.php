<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4e3a2ecaed8cd86422e6fc28cb4573b4256f8166936830b9cb4a87b12cbdd630 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_564654a3db22d90072db9824c7984c23b6dfa3e43916c78028c2b4a515a8840e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564654a3db22d90072db9824c7984c23b6dfa3e43916c78028c2b4a515a8840e->enter($__internal_564654a3db22d90072db9824c7984c23b6dfa3e43916c78028c2b4a515a8840e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_564654a3db22d90072db9824c7984c23b6dfa3e43916c78028c2b4a515a8840e->leave($__internal_564654a3db22d90072db9824c7984c23b6dfa3e43916c78028c2b4a515a8840e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e97049d18699b4f63dcf5689355b1e2e930cd1c5367889b077b56162e55a9d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97049d18699b4f63dcf5689355b1e2e930cd1c5367889b077b56162e55a9d57->enter($__internal_e97049d18699b4f63dcf5689355b1e2e930cd1c5367889b077b56162e55a9d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e97049d18699b4f63dcf5689355b1e2e930cd1c5367889b077b56162e55a9d57->leave($__internal_e97049d18699b4f63dcf5689355b1e2e930cd1c5367889b077b56162e55a9d57_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b413036943a7139eefc219b2b92840d3a6e2d71589a43b41da16d88f9cac318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b413036943a7139eefc219b2b92840d3a6e2d71589a43b41da16d88f9cac318->enter($__internal_3b413036943a7139eefc219b2b92840d3a6e2d71589a43b41da16d88f9cac318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3b413036943a7139eefc219b2b92840d3a6e2d71589a43b41da16d88f9cac318->leave($__internal_3b413036943a7139eefc219b2b92840d3a6e2d71589a43b41da16d88f9cac318_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_408f8b4bf4c38b260d5bcd4d98ea15f3ec02a640abac26fd22b09a2f7463a0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408f8b4bf4c38b260d5bcd4d98ea15f3ec02a640abac26fd22b09a2f7463a0d0->enter($__internal_408f8b4bf4c38b260d5bcd4d98ea15f3ec02a640abac26fd22b09a2f7463a0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_408f8b4bf4c38b260d5bcd4d98ea15f3ec02a640abac26fd22b09a2f7463a0d0->leave($__internal_408f8b4bf4c38b260d5bcd4d98ea15f3ec02a640abac26fd22b09a2f7463a0d0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

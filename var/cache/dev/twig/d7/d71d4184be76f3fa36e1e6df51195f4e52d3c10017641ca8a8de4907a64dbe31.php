<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_85640627c2e3c3e9efa0e935cbd1639e9930c3e5b2d9d90a3e2b79f49bbf1a78 extends Twig_Template
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
        $__internal_85e1184bb646e5eaa7da0b57e72d8470b58c45f0cfc1d0d0c8500b56214724a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e1184bb646e5eaa7da0b57e72d8470b58c45f0cfc1d0d0c8500b56214724a3->enter($__internal_85e1184bb646e5eaa7da0b57e72d8470b58c45f0cfc1d0d0c8500b56214724a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85e1184bb646e5eaa7da0b57e72d8470b58c45f0cfc1d0d0c8500b56214724a3->leave($__internal_85e1184bb646e5eaa7da0b57e72d8470b58c45f0cfc1d0d0c8500b56214724a3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7cdd4a57a792ac82d99324b138197b0d2fda873201f22a3bcbc3e2bff4fc1341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cdd4a57a792ac82d99324b138197b0d2fda873201f22a3bcbc3e2bff4fc1341->enter($__internal_7cdd4a57a792ac82d99324b138197b0d2fda873201f22a3bcbc3e2bff4fc1341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7cdd4a57a792ac82d99324b138197b0d2fda873201f22a3bcbc3e2bff4fc1341->leave($__internal_7cdd4a57a792ac82d99324b138197b0d2fda873201f22a3bcbc3e2bff4fc1341_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2cdde57eb26780e5a78746b235db26c4656144813a8e4e74632d8c2f5c34cce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cdde57eb26780e5a78746b235db26c4656144813a8e4e74632d8c2f5c34cce1->enter($__internal_2cdde57eb26780e5a78746b235db26c4656144813a8e4e74632d8c2f5c34cce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2cdde57eb26780e5a78746b235db26c4656144813a8e4e74632d8c2f5c34cce1->leave($__internal_2cdde57eb26780e5a78746b235db26c4656144813a8e4e74632d8c2f5c34cce1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63b537aa7cf3f80874b5ca3e74cc019213ca6fc41ee4806d49607fed89d3bd26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b537aa7cf3f80874b5ca3e74cc019213ca6fc41ee4806d49607fed89d3bd26->enter($__internal_63b537aa7cf3f80874b5ca3e74cc019213ca6fc41ee4806d49607fed89d3bd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_63b537aa7cf3f80874b5ca3e74cc019213ca6fc41ee4806d49607fed89d3bd26->leave($__internal_63b537aa7cf3f80874b5ca3e74cc019213ca6fc41ee4806d49607fed89d3bd26_prof);

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

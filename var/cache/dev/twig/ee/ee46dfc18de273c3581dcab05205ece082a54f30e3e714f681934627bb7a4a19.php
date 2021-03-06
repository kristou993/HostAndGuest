<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d3def6dcc4444a5d21c940935d306e75e11897136fdd7c74dadad9f479d13838 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfb00dd159fc3f8c0308a6f3416c9297d6625b2a95f0a7f6daff986edcf3a0cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb00dd159fc3f8c0308a6f3416c9297d6625b2a95f0a7f6daff986edcf3a0cc->enter($__internal_cfb00dd159fc3f8c0308a6f3416c9297d6625b2a95f0a7f6daff986edcf3a0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfb00dd159fc3f8c0308a6f3416c9297d6625b2a95f0a7f6daff986edcf3a0cc->leave($__internal_cfb00dd159fc3f8c0308a6f3416c9297d6625b2a95f0a7f6daff986edcf3a0cc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3e015dc0934f23eca516ab1bfe00d824a19e1f582dc6b72972e82028883b393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e015dc0934f23eca516ab1bfe00d824a19e1f582dc6b72972e82028883b393->enter($__internal_a3e015dc0934f23eca516ab1bfe00d824a19e1f582dc6b72972e82028883b393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a3e015dc0934f23eca516ab1bfe00d824a19e1f582dc6b72972e82028883b393->leave($__internal_a3e015dc0934f23eca516ab1bfe00d824a19e1f582dc6b72972e82028883b393_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_837f7dac7d053d6537579da602b90eb9b3a5fe7cd8d9ed2c32f68e23f9acb340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837f7dac7d053d6537579da602b90eb9b3a5fe7cd8d9ed2c32f68e23f9acb340->enter($__internal_837f7dac7d053d6537579da602b90eb9b3a5fe7cd8d9ed2c32f68e23f9acb340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_837f7dac7d053d6537579da602b90eb9b3a5fe7cd8d9ed2c32f68e23f9acb340->leave($__internal_837f7dac7d053d6537579da602b90eb9b3a5fe7cd8d9ed2c32f68e23f9acb340_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

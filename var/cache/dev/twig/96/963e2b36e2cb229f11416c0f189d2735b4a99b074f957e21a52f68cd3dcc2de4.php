<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_97cc3000e4b5002e25e6d9cfff198d449f160edd05da1d06a6e9ece3c91be3e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_85cf22a4eb27234297118c2d651038ef03f7acc18762dbd0a02cbea35c68a2bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85cf22a4eb27234297118c2d651038ef03f7acc18762dbd0a02cbea35c68a2bf->enter($__internal_85cf22a4eb27234297118c2d651038ef03f7acc18762dbd0a02cbea35c68a2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85cf22a4eb27234297118c2d651038ef03f7acc18762dbd0a02cbea35c68a2bf->leave($__internal_85cf22a4eb27234297118c2d651038ef03f7acc18762dbd0a02cbea35c68a2bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7cf35a79194e7a1dce2542f21564a323a4c6f1efa8cd9ade58b77bd21bb5787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7cf35a79194e7a1dce2542f21564a323a4c6f1efa8cd9ade58b77bd21bb5787->enter($__internal_d7cf35a79194e7a1dce2542f21564a323a4c6f1efa8cd9ade58b77bd21bb5787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d7cf35a79194e7a1dce2542f21564a323a4c6f1efa8cd9ade58b77bd21bb5787->leave($__internal_d7cf35a79194e7a1dce2542f21564a323a4c6f1efa8cd9ade58b77bd21bb5787_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_54b85741b18c3f0db65accab5120d2cdb7ca8e0e6fa4412c56832f35cdbb99bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b85741b18c3f0db65accab5120d2cdb7ca8e0e6fa4412c56832f35cdbb99bc->enter($__internal_54b85741b18c3f0db65accab5120d2cdb7ca8e0e6fa4412c56832f35cdbb99bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_54b85741b18c3f0db65accab5120d2cdb7ca8e0e6fa4412c56832f35cdbb99bc->leave($__internal_54b85741b18c3f0db65accab5120d2cdb7ca8e0e6fa4412c56832f35cdbb99bc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_73606546d7c0916fbd514a0532a9a1f31cdfeffc6bc5bd8e806235b450840065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73606546d7c0916fbd514a0532a9a1f31cdfeffc6bc5bd8e806235b450840065->enter($__internal_73606546d7c0916fbd514a0532a9a1f31cdfeffc6bc5bd8e806235b450840065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_73606546d7c0916fbd514a0532a9a1f31cdfeffc6bc5bd8e806235b450840065->leave($__internal_73606546d7c0916fbd514a0532a9a1f31cdfeffc6bc5bd8e806235b450840065_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

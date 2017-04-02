<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8914226913168dd07c9c7c8253500de453ef3590173cd1d2adf19d21677263d3 extends Twig_Template
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
        $__internal_f0f885d7fd8bb2d3c61f3de6e5941bc6008958eb3ece77178a7d95831118b7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f885d7fd8bb2d3c61f3de6e5941bc6008958eb3ece77178a7d95831118b7c9->enter($__internal_f0f885d7fd8bb2d3c61f3de6e5941bc6008958eb3ece77178a7d95831118b7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0f885d7fd8bb2d3c61f3de6e5941bc6008958eb3ece77178a7d95831118b7c9->leave($__internal_f0f885d7fd8bb2d3c61f3de6e5941bc6008958eb3ece77178a7d95831118b7c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_843c058d9a3e1d5513222388ed64ecac4b0730d4b87051d417dce26579b8fdbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843c058d9a3e1d5513222388ed64ecac4b0730d4b87051d417dce26579b8fdbe->enter($__internal_843c058d9a3e1d5513222388ed64ecac4b0730d4b87051d417dce26579b8fdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_843c058d9a3e1d5513222388ed64ecac4b0730d4b87051d417dce26579b8fdbe->leave($__internal_843c058d9a3e1d5513222388ed64ecac4b0730d4b87051d417dce26579b8fdbe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_af1e20c89e7c79b1aa6f1bc819276e3a9c766c885747bb9f77bc3739cd8d49b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1e20c89e7c79b1aa6f1bc819276e3a9c766c885747bb9f77bc3739cd8d49b9->enter($__internal_af1e20c89e7c79b1aa6f1bc819276e3a9c766c885747bb9f77bc3739cd8d49b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_af1e20c89e7c79b1aa6f1bc819276e3a9c766c885747bb9f77bc3739cd8d49b9->leave($__internal_af1e20c89e7c79b1aa6f1bc819276e3a9c766c885747bb9f77bc3739cd8d49b9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c8f433d504967f30995e261435232e79238c6b45397c2109746a9230fe86db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8f433d504967f30995e261435232e79238c6b45397c2109746a9230fe86db6->enter($__internal_4c8f433d504967f30995e261435232e79238c6b45397c2109746a9230fe86db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4c8f433d504967f30995e261435232e79238c6b45397c2109746a9230fe86db6->leave($__internal_4c8f433d504967f30995e261435232e79238c6b45397c2109746a9230fe86db6_prof);

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

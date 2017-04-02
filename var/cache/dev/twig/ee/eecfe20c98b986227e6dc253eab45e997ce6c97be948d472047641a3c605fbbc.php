<?php

/* @HostAndGuest/experience/Backoffice.html.twig */
class __TwigTemplate_90335c1002c0cb149677896a32cf4be4da081fa0cfcd35987ffed9bf2b3f7762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layoutadmin.html.twig", "@HostAndGuest/experience/Backoffice.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'admin' => array($this, 'block_admin'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layoutadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ac6256a66fd6265e99b57e72b91bf354ff9e77e36d81f7ea27f02e9135cc2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac6256a66fd6265e99b57e72b91bf354ff9e77e36d81f7ea27f02e9135cc2ff->enter($__internal_3ac6256a66fd6265e99b57e72b91bf354ff9e77e36d81f7ea27f02e9135cc2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/experience/Backoffice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ac6256a66fd6265e99b57e72b91bf354ff9e77e36d81f7ea27f02e9135cc2ff->leave($__internal_3ac6256a66fd6265e99b57e72b91bf354ff9e77e36d81f7ea27f02e9135cc2ff_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_b073f6e2e69628ab5c30c70799240f3a8cb8bc9a05cc6cd7bfafb666abdb5d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b073f6e2e69628ab5c30c70799240f3a8cb8bc9a05cc6cd7bfafb666abdb5d7c->enter($__internal_b073f6e2e69628ab5c30c70799240f3a8cb8bc9a05cc6cd7bfafb666abdb5d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <title>
        ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "    </title>
    ";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        
        $__internal_b073f6e2e69628ab5c30c70799240f3a8cb8bc9a05cc6cd7bfafb666abdb5d7c->leave($__internal_b073f6e2e69628ab5c30c70799240f3a8cb8bc9a05cc6cd7bfafb666abdb5d7c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_468b4feddce315112af9430db7e12c08974bcd525268bcb000ef9151faed792c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468b4feddce315112af9430db7e12c08974bcd525268bcb000ef9151faed792c->enter($__internal_468b4feddce315112af9430db7e12c08974bcd525268bcb000ef9151faed792c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_468b4feddce315112af9430db7e12c08974bcd525268bcb000ef9151faed792c->leave($__internal_468b4feddce315112af9430db7e12c08974bcd525268bcb000ef9151faed792c_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4dae18eb46653edb5f887360f4b973813150fe5e487d9d503d8d31f9d382b9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dae18eb46653edb5f887360f4b973813150fe5e487d9d503d8d31f9d382b9cb->enter($__internal_4dae18eb46653edb5f887360f4b973813150fe5e487d9d503d8d31f9d382b9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("night_sky_2/style/style.css"), "html", null, true);
        echo "\" />


    ";
        
        $__internal_4dae18eb46653edb5f887360f4b973813150fe5e487d9d503d8d31f9d382b9cb->leave($__internal_4dae18eb46653edb5f887360f4b973813150fe5e487d9d503d8d31f9d382b9cb_prof);

    }

    // line 13
    public function block_admin($context, array $blocks = array())
    {
        $__internal_17026c9a26a77d341e29f719ff3825da8dd986263520188a8bafdbbf1db579a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17026c9a26a77d341e29f719ff3825da8dd986263520188a8bafdbbf1db579a7->enter($__internal_17026c9a26a77d341e29f719ff3825da8dd986263520188a8bafdbbf1db579a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

        // line 14
        echo "

    <div class=\"sidebar\">
        <h2>Les Expériences</h2>
        <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"\">Fil d'acutalités</a></li>
            <li><a href=\"\">Liste Expériences</a></li>
            <li><a href=\"\">Statistiques</a></li>
        </ul>

        <h4>Dernières Expériences</h4>



    </div>
    <div id=\"content\" class=\"col-md-9\">
        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "    </div>



";
        
        $__internal_17026c9a26a77d341e29f719ff3825da8dd986263520188a8bafdbbf1db579a7->leave($__internal_17026c9a26a77d341e29f719ff3825da8dd986263520188a8bafdbbf1db579a7_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_c83f8944590c2f3c4feb2cb739d7c6f1f364006d717ace9b6f52f46a2d85d0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83f8944590c2f3c4feb2cb739d7c6f1f364006d717ace9b6f52f46a2d85d0a2->enter($__internal_c83f8944590c2f3c4feb2cb739d7c6f1f364006d717ace9b6f52f46a2d85d0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "            ICI LE Back Office
        ";
        
        $__internal_c83f8944590c2f3c4feb2cb739d7c6f1f364006d717ace9b6f52f46a2d85d0a2->leave($__internal_c83f8944590c2f3c4feb2cb739d7c6f1f364006d717ace9b6f52f46a2d85d0a2_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/experience/Backoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 31,  130 => 30,  119 => 33,  117 => 30,  99 => 14,  93 => 13,  82 => 8,  79 => 7,  73 => 6,  59 => 4,  52 => 6,  49 => 5,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layoutadmin.html.twig\" %}
{% block head %}
    <title>
        {% block title %} {{ parent() }} {% endblock %}
    </title>
    {% block stylesheet %}

        <link rel=\"stylesheet\" href=\"{{ asset('night_sky_2/style/style.css') }}\" />


    {% endblock %}
{% endblock %}
{% block admin %}


    <div class=\"sidebar\">
        <h2>Les Expériences</h2>
        <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"\">Fil d'acutalités</a></li>
            <li><a href=\"\">Liste Expériences</a></li>
            <li><a href=\"\">Statistiques</a></li>
        </ul>

        <h4>Dernières Expériences</h4>



    </div>
    <div id=\"content\" class=\"col-md-9\">
        {% block body %}
            ICI LE Back Office
        {% endblock %}
    </div>



{% endblock %}
", "@HostAndGuest/experience/Backoffice.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\experience\\Backoffice.html.twig");
    }
}

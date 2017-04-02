<?php

/* HostAndGuestBundle:experience:Backoffice.html.twig */
class __TwigTemplate_85dfea8216fc6b7cfbebe723844eb427acd1f1df327e023b3142bd5a75ec4daa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layoutadmin.html.twig", "HostAndGuestBundle:experience:Backoffice.html.twig", 1);
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
        $__internal_dc61d6eb42090035a461ac4612d1e2a8db4acaf6ed930e1aaf4a3f41c916074c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc61d6eb42090035a461ac4612d1e2a8db4acaf6ed930e1aaf4a3f41c916074c->enter($__internal_dc61d6eb42090035a461ac4612d1e2a8db4acaf6ed930e1aaf4a3f41c916074c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:experience:Backoffice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc61d6eb42090035a461ac4612d1e2a8db4acaf6ed930e1aaf4a3f41c916074c->leave($__internal_dc61d6eb42090035a461ac4612d1e2a8db4acaf6ed930e1aaf4a3f41c916074c_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_25c47537957722a0ece5a71b02c6576f9607bf1d74834efc4184a3e2b0809986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c47537957722a0ece5a71b02c6576f9607bf1d74834efc4184a3e2b0809986->enter($__internal_25c47537957722a0ece5a71b02c6576f9607bf1d74834efc4184a3e2b0809986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_25c47537957722a0ece5a71b02c6576f9607bf1d74834efc4184a3e2b0809986->leave($__internal_25c47537957722a0ece5a71b02c6576f9607bf1d74834efc4184a3e2b0809986_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_43ca1ca0bf80c83c7c796bc45b8bc48f5f8e391d845c511823ea94602e1a640c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ca1ca0bf80c83c7c796bc45b8bc48f5f8e391d845c511823ea94602e1a640c->enter($__internal_43ca1ca0bf80c83c7c796bc45b8bc48f5f8e391d845c511823ea94602e1a640c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_43ca1ca0bf80c83c7c796bc45b8bc48f5f8e391d845c511823ea94602e1a640c->leave($__internal_43ca1ca0bf80c83c7c796bc45b8bc48f5f8e391d845c511823ea94602e1a640c_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a9e81b3a01351e2273a5646cb885f42ebdbc41dc0dc5baa1c3328cb0fcff24c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e81b3a01351e2273a5646cb885f42ebdbc41dc0dc5baa1c3328cb0fcff24c1->enter($__internal_a9e81b3a01351e2273a5646cb885f42ebdbc41dc0dc5baa1c3328cb0fcff24c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("night_sky_2/style/style.css"), "html", null, true);
        echo "\" />


    ";
        
        $__internal_a9e81b3a01351e2273a5646cb885f42ebdbc41dc0dc5baa1c3328cb0fcff24c1->leave($__internal_a9e81b3a01351e2273a5646cb885f42ebdbc41dc0dc5baa1c3328cb0fcff24c1_prof);

    }

    // line 13
    public function block_admin($context, array $blocks = array())
    {
        $__internal_49da9bd41fb4796322769be9ff78f439001d1067392b68952eeafd439b13f465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49da9bd41fb4796322769be9ff78f439001d1067392b68952eeafd439b13f465->enter($__internal_49da9bd41fb4796322769be9ff78f439001d1067392b68952eeafd439b13f465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin"));

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
        
        $__internal_49da9bd41fb4796322769be9ff78f439001d1067392b68952eeafd439b13f465->leave($__internal_49da9bd41fb4796322769be9ff78f439001d1067392b68952eeafd439b13f465_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5c0bd1d3162a438706933f1bf9f3de3929cef53fd7823ec4e5e3d030c5621cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c0bd1d3162a438706933f1bf9f3de3929cef53fd7823ec4e5e3d030c5621cb->enter($__internal_d5c0bd1d3162a438706933f1bf9f3de3929cef53fd7823ec4e5e3d030c5621cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "            ICI LE Back Office
        ";
        
        $__internal_d5c0bd1d3162a438706933f1bf9f3de3929cef53fd7823ec4e5e3d030c5621cb->leave($__internal_d5c0bd1d3162a438706933f1bf9f3de3929cef53fd7823ec4e5e3d030c5621cb_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:experience:Backoffice.html.twig";
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
", "HostAndGuestBundle:experience:Backoffice.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/experience/Backoffice.html.twig");
    }
}

<?php

/* HostAndGuestBundle:experience:WelcomeFrontOffice.html.twig */
class __TwigTemplate_11848cd536b915deec0827b09e4bb1f04843f60b548b12174c963bef90b4b8bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@HostAndGuest/layout.html.twig", "HostAndGuestBundle:experience:WelcomeFrontOffice.html.twig", 2);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'contenu' => array($this, 'block_contenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@HostAndGuest/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84ed1c89020238d1559513a231b7f7f27772da8ea4f879b817cc4c8b20999ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ed1c89020238d1559513a231b7f7f27772da8ea4f879b817cc4c8b20999ec8->enter($__internal_84ed1c89020238d1559513a231b7f7f27772da8ea4f879b817cc4c8b20999ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:experience:WelcomeFrontOffice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84ed1c89020238d1559513a231b7f7f27772da8ea4f879b817cc4c8b20999ec8->leave($__internal_84ed1c89020238d1559513a231b7f7f27772da8ea4f879b817cc4c8b20999ec8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f379fc1da43c345302f1080471c73dabea587ae4b26b79fcced6ac630f2ccc50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f379fc1da43c345302f1080471c73dabea587ae4b26b79fcced6ac630f2ccc50->enter($__internal_f379fc1da43c345302f1080471c73dabea587ae4b26b79fcced6ac630f2ccc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <title>
        ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "    </title>
    ";
        // line 7
        $this->displayBlock('stylesheet', $context, $blocks);
        
        $__internal_f379fc1da43c345302f1080471c73dabea587ae4b26b79fcced6ac630f2ccc50->leave($__internal_f379fc1da43c345302f1080471c73dabea587ae4b26b79fcced6ac630f2ccc50_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b88bca241d633808a2bce50cfd2198654ff9fb2e18e6305ac226032b75d6a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b88bca241d633808a2bce50cfd2198654ff9fb2e18e6305ac226032b75d6a1e->enter($__internal_5b88bca241d633808a2bce50cfd2198654ff9fb2e18e6305ac226032b75d6a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_5b88bca241d633808a2bce50cfd2198654ff9fb2e18e6305ac226032b75d6a1e->leave($__internal_5b88bca241d633808a2bce50cfd2198654ff9fb2e18e6305ac226032b75d6a1e_prof);

    }

    // line 7
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d0a9f9b162a1e51f283c80ae30c8e986e1277c44407ba0596a05dfc792d54ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a9f9b162a1e51f283c80ae30c8e986e1277c44407ba0596a05dfc792d54ddd->enter($__internal_d0a9f9b162a1e51f283c80ae30c8e986e1277c44407ba0596a05dfc792d54ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 8
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("night_sky_2/style/style.css"), "html", null, true);
        echo "\" />


    ";
        
        $__internal_d0a9f9b162a1e51f283c80ae30c8e986e1277c44407ba0596a05dfc792d54ddd->leave($__internal_d0a9f9b162a1e51f283c80ae30c8e986e1277c44407ba0596a05dfc792d54ddd_prof);

    }

    // line 14
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5fe3f3754956860260a58d7dfc96c793450960391f76b68cf02f6ed400fadcfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe3f3754956860260a58d7dfc96c793450960391f76b68cf02f6ed400fadcfb->enter($__internal_5fe3f3754956860260a58d7dfc96c793450960391f76b68cf02f6ed400fadcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 15
        echo "


    <div id=\"content\" class=\"col-md-9\">
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "    </div>



";
        
        $__internal_5fe3f3754956860260a58d7dfc96c793450960391f76b68cf02f6ed400fadcfb->leave($__internal_5fe3f3754956860260a58d7dfc96c793450960391f76b68cf02f6ed400fadcfb_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea0fa1d34dc2272a2b60f6ec6fb14f96316b674aab5a3dba9b326ea9d814cc34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0fa1d34dc2272a2b60f6ec6fb14f96316b674aab5a3dba9b326ea9d814cc34->enter($__internal_ea0fa1d34dc2272a2b60f6ec6fb14f96316b674aab5a3dba9b326ea9d814cc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "           Welcome User
        ";
        
        $__internal_ea0fa1d34dc2272a2b60f6ec6fb14f96316b674aab5a3dba9b326ea9d814cc34->leave($__internal_ea0fa1d34dc2272a2b60f6ec6fb14f96316b674aab5a3dba9b326ea9d814cc34_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:experience:WelcomeFrontOffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 20,  118 => 19,  107 => 22,  105 => 19,  99 => 15,  93 => 14,  82 => 9,  79 => 8,  73 => 7,  59 => 5,  52 => 7,  49 => 6,  47 => 5,  44 => 4,  38 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"@HostAndGuest/layout.html.twig\" %}
{% block head %}
    <title>
        {% block title %} {{ parent() }} {% endblock %}
    </title>
    {% block stylesheet %}

        <link rel=\"stylesheet\" href=\"{{ asset('night_sky_2/style/style.css') }}\" />


    {% endblock %}
{% endblock %}
{% block contenu %}



    <div id=\"content\" class=\"col-md-9\">
        {% block body %}
           Welcome User
        {% endblock %}
    </div>



{% endblock %}", "HostAndGuestBundle:experience:WelcomeFrontOffice.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/experience/WelcomeFrontOffice.html.twig");
    }
}

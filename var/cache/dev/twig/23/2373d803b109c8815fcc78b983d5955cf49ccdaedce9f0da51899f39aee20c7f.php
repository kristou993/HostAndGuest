<?php

/* @HostAndGuest/experience/WelcomeFrontOffice.html.twig */
class __TwigTemplate_96158c642b1b951ee1ea6097c013c3bc4e7cae16b4b13f757228adeb22e74ef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@HostAndGuest/layout.html.twig", "@HostAndGuest/experience/WelcomeFrontOffice.html.twig", 2);
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
        $__internal_686d47695ecc432334126abdaa6ef02d910004de01a157ecb680fcee8aa7ae13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686d47695ecc432334126abdaa6ef02d910004de01a157ecb680fcee8aa7ae13->enter($__internal_686d47695ecc432334126abdaa6ef02d910004de01a157ecb680fcee8aa7ae13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/experience/WelcomeFrontOffice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_686d47695ecc432334126abdaa6ef02d910004de01a157ecb680fcee8aa7ae13->leave($__internal_686d47695ecc432334126abdaa6ef02d910004de01a157ecb680fcee8aa7ae13_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a1a6eb9cbe4690ee9fd7e873b975ecae00024d41b14d32aa354e53787f0c81e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1a6eb9cbe4690ee9fd7e873b975ecae00024d41b14d32aa354e53787f0c81e->enter($__internal_5a1a6eb9cbe4690ee9fd7e873b975ecae00024d41b14d32aa354e53787f0c81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5a1a6eb9cbe4690ee9fd7e873b975ecae00024d41b14d32aa354e53787f0c81e->leave($__internal_5a1a6eb9cbe4690ee9fd7e873b975ecae00024d41b14d32aa354e53787f0c81e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8e0707780e71f6352da4ec3e695119c1c60c533d0dff943c42668b8e0a1d638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e0707780e71f6352da4ec3e695119c1c60c533d0dff943c42668b8e0a1d638->enter($__internal_e8e0707780e71f6352da4ec3e695119c1c60c533d0dff943c42668b8e0a1d638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_e8e0707780e71f6352da4ec3e695119c1c60c533d0dff943c42668b8e0a1d638->leave($__internal_e8e0707780e71f6352da4ec3e695119c1c60c533d0dff943c42668b8e0a1d638_prof);

    }

    // line 7
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_362027aeca09dbc46bf32d9aca620d70c67c71af80482c14b8542cd653674d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362027aeca09dbc46bf32d9aca620d70c67c71af80482c14b8542cd653674d61->enter($__internal_362027aeca09dbc46bf32d9aca620d70c67c71af80482c14b8542cd653674d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 8
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("night_sky_2/style/style.css"), "html", null, true);
        echo "\" />


    ";
        
        $__internal_362027aeca09dbc46bf32d9aca620d70c67c71af80482c14b8542cd653674d61->leave($__internal_362027aeca09dbc46bf32d9aca620d70c67c71af80482c14b8542cd653674d61_prof);

    }

    // line 14
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_a6d9092d9e9de2109b7de02141fb345f9b42b142910244a1f3dddc7795b27073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d9092d9e9de2109b7de02141fb345f9b42b142910244a1f3dddc7795b27073->enter($__internal_a6d9092d9e9de2109b7de02141fb345f9b42b142910244a1f3dddc7795b27073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 15
        echo "


    <div id=\"content\" class=\"col-md-9\">
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "    </div>



";
        
        $__internal_a6d9092d9e9de2109b7de02141fb345f9b42b142910244a1f3dddc7795b27073->leave($__internal_a6d9092d9e9de2109b7de02141fb345f9b42b142910244a1f3dddc7795b27073_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_c75644e77e74812b2d288c767d71c21526972ac81c7c3234f1897e03f3df5ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75644e77e74812b2d288c767d71c21526972ac81c7c3234f1897e03f3df5ea0->enter($__internal_c75644e77e74812b2d288c767d71c21526972ac81c7c3234f1897e03f3df5ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "           Welcome User
        ";
        
        $__internal_c75644e77e74812b2d288c767d71c21526972ac81c7c3234f1897e03f3df5ea0->leave($__internal_c75644e77e74812b2d288c767d71c21526972ac81c7c3234f1897e03f3df5ea0_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/experience/WelcomeFrontOffice.html.twig";
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



{% endblock %}", "@HostAndGuest/experience/WelcomeFrontOffice.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\experience\\WelcomeFrontOffice.html.twig");
    }
}

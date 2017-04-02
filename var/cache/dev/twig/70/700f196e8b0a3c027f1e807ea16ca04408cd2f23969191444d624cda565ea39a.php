<?php

/* HostAndGuestBundle:experience:helli.html.twig */
class __TwigTemplate_fc6d5e29d8cadc4e876a6cd56c9a7b3b3962866fe630d9ee7a9941ed0c1fe0c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@HostAndGuest/layout.html.twig", "HostAndGuestBundle:experience:helli.html.twig", 2);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@HostAndGuest/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85d9493146a1b0f7b83395eb195c710171f242dd82caf0c854ec7fae89658e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d9493146a1b0f7b83395eb195c710171f242dd82caf0c854ec7fae89658e89->enter($__internal_85d9493146a1b0f7b83395eb195c710171f242dd82caf0c854ec7fae89658e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:experience:helli.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85d9493146a1b0f7b83395eb195c710171f242dd82caf0c854ec7fae89658e89->leave($__internal_85d9493146a1b0f7b83395eb195c710171f242dd82caf0c854ec7fae89658e89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6dfc812258ded11cdeb221c48d240913dc667d76eaea771002362f5fd7b7dbeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dfc812258ded11cdeb221c48d240913dc667d76eaea771002362f5fd7b7dbeb->enter($__internal_6dfc812258ded11cdeb221c48d240913dc667d76eaea771002362f5fd7b7dbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6dfc812258ded11cdeb221c48d240913dc667d76eaea771002362f5fd7b7dbeb->leave($__internal_6dfc812258ded11cdeb221c48d240913dc667d76eaea771002362f5fd7b7dbeb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a8f98b3c5fb577481cdb21658379406a6227f68a080c08159324fa343e279e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8f98b3c5fb577481cdb21658379406a6227f68a080c08159324fa343e279e1->enter($__internal_8a8f98b3c5fb577481cdb21658379406a6227f68a080c08159324fa343e279e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_8a8f98b3c5fb577481cdb21658379406a6227f68a080c08159324fa343e279e1->leave($__internal_8a8f98b3c5fb577481cdb21658379406a6227f68a080c08159324fa343e279e1_prof);

    }

    // line 7
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_92de9f974455e2bbed21235f2139ac3c1af70ad397a828d3ce70d146f8633782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92de9f974455e2bbed21235f2139ac3c1af70ad397a828d3ce70d146f8633782->enter($__internal_92de9f974455e2bbed21235f2139ac3c1af70ad397a828d3ce70d146f8633782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 8
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("night_sky_2/style/style.css"), "html", null, true);
        echo "\" />

    ";
        
        $__internal_92de9f974455e2bbed21235f2139ac3c1af70ad397a828d3ce70d146f8633782->leave($__internal_92de9f974455e2bbed21235f2139ac3c1af70ad397a828d3ce70d146f8633782_prof);

    }

    // line 13
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_3923ff5ebb13c058909fd7670e7b6aa372ed1bf5b3eec194b4aa76794c3f6f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3923ff5ebb13c058909fd7670e7b6aa372ed1bf5b3eec194b4aa76794c3f6f90->enter($__internal_3923ff5ebb13c058909fd7670e7b6aa372ed1bf5b3eec194b4aa76794c3f6f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 14
        echo "
<h1> WELCOME TO HOST AND GUEST</h1>

";
        
        $__internal_3923ff5ebb13c058909fd7670e7b6aa372ed1bf5b3eec194b4aa76794c3f6f90->leave($__internal_3923ff5ebb13c058909fd7670e7b6aa372ed1bf5b3eec194b4aa76794c3f6f90_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:experience:helli.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 14,  91 => 13,  81 => 9,  78 => 8,  72 => 7,  58 => 5,  51 => 7,  48 => 6,  46 => 5,  43 => 4,  37 => 3,  11 => 2,);
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

<h1> WELCOME TO HOST AND GUEST</h1>

{% endblock %}", "HostAndGuestBundle:experience:helli.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/experience/helli.html.twig");
    }
}

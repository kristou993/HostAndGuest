<?php

/* @HostAndGuest/experience/helli.html.twig */
class __TwigTemplate_274ea7d58ccc0bca0b1c779afd85c6aa01f974c42ee2a4c080ee6e7dbcfd0d48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@HostAndGuest/layout.html.twig", "@HostAndGuest/experience/helli.html.twig", 2);
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
        $__internal_6c3990ca7479a3279f6f53afec54c79700d4aba1dc7a73814993e704ecca3e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3990ca7479a3279f6f53afec54c79700d4aba1dc7a73814993e704ecca3e16->enter($__internal_6c3990ca7479a3279f6f53afec54c79700d4aba1dc7a73814993e704ecca3e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/experience/helli.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c3990ca7479a3279f6f53afec54c79700d4aba1dc7a73814993e704ecca3e16->leave($__internal_6c3990ca7479a3279f6f53afec54c79700d4aba1dc7a73814993e704ecca3e16_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54b2b03fd8c4a13e0835cfb84e9454656a3453c3faeb0f3eb312c805089902b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b2b03fd8c4a13e0835cfb84e9454656a3453c3faeb0f3eb312c805089902b7->enter($__internal_54b2b03fd8c4a13e0835cfb84e9454656a3453c3faeb0f3eb312c805089902b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_54b2b03fd8c4a13e0835cfb84e9454656a3453c3faeb0f3eb312c805089902b7->leave($__internal_54b2b03fd8c4a13e0835cfb84e9454656a3453c3faeb0f3eb312c805089902b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9055c5c463f771b3a585d0df012ce170e0be1702bc3b4d5a939632fd6c254b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9055c5c463f771b3a585d0df012ce170e0be1702bc3b4d5a939632fd6c254b05->enter($__internal_9055c5c463f771b3a585d0df012ce170e0be1702bc3b4d5a939632fd6c254b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_9055c5c463f771b3a585d0df012ce170e0be1702bc3b4d5a939632fd6c254b05->leave($__internal_9055c5c463f771b3a585d0df012ce170e0be1702bc3b4d5a939632fd6c254b05_prof);

    }

    // line 7
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ab2e83aba47641a904bca9e8e119f3f524a5ee8167c41361b4d607c7bea240d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2e83aba47641a904bca9e8e119f3f524a5ee8167c41361b4d607c7bea240d5->enter($__internal_ab2e83aba47641a904bca9e8e119f3f524a5ee8167c41361b4d607c7bea240d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 8
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("night_sky_2/style/style.css"), "html", null, true);
        echo "\" />

    ";
        
        $__internal_ab2e83aba47641a904bca9e8e119f3f524a5ee8167c41361b4d607c7bea240d5->leave($__internal_ab2e83aba47641a904bca9e8e119f3f524a5ee8167c41361b4d607c7bea240d5_prof);

    }

    // line 13
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_ccdac551c7c2163fe75e6d4a41d257e51f791316dd944d7af40e29a3431a0862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccdac551c7c2163fe75e6d4a41d257e51f791316dd944d7af40e29a3431a0862->enter($__internal_ccdac551c7c2163fe75e6d4a41d257e51f791316dd944d7af40e29a3431a0862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 14
        echo "
<h1> WELCOME TO HOST AND GUEST</h1>

";
        
        $__internal_ccdac551c7c2163fe75e6d4a41d257e51f791316dd944d7af40e29a3431a0862->leave($__internal_ccdac551c7c2163fe75e6d4a41d257e51f791316dd944d7af40e29a3431a0862_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/experience/helli.html.twig";
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

{% endblock %}", "@HostAndGuest/experience/helli.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\experience\\helli.html.twig");
    }
}

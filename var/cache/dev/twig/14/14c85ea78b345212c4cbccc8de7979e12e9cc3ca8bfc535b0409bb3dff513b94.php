<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_9e5eb416d8ac50431484dbd5714dc457df2abed7475524e9b2a7854539bf3e22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@HostAndGuest/layout3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd0c16aa36cc843f64b1da54f3b39393409526981ab893f4bc09039659198389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0c16aa36cc843f64b1da54f3b39393409526981ab893f4bc09039659198389->enter($__internal_fd0c16aa36cc843f64b1da54f3b39393409526981ab893f4bc09039659198389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd0c16aa36cc843f64b1da54f3b39393409526981ab893f4bc09039659198389->leave($__internal_fd0c16aa36cc843f64b1da54f3b39393409526981ab893f4bc09039659198389_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_a8faca54130b654172d686f47db45ed2b01d3680a511ba04ce6f5aa66f0138d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8faca54130b654172d686f47db45ed2b01d3680a511ba04ce6f5aa66f0138d8->enter($__internal_a8faca54130b654172d686f47db45ed2b01d3680a511ba04ce6f5aa66f0138d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "
    ";
        // line 6
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "

";
        
        $__internal_a8faca54130b654172d686f47db45ed2b01d3680a511ba04ce6f5aa66f0138d8->leave($__internal_a8faca54130b654172d686f47db45ed2b01d3680a511ba04ce6f5aa66f0138d8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@HostAndGuest/layout3.html.twig\" %}


{% block contenu %}

    {{ include('@FOSUser/Security/login_content.html.twig') }}

{% endblock  %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Security\\login.html.twig");
    }
}

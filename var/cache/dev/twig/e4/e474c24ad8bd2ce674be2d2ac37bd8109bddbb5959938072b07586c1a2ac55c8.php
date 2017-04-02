<?php

/* @HostAndGuest/experience/ListeExperience.html.twig */
class __TwigTemplate_c2e194eaccbaaca56d184a865e4a7d1cbd972bb68fcad2c5a3d30e9df2abd73c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HostAndGuestBundle:experience:FrontOffice.html.twig", "@HostAndGuest/experience/ListeExperience.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HostAndGuestBundle:experience:FrontOffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_042eeae9701d28e9b485c46d74f6aca3a86c3a196162dd0e5f36feef0d84ad18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042eeae9701d28e9b485c46d74f6aca3a86c3a196162dd0e5f36feef0d84ad18->enter($__internal_042eeae9701d28e9b485c46d74f6aca3a86c3a196162dd0e5f36feef0d84ad18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/experience/ListeExperience.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_042eeae9701d28e9b485c46d74f6aca3a86c3a196162dd0e5f36feef0d84ad18->leave($__internal_042eeae9701d28e9b485c46d74f6aca3a86c3a196162dd0e5f36feef0d84ad18_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b655a4048888afe0b226eae619407aed7c1891171afca773da247a12caa29138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b655a4048888afe0b226eae619407aed7c1891171afca773da247a12caa29138->enter($__internal_b655a4048888afe0b226eae619407aed7c1891171afca773da247a12caa29138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1> ICI se trouvera la fil d'actualités</h1>



        ";
        
        $__internal_b655a4048888afe0b226eae619407aed7c1891171afca773da247a12caa29138->leave($__internal_b655a4048888afe0b226eae619407aed7c1891171afca773da247a12caa29138_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/experience/ListeExperience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"HostAndGuestBundle:experience:FrontOffice.html.twig\" %}


{% block body %}
<h1> ICI se trouvera la fil d'actualités</h1>



        {% endblock %}", "@HostAndGuest/experience/ListeExperience.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\experience\\ListeExperience.html.twig");
    }
}

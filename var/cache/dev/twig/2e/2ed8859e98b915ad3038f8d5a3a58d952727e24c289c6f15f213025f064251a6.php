<?php

/* @HostAndGuest/Group/show.html.twig */
class __TwigTemplate_f5ec12bf48ea9b0a6c45c1c8e4156bc99f8056629d27b72b42dae3345cada377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@HostAndGuest/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b85e777717086d01e90de29a372590639c8a1aa2b6499ec5912240e89d7b4e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85e777717086d01e90de29a372590639c8a1aa2b6499ec5912240e89d7b4e17->enter($__internal_b85e777717086d01e90de29a372590639c8a1aa2b6499ec5912240e89d7b4e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b85e777717086d01e90de29a372590639c8a1aa2b6499ec5912240e89d7b4e17->leave($__internal_b85e777717086d01e90de29a372590639c8a1aa2b6499ec5912240e89d7b4e17_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0fae9acaff6150d744e982b0952d9d522f55ce1cfe0daecca706953e1e2ce05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fae9acaff6150d744e982b0952d9d522f55ce1cfe0daecca706953e1e2ce05->enter($__internal_f0fae9acaff6150d744e982b0952d9d522f55ce1cfe0daecca706953e1e2ce05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@HostAndGuest/Group/show.html.twig", 4)->display($context);
        
        $__internal_f0fae9acaff6150d744e982b0952d9d522f55ce1cfe0daecca706953e1e2ce05->leave($__internal_f0fae9acaff6150d744e982b0952d9d522f55ce1cfe0daecca706953e1e2ce05_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@HostAndGuest/Group/show.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Group\\show.html.twig");
    }
}

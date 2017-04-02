<?php

/* @HostAndGuest/Group/new.html.twig */
class __TwigTemplate_c251058d0885b7cb1b6c7ad8dcf6ebcd34550bd631bb9a2a47450728dd158566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@HostAndGuest/Group/new.html.twig", 1);
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
        $__internal_151cf1745a817b20fee263da5ad9b9c3463f9279cffde8ca27c7bbbfb39f7d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151cf1745a817b20fee263da5ad9b9c3463f9279cffde8ca27c7bbbfb39f7d99->enter($__internal_151cf1745a817b20fee263da5ad9b9c3463f9279cffde8ca27c7bbbfb39f7d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HostAndGuest/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_151cf1745a817b20fee263da5ad9b9c3463f9279cffde8ca27c7bbbfb39f7d99->leave($__internal_151cf1745a817b20fee263da5ad9b9c3463f9279cffde8ca27c7bbbfb39f7d99_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92ae5f230e5daa0843c142e37ba7e903ece505b88929c27cbe9ddf70ae0ac671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ae5f230e5daa0843c142e37ba7e903ece505b88929c27cbe9ddf70ae0ac671->enter($__internal_92ae5f230e5daa0843c142e37ba7e903ece505b88929c27cbe9ddf70ae0ac671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@HostAndGuest/Group/new.html.twig", 4)->display($context);
        
        $__internal_92ae5f230e5daa0843c142e37ba7e903ece505b88929c27cbe9ddf70ae0ac671->leave($__internal_92ae5f230e5daa0843c142e37ba7e903ece505b88929c27cbe9ddf70ae0ac671_prof);

    }

    public function getTemplateName()
    {
        return "@HostAndGuest/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@HostAndGuest/Group/new.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Group\\new.html.twig");
    }
}

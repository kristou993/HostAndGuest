<?php

/* HostAndGuestBundle:Default:index.html.twig */
class __TwigTemplate_7dd2f9e673a7d43d612d6ee69dfb2b1497ce2468868d8157f21c96dff3cfdad0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_575404bbc2550bb6e3d59bf4e08141cbac1753b6cd98f946b714b5ea9011e3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575404bbc2550bb6e3d59bf4e08141cbac1753b6cd98f946b714b5ea9011e3b2->enter($__internal_575404bbc2550bb6e3d59bf4e08141cbac1753b6cd98f946b714b5ea9011e3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_575404bbc2550bb6e3d59bf4e08141cbac1753b6cd98f946b714b5ea9011e3b2->leave($__internal_575404bbc2550bb6e3d59bf4e08141cbac1753b6cd98f946b714b5ea9011e3b2_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "HostAndGuestBundle:Default:index.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Default/index.html.twig");
    }
}

<?php

/* HostAndGuestBundle:Default:index.html.twig */
class __TwigTemplate_9f135353d155cebd28de729c674837cd2f7606361fc69cb8deeb4a989cdeee4a extends Twig_Template
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
        $__internal_a8fe55650e51c41797fdc040ce200732c364a8620ae7c1abbdfddf8f778502f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8fe55650e51c41797fdc040ce200732c364a8620ae7c1abbdfddf8f778502f4->enter($__internal_a8fe55650e51c41797fdc040ce200732c364a8620ae7c1abbdfddf8f778502f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_a8fe55650e51c41797fdc040ce200732c364a8620ae7c1abbdfddf8f778502f4->leave($__internal_a8fe55650e51c41797fdc040ce200732c364a8620ae7c1abbdfddf8f778502f4_prof);

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
", "HostAndGuestBundle:Default:index.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle\\Resources\\views\\Default\\index.html.twig");
    }
}

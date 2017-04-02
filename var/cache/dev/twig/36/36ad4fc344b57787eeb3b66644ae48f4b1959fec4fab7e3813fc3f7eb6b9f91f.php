<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9ecc0ecc2010322822e9e390e1515c894ccc2f4f6925ecafc897c1ffe006f56f extends Twig_Template
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
        $__internal_264a5db7fabb0e4bfade7a5eefb2428bf4267fcd905bfbdf0eb9ac30092c1f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264a5db7fabb0e4bfade7a5eefb2428bf4267fcd905bfbdf0eb9ac30092c1f53->enter($__internal_264a5db7fabb0e4bfade7a5eefb2428bf4267fcd905bfbdf0eb9ac30092c1f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_264a5db7fabb0e4bfade7a5eefb2428bf4267fcd905bfbdf0eb9ac30092c1f53->leave($__internal_264a5db7fabb0e4bfade7a5eefb2428bf4267fcd905bfbdf0eb9ac30092c1f53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

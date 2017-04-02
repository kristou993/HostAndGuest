<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ee0c5afedd8b8f65e07e24fa5cbd62275ac572532de41fbe4f7725c4e54bd318 extends Twig_Template
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
        $__internal_db1ceaa5bfd204503d3c9090e3ff927609fdc21fcf8d7f6e930d1e712b4df298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1ceaa5bfd204503d3c9090e3ff927609fdc21fcf8d7f6e930d1e712b4df298->enter($__internal_db1ceaa5bfd204503d3c9090e3ff927609fdc21fcf8d7f6e930d1e712b4df298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_db1ceaa5bfd204503d3c9090e3ff927609fdc21fcf8d7f6e930d1e712b4df298->leave($__internal_db1ceaa5bfd204503d3c9090e3ff927609fdc21fcf8d7f6e930d1e712b4df298_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\HostAndGuest\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

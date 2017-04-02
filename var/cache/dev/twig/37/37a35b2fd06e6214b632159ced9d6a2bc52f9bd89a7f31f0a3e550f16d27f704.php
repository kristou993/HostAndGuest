<?php

/* HostAndGuestBundle:Security:login.html.twig */
class __TwigTemplate_58fdb07931782521803decee7b2bfa489240be62286a193fedacd50194093a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HostAndGuest/layout3.html.twig", "HostAndGuestBundle:Security:login.html.twig", 1);
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
        $__internal_964b26ea04f7357b1c59e58b1239cd312db38d137e8ecdd8cdc11fb5bd16be93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964b26ea04f7357b1c59e58b1239cd312db38d137e8ecdd8cdc11fb5bd16be93->enter($__internal_964b26ea04f7357b1c59e58b1239cd312db38d137e8ecdd8cdc11fb5bd16be93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HostAndGuestBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_964b26ea04f7357b1c59e58b1239cd312db38d137e8ecdd8cdc11fb5bd16be93->leave($__internal_964b26ea04f7357b1c59e58b1239cd312db38d137e8ecdd8cdc11fb5bd16be93_prof);

    }

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_e94c10876b11c783c36095f239721b164b79eb855465b7191fd9c9f60f1861c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94c10876b11c783c36095f239721b164b79eb855465b7191fd9c9f60f1861c5->enter($__internal_e94c10876b11c783c36095f239721b164b79eb855465b7191fd9c9f60f1861c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 5
        echo "
    ";
        // line 6
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "

";
        
        $__internal_e94c10876b11c783c36095f239721b164b79eb855465b7191fd9c9f60f1861c5->leave($__internal_e94c10876b11c783c36095f239721b164b79eb855465b7191fd9c9f60f1861c5_prof);

    }

    public function getTemplateName()
    {
        return "HostAndGuestBundle:Security:login.html.twig";
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
", "HostAndGuestBundle:Security:login.html.twig", "C:\\wamp64\\www\\HostAndGuest\\src\\HostAndGuestBundle/Resources/views/Security/login.html.twig");
    }
}

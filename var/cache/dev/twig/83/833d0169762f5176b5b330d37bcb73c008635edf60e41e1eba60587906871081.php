<?php

/* base.html.twig */
class __TwigTemplate_e2b5f13b686e9c19b9c6b0a430767b408b853976fd029742f27e329ef3866cd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c18b0a9c763915c36e610eed653eb47eea3bba7ff367b4f81439e609a3c171e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18b0a9c763915c36e610eed653eb47eea3bba7ff367b4f81439e609a3c171e9->enter($__internal_c18b0a9c763915c36e610eed653eb47eea3bba7ff367b4f81439e609a3c171e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c18b0a9c763915c36e610eed653eb47eea3bba7ff367b4f81439e609a3c171e9->leave($__internal_c18b0a9c763915c36e610eed653eb47eea3bba7ff367b4f81439e609a3c171e9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fc1a368a903eaeed5817ad734f330712729d35463bbc4637dd2f5c3aa770526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc1a368a903eaeed5817ad734f330712729d35463bbc4637dd2f5c3aa770526->enter($__internal_5fc1a368a903eaeed5817ad734f330712729d35463bbc4637dd2f5c3aa770526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5fc1a368a903eaeed5817ad734f330712729d35463bbc4637dd2f5c3aa770526->leave($__internal_5fc1a368a903eaeed5817ad734f330712729d35463bbc4637dd2f5c3aa770526_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_933780a76c00a3f032d1843700a18987cd60cb9d5d7f3b4063bd8ea74f191807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933780a76c00a3f032d1843700a18987cd60cb9d5d7f3b4063bd8ea74f191807->enter($__internal_933780a76c00a3f032d1843700a18987cd60cb9d5d7f3b4063bd8ea74f191807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_933780a76c00a3f032d1843700a18987cd60cb9d5d7f3b4063bd8ea74f191807->leave($__internal_933780a76c00a3f032d1843700a18987cd60cb9d5d7f3b4063bd8ea74f191807_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_68c8e9a0197a4313c38fb17854eb396be30de0c7561fbb9127d6a8c83b259a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c8e9a0197a4313c38fb17854eb396be30de0c7561fbb9127d6a8c83b259a12->enter($__internal_68c8e9a0197a4313c38fb17854eb396be30de0c7561fbb9127d6a8c83b259a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_68c8e9a0197a4313c38fb17854eb396be30de0c7561fbb9127d6a8c83b259a12->leave($__internal_68c8e9a0197a4313c38fb17854eb396be30de0c7561fbb9127d6a8c83b259a12_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_305d9ebda83b325ed444cf90f4923d8e0db1af1f1d3a9cb0e8f81a67125f9d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305d9ebda83b325ed444cf90f4923d8e0db1af1f1d3a9cb0e8f81a67125f9d4a->enter($__internal_305d9ebda83b325ed444cf90f4923d8e0db1af1f1d3a9cb0e8f81a67125f9d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_305d9ebda83b325ed444cf90f4923d8e0db1af1f1d3a9cb0e8f81a67125f9d4a->leave($__internal_305d9ebda83b325ed444cf90f4923d8e0db1af1f1d3a9cb0e8f81a67125f9d4a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\HostAndGuest\\app\\Resources\\views\\base.html.twig");
    }
}

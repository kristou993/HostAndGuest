<?php

/* ::base.html.twig */
class __TwigTemplate_dd960a620ef1f8a03668b24fc8d44efdbbb306f65e222e8981550052119709fe extends Twig_Template
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
        $__internal_384fcee04ebb8ab9d4e12daac930d92604200b14af6e226ed174582473fe89a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384fcee04ebb8ab9d4e12daac930d92604200b14af6e226ed174582473fe89a6->enter($__internal_384fcee04ebb8ab9d4e12daac930d92604200b14af6e226ed174582473fe89a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_384fcee04ebb8ab9d4e12daac930d92604200b14af6e226ed174582473fe89a6->leave($__internal_384fcee04ebb8ab9d4e12daac930d92604200b14af6e226ed174582473fe89a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd1bab917268920f0e271aab831d5da6d1fc1b7b606b58ace0b8ba61669b869b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1bab917268920f0e271aab831d5da6d1fc1b7b606b58ace0b8ba61669b869b->enter($__internal_bd1bab917268920f0e271aab831d5da6d1fc1b7b606b58ace0b8ba61669b869b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bd1bab917268920f0e271aab831d5da6d1fc1b7b606b58ace0b8ba61669b869b->leave($__internal_bd1bab917268920f0e271aab831d5da6d1fc1b7b606b58ace0b8ba61669b869b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05b36313f491023eaed89bc4b9a8f39d26df99088700f816ae2adf77eeaa7e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b36313f491023eaed89bc4b9a8f39d26df99088700f816ae2adf77eeaa7e26->enter($__internal_05b36313f491023eaed89bc4b9a8f39d26df99088700f816ae2adf77eeaa7e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_05b36313f491023eaed89bc4b9a8f39d26df99088700f816ae2adf77eeaa7e26->leave($__internal_05b36313f491023eaed89bc4b9a8f39d26df99088700f816ae2adf77eeaa7e26_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9ab16390630b72e4cff92d636a8153ab7b49978b15ba5c431195823a02401f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ab16390630b72e4cff92d636a8153ab7b49978b15ba5c431195823a02401f5->enter($__internal_f9ab16390630b72e4cff92d636a8153ab7b49978b15ba5c431195823a02401f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9ab16390630b72e4cff92d636a8153ab7b49978b15ba5c431195823a02401f5->leave($__internal_f9ab16390630b72e4cff92d636a8153ab7b49978b15ba5c431195823a02401f5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12204b046162382e87bcf6b1511bb40194b1aa79c286c09f7e14af505061554a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12204b046162382e87bcf6b1511bb40194b1aa79c286c09f7e14af505061554a->enter($__internal_12204b046162382e87bcf6b1511bb40194b1aa79c286c09f7e14af505061554a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_12204b046162382e87bcf6b1511bb40194b1aa79c286c09f7e14af505061554a->leave($__internal_12204b046162382e87bcf6b1511bb40194b1aa79c286c09f7e14af505061554a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp64\\www\\HostAndGuest\\app/Resources\\views/base.html.twig");
    }
}

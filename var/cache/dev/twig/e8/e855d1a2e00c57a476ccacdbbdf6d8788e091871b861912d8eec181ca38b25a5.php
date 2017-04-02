<?php

/* base.html.twig */
class __TwigTemplate_2e37b36e595e5a8979eb67b2a75c7dd150e8fbdcc01d57dcbbda4d20956cbbdb extends Twig_Template
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
        $__internal_3db111beb10c3133e1b8d95501bdbef2aeef3ebe4b3e6cc01832603843b4b8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db111beb10c3133e1b8d95501bdbef2aeef3ebe4b3e6cc01832603843b4b8a6->enter($__internal_3db111beb10c3133e1b8d95501bdbef2aeef3ebe4b3e6cc01832603843b4b8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3db111beb10c3133e1b8d95501bdbef2aeef3ebe4b3e6cc01832603843b4b8a6->leave($__internal_3db111beb10c3133e1b8d95501bdbef2aeef3ebe4b3e6cc01832603843b4b8a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48d739680c7467da11ced29e1531b2e753ec8ba1d3b52c3ccd5817fc3f124b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d739680c7467da11ced29e1531b2e753ec8ba1d3b52c3ccd5817fc3f124b66->enter($__internal_48d739680c7467da11ced29e1531b2e753ec8ba1d3b52c3ccd5817fc3f124b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_48d739680c7467da11ced29e1531b2e753ec8ba1d3b52c3ccd5817fc3f124b66->leave($__internal_48d739680c7467da11ced29e1531b2e753ec8ba1d3b52c3ccd5817fc3f124b66_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c484dae12f73a8800c214c2b4ee948cece652138445348d048011737b4b8ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c484dae12f73a8800c214c2b4ee948cece652138445348d048011737b4b8ef9->enter($__internal_8c484dae12f73a8800c214c2b4ee948cece652138445348d048011737b4b8ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8c484dae12f73a8800c214c2b4ee948cece652138445348d048011737b4b8ef9->leave($__internal_8c484dae12f73a8800c214c2b4ee948cece652138445348d048011737b4b8ef9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4674475b15b3859b297f38f50a94eade57ee9267ccd449df0559bb207ffc227c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4674475b15b3859b297f38f50a94eade57ee9267ccd449df0559bb207ffc227c->enter($__internal_4674475b15b3859b297f38f50a94eade57ee9267ccd449df0559bb207ffc227c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4674475b15b3859b297f38f50a94eade57ee9267ccd449df0559bb207ffc227c->leave($__internal_4674475b15b3859b297f38f50a94eade57ee9267ccd449df0559bb207ffc227c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a56b6051dab8fab1c628a22ed56ec478fc1904da2f76f5107cdf12ff356efe74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56b6051dab8fab1c628a22ed56ec478fc1904da2f76f5107cdf12ff356efe74->enter($__internal_a56b6051dab8fab1c628a22ed56ec478fc1904da2f76f5107cdf12ff356efe74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a56b6051dab8fab1c628a22ed56ec478fc1904da2f76f5107cdf12ff356efe74->leave($__internal_a56b6051dab8fab1c628a22ed56ec478fc1904da2f76f5107cdf12ff356efe74_prof);

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
